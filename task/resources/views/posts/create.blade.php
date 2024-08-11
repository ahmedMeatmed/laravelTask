@extends('layouts.app')
@section('title')Create @endsection
@section('content')


<div class="m-auto mt-10 w-50">
    <form action="{{route('posts.store')}}" method="POST" class="mt-5 border p-3">
        @csrf
        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">title</span>
            <input type="text" name="title" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Description</span>
            <input type="text" name="description" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <select class="form-select" name="post_creator" aria-label="Default select example">
            <option selected>Post Creator</option>
            @foreach ($creators as $creator )

            <option value="{{$creator->id}}">{{$creator->name}}</option>
            
            @endforeach

        </select>
        <div class="text-center mt-4">
            <a href="{{route('posts.index')}}" >
                <button class="btn btn-success" type="submit">Create</button>
            </a>
        </div>
    </form>
</div>  

@endsection