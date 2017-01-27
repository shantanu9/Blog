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
        <div class="Post">
          <h3>Post Title</h3>
          <p>mdvkmsdv
          dsvkdmvksf
          sdvmksmb</p>
          <a href="#" class="btn btn-primary">Read more</a>
        </div>
        <hr>

        <div class="Post">
          <h3>Post Title</h3>
          <p>mdvkmsdv
          dsvkdmvksf
          sdvmksmb</p>
          <a href="#" class="btn btn-primary">Read more</a>
        </div>
        <hr>

        <div class="Post">
          <h3>Post Title</h3>
          <p>mdvkmsdv
          dsvkdmvksf
          sdvmksmb</p>
          <a href="#" class="btn btn-primary">Read more</a>
        </div>
        <hr>

      </div>


      <div class="col-md-3 col-md-offst-1">
        <h2>Sidebar</h2>
        mdvkmsdv
        dsvkdmvksf
        sdvmksmb
      </div>
    </div>
@endsection
