@extends('layouts.app')
@include('partials.meta_dynamic')
@section('content')

    <div class="container-fluid">
        <article>
            <div class="jumbotron">
                @if($blog->featured_image)
                <div class="col-md-12">
                    <img src="/images/featured_image/{{$blog->featured_image ? $blog->featured_image : ''}}" alt="{{str_limit($blog->title, 50)}}"
                    class="img-responsive featured_image"> <br/>
                </div>
                @endif

                <div class="col-md-12">
                    <h1>{{$blog->title}}</h1>
                </div>
                <div class="col-md-12">
                    <div class="btn-group">
                        <a class="btn btn-primary btn-xs pull-left btn-margin-right btn-margin-left" href="{{route('blog.edit',$blog->id)}}">Edit   </a>
                        <form action="{{route('blog.delete',$blog->id)}}" method="post">
                            {{method_field('delete')}}
                            @csrf
                            <button type="submit" class="btn btn-danger btn-xs pull-left"> Delete</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <p>{!! $blog->body !!}</p>
                <hr>
                <strong>Categories: </strong>
                @foreach($blog->category as $category)
                    <span><a href="{{route('categories.show',$category->slug)}}">{{$category->name}}</a></span>
                @endforeach
            </div>
        </article>

    </div>
@endsection
