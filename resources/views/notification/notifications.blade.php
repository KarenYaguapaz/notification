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

                 <div class="col-md-12"> 
                     
<<<<<<< HEAD:resources/views/notifications.blade.php
                        {!!Form::open(['route' => 'notifications.store', 'files'=>true])!!}                 
=======
                        {!!Form::open(['route' => 'notification.store','files'=>true])!!}
                        {{Form::text('title')}} <br>
                        {{Form::textarea('description')}}
>>>>>>> 2e8c4053ae6cb5e43951f7739ead3facc7ac721a:resources/views/notification/notifications.blade.php
                        {{Form::file('image')}}
                         {{Form::submit('Click Me!')}}
                        {!!Form::close()!!}
                    
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
