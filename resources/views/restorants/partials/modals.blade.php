<div class="modal" id="productModal" z-index="9999" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-" role="document" id="modalDialogItem">
        <div class="modal-content">
            <div class="modal-header">
                
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body p-0">
                <div class="card shadow border-0">
                    <div class="card-body px-lg-5 py-lg-5">
                        <div class="row">
                            <div class="col-sm col-md col-lg text-center" id="modalImgPart">
                              <img id="modalImg" src="" width="295px" height="200px" style="width: 100%;">  
                            </div>
  
                            <div class="col-sm col-md col-lg col-lg" id="modalItemDetailsPart">
                              <h5 id="modalTitle" class="modal-title product_title" id="modal-title-new-item"></h5>
                                <input id="modalID" type="hidden"></input>
                                <span id="modalPrice" class="new-price"></span>
                                
                                

                                <div id="variants-area">
                                    <label class="form-control-label">{{ __('Select your options') }}</label>
                                    <div id="variants-area-inside">
                                    </div>
                                </div>
                                <div id="exrtas-area">
                                    <br />
                                    <label class="form-control-label" for="quantity">{{ __('Extras') }}</label>
                                    <div id="exrtas-area-inside">
                                    </div>
                                </div>
                               @if(  !(isset($canDoOrdering)&&!$canDoOrdering)   )
                                <div class="quantity-area">
                                    <div class="form-group">
                                        <label class="form-control-label" for="quantity">{{ __('Quantity') }}</label>
                                        <!--<input type="number" name="quantity" id="quantity" class="form-control form-control-alternative" placeholder="1" value="1" required autofocus>-->
                                       <div class="quantity-controller">
                                            <div class="minus-container">
                                              <span id="minus">-</span>
                                         </div> 
                                         <div>
                                           <input
                                                    type="number"
                                                    min="1"
                                                    step="1"
                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                    name="quantity" 
                                                    id="quantity" 
                                                    class="form-control form-control-alternative" 
                                                    placeholder="1" 
                                                    value="1" 
                                                    required 
                                                    autofocus
                                            >
                                         </div>
                                         <div class="plus-container">
                                           <span id="plus">+</span>
                                         </div>
                                      </div>
                                    </div>
                                  <div class="instruction d-flex">
                                    <div class="col-12 p-0 d-flex align-items-center mb-4 mt-2">
                                        <i class="icons8 icons8-shop me-1" title="" data-placement="" data-original-title=""></i>
                                        <p class="legend mb-0">Click &amp; Collect</p>
                                    </div>
                                  </div>
                                    <div class="quantity-btn">
                                        <div id="addToCart1">
                                            <button class="btn btn-primary" v-on:click='addToCartAct'>{{ __('Add To Cart') }}</button>
                                        </div>
                                    </div>
                                  <div class="product description">
                                    <p>
                                      Product description
                                    </p>
                                    <div>
                                      <p id="modalDescription"></p>
                                    </div>
                                  </div>
                                   
                                </div>
                               @endif
                                <!-- Inform if closed -->
                                @if (isset($openingTime)&&!empty($openingTime))
                                        <span class="closed_time">{{__('Opens')}} {{ $openingTime }}</span>
                                    @endif
                                <!-- End inform -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-import-restaurants" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="modal-title-new-item">{{ __('Import restaurants from CSV') }}</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body p-0">
                <div class="card bg-secondary shadow border-0">
                    <div class="card-body px-lg-5 py-lg-5">
                        <div class="col-md-10 offset-md-1">
                        <form role="form" method="post" action="{{ route('import.restaurants') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group text-center{{ $errors->has('item_image') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="resto_excel">Import your file</label>
                                <div class="text-center">
                                    <input type="file" class="form-control form-control-file" name="resto_excel" accept=".csv, .ods, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" required>
                                </div>
                            </div>
                            <input name="category_id" id="category_id" type="hidden" required>
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
@isset($restorant)
<div class="modal fade" id="modal-restaurant-info" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-lg" role="document" >
        <div class="modal-content">
            <div class="modal-header">
                <h5 id="modalRestaurantTitle"  class="modal-title notranslate">{{ $restorant->name }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body p-0">
                <div class="card">
                    <div class="card-header bg-white text-center">
                        <img class="rounded img-center" src="{{ $restorant->icon }}" width="90px" height="90px"></img>
                        <h4 class="heading mt-4">{{ $restorant->name }} &nbsp;@if(count($restorant->ratings))<span><i class="fa fa-star" style="color: #dc3545"></i> <strong>{{ number_format($restorant->averageRating, 1, '.', ',') }} <span class="small">/ 5 ({{ count($restorant->ratings) }})</strong></span></span>@endif</h4>
                        <p class="description">{{ $restorant->description }}</p>
                        @if(!empty($openingTime) && !empty($closingTime))
                            <p class="description">{{ __('Open') }}: {{ $openingTime }} - {{ $closingTime }}</p>
                        @endif
                    </div>
                    <div class="card-body">
                        <div class="nav-wrapper">
                            <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true">{{ __('About') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false">{{ __('Reviews') }}</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6 class="heading-small">{{ __('Phone') }}</h6>
                                        <p class="heading-small text-muted">{{ $restorant->phone }}</p>
                                        <br/>
                                        <h6 class="heading-small">{{ __('Address') }}</h6>
                                        <p class="heading-small text-muted">{{ $restorant->address }}</p>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div id="map3" class="form-control form-control-alternative"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                                @if(count($restorant->ratings) != 0)
                                    <br/>
                                    <h5>{{ count($restorant->ratings) }} {{ count($restorant->ratings) == 1 ? __('Review') : __('Reviews')}}</h5>
                                    <hr />
                                    
                                    @foreach($restorant->ratings as $rating)
                                        <div class="strip">
                                            <span class="res_title"><b>{{ $rating->user->name }}</b></span><span class="float-right"><i class="fa fa-star" style="color: #dc3545"></i> <strong>{{ number_format($rating->rating, 1, '.', ',') }} <span class="small">/ 5</strong></span></span><br />
                                            <span class="text-muted"> {{ $rating->created_at->format(env('DATETIME_DISPLAY_FORMAT','d M Y')) }}</span><br/>
                                            <br/>
                                            <span class="res_description text-muted">{{ $rating->comment }}</span><br />
                                        </div>
                                    @endforeach
                                @else
                                  <p>{{ __('There are no reviews yet.') }}<p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div style="background: #fff; position: absolute;top:0;bottom:0;">



{{-- Add to cart for services --}}
<div class="modal" id="productModalServices" data-keyboard="false" data-backdrop="static" z-index="9999" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-" role="document" id="modalDialogItem">
        <div class="modal-content">
            <div class="modal-header">
                
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body p-0">
                <div class="card shadow border-0">
                    <div class="card-body px-lg-5 py-lg-5">
                        <div class="row">
                            <div class="col-sm col-md col-lg text-center" id="modalImgPartServices">
                              <img id="modalImgServices" src="" width="295px" height="200px" style="width: 100%;">  
                            </div>
  
                            <div class="col-sm col-md col-lg col-lg" id="modalItemDetailsPart">
                              <h5 id="modalTitleServices" class="modal-title product_title" id="modal-title-new-item"></h5>
                                <input id="modalIDServices" type="hidden">
                                
                                {{-- Hidden fields to add into the side cart --}}
                                <input id="service_from" type="hidden">
                                <input id="service_to" type="hidden">
                                <input id="booking_day" type="hidden">
                                <input id="booking_idFk" type="hidden">
                                <input id="service_button_from" type="hidden">
                                <input id="booking_set" name="booking_set[]" type="hidden">
                                
                                <span id="modalPriceServices" class="new-price"></span>
                                
                                <input name="hide_days" id="hide_days" type="hidden" >

                                <div id="variants-area">
                                    <label class="form-control-label">{{ __('Select your options') }}</label>
                                    <div id="variants-area-inside">
                                    </div>
                                </div>
                                <div id="exrtas-area">
                                    <br />
                                    <label class="form-control-label" for="quantity">{{ __('Extras') }}</label>
                                    <div id="exrtas-area-inside">
                                    </div>
                                </div>
                               @if(  !(isset($canDoOrdering)&&!$canDoOrdering)   )
                                <div class="quantity-area">
                                    <div class="form-group">
                                        <label class="form-control-label" for="quantity">{{ __('Quantity') }}</label>
                                        <!--<input type="number" name="quantity" id="quantity" class="form-control form-control-alternative" placeholder="1" value="1" required autofocus>-->
                                       <div class="quantity-controller">
                                            <div class="minus-container">
                                              <span id="minus">-</span>
                                         </div> 
                                         <div>
                                           <input
                                                    type="number"
                                                    min="1"
                                                    step="1"
                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                    name="quantity" 
                                                    id="quantity" 
                                                    class="form-control form-control-alternative" 
                                                    placeholder="1" 
                                                    value="1" 
                                                    required 
                                                    autofocus
                                            >
                                         </div>
                                         <div class="plus-container">
                                           <span id="plus">+</span>
                                         </div>
                                      </div>
                                    </div>
                                    
                                    {{-- <div class="instruction d-flex">
                                        <div class="col-12 p-0 d-flex align-items-center mb-4 mt-2">
                                            <i class="icons8 icons8-shop me-1" title="" data-placement="" data-original-title=""></i>
                                            <p class="legend mb-0">Service Hours</p>
                                        </div>
                                    </div> --}}
                                    
                                    <div class="instruction d-flex">
                                        <div class="col-12 p-0 d-flex align-items-center mb-4 mt-2">
                                            <i class="icons8 icons8-shop me-1" title="" data-placement="" data-original-title=""></i>
                                            <p class="legend mb-0">Click &amp; Collect</p>
                                        </div>
                                    </div>

                                </div>

                                
                               @endif

                                


                                
                            </div>
                        </div>

                        {{-- <div class="row text-center">
                            <div class="col-4">
                            </div>
                            <div class="col-4">
                                <button class="btn btn-icon btn-1 btn-lg btn-primary" id="add_more_service" type="button"  title="Add service days" onclick="addMoreDays($(this))">
                                    <span class="btn-inner--icon"><i class="las la-plus"></i></span>
                                </button>
                            </div>
                            <div class="col-4">
                            </div>
                        </div> --}}

                        <div class="below_div" style="margin-top: 15px;">
                            <div class="row service_days_container daysContainer_1">
                                {{-- <div class="col-4">
                                    <div class="form-group">
                                        <input id="servicefrom1" name="service_from_time[]" class="flatpickr flatpickr-input form-control servicefrom1 servicefrom" type="text" placeholder="{{ __('Start Time') }}" value="">
                                    </div>
                                </div> --}}
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input id="serviceday1" name="service_day[]" class="flatpickr flatpickr-input form-control serviceday1 serviceday" type="text" placeholder="{{ __('Select Service Day') }}" value="">
                                    </div>
                                </div>
                                {{-- <div class="col-4">
                                    <div class="form-group">
                                        <input id="serviceto1" name="service_to_time[]" class="flatpickr flatpickr-input form-control serviceto1 serviceto" type="text" placeholder="{{ __('End Time') }}" value="">
                                    </div>
                                </div> --}}
                            </div>
                        </div>

                        <?php 
                            // echo "<pre>";
                            // print_r($booking_logs);
                            // print_r($booking_slots);
                            // die;
                        ?>
                        <h4>Slots</h4>
                        <div class="row slots_to_add">

                        </div>
                        

                        <div class="quantity-btn text-center">
                            <div id="addToCart2">
                                <button class="btn btn-primary addtocartservices" disabled style="margin-top:40px;" v-on:click='addToCartActServiceItem'>{{ __('Add To Cart') }}</button>
                            </div>
                        </div>
                      <div class="product description">
                        <p>
                          Product description
                        </p>
                        <div>
                          <p id="modalDescriptionServices"></p>
                        </div>
                      </div>


                            <!-- Inform if closed -->
                                @if (isset($openingTime)&&!empty($openingTime))
                                <span class="closed_time">{{__('Opens')}} {{ $openingTime }}</span>
                                @endif
                            <!-- End inform -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Add to cart for services --}}

<div class="modal fade" id="infoModal" z-index="9999" tabindex="-1" role="dialog" aria-labelledby="modal-form"  aria-modal="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-" role="document" id="modalDialogItem">
        <div class="modal-content">
            <div class="modal-header">
                <h5 id="modalTitle" class="modal-title product_title">Info</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="closeInfo">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body p-0">
                    <style>

                    .customTab {
                      overflow: hidden;
                    }

                    .customTab button {
                      float: left;
                      border: none;
                      outline: none;
                      cursor: pointer;
                      transition: 0.3s;
                      font-size: 14px;
                      background: none;
                      border-radius: 0;
                      border-bottom: 2px solid #fff;
                    }
                    .customTab button:hover {
                      color: #fb6100;
                    }

                    .customTab button.active {
                      color: #fb6100;
                      border-bottom: 2px solid #fb6100;
                    }

                    .tabcontent {
                      display: none;
                      border-top: none;
                    }
                    </style>

                    <div class="customTab">
                      <button class="tablinks" onclick="openCity(event, 'review')" id="defaultOpen">Avis</button>
                      <button class="tablinks" onclick="openCity(event, 'info')" id="infoOpen">Info</button>
                    </div>

                    <div id="review" class="tabcontent">
                      <div class="_3jAQ5" data-qa="restaurant-info-modal-reviews-rating">
                          <div class="_1R5Qs">
                              <h2 class="_63-j _3F6Pu" data-qa="heading">Note moyenne</h2>
                          </div>
                          <div class="Lvcwx">
                              <div class="_1WYe1">
                                  <div class="_63-j _3PCkb" role="heading" aria-level="2" data-qa="heading">3</div>
                              </div>
                              <div class="_3a4Ib">
                                  <div class="A1fKA" data-qa="restaurant-info-modal-reviews-rating-element">
                                      <div class="eJbEG" data-qa="restaurant-info-modal-reviews-rating-element-item">
                                          <div class="tfmj7 SrXWL"><span class="_3kSpD _3ijJf _1qpno" data-qa="icon"><svg viewBox="0 0 24 24" width="1em" height="1em" role="presentation" focusable="false" aria-hidden="true">
                                                      <path d="M20.945 9.4a.958.958 0 00-.805-.626l-5.438-.23-1.862-5A.95.95 0 0012 3a.95.95 0 00-.84.545l-1.862 5-5.438.23a.958.958 0 00-.805.625.94.94 0 00.216.978l3.883 3.082-1.031 5.377c-.077.402.068.765.37.98a.961.961 0 001.025.065L12 16.73l4.482 3.152a.961.961 0 001.024-.065c.303-.215.57-.548.494-.95l-1.154-5.407 3.883-3.082a.94.94 0 00.216-.978" fill-rule="evenodd"></path>
                                                  </svg></span></div>
                                      </div>
                                      <div class="eJbEG" data-qa="restaurant-info-modal-reviews-rating-element-item">
                                          <div class="tfmj7 SrXWL"><span class="_3kSpD _3ijJf _1qpno" data-qa="icon"><svg viewBox="0 0 24 24" width="1em" height="1em" role="presentation" focusable="false" aria-hidden="true">
                                                      <path d="M20.945 9.4a.958.958 0 00-.805-.626l-5.438-.23-1.862-5A.95.95 0 0012 3a.95.95 0 00-.84.545l-1.862 5-5.438.23a.958.958 0 00-.805.625.94.94 0 00.216.978l3.883 3.082-1.031 5.377c-.077.402.068.765.37.98a.961.961 0 001.025.065L12 16.73l4.482 3.152a.961.961 0 001.024-.065c.303-.215.57-.548.494-.95l-1.154-5.407 3.883-3.082a.94.94 0 00.216-.978" fill-rule="evenodd"></path>
                                                  </svg></span></div>
                                      </div>
                                      <div class="eJbEG" data-qa="restaurant-info-modal-reviews-rating-element-item">
                                          <div class="tfmj7 SrXWL"><span class="_3kSpD _3ijJf _1qpno" data-qa="icon"><svg viewBox="0 0 24 24" width="1em" height="1em" role="presentation" focusable="false" aria-hidden="true">
                                                      <path d="M20.945 9.4a.958.958 0 00-.805-.626l-5.438-.23-1.862-5A.95.95 0 0012 3a.95.95 0 00-.84.545l-1.862 5-5.438.23a.958.958 0 00-.805.625.94.94 0 00.216.978l3.883 3.082-1.031 5.377c-.077.402.068.765.37.98a.961.961 0 001.025.065L12 16.73l4.482 3.152a.961.961 0 001.024-.065c.303-.215.57-.548.494-.95l-1.154-5.407 3.883-3.082a.94.94 0 00.216-.978" fill-rule="evenodd"></path>
                                                  </svg></span></div>
                                      </div>
                                      <div class="eJbEG" data-qa="restaurant-info-modal-reviews-rating-element-item">
                                          <div class="tfmj7"><span class="_3kSpD _3ijJf _1qpno" data-qa="icon"><svg viewBox="0 0 24 24" width="1em" height="1em" role="presentation" focusable="false" aria-hidden="true">
                                                      <path d="M20.945 9.4a.958.958 0 00-.805-.626l-5.438-.23-1.862-5A.95.95 0 0012 3a.95.95 0 00-.84.545l-1.862 5-5.438.23a.958.958 0 00-.805.625.94.94 0 00.216.978l3.883 3.082-1.031 5.377c-.077.402.068.765.37.98a.961.961 0 001.025.065L12 16.73l4.482 3.152a.961.961 0 001.024-.065c.303-.215.57-.548.494-.95l-1.154-5.407 3.883-3.082a.94.94 0 00.216-.978" fill-rule="evenodd"></path>
                                                  </svg></span></div>
                                      </div>
                                      <div class="eJbEG" data-qa="restaurant-info-modal-reviews-rating-element-item">
                                          <div class="tfmj7"><span class="_3kSpD _3ijJf _1qpno" data-qa="icon"><svg viewBox="0 0 24 24" width="1em" height="1em" role="presentation" focusable="false" aria-hidden="true">
                                                      <path d="M20.945 9.4a.958.958 0 00-.805-.626l-5.438-.23-1.862-5A.95.95 0 0012 3a.95.95 0 00-.84.545l-1.862 5-5.438.23a.958.958 0 00-.805.625.94.94 0 00.216.978l3.883 3.082-1.031 5.377c-.077.402.068.765.37.98a.961.961 0 001.025.065L12 16.73l4.482 3.152a.961.961 0 001.024-.065c.303-.215.57-.548.494-.95l-1.154-5.407 3.883-3.082a.94.94 0 00.216-.978" fill-rule="evenodd"></path>
                                                  </svg></span></div>
                                      </div>
                                  </div>
                                  <div class="_1Ckfx">sur 862 avis client</div>
                              </div>
                          </div>
                      </div>
                      <div class="_1Xwa9" data-qa="card-element">
            <div class="sshQD">
                <div id="label-1640615400000">
                    <div class="_99BpQ" data-qa="util">
                        <div class="_354yY" data-qa="text">
                            <h3 class="_63-j _1rimQ" data-qa="heading">Yves VANDERMEER</h3>
                        </div>
                    </div>
                </div>
                <div id="description-1640615400000">
                    <div class="_3ilF9 Rfk_i" data-qa="text">lundi 27 décembre 2021</div>
                    <div class="CSvDb" data-qa="util">
                        
                        <div class="S4td4" data-qa="util">
                            <div class="xFlNy fn4w0 _3JIyP UDtqe _3dZsV" data-qa="flex"><b>Avis</b>
                                <div class="_3RkHM" data-qa="rating-display">
                                    <div class="_2J9wP">
                                        <div class="A1fKA" title="5" aria-label="5" data-qa="rating-display-element">
                                            <div class="eJbEG" data-qa="rating-display-element-item">
                                                <div class="tfmj7 SrXWL"><span class="_3kSpD _3ijJf _1qpno" data-qa="icon"><svg viewBox="0 0 24 24" width="1em" height="1em" role="presentation" focusable="false" aria-hidden="true">
                                                            <path d="M20.945 9.4a.958.958 0 00-.805-.626l-5.438-.23-1.862-5A.95.95 0 0012 3a.95.95 0 00-.84.545l-1.862 5-5.438.23a.958.958 0 00-.805.625.94.94 0 00.216.978l3.883 3.082-1.031 5.377c-.077.402.068.765.37.98a.961.961 0 001.025.065L12 16.73l4.482 3.152a.961.961 0 001.024-.065c.303-.215.57-.548.494-.95l-1.154-5.407 3.883-3.082a.94.94 0 00.216-.978" fill-rule="evenodd"></path>
                                                        </svg></span></div>
                                            </div>
                                            <div class="eJbEG" data-qa="rating-display-element-item">
                                                <div class="tfmj7 SrXWL"><span class="_3kSpD _3ijJf _1qpno" data-qa="icon"><svg viewBox="0 0 24 24" width="1em" height="1em" role="presentation" focusable="false" aria-hidden="true">
                                                            <path d="M20.945 9.4a.958.958 0 00-.805-.626l-5.438-.23-1.862-5A.95.95 0 0012 3a.95.95 0 00-.84.545l-1.862 5-5.438.23a.958.958 0 00-.805.625.94.94 0 00.216.978l3.883 3.082-1.031 5.377c-.077.402.068.765.37.98a.961.961 0 001.025.065L12 16.73l4.482 3.152a.961.961 0 001.024-.065c.303-.215.57-.548.494-.95l-1.154-5.407 3.883-3.082a.94.94 0 00.216-.978" fill-rule="evenodd"></path>
                                                        </svg></span></div>
                                            </div>
                                            <div class="eJbEG" data-qa="rating-display-element-item">
                                                <div class="tfmj7 SrXWL"><span class="_3kSpD _3ijJf _1qpno" data-qa="icon"><svg viewBox="0 0 24 24" width="1em" height="1em" role="presentation" focusable="false" aria-hidden="true">
                                                            <path d="M20.945 9.4a.958.958 0 00-.805-.626l-5.438-.23-1.862-5A.95.95 0 0012 3a.95.95 0 00-.84.545l-1.862 5-5.438.23a.958.958 0 00-.805.625.94.94 0 00.216.978l3.883 3.082-1.031 5.377c-.077.402.068.765.37.98a.961.961 0 001.025.065L12 16.73l4.482 3.152a.961.961 0 001.024-.065c.303-.215.57-.548.494-.95l-1.154-5.407 3.883-3.082a.94.94 0 00.216-.978" fill-rule="evenodd"></path>
                                                        </svg></span></div>
                                            </div>
                                            <div class="eJbEG" data-qa="rating-display-element-item">
                                                <div class="tfmj7 SrXWL"><span class="_3kSpD _3ijJf _1qpno" data-qa="icon"><svg viewBox="0 0 24 24" width="1em" height="1em" role="presentation" focusable="false" aria-hidden="true">
                                                            <path d="M20.945 9.4a.958.958 0 00-.805-.626l-5.438-.23-1.862-5A.95.95 0 0012 3a.95.95 0 00-.84.545l-1.862 5-5.438.23a.958.958 0 00-.805.625.94.94 0 00.216.978l3.883 3.082-1.031 5.377c-.077.402.068.765.37.98a.961.961 0 001.025.065L12 16.73l4.482 3.152a.961.961 0 001.024-.065c.303-.215.57-.548.494-.95l-1.154-5.407 3.883-3.082a.94.94 0 00.216-.978" fill-rule="evenodd"></path>
                                                        </svg></span></div>
                                            </div>
                                            <div class="eJbEG" data-qa="rating-display-element-item">
                                                <div class="tfmj7 SrXWL"><span class="_3kSpD _3ijJf _1qpno" data-qa="icon"><svg viewBox="0 0 24 24" width="1em" height="1em" role="presentation" focusable="false" aria-hidden="true">
                                                            <path d="M20.945 9.4a.958.958 0 00-.805-.626l-5.438-.23-1.862-5A.95.95 0 0012 3a.95.95 0 00-.84.545l-1.862 5-5.438.23a.958.958 0 00-.805.625.94.94 0 00.216.978l3.883 3.082-1.031 5.377c-.077.402.068.765.37.98a.961.961 0 001.025.065L12 16.73l4.482 3.152a.961.961 0 001.024-.065c.303-.215.57-.548.494-.95l-1.154-5.407 3.883-3.082a.94.94 0 00.216-.978" fill-rule="evenodd"></path>
                                                        </svg></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="CSvDb" data-qa="util">
                            <div class="Rfk_i" data-qa="text">Erreur dans les frites livrées</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                      <div class="_1Xwa9" data-qa="card-element">
            <div class="sshQD">
                <div id="label-1640615400000">
                    <div class="_99BpQ" data-qa="util">
                        <div class="_354yY" data-qa="text">
                            <h3 class="_63-j _1rimQ" data-qa="heading">Yves VANDERMEER</h3>
                        </div>
                    </div>
                </div>
                <div id="description-1640615400000">
                    <div class="_3ilF9 Rfk_i" data-qa="text">lundi 27 décembre 2021</div>
                    <div class="CSvDb" data-qa="util">
                        
                        <div class="S4td4" data-qa="util">
                            <div class="xFlNy fn4w0 _3JIyP UDtqe _3dZsV" data-qa="flex"><b>Avis</b>
                                <div class="_3RkHM" data-qa="rating-display">
                                    <div class="_2J9wP">
                                        <div class="A1fKA" title="5" aria-label="5" data-qa="rating-display-element">
                                            <div class="eJbEG" data-qa="rating-display-element-item">
                                                <div class="tfmj7 SrXWL"><span class="_3kSpD _3ijJf _1qpno" data-qa="icon"><svg viewBox="0 0 24 24" width="1em" height="1em" role="presentation" focusable="false" aria-hidden="true">
                                                            <path d="M20.945 9.4a.958.958 0 00-.805-.626l-5.438-.23-1.862-5A.95.95 0 0012 3a.95.95 0 00-.84.545l-1.862 5-5.438.23a.958.958 0 00-.805.625.94.94 0 00.216.978l3.883 3.082-1.031 5.377c-.077.402.068.765.37.98a.961.961 0 001.025.065L12 16.73l4.482 3.152a.961.961 0 001.024-.065c.303-.215.57-.548.494-.95l-1.154-5.407 3.883-3.082a.94.94 0 00.216-.978" fill-rule="evenodd"></path>
                                                        </svg></span></div>
                                            </div>
                                            <div class="eJbEG" data-qa="rating-display-element-item">
                                                <div class="tfmj7 SrXWL"><span class="_3kSpD _3ijJf _1qpno" data-qa="icon"><svg viewBox="0 0 24 24" width="1em" height="1em" role="presentation" focusable="false" aria-hidden="true">
                                                            <path d="M20.945 9.4a.958.958 0 00-.805-.626l-5.438-.23-1.862-5A.95.95 0 0012 3a.95.95 0 00-.84.545l-1.862 5-5.438.23a.958.958 0 00-.805.625.94.94 0 00.216.978l3.883 3.082-1.031 5.377c-.077.402.068.765.37.98a.961.961 0 001.025.065L12 16.73l4.482 3.152a.961.961 0 001.024-.065c.303-.215.57-.548.494-.95l-1.154-5.407 3.883-3.082a.94.94 0 00.216-.978" fill-rule="evenodd"></path>
                                                        </svg></span></div>
                                            </div>
                                            <div class="eJbEG" data-qa="rating-display-element-item">
                                                <div class="tfmj7 SrXWL"><span class="_3kSpD _3ijJf _1qpno" data-qa="icon"><svg viewBox="0 0 24 24" width="1em" height="1em" role="presentation" focusable="false" aria-hidden="true">
                                                            <path d="M20.945 9.4a.958.958 0 00-.805-.626l-5.438-.23-1.862-5A.95.95 0 0012 3a.95.95 0 00-.84.545l-1.862 5-5.438.23a.958.958 0 00-.805.625.94.94 0 00.216.978l3.883 3.082-1.031 5.377c-.077.402.068.765.37.98a.961.961 0 001.025.065L12 16.73l4.482 3.152a.961.961 0 001.024-.065c.303-.215.57-.548.494-.95l-1.154-5.407 3.883-3.082a.94.94 0 00.216-.978" fill-rule="evenodd"></path>
                                                        </svg></span></div>
                                            </div>
                                            <div class="eJbEG" data-qa="rating-display-element-item">
                                                <div class="tfmj7 SrXWL"><span class="_3kSpD _3ijJf _1qpno" data-qa="icon"><svg viewBox="0 0 24 24" width="1em" height="1em" role="presentation" focusable="false" aria-hidden="true">
                                                            <path d="M20.945 9.4a.958.958 0 00-.805-.626l-5.438-.23-1.862-5A.95.95 0 0012 3a.95.95 0 00-.84.545l-1.862 5-5.438.23a.958.958 0 00-.805.625.94.94 0 00.216.978l3.883 3.082-1.031 5.377c-.077.402.068.765.37.98a.961.961 0 001.025.065L12 16.73l4.482 3.152a.961.961 0 001.024-.065c.303-.215.57-.548.494-.95l-1.154-5.407 3.883-3.082a.94.94 0 00.216-.978" fill-rule="evenodd"></path>
                                                        </svg></span></div>
                                            </div>
                                            <div class="eJbEG" data-qa="rating-display-element-item">
                                                <div class="tfmj7 SrXWL"><span class="_3kSpD _3ijJf _1qpno" data-qa="icon"><svg viewBox="0 0 24 24" width="1em" height="1em" role="presentation" focusable="false" aria-hidden="true">
                                                            <path d="M20.945 9.4a.958.958 0 00-.805-.626l-5.438-.23-1.862-5A.95.95 0 0012 3a.95.95 0 00-.84.545l-1.862 5-5.438.23a.958.958 0 00-.805.625.94.94 0 00.216.978l3.883 3.082-1.031 5.377c-.077.402.068.765.37.98a.961.961 0 001.025.065L12 16.73l4.482 3.152a.961.961 0 001.024-.065c.303-.215.57-.548.494-.95l-1.154-5.407 3.883-3.082a.94.94 0 00.216-.978" fill-rule="evenodd"></path>
                                                        </svg></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="CSvDb" data-qa="util">
                            <div class="Rfk_i" data-qa="text">Erreur dans les frites livrées</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                      <div class="_1Xwa9" data-qa="card-element">
            <div class="sshQD">
                <div id="label-1640615400000">
                    <div class="_99BpQ" data-qa="util">
                        <div class="_354yY" data-qa="text">
                            <h3 class="_63-j _1rimQ" data-qa="heading">Yves VANDERMEER</h3>
                        </div>
                    </div>
                </div>
                <div id="description-1640615400000">
                    <div class="_3ilF9 Rfk_i" data-qa="text">lundi 27 décembre 2021</div>
                    <div class="CSvDb" data-qa="util">
                        
                        <div class="S4td4" data-qa="util">
                            <div class="xFlNy fn4w0 _3JIyP UDtqe _3dZsV" data-qa="flex"><b>Avis</b>
                                <div class="_3RkHM" data-qa="rating-display">
                                    <div class="_2J9wP">
                                        <div class="A1fKA" title="5" aria-label="5" data-qa="rating-display-element">
                                            <div class="eJbEG" data-qa="rating-display-element-item">
                                                <div class="tfmj7 SrXWL"><span class="_3kSpD _3ijJf _1qpno" data-qa="icon"><svg viewBox="0 0 24 24" width="1em" height="1em" role="presentation" focusable="false" aria-hidden="true">
                                                            <path d="M20.945 9.4a.958.958 0 00-.805-.626l-5.438-.23-1.862-5A.95.95 0 0012 3a.95.95 0 00-.84.545l-1.862 5-5.438.23a.958.958 0 00-.805.625.94.94 0 00.216.978l3.883 3.082-1.031 5.377c-.077.402.068.765.37.98a.961.961 0 001.025.065L12 16.73l4.482 3.152a.961.961 0 001.024-.065c.303-.215.57-.548.494-.95l-1.154-5.407 3.883-3.082a.94.94 0 00.216-.978" fill-rule="evenodd"></path>
                                                        </svg></span></div>
                                            </div>
                                            <div class="eJbEG" data-qa="rating-display-element-item">
                                                <div class="tfmj7 SrXWL"><span class="_3kSpD _3ijJf _1qpno" data-qa="icon"><svg viewBox="0 0 24 24" width="1em" height="1em" role="presentation" focusable="false" aria-hidden="true">
                                                            <path d="M20.945 9.4a.958.958 0 00-.805-.626l-5.438-.23-1.862-5A.95.95 0 0012 3a.95.95 0 00-.84.545l-1.862 5-5.438.23a.958.958 0 00-.805.625.94.94 0 00.216.978l3.883 3.082-1.031 5.377c-.077.402.068.765.37.98a.961.961 0 001.025.065L12 16.73l4.482 3.152a.961.961 0 001.024-.065c.303-.215.57-.548.494-.95l-1.154-5.407 3.883-3.082a.94.94 0 00.216-.978" fill-rule="evenodd"></path>
                                                        </svg></span></div>
                                            </div>
                                            <div class="eJbEG" data-qa="rating-display-element-item">
                                                <div class="tfmj7 SrXWL"><span class="_3kSpD _3ijJf _1qpno" data-qa="icon"><svg viewBox="0 0 24 24" width="1em" height="1em" role="presentation" focusable="false" aria-hidden="true">
                                                            <path d="M20.945 9.4a.958.958 0 00-.805-.626l-5.438-.23-1.862-5A.95.95 0 0012 3a.95.95 0 00-.84.545l-1.862 5-5.438.23a.958.958 0 00-.805.625.94.94 0 00.216.978l3.883 3.082-1.031 5.377c-.077.402.068.765.37.98a.961.961 0 001.025.065L12 16.73l4.482 3.152a.961.961 0 001.024-.065c.303-.215.57-.548.494-.95l-1.154-5.407 3.883-3.082a.94.94 0 00.216-.978" fill-rule="evenodd"></path>
                                                        </svg></span></div>
                                            </div>
                                            <div class="eJbEG" data-qa="rating-display-element-item">
                                                <div class="tfmj7 SrXWL"><span class="_3kSpD _3ijJf _1qpno" data-qa="icon"><svg viewBox="0 0 24 24" width="1em" height="1em" role="presentation" focusable="false" aria-hidden="true">
                                                            <path d="M20.945 9.4a.958.958 0 00-.805-.626l-5.438-.23-1.862-5A.95.95 0 0012 3a.95.95 0 00-.84.545l-1.862 5-5.438.23a.958.958 0 00-.805.625.94.94 0 00.216.978l3.883 3.082-1.031 5.377c-.077.402.068.765.37.98a.961.961 0 001.025.065L12 16.73l4.482 3.152a.961.961 0 001.024-.065c.303-.215.57-.548.494-.95l-1.154-5.407 3.883-3.082a.94.94 0 00.216-.978" fill-rule="evenodd"></path>
                                                        </svg></span></div>
                                            </div>
                                            <div class="eJbEG" data-qa="rating-display-element-item">
                                                <div class="tfmj7 SrXWL"><span class="_3kSpD _3ijJf _1qpno" data-qa="icon"><svg viewBox="0 0 24 24" width="1em" height="1em" role="presentation" focusable="false" aria-hidden="true">
                                                            <path d="M20.945 9.4a.958.958 0 00-.805-.626l-5.438-.23-1.862-5A.95.95 0 0012 3a.95.95 0 00-.84.545l-1.862 5-5.438.23a.958.958 0 00-.805.625.94.94 0 00.216.978l3.883 3.082-1.031 5.377c-.077.402.068.765.37.98a.961.961 0 001.025.065L12 16.73l4.482 3.152a.961.961 0 001.024-.065c.303-.215.57-.548.494-.95l-1.154-5.407 3.883-3.082a.94.94 0 00.216-.978" fill-rule="evenodd"></path>
                                                        </svg></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="CSvDb" data-qa="util">
                            <div class="Rfk_i" data-qa="text">Erreur dans les frites livrées</div>
                        </div>
                    </div>
                </div>
            </div>
        </div><div class="_1Xwa9" data-qa="card-element">
            <div class="sshQD">
                <div id="label-1640615400000">
                    <div class="_99BpQ" data-qa="util">
                        <div class="_354yY" data-qa="text">
                            <h3 class="_63-j _1rimQ" data-qa="heading">Yves VANDERMEER</h3>
                        </div>
                    </div>
                </div>
                <div id="description-1640615400000">
                    <div class="_3ilF9 Rfk_i" data-qa="text">lundi 27 décembre 2021</div>
                    <div class="CSvDb" data-qa="util">
                        
                        <div class="S4td4" data-qa="util">
                            <div class="xFlNy fn4w0 _3JIyP UDtqe _3dZsV" data-qa="flex"><b>Avis</b>
                                <div class="_3RkHM" data-qa="rating-display">
                                    <div class="_2J9wP">
                                        <div class="A1fKA" title="5" aria-label="5" data-qa="rating-display-element">
                                            <div class="eJbEG" data-qa="rating-display-element-item">
                                                <div class="tfmj7 SrXWL"><span class="_3kSpD _3ijJf _1qpno" data-qa="icon"><svg viewBox="0 0 24 24" width="1em" height="1em" role="presentation" focusable="false" aria-hidden="true">
                                                            <path d="M20.945 9.4a.958.958 0 00-.805-.626l-5.438-.23-1.862-5A.95.95 0 0012 3a.95.95 0 00-.84.545l-1.862 5-5.438.23a.958.958 0 00-.805.625.94.94 0 00.216.978l3.883 3.082-1.031 5.377c-.077.402.068.765.37.98a.961.961 0 001.025.065L12 16.73l4.482 3.152a.961.961 0 001.024-.065c.303-.215.57-.548.494-.95l-1.154-5.407 3.883-3.082a.94.94 0 00.216-.978" fill-rule="evenodd"></path>
                                                        </svg></span></div>
                                            </div>
                                            <div class="eJbEG" data-qa="rating-display-element-item">
                                                <div class="tfmj7 SrXWL"><span class="_3kSpD _3ijJf _1qpno" data-qa="icon"><svg viewBox="0 0 24 24" width="1em" height="1em" role="presentation" focusable="false" aria-hidden="true">
                                                            <path d="M20.945 9.4a.958.958 0 00-.805-.626l-5.438-.23-1.862-5A.95.95 0 0012 3a.95.95 0 00-.84.545l-1.862 5-5.438.23a.958.958 0 00-.805.625.94.94 0 00.216.978l3.883 3.082-1.031 5.377c-.077.402.068.765.37.98a.961.961 0 001.025.065L12 16.73l4.482 3.152a.961.961 0 001.024-.065c.303-.215.57-.548.494-.95l-1.154-5.407 3.883-3.082a.94.94 0 00.216-.978" fill-rule="evenodd"></path>
                                                        </svg></span></div>
                                            </div>
                                            <div class="eJbEG" data-qa="rating-display-element-item">
                                                <div class="tfmj7 SrXWL"><span class="_3kSpD _3ijJf _1qpno" data-qa="icon"><svg viewBox="0 0 24 24" width="1em" height="1em" role="presentation" focusable="false" aria-hidden="true">
                                                            <path d="M20.945 9.4a.958.958 0 00-.805-.626l-5.438-.23-1.862-5A.95.95 0 0012 3a.95.95 0 00-.84.545l-1.862 5-5.438.23a.958.958 0 00-.805.625.94.94 0 00.216.978l3.883 3.082-1.031 5.377c-.077.402.068.765.37.98a.961.961 0 001.025.065L12 16.73l4.482 3.152a.961.961 0 001.024-.065c.303-.215.57-.548.494-.95l-1.154-5.407 3.883-3.082a.94.94 0 00.216-.978" fill-rule="evenodd"></path>
                                                        </svg></span></div>
                                            </div>
                                            <div class="eJbEG" data-qa="rating-display-element-item">
                                                <div class="tfmj7 SrXWL"><span class="_3kSpD _3ijJf _1qpno" data-qa="icon"><svg viewBox="0 0 24 24" width="1em" height="1em" role="presentation" focusable="false" aria-hidden="true">
                                                            <path d="M20.945 9.4a.958.958 0 00-.805-.626l-5.438-.23-1.862-5A.95.95 0 0012 3a.95.95 0 00-.84.545l-1.862 5-5.438.23a.958.958 0 00-.805.625.94.94 0 00.216.978l3.883 3.082-1.031 5.377c-.077.402.068.765.37.98a.961.961 0 001.025.065L12 16.73l4.482 3.152a.961.961 0 001.024-.065c.303-.215.57-.548.494-.95l-1.154-5.407 3.883-3.082a.94.94 0 00.216-.978" fill-rule="evenodd"></path>
                                                        </svg></span></div>
                                            </div>
                                            <div class="eJbEG" data-qa="rating-display-element-item">
                                                <div class="tfmj7 SrXWL"><span class="_3kSpD _3ijJf _1qpno" data-qa="icon"><svg viewBox="0 0 24 24" width="1em" height="1em" role="presentation" focusable="false" aria-hidden="true">
                                                            <path d="M20.945 9.4a.958.958 0 00-.805-.626l-5.438-.23-1.862-5A.95.95 0 0012 3a.95.95 0 00-.84.545l-1.862 5-5.438.23a.958.958 0 00-.805.625.94.94 0 00.216.978l3.883 3.082-1.031 5.377c-.077.402.068.765.37.98a.961.961 0 001.025.065L12 16.73l4.482 3.152a.961.961 0 001.024-.065c.303-.215.57-.548.494-.95l-1.154-5.407 3.883-3.082a.94.94 0 00.216-.978" fill-rule="evenodd"></path>
                                                        </svg></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="CSvDb" data-qa="util">
                            <div class="Rfk_i" data-qa="text">Erreur dans les frites livrées</div>
                        </div>
                    </div>
                </div>
            </div>
        </div><div class="_1Xwa9" data-qa="card-element">
            <div class="sshQD">
                <div id="label-1640615400000">
                    <div class="_99BpQ" data-qa="util">
                        <div class="_354yY" data-qa="text">
                            <h3 class="_63-j _1rimQ" data-qa="heading">Yves VANDERMEER</h3>
                        </div>
                    </div>
                </div>
                <div id="description-1640615400000">
                    <div class="_3ilF9 Rfk_i" data-qa="text">lundi 27 décembre 2021</div>
                    <div class="CSvDb" data-qa="util">
                        
                        <div class="S4td4" data-qa="util">
                            <div class="xFlNy fn4w0 _3JIyP UDtqe _3dZsV" data-qa="flex"><b>Avis</b>
                                <div class="_3RkHM" data-qa="rating-display">
                                    <div class="_2J9wP">
                                        <div class="A1fKA" title="5" aria-label="5" data-qa="rating-display-element">
                                            <div class="eJbEG" data-qa="rating-display-element-item">
                                                <div class="tfmj7 SrXWL"><span class="_3kSpD _3ijJf _1qpno" data-qa="icon"><svg viewBox="0 0 24 24" width="1em" height="1em" role="presentation" focusable="false" aria-hidden="true">
                                                            <path d="M20.945 9.4a.958.958 0 00-.805-.626l-5.438-.23-1.862-5A.95.95 0 0012 3a.95.95 0 00-.84.545l-1.862 5-5.438.23a.958.958 0 00-.805.625.94.94 0 00.216.978l3.883 3.082-1.031 5.377c-.077.402.068.765.37.98a.961.961 0 001.025.065L12 16.73l4.482 3.152a.961.961 0 001.024-.065c.303-.215.57-.548.494-.95l-1.154-5.407 3.883-3.082a.94.94 0 00.216-.978" fill-rule="evenodd"></path>
                                                        </svg></span></div>
                                            </div>
                                            <div class="eJbEG" data-qa="rating-display-element-item">
                                                <div class="tfmj7 SrXWL"><span class="_3kSpD _3ijJf _1qpno" data-qa="icon"><svg viewBox="0 0 24 24" width="1em" height="1em" role="presentation" focusable="false" aria-hidden="true">
                                                            <path d="M20.945 9.4a.958.958 0 00-.805-.626l-5.438-.23-1.862-5A.95.95 0 0012 3a.95.95 0 00-.84.545l-1.862 5-5.438.23a.958.958 0 00-.805.625.94.94 0 00.216.978l3.883 3.082-1.031 5.377c-.077.402.068.765.37.98a.961.961 0 001.025.065L12 16.73l4.482 3.152a.961.961 0 001.024-.065c.303-.215.57-.548.494-.95l-1.154-5.407 3.883-3.082a.94.94 0 00.216-.978" fill-rule="evenodd"></path>
                                                        </svg></span></div>
                                            </div>
                                            <div class="eJbEG" data-qa="rating-display-element-item">
                                                <div class="tfmj7 SrXWL"><span class="_3kSpD _3ijJf _1qpno" data-qa="icon"><svg viewBox="0 0 24 24" width="1em" height="1em" role="presentation" focusable="false" aria-hidden="true">
                                                            <path d="M20.945 9.4a.958.958 0 00-.805-.626l-5.438-.23-1.862-5A.95.95 0 0012 3a.95.95 0 00-.84.545l-1.862 5-5.438.23a.958.958 0 00-.805.625.94.94 0 00.216.978l3.883 3.082-1.031 5.377c-.077.402.068.765.37.98a.961.961 0 001.025.065L12 16.73l4.482 3.152a.961.961 0 001.024-.065c.303-.215.57-.548.494-.95l-1.154-5.407 3.883-3.082a.94.94 0 00.216-.978" fill-rule="evenodd"></path>
                                                        </svg></span></div>
                                            </div>
                                            <div class="eJbEG" data-qa="rating-display-element-item">
                                                <div class="tfmj7 SrXWL"><span class="_3kSpD _3ijJf _1qpno" data-qa="icon"><svg viewBox="0 0 24 24" width="1em" height="1em" role="presentation" focusable="false" aria-hidden="true">
                                                            <path d="M20.945 9.4a.958.958 0 00-.805-.626l-5.438-.23-1.862-5A.95.95 0 0012 3a.95.95 0 00-.84.545l-1.862 5-5.438.23a.958.958 0 00-.805.625.94.94 0 00.216.978l3.883 3.082-1.031 5.377c-.077.402.068.765.37.98a.961.961 0 001.025.065L12 16.73l4.482 3.152a.961.961 0 001.024-.065c.303-.215.57-.548.494-.95l-1.154-5.407 3.883-3.082a.94.94 0 00.216-.978" fill-rule="evenodd"></path>
                                                        </svg></span></div>
                                            </div>
                                            <div class="eJbEG" data-qa="rating-display-element-item">
                                                <div class="tfmj7 SrXWL"><span class="_3kSpD _3ijJf _1qpno" data-qa="icon"><svg viewBox="0 0 24 24" width="1em" height="1em" role="presentation" focusable="false" aria-hidden="true">
                                                            <path d="M20.945 9.4a.958.958 0 00-.805-.626l-5.438-.23-1.862-5A.95.95 0 0012 3a.95.95 0 00-.84.545l-1.862 5-5.438.23a.958.958 0 00-.805.625.94.94 0 00.216.978l3.883 3.082-1.031 5.377c-.077.402.068.765.37.98a.961.961 0 001.025.065L12 16.73l4.482 3.152a.961.961 0 001.024-.065c.303-.215.57-.548.494-.95l-1.154-5.407 3.883-3.082a.94.94 0 00.216-.978" fill-rule="evenodd"></path>
                                                        </svg></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="CSvDb" data-qa="util">
                            <div class="Rfk_i" data-qa="text">Erreur dans les frites livrées</div>
                        </div>
                    </div>
                </div>
            </div>
        </div><div class="_1Xwa9" data-qa="card-element">
            <div class="sshQD">
                <div id="label-1640615400000">
                    <div class="_99BpQ" data-qa="util">
                        <div class="_354yY" data-qa="text">
                            <h3 class="_63-j _1rimQ" data-qa="heading">Yves VANDERMEER</h3>
                        </div>
                    </div>
                </div>
                <div id="description-1640615400000">
                    <div class="_3ilF9 Rfk_i" data-qa="text">lundi 27 décembre 2021</div>
                    <div class="CSvDb" data-qa="util">
                        
                        <div class="S4td4" data-qa="util">
                            <div class="xFlNy fn4w0 _3JIyP UDtqe _3dZsV" data-qa="flex"><b>Avis</b>
                                <div class="_3RkHM" data-qa="rating-display">
                                    <div class="_2J9wP">
                                        <div class="A1fKA" title="5" aria-label="5" data-qa="rating-display-element">
                                            <div class="eJbEG" data-qa="rating-display-element-item">
                                                <div class="tfmj7 SrXWL"><span class="_3kSpD _3ijJf _1qpno" data-qa="icon"><svg viewBox="0 0 24 24" width="1em" height="1em" role="presentation" focusable="false" aria-hidden="true">
                                                            <path d="M20.945 9.4a.958.958 0 00-.805-.626l-5.438-.23-1.862-5A.95.95 0 0012 3a.95.95 0 00-.84.545l-1.862 5-5.438.23a.958.958 0 00-.805.625.94.94 0 00.216.978l3.883 3.082-1.031 5.377c-.077.402.068.765.37.98a.961.961 0 001.025.065L12 16.73l4.482 3.152a.961.961 0 001.024-.065c.303-.215.57-.548.494-.95l-1.154-5.407 3.883-3.082a.94.94 0 00.216-.978" fill-rule="evenodd"></path>
                                                        </svg></span></div>
                                            </div>
                                            <div class="eJbEG" data-qa="rating-display-element-item">
                                                <div class="tfmj7 SrXWL"><span class="_3kSpD _3ijJf _1qpno" data-qa="icon"><svg viewBox="0 0 24 24" width="1em" height="1em" role="presentation" focusable="false" aria-hidden="true">
                                                            <path d="M20.945 9.4a.958.958 0 00-.805-.626l-5.438-.23-1.862-5A.95.95 0 0012 3a.95.95 0 00-.84.545l-1.862 5-5.438.23a.958.958 0 00-.805.625.94.94 0 00.216.978l3.883 3.082-1.031 5.377c-.077.402.068.765.37.98a.961.961 0 001.025.065L12 16.73l4.482 3.152a.961.961 0 001.024-.065c.303-.215.57-.548.494-.95l-1.154-5.407 3.883-3.082a.94.94 0 00.216-.978" fill-rule="evenodd"></path>
                                                        </svg></span></div>
                                            </div>
                                            <div class="eJbEG" data-qa="rating-display-element-item">
                                                <div class="tfmj7 SrXWL"><span class="_3kSpD _3ijJf _1qpno" data-qa="icon"><svg viewBox="0 0 24 24" width="1em" height="1em" role="presentation" focusable="false" aria-hidden="true">
                                                            <path d="M20.945 9.4a.958.958 0 00-.805-.626l-5.438-.23-1.862-5A.95.95 0 0012 3a.95.95 0 00-.84.545l-1.862 5-5.438.23a.958.958 0 00-.805.625.94.94 0 00.216.978l3.883 3.082-1.031 5.377c-.077.402.068.765.37.98a.961.961 0 001.025.065L12 16.73l4.482 3.152a.961.961 0 001.024-.065c.303-.215.57-.548.494-.95l-1.154-5.407 3.883-3.082a.94.94 0 00.216-.978" fill-rule="evenodd"></path>
                                                        </svg></span></div>
                                            </div>
                                            <div class="eJbEG" data-qa="rating-display-element-item">
                                                <div class="tfmj7 SrXWL"><span class="_3kSpD _3ijJf _1qpno" data-qa="icon"><svg viewBox="0 0 24 24" width="1em" height="1em" role="presentation" focusable="false" aria-hidden="true">
                                                            <path d="M20.945 9.4a.958.958 0 00-.805-.626l-5.438-.23-1.862-5A.95.95 0 0012 3a.95.95 0 00-.84.545l-1.862 5-5.438.23a.958.958 0 00-.805.625.94.94 0 00.216.978l3.883 3.082-1.031 5.377c-.077.402.068.765.37.98a.961.961 0 001.025.065L12 16.73l4.482 3.152a.961.961 0 001.024-.065c.303-.215.57-.548.494-.95l-1.154-5.407 3.883-3.082a.94.94 0 00.216-.978" fill-rule="evenodd"></path>
                                                        </svg></span></div>
                                            </div>
                                            <div class="eJbEG" data-qa="rating-display-element-item">
                                                <div class="tfmj7 SrXWL"><span class="_3kSpD _3ijJf _1qpno" data-qa="icon"><svg viewBox="0 0 24 24" width="1em" height="1em" role="presentation" focusable="false" aria-hidden="true">
                                                            <path d="M20.945 9.4a.958.958 0 00-.805-.626l-5.438-.23-1.862-5A.95.95 0 0012 3a.95.95 0 00-.84.545l-1.862 5-5.438.23a.958.958 0 00-.805.625.94.94 0 00.216.978l3.883 3.082-1.031 5.377c-.077.402.068.765.37.98a.961.961 0 001.025.065L12 16.73l4.482 3.152a.961.961 0 001.024-.065c.303-.215.57-.548.494-.95l-1.154-5.407 3.883-3.082a.94.94 0 00.216-.978" fill-rule="evenodd"></path>
                                                        </svg></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="CSvDb" data-qa="util">
                            <div class="Rfk_i" data-qa="text">Erreur dans les frites livrées</div>
                        </div>
                    </div>
                </div>
            </div>
        </div><div class="_1Xwa9" data-qa="card-element">
            <div class="sshQD">
                <div id="label-1640615400000">
                    <div class="_99BpQ" data-qa="util">
                        <div class="_354yY" data-qa="text">
                            <h3 class="_63-j _1rimQ" data-qa="heading">Yves VANDERMEER</h3>
                        </div>
                    </div>
                </div>
                <div id="description-1640615400000">
                    <div class="_3ilF9 Rfk_i" data-qa="text">lundi 27 décembre 2021</div>
                    <div class="CSvDb" data-qa="util">
                        
                        <div class="S4td4" data-qa="util">
                            <div class="xFlNy fn4w0 _3JIyP UDtqe _3dZsV" data-qa="flex"><b>Avis</b>
                                <div class="_3RkHM" data-qa="rating-display">
                                    <div class="_2J9wP">
                                        <div class="A1fKA" title="5" aria-label="5" data-qa="rating-display-element">
                                            <div class="eJbEG" data-qa="rating-display-element-item">
                                                <div class="tfmj7 SrXWL"><span class="_3kSpD _3ijJf _1qpno" data-qa="icon"><svg viewBox="0 0 24 24" width="1em" height="1em" role="presentation" focusable="false" aria-hidden="true">
                                                            <path d="M20.945 9.4a.958.958 0 00-.805-.626l-5.438-.23-1.862-5A.95.95 0 0012 3a.95.95 0 00-.84.545l-1.862 5-5.438.23a.958.958 0 00-.805.625.94.94 0 00.216.978l3.883 3.082-1.031 5.377c-.077.402.068.765.37.98a.961.961 0 001.025.065L12 16.73l4.482 3.152a.961.961 0 001.024-.065c.303-.215.57-.548.494-.95l-1.154-5.407 3.883-3.082a.94.94 0 00.216-.978" fill-rule="evenodd"></path>
                                                        </svg></span></div>
                                            </div>
                                            <div class="eJbEG" data-qa="rating-display-element-item">
                                                <div class="tfmj7 SrXWL"><span class="_3kSpD _3ijJf _1qpno" data-qa="icon"><svg viewBox="0 0 24 24" width="1em" height="1em" role="presentation" focusable="false" aria-hidden="true">
                                                            <path d="M20.945 9.4a.958.958 0 00-.805-.626l-5.438-.23-1.862-5A.95.95 0 0012 3a.95.95 0 00-.84.545l-1.862 5-5.438.23a.958.958 0 00-.805.625.94.94 0 00.216.978l3.883 3.082-1.031 5.377c-.077.402.068.765.37.98a.961.961 0 001.025.065L12 16.73l4.482 3.152a.961.961 0 001.024-.065c.303-.215.57-.548.494-.95l-1.154-5.407 3.883-3.082a.94.94 0 00.216-.978" fill-rule="evenodd"></path>
                                                        </svg></span></div>
                                            </div>
                                            <div class="eJbEG" data-qa="rating-display-element-item">
                                                <div class="tfmj7 SrXWL"><span class="_3kSpD _3ijJf _1qpno" data-qa="icon"><svg viewBox="0 0 24 24" width="1em" height="1em" role="presentation" focusable="false" aria-hidden="true">
                                                            <path d="M20.945 9.4a.958.958 0 00-.805-.626l-5.438-.23-1.862-5A.95.95 0 0012 3a.95.95 0 00-.84.545l-1.862 5-5.438.23a.958.958 0 00-.805.625.94.94 0 00.216.978l3.883 3.082-1.031 5.377c-.077.402.068.765.37.98a.961.961 0 001.025.065L12 16.73l4.482 3.152a.961.961 0 001.024-.065c.303-.215.57-.548.494-.95l-1.154-5.407 3.883-3.082a.94.94 0 00.216-.978" fill-rule="evenodd"></path>
                                                        </svg></span></div>
                                            </div>
                                            <div class="eJbEG" data-qa="rating-display-element-item">
                                                <div class="tfmj7 SrXWL"><span class="_3kSpD _3ijJf _1qpno" data-qa="icon"><svg viewBox="0 0 24 24" width="1em" height="1em" role="presentation" focusable="false" aria-hidden="true">
                                                            <path d="M20.945 9.4a.958.958 0 00-.805-.626l-5.438-.23-1.862-5A.95.95 0 0012 3a.95.95 0 00-.84.545l-1.862 5-5.438.23a.958.958 0 00-.805.625.94.94 0 00.216.978l3.883 3.082-1.031 5.377c-.077.402.068.765.37.98a.961.961 0 001.025.065L12 16.73l4.482 3.152a.961.961 0 001.024-.065c.303-.215.57-.548.494-.95l-1.154-5.407 3.883-3.082a.94.94 0 00.216-.978" fill-rule="evenodd"></path>
                                                        </svg></span></div>
                                            </div>
                                            <div class="eJbEG" data-qa="rating-display-element-item">
                                                <div class="tfmj7 SrXWL"><span class="_3kSpD _3ijJf _1qpno" data-qa="icon"><svg viewBox="0 0 24 24" width="1em" height="1em" role="presentation" focusable="false" aria-hidden="true">
                                                            <path d="M20.945 9.4a.958.958 0 00-.805-.626l-5.438-.23-1.862-5A.95.95 0 0012 3a.95.95 0 00-.84.545l-1.862 5-5.438.23a.958.958 0 00-.805.625.94.94 0 00.216.978l3.883 3.082-1.031 5.377c-.077.402.068.765.37.98a.961.961 0 001.025.065L12 16.73l4.482 3.152a.961.961 0 001.024-.065c.303-.215.57-.548.494-.95l-1.154-5.407 3.883-3.082a.94.94 0 00.216-.978" fill-rule="evenodd"></path>
                                                        </svg></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="CSvDb" data-qa="util">
                            <div class="Rfk_i" data-qa="text">Erreur dans les frites livrées</div>
                        </div>
                    </div>
                </div>
            </div>
        </div><div class="_1Xwa9" data-qa="card-element">
            <div class="sshQD">
                <div id="label-1640615400000">
                    <div class="_99BpQ" data-qa="util">
                        <div class="_354yY" data-qa="text">
                            <h3 class="_63-j _1rimQ" data-qa="heading">Yves VANDERMEER</h3>
                        </div>
                    </div>
                </div>
                <div id="description-1640615400000">
                    <div class="_3ilF9 Rfk_i" data-qa="text">lundi 27 décembre 2021</div>
                    <div class="CSvDb" data-qa="util">
                        
                        <div class="S4td4" data-qa="util">
                            <div class="xFlNy fn4w0 _3JIyP UDtqe _3dZsV" data-qa="flex"><b>Avis</b>
                                <div class="_3RkHM" data-qa="rating-display">
                                    <div class="_2J9wP">
                                        <div class="A1fKA" title="5" aria-label="5" data-qa="rating-display-element">
                                            <div class="eJbEG" data-qa="rating-display-element-item">
                                                <div class="tfmj7 SrXWL"><span class="_3kSpD _3ijJf _1qpno" data-qa="icon"><svg viewBox="0 0 24 24" width="1em" height="1em" role="presentation" focusable="false" aria-hidden="true">
                                                            <path d="M20.945 9.4a.958.958 0 00-.805-.626l-5.438-.23-1.862-5A.95.95 0 0012 3a.95.95 0 00-.84.545l-1.862 5-5.438.23a.958.958 0 00-.805.625.94.94 0 00.216.978l3.883 3.082-1.031 5.377c-.077.402.068.765.37.98a.961.961 0 001.025.065L12 16.73l4.482 3.152a.961.961 0 001.024-.065c.303-.215.57-.548.494-.95l-1.154-5.407 3.883-3.082a.94.94 0 00.216-.978" fill-rule="evenodd"></path>
                                                        </svg></span></div>
                                            </div>
                                            <div class="eJbEG" data-qa="rating-display-element-item">
                                                <div class="tfmj7 SrXWL"><span class="_3kSpD _3ijJf _1qpno" data-qa="icon"><svg viewBox="0 0 24 24" width="1em" height="1em" role="presentation" focusable="false" aria-hidden="true">
                                                            <path d="M20.945 9.4a.958.958 0 00-.805-.626l-5.438-.23-1.862-5A.95.95 0 0012 3a.95.95 0 00-.84.545l-1.862 5-5.438.23a.958.958 0 00-.805.625.94.94 0 00.216.978l3.883 3.082-1.031 5.377c-.077.402.068.765.37.98a.961.961 0 001.025.065L12 16.73l4.482 3.152a.961.961 0 001.024-.065c.303-.215.57-.548.494-.95l-1.154-5.407 3.883-3.082a.94.94 0 00.216-.978" fill-rule="evenodd"></path>
                                                        </svg></span></div>
                                            </div>
                                            <div class="eJbEG" data-qa="rating-display-element-item">
                                                <div class="tfmj7 SrXWL"><span class="_3kSpD _3ijJf _1qpno" data-qa="icon"><svg viewBox="0 0 24 24" width="1em" height="1em" role="presentation" focusable="false" aria-hidden="true">
                                                            <path d="M20.945 9.4a.958.958 0 00-.805-.626l-5.438-.23-1.862-5A.95.95 0 0012 3a.95.95 0 00-.84.545l-1.862 5-5.438.23a.958.958 0 00-.805.625.94.94 0 00.216.978l3.883 3.082-1.031 5.377c-.077.402.068.765.37.98a.961.961 0 001.025.065L12 16.73l4.482 3.152a.961.961 0 001.024-.065c.303-.215.57-.548.494-.95l-1.154-5.407 3.883-3.082a.94.94 0 00.216-.978" fill-rule="evenodd"></path>
                                                        </svg></span></div>
                                            </div>
                                            <div class="eJbEG" data-qa="rating-display-element-item">
                                                <div class="tfmj7 SrXWL"><span class="_3kSpD _3ijJf _1qpno" data-qa="icon"><svg viewBox="0 0 24 24" width="1em" height="1em" role="presentation" focusable="false" aria-hidden="true">
                                                            <path d="M20.945 9.4a.958.958 0 00-.805-.626l-5.438-.23-1.862-5A.95.95 0 0012 3a.95.95 0 00-.84.545l-1.862 5-5.438.23a.958.958 0 00-.805.625.94.94 0 00.216.978l3.883 3.082-1.031 5.377c-.077.402.068.765.37.98a.961.961 0 001.025.065L12 16.73l4.482 3.152a.961.961 0 001.024-.065c.303-.215.57-.548.494-.95l-1.154-5.407 3.883-3.082a.94.94 0 00.216-.978" fill-rule="evenodd"></path>
                                                        </svg></span></div>
                                            </div>
                                            <div class="eJbEG" data-qa="rating-display-element-item">
                                                <div class="tfmj7 SrXWL"><span class="_3kSpD _3ijJf _1qpno" data-qa="icon"><svg viewBox="0 0 24 24" width="1em" height="1em" role="presentation" focusable="false" aria-hidden="true">
                                                            <path d="M20.945 9.4a.958.958 0 00-.805-.626l-5.438-.23-1.862-5A.95.95 0 0012 3a.95.95 0 00-.84.545l-1.862 5-5.438.23a.958.958 0 00-.805.625.94.94 0 00.216.978l3.883 3.082-1.031 5.377c-.077.402.068.765.37.98a.961.961 0 001.025.065L12 16.73l4.482 3.152a.961.961 0 001.024-.065c.303-.215.57-.548.494-.95l-1.154-5.407 3.883-3.082a.94.94 0 00.216-.978" fill-rule="evenodd"></path>
                                                        </svg></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="CSvDb" data-qa="util">
                            <div class="Rfk_i" data-qa="text">Erreur dans les frites livrées</div>
                        </div>
                    </div>
                </div>
            </div>
        </div><div class="_1Xwa9" data-qa="card-element">
            <div class="sshQD">
                <div id="label-1640615400000">
                    <div class="_99BpQ" data-qa="util">
                        <div class="_354yY" data-qa="text">
                            <h3 class="_63-j _1rimQ" data-qa="heading">Yves VANDERMEER</h3>
                        </div>
                    </div>
                </div>
                <div id="description-1640615400000">
                    <div class="_3ilF9 Rfk_i" data-qa="text">lundi 27 décembre 2021</div>
                    <div class="CSvDb" data-qa="util">
                        
                        <div class="S4td4" data-qa="util">
                            <div class="xFlNy fn4w0 _3JIyP UDtqe _3dZsV" data-qa="flex"><b>Avis</b>
                                <div class="_3RkHM" data-qa="rating-display">
                                    <div class="_2J9wP">
                                        <div class="A1fKA" title="5" aria-label="5" data-qa="rating-display-element">
                                            <div class="eJbEG" data-qa="rating-display-element-item">
                                                <div class="tfmj7 SrXWL"><span class="_3kSpD _3ijJf _1qpno" data-qa="icon"><svg viewBox="0 0 24 24" width="1em" height="1em" role="presentation" focusable="false" aria-hidden="true">
                                                            <path d="M20.945 9.4a.958.958 0 00-.805-.626l-5.438-.23-1.862-5A.95.95 0 0012 3a.95.95 0 00-.84.545l-1.862 5-5.438.23a.958.958 0 00-.805.625.94.94 0 00.216.978l3.883 3.082-1.031 5.377c-.077.402.068.765.37.98a.961.961 0 001.025.065L12 16.73l4.482 3.152a.961.961 0 001.024-.065c.303-.215.57-.548.494-.95l-1.154-5.407 3.883-3.082a.94.94 0 00.216-.978" fill-rule="evenodd"></path>
                                                        </svg></span></div>
                                            </div>
                                            <div class="eJbEG" data-qa="rating-display-element-item">
                                                <div class="tfmj7 SrXWL"><span class="_3kSpD _3ijJf _1qpno" data-qa="icon"><svg viewBox="0 0 24 24" width="1em" height="1em" role="presentation" focusable="false" aria-hidden="true">
                                                            <path d="M20.945 9.4a.958.958 0 00-.805-.626l-5.438-.23-1.862-5A.95.95 0 0012 3a.95.95 0 00-.84.545l-1.862 5-5.438.23a.958.958 0 00-.805.625.94.94 0 00.216.978l3.883 3.082-1.031 5.377c-.077.402.068.765.37.98a.961.961 0 001.025.065L12 16.73l4.482 3.152a.961.961 0 001.024-.065c.303-.215.57-.548.494-.95l-1.154-5.407 3.883-3.082a.94.94 0 00.216-.978" fill-rule="evenodd"></path>
                                                        </svg></span></div>
                                            </div>
                                            <div class="eJbEG" data-qa="rating-display-element-item">
                                                <div class="tfmj7 SrXWL"><span class="_3kSpD _3ijJf _1qpno" data-qa="icon"><svg viewBox="0 0 24 24" width="1em" height="1em" role="presentation" focusable="false" aria-hidden="true">
                                                            <path d="M20.945 9.4a.958.958 0 00-.805-.626l-5.438-.23-1.862-5A.95.95 0 0012 3a.95.95 0 00-.84.545l-1.862 5-5.438.23a.958.958 0 00-.805.625.94.94 0 00.216.978l3.883 3.082-1.031 5.377c-.077.402.068.765.37.98a.961.961 0 001.025.065L12 16.73l4.482 3.152a.961.961 0 001.024-.065c.303-.215.57-.548.494-.95l-1.154-5.407 3.883-3.082a.94.94 0 00.216-.978" fill-rule="evenodd"></path>
                                                        </svg></span></div>
                                            </div>
                                            <div class="eJbEG" data-qa="rating-display-element-item">
                                                <div class="tfmj7 SrXWL"><span class="_3kSpD _3ijJf _1qpno" data-qa="icon"><svg viewBox="0 0 24 24" width="1em" height="1em" role="presentation" focusable="false" aria-hidden="true">
                                                            <path d="M20.945 9.4a.958.958 0 00-.805-.626l-5.438-.23-1.862-5A.95.95 0 0012 3a.95.95 0 00-.84.545l-1.862 5-5.438.23a.958.958 0 00-.805.625.94.94 0 00.216.978l3.883 3.082-1.031 5.377c-.077.402.068.765.37.98a.961.961 0 001.025.065L12 16.73l4.482 3.152a.961.961 0 001.024-.065c.303-.215.57-.548.494-.95l-1.154-5.407 3.883-3.082a.94.94 0 00.216-.978" fill-rule="evenodd"></path>
                                                        </svg></span></div>
                                            </div>
                                            <div class="eJbEG" data-qa="rating-display-element-item">
                                                <div class="tfmj7 SrXWL"><span class="_3kSpD _3ijJf _1qpno" data-qa="icon"><svg viewBox="0 0 24 24" width="1em" height="1em" role="presentation" focusable="false" aria-hidden="true">
                                                            <path d="M20.945 9.4a.958.958 0 00-.805-.626l-5.438-.23-1.862-5A.95.95 0 0012 3a.95.95 0 00-.84.545l-1.862 5-5.438.23a.958.958 0 00-.805.625.94.94 0 00.216.978l3.883 3.082-1.031 5.377c-.077.402.068.765.37.98a.961.961 0 001.025.065L12 16.73l4.482 3.152a.961.961 0 001.024-.065c.303-.215.57-.548.494-.95l-1.154-5.407 3.883-3.082a.94.94 0 00.216-.978" fill-rule="evenodd"></path>
                                                        </svg></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="CSvDb" data-qa="util">
                            <div class="Rfk_i" data-qa="text">Erreur dans les frites livrées</div>
                        </div>
                    </div>
                </div>
            </div>
        </div><div class="_1Xwa9" data-qa="card-element">
            <div class="sshQD">
                <div id="label-1640615400000">
                    <div class="_99BpQ" data-qa="util">
                        <div class="_354yY" data-qa="text">
                            <h3 class="_63-j _1rimQ" data-qa="heading">Yves VANDERMEER</h3>
                        </div>
                    </div>
                </div>
                <div id="description-1640615400000">
                    <div class="_3ilF9 Rfk_i" data-qa="text">lundi 27 décembre 2021</div>
                    <div class="CSvDb" data-qa="util">
                        
                        <div class="S4td4" data-qa="util">
                            <div class="xFlNy fn4w0 _3JIyP UDtqe _3dZsV" data-qa="flex"><b>Avis</b>
                                <div class="_3RkHM" data-qa="rating-display">
                                    <div class="_2J9wP">
                                        <div class="A1fKA" title="5" aria-label="5" data-qa="rating-display-element">
                                            <div class="eJbEG" data-qa="rating-display-element-item">
                                                <div class="tfmj7 SrXWL"><span class="_3kSpD _3ijJf _1qpno" data-qa="icon"><svg viewBox="0 0 24 24" width="1em" height="1em" role="presentation" focusable="false" aria-hidden="true">
                                                            <path d="M20.945 9.4a.958.958 0 00-.805-.626l-5.438-.23-1.862-5A.95.95 0 0012 3a.95.95 0 00-.84.545l-1.862 5-5.438.23a.958.958 0 00-.805.625.94.94 0 00.216.978l3.883 3.082-1.031 5.377c-.077.402.068.765.37.98a.961.961 0 001.025.065L12 16.73l4.482 3.152a.961.961 0 001.024-.065c.303-.215.57-.548.494-.95l-1.154-5.407 3.883-3.082a.94.94 0 00.216-.978" fill-rule="evenodd"></path>
                                                        </svg></span></div>
                                            </div>
                                            <div class="eJbEG" data-qa="rating-display-element-item">
                                                <div class="tfmj7 SrXWL"><span class="_3kSpD _3ijJf _1qpno" data-qa="icon"><svg viewBox="0 0 24 24" width="1em" height="1em" role="presentation" focusable="false" aria-hidden="true">
                                                            <path d="M20.945 9.4a.958.958 0 00-.805-.626l-5.438-.23-1.862-5A.95.95 0 0012 3a.95.95 0 00-.84.545l-1.862 5-5.438.23a.958.958 0 00-.805.625.94.94 0 00.216.978l3.883 3.082-1.031 5.377c-.077.402.068.765.37.98a.961.961 0 001.025.065L12 16.73l4.482 3.152a.961.961 0 001.024-.065c.303-.215.57-.548.494-.95l-1.154-5.407 3.883-3.082a.94.94 0 00.216-.978" fill-rule="evenodd"></path>
                                                        </svg></span></div>
                                            </div>
                                            <div class="eJbEG" data-qa="rating-display-element-item">
                                                <div class="tfmj7 SrXWL"><span class="_3kSpD _3ijJf _1qpno" data-qa="icon"><svg viewBox="0 0 24 24" width="1em" height="1em" role="presentation" focusable="false" aria-hidden="true">
                                                            <path d="M20.945 9.4a.958.958 0 00-.805-.626l-5.438-.23-1.862-5A.95.95 0 0012 3a.95.95 0 00-.84.545l-1.862 5-5.438.23a.958.958 0 00-.805.625.94.94 0 00.216.978l3.883 3.082-1.031 5.377c-.077.402.068.765.37.98a.961.961 0 001.025.065L12 16.73l4.482 3.152a.961.961 0 001.024-.065c.303-.215.57-.548.494-.95l-1.154-5.407 3.883-3.082a.94.94 0 00.216-.978" fill-rule="evenodd"></path>
                                                        </svg></span></div>
                                            </div>
                                            <div class="eJbEG" data-qa="rating-display-element-item">
                                                <div class="tfmj7 SrXWL"><span class="_3kSpD _3ijJf _1qpno" data-qa="icon"><svg viewBox="0 0 24 24" width="1em" height="1em" role="presentation" focusable="false" aria-hidden="true">
                                                            <path d="M20.945 9.4a.958.958 0 00-.805-.626l-5.438-.23-1.862-5A.95.95 0 0012 3a.95.95 0 00-.84.545l-1.862 5-5.438.23a.958.958 0 00-.805.625.94.94 0 00.216.978l3.883 3.082-1.031 5.377c-.077.402.068.765.37.98a.961.961 0 001.025.065L12 16.73l4.482 3.152a.961.961 0 001.024-.065c.303-.215.57-.548.494-.95l-1.154-5.407 3.883-3.082a.94.94 0 00.216-.978" fill-rule="evenodd"></path>
                                                        </svg></span></div>
                                            </div>
                                            <div class="eJbEG" data-qa="rating-display-element-item">
                                                <div class="tfmj7 SrXWL"><span class="_3kSpD _3ijJf _1qpno" data-qa="icon"><svg viewBox="0 0 24 24" width="1em" height="1em" role="presentation" focusable="false" aria-hidden="true">
                                                            <path d="M20.945 9.4a.958.958 0 00-.805-.626l-5.438-.23-1.862-5A.95.95 0 0012 3a.95.95 0 00-.84.545l-1.862 5-5.438.23a.958.958 0 00-.805.625.94.94 0 00.216.978l3.883 3.082-1.031 5.377c-.077.402.068.765.37.98a.961.961 0 001.025.065L12 16.73l4.482 3.152a.961.961 0 001.024-.065c.303-.215.57-.548.494-.95l-1.154-5.407 3.883-3.082a.94.94 0 00.216-.978" fill-rule="evenodd"></path>
                                                        </svg></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="CSvDb" data-qa="util">
                            <div class="Rfk_i" data-qa="text">Erreur dans les frites livrées</div>
                        </div>
                    </div>
                </div>
            </div>
        </div><div class="_1Xwa9" data-qa="card-element">
            <div class="sshQD">
                <div id="label-1640615400000">
                    <div class="_99BpQ" data-qa="util">
                        <div class="_354yY" data-qa="text">
                            <h3 class="_63-j _1rimQ" data-qa="heading">Yves VANDERMEER</h3>
                        </div>
                    </div>
                </div>
                <div id="description-1640615400000">
                    <div class="_3ilF9 Rfk_i" data-qa="text">lundi 27 décembre 2021</div>
                    <div class="CSvDb" data-qa="util">
                        
                        <div class="S4td4" data-qa="util">
                            <div class="xFlNy fn4w0 _3JIyP UDtqe _3dZsV" data-qa="flex"><b>Avis</b>
                                <div class="_3RkHM" data-qa="rating-display">
                                    <div class="_2J9wP">
                                        <div class="A1fKA" title="5" aria-label="5" data-qa="rating-display-element">
                                            <div class="eJbEG" data-qa="rating-display-element-item">
                                                <div class="tfmj7 SrXWL"><span class="_3kSpD _3ijJf _1qpno" data-qa="icon"><svg viewBox="0 0 24 24" width="1em" height="1em" role="presentation" focusable="false" aria-hidden="true">
                                                            <path d="M20.945 9.4a.958.958 0 00-.805-.626l-5.438-.23-1.862-5A.95.95 0 0012 3a.95.95 0 00-.84.545l-1.862 5-5.438.23a.958.958 0 00-.805.625.94.94 0 00.216.978l3.883 3.082-1.031 5.377c-.077.402.068.765.37.98a.961.961 0 001.025.065L12 16.73l4.482 3.152a.961.961 0 001.024-.065c.303-.215.57-.548.494-.95l-1.154-5.407 3.883-3.082a.94.94 0 00.216-.978" fill-rule="evenodd"></path>
                                                        </svg></span></div>
                                            </div>
                                            <div class="eJbEG" data-qa="rating-display-element-item">
                                                <div class="tfmj7 SrXWL"><span class="_3kSpD _3ijJf _1qpno" data-qa="icon"><svg viewBox="0 0 24 24" width="1em" height="1em" role="presentation" focusable="false" aria-hidden="true">
                                                            <path d="M20.945 9.4a.958.958 0 00-.805-.626l-5.438-.23-1.862-5A.95.95 0 0012 3a.95.95 0 00-.84.545l-1.862 5-5.438.23a.958.958 0 00-.805.625.94.94 0 00.216.978l3.883 3.082-1.031 5.377c-.077.402.068.765.37.98a.961.961 0 001.025.065L12 16.73l4.482 3.152a.961.961 0 001.024-.065c.303-.215.57-.548.494-.95l-1.154-5.407 3.883-3.082a.94.94 0 00.216-.978" fill-rule="evenodd"></path>
                                                        </svg></span></div>
                                            </div>
                                            <div class="eJbEG" data-qa="rating-display-element-item">
                                                <div class="tfmj7 SrXWL"><span class="_3kSpD _3ijJf _1qpno" data-qa="icon"><svg viewBox="0 0 24 24" width="1em" height="1em" role="presentation" focusable="false" aria-hidden="true">
                                                            <path d="M20.945 9.4a.958.958 0 00-.805-.626l-5.438-.23-1.862-5A.95.95 0 0012 3a.95.95 0 00-.84.545l-1.862 5-5.438.23a.958.958 0 00-.805.625.94.94 0 00.216.978l3.883 3.082-1.031 5.377c-.077.402.068.765.37.98a.961.961 0 001.025.065L12 16.73l4.482 3.152a.961.961 0 001.024-.065c.303-.215.57-.548.494-.95l-1.154-5.407 3.883-3.082a.94.94 0 00.216-.978" fill-rule="evenodd"></path>
                                                        </svg></span></div>
                                            </div>
                                            <div class="eJbEG" data-qa="rating-display-element-item">
                                                <div class="tfmj7 SrXWL"><span class="_3kSpD _3ijJf _1qpno" data-qa="icon"><svg viewBox="0 0 24 24" width="1em" height="1em" role="presentation" focusable="false" aria-hidden="true">
                                                            <path d="M20.945 9.4a.958.958 0 00-.805-.626l-5.438-.23-1.862-5A.95.95 0 0012 3a.95.95 0 00-.84.545l-1.862 5-5.438.23a.958.958 0 00-.805.625.94.94 0 00.216.978l3.883 3.082-1.031 5.377c-.077.402.068.765.37.98a.961.961 0 001.025.065L12 16.73l4.482 3.152a.961.961 0 001.024-.065c.303-.215.57-.548.494-.95l-1.154-5.407 3.883-3.082a.94.94 0 00.216-.978" fill-rule="evenodd"></path>
                                                        </svg></span></div>
                                            </div>
                                            <div class="eJbEG" data-qa="rating-display-element-item">
                                                <div class="tfmj7 SrXWL"><span class="_3kSpD _3ijJf _1qpno" data-qa="icon"><svg viewBox="0 0 24 24" width="1em" height="1em" role="presentation" focusable="false" aria-hidden="true">
                                                            <path d="M20.945 9.4a.958.958 0 00-.805-.626l-5.438-.23-1.862-5A.95.95 0 0012 3a.95.95 0 00-.84.545l-1.862 5-5.438.23a.958.958 0 00-.805.625.94.94 0 00.216.978l3.883 3.082-1.031 5.377c-.077.402.068.765.37.98a.961.961 0 001.025.065L12 16.73l4.482 3.152a.961.961 0 001.024-.065c.303-.215.57-.548.494-.95l-1.154-5.407 3.883-3.082a.94.94 0 00.216-.978" fill-rule="evenodd"></path>
                                                        </svg></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="CSvDb" data-qa="util">
                            <div class="Rfk_i" data-qa="text">Erreur dans les frites livrées</div>
                        </div>
                    </div>
                </div>
            </div>
        </div><div class="_1Xwa9" data-qa="card-element">
            <div class="sshQD">
                <div id="label-1640615400000">
                    <div class="_99BpQ" data-qa="util">
                        <div class="_354yY" data-qa="text">
                            <h3 class="_63-j _1rimQ" data-qa="heading">Yves VANDERMEER</h3>
                        </div>
                    </div>
                </div>
                <div id="description-1640615400000">
                    <div class="_3ilF9 Rfk_i" data-qa="text">lundi 27 décembre 2021</div>
                    <div class="CSvDb" data-qa="util">
                        
                        <div class="S4td4" data-qa="util">
                            <div class="xFlNy fn4w0 _3JIyP UDtqe _3dZsV" data-qa="flex"><b>Avis</b>
                                <div class="_3RkHM" data-qa="rating-display">
                                    <div class="_2J9wP">
                                        <div class="A1fKA" title="5" aria-label="5" data-qa="rating-display-element">
                                            <div class="eJbEG" data-qa="rating-display-element-item">
                                                <div class="tfmj7 SrXWL"><span class="_3kSpD _3ijJf _1qpno" data-qa="icon"><svg viewBox="0 0 24 24" width="1em" height="1em" role="presentation" focusable="false" aria-hidden="true">
                                                            <path d="M20.945 9.4a.958.958 0 00-.805-.626l-5.438-.23-1.862-5A.95.95 0 0012 3a.95.95 0 00-.84.545l-1.862 5-5.438.23a.958.958 0 00-.805.625.94.94 0 00.216.978l3.883 3.082-1.031 5.377c-.077.402.068.765.37.98a.961.961 0 001.025.065L12 16.73l4.482 3.152a.961.961 0 001.024-.065c.303-.215.57-.548.494-.95l-1.154-5.407 3.883-3.082a.94.94 0 00.216-.978" fill-rule="evenodd"></path>
                                                        </svg></span></div>
                                            </div>
                                            <div class="eJbEG" data-qa="rating-display-element-item">
                                                <div class="tfmj7 SrXWL"><span class="_3kSpD _3ijJf _1qpno" data-qa="icon"><svg viewBox="0 0 24 24" width="1em" height="1em" role="presentation" focusable="false" aria-hidden="true">
                                                            <path d="M20.945 9.4a.958.958 0 00-.805-.626l-5.438-.23-1.862-5A.95.95 0 0012 3a.95.95 0 00-.84.545l-1.862 5-5.438.23a.958.958 0 00-.805.625.94.94 0 00.216.978l3.883 3.082-1.031 5.377c-.077.402.068.765.37.98a.961.961 0 001.025.065L12 16.73l4.482 3.152a.961.961 0 001.024-.065c.303-.215.57-.548.494-.95l-1.154-5.407 3.883-3.082a.94.94 0 00.216-.978" fill-rule="evenodd"></path>
                                                        </svg></span></div>
                                            </div>
                                            <div class="eJbEG" data-qa="rating-display-element-item">
                                                <div class="tfmj7 SrXWL"><span class="_3kSpD _3ijJf _1qpno" data-qa="icon"><svg viewBox="0 0 24 24" width="1em" height="1em" role="presentation" focusable="false" aria-hidden="true">
                                                            <path d="M20.945 9.4a.958.958 0 00-.805-.626l-5.438-.23-1.862-5A.95.95 0 0012 3a.95.95 0 00-.84.545l-1.862 5-5.438.23a.958.958 0 00-.805.625.94.94 0 00.216.978l3.883 3.082-1.031 5.377c-.077.402.068.765.37.98a.961.961 0 001.025.065L12 16.73l4.482 3.152a.961.961 0 001.024-.065c.303-.215.57-.548.494-.95l-1.154-5.407 3.883-3.082a.94.94 0 00.216-.978" fill-rule="evenodd"></path>
                                                        </svg></span></div>
                                            </div>
                                            <div class="eJbEG" data-qa="rating-display-element-item">
                                                <div class="tfmj7 SrXWL"><span class="_3kSpD _3ijJf _1qpno" data-qa="icon"><svg viewBox="0 0 24 24" width="1em" height="1em" role="presentation" focusable="false" aria-hidden="true">
                                                            <path d="M20.945 9.4a.958.958 0 00-.805-.626l-5.438-.23-1.862-5A.95.95 0 0012 3a.95.95 0 00-.84.545l-1.862 5-5.438.23a.958.958 0 00-.805.625.94.94 0 00.216.978l3.883 3.082-1.031 5.377c-.077.402.068.765.37.98a.961.961 0 001.025.065L12 16.73l4.482 3.152a.961.961 0 001.024-.065c.303-.215.57-.548.494-.95l-1.154-5.407 3.883-3.082a.94.94 0 00.216-.978" fill-rule="evenodd"></path>
                                                        </svg></span></div>
                                            </div>
                                            <div class="eJbEG" data-qa="rating-display-element-item">
                                                <div class="tfmj7 SrXWL"><span class="_3kSpD _3ijJf _1qpno" data-qa="icon"><svg viewBox="0 0 24 24" width="1em" height="1em" role="presentation" focusable="false" aria-hidden="true">
                                                            <path d="M20.945 9.4a.958.958 0 00-.805-.626l-5.438-.23-1.862-5A.95.95 0 0012 3a.95.95 0 00-.84.545l-1.862 5-5.438.23a.958.958 0 00-.805.625.94.94 0 00.216.978l3.883 3.082-1.031 5.377c-.077.402.068.765.37.98a.961.961 0 001.025.065L12 16.73l4.482 3.152a.961.961 0 001.024-.065c.303-.215.57-.548.494-.95l-1.154-5.407 3.883-3.082a.94.94 0 00.216-.978" fill-rule="evenodd"></path>
                                                        </svg></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="CSvDb" data-qa="util">
                            <div class="Rfk_i" data-qa="text">Erreur dans les frites livrées</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                      <div class="_1Xwa9" data-qa="card-element">
            <div class="sshQD">
                <div id="label-1640615400000">
                    <div class="_99BpQ" data-qa="util">
                        <div class="_354yY" data-qa="text">
                            <h3 class="_63-j _1rimQ" data-qa="heading">Yves VANDERMEER</h3>
                        </div>
                    </div>
                </div>
                <div id="description-1640615400000">
                    <div class="_3ilF9 Rfk_i" data-qa="text">lundi 27 décembre 2021</div>
                    <div class="CSvDb" data-qa="util">
                        
                        <div class="S4td4" data-qa="util">
                            <div class="xFlNy fn4w0 _3JIyP UDtqe _3dZsV" data-qa="flex"><b>Avis</b>
                                <div class="_3RkHM" data-qa="rating-display">
                                    <div class="_2J9wP">
                                        <div class="A1fKA" title="5" aria-label="5" data-qa="rating-display-element">
                                            <div class="eJbEG" data-qa="rating-display-element-item">
                                                <div class="tfmj7 SrXWL"><span class="_3kSpD _3ijJf _1qpno" data-qa="icon"><svg viewBox="0 0 24 24" width="1em" height="1em" role="presentation" focusable="false" aria-hidden="true">
                                                            <path d="M20.945 9.4a.958.958 0 00-.805-.626l-5.438-.23-1.862-5A.95.95 0 0012 3a.95.95 0 00-.84.545l-1.862 5-5.438.23a.958.958 0 00-.805.625.94.94 0 00.216.978l3.883 3.082-1.031 5.377c-.077.402.068.765.37.98a.961.961 0 001.025.065L12 16.73l4.482 3.152a.961.961 0 001.024-.065c.303-.215.57-.548.494-.95l-1.154-5.407 3.883-3.082a.94.94 0 00.216-.978" fill-rule="evenodd"></path>
                                                        </svg></span></div>
                                            </div>
                                            <div class="eJbEG" data-qa="rating-display-element-item">
                                                <div class="tfmj7 SrXWL"><span class="_3kSpD _3ijJf _1qpno" data-qa="icon"><svg viewBox="0 0 24 24" width="1em" height="1em" role="presentation" focusable="false" aria-hidden="true">
                                                            <path d="M20.945 9.4a.958.958 0 00-.805-.626l-5.438-.23-1.862-5A.95.95 0 0012 3a.95.95 0 00-.84.545l-1.862 5-5.438.23a.958.958 0 00-.805.625.94.94 0 00.216.978l3.883 3.082-1.031 5.377c-.077.402.068.765.37.98a.961.961 0 001.025.065L12 16.73l4.482 3.152a.961.961 0 001.024-.065c.303-.215.57-.548.494-.95l-1.154-5.407 3.883-3.082a.94.94 0 00.216-.978" fill-rule="evenodd"></path>
                                                        </svg></span></div>
                                            </div>
                                            <div class="eJbEG" data-qa="rating-display-element-item">
                                                <div class="tfmj7 SrXWL"><span class="_3kSpD _3ijJf _1qpno" data-qa="icon"><svg viewBox="0 0 24 24" width="1em" height="1em" role="presentation" focusable="false" aria-hidden="true">
                                                            <path d="M20.945 9.4a.958.958 0 00-.805-.626l-5.438-.23-1.862-5A.95.95 0 0012 3a.95.95 0 00-.84.545l-1.862 5-5.438.23a.958.958 0 00-.805.625.94.94 0 00.216.978l3.883 3.082-1.031 5.377c-.077.402.068.765.37.98a.961.961 0 001.025.065L12 16.73l4.482 3.152a.961.961 0 001.024-.065c.303-.215.57-.548.494-.95l-1.154-5.407 3.883-3.082a.94.94 0 00.216-.978" fill-rule="evenodd"></path>
                                                        </svg></span></div>
                                            </div>
                                            <div class="eJbEG" data-qa="rating-display-element-item">
                                                <div class="tfmj7 SrXWL"><span class="_3kSpD _3ijJf _1qpno" data-qa="icon"><svg viewBox="0 0 24 24" width="1em" height="1em" role="presentation" focusable="false" aria-hidden="true">
                                                            <path d="M20.945 9.4a.958.958 0 00-.805-.626l-5.438-.23-1.862-5A.95.95 0 0012 3a.95.95 0 00-.84.545l-1.862 5-5.438.23a.958.958 0 00-.805.625.94.94 0 00.216.978l3.883 3.082-1.031 5.377c-.077.402.068.765.37.98a.961.961 0 001.025.065L12 16.73l4.482 3.152a.961.961 0 001.024-.065c.303-.215.57-.548.494-.95l-1.154-5.407 3.883-3.082a.94.94 0 00.216-.978" fill-rule="evenodd"></path>
                                                        </svg></span></div>
                                            </div>
                                            <div class="eJbEG" data-qa="rating-display-element-item">
                                                <div class="tfmj7 SrXWL"><span class="_3kSpD _3ijJf _1qpno" data-qa="icon"><svg viewBox="0 0 24 24" width="1em" height="1em" role="presentation" focusable="false" aria-hidden="true">
                                                            <path d="M20.945 9.4a.958.958 0 00-.805-.626l-5.438-.23-1.862-5A.95.95 0 0012 3a.95.95 0 00-.84.545l-1.862 5-5.438.23a.958.958 0 00-.805.625.94.94 0 00.216.978l3.883 3.082-1.031 5.377c-.077.402.068.765.37.98a.961.961 0 001.025.065L12 16.73l4.482 3.152a.961.961 0 001.024-.065c.303-.215.57-.548.494-.95l-1.154-5.407 3.883-3.082a.94.94 0 00.216-.978" fill-rule="evenodd"></path>
                                                        </svg></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="CSvDb" data-qa="util">
                            <div class="Rfk_i" data-qa="text">Erreur dans les frites livrées</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                    </div>

                    <div id="info" class="tabcontent">
                      <div data-qa="restaurant-info-modal-info">
                        <div class="_1P1GPH">
                            <div class="map">
                                    <iframe src="https://maps.google.com/maps?q={{ $restorant->lat }},{{ $restorant->lng }}&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                </div>
                            <div style="display: none;"></div>
                        </div>
                        <div class="_1_FOFU" data-qa="restaurant-info-modal-info-shipping-times">
                            <div class="_3QP0ZU"><span class="_28N136"><span class="_3kSpD _3ijJf _1qpno" data-qa="icon"><svg viewBox="0 0 24 24" width="1em" height="1em" role="presentation" focusable="false" aria-hidden="true">
                                            <path d="M16.955 15.816A.65.65 0 0116.5 16a.649.649 0 01-.454-.184l-3.858-3.764a.62.62 0 01-.188-.444V5.961c0-.347.288-.628.643-.628.355 0 .642.281.642.628v5.387l3.67 3.581a.617.617 0 010 .887M13.2 4c-4.105 0-7.468 3.254-7.775 7.385H3.6c-.332 0-.6.275-.6.615 0 .34.268.615.6.615H9.6c.331 0 .6.275.6.615 0 .34-.269.616-.6.616H5.61h.001H4.8c-.332 0-.6.275-.6.615 0 .34.268.615.6.615h4.8c.331 0 .6.276.6.615 0 .34-.269.616-.6.616H6.628C8.014 18.527 10.438 20 13.2 20c4.308 0 7.8-3.582 7.8-8s-3.492-8-7.8-8" fill-rule="evenodd"></path>
                                        </svg></span></span>
                                <h3 class="_63-j _1rimQ" data-qa="heading">Livre entre</h3>
                            </div>
                            <div class="_1svtt _3fbIQ _3ygPZ" data-qa="restaurant-info-modal-info-shipping-times-element">
                                <div class="_1Xwa9" data-qa="restaurant-info-modal-info-shipping-times-element-element">
                                    <div class='schedule'>
                                    <h4>Hours</h4>
                                    <ol class='items'>
                                        @foreach ($wh as $day=>$hours)
                                        <li>
                                            @if ($day==$currentDay)
                                            <div class='day'>{{ __(ucfirst($day))}}
                                                <span class='tag'>
                                                    {{ __('Today') }}
                                                </span>
                                            </div>
                                            @else
                                            <div class='day'>{{ __(ucfirst($day))}} </div>
                                            @endif
                                            @foreach ($hours as $timeRange)
                                            <div class='hours'>{{ $timeRange->start() }} - {{ $timeRange->end() }} </div>
                                            @endforeach

                                        </li>
                                        @endforeach

                                    </ol>

                                </div>
                                </div><span class="_386So"></span>
                            </div>
                        </div>
                        <div class="_1_FOFU" data-qa="restaurant-info-modal-info-website">
                            <div class="_3QP0ZU"><span class="_28N136"><span class="_3kSpD _3ijJf _1qpno" data-qa="icon"><svg viewBox="0 0 24 24" width="1em" height="1em" role="presentation" focusable="false" aria-hidden="true">
                                            <path d="M15.997 12.503a3.528 3.528 0 002.32.608c.203-.019.4-.057.592-.11V21h-5.09v-5.11a.877.877 0 00-.864-.89h-1.91a.878.878 0 00-.863.89V21H5.09v-7.997a3.367 3.367 0 00.908.122c.718 0 1.418-.222 1.998-.622a3.48 3.48 0 002 .622 3.48 3.48 0 002-.62c.58.403 1.271.62 2 .62a3.48 3.48 0 002-.622zm3.998-3.878v1.044a1.97 1.97 0 01-1.086 1.743l-.01.004a1.976 1.976 0 01-.904.209 2.056 2.056 0 01-1.479-.613.699.699 0 00-.506-.208c-.201 0-.405.078-.554.227a2.06 2.06 0 01-1.46.594 2.06 2.06 0 01-1.46-.594.758.758 0 00-.539-.222.757.757 0 00-.539.222 2.06 2.06 0 01-1.46.594 2.06 2.06 0 01-1.46-.594.785.785 0 00-.553-.227.7.7 0 00-.507.208 2.055 2.055 0 01-1.675.604 1.937 1.937 0 01-.708-.201l-.004-.001a1.968 1.968 0 01-1.09-1.745V8.625h15.994zM16.582 3c.537 0 1.031.304 1.286.792L20 7.875H4l2.132-4.083A1.454 1.454 0 017.418 3z" fill-rule="evenodd"></path>
                                        </svg></span></span>
                                <h3 class="_63-j _1rimQ" data-qa="heading">Site Web</h3>
                            </div>
                            <div class="_1svtt _3fbIQ _3ygPZ" data-qa="restaurant-info-modal-info-website-element">
                                <div class="_1Xwa9" data-qa="restaurant-info-modal-info-website-element-element">
                                    <div class="sshQD"><a class="i74Ed XAuKl _1lVIK" href="https://mcdonalds-portedenamur.be" target="_blank" tabindex="0" data-qa="text-link">mcdonalds-portedenamur.be</a></div>
                                </div><span class="_386So"></span>
                            </div>
                        </div>
                        <div class="_1_FOFU" data-qa="restaurant-info-modal-info-payments">
                            <div class="_3QP0ZU"><span class="_28N136"><span class="_3kSpD _3ijJf _1qpno" data-qa="icon"><svg viewBox="0 0 24 24" width="1em" height="1em" role="presentation" focusable="false" aria-hidden="true">
                                            <path d="M6.078 17.5c-.934 0-1.692-.747-1.693-1.667 0-.92.756-1.666 1.69-1.666.936 0 1.694.746 1.695 1.666 0 .92-.758 1.667-1.692 1.667zM23 10v8.334c0 .92-.757 1.666-1.691 1.666H2.692C1.758 20 1 19.254 1 18.334V10h22zm-1.692-5C22.242 5 23 5.746 23 6.666v1.667H1V6.666C1 5.746 1.757 5 2.691 5z" fill-rule="evenodd"></path>
                                        </svg></span></span>
                                <h3 class="_63-j _1rimQ" data-qa="heading">Modes de paiement</h3>
                            </div>
                            <div class="_1svtt _3fbIQ _3ygPZ" data-qa="restaurant-info-modal-info-payments-element">
                                <div class="_1Xwa9" data-qa="restaurant-info-modal-info-payments-element-element">
                                    <div class="sshQD">
                                        <div class="_2xv_P" role="list" data-qa="payment-labels">
                                            <div role="listitem" class="Avhqp" title="Bancontact / Mister Cash" data-qa="payment-label-payments-bancontact">
                                                <div class="_14apO">
                                                    <div class="_3erPp"><span class="_3kSpD _3ijJf _1qpno" data-qa="icon"><svg viewBox="0 0 24 24" width="1em" height="1em" role="presentation" focusable="false" aria-hidden="true">
                                                                <defs>
                                                                    <linearGradient x1="20.227%" y1="50.745%" x2="93.381%" y2="39.827%" id="snacks-icon-bancontact-linear-gradient-1">
                                                                        <stop stop-color="#005AB9" offset="0%"></stop>
                                                                        <stop stop-color="#1E3764" offset="100%"></stop>
                                                                    </linearGradient>
                                                                    <linearGradient x1="6.055%" y1="59.474%" x2="83.729%" y2="48.825%" id="snacks-icon-bancontact-linear-gradient-2">
                                                                        <stop stop-color="#FBA900" offset="0%"></stop>
                                                                        <stop stop-color="#FFD800" offset="100%"></stop>
                                                                    </linearGradient>
                                                                </defs>
                                                                <g fill-rule="nonzero" fill="none">
                                                                    <path d="M1.179 18.574v-3.128h.965c.702 0 1.153.263 1.153.809a.727.727 0 01-.344.648c.29.134.46.393.46.746 0 .63-.46.925-1.175.925h-1.06zm.621-1.828h.46c.282 0 .403-.138.403-.393 0-.273-.22-.362-.514-.362H1.8v.755zm0 1.283h.384c.376 0 .595-.094.595-.389 0-.29-.188-.411-.54-.411H1.8v.8zm2.818.599c-.612 0-.92-.3-.92-.702 0-.442.362-.702.898-.706.133.002.266.014.398.036v-.108c0-.272-.157-.402-.456-.402a1.568 1.568 0 00-.59.107l-.112-.482c.192-.08.5-.134.773-.134.657 0 .983.348.983.952v1.242c-.183.094-.527.197-.974.197zm.376-.505v-.479a1.501 1.501 0 00-.318-.035c-.205 0-.366.08-.366.29 0 .188.134.286.37.286a.7.7 0 00.314-.062zm1.033.451v-2.14a2.729 2.729 0 011.01-.197c.652 0 1.028.321 1.028.916v1.421h-.617v-1.376c0-.309-.143-.452-.416-.452a.937.937 0 00-.393.08v1.748h-.612zm4.193-2.203l-.116.487a1.361 1.361 0 00-.505-.112c-.362 0-.559.255-.559.675 0 .46.206.697.59.697.171-.005.34-.044.496-.116l.098.496c-.202.09-.422.134-.643.13-.742 0-1.171-.46-1.171-1.19 0-.723.424-1.201 1.135-1.201.232-.001.461.044.675.134zm1.332 2.257c-.688 0-1.117-.479-1.117-1.198 0-.715.429-1.193 1.117-1.193.693 0 1.113.478 1.113 1.193 0 .72-.42 1.198-1.113 1.198zm0-.51c.317 0 .483-.264.483-.688 0-.42-.166-.684-.483-.684-.313 0-.487.264-.487.684 0 .424.174.688.487.688zm1.47.456v-2.14a2.729 2.729 0 011.01-.197c.652 0 1.028.321 1.028.916v1.421h-.617v-1.376c0-.309-.143-.452-.416-.452a.937.937 0 00-.393.08v1.748h-.612zm3.429.054c-.532 0-.805-.29-.805-.88v-.966h-.304v-.492h.304v-.496l.617-.031v.527h.496v.492h-.496v.956c0 .26.107.38.308.38.08 0 .16-.009.237-.027l.032.496a1.705 1.705 0 01-.39.04zm1.556 0c-.612 0-.92-.3-.92-.702 0-.442.362-.702.898-.706.133.002.266.014.398.036v-.108c0-.272-.157-.402-.456-.402a1.568 1.568 0 00-.59.107l-.112-.482c.192-.08.5-.134.773-.134.657 0 .984.348.984.952v1.242c-.184.094-.528.197-.975.197zm.376-.505v-.479a1.501 1.501 0 00-.318-.035c-.205 0-.366.08-.366.29 0 .188.134.286.37.286a.7.7 0 00.314-.062zm2.709-1.752l-.116.487a1.361 1.361 0 00-.505-.112c-.362 0-.56.255-.56.675 0 .46.206.697.59.697.172-.005.341-.044.497-.116l.098.496c-.202.09-.422.134-.643.13-.742 0-1.171-.46-1.171-1.19 0-.723.424-1.201 1.135-1.201.232-.001.461.044.675.134zm1.356 2.257c-.532 0-.805-.29-.805-.88v-.966h-.304v-.492h.304v-.496l.617-.031v.527h.496v.492h-.496v.956c0 .26.107.38.308.38.08 0 .16-.009.237-.027l.031.496a1.705 1.705 0 01-.388.04z" fill="#1E3764"></path>
                                                                    <path d="M4.48 8.881c3.264 0 4.896-2.175 6.528-4.35H.178v4.35h4.303z" fill="url(#snacks-icon-bancontact-linear-gradient-1)" transform="translate(1 5)"></path>
                                                                    <path d="M17.535.179c-3.264 0-4.896 2.176-6.527 4.351h10.828V.18h-4.301z" fill="url(#snacks-icon-bancontact-linear-gradient-2)" transform="translate(1 5)"></path>
                                                                </g>
                                                            </svg></span></div>
                                                </div>
                                            </div>
                                            <div role="listitem" class="Avhqp" title="PayPal" data-qa="payment-label-payments-paypal">
                                                <div class="_14apO">
                                                    <div class="_3erPp"><span class="_3kSpD _3ijJf _1qpno" data-qa="icon"><svg viewBox="0 0 24 24" width="1em" height="1em" role="presentation" focusable="false" aria-hidden="true">
                                                                <defs>
                                                                    <path id="snacks-icon-paypal-path-1" d="M0 .462h13.017v15.064H0z"></path>
                                                                </defs>
                                                                <g fill="none" fill-rule="evenodd">
                                                                    <path d="M8.08 20.252l.293-1.865-.654-.016H4.596l2.17-13.763a.18.18 0 01.177-.15h5.266c1.749 0 2.955.364 3.585 1.082.295.336.484.689.575 1.076.095.407.097.892.003 1.485l-.006.043v.38l.295.167c.249.132.446.283.598.456.253.288.416.654.485 1.088.071.446.048.977-.069 1.579-.135.691-.353 1.294-.647 1.786-.27.455-.615.832-1.024 1.123a4.17 4.17 0 01-1.38.623c-.51.133-1.09.2-1.725.2h-.41c-.293 0-.578.105-.801.295a1.24 1.24 0 00-.418.745l-.031.168-.519 3.287-.023.121c-.007.038-.017.057-.033.07a.09.09 0 01-.054.02H8.08z" fill="#253B80"></path>
                                                                    <path d="M16.94 8.188a9.21 9.21 0 01-.053.308c-.695 3.566-3.071 4.798-6.106 4.798H9.236a.75.75 0 00-.742.636l-.79 5.017-.225 1.422a.395.395 0 00.39.457h2.741a.66.66 0 00.651-.556l.027-.139.516-3.274.033-.18a.659.659 0 01.652-.557h.41c2.655 0 4.733-1.078 5.34-4.198.254-1.303.123-2.39-.548-3.156a2.62 2.62 0 00-.75-.578" fill="#179BD7"></path>
                                                                    <path d="M16.214 7.898a5.478 5.478 0 00-.675-.15 8.581 8.581 0 00-1.363-.1H10.05a.655.655 0 00-.651.558l-.878 5.562-.026.162a.75.75 0 01.742-.636h1.545c3.035 0 5.411-1.232 6.106-4.798a7.97 7.97 0 00.054-.308 3.702 3.702 0 00-.727-.29" fill="#222D65"></path>
                                                                    <g transform="translate(4 3.421)">
                                                                        <mask id="snacks-icon-paypal-mask-2" fill="#fff">
                                                                            <use xlink:href="#snacks-icon-paypal-path-1"></use>
                                                                        </mask>
                                                                        <path d="M5.398 4.784a.656.656 0 01.65-.556h4.128c.49 0 .946.032 1.363.1a5.478 5.478 0 01.832.198c.204.067.394.148.57.24.207-1.317-.002-2.215-.714-3.027C11.44.845 10.024.462 8.21.462H2.943c-.37 0-.687.27-.744.636L.006 15.002a.453.453 0 00.446.524h3.251l.817-5.18.878-5.562z" fill="#253B80" mask="url(#snacks-icon-paypal-mask-2)"></path>
                                                                    </g>
                                                                </g>
                                                            </svg></span></div>
                                                </div>
                                            </div>
                                            <div role="listitem" class="Avhqp" title="Carte de crédit" data-qa="payment-label-payments-creditcard">
                                                <div class="_14apO">
                                                    <div class="_3erPp"><span class="_3kSpD _3ijJf _1qpno" data-qa="icon"><svg viewBox="0 0 24 24" width="1em" height="1em" role="presentation" focusable="false" aria-hidden="true">
                                                                <path d="M6.078 17.5c-.934 0-1.692-.747-1.693-1.667 0-.92.756-1.666 1.69-1.666.936 0 1.694.746 1.695 1.666 0 .92-.758 1.667-1.692 1.667zM23 10v8.334c0 .92-.757 1.666-1.691 1.666H2.692C1.758 20 1 19.254 1 18.334V10h22zm-1.692-5C22.242 5 23 5.746 23 6.666v1.667H1V6.666C1 5.746 1.757 5 2.691 5z" fill="#fb6100" fill-rule="evenodd"></path>
                                                            </svg></span></div>
                                                </div>
                                            </div>
                                            <div role="listitem" class="Avhqp" title="Sodexo" data-qa="payment-label-payments-sodexo">
                                                <div class="_14apO">
                                                    <div class="_3erPp"><span class="_3kSpD _3ijJf _1qpno" data-qa="icon"><svg viewBox="0 0 24 24" width="1em" height="1em" role="presentation" focusable="false" aria-hidden="true">
                                                                <g fill-rule="nonzero" fill="none">
                                                                    <path d="M0 4h24v15H0z" fill="#FFF"></path>
                                                                    <path d="M11.49 10.255l-.234 1.131c-.093.465-.372.759-.93.759-.651 0-.822-.402-.666-.96.204-.807.855-1.053 1.83-.93m1.023-1.629l-.699.063-.216 1.101c-.264-.015-.342-.015-.651-.015-.96 0-1.815.402-2.031 1.35-.201.852.279 1.521 1.35 1.521 1.086 0 1.566-.573 1.737-1.365l.51-2.655zM5.07 10.3c-1.008-.093-1.875 0-1.893.327-.015.513 1.659.078 1.629 1.008-.048 1.395-2.388 1.071-2.961.9l.108-.42c.993.156 2.046.171 2.079-.372.03-.588-1.659-.063-1.629-1.008.03-.699 1.086-1.086 2.808-.837l-.141.402zm2.715.948a1.175 1.175 0 01-1.146.945c-.573 0-.822-.327-.681-.945.108-.558.588-.945 1.164-.96.522-.018.804.369.663.96m-.588-1.443c-1.008 0-1.8.573-2.001 1.443-.201.87.342 1.443 1.335 1.443.993 0 1.8-.588 2.001-1.443.201-.855-.345-1.443-1.335-1.443m11.55 2.868h-.867a16.087 16.087 0 01-2.28-2.838h.636c.714.963 2.511 2.838 2.511 2.838m.915-5.643l.402-.837.108.852.822-.294-.57.729.621.48-.837.078-.03.867-.468-.651-.666.621.249-.867-.792-.108.759-.435-.309-.759.711.324zm1.692 4.218c-.108.558-.606.96-1.164.96-.573 0-.837-.342-.681-.96.108-.558.606-.96 1.179-.978.54 0 .819.387.666.978m-.591-1.458c-1.023 0-1.83.588-2.031 1.458-.201.867.342 1.473 1.365 1.473s1.83-.588 2.031-1.473c.201-.885-.342-1.458-1.365-1.458" fill="#2F3B96"></path>
                                                                    <path d="M14.949 12.424c1.644-.915 3.069-2.31 4.077-3.519-.729 2.265-2.481 3.504-4.077 3.519" fill="#EC2024"></path>
                                                                    <path d="M14.298 10.225c.309 0 .48.108.48.327 0 .573-1.131.543-1.629.435.186-.468.636-.78 1.149-.762m1.164.294c0-.42-.342-.729-1.086-.729-1.224 0-2.031.792-2.031 1.782 0 .636.528 1.164 1.503 1.164.387 0 .774-.108 1.116-.327-.852.093-1.893 0-1.893-.9v-.108c1.149.249 2.391-.045 2.391-.882" fill="#2F3B96"></path>
                                                                    <g fill="#E9444E">
                                                                        <path d="M4.794 14.014h.45v1.344c0 .087.018.147.051.18s.09.051.168.051h.489v.348h-.663c-.165 0-.288-.045-.372-.138-.084-.09-.126-.219-.126-.384v-1.401h.003zM6.165 14.533h.441v.876c0 .078.015.132.048.159a.169.169 0 00.108.042.215.215 0 00.144-.054c.042-.036.081-.072.117-.108l.063-.063v-.858h.444v1.404h-.444v-.246l-.075.081a.823.823 0 01-.174.135.49.49 0 01-.246.054.456.456 0 01-.306-.105c-.081-.069-.12-.192-.12-.372v-.945zM7.878 15.937v-1.404h.441v.252l.078-.081a.738.738 0 01.171-.135.502.502 0 01.249-.054c.123 0 .225.033.306.102.081.069.12.189.12.36v.963h-.441v-.876c0-.078-.015-.132-.048-.159a.169.169 0 00-.108-.042.215.215 0 00-.144.054.832.832 0 00-.117.111l-.063.06v.858h-.444v-.009zM9.519 15.13c0-.21.072-.363.213-.465a.823.823 0 01.498-.15c.09 0 .183.009.279.027a.877.877 0 01.246.081v.432h-.354v-.168a.43.43 0 00-.084-.021c-.03-.003-.057-.006-.084-.006a.277.277 0 00-.192.066c-.051.045-.078.114-.078.204v.186c0 .105.027.18.078.228.051.048.126.072.225.072.072 0 .15-.006.228-.021.078-.015.147-.03.213-.048h.021v.324a.995.995 0 01-.237.063 1.751 1.751 0 01-.264.027.876.876 0 01-.504-.135c-.132-.09-.198-.243-.198-.456v-.24h-.006zM11.025 15.937v-1.923h.441v.771l.078-.081a.738.738 0 01.171-.135.502.502 0 01.249-.054c.123 0 .225.036.306.105.081.069.12.192.12.372v.948h-.441v-.876c0-.078-.015-.132-.048-.159a.169.169 0 00-.108-.042.215.215 0 00-.144.054.832.832 0 00-.117.111l-.063.06v.858h-.444v-.009zM13.419 15.937v-1.923h.765c.225 0 .396.054.507.165.111.108.168.276.168.504 0 .225-.063.402-.186.528s-.3.189-.528.189h-.276v.54h-.45v-.003zm.447-.885h.21c.132 0 .219-.033.264-.096a.475.475 0 00.066-.276c0-.117-.024-.201-.072-.249-.048-.048-.132-.072-.249-.072h-.219v.693zM15.027 15.256c0-.219.081-.393.243-.525a.835.835 0 01.546-.195h.609v1.404h-.441v-.222l-.108.084a.91.91 0 01-.186.114.58.58 0 01-.24.045.43.43 0 01-.3-.114c-.081-.075-.123-.198-.123-.369v-.222zm.954.147v-.54h-.123a.388.388 0 00-.279.105.357.357 0 00-.111.276v.165c0 .081.015.135.048.162a.172.172 0 00.114.042.265.265 0 00.159-.057c.054-.039.096-.072.129-.099l.063-.054zM16.716 15.574h.021c.069.015.15.027.237.036.087.009.162.015.225.015a.81.81 0 00.18-.021c.066-.015.096-.045.096-.093 0-.033-.021-.06-.06-.078a.595.595 0 00-.117-.039l-.216-.048a.571.571 0 01-.27-.132c-.066-.063-.099-.15-.099-.267 0-.162.072-.273.216-.336.144-.063.303-.096.474-.096a2.08 2.08 0 01.45.051v.324h-.021c-.063-.009-.129-.021-.201-.027a1.74 1.74 0 00-.222-.012.565.565 0 00-.159.021c-.051.015-.078.045-.078.09 0 .033.018.057.054.072.036.012.072.024.108.033l.186.045a.73.73 0 01.288.123c.084.06.126.156.126.288 0 .18-.078.3-.234.357-.156.06-.321.087-.501.087-.087 0-.168-.003-.249-.009a1.91 1.91 0 01-.234-.033v-.351zM18.129 15.574h.021c.069.015.15.027.237.036.087.009.162.015.225.015a.81.81 0 00.18-.021c.066-.015.096-.045.096-.093 0-.033-.021-.06-.06-.078a.595.595 0 00-.117-.039l-.216-.048a.571.571 0 01-.27-.132c-.066-.063-.099-.15-.099-.267 0-.162.072-.273.216-.336.144-.063.303-.096.474-.096a2.08 2.08 0 01.45.051v.324h-.021c-.063-.009-.129-.021-.201-.027a1.74 1.74 0 00-.222-.012.565.565 0 00-.159.021c-.051.015-.078.045-.078.09 0 .033.018.057.054.072.036.012.072.024.108.033l.186.045a.73.73 0 01.288.123c.084.06.126.156.126.288 0 .18-.078.3-.234.357-.156.06-.321.087-.501.087-.087 0-.168-.003-.249-.009a1.91 1.91 0 01-.234-.033v-.351z"></path>
                                                                    </g>
                                                                </g>
                                                            </svg></span></div>
                                                </div>
                                            </div>
                                            <div role="listitem" class="Avhqp" title="Bon" data-qa="payment-label-payments-voucher">
                                                <div class="_14apO">
                                                    <div class="_3erPp"><span class="_3kSpD _3ijJf _1qpno" data-qa="icon"><svg viewBox="0 0 24 24" width="1em" height="1em" role="presentation" focusable="false" aria-hidden="true">
                                                                <defs>
                                                                    <path d="M16.277 11.772L8.57 14.507a.647.647 0 01-.823-.4.658.658 0 01.396-.835l7.706-2.735c.338-.12.704.06.822.401a.657.657 0 01-.395.834m-.867 4.683c-.27.614-.98.889-1.585.615a1.223 1.223 0 01-.606-1.607c.27-.613.98-.889 1.585-.615s.876.994.606 1.607M9.105 8.858c.27-.614.98-.89 1.584-.615.605.274.877.993.606 1.607-.27.613-.98.888-1.584.614a1.223 1.223 0 01-.606-1.606m11.702 1.597L16.73 3.51a1.024 1.024 0 00-1.083-.49L7.826 4.578a1.379 1.379 0 00-.99.799L3.12 13.815c-.31.703.001 1.527.694 1.841l11.535 5.223a1.368 1.368 0 001.816-.705l3.715-8.438a1.412 1.412 0 00-.073-1.281" id="snacks-icon-voucher-static-voucher-1"></path>
                                                                </defs>
                                                                <use fill="#fb6100" xlink:href="#snacks-icon-voucher-static-voucher-1" fill-rule="evenodd"></use>
                                                            </svg></span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><span class="_386So"></span>
                            </div>
                        </div>
                        <div class="_1_FOFU" data-qa="restaurant-info-modal-info-colophon">
                            <div class="_3QP0ZU"><span class="_28N136"><span class="_3kSpD _3ijJf _1qpno" data-qa="icon"><svg viewBox="0 0 24 24" width="1em" height="1em" role="presentation" focusable="false" aria-hidden="true">
                                            <path d="M15.818 7.052c-.615 0-1.113-.47-1.113-1.05 0-.58.498-1.05 1.113-1.05s1.114.47 1.114 1.05c0 .58-.5 1.05-1.114 1.05m0 3.6c-.615 0-1.113-.47-1.113-1.05 0-.58.498-1.05 1.113-1.05s1.114.47 1.114 1.05c0 .58-.5 1.05-1.114 1.05m0 3.579c-.602 0-1.09-.46-1.09-1.029 0-.568.488-1.028 1.09-1.028.602 0 1.09.46 1.09 1.028 0 .57-.488 1.029-1.09 1.029M12 7.033c-.603 0-1.093-.46-1.093-1.03 0-.57.49-1.031 1.093-1.031s1.093.46 1.093 1.03c0 .57-.49 1.031-1.093 1.031m0 3.6c-.603 0-1.093-.46-1.093-1.03 0-.57.49-1.031 1.093-1.031s1.093.46 1.093 1.03c0 .57-.49 1.031-1.093 1.031m0 3.6c-.605 0-1.093-.46-1.093-1.03 0-.57.488-1.031 1.093-1.031s1.093.46 1.093 1.03c0 .57-.488 1.031-1.093 1.031m-3.818-7.2c-.603 0-1.093-.46-1.093-1.03 0-.57.49-1.031 1.093-1.031s1.093.46 1.093 1.03c0 .57-.49 1.031-1.093 1.031m0 3.62c-.615 0-1.114-.471-1.114-1.05 0-.58.5-1.05 1.114-1.05.615 0 1.113.47 1.113 1.05 0 .579-.498 1.05-1.113 1.05m0 3.578c-.602 0-1.09-.46-1.09-1.029 0-.568.488-1.028 1.09-1.028.602 0 1.09.46 1.09 1.028 0 .57-.488 1.029-1.09 1.029M16.46 3H7.54C6.138 3 5 4.073 5 5.395V21h5.09v-4.8h3.82V21H19V5.395C19 4.073 17.862 3 16.46 3" fill-rule="evenodd"></path>
                                        </svg></span></span>
                                <h3 class="_63-j _1rimQ" data-qa="heading">Address</h3>
                            </div>
                            <div class="_1svtt _3fbIQ _3ygPZ" data-qa="restaurant-info-modal-info-colophon-element">
                                <div class="_1Xwa9" data-qa="restaurant-info-modal-info-colophon-element-element">
                                    <div class="sshQD">
                                        <div class="GcAXtd">
                                            <div class="box-info">
                                              <div class="head myTw">
                            <h3><i class="las la-map-marker"></i>Address</h3>
                            <div class="info">
                                <p><strong>Rue de gerlache 7</strong></p>
                                <p>+32 496 60 56 96</p>
                            </div>
                        </div>
                                          </div>
                                        </div>
                                    </div>
                                </div><span class="_386So"></span>
                            </div>
                        </div>
                    </div> 
                    </div>

                    <script>
                    function openCity(evt, cityName) {
                      var i, tabcontent, tablinks;
                      tabcontent = document.getElementsByClassName("tabcontent");
                      for (i = 0; i < tabcontent.length; i++) {
                        tabcontent[i].style.display = "none";
                      }
                      tablinks = document.getElementsByClassName("tablinks");
                      for (i = 0; i < tablinks.length; i++) {
                        tablinks[i].className = tablinks[i].className.replace(" active", "");
                      }
                      document.getElementById(cityName).style.display = "block";
                      evt.currentTarget.className += " active";
                    }

                    // Get the element with id="defaultOpen" and click on it
                    document.getElementById("defaultOpen").click();
                    </script>
            </div>
        </div>
    </div>
</div>
</div>
<style>
._3jAQ5 {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    background-color: #0a3847;
    color: #fff;
    flex-direction: column;
    padding: 1.5rem 1rem 1rem;
    width: 100%;
}

._3jAQ5, .Lvcwx {
    display: -webkit-box;
    display: flex;
}
._1R5Qs {
    margin-bottom: 1rem;
}

._3F6Pu {
    font-size: 1.25rem;
    line-height: 1.2;
    color: #fff;
}

.Lvcwx {
    -webkit-box-align: center;
    align-items: center;
}



._1WYe1 {
    margin-right: 1rem;
    text-align: center;
    width: 3.5rem;
}
._3PCkb {
    font-size: 2rem;
    line-height: 1.25;
}

._3a4Ib {
    border-left: 1px solid #fff;
    font-size: .75rem;
    padding-left: 1rem;
}

.A1fKA {
    display: -webkit-inline-box;
    display: inline-flex;
}
.eJbEG {
    position: relative;
}

.tfmj7 {
    color: #d7d7d7;
    display: -webkit-box;
    display: flex;
    pointer-events: none;
    -webkit-transition: color .15s cubic-bezier(0,0,.3,1) 0s;
    transition: color .15s cubic-bezier(0,0,.3,1) 0s;
}

._3O1D5, .SrXWL {
    color: #fb6100;
}



._3kSpD img, ._3kSpD svg {
    fill: currentColor;
    height: 1em;
    vertical-align: text-top;
    width: 1em;
}

._3ijJf img, ._3ijJf svg {
    height: 1.5rem;
    width: 1.5rem;
}

._1Ckfx {
    margin-top: 0.25rem;
    font-size: 12px;
    font-weight: 400;
}



._1svtt, ._1Xwa9 {
    position: relative;
    padding: 15px;
    margin: 15px;
    background: #f8f5f2;
}
._1svtt {
    background: #fff;
    border-radius: 2px;
    font-size: .875rem;
}

._3fbIQ {
    background: #f8f5f2;
}

.xFlNy {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -webkit-box-align: center;
    align-content: flex-start;
    align-items: center;
    display: -webkit-box;
    display: flex;
    flex-direction: row;
    height: 100%;
}

._3dZsV {
    -webkit-box-pack: justify;
    justify-content: space-between;
}

.UDtqe {
    -webkit-box-align: center;
    align-items: center;
}
._3JIyP, ._15fAd {
    -webkit-box-orient: horizontal;
}
._3JIyP {
    -webkit-box-direction: normal;
    flex-direction: row;
}
.fn4w0 {
    -webkit-box-pack: justify;
    justify-content: space-between;
}

._1rimQ {
    font-size: 1rem;
    line-height: 1.25;
    color: #fb6100;
    font-weight: 700;
    margin-bottom: 12px;
}

.Rfk_i {
    color: #666;
    font-size: 14px;
}

._3ilF9 {
    font-size: .75rem;
    margin-bottom: 12px;
}

._3QP0ZU {
    display: -webkit-box;
    display: flex;
    -webkit-box-align: center;
    align-items: center;
    margin-bottom: 1rem;
    padding-left: 15px;
    padding-right: 15px;
    color: #0a3847;
}

._28N136 {
    display: -webkit-inline-box;
    display: inline-flex;
    margin-right: 1rem;
}

._1P1GPH {
    margin: 0px 0px 1rem 0px;
}

@media screen and (min-width: 721px){
    ._1R5Qs {
    margin-bottom: 1.5rem;
}
._1WYe1 {
    width: 5rem;
}
}


.fn4w0 b {
    color: #666;
}

.CSvDb .Rfk_i {
    font-weight: 400;
}

._28N136 + h3._63-j._1rimQ {
    margin-bottom: 0;
}

._3QP0ZU + ._1svtt, ._3QP0ZU + ._1svtt ._1Xwa9 {padding-left: 0;padding-right: 0;}

._3QP0ZU + ._1svtt ._1Xwa9 {
    padding: 0;
    margin-top: 0;
    margin-bottom: 0;
}

._3hkku8 ._1svtt, ._3hkku8 ._1Xwa9 {
    padding: 0;
    margin: 0;
}

._3hkku8 ._1Xwa9 {
    padding: 1rem;
    background: #fff;
}

._3QP0ZU ._63-j {
    color: #0a3847;
    font-size: 16px;
}

._2xv_P {
    display: -webkit-box;
    display: flex;
    flex-wrap: wrap;
    margin: 0 -0.25rem -0.5rem;
}

.Avhqp {
    background-color: #fff;
    /* background-color: var(--c-bg); */
    border: 1px solid #d7d7d7;
    /* border: var(--border-regular-light); */
    border-radius: 2px;
    /* border-radius: var(--border-radius-small); */
    height: 2.5rem;
    /* height: calc(var(--space-m)*5); */
    margin: 0 0.25rem 0.5rem;
    /* margin: 0 var(--space-s) var(--space-m); */
    padding: calc(0.5rem - 1px) calc(1.5rem - 1px);
    /* padding: calc(var(--space-m) - var(--border-width-regular)) calc(var(--space-l) - var(--border-width-regular)); */
    width: 4.5rem;
    /* width: calc(var(--space-m)*9); */
}
/*
  #infoModal .modal-content {
    max-height: 600px;
    overflow: hidden;
}
  */
  #info, #review{
    height: 400px;
  overflow-y: auto;
}
@media (max-width: 992px){

div#infoModal .modal-dialog {
    margin: auto;
    max-width: 100%;
}

div#infoModal .modal-content {
    height: 100%;
    max-width: 100%;
    max-height: none;
    width: 100%;
    display: block;
    top:-10px;
}
#info, #review{
    height: calc(100vh - 132px);
  overflow-y: auto;
}
}
  
div#page-section-5ee05985563b1766e4e38f2c .row {
    margin-left: 0;
    margin-right: 0;
}

</style>
<script>
  let minus = document.getElementById("minus")
  let plus = document.getElementById("plus")
  let quantity = document.getElementById("quantity")
  
  minus.addEventListener("click",function(){
    let setValue = Number(quantity.value) - 1
    if (setValue < 1) {
      return
    }
    quantity.value = setValue
  })
  
  plus.addEventListener("click",function(){
    //if(quantity.value > 10){
    //  return
    //}
    //quantity.value = quantity.value + 1
    let setValue = Number(quantity.value) + 1
    if (setValue > 9) {
      return
    }
    quantity.value = setValue
    //console.log(setValue)
    //console.log(quantity.value)
  })
  
  //let browserHeight = window.innerHeight
  //document.getElementById("info").style.maxHeight =`${browserHeight - 132}px`;
  //document.getElementById("review").style.maxHeight =`${browserHeight -132}px`;
</script>

@endisset


