<div class="form-group text-center">
    <label class="form-control-label" for="input-name"><?php echo e($image['label']); ?></label>
    <?php if(isset($image['help'])): ?>
       <br /> <span class="small"><?php echo e($image['help']); ?></span>
    <?php endif; ?>
    <div class="text-center">
        <div class="fileinput fileinput-new" data-provides="fileinput">
            <div class="fileinput-preview img-thumbnail" data-trigger="fileinput" style="<?php echo e($image['style']); ?>">
<<<<<<< HEAD
              <img src="<?php echo e($image['value']); ?>" alt="..."/> 
              
=======
              <img id="previewImg" class="<?php echo e($image['name']); ?>" src="<?php echo e($image['value']); ?>" alt="..." /> 
              <div class="gallery"></div>
>>>>>>> akhtar
        </div>
            <div>
                <span class="btn btn-outline-secondary btn-file">
                <span class="fileinput-new" ><?php echo e(__('Select image')); ?></span>
                <span class="fileinput-exists"><?php echo e(__('Change')); ?></span>
                
               
<<<<<<< HEAD
                <input type="file" name="<?php echo e($image['name']); ?>" accept="image/x-png,image/gif,image/jpeg">
=======
                <input type="file" id="imgfile" name="<?php echo e($image['name']); ?>" accept="image/x-png,image/gif,image/jpeg">
>>>>>>> akhtar
                </span>
                <a href="#" class="btn btn-outline-secondary fileinput-exists" data-dismiss="fileinput"><?php echo e(__('Remove')); ?></a>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /home/wabizz1/public_html/resources/views/partials/images.blade.php ENDPATH**/ ?>