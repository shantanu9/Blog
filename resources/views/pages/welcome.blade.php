@extends('main')

@section('title','HomePage')

@section('content')

    <div class="row">
      <div class="col-mod-12">
        <div class="jumbotron">
          <h1>Hello, Welcome to my Blog!</h1>
          <p class="lead">Thank you so much for visiting . This is my test website built with laravel .</p>
          <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
        </div>
      </div>
    </div><!-- end of row-->

    <div class="row">
      <div class="col-md-8">
        @foreach ($posts as $post)

          <div class="Post">
              <h3>{{ substr($post->title, 0,300) }}{{ strlen($post->title) > 300 ? "...":"" }}</h3>
              <p> {{ substr($post->body, 0,300) }}{{ strlen($post->body) > 300 ? "...":"" }}</p>
              <a href="{{ url('blog/'.$post->slug)}}" class="btn btn-primary">Read more</a>
          </div>

        @endforeach
      </div>

      <div class="col-md-3 col-md-offst-1">
        <h2>Sidebar</h2>
        mdvkmsdv
        dsvkdmvksf
        sdvmksmb
      </div>
    </div>
@endsection
