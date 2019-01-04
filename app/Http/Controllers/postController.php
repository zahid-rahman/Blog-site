<?php

namespace App\Http\Controllers;

use App\categories;
use App\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class postController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

         $request->validate([
            'p_title'=>'required|string',
            'category_name'=>'required',
            'p_desc'=>'required'
        ]);

        $post = new post();

        //$category_id = categories::where('category_name',$request->category_name)->pluck('category_id')->first();

        //dd($category_name);
        $post->User_id = Auth::user()->id;
        $post->category_name = $request->category_name;
        $post->post_title = $request->p_title;
        $post->post_details = $request->p_desc;
        $post->post_thumbnail = "not required";
        $post->status = "approve";
        $post->post_time = "not required";


        $post->save();


        return redirect()->route('viewpost');
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
