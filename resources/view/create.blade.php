@extends('dash')

@push('css')

@endpush


@section('content')

<h2>Create Post</h2>
{!! Form::open(['action'=>'PostController@store', 'method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('title','Title')}}
        {{Form::text('title','',['class'=>'form-control','placeholder'=>'Title'])}}
    </div>
    <div class="form-group">
        {{Form::label('image','Featured Image')}}
        {{Form::file('image')}}
    </div>
    <div class="form-group">
        {{Form::label('body','Body')}}
        {{Form::textarea('body','',['id'=>'article-ckeditor','class'=>'form-control'])}}
    </div>

    {{Form::submit('SUBMIT', ['class'=>'btn btn-primary'])}}
<a href="{{ route('post.index') }}" class="btn btn-danger">BACK</a>

    
{!! Form::close() !!}

@endsection




@push('js')



@endpush