@extends('app')

@section('tittle')
<!--test-->
  <div style="padding-top:0px;"></div>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="{{asset('FotosMM/Servicios/Servicio.jpg')}}" alt="img1" width="460" height="345" class="img-responsive">
        <div class="carousel-caption shaCapt">
          <h3>Servicios</h3>
          <p>En megamaderas ofrecemos los mejores servicios</p>
        </div>
      </div>

      <div class="item">
        <img src="{{asset('FotosMM/Servicios/IMG_0219.jpg')}}" alt="img2" width="460" height="345" class="img-responsive">
        <div class="carousel-caption shaCapt">
          <h3>Personal Altamente Capacitado</h3>
          <p>Contamos con el mejor personal para atender tus necesidades en el ámbito de las maderas.!!</p>
        </div>
      </div>

      <div class="item">
        <img src="{{asset('FotosMM/Servicios/IMG_0200.jpg')}}" alt="img3" width="460" height="345" class="img-responsive">
        <div class="carousel-caption shaCapt">
          <h3>Tu mejor Opción!!</h3>
          <p>Megamaderas S.A de C.V</p>
        </div>
      </div>

      <div class="item">
        <img src="{{asset('FotosMM/Servicios/IMG_0203.jpg')}}" alt="img4" width="460" height="345" class="img-responsive">
        <div class="carousel-caption shaCapt">
          <h3>Trabajo de precisión</h3>
          <p>Los servicios que ofrecemos están realizados con la mas alta calidad y precisión</p>
        </div>
      </div>

    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
<!--test-->
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class='tittle'>Productos nuevos</h2>
                <hr class="star-primary">
            </div>
        </div>
        <div class="row shabx">
            @if ($productos->count()>0)
                @foreach ($productos as $producto)
                    <div class="col-sm-4 portfolio-item portfolio-producto" id="divproducto{{$producto->id}}">
                      <a href="#producto{{$producto->id}}" class="portfolio-link" data-toggle="modal">
                          <img src="{{asset('images/productos')}}/{{$producto->id}}.jpg" class="img-responsive" alt="{{$producto->nombre}}">
                      </a>
                      <div class="not-show" aria-hidden="true">
                        {{$producto->nombre}}
                        {{$producto->tipo}}
                      </div>
                    </div>

                    <div class="portfolio-modal modal fade" id="producto{{$producto->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-content">
                            <div class="close-modal" data-dismiss="modal">
                                <div class="lr">
                                    <div class="rl">
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-8 col-lg-offset-2">
                                        <div class="modal-body">
                                            <h2 class='tittle'>{{$producto->nombre}}</h2>
                                            <hr class="star-primary">
                                            <img src="{{asset('images/productos')}}/{{$producto->id}}.jpg" class="img-responsive img-centered" alt="{{$producto->nombre}}" title="{{$producto->nombre}}">
                                            <ul class="list-inline item-details">
                                              <li><strong><p>Tipo</p></strong>
                                                <p>{{$producto->tipo}}</p>
                                              </li>
                                            </ul>
                                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach
            @endif
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class='tittle'>Productos destacados</h2>
                <hr class="star-primary">
            </div>
        </div>
        <div class="row shabx">
            @if ($productos->count()>0)
                @foreach ($productos as $producto)
                    <div class="col-sm-4 portfolio-item portfolio-producto" id="divproducto{{$producto->id}}">
                      <a href="#producto{{$producto->id}}" class="portfolio-link" data-toggle="modal">
                          <img src="{{asset('images/productos')}}/{{$producto->id}}.jpg" class="img-responsive" alt="{{$producto->nombre}}">
                      </a>
                      <div class="not-show" aria-hidden="true">
                        {{$producto->nombre}}
                        {{$producto->tipo}}
                      </div>
                    </div>

                    <div class="portfolio-modal modal fade" id="producto{{$producto->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-content">
                            <div class="close-modal" data-dismiss="modal">
                                <div class="lr">
                                    <div class="rl">
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-8 col-lg-offset-2">
                                        <div class="modal-body">
                                            <h2 class='tittle'>{{$producto->nombre}}</h2>
                                            <hr class="star-primary">
                                            <img src="{{asset('images/productos')}}/{{$producto->id}}.jpg" class="img-responsive img-centered" alt="{{$producto->nombre}}" title="{{$producto->nombre}}">
                                            <ul class="list-inline item-details">
                                              <li><strong><p class="contactText">Tipo</p></strong>
                                                <p>{{$producto->tipo}}</p>
                                              </li>
                                            </ul>
                                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach
            @endif
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class='tittle'>Nuestras marcas</h2>
                <hr class="star-primary">
            </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
              <div class="footer-col col-md-4 tilt">
                  <img src="{{asset('images/Marcas/cerrajes.png')}}" class="img-responsive img-centered" alt="Cerrajes" title="Cerrajes">
              </div>
              <div class="footer-col col-md-4 morph">
                  <img src="{{asset('images/Marcas/dekken.png')}}" class="img-responsive img-centered" alt="Dekken" title="Dekken">
              </div>
              <div class="footer-col col-md-4 tilt">
                  <img src="{{asset('images/Marcas/sayer.jpg')}}" class="img-responsive img-centered" alt="Sayer" title="Sayer">
              </div>
          </div>
          <br>
          <div class="col-lg-12">
              <div class="footer-col col-md-4 tilt">
                  <img src="{{asset('images/Marcas/ducasse.jpg')}}" class="img-responsive img-centered" alt="ducasse" title="Megamaderas">
              </div>
              <div class="footer-col col-md-4 tilt">
                  <img src="{{asset('images/Marcas/handyhome.jpg')}}" class="img-responsive img-centered" alt="handyhome" title="Megamaderas">
              </div>
              <div class="footer-col col-md-4 tilt">
                  <img src="{{asset('images/Marcas/masisa.jpg')}}" class="img-responsive img-centered" alt="Masisa" title="Masisa">
              </div>
            </div>
            <div class="col-lg-12">
              <div class="footer-col col-md-4 morph">
                  <img src="{{asset('images/Marcas/dexter.png')}}" class="img-responsive img-centered" alt="dexter" title="Megamaderas">
              </div>
              <div class="footer-col col-md-4 tilt">
                  <img src="{{asset('images/Marcas/resistol.gif')}}" class="img-responsive img-centered" alt="resistol" title="Megamaderas">
              </div>
              <div class="footer-col col-md-4 tilt">
                  <img src="{{asset('images/Marcas/willsonart.jpg')}}" class="img-responsive img-centered" alt="willsonart" title="Megamaderas">
              </div>
            </div>

        </div>
    </div>


@endsection
