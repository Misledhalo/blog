@extends('layouts.app')

@section('content')
    <div class="container-fluit">
        <div class="row">

            <div class="col-md-12 bg-dark mb-3" >
                <div class="card">
                    <div class="card-header text-light bg-dark">Movies</div>
                    <div class="card-body bg-light">
                        <a href="{{ url('/movies/create') }}" class="btn btn-success btn-sm" title="Add New movie">
                            <i class="fa fa-plus" aria-hidden="true"></i> Agregar
                        </a>

                        <form method="GET" action="{{ url('/movies') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Buscar" value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-success" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                         
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Foto</th><th>Nombre</th><th>Genero</th> <th>Pais</th><th>Lenguaje</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($movies as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                        <img src="{{ asset('storage').'/'.$item->Foto }}" alt="" width="130"  >    
                                        
                                        </td>
                                        
                                        
                                        <td>{{ $item->Nombre }}</td><td>{{ $item->Genero }}</td><td>{{ $item->Pais }}</td><td>{{ $item->Lenguage}}</td>
                                        <td>
                                            <a href="{{ url('/movies/' . $item->id) }}" title="View movie"><button class="btn btn-warning"><i class="fa fa-eye" aria-hidden="true"></i> Ver</button></a>
                                            
                          
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            
                            <div class="pagination-wrapper"> {!! $movies->appends(['Buscar' => Request::get('Buscar')])->render() !!} </div>
                        </div>
                        
                    </div>
                  
                </div>
                
            </div>
           
        </div>   
        
    </div>
    
@endsection
