@extends('app')

@section('main')
<div class="container">
        @include('_partials.searchForm')

        <p style="text-align:center; font-size:18px;">Page Number: {{$data['photos']['page']}} / {{$data['photos']['pages']}} - Total Images {{$data['photos']['total']}}</p>
        <div class="row" style="margin: 20px 0">
            <div class="col-md-4 col-md-offset-2">
                @if($data['photos']['page'] > 1)
                    <a class="btn btn-default" href="{{route('search.page', $query , $data['photos']['page'] - 1)}}">< Previous Page</a>
                @endif
            </div>
            <div class="col-md-4 col-md-offset-2">
                @if($data['photos']['page'] < $data['photos']['pages'])
                    <a class="btn btn-default" href="{{route('search.page', array($query, $data['photos']['page'] + 1))}}">Next Page ></a>
                @endif
            </div>
        </div>
        <div class="row">

            @foreach ($data['photos']['photo'] as $photo)
                <div class="col-md-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">{{str_limit($photo["title"], $limit = 30, $end = '...')}}</h3>
                        </div>
                        <div class="panel-body">
                            <a href="http://farm{{$photo["farm"]}}.static.flickr.com/{{$photo["server"]}}/{{$photo["id"]}}_{{$photo["secret"]}}.jpg"><img height="100" style="margin: 0 auto; display:block;" src="http://farm{{$photo["farm"]}}.static.flickr.com/{{$photo["server"]}}/{{$photo["id"]}}_{{$photo["secret"]}}_t.jpg"></a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        <br>
        <br>
</div><!-- /.container -->
@endsection

