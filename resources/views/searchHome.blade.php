@extends('layouts.app')

@section('content')
    <div class="flex-center position-ref full-height">

        @if(Route::has('login'))
            <div class="top-right links">


                @auth
                    <a href="{{ url('/home') }}">Home</a>

                @else <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
                @endauth

            </div>
        @endif


        <div class="container">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Non severity crime <b>Table</b></h2>
                        </div>

                    </div>
                </div>

                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Geography  (Footnotes in parentheses–see bottom of spreadsheet)</th>
                        <th>2008</th>
                        <th>2009</th>
                        <th>2010</th>
                        <th>2011</th>
                        <th>2012</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$dataValues->id }}</td>       {{-- display the record searched --}}
                            <td>{{$dataValues->Geography }}</td>
                            <td>{{$dataValues->record_2008 }}</td>
                            <td>{{$dataValues->record_2009 }}</td>
                            <td>{{$dataValues->record_2010 }}</td>
                            <td>{{$dataValues->record_2011 }}</td>
                            <td>{{$dataValues->record_2012 }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="content">
            <div class="title m-b-md">
                Laravel
            </div>

            <div class="links">
                <a href="https://laravel.com/docs">Documentation</a>
                <a href="https://laracasts.com">Laracasts</a>
                <a href="https://laravel-news.com">News</a>
                <a href="https://nova.laravel.com">Nova</a>
                <a href="https://forge.laravel.com">Forge</a>
                <a href="https://github.com/laravel/laravel">GitHub</a>
            </div>
        </div>
    </div>
@endsection