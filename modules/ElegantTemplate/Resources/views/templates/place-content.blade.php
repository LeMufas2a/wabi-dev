<?php 
    // $color = "#641612"; 
    //dd($restorant);
?>

<style>

.flatpickr-calendar{
    z-index:111111 !important
}
.flatpickr-calendar.open{
    z-index:111111 !important
}
    .box-info .card-body.myBack div#addToCart1>.btn {
        position: absolute;
        bottom: 4px;
        right: 4px;
        width: 46.2px;
        border-radius: 2px 2px 2px 2px !important;
    }

    /* Service Items styles goes here*/
    .box-info .card-body.myBack div#addToCart2>.btn {
        position: absolute;
        bottom: 4px;
        right: 4px;
        width: 46.2px;
        border-radius: 2px 2px 2px 2px !important;
    }


  	.row.show_info {
        display: none;
    }
  	.schedule .items > li {
        flex-direction: row;
        padding-top: 0;
        padding-bottom: 0;
        border-top: none!important;
        font-size: 14px;
    }
  	.float-img {
        position: absolute;
        left: -8px;
        z-index: 9999;
        width: 30px;
        border-radius: 50%;
        overflow: hidden;
    }

    nav.tabbable {
        max-width: 1080px;
        padding-left: 30px;
    }
    /* Services Item styles for navs */
    nav.tabbable_services {
        max-width: 1080px;
        padding-left: 30px;
    }
    .catal {
        margin-left: 0.8%;
    }

    .myCent {
        text-align: center;
    }
	.myCentre{
      display:flex !important;
    	justify-content:center !important;
    align-content:center !important;
      flex-direction:column !important;
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
  .leM{
    color: #240c52 !important;
  }


  .myCo{
    height : 58px !important;
    border: none !important;
  }
  .myTop{
    margin-top : 30px ;
  }
  .myTake{
    width : 150px;
    background : #f8f5f2;
  }
  
  .myTxtw{
    color:#240c52 !important;
    margin-right : 15px;
  }
  
  .myBack{
    background: #ffffff !important;
  }
  .myCoul{
    
    @if($heading_color)
        color:<?php echo $heading_color; ?> !important;
    @else
        color : #240c52 !important;
    @endif
  }
  .myImCat{
    width : 100% !important;
    border-radius : 2px 2px 0px 0px;
  }
  .muf{
    background : #f8f5f2 !important;
  }
  

    @media only screen and (max-width: 600px) {

        .catal {
            margin-left: 3.5% !important;
            display: flex !important;
            justify-content: center !important;
            align-items: center;
        }
      .  .myTop{
    margin-top : 30px !important;
  }
	 #mobile-menu > .close-mobile-menu{
       top: 4px;
       
     }
      	.myRes{
    		width : 100%;
          height: 250px !important;
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
       .myDeco{
    		margin : 0px 16px;
  		}
       .myImCat{
    		width : 100% !important;
       		 height: 100% ;
  }
      .myTxtw{
    		margin-right : 0px;
        margin-left: 3px;
  }
      .myTake{
		width : 150px !important;
      }
      .myBg{
    	background : white !important; 
   		 width: 100% !important;
   		 height : 75px;
       	 position : fixed; 
        bottom : 0px; 
        right: 0px;
        z-index : 1000 !important;
  }
      .myIco{
        position : fixed;
        bottom: 26px;
        left: 50px;
        z-index : 1000;
        font-size : 27px;
      }
      .related-mobile-menu{
	 		 margin-bottom: 19px; 
    }
  
    }
  
    .myProd {
        width: 100% !important;
    }

    .show_info{
        height:330px !important;
    }
    .products_content{
        display: block;
    }
    .services_content{
        display: none;
    }
    .flatpickr-months .flatpickr-month{
        height: 66px !important;
    }
    .flatpickr-calendar.open, .flatpickr-calendar.inline{
        width: 100% !important;
    }
</style>

<!-- Dynamic pills  -->
<section class='section section-place-content-menu section-services'>    
    <div class="container">
        <ul class="nav nav-pills">
        <li class="active_service"><a data-toggle="pill" href="#home" onclick="showProducts(this)">Products</a></li>
        <li><a data-toggle="pill" href="#menu1" onclick="showServices(this)">Services</a></li>
        </ul>
        
    </div>
</section>
<!-- Dynamic pills -->


<div class="products_content">
    <!-- section-place-content-menu -->
    <section class='section section-place-content-menu  muf  '>
        

        <div class='packer'>
            <div class="float-img">
            <img src="{{ asset('images/img-sl.jpg') }}" alt="flt-img"/>
        </div>
            <div class="package ">
                <div class="text-center">
                        
                    <div>
                
                @if(!$restorant->categories->isEmpty())
                <nav class="tabbable sticky" style="top: {{ config('app.isqrsaas') ? 64:88 }}px;">
                    <!--<ul class="nav nav-pills bg-white mb-2">
                        <li class="nav-item  ">
                            <a class="nav-link  mb-sm-3 mb-md-0 active" data-toggle="tab" role="tab" href="">{{ __('All categories') }}</a>
                        </li> -->
                    
                    <div class="swiper mySwiper" >
                        <div class="swiper-wrapper" id="top-menu">
                            @foreach ( $restorant->categories as $key => $category)
                                <div class="nav-item swiper-slide" >
                                    <a class="btn  nav-link mb-sm-3 mb-md-0 leM" href="#subsection-<?php echo $category->id; ?>">
                                        {{ $category->name }}
                                    </a>
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
        
                    </div>
                            
                        
                    <!--</ul>-->

                    
                </nav>

                
                @endif
                    </div>
                
                </div>

        
            </div>
        </div>
    </section>
    <!-- section-place-content -->
    <section class="section section-place-content" >
        <div class="container-fluid">
        
                    <div class="myBg thecartbtnClass third-child" id="theCartBottomButtonDiv" style="display:none;">

                        <input type="hidden" name="total_in_cart" id="total_in_cart" value="0" />
                        <div id="theCartBottomButton" onClick="openNav()" class=" close-mobile-menu circle callOutShoppingButtonBottom icon icon-shape bg-gradient-red text-white rounded-circle shadow mb-2" style=" background: linear-gradient(87deg, #ffffff 0, #ffffff 100%) !important;">
                            
                                <button class="btn btn-primary custom--cart myCo myUbuntu" style="background :  #240c52">
                                    Checkout
                                </button>
                            
                            <i style="color : white;" class="las la-shopping-bag myIco"></i>
                                                        
                        </div>
                    </div>

                    <div class='row'>
                        @if(!$restorant->categories->isEmpty())
                        @foreach ( $restorant->categories as $key => $category)
                        
                        <div id='subsection-<?php echo $category->id; ?>' class='box-info'>
                                
                            <div class=' align-center myDeco myTop myUbuntu' style="background:none;border-radius:none;">
                            
                                @if($category->logom)

                                    <img id="previewImg" class="img-fluid  myImCat" src="<?php echo $category->logom;?>" alt="..." /> 

                                @endif
                            </div>
                            <div class='head  myDeco'>
                                <h2 class="myTxtw myUbuntu3"><?php echo $category->name; ?></h2>
                            </div>


                            <!-- PRODUCT CARD START -->

                            <div class='row mt-3'>
                                @foreach ($category->aitems as $item)
                                <div class="col-md-3" style="width: 18rem;">
                                    <img src="{{ $item->logom }}" class="img-fluid myRes" alt="...">
                                    <div class="card-body myBack ">
                                        <h5 class="card-title myCoul">{{ $item->name }}</h5>
                                        <p class="card-text myCoul myUbuntu3">{{ $item->short_description}}</p>
                                        <!-- class="extras" -->
                                    <div class="price-btn-wrap"> <div class='price myCoul'>@money($item->price, config('settings.cashier_currency'),config('settings.do_convertion'))</div>
                                        <a href='javascript:;' onClick="setCurrentItem({{ $item->id }})" class='item-offer-horizontal'>

                                            <div class="quantity-btn">
                                                <div id="addToCart1">
                                                    <button class="btn btn-primary" style="background : #240c52;" v-on:click='addToCartAct'> <h3>
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
                    </div>

        </div>
    </section>
</div>

<div class="services_content">
    <section class='section section-place-content-menu  muf  '>
        {{-- <p>Manue Items</p> --}}


        <div class='packer services_packer'>
            <div class="float-img">
            <img src="{{ asset('images/img-sl.jpg') }}" alt="flt-img"/>
        </div>

        <div class="package">
            <div class="text-center">   
                <div>
                    
                    @if(!$service_categories->isEmpty())
                    
                    <nav class="tabbable_services sticky" style="top: {{ config('app.isqrsaas') ? 64:88 }}px;">
            
                        <div class="swiper_services mySwiper_services" >
                            <div class="swiper-wrapper" id="top-menu">
                                @foreach ( $service_categories as $key => $category)
                                <div class="nav-item-services swiper-slide-services" >
                                                        <a class="btn  nav-link-services mb-sm-3 mb-md-0 leM"   
                                                        href="#subsection-<?php echo $category->id; ?>">{{ $category->service_name }}</a>
                                                    </div>
                                @endforeach
                            </div>
                            <div class="swiper-button-next-services"></div>
                            <div class="swiper-button-prev-services"></div>
            
                        </div>
                                
                            
                        <!--</ul>-->
    
                        
                    </nav>

                    @endif
                </div>
            </div>
        </div>
    </section>
     <!-- Service Item Area -->
    <section class="section section-place-content" >
        <div class="container-fluid">


            <div class="myBg thecartbtnClass third-child" id="theCartBottomButtonDiv" style="display:none;">

                <input type="hidden" name="total_in_cart_services" id="total_in_cart_services" value="0" />
                <div id="theCartBottomButton" onClick="openNav()" class=" close-mobile-menu circle callOutShoppingButtonBottom icon icon-shape bg-gradient-red text-white rounded-circle shadow mb-2" style=" background: linear-gradient(87deg, #ffffff 0, #ffffff 100%) !important;">
                    
                        <button class="btn btn-primary custom--cart myCo myUbuntu" style="background :  #240c52">
                            Checkout
                        </button>
                    
                    <i style="color : white;" class="las la-shopping-bag myIco"></i>
                                                
                </div>
            </div>

            <div class='row'>
                @if(!$service_categories->isEmpty())
                @foreach ( $service_categories as $key => $category)
                
                <div id='subsection-<?php echo $category->id; ?>' class='box-info'>
                        
                    <div class=' align-center myDeco myTop myUbuntu' style="background:none;border-radius:none;">
                        
                        @if($category->image)

                            <img id="previewImg" class="img-fluid  myImCat" src="/uploads/service_categories/<?php echo $category->image;?>_large.jpg" alt="..." /> 

                        @endif
                    </div>
                    <div class='head  myDeco'>
                        <h2 class="myTxtw myUbuntu3"><?php echo $category->categoryName; ?></h2>
                    </div>


                    <!-- PRODUCT CARD START -->
                    
                    <div class='row mt-3'>
                        {{-- @foreach ($category->aitems as $item) --}}
                        <div class="col-md-3" style="width: 18rem;">
                            <img src="/uploads/service_items/<?php echo $category->service_image.'_medium.jpg';?>" class="img-fluid myRes" alt="...">
                            <div class="card-body myBack ">
                                <h5 class="card-title myCoul">{{ $category->service_name }} - Service Hours(Weekly)</h5>
                                    <p class="card-text myCoul myUbuntu3" id="service_hours">
                                        {{ $category->service_description }}
                                    </p>
                                {{-- @foreach($category->service_hours as $hour)
                                    @if($category->id == $hour['service_id'])
                                        <p class="card-text myCoul myUbuntu3" id="service_hours">
                                            <span>From:</span>{{ $hour['service_from_time'] }} - <span>To:</span>{{ $hour['service_to_time'] }}
                                        </p>
                                    @endif
                                @endforeach --}}
                            
                                <!-- class="extras" -->
                            <div class="price-btn-wrap"> <div class='price myCoul'>@money($category->service_price, config('settings.cashier_currency'),config('settings.do_convertion'))</div>
                                <a href='javascript:;' onClick="setCurrentServiceItem({{ $category->id }})" class='item-offer-horizontal'>

                                    <div class="quantity-btn">
                                        <div id="addToCart2">
                                            <button class="btn btn-primary" style="background : #240c52;" v-on:click='addToCartActServiceItem'> <h3>
                                            <i style="color : white;" class="las la-shopping-bag"></i>
                                            </h3></button>
                                        </div>
                                    </div>
                                </a>
                            </div>

                                <div class="allergens">
                                    {{-- @foreach ($item->allergens as $allergen)
                                    <div class='allergen' data-toggle="tooltip" data-placement="bottom" title="{{$allergen->title}}">
                                        <img src="{{$allergen->image_link}}" />
                                    </div>
                                    @endforeach --}}

                                </div>

                            </div>
                        </div>
                    

                        {{-- @endforeach --}}
                    </div>

                    <!-- PRODUCT CARD END -->


                </div>

                @endforeach
                @endif





            </div>

        </div>
    </section>
</div>

</div>
    <div class='holder-right'>
                <!-- New cart -->
                @include('elegant-template::templates.side_cart',['id'=>'cartList','idtotal'=>'totalPrices'])
                <!-- End New cart -->
    </div>
</div>



        <div class="footeR" id="footer-pages" data-qa="footer">
            <div class="content">  
                <div class="sqs-layout sqs-grid-12 columns-12" data-type="page-section" id="page-section-5ee05985563b1766e4e38f2c">
                    <div class="row sqs-row">
                        <div class="col sqs-col-12 span-12">
                            <div class="sqs-block html-block sqs-block-html" data-block-type="2" id="block-1a0d9d71d94cde550247">
                                <div class="sqs-block-content">
                                    <h3>
                                    <?php
                                        
                                        // $str = 'shop,eshop,restaurant';

                                        // $shop_name = explode(",",$str);
                                        // $shop = $shop_name[0];
                                        // $eshop = $shop_name[1];
                                        // $restaurant = $shop_name[2];
                                        // dd($shop_name);
                                        // print_r(URL::current());
                                        // if(explode($shop,URL::current())){
                                        //     dd("sho");
                                        // }

                                        // if(explode($eshop,URL::current())){
                                        //     dd("esh");
                                        // }

                                        // if(explode($restaurant,URL::current())){
                                        //     dd("res");
                                        // }
                                        // $shop_name = explode("shop",URL::current());

                                        // $shop_name = str_contains(URL::current(), $shop_name);
                                        
                                        // if($_SERVER['HTTP_HOST'] == 'app.wabizzmarket.com'){
                                        //     $shop_name = $shop_name[2];
                                        // }
                                        // else{
                                        //     $shop_name = $shop_name[1];
                                        // } 
                                        // $shop_name = str_replace("/"," ",$shop_name);
                                    ?>
                                    <p style="text-align:center;white-space:pre-wrap;" class="sqsrte-small">{{ strtoupper($restorant->name)  }}</p>
                                    </h3>
                                    <?php foreach($pages_links as $page){ ?>
                                    <p style="text-align:center;white-space:pre-wrap;" class="sqsrte-small"><a href="{{ url('blog/'.$page) }}" target="_blank"><?php echo str_replace("-"," ",$page);?></a></p>
                                    <!-- <p style="text-align:center;white-space:pre-wrap;" class=""><a href="/nos-services">Nos services</a></p>
                                    <p style="text-align:center;white-space:pre-wrap;" class="sqsrte-small"><a href="/contact/garde-malade/garde-enfants/belgique">Contactez-nous</a></p>
                                    <p style="text-align:center;white-space:pre-wrap;" class="sqsrte-small"><a href="/story/garde-malade/garde-enfants/belgique">Qui sommes-nous</a></p>
                                    <p style="text-align:center;white-space:pre-wrap;" class=""><a href="/postuler-chez-nous/garde-malade/garde-enfants/belgique/aux-petits-soins">Postuler chez nous</a></p>
                                    <p style="text-align:center;white-space:pre-wrap;" class=""><a href="/rendez-vous/garde-malade/garde-enfants/aux-petits-soins">Prendre rendez-vous</a></p>
                                    <p style="text-align:center;white-space:pre-wrap;" class="">Mentions légales </p>
                                    <p style="text-align:center;white-space:pre-wrap;" class=""><a href="/commencer">Conditions générales </a></p>
                                    <p style="text-align:center;white-space:pre-wrap;" class=""><a href="/commencer">Politique de confidentialité</a> </p> -->
                                <?php } ?>
                                </div>
                            </div>
                            <div class="row sqs-row">
                                <div class="col sqs-col-4 span-4">
                                    <div class="sqs-block spacer-block sqs-block-spacer sized vsize-1" data-block-type="21" id="block-yui_3_17_2_1_1592038889779_12911">
                                        <div class="sqs-block-content">&nbsp;

                                        </div>
                                    </div>
                                </div>
                                <div class="col sqs-col-3 span-3">
                                    <div class="sqs-block spacer-block sqs-block-spacer sized vsize-1" data-block-type="21" id="block-yui_3_17_2_1_1592039073944_13369">
                                        <div class="sqs-block-content">&nbsp;

                                        </div>
                                    </div>
                                </div>
                                <div class="col sqs-col-5 span-5">
                                    <div class="row sqs-row">
                                        <div class="col sqs-col-2 span-2">
                                            <div class="sqs-block spacer-block sqs-block-spacer sized vsize-1" data-block-type="21" id="block-yui_3_17_2_1_1592038889779_14199">
                                                <div class="sqs-block-content">&nbsp;

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col sqs-col-3 span-3">
                                            <div class="sqs-block spacer-block sqs-block-spacer sized vsize-1" data-block-type="21" id="block-yui_3_17_2_1_1592039073944_23516">
                                                <div class="sqs-block-content">&nbsp;

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sqs-block html-block sqs-block-html" data-block-type="2" id="block-yui_3_17_2_1_1592038889779_11104">
                                <div class="sqs-block-content"> 
                                    <p style="text-align:center;white-space:pre-wrap;" class="sqsrte-small">Tous droits réservés. Wabizz©</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        

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
            <div id='place-info11' class='content-tab'>
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

        </div>
    </div>
    <!-- </div> -->




</section>

<style>
  .row.show_info {
    height: auto!important;
}
  
.footeR {
    background: #240c52;
    text-align: center;
    padding: 30px 0;
    color: yellow;
}

.footeR h3 {
    color: #fff;
  font-weight: bold;
}
  
  .footeR a{
    color: yellow;
    text-decoration: underline;
  }
  
.footeR h3{
  margin-bottom: 16px;
}
  
  
#infoModal .box-info > .head > h3 {
    height: 50px;
    background: #ffbb00;
    margin: 0;
    line-height: 2.8;
}

#infoModal .box-info > .head {
    height: auto!important;
    background: #f8f5f2;
    padding: 0;
}

#infoModal .box-info > .head > h3,#infoModal .box-info > .head > h3+ .info {
    padding-left: 8px;
}
.full-width .box-info > .head {
    display: none;
}
div#infoModal {
    overflow: hidden!important;
  background: rgba(0,0,0,.5);
}
</style>
<!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


    <!-- Initialize Swiper -->
    
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script
      src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"
      integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>

    <!-- Flatpickr datepicker -->
{{-- <script src="{{ asset('vendor') }}/flatpickr/flatpickr.js"></script> --}}




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

    function showProducts(event){
        $(".products_content").css("display","block");
        $('.nav-pills li.active_service').removeClass('active_service');
        $(event).parent().addClass("active_service");
        
        $(".services_content").hide();
    }
    function showServices(event){
        $(".services_content").show();
        $('.nav-pills li.active_service').removeClass('active_service');
        $(event).parent().addClass("active_service");
        
        $(".products_content").hide();    
        
    }

// Swiper JS Code
    var swiper = new Swiper(".mySwiper", {
        // modules: [ Pagination, Scrollbar],
        slidesPerView: 4,
        loop: true,
        mousewheel: {
            invert: true,
        },
        navigation: {
            prevEl: ".swiper-button-prev",
            nextEl: ".swiper-button-next",
          
        },
        breakpoints: {
          240: {
            slidesPerView: 4,
          },
          768: {
            slidesPerView: 6,
          },
          1024: {
            slidesPerView: 11,
          },
            setup() {
                const onSwiper = (swiper) => {
                    console.log(swiper);
                };
                const onSlideChange = () => {
                    console.log('slide change');
                };
                swiper.on('slideChange', function () {
                    console.log('slide changed');
                });
                return {
                    onSwiper,
                    onSlideChange,
                };
            },
        },
        
       
    });


    function forward(){
        // swiper.slideToClosest(100, false);
        // console.log("slided forward")
    }
    function backward(){
        // swiper.slidePrev(100, false);
        // console.log("backward called")
    }
    swiper.on('slideChange', function ({realIndex:r,previousIndex:p}) {
        if(r-p==1){
            forward();
        }
        else{
            back();
        }
    });

    var this_link_for_scroll = false;
  $(".nav-link").click(function(event){
    // alert("here");
    // alert($(this).html());
    
    $(".nav-link").removeClass("active");
    // event.target.addClass("active");
    $(this).addClass("active");
    this_link_for_scroll = true;

  });





  $(document).ready(function(){

    $(".nav-link").removeClass("active");
    $(".nav .nav-pills").addClass("active");
    $(' .mySwiper .nav-item > a[href*="subsection"]:first').addClass("active");
    $(".custom--cart").text("Checkout");
  });


    let active_slide ,next_slide;
    var lastId,
    // topMenu = $("#top-menu"),
    topMenu = $(".mySwiper"),
    topMenuHeight = topMenu.outerHeight()+15,
    // All list items
    menuItems = topMenu.find("a"),
    // Anchors corresponding to menu items
    scrollItems = menuItems.map(function(){
      var item = $($(this).attr("href"));
      // if the menu items are more than 1, return item otherwise it means the menu is stoo short. just a single or no entry at all(category)
      if (item.length) { return item; }
    });
    
    


    var lastScrollTop = 0;
    // Bind to scroll
    $(window).scroll(function(){
        
        var fromTop = $(this).scrollTop()+topMenuHeight;
        
        if (fromTop > lastScrollTop){
            // forward();
        } else {
            // backward();
        }
        lastScrollTop = fromTop;

        // Get id of current scroll item
        var cur = scrollItems.map(function(){
            if ($(this).offset().top < fromTop)
            return this;
        });
            //    console.log("curr",cur);
        // Get the id of the current element
        // console.log("this link for scroll",this_link_for_scroll);
        if(this_link_for_scroll){
            cur = cur[cur.length+1];
        }
        else{
            cur = cur[cur.length-1];
        }
        var id = cur && cur.length ? cur[0].id : "";
        // console.log("curr",cur);
        // console.log("menuItems.parent",menuItems.parent());
        if (lastId !== id) {
            lastId = id;
            // console.log("")
            menuItems.removeClass("active");
            menuItems.filter("a[href='#"+id+"']").addClass("active");
            // console.log("swiper object",swiper);
            
            var slide_no =  menuItems.filter("a[href='#"+id+"']").parent().attr("aria-label");
            if(slide_no){
                slide_no = slide_no.split("/");
                if(slide_no){
                    active_slide = slide_no[0];
                    next_slide = slide_no[1];
                }
            }


            

            
            
        }                   
    });


////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////

// Services Swiper Logic goes here

    var swiper_services = new Swiper(".mySwiper_services", {
        // modules: [ Pagination, Scrollbar],
        slidesPerView: 4,
        loop: true,
        mousewheel: {
            invert: true,
        },
        navigation: {
            prevEl: ".swiper-button-prev-services",
            nextEl: ".swiper-button-next-services",
          
        },
        breakpoints: {
          240: {
            slidesPerView: 4,
          },
          768: {
            slidesPerView: 6,
          },
          1024: {
            slidesPerView: 11,
          },
            setup() {
                const onSwiper = (swiper) => {
                    console.log(swiper);
                };
                const onSlideChange = () => {
                    console.log('slide change');
                };
                swiper.on('slideChange', function () {
                    console.log('slide changed');
                });
                return {
                    onSwiper,
                    onSlideChange,
                };
            },
        },
       
    });


    function forward(){
        // swiper.slideToClosest(100, false);
        // console.log("slided forward")
    }
    function backward(){
        // swiper.slidePrev(100, false);
        // console.log("backward called")
    }

    swiper_services.on('slideChange', function ({realIndex:r,previousIndex:p}) {
        if(r-p==1){
            forward();
        }
        else{
            back();
        }
    });



    var this_link_for_scroll_services = false;

    $(".nav-link-services").click(function(event){
        // alert("here");
        // alert($(this).html());
        
        $(".nav-link-services").removeClass("activeservice");
        // event.target.addClass("active");
        $(this).addClass("activeservice");
        this_link_for_scroll_services = true;

    });


    $(document).ready(function(){

        $(".nav-link-services").removeClass("activeservice");
        $(' .mySwiper_services .nav-item-services > a[href*="subsection"]:first').addClass("activeservice");
        $(".custom--cart").text("Checkout");
    });


        let active_slide_services ,next_slide_services;
        var lastId_services,
        // topMenu = $("#top-menu"),
        topMenu = $(".mySwiper_services"),
        topMenuHeight = topMenu.outerHeight()+15,
        // All list items
        menuItems = topMenu.find("a"),
        // Anchors corresponding to menu items
        scrollItems = menuItems.map(function(){
        var item = $($(this).attr("href"));
        // if the menu items are more than 1, return item otherwise it means the menu is stoo short. just a single or no entry at all(category)
        if (item.length) { return item; }
    });




var lastScrollTop_services = 0;
// Bind to scroll
$(window).scroll(function(){
    
    var fromTop_services = $(this).scrollTop()+topMenuHeight;
    
    if (fromTop_services > lastScrollTop_services){
        // forward();
    } else {
        // backward();
    }
    lastScrollTop_services = fromTop_services;

    // Get id of current scroll item
    var cur = scrollItems.map(function(){
        if ($(this).offset().top < fromTop_services)
        return this;
    });
        //    console.log("curr",cur);
    // Get the id of the current element
    // console.log("this link for scroll",this_link_for_scroll);
    if(this_link_for_scroll_services){
        cur = cur[cur.length+1];
    }
    else{
        cur = cur[cur.length-1];
    }
    var id = cur && cur.length ? cur[0].id : "";
    // console.log("curr",cur);
    // console.log("menuItems.parent",menuItems.parent());
    if (lastId_services !== id) {
        lastId_services = id;
        // console.log("")
        menuItems.removeClass("activeservice");
        menuItems.filter("a[href='#"+id+"']").addClass("activeservice");
        // console.log("swiper object",swiper);
        
        var slide_no =  menuItems.filter("a[href='#"+id+"']").parent().attr("aria-label");
        if(slide_no){
            slide_no = slide_no.split("/");
            if(slide_no){
                active_slide_services = slide_no[0];
                next_slide_services = slide_no[1];
            }
        }


        

        
        
    }                   
});


/////////////////////////// Add more days for adding more hours in the cart modal //////////////////////////////////////////////




var count = 2;
var timeFormat = 'AM/PM';
    
var days = '';


// function addMoreDays(exp){

    
//     $(".below_div").append(
//         '<div class="row service_days_container daysContainer_'+count+'">'+
//             '<div class="col-4">'+
//                 '<div class="form-group">'+
//                     '<input id="serviceday'+count+'" name="service_day[]" class="flatpickr flatpickr-input form-control serviceday'+count+' serviceday" type="text" placeholder="Select Service Day" readonly="readonly">'+
//                 '</div>'+
//             '</div>'+
//             '<div class="col-3">'+
//                 '<div class="form-group">'+
//                     '<input id="servicefrom'+count+'" name="service_from_time[]" class="flatpickr flatpickr-input form-control servicefrom'+count+' servicefrom" type="text" placeholder="Start Time" value="">'+
//                 '</div>'+
//             '</div>'+
//             '<div class="col-3">'+
//                 '<div class="form-group">'+
//                     '<input id="serviceto'+count+'" name="service_to_time[]" class="flatpickr flatpickr-input form-control serviceto'+count+' serviceto" type="text" placeholder="End Time" value="">'+
//                 '</div>'+
//             '</div>'+
//             '<div class="col-1">'+
//                 '<button class="btn btn-icon btn-1 btn-sm btn-danger" type="button"  title="Remove service days" onclick="removeDay(this)">'+
//                     '<span class="btn-inner--icon"><i class="las la-trash"></i></span>'+
//                 '</button>'+
//             '</div>'+
//         '</div>'
//     );


//     $('#serviceday'+count).flatpickr({
//         enableTime: false,
//         dateFormat: "Y-m-d",
//         minDate:"today",
//         altInput:false,
//         allowInput:false,
//         "disable": [
//             function(date) {
//                 return (date.getDay() === 0 || date.getDay() === 6);
//             }
//         ],
//         weekNumbers:false,
//     });

//     const my_flatpickr_from = $('#servicefrom'+count).flatpickr({
//         static: true,
//         enableTime: true,
//         dateFormat: timeFormat == "AM/PM" ? "h:i K": "H:i",
//         noCalendar: true,
//         altFormat: timeFormat == "AM/PM" ? "h:i K" : "H:i",
//         altInput: true,
//         allowInput: true,
//         time_24hr: timeFormat == "AM/PM" ? false : true,
//     });

//     const my_flatpickr_to = $('#serviceto'+count).flatpickr({
//         static: true,
//         enableTime: true,
//         dateFormat: timeFormat == "AM/PM" ? "h:i K": "H:i",
//         noCalendar: true,
//         altFormat: timeFormat == "AM/PM" ? "h:i K" : "H:i",
//         altInput: true,
//         allowInput: true,
//         time_24hr: timeFormat == "AM/PM" ? false : true,
//     });

//     count++;

// }


    // $('#serviceday1').flatpickr({
    //     enableTime: false,
    //     dateFormat: "Y-m-d",
    //     minDate:"today",
    //     altInput:false,
    //     allowInput:false,
    //     "enable": [
    //         function(date) {
    //         return (date.getDay() === 4);

    //         }
    //     ]
    //     // weekNumbers:true,
    // });

    // const my_flatpickr_from = $('#servicefrom1').flatpickr({
    //     static: true,
    //     enableTime: true,
    //     dateFormat: timeFormat == "AM/PM" ? "h:i K": "H:i",
    //     noCalendar: true,
    //     altFormat: timeFormat == "AM/PM" ? "h:i K" : "H:i",
    //     altInput: true,
    //     allowInput: true,
    //     time_24hr: timeFormat == "AM/PM" ? false : true,
    // });

    // const my_flatpickr_to = $('#serviceto1').flatpickr({
    //     static: true,
    //     enableTime: true,
    //     dateFormat: timeFormat == "AM/PM" ? "h:i K": "H:i",
    //     noCalendar: true,
    //     altFormat: timeFormat == "AM/PM" ? "h:i K" : "H:i",
    //     altInput: true,
    //     allowInput: true,
    //     time_24hr: timeFormat == "AM/PM" ? false : true,
    // });







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


/////////////////////////// Add more days for adding more hours in the cart modal //////////////////////////////////////////////









////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////




$("#reviewBtn").click(function(){
  $("#infoModal").css("display","block");
  $("#infoModal").addClass("show");
  $(".tablinks").removeClass("active");
  $("#info").css("display","none");
  $("#defaultOpen").addClass("active");
  $("#review").css("display","block");
  
  //$("body").css("overflow-y","hidden");
  //$("body").css("height","100vh");
  $("body").addClass("modal-open");
  $("body").css("padding-right","14px");

  //$(".content-wrapper").css("display","none");
})

$("#closeInfo").click(function(){
  $("body").removeAttr( 'style' );
  $("#infoModal").css("display","none");
  $("#infoModal").removeClass("show");
  //$("body").css("overflow-y","auto");
  //$("body").css("height","auto");
  $(".content-wrapper").css("display","flex");
  $("body").removeClass("modal-open");
  
})



// Color Changing script
// $(document).ready(function(){
//      $("#bg").change(function(){
//         $("#full").css("background-color",$("#bg").val());
//     });
// });
// onchange="javascript:document.getElementById('full').style.backgroundColor=document.getElementById('bg2').value;"
var style_color = '';
$(document).ready(function(){
    
    $("#bg").change(function(){

    });
    
    
        

});

    var token = '<?php echo csrf_token(); ?>';


    /* onDone is similar to onChange, but only called when you click 'Ok' */

</script>

<script type="text/javascript">




$(document).on("click","#infoBtn",function(){
    
  //  $("body").addClass("modal-open");
  //$("body").css("padding-right","14px");

  //$(".content-wrapper").css("display","none");
 
  $("#infoModal").css("display","block");
  $("#infoModal").addClass("show");
  $(".tablinks").removeClass("active");
  $("#review").css("display","none");
  $("#infoOpen").addClass("active");
  $("#info").css("display","block");
  
  //$("body").css("overflow-y","hidden");
  //$("body").css("height","100vh");
  $("body").addClass("modal-open");
  $("body").css("padding-right","14px");
 // $(".content-wrapper").css("display","none");
});

</script>