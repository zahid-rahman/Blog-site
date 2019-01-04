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
                <div class="card-header"><h2>Dashboard</h2></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>Hello world</p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
