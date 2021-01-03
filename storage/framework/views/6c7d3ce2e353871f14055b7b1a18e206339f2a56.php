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

<h1>Hello  <?php echo e(Session::get('user')); ?> welcome to your profile</h1>

<?php $__env->stopSection(); ?>   
</body>
</html>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>