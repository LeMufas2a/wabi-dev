<ul class="navbar-nav">
    <?php if(config('app.ordering')): ?>
       <?php if(in_array("poscloud", config('global.modules',[]))): ?>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('home')); ?>">
                    <i class="ni ni-tv-2 text-primary"></i> <?php echo e(__('POS')); ?>

                </a>
            </li>
        <?php endif; ?>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('orders.index')); ?>">
                <i class="ni ni-basket text-orangse"></i> <?php echo e(__('Orders')); ?>

            </a>
        </li>
    <?php endif; ?>

</ul>
<?php /**PATH /home/wabizz1/public_html/resources/views/layouts/navbars/menus/staff.blade.php ENDPATH**/ ?>