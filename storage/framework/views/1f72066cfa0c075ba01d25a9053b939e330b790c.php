<?php if(strlen(auth()->user()->cancel_url)>5): ?>
    <div class="card-footer py-4">
        <form id="form-subscription-actions" action="<?php echo e(route('paypal.subscription.actions')); ?>" method="post" >
            <?php echo csrf_field(); ?>
            <button class="btn btn-danger btn-sub-actions"  type="submit" id="action" name="action" value=""><?php echo e(__('Cancel subscription')); ?></button>
        </form>
    </div>  
<?php endif; ?>
<?php /**PATH /home/wabizz1/public_html/modules/PaypalSubscribe/Providers/../Resources/views/actions.blade.php ENDPATH**/ ?>