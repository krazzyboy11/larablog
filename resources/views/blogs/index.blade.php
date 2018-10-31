@extends('layouts.app')

@section('content')
    @include('partials.meta_static')
    <div>
        @foreach($blogs as $blog)
            <h2><a href="{{route('blog.show',$blog->id)}}">{{$blog->title}}</a></h2>
            <p>{{ str_limit(strip_tags($blog->body),100) }} </p>

        @endforeach
    </div>

@endsection
