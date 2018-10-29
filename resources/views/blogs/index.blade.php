@extends('layouts.app')

@section('content')
    <div>
        @foreach($blogs as $blog)
            <h2><a href="{{route('blog.show',$blog->id)}}">{{$blog->title}}</a></h2>
            <p>{{$blog->body}}</p>
        @endforeach
    </div>

@endsection
