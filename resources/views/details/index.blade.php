@extends('layouts.app')

@section('css')
  <link rel="stylesheet" href="{{asset('/css/blog-post.css')}}">
@endsection

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-8">
    <h1 class="mt-4">{{$complaint->title}}</h1>
    <p class="lead">by <a href="#">{{$complaint->author}}</a></p>
    <hr>
    <p>Posted on {{$complaint->created_at->format('F d, Y \a\t h:iA')}}</p>
    <hr>
    <p class="card-header">{{$complaint->body}}</p>
    @if($errors->has('message'))
    <div class="alert alert-danger">
      {{$errors->first('message')}}
    </div>
    @endif

    <div class="card my-4">
      <div class="card-header">Leave a comment:</div>
        <div class="card-body">
          @auth
          <form action="#" method="POST">
            @csrf
            <div class="form-group">
              <textarea name="message" rows="5" class="form-control {{$errors->has('message') ? 'is-invalid':''}}"></textarea>
              <div class="invalid-feedback">{{$errors->first('message')}}</div>
            </div>
            <button type="submit" class="btn btn-primary"> Post Comment</button>
          </form>
          @endauth
        @guest
          <div class="card-text"><a href="{{url('/login')}}">Login</a> or <a href="{{url('/register')}}">register</a> to post comment.</div>
        @endguest
      </div>
    </div>
</div>

<!-- Sidebar Widgets Column -->
<div class="col-md-4">

<!-- Side Widget -->
<div class="card my-4">
  <h5 class="card-header">Complaint Details:</h5>
  <div class="card-body">
    <span>Name: {{$complaint->author}}</span>
    <span>Posted on: {{$complaint->created_at->format('F d, Y \a\t h:iA')}}</span>
    Received by: -
    Updated on: {{$complaint->updated_at->format('F d, Y \a\t h:iA')}}
    Status: -
  </div>
</div>

</div>
</div>
</div>

@endsection
