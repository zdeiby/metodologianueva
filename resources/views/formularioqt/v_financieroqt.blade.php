@extends('componentes.navlateral')

@section('title', 'Financiero qt')

@section('content')
<!-- <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" >  -->
<style>
  #imagenDinamica:hover{
    border:2px solid gray;
  }
  .imagenDinamicaselect:hover{
    border:2px solid gray;
  }

  .imagenselect{
    border:2px solid gray;
    background: transparent;
    background-color: #e0e0e0;
  }
</style>

<div class="container">
    <img width="100%" height="100px" src="{{ asset('imagenes/headers.png') }}" alt="" class=""  >
<!-- <form class="d-flex pb-4" role="search">
      <input class="form-control me-2" type="search" placeholder="Buscar folio o representante" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Buscar</button>
    </form> -->


        <div class="accordion" id="accordionExample" >
        <div class="accordion-item" id="l1e1">
            <div class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
           <div>
            <span class="badge bg-primary" id=""  style="font-size:15px">FINANCIERO QT</span>
             <span class="badge bg-success ms-auto" id="folioContainer" folio="{{ $folio }}" style="font-size:15px">folio: {{ $folio }}</span>
             <span class="badge bg-warning ms-auto" id="folioContainer" folio="{{ $folio }}" style="font-size:15px">Idintegrante: {{ $integrante }}</span>
           </div> 
            </button>
    <br>
        </div>

    <div><span class="badge bg-success mt-2" id="folio"></span>
    <span class="badge bg-primary" style="display:" id="idintegrante"></span>
    <span class="badge bg-primary" style="background:#a80a85 !important; color:white" id="nombre"></span>
    <span class="badge bg-primary" style="background:#0dcaf0 !important; color:white" id="sexointegrante"></span>
    <span class="badge bg-primary" style="background:#FF8803 !important; color:white" id="edadintegrante"></span>

    </div>

    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <div class="row">
      <ul class="nav nav-tabs" role="tablist">
      <li class="nav-item" role="presentation"  style="cursor:pointer">
        <a id="bienestarsaludemocionalqt" class="nav-link ">BIENESTAR SALUD-EMOCIONAL
        </a>
      </li>
  <li class="nav-item" role="presentation" style="cursor:pointer">
    <a id="legalqt"  class="nav-link" >BIENESTAR LEGAL</a>
  </li>
  <li class="nav-item" role="presentation"  style="cursor:pointer">
    <a id="enfamiliaqt"  class="nav-link " >BIENESTAR EN FAMILIA</a>
  </li>
  <li class="nav-item" role="presentation"  style="cursor:pointer">
    <a id="intelectualqt"  class="nav-link ">BIENESTAR INTELECTUAL</a>
  </li>
  <li class="nav-item" role="presentation"  style="cursor:pointer">
    <a id="financieroqt"  class="nav-link active">BIENESTAR FINANCIERO</a>
  </li>
  
</ul>



<style>
  .invalid-checkbox {
      border: 1px solid red;
      border-radius: 4px;
      padding: 10px;
    }
</style>

<div id="myTabContent" class="tab-content"><br>
  <div class="tab-pane fade active show" id="home" role="tabpanel" aria-labelledby="identificacion">
    <!-- <div class="text-center"><label for="">Avatar</label></div>
        <div class="avatar text-center" style="cursor:pointer">
          <img src="{{asset('avatares/blanco.png')}} " id="imagenDinamica" class="rounded-circle" alt="Avatar" style="width: 150px; height: 150px;" data-bs-toggle="modal" data-bs-target="#exampleModal">
        </div> -->

          <form id="formulario" class="row g-3 was-validated">     
            
          <div class="col-md-3" style="display:none">
            <input type="text" placeholder="folio" class="form-control form-control-sm  " id="folioinput" name="folio" value="{{ $folio }}" >
          </div>
          <div class="col-md-3" style="display:none">
            <input type="text"  class="form-control form-control-sm  " id="idintegrante1" name="idintegrante" value="{{$integrante}}" >
          </div>
          <div class="col-md-3" style="display:none">
            <input type="text" placeholder="usuario" class="form-control form-control-sm  " id="usuario" name="usuario" value="{{ Session::get('cedula') }}" >
          </div>
          <div class="col-md-3" style="display:none">
            <input type="text" placeholder="tabla" class="form-control form-control-sm  " id="tabla" name="tabla" value="{{$tabla}}" >
          </div>

          <span class="badge bg-primary" id="" style="font-size:15px; background:#a80a85 !important">Generación de ingresos</span>
          
          <div class="container mt-4">
  <div class="border">
    <!-- Fila de títulos -->
    <div class="row g-0">
      <div class="col-md-4 d-flex align-items-center border-end border-bottom border-bottom text-center" style="background:#2fa4e7; color:white; font-weight:bold">
        <div class="p-2 text-center">
        INDICADOR
        </div>
      </div>
      <div class="col-md-8">
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2 text-center" style="background:#2fa4e7; color:white; font-weight:bold">
          QUIERO Y NO TENGO
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom text-center" style="background:#2fa4e7; color:white; font-weight:bold">
           <label for="">SI / NO</label>
          </div>
        </div>
      </div>
    </div>

   
     <!-- Fila de contenido -->
     <div class="row g-0">
      <div class="col-md-4 d-flex align-items-center border-end border-bottom">
        <div class="p-2">
        Las personas de 18 años y más que lo requieran acceden a  programas de formación, apoyo al emprendimiento e innovación, con el fin de  adquirir habilidades prácticas para iniciar y gestionar sus propios negocios.
        </div>
      </div>
      <div class="col-md-8">
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Motivación para  emprender por primera vez, emprender nuevamente o fortalecer el emprendimiento
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" name="acceso3[]" id="acceso350" value="50" respuesta="SI">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Conocimiento de la oferta que favorece el emprendimiento y la innovación 
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" name="acceso3[]" id="acceso351" value="51" respuesta="SI">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-start p-2 border-bottom">
          Acceder a formación para el emprendimiento y la  innovación 
          </div>
          <div class="col-2 border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" name="acceso3[]" id="acceso352" value="52" respuesta="SI">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-start p-2 border-bottom">
          Gestionar recursos para emprender 
          </div>
          <div class="col-2 border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" name="acceso3[]" id="acceso352" value="52" respuesta="SI">
            </div>
          </div>
        </div>
      </div>
    </div>

     <!-- Fila de contenido -->
     <div class="row g-0">
      <div class="col-md-4 d-flex align-items-center border-end border-bottom">
        <div class="p-2">
        Los integrantes del hogar  de 18 años y más que  lo requieren  acceden a servicios de intermediación laboral 
        </div>
      </div>
      <div class="col-md-8">
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Identificar las empresas temporales para acceder  a  servicios de intermediación laboral
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" name="acceso3[]" id="acceso350" value="50" respuesta="SI">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Capacitación en la realización de hojas de vida para acceder a servicios de intermediación laboral 
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" name="acceso3[]" id="acceso351" value="51" respuesta="SI">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-start p-2 border-bottom">
          Identificar los empleos a los cuales puedo acceder de acuerdo a mi perfil productivo
          </div>
          <div class="col-2 border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" name="acceso3[]" id="acceso352" value="52" respuesta="SI">
            </div>
          </div>
        </div>
      </div>
    </div>

     <!-- Fila de contenido -->
     <div class="row g-0">
      <div class="col-md-4 d-flex align-items-center border-end border-bottom">
        <div class="p-2">
        Las personas de 18 años y más que lo requieren se vinculan a un empleo formal (cruce institucional, validación de gestor)
        </div>
      </div>
      <div class="col-md-8">
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Acceder a un  empleo de tiempo completo 
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" name="acceso3[]" id="acceso350" value="50" respuesta="SI">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Acceder a un  empleo de medio tiempo 
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" name="acceso3[]" id="acceso351" value="51" respuesta="SI">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-start p-2 border-bottom">
          Acceder a un empleo  remoto o de modalidad hibrida 
          </div>
          <div class="col-2 border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" name="acceso3[]" id="acceso352" value="52" respuesta="SI">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<!-- LOGRO -->
<!-- 
<span class="badge bg-success" id="" style="font-size:15px; ">Alfabetización digital</span>

<div class="container mt-4">
  <div class="border">
   
    <div class="row g-0">
      <div class="col-md-4 d-flex align-items-center border-end border-bottom text-center" style="background:#2fa4e7; color:white; font-weight:bold">
        <div class="p-2 text-center">
          INDICADOR
        </div>
      </div>
      <div class="col-md-8">
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2 text-center" style="background:#2fa4e7; color:white; font-weight:bold">
            QUIERO Y NO TENGO
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center text-center" style="background:#2fa4e7; color:white; font-weight:bold">
            <label for="">SI / NO</label>
          </div>
        </div>
      </div>
    </div>
  
    <div class="row g-0">
      <div class="col-md-4 d-flex align-items-center border-end border-bottom">
        <div class="p-2">
          Los integrantes de la familia están afiliados al Sistema General de Seguridad Social en Salud – SGSS-
        </div>
      </div>
      <div class="col-md-8">
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
            Reconocer la importancia de estar afiliado al Sistema General de Seguridad Social en Salud – SGSS
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center">
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" name="acceso3[]" id="acceso350" value="50" respuesta="SI">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
            Afiliación al Sistema General de Seguridad Social en Salud – SGSS-
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center">
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" name="acceso3[]" id="acceso351" value="51" respuesta="SI">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-start p-2 border-bottom">
            Conocer la ruta para afiliación al Sistema General de Seguridad Social en Salud – SGSS-
          </div>
          <div class="col-2 border-start border-end d-flex align-items-center justify-content-center">
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" name="acceso3[]" id="acceso352" value="52" respuesta="SI">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> -->



<!-- LOGRO -->
<span class="badge bg-primary" id="" style="font-size:15px; background:#ff8403 !important">Gestión financiera</span>


<div class="container mt-4">
  <div class="border">
    <!-- Fila de títulos -->
    <div class="row g-0">
      <div class="col-md-4 d-flex align-items-center border-end border-bottom border-bottom text-center" style="background:#2fa4e7; color:white; font-weight:bold">
        <div class="p-2 text-center">
        INDICADOR
        </div>
      </div>
      <div class="col-md-8">
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2 text-center" style="background:#2fa4e7; color:white; font-weight:bold">
          QUIERO Y NO TENGO
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom text-center" style="background:#2fa4e7; color:white; font-weight:bold">
           <label for="">SI / NO</label>
          </div>
        </div>
      </div>
    </div>
  

    <div class="row g-0">
      <div class="col-md-4 d-flex align-items-center border-end border-bottom">
        <div class="p-2">
        El hogar implementa un sistema de presupuesto familiar participativo, enfocado en el ahorro y la inversión responsable
        </div>
      </div>
      <div class="col-md-8">
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Motivación para implementar un sistema de presupuesto familiar participativo
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" name="acceso3[]" id="acceso350" value="50" respuesta="SI">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Objetivos de ahorro familiar  o de inversión
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" name="acceso3[]" id="acceso351" value="51" respuesta="SI">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-start p-2 border-bottom">
          Identificar  gastos fijos  en el hogar que puedan ser reducidos 
          </div>
          <div class="col-2 border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" name="acceso3[]" id="acceso352" value="52" respuesta="SI">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-start p-2 border-bottom">
          Indentificar gastos variables en el hogar que puedan ser priorizados  
          </div>
          <div class="col-2 border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" name="acceso3[]" id="acceso352" value="52" respuesta="SI">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-start p-2 border-bottom">
          Recibir información y/o formación frente al manejo inteligente de los recursos económicos
          </div>
          <div class="col-2 border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" name="acceso3[]" id="acceso352" value="52" respuesta="SI">
            </div>
          </div>
        </div>
      </div>
      </div>
      <div class="row g-0">
      <div class="col-md-4 d-flex align-items-center border-end border-bottom">
        <div class="p-2">
        Los integrantes del hogar  acceden  a servicios financieros adaptados a sus necesidades,  que contribuyen a mejorar su flujo de dinero y su bienestar económico. 
        </div>
      </div>
      <div class="col-md-8">
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Conocer la oferta de servicios financieros de facil acceso y diferenciados para la población de escasos recursos 
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" name="acceso3[]" id="acceso350" value="50" respuesta="SI">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Acceder a servicios financieros del sector formal (bancos,  cooperativas, fondos privados y publicos, cajas de compensación)
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" name="acceso3[]" id="acceso351" value="51" respuesta="SI">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-start p-2 border-bottom">
          Recibir capacitación del uso responsable de los servicios financieros.
          </div>
          <div class="col-2 border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" name="acceso3[]" id="acceso352" value="52" respuesta="SI">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-start p-2 border-bottom">
          Historial crediticio y financiero 
          </div>
          <div class="col-2 border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" name="acceso3[]" id="acceso352" value="52" respuesta="SI">
            </div>
          </div>
        </div>
      </div>
    </div>





  </div>
</div>












          <hr>
          <div class="row">  
            <div class="text-start col">
            <div class="btn btn-outline-success" onclick="volversaludemocional()">Volver</div>
            </div>
            <div class="text-end col">
            <button class="btn btn-outline-success" type="submit">Guardar</button>
            <div class="btn btn-outline-primary" id="siguiente" style="display:none">Siguiente</div>
            </div> 
          </div>

        </form> 
      </div>
        </div>
      </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
          Selecciona un avatar     
        </div>
      <div class="modal-body">
      <img src="{{asset('avatares/1.png')}}" id="1" class="rounded-circle imagenDinamicaselect" onclick="agregarImagen('1')" alt="Avatar" style="width: 150px; height: 150px;">
      <img src="{{asset('avatares/2.png')}}" id="2" class="rounded-circle imagenDinamicaselect" onclick="agregarImagen('2')" alt="Avatar" style="width: 150px; height: 150px;">
      <img src="{{asset('avatares/3.png')}}" id="3" class="rounded-circle imagenDinamicaselect" onclick="agregarImagen('3')" alt="Avatar" style="width: 150px; height: 150px;">
      <img src="{{asset('avatares/4.png')}}" id="4" class="rounded-circle imagenDinamicaselect" onclick="agregarImagen('4')" alt="Avatar" style="width: 150px; height: 150px;">
      <img src="{{asset('avatares/5.png')}}" id="5" class="rounded-circle imagenDinamicaselect" onclick="agregarImagen('5')" alt="Avatar" style="width: 150px; height: 150px;">
      <img src="{{asset('avatares/6.png')}}" id="6" class="rounded-circle imagenDinamicaselect" onclick="agregarImagen('6')" alt="Avatar" style="width: 150px; height: 150px;">
      <img src="{{asset('avatares/7.png')}}" id="7" class="rounded-circle imagenDinamicaselect" onclick="agregarImagen('7')" alt="Avatar" style="width: 150px; height: 150px;">
      <img src="{{asset('avatares/8.png')}}" id="8" class="rounded-circle imagenDinamicaselect" onclick="agregarImagen('8')" alt="Avatar" style="width: 150px; height: 150px;">
      <img src="{{asset('avatares/9.png')}}" id="9" class="rounded-circle imagenDinamicaselect" onclick="agregarImagen('9')" alt="Avatar" style="width: 150px; height: 150px;">
      <img src="{{asset('avatares/10.png')}}" id="10" class="rounded-circle imagenDinamicaselect" onclick="agregarImagen('10')" alt="Avatar" style="width: 150px; height: 150px;">
      <img src="{{asset('avatares/11.png')}}" id="11" class="rounded-circle imagenDinamicaselect" onclick="agregarImagen('11')" alt="Avatar" style="width: 150px; height: 150px;">
      <img src="{{asset('avatares/12.png')}}" id="12" class="rounded-circle imagenDinamicaselect" onclick="agregarImagen('12')" alt="Avatar" style="width: 150px; height: 150px;">
      <img src="{{asset('avatares/13.png')}}" id="13" class="rounded-circle imagenDinamicaselect" onclick="agregarImagen('13')" alt="Avatar" style="width: 150px; height: 150px;">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" onclick="cargarImagen()">Guardar</button>
      </div>
    </div>
  </div>
</div>

 
    </div>

    <script src="{{ asset('assets/jquery/jquery.js') }}"></script>

    <script>
    


    function agregarImagen(id){
      $(`#${id}`).addClass('imagenselect');
      for (let index = 0; index < 14; index++) {
        if(id == index){
            localStorage.setItem('numimage',id)
        }else{
          $(`#${index}`).removeClass('imagenselect');
        }
      }
    }

    function cargarImagen(){
      imagen=localStorage.getItem('numimage');
      folio=localStorage.getItem('folio');
      idintegrante=localStorage.getItem('idintegrante');
      $.ajax({
        url:'./guardaravatar',
        data:{folio:folio, idintegrante:idintegrante, avatar:imagen},
        method: "GET",
        dataType:'JSON',
        success:function(data){
          $('#imagenDinamica').attr('src',`../public/avatares/${imagen}.png`);
          localStorage.setItem('imagen',`../public/avatares/${imagen}.png`)
          $('#exampleModal').modal('hide');
        },
        error: function(xhr, status, error) {
                  console.log(xhr.responseText);
              }
      })
    }
    
    function redirectToIntegrantes() {
           var folio = `<?=$variable ?>`;
           var url = "../../cardsqt/:folio";
           url = url.replace(':folio', folio);
           window.location.href = url;
       }
    


      $('#siguiente').click(function(){
        redirectToIntegrantes()
      });

      function volversaludemocional() {
          var url = "../../intelectualqt/<?= $variable ?>/<?= $integrantecodificado ?>"; window.location.href = url;
       }

      $('#bienestarsaludemocionalqt').click(function(){var url = "../../bienestarsaludemocionalqt/<?= $variable ?>/<?= $integrantecodificado ?>"; window.location.href = url;})
    $('#legalqt').click(function(){var url = "../../legalqt/<?= $variable ?>/<?= $integrantecodificado ?>"; window.location.href = url;})
    $('#enfamiliaqt').click(function(){var url = "../../enfamiliaqt/<?= $variable ?>/<?= $integrantecodificado ?>"; window.location.href = url;})
    $('#intelectualqt').click(function(){var url = "../../intelectualqt/<?= $variable ?>/<?= $integrantecodificado ?>"; window.location.href = url;})
    $('#financieroqt').click(function(){var url = "../../financieroqt/<?= $variable ?>/<?= $integrantecodificado ?>"; window.location.href = url;})


      

    $(document).ready(function() {
     
     $('#formulario').on('submit', function(event) {
         event.preventDefault(); // Detiene el envío del formulario
         
         var formData = $(this).serializeArray();
         var data = {};
         $(formData).each(function(index, obj) {
             data[obj.name] = obj.value;
         });

         console.log(data);

         $.ajax({
             url: '../../guardarformularioqt',
             method: 'GET', // Cambiar a GET si estás usando GET
             data: data, // Envía los datos de manera plana
             success: function(response) {
              $('#siguiente').css('display','');
                 alertagood();
             },
             error: function(xhr, status, error) {
                 alertabad();
                 console.error(error);
             }
         });
     });
});



    </script>
 

@endsection