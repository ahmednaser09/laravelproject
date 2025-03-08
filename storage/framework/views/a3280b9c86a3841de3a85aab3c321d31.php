

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>Document</title>
</head>
<body>
<?php echo $__env->make('layout.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>   

  
   <?php echo $__env->yieldContent('content'); ?>



</body>
</html><?php /**PATH C:\Users\user\laravel_test\resources\views/layout/layout.blade.php ENDPATH**/ ?>