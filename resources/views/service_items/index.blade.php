
@extends('layouts.app', ['title' => __('Services Management')])
@section('admin_title')
    {{__('Menu')}}
@endsection
@section('content')
    
    <?php 
    // echo "<pre>";
    // print_r($working_hours_json);
    ?>
    <div class="header bg-gradient-primary pb-7 pt-5 pt-md-8">
        <div class="container-fluid">
            <div class="header-body">
            <div class="row align-items-center py-4">
                <!--<div class="col-lg-6 col-7">
                </div>-->
                <div class="col-lg-12 col-12 text-right">
                    @if (isset($hasMenuPDf)&&$hasMenuPDf)
                        <a target="_blank" href="{{ route('menupdf.download')}}" class="btn btn-sm btn-danger"><i class="fas fa-file-pdf"></i> {{ __('PDF Menu') }}</a>
                    @endif
                    <button class="btn btn-icon btn-1 btn-sm btn-info" type="button" data-toggle="modal" data-target="#modal-service-items-category" data-toggle="tooltip" data-placement="top" title="{{ __('Add new category')}}">
                        <span class="btn-inner--icon"><i class="fa fa-plus"></i> {{ __('Add new service category') }}</span>
                    </button>
                    @if($canAdd)
                    {{-- <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#modal-import-items" onClick=(setRestaurantId({{ $restorant_id }}))>
                        <span class="btn-inner--icon"><i class="fa fa-file-excel"></i> {{ __('Import from CSV') }}</span>
                    </button> --}}
                    @endif
                    @if(config('settings.enable_miltilanguage_menus'))
                        @include('service_items.partials.languages')
                    @endif
                </div>
            </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col">
                                        <h3 class="mb-0">{{ __('Service Management') }} @if(config('settings.enable_miltilanguage_menus')) ({{ $currentLanguage}}) @endif</h3>
                                    </div>
                                    <div class="col-auto">
                                        <!--<button class="btn btn-icon btn-1 btn-sm btn-primary" type="button" data-toggle="modal" data-target="#modal-service-items-category" data-toggle="tooltip" data-placement="top" title="{{ __('Add new category')}}">
                                            <span class="btn-inner--icon"><i class="fa fa-plus"></i> {{ __('Add new category') }}</span>
                                        </button>
                                        @if($canAdd)
                                            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-import-items" onClick=(setRestaurantId({{ $restorant_id }}))>
                                                <span class="btn-inner--icon"><i class="fa fa-file-excel"></i> {{ __('Import from CSV') }}</span>
                                            </button>
                                        @endif
                                        @if(config('settings.enable_miltilanguage_menus'))
                                            @include('service_items.partials.languages')
                                        @endif-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br/>
                    <div class="col-12">
                        @include('partials.flash')
                    </div>
                    
                    <div class="card-body">
                        @if( $categories->count() == 0 )
                            <div class="col-lg-3" >
                                <a  data-toggle="modal" data-target="#modal-service-items-category" data-toggle="tooltip" data-placement="top" title="{{ __('Add new category')}}">
                                    <div class="card">
                                        <img class="card-img-top" src="{{ asset('images') }}/default/add_new_item.jpg" alt="...">
                                        <div class="card-body">
                                            <h3 class="card-title text-primary text-uppercase">{{ __('Add first service category') }}</h3> 
                                        </div>
                                    </div>
                                </a>
                                <br />
                            </div>
                            @include('service_items.partials.modals', ['restorant_id' => $restorant_id,'category_id'=>'','img'=>'','working_hours_restaurant'=>$working_hours_restaurant])
                        @endif
                       
                        
                            
                        @if(!empty($categories))
                            @foreach ($categories as $index => $category)
                                
                                @include('service_items.partials.modals', 
                                [   'category_name' => $category->name,
                                    'restorant_id'  => $restorant_id,
                                    'category_id'   => $category->id,
                                    'working_hours_restaurant'=>$working_hours_restaurant
                                ]
                                )
                                @if($category->active == 1)
                                    <div class="alert alert-default">
                                        <div class="row">
                                            <div class="col">
                                                <span class="h1 font-weight-bold mb-0 text-white">{{ $category->name }}</span>
                                            </div>
                                            <div class="col-auto">
                                                <div class="row">
                                                    <script>
                                                        function setSelectedCategoryId(id){
                                                            $('#category_id').val(id);
                                                        }

                                                        function setRestaurantId(id){
                                                            $('#res_id').val(id);
                                                        }

                                                    </script>
                                                    @if($canAdd)
                                                        <button class="btn btn-icon btn-1 btn-sm btn-primary" type="button" data-toggle="modal" data-target="#modal-new-service-item" data-toggle="tooltip" data-placement="top" title="{{ __('Add service item') }} in {{$category->name}}" data-id="{{ $category->id }}" onClick=(setSelectedCategoryId({{ $category->id }})) >
                                                            <span class="btn-inner--icon"><i class="fa fa-plus"></i></span>
                                                        </button>
                                                    @else
                                                        <a href="{{ route('plans.current')}}" class="btn btn-icon btn-1 btn-sm btn-warning" type="button"  >
                                                            <span class="btn-inner--icon"><i class="fa fa-plus"></i> {{ __('Menu size limit reaced') }}</span>
                                                        </a>
                                                    @endif
                                                    <button class="btn btn-icon btn-1 btn-sm btn-warning" type="button" id="edit" data-toggle="modal" data-target="#modal-service-edit-category" data-toggle="tooltip" data-placement="top" title="{{ __('Edit category') }} {{ $category->name }}" data-id="<?= $category->id ?>" data-image="<?=  $category->logom ?>"  data-name="<?= $category->name ?>" >
                                                        <span class="btn-inner--icon"><i class="fa fa-edit"></i></span>
                                                    </button>

                                                
                                                    
                                                    <form action="{{ route('servicecategories.destroy', $category) }}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="btn btn-icon btn-1 btn-sm btn-danger" type="button" onclick="delete_service_category(this)" data-toggle="tooltip" data-placement="top" title="{{ __('Delete') }} {{$category->name}}">
                                                            <span class="btn-inner--icon"><i class="fa fa-trash"></i></span>
                                                        </button>
                                                    </form>

                                                    @if(count($categories)>1)
                                                        <div style="margin-left: 10px; margin-right: 10px">|</div>
                                                    @endif

                                                    <!-- UP -->
                                                    @if ($index!=0)
                                                        <a href="{{ route('serviceitems.reorder',['up'=>$category->id]) }}"  class="btn btn-icon btn-1 btn-sm btn-success" >
                                                            <span class="btn-inner--icon"><i class="fas fa-arrow-up"></i></span>
                                                        </a>
                                                    @endif
                                                    

                                                    <!-- DOWN -->
                                                    @if ($index+1!=count($categories))
                                                        <a href="{{ route('serviceitems.reorder',['up'=>$categories[$index+1]->id]) }}" class="btn btn-icon btn-1 btn-sm btn-success">
                                                            <span class="btn-inner--icon"><i class="fas fa-arrow-down"></i></span>
                                                        </a>
                                                    @endif

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                 
 
                                <!-- Check for items -->
                                @if($category->active == 1)
                                
                                    <div class="row justify-content-center">
                                        <div class="col-lg-12">
                                            <div class="row row-grid">
                                                @if($category->items)
                                                    @foreach ( $category->items as $item) 
                                                        <div class="col-lg-3">
                                                            <a href="{{ route('serviceitems.edit', $item) }}">
                                                                <div class="card">
                                                                    <img class="card-img-top" src="uploads/service_items/<?php echo $item->service_image;?>_large.jpg" alt="...">
                                                                    <div class="card-body">
                                                                        <h3 class="card-title text-primary text-uppercase">{{ $item->service_name }}</h3>
                                                                        <p class="card-text description mt-3">{{ $item->service_description }}</p>

                                                                        {{-- <span class="badge badge-primary badge-pill">@money($item->price, config('settings.cashier_currency'),config('settings.do_convertion'))</span> --}}

                                                                        <p class="mt-3 mb-0 text-sm">
                                                                            @if($item->available == 1)
                                                                            <span class="text-success mr-2">{{ __("AVAILABLE") }}</span>
                                                                            @else
                                                                            <span class="text-danger mr-2">{{ __("UNAVAILABLE") }}</span>
                                                                            @endif
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <br/>
                                                            </a>
                                                        </div>
                                                    @endforeach
                                                @endif
                                                    @if($canAdd)
                                                    <div class="col-lg-3" >
                                                        <a   data-toggle="modal" data-target="#modal-new-service-item" data-toggle="tooltip" data-placement="top" href="javascript:void(0);" data-id="{{ $category->id }}" onclick=(setSelectedCategoryId({{ $category->id }}))>
                                                            <div class="card">
                                                                <img class="card-img-top" src="{{ asset('images') }}/default/add_new_item.jpg" alt="...">
                                                                <div class="card-body">
                                                                    <h3 class="card-title text-primary text-uppercase">{{ __('Add service item') }}</h3>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <br />
                                                    </div>
                                                    @endif
                                                
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
<script>

var count = 2;
var timeFormat = 'AM/PM';
    
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




////////////////////////////////////////////////////////////////////////////////////////////////
var default_hours = {};

$(document).ready(function(){

    $(".service_available_default").attr("disabled",true);
    $(".servicefromdefault").attr("disabled",true);
    $(".servicetodefault").attr("disabled",true);

    // Service Duration Label default value 
    $(".service_duration_label").text(" Service Duration (In Hours)");
    
    $("#service_available_days").select2('destroy'); 
    default_hours = '<?php print_r($working_hours_json); ?>';
    if(default_hours){
        default_hours = JSON.parse(default_hours);
    }    
});

// Function to dynamically add service days and hours 
function addMoreDays(exp){

    

    $(".instant_booking .below_div").append(
        '<div class="row service_days_container daysContainer_'+count+'">'+
            '<div class="col-3">'+
                '<div class="form-group">'+
                    '<select class="form-control service_available_days" name="service_available_days[]" id="service_available_days">'+
                        '<option value="Monday" selected>Monday</option>'+
                        '<option value="Tuesday">Tuesday</option>'+
                        '<option value="Wednesday">Wednesday</option>'+
                        '<option value="Thursday">Thursday</option>'+
                        '<option value="Friday">Friday</option>'+
                        '<option value="Saturday">Saturday</option>'+
                        '<option value="Sunday">Sunday</option>'+
                    '</select>'+
                '</div>'+
            '</div>'+
            '<div class="col-3">'+
                '<div class="form-group">'+
                    '<input id="servicefrom'+count+'" name="service_from_time[]" class="flatpickr flatpickr-input form-control servicefrom1 servicefrom" type="text" placeholder="Start Time" value="">'+
                '</div>'+
            '</div>'+
            '<div class="col-3">'+
                '<div class="form-group">'+
                    '<input id="serviceto'+count+'" name="service_to_time[]" class="flatpickr flatpickr-input form-control serviceto1 serviceto" type="text" placeholder="End Time" value="">'+
                '</div>'+
            '</div>'+
            '<div class="col-1">'+
                '<button class="btn btn-icon btn-1 btn-sm btn-danger" type="button"  title="Remove service days" onclick="removeDay(this)">'+
                    '<span class="btn-inner--icon"><i class="fa fa-trash"></i></span>'+
                '</button>'+
            '</div>'+
        '</div>'
    );


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

// Function to add Default Hours
function setDefaultHours(exp){
    
    

    if(exp[0].checked) {

        // Set Default eshop timings 
        $(".default_eshop_hours").show();
        $(".custom_hours").css("opacity",0.3);
        $("#add_more_service").prop("disabled",true);
        $(".below_div").hide();

        // Enable Default days and time
        $(".service_available_default").attr("disabled",false);
        $(".servicefromdefault").attr("disabled",false);
        $(".servicetodefault").attr("disabled",false); 

        // Normal Days and time
        $(".service_available_non_default").attr("disabled",true);
        $(".servicefrom1").attr("disabled",true);
        $(".serviceto1").attr("disabled",true);
        // Set the days and hours in below_div div

        // defaultDate: "13:45"

        const Monday_from = $('#servicefromMonday').flatpickr({
            defaultDate: default_hours["Monday_from"],
            enableTime: true,
            noCalendar: true,
            dateFormat: "H:i",
            dateFormat: timeFormat == "AM/PM" ? "h:i K": "H:i",
            altFormat: timeFormat == "AM/PM" ? "h:i K" : "H:i",
            time_24hr: timeFormat == "AM/PM" ? false : true,
        });

        const monday_to = $('#servicetoMonday').flatpickr({
            defaultDate: default_hours["Monday_to"],
            enableTime: true,
            noCalendar: true,
            dateFormat: "H:i",
            dateFormat: timeFormat == "AM/PM" ? "h:i K": "H:i",
            altFormat: timeFormat == "AM/PM" ? "h:i K" : "H:i",
            time_24hr: timeFormat == "AM/PM" ? false : true,
        });

        const Tuesday_from = $('#servicefromTuesday').flatpickr({
            defaultDate: default_hours["Tuesday_from"],
            enableTime: true,
            noCalendar: true,
            dateFormat: "H:i",
            dateFormat: timeFormat == "AM/PM" ? "h:i K": "H:i",
            altFormat: timeFormat == "AM/PM" ? "h:i K" : "H:i",
            time_24hr: timeFormat == "AM/PM" ? false : true,
        });

        const Tuesday_to = $('#servicetoTuesday').flatpickr({
            defaultDate: default_hours["Tuesday_to"],
            enableTime: true,
            noCalendar: true,
            dateFormat: "H:i",
            dateFormat: timeFormat == "AM/PM" ? "h:i K": "H:i",
            altFormat: timeFormat == "AM/PM" ? "h:i K" : "H:i",
            time_24hr: timeFormat == "AM/PM" ? false : true,
        });

        const Wednesday_from = $('#servicefromWednesday').flatpickr({
            defaultDate: default_hours["Wednesday_from"],
            enableTime: true,
            noCalendar: true,
            dateFormat: "H:i",
            dateFormat: timeFormat == "AM/PM" ? "h:i K": "H:i",
            altFormat: timeFormat == "AM/PM" ? "h:i K" : "H:i",
            time_24hr: timeFormat == "AM/PM" ? false : true,
        });

        const Wednesday_to = $('#servicetoWednesday').flatpickr({
            defaultDate: default_hours["Wednesday_to"],
            enableTime: true,
            noCalendar: true,
            dateFormat: "H:i",
            dateFormat: timeFormat == "AM/PM" ? "h:i K": "H:i",
            altFormat: timeFormat == "AM/PM" ? "h:i K" : "H:i",
            time_24hr: timeFormat == "AM/PM" ? false : true,
        });

        const Thursday_from = $('#servicefromThursday').flatpickr({
            defaultDate: default_hours["Thursday_from"],
            enableTime: true,
            noCalendar: true,
            dateFormat: "H:i",
            dateFormat: timeFormat == "AM/PM" ? "h:i K": "H:i",
            altFormat: timeFormat == "AM/PM" ? "h:i K" : "H:i",
            time_24hr: timeFormat == "AM/PM" ? false : true,
        });

        const Thursday_to = $('#servicetoThursday').flatpickr({
            defaultDate: default_hours["Thursday_to"],
            enableTime: true,
            noCalendar: true,
            dateFormat: "H:i",
            dateFormat: timeFormat == "AM/PM" ? "h:i K": "H:i",
            altFormat: timeFormat == "AM/PM" ? "h:i K" : "H:i",
            time_24hr: timeFormat == "AM/PM" ? false : true,
        });

        const Friday_from = $('#servicefromFriday').flatpickr({
            defaultDate: default_hours["Friday_from"],
            enableTime: true,
            noCalendar: true,
            dateFormat: "H:i",
            dateFormat: timeFormat == "AM/PM" ? "h:i K": "H:i",
            altFormat: timeFormat == "AM/PM" ? "h:i K" : "H:i",
            time_24hr: timeFormat == "AM/PM" ? false : true,
        });

        const Friday_to = $('#servicetoFriday').flatpickr({
            defaultDate: default_hours["Friday_to"],
            enableTime: true,
            noCalendar: true,
            dateFormat: "H:i",
            dateFormat: timeFormat == "AM/PM" ? "h:i K": "H:i",
            altFormat: timeFormat == "AM/PM" ? "h:i K" : "H:i",
            time_24hr: timeFormat == "AM/PM" ? false : true,
        });


        const Saturday_from = $('#servicefromSaturday').flatpickr({
            defaultDate: default_hours["Saturday_from"],
            enableTime: true,
            noCalendar: true,
            dateFormat: "H:i",
            dateFormat: timeFormat == "AM/PM" ? "h:i K": "H:i",
            altFormat: timeFormat == "AM/PM" ? "h:i K" : "H:i",
            time_24hr: timeFormat == "AM/PM" ? false : true,
        });

        const Saturday_to = $('#servicetoSaturday').flatpickr({
            defaultDate: default_hours["Saturday_to"],
            enableTime: true,
            noCalendar: true,
            dateFormat: "H:i",
            dateFormat: timeFormat == "AM/PM" ? "h:i K": "H:i",
            altFormat: timeFormat == "AM/PM" ? "h:i K" : "H:i",
            time_24hr: timeFormat == "AM/PM" ? false : true,
        });

        const Sunday_from = $('#servicefromSunday').flatpickr({
            defaultDate: default_hours["Sunday_from"],
            enableTime: true,
            noCalendar: true,
            dateFormat: "H:i",
            dateFormat: timeFormat == "AM/PM" ? "h:i K": "H:i",
            altFormat: timeFormat == "AM/PM" ? "h:i K" : "H:i",
            time_24hr: timeFormat == "AM/PM" ? false : true,
        });

        const Sunday_to = $('#servicetoSunday').flatpickr({
            defaultDate: default_hours["Sunday_to"],
            enableTime: true,
            noCalendar: true,
            dateFormat: "H:i",
            dateFormat: timeFormat == "AM/PM" ? "h:i K": "H:i",
            altFormat: timeFormat == "AM/PM" ? "h:i K" : "H:i",
            time_24hr: timeFormat == "AM/PM" ? false : true,
        });
        
        $(".instant_booking .below_div").append('');
    }
    
    else{
        $(".custom_hours").css("opacity",1);
        $("#add_more_service").prop("disabled",false);
        $(".below_div").show();
        $(".default_eshop_hours").hide();

        $(".service_available_non_default").attr("disabled",false);
        $(".servicefrom1").attr("disabled",false);
        $(".serviceto1").attr("disabled",false);
        
        
        $(".service_available_default").attr("disabled",true);
        $(".servicefromdefault").attr("disabled",true);
        $(".servicetodefault").attr("disabled",true);
    }
}


// Function to add Default Hours
function resetServiceHours(exp){
    $(".custom_hours").css("opacity",1);
    // $(".default_hours").css("opacity",0.5);
}

// Function to remove day
function removeDay(exp){

    $.confirm({
        title: 'Delete!',
        content: 'Do you want to delete this item?',
        theme: 'dark',
        buttons: {
            confirm: function () {
                $(exp).parent().parent().remove();
                // exp.parentElement.submit();
                // console.log("parent Element",exp.parentElement);
            },
            cancel: function () {
                // $.alert('Canceled!');
            },
            
        }
    });
    
    // if (confirm('Do you want to delete this item?')) {
    //     $(exp).parent().parent().remove();
    //     count--;    
    // } else {
    //     // return false;
    // }

    
}

// Delete confirmation alert jquery
function delete_service_category(exp){
    
    // this.parentElement.submit()

    $.confirm({
        title: 'Delete!',
        content: 'Do you want to delete this service category?',
        theme: 'dark',
        buttons: {
            confirm: function () {
                exp.parentElement.submit();
                console.log("parent Element",exp.parentElement);
            },
            cancel: function () {
                // $.alert('Canceled!');
            },
            
        }
    });
}

// Function to allow only multiples of 3 or 5 in service from and service to input fields
$("#service_duration").change(function(e){
    // alert("here");
    let num = e.target.value;
    
    if(num % 5 == 0){
        // ok
        $(".error_duration").hide();
    }
    else{
        $(".error_duration").show();
        $(".error_duration").text("Please enter multiples of 5 - 5, 10, 15, 25, 30").fadeOut(1500, function() {
            // $(this).empty().show();
            e.target.value = 0;
        });
    }
});




var cropper = '';

// Push service category id to modal
$("[data-target='#modal-new-service-item']").on('click',function(){
    
    var id = $(this).attr('data-id');
    $("#modal-new-service-item #cat_id").val(id);   
    
});

$('#modal-new-service-item').bind('show',function(){
    //alert("here");
    // var id = $(this).attr('data-id');
    // $(".modal-body #cat_id").val(id);
});

$("[data-target='#modal-service-edit-category']").on('click',function() {
    
    
    var id = $(this).attr('data-id');
    var name = $(this).attr('data-name');
    var image = $(this).attr('data-image');
    

    // console.log("id",id);
    // console.log("name",name);
    console.log("image",image);

    
    $("#cat_name").val(name);
    
    $("#form-edit-category").attr("action", "/servicecategories/"+id);

    cropper = new Slim(document.getElementById("cate_image"));
    
    // console.log("the cropper",cropper);
    
    cropper.forceSize = { width:1000, height:300 };
    
    

        cropper.load(image, function(error, data){
            console.log("inside load",image);
            console.log("inside if error",error);
            console.log("inside if data",data);
            // Upload a selected image to the server
            cropper.upload(function(error, logs, response){
               // do something

            });

        });

});

    

            $(document).on('change','#imgfile11', function() {
                let id = $(this).attr("name");
                // console.log("name",$(this).attr("name"));
                imagesPreview(this, 'div.gallery',id);
            });
            
            $(document).on('change','#imgfileItem', function() {
                let id = $(this).attr("name");
                // console.log("name",$(this).attr("name"));
                imagesPreviewItem(this, 'div.gallery',id);
            });

            function imagesPreview(input, placeToInsertImagePreview,id){
                console.log("the id",id);
                if (input.files) {
                    var filesAmount = input.files.length;
                    let i = 0;
                    for (i = 0; i < filesAmount; i++) {
                        var reader = new FileReader();
                         
                        reader.onload = function(event) {
                            // $($.parseHTML('<img id="previewImg" width="100" height="100">')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                            // $("."+id).attr('src', event.target.result);
                            $("#previewImg").attr('src', event.target.result);
                            // $("#"+this.active_el+"Modal")
                        }

                        reader.readAsDataURL(input.files[i]);
                    }
                }
            }
            
            function imagesPreviewItem(input, placeToInsertImagePreview,id){
                console.log("the id",id);
                if (input.files) {
                    var filesAmount = input.files.length;
                    let i = 0;
                    for (i = 0; i < filesAmount; i++) {
                        var reader = new FileReader();
                         
                        reader.onload = function(event) {
                            // $($.parseHTML('<img id="previewImg" width="100" height="100">')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                            // $("."+id).attr('src', event.target.result);
                            $("#previewImgItem").attr('src', event.target.result);
                            // $("#"+this.active_el+"Modal")
                        }

                        reader.readAsDataURL(input.files[i]);
                    }
                }
            }


            $('#modal-new-service-item').on('hidden.bs.modal', function () {
                
                $("#imgfileItem").val('');
                $("#previewImgItem").attr('src',"https://www.fastcat.com.ph/wp-content/uploads/2016/04/dummy-post-square-1-768x768.jpg");
            });

            $('#modal-service-edit-category').on('hidden.bs.modal', function () {
                // alert("here");
                // $("#my_id").attr('src','');
                $("#cate_image").attr('src','');
                $("#cat_name").val('');
                cropper.destroy("cate_image");
                // console.log("croppero bject in hide modal",cropper.data.input.file);
                // cropper.data.input.file = {};
                // console.log("croppero bject in hide modal after cropper",cropper.data.input.file);
                // var data = cropper.remove();
                //$("#imgFile").val('');
                //$("#previewImg").attr('src',"https://www.fastcat.com.ph/wp-content/uploads/2016/04/dummy-post-square-1-768x768.jpg");
            });

            function previewFile(input){
                
                var file = $("input[type=file]").get(0).files[0];
                console.log("file",file);
                if(file){
                    var reader = new FileReader();
        
                    reader.onload = function(){
                        $("#previewImg").attr("src", reader.result);
                    }
        
                    reader.readAsDataURL(file);
                }
            }

            // Service type dropdown Event handling

            $(document).on("change","#service_type",function(){
                
                let value = $(this).val();
                
                if(value == 'instant booking'){
                    $(".instant_booking").show();
                    $(".long_booking").hide();
                    $(".service_duration_label").text(" Service Duration (In Hours)");
                }
                else{
                    $(".long_booking").show();
                    $(".instant_booking").hide();
                    $(".service_duration_label").text(" Service Duration (In Days)");
                }     
            });


            // Default Arrival and departure time 
            // checkbox event handling
            //

            $('#service_default_time').change(function() {
                
                if (this.checked) {
                    $("#service_arrival_time").attr('disabled','disabled'); 
                    $("#service_departure_time").attr('disabled','disabled'); 
                } else {
                    $("#service_arrival_time").removeAttr('disabled'); 
                    $("#service_departure_time").removeAttr('disabled'); 
                }
            });

            $('#modal-new-service-item11').on('hidden.bs.modal', function () {
                $('#service_form')[0].reset();

                cropper = new Slim(document.getElementById("imgfile"));
                $("#imgfile").attr('src','');
                $("#imgfile").val('');
                cropper.destroy("imgfile");
                // $("#imgfile").val('');
            });



            // Display corresponding hours of selected week days 
            $(document).on("click",".weekDays-selector",function(){
                // alert("ok");
            });
            
</script>
@endsection