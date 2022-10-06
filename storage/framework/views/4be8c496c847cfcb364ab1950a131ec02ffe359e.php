<?php $__env->startSection('content'); ?>
<style>
  tr:nth-child(even) {
background-color: WhiteSmoke;
}
</style>

<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h4><?php echo e(trans('cruds.view')); ?>  Albums</h4>
          <br>
        </div>
    <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>"><?php echo e(trans('cruds.home')); ?></a></li>
            <li class="breadcrumb-item"><a href="<?php echo e(route('albums.index')); ?>">Albums</a></li>
            <li class="breadcrumb-item active"><?php echo e(trans('cruds.view')); ?></li>
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
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped" >
                      <thead>
                        <?php echo th_view( $item->id,'id'); ?>

                            <?php echo th_view( $item->name,'name'); ?>

                        <tr><th><?php echo e(trans('cruds.created_at')); ?></th><td><?php echo e($item->created_at); ?></td></tr>
                      </thead>
                    </table>

                    <div class="form-group row col-12">
                      <?php if(isset($item)): ?>
                      <?php $__currentLoopData = $item->photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
                      <div class="card" style="width: 18rem; margin-left: 40px">
                          <img class="card-img-top" width="160" height="160" src="<?php echo e($photo->path); ?>" alt="Card image cap">
                          <div class="card-body">
                            <h5 class="card-title"><?php echo e($photo->name); ?></h5><br><br>
                            <a href="<?php echo e(route('photos.delete',$photo->id)); ?>" class="btn btn-primary">Remove</a>
                          </div>
                        </div>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      <?php endif; ?>
                  </div>
            </div>
        </div>
    </div>
        </div>
      </div>
    </div>
  </section>
  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp-7.4\htdocs\test\resources\views/admin/albums/show.blade.php ENDPATH**/ ?>