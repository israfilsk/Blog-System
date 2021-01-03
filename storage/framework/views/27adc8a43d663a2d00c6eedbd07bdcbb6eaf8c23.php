<?php $__env->startPush('css'); ?>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">

	<!-- Stylesheets -->

<link href="<?php echo e(asset('assets/frontend/common-css/bootstrap.css')); ?>" rel="stylesheet">

<link href="<?php echo e(asset('assets/frontend/common-css/ionicons.css')); ?>" rel="stylesheet">

<link href="<?php echo e(asset('assets/frontend/layout-1/css/styles.css')); ?>" rel="stylesheet">

<link href="<?php echo e(asset('assets/frontend/layout-1/css/responsive.css')); ?>" rel="stylesheet">
    
<?php $__env->stopPush(); ?>



<?php $__env->startSection('content'); ?>
<section class="blog-area section">
		<div class="container">

			<div class="row">

				<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="col-lg-4 col-md-6">
					<div class="card h-100">
						<div class="single-post post-style-1">

							<div class="blog-image"><img src="/storage/images/<?php echo e($post->image); ?>" alt="Blog Image"></div>

							<!-- <a class="avatar" href="#"><img src="images/icons8-team-355979.jpg" alt="Profile Image"></a> -->

							<div class="blog-info">

								<h4 class="title"><a href="<?php echo e(route('post.details',$post->id)); ?>"><b><?php echo e($post->title); ?></b></a></h4>

								

							</div><!-- blog-info -->
						</div><!-- single-post -->
					</div><!-- card -->
				</div><!-- col-lg-4 col-md-6 -->
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				
			</div><!-- row -->
			
			
    			<?php echo e($posts->links()); ?>

		
			
			<!-- <a class="load-more-btn" href="#"><b>LOAD MORE</b></a> -->
			


		</div><!-- container -->
		
	</section><!-- section -->




<?php $__env->stopSection(); ?>



<?php $__env->startPush('js'); ?>
<script src="<?php echo e(asset('assets/frontend/common-js/jquery-3.1.1.min.js')); ?>"></script>

<script src="<?php echo e(asset('assets/frontend/common-js/tether.min.js')); ?>"></script>

<script src="<?php echo e(asset('assets/frontend/common-js/bootstrap.js')); ?>"></script>

<script src="<?php echo e(asset('assets/frontend/common-js/scripts.js')); ?>"></script> 

    
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>