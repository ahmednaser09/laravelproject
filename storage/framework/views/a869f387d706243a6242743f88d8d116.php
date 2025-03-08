
<?php echo $__env->make('include.top', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>




<div class="container-scroller">

    
    <?php echo $__env->make('include.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    

    <div class="container-fluid page-body-wrapper">

        
        <?php echo $__env->make('include.todo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        

        
        <?php echo $__env->make('include.side', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        
        <?php echo $__env->yieldContent('content'); ?>
    </div>


</div>


<?php echo $__env->make('include.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>





<?php echo $__env->make('include.bottom', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php /**PATH C:\Users\user\Desktop\laravelproject\resources\views/home.blade.php ENDPATH**/ ?>