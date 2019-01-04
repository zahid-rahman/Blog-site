@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-2">

                <div class="btn-group-vertical">
                    <a href="{{route('home')}}" class="btn btn-dark btn-lg">Dashboard</a>
                    <a href="{{route('viewpost')}}" class="btn btn-dark btn-lg">View Posts</a>
                    <a href="{{route('addpost')}}" class="btn btn-dark btn-lg">Add post</a>
                    <a href="{{route('profile.setting')}}" class="btn btn-dark btn-lg">Profile setting</a>
                </div>

            </div>
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header"><h2>Add Post</h2></div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                            <form action="{{route('post.publish')}}" method="post">

                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">post title</label>
                                    <input type="text" name="p_title" class="form-control" id="exampleFormControlInput1" placeholder="enter post title">
                                    <p style="color:tomato">
                                        @if($errors->first('p_title'))
                                            {{'* title required'}}
                                        @endif
                                    </p>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1"> select post category</label>
                                    <select class="form-control" name="category_name" id="exampleFormControlSelect1">

                                       @foreach($categories as $items)
                                            <option>{{$items->category_name}}</option>
                                        @endforeach

                                    </select>
                                    <p style="color:tomato">
                                        @if($errors->first('category_name'))
                                            {{'* category selection required'}}
                                        @endif
                                    </p>
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Post Details</label>
                                    <textarea name="p_desc" class="form-control" id="exampleFormControlTextarea1" rows="3" style="height:200px"></textarea>
                                    <p style="color:tomato">
                                        @if($errors->first('p_title'))
                                            {{'* post details required'}}
                                        @endif
                                    </p>
                                </div>

                                <div class="form-group">
                                    <input type="submit" value="publish" class="form-control btn btn-dark">
                                </div>
                            </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
