@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="jumbotron">
            <h1>{{$category->name}}</h1>
            <div class="btn-group">
                <a href="{{route('categories.edit', $category->id)}}" class="btn btn-warning btn-sm btn-margin-right">Edit</a>

                <form action="{{route('categories.destroy', $category->id)}}" method="post">
                    {{method_field('delete')}}
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm pull-left">DELETE</button>
                </form>
            </div>
        </div>
        <div class="col-md-12">
            @foreach($category->blog as $blog)
                <div>
                    <h3><a href="{{route('blog.show',$blog->id)}}">{{$blog->title}}</a></h3>

                </div>
            @endforeach
        </div>
    </div>
@endsection
