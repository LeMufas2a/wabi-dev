<?php

namespace App\Repositories\Orders;

use App\Coupons;
use App\Order;
use App\Restorant as Vendor;
use App\Items;
use App\Models\ServiceBookingsLogs;
use App\Models\BookingsSlots;
use App\Models\BookedService;
use App\Models\ServiceItem;
use App\Models\Variants;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Notifications\OrderNotification;
use App\Events\NewOrder as PusherNewOrder;
use App\Events\OrderAcceptedByAdmin;

class BaseOrderRepository extends Controller
{

    /**
     * @var Request request - The request made
     */
    public $request;

    /**
     * @var Vendor vendor - The vendor
     */
    public $vendor;

    /**
     * @var Order order - The order
     */
    public $order;

    /**
     * @var string expedition - Deliver - 1, PickUp -2, Dine in -3
     */
    public $expedition;

    /**
     * @var bool hasPayment
     */
    public $hasPayment;

    /**
     * @var bool isStripe
     */
    public $isStripe;

    /**
     * @var bool status
     */
    public $status=true;

    /**
     * @var bool isNewOrder
     */
    public $isNewOrder=true;

    /**
     * @var string errorMessage - Deliver, DineIn, PickUp
     */
    public $errorMessage="";

    /**
     * @var Redirect paymentRedirect
     */
    public $paymentRedirect=null;

     /**
     * @var bool isMobileOrder
     */
    public $isMobileOrder=false;


    /**
     * @var string redirectLink
     */
    public $redirectLink;

    public function __construct($vendor_id,$request,$expedition,$hasPayment,$isStripe){
        $this->request=$request;
        $this->expedition=$expedition;
        $this->hasPayment=$hasPayment;
        $this->isStripe=$isStripe;

        //Set the Vendor
        $this->vendor = Vendor::findOrFail($vendor_id);
    }

    

    public function constructOrder(){
        
        //Create the order 
        $this->createOrder();

        //Set Items
        $this->setItems();

        //Set Comment
        $this->setComment();

        //Calculate fees
        $this->calculateFees();

    }

    public function validateOrder(){
        $validator = Validator::make(['order_price'=>$this->order->order_price], [
            'order_price'=>['numeric','min:'.$this->vendor->minimum]
        ]);
        if($validator->fails()){
            $this->invalidateOrder();
        }
        return $validator;
    }

    public function invalidateOrder(){
        $this->status=false;
        $this->order->delete();
    }

    public function updateOrder(){
        //Store it if not stored yet, otherwise update it
        $this->order->update();
    }

    public function finalizeOrder(){
    }

    private function createOrder(){
        
        if($this->order==null){
            $this->order=new Order;
            $this->order->restorant_id=$this->vendor->id;
            $this->order->comment="";
            $this->order->payment_method=$this->request->payment_method;
            $this->order->payment_status="unpaid";

            $expeditionsTypes=['delivery'=>1,'pickup'=>2,'dinein'=>3]; //1- delivery 2 - pickup 3-dinein
            $this->order->delivery_method=$expeditionsTypes[$this->expedition];  

            //Client
            if(auth()->user()){
                $this->order->client_id=auth()->user()->id;
            }

            $this->order->order_price=0;
            $this->order->vatvalue=0;
            
            //Save order
            $this->order->save();
            
            $this->order->md=md5($this->order->id);
            $this->order->update();

            //Save order custom fields
            $this->order->setMultipleConfig($this->request->customFields);


        }else{
            //Order is already initialized - in case of continues ordering
            $this->isNewOrder=false;
        }
    }
    
    private function setItems(){
        
        
        // dd($this->request->items);
        // dd(request()->session());

        $item_type = '';
        $booking_id = null;
        $service_from = null;
        $service_slot_from = null;
        $service_to = null;
        $service_slot_to = null;
        $sess_arr = request()->session()->get('session_arr');

        foreach ($this->request->items as $key => $item) {

            if(request()->session()->get('item_type')){
                $item_type = request()->session()->get('item_type');
            }

            // if(request()->session()->get('booking_id')){
            //     $booking_id = (int)request()->session()->get('booking_id');
            // }
             
            // dd((int)$booking_id);
            //Obtain the item

            if($item_type == 'services'){
                $theItem = ServiceItem::findOrFail($item['id']);
            }
            else{
                $theItem = Items::findOrFail($item['id']);
            }

            // dd($theItem);
            // Now deduct 1 value from the column total_bookings_allowed in ServiceBookingsLogs 
            // and 1 from BookingsSlots

            // dd($sess_arr);
            // $search = array_search($item['id'],$sess_arr);
            // dd($search);
            foreach($sess_arr as $key=>$value){
                if($value['service_id'] == $item['id']){
                    $booking_id = $value['booking_id'];
                    $service_from = $value['service_from'];
                    $service_to = $value['service_to'];
                    $service_slot_from = $value['service_slot_from'];
                    $service_slot_to = $value['service_slot_to'];
                }
            }
            // dd($sess_arr);
            $logs = \App\Models\ServiceBookingsLogs::find($booking_id);
            // dd($logs);
            if($logs){
                $val = $logs->total_bookings_allowed;
                $logs->total_bookings_allowed = $val - 1;
                $logs->save();
            }
            // dd($logs);

            // if(request()->session()->get('service_from')){
            //     $service_from = request()->session()->get('service_from');
            // }

            // if(request()->session()->get('service_to')){
            //     $service_to = request()->session()->get('service_to');
            // }
            
            // if(request()->session()->get('service_slot_from')){
            //     $service_slot_from = request()->session()->get('service_slot_from');
            // }
            
            // if(request()->session()->get('service_slot_to')){
            //     $service_slot_to = request()->session()->get('service_slot_to');
            // }
            
            $slots = BookingsSlots::where('total_bookings_idFk', '=', $booking_id)
            ->where('service_from','=',$service_slot_from)
            ->where('service_to','=',$service_slot_to)
            ->get();

            // dd($this->order->id);
            
            
            $av = $slots[0]->available_bookings;
            $slots[0]->available_bookings = $av - 1;
            $slots[0]->update();
            
            // Make entry in the booked_services table
            // so that it can be fetched from the 
            // calendar
            
            
            $booked = new BookedService();
            $booked->booking_slot_idFk = $slots[0]->id;
            $booked->order_id = $this->order->id;
            
            $booked->save();
            
            // dd($booked);

            // Here forget the session values as the order has been placed and
            // ready to be move forward
            
            session()->forget('session_arr');
            

            

            // dd($slots);
            //List of extras
            $extras = [];
            
            //The price of the item or variant
            if($item_type == 'services'){
                $itemSelectedPrice = $theItem->service_price;

            }
            else{
                $itemSelectedPrice = $theItem->price;
            }
            
            // dd($item['variant']);
            // Find the variant
            $variantName = '';
            if ($item['variant']) {
                //Find the variant
                $variant = Variants::findOrFail($item['variant']);
                $itemSelectedPrice = $variant->price;
                $variantName = $variant->optionsList;
            }
            // dd($item['extrasSelected']);
           //Find the extras
            foreach ($item['extrasSelected'] as $key => $extra) {
                $theExtra = $theItem->extras()->findOrFail($extra['id']);
                $itemSelectedPrice+=$theExtra->price;
                array_push($extras, $theExtra->name.' + '.money($theExtra->price, config('settings.cashier_currency'), config('settings.do_convertion')));
            }
                
            //Total vat on this item
            $totalCalculatedVAT = $item['qty'] * ($theItem->vat > 0?$itemSelectedPrice * ($theItem->vat / 100):0);
            

            
                    
            $this->order->items()->attach($item['id'], [
                'qty'=>$item['qty'], 
                'extras'=>json_encode($extras), 
                'vat'=>$theItem->vat, 
                'booking_id'=>$booking_id, 
                'vatvalue'=>$totalCalculatedVAT, 
                'variant_name'=>$variantName, 
                'variant_price'=>$itemSelectedPrice
            ]);
        } 

        
        //After we have updated the list of items, we need to update the order price
        $order_price=0;
        $total_order_vat=0;
        foreach ($this->order->items()->get() as $key => $item) {
            $order_price+=$item->pivot->qty*$item->pivot->variant_price;
            $total_order_vat+=$item->pivot->vatvalue;
        }
        $this->order->order_price=$order_price;
        $this->order->vatvalue=$total_order_vat;
        
        //Set coupons
        if($this->request->has('coupon_code')&&strlen($this->request->coupon_code)>0){
            $coupon = Coupons::where(['code' => $this->request->coupon_code])->where('restaurant_id',$this->vendor->id)->get()->first();
            if($coupon){
                $deduct=$coupon->calculateDeduct($this->order->order_price);
                if($deduct){
                    $coupon->decrement('limit_to_num_uses');
                    $coupon->increment('used_count');
                    $this->order->coupon=$this->request->coupon_code;
                    if($deduct>$this->order->order_price){
                        $this->order->discount=$order_price;

                        //In this case, order should be considered as paid one
                        //$this->order->payment_status = 'paid';
                    }else{
                        $this->order->discount=$deduct;
                    }
                    
                }
            }
        }
        
        
        //Update the order with the item
        $this->order->update();
    }

    private function setComment(){
       
        $comment = $this->request->comment ? strip_tags($this->request->comment.'') : '';
        $this->order->comment = $this->order->comment.' '.$comment;
        $this->order->update();
    }

    private function calculateFees(){
        $this->order->static_fee=$this->vendor->static_fee;
        $this->order->fee=$this->vendor->fee;
        $this->order->fee_value=($this->vendor->fee/100)*($this->order->order_price_with_discount-$this->vendor->static_fee);
        $this->order->update();
    }

    public function notifyAdmin(){
        //Does nothing
    }

    public function notifyOwner(){
        //Inform owner - via email, sms or db
        $this->vendor->user->notify((new OrderNotification($this->order))->locale(strtolower(config('settings.app_locale'))));

        //Notify owner with pusher
        if (strlen(config('broadcasting.connections.pusher.secret')) > 4) {
            event(new PusherNewOrder($this->order, __('notifications_notification_neworder')));
        }

        //Dispatch Approved by admin event
        OrderAcceptedByAdmin::dispatch($this->order);
    }
}