<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    function home(){
       return view('addPost');
    }
    function allPosts(){
       return view('allPosts');
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

    }
}
