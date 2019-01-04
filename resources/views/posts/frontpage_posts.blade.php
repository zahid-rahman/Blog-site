@extends('myView')

@section('content')
    <br>
    {{--posts--}}

    <div class="container">

        <div class="row">
            <div class="com-sm-8">

                @foreach($posts as $items)
                    {{--{{dd($items->user())}}--}}
                    {{--<div class="container">--}}
                    <div class="jumbotron">
                        <h4 >{{$items->post_title}}</h4>


                        <p>
                            by


                                <a href="">{{ $items->user->name }}</a>

                            <span class="badge badge-info">{{$items->category_name}}</span>
                        </p>
                        <hr class="my-4">
                        <p>It uses utility classes for typography and spacing to space content out within the larger
                            container.</p>
                        <p class="lead">
                            <a class="btn btn-dark" href="#" role="button">Learn more</a>
                        </p>
                    </div>
                    {{--</div>--}}
                @endforeach
            </div>

            <div class="col-sm-4">
                <h3>Top 5 posts</h3>
                <ul class="list-group">

                    @for($i=0;$i<5;$i++)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Laravel
                        <span class="badge badge-primary badge-pill">14</span>
                    </li>
                    @endfor

                </ul>

                <hr>
                <h3>most popluar categories</h3>
                <ul class="list-group">

                    @for($i=0;$i<5;$i++)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Action
                            <span class="badge badge-primary badge-pill">5</span>
                        </li>
                    @endfor

                </ul>
            </div>
        </div>
    </div>
@endsection