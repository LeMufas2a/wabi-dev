<?php if(strlen(auth()->user()->cancel_url)>5): ?>
    <div class="card-footer py-4">
        <a href="<?php echo e(auth()->user()->update_url); ?>" target="_blank" class="btn btn-warning"><?php echo e(__('Update subscription')); ?></a>
        <a href="<?php echo e(auth()->user()->cancel_url); ?>" target="_blank" class="btn btn-danger"><?php echo e(__('Cancel subscription')); ?></a>
    </div>  
<?php endif; ?>
<?php /**PATH /home/wabizz1/public_html/modules/PaddleSubscribe/Providers/../Resources/views/actions.blade.php ENDPATH**/ ?>