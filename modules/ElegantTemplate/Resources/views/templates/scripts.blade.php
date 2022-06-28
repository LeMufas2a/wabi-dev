
 <!-- Popper -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" type="text/javascript"></script>
 
 <!-- jQuery -->
 <script src="{{ asset('argonfront') }}/js/core/jquery.min.js" type="text/javascript"></script>

  <!-- Bootstrap -->
 <script src="{{ asset('argonfront') }}/js/core/bootstrap.min.js" type="text/javascript"></script>



<script>


    // $('.datepicker').datepicker({
    //   disable: [
    //     true,
    //     1, 4, 7,
    //     [2015,3,3],
    //     [2015,3,12],
    //     [2015,3,20],
    //     new Date(2015,3,13),
    //     new Date(2015,3,29)
    //   ]
    // });

</script>

 <script>
    var CASHIER_CURRENCY = "<?php echo  config('settings.cashier_currency') ?>";
    var LOCALE="<?php echo  App::getLocale() ?>";
    var IS_POS=false;
</script>
<script src="{{ asset('custom') }}/js/cartFunctions.js"></script>

<script
      src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"
      integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>



@if (isset($showGoogleTranslate)&&$showGoogleTranslate&&!$showLanguagesSelector)
    @include('googletranslate::scripts')
@endif

 
 


 <!-- scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.3/min/tiny-slider.js"></script>


 <!-- Custom js -->
 <script src="{{ asset('custom') }}/js/order.js"></script>

<!-- jquery alert (jquery confirm) Plugin -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>


<!-- Flatpickr datepicker -->
<script src="{{ asset('vendor') }}/flatpickr/flatpickr.js"></script>



<!-- Vanilla ColorJS Plugin -->
<script src="{{ asset('js') }}/vanilla-picker.csp.min.js"></script>



 <!-- Interface from PHP items to JS Array -->
 @include('restorants.phporderinterface') 

 <!-- All in one -->
 <script src="{{ asset('custom') }}/js/js.js?id={{ config('config.version')}}"></script>
 <script src="{{ asset('custom') }}/js/eleganttemplate.js"></script>
 <script>
     function openNav(){
      $("#theCartBottomButtonDiv").hide();
      document.body.classList.toggle("mobile-menu-opened");
    }
 </script>


<script>
    var days_arr = '';

    var arrOfNum = [];

    var base_url = '{{ route('all-time-slots') }}';

    $('#productModalServices').on('shown.bs.modal', function (e) {
        
            var service_item_id = $("#modalIDServices").text(); 
            
            var slots_to_display = [];

            var count = 1;

            
        
            while(count < slot_items.length){
                    
                // if(slot_items[count].service_id == service_item_id){
                    
                //     slots_to_display.push(slot_items[count]);
                // }
                // else{
                //     // do nothing
                // }

                count = count + 1;
            }

            var merged = [].concat.apply([], parent_log_items);
            console.log("merged",merged);
            
            const results = merged.filter(element => {
                return element !== undefined;
            });
            console.log("merged after filter",results);
            
            merged = results;
            // console.log("results 0",results[0]);
            // console.log("results 1",results[1]);

               
        
        
        var tt = $("#hide_days").val();
        
        days_arr = tt.split(",");
        console.log("days_arr",days_arr);
        
        const arrOfStr = days_arr;

        arrOfStr.forEach(str => {
            arrOfNum.push(Number(str));
        });

        console.log("enabledDates:",arrOfNum);

        $('#serviceday1').flatpickr({
                enableTime: false,
                dateFormat: "Y-m-d",
                minDate:"today",
                monthSelectorType:"static",
                altInput:false,
                inline: true,
                allowInput:false,
                enable: [
                    function(date){
                        var enabledDates = arrOfNum;
                        for(var i = 0; i < enabledDates.length; i++)
                            if(date.getDay() === enabledDates[i])
                                return true;
                        return false;
                    }
                ],
                disable:[
                    function(date){
                        var disabledDates = '';
                        //if(date.getDay)
                        console.log("date",date);
                    }
                ],
                onChange: function(selectedDates, dateStr, instance) {
                    
                    
                    $(".slots_to_add").html("");
                    // $(".into_card").html("");
                    // console.log("dateStr",dateStr);
                    
                    var log_count = 0;
            
                    var slot_count = 1; 
                    var pdata = '';
                    
                    
                    const d = new Date(selectedDates);
                    let day = d.getDay();
                    day = d.toLocaleString('en-us', {  weekday: 'long' });
                    // console.log("Long name of the day",day);
                    // console.log("da",day);
                    // console.log("dateStr",dateStr.getDay());
                    // console.log("instance",instance);


                    // on selection of day the slots will be shown now

                    // console.log("log count",log_count);
                    // console.log("len",merged.length);
                    $(".slots_to_add").html("");
                    $(".slots_to_add").append(
                        '<div class="col-lg-12">'+
                            '<div id="accordion" class="into_accordion">'
                                //'<div class="card into_card">'
                                );
                                    while(log_count < merged.length){

                                                var h = 0;
                                                var button_count = 0;
                                                for(let h=0; h<merged[log_count]['hourly_time'].length; h++){
                                                    button_count = h;
                                                    if(
                                                        merged[log_count]['hourly_time'][h]['service_id_fk'] == service_item_id
                                                        && merged[log_count]['hourly_time'][h]['log_day'] == day
                                                        ){
                                                            //console.log("log_count:"+log_count+"--h:"+h into_button);
                                                            $(".into_accordion").append(
                                                                '<div class="card into_card into_card_with_'+merged[log_count]['hourly_time'][h]['iterator']+'">'+
                                                                    '<div class="card-header into_header"  id="headingOne">'+
                                                                        '<h5 class="mb-0 parent_from" style="text-align:center;">'+
                                                                            '<button class="btn-link into_button" data-toggle="collapse" data-target="#booking_'+merged[log_count]['hourly_time'][h]['iterator']+'" aria-expanded="true" aria-controls="collapseOne" data-iterator="'+merged[log_count]['hourly_time'][h]['iterator']+'" data-bookingId="'+merged[log_count]['hourly_time'][h]['booking_log_idFk']+'" data-serviceId="'+merged[log_count]['hourly_time'][h]['service_id_fk']+'" data-logDay="'+merged[log_count]['hourly_time'][h]['log_day']+'" data-serviceFrom="'+merged[log_count]['hourly_time'][h]['hour_service_from']+'" data-serviceTo="'+merged[log_count]['hourly_time'][h]['hour_service_to']+'" style="font-size:25px;font-family: sans-serif;">'+merged[log_count]['hourly_time'][h]['hour_service_from']+'-'+merged[log_count]['hourly_time'][h]['hour_service_to']+''+
                                                                            '</button>'+
                                                                        '</h5>'+
                                                                    '</div>'
                                                            );                                                            
                                                            $(".into_accordion").append('</div>');
                                                        }
                                                        
                                                        
                                                        
                                                }   // end for loop

                                       log_count++; 
                                    }
                                            
                                        
                                    
                                $(".slots_to_add").append(
                                //'</div>'+
                            '</div>'+
                        '</div>'
                    );

                    
                    ////// Display respective slots in buttons via ajax
                    $(document).on("click","button.into_button",function(e){
                        
                        console.log("how many clicks?");
                        if (e.detail === 2) {
                            // alert("heelooo");
                            return false;
                        }

                        let booking_idFk = $(this).attr("data-bookingId");
                        
                        let service_idFk = $(this).attr("data-serviceId");
                        
                        let service_from = $(this).attr("data-serviceFrom");
                        let service_to = $(this).attr("data-serviceTo");

                        let iterator = $(this).attr("data-iterator");
                        //console.log("booking_idFk"+booking_idFk);
                        
                        let service_button_from = '';
                        
                        let booking_set = [];

                        let service_booked_on = dateStr;

                        $(".slots_content").remove();

                        $.ajax({
                            type:'POST',
                            url:base_url,
                            headers: {
                                'X-CSRF-TOKEN': token
                            },
                            data:{booking_id:booking_idFk,service_id:service_idFk,service_from:service_from,service_to:service_to},
                            success:function(data) {
                                // let pdata = null;
                                $(".slots_content").html("");
                                pdata = JSON.parse(data);
                                $(".into_card_with_"+iterator).append(
                                    '<div id="booking_'+iterator+'" class="collapse show slots_content" aria-labelledby="headingOne" data-parent="#accordion">'+
                                        '<div class="card-body into_slot">');
                                            for(let slot=0;slot<pdata.length;slot++){
                                                $(".into_slot").append(
                                                    '<button class="btn btn-light hour_button slot" style="margin-right:15px;">'+pdata[slot]['service_from']+'--'+pdata[slot]['service_to']+'</button>'
                                                );
                                            }
                                        $(".into_slot").append('</div>'+
                                            '</div>'
                                        );
                                        
                                $("#service_from").val(service_from);
                                $("#service_to").val(service_to);
                                $("#booking_day").val(day);
                                $("#booking_idFk").val(booking_idFk);
                                $("#service_booked_on").val(dateStr);
                                // booking_set.push()
                                

                                $(document).on("click",".hour_button",function(){
                                    service_button_from = $(this).text();
                                    $("#service_button_from").val(service_button_from);
                                    booking_set.push({ 
                                                service_from:service_from,
                                                service_to:service_to,
                                                day:day,
                                                booking_idFk:booking_idFk,
                                                service_button_from:service_button_from,
                                                service_booked_on:dateStr
                                            });
                                    //console.log("booking_set",booking_set);
                                });
                                

                                
                                

                                
                            },
                            complete:function(data){
                                console.log("data.status");
                                // pdata = null;
                                if(data.status == 200){
                                    // $(".myCoul").style.setProperty( 'color', 'green', 'important' );
                                    // window.location.reload();
                                    // console.log("style color","'+style_color+'");
                                    // $(".myCoul").removeClass("myCoul");
                                    // $(".myTit").attr("style",'color: '+style_color+' !important ');
                                    // $('.myCoul').css('color',style_color);  
                                }
                                // console.log("the complete",data.status);
                            }
                        });
                        // iterator = '';
                    });
                    

                },
        });
    
    });

        

        $(document).on("click","#productModalServices .close",function(){
            arrOfNum = [];
            $("#productModalServices").modal("hide");
            $(".slots_to_add").html('');
            $('#serviceday1')[0]._flatpickr.clear();
        });

        $(document).on("click",'.slot',function(e){
            
            $('.slot').removeClass('btn-success');
            $('.slot').addClass('btn-light');
            $('.slot').removeClass('active');


            $(this).removeClass('btn-light');
            $(this).addClass('btn-success');

            $(".addtocartservices").prop('disabled', false);

            // $(this).addClass("btn-primary").siblings().removeClass("btn-primary"); 
        });
//     $(document).on('hidden.bs.modal','#productModalServices', function () {
//                 alert('hello');
//  //Do stuff here
// });


//////////////////////////// Vanilla Picker ************************************************/

// var parent = document.querySelector('#parent');
// var picker = new Picker(parent);

    
// picker.onDone = function(color) {
    
//     var style_color = color.hex;

//     if(style_color){
    
//         $(".myCoul").attr("style", "color: "+style_color+" !important;");
        
        // $.ajax({
        //     type:'POST',
        //     url:'/save-heading-color/<?php echo $restorant->id;?>',
        //     headers: {
        //         'X-CSRF-TOKEN': token
        //     },
        //     data:{color:style_color,restaurant_id:<?php echo $restorant->id;?>,element_class:'myCoul'},
        //     success:function(data) {
        //         // console.log("inside success");
        //     },
        //     complete:function(data){
        //         // console.log("data.status",data.status);
        //         if(data.status == 200){
        //             // $(".myCoul").style.setProperty( 'color', 'green', 'important' );
        //             // window.location.reload();
        //             // console.log("style color","'+style_color+'");
        //             // $(".myCoul").removeClass("myCoul");
        //             // $(".myTit").attr("style",'color: '+style_color+' !important ');
        //             // $('.myCoul').css('color',style_color);  
        //         }
        //         // console.log("the complete",data.status);
        //     }
        // });
    
//     }


// };



//////////////////////////// Vanilla Picker ************************************************/



/////////////////////////// Add more days for adding more hours in the cart modal //////////////////////////////////////////////

var count = 2;
var timeFormat = 'AM/PM';

var days = '';


function addMoreDays(exp){

    
    $(".below_div").append(
        '<div class="row service_days_container daysContainer_'+count+'">'+
            '<div class="col-4">'+
                '<div class="form-group">'+
                    '<input id="serviceday'+count+'" name="service_day[]" class="flatpickr flatpickr-input form-control serviceday'+count+' serviceday" type="text" placeholder="Select Service Day" readonly="readonly">'+
                '</div>'+
            '</div>'+
            '<div class="col-3">'+
                '<div class="form-group">'+
                    '<input id="servicefrom'+count+'" name="service_from_time[]" class="flatpickr flatpickr-input form-control servicefrom'+count+' servicefrom" type="text" placeholder="Start Time" value="">'+
                '</div>'+
            '</div>'+
            '<div class="col-3">'+
                '<div class="form-group">'+
                    '<input id="serviceto'+count+'" name="service_to_time[]" class="flatpickr flatpickr-input form-control serviceto'+count+' serviceto" type="text" placeholder="End Time" value="">'+
                '</div>'+
            '</div>'+
            '<div class="col-1">'+
                '<button class="btn btn-icon btn-1 btn-sm btn-danger" type="button"  title="Remove service days" onclick="removeDay(this)">'+
                    '<span class="btn-inner--icon"><i class="las la-trash"></i></span>'+
                '</button>'+
            '</div>'+
        '</div>'
    );


    $('#serviceday'+count).flatpickr({
        enableTime: false,
        dateFormat: "Y-m-d",
        minDate:"today",
        altInput:false,
        allowInput:false,
        "enable": [
            function(date) {

                for(let i=0;i<arrOfNum.length;i++){
                    return (date.getDay() === arrOfNum[i]);
                }
                // return (date.getDay() === )
                // return (date.getDay() === 0 || date.getDay() === 6);
            }
        ],
        weekNumbers:false,
    });

    const my_flatpickr_from = $('#servicefrom'+count).flatpickr({
        static: true,
        enableTime: true,
        dateFormat: timeFormat == "AM/PM" ? "h:i K": "H:i",
        noCalendar: true,
        altFormat: timeFormat == "AM/PM" ? "h:i K" : "H:i",
        altInput: true,
        allowInput: true,
        time_24hr: timeFormat == "AM/PM" ? false : true,
    });

    const my_flatpickr_to = $('#serviceto'+count).flatpickr({
        static: true,
        enableTime: true,
        dateFormat: timeFormat == "AM/PM" ? "h:i K": "H:i",
        noCalendar: true,
        altFormat: timeFormat == "AM/PM" ? "h:i K" : "H:i",
        altInput: true,
        allowInput: true,
        time_24hr: timeFormat == "AM/PM" ? false : true,
    });

    count++;

}




                                        
    $(document).ready(function(){

    
        // $('#serviceday1').flatpickr({
        //         enableTime: false,
        //         dateFormat: "Y-m-d",
        //         minDate:"today",
        //         monthSelectorType:"static",
        //         altInput:false,
        //         inline: true,
        //         allowInput:false,
        //         enable: [
        //             function(date){
        //                 var enabledDates = arrOfNum;
        //                 for(var i = 0; i < enabledDates.length; i++)
        //                     if(date.getDay() === enabledDates[i])
        //                         return true;
        //                 return false;
        //             }
        //         ]
        // });
        
    });
    const my_flatpickr_from = $('#servicefrom1').flatpickr({
        static: true,
        enableTime: true,
        dateFormat: timeFormat == "AM/PM" ? "h:i K": "H:i",
        noCalendar: true,
        altFormat: timeFormat == "AM/PM" ? "h:i K" : "H:i",
        altInput: true,
        allowInput: true,
        time_24hr: timeFormat == "AM/PM" ? false : true,
    });

    const my_flatpickr_to = $('#serviceto1').flatpickr({
        static: true,
        enableTime: true,
        dateFormat: timeFormat == "AM/PM" ? "h:i K": "H:i",
        noCalendar: true,
        altFormat: timeFormat == "AM/PM" ? "h:i K" : "H:i",
        altInput: true,
        allowInput: true,
        time_24hr: timeFormat == "AM/PM" ? false : true,
    });


/////////////////////////// Add more days for adding more hours in the cart modal //////////////////////////////////////////////

</script>

<div style="margin-top:50px;">
    @include('elegant-template::templates.pages_footer')
<div>