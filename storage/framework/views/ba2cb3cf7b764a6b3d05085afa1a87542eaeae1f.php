<?php $__env->startPush('css'); ?>

<link href="<?php echo e(asset('assets/frontend/single-post-1/css/styles.css')); ?>" rel="stylesheet">

<link href="<?php echo e(asset('assets/frontend/single-post-1/css/responsive.css')); ?>" rel="stylesheet">

<?php $__env->stopPush(); ?>




<?php $__env->startSection('content'); ?>
<section class="post-area section">
		<div class="container">

			<div class="row">

				<div class="col-lg-8 col-md-12 no-right-padding">

					<div class="main-post">

						<div class="blog-post-inner">

							<div class="post-info">

								<!-- <div class="left-area">
									<a class="avatar" href="#"><img src="<?php echo e(asset('assets/backend/images/user.png')); ?>" alt="Profile Image"></a>
								</div> -->
                                <h6 class="date">Created on <?php echo e($post->created_at->diffForHumans()); ?></h6>

								<!-- <div class="middle-area">
									<a class="name" href="#"><b>'Israfil Sk'</b></a>
								</div> -->

							</div><!-- post-info -->

							<h3 class="title"><a href="#"><b><?php echo e($post->title); ?></b></a></h3>

							<div class="para">
                            <?php echo html_entity_decode($post->body); ?>



                            </div>

							

					
						</div><!-- blog-post-inner -->

					</div><!-- main-post -->
				</div><!-- col-lg-8 col-md-12 -->
<div class="col-lg-4 col-md-12 no-left-padding">

					<div class="single-post info-area">

						<div class="sidebar-area about-area">
                        <div class="blog-image"><img src="/storage/images/<?php echo e($post->image); ?>" alt="Blog Image"></div>
                        <p>Cover Image</p>

						</div>			

					</div><!-- info-area -->

				</div><!-- col-lg-4 col-md-12 -->
                
			
			</div><!-- row -->

		</div><!-- container -->
	</section><!-- post-area -->


	<section class="recomended-area section">
		<div class="container">
			<div class="row">

                <?php $__currentLoopData = $randomposts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $randompost): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <div class="col-lg-4 col-md-6">
					<div class="card h-100">
						<div class="single-post post-style-1">

							<div class="blog-image"><img src="/storage/images/<?php echo e($randompost->image); ?>" alt="Blog Image"></div>

							<!-- <a class="avatar" href="#"><img src="images/icons8-team-355979.jpg" alt="Profile Image"></a> -->

							<div class="blog-info">

								<h4 class="title"><a href="<?php echo e(route('post.details',$randompost->id)); ?>"><b><?php echo e($randompost->title); ?></b></a></h4>

								

							</div><!-- blog-info -->
						</div><!-- single-post -->
					</div><!-- card -->
				</div><!-- col-md-6 col-sm-12 -->


                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
			</div><!-- row -->

		</div><!-- container -->
	</section>
    

<?php $__env->stopSection(); ?>





<?php $__env->startPush('js'); ?>


<?php $__env->stopPush(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>