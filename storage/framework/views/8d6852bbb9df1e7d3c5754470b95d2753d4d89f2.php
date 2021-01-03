<?php $__env->startPush('css'); ?>

<?php $__env->stopPush(); ?>


<?php $__env->startSection('content'); ?>

<h2>Edit Post</h2>
<?php echo Form::open(['action'=>['PostController@update',$post->id], 'method'=>'POST', 'enctype'=>'multipart/form-data']); ?>

    <div class="form-group">
        <?php echo e(Form::label('title','Title')); ?>

        <?php echo e(Form::text('title',$post->title,['class'=>'form-control','placeholder'=>'Title'])); ?>

    </div>
    <div class="form-group">
        <?php echo e(Form::label('image','Featured Image')); ?>

        <?php echo e(Form::file('image')); ?>

    </div>
    <div class="form-group">
        <?php echo e(Form::label('body','Body')); ?>

        <?php echo e(Form::textarea('body',$post->body,['id'=>'article-ckeditor','class'=>'form-control'])); ?>

    </div>
    <?php echo e(Form::hidden('_method','PUT')); ?>


    <?php echo e(Form::submit('UPDATE', ['class'=>'btn btn-primary'])); ?>

    <a href="<?php echo e(route('post.index')); ?>" class="btn btn-danger">BACK</a>

    
<?php echo Form::close(); ?>


<?php $__env->stopSection(); ?>




<?php $__env->startPush('js'); ?>



<?php $__env->stopPush(); ?>
<?php echo $__env->make('dash', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>