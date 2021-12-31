<div class='info checkcheck'>
    <div class='box-info'>
        <div class='head align-center myModif myUbuntu myCentre'>
            <p class="myUbuntu myCentre "><strong class="myUbuntu"><?php echo e(__('Shopping Cart')); ?></strong></p>

        </div>

        <div class='content' id="<?php echo e($id); ?>">

            <div v-for="item in items" class="items col-xs-12 col-sm-12 col-md-12 col-lg-12 clearfix">
                <div class=" clearfix" v-cloak>

                    
                    <p class="product-item_quantity positioned">{{ item.quantity }}</p>
					<div class="name-price">
                      <h6 class="product-item_title">{{ item.name }}</h6>
                      <p class="product-item_price">{{ item.attributes.friendly_price }}</p>
                  </div>

                    <div class="d-flex flex-row-reverse">

                        <button type="button" v-on:click="remove(item.id)" :value="item.id" class="btn btn-outline-primary btn-icon btn-sm page-link btn-cart-radius">
                            <span class="btn-inner--icon btn-cart-icon"><i class="las la-trash"></i></span>
                        </button>

                        <button type="button" v-on:click="incQuantity(item.id)" :value="item.id" class="btn btn-outline-primary btn-icon btn-sm page-link btn-cart-radius">
                            <span class="btn-inner--icon btn-cart-icon"><i class="las la-plus"></i></span>
                        </button>

                        <button type="button" v-on:click="decQuantity(item.id)" :value="item.id" class="btn btn-outline-primary btn-icon btn-sm page-link btn-cart-radius">
                            <span class="btn-inner--icon btn-cart-icon"><i class="las la-minus"></i></span>
                        </button>







                    </div>
                    <hr />


                </div>
            </div>
        </div>





        <div id="<?php echo e($idtotal); ?>">

            <div v-if="totalPrice==0" class=' head align-center'>
                <p><small><?php echo e(__('Cart is empty')); ?>!</small></p><br />
            </div>



            <div v-if="totalPrice" class='actionsCart' style="margin-top: 0px">
                <span v-if="totalPrice"><strong><?php echo e(__('Subtotal')); ?>:</strong></span>
                <span v-if="totalPrice" class="ammount"><strong>{{ totalPriceFormat }}</strong></span>
                <br /><br />

                <a href="/cart-checkout" class='button full-button'><?php echo e(__('Checkout')); ?></a>
            </div>

        </div>





    </div>
</div>
<br />

<script>
  
  document.addEventListener('DOMContentLoaded', (event) => {
    window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 70 || document.documentElement.scrollTop > 70) {
    document.querySelector(".content-wrapper").classList.add("fixed-cart")
    if (document.body.scrollTop > 394 || document.documentElement.scrollTop > 394) {
    document.querySelector(".content-wrapper").classList.add("fixed-nav")
  } else {
    document.querySelector(".content-wrapper").classList.remove("fixed-nav")
  }
  } else {
    document.querySelector(".content-wrapper").classList.remove("fixed-cart")
  }
}
    
});
  
</script><?php /**PATH /home/wabizz1/public_html/modules/ElegantTemplate/Providers/../Resources/views/templates/side_cart.blade.php ENDPATH**/ ?>