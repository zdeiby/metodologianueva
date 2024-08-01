
<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Vision4RIos"/>
    <meta name="keywords" content="css3, transforms, shadow, shading, 3d, box shadow" />
    <meta name="author" content="Codrops" />
    <link rel="shortcut icon" href="../favicon.ico">


   
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/component.css') }}?=<?php echo time() ?>" />
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/component.css') }}?={{ time() }}"> -->

@extends('componentes.navlateral')

@section('title', 'Rombo Hogar')

@section('content')

    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .scene {
            list-style-type: none;
        }
        .movie {
            cursor: pointer;
        }
        .poster {
            text-align: center;
        }
        .info {
            background-color: #0dcaf0;
        }
        .progress {
            color: #FAFAF7;
        }
        .progress-value {
            display: block;
        }
        button {
            background-color: #5FE0DB;
            color: black;
        }
        .hidden {
            display: none;
        }
    </style>

    <!-- <div style="text-align: center">
        <a class="hidden" style="color: #5FE0DB; font-family: Bison, Arial; font-size: 13px; font-style: normal" href="#openModal" onclick="">Más información</a>
        <button class="hidden" onclick="aplicar_formulario(100, 456456)">Aplicar</button>
    </div> -->
<div class="container">
<img width="100%" height="100px" src="{{ asset('imagenes/headers.png') }}" alt="" class="isticky-top"  >

    <ul>
      
    
        <li class="scene">
            <div class="movie">
                <div class="poster">
                    <div id="imgicon"></div>
                    <div style="text-align: center; padding-top:10px" >
                        <!-- <div style="color: white; font-family: Bison, Arial; font-size: 16px; font-style: normal">Visita</div> -->
                        <img class="" src="{{ asset('assets/img/iconos/3.jpg')}}" width="100%" alt="">
                        <br> <br>
                        <div style="color: white; font-family: Bison, Arial; font-size: 16px; font-style: normal">GESTIÓN DE INTEGRANTES</div>

                    </div>
                </div>
                <div class="info" style="text-align: center;">
                    <div >
                      <label for="" style="color:white;font-size:18px">Gestión de integrantes</label>
                    </div>
                    <img src="{{ asset('assets/img/iconos/7.jpg')}}" style="border-radius:10px" width="100%" alt="">
                    <br> 
                    <label for="" style="color:white;font-size:15px; padding-bottom:5px;padding-top:4px; text-decoration: underline;cursor:pointer" data-bs-toggle="modal" data-bs-target="#exampleModal2">Más información</label><br>
                    <form method="GET" action="../integrantes/{{$variable}}" ><button type="submit" class="btn btn-primary">Ir a Gestión de integrantes</button></form>
                    
                </div>
            </div>
        </li>

         <li class="scene">
            <div class="movie">
                <div class="poster">
                    <div id="imgicon"></div>
                    <div style="text-align: center; padding-top:10px" >

                        <img class="" src="{{ asset('assets/img/iconos/5.jpg')}}" width="100%" alt="">
                        <br> <br>
                        <div style="color: white; font-family: Bison, Arial; font-size: 16px; font-style: normal">ENCUESTA HOGAR</div>

                    </div>
                </div>
                <div class="info" style="text-align: center;">
                    <div >
                      <label for="" style="color:white;font-size:18px">Encuesta del hogar</label>
                    </div>
                    <img src="{{ asset('assets/img/iconos/6.jpg')}}" style="border-radius:10px" width="100%" alt="">
                    <br> 
                    <label for="" style="color:white;font-size:15px; padding-bottom:5px;padding-top:4px; text-decoration: underline;cursor:pointer" data-bs-toggle="modal" data-bs-target="#exampleModal">Más información</label><br>
                    <form method="GET" action="../encuestahogarconformacionfamiliar/{{$variable}}" ><button type="submit" class="btn btn-primary">Ir a encuesta de hogar</button></form>
                    
                </div>
            </div>
        </li> 
   
        <!-- <li class="scene">
            <div class="movie">
                <div class="poster">
                    <div id="imgicon"></div>
                    <div style="text-align: center; padding-top:10px" >
                        <img class="" src="https://fondos.sapiencia.gov.co/convocatorias/frontend_talento_especializado/resources/img/iconos/193.jpg" width="80%" alt="">
                        <br> <br>
                        <div style="color: white; font-family: Bison, Arial; font-size: 16px; font-style: normal">Visita</div>

                    </div>
                </div>
                <div class="info">
                    <div class="row">
                        <div class="col-sm-3 col-md-2">
                            <div class="progress" data-percentage="">
                                <span class="progress-left">
                                    <span class="progress-bar"></span>
                                </span>
                                <span class="progress-right">
                                    <span class="progress-bar"></span>
                                </span>
                                <div class="progress-value">100%</div>
                            </div>
                        </div>
                    </div>
                    <p>hols</p>
                </div>
            </div>
        </li>
   
        <li class="scene">
            <div class="movie">
                <div class="poster">
                    <div id="imgicon"></div>
                    <div style="text-align: center; padding-top:10px" >
                        <img class="" src="https://fondos.sapiencia.gov.co/convocatorias/frontend_talento_especializado/resources/img/iconos/193.jpg" width="80%" alt="">
                        <br> <br>
                        <div style="color: white; font-family: Bison, Arial; font-size: 16px; font-style: normal">Visita</div>

                    </div>
                </div>
                <div class="info">
                    <div class="row">
                        <div class="col-sm-3 col-md-2">
                            <div class="progress" data-percentage="">
                                <span class="progress-left">
                                    <span class="progress-bar"></span>
                                </span>
                                <span class="progress-right">
                                    <span class="progress-bar"></span>
                                </span>
                                <div class="progress-value">100%</div>
                            </div>
                        </div>
                    </div>
                    <p>hols</p>
                </div>
            </div>
        </li>
    
        <li class="scene">
            <div class="movie">
                <div class="poster">
                    <div id="imgicon"></div>
                    <div style="text-align: center; padding-top:10px" >
                        <img class="" src="https://fondos.sapiencia.gov.co/convocatorias/frontend_talento_especializado/resources/img/iconos/193.jpg" width="80%" alt="">
                        <br> <br>
                        <div style="color: white; font-family: Bison, Arial; font-size: 16px; font-style: normal">Visita</div>

                    </div>
                </div>
                <div class="info">
                    <div class="row">
                        <div class="col-sm-3 col-md-2">
                            <div class="progress" data-percentage="">
                                <span class="progress-left">
                                    <span class="progress-bar"></span>
                                </span>
                                <span class="progress-right">
                                    <span class="progress-bar"></span>
                                </span>
                                <div class="progress-value">100%</div>
                            </div>
                        </div>
                    </div>
                    <p>hols</p>
                </div>
            </div>
        </li>
    
        <li class="scene">
            <div class="movie">
                <div class="poster">
                    <div id="imgicon"></div>
                    <div style="text-align: center; padding-top:10px" >
                        <img class="" src="https://fondos.sapiencia.gov.co/convocatorias/frontend_talento_especializado/resources/img/iconos/193.jpg" width="80%" alt="">
                        <br> <br>
                        <div style="color: white; font-family: Bison, Arial; font-size: 16px; font-style: normal">Visita</div>

                    </div>
                </div>
                <div class="info">
                    <div class="row">
                        <div class="col-sm-3 col-md-2">
                            <div class="progress" data-percentage="">
                                <span class="progress-left">
                                    <span class="progress-bar"></span>
                                </span>
                                <span class="progress-right">
                                    <span class="progress-bar"></span>
                                </span>
                                <div class="progress-value">100%</div>
                            </div>
                        </div>
                    </div>
                    <p>hols</p>
                </div>
            </div>
        </li>
    
        <li class="scene">
            <div class="movie">
                <div class="poster">
                    <div id="imgicon"></div>
                    <div style="text-align: center; padding-top:10px" >                        <img class="" src="https://fondos.sapiencia.gov.co/convocatorias/frontend_talento_especializado/resources/img/iconos/193.jpg" width="80%" alt="">
                        <br> <br>
                        <div style="color: white; font-family: Bison, Arial; font-size: 16px; font-style: normal">Visita</div>

                    </div>
                </div>
                <div class="info">
                    <div class="row">
                        <div class="col-sm-3 col-md-2">
                            <div class="progress" data-percentage="">
                                <span class="progress-left">
                                    <span class="progress-bar"></span>
                                </span>
                                <span class="progress-right">
                                    <span class="progress-bar"></span>
                                </span>
                                <div class="progress-value">100%</div>
                            </div>
                        </div>
                    </div>
                    <p>hols</p>
                </div>
            </div>
        </li>
    
        <li class="scene">
            <div class="movie">
                <div class="poster">
                    <div id="imgicon"></div>
                    <div style="text-align: center; padding-top:10px" >
                        <img class="" src="https://fondos.sapiencia.gov.co/convocatorias/frontend_talento_especializado/resources/img/iconos/193.jpg" width="80%" alt="">
                        <br>
                        <div style="color: white; font-family: Bison, Arial; font-size: 16px; font-style: normal">Visita</div>

                    </div>
                </div>
                <div class="info">
                    <div class="row">
                        <div class="col-sm-3 col-md-2">
                            <div class="progress" data-percentage="">
                                <span class="progress-left">
                                    <span class="progress-bar"></span>
                                </span>
                                <span class="progress-right">
                                    <span class="progress-bar"></span>
                                </span>
                                <div class="progress-value">100%</div>
                            </div>
                        </div>
                    </div>
                    <p>hola</p>
                </div>
            </div>
        </li> -->
    </ul>

    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header text-center" style="text-align: center; !important">
      <img width="100%" height="100px" src="{{ asset('imagenes/headers.png') }}" alt=""  class="isticky-top"  >
      <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
      </div>
      <div class="modal-body" >
        <div class="text-center">
             <label  for="" style="font-size:20px;color:#0dcaf0">¿Qué es la encuesta del hogar?</label><hr>
        </div>
     
        <label for="">Es donde se recolecta la información de los usuarios, se conoce un poco sobre ellos...</label>
      </div>
      <div class="modal-footer">
       <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <!--  <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header text-center" style="text-align: center; !important">
      <img width="100%" height="100px" src="{{ asset('imagenes/headers.png') }}" alt=""  class="isticky-top"  >
      <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
      </div>
      <div class="modal-body" >
        <div class="text-center">
             <label  for="" style="font-size:20px;color:#0dcaf0">¿Qué es gestión de integrantes?</label><hr>
        </div>
     
        <label for="">Es donde se recolecta la información de los integrantes del hogar...</label>
      </div>
      <div class="modal-footer">
       <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <!--  <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>

    <!-- {{ decrypt($variable) }} -->
</div>


@endsection