<?php $__env->startSection('content'); ?>
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h4><?php echo e(trans('cruds.general-configurations')); ?></h4>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>"><?php echo e(trans('cruds.home')); ?></a></li>
            <li class="breadcrumb-item active"><?php echo e(trans('cruds.general-configurations')); ?></li>
          </ol>
        </div>
      </div>
    </div>
</section>
    <section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card card-info  ">
                        <div class="card-header">
                            <h3 class="card-title"> <?php if(isset($item->id)): ?><?php echo e(trans('cruds.edit')); ?> <?php else: ?> <?php echo e(trans('cruds.add')); ?> <?php endif; ?> <?php echo e(trans('cruds.general-configurations')); ?></h3>
                        </div>
                        <?php if(isset($item->id)): ?>
                        <form method="post"class="form-horizontal"  action="<?php echo e(route('general-configurations.update',$item->id)); ?>" enctype="multipart/form-data">
                            <?php echo method_field('put'); ?>
                        <?php else: ?>
                            <form method="post"class="form-horizontal"  action="<?php echo e(route('general-configurations.store')); ?>" enctype="multipart/form-data">
                        <?php endif; ?>
                                <?php echo csrf_field(); ?>
                            <div class="card-body">
                                <?php if($item->config_group=='file'): ?>
                                <?php echo input(['name'=>'value','type'=>'file','class'=>'','label'=>'value','value'=>'','class_input'=>''],$errors->toArray()['value']??''); ?>

                                <?php if(isset($item->value)): ?><img src="<?php echo e(asset($item->value)); ?>"  sizes="150" width="150" height="150"><?php endif; ?>
                                <?php else: ?>
                                    <?php echo input(['name'=>'value','type'=>'text','label'=>'value','value'=>$item['value']??old('value')],$errors->toArray()['value']??''); ?>                            
                                <?php endif; ?>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary"><?php echo e(trans('cruds.submit')); ?></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp-7.4\htdocs\test\resources\views/admin/general_configurations/create.blade.php ENDPATH**/ ?>