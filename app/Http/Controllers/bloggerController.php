<?php

namespace App\Http\Controllers;

use App\categories;
use App\post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class bloggerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        //
        return redirect()->route('home');
    }

    public function addpost()
    {
        //

        $categories = categories::get();

        return view('posts.addpost')->with('categories',$categories);
    }


    public function profileSetting()
    {
        //


        return view('posts.profile_settings');
    }


    public function viewPost()
    {
        //

        //$blogger_post = post::where('User_id','=',Auth::user()->id)->get();

      $id = Auth::user()->id;
//        //dd($id);
       $value = User::find($id)->posts;


        return view('posts.viewpost',compact('value'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
