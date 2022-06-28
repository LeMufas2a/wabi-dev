
"use strict";
var cartContent=null;
var cartContentMobile=null;
var cartTotal=null;
var cartTotalMobile=null;
var footerPages=null;
var total=null;
var total_price_on_checkout_button=null;

$('#localorder_phone').hide();




/**
 *
 * @param {Number} net The net value
 * @param {Number} delivery The delivery value
 * @param {Boolean} enableDelivery Disable or enable delivery
 */
function updatePrices(net,delivery,enableDelivery){
  net=parseFloat(net+"");
  delivery=parseFloat(delivery+"");
  var deduct=cartTotal.deduct;
  // console.log("Deduct is "+deduct);
  
  var formatter = new Intl.NumberFormat(LOCALE, {
    style: 'currency',
    currency:  CASHIER_CURRENCY,
  });

  //totalPrice -- Subtotal
  //withDelivery -- Total with delivery

  //Subtotal
  cartTotal.totalPrice=net;
  cartTotal.totalPriceFormat=formatter.format(net);

  if(enableDelivery){
    //Delivery
    cartTotal.delivery=true;
    cartTotal.deliveryPrice=delivery;
    cartTotal.deliveryPriceFormated=formatter.format(delivery);

    //Total
    var ndd=net+delivery-deduct;
    cartTotal.withDelivery=ndd;
    cartTotal.withDeliveryFormat=formatter.format(ndd);//+"==>"+new Date().getTime();
    total.totalPrice=ndd;
    
    

  }else{ 
    //No delivery
    //Delivery
    cartTotal.delivery=false;

    //Total
    var nd=net-deduct;
    cartTotal.withDelivery=nd;
    cartTotal.withDeliveryFormat=formatter.format(nd);
    total.totalPrice=nd;
  }
  total.lastChange=new Date().getTime();
  cartTotal.lastChange=new Date().getTime();
  // console.log("DAta");
  // console.log(cartTotal)
  // console.log("Total is "+total.totalPrice);
  // console.log("Total is "+cartTotal.withDelivery);
  

}

function setDeduct(deduction){
  var formatter = new Intl.NumberFormat(LOCALE, {
    style: 'currency',
    currency:  CASHIER_CURRENCY,
  });

  cartTotal.deduct=deduction;
  cartTotal.deductFormat=formatter.format(deduction);
  total.lastChange=null;
  cartTotal.lastChange=null;
  getCartContentAndTotalPrice();
}

function updateSubTotalPrice(net,enableDelivery){
  updatePrices(net,(cartTotal.deliveryPrice?cartTotal.deliveryPrice:0),enableDelivery)
}
/**
 * getCartContentAndTotalPrice
 * This functions connect to laravel to get the current cart items and total price
 * Saves the values in vue
 */
function getCartContentAndTotalPrice(){
  
   axios.get('/cart-getContent').then(function (response) {
    cartContent.items=response.data.data;
    // dta = response.data.data;
    //cartContentMobile.items=response.data.data;
    // alert("here");
    total_price_on_checkout_button = response.data.total;
    
    // console.log("cartContent object",cartContent.items.price);
    // console.log("get cart response",response.data.data['1653497223'].attributes);
    // console.log("cartcontent with attributes",items.attributes.service_from);
    
    if(total_price_on_checkout_button >= 1){
      $(".third-child").show();
      $(".custom--cart").text( response.data.quantity +"\t \t \t Checkout \t \t \t €"+ total_price_on_checkout_button.toFixed(2) );
    }
    else{
      // console.log("response.data.quantity",response.data.quantity);
      // var parent_id = $(".custom--cart").parent().parent().attr('id');
      // alert(parent_id);
      // $(div#theCartBottomButtonDiv).hide();
      // $( "div.container-fluid.first-child" ).find( "div" ).css( "background-color", "red" );
      // alert("here");
      // $(".third-child").css( "background-color", "red" );
      // var allListElements = $( "div" );
      // console.log("allListElements",allListElements);
      $(".third-child").hide();
      // $(".custom--cart").hide();
    }

    updateSubTotalPrice(response.data.total,true);
    
   })
   .catch(function (error) {
     
   });
 };

$("#promo_code_btn").on('click',function() {
    var code = $('#coupon_code').val();

    axios.post('/coupons/apply', {code: code,cartValue:cartTotal.totalPrice}).then(function (response) {
        if(response.data.status){
            $("#promo_code_btn").attr("disabled",true);
            $("#promo_code_btn").attr("readonly");

            $("#promo_code_war").hide();
            $("#promo_code_succ").show();

            setDeduct(response.data.deduct);
            js.notify(response.data.msg,"success");

            $('#promo_code_btn').hide();

            //$( "#coupon_code" ).prop( "disabled", true );
        }else{
            $("#promo_code_succ").hide();
            $("#promo_code_war").show();

            js.notify(response.data.msg,"warning");
        }
    }).catch(function (error) {
        
    });

});

$("#fborder_btn").on('click',function() {

    var address = $('#addressID').val();
    var comment = $('#comment').val();

    axios.post('/fb-order', {
            address: address,
            comment: comment
        })
        .then(function (response) {

        if(response.status){
            var text = response.data.msg;

            var fullLink = document.createElement('input');
            document.body.appendChild(fullLink);
            fullLink.value = text;
            fullLink.select();
            document.execCommand("copy", false);
            fullLink.remove();

            swal({
                title: "Good job!",
                text: "Order is submited in the system and copied in your clipboard. Next, messenger will open and you need to paste the order details there.",
                icon: "success",
                button: "Continue to messenger",
            }).then(function(isConfirm) {
                if (isConfirm) {
                    document.getElementById('order-form').submit();
                }
              });

        }
      }).catch(function (error) {
        
      });
});

/**
 * Removes product from cart, and calls getCartConent
 * @param {Number} product_id
 */
function removeProductIfFromCart(product_id){
    axios.post('/cart-remove', {id:product_id}).then(function (response) {
      getCartContentAndTotalPrice();
    }).catch(function (error) {
      
    });
 }

 /**
 * Update the product quantity, and calls getCartConent
 * @param {Number} product_id
 */
function incCart(product_id){
  axios.get('/cartinc/'+product_id).then(function (response) {
    getCartContentAndTotalPrice();
  }).catch(function (error) {
    
  });
}


function decCart(product_id){
  axios.get('/cartdec/'+product_id).then(function (response) {
    getCartContentAndTotalPrice();
  }).catch(function (error) {
    
  });
}

//GET PAGES FOR FOOTER
function getPages(){
    axios.get('/footer-pages').then(function (response) {
      footerPages.pages=response.data.data;
    })
    .catch(function (error) {
      
    });

};

function dineTypeSwitch(mod){
  

  $('.tablepicker').hide();
  $('.takeaway_picker').hide();
  $('.qraddressBox').hide();

  if(mod=="dinein"){
    $('.tablepicker').show();
    $('.takeaway_picker').hide();
    $('.qraddressBox').hide();

    //phone
    $('#localorder_phone').hide();
  }

  if(mod=="takeaway"){
      $('.tablepicker').hide();
      $('.takeaway_picker').show();
      $('.c').hide();

    //phone
    $('#localorder_phone').show();
  }



  if(mod=="delivery"){
    $('.tablepicker').hide();
    $('.takeaway_picker').hide();
    $('.qraddressBox').show();

  //phone
  $('#localorder_phone').show();
}

}

function orderTypeSwither(mod){
      

      $('.delTime').hide();
      $('.picTime').hide();

      if(mod=="pickup"){
          updatePrices(cartTotal.totalPrice,null,false)
          $('.picTime').show();
          $('#addressBox').hide();
      }

      if(mod=="delivery"){
          $('.delTime').show();
          $('#addressBox').show();
          getCartContentAndTotalPrice();
      }
}

setTimeout(function(){
  if(typeof initialOrderType !== 'undefined'){
    
    orderTypeSwither(initialOrderType);
  }else{
    
  }

},1000);

function chageDeliveryCost(deliveryCost){
  $("#deliveryCost").val(deliveryCost);
  updatePrices(cartTotal.totalPrice,deliveryCost,true);
  
}

 //First we beed to capture the event of chaning of the address
  function deliveryAddressSwithcer(){
    $("#addressID").change(function() {
      //The delivery cost
      var deliveryCost=$(this).find(':selected').data('cost');
      
      

      //We now need to pass this cost to some parrent funct for handling the delivery cost change
      if(deliveryCost!=undefined){
        chageDeliveryCost(deliveryCost);
      }
      


    });

  }

  function deliveryAreaSwithcer(){
    $("#delivery_area").change(function() {
      //The delivery cost
      var deliveryCost=$(this).find(':selected').data('cost');
      
      

      //We now need to pass this cost to some parrent funct for handling the delivery cost change
      chageDeliveryCost(deliveryCost);
      


    });

  }

  function deliveryTypeSwitcher(){
    $('.picTime').hide();
    $('input:radio[name="deliveryType"]').change(function() {
      orderTypeSwither($(this).val());
    })
  }

  function dineTypeSwitcher(){
    $('input:radio[name="dineType"]').on('change',function() {
      $('.delTimeTS').hide();
      $('.picTimeTS').show();
      dineTypeSwitch($(this).val());
    })
  }

  function paymentTypeSwitcher(){
    $('input:radio[name="paymentType"]').change(

      function(){
          //HIDE ALL
          $('#totalSubmitCOD').hide()
          $('#totalSubmitStripe').hide()
          $('#stripe-payment-form').hide()

          //One for all
          $('.payment_form_submiter').hide()
          

          if($(this).val()=="cod"){
              //SHOW COD
              $('#totalSubmitCOD').show();
          }else if($(this).val()=="stripe"){
              //SHOW STRIPE
              $('#totalSubmitStripe').show();
              $('#stripe-payment-form').show()
          }else{
            $('#'+$(this).val()+'-payment-form').show()
          }
      });
  }

window.onload = function () {

  

  //VUE CART
  cartContent = new Vue({
    el: '#cartList',
    data: {
      items: [],
    },
    methods: {
      remove: function (product_id) {
        removeProductIfFromCart(product_id);
      },
      incQuantity: function (product_id){
        incCart(product_id)
      },
      decQuantity: function (product_id){
        decCart(product_id)
      },
    }
  })

   //VUE CART Mobile
   cartContentMobile = new Vue({
    el: '#cartListMobile',
    data: {
      items: []
    },
    computed: {
      items: function () {
        return cartContent.items
      }
    },
    
    methods: {
      remove: function (product_id) {
        removeProductIfFromCart(product_id);
      },
      incQuantity: function (product_id){
        incCart(product_id)
      },
      decQuantity: function (product_id){
        decCart(product_id)
      },
    }
  })

  //GET PAGES FOR FOOTER
  getPages();

  //Payment Method switcher
  paymentTypeSwitcher();

  //Delivery type switcher
  deliveryTypeSwitcher();

  //For Dine in / takeout
  dineTypeSwitcher();

  //Activate address switcher
  deliveryAddressSwithcer();

  //Activate deliveryAreaSwithcer
  deliveryAreaSwithcer();


  //VUE FOOTER PAGES
  footerPages = new Vue({
      el: '#footer-pages',
      data: {
        pages: []
      }
  })

  //VUE COMPLETE ORDER TOTAL PRICE
  total = new Vue({
    el: '#totalSubmit',
    data: {
      totalPrice:0
    }
  })


  //VUE TOTAL
  cartTotal= new Vue({
    el: '#totalPrices',
    data: {
      totalPrice:0,
      deduct:0,
      deductFormat:"",
      minimalOrder:0,
      totalPriceFormat:"",
      deliveryPriceFormated:"",
      withDeliveryFormat:"",
      delivery:true,
    }
  })

  //VUE TOTAL Mobile
  cartTotalMobile= new Vue({
    el: '#totalPricesMobile',
    data: {
      totalPrice:0,
      deduct:0,
      deductFormat:"",
      minimalOrder:0,
      totalPriceFormat:"",
      deliveryPriceFormated:"",
      withDeliveryFormat:"",
      delivery:true,
    },
    computed: {
      totalPrice: function () {
        return cartTotal.totalPrice
      },
      deduct: function () {
        return cartTotal.deduct
      },
      deductFormat: function () {
        return cartTotal.deductFormat
      },
      minimalOrder: function () {
        return cartTotal.minimalOrder
      },
      totalPriceFormat: function () {
        if(cartTotal.totalPriceFormat){
          return cartTotal.totalPriceFormat
        }
        else {
          cartTotal.totalPriceFormat = 0;
          return cartTotal.totalPriceFormat;
        }
      },
      deliveryPriceFormated: function () {
        return cartTotal.deliveryPriceFormated
      },
      withDeliveryFormat: function () {
        return cartTotal.withDeliveryFormat
      },
      delivery: function () {
        return cartTotal.delivery
      }
    },
  })

  //Call to get the total price and items
  getCartContentAndTotalPrice();
  
  var addToCart1 =  new Vue({
    el:'#addToCart1',
    methods: {
        addToCartAct() {
            let hidden_cart_value = parseInt($("#total_in_cart").val());
            hidden_cart_value = parseInt(hidden_cart_value)  + parseInt($('#quantity').val());
            $("#total_in_cart").val(hidden_cart_value);
            // console.log("inside add to cart",total_price_on_checkout_button); 
            // console.log("the quantity without adding",$('#quantity').val());
            axios.post('/cart-add', {
                id: $('#modalID').text(),
                quantity: $('#quantity').val(),
                extras:extrasSelected,
                variantID:variantID
              })
              .then(function (response) {
                  if(response.data.status){
                    $('#productModal').modal('hide');
                    $("#theCartBottomButtonDiv").show();
                    // $("#total_in_cart").val($('#quantity').val());
                    $(".custom--cart").text(hidden_cart_value +"\t \t \t Checkout \t \t \t"+ total_price_on_checkout_button.toFixed(2) );
                    //$('#productModal').modal('close');
                    getCartContentAndTotalPrice();
                    if (TEMPLATE_USED== "defaulttemplate") { 
                      openNav();
                    }
                    
                    //$('#productModal').modal('close');
                  }else{
                    $('#productModal').modal('hide');
                    //$('#productModal').modal('close');
                    js.notify(response.data.errMsg,"warning");
                  }
              })
              .catch(function (error) {
                
              });
        },
    },
  })

  // Add to Cart for services

  var addToCart2 =  new Vue({
    el:'#addToCart2',
    methods: {
      addToCartActServiceItem() {
          // alert("vue js addtocartact");
            let hidden_cart_value_services = parseInt($("#total_in_cart_services").val());
            hidden_cart_value_services = parseInt(hidden_cart_value_services)  + parseInt($('#quantity').val());
            $("#total_in_cart_services").val(hidden_cart_value_services);
            
            axios.post('/cart-add-service-items', {
                id: $('#modalIDServices').text(),
                quantity: $('#quantity').val(),
                hours: 0,
                extras:extrasSelected,
                variantID:variantID,
                service_from:$("#service_from").val(),
                service_to:$("#service_to").val(),
                booking_day:$("#booking_day").val(),
                booking_idFk:$("#booking_idFk").val(),
                service_button_from:$("#service_button_from").val(),
                service_booked_on:$("#service_booked_on").val(),
                item_type:'services'
              })
              .then(function (response) {
                  if(response.data.status){
                    $(".slots_to_add").html('');
                    $('#serviceday1')[0]._flatpickr.clear();
                    $('#productModalServices').modal('hide');
                    $("#theCartBottomButtonDiv").show();
                    
                    $(".custom--cart").text(hidden_cart_value_services +"\t \t \t Checkout \t \t \t"+ total_price_on_checkout_button.toFixed(2) );
                    
                    getCartContentAndTotalPrice();
                    if (TEMPLATE_USED== "defaulttemplate") { 
                      openNav();
                    }
                  }else{
                    $('#productModalServices').modal('hide');
                    js.notify(response.data.errMsg,"warning");
                  }
              })
              .catch(function (error) {
                
              });
        },
    },
  })
  
}
