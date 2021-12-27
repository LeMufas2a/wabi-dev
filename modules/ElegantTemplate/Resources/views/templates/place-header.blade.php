<style>
    .myLogo{
        height: 80%;
        width: 80%;
        border: 5px solid white;
    }
  .animation svg{
    display : none;
  }
  .myPic{
    justify-content:center;
    align-items:center;
    position:absolute; 
    top: 30%;
    left: 4%;
  }  
  .myMarge{
    margin-top : 0px;
  }
  .myMarge2{
    margin-top: 1px;
  }
  .myPlacement{
    position: absolute;
    right: 0.5%;
    top: 4%;
    font-size: 15px;
    border: solid black 1px;
  }
  .myClr{
    color:red;
    
  }

  .infoBtn{
    color: #de8e00;
  }
  @media only screen and (max-width: 600px) {
 	 .myLogo{
        height: 70%;
        width: 70%;
    }
     .myPic{
   		top: 160%;
       	left: -5%;
  }
      	.myMarge{
    	font-size: 10px !important;
  	}
  	.myMarge2{
    font-size : 12px !important;  
  }


}
  
  
  div#wrapper {
    margin-left: auto;
    margin-right: auto;
}
  div#addToCart1 .btn {
    background-color: #de8e00;
    border-color: #de8e00;
}
  picture[data-background="true"] {
    border-radius: 8px 8px 0 0;
    background-color: #fff;
    overflow: hidden;
}

picture[data-background="true"] source, picture[data-background="true"] img {
    border-radius: 8px 8px 0 0;
    background-color: #fff;
}

.grayscale-05:before {
    background-color: #fff;
}
  
@media (min-width: 576px){
    div#wrapper {
        max-width: 540px;
    }
	 
}
@media (min-width: 768px){
    div#wrapper {
        max-width: 720px;
    }
  .box-info .col-md-3{
    max-width: calc(50% - 2rem);
    flex-basis: auto;
  }
}
@media (min-width: 992px){
    div#wrapper {
        max-width: 960px;
    }
}
  
  @media (min-width: 1025px){
    .box-info .col-md-3{
    max-width: calc(33.33% - 2rem);
  }
  }

@media (min-width: 1200px){
    div#wrapper {
        max-width: 1140px;
    }
  .box-info .col-md-3{
    max-width: calc(25% - 2rem);
  }
}
@media (min-width: 1400px){
    div#wrapper {
       max-width: 1320px; 
    }
}


img.myLogo {
    height: 200px;
    width: 200px;
    border-radius: 234px;
}

.box-info .col-md-3 {
    background: #FFFFFF;
    border: 1px solid #E3F0F6;
    box-sizing: border-box;
    box-shadow: 0px 1px 8px rgb(29 33 57 / 8%);
    border-radius: 8px;
    margin: 1rem;
    padding: 0;
}

div#subsection-89 {
    box-shadow: none;
}
  .top-header .packer {
    max-width: 100%;
    width: 100%;
    border-radius: 0 0 8px 8px;

}
  .top-header > .packer{
    box-shadow: 0 3px 6px rgb(61 87 119 / 20%);
  }
  picture.d-flex.myPic {
    left: 10%;
}
  
  div#subsection-88 {
    background: #fff;
    box-shadow: none;
}

section.section.section-place-content {
    background: #fff;
}

/**.holder-right {
    display: none;
}**/

div#place-info {
    padding: 0;
    margin-bottom: 60px;
}
  .box-info .col-md-3 img {
    border-radius: 8px 8px 0 0;
}
  
  .price-btn-wrap {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

a.item-offer-horizontal {
    padding-right: 0;
}

.box-info h5.card-title {
    font-size: 16px;
    color: #000;
    font-weight: 900;
    margin-bottom: 0;
}

.box-info p.card-text {
    font-size: 12px;
    color: #8797a6;
}

.box-info .price {
    font-size: 16px;
    color: #000;
}

.box-info .card-body {
    padding: .5rem 1rem;
}
  .box-info .col-md-3{
    width: auto!important;
  }
  @media (max-width: 1025px){
    picture.d-flex.myPic {
    top: 0;
}
  }
  @media (max-width: 1024.4px){
    picture.d-flex.myPic {
    top: 16px;
}

img.myLogo {
    width: 130px;
    height: 130px;
}
  }
  .top-header {
    padding: 15px !important;
}
@media (max-width: 576px){
  .box-info .col-md-3{
    margin: 0;
  }
  .box-info .row {
    margin: 0;
    padding: 0 15px;
}

.box-info .col-md-3 {
    margin-bottom: 30px;
}
  .info.p-3.myCent {
    margin-left: 0;
    padding-top: 80px!important;
    padding-bottom : 10px !important;
}

picture.d-flex.myPic {top: 0px;left: 50%;transform: translateX(-50%);}

img.myLogo {
    width: 160px;
    height: 160px;
}
  .top-header {
    padding: 0px !important;
}

picture.d-flex.myPic {
    width: 200px;
    top: -36px;
}
  picture[data-background="true"] {
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
}
  	.myPlacement{
      top: 1% !important;
    }
}
  
  body{
    overflow-x: hidden;
  }
  /**#theCartBottomButton{
    display: block!important;
  }**/
</style>

<div class="top-header">

<section class='section section-place-header grayscale-05'>
    <div class='packer  myMar'>
        <div class='package '>
            
                <div class='d-flex' style="justify-content: center; align-items:center">
                  
                  
                  
                  <picture class='d-flex myPic'>
                        <img class="myLogo" loading="lazy" src='{{ $restorant->icon }}' />   
                    </picture>
                </div>
                
  <!-- 
                <nav class='breadcrumb'>
                    <a href='index.php'>Home</a>
                    <i class="las la-angle-right"></i>
                    <a href='javascript:;'>Delivery</a>
                    <i class="las la-angle-right"></i>
                    <a href='place.php'>Place name</a>
                </nav>
                -->
               
            
        </div>
    </div>
    <picture data-background=true >
        <source  srcset="{{ $restorant->coverm }}" media="(min-width: 569px)" />
        <img class="grayscale-05" loading="lazy" src='{{ $restorant->coverm }}' />
        
    </picture>
   
</section>
  <div class='packer'>

        <div class="package">
            <div class='info p-3 myCent'>
                <h1 ><b>{{ $restorant->name }}</b></h1>
              <i   class="btn infoBtn las la-info-circle myPlacement "></i>
              
                <p>
                    <small >
                        <!--
                                <strong class='colorize'>
                                    <i class="las la-star"></i> 
                                    4.3
                                </strong> 

                                (693) 
                                -->
                        <p class="myMarge2">{{ $restorant->description }}</p>
                    </small>
                </p>
                <p class="myMarge">
                    <!-- <small>45'</small> -->
                    <small>{{ __('Minimum order') }} @money($restorant->minimum, config('settings.cashier_currency'),config('settings.do_convertion'))</small>
                </p>

            </div>
     </div>
  </div>
</div>