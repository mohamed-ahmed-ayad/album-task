<?php $__env->startSection('content'); ?>
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <?php echo index_header('general-configurations'); ?>

      <?php echo filter([["name"=>"label","type"=>"text","label"=>"label","value"=>request("label")]],'general-configurations'); ?>

    </div>
  </div>  
</section>
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card card-body">
          <div class="row">
            <div  class="FormExtended col-11">          
              <h4> <?php echo e(trans('cruds.general-configurations')); ?></h4>  
            </div>
          </div>
          <hr>
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <!-- <th><?php echo e(trans('cruds.id')); ?></th> -->
                <th><?php echo e(trans('cruds.label')); ?></th>
                <th><?php echo e(trans('cruds.value')); ?></th>
                <th><?php echo e(trans('cruds.action')); ?></th>
              </tr>
              </thead>
                <tbody>
                      <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <tr>
                            <!-- <td> <?php echo e($item->id??''); ?></td> -->
                            <td> <?php echo e($item->label??''); ?></td>
                            <td>
                              
                                <?php if($item->config_group=='file'): ?>
                                <img src="<?php echo e(asset($item->value)); ?>" width="100" height="100">
                                <?php else: ?>
                                  <?php echo e($item->value??''); ?>

                                <?php endif; ?>

                            </td>
                            <td>
                              <div class="btn-group">
                                  <button type="button" class="btn btn-default"><?php echo e(trans('cruds.action')); ?></button>
                                  <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                  </button>
                                  <div class="dropdown-menu" role="menu">
                                      <a class="dropdown-item" href="<?php echo e(route('general-configurations.edit',$item->id)); ?>" ><?php echo e(trans('cruds.edit')); ?></a>
                                </div>
                              </td>
                          </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
              <tfoot>
              <tr>
                  <!-- <th><?php echo e(trans('cruds.id')); ?></th> -->
                  <th><?php echo e(trans('cruds.label')); ?></th>
                  <th><?php echo e(trans('cruds.value')); ?></th>
                  <th><?php echo e(trans('cruds.action')); ?></th>
                </tr>
              </tfoot>
            </table>
          </div>
            
        </div>
      </div>
    </div>
  </div>
</section>
    
  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp-7.4\htdocs\test\resources\views/admin/general_configurations/index.blade.php ENDPATH**/ ?>