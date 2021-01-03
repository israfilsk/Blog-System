<?php $__env->startSection('content'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <style>
    body{
    background-color: rgb(169, 189, 226);
    }
    </style>
</head>
<body>
    
<div>
<h1><marquee>Welcome To Laravel</marquee></h1>
</div>

<?php $__env->stopSection(); ?>    
</body>
</html>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>