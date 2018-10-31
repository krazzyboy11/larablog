@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="jumbotron">
            @if(Auth::user() && Auth::user()->role_id === 1)
                <h1>Admin Dashboard</h1>
            @elseif(Auth::user() && Auth::user()->role_id === 2)
                <h1>Author Dashboard</h1>
            @elseif(Auth::user() && Auth::user()->role_id === 3)
                <h1>subscriber Dashboard</h1>
            @endif

        </div>
        <div class="col-md-12">
            @if(Auth::user() && Auth::user()->role_id === 1)
                <a href="{{route('blogs.create')}}" class="btn btn-primary btn-margin-right">Create Blog</a>
                <a href="{{route('blog.trash')}}" class="btn btn-primary btn-margin-right">Trashed Blogs</a>
                <a href="{{route('categories.create')}}" class="btn btn-success btn-margin-right">Create Categories</a>
            @elseif(Auth::user() && Auth::user()->role_id === 2)
                <a href="{{route('blogs.create')}}" class="btn btn-primary btn-margin-right">Create Blog</a>
                <a href="{{route('categories.create')}}" class="btn btn-success btn-margin-right">Create Categories</a>
            @elseif(Auth::user() && Auth::user()->role_id === 3)

            @endif
        </div>
    </div>
@endsection
