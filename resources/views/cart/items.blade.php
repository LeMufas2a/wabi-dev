<style>
form#order-form {
    padding: 8px 8px 16px;
    border-radius: 10px;
}

.custom-control.custom-radio.mb-3 {
    border: 1px solid #C7CEEC;
    padding: 16px;
    border-radius: 6px;
}

.custom-control-label:after, .custom-control-label:before {
    left: -1rem;
}

.custom-radio .custom-control-input~.custom-control-label {
    padding-left: .75rem;
}

input#custom\[client_name\],input#custom\[client_phone\] {
    border: 1px solid #cad1d7;
}

span.select2.select2-container.select2-container--default {
    width: 100%!important;
}
.d_p {
    border: 1px solid #C7CEEC;
    border-radius: 6px;
    overflow: hidden;
}

.d_p .shadow {
    box-shadow: none!important;
    border: none!important;
}

.d_p .mt-5 {
    margin-top: 0!important;
}

.d_p h3 {
    margin-top: 12px;
}
.item-price {
    display: flex;
    justify-content: space-between;
}

.item-price h6,.item-price p {
    margin-bottom: 0;
}


div#cartList .items.col-xs-12.col-sm-12.col-md-12.col-lg-12.clearfix {
    padding: 0;
}

.info-block.block-info {
    border: none;
}
section.section.bg-secondary h3 {
    font-size: 18px;
    margin-top: 12px;
}

section.section.bg-secondary .mt-5 {
    margin-top: 0!important;
}
  
.card.card-profile br + br {
    display: none;
}

.card.card-profile .card-content.border-top > br:first-child {
    display: none;
}
  
.custom-control.custom-radio.mb-3:last-child {
    margin-bottom: 0!important;
}

.custom-control.custom-radio.mb-3:nth-child(2),
span.select2.select2-container.select2-container--default {
    margin-top: 16px;
}
  
@media (max-width: 767.4px){
    .col-md-5 {
        margin-top: 1.5rem;
    }
}
</style>
<div class="card card-profile shadow">
    <div class="px-4">
      <div class="mt-5">
        <h3>{{ __('Items') }}<span class="font-weight-light"></span></h3>
      </div>
        <!-- List of items -->
        <div  id="cartList" class="border-top">
            <br />
            <div  v-for="item in items" class="items col-xs-12 col-sm-12 col-md-12 col-lg-12 clearfix">
                <div class="info-block block-info clearfix" v-cloak>
                    <div class="square-box pull-left" style="display:none;">
                    <figure>
                        <img :src="item.attributes.image" :data-src="item.attributes.image"  class="productImage" width="100" height="105" alt="">
                    </figure>
                    </div>
                  <div class="item-price">
                    <h6 class="product-item_title">@{{ item.name }}</h6>
                    <p class="product-item_quantity myUbuntu">@{{ item.attributes.friendly_price }}</p>
                  </div>
                    
                    <p class="product-item_quantity ">quantity @{{ item.quantity }}</p>
                    <div class="row" style="display:none;">
                        <button type="button" v-on:click="decQuantity(item.id)" :value="item.id" class="btn btn-outline-primary btn-icon btn-sm page-link btn-cart-radius">
                            <span class="btn-inner--icon btn-cart-icon"><i class="fa fa-minus"></i></span>
                        </button>
                        <button type="button" v-on:click="incQuantity(item.id)" :value="item.id" class="btn btn-outline-primary btn-icon btn-sm page-link btn-cart-radius">
                            <span class="btn-inner--icon btn-cart-icon"><i class="fa fa-plus"></i></span>
                        </button>
                        <button type="button" v-on:click="remove(item.id)"  :value="item.id" class="btn btn-outline-primary btn-icon btn-sm page-link btn-cart-radius">
                            <span class="btn-inner--icon btn-cart-icon"><i class="fa fa-trash"></i></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End List of items -->
    </div>
</div>
<br/>
