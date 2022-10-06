<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo e(auth()->user()->photo); ?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?php echo e(auth()->user()->name??''); ?></a>
            </div>
        </div>
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append"><button class="btn btn-sidebar"><i class="fas fa-search fa-fw"></i></button></div>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="<?php echo e(route('home')); ?>" class="nav-link <?php echo e(in_array(Route::currentRouteName(),["home"]) ? 'active':''); ?>">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                         
                <li class="nav-item">
                    <a href="<?php echo e(route('albums.index')); ?>" class="nav-link <?php echo e(in_array(Route::currentRouteName(),["albums.index"]) ? 'active':''); ?>">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Albums</p>
                    </a>
                </li>
                         
                        

                        <li class="nav-item">
                            <form method="POST" action="<?php echo e(route('logout')); ?>"  accept-charset="UTF-8" id="form1">
                                <?php echo e(method_field('POST')); ?> <?php echo e(csrf_field()); ?>

                                <a  class="nav-link" href="#" onclick="document.getElementById('form1').submit();"><i class="fas fa-sign-out-alt"></i> <p><?php echo e(trans('cruds.logout')); ?></p></a>
                            </form>
                        </li>
              
            </ul>

            
        </nav>
    </div>
</aside><?php /**PATH D:\xampp-7.4\htdocs\test\resources\views/includes/sidebar.blade.php ENDPATH**/ ?>