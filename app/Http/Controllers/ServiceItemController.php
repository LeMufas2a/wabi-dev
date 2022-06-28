<?php

namespace App\Http\Controllers;

use App\Models\ServiceCategory;
use App\Models\ServiceItem;
use App\Models\ServiceItemLong;
use App\Models\ServiceHours;
use App\Models\ServiceBookingsLogs;
use App\Models\BookingsSlots;
use App\Extras;
use App\Imports\ItemsImport;
use App\Items;
use App\Plans;
use App\Hours;
use App\Restorant;
use Illuminate\Http\Request;
use Image;
use Maatwebsite\Excel\Facades\Excel;
use App\Services\ConfChanger;
use Akaunting\Module\Facade as Module;
use App\Models\Allergens;

use DB;
use Slim;
use DateTime;
use Carbon\Carbon;

class ServiceItemController extends Controller
{
    private $imagePath = 'uploads/service_items/';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        if (auth()->user()->hasRole('owner')) {

            $canAdd = auth()->user()->restorant->getPlanAttribute()['canAddNewItems'];

            //Change language
            ConfChanger::switchLanguage(auth()->user()->restorant);

            if (isset($_GET['remove_lang']) && auth()->user()->restorant->localmenus()->count() > 1) {
                $localMenuToDelete=auth()->user()->restorant->localmenus()->where('language', $_GET['remove_lang'])->first();
                $isMenuToDeleteIsDefault=$localMenuToDelete->default.""=="1";
                $localMenuToDelete->delete();
                
                $nextLanguageModel = auth()->user()->restorant->localmenus()->first();
                $nextLanguage = $nextLanguageModel->language;
                app()->setLocale($nextLanguage);
                session(['applocale_change' => $nextLanguage]);

                if($isMenuToDeleteIsDefault){
                    $nextLanguageModel->default=1;
                    $nextLanguageModel->update();
                }
            }

            if(isset($_GET['make_default_lang'])){
                $newDefault=auth()->user()->restorant->localmenus()->where('language', $_GET['make_default_lang'])->first();
                $oldDefault=auth()->user()->restorant->localmenus()->where('default', "1")->first();
                
                if($oldDefault&&$oldDefault->language!=$_GET['make_default_lang']){
                    $oldDefault->default=0;
                    $oldDefault->update();
                }
                $newDefault->default=1;
                $newDefault->update();
                
                
                
            }

            $currentEnvLanguage = isset(config('config.env')[2]['fields'][0]['data'][config('app.locale')]) ? config('config.env')[2]['fields'][0]['data'][config('app.locale')] : 'UNKNOWN';


             //Change currency
            ConfChanger::switchCurrency(auth()->user()->restorant);
            $defaultLng=auth()->user()->restorant->localmenus->where('default','1')->first();
 
             
            $service_categories = array();
            
            //Since 2.1.7 - there is sorting. 
            $service_categories = auth()->user()->restorant->service_categories;
            
             
            if(!empty($service_categories)){
                //If first item order starts with 0
                if($service_categories->first() && $service_categories->first()->order_index==0){
                    ServiceCategory::setNewOrder($service_categories->pluck('id')->toArray());
     
                    //Re-get categories
                    $service_categories=auth()->user()->restorant->service_categories;
                }
               
            }
            
            $working_hours = array();
            $empty_days = 0;
            //  Get the hours to be displayed in the instant booking
            $hours = Hours::where('restorant_id',auth()->user()->restaurant_id)->get()->toArray();
            // dd($hours);
            if(!empty($hours)){
                $working_hours = $hours[0];
            }
            
            //Generate days columns
            $hoursRange = ['id'];
            for ($i = 0; $i < 7; $i++) {
                $from = $i.'_from';
                $to = $i.'_to';

                array_push($hoursRange, $from);
                array_push($hoursRange, $to);
            }

            
            $shiftsData = ServiceHours::where(['restorant_id' => auth()->user()->restaurant_id])->get($hoursRange);
            
            $shifts=[];
            
            foreach ($shiftsData as $key => $hours) {
                $shiftId=$hours->id;
                $workingHours=$hours->toArray();
                unset($workingHours['id']);
                $shifts[$shiftId]=$workingHours;
            }

            // dd($working_hours);

            if( empty($working_hours["0_from"])  && empty($working_hours["0_to"]) ){
                $empty_days++;
            }

            if( empty($working_hours["1_from"])  && empty($working_hours["1_to"]) ){
                $empty_days++;
            }

            if( empty($working_hours["2_from"])  && empty($working_hours["2_to"]) ){
                $empty_days++;
            }

            if( empty($working_hours["3_from"])  && empty($working_hours["3_to"]) ){
                $empty_days++;
            }

            if( empty($working_hours["4_from"])  && empty($working_hours["4_to"]) ){
                $empty_days++;
            }

            if( empty($working_hours["5_from"])  && empty($working_hours["5_to"]) ){
                $empty_days++;
            }

            if( empty($working_hours["6_from"])  && empty($working_hours["6_to"]) ){
                $empty_days++;
            }

            if($working_hours["0_from"] != null || $working_hours["0_to"] != null){
                $working_hours["Monday_from"] = $working_hours["0_from"];
                $working_hours["Monday_to"] = $working_hours["0_to"];
            }
            
            if($working_hours["1_from"] != null || $working_hours["1_to"] != null){
                $working_hours["Tuesday_from"] = $working_hours["1_from"];
                $working_hours["Tuesday_to"] = $working_hours["1_to"];
            }
            
            if($working_hours["2_from"] != null || $working_hours["2_to"] != null){
                $working_hours["Wednesday_from"] = $working_hours["2_from"];
                $working_hours["Wednesday_to"] = $working_hours["2_to"];
            }   
            
            if($working_hours["3_from"] != null || $working_hours["3_to"] != null){
                $working_hours["Thursday_from"] = $working_hours["3_from"];
                $working_hours["Thursday_to"] = $working_hours["3_to"];
            }
            
            if($working_hours["4_from"] != null || $working_hours["4_to"] != null){
                $working_hours["Friday_from"] = $working_hours["4_from"];
                $working_hours["Friday_to"] = $working_hours["4_to"];
            }
            
            if($working_hours["5_from"] != null || $working_hours["5_to"] != null){
                $working_hours["Saturday_from"] = $working_hours["5_from"];
                $working_hours["Saturday_to"] = $working_hours["5_to"];
            }
            
            if($working_hours["6_from"] != null || $working_hours["6_to"] != null){
                $working_hours["Sunday_from"] = $working_hours["6_from"];
                $working_hours["Sunday_to"] = $working_hours["6_to"];
            }
            
            unset($working_hours["0_from"]);
            unset($working_hours["0_to"]);
            
            unset($working_hours["1_from"]);
            unset($working_hours["1_to"]);
            
            unset($working_hours["2_from"]);
            unset($working_hours["2_to"]);
            
            unset($working_hours["3_from"]);
            unset($working_hours["3_to"]);
            
            unset($working_hours["4_from"]);
            unset($working_hours["4_to"]);
            
            unset($working_hours["5_from"]);
            unset($working_hours["5_to"]);
            
            unset($working_hours["6_from"]);
            unset($working_hours["6_to"]);
            

            // dd($working_hours);
            // dd($working_hours["Monday"]);
            // dd(json_encode($working_hours,true));
            // die;

            return view('service_items.index', [
                'hasMenuPDf'=>Module::has('menupdf'),
                'canAdd'=>$canAdd,
                'working_hours_restaurant'=>$working_hours,
                'empty_days'=>$empty_days,
                'working_hours_json'=> json_encode($working_hours,true) ,
                'categories' => $service_categories,
                'restorant_id' => auth()->user()->restorant->id,
                'currentLanguage'=> $currentEnvLanguage,
                'availableLanguages'=>auth()->user()->restorant->localmenus,
                'defaultLanguage'=>$defaultLng?$defaultLng->language:""
                ]);
        }
        else {
            return redirect()->route('orders.index')->withStatus(__('No Access'));
        }
    }

    public function indexAdmin(Restorant $restorant)
    {
        if (auth()->user()->hasRole('admin')) {
            return view('service_items.index', ['categories' => Restorant::findOrFail($restorant->id)->categories->reverse(), 'restorant_id' => $restorant->id]);
        } else {
            return redirect()->route('orders.index')->withStatus(__('No Access'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $days = array(); // To be used when storing days inside service hours table
        $days = $request->service_available_days;
        // dd($days);

        $service_item = new ServiceItem();
        $service_item->service_name =  strip_tags($request->service_name); 
        $service_item->service_description =  strip_tags($request->service_description); 
        $service_item->service_price =  strip_tags($request->service_price);
        $service_item->service_duration =  strip_tags($request->service_duration);

        // Calculation of No of service bookings available if
        // Service duration is 30 mins. so 60 / 30 = 2 
        // 2 bookings can be made in 1 hour
        
        $duration = strip_tags($request->service_duration);
        
        $bookings_in_one_hour = 60 / $duration;
        
        
        $service_item->service_booking_in_hour = $bookings_in_one_hour;

        if($request->service_available_days){
            $service_item->service_available_days =  strip_tags( implode(', ',$request->service_available_days )); 
        } 
        
        $service_item->service_reservations =  strip_tags($request->service_reservations);
        $service_item->service_hours =  strip_tags($request->service_hours);
        $service_item->service_category_id =  strip_tags($request->category_id);
        

        if($request['service_image']){
        
            $image_to_send = json_decode($request['service_image']);
            $image_to_send = $image_to_send->output->image;

            
            $service_item->service_image = $this->saveImageVersionsUsingSlim(
                $this->imagePath,
                $image_to_send,
                [
                        ['name'=>'large', 'w'=>590, 'h'=>400],
                        ['name'=>'thumbnail','w'=>300,'h'=>300],
                        ['name'=>'medium', 'w'=>295, 'h'=>200],
                        ['name'=>'thumbnail', 'w'=>590, 'h'=>400],
                ]
            );

        }

           
        if($request->service_arrival_date){
            $service_item->service_arrival_date = strip_tags( implode(', ',$request->service_arrival_date ) );
        }
        
        if($request->service_departure_date){
            $service_item->service_departure_date = strip_tags( implode(', ',$request->service_departure_date ) );
        }
        
        $service_item->service_reservation = strip_tags($request->service_days_reservations);
        $service_item->service_category_id =  strip_tags($request->category_id);

        
        if($request->default_hours){
           $service_item->is_default_checked = 1;
        }

        $service_item->service_arrival_time = $request->service_arrival_time; 
        $service_item->service_departure_time = $request->service_departure_time;
            
            
        // Save the booking type
        $service_item->booking_type = $request->service_type;    

        $service_item->save();

        
        $res_id = ServiceCategory::find($request->category_id);
        $res_id = $res_id->restorant_id;
        
        // Total number of hours 
        // between service from and service to
        // if the range is 12:00 to 2:00
        // total hours 2

        $no_of_total_hours = array();

        $bookings_slots_table_data = array();
        
        // Now store the hours
        
        for ($i=0; $i <sizeof($days) ; $i++) { 
            
            $service_hours = new ServiceHours();
            $service_bookings_logs = new ServiceBookingsLogs();

            $service_hours->day = $days[$i];
            $service_hours->service_from_time = $request->service_from_time[$i];
            $service_hours->service_to_time = $request->service_to_time[$i];            
            
            $service_hours->service_item_id = $service_item->id;
            $service_hours->restorant_id = $res_id;

            $service_hours->save();


            // storing service hours id as FK in  Service bookings
            $service_bookings_logs->service_hour_idFk = $service_hours->id;
            
            

            $time1 = strtotime($request->service_from_time[$i]);
            $time2 = strtotime($request->service_to_time[$i]);
            
            $no_of_total_hours[] = abs($time2 - $time1) / 3600;
            
            for($count=0; $count < sizeof($no_of_total_hours); $count++){
           
                $service_bookings_logs->total_bookings_allowed = $no_of_total_hours[$count] * $bookings_in_one_hour;
                $service_bookings_logs->service_from = $request->service_from_time[$count];
                $service_bookings_logs->service_to = $request->service_to_time[$count];
                $service_bookings_logs->service_idFk = $service_item->id;
                $service_bookings_logs->service_hour_idFk = $service_hours->id;
                $service_bookings_logs->restorant_id = $res_id;
                $service_bookings_logs->service_day = $days[$i];
        
                $service_bookings_logs->save();
                
                $total_bookings_per_hour[] = array(
                    // 'service_from' => $request->service_from_time[$count], 
                    // 'service_to' => $request->service_to_time[$count], 
                    // 'total_bookings_allowed' => $no_of_total_hours[$count] * $bookings_in_one_hour
                    'service_from' => $request->service_from_time[$i], 
                    'service_to' => $request->service_to_time[$i], 
                    'total_bookings_allowed' => $no_of_total_hours[$i] * $bookings_in_one_hour,
                    'duration' => (int)$request->service_duration,
                    'booking_logs_id' => $service_bookings_logs->id
                );

            } // Total bookings logs loop

            $bookings_slots_table_data[] = array(
                'service_from' => $request->service_from_time[$i], 
                'service_to' => $request->service_to_time[$i], 
                'total_bookings_allowed' => $no_of_total_hours[$i] * $bookings_in_one_hour,
                'duration' => (int)$request->service_duration
            );

        } // Service Hours store

        $result = array();
        foreach ($total_bookings_per_hour as $key => $value){
            if(!in_array($value, $result))
              $result[$key]=$value;
        }
        $bookings_slots_table_data = $result;
        

        // Now create slots as per duration
        // if duration is 10 mins and time is 12:00 to 2:00 
        // then slots would be 12:00 to 12:10, 12:10 to 12:20 and so on
        $start_of_slot = '';
        $end_of_slot = '';
        
        foreach($bookings_slots_table_data as $arrkey => $slot){

            
            
            $start_of_slot = $slot['service_from'];
            $startTime = date("h:i",strtotime($start_of_slot));
            // echo "service_from:".$slot['service_from'].'<br>';
            //echo "startTime outerLoop:".$startTime.'<br>';
            // echo "startTime outerLoop:".$fromTime.'<br>';
            $outer_loop_start_time = 1;
            for($al=0;$al < $slot['total_bookings_allowed']; $al++){
                
                $book_slots = new BookingsSlots();
                
                if($outer_loop_start_time == 1){
                    $fromTime = date("h:i",strtotime($startTime));
                }
                else{
                    $fromTime = date("h:i",strtotime($fromTime));
                }

                // echo "startTime innerLoop:".$startTime.'<br>';
                // echo "fromTime innerLoop:".$fromTime.'<br>';
                
                $tmp_to = date("h:i",strtotime($fromTime) + ($slot['duration'] * 60));
                $toTime = date("h:i", strtotime($tmp_to));
                
                // echo "fromTime before saving:-".strtotime($fromTime).'<br>';
                // echo "hardcoded time:".strtotime("12:00").'<br>';
                // echo "toTime:-".$toTime.'strtotime(toTime):'.strtotime($toTime).'<br>';
                // echo "fromTime:-<br>";
                // var_dump(strtotime($fromTime));

                $book_slots->service_from = $fromTime;
                $book_slots->service_to = $toTime;
                // $book_slots->total_bookings_idFk = $service_bookings_logs->id;
                $book_slots->total_bookings_idFk = $slot['booking_logs_id'];
                $book_slots->available_bookings = $request->service_reservations;
                $book_slots->service_from_tmstmp = strtotime($fromTime);
                // echo "fromTime after saving:-".strtotime($fromTime).'<br>';
                $book_slots->service_to_tmstmp = strtotime($toTime);
                $book_slots->save();


                $fromTime = $toTime;
                $outer_loop_start_time = 0;

            }
            
        }
        
        // dd($request->all());
        
        return redirect()->route('serviceitems.index')->withStatus(__('Service Item successfully saved.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
    */
    public function edit(ServiceItem $serviceitem)
    {
        
        //if item belongs to owner restorant menu return view
        if (auth()->user()->hasRole('owner') && $serviceitem->category->restorant->id == auth()->user()->restorant->id || auth()->user()->hasRole('admin')) {
            
            $extraViews=[];
            foreach (Module::all() as $key => $module) {
                if(is_array($module->get('menuview'))){
                    foreach ($module->get('menuview') as $key => $menu) {
                       array_push($extraViews,$menu);
                    }
                }
            }
            // $items = ServiceItem::with('category')->get();
            // $items = $items->restorant();
            // dd($serviceitem->category);
            
            $types = (object) array('instant booking'=>'instant booking','long booking'=>'long booking');


            /* Get the hours and days for all the services */
            $service_hours_days = ServiceHours::select('id','day','service_from_time','service_to_time','service_item_id','restorant_id')->where(['service_item_id' => $serviceitem->id])->get();
             
            return view('service_items.edit',
            [
                'extraViews'=>$extraViews,
                'allergens'=>Allergens::where('post_type','allergen')->get(),
                'item' => $serviceitem,
                // 'service_types' => json_encode(array(1=>'instant booking',2=>'long booking'),true) ,
                'service_hours_days'=> $service_hours_days,
                'service_types' => $types ,
                'av_days' => $serviceitem->service_available_days,
                'setup'=>['items'=>$serviceitem->uservariants()->paginate(1000)],
                'restorant' => $serviceitem->category->restorant,
                'categories'=> $serviceitem->category->restorant->service_categories->pluck('name','id'),
                'restorant_id' => $serviceitem->category->restorant->id, ]);
        } else {
            return redirect()->route('service_items.index')->withStatus(__('No Access'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ServiceItem $serviceitem)
    {
        // dd($request->all());
        $serviceitem->service_name =  strip_tags($request->service_name); 
        $serviceitem->service_description =  strip_tags($request->service_description); 
        $serviceitem->service_price =  strip_tags($request->service_price);
        
        $serviceitem->service_duration =  strip_tags($request->service_duration);

        if($request->service_available_days){
            $serviceitem->service_available_days =  strip_tags( implode(', ',$request->service_available_days )); 
        } 
        
        $serviceitem->service_reservations =  strip_tags($request->service_reservations);
        $serviceitem->service_hours =  strip_tags($request->service_hours);
        $serviceitem->service_category_id =  strip_tags($request->category_id);
        

        if($request['service_image']){
        
            $image_to_send = json_decode($request['service_image']);
            $image_to_send = $image_to_send->output->image;

            
            $serviceitem->service_image = $this->saveImageVersionsUsingSlim(
                $this->imagePath,
                $image_to_send,
                [
                        ['name'=>'large', 'w'=>590, 'h'=>400],
                        ['name'=>'thumbnail','w'=>300,'h'=>300],
                        ['name'=>'medium', 'w'=>295, 'h'=>200],
                        ['name'=>'thumbnail', 'w'=>590, 'h'=>400],
                ]
            );

        }

        if($request->service_arrival_date){
            $serviceitem->service_arrival_date = strip_tags( implode(', ',$request->service_arrival_date ) );
        }
        
        if($request->service_departure_date){
            $serviceitem->service_departure_date = strip_tags( implode(', ',$request->service_departure_date ) );
        }
        
        $serviceitem->service_reservation = strip_tags($request->service_days_reservations);
        $serviceitem->service_category_id =  strip_tags($request->category_id);

        
        
        $serviceitem->is_default_checked = $request->service_default_time;
        $serviceitem->service_arrival_time = $request->service_arrival_time; 
        $serviceitem->service_departure_time = $request->service_departure_time;
            
            
        // Save the booking type
        $serviceitem->booking_type = $request->service_type;    

        $serviceitem->update();

        if($request->changed_duration){

            $s_hours = DB::table('hours_services as hs')
            ->select('hs.id','hs.day','hs.service_from_time','hs.service_to_time','hs.service_item_id','hs.restorant_id')
            ->where('hs.service_item_id','=',$serviceitem->id)
            ->get();
    
            foreach($s_hours as $key => $value){
    
                $service_object[] = [
                    'service_create_available_days' => $serviceitem->service_available_days,
                    'service_create_from_time' => $value->service_from_time,
                    'service_create_to_time' => $value->service_to_time,
                    'service_create_id' => $serviceitem->id,
                    'restorant_id' => $value->restorant_id,
                    'service_duration_single' => $request->service_duration,
                    'changed_service_duration' => true,
                    'service_hour_idFk' => $value->id,
                    'service_reservations_single' => $request->service_reservations
                ];
            }
            
            $this->modify_single_service_hour($service_object);
            return redirect()->route('serviceitems.index')->withStatus(__('Modified Hours successfully added.'));
        }


        
        return redirect()->route('serviceitems.index')->withStatus(__('Service Item successfully updated.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service_item = ServiceItem::find($id);
        $service_item->delete();
        return redirect()->route('serviceitems.index')->withStatus(__('Service Item successfully deleted.'));
    }

    public function import(Request $request)
    {

        $restorant = Restorant::findOrFail($request->res_id);

        Excel::import(new ItemsImport($restorant), request()->file('items_excel'));

        redirect()->route('admin.restaurants.index')->withStatus(__('Items successfully imported'));
    }

    public function change(ServiceItem $item, Request $request)
    {
        $item->available = $request->value;
        $item->update();

        return response()->json([
            'data' => [
                'itemAvailable' => $item->available,
            ],
            'status' => true,
            'errMsg' => '',
        ]);
    }

    public function storeExtras(Request $request, ServiceItem $serviceitem)
    {
        // dd($request->all());
        if ($request->extras_id.'' == '') {
            //New
            $extras = new Extras;
            $extras->name = strip_tags($request->extras_name);
            $extras->price = strip_tags($request->extras_price);
            $extras->item_id = $serviceitem->id;
            $extras->service_item_idFk = $serviceitem->id;

            $extras->save();
        } else {
            //Update
            $extras = Extras::where(['id'=>$request->extras_id])->get()->first();
            
            $extras->name = strip_tags($request->extras_name);
            $extras->price = strip_tags($request->extras_price);

            $extras->update();
        }
        
        //For variants
        //Does the item of this extra have item?
        if ($serviceitem->has_variants.'' == 1) {
            //In cas we have variants, we  need to check if this variant is for all variants, or only for selected one
            if ($request->exists('variantsSelector')) {
                $extras->extra_for_all_variants = 0;
                //Now sync the connection
                $extras->variants()->sync($request->variantsSelector);
            } else {
                $extras->extra_for_all_variants = 1;
            }
        } else {
            $extras->extra_for_all_variants = 1;
        }
        $extras->update();
        // dd($serviceitem->has_variants);
        return redirect()->route('serviceitems.edit', ['serviceitem' => $serviceitem, 'restorant' => $serviceitem->service_category->restorant, 'restorant_id' => $serviceitem->service_category->restorant->id])->withStatus(__('Extras successfully added/modified.'));
    }

    public function deleteExtras(ServiceItem $serviceitem, Extras $serviceextras)
    {
        //dd($serviceextras);
        $serviceextras->delete();

        return redirect()->route('serviceitems.edit', ['serviceitem' => $serviceitem, 'restorant' => $serviceitem->service_category->restorant, 'restorant_id' => $serviceitem->service_category->restorant->id])->withStatus(__('Extras successfully deleted.'));
    }

    public function editExtras(Request $request, Items $serviceitem)
    {
        $extras = Extras::where(['id'=>$request->extras_id])->get()->first();

        $extras->name = strip_tags($request->extras_name_edit);
        $extras->price = strip_tags($request->extras_price_edit);

        $extras->update();

        return redirect()->route('serviceitems.edit', ['serviceitem' => $serviceitem, 'restorant' => $serviceitem->service_category->restorant, 'restorant_id' => $serviceitem->service_category->restorant->id])->withStatus(__('Extras successfully updated.'));
    }

    /* 
        Service Hours Methods
        Save single service hour entry
        all are listed here

        Save single service hour is actually an update
        function. When clicked on edit.
    */

    public function save_single_service_hour(Request $request){
        
        // dd($request->all());
        
        $service_hours = ServiceHours::where(['id'=>$request->service_id])->get()->first();
        
        $service_hours->day = $request->service_available_days;
        $service_hours->service_from_time = $request->service_from_time;
        $service_hours->service_to_time = $request->service_to_time;

        
        $change_in_time_or_day = $this->change_in_duration(
                            array(
                                'day'=>$request->service_available_days,
                                'service_from'=>$request->service_from_time,
                                'service_to'=>$request->service_to_time,
                                'service_hour_id'=>$request->service_id,
                                'day_changed'=>$request->day_changed,
                                'time_changed'=>$request->time_changed
                            ));

        if(! $change_in_time_or_day){
            $service_hours->update();
        }

        return redirect()->back()->withStatus(__('Service Hour modified.'));
    }

    // Create a new service hour when edit mode is open
    public function create_single_service_hour(Request $request){
        
        $days = array(); // To be used when storing days inside service hours table
        $days = $request->service_create_available_days;
        
        // dd($days);
        $service_hours =  new ServiceHours();
        
        $service_hours->day = $request->service_create_available_days;
        $service_hours->service_from_time = $request->service_create_from_time;
        $service_hours->service_to_time = $request->service_create_to_time;
        $service_hours->service_item_id = $request->service_create_id;
        $service_hours->restorant_id = $request->restorant_id;
        
        $service_hours->save();


        // Now store the hours duration wise and also 
        // in booking logs and booking slots

        // storing service hours id as FK in  Service bookings

        $duration = strip_tags($request->service_duration_single);
        
        $bookings_in_one_hour = 60 / $duration;
        
        $service_bookings_logs = new ServiceBookingsLogs();

        $service_bookings_logs->service_hour_idFk = $service_hours->id;
            
        $time1 = strtotime($request->service_create_from_time);
        $time2 = strtotime($request->service_create_to_time);
        
        $no_of_total_hours = abs($time2 - $time1) / 3600;
        
        $service_bookings_logs->total_bookings_allowed = $no_of_total_hours * $bookings_in_one_hour;
        $service_bookings_logs->service_from = $request->service_create_from_time;
        $service_bookings_logs->service_to = $request->service_create_to_time;
        $service_bookings_logs->service_idFk = $request->service_create_id;
        $service_bookings_logs->service_hour_idFk = $service_hours->id;
        $service_bookings_logs->restorant_id = $request->restorant_id;
        $service_bookings_logs->service_day = $days;

        $service_bookings_logs->save();
        
        $total_bookings_per_hour[] = array(
            'service_from' => $request->service_create_from_time, 
            'service_to' => $request->service_create_to_time, 
            'total_bookings_allowed' => $no_of_total_hours * $bookings_in_one_hour,
            'duration' => (int)$request->service_duration_single,
            'booking_logs_id' => $service_bookings_logs->id
        );

        $result = array();
        foreach ($total_bookings_per_hour as $key => $value){
            if(!in_array($value, $result))
              $result[$key]=$value;
        }
        $bookings_slots_table_data = $result;
       
        // Now create slots as per duration
        // if duration is 10 mins and time is 12:00 to 2:00 
        // then slots would be 12:00 to 12:10, 12:10 to 12:20 and so on
        $start_of_slot = '';
        $end_of_slot = '';

        foreach($bookings_slots_table_data as $arrkey => $slot){

            $start_of_slot = $slot['service_from'];
            $startTime = date("h:i",strtotime($start_of_slot));
            // echo "service_from:".$slot['service_from'].'<br>';
            // echo "startTime outerLoop:".$startTime.'<br>';
            $outer_loop_start_time = 1;
            for($al=0;$al < $slot['total_bookings_allowed']; $al++){
                
                $book_slots = new BookingsSlots();
                
                if($outer_loop_start_time == 1){
                    $fromTime = date("h:i",strtotime($startTime));
                }
                else{
                    $fromTime = date("h:i",strtotime($fromTime));
                }

                // echo "fromTime innerLoop:".$fromTime.'<br>';
                
                $tmp_to = date("h:i",strtotime($fromTime) + ($slot['duration'] * 60));
                $toTime = date("h:i", strtotime($tmp_to));
                
                // echo "fromTime before saving:-".strtotime($fromTime).'<br>';
                // echo "hardcoded time:".strtotime("01:00").'<br>';
                // echo "toTime:-".$toTime.'strtotime(toTime):'.strtotime($toTime).'<br>';
                // echo "fromTime:-<br>";
                // var_dump(strtotime($fromTime));

                $book_slots->service_from = $fromTime;
                $book_slots->service_to = $toTime;
                // $book_slots->total_bookings_idFk = $service_bookings_logs->id;
                $book_slots->total_bookings_idFk = $slot['booking_logs_id'];
                $book_slots->available_bookings = $request->service_reservations_single;
                $book_slots->service_from_tmstmp = strtotime($fromTime);
                // echo "fromTime after saving:-".strtotime($fromTime).'<br>';
                $book_slots->service_to_tmstmp = strtotime($toTime);
                $book_slots->save();


                $fromTime = $toTime;
                $outer_loop_start_time = 0;


            }
            //dd($book_slots);
            
        }


        return redirect()->back()->withStatus(__('New Service Hour successfully added.'));
    }

    // When the user changes duration
    // in an update method
    // change in duration will make
    /* 
        1 - Change in booking logs
        2-  Change in booking slots
    */
    public function change_in_duration($booking_logs_arr){
        //dd($booking_logs_arr);
        
        $service_from = $booking_logs_arr['service_from'];
        $service_to = $booking_logs_arr['service_to'];
        $day = $booking_logs_arr['day'];
        $service_hour_id = $booking_logs_arr['service_hour_id'];

        // $bookingLogs = ServiceBookingsLogs::where('service_day','=',$day)
        // ->where('service_from','=',$service_from)
        // ->where('service_to','=',$service_to)
        // ->get();
        
        // dd($bookingLogs->count());
        
        // if($bookingLogs->count() > 0){ // means that nothing is changed
        //     return false;
        // }

        // Now timing or days has been changed

        // $s_hours =  ServiceHours::findOrFail($service_hour_id);
        $s_hours =  ServiceHours::where('id', $service_hour_id)->firstOrFail();
        $s_hours->day = $day;
        $s_hours->service_from_time = $service_from;
        $s_hours->service_to_time = $service_to;
        $s_hours->save();
        
        // Now update Booking Logs
        // dd($s_hours->id);
        $booking_logs = ServiceBookingsLogs::where('service_hour_idFk',$s_hours->id)->firstOrFail();
        $booking_logs->service_from = $service_from;
        $booking_logs->service_to = $service_to;
        $booking_logs->service_day = $day;
        $booking_logs->save();

        dd($booking_logs);

        // dd($bookingLogs);

    }


    /* 
        modify single service hour
        Whenever service hour is modified
        Whenever duration is modified

        This method will be used to modify the corresponding
        bookings logs and booking slots
    */

    public function modify_single_service_hour($service_obj){
        
        $days = array(); // To be used when storing days inside service hours table
        
        
        
        // Now store the hours duration wise and also 
        // in booking logs and booking slots

        // storing service hours id as FK in  Service bookings
        for ($i=0; $i <sizeof($service_obj) ; $i++) {

            $duration = strip_tags($service_obj[$i]['service_duration_single']);
            
            $bookings_in_one_hour = 60 / $duration;
            
            // dd($service_bookings_logs[0]->id);
            $time1 = strtotime($service_obj[$i]['service_create_from_time']);
            $time2 = strtotime($service_obj[$i]['service_create_to_time']);
            
            $no_of_total_hours = abs($time2 - $time1) / 3600;
        
        

            
            $service_bookings_logs = ServiceBookingsLogs::where('service_hour_idFk','=',$service_obj[$i]['service_hour_idFk'])->get();
            
            // dd($service_bookings_logs);

            $service_bookings_logs->service_hour_idFk = $service_obj[$i]['service_hour_idFk'];
            $service_bookings_logs->total_bookings_allowed = $no_of_total_hours * $bookings_in_one_hour;
            $service_bookings_logs->service_from = $service_obj[$i]['service_create_from_time'];
            $service_bookings_logs->service_to = $service_obj[$i]['service_create_to_time'];
            $service_bookings_logs->service_idFk = $service_obj[$i]['service_create_id'];
            $service_bookings_logs->restorant_id = $service_obj[$i]['restorant_id'];
            $service_bookings_logs->service_day = $days;
    
            // $service_bookings_logs->update();
            
            $total_bookings_per_hour[] = array(
                'service_from' => $service_obj[$i]['service_create_from_time'], 
                'service_to' => $service_obj[$i]['service_create_to_time'], 
                'total_bookings_allowed' => $no_of_total_hours * $bookings_in_one_hour,
                'duration' => (int)$service_obj[$i]['service_duration_single'],
                'booking_logs_id' => $service_bookings_logs[0]->id
            );

        }


        $result = array();
        foreach ($total_bookings_per_hour as $key => $value){
            if(!in_array($value, $result))
              $result[$key]=$value;
        }
        $bookings_slots_table_data = $result;
       
        // Now create slots as per duration
        // if duration is 10 mins and time is 12:00 to 2:00 
        // then slots would be 12:00 to 12:10, 12:10 to 12:20 and so on
        $start_of_slot = '';
        $end_of_slot = '';
        $all_slots = array();

        $new_duration = $service_obj[0]['service_duration_single'];
        
        foreach($bookings_slots_table_data as $akey => $bslot){
            $all_slots[] = BookingsSlots::where('total_bookings_idFk','=',$bslot['booking_logs_id'])
                ->orWhere('service_from_tmstmp','>=',strtotime($bslot['service_from']))
                ->orWhere('service_to_tmstmp','>=',strtotime($bslot['service_to']))
                ->delete();

                $start_of_slot = $bslot['service_from'];
                $startTime = date("h:i",strtotime($start_of_slot));
                
                $outer_loop_start_time = 1;
                for($al=0;$al < $bslot['total_bookings_allowed']; $al++){
                    
                    $book_slots = new BookingsSlots();
                    
                    if($outer_loop_start_time == 1){
                        $fromTime = date("h:i",strtotime($startTime));
                    }
                    else{
                        $fromTime = date("h:i",strtotime($fromTime));
                    }
    
                    
                    $tmp_to = date("h:i",strtotime($fromTime) + ($new_duration * 60));
                    $toTime = date("h:i", strtotime($tmp_to));
                    
    
                    $book_slots->service_from = $fromTime;
                    $book_slots->service_to = $toTime;
                    $book_slots->total_bookings_idFk = $bslot['booking_logs_id'];
                    $book_slots->available_bookings = $service_obj[0]['service_reservations_single'];
                    $book_slots->service_from_tmstmp = strtotime($fromTime);
                    $book_slots->service_to_tmstmp = strtotime($toTime);
                    $book_slots->save();
                    
                    $fromTime = $toTime;
                    $outer_loop_start_time = 0;
    
    
                }

            
        }
         
        //return redirect()->back()->withStatus(__('Modified Service Hour successfully added.'));
    }

    public function delete_service_hour_single(Request $request,$id){
        
        $service_hour = ServiceHours::find($id);
        
        $booking_logs = ServiceBookingsLogs::where('service_hour_idFk','=',$service_hour->id)->get();
        
        foreach($booking_logs as $key=>$value){
            $slots = BookingsSlots::where('total_bookings_idFk','=',$value->id)->delete();
        }
        
        $booking_logs = ServiceBookingsLogs::where('service_hour_idFk','=',$service_hour->id)->delete();
        
        $service_hour->delete();

        return redirect()->back()->withStatus(__('Service Hour deleted.'));
    }

    public function all_time_slots(Request $request){
        

        $booking_id = $request->booking_id;
        $service_from = $request->service_from;
        $service_to = $request->service_to;
        

        $bookings_slots = array();
        $bookings_slots = DB::table('total_bookings_slots as tbs')
            ->select('tbs.id','tbs.available_bookings','tbs.total_bookings_idFk','tbs.service_from','tbs.service_to','tbs.service_to')
            ->where('tbs.available_bookings','>',0)
            ->where('tbs.total_bookings_idFk','=',$booking_id)
            ->where(function ($query) use ($service_from,$service_to){
                $query->where('tbs.service_from_tmstmp', '>=', strtotime($service_from))
                ->orWhere('tbs.service_to_tmstmp', '<=', strtotime($service_to));
            })
            ->whereBetween('service_from', [$service_from, date("h:i",strtotime($service_to) -1)])
            // ->where('tbs.service_from','>=',"'$service_from'")
            // ->where('tbs.service_to','<=',"'$service_to'")
            // ->orWhere('tbs.service_from_tmstmp','>=',strtotime($service_from))
            // ->orWhere('tbs.service_to_tmstmp','<',strtotime($service_to))
            // ->whereRaw(
            //     "(tbs.service_from_tmstmp >= ? AND tbs.service_to_tmstmp <= ?)", 
            //     [
            //        strtotime($service_from), 
            //        strtotime($service_to)
            //     ]
            //   )
            // ->whereBetween('tbs.service_from_tmstmp', [ strtotime($service_from),strtotime($service_to)])
            // ->whereBetween('tbs.service_to_tmstmp', [ strtotime($service_to)])
            // ->orWhere('tbs.service_to_tmstmp','=',strtotime($service_from))
            // ->where('tbs.service_to','>=',"$service_to")
            ->get();
            // ->toSql();
        // dd($bookings_slots);
        // print_r(json_encode($bookings_slots,true));
        return json_encode($bookings_slots,true);

    }
    
    
    /* 
        Calender Methods
        Fetching values for calender
        loading views 
        all are listed here
    */

    public function calender_main(){

        if (auth()->user()->hasRole('owner')) {

            $instant_services = array();
            $long_services = array();


            
            $services_data = DB::table('hours_services as hs')
            ->join('service_items', 'service_items.id', '=', 'hs.service_item_id')
            ->join('service_categories', 'service_categories.id', '=', 'service_items.service_category_id')
            ->select('hs.day','hs.created_at','hs.service_from_time','hs.service_to_time','hs.service_from_time',
                     'hs.id as hsID','service_items.*','service_categories.name as categoryName')
            ->where('service_items.available','=','1')
            ->whereMonth('hs.created_at', Carbon::now()->month)
            ->get();


            $booked_services = DB::table('booked_services as bs')
            ->join('orders as ord', 'bs.order_id', '=', 'ord.id')
            ->join('total_bookings_slots as tbs', 'bs.booking_slot_idFk', '=', 'tbs.id')
            ->join('services_bookings_logs as sbl', 'sbl.id', '=', 'tbs.total_bookings_idFk')
            ->join('service_items as si', 'si.id', '=', 'sbl.service_idFk')
            ->join('companies as comp', 'comp.id', '=', 'sbl.restorant_id')
            ->join('service_categories as sc', 'sc.id', '=', 'si.service_category_id')
            ->join('order_has_items as ohi', 'ohi.order_id', '=', 'ord.id')
            ->select('bs.id','bs.booking_slot_idFk as bs_slot_id','ord.restorant_id',
                     'ord.order_price','ord.payment_method','ord.payment_status','tbs.id as hsID','tbs.service_from as service_from_time',
                     'tbs.service_to as service_to_time','comp.name as restorantName','sc.name as categoryName','si.*',
                     'sbl.service_day','bs.created_at','ord.id as orderID','bs.order_id as bs_order_id','ohi.service_booked_on as serviceBookedOn')
            ->where('ohi.is_service_item','=', 1)
            ->where('ord.restorant_id','=', auth()->user()->restorant->id)
            // ->whereMonth('bs.created_at', Carbon::now()->month)
            ->whereMonth('ohi.service_booked_on', Carbon::now()->month)
            ->get();

            // dd(date("Y-m-d H:i:s",strtotime("12:00")));
            // dd($booked_services);
            /* 
                Compile the data of services in JSON format and as per the events column needed in the calender plugin 
                title
                color
                start
                end

            */

            // dd($services_data);
            $services_json_object = array();

            // foreach($services_data as $key => $value){
            foreach($booked_services as $key => $value){
                
                // echo $value->service_name.'--';
                $services_json_object[$key]['title'] = $value->service_name;
                $services_json_object[$key]['id'] = $value->hsID;
                $services_json_object[$key]['category_name'] = $value->categoryName;
                $services_json_object[$key]['service_description'] = $value->service_description;
                $services_json_object[$key]['service_available_days'] = $value->service_available_days;
                $services_json_object[$key]['service_image'] = $value->service_image;

                if($value->booking_type == 'instant booking'){
                    $services_json_object[$key]['color'] = '#FA3309'; 
                    $services_json_object[$key]['start'] = date('Y-m-d',strtotime($value->created_at));
                    $services_json_object[$key]['end'] = date('Y-m-d',strtotime($value->created_at));
                }
                else{
                    // dd("here");
                    $services_json_object[$key]['color'] = '#09FAD6';
                    $services_json_object[$key]['start'] = date('Y-m-d',strtotime($value->created_at)); 
                    $services_json_object[$key]['end']   = date('Y-m-d',strtotime($value->created_at)); 
                }
                
            }
            
            
            return view('calendars.index', [
                'services_data'=> json_encode($services_json_object,true),
                'categories' => '',
                'restorant_id' => auth()->user()->restorant->id,
                'currentLanguage'=> '',
                'availableLanguages'=>auth()->user()->restorant->localmenus,
                'defaultLanguage'=>""
                ]);
        }
        else {
            return redirect()->route('orders.index')->withStatus(__('No Access'));
        }
    }

    public function get_services_hours(){

        if (auth()->user()->hasRole('owner')) {

            $instant_services = array();
            $long_services = array();


            
            $services_data = DB::table('hours_services as hs')
            ->join('service_items', 'service_items.id', '=', 'hs.service_item_id')
            ->join('service_categories', 'service_categories.id', '=', 'service_items.service_category_id')
            ->select('hs.day','hs.created_at','hs.service_from_time','hs.service_to_time','hs.service_from_time','hs.id as hsID','service_items.*','service_categories.name as categoryName')
            ->where('service_items.available','=','1')
            ->whereMonth('hs.created_at', Carbon::now()->month)
            ->get();
            
            /* 
                Compile the data of services in JSON format and as per the events column needed in the calender plugin 
                title
                color
                start
                end

            */

            
            $services_json_object = array();

            foreach($services_data as $key => $value){
                
                // echo $value->service_name.'--';
                $services_json_object[$key]['title'] = $value->service_name;

                if($value->booking_type == 'instant booking'){
                    $services_json_object[$key]['color'] = '#FA3309'; 
                    $services_json_object[$key]['start'] = date('Y-m-d',strtotime($value->created_at));
                    $services_json_object[$key]['end'] = date('Y-m-d',strtotime($value->created_at));
                }
                else{
                    $services_json_object[$key]['color'] = '#09FAD6';
                    $services_json_object[$key]['start'] = $value->service_arrival_date;
                    $services_json_object[$key]['end'] = $value->service_departure_date;
                }
                
            }
            
            echo json_encode($services_json_object,true);
            
            
        }
        else {
            return redirect()->route('orders.index')->withStatus(__('No Access'));
        }

    }
        
       
         
} // end class
