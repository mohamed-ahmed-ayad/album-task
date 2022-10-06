<?php $__env->startSection('content'); ?>



<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">          
        <h1>Albums</h1>
        <br>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item">
            <a href="<?php echo e(route('home')); ?>">Home</a>
          </li>
          <li class="breadcrumb-item active">Albums</li>
        </ol>
      </div>
      <div style="padding:33px" class="col-md-12 card ">
        <div class="FormExtended ">
          <a href="javascript:$('#filterform').slideToggle('fast');void(0);" class="Filter_Me filter-ico btn btn-block btn-info btn-sm openCloseFilters  col-3">Show/Hide Filters </a>
          <form method="get" accept-charset="utf-8" id="filterform" class="" style="display:none;" admin="1" role="form" action="<?php echo e(route('albums.index')); ?>">
            <div class="row">  
              <div class="form-group m-1" >
                <label>name</label>
                <input class="form-control" name="name" type="text" value="<?php echo e(request('name')); ?>">
              </div>
            </div>
            <div class="row"> 
              <div class="form-group m-1">
                <input class="form-control btn btn-block btn-primary " name="submit" type="submit" value="Filter">
              </div>
              <div class="form-group m-1 ">
                <a href="<?php echo e(route('albums.index')); ?>" class="btn btn-block btn-success">Clear</a>
              </div>
            </div>
          </form>
        </div>
      </div>
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
              <h4> Albums </h4>  
            </div>
            <div class="col-1">
              <a href="<?php echo e(route('albums.create')); ?>" class="btn btn-block btn-primary ">Add New </a>
            </div>
          </div>
          <hr>
          <div class="card-body">
            <?php echo table($items,['id','name'],'albums',['view','edit','delete','deleteMulti']); ?> 
              <br>
              <?php echo e($items->appends(request()->except('page'))); ?>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    
  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp-7.4\htdocs\test\resources\views/admin/albums/index.blade.php ENDPATH**/ ?>