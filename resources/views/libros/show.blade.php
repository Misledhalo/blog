@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-light bg-dark">Libro {{ $libro->Nombre }}</div>
                <div class="card-body bg-light">
                    <br />
                    <br />

                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>

                                </tr>
                                <tr>
                                    <th> </th>

                                    <img src="{{ asset('storage').'/'.$libro->Foto }}" alt="" width="300">
                                </tr>
                                <tr>
                                    <th> Nombre </th>
                                    <td> {{ $libro->Nombre }} </td>
                                </tr>
                                <tr>
                                    <th> Genero </th>
                                    <td> {{ $libro->Genero }} </td>
                                </tr>
                                <tr>
                                    <th> Pais </th>
                                    <td> {{ $libro->Pais }} </td>
                                </tr>
                                <tr>
                                    <th> Autor </th>
                                    <td> 
                                       
                                    {{ $libro->Autor }} </td>
                                </tr>
                                <tr>
                                    <th> Libro </th>
                                    <td> {{ $libro->Libro }} </td>
                                </tr>

                            </tbody>

                        </table>

                        <a href="{{ url('/libros') }}" title="Back"><button class="btn btn-warning "><i class="fa fa-arrow-left" aria-hidden="true"></i> Atras</button></a>
                        <a href="{{ url('/libros/' . $libro->id . '/edit') }}" title="Edit Libro"><button class="btn btn-primary "><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Actualizar</button></a>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection