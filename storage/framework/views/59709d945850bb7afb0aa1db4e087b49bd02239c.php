<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo e(getConfig('site_name')); ?> | Log in</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="<?php echo e(asset('adminlte/plugins/fontawesome-free/css/all.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('adminlte/dist/css/adminlte.min.css')); ?>">
    <style type="text/css">
        body{
            background-image: url('/images/static/login-bg-min.png');
        }
    </style>

</head>
<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <!-- <a href="#"><?php echo e(getConfig('site_name')); ?></a> -->
            <a href="#"><img src="/images/static/login-logo.png"></a>
        </div>

        <div class="card">
            <?php echo $__env->yieldContent('content'); ?>
        </div>

    </div>
    <script src="<?php echo e(asset('adminlte/plugins/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('adminlte/dist/js/adminlte.min.js')); ?>"></script>
</body>
</html>


<?php /**PATH D:\xampp-7.4\htdocs\test\resources\views/layouts/auth.blade.php ENDPATH**/ ?>