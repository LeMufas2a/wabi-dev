<?php $__env->startSection('js'); ?>
<script src="https://gumroad.com/js/gumroad.js"></script>
<script src="https://cdn.paddle.com/paddle/paddle.js"></script>
<script type="text/javascript">
	Paddle.Setup({ 
        vendor: 49978,
         });
</script>
<script>
    var  email="<?php echo e(auth()->user()->email); ?>";
    function openPaddle(id){
        Paddle.Checkout.open({
			product: id,
			email: email
		});
    }
    function showPlugins(filterPlugins){
        $('.plugin-all').hide();
        var toShow='.plugin-'+filterPlugins;
        $(toShow).show();
    }
</script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
</div>
<div class="container-fluid mt--9">
    <div class="row">
        <div class="col-xl-12 order-xl-1">
            <div class="card bg-secondary shadow">
                <div class="card-header bg-white border-0">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <h3 class="mb-0"><?php echo e(__('Apps')); ?></h3>
                            <p><?php echo e(__('Apps from community are not part of the All-Access Pass.')); ?></p>
                        </div>
                        <?php if(config('settings.is_demo') | config('settings.is_demo')): ?> 
                        <div class="col-6 text-right">
                            <a  onclick="alert('Disabled in demo')" class="btn btn-sm btn-success text-white"><?php echo e(__('Add new')); ?></a>
                        </div>
                        <?php else: ?>
                            <div class="col-6 text-right">
                                <a  onclick="$('#appupload').click();" class="btn btn-sm btn-success text-white"><?php echo e(__('Add new')); ?></a>
                            </div>
                        <?php endif; ?>
                        
                    </div>
                </div>
                <div class="card-body">
                    
                    <ul class="nav nav-pills nav-fill flex-column flex-sm-row" id="tabs-text" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link mb-sm-3 mb-md-0 active" onclick="showPlugins('all')" id="tabs-text-1-tab" data-toggle="tab" href="#tabs-text-1" role="tab" aria-controls="tabs-text-1" aria-selected="true"><?php echo e(__('All')); ?></a>
                        </li>
                         <li class="nav-item">
                          <a class="nav-link mb-sm-3 mb-md-0"  onclick="showPlugins('installed')" id="tabs-text-2-tab" data-toggle="tab" href="#tabs-text-2" role="tab" aria-controls="tabs-text-2" aria-selected="false"><?php echo e(__('Installed')); ?></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link mb-sm-3 mb-md-0"  onclick="showPlugins('tools')" id="tabs-text-2-tab" data-toggle="tab" href="#tabs-text-2" role="tab" aria-controls="tabs-text-2" aria-selected="false"><?php echo e(__('Tools')); ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0"  onclick="showPlugins('themes')" id="tabs-text-3-tab" data-toggle="tab" href="#tabs-text-t" role="tab" aria-controls="tabs-text-t" aria-selected="false"><?php echo e(__('Themes')); ?></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link mb-sm-3 mb-md-0"  onclick="showPlugins('payments')"  id="tabs-text-3-tab" data-toggle="tab" href="#tabs-text-3" role="tab" aria-controls="tabs-text-3" aria-selected="false"><?php echo e(__('Payments')); ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0" onclick="showPlugins('subscriptions')" id="tabs-text-3-tab" data-toggle="tab" href="#tabs-text-3" role="tab" aria-controls="tabs-text-3" aria-selected="false"><?php echo e(__('Subscriptions')); ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0" onclick="showPlugins('apps')" id="tabs-text-3-tab" data-toggle="tab" href="#tabs-text-3" role="tab" aria-controls="tabs-text-3" aria-selected="false"><?php echo e(__('Mobile apps')); ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0" onclick="showPlugins('languages')" id="tabs-text-3-tab" data-toggle="tab" href="#tabs-text-3" role="tab" aria-controls="tabs-text-3" aria-selected="false"><?php echo e(__('Languages')); ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0"  onclick="showPlugins('community')" id="tabs-text-3-tab" data-toggle="tab" href="#tabs-text-3" role="tab" aria-controls="tabs-text-3" aria-selected="false"><?php echo e(__('Community')); ?></a>
                        </li>
                      </ul>
                      <hr />
                    
                    <?php echo $__env->make('partials.flash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <form method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div style="display: none">
                            <input name="appupload" type="file" class="" id="appupload" accept=".zip,.rar,.7zip"   onchange="form.submit()">
                        </div>
                    </form>

                    <div class="row">
                        <?php if(empty($apps)): ?>
                        <p>
                            <?php echo e(__("There are no apps at the moment")); ?>

                        </p>
                        <?php endif; ?>
                        <?php $__currentLoopData = $apps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $app): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 mt-3 plugin-all <?php if($app->installed): ?> <?php echo e('plugin-installed'); ?> <?php endif; ?> <?php  foreach ($app->category as $cat){echo "plugin-".$cat." ";} ?>">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="<?php echo e($app->image); ?>" alt="<?php echo e($app->name); ?>">
                                <div class="card-body">
                                <h5 class="card-title"><?php echo e($app->name); ?> <?php if($app->installed): ?><span class="small text-green"><?php echo e(__('installed')); ?> v<?php echo e($app->version); ?></span><?php endif; ?></h5>
                                <p class="card-text"><?php echo e($app->description); ?></p>
                                <?php if($app->installed): ?>
                                    <a href="<?php echo e(route('settings.index')); ?>" class="btn btn-sm btn-outline-success"><?php echo e(__('Settings')); ?></a>
                                    <?php if($app->updateAvailable): ?>
                                        <a target="_blank" href="<?php echo e($app->link); ?><?php if(strlen(config('settings.extended_license_download_code'))>0): ?>/<?php echo e(config('settings.extended_license_download_code')); ?><?php endif; ?>" class="btn btn-sm btn-outline-primary"><?php echo e(__('Update available')); ?></a>
                                    <?php endif; ?>
                                    <a href="<?php echo e(route('apps.remove',[$app->alias])); ?>" class="btn btn-sm btn-outline-danger"><?php echo e(__('Delete')); ?></a>
                                    <?php if($app->price=="Free"): ?>
                                        <p class="card-text mt-2"><?php echo e(__('Price')); ?>: 0$</p>
                                    <?php else: ?>
                                        <p class="card-text mt-2"><?php echo e(__('Price')); ?>: <?php echo e($app->price); ?></p>
                                    <?php endif; ?>
                                <?php else: ?>
                                <?php if(isset($app->gr)): ?>
                                    <?php if(strlen(config('settings.extended_license_download_code'))>0): ?>
                                        <a class="gumroad-button" href="https://gumroad.com/l/<?php echo e($app->gr); ?>/<?php echo e(config('settings.extended_license_download_code')); ?>">
                                    <?php else: ?>
                                        <a class="gumroad-button" href="https://gumroad.com/l/<?php echo e($app->gr); ?>">
                                    <?php endif; ?>
                                    
                                        <?php if($app->price=="Free"): ?>
                                            <?php echo e(__('Download for free')); ?>

                                        <?php else: ?>
                                            <?php echo e(__('Buy now')." - ".$app->price); ?>

                                        <?php endif; ?>
                                    </a> 
                                 
                                <?php elseif(isset($app->paddle)): ?>
                                    <a style="color:#ffffff" onclick="openPaddle(<?php echo e($app->paddle); ?>)" class="btn btn-primary"><?php echo e(__('Buy now')." - ".$app->price); ?></a>
                                    
                                <?php else: ?>
                                    <a target="_blank" href="<?php echo e($app->link); ?>" class="btn btn-primary"><?php echo e(__('Buy now')." - ".$app->price); ?></a>
                                <?php endif; ?>
                               
                                <?php endif; ?>
                                
                                </div>
                            </div>  
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', ['title' => __('Settings')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wabizz1/public_html/resources/views/apps/index.blade.php ENDPATH**/ ?>