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
             <span class="badge bg-warning ms-auto" id="representante" representante="{{ $representante }}" style="font-size:15px">Representante: {{ $representante }}</span>
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
           <label for="">SI</label>
          </div>
        </div>
      </div>
    </div>

   
     <!-- Fila de contenido -->
     <div class="row g-0" id="indicadorbf1" style="display:{{(($indicador_bf_1 == '0')?'':'none')}}">
      <div class="col-md-4 d-flex align-items-center border-end border-bottom">
        <div class="p-2">
        Las personas de 18 años y más que lo requieran acceden a programas de formación, apoyo al emprendimiento e innovación, con el fin de  adquirir habilidades prácticas para iniciar y gestionar sus propios negocios.
         @if($vista != '1')
        <br><br><div class="text-center">
            <div class="btn btn-success text-center" onclick="abrirmodal('<?= $indicadores_tabla[29]->id_bienestar ?>','<?= $indicadores_tabla[29]->id_subcategoria ?>','<?= $indicadores_tabla[29]->id_indicador ?>')">Mover Indicador</div>
          </div>
        @endif
      </div>
      </div>
      <div class="col-md-8">
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Motivación para  emprender por primera vez, emprender nuevamente o fortalecer el emprendimiento
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox"  name="indicador_bf1_1" id="indicador_bf1_1" <?= ($indicador_bf1_1 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicador_bf1_1) ?>">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Conocimiento de la oferta que favorece el emprendimiento y la innovación 
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox"  name="indicador_bf1_2" id="indicador_bf1_2" <?= ($indicador_bf1_2 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicador_bf1_2) ?>">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-start p-2 border-bottom">
          Acceder a formación para el emprendimiento y la  innovación 
          </div>
          <div class="col-2 border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox"  name="indicador_bf1_3" id="indicador_bf1_3" <?= ($indicador_bf1_3 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicador_bf1_3) ?>">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-start p-2 border-bottom">
          Gestionar recursos para emprender 
          </div>
          <div class="col-2 border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox"  name="indicador_bf1_4" id="indicador_bf1_4" <?= ($indicador_bf1_4 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicador_bf1_4) ?>">
            </div>
          </div>
        </div>
      </div>
    </div>

     <!-- Fila de contenido -->
     <div class="row g-0" id="indicadorbf2" style="display:{{(($indicador_bf_2 == '0')?'':'none')}}">
      <div class="col-md-4 d-flex align-items-center border-end border-bottom">
        <div class="p-2">
        Los integrantes del hogar  de 18 años y más que  lo requieren  acceden a servicios de intermediación laboral 
         @if($vista != '1')
        <br><br><div class="text-center">
            <div class="btn btn-success text-center" onclick="abrirmodal('<?= $indicadores_tabla[30]->id_bienestar ?>','<?= $indicadores_tabla[30]->id_subcategoria ?>','<?= $indicadores_tabla[30]->id_indicador ?>')">Mover Indicador</div>
          </div> 
          @endif
      </div>
      </div>
      <div class="col-md-8">
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Identificar las empresas temporales para acceder  a  servicios de intermediación laboral
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox"  name="indicador_bf2_1" id="indicador_bf2_1" <?= ($indicador_bf2_1 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicador_bf2_1) ?>">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Capacitación en la realización de hojas de vida para acceder a servicios de intermediación laboral 
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox"  name="indicador_bf2_2" id="indicador_bf2_2" <?= ($indicador_bf2_2 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicador_bf2_2) ?>">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-start p-2 border-bottom">
          Identificar los empleos a los cuales puedo acceder de acuerdo a mi perfil productivo
          </div>
          <div class="col-2 border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox"  name="indicador_bf2_3" id="indicador_bf2_3" <?= ($indicador_bf2_3 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicador_bf2_3) ?>">
            </div>
          </div>
        </div>
      </div>
    </div>

     <!-- Fila de contenido -->
     <div class="row g-0" id="indicadorbf3" style="display:{{(($indicador_bf_3 == '0')?'':'none')}}">
      <div class="col-md-4 d-flex align-items-center border-end border-bottom">
        <div class="p-2">
        Las personas de 18 años y más que lo requieren se vinculan a un empleo formal (cruce institucional, validación de gestor)
        @if($vista != '1')
        <br><br><div class="text-center">
            <div class="btn btn-success text-center" onclick="abrirmodal('<?= $indicadores_tabla[31]->id_bienestar ?>','<?= $indicadores_tabla[31]->id_subcategoria ?>','<?= $indicadores_tabla[31]->id_indicador ?>')">Mover Indicador</div>
          </div>
           @endif
      </div>
      </div>
      <div class="col-md-8">
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Acceder a un  empleo de tiempo completo 
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox"  name="indicador_bf3_1" id="indicador_bf3_1" <?= ($indicador_bf3_1 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicador_bf3_1) ?>">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Acceder a un  empleo de medio tiempo 
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox"  name="indicador_bf3_2" id="indicador_bf3_2" <?= ($indicador_bf3_2 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicador_bf3_2) ?>">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-start p-2 border-bottom">
          Acceder a un empleo  remoto o de modalidad hibrida 
          </div>
          <div class="col-2 border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox"  name="indicador_bf3_3" id="indicador_bf3_3" <?= ($indicador_bf3_3 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicador_bf3_3) ?>">
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
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox"  name="indicador_bf1_1" id="indicador_bf1_1" <?= ($indicador_bf1_1 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicador_bf1_1) ?>">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
            Afiliación al Sistema General de Seguridad Social en Salud – SGSS-
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox"  name="indicador_bf1_1" id="indicador_bf1_1" <?= ($indicador_bf1_1 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicador_bf1_1) ?>">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-start p-2 border-bottom">
            Conocer la ruta para afiliación al Sistema General de Seguridad Social en Salud – SGSS-
          </div>
          <div class="col-2 border-start border-end d-flex align-items-center justify-content-center">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox"  name="indicador_bf1_1" id="indicador_bf1_1" <?= ($indicador_bf1_1 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicador_bf1_1) ?>">
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
           <label for="">SI</label>
          </div>
        </div>
      </div>
    </div>
  

    <div class="row g-0" id="indicadorbf4" style="display:{{((($indicador_bf_4 == '0') && $representante == 'SI')?'':'none')}}">
      <div class="col-md-4 d-flex align-items-center border-end border-bottom">
        <div class="p-2">
        El hogar implementa un sistema de presupuesto familiar participativo, enfocado en el ahorro y la inversión responsable
        @if($vista != '1')
        <br><br><div class="text-center">
            <div class="btn btn-success text-center" onclick="abrirmodalhogar('<?= $indicadores_tabla[32]->id_bienestar ?>','<?= $indicadores_tabla[32]->id_subcategoria ?>','<?= $indicadores_tabla[32]->id_indicador ?>')">Mover Indicador</div>
          </div>
           @endif
      </div>
      </div>
      <div class="col-md-8">
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Motivación para implementar un sistema de presupuesto familiar participativo
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox"  name="indicador_bf4_1" id="indicador_bf4_1" <?= ($indicador_bf4_1 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicador_bf4_1) ?>">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Objetivos de ahorro familiar  o de inversión
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox"  name="indicador_bf4_2" id="indicador_bf4_2" <?= ($indicador_bf4_2 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicador_bf4_2) ?>">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-start p-2 border-bottom">
          Identificar  gastos fijos  en el hogar que puedan ser reducidos 
          </div>
          <div class="col-2 border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox"  name="indicador_bf4_3" id="indicador_bf4_3" <?= ($indicador_bf4_3 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicador_bf4_3) ?>">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-start p-2 border-bottom">
          Indentificar gastos variables en el hogar que puedan ser priorizados  
          </div>
          <div class="col-2 border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox"  name="indicador_bf4_4" id="indicador_bf4_4" <?= ($indicador_bf4_4 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicador_bf4_4) ?>">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-start p-2 border-bottom">
          Recibir información y/o formación frente al manejo inteligente de los recursos económicos
          </div>
          <div class="col-2 border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox"  name="indicador_bf4_5" id="indicador_bf4_5" <?= ($indicador_bf4_5 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicador_bf4_5) ?>">
            </div>
          </div>
        </div>
      </div>
      </div>
      <div class="row g-0" id="indicadorbf5" style="display:{{(($indicador_bf_5 == '0')?'':'none')}}" >
      <div class="col-md-4 d-flex align-items-center border-end border-bottom">
        <div class="p-2">
        Los integrantes del hogar acceden  a servicios financieros adaptados a sus necesidades,  que contribuyen a mejorar su flujo de dinero y su bienestar económico. 
         @if($vista != '1')
        <br><br><div class="text-center">
            <div class="btn btn-success text-center" onclick="abrirmodal('<?= $indicadores_tabla[33]->id_bienestar ?>','<?= $indicadores_tabla[33]->id_subcategoria ?>','<?= $indicadores_tabla[33]->id_indicador ?>')">Mover Indicador</div>
          </div> 
          @endif
      </div>
      </div>
      <div class="col-md-8">
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Conocer la oferta de servicios financieros de facil acceso y diferenciados para la población de escasos recursos 
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox"  name="indicador_bf5_1" id="indicador_bf5_1" <?= ($indicador_bf5_1 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicador_bf5_1) ?>">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Acceder a servicios financieros del sector formal (bancos,  cooperativas, fondos privados y publicos, cajas de compensación)
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox"  name="indicador_bf5_2" id="indicador_bf5_2" <?= ($indicador_bf5_2 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicador_bf5_2) ?>">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-start p-2 border-bottom">
          Recibir capacitación del uso responsable de los servicios financieros.
          </div>
          <div class="col-2 border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox"  name="indicador_bf5_3" id="indicador_bf5_3" <?= ($indicador_bf5_3 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicador_bf5_3) ?>">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-start p-2 border-bottom">
          Historial crediticio y financiero 
          </div>
          <div class="col-2 border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox"  name="indicador_bf5_4" id="indicador_bf5_4" <?= ($indicador_bf5_4 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicador_bf5_4) ?>">
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
            <button class="btn btn-outline-success" type="submit" <?= ($vista != '1')?'disabled':'' ?>>Guardar</button>
           
            <?= ($vista != '1')? ' <div class="btn btn-outline-primary" id="siguiente2" <?= $siguiente ?>Siguiente</div>':' <div class="btn btn-outline-primary" id="siguiente" <?= $siguiente ?>Siguiente</div>' ?>
           

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

 
    </div>
    <div id="modal"></div>
    <div id="modal2"></div>
    <script src="{{ asset('assets/jquery/jquery.js') }}"></script>

    <script>
    
    function redirectToIntegrantes() {
           var folio = `<?=$variable ?>`;
           var url = "../../../cardsqt/:folio";
           url = url.replace(':folio', folio);
           window.location.href = url;
       }

       function redirectToIntegrantes2() {
           var folio = `<?=encrypt($folio) ?>`;
           var url = "../../../rombo/:folio";
           url = url.replace(':folio', folio);
           window.location.href = url;
       }
    


      $('#siguiente').click(function(){
        redirectToIntegrantes()
      });

      $('#siguiente2').click(function(){
        redirectToIntegrantes2()
      });


      function volversaludemocional() {
          var url = "../../../intelectualqt/<?= $variable ?>/<?= $integrantecodificado ?>/<?= $vista ?>"; window.location.href = url;
       }

       $('#bienestarsaludemocionalqt').click(function(){var url = "../../../bienestarsaludemocionalqt/<?= $variable ?>/<?= $integrantecodificado ?>/<?= $vista ?>"; window.location.href = url;})
    $('#legalqt').click(function(){var url = "../../../legalqt/<?= $variable ?>/<?= $integrantecodificado ?>/<?= $vista ?>"; window.location.href = url;})
    $('#enfamiliaqt').click(function(){var url = "../../../enfamiliaqt/<?= $variable ?>/<?= $integrantecodificado ?>/<?= $vista ?>"; window.location.href = url;})
    $('#intelectualqt').click(function(){var url = "../../../intelectualqt/<?= $variable ?>/<?= $integrantecodificado ?>/<?= $vista ?>"; window.location.href = url;})
    $('#financieroqt').click(function(){var url = "../../../financieroqt/<?= $variable ?>/<?= $integrantecodificado ?>/<?= $vista ?>"; window.location.href = url;})


      


    $(document).ready(function() {
     
     $('#formulario').on('submit', function(event) {
         event.preventDefault(); // Detiene el envío del formulario
         
         var formData = $(this).serializeArray();
         var data = {};
         $(formData).each(function(index, obj) {
             data[obj.name] = obj.value;
         });


         $('#formulario [name]').each(function() {
               var name = $(this).attr('name');

              // Si el elemento es un checkbox
               if ($(this).is(':checkbox')) {
                   // Solo sobrescribe el valor si no es "NO APLICA"
                   if ($(this).val() !== 'NO APLICA') {
                       data[name] = $(this).is(':checked') ? $(this).val() : 'NO';
                   } else {
                       data[name] = 'NO APLICA';
                   }
               }
           });

         console.log(data);

         $.ajax({
             url: '../../../guardarformularioqt',
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
<script>

     document.addEventListener('DOMContentLoaded', function () {
 // Array de switches con un flag para identificar el switch 'Ninguna'
 var healthSwitches = {
    'indicador_bf1_1': { isNone: false },
    'indicador_bf1_2': { isNone: false },
    'indicador_bf1_3': { isNone: false },
    'indicador_bf1_4': { isNone: false },
    'indicador_bf2_1': { isNone: false },
    'indicador_bf2_2': { isNone: false },
    'indicador_bf2_3': { isNone: false },
    'indicador_bf3_1': { isNone: false },
    'indicador_bf3_2': { isNone: false },
    'indicador_bf3_3': { isNone: false },
    'indicador_bf4_1': { isNone: false },
    'indicador_bf4_2': { isNone: false },
    'indicador_bf4_3': { isNone: false },
    'indicador_bf4_4': { isNone: false },
    'indicador_bf5_1': { isNone: false },
    'indicador_bf5_2': { isNone: false },
    'indicador_bf5_3': { isNone: false },
    'indicador_bf5_4': { isNone: false },
    'ninguna_switch': { isNone: true }  // Este es el switch exclusivo
};


 Object.keys(healthSwitches).forEach(function(switchId) {
     var switchElement = document.getElementById(switchId);
     if (switchElement) {
         // Configurar el valor inicial correctamente
         switchElement.value = switchElement.checked ? 'SI' : 'NO';
         switchElement.addEventListener('change', function() {
             handleCheckboxLogic(this, healthSwitches);
         });
     } else {
         console.log("Switch no encontrado: " + switchId);
     }
 });

 function handleCheckboxLogic(changedElement, allSwitches) {
     var isNone = allSwitches[changedElement.id].isNone;
     // Si se selecciona 'Ninguna', desmarcar todos los demás
     if (isNone && changedElement.checked) {
         Object.keys(allSwitches).forEach(function(id) {
             if (id !== changedElement.id) {
                 var otherElement = document.getElementById(id);
                 otherElement.checked = false;
                 otherElement.value = 'NO';
             }
         });
     } else if (!isNone && changedElement.checked) {
         // Si se selecciona cualquier otro y 'Ninguna' está marcado, desmarcar 'Ninguna'
         var noneSwitch = document.getElementById('ninguna_switch');
         if (noneSwitch && noneSwitch.checked) {
             noneSwitch.checked = false;
             noneSwitch.value = 'NO';
         }
     }

     // Actualizar el valor del switch actual
     changedElement.value = changedElement.checked ? 'SI' : 'NO';
 }
});

</script>


<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Ejecutar la función para ambos divs al cargar la página
    checkAndSetSwitchValues('indicadorbf1');
    checkAndSetSwitchValues('indicadorbf2');
    checkAndSetSwitchValues('indicadorbf3');
    checkAndSetSwitchValues('indicadorbf4');
    checkAndSetSwitchValues('indicadorbf5');
  

    // Configuración del observador para ambos divs
    var observer1 = createObserver('indicadorbf1');
    var observer2 = createObserver('indicadorbf2');
    var observer2 = createObserver('indicadorbf3');
    var observer2 = createObserver('indicadorbf4');
    var observer2 = createObserver('indicadorbf5');
    

});

// Función para crear un observador para un div específico
function createObserver(divId) {
    var targetDiv = document.getElementById(divId);

    var observer = new MutationObserver(function(mutations) {
        mutations.forEach(function(mutation) {
            if (mutation.attributeName === "style") {
                checkAndSetSwitchValues(divId);
            }
        });
    });

    var config = { attributes: true, childList: false, characterData: false };
    observer.observe(targetDiv, config);
}

// Función que verifica si el div está oculto y ajusta los switches
function checkAndSetSwitchValues(divId) {
    var targetDiv = document.getElementById(divId);
    var isHidden = window.getComputedStyle(targetDiv).display === 'none';
    var switches = targetDiv.querySelectorAll('.form-check-input');

    if (isHidden) {
        switches.forEach(function(switchEl) {
            switchEl.value = 'NO APLICA';
            console.log(switchEl.id + ' value set to: NO APLICA (div ' + divId + ' is hidden)');
        });
    } else {
        console.log('El div ' + divId + ' no está oculto, no se cambia el valor de los switches.');
    }
}
</script>

<script>
  function abrirmodal(id_bienestar, id_subcategoria, id_indicador){
    $.ajax({
                url: '../../../consultarindicador',
                method: 'GET', // Cambiar a GET si estás usando GET
                data: {id_bienestar:id_bienestar, 
                  id_subcategoria:id_subcategoria, 
                  id_indicador:id_indicador, 
                 folio: '<?= $folio ?>',
                 idintegrante: '<?= $integrante ?>',
                 tabla: '<?= $tabla?>'
                }, // Envía los datos de manera plana
                dataType: 'json',
                success: function(data) {
                  console.log(data);
                  $('#modal').html(data.modal);
                  var indicadors = 'modal-' + id_indicador; // Asegúrate de que "indicador_id" coincida con el ID generado
                  var modal = new bootstrap.Modal(document.getElementById(indicadors)); 
                  modal.show();
                  $('#oportunidades').html(data.oportunidades);
                  $('.selectpicker').selectpicker();
                  $('.filter-option-inner-inner').css('font-size','13px');
                  $('#example').DataTable().destroy(); // Destruye la instancia existente
                  $('#example').DataTable(); // Vuelve a inicializar
                  initializeCheckboxes2();
                  $('#modal2').html(data.modal2);
                 // $('#siguiente').css('display','');
                   // alertagood();
                },
                error: function(xhr, status, error) {
                    alertabad();
                    console.error(error);
                }
            });
  }

  function moverindicadorgestorhogar(folio, idintegrante, id_bienestar, id_indicador) {
  
  var modalElement = document.getElementById('modal-'+ id_indicador);
  var modalInstance = bootstrap.Modal.getInstance(modalElement);
  var observaciongestor = $('#observaciongestor').val();
  let nombreoportunidad = $('#nombreOportunidad').val();
  let telefono = $('#telefonoContacto').val();

    if($('#checkseleccionado').val() == 'Oportunidad no incluida en fichero'  && nombreoportunidad == ''){
      Swal.fire({
          icon: 'warning',
          title: 'Advertencia',
          text: 'Debe llenar el nombre de la oportunidad si seleccionó "Oportunidad no incluida en fichero".'
        }); 
        return
      }
      if($('#checkseleccionado').val() == 'Oportunidad no incluida en fichero'  && telefono == ''){
            Swal.fire({
                icon: 'warning',
                title: 'Advertencia',
                text: 'Debe llenar el campo telefono de la oportunidad si seleccionó "Oportunidad no incluida en fichero".'
              }); 
              return
      }

      if( observaciongestor == ''){
            Swal.fire({
                icon: 'warning',
                title: 'Advertencia',
                text: 'Debe llenar el campo de observación'
              }); 
              return
      }

      if($('#checkseleccionado').val() == '' ){
            Swal.fire({
                icon: 'warning',
                title: 'Advertencia',
                text: 'Debes seleccionar alguna opción".'
              }); 
              return
      }

   $.ajax({
               url: '../../../moverindicadorgestorhogar',
               method: 'GET', // Cambiar a GET si estás usando GET
               data: {id_bienestar:id_bienestar, 
                 id_indicador:id_indicador, 
                folio: '<?= $folio ?>',
                idintegrante: '<?= $integrante ?>',
                usuario: '<?= Session::get('cedula')?>',
                metodo:$('#checkseleccionado').val(),
                  observaciongestor:observaciongestor,
                  nombreoportunidad:nombreoportunidad,
                  telefono:telefono


               }, // Envía los datos de manera plana
               dataType: 'json',
               success: function(data) {
                Swal.fire({
                  position: "center",
                  icon: "success",
                  title: "Indicardor movido con éxito",
                  showConfirmButton: false,
                  timer: 1000
                  });
                setTimeout(() => {
                  location.reload();
                }, 1000);
                location.reload();
                  //modalInstance.hide();
               },
               error: function(xhr, status, error) {
                   alertabad();
                   console.error(error);
               }
           });

}



function moverindicadorgestor(folio, idintegrante, id_bienestar, id_indicador) {
  
  var modalElement = document.getElementById('modal-'+ id_indicador);
  var modalInstance = bootstrap.Modal.getInstance(modalElement);
  let nombreoportunidad = $('#nombreOportunidad').val();
  let telefono = $('#telefonoContacto').val();
  var observaciongestor = $('#observaciongestor').val();

  if($('#checkseleccionado').val() == 'Oportunidad no incluida en fichero'  && nombreoportunidad == ''){
    Swal.fire({
        icon: 'warning',
        title: 'Advertencia',
        text: 'Debe llenar el nombre de la oportunidad si seleccionó "Oportunidad no incluida en fichero".'
      }); 
      return
}
if($('#checkseleccionado').val() == 'Oportunidad no incluida en fichero'  && telefono == ''){
    Swal.fire({
        icon: 'warning',
        title: 'Advertencia',
        text: 'Debe llenar el campo telefono de la oportunidad si seleccionó "Oportunidad no incluida en fichero".'
      }); 
      return
}

if( observaciongestor == ''){
    Swal.fire({
        icon: 'warning',
        title: 'Advertencia',
        text: 'Debe llenar el campo de observación'
      }); 
      return
}

if($('#checkseleccionado').val() == '' ){
    Swal.fire({
        icon: 'warning',
        title: 'Advertencia',
        text: 'Debes seleccionar alguna opción".'
      }); 
      return
}


  console.log(observaciongestor)
   $.ajax({
               url: '../../../moverindicadorgestor',
               method: 'GET', // Cambiar a GET si estás usando GET
               data: {id_bienestar:id_bienestar, 
                 id_indicador:id_indicador, 
                folio: '<?= $folio ?>',
                idintegrante: '<?= $integrante ?>',
                usuario: '<?= Session::get('cedula')?>',
                metodo:$('#checkseleccionado').val(),
                observaciongestor:observaciongestor,
                nombreoportunidad:nombreoportunidad,
                telefono:telefono


               }, // Envía los datos de manera plana
               dataType: 'json',
               success: function(data) {
                Swal.fire({
                  position: "center",
                  icon: "success",
                  title: "Indicardor movido con éxito",
                  showConfirmButton: false,
                  timer: 10000
                  });
                setTimeout(() => {
                  location.reload();
                }, 100);
               // location.reload();
                  //modalInstance.hide();
               },
               error: function(xhr, status, error) {
                   alertabad();
                   console.error(error);
               }
           });

}


  function abrirmodalhogar(id_bienestar, id_subcategoria, id_indicador){
    $.ajax({
                url: '../../../consultarindicadorhogar',
                method: 'GET', // Cambiar a GET si estás usando GET
                data: {id_bienestar:id_bienestar, 
                  id_subcategoria:id_subcategoria, 
                  id_indicador:id_indicador, 
                 folio: '<?= $folio ?>',
                 idintegrante: '<?= $integrante ?>',
                 tabla: '<?= $tabla?>'
                }, // Envía los datos de manera plana
                dataType: 'json',
                success: function(data) {
                  
                  console.log(data);
                  $('#modal').html(data.modal);
                  var indicadors = 'modal-' + id_indicador; // Asegúrate de que "indicador_id" coincida con el ID generado
                  var modal = new bootstrap.Modal(document.getElementById(indicadors)); 
                  modal.show();
                  $('#oportunidades').html(data.oportunidades);
                  $('.selectpicker').selectpicker();
                  $('.filter-option-inner-inner').css('font-size','13px');
                  $('#example').DataTable().destroy(); // Destruye la instancia existente
                  $('#example').DataTable(); // Vuelve a inicializar
                  initializeCheckboxes();
                  $('#modal2').html(data.modal2);
                 // $('#siguiente').css('display','');
                   // alertagood();
                },
                error: function(xhr, status, error) {
                    alertabad();
                    console.error(error);
                }
            });
  }
</script>

<script>
  function agregaroportunidad(idoportunidad,aplica_hogar_integrante, estado_oportunidad, id_bienestar = 0, id_indicador = 0) {
    // Obtiene el select específico usando el id de oportunidad
    let select = document.getElementById(`speaker_${idoportunidad}`);
    let selectedOption = select.options[select.selectedIndex];
//console.log(aplica_hogar_integrante, 'HOLAAAAAAAAAAAAAAA')
    // Obtén los valores directamente
    let idintegrante = selectedOption.value;
    let folio = selectedOption.getAttribute('data-folio');

    console.log("Value:", idintegrante);
    console.log("Data-Folio:", folio);
    $('#acercar'+idoportunidad).attr('disabled', 'disabled');

    $.ajax({
     url: '../../../agregaroportunidad',
     data: {
         folio: folio,
         idintegrante: idintegrante,
         idoportunidad:idoportunidad,
         id_bienestar: id_bienestar,
         id_indicador: id_indicador,
         usuario: '<?= Session::get('cedula') ?>',
         estado_oportunidad:estado_oportunidad,
         linea:'200',
         tabla:'t1_oportunidad_integrantes',
         aplica_hogar_integrante:aplica_hogar_integrante,

     },
     method: "GET",
     dataType: 'JSON',
     success: function(data) {
      $('#acercar'+idoportunidad).removeAttr('disabled');
        selectedOption.setAttribute('data-id', data.insertedId);
        if (data.success && data.estado_oportunidad == '1') {
        $('#acercar'+idoportunidad).attr('disabled', 'disabled');
          $('#acercar'+idoportunidad).removeClass('btn btn-primary').addClass('btn btn-danger');
          $('#acercar'+idoportunidad).html('Acercada');
          $('#efectiva'+idoportunidad).removeAttr('disabled');
          $('#efectiva'+idoportunidad).removeClass('btn btn-success').addClass('btn btn-success');
          $('#efectiva'+idoportunidad).html('Efectiva');
          $('#noefectiva'+idoportunidad).removeAttr('disabled');
          $('#noefectiva'+idoportunidad).removeClass('btn btn-danger').addClass('btn btn-danger');
          $('#noefectiva'+idoportunidad).html('No efectiva');
          Swal.close();
      }else if (data.success && data.estado_oportunidad == '2') {
            $('#acercar'+idoportunidad).removeAttr('disabled');
            $('#acercar'+idoportunidad).removeClass('btn btn-danger').addClass('btn btn-primary');
            $('#acercar'+idoportunidad).html('Acercar');

            $('#efectiva'+idoportunidad).attr('disabled', 'disabled');
            $('#efectiva'+idoportunidad).html('Efectiva');
            $('#noefectiva'+idoportunidad).attr('disabled', 'disabled');
            $('#noefectiva'+idoportunidad).html('No efectiva');
          Swal.close();

           //para actualizar

           Swal.fire({
              position: "center",
              icon: "success",
              title: "Indicardor movido con éxito",
              showConfirmButton: false,
              timer: 1000
              });
            setTimeout(() => {
              location.reload();
            }, 1000);
      }
      else if (data.success && data.estado_oportunidad == '3') {
            $('#acercar'+idoportunidad).removeAttr('disabled');
            $('#acercar'+idoportunidad).removeClass('btn btn-danger').addClass('btn btn-primary');
            $('#acercar'+idoportunidad).html('Acercar');

            $('#noefectiva'+idoportunidad).attr('disabled', 'disabled');
            $('#noefectiva'+idoportunidad).removeClass('btn btn-primary').addClass('btn btn-danger');
            $('#noefectiva'+idoportunidad).html('No efectiva');
            $('#efectiva'+idoportunidad).attr('disabled', 'disabled');
            $('#efectiva'+idoportunidad).html('Efectiva');
          Swal.close();
      }
     },
     error: function(xhr, status, error) {
         console.log(xhr.responseText);
     }
 });
}

function habilitaboton(idoportunidad){
  Swal.fire({
    title: 'Cargando',
    text: 'Por favor espera...',
    allowOutsideClick: false,
    didOpen: () => {
        Swal.showLoading(); // Muestra el spinner de carga
    }
});
  let select = document.getElementById(`speaker_${idoportunidad}`);
    let selectedOption = select.options[select.selectedIndex];

    // Obtén los valores directamente
    let idintegrante = selectedOption.value;
    let id = selectedOption.getAttribute('data-id');
    let folio = selectedOption.getAttribute('data-folio');
  $.ajax({
     url: '../../../veroportunidad',
     data: {
         folio: folio,
         idintegrante: idintegrante,
         idoportunidad: idoportunidad,
         id:id,
         tabla:'t1_oportunidad_integrantes',
     },
     method: "GET",
     dataType: 'JSON',
     success: function(data) {
      if (data.estado == '1') {
          $('#acercar'+idoportunidad).attr('disabled', 'disabled');
          $('#acercar'+idoportunidad).removeClass('btn btn-primary').addClass('btn btn-danger');
          $('#acercar'+idoportunidad).html('Acercada');
          $('#efectiva'+idoportunidad).removeAttr('disabled');
          $('#efectiva'+idoportunidad).removeClass('btn btn-success').addClass('btn btn-success');
          $('#efectiva'+idoportunidad).html('Efectiva');
          $('#noefectiva'+idoportunidad).removeAttr('disabled');
          $('#noefectiva'+idoportunidad).removeClass('btn btn-danger').addClass('btn btn-danger');
          $('#noefectiva'+idoportunidad).html('No efectiva');
          Swal.close();
      }
     else if (data.estado == '2') {
            $('#acercar'+idoportunidad).removeAttr('disabled');
            $('#acercar'+idoportunidad).removeClass('btn btn-danger').addClass('btn btn-primary');
            $('#acercar'+idoportunidad).html('Acercar');

            $('#efectiva'+idoportunidad).attr('disabled', 'disabled');
            $('#efectiva'+idoportunidad).html('Efectiva');
            $('#noefectiva'+idoportunidad).attr('disabled', 'disabled');
            $('#noefectiva'+idoportunidad).html('No efectiva');
        //   $('#acercar'+idoportunidad).attr('disabled', 'disabled');
        //   $('#acercar'+idoportunidad).removeClass('btn btn-primary').addClass('btn btn-danger');
        //   $('#acercar'+idoportunidad).html('Acercada');
          
          Swal.close();
      }
    else  if (data.estado == '3') {
            $('#acercar'+idoportunidad).removeAttr('disabled');
            $('#acercar'+idoportunidad).removeClass('btn btn-danger').addClass('btn btn-primary');
            $('#acercar'+idoportunidad).html('Acercar');

            $('#noefectiva'+idoportunidad).attr('disabled', 'disabled');
            $('#noefectiva'+idoportunidad).removeClass('btn btn-primary').addClass('btn btn-danger');
            $('#noefectiva'+idoportunidad).html('No efectiva');
            $('#efectiva'+idoportunidad).attr('disabled', 'disabled');
            $('#efectiva'+idoportunidad).html('Efectiva');
            Swal.close();
    }    else {
            $('#acercar'+idoportunidad).removeAttr('disabled');
            $('#acercar'+idoportunidad).removeClass('btn btn-danger').addClass('btn btn-primary');
            $('#acercar'+idoportunidad).html('Acercar');
            $('#efectiva'+idoportunidad).attr('disabled', 'disabled');
            $('#efectiva'+idoportunidad).html('Efectiva');
            $('#noefectiva'+idoportunidad).attr('disabled', 'disabled');
            $('#noefectiva'+idoportunidad).html('No efectiva');
           
           Swal.close();
       }

     },
     error: function(xhr, status, error) {
         console.log(xhr.responseText);
     }
 });
}


function moverporpregunta54(folio, id_bienestar, id_indicador) {
  
  let  p1=$('#planeacionfinanciera4295').attr('respuesta');
  let  p2=$('#planeacionfinanciera4296').attr('respuesta');
  let  p3=$('#planeacionfinanciera4297').attr('respuesta');
  let p4= $('#planeacionfinanciera4368').attr('respuesta');

  let atLeastOneChecked = $('.planeacionfinanciera4-input:checked').length > 0;

if (!atLeastOneChecked) {
    // Si no hay ningún checkbox seleccionado, muestra una alerta
    Swal.fire({
        position: "center",
        icon: "warning",
        title: "Debes seleccionar al menos una opción",
        showConfirmButton: true,
        confirmButtonText: "Aceptar"
    });
    return; // Detiene la ejecución de la función
}

$.ajax({
      url: '../../../moverporpregunta54',
      method: 'GET', // Cambiar a GET si estás usando GET
      data: {  
        folio: '<?= $folio ?>',
       id_bienestar:id_bienestar, 
       id_indicador:id_indicador, 
       usuario: '<?= Session::get('cedula')?>',
       p1:p1,
       p2:p2,
       p3:p3,
       p4:p4

      }, // Envía los datos de manera plana
      dataType: 'json',
      success: function(data) {
       Swal.fire({
         position: "center",
         icon: "success",
         title: "Indicador movido con éxito",
         showConfirmButton: false,
         timer: 1000
         });
       setTimeout(() => {
         location.reload();
       }, 1000);
     //  location.reload();
         //modalInstance.hide();
      },
      error: function(xhr, status, error) {
          alertabad();
          console.error(error);
      }
  });

}

function moverporpregunta55(folio, idintegrante, id_bienestar, id_indicador) {  // bancarizacion
  
  let  p1=$('#bancarizacion157').attr('respuesta');
  let  p2=$('#bancarizacion158').attr('respuesta');
  let  p3=$('#bancarizacion159').attr('respuesta');
  let p4 = $('#bancarizacion160').attr('respuesta');
  let p5 = $('#bancarizacion161').attr('respuesta');
  let p6 = $('#bancarizacion162').attr('respuesta');
  let p7 = $('#bancarizacion163').attr('respuesta');
  let p8 = $('#bancarizacion164').attr('respuesta');
  let p9 = $('#bancarizacion371').attr('respuesta');

  let atLeastOneChecked = $('.bancarizacion-input:checked').length > 0;

if (!atLeastOneChecked) {
    // Si no hay ningún checkbox seleccionado, muestra una alerta
    Swal.fire({
        position: "center",
        icon: "warning",
        title: "Debes seleccionar al menos una opción",
        showConfirmButton: true,
        confirmButtonText: "Aceptar"
    });
    return; // Detiene la ejecución de la función
}


$.ajax({
      url: '../../../moverporpregunta55',
      method: 'GET', // Cambiar a GET si estás usando GET
      data: {  
        folio: '<?= $folio ?>',
      idintegrante: '<?= $integrante ?>',
       id_bienestar:id_bienestar, 
       id_indicador:id_indicador, 
       usuario: '<?= Session::get('cedula')?>',
       edad: '<?= $edad ?>',
       p1:p1,
       p2:p2,
       p3:p3,
       p4:p4,
       p5:p5,
       p6:p6,
       p7:p7,
       p8:p8,
       p9:p9,

      }, // Envía los datos de manera plana
      dataType: 'json',
      success: function(data) {
       Swal.fire({
         position: "center",
         icon: "success",
         title: "Indicador movido con éxito",
         showConfirmButton: false,
         timer: 1000
         });
       setTimeout(() => {
         location.reload();
       }, 1000);
      // location.reload();
         //modalInstance.hide();
      },
      error: function(xhr, status, error) {
          alertabad();
          console.error(error);
      }
  });

}


      

</script>

<script>
  function initializeCheckboxes() {
    const checkboxes = document.querySelectorAll('#container-planeacionfinanciera4 .form-check-input');
    const noImplementaNingunaCheckbox = document.querySelector('#planeacionfinanciera4368'); // ID del checkbox "No implementa ninguna"

    checkboxes.forEach((checkbox) => {
        // Inicializar todos los checkboxes con valor "NO"
        checkbox.setAttribute('respuesta', 'NO');
        checkbox.checked = false;

        // Cambiar valor al seleccionar/deseleccionar
        checkbox.addEventListener('change', function () {
            if (checkbox.id === 'planeacionfinanciera4368' && checkbox.checked) {
                // Si selecciona "No implementa ninguna", desmarcar todos los demás
                checkboxes.forEach((otherCheckbox) => {
                    if (otherCheckbox !== checkbox) {
                        otherCheckbox.checked = false;
                        otherCheckbox.setAttribute('respuesta', 'NO');
                    }
                });
            } else if (checkbox.checked) {
                // Si selecciona cualquier otro, desmarcar "No implementa ninguna"
                if (noImplementaNingunaCheckbox.checked) {
                    noImplementaNingunaCheckbox.checked = false;
                    noImplementaNingunaCheckbox.setAttribute('respuesta', 'NO');
                }
                checkbox.setAttribute('respuesta', 'SI');
            } else {
                checkbox.setAttribute('respuesta', 'NO');
            }
        });
    });
}

</script>
<script>
  function initializeCheckboxes2() {
    const checkboxes = document.querySelectorAll('#container-bancarizacion .form-check-input');
    const noImplementaNingunaCheckbox = document.querySelector('#bancarizacion371'); // ID del checkbox "No implementa ninguna"

    checkboxes.forEach((checkbox) => {
        // Inicializar todos los checkboxes con valor "NO"
        checkbox.setAttribute('respuesta', 'NO');
        checkbox.checked = false;

        // Cambiar valor al seleccionar/deseleccionar
        checkbox.addEventListener('change', function () {
            if (checkbox.id === 'bancarizacion371' && checkbox.checked) {
                // Si selecciona "No implementa ninguna", desmarcar todos los demás
                checkboxes.forEach((otherCheckbox) => {
                    if (otherCheckbox !== checkbox) {
                        otherCheckbox.checked = false;
                        otherCheckbox.setAttribute('respuesta', 'NO');
                    }
                });
            } else if (checkbox.checked) {
                // Si selecciona cualquier otro, desmarcar "No implementa ninguna"
                if (noImplementaNingunaCheckbox.checked) {
                    noImplementaNingunaCheckbox.checked = false;
                    noImplementaNingunaCheckbox.setAttribute('respuesta', 'NO');
                }
                checkbox.setAttribute('respuesta', 'SI');
            } else {
                checkbox.setAttribute('respuesta', 'NO');
            }
        });
    });
}

function handleRadioChange(id) {
      console.log(`Cambiaste la selección al radio con ID: ${id}`);

      // Acción específica según el ID
      if (id === 'opcion1') {
        console.log('Opción 1 seleccionada');
        $('#checkseleccionado').val('Oportunidad no incluida en fichero');
        $('#nombreOportunidaddiv').css('display','');
        $('#telefonoContactodiv').css('display','');
      } else if (id === 'opcion2') {
        $('#checkseleccionado').val('Propios medios del hogar');
        $('#nombreOportunidaddiv').css('display','none');
        $('#telefonoContactodiv').css('display','none');
        $('#nombreOportunidad').val('');
        $('#telefonoContacto').val('');

      }
    }

</script>

<script>
function updateRequiredPlaneacionFinanciera4() {
    // Selecciona todos los checkboxes de planeacion financiera 4
    const checkboxes = document.querySelectorAll('.planeacionfinanciera4-input');
    // Verifica si al menos uno está seleccionado
    const atLeastOneChecked = Array.from(checkboxes).some(checkbox => checkbox.checked);

    // Si al menos uno está seleccionado, elimina 'required' de todos
    if (atLeastOneChecked) {
        checkboxes.forEach(checkbox => checkbox.removeAttribute('required'));
    } else {
        // Si ninguno está seleccionado, agrega 'required' a todos
        checkboxes.forEach(checkbox => checkbox.setAttribute('required', true));
    }
}
</script>

<script>
function updateRequiredBancarizacion() {
    // Selecciona todos los checkboxes de bancarización
    const checkboxes = document.querySelectorAll('.bancarizacion-input');
    // Verifica si al menos uno está seleccionado
    const atLeastOneChecked = Array.from(checkboxes).some(checkbox => checkbox.checked);

    // Si al menos uno está seleccionado, elimina 'required' de todos
    if (atLeastOneChecked) {
        checkboxes.forEach(checkbox => checkbox.removeAttribute('required'));
    } else {
        // Si ninguno está seleccionado, agrega 'required' a todos
        checkboxes.forEach(checkbox => checkbox.setAttribute('required', true));
    }
}
</script>

<script>

    function seleccionartipodemovimiento(){
      if($('#tipomovimientoindicadores').val() == 1){
        console.log('moverindicadorporgestor')
        $('#moverindicadorporgestor').css('display','');
        $('#moverindicadorporoportunidades').css('display','none');
        $('.moverindicadorporpreguntas').css('display','none');
        $('#moverindicadorporgestorfinal').css('display','none');
      };
      if($('#tipomovimientoindicadores').val() == 2){
        console.log('moverindicadorporoportunidades')
        $('#moverindicadorporoportunidades').css('display','');
        $('#moverindicadorporgestor').css('display','none');
        $('.moverindicadorporpreguntas').css('display','none');
        $('#moverindicadorporgestorfinal').css('display','none');
      };
      if($('#tipomovimientoindicadores').val() == 3){
        console.log('moverindicadorporpreguntas')
        $('.moverindicadorporpreguntas').css('display','');
        $('#moverindicadorporoportunidades').css('display','none');
        $('#moverindicadorporgestor').css('display','none');
        $('#moverindicadorporgestorfinal').css('display','none');
      };
      if($('#tipomovimientoindicadores').val() == 4){
        console.log('moverindicadorporgestorfinal')
        $('#moverindicadorporgestorfinal').css('display','');
        $('.moverindicadorporpreguntas').css('display','none');
        $('#moverindicadorporoportunidades').css('display','none');
        $('#moverindicadorporgestor').css('display','none');
      };
    }
     
   
    function abrirSegundoModal(id_oportunidad) {
    var modalId = 'detalle-modal-' + id_oportunidad;
    var modalElement = document.getElementById(modalId);

    if (!modalElement) {
        console.error("❌ Error: No se encontró el modal con ID:", modalId);
        return;
    }

    // Abre el segundo modal sin cerrar el primero
    var segundoModal = new bootstrap.Modal(modalElement, { backdrop: 'static', keyboard: false });
    segundoModal.show();
}
</script>

@endsection