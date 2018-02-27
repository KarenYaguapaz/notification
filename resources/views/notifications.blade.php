@extends('layouts.app')   

@section('content')
<div class="container">
    <div class="row">
        <div style=" text-align:center;" class="col-md-8 col-md-offset-2">
           
        </div>   

        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Notificaciones</div>

                <div class="panel-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif

                    <div class="card">
                    	<h4 class="card-header">Featured</h4>
                    	<div class="card-body">
                    		<h5 class="card-title">Special title treatment</h5>
                    		<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    		<a href="{{ action('HomeController@index') }}" class="btn btn-primary">Ver Más</a>
                    	</div>
                    </div>
                 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
