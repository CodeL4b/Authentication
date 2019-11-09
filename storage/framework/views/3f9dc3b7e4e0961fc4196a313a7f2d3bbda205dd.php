<?php $__env->startSection('content'); ?>
<?php echo $__env->make('pages.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
        
   

    <div class="content">
        <div class="links">
            <a href="<?php echo e(url('post')); ?>">Post</a>
            <a href= "<?php echo e(url('category')); ?>" >Category</a>
        </div>
    </div>


<?php echo $__env->make('pages.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\Auth\resources\views/home.blade.php ENDPATH**/ ?>