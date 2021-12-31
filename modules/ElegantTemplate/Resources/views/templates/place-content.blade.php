<style>
    .catal {
        margin-left: 0.8%;
    }

    .myCent {
        text-align: center;
    }

    .myCate {
        background: white;
        color: black;
    }

    .myCate:hover {
        background: purple;
        color: white;
        text-decoration: none !important;
    }
  .myCat{
    display:flex;
    justify-content: flex-start;
    height: 100%;
    
  }
  .myTxtw{
    color:white !important;
    text-align:center !important;
  }
  
  .myBack{
    background: #fffdf0 !important;
  }
  .myCoul{
    color : #102c91 !important;
  }
  

    @media only screen and (max-width: 600px) {

        .catal {
            margin-left: 3.5% !important;
            display: flex !important;
            justify-content: center !important;
            align-items: center;
        }

        .myCent {
            text-align: center;
            margin-left: 45%;
        }

        .myCate {
            margin-top: 5%;
            margin-bottom: 5%;
        }
      .muf{
   	 	margin-top : 2%;
        margin-bottom : 1%;
  	}
    }
  
    .myProd {
        width: 100% !important;
    }
</style>

<!-- section-place-content-menu -->
<section class='section section-place-content-menu  muf  '>

    <div class='packer'>

        <div class="package ">
            <div class="text-center">
                
                <div>
        
   			@if(!$restorant->categories->isEmpty())
        	<nav class="tabbable sticky" style="top: {{ config('app.isqrsaas') ? 64:88 }}px;">
                <ul class="nav nav-pills bg-white mb-2">
                    <!-- <li class="nav-item  ">
                        <a class="nav-link  mb-sm-3 mb-md-0 active" data-toggle="tab" role="tab" href="">{{ __('All categories') }}</a>
                    </li> -->
                    @foreach ( $restorant->categories as $key => $category)
                        
                            <li class="nav-item ">
                                <a class="btn  nav-link mb-sm-3 mb-md-0"   
                                   href="#subsection-<?php echo $category->id; ?>">{{ $category->name }}</a>
                            </li>
                        
                    @endforeach
                </ul>

                
            </nav>

            
            @endif
                </div>
              
            </div>

	
        </div>
    </div>
</section>
<!-- section-place-content -->
<section class="section section-place-content">
    <div class="container-fluid">
        <div id="theCartBottomButton" onClick="openNav()" class=" close-mobile-menu circle callOutShoppingButtonBottom icon icon-shape bg-gradient-red text-white rounded-circle shadow mb-4" style=" background: linear-gradient(87deg, #ffffff 0, #ffffff 100%) !important;">
            <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_atunf5kv.json" background="transparent" speed="0.5" style="width: 50px; height:50px;" loop autoplay></lottie-player>
        </div>

        <div class='row'>
            @if(!$restorant->categories->isEmpty())
            @foreach ( $restorant->categories as $key => $category)
            
            <div id='subsection-<?php echo $category->id; ?>' class='box-info'>
                    
                <div class='head align-center myDeco' style="background:none;border-radius:none;">
                
                    @if($category->logom)

                        <img id="previewImg" class="img-fluid rounded mx-auto" src="<?php echo $category->logom;?>" alt="..." style="width:100%;height:300px" /> 

                    @endif
            
                </div>
                <div class='head align-center myDeco'>
                    <h2 class="myTxtw"><b><?php echo $category->name; ?></b></h3>
                </div>


                <!-- PRODUCT CARD START -->
                <div class="how-section1">

                    @foreach ($category->aitems as $item)
                            <div class="row">
                       
                                        
                                <div class="col-md-6">
                                    <img src="{{ $item->logom }}" class="img-fluid" alt="...">         
                                </div>        
                                <div class="col-md-6">
                                    <h4 class="card-title myCoul">{{ $item->name }}</h4>
                                </div>
                            
                            </div>
                                <div class="container demo">
                                    <div class="panel-group" id="accordion_<?php echo $item->id; ?>" role="tablist" aria-multiselectable="true">
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingOne">
                                                <h4 class="panel-title">
                                                    <a role="button" class="collapse_plus" data-id="<?php echo $item->id;?>" data-toggle="collapse" data-parent="#accordion_<?php echo $item->id; ?>" href="#collapse_<?php echo $item->id; ?>" aria-expanded="true" aria-controls="collapse_<?php echo $item->id; ?>">
                                                        <i class="more-less las la-plus"></i>
                                                        <?php echo $item->name; ?>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapse_<?php echo $item->id; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_<?php echo $item->id; ?>" style="border: 1px solid #F5F5F5;padding: 15px;">
                                                <div class="panel-body">
                                                    <p class="card-text myCoul">{{ $item->short_description}} </p>
                                                    <!-- <a href='javascript:;' onClick="setCurrentItem({{ $item->id }})" class='item-offer-horizontal' style="display:inline">
                                                        <div class="quantity-btn">
                                                            <div id="addToCart1">
                                                                <button class="btn btn-primary" v-on:click='addToCartAct'> <h3>
                                                                <i style="color : white;" class="las la-shopping-bag"></i>
                                                                </h3></button>
                                                            </div>
                                                        </div>
                                                    </a> -->
                                                    <div class="card shadow border-0">
                                                        <div class="card-body px-lg-5 py-lg-5">
                                                            <div class="row">
                                                                <div class="col-sm col-md col-lg text-center" id="modalImgPart">
                                                                    <img id="modalImg" src="{{ $item->logom }}" width="295px" height="200px">
                                                                </div>
                                                                <div class="col-sm col-md col-lg col-lg" id="modalItemDetailsPart">
                                                                    <input id="modalID" type="hidden"></input>
                                                                    <span id="modalPrice" class="new-price"></span>
                                                                    <p id="modalDescription"></p>
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
                                                                            <br />
                                                                            <label class="form-control-label" for="quantity">{{ __('Quantity') }}</label>
                                                                            <!--<input type="number" name="quantity" id="quantity" class="form-control form-control-alternative" placeholder="1" value="1" required autofocus>-->
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
                                                                        <div class="quantity-btn">
                                                                            <div id="addToCart1">
                                                                                <button class="btn btn-primary" v-on:click='addToCartAct'>{{ __('Add To Cart') }}</button>
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
                                </div>
                        @endforeach
                        
                </div>
               



                <div class='row mt-3' style="display:none;">
                    @foreach ($category->aitems as $item)
                    <div class="col-md-3" style="width: 18rem;">
                        <img src="{{ $item->logom }}" class="img-fluid" alt="...">
                        <div class="card-body myBack ">
                            <h5 class="card-title myCoul">{{ $item->name }}</h5>
                            <p class="card-text myCoul">{{ $item->short_description}}</p>
                            <!-- class="extras" -->
                           <div class="price-btn-wrap"> <div class='price myCoul'>@money($item->price, config('settings.cashier_currency'),config('settings.do_convertion'))</div>
                            <a href='javascript:;' onClick="setCurrentItem({{ $item->id }})" class='item-offer-horizontal'>

                                <div class="quantity-btn">
                                    <div id="addToCart1">
                                        <button class="btn btn-primary" v-on:click='addToCartAct'> <h3>
                                          <i style="color : white;" class="las la-shopping-bag"></i>
                                          </h3></button>
                                    </div>
                                </div>
                            </a>
                          </div>

                            <div class="allergens">
                                @foreach ($item->allergens as $allergen)
                                <div class='allergen' data-toggle="tooltip" data-placement="bottom" title="{{$allergen->title}}">
                                    <img src="{{$allergen->image_link}}" />
                                </div>
                                @endforeach

                            </div>

                        </div>
                    </div>
                  

                    @endforeach
                </div>

                <!-- PRODUCT CARD END -->


            </div>

            @endforeach
            @endif





        </div>

        <div class="row show_info">
            <div id='place-info' class='col-md-12'>
                <div class='full-width'>
                    <div class='box-info'>
                        <div class='head myTw'>
                            <h3><i class="las la-map-marker"></i>{{ __('Address') }}</h3>
                            <div class='info'>
                                <p><strong>{{ $restorant->address }}</strong></p>
                                <p>{{ $restorant->phone }}</p>
                            </div>
                        </div>
                        <div class='content'>
                            <div class='schedule-map'>
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
                                <div class="map">
                                    <iframe src="https://maps.google.com/maps?q={{ $restorant->lat }},{{ $restorant->lng }}&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class='holder-right'>
                <!-- New cart -->
                @include('elegant-template::templates.side_cart',['id'=>'cartList','idtotal'=>'totalPrices'])
                <!-- End New cart -->
            </div>
        </div>

    </div>
</section>
<section class='section section-place-content' style="display: none;">
    <div class='packer'>

        <div class='packer'>
            <div id="theCartBottomButton" onClick="openNav()" class=" close-mobile-menu circle callOutShoppingButtonBottom icon icon-shape bg-gradient-red text-white rounded-circle shadow mb-4" style=" background: linear-gradient(87deg, #ffffff 0, #ffffff 100%) !important;">
                <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_atunf5kv.json" background="transparent" speed="0.5" style="width: 50px; height:50px;" loop autoplay></lottie-player>
            </div>
            <div class='content'>

                <!-- tab menu -->
                <!-- <div id='place-menu' class='holder-left content-tab expanded'>
                    <div class='content-left'>

                        <div class='categories'>
                            <div class='categories_title'>{{__('Categories')}}</div>
                            <nav>




                            </nav>



                            @if (count($allergens)>0)

                            <br /><br />
                            <div class='categories_title'>{{__('Allergens')}}</div>
                            <nav>

                                @foreach ( $allergens as $key => $allergen)

                                <div class='item'>
                                    <div class='allergen'>
                                        <img src="{{$allergen->image_link}}" />
                                    </div>
                                    <?php echo " " . $allergen->title ?>
                                </div>

                                @endforeach


                            </nav>

                            @endif

                        </div> 
                    </div>-->
                <!-- <div class='content-center'> -->

            </div>

            <!-- tab info -->
            <div id='place-info11' class=' content-tab'>
                <div class='full-width'>
                    <div class='box-info'>
                        <div class='head'>
                            <h3 ><i class="las la-map-marker"></i>{{ __('Address') }}</h3>
                            <div class='info'>
                                <p ><strong>{{ $restorant->address }}</strong></p>
                                <p >{{ $restorant->phone }}</p>
                            </div>
                        </div>
                        <div class='content'>
                            <div class='schedule-map'>
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
                                <div class="map">
                                    <iframe src="https://maps.google.com/maps?q={{ $restorant->lat }},{{ $restorant->lng }}&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class='holder-right'>
                <!-- New cart -->
                @include('elegant-template::templates.side_cart',['id'=>'cartList','idtotal'=>'totalPrices'])
                <!-- End New cart -->
            </div>
        </div>
    </div>
    <!-- </div> -->




</section>