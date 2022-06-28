
<!-- ADD Category -->
<div class="modal fade"  id="modal-service-items-category" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="modal-title-notification">{{ __('Add new service category') }}</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body p-0">
                <div class="card bg-secondary shadow border-0">
                    <div class="card-body px-lg-5 py-lg-5">
                        <form role="form" method="post" action="{{ route('servicecategories.store') }}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{$restorant_id}}"  name="restaurant_id" />
                            <div class="form-group{{ $errors->has('category_name') ? ' has-danger' : '' }}">
                                <input class="form-control" name="category_name" id="category_name" placeholder="{{ __('Service Category name') }} ..." type="text" required>
                                @if ($errors->has('category_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('category_name') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="slim form-group{{ $errors->has('item_image') ? ' has-danger' : '' }}" 
                                data-force-size="1000,300"
                                data-edit="true"
                            >
                                <input type="file" id="imgfile" name="item_image">
                                @if ($errors->has('item_image'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('item_image') }}</strong>
                                    </span>
                                @endif

                                
                            </div>

                            
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary my-4">{{ __('Save') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- EDIT Category -->
<div class="modal fade" id="modal-service-edit-category" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="modal-title-notification">{{ __('Edit category') }}</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body p-0">
                <div class="card bg-secondary shadow border-0">
                    <div class="card-body px-lg-5 py-lg-5">
                        <form role="form" id="form-edit-category" method="post" action="" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <input name="cat_id" id="cat_id" type="hidden" required>
                            <div class="form-group{{ $errors->has('category_name') ? ' has-danger' : '' }}">
                                <input class="form-control" name="category_name" id="cat_name" placeholder="{{ __('Category name') }} ..." type="text" required>
                                @if ($errors->has('category_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('category_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group text-center{{ $errors->has('item_image') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="item_image">{{ __('Item Image') }}</label>
                                    <div class="text-center">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            
                                            
                                        <div>
                                    </div>
                            </div>
                    </div>
                                
                                
                                <div id="addClassHere" class="form-group{{ $errors->has('item_image') ? ' has-danger' : '' }}" 
                                    >
                                    
                                    <input type="file" id="cate_image" name="item_image"/>
                                        
                                        
                                        @if ($errors->has('item_image'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('item_image') }}</strong>
                                            </span>
                                        @endif

                                        
                                </div>
                </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary my-4">{{ __('Save') }}</button>
                            </div>
                        </form>
            </div>
                    </div>
                </div>
        </div>
    </div>
</div>

<!-- NEW Language -->
<div class="modal fade" id="modal-new-language" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="modal-title-notification">{{ __('Add new language') }}</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body p-0">
                <div class="card bg-secondary shadow border-0">
                    <div class="card-body px-lg-5 py-lg-5">
                        <form role="form" method="post" action="{{ route('admin.restaurant.storenewlanguage') }}">
                            @csrf
                            <input type="hidden" value="{{$restorant_id}}"  name="restaurant_id" />
                            @include('partials.select', ['class'=>"col-12", 'classselect'=>"noselecttwo",'name'=>"Language",'id'=>"locale",'placeholder'=>__("Select Language"),'data'=>config('config.env')[2]['fields'][0]['data'],'required'=>true])
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary my-4">{{ __('Add new language') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="modal-new-service-item" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-lg" role="dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="modal-title-new-item">{{ __('Add new service item') }}</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body p-0">
                <div class="card bg-secondary shadow border-0">
                    <div class="card-body px-lg-5 py-lg-5">
                        <form role="form" method="post" id="service_form" action="{{ route('serviceitems.store') }}" enctype="multipart/form-data">
                            @csrf
                            <!-- 
                                The first field is a dropdown 
                                There are two options
                                1- Instant Booking
                                2- Long Booking
                                Default time is eshop time if default checkbox is selected
                                Put calender between service and desing in menu.blade.php
                            -->
                            
                            <input type="hidden" id="cat_id" name="category_id" value="" />

                            <div class="form-group">
                                <label class="form-control-label" for="service_type">{{ __('Service Type') }}</label>
                                <select class="form-control service_type" name="service_type" id="service_type">
                                    <option value="instant booking" selected>Instant Booking</option>
                                    <option value="long booking">Long Booking</option>
                                </select>
                            </div>

                            <div class="form-group {{ $errors->has('service_type') ? ' has-danger' : '' }}" style="display: none;">
                                
                                <select class="form-control service_type" name="service_type" id="service_type">
                                    <option value="instant booking" disabled>Instant Booking</option>
                                    <option value="long booking" disabled>Long Booking</option>
                                </select>
                                @if ($errors->has('service_type'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('service_type') }}</strong>
                                    </span>
                                @endif
                            </div>
                            

                            <div class="form-group{{ $errors->has('service_name') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="items_excel">{{ __('Service Name') }}</label>
                                <input class="form-control" name="service_name" id="service_name" placeholder="{{ __('Service Name') }} ..." type="text" required>
                                @if ($errors->has('service_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('service_name') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('service_description') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="items_excel">{{ __('Service Description') }}</label>
                                <textarea class="form-control" id="service_description" name="service_description" rows="3" placeholder="{{ __('Service description') }} ..." required></textarea>
                                @if ($errors->has('service_description'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('service_description') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="slim form-group{{ $errors->has('service_image') ? ' has-danger' : '' }}"  data-force-size="590,400" data-edit="true">
                                <input type="file" id="imgfile" name="service_image">
                                @if ($errors->has('service_image'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('service_image') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('service_price') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="items_excel">{{ __('Service Price') }}</label>
                                <input class="form-control" name="service_price" id="service_price" placeholder="{{ __('Service Price') }} ..." type="number" step="any" required>
                                @if ($errors->has('service_price'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('service_price') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('service_duration') ? ' has-danger' : '' }}">
                                <label class="form-control-label service_duration_label"  for="items_excel">{{ __('') }}</label>
                                <input class="form-control" name="service_duration" id="service_duration1" min="1" placeholder="{{ __('Service Duration') }} ..." onkeypress="return event.charCode >= 48 || event.charCode == 46" type="number" min="1"  required>
                                <p class="error_duration" style="color: red;margin-left: 10px;display:none;"></p>
                                @if ($errors->has('service_duration'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('service_duration') }}</strong>
                                    </span>
                                @endif
                            </div>
                            
                            {{-- Instant Booking Div container --}}
                            
                            <div class="long_booking" style="display: none;">
                                

                                <div class="form-group{{ $errors->has('service_arrival_date') ? ' has-danger' : '' }}">
                                    
                                    <label class="form-control-label" for="items_excel">{{ __('Arrival Date') }}</label>
                                    <div class="weekDays-selector">
                                        <input type="checkbox" id="weekday-mon-arrival" name="service_arrival_date[]" value="Monday" class="weekday" />
                                        <label for="weekday-mon-arrival">Monday</label>
                                        <input type="checkbox" id="weekday-tue-arrival" name="service_arrival_date[]" value="Tuesday" class="weekday" />
                                        <label for="weekday-tue-arrival">Tuesday</label>
                                        <input type="checkbox" id="weekday-wed-arrival" name="service_arrival_date[]" value="Wednesday" class="weekday" />
                                        <label for="weekday-wed-arrival">Wednesday</label>
                                        <input type="checkbox" id="weekday-thu-arrival" name="service_arrival_date[]" value="Thursday" class="weekday" />
                                        <label for="weekday-thu-arrival">Thursday</label>
                                        <input type="checkbox" id="weekday-fri-arrival" name="service_arrival_date[]" value="Friday" class="weekday" />
                                        <label for="weekday-fri-arrival">Friday</label>
                                        <input type="checkbox" id="weekday-sat-arrival" name="service_arrival_date[]" value="Saturday" class="weekday" />
                                        <label for="weekday-sat-arrival">Saturday</label>
                                        <input type="checkbox" id="weekday-sun-arrival" name="service_arrival_date[]" value="Sunday" class="weekday" />
                                        <label for="weekday-sun-arrival">Sunday</label>
                                    </div>


                                </div>

                                <div class="form-group{{ $errors->has('service_departure_date') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="items_excel">{{ __('Departure Date') }}</label>
                                    <div class="weekDays-selector">
                                        <input type="checkbox" id="weekday-mon-departure" name="service_departure_date[]" value="Monday" class="weekday" />
                                        <label for="weekday-mon-departure">Monday</label>
                                        <input type="checkbox" id="weekday-tue-departure" name="service_departure_date[]" value="Tuesday" class="weekday" />
                                        <label for="weekday-tue-departure">Tuesday</label>
                                        <input type="checkbox" id="weekday-wed-departure" name="service_departure_date[]" value="Wednesday" class="weekday" />
                                        <label for="weekday-wed-departure">Wednesday</label>
                                        <input type="checkbox" id="weekday-thu-departure" name="service_departure_date[]" value="Thursday" class="weekday" />
                                        <label for="weekday-thu-departure">Thursday</label>
                                        <input type="checkbox" id="weekday-fri-departure" name="service_departure_date[]" value="Friday" class="weekday" />
                                        <label for="weekday-fri-departure">Friday</label>
                                        <input type="checkbox" id="weekday-sat-departure" name="service_departure_date[]" value="Saturday" class="weekday" />
                                        <label for="weekday-sat-departure">Saturday</label>
                                        <input type="checkbox" id="weekday-sun-departure" name="service_departure_date[]" value="Sunday" class="weekday" />
                                        <label for="weekday-sun-departure">Sunday</label>
                                    </div>

                                </div>

                                <div class="form-group{{ $errors->has('service_arrival_time') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="items_excel">{{ __('Arrival Time') }}</label>
                                    <input type="time" id="service_arrival_time" name="service_arrival_time">
                                </div>

                                <div class="form-group{{ $errors->has('service_departure_time') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="items_excel">{{ __('Departure Time') }}</label>
                                    <input type="time" id="service_departure_time" name="service_departure_time">
                                </div>
                                
                                <div class="form-group{{ $errors->has('service_default_time') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="items_excel">{{ __('Default Time') }}</label>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="service_default_time" name="service_default_time" value="0" onclick="$(this).attr('value', this.checked ? 1 : 0)">
                                        <label class="form-check-label" for="mySwitch">Default arrival and departure time</label>
                                    </div>
                                </div>
                                
                                <div class="form-group{{ $errors->has('service_days_reservations') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="items_excel">{{ __('Service Reservations') }}</label>
                                    <input class="form-control" name="service_days_reservations" id="service_days_reservations" placeholder="{{ __('Service Reservations') }} ..." type="number" step="any">
                                    @if ($errors->has('service_days_reservations'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('service_days_reservations') }}</strong>
                                        </span>
                                    @endif
                                </div>

                            </div>
                            
                            {{-- Instant Booking Div container ends here --}}
                            
                        
                            {{-- Long Booking Div container --}}
                            
                            <div class="instant_booking" >
                                
                                {{-- <div class="form-group{{ $errors->has('service_available_days') ? ' has-danger' : '' }}">
                                    
                                    <label class="form-control-label" for="items_excel">{{ __('Service Available Days') }}</label>
                                    <div class="weekDays-selector">
                                        <input type="checkbox" id="weekday-mon-available" name="service_available_days[]" value="Monday" class="weekday" />
                                        <label for="weekday-mon-available">M</label>
                                        <input type="checkbox" id="weekday-tue-available" name="service_available_days[]" value="Tuesday" class="weekday" />
                                        <label for="weekday-tue-available">T</label>
                                        <input type="checkbox" id="weekday-wed-available" name="service_available_days[]" value="Wednesday" class="weekday" />
                                        <label for="weekday-wed-available">W</label>
                                        <input type="checkbox" id="weekday-thu-available" name="service_available_days[]" value="Thursday" class="weekday" />
                                        <label for="weekday-thu-available">T</label>
                                        <input type="checkbox" id="weekday-fri-available" name="service_available_days[]" value="Friday" class="weekday" />
                                        <label for="weekday-fri-available">F</label>
                                        <input type="checkbox" id="weekday-sat-available" name="service_available_days[]" value="Saturday" class="weekday" />
                                        <label for="weekday-sat-available">S</label>
                                        <input type="checkbox" id="weekday-sun-available" name="service_available_days[]" value="Sunday" class="weekday" />
                                        <label for="weekday-sun-available">S</label>
                                    </div>


                                </div> --}}

                                <div class="form-group{{ $errors->has('service_reservations') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="items_excel">{{ __('Service Reservations') }}</label>
                                    <input class="form-control" name="service_reservations" id="service_reservations" placeholder="{{ __('Service Reservations') }} ..." type="number" step="any">
                                    @if ($errors->has('service_reservations'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('service_reservations') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                {{-- <div class="form-group{{ $errors->has('service_hours') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="shours">{{ __('Service Hours') }}</label>
                                    <input class="form-control" name="service_hours" id="service_hours" placeholder="{{ __('Service Hours') }} ..." onkeypress="return event.charCode >= 48 || event.charCode == 46" type="number" min="1"  type="number" step="any">
                                    @if ($errors->has('service_hours'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('service_hours') }}</strong>
                                        </span>
                                    @endif
                                </div> --}}

                                {{-- <div class="form-group{{ $errors->has('service_hours') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="shours">{{ __('Service Hours') }}</label>
                                    <?php //print_r($working_hours_restaurant); ?> 
                                    @if(!empty($working_hours_restaurant))
                                        
                                        <div class="monday">
                                            <strong class="Monday">Monday:{{ $working_hours_restaurant["0_from"]." TO ".$working_hours_restaurant["0_to"] }}</strong>
                                        </div>
                                        <div class="tuesday">
                                            <strong class="Tuesday">Tuesday:{{ $working_hours_restaurant["1_from"]." TO ".$working_hours_restaurant["1_to"] }}</strong>
                                        </div>
                                        <div class="wednesday">
                                            <strong class="Wednesday">Wednesday:{{ $working_hours_restaurant["2_from"]." TO ".$working_hours_restaurant["2_to"] }}</strong>
                                        </div>
                                        <div class="thursday">
                                            <strong class="Thursday">Thursday:{{ $working_hours_restaurant["3_from"]." TO ".$working_hours_restaurant["3_to"] }}</strong>
                                        </div>
                                        <div class="friday">
                                            <strong class="Friday">Friday:{{ $working_hours_restaurant["4_from"]." TO ".$working_hours_restaurant["4_to"] }}</strong>
                                        </div>
                                        <div class="saturday">
                                            <strong class="Saturday">Saturday:{{ $working_hours_restaurant["5_from"]." TO ".$working_hours_restaurant["5_to"] }}</strong>
                                        </div>
                                        <div class="sunday">
                                            <strong class="Sunday">Sunday:{{ $working_hours_restaurant["6_from"]." TO ".$working_hours_restaurant["6_to"] }}</strong>
                                        </div>
                                        

                                    @endif
                                </div> --}}

                                <div class="row">
                                    <div class="col-4 custom_hours">
                                        <label class="form-control-label" for="items_custom_hours">{{ __('Add Service Hours') }}</label>
                                        <button class="btn btn-icon btn-1 btn-lg btn-primary" id="add_more_service" type="button"  title="Add service days" onclick="addMoreDays($(this))">
                                            <span class="btn-inner--icon"><i class="fa fa-plus"></i></span>
                                        </button>
                                    </div>
                                    <div class="col-4">
                                    </div>
                                    <div class="col-4 default_hours">
                                        <label class="form-control-label" for="items_default_hours">{{ __('Set Default Hours') }}</label>
                                        <input type="checkbox" name="default_hours" id="default_hours" style="width: 40px;height: 27px;" onchange="setDefaultHours($(this))" />
                                    </div>
                                </div>
                                <br />

                                <div class="below_div">
                                    <div class="row service_days_container daysContainer_1">
                                        <div class="col-3">
                                            <div class="form-group">
                                                <select class="form-control service_available_days service_available_non_default" name="service_available_days[]" id="service_available_days">
                                                    <option value="Monday" selected>Monday</option>
                                                    <option value="Tuesday">Tuesday</option>
                                                    <option value="Wednesday">Wednesday</option>
                                                    <option value="Thursday">Thursday</option>
                                                    <option value="Friday">Friday</option>
                                                    <option value="Saturday">Saturday</option>
                                                    <option value="Sunday">Sunday</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <input id="servicefrom1" name="service_from_time[]" class="flatpickr flatpickr-input form-control servicefrom1 servicefrom" type="text" placeholder="{{ __('Start Time') }}" value="">
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <input id="serviceto1" name="service_to_time[]" class="flatpickr flatpickr-input form-control serviceto1 serviceto" type="text" placeholder="{{ __('End Time') }}" value="">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row default_eshop_hours" style="display: none;">
                                    @foreach($working_hours_restaurant as $key => $value)
                                        @if($key == "Monday_from")
                                            <div class="col-4">
                                                <div class="form-group">
                                                    <select class="form-control service_available_days service_available_default" name="service_available_days[]" id="service_available_days">
                                                        <option value="Monday" <?php if($key == "Monday_from" && !empty($key["Monday_from"])){ echo "selected"; } ?>>Monday</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-4">
                                                <div class="form-group">
                                                    <input id="servicefromMonday" name="service_from_time[]" class="flatpickr flatpickr-input form-control servicefromdefault servicefrom" type="text" placeholder="{{ __('Start Time') }}" value="">
                                                </div>
                                            </div>
                                            
                                            <div class="col-4">
                                                <div class="form-group">
                                                    <input id="servicetoMonday" name="service_to_time[]" class="flatpickr flatpickr-input form-control servicetodefault serviceto" type="text" placeholder="{{ __('End Time') }}" value="">
                                                </div>
                                            </div>

                                        @endif
                                            
                                        @if($key == "Tuesday_from")
                                            <div class="col-4">
                                                <div class="form-group">
                                                    <select class="form-control service_available_days service_available_default" name="service_available_days[]" id="service_available_days">
                                                        <option value="Tuesday" <?php if($key == "Tuesday_from" && !empty($key["Tuesday_from"])){ echo "selected"; } ?>>Tuesday</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-4">
                                                <div class="form-group">
                                                    <input id="servicefromTuesday" name="service_from_time[]" class="flatpickr flatpickr-input form-control servicefromdefault servicefrom" type="text" placeholder="{{ __('Start Time') }}" value="">
                                                </div>
                                            </div>
                                            
                                            <div class="col-4">
                                                <div class="form-group">
                                                    <input id="servicetoTuesday" name="service_to_time[]" class="flatpickr flatpickr-input form-control servicetodefault serviceto" type="text" placeholder="{{ __('End Time') }}" value="">
                                                </div>
                                            </div>
                                        @endif

                                        @if($key == "Wednesday_from")
                                            <div class="col-4">
                                                <div class="form-group">
                                                    <select class="form-control service_available_days service_available_default" name="service_available_days[]" id="service_available_days">
                                                        <option value="Wednesday" <?php if($key == "Wednesday_from" && !empty($key["Wednesday_from"])){ echo "selected"; } ?>>Wednesday</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-4">
                                                <div class="form-group">
                                                    <input id="servicefromWednesday" name="service_from_time[]" class="flatpickr flatpickr-input form-control servicefromdefault servicefrom" type="text" placeholder="{{ __('Start Time') }}" value="">
                                                </div>
                                            </div>
                                            
                                            <div class="col-4">
                                                <div class="form-group">
                                                    <input id="servicetoWednesday" name="service_to_time[]" class="flatpickr flatpickr-input form-control servicetodefault serviceto" type="text" placeholder="{{ __('End Time') }}" value="">
                                                </div>
                                            </div>
                                        @endif

                                        @if($key == "Thursday_from")
                                            <div class="col-4">
                                                <div class="form-group">
                                                    <select class="form-control service_available_days service_available_default" name="service_available_days[]" id="service_available_days">
                                                        <option value="Thursday" <?php if($key == "Thursday_from" && !empty($key["Thursday_from"])){ echo "selected"; } ?>>Thursday</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-4">
                                                <div class="form-group">
                                                    <input id="servicefromThursday" name="service_from_time[]" class="flatpickr flatpickr-input form-control servicefromdefault servicefrom" type="text" placeholder="{{ __('Start Time') }}" value="">
                                                </div>
                                            </div>
                                            
                                            <div class="col-4">
                                                <div class="form-group">
                                                    <input id="servicetoThursday" name="service_to_time[]" class="flatpickr flatpickr-input form-control servicetodefault serviceto" type="text" placeholder="{{ __('End Time') }}" value="">
                                                </div>
                                            </div>
                                        @endif

                                        @if($key == "Friday_from")
                                            <div class="col-4">
                                                <div class="form-group">
                                                    <select class="form-control service_available_days service_available_default" name="service_available_days[]" id="service_available_days">
                                                        <option value="Friday" <?php if($key == "Friday_from" && !empty($key["Friday_from"])){ echo "selected"; } ?>>Friday</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-4">
                                                <div class="form-group">
                                                    <input id="servicefromFriday" name="service_from_time[]" class="flatpickr flatpickr-input form-control servicefromdefault servicefrom" type="text" placeholder="{{ __('Start Time') }}" value="">
                                                </div>
                                            </div>
                                            
                                            <div class="col-4">
                                                <div class="form-group">
                                                    <input id="servicetoFriday" name="service_to_time[]" class="flatpickr flatpickr-input form-control servicetodefault serviceto" type="text" placeholder="{{ __('End Time') }}" value="">
                                                </div>
                                            </div>
                                        @endif

                                        @if($key == "Saturday_from")
                                            <div class="col-4">
                                                <div class="form-group">
                                                    <select class="form-control service_available_days service_available_default" name="service_available_days[]" id="service_available_days">
                                                        <option value="Saturday" <?php if($key == "Saturday_from" && !empty($key["Saturday_from"])){ echo "selected"; } ?>>Saturday</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-4">
                                                <div class="form-group">
                                                    <input id="servicefromSaturday" name="service_from_time[]" class="flatpickr flatpickr-input form-control servicefromdefault servicefrom" type="text" placeholder="{{ __('Start Time') }}" value="">
                                                </div>
                                            </div>
                                            
                                            <div class="col-4">
                                                <div class="form-group">
                                                    <input id="servicetoSaturday" name="service_to_time[]" class="flatpickr flatpickr-input form-control servicetodefault serviceto" type="text" placeholder="{{ __('End Time') }}" value="">
                                                </div>
                                            </div>
                                        @endif

                                        @if($key == "Sunday_from")
                                            <div class="col-4">
                                                <div class="form-group">
                                                    <select class="form-control service_available_days service_available_default" name="service_available_days[]" id="service_available_days">
                                                        <option value="Sunday" <?php if($key == "Sunday_from" && !empty($key["Sunday_from"])){ echo "selected"; } ?>>Sunday</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-4">
                                                <div class="form-group">
                                                    <input id="servicefromSunday" name="service_from_time[]" class="flatpickr flatpickr-input form-control servicefromdefault  servicefrom" type="text" placeholder="{{ __('Start Time') }}" value="">
                                                </div>
                                            </div>
                                            
                                            <div class="col-4">
                                                <div class="form-group">
                                                    <input id="servicetoSunday" name="service_to_time[]" class="flatpickr flatpickr-input form-control servicetodefault serviceto" type="text" placeholder="{{ __('End Time') }}" value="">
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach 
                                    
                                </div>

                            </div>
                            
                            {{-- Long Booking Div container ends here --}}

                            
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary my-4">{{ __('Save') }}</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-import-items" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="modal-title-new-item">{{ __('Import items from CSV') }}</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body p-0">
                <div class="card bg-secondary shadow border-0">
                    <div class="card-body px-lg-5 py-lg-5">
                        <div class="col-md-10 offset-md-1">
                        <form role="form" method="post" action="{{ route('import.items') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group text-center{{ $errors->has('item_image') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="items_excel">{{ __('Import your file') }}</label>
                                <div class="text-center">
                                    <input type="file" class="form-control form-control-file" name="items_excel" accept=".csv, .ods, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" required>
                                </div>
                            </div>
                            <input name="res_id" id="res_id" type="hidden" value="{{ $restorant_id }}" required>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary my-4">{{ __('Save') }}</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
