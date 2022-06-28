<?php

namespace App\Listeners;

use App\Restorant;
use App\Models\ServiceItem;
use App\Models\ServiceHours;
use App\Models\ServiceBookingsLogs;
use App\Models\BookingsSlots;
use App\Events\ServiceHoursEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ServiceHoursListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\ServiceHoursEvent  $event
     * @return void
     */
    public function handle(ServiceHoursEvent $event)
    { 


        // Posted working hours
        $working_hours = $event->hour;
        
        if($working_hours["0_from"] != null || $working_hours["0_to"] != null){
            $working_hours["Monday"] = array(
                "service_from_time" => $working_hours["0_from"],
                "service_to_time" => $working_hours["0_to"],
            ); 
        }
        
        if($working_hours["1_from"] != null || $working_hours["1_to"] != null){
            
            $working_hours["Tuesday"] = array(
                "service_from_time" => $working_hours["1_from"],
                "service_to_time" => $working_hours["1_to"],
            );

        }
        
        if($working_hours["2_from"] != null || $working_hours["2_to"] != null){
            $working_hours["Wednesday"] = array(
                "service_from_time" => $working_hours["2_from"],
                "service_to_time" => $working_hours["2_to"],
            );
        }   
        
        if($working_hours["3_from"] != null || $working_hours["3_to"] != null){

            $working_hours["Thursday"] = array(
                "service_from_time" => $working_hours["3_from"],
                "service_to_time" => $working_hours["3_to"],
            );

        }
        
        if($working_hours["4_from"] != null || $working_hours["4_to"] != null){
            
            $working_hours["Friday"] = array(
                "service_from_time" => $working_hours["4_from"],
                "service_to_time" => $working_hours["4_to"],
            );

        }
        
        if($working_hours["5_from"] != null || $working_hours["5_to"] != null){
            
            $working_hours["Saturday"] = array(
                "service_from_time" => $working_hours["5_from"],
                "service_to_time" => $working_hours["5_to"],
            );
            
        }
        
        if($working_hours["6_from"] != null || $working_hours["6_to"] != null){

            $working_hours["Sunday"] = array(
                "service_from_time" => $working_hours["6_from"],
                "service_to_time" => $working_hours["6_to"],
            );

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

        
        $restorant_id = $event->hour->restorant_id;
        
        // Now fetch those services with above restorant id and 
        // default check enable

        $items = Restorant::find($restorant_id)->items()->get();
        
        // $service_hours = array();
        // $booking_logs = array();
        $booking_slots = array();

        foreach($items as $key=>$value){
            $service_hours = ServiceHours::where('restorant_id',$restorant_id)->where('service_item_id',$value->id)->get();
            // if($service_hours->day == )
        }
        // dd($service_hours);
        // dd( $service_hours );
        
        foreach($service_hours as $kk => $hour){
            $logs = ServiceBookingsLogs::where('service_hour_idFk', $hour->id)->where('restorant_id',$restorant_id)->get();
            $booking_logs = $logs;
        }

        // foreach($booking_logs as $log=>$value){
        //     $booking_slots[] = BookingsSlots::where('total_bookings_idFk',$value[$log]->id)->get();
        // }
        
        dd($booking_logs);
        
        dd($res);
        dd($event->hour->restorant_id);
    }
}
