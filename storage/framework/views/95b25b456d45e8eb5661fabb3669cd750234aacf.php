<style>
    .catal {
        margin-left: 0.8%;
    }

    .myCent {
        text-align: center;
    }
<<<<<<< HEAD

=======
	.myCentre{
      display:flex !important;
    	justify-content:center !important;
    align-content:center !important;
      flex-direction:column !important;
    }
>>>>>>> akhtar
    .myCate {
        background: white;
        color: black;
    }

    .myCate:hover {
        background: purple;
        color: white;
        text-decoration: none !important;
    }
<<<<<<< HEAD
  .myCat{
    display:flex;
    justify-content: flex-start;
    height: 100%;
    
  }
  .myTxtw{
    color:white !important;
    text-align:center !important;
=======
  	.myCat{
    	display:flex;
    	justify-content: flex-start;
    	height: 100%;
  }
  .leM{
    color: #0F012B !important;
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
    color:white !important;
    margin-right : 15px;
>>>>>>> akhtar
  }
  
  .myBack{
    background: #fffdf0 !important;
  }
  .myCoul{
<<<<<<< HEAD
    color : #102c91 !important;
=======
    color : #0F012B !important;
  }
  .myImCat{
    width : 100% !important;
    border-radius : 2px 2px 0px 0px;
  }
  .muf{
    background : #f8f5f2 !important;
>>>>>>> akhtar
  }
  

    @media  only screen and (max-width: 600px) {

        .catal {
            margin-left: 3.5% !important;
            display: flex !important;
            justify-content: center !important;
            align-items: center;
        }
<<<<<<< HEAD

=======
      .  .myTop{
    margin-top : 30px !important;
  }

      	.myRes{
    		width : 100%;
          height: 250px !important;
  		}
>>>>>>> akhtar
        .myCent {
            text-align: center;
            margin-left: 45%;
        }

        .myCate {
            margin-top: 5%;
            margin-bottom: 5%;
        }
<<<<<<< HEAD
      .muf{
   	 	margin-top : 2%;
        margin-bottom : 1%;
  	}
=======
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
      
  
>>>>>>> akhtar
    }
  
    .myProd {
        width: 100% !important;
    }
</style>
<<<<<<< HEAD

=======
>>>>>>> akhtar
<!-- section-place-content-menu -->
<section class='section section-place-content-menu  muf  '>

    <div class='packer'>

        <div class="package ">
            <div class="text-center">
                
<<<<<<< HEAD
                <div >
     
   			<?php if(!$restorant->categories->isEmpty()): ?>
        	<nav class="tabbable sticky" style="top: <?php echo e(config('app.isqrsaas') ? 64:88); ?>px;">
                <ul class="nav nav-pills bg-white mb-2">
                    <!-- <li class="nav-item  ">
                        <a class="nav-link  mb-sm-3 mb-md-0 active" data-toggle="tab" role="tab" href=""><?php echo e(__('All categories')); ?></a>
                    </li> -->
                    <?php $__currentLoopData = $restorant->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if(!$category->items->isEmpty()): ?>
                            <li class="nav-item ">
                                <a class="btn  nav-link mb-sm-3 mb-md-0"   
                                   href="#subsection-<?php echo $category->id; ?>"><?php echo e($category->name); ?></a>
                              
                              

                            </li>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
=======
                <div>
        
   			<?php if(!$restorant->categories->isEmpty()): ?>
        	<nav class="tabbable sticky" style="top: <?php echo e(config('app.isqrsaas') ? 64:88); ?>px;">
                <!--<ul class="nav nav-pills bg-white mb-2">
                     <li class="nav-item  ">
                        <a class="nav-link  mb-sm-3 mb-md-0 active" data-toggle="tab" role="tab" href=""><?php echo e(__('All categories')); ?></a>
                    </li> -->
                   
                        
                            
                  <div class="swiper mySwiper">
      <div class="swiper-wrapper">
         <?php $__currentLoopData = $restorant->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="nav-item swiper-slide" >
                                <a class="btn  nav-link mb-sm-3 mb-md-0 leM"   
                                   href="#subsection-<?php echo $category->id; ?>"><?php echo e($category->name); ?></a>
                            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      
    </div>
                        
                    
                <!--</ul>-->
>>>>>>> akhtar

                
            </nav>

            
            <?php endif; ?>
                </div>
              
            </div>

	
        </div>
    </div>
</section>
<!-- section-place-content -->
<section class="section section-place-content">
    <div class="container-fluid">
<<<<<<< HEAD
        <div id="theCartBottomButton" onClick="openNav()" class=" close-mobile-menu circle callOutShoppingButtonBottom icon icon-shape bg-gradient-red text-white rounded-circle shadow mb-4" style=" background: linear-gradient(87deg, #ffffff 0, #ffffff 100%) !important;">
            <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_atunf5kv.json" background="transparent" speed="0.5" style="width: 50px; height:50px;" loop autoplay></lottie-player>
        </div>

        <div class='row'>
            <?php if(!$restorant->categories->isEmpty()): ?>
            <?php $__currentLoopData = $restorant->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <div id='subsection-<?php echo $category->id; ?>' class='box-info'>
                <div class='head align-center myDeco'>
                    <h2 class="myTxtw"><b><?php echo $category->name; ?></b></h3>
=======
      
                  <div class="myBg">

      
        <div id="theCartBottomButton" onClick="openNav()" class=" close-mobile-menu circle callOutShoppingButtonBottom icon icon-shape bg-gradient-red text-white rounded-circle shadow mb-2" style=" background: linear-gradient(87deg, #ffffff 0, #ffffff 100%) !important;">
          <button class="btn btn-primary custom--cart myCo myUbuntu" style="background :  #0F012B">
                Checkout
              </button>
         	
                                          <i style="color : white;" class="las la-shopping-bag myIco"></i>
                                          
        </div>
      </div>
        <div class='row'>
            <?php if(!$restorant->categories->isEmpty()): ?>
            <?php $__currentLoopData = $restorant->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
            <div id='subsection-<?php echo $category->id; ?>' class='box-info'>
                    
                <div class=' align-center myDeco myTop myUbuntu' style="background:none;border-radius:none;">
                
                    <?php if($category->logom): ?>

                        <img id="previewImg" class="img-fluid  myImCat" src="<?php echo $category->logom;?>" alt="..." /> 

                    <?php endif; ?>
                </div>
                <div class='head  myDeco'>
                    <h2 class="myTxtw myUbuntu"><?php echo $category->name; ?></h2>
>>>>>>> akhtar
                </div>


                <!-- PRODUCT CARD START -->

                <div class='row mt-3'>
                    <?php $__currentLoopData = $category->aitems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-3" style="width: 18rem;">
<<<<<<< HEAD
                        <img src="<?php echo e($item->logom); ?>" class="img-fluid" alt="...">
=======
                        <img src="<?php echo e($item->logom); ?>" class="img-fluid myRes" alt="...">
>>>>>>> akhtar
                        <div class="card-body myBack ">
                            <h5 class="card-title myCoul"><?php echo e($item->name); ?></h5>
                            <p class="card-text myCoul"><?php echo e($item->short_description); ?></p>
                            <!-- class="extras" -->
                           <div class="price-btn-wrap"> <div class='price myCoul'><?php echo money($item->price, config('settings.cashier_currency'),config('settings.do_convertion')); ?></div>
                            <a href='javascript:;' onClick="setCurrentItem(<?php echo e($item->id); ?>)" class='item-offer-horizontal'>

                                <div class="quantity-btn">
                                    <div id="addToCart1">
<<<<<<< HEAD
                                        <button class="btn btn-primary" v-on:click='addToCartAct'> <h3>
=======
                                        <button class="btn btn-primary" style="background : #0F012B;" v-on:click='addToCartAct'> <h3>
>>>>>>> akhtar
                                          <i style="color : white;" class="las la-shopping-bag"></i>
                                          </h3></button>
                                    </div>
                                </div>
                            </a>
                          </div>

                            <div class="allergens">
                                <?php $__currentLoopData = $item->allergens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $allergen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class='allergen' data-toggle="tooltip" data-placement="bottom" title="<?php echo e($allergen->title); ?>">
                                    <img src="<?php echo e($allergen->image_link); ?>" />
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </div>

                        </div>
                    </div>
                  

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

                <!-- PRODUCT CARD END -->


            </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>





        </div>

        <div class="row show_info">
            <div id='place-info' class='col-md-12'>
                <div class='full-width'>
                    <div class='box-info'>
                        <div class='head myTw'>
                            <h3><i class="las la-map-marker"></i><?php echo e(__('Address')); ?></h3>
                            <div class='info'>
                                <p><strong><?php echo e($restorant->address); ?></strong></p>
                                <p><?php echo e($restorant->phone); ?></p>
                            </div>
                        </div>
                        <div class='content'>
                            <div class='schedule-map'>
                                <div class='schedule'>
                                    <h4>Hours</h4>
                                    <ol class='items'>
                                        <?php $__currentLoopData = $wh; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $day=>$hours): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li>
                                            <?php if($day==$currentDay): ?>
                                            <div class='day'><?php echo e(__(ucfirst($day))); ?>

                                                <span class='tag'>
                                                    <?php echo e(__('Today')); ?>

                                                </span>
                                            </div>
                                            <?php else: ?>
                                            <div class='day'><?php echo e(__(ucfirst($day))); ?> </div>
                                            <?php endif; ?>
                                            <?php $__currentLoopData = $hours; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $timeRange): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class='hours'><?php echo e($timeRange->start()); ?> - <?php echo e($timeRange->end()); ?> </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </ol>

                                </div>
                                <div class="map">
                                    <iframe src="https://maps.google.com/maps?q=<?php echo e($restorant->lat); ?>,<?php echo e($restorant->lng); ?>&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<<<<<<< HEAD
            <div class='holder-right'>
                <!-- New cart -->
                <?php echo $__env->make('elegant-template::templates.side_cart',['id'=>'cartList','idtotal'=>'totalPrices'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <!-- End New cart -->
            </div>
=======
           <!-- <div class='holder-right'> -->
                <!-- New cart -->
                
                <!-- End New cart -->
           <!-- </div> -->
>>>>>>> akhtar
        </div>

    </div>
</section>
<<<<<<< HEAD
<section class='section section-place-content' style="display: none;">
    <div class='packer'>

        <div class='packer'>
            <div id="theCartBottomButton" onClick="openNav()" class=" close-mobile-menu circle callOutShoppingButtonBottom icon icon-shape bg-gradient-red text-white rounded-circle shadow mb-4" style=" background: linear-gradient(87deg, #ffffff 0, #ffffff 100%) !important;">
                <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_atunf5kv.json" background="transparent" speed="0.5" style="width: 50px; height:50px;" loop autoplay></lottie-player>
            </div>
=======
</div>
<div class='holder-right'>
                <!-- New cart -->
                <?php echo $__env->make('elegant-template::templates.side_cart',['id'=>'cartList','idtotal'=>'totalPrices'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <!-- End New cart -->
            </div>
</div>


<section class='section section-place-content' style="display: none;">
    <div class='packer'>
		
          
      
        <div class='packer'>
            <div id="theCartBottomButton" onClick="openNav()" class=" close-mobile-menu circle callOutShoppingButtonBottom icon icon-shape bg-gradient-red text-white rounded-circle shadow mb-4" style=" background: linear-gradient(87deg, #ffffff 0, #ffffff 100%) !important;">
              
                <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_atunf5kv.json" background="transparent" speed="0.5" style="width: 50px; height:50px;" loop autoplay></lottie-player>
          </div>
>>>>>>> akhtar
            <div class='content'>

                <!-- tab menu -->
                <!-- <div id='place-menu' class='holder-left content-tab expanded'>
                    <div class='content-left'>

                        <div class='categories'>
                            <div class='categories_title'><?php echo e(__('Categories')); ?></div>
                            <nav>




                            </nav>



                            <?php if(count($allergens)>0): ?>

                            <br /><br />
                            <div class='categories_title'><?php echo e(__('Allergens')); ?></div>
                            <nav>

                                <?php $__currentLoopData = $allergens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $allergen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <div class='item'>
                                    <div class='allergen'>
                                        <img src="<?php echo e($allergen->image_link); ?>" />
                                    </div>
                                    <?php echo " " . $allergen->title ?>
                                </div>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                            </nav>

                            <?php endif; ?>

                        </div> 
                    </div>-->
                <!-- <div class='content-center'> -->

            </div>

            <!-- tab info -->
            <div id='place-info11' class=' content-tab'>
                <div class='full-width'>
                    <div class='box-info'>
                        <div class='head'>
                            <h3 ><i class="las la-map-marker"></i><?php echo e(__('Address')); ?></h3>
                            <div class='info'>
                                <p ><strong><?php echo e($restorant->address); ?></strong></p>
                                <p ><?php echo e($restorant->phone); ?></p>
                            </div>
                        </div>
                        <div class='content'>
                            <div class='schedule-map'>
                                <div class='schedule'>
                                    <h4>Hours</h4>
                                    <ol class='items'>
                                        <?php $__currentLoopData = $wh; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $day=>$hours): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li>
                                            <?php if($day==$currentDay): ?>
                                            <div class='day'><?php echo e(__(ucfirst($day))); ?>

                                                <span class='tag'>
                                                    <?php echo e(__('Today')); ?>

                                                </span>
                                            </div>
                                            <?php else: ?>
                                            <div class='day'><?php echo e(__(ucfirst($day))); ?> </div>
                                            <?php endif; ?>
                                            <?php $__currentLoopData = $hours; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $timeRange): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class='hours'><?php echo e($timeRange->start()); ?> - <?php echo e($timeRange->end()); ?> </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </ol>

                                </div>
                                <div class="map">
                                    <iframe src="https://maps.google.com/maps?q=<?php echo e($restorant->lat); ?>,<?php echo e($restorant->lng); ?>&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<<<<<<< HEAD
            </div>

            <div class='holder-right'>
                <!-- New cart -->
                <?php echo $__env->make('elegant-template::templates.side_cart',['id'=>'cartList','idtotal'=>'totalPrices'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <!-- End New cart -->
            </div>
=======

            </div>

>>>>>>> akhtar
        </div>
    </div>
    <!-- </div> -->




<<<<<<< HEAD
</section><?php /**PATH /home/wabizz1/public_html/modules/ElegantTemplate/Providers/../Resources/views/templates/place-content.blade.php ENDPATH**/ ?>
=======
</section>
<!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 4,
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
        },
       
      });
    </script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
  $(".nav-link").click(function(event){
    $(".nav-link").removeClass("active");
    event.target.addClass("active");
  })
</script><?php /**PATH /home/wabizz1/public_html/modules/ElegantTemplate/Providers/../Resources/views/templates/place-content.blade.php ENDPATH**/ ?>
>>>>>>> akhtar
