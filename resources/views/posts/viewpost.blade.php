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
                    <div class="card-header"><h2>view post</h2></div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                      <div class="container">
                          <div class="row justify-content-center">
                              <div class="com-sm-8">

                                  {{--<p>{{dd($value)}}</p>--}}

                                  @if(count($value) == 0)
                                      <div class="container justify-content-center">
                                          <h3>Posts not uploaded yet</h3>
                                      </div>
                                      @else
                                      @foreach($value as $items)


                                          {{--{{dd($items)}}--}}
                                          <div class="container">


                                              <div class="jumbotron">
                                                  <h3 class="display-4">{{$items->post_title}}
                                                  </h3>

                                                  <p>by <a href="">{{Auth::user()->name}}</a>  <span class="badge badge-info">{{$items->category_name}}</span>
                                                      {{--condition--}}
                                                      <span class="badge badge-pill badge-success">{{$items->status}}</span>

                                                  </p>
                                                  <hr class="my-4">
                                                  <p style="line-height:1.2em; height:3.6em;overflow:hidden; font-size: 15px">
                                                      {{$items->post_details}}
                                                  </p>
                                                  <p class="lead">
                                                      <a class="btn btn-dark" href="#" role="button">Learn more</a>
                                                      <a href="" class="btn btn-danger">delete</a>
                                                  </p>
                                              </div>
                                          </div>

                                      @endforeach
                                      @endif

                              </div>
                          </div>
                      </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
