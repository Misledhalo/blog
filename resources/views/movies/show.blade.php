@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-light bg-dark">{{ $movie->Nombre }}</div>
                    <div class="card-body bg-light">

                        
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                   
                                    <tr><th></th><td> 
                                        
                                    <img src="{{ asset('storage').'/'.$movie->Foto }}" alt="" width="300">  </td>
                                </tr><tr><th> Nombre </th><td> {{ $movie->Nombre }} </td></tr><tr><th> Genero </th><td> {{ $movie->Genero }} </td><tr><th> Pais </th><td> {{ $movie->Pais }} </td></tr><tr><th> Lenguaje </th><td> {{ $movie->Lenguage }} </td></tr><tr><th> Fecha </th><td> {{ $movie->Fecha }} </td></tr><tr><th> Avances </th><td> <a href=" "></a> {{$movie->Avances}} </td></tr></tr>
                                </tbody>
                            </table>
                            <a href="{{ url('/movies') }}" title="Back"><button class="btn btn-warning"><i class="fa fa-arrow-left" aria-hidden="true"></i> Atras</button></a>
                        <a href="{{ url('/movies/' . $movie->id . '/edit') }}" title="Edit movie"><button class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                        
                        <br/>
                        <br/>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
