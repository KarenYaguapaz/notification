@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">SHOW</div>
                    <div class="panel-body">
                        <div class="col-md-12">

                            <h2>{{$notification->title}}</h2>
                            <p>{{$notification->description}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection