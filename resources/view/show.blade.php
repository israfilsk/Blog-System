@extends('dash')

@section('content')
<a href="{{ route('post.index') }}" class="btn btn-info">BACK</a>
<br><br>
<div>
    <div>
        <img src="/storage/images/{{$post->image}}" style="width:30%" alt="cover_image">
        <p>Cover Image</p>
    </div>
    <div>
        <h2>{{ $post->title }}</h2>
    </div>

    <div>
        {!! $post->body !!}
    </div>
    
</div>
    

@endsection