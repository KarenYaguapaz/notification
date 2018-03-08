@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">User List</div>

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
                                <td>image</td>
                                <td></td>

                            </tr>
                            @foreach ($pages as $page)
                                <tr>
                                    <td>{{$page->title}}</td>
                                    <td>{{$page->description}}</td>
                                    <td>{{$page->image}}</td>
                                    <td></td>
                                </tr>
                            @endforeach
                        </table>


                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

