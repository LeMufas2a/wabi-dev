<script>
   
    <?php
     
   
        $items=[];
        $categories = [];
        
        foreach ($restorant->categories as $key => $category) {

            array_push($categories, clean(str_replace(' ', '', strtolower($category->name)).strval($key)));

            foreach ($category->items as $key => $item) {

                $formatedExtras=$item->extras;
                // 
                foreach ($formatedExtras as &$element) {
                    $element->priceFormated=@money($element->price, config('settings.cashier_currency'),config('settings.do_convertion'))."";
                }
                
                //Now add the variants and optins to the item data
                $itemOptions=$item->options;

                $theArray=[
                    'name'=>$item->name,
                    'id'=>$item->id,
                    'priceNotFormated'=>$item->price,
                    'price'=>@money($item->price, config('settings.cashier_currency'),config('settings.do_convertion'))."",
                    'image'=>$item->logom,
                    'extras'=>$formatedExtras,
                    'options'=>$item->options,
                    'variants'=>$item->variants,
                    'has_variants'=>$item->has_variants==1&&$item->options->count()>0,
                    'description'=>$item->description
                ];
                echo "items[".$item->id."]=".json_encode($theArray).";";
            }
        }
    ?>
    var categories = <?php echo json_encode($categories); ?>;



    // Service Items Data items being fetched

    <?php
     
        // dd($booking_slots);
        $service_items=[];
        $service_categories_arr = [];
        $parent_log_items = array();

        $slots = [];
        $slots_arr = [];
        $logs_arr = [];
        
        // dd($service_categories);
        foreach ($service_categories as $key => $category) {
            // echo $category->service_name;die;
            array_push($service_categories_arr, clean(str_replace(' ', '', strtolower($category->service_name)).strval($key)));

            // foreach ($category->items as $key => $item) {

                $formatedExtras=array(
                    'extra_id' => $category->extraItemId,
                    'extra_name' => $category->extraItemName,
                    'extra_price' => $category->extraItemPrice,
                    'priceFormated' => ''
                );

                // foreach ($booking_slots as $key => $slot) {
                //     array_push($slots_arr, clean(str_replace(' ', '', strtolower($slot->available_bookings)).strval($key)));

                //     $theArraySlots=[
                //             'serviceFrom'=>$slot->service_from,
                //             'serviceTo'=>$slot->service_to,
                //             'total_bookings_idFk'=>$slot->total_bookings_idFk,
                //             'available_bookings'=>$slot->available_bookings,
                //         ];
                //         // $category->id is basically the id of service item
                //         echo "slot_items[".$slot->id."]=".json_encode($theArraySlots).";";
                // }
                

                $theArray=[
                    'name'=>$category->service_name,
                    'id'=>$category->id,
                    'priceNotFormated'=>$category->service_price,
                    'price'=>@money($category->service_price, config('settings.cashier_currency'),config('settings.do_convertion'))."",
                    'image'=>"/uploads/service_items/".$category->service_image."_medium.jpg",
                    'extras'=>$formatedExtras,
                    // 'options'=>$item->options,
                    // 'variants'=>$item->variants,
                    // 'has_variants'=>$item->has_variants==1&&$item->options->count()>0,
                    'description'=>$category->service_description,
                    'hours'=>$category->service_hours,
                    'days'=>$category->service_days
                ];
                // $category->id is basically the id of service item
                echo "service_items[".$category->id."]=".json_encode($theArray).";";
            // }
        }

        // $slots = [];
        // $slots_arr = [];
        // dd($booking_slots);
        foreach ($booking_slots as $key => $slot) {
            array_push($slots_arr, clean(str_replace(' ', '', strtolower($slot->available_bookings)).strval($key)));

            $theArraySlots=[
                    'id'=>$slot->id,
                    'serviceFrom'=>$slot->service_from,
                    'serviceTo'=>$slot->service_to,
                    'total_bookings_idFk'=>$slot->total_bookings_idFk,
                    'available_bookings'=>$slot->available_bookings,
                    'service_id'=>$slot->service_id,
                    // 'service_available_days'=>$slot->service_available_days,
                    'sfrom'=>$slot->sfrom,
                    'sto'=>$slot->sto,
                    // 'log_day'=>$slot->log_day,
                ];

                
                // $category->id is basically the id of service item
                echo "slot_items[".$slot->id."]=".json_encode($theArraySlots).";";
        }
        // dd($booking_logs);
        
        foreach ($booking_logs as $key => $log) {

            array_push($slots_arr, clean(str_replace(' ', '', strtolower($slot->available_bookings)).strval($key)));
            
            // $theArrayLgs=[
            //         'service_id'=>$log->service_id_fk,
            //         'parent_service_from'=>$log->parent_service_from,
            //         'parent_service_to'=>$log->parent_service_to,
            //         'parent_service_hour'=>$log->parent_service_hour,
            //         'log_day'=>$log->log_day,
            //         'difference'=>$log->hour_difference,
            //         'hourly_time'=>$log->hour_booking_logs,
                    
            //     ];
            $theArrayLgs=[
                    'hourly_time'=>$log->hour_booking_logs,
                    
                ];

                    // foreach($log->hour_booking_logs as $hourbookinglogs => $logvalue){
                    //     if($logvalue['booking_log_idFk'] == $log->id){
                    //         $theArrayHourLgs[] = [
                    //             'hour_service_from' => $logvalue['hour_service_from'],
                    //             'hour_service_to' => $logvalue['hour_service_to']
                    //         ];
                    //     }
                    // }
                // $theArrayLgs['hourly_time'] = $theArrayHourLgs;
            //    echo "parent_log_items[".$log->id."]=".json_encode($theArrayLgs).";";
               echo "parent_log_items[".$log->id."]=".json_encode($theArrayLgs).";";
        }
        
        //dd($theArrayLgs);
    ?>
    var service_categories = <?php echo json_encode($service_categories_arr); ?>;
    var slots = <?php echo json_encode($slots_arr); ?>;
    var slots = <?php echo json_encode($logs_arr); ?>;
</script>  