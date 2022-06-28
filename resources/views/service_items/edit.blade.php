@extends('layouts.app', ['title' => __('Orders')])

@section('content')
    <div class="modal fade" id="modal-new-extras" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
        <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="modal-title-new-extras">{{ __('Add new extras') }}</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body p-0">
                    <div class="card bg-secondary shadow border-0">
                        <div class="card-body px-lg-5 py-lg-5">
                            <form role="form" method="post" action="{{ route('serviceextras.store', $item) }}" enctype="multipart/form-data">
                                @csrf

                                @include('partials.input',['name'=>'Name','id'=>'extras_name','required'=>true,'placeholder'=>'Name'])
                                @include('partials.input',['type'=>"number",'name'=>'Price','id'=>'extras_price','required'=>true,'placeholder'=>'Price'])

                                @include('partials.input',['type'=>"hidden",'name'=>'','id'=>'extras_id','required'=>false,'placeholder'=>'id'])


                                @if ($item->has_variants)
                                <div class="form-group">

                                    <label for="variantsSelector">{{ __('Select variant or leave empty for all') }}</label><br />
                                    <select name="variantsSelector[]" multiple="multiple" class="form-control noselecttwo"  id="variantsSelector">
                                        @foreach ($item->uservariants as $variant)
                                            <option id="var{{$variant->id}}" value="{{$variant->id}}">{{ "#".$variant->id.": ".$variant->optionsList }}</option>
                                        @endforeach
                                    </select>
                                  </div>
                                @endif
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
    
    <div class="modal fade" id="modal-edit-service-hours" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
        <div class="modal-dialog modal- modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="modal-title-new-extras">{{ __('Edit Service Hours') }}</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                
                <div class="modal-body p-0 service_body">
                    <div class="card bg-secondary shadow border-0">
                        <div class="card-body px-lg-5 py-lg-5">
                            <form role="form" method="post" action="{{ route('serviceitems.singlehour') }}" enctype="multipart/form-data">
                            @csrf 
                                <div class="row">
                                    <input type="hidden" name="service_id" id="service_id" value="">
                                    <input type="hidden" name="day_changed" id="day_changed" value="">
                                    <input type="hidden" name="time_changed" id="time_changed" value="">
                                    <div class="col-4">
                                        <div class="form-group">
                                            <select class="form-control service_available_days" name="service_available_days" id="service_available_days">
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
                                    <div class="col-4">
                                        <div class="form-group">
                                            <input id="servicefrom" onchange="slot_changed(this)" name="service_from_time" class="flatpickr flatpickr-input form-control servicefrom1 servicefrom" type="text" placeholder="{{ __('Start Time') }}" value="">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <input id="serviceto" onchange="slot_changed(this)" name="service_to_time" class="flatpickr flatpickr-input form-control serviceto1 serviceto" type="text" placeholder="{{ __('End Time') }}" value="">
                                        </div>
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

    <div class="modal fade" id="modal-new-service-hours" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
        <div class="modal-dialog modal- modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="modal-title-new-extras">{{ __('Create Service Hours') }}</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                
                <div class="modal-body p-0 service_body">
                    <div class="card bg-secondary shadow border-0">
                        <div class="card-body px-lg-5 py-lg-5">
                            <form role="form" method="post" action="{{ route('serviceitems.createsinglehour' ) }}" enctype="multipart/form-data">
                            @csrf
                            <?php //echo "<pre>"; print_r($item->category->restorant_id); die;?> 
                                <div class="row">
                                    <input type="hidden" name="service_create_id" id="service_create_id" value="{{ $item->id }}">
                                    <input type="hidden" name="restorant_id" id="restorant_id" value="{{ $item->category->restorant_id }}">
                                    <input type="hidden" name="service_duration_single" id="service_duration_single" value="{{ $item->service_duration }}">
                                    <input type="hidden" name="service_reservations_single" id="service_reservations_single" value="{{ $item->service_reservations }}">
                                    <div class="col-4">
                                        <div class="form-group">
                                            <select class="form-control service_create_available_days" name="service_create_available_days" id="service_create_available_days">
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
                                    <div class="col-4">
                                        <div class="form-group">
                                            <input id="servicecreatefrom" name="service_create_from_time" class="flatpickr flatpickr-input form-control " type="text" placeholder="{{ __('Start Time') }}" >
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <input id="servicecreateto" name="service_create_to_time" class="flatpickr flatpickr-input form-control " type="text" placeholder="{{ __('End Time') }}" >
                                        </div>
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

    <script>
        function setRestaurantId(id){
            $('#res_id').val(id);
        }
    </script>
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
    </div>
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-md-12">
                <br/>
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Item Management') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                @if(auth()->user()->hasRole('owner'))
                                    <a href="{{ route('serviceitems.index') }}" class="btn btn-sm btn-primary">{{ __('Back to service items') }}</a>
                                @elseif(auth()->user()->hasRole('admin'))
                                    <a href="{{ route('serviceitems.admin', $restorant) }}" class="btn btn-sm btn-primary">{{ __('Back to service items') }}</a>
                                @endif
                            </div>
                        </div>
                    </div>
                    <br/>
                    <div class="col-12">
                        @include('partials.flash')
                    </div>
                    <div class="card-body">
                        <h6 class="heading-small text-muted mb-4">{{ __('Item information') }}</h6>
                        <div class="pl-lg-4">
                            <form method="post" action="{{ route('serviceitems.update', $item) }}" autocomplete="off" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="row">
                                    <!-- Service Type -->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            @include('partials.select', ['name'=>"Service Type",'id'=>"service_type",'placeholder'=>"",'data'=>$service_types,'required'=>true, 'value'=>$item->booking_type])
                                        </div>    
                                    </div>
                                    <input type="hidden" name="changed_duration" id="changed_duration" value="0">
                                    <!-- Service Name -->
                                    <div class="col-md-4">
                                        <div class="form-group{{ $errors->has('service_name') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="items_excel">{{ __('Service Name') }}</label>
                                            <input class="form-control" name="service_name" id="service_name" value="{{ $item->service_name }}" type="text" required>
                                            @if ($errors->has('service_name'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('service_name') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <!-- Service Duration -->
                                    <div class="col-md-4">
                                        <div class="form-group{{ $errors->has('service_duration') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="items_excel">{{ __('Service Duration (Hours)') }}</label>
                                            <input class="form-control" name="service_duration" id="service_duration" value="{{ $item->service_duration }}" onkeypress="return event.charCode >= 48 || event.charCode == 46" type="number" min="1"  required>
                                            <p class="error_duration" style="color: red;margin-left: 10px;display:none;"></p>
                                            @if ($errors->has('service_duration'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('service_duration') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    
                                    <!-- Service Type Container for extra fields - Long Booking -->
                                    @if($item->booking_type == 'long booking' || true)
                                        <div class="long_booking" style="display: none;">
                                        
                                            <div class="row" style="margin-left:0px;">
                                                    
                                                <div class="col-lg-12">
                                                    <div class="form-group{{ $errors->has('service_arrival_date') ? ' has-danger' : '' }}">
                                            
                                                        <label class="form-control-label" for="items_excel">{{ __('Arrival Date') }}</label>
                                                        <div class="weekDays-selector-long">
                                                            <input type="checkbox" id="weekday-mon-arrival" name="service_arrival_date[]" value="Monday" class="weekday" />
                                                            <label for="weekday-mon-arrival">M</label>
                                                            <input type="checkbox" id="weekday-tue-arrival" name="service_arrival_date[]" value="Tuesday" class="weekday" />
                                                            <label for="weekday-tue-arrival">T</label>
                                                            <input type="checkbox" id="weekday-wed-arrival" name="service_arrival_date[]" value="Wednesday" class="weekday" />
                                                            <label for="weekday-wed-arrival">W</label>
                                                            <input type="checkbox" id="weekday-thu-arrival" name="service_arrival_date[]" value="Thursday" class="weekday" />
                                                            <label for="weekday-thu-arrival">T</label>
                                                            <input type="checkbox" id="weekday-fri-arrival" name="service_arrival_date[]" value="Friday" class="weekday" />
                                                            <label for="weekday-fri-arrival">F</label>
                                                            <input type="checkbox" id="weekday-sat-arrival" name="service_arrival_date[]" value="Saturday" class="weekday" />
                                                            <label for="weekday-sat-arrival">S</label>
                                                            <input type="checkbox" id="weekday-sun-arrival" name="service_arrival_date[]" value="Sunday" class="weekday" />
                                                            <label for="weekday-sun-arrival">S</label>
                                                        </div>
                    
                    
                                                    </div>
                                                </div>
                                                
                                                <div class="col-lg-12">
                                                    <div class="form-group{{ $errors->has('service_departure_date') ? ' has-danger' : '' }}">
                                                        
                                                        <label class="form-control-label" for="items_excel">{{ __('Departure Date') }}</label>
                                                        <div class="weekDays-selector-long-departure">
                                                            <input type="checkbox" id="weekday-mon-departure" name="service_departure_date[]" value="Monday" class="weekday" />
                                                            <label for="weekday-mon-departure">M</label>
                                                            <input type="checkbox" id="weekday-tue-departure" name="service_departure_date[]" value="Tuesday" class="weekday" />
                                                            <label for="weekday-tue-departure">T</label>
                                                            <input type="checkbox" id="weekday-wed-departure" name="service_departure_date[]" value="Wednesday" class="weekday" />
                                                            <label for="weekday-wed-departure">W</label>
                                                            <input type="checkbox" id="weekday-thu-departure" name="service_departure_date[]" value="Thursday" class="weekday" />
                                                            <label for="weekday-thu-departure">T</label>
                                                            <input type="checkbox" id="weekday-fri-departure" name="service_departure_date[]" value="Friday" class="weekday" />
                                                            <label for="weekday-fri-departure">F</label>
                                                            <input type="checkbox" id="weekday-sat-departure" name="service_departure_date[]" value="Saturday" class="weekday" />
                                                            <label for="weekday-sat-departure">S</label>
                                                            <input type="checkbox" id="weekday-sun-departure" name="service_departure_date[]" value="Sunday" class="weekday" />
                                                            <label for="weekday-sun-departure">S</label>
                                                        </div>
                    
                                                    </div>
                                                </div>
                
                                                <div class="col-lg-12">
                                                    <div class="form-group{{ $errors->has('service_arrival_time') ? ' has-danger' : '' }}">
                                                        <label class="form-control-label" for="items_excel">{{ __('Arrival Time') }}</label>
                                                        <input type="time" id="service_arrival_time" name="service_arrival_time" value="{{ $item->service_arrival_time }}">
                                                    </div>
                                                </div>
                
                                                <div class="col-lg-12">
                                                    <div class="form-group{{ $errors->has('service_departure_time') ? ' has-danger' : '' }}">
                                                        <label class="form-control-label" for="items_excel">{{ __('Departure Time') }}</label>
                                                        <input type="time" id="service_departure_time" name="service_departure_time" value="{{ $item->service_departure_time }}">
                                                    </div>
                                                </div>
                                                
                                                <div class="col-lg-12">
                                                    <div class="form-group{{ $errors->has('service_default_time') ? ' has-danger' : '' }}">
                                                        <label class="form-control-label" for="items_excel">{{ __('Default Time') }}</label>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" id="service_default_time" name="service_default_time" value="<?php if(isset($item->is_default_checked)){echo "1";} else{echo "0";} ?>" onclick="$(this).attr('value', this.checked ? 1 : 0)">
                                                            <label class="form-check-label" for="mySwitch">Default arrival and departure time</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-lg-12">
                                                    <div class="form-group{{ $errors->has('service_days_reservations') ? ' has-danger' : '' }}">
                                                        <label class="form-control-label" for="items_excel">{{ __('Service Reservations') }}</label>
                                                        <input class="form-control" name="service_days_reservations" id="service_days_reservations" value="{{ $item->service_reservation }}" type="number" step="any">
                                                        @if ($errors->has('service_days_reservations'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('service_days_reservations') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            
                                            </div>
                                        
                                        
                                        </div>
                                    @endif
                                    
                                    <!-- Service Type Container for extra fields - Instant Booking -->
                                    @if($item->booking_type == 'instant booking' || true)
                                        <div class="instant_booking" style="display: none;">
                                            <div class="row" style="margin-left:0px;">
                                                
                                                <div class="col-lg-12" style="display: none;">
                                                    <div class="form-group{{ $errors->has('service_available_days') ? ' has-danger' : '' }}">
                                        
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
                    
                    
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group{{ $errors->has('service_reservations') ? ' has-danger' : '' }}">
                                                        <label class="form-control-label" for="items_excel">{{ __('Service Reservations') }}</label>
                                                        <input class="form-control" name="service_reservations" id="service_reservations" value="{{ $item->service_reservations }}" type="number" step="any">
                                                        @if ($errors->has('service_reservations'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('service_reservations') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                
                                                {{-- <div class="col-md-12">
                                                    <div class="form-group{{ $errors->has('service_hours') ? ' has-danger' : '' }}">
                                                        <label class="form-control-label" for="shours">{{ __('Service Hours') }}</label>
                                                        <input class="form-control" name="service_hours" id="service_hours" value="{{ $item->service_hours }}" onkeypress="return event.charCode >= 48 || event.charCode == 46" type="number" min="1"  type="number" step="any">
                                                        @if ($errors->has('service_hours'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('service_hours') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div> --}}
                                                
                                            </div>
                                            
                                        </div>
                                    @endif                                    

                                    {{-- <div class="col-md-6">
                                        <div class="form-group{{ $errors->has('service_name') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="service_name">{{ __('Item Name') }}</label>
                                            <input type="text" name="service_name" id="service_name" class="form-control form-control-alternative{{ $errors->has('service_name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('service_name', $item->service_name) }}" required autofocus>
                                            @if ($errors->has('service_name'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('service_name') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div> --}}

                                    <div class="col-md-4">
                                        @include('partials.select', ['name'=>"Category",'id'=>"category_id",'placeholder'=>"Select category",'data'=>$categories,'required'=>true, 'value'=>$item->service_category_id])
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group{{ $errors->has('item_price') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="service_price">{{ __('Item Price') }}</label>
                                            <input type="number" step="any" name="service_price" id="service_price" class="form-control form-control-alternative{{ $errors->has('service_price') ? ' is-invalid' : '' }}" value="{{ $item->service_price }}" value="{{ old('service_price', $item->price) }}" required autofocus>
                                            @if ($errors->has('service_price'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('service_price') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    
                                    {{-- <div class="col-md-6">
                                        @if ($restorant->getConfig('hide_tax_input',"false")!="false")
                                        <!-- Hidden -->
                                        @include('partials.input',['id'=>'vat','name'=>__('VAT percentage( calculated into item price )'),'placeholder'=>__('Item VAT percentage'),'value'=>$item->vat==""?$restorant->getConfig('default_tax_value',0):$item->vat,'required'=>false,'type'=>'hidden'])
                                        @else
                                        @include('partials.input',['id'=>'vat','name'=>__('VAT percentage( calculated into item price )'),'placeholder'=>__('Item VAT percentage'),'value'=>$item->vat==""?$restorant->getConfig('default_tax_value',0):$item->vat,'required'=>false,'type'=>'number'])
                                        @endif
                                    </div> --}}
                                    
                                    <div class="col-md-6">
                                        @if($item->has_variants==1)
                                            @include('partials.toggle',['additionalInfo'=>' Missing variants will have the same price as the item','id'=>'enable_system_variants','name'=>'Enable System Variants (Beta)','checked'=>($item->enable_system_variants==1)])
                                        @endif
                                    </div>


                                    <div class="col-md-12">
                                        <div class="form-group{{ $errors->has('service_description') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="service_description">{{ __('Item Description') }}</label>
                                            <textarea id="service_description" name="service_description" class="form-control form-control-alternative{{ $errors->has('service_description') ? ' is-invalid' : '' }}"  required autofocus rows="3">{{  $item->service_description }}</textarea>
                                            @if ($errors->has('service_description'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('service_description') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        @include('partials.toggle',['id'=>'itemAvailable','name'=>'Item available','checked'=>($item->available == 1)])
                                    </div>

                                    <div class="col-md-6">
                                        <?php $image=['dimensions'=>'590,400','name'=>'item_image','label'=>__('Service Image'),'value'=> $item->logom,'style'=>'width: 290px; height:200']; ?>
                                        @include('partials.images',$image)
                                    </div>

                                    {{-- <div class="col-md-6">
                                        @include('partials.toggle',['id'=>'has_variants','name'=>'Enable variants','checked'=>($item->has_variants==1)])
                                    </div> --}}
                                </div>
                                <div class="text-center">
                                   <button type="submit" class="btn btn-success mt-4">{{ __('Save') }}</button>
                                </div>
                            </form>
                            <div class="text-center">
                                <form action="{{ route('serviceitems.destroy', $item) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="button" class="btn btn-danger mt-4" onclick="confirm('{{ __("Are you sure you want to delete this item?") }}') ? this.parentElement.submit() : ''">{{ __('Delete') }}</button>
                                </form>
                            </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="col-md-12 mb-xl-0">
                    <br/>

                    @if ($item->has_variants==1)
                        <div class="card card-profile shadow">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <h5 class="h3 mb-0">{{ __('Variants') }}</h5>
                                    </div>
                                    <div class="col-6 text-right">
                                        <a class="btn btn-secondary btn-sm" href="{{  route('items.options.index',$item->id)}}">{{ __('Edit Options')}}</a>
                                        <a class="btn btn-success btn-sm" href="{{  route('items.variants.create',['item'=>$item->id])}}">{{ __('Add Variant')}}</a>
                                    </div>

                                </div>
                            </div>
                            <div class="card-body">



                            @include('items.variants.content')
                            <div class="table-responsive">
                                <table class="table align-items-center table-flush">
                                    <thead class="thead-light">
                                        @yield('thead')
                                    </thead>
                                    <tbody>
                                        @yield('tbody')
                                    </tbody>
                                </table>
                            </div>


                            </div>

                        </div>

                        <br />
                    @endif

                    {{-- Extras --}}
                    <div class="card card-profile shadow">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h5 class="h3 mb-0">{{ __('Extras') }}</h5>
                                </div>
                                <div class="col-4 text-right">
                                <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-new-extras" onClick=(setRestaurantId({{ $restorant_id }}))>{{ __('Add') }}</button>
                                </div>
                            </div>
                        </div>
                            <div class="table-responsive">
                                <table class="table align-items-center">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col" class="sort" data-sort="name">{{ __('Name') }}</th>
                                            <th scope="col" class="sort" data-sort="name">{{ __('Price') }}</th>
                                            @if ($item->has_variants==1)<th scope="col">{{ __('For') }}</th>@endif
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody class="list">
                                        <script>
                                            var extras=<?php echo $item->extras->load('variants') ?>;
                                            
                                        </script>
                                        @foreach($item->extras as $extra)
                                            <tr>
                                                <th scope="row">{{ $extra->name }}</th>
                                                <td class="budget">@money( $extra->price, config('settings.cashier_currency'),config('settings.do_convertion'))</td>
                                                @if ($item->has_variants==1)<td class="budget">{{ $extra->extra_for_all_variants?__('All variants'):__('Selected') }}</td>@endif
                                                <td class="text-right">
                                                    <div class="dropdown">
                                                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fas fa-ellipsis-v"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">

                                                            <button type="button" class="dropdown-item" data-toggle="modal" data-target="#modal-new-extras" onClick=(setExtrasId({{ $extra->id }}))>Edit</button>
                                                            <form action="{{ route('serviceextras.destroy',[$item, $extra]) }}" method="post">
                                                                @csrf
                                                                @method('delete')

                                                                <button type="button" class="dropdown-item" onclick="confirm('{{ __("Are you sure you want to delete this extras?") }}') ? this.parentElement.submit() : ''">
                                                                    {{ __('Delete') }}
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                    </div>

                    <!-- Included views -->
                    @foreach ($extraViews as $extraView )
                        @include($extraView['route'])
                    @endforeach

                    <br />
                    
                    
                    <div class="card card-profile shadow">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h5 class="h3 mb-0">{{ __('Service Hours') }}</h5>
                                    </div>
                                    <div class="col-4 text-right">
                                        <button type="button" class="btn btn-sm btn-primary" onclick="openCreateModal(this)" >{{ __('Add') }}</button>
                                    </div>
                                </div>
                            <div class="row align-items-center">
                                <div class="col-8">
                                    @if($item->is_default_checked)
                                        <p>This Service has default Service Hours. 
                                            Click Below to change 
                                            <a href="{{ route('admin.restaurants.edit',  auth()->user()->restorant->id) }}">
                                                <h3 class="text-uppercase">Change Time
                                                </h3>
                                            </a>
                                        </p>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table align-items-center">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col" class="sort" data-sort="name">{{ __('Day') }}</th>
                                            <th scope="col" class="sort" data-sort="name">{{ __('Start Time') }}</th>
                                            <th scope="col" class="sort" data-sort="name">{{ __('End Time') }}</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody class="list">
                                        @foreach($service_hours_days as $shours)
                                            <tr>
                                                <td class="budget">{{ $shours->day }}</td>
                                                <td class="budget">{{ $shours->service_from_time }}</td>
                                                <td class="budget">{{ $shours->service_to_time }}</td>
                                                <td class="text-right">
                                                    @if(! $item->is_default_checked)
                                                        <div class="dropdown">
                                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fas fa-ellipsis-v"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                                
                                                                    <button type="button" class="dropdown-item" data-toggle="modal" data-target="#modal-edit-service-hours" onClick="set_service_hours({{ $shours->id }})">Edit</button>
                                                                    <form action="{{ route('serviceitems.deletesinglehour', $shours->id) }}" method="post">
                                                                        @csrf
        
                                                                        <button type="button" class="dropdown-item" onclick="delete_service_hour(this)">
                                                                            {{ __('Delete') }}
                                                                        </button>
                                                                    </form>
                                                            </div>
                                                        </div>
                                                    @endif
                                                    
                                                </td>
                                                
                                            </tr>
                                        @endforeach
                                    </tbody>
                        </div>

                    </div>
            </div>
        </div>
        @include('layouts.footers.auth')
    </div>
@endsection

@section('js')
<script type="text/javascript">
    $(document).ready(function(){
        
        


        ///////////////////////////////
        var a_days = '<?php echo $av_days;?>';
        
        
        $('.weekDays-selector input').each(function(e){
            
            if(a_days.includes($(this).val())){
                $(this).attr("checked","checked");
            }
        });
        
        
        $('.weekDays-selector-long input').each(function(e){
            
            if(a_days.includes($(this).val())){
                $(this).attr("checked","checked");
            }
        });

        $('.weekDays-selector-long-departure input').each(function(e){
            
            if(a_days.includes($(this).val())){
                $(this).attr("checked","checked");
            }
        });

        // Display long or instant booking divs
        var show_div = '<?php echo $item->booking_type;?>';

        if(show_div == 'instant booking'){
            $(".instant_booking").show();
            $(".long_booking").hide();
        }
        else{
            $(".long_booking").show();
            $(".instant_booking").hide();
        }
        
    });

    $(document).on("change","#service_type",function(){
                
        let value = $(this).val();
        
        if(value == 'instant booking'){
            $(".instant_booking").show();
            $(".long_booking").hide();
        }
        else{
            $(".long_booking").show();
            $(".instant_booking").hide();
        }     
    });

    var a_days = <?php echo $service_hours_days;?>;
    var original_day = '';
    var original_from = '';
    var original_to = '';
    function set_service_hours(id){
        // here the id is the Incremental id of hours_services table

        // console.log("the id being sent",id);
        // console.log("a Days",a_days);
        // console.log("hello",a_days[id - 1]);

        var sid = parseInt(id);
        original_day = a_days[id - 1]['day'];
        original_from = a_days[id - 1]['service_from_time'];
        original_to = a_days[id - 1]['service_to_time'];

        // console.log("the id",sid);
        $(".service_body #service_available_days").val(a_days[id - 1]['day']);
        $(".service_body #service_id").val(parseInt(sid));
        

        var timeFormat = 'AM/PM';
    
        const my_flatpickr_from = $('#servicefrom').flatpickr({
            static: true,
            enableTime: true,
            dateFormat: timeFormat == "AM/PM" ? "h:i K": "H:i",
            noCalendar: true,
            altFormat: timeFormat == "AM/PM" ? "h:i K" : "H:i",
            altInput: true,
            allowInput: true,
            time_24hr: timeFormat == "AM/PM" ? false : true,
            defaultDate: a_days[id - 1]['service_from_time']
        });

        const my_flatpickr_to = $('#serviceto').flatpickr({
            static: true,
            enableTime: true,
            dateFormat: timeFormat == "AM/PM" ? "h:i K": "H:i",
            noCalendar: true,
            altFormat: timeFormat == "AM/PM" ? "h:i K" : "H:i",
            altInput: true,
            allowInput: true,
            time_24hr: timeFormat == "AM/PM" ? false : true,
            defaultDate: a_days[id - 1]['service_to_time']
        });
    }

    function openCreateModal(exp){

        var timeFormat = 'AM/PM';

        const my_flatpickr_from = $('#servicecreatefrom').flatpickr({
            static: true,
            enableTime: true,
            dateFormat: timeFormat == "AM/PM" ? "h:i K": "H:i",
            noCalendar: true,
            altFormat: timeFormat == "AM/PM" ? "h:i K" : "H:i",
            altInput: true,
            allowInput: true,
            time_24hr: timeFormat == "AM/PM" ? false : true,
            //defaultDate: a_days[id - 1]['service_from_time']
        });

        const my_flatpickr_to = $('#servicecreateto').flatpickr({
            static: true,
            enableTime: true,
            dateFormat: timeFormat == "AM/PM" ? "h:i K": "H:i",
            noCalendar: true,
            altFormat: timeFormat == "AM/PM" ? "h:i K" : "H:i",
            altInput: true,
            allowInput: true,
            time_24hr: timeFormat == "AM/PM" ? false : true,
            //defaultDate: a_days[id - 1]['service_to_time']
        });
        $("#modal-new-service-hours").modal("show");
    }

    $(document).ready(function(){
        $("#service_available_days").select2('destroy'); 
        $("#service_create_available_days").select2('destroy'); 
    
    });


    function delete_service_hour(exp){

        $.confirm({
            title: 'Delete!',
            content: 'Do you want to delete this service hour?',
            theme: 'dark',
            buttons: {
                confirm: function () {
                    exp.parentElement.submit();
                    // console.log("parent Element",exp.parentElement);
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
        let original_val = '{{ $item->service_duration }}';

        if(num % 5 == 0){
            // ok
            $(".error_duration").hide();
        }
        else{
            $(".error_duration").show();
            $(".error_duration").text("Please enter multiples of 5 - 5, 10, 15, 25, 30").fadeOut(1900, function() {
                // console.log("on error original val",original_val);
                e.target.value = original_val;
            });
        }

        if(num != original_val){
            $("#changed_duration").val(1);
        }
    });

    // Function to detect if day is changed
    $(document).on("change","#service_available_days",function(e){
        
        if($(this).val() == original_day){
            $("#day_changed").val(0);
        }
        else{
            $("#day_changed").val(1);
        }
    });

    function slot_changed(time){
        // console.log(time);

        if(time != original_from || time != original_to){
            //alert("changed Time");
            $("#time_changed").val(1); 
        }
        // $("#time_changed").val(1);
    }

</script>
    <script type="text/javascript">
        "use strict";
        function setExtrasId(id){


            //Remove all seleted
            
            

            $('option', $('#variantsSelector')).each(function(element) {
                $(this).removeAttr('selected').prop('selected', false);
            });
            
            extras.forEach(element => {

                if(element.id==id){
                    
                    $('#modal-title-new-extras').html("Edit option")
                    $('#extras_id').val(element.id);
                    $('#extras_name').val(element.name);
                    $('#extras_price').val(element.price);
                    element.variants.forEach(variant => {
                        $('#var'+variant.id).attr('selected',true)
                    });

                 }
                }
            );
        }

    </script>


    
@endsection
