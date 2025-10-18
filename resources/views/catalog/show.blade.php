@extends('layouts.master')
@section('title','Mostrar')
@section('content')

<div class="row">
    <div class="col-sm-4">
        {{-- TODO: Imatge de la pel·lícula --}}
        <img src="{{$pelicula['poster']}}" style="height:500px"/>

    </div>
    <div class="col-sm-8">
        {{-- TODO: Dades de la pel·lícula --}}
        <h4 style="min-height:45px;margin:5px 0 10px 0">
            {{$pelicula['title']}} <br>
        </h4>
        <h5>
            Año: {{$pelicula['year']}} <br><br>
            Director: {{$pelicula['director']}} <br><br>
            Sinopsis:
        </h5>
        <p><br>{{$pelicula['synopsis']}} <br><br></p>

        <h5>Estado:</h5>

        @if ($pelicula['rented'] === true)
            <p>Película actualmente alquilada</p>
            <button style=" background-color: red; 
                            color: white; 
                            border: none; 
                            padding: 10px 20px; 
                            border-radius: 5px; 
                            cursor: pointer;">Devolver película</button>
        @else
            <p>Película disponible</p>
            <button style=" background-color: blue; 
                            color: white; 
                            border: none; 
                            padding: 5px 30px; 
                            border-radius: 5px; 
                            cursor: pointer;">Alquilar película</button>
            
        @endif

        <a href="{{ url('/catalog/edit/' . $id )}}">
            <button style=" background-color: orange; 
                        color: white; 
                        border: none; 
                        padding: 5px 30px; 
                        border-radius: 5px; 
                        cursor: pointer;">
                Editar película
            </button>

        </a>
        
        <a href="{{ url('/catalog') }}">
            <button style=" background-color: white; 
                            color: black; 
                            border: 1px solid #ccc; 
                            padding: 5px 30px; 
                            border-radius: 5px; 
                            cursor: pointer;" >
                Volver al listado
            </button>
            
        </a>
            

            
        
    </div>
</div>

@stop