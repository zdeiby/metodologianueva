
<link rel="shortcut icon" href="../favicon.ico">
   
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/component.css') }}?=<?php echo time() ?>" />


@extends('componentes.navlateral')

@section('title', 'Rombo')

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
                <div class="poster" >
                    <div id="imgicon"></div>
                    <div style="text-align: center; padding-top:10px" >
                        <!-- <div style="color: white; font-family: Bison, Arial; font-size: 16px; font-style: normal">Visita</div> -->
                        <img class="" src="{{ asset('assets/img/iconos/2.jpg')}}" width="100%" alt="">
                        <br> <br>
                        <div style="color: white; font-family: Bison, Arial; font-size: 16px; font-style: normal">VISITA DE INGRESO</div>

                    </div>
                </div>
                <div class="info" style="text-align: center;">
                    <div >
                      <label for="" style="color:white;font-size:18px">Visita de ingreso</label>
                    </div>
                    <img src="{{ asset('imagenes/banner1.jpg')}}" style="border-radius:10px" width="100%" alt="">
                    <br>
                    <br> 
                    <!-- <label for="" style="color:white;font-size:15px; padding-bottom:5px;padding-top:4px; text-decoration: underline;cursor:pointer" data-bs-toggle="modal" data-bs-target="#exampleModal">Más información</label><br> -->
                    @if($realizado == '0')
                    <form method="GET" action="../rombointegrantes/{{$variablebtn}}" ><button type="submit" class="btn btn-primary">Realizar visita</button></form>
                    @elseif($realizado == '1')
                    <form method="GET" ><button type="submit" class="btn btn-primary" disabled>Realizar visita</button></form>
                    @endif
                </div>
            </div>
        </li>


        <li class="scene">
            <div class="movie">
                <div class="poster" >
                    <div id="imgicon"></div>
                    <div style="text-align: center; padding-top:10px" >
                        <!-- <div style="color: white; font-family: Bison, Arial; font-size: 16px; font-style: normal">Visita</div> -->
                        <img class="" src="{{ asset('assets/img/iconos/4.jpg')}}" width="100%" alt="">
                        <br> <br>
                        <div style="color: white; font-family: Bison, Arial; font-size: 16px; font-style: normal">VISITA TIPO 1</div>

                    </div>
                </div>
                <div class="info" style="text-align: center;">
                    <div >
                      <label for="" style="color:white;font-size:18px">Visita tipo 1</label>
                    </div>
                    <img src="{{ asset('imagenes/banner2.jpg')}}" style="border-radius:10px" width="100%" alt="">
                    <br>
                    <br> 
                    <!-- <label for="" style="color:white;font-size:15px; padding-bottom:5px;padding-top:4px; text-decoration: underline;cursor:pointer" data-bs-toggle="modal" data-bs-target="#exampleModal">Más información</label><br> -->
                   <form method="GET" action="../rombovisitatipo1/{{$encodeFolio}}" ><button type="submit" class="btn btn-primary">Realizar visita</button></form> 
                     <!-- @if($realizado == '0') -->
                   
                    <!-- @elseif($realizado == '1') -->
                    <!-- <form method="GET" ><button type="submit" class="btn btn-primary" disabled>Realizar visita</button></form> -->
                    <!-- @endif -->
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
                                <div class="progress-value" >100%</div>
                            </div>
                        </div>
                    </div>
                    <p>visita</p>
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
                    <p>visita</p>
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
                    <p>visita</p>
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
                    <p>visita</p>
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
                    <p>visita</p>
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
                    <p>visita</p>
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
<!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header text-center" style="text-align: center; !important">
      
        <img width="100%" height="100px" src="{{ asset('imagenes/headers.png') }}" alt=""  class="isticky-top"  >

      
      </div>
      <div class="modal-body" >
        <div class="text-center">
             <label  for="" style="font-size:20px;color:#0dcaf0">¿Qué es la Visita de ingreso?</label><hr>
        </div>
     
        <label for="">Es donde se recolecta la información de los usuarios, se conoce un poco sobre ellos...</label>
      </div>
      <div class="modal-footer">
       <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>

      </div>
    </div>
  </div>
</div>

   
</div> -->




<!--  -->

@if ($realizado == '1')
<div class="container">
<!-- <form class="d-flex pb-4" role="search">
      <input class="form-control me-2" type="search" placeholder="Buscar folio o representante" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Buscar</button>
    </form> -->


<div class="accordion" id="accordionExample" >
  <div class="accordion-item" id="l1e1">
    <div class="accordion-header" id="headingOne">
      <div class="accordion-button d-flex justify-content-between align-items-center" >
        <div>
        <!-- <span class="badge bg-primary" id="">CATEGORIAS DE BIENESTAR HERRAMIENTA QT</span>  -->
        <span class="badge bg-success ms-auto" style="background:#a80a85 !important; cursor:pointer;font-size:18px" data-bs-toggle="modal" data-bs-target="#exampleModal">Ver QT del hogar</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        
        <span class="badge bg-success ms-auto" id="folioContainer" folio="{{ $variable }}">folio: {{ $variable }}</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

        <input type="text" id="foliobycript" value="{{$foliobycript}}" style="display:none">
        </div>
      </div>
      <!-- <div class="progress">
        <div class="progress-bar bg-success" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
      </div> -->
</div>
    <div id="collapseOne" >
      <div class="accordion-body">
      <div class="row">
      <ul class="nav nav-tabs" >
</ul>

<div id="myTabContent" class="tab-content"><br>
  <div class="tab-pane fade active show" id="home" role="tabpanel" style="overflow-x: auto; ">
  <table class="table table-hover" >
      <thead class="table-light">
        <tr>
          <th scope="col">Categoría</th> 
          <th scope="col">Nombres y apellidos</th>
          <th scope="col">herramienta</th>
          <th scope="col">Avatar</th>

        </tr>
      </thead>
      <tbody id="integrantes"  >
        
      </tbody>
    </table>
      </div>
        </div>
      </div>
          <div class="row">
            <div class="text-start col-5">
                <!-- <div class="btn btn-outline-success" id="volver">Volver</div> -->
                </div>
          
          <div class=" col">
          <!-- <button type="button" class="btn btn-outline-primary" id="finalizarboton" >Finalizar</button> -->
          </div>
          </div>
      
      </div>
    </div>
  </div>
</div>

@endif

    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header text-center">
        <img width="100%" height="100px" src="{{ asset('imagenes/headers.png') }}" alt="" class="isticky-top">
      </div>
      <div class="modal-body">
        <div class="text-center">
          <label style="font-size:20px;color:#0dcaf0">Categorías priorizadas por el hogar con mayor vulnerabilidad</label>
          <hr>
        </div>
                                <div style="display: flex; justify-content: space-between; gap: 20px;" class="mb-2">
                                    <div style="flex: 1;">
                                        <table style="width: 100%; border-radius:10px; border-spacing: 0 10px; border-collapse: separate; background-color: #1E293A; color: white;" class="container">
                                            <tr>
                                                <td style="width: 30%; background-color: #1E293A; color: white; padding: 10px; font-size: 12px">BIENESTAR EN FAMILIA</td>
                                                <td style="width: 10%; text-align: center; font-size: 12px">0%</td>
                                                <td style="width: 50%; background-color: #1E293A; color: white;">
                                                    <div class="progress" style="height: 20px; display: flex;">                                                        
                                                        <!-- Barra verde -->
                                                        <div class="progress-bar" role="progressbar" style="width: {{$porcentaje_verde_bef}}%; background-color: #00FF00;" aria-valuenow="{{$porcentaje_verde_bef}}" aria-valuemin="0" aria-valuemax="100">{{$porcentaje_verde_bef}}%</div>
                                                        
                                                        <!-- Barra roja -->
                                                        <div class="progress-bar" role="progressbar" style="width: {{$porcentaje_rojo_bef}}%; background-color: #FF0000;" aria-valuenow="{{$porcentaje_rojo_bef}}" aria-valuemin="0" aria-valuemax="100">{{$porcentaje_rojo_bef}}%</div>

                                                    </div>
                                                </td>
                                                <td style="width: 10%; text-align: center; font-size: 12px">100%</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                  <!-- Segunda columna -->
                                  <div style="display: flex; justify-content: space-between; gap: 20px;" class="mb-2">
                                    <div style="flex: 1;">
                                        <table style="width: 100%; border-radius:10px; border-spacing: 0 10px; border-collapse: separate; background-color: #1E293A; color: white;" class="container">
                                            <tr>
                                                <td style="width: 30%; background-color: #1E293A; color: white; padding: 10px; font-size: 12px">BIENESTAR FINANCIERO</td>
                                                <td style="width: 10%; text-align: center; font-size: 12px">0%</td>
                                                <td style="width: 50%; background-color: #1E293A; color: white;">
                                                    <div class="progress" style="height: 20px; display: flex;">
                                                        
                                                        <!-- Barra verde -->
                                                        <div class="progress-bar" role="progressbar" style="width: {{$porcentaje_verde_bf}}%; background-color: #00FF00;" aria-valuenow="{{$porcentaje_verde_bf}}" aria-valuemin="0" aria-valuemax="100">{{$porcentaje_verde_bf}}%</div>
                                                        
                                                        <!-- Barra roja -->
                                                        <div class="progress-bar" role="progressbar" style="width: {{$porcentaje_rojo_bf}}%; background-color: #FF0000;" aria-valuenow="{{$porcentaje_rojo_bf}}" aria-valuemin="0" aria-valuemax="100">{{$porcentaje_rojo_bf}}%</div>

                                                    </div>
                                                </td>
                                                <td style="width: 10%; text-align: center; font-size: 12px">100%</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div style="display: flex; justify-content: space-between; gap: 20px;" class="mb-2">
                                    <div style="flex: 1;">
                                        <table style="width: 100%; border-radius:10px; border-spacing: 0 10px; border-collapse: separate; background-color: #1E293A; color: white;" class="container">
                                            <tr>
                                                <td style="width: 30%; background-color: #1E293A; color: white; padding: 10px; font-size: 12px">BIENESTAR INTELECTUAL</td>
                                                <td style="width: 10%; text-align: center; font-size: 12px">0%</td>
                                                <td style="width: 50%; background-color: #1E293A; color: white;">
                                                    <div class="progress" style="height: 20px; display: flex;">
                                                        
                                                        <!-- Barra verde -->
                                                        <div class="progress-bar" role="progressbar" style="width: {{$porcentaje_verde_bi}}%; background-color: #00FF00;" aria-valuenow="{{$porcentaje_verde_bi}}" aria-valuemin="0" aria-valuemax="100">{{$porcentaje_verde_bi}}%</div>
                                                        <!-- Barra roja -->
                                                        <div class="progress-bar" role="progressbar" style="width: {{$porcentaje_rojo_bi}}%; background-color: #FF0000;" aria-valuenow="{{$porcentaje_rojo_bi}}" aria-valuemin="0" aria-valuemax="100">{{$porcentaje_rojo_bi}}%</div>

                                                        <!-- Barra gris -->
                                                    </div>
                                                </td>
                                                <td style="width: 10%; text-align: center; font-size: 12px">100%</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                  <!-- Segunda columna -->
                                  <div style="display: flex; justify-content: space-between; gap: 20px;" class="mb-2">
                                    <div style="flex: 1;">
                                        <table style="width: 100%; border-radius:10px; border-spacing: 0 10px; border-collapse: separate; background-color: #1E293A; color: white;" class="container">
                                            <tr>
                                                <td style="width: 30%; background-color: #1E293A; color: white; padding: 10px; font-size: 12px">BIENESTAR PARA LA SALUD FISICA Y EMOCIONAL</td>
                                                <td style="width: 10%; text-align: center; font-size: 12px">0%</td>
                                                <td style="width: 50%; background-color: #1E293A; color: white;">
                                                    <div class="progress" style="height: 20px; display: flex;">
                                                        
                                                        <!-- Barra verde -->
                                                        <div class="progress-bar" role="progressbar" style="width: {{$porcentaje_verde_bse}}%; background-color: #00FF00;" aria-valuenow="{{$porcentaje_verde_bse}}" aria-valuemin="0" aria-valuemax="100">{{$porcentaje_verde_bse}}%</div>
                                                        <!-- Barra roja -->
                                                        <div class="progress-bar" role="progressbar" style="width: {{$porcentaje_rojo_bse}}%; background-color: #FF0000;" aria-valuenow="{{$porcentaje_rojo_bse}}" aria-valuemin="0" aria-valuemax="100">{{$porcentaje_rojo_bse}}%</div>

                                                        <!-- Barra gris -->
                                                    </div>
                                                </td>
                                                <td style="width: 10%; text-align: center; font-size: 12px">100%</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div style="display: flex; justify-content: space-between; gap: 20px;" class="mb-2">
                                    <div style="flex: 1;">
                                        <table style="width: 100%; border-radius:10px; border-spacing: 0 10px; border-collapse: separate; background-color: #1E293A; color: white;" class="container">
                                            <tr>
                                                <td style="width: 30%; background-color: #1E293A; color: white; padding: 10px; font-size: 12px">BIENESTAR LEGAL</td>
                                                <td style="width: 10%; text-align: center; font-size: 12px">0%</td>
                                                <td style="width: 50%; background-color: #1E293A; color: white;">
                                                    <div class="progress" style="height: 20px; display: flex;">
                                                        
                                                        <!-- Barra verde -->
                                                        <div class="progress-bar" role="progressbar" style="width: {{$porcentaje_verde_bl}}%; background-color: #00FF00;" aria-valuenow="{{$porcentaje_verde_bl}}" aria-valuemin="0" aria-valuemax="100">{{$porcentaje_verde_bl}}%</div>
                                                        <!-- Barra roja -->
                                                        <div class="progress-bar" role="progressbar" style="width: {{$porcentaje_rojo_bl}}%; background-color: #FF0000;" aria-valuenow="{{$porcentaje_rojo_bl}}" aria-valuemin="0" aria-valuemax="100">{{$porcentaje_rojo_bl}}%</div>

                                                        <!-- Barra gris -->
                                                    </div>
                                                </td>
                                                <td style="width: 10%; text-align: center; font-size: 12px">100%</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" id="saludoencuadre1">Aceptar</button>
      </div>
    </div>
  </div>
</div>



<input style="display:none" type="text" value="{{$folioencriptado}}" id="folioencriptado">

<script src="{{ asset('assets/jquery/jquery.js') }}"></script>
    <script>
      paginacargando();
      $(document).ready(function(){
        const folio = $('#folioContainer').attr('folio');
        const folioencriptado= $('#folioencriptado').val();
        localStorage.setItem('folioencriptado',folioencriptado);
      $.ajax({
        url:'../index.php/leerintegrantesqtrombo',
        data:{folio:folio, folioencriptado:folioencriptado},
        method: "GET",
        dataType:'JSON',
        success:function(data){
          $('#integrantes').html(data.foliosintegrante);
          paginalista();
        },
        error: function(xhr, status, error) {
                  console.log(xhr.responseText);
              }
      })
      })

      function iraqt(idintegranteencriptado, folioencriptado){
        var url = "../bienestarsaludemocionalqt/:folio/:idintegrante/2";
        url = url.replace(':folio', folioencriptado); 
        url = url.replace(':idintegrante', idintegranteencriptado);
        window.location.href = url;
      } 
      function responderencuesta(folio,idintegrante, folioencriptado, nombre){
        localStorage.setItem('folio',folio);
        localStorage.setItem('idintegrante', idintegrante);
        localStorage.setItem('folioencriptado', folioencriptado);
        localStorage.setItem('nombre', nombre);
        window.location.href = '../encuestaintegrantesfisicoemocional';
      } 
      
   


      function redirectToIntegrantes() {
           var folio = $('#foliobycript').val();
           var url = "../cobertura/";
         //  url = url.replace(':folio', folio);
           window.location.href = url;
       }

 

      $('#volver').click(function(){
        var folio = $('#foliobycript').val();
           var url = "../rombointegrantes/:folio";
           url = url.replace(':folio', folio);
           window.location.href = url;
      });
    

    </script>


<script>
$(document).ready(function() {
  $('#saludoencuadre').click(function() {
    $.ajax({
      url: '../agregarpasoencuadre',
      data: { folio: '{{$variable}}', usuario:'{{ Session::get('cedula') }}' },
      method: "GET",
      dataType: 'JSON',
      success: function(data) {
        
        console.log(data);
      },
      error: function(xhr, status, error) {
        console.log(xhr.responseText);
      }
    });
  });
});


$(document).ready(function() {

$('#finalizarboton').click(function(){
      $.ajax({
          url: '../finalizarintegrantesqt',
          data: { folio: '{{$variable}}', usuario:'{{ Session::get('cedula') }}' },
          method: "GET",
          dataType: 'JSON',
          success: function(data) {
            redirectToIntegrantes()
            console.log(data);
          },
          error: function(xhr, status, error) {
            console.log(xhr.responseText);
          }
        }); 
      });
    });
</script>



@endsection