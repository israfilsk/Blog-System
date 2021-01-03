<!-- 

<?php $__env->startSection('content'); ?> -->

<!-- <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div> -->
           


<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome to your profile</h1>


<?php $__env->stopSection(); ?>
</body>
</html> -->
<?php echo $__env->make('dash', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>