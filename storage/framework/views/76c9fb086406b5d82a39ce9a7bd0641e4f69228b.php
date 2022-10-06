
<?php echo $__env->make('includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('includes.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="content-wrapper">
<?php if(session()->has('message') ): ?>
    <div class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo e(session('message')); ?>

    </div>
<?php endif; ?>


    <?php echo $__env->yieldContent('content'); ?>

</div>
<script>
window.setTimeout(function() {
$(".alert").fadeTo(5000, 0).slideUp(500, function(){
$(this).remove();
});
}, 2000);
</script>
<?php echo $__env->make('includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH D:\xampp-7.4\htdocs\test\resources\views/layouts/app.blade.php ENDPATH**/ ?>