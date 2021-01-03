<?php $__env->startSection('content'); ?>
<a href="<?php echo e(route('post.index')); ?>" class="btn btn-info">BACK</a>
<br><br>
<div>
    <div>
        <img src="/storage/images/<?php echo e($post->image); ?>" style="width:30%" alt="cover_image">
        <p>Cover Image</p>
    </div>
    <div>
        <h2><?php echo e($post->title); ?></h2>
    </div>

    <div>
        <?php echo $post->body; ?>

    </div>
    
</div>
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('dash', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>