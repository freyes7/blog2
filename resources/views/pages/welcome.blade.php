@extends('main')

@section('name','- Welcome')
@section('content')
      <div class="row">
        <div class="col-md-12">
          <div class="jumbotron">
            <h1 class="display-3">Welcome to this blog</h1>
            <p class="lead">This is my first blog</p>
            <hr class="my-4">
            <p>Enjoy yourself</p>
            <p class="lead">
              <a class="btn btn-primary btn-lg" href="#" role="button">Latest post</a>
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8" >
          @foreach($posts as $post)
            <div class="post">
              <h3>
                {{$post->title}}
              </h3>
              <p>
                {{substr($post->body,0,300)}}{{strlen($post->body)>300?"...":""}}
              </p>  
              <a href="{{url('blog/'.$post->slug)}}" class="btn btn-primary">Read More</a>
            </div> 
            <hr>
          @endforeach  
        </div>
        <div class="col-md-3 col-md-offset-1" style="color:red;">
          <h2>Sidebar</h2>
        </div>
      </div>
  @stop