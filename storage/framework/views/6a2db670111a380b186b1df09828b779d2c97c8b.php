<!-- ADD Category -->
<div class="modal fade" id="modal-items-category" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="modal-title-notification"><?php echo e(__('Add new category')); ?></h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body p-0">
                <div class="card bg-secondary shadow border-0">
                    <div class="card-body px-lg-5 py-lg-5">
<<<<<<< HEAD
                        <form role="form" method="post" action="<?php echo e(route('categories.store')); ?>">
=======
                        <form role="form" method="post" action="<?php echo e(route('categories.store')); ?>" enctype="multipart/form-data">
>>>>>>> ali
                            <?php echo csrf_field(); ?>
                            <input type="hidden" value="<?php echo e($restorant_id); ?>"  name="restaurant_id" />
                            <div class="form-group<?php echo e($errors->has('category_name') ? ' has-danger' : ''); ?>">
                                <input class="form-control" name="category_name" id="category_name" placeholder="<?php echo e(__('Category name')); ?> ..." type="text" required>
                                <?php if($errors->has('category_name')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('category_name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
<<<<<<< HEAD
=======

<<<<<<< HEAD
                            <div class="slim form-group<?php echo e($errors->has('item_image') ? ' has-danger' : ''); ?>" 
                                data-ratio="16:9"
                                data-size="1000,300"
                            >
                                <input type="file" id="imgfile" name="item_image">
=======
                            <div class="form-group<?php echo e($errors->has('item_image') ? ' has-danger' : ''); ?>" >
                                <input type="file" id="imgfile" name="item_image" accept="image/x-png,image/gif,image/jpeg">
>>>>>>> akhtar
                                <?php if($errors->has('item_image')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('item_image')); ?></strong>
                                    </span>
                                <?php endif; ?>
<<<<<<< HEAD

                                <!-- <input type="hidden" name="cat_image" id="cat_image"> -->
                            </div>

                            
=======
                            </div>

                            <div class="slim"
                                data-size="640,640"
                                data-service="async.php">
                                <input type="file" name="slim[]"/>
                            </div>
>>>>>>> akhtar
>>>>>>> ali
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary my-4"><?php echo e(__('Save')); ?></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- EDIT Category -->
<div class="modal fade" id="modal-edit-category" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="modal-title-notification"><?php echo e(__('Edit category')); ?></h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body p-0">
                <div class="card bg-secondary shadow border-0">
                    <div class="card-body px-lg-5 py-lg-5">
<<<<<<< HEAD
                        <form role="form" id="form-edit-category" method="post" action="">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('put'); ?>
=======
                        <form role="form" id="form-edit-category" method="post" action="" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('put'); ?>
<<<<<<< HEAD
                            
=======
>>>>>>> akhtar
>>>>>>> ali
                            <input name="cat_id" id="cat_id" type="hidden" required>
                            <div class="form-group<?php echo e($errors->has('category_name') ? ' has-danger' : ''); ?>">
                                <input class="form-control" name="category_name" id="cat_name" placeholder="<?php echo e(__('Category name')); ?> ..." type="text" required>
                                <?php if($errors->has('category_name')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('category_name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
<<<<<<< HEAD
=======
                            <div class="form-group text-center<?php echo e($errors->has('item_image') ? ' has-danger' : ''); ?>">
                                <label class="form-control-label" for="item_image"><?php echo e(__('Item Image')); ?></label>
                                <div class="text-center">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
<<<<<<< HEAD
                                        <div class="fileinput-preview img-thumbnail" data-trigger="fileinput" style="width: auto; height: auto;">
=======
                                        <div class="fileinput-preview img-thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
>>>>>>> akhtar
                                            <img id="previewImg" src="https://www.fastcat.com.ph/wp-content/uploads/2016/04/dummy-post-square-1-768x768.jpg" width="200px" height="150px" alt="..."/>
                                        </div>
                                    <div>
                                    <span class="btn btn-outline-secondary btn-file">
                                    <span class="fileinput-new"><?php echo e(__('Select image')); ?></span>
                                    <span class="fileinput-exists"><?php echo e(__('Change')); ?></span>
                                        <input type="file" id="imgfile" class="item_image" name="item_image" accept="image/x-png,image/gif,image/jpeg">
                                        <div class="gallery"></div>
                                    </span>
                                    <a href="#" class="btn btn-outline-secondary fileinput-exists" data-dismiss="fileinput"><?php echo e(__('Remove')); ?></a>
                                </div>
                                </div>
                                </div>
                            </div>
>>>>>>> ali
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary my-4"><?php echo e(__('Save')); ?></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- NEW Language -->
<div class="modal fade" id="modal-new-language" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="modal-title-notification"><?php echo e(__('Add new language')); ?></h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body p-0">
                <div class="card bg-secondary shadow border-0">
                    <div class="card-body px-lg-5 py-lg-5">
                        <form role="form" method="post" action="<?php echo e(route('admin.restaurant.storenewlanguage')); ?>">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" value="<?php echo e($restorant_id); ?>"  name="restaurant_id" />
                            <?php echo $__env->make('partials.select', ['class'=>"col-12", 'classselect'=>"noselecttwo",'name'=>"Language",'id'=>"locale",'placeholder'=>__("Select Language"),'data'=>config('config.env')[2]['fields'][0]['data'],'required'=>true], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary my-4"><?php echo e(__('Add new language')); ?></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="modal-new-item" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="modal-title-new-item"><?php echo e(__('Add new item')); ?></h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body p-0">
                <div class="card bg-secondary shadow border-0">
                    <div class="card-body px-lg-5 py-lg-5">
                        <form role="form" method="post" action="<?php echo e(route('items.store')); ?>" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="form-group<?php echo e($errors->has('item_name') ? ' has-danger' : ''); ?>">
                                <input class="form-control" name="item_name" id="item_name" placeholder="<?php echo e(__('Item name')); ?> ..." type="text" required>
                                <?php if($errors->has('item_name')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('item_name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                            <div class="form-group<?php echo e($errors->has('item_description') ? ' has-danger' : ''); ?>">
                                <textarea class="form-control" id="item_description" name="item_description" rows="3" placeholder="<?php echo e(__('Item description')); ?> ..." required></textarea>
                                <?php if($errors->has('item_description')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('item_description')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                            <div class="form-group<?php echo e($errors->has('item_price') ? ' has-danger' : ''); ?>">
                                <input class="form-control" name="item_price" id="item_price" placeholder="<?php echo e(__('Item Price')); ?> ..." type="number" step="any" required>
                                <?php if($errors->has('item_price')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('item_price')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                            <div class="form-group text-center<?php echo e($errors->has('item_image') ? ' has-danger' : ''); ?>">
                                <label class="form-control-label" for="item_image"><?php echo e(__('Item Image')); ?></label>
                                <div class="text-center">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-preview img-thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
<<<<<<< HEAD
                                            <img id="previewImg" src="https://www.fastcat.com.ph/wp-content/uploads/2016/04/dummy-post-square-1-768x768.jpg" width="200px" height="150px" alt="..."/>
=======
                                            <img id="previewImgItem" src="https://www.fastcat.com.ph/wp-content/uploads/2016/04/dummy-post-square-1-768x768.jpg" width="200px" height="150px" alt="..."/>
>>>>>>> ali
                                        </div>
                                    <div>
                                    <span class="btn btn-outline-secondary btn-file">
                                    <span class="fileinput-new"><?php echo e(__('Select image')); ?></span>
                                    <span class="fileinput-exists"><?php echo e(__('Change')); ?></span>
<<<<<<< HEAD
                                        <input type="file" name="item_image" onchange="previewFile(this)" accept="image/x-png,image/gif,image/jpeg">
=======
                                        <input type="file" id="imgfileItem" class="item_image" name="item_image" accept="image/x-png,image/gif,image/jpeg">
                                        <div class="gallery"></div>
>>>>>>> ali
                                    </span>
                                    <a href="#" class="btn btn-outline-secondary fileinput-exists" data-dismiss="fileinput"><?php echo e(__('Remove')); ?></a>
                                </div>
                                </div>
                                </div>
                            </div>
                            
                            
                            <input name="category_id" id="category_id" type="hidden" required>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary my-4"><?php echo e(__('Save')); ?></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-import-items" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="modal-title-new-item"><?php echo e(__('Import items from CSV')); ?></h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body p-0">
                <div class="card bg-secondary shadow border-0">
                    <div class="card-body px-lg-5 py-lg-5">
                        <div class="col-md-10 offset-md-1">
                        <form role="form" method="post" action="<?php echo e(route('import.items')); ?>" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="form-group text-center<?php echo e($errors->has('item_image') ? ' has-danger' : ''); ?>">
                                <label class="form-control-label" for="items_excel"><?php echo e(__('Import your file')); ?></label>
                                <div class="text-center">
                                    <input type="file" class="form-control form-control-file" name="items_excel" accept=".csv, .ods, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" required>
                                </div>
                            </div>
                            <input name="res_id" id="res_id" type="hidden" value="<?php echo e($restorant_id); ?>" required>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary my-4"><?php echo e(__('Save')); ?></button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\wabi-dev\resources\views/items/partials/modals.blade.php ENDPATH**/ ?>