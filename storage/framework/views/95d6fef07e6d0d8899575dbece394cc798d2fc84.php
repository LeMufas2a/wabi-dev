<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="card shadow border-0 mt-8">
            <div class="card-body text-center">
                <div class="justify-content-center text-center">
                    <lottie-player src="https://assets3.lottiefiles.com/packages/lf20_ltbqacam.json"  background="transparent"  speed="1"  style=" height: 200px;"  loop  autoplay></lottie-player>
                </div>
               
                <h3 class="display-2"><?php echo e(__("Let's pay")); ?></h3>
                <h1 class="mb-4">
                    <?php 
                        $currency=config('settings.cashier_currency');
                        $convert=config('settings.do_convertion');
                    ?>
                    <span class="badge badge-primary"><?php echo e(__('Order')." #".$order->id); ?></span>
                    <span class="badge badge-primary"><?php echo money($order->delivery_price+$order->order_price_with_discount, $currency,true); ?></span>  
                    
                </h1>
                <div class="d-flex justify-content-center">
                    <div class="col-8">
                        <br >
                        <?php $__currentLoopData = $paymentMethods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a type="button"  href="<?php echo e(route("selectedpaymentt",["order"=>$order->id,'payment'=>$key])); ?>" role="button" class="btn btn-primary text-white"><?php echo e(__('Pay with')); ?> <?php echo e(__($name)); ?></a><br ><br >
                            
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <br ><br >
                        <div class="font-weight-300 mb-5">
                            <?php echo e(__("Thanks for your purchase")); ?>, 
                        <span class="h3"><?php echo e($order->restorant->name); ?></span></div>
                        <?php if(config('settings.wildcard_domain_ready')): ?>
                            <a href="<?php echo e($order->restorant->getLinkAttribute()); ?>" class="btn btn-outline-primary btn-sm"><?php echo e(__('Go back to restaurant')); ?></a>
                        <?php else: ?>
                            <a href="<?php echo e(route('vendor',$order->restorant->subdomain)); ?>" class="btn btn-outline-primary btn-sm"><?php echo e(__('Go back to restaurant')); ?></a>
                        <?php endif; ?>

                       
                            
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>






<?php echo $__env->make('layouts.app', ['title' => ''], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wabizz1/public_html/resources/views/orders/multypay.blade.php ENDPATH**/ ?>