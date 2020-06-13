@extends('layouts.app')

@section('content')
<<div class="container-fluid"> {{-- Orignal --}}
  <div class="card text-white bg-dark mb-3 border-primary"> {{-- edit --}}
    <div class="card-header h4 border-primary">Contenido</div> {{-- Editado --}}
    <div class="card-body"> {{-- edit --}}

      <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{url('/images/peli.jpg')}}" alt="Peliculas" class="rounded-circle mx-auto d-block" width="500" height="500" />
            <div class="carousel-caption d-none d-md-block">
              <h2>Peliculas</h2>
              <h4>
                <p>Encontraras la ficha tecnica de una gran variedad de Peliculas que estan por estrenarse</p>
              </h4>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{url('/images/series.png')}}" alt="Series" class="rounded-circle mx-auto d-block" width="500" height="500" />
            <div class="carousel-caption d-none d-md-block">
              <h2>Series</h2>
              <h4>
                <p>Observe Nuestro catalogo de series, igual que en las peliculas podras observar su ficha tecnica tal comom las temporadas disponibles y capitulos totales</p>
              </h4>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{url('/images/novelas.png')}}" alt="Novelas" class="rounded-circle mx-auto d-block" width="500" height="500" />
            <div class="carousel-caption d-none d-md-block">
              <h2>Novelas</h2>
              <h4>
                <p>Mire que Novelas estan en los top de mas vistas de todo mexico </p>
              </h4>
            </div>
          </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>

      </div>
    </div>
  </div>
  </div>

  <div class="card-body"> {{-- edit --}}

    <h3>
      <p class="card-text">
        Esta pagina va dirigida a todas la personas que quieran saber sobre la variedad de formas de poder entretenerce sanamente, Actualmente la pagina se encuentra en desarrollo y se esta subiendo contenido constantemente
      </p>
      <p>
        Pagina 100% Modificable ya que esta pagina es para el publico en general se podran actualizar y agregar nuevos entretenimientos ("no se puede eliminar ningun producto")
      </p>
    </h3>
  </div>



  <div class="container-fluid"> {{-- Orignal --}}
    <div class="card text-white bg-dark mb-3 border-primary"> {{-- edit --}}
      <div class="card-header h4 border-primary">Contenido</div> {{-- Editado --}}
      <div class="card-body"> {{-- edit --}}


        <div class="card-deck">
          <div class="card bg-dark mb-3 border-primary">
            <img class="card-img-top" src="{{url('/images/peli.jpg')}}" alt="Card image cap" height="500">
            <div class="card-body">
              <h5 class="card-title">Peliculas</h5>
              <p class="card-text">Encontraras la ficha tecnica de una gran variedad de Peliculas que estan por estrenarse</p>
            </div>

          </div>
          <div class="card bg-dark mb-3 border-primary">
            <img class="card-img-top" src="{{url('/images/series.png')}}" alt="Card image cap" height="500">
            <div class="card-body">
              <h5 class="card-title">Series</h5>
              <p class="card-text">Observe Nuestro catalogo de series, igual que en las peliculas podras observar su ficha tecnica tal comom las temporadas disponibles y capitulos totales</p>
              </p>
            </div>

          </div>
          <div class="card bg-dark mb-3 border-primary">
            <img class="card-img-top" src="{{url('/images/novelas.png')}}" alt="Card image cap" height="500">
            <div class="card-body">
              <h5 class="card-title">Novelas</h5>
              <p class="card-text">Mire que Novelas estan en los top de mas vistas de todo mexico </p>
            </div>

          </div>
        </div>

        <br /><br />

        <div class="card-deck">

        </div>


      </div>
    </div>
  </div>
  @endsection