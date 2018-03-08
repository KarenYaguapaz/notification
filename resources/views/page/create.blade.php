@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Page</div>
                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                            {!! Form::open(['route' => 'page.store','files'=>true]) !!}
                            {{Form::text('title')}}<br>
                            {{Form::textarea('description')}}
                            {{Form::file('image')}}
                            {{Form::submit('Subir archivo')}}
                            {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

