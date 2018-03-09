@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Page List</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                            <table>
                                <tr>
                                    <td>title</td>
                                    <td>description</td>
                                    <td></td>
                                </tr>
                                @foreach ($notifications as $notification)
                                    <tr>
                                        <td>{{$notification->title}}</td>
                                        <td>{{$notification->description}}</td>
                                        <td></td>
                                        <td><a href="{{route('notification.create',['id'=>$notification->id])}}">Create</a></td>
                                        <td><a href="{{route('notification.show',['id'=>$notification->id])}}">Show</a></td>
                                        <td><a href="{{route('notification.edit',['id'=>$notification->id])}}">Edit</a></td>
                                        <td>{!! Form::open(['method' => 'DELETE','route' => ['notification.destroy', $notification->id],'style'=>'display:inline']) !!}
                                            {!! Form::submit('Delete', ['class' => 'btn btn-warning']) !!}
                                            {!! Form::close() !!}</td>


                                    </tr>
                                @endforeach

                            </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection