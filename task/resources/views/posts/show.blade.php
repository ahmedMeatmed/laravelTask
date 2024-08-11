@extends('layouts.app')
@section('title')Show @endsection
@section('content')


  <div class="card">
  <h5 class="card-header">{{$posts->title}}</h5>
  <div class="card-body">
    <h5 class="card-title">PostedBy : {{$creators->name}}</h5>
    <p class="card-text"> {{$posts->description}}</p>
    <a href="{{route('posts.index')}}" class="btn btn-primary">Back To All Posts</a>
  </div>
</div>

@endsection
