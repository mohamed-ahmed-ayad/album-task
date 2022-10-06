<?php ($flag=0); ?>
<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if(request($d['name'])!=null): ?>
        <?php ($flag=1); ?>
    <?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__currentLoopData = $selectOption; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $select): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<?php if(request($select['name'])!=null): ?>
<?php ($flag=1); ?>
<?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<div style="padding:33px" class="col-md-12 card ">
    <div class="FormExtended ">
    <a href="javascript:$('#filterform').slideToggle('fast');void(0);" class="Filter_Me filter-ico btn btn-block btn-info btn-sm openCloseFilters  col-3"><?php echo e(trans('cruds.show/hide filters')); ?> </a>

    <?php if($flag==1): ?>
        <form method="get" accept-charset="utf-8" id="filterform" class="" style="display:;" admin="1" role="form" action="<?php echo e(route("$controller.index")); ?>">
    <?php else: ?>
        <form method="get" accept-charset="utf-8" id="filterform" class="" style="display:none;" admin="1" role="form" action="<?php echo e(route("$controller.index")); ?>">
    <?php endif; ?>

        <div class="row">  
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo input($d); ?>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <?php if(isset($selectOption)): ?>

            <?php $__currentLoopData = $selectOption; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $select): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <div class="form-group m-1">
               <label><?php echo e($select['label']); ?></label>
               <select name="<?php echo e($select['name']); ?>" class="form-control">
                    <?php $__currentLoopData = $select['item']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value=""><?php echo e($select['label']); ?></option>
                    <option value="<?php echo e($item[$select['key']]); ?>" <?php echo e($item[$select['key']] == request($select['name'])?'selected':''); ?> ><?php echo e($item[$select['value']]); ?></option>
                  
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </select>
           </div>


            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
          </div>
          
          <div class="row"> 
           
<div class="form-group m-1" ><input class="form-control btn btn-block btn-primary " name="submit" type="submit" value="<?php echo e(trans('cruds.filter')); ?>"></div>
       
           <div class="form-group m-1 "><a href="<?php echo e(route("$controller.index")); ?>" class="btn btn-block btn-success"><?php echo e(trans('cruds.clear')); ?></a></div>
           
             
            </div>
    </form>
     </div>
</div><?php /**PATH D:\xampp-7.4\htdocs\test\resources\views/includes/filter.blade.php ENDPATH**/ ?>