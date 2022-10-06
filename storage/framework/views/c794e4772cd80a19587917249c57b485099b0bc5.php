
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
          <h4>   <?php echo e($item->name); ?></h4>
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
          <div class="row">

            <div class="col-3">
            
                <form action="<?php echo e(route('album.assignPhoto')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                     <br>
                    <select name="album_id" class="form-control">
                        <?php $__currentLoopData = $albums; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $album): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($album->id); ?>"><?php echo e($album->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                <br>
                <input type="hidden" name="deleted_album" value="<?php echo e($item->id); ?>">
    
                <button type="submit" class="btn btn-block btn-primary ">Assign And Delete </button>
            </div>
            <div class="col-3">
            
                <form action="<?php echo e(route('album.deleteWithPhoto')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                     <br>
                    
                <input type="hidden" name="deleted_album" value="<?php echo e($item->id); ?>">
                <button type="submit" class="btn btn-block btn-danger "> Delete Photo And Album </button>
            </div>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped" >
                      <thead>
                        <?php echo th_view( $item->id,'id'); ?>

                            <?php echo th_view( $item->name,'name'); ?>

                        <tr><th><?php echo e(trans('cruds.created_at')); ?></th><td><?php echo e($item->created_at); ?></td></tr>
                      </thead>
                    </table>


                  </div>
            </div>
        </div>
    </div>
        </div>
      </div>
    </div>
  </section>
  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp-7.4\htdocs\test\resources\views/admin/albums/delete.blade.php ENDPATH**/ ?>