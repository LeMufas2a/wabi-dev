<script src="https://cdn.paddle.com/paddle/paddle.js"></script>    
<script type="text/javascript">
        "use strict";
        var paddleVendorID="<?php echo e(config('paddle-subscribe.paddlevendorid')); ?>";
        var currentUserEmail="<?php echo e(auth()->user()->email); ?>";
        Paddle.Setup({ vendor: parseInt(paddleVendorID)   });
        function openCheckout(product_id) {
            var form = document.getElementById('pre-checkout');
            Paddle.Checkout.open({
                product: product_id,
                email: currentUserEmail
            });
        }

        plans.forEach(plan => {
            
            if(plan.paddle_id != null && user.subscription_plan_id != plan.paddle_id){
                var buttonName="<?php echo e(__('Switch to ')); ?>"+plan.name;
                $('#button-container-plan-'+plan.id).append("<a href=\"javascript:openCheckout("+plan.paddle_id+")\" class=\"btn btn-primary\">"+buttonName+"</a>" );
            }
        });


    </script> <?php /**PATH /home/wabizz1/public_html/modules/PaddleSubscribe/Providers/../Resources/views/subscribe.blade.php ENDPATH**/ ?>