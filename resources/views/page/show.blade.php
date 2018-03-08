@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">User List</div>
                    <div class="panel-body">
                        <div class="col-md-12">
                        <img src="lorempixel.com/100/100" alt="500" width="500" height="500"/>
                            <img src="{{ url('storage/files/'.$page->image) }}" alt="100" title="100" />

                            <h1>{{$page->image}}</h1>
                            <h2>{{$page->title}}</h2>
                            <p>{{$page->description}}</p>
                    </div>
                    </div>
                    </div>
            </div>
        </div>
    </div>
    @endsection