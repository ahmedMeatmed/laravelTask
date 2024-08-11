<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Creator;

class PostsController extends Controller
{
    //
    public function index(){
        $posts = Post::all() ;
        return view('/posts.index',['posts'=>$posts]);
    }

    public function show($post){
        // $Post= new Post();
        $creator_id=Post::findOrFail($post)->creator_id;
        $posts = Post::findOrFail($post) ;
        $creators = Creator::findOrFail($creator_id);
        return view('/posts.show',['post'=>$post,'posts'=> $posts,'creators'=>$creators]);
    }



    public function create(){
        $creators = Creator::all();
        return view('posts.create',['creators'=>$creators]);
    }


    
    
    public function store(Request $request){
        
        // return ($request['title']);
        $post = new Post();
        $post->title        = $request->title;
        $post->description  = $request->description;
        $post->creator_id   = $request->post_creator;
        
        $post->save();
        
        echo 'we are in store action';
        return redirect()->route('posts.index');
        
        
    } 
    
    public function edit($post){
        $creators = Creator::all();
        return view('posts.edit',['creators'=>$creators,'post'=>$post]);
    }
    
    public function update ($post,Request $request ){


        // return view('posts.show');
        $Post = Post::findOrFail($post);
        $Post->title        = $request->title;
        $Post->description  = $request->description;
        $Post->creator_id   = $request->post_creator;


        $Post->save();

        return redirect()->route('posts.show',['post'=>$post]);

    }
    public function destroy($post){
       $Post=Post::findOrFail($post);
       $Post->delete();
    //    $Post->truncate();
       
        // echo 'you are in destroy action';
        return redirect()->route('posts.index');
    }
}

