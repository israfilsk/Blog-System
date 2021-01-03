<?php $__env->startSection('content'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/login.css')); ?>">
</head>
<body>
    <div class="container">
        <h1>LogIn Now</h1>
        <form action="log" method="POST">
            <?php echo e(csrf_field()); ?>

            <input type="email" name="email" class="input" placeholder="Email" required><br><br>
            <input type="password" name="password" class="input" placeholder="Password" required minlength='4' maxlength='20'><br><br>
            <button type="submit" class="submit-btn"><b>LogIn</b></button>
            <p>Don't have an account <span><a href="signup">SignUp</a></span></p>
        </form>
    </div>
<?php $__env->stopSection(); ?>   
</body>
</html>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>