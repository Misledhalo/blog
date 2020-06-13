@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            

            <div class="col-md-12 ">
                <div class="card">
                    <div class="card-header text-light bg-dark">Serie {{ $serie->Nombre }}</div>
                    <div class="card-body bg-light">

                       
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    
                                    <tr><th></th><td> <img src="{{ asset('storage').'/'.$serie->Foto }}" alt="" width="300"> </td></tr>
                                    
                                    <tr><th> Nombre </th><td> {{ $serie->Nombre }} </td></tr><tr><th> Genero </th><td> {{ $serie->Genero }} </td></tr><tr><th> Pais </th><td> {{ $serie->Pais }} </td></tr><tr><th> Lenguaje </th><td> {{ $serie->Lenguaje }} </td></tr><tr><th> Temporadas </th><td> {{ $serie->Temporadas }} </td></tr><tr><th> Capitulos </th><td> {{ $serie->Capitulos }} </td></tr><tr><th> Fecha de subida </th><td> {{ $serie->Fecha }} </td></tr>
                                </tbody>
                            </table>
                            <a href="{{ url('/serie') }}" title="Back"><button class="btn btn-warning "><i class="fa fa-arrow-left" aria-hidden="true"></i> Atras</button></a>
                        <a href="{{ url('/serie/' . $serie->id . '/edit') }}" title="Edit Serie"><button class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Actualizar</button></a>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
