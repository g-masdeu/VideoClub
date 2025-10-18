@extends('layouts.master')
@section('title','index')
@section('content')

<h1 style="text-align: center; margin: 20px; margin-bottom: 50px;">CATÁLOGO</h1>

<div class="row">
    @foreach( $peliculas as $key => $pelicula )
    <div class="col-xs-6 col-sm-4 col-md-3 text-center">
        <a href="{{ url('/catalog/show/' . $key ) }}">
            <img src="{{$pelicula['poster']}}" style="height:200px"/>
            <h4 style="min-height:45px;margin:5px 0 10px 0">
                {{$pelicula['title']}}
            </h4>
        </a>
    </div>
    @endforeach 
</div>

@stop