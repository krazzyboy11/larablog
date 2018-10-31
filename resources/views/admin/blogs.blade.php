@extends('layouts.app')

@section('content')
    @include('partials.meta_static')
    <div class="container-fluid">
        <div class="jumbotron">
            <h1>Manage Blogs</h1>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h3>Published Blog</h3>
                <hr>
                @foreach($publishedBlogs as $blog)
                    <h2><a href="{{route('blog.show',$blog->id)}}">{{$blog->title}}</a></h2>
                    <p>{{ str_limit(strip_tags($blog->body),100) }} </p>
                    <form action="{{route('blog.update',$blog->id)}}" method="post">
                    {{method_field('patch')}}
                    @csrf
                        <input type="checkbox" name="status" value="0" checked style="display: none">
                        <button type="submit" class="btn btn-success btn-xs">Save as Draft</button>
                    </form>

                @endforeach
            </div>
            <div class="col-md-6">
                <h3>Draft</h3>
                <hr>
                @foreach($draftBlogs as $blog)
                    <h2><a href="{{route('blog.show',$blog->id)}}">{{$blog->title}}</a></h2>
                    {{--<p>{{ str_limit(strip_tags($blog->body),100) }} </p>--}}
                    <form action="{{route('blog.update',$blog->id)}}" method="post">
                        {{method_field('patch')}}
                        @csrf
                        <input type="checkbox" name="status" value="1" checked style="display: none">
                        <button type="submit" class="btn btn-success btn-xs">Publish</button>
                    </form>

                @endforeach
            </div>
        </div>

    </div>

@endsection
