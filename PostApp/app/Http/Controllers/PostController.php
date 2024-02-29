<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function home(){
       return view('addPost');
    }
    function allPosts(){
        // $posts = Post::all();
        // $posts = Post::latest()->get();
        $posts = Post::latest()->paginate(4);
        // $posts = Post::where('author','Shaown Chowdhury')->latest()->get();
        // dd($posts);
        return view('allPosts', compact('posts') );
    //    return view('allPosts', [ 'p' => $posts] );
    }
    // function storePost(){
    //    echo $_REQUEST['author'];
    // }
    function storePost(Request $request){
        // dd = die and dump
    //   dd($request->title);

       $request->validate(
        [
            'title' => 'required|min:5',
            'detail' => 'required|max:10',
        ],
        // [
        //     'title.required' => 'Please enter your title',
        //     'detail.required' => 'Please enter your detail',
        // ]
       );

       // Store Data

       $post = new Post();
       $post->title = $request->title;
       $post->detail = $request->detail;
       $post->author = $request->author;
       $post->save();
        
       return back()->with('msg','Your data inserted successfully');
    }
 
    function deletePost($id){
    $post = Post::findOrFail($id);
    // dd($post) ;
    $post->delete();
    return back();
    }

    function editPost($id){
        $post = Post::find($id);
        return view('editPost',compact('post'));
    }

   
}
