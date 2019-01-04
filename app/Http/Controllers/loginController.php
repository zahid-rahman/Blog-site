<?php

namespace App\Http\Controllers;

use App\post;
use App\User;
use Illuminate\Http\Request;

class loginController extends Controller
{
    //

    function index(){

        $all_posts = post::with('User')->get();

    	return view('posts.frontpage_posts')->with('posts',$all_posts);
    }


}
