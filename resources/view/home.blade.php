
@extends('layout')



@push('css')
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">

	<!-- Stylesheets -->

<link href="{{ asset('assets/frontend/common-css/bootstrap.css') }}" rel="stylesheet">

<link href="{{ asset('assets/frontend/common-css/ionicons.css') }}" rel="stylesheet">

<link href="{{ asset('assets/frontend/layout-1/css/styles.css') }}" rel="stylesheet">

<link href="{{ asset('assets/frontend/layout-1/css/responsive.css') }}" rel="stylesheet">
    
@endpush



@section('content')
<section class="blog-area section">
		<div class="container">

			<div class="row">

				@foreach($posts as $post)
				<div class="col-lg-4 col-md-6">
					<div class="card h-100">
						<div class="single-post post-style-1">

							<div class="blog-image"><img src="/storage/images/{{$post->image}}" alt="Blog Image"></div>

							<!-- <a class="avatar" href="#"><img src="images/icons8-team-355979.jpg" alt="Profile Image"></a> -->

							<div class="blog-info">

								<h4 class="title"><a href="{{ route('post.details',$post->id) }}"><b>{{$post->title}}</b></a></h4>

								

							</div><!-- blog-info -->
						</div><!-- single-post -->
					</div><!-- card -->
				</div><!-- col-lg-4 col-md-6 -->
				@endforeach
				
			</div><!-- row -->
			
			
    			{{ $posts->links() }}
		
			
			<!-- <a class="load-more-btn" href="#"><b>LOAD MORE</b></a> -->
			


		</div><!-- container -->
		
	</section><!-- section -->




@endsection



@push('js')
<script src="{{ asset('assets/frontend/common-js/jquery-3.1.1.min.js') }}"></script>

<script src="{{ asset('assets/frontend/common-js/tether.min.js') }}"></script>

<script src="{{ asset('assets/frontend/common-js/bootstrap.js') }}"></script>

<script src="{{ asset('assets/frontend/common-js/scripts.js') }}"></script> 

    
@endpush
