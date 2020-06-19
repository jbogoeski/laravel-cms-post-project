@extends('layouts.blog-home')

@section('content')

    <div class="col-md-8">

    @if($posts)

        @foreach($posts as $post)
            <h1 class="page-header">
                POSTS
                <small>Secondary Text</small>
            </h1>

            <!-- First Blog Post -->
            <h2>
                <a href="#">{{$post->title}}</a>
            </h2>
            <p class="lead">
                by <a href="index.php">{{$post->user->name}}</a>
            </p>
            <p><span class="glyphicon glyphicon-time"></span> {{$post->created_at->diffForHumans()}}</p>
            <hr>
            <img class="img-responsive" src="{{$post->photo->file}}" alt="">
            <hr>
            <p>{!! str_limit($post->body, 100) !!}</p>
            <a class="btn btn-primary" href="/post/{{$post->slug}}">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>


        @endforeach
    <hr>


    @endif

    <!-- Pagination -->

        <div class="row">
        
            <div class="col-sm-6 col-sm-offset-5">

                    {{$posts->render()}}

            </div>

        </div>



    </div>


@endsection
