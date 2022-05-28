  <style>
	@import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;700&display=swap');
    body{
      font-family: 'Ubuntu', sans-serif !important;
      font-weight: 700;
      color: #240c52;
    }
	.myUbuntu{
      font-family: 'Ubuntu', sans-serif !important;
      font-weight : 700; 
    }
    .myUbuntu3{
      font-family: 'Ubuntu', sans-serif !important;
      font-weight : 300; 
    }
    .myPurple{
     color: #240c52 !important;
   }
        h3{
      font-family: 'Ubuntu', sans-serif !important;
      font-weight : 700; 
    }
    
  </style>
<div class="d_p">
  

<div class="card card-profile shadow">
    <div class="px-4">
      <div class="mt-5">
        <h3 class="myUbuntu">{{ __('Delivery / Pickup') }}<span class="font-weight-light"></span></h3>
      </div>
      <div class="card-content border-top">
        <br />

        <div class="custom-control custom-radio mb-3 ">
          <input name="deliveryType" class="custom-control-input" id="deliveryTypeDeliver" type="radio" value="delivery" checked>
          <label class="custom-control-label myUbuntu3 myPurple" for="deliveryTypeDeliver">{{ __('Delivery') }}</label>
        </div>
        <div class="custom-control custom-radio mb-3">
          <input name="deliveryType" class="custom-control-input" id="deliveryTypePickup" type="radio" value="pickup">
          <label class="custom-control-label myUbuntu3 myPurple" for="deliveryTypePickup">{{ __('Pickup') }}</label>
        </div>

      </div>
      <br />
      <br />
    </div>
  </div>
