<?php $__env->startSection('content'); ?>
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h4>Album</h4>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Home</a></li>
            <li class="breadcrumb-item active"> Album </li>
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
                            <h3 class="card-title"> <?php if(isset($item->id)): ?> Edit <?php else: ?> Add  <?php endif; ?> Album</h3>
                        </div>
                        <?php if(isset($item->id)): ?>
                        <form method="post"class="form-horizontal"  action="<?php echo e(route('albums.update',$item->id)); ?>" enctype="multipart/form-data">
                            <?php echo method_field('put'); ?>
                        <?php else: ?>
                            <form method="post"class="form-horizontal"  action="<?php echo e(route('albums.store')); ?>" enctype="multipart/form-data">
                        <?php endif; ?>
                        <?php echo csrf_field(); ?>
                            <div class="card-body">

                                <?php echo input(['name'=>'name','type'=>'text','class'=>'','label'=>'name','value'=>$item->name??old('name'),'class_input'=>''],$errors->toArray()['name']??''); ?>


                            </div>

                            <?php echo $__env->make('includes.photos', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                            
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->startSection('js'); ?>
<script src="<?php echo e(asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('adminlte/plugins/summernote/summernote-bs4.min.js')); ?>"></script>
<script>
    $(function () {
    // Summernote
    $('.summernote').summernote()
     CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
        mode: "htmlmixed",
        theme: "monokai"
    });
    })
</script>

<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp-7.4\htdocs\test\resources\views/admin/albums/create.blade.php ENDPATH**/ ?>