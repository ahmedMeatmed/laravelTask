@extends('layouts.app')
@section('title') Posts @endsection
@section('content')

<div class="text-center mt-4">
<a href="{{route('posts.create')}}" class="btn btn-success">CreatePost</a>
</div>
<div class="m-auto mt-4 " >
    <table class="table" style="margin-left:2em;">
    <thead>
        <tr>
        <th scope="col">id</th>
        <th scope="col">Title</th>
        <th scope="col">description</th>
        <th scope="col">CreatedAt</th>
        <th scope="col">UpdatedAt</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post )
        
        <tr>
            <th scope="row">{{$post->id}}</th>
            <td>{{$post->title}}</td>
            <td>{{$post->description}}</td>
            <td>{{$post->created_at}}</td>
            <td>{{$post->updated_at}}</td>
            <td>
              <!--/posts/{{$post['id']}} -->
            <a href="{{route('posts.show',$post->id)}}"><button type="button" class="btn btn-success">View</button></a>
            <a href="{{route('posts.edit',$post->id)}}"><button type="button" class="btn btn-primary">Edit</button></a>
            <form action="{{route('posts.destroy',$post->id)}}" method="post" style="display: inline-block;">
              @csrf
              @method('delete')  
                <a href="{{route('posts.index',$post['id'])}}">
                  <button  type="submit" class="btn btn-danger" 
                  onclick="alert('do you want to delete post')">
                  Delete
                </button></a>
            </form>
            </td>
        </tr>

        @endforeach
    </tbody>
    </table>
</div>

@endsection



