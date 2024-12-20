@extends('componentes.navlateral')

@section('title', 'Legal qt')

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
            <span class="badge bg-primary" id=""  style="font-size:15px">ENCUESTA INTEGRANTES</span>
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
    <a id="legalqt"  class="nav-link " >BIENESTAR LEGAL</a>
  </li>
  <li class="nav-item" role="presentation"  style="cursor:pointer">
    <a id="enfamiliaqt"  class="nav-link active" >BIENESTAR EN FAMILIA</a>
  </li>
  <li class="nav-item" role="presentation"  style="cursor:pointer">
    <a id="intelectualqt"  class="nav-link ">BIENESTAR INTELECTUAL</a>
  </li>
  <li class="nav-item" role="presentation"  style="cursor:pointer">
    <a id="financieroqt"  class="nav-link ">BIENESTAR FINANCIERO</a>
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
    <!-- <br><br><div class="text-center"><label for="">Avatar</label></div>
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

<!-- LOGRO -->
<span class="badge bg-primary" id="" style="font-size:15px; background:#ff8403 !important">Disciplina positiva</span>

<div class="container mt-4" >
  <div class="border">
    <!-- Fila de títulos -->
    <div class="row g-0" >
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
            <label for="">SI</label>
          </div>
        </div>
      </div>
    </div>
  
    <div class="row g-0" id="indicadorbef1" style="display:{{((($indicador_bef_1 == '0') && $representante == 'SI')?'':'none')}}" >
      <div class="col-md-4 d-flex align-items-center border-end border-bottom">
        <div class="p-2">
        Los integrantes del hogar implementan estrategias de disciplina positiva, fomentando el respeto mutuo y la resolución pacífica de conflictos en el entorno familiar.
        <br><br><div class="text-center">
            <div class="btn btn-success text-center" onclick="abrirmodalhogar('<?= $indicadores_tabla[17]->id_bienestar ?>','<?= $indicadores_tabla[17]->id_subcategoria ?>','<?= $indicadores_tabla[17]->id_indicador ?>')">Mover Indicador</div>
          </div>
      </div>
      </div>
      <div class="col-md-8" >
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Tener espacios  de dialogo para expresar lo que sentimos
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox"  name="indicador_bef1_1" id="indicador_bef1_1" <?= ($indicador_bef1_1 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicador_bef1_1) ?>">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Utilizar estrategias para resolver las diferencias sin acudir a la violencia verbal o física
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox" name="indicador_bef1_2" id="indicador_bef1_2" <?= ($indicador_bef1_2 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicador_bef1_2) ?>">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-start p-2 border-bottom">
            Implementar practicas  de crianza respetuosa
          </div>
          <div class="col-2 border-start border-end d-flex align-items-center justify-content-center">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox" name="indicador_bef1_3" id="indicador_bef1_3" <?= ($indicador_bef1_3 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicador_bef1_3) ?>">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-start p-2 border-bottom">
          Promoveer el reconocimiento y motivación entre los intregrantes del hogar 
          </div>
          <div class="col-2 border-start border-end d-flex align-items-center justify-content-center">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox" name="indicador_bef1_4" id="indicador_bef1_4" <?= ($indicador_bef1_4 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicador_bef1_4) ?>">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<!-- LOGRO -->
<span class="badge bg-success" id="" style="font-size:15px; ">Dinámica familiar</span>

<div class="container mt-4">
  <div class="border">
    <!-- Fila de títulos -->
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
            <label for="">SI</label>
          </div>
        </div>
      </div>
    </div>
  
    <div class="row g-0" id="indicadorbef2" style="display:{{((($indicador_bef_2 == '0') && $representante == 'SI')?'':'none')}}">
      <div class="col-md-4 d-flex align-items-center border-end border-bottom">
        <div class="p-2">
        Los integrantes del hogar establecen  vínculos solidarios y de comunicación para resolver necesidades especificas con sus  redes de apoyo familiares y comunitarias 
        <br><br><div class="text-center">
            <div class="btn btn-success text-center" onclick="abrirmodalhogar('<?= $indicadores_tabla[18]->id_bienestar ?>','<?= $indicadores_tabla[18]->id_subcategoria ?>','<?= $indicadores_tabla[18]->id_indicador ?>')">Mover Indicador</div>
          </div>
      </div>
      </div>
      <div class="col-md-8">
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Establecer  redes de apoyo en las que haya   confianza,  escucha y afecto.
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox" name="indicador_bef2_1" id="indicador_bef2_1" <?= ($indicador_bef2_1 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicador_bef2_1) ?>">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Establecer  redes de apoyo para el cuidado y acompañamiento de los integrantes del hogar que lo requieran 
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox" name="indicador_bef2_2" id="indicador_bef2_2" <?= ($indicador_bef2_2 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicador_bef2_2) ?>">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-start p-2 border-bottom">
          Identificar redes de apoyo para el aporte de dinero, alojamiento, alimentación, indumentaria, donaciones u otros que aporten con  necesidades materiales
          </div>
          <div class="col-2 border-start border-end d-flex align-items-center justify-content-center">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox" name="indicador_bef2_3" id="indicador_bef2_3" <?= ($indicador_bef2_3 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicador_bef2_3) ?>">
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>
</div>


<!-- LOGRO -->
<span class="badge bg-primary" id="" style="font-size:15px; ">Dinámica familiar</span>

<div class="container mt-4">
  <div class="border">
    <!-- Fila de títulos -->
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
            <label for="">SI</label>
          </div>
        </div>
      </div>
    </div>
  
    <div class="row g-0" id="indicadorbef3" style="display:{{((($indicador_bef_3 == '0') && $representante == 'SI')?'':'none')}}">
      <div class="col-md-4 d-flex align-items-center border-end border-bottom">
        <div class="p-2">
       
        Los integrantes del hogar conocen las rutas para la prevención e intervención de la violencia intrafamiliar y las violencias basadas en género.
         <br><br><div class="text-center">
            <div class="btn btn-success text-center" onclick="abrirmodalhogar('<?= $indicadores_tabla[19]->id_bienestar ?>','<?= $indicadores_tabla[19]->id_subcategoria ?>','<?= $indicadores_tabla[19]->id_indicador ?>')">Mover Indicador</div>
          </div></div>
      </div>
      <div class="col-md-8">
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Conocer las rutas de atención frente a la violencia intrafamiliar y las violencias basadas en género  
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox" name="indicador_bef3_1" id="indicador_bef3_1" <?= ($indicador_bef3_1 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicador_bef3_1) ?>">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Reconocer los signos de alerta de la violencia intrafamiliar y las violencias basadas en género para desnaturalizarla en las relaciones familiares
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox" name="indicador_bef3_2" id="indicador_bef3_2" <?= ($indicador_bef3_2 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicador_bef3_2) ?>">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-start p-2 border-bottom">
          Acceder a las rutas para la prevención e intervención de la violencia intrafamiliar y las violencias basadas en género de manera segura 
          </div>
          <div class="col-2 border-start border-end d-flex align-items-center justify-content-center">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox" name="indicador_bef3_3" id="indicador_bef3_3" <?= ($indicador_bef3_3 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicador_bef3_3) ?>">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- LOGRO -->
<span class="badge bg-primary" id="" style="font-size:15px; background:#a80a85 !important">Tiempo libre y recreación</span>

<div class="container mt-4">
  <div class="border">
    <!-- Fila de títulos -->
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
            <label for="">SI</label>
          </div>
        </div>
      </div>
    </div>
  
    <div class="row g-0" id="indicadorbef4" style="display:{{((($indicador_bef_4 == '0') && $representante == 'SI')?'':'none')}}">
      <div class="col-md-4 d-flex align-items-center border-end border-bottom">
        <div class="p-2">
        Los  integrantes del hogar participan en familia  de actividades sociales, culturales, recreativas y/o deportivas.
        <br><br><div class="text-center">
            <div class="btn btn-success text-center" onclick="abrirmodalhogar('<?= $indicadores_tabla[20]->id_bienestar ?>','<?= $indicadores_tabla[20]->id_subcategoria ?>','<?= $indicadores_tabla[20]->id_indicador ?>')">Mover Indicador</div>
          </div>
      </div>
      </div>
      <div class="col-md-8">
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Organizar el tiempo para participar en actividades culturales, recreativas y deportivas
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox" name="indicador_bef4_1" id="indicador_bef4_1" <?= ($indicador_bef4_1 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicador_bef4_1) ?>">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Conocer los espacios de ciudad que permiten aprovechar el tiempo libre
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox" name="indicador_bef4_2" id="indicador_bef4_2" <?= ($indicador_bef4_2 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicador_bef4_2) ?>">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-start p-2 border-bottom">
          Interes por la participación en actividades culturales, recreativas y deportivas
          </div>
          <div class="col-2 border-start border-end d-flex align-items-center justify-content-center">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox" name="indicador_bef4_3" id="indicador_bef4_3" <?= ($indicador_bef4_3 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicador_bef4_3) ?>">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-start p-2 border-bottom">
          Acceder a servicios relacionados  de   actividades culturales, recreativas y deportivas.
          </div>
          <div class="col-2 border-start border-end d-flex align-items-center justify-content-center">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox" name="indicador_bef4_4" id="indicador_bef4_4" <?= ($indicador_bef4_4 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicador_bef4_4) ?>">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- LOGRO -->
<span class="badge bg-primary" id="" style="font-size:15px; background:#ff8403 !important">  Cuidado </span>

<div class="container mt-4">
  <div class="border">
    <!-- Fila de títulos -->
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
            <label for="">SI</label>
          </div>
        </div>
      </div>
    </div>
  
    <div class="row g-0" id="indicadorbef5" style="display:{{((($indicador_bef_5 == '0') && $representante == 'SI')?'':'none')}}">
      <div class="col-md-4 d-flex align-items-center border-end border-bottom">
        <div class="p-2">
        Los integrantes del hogar que realizan actividades de cuidado, acceden a programas que favorecen la apropiación de estrategias para facilitar su labor y que promuevan su bienestar emocional.  
        <br><br><div class="text-center">
            <div class="btn btn-success text-center" onclick="abrirmodalhogar('<?= $indicadores_tabla[21]->id_bienestar ?>','<?= $indicadores_tabla[21]->id_subcategoria ?>','<?= $indicadores_tabla[21]->id_indicador ?>')">Mover Indicador</div>
          </div>
      </div>
      </div>
      <div class="col-md-8">
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Motivación para participar en programas de capacitación y bienestar para cuidadores 
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox" name="indicador_bef5_1" id="indicador_bef5_1" <?= ($indicador_bef5_1 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicador_bef5_1) ?>">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Conocer  los programas, grupos de apoyo y actividades direccionadas a cuidadores.
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox" name="indicador_bef5_2" id="indicador_bef5_2" <?= ($indicador_bef5_2 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicador_bef5_2) ?>">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-start p-2 border-bottom">
          Acceder a programas de capacitación  en  el cuidado de  personas con condiciones especificas como edad, enfermedades fisicas, enfermades cronicas o mentales, discapacidad, entre otras.
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox" name="indicador_bef5_3" id="indicador_bef5_3" <?= ($indicador_bef5_3 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicador_bef5_3) ?>">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-start p-2 border-bottom">
          Contar con tiempo para participar de programas de capacitación y bienestar para cuidadores 
          </div>
          <div class="col-2 border-start border-end d-flex align-items-center justify-content-center">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox" name="indicador_bef5_4" id="indicador_bef5_4" <?= ($indicador_bef5_4 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicador_bef5_4) ?>">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- LOGRO -->
<span class="badge bg-primary" id="" style="font-size:15px; background:#ff8403 !important">  Habitabilidad </span>

<div class="container mt-4">
  <div class="border">
    <!-- Fila de títulos -->
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
            <label for="">SI</label>
          </div>
        </div>
      </div>
    </div>
  
    <div class="row g-0" id="indicadorbef6" style="display:{{((($indicador_bef_6 == '0') && $representante == 'SI')?'':'none')}}">
      <div class="col-md-4 d-flex align-items-center border-end border-bottom">
        <div class="p-2">
        El hogar accede a servicios para el mejoramiento de sus condiciones de habitabilidad
        <br><br><div class="text-center">
            <div class="btn btn-success text-center" onclick="abrirmodalhogar('<?= $indicadores_tabla[22]->id_bienestar ?>','<?= $indicadores_tabla[22]->id_subcategoria ?>','<?= $indicadores_tabla[22]->id_indicador ?>')">Mover Indicador</div>
          </div>
      </div>
      </div>
      <div class="col-md-8">
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Acceso a fuente de agua mejorada
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox" name="indicador_bef6_1" id="indicador_bef6_1" <?= ($indicador_bef6_1 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicador_bef6_1) ?>">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Adecuada eliminación de excretas
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox" name="indicador_bef6_2" id="indicador_bef6_2" <?= ($indicador_bef6_2 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicador_bef6_2) ?>">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-start p-2 border-bottom ">
          Material adecuado de pisos
                  </div>
          <div class="col-2 border-start border-bottom border-end d-flex align-items-center justify-content-center">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox" name="indicador_bef6_3" id="indicador_bef6_3" <?= ($indicador_bef6_3 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicador_bef6_3) ?>">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-start p-2 border-bottom ">
          Material adecuado de paredes 
          </div>
          <div class="col-2 border-start border-bottom border-end d-flex align-items-center justify-content-center">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox" name="indicador_bef6_4" id="indicador_bef6_4" <?= ($indicador_bef6_4 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicador_bef6_4) ?>">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-start p-2 border-bottom">
          Hacinamiento crítico
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox" name="indicador_bef6_5" id="indicador_bef6_5" <?= ($indicador_bef6_5 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicador_bef6_5) ?>">
            </div>
          </div>
        </div>
        <div class="row g-0 ">
          <div class="col-10 border-start p-2 border-bottom">
          Conocer  los programas de legalización de predios
          </div>
          <div class="col-2 border-start border-bottom border-end   d-flex align-items-center justify-content-center">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox" name="indicador_bef6_6" id="indicador_bef6_6" <?= ($indicador_bef6_6 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicador_bef6_6) ?>">
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
            <div class="btn btn-outline-primary" id="siguiente" <?= $siguiente ?> >Siguiente</div>
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

    <script src="{{ asset('assets/jquery/jquery.js') }}"></script>
<div id="modal"></div>
    <script>
    



    $('#siguiente').click(function(){
        var url = "../../../intelectualqt/<?= $variable ?>/<?= $integrantecodificado ?>/<?= $vista ?>"; window.location.href = url;
      });

      function volversaludemocional() {
          var url = "../../../legalqt/<?= $variable ?>/<?= $integrantecodificado ?>/<?= $vista ?>"; window.location.href = url;
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
    'indicador_bef1_1': { isNone: false },
    'indicador_bef1_2': { isNone: false },
    'indicador_bef1_3': { isNone: false },
    'indicador_bef1_4': { isNone: false },
    'indicador_bef2_1': { isNone: false },
    'indicador_bef2_2': { isNone: false },
    'indicador_bef2_3': { isNone: false },
    'indicador_bef3_1': { isNone: false },
    'indicador_bef3_2': { isNone: false },
    'indicador_bef3_3': { isNone: false },
    'indicador_bef4_1': { isNone: false },
    'indicador_bef4_2': { isNone: false },
    'indicador_bef4_3': { isNone: false },
    'indicador_bef4_4': { isNone: false },
    'indicador_bef5_1': { isNone: false },
    'indicador_bef5_2': { isNone: false },
    'indicador_bef5_3': { isNone: false },
    'indicador_bef5_4': { isNone: false },
    'indicador_bef6_1': { isNone: false },
    'indicador_bef6_2': { isNone: false },
    'indicador_bef6_3': { isNone: false },
    'indicador_bef6_4': { isNone: false },
    'indicador_bef6_5': { isNone: false },
    'indicador_bef6_6': { isNone: false },

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
    checkAndSetSwitchValues('indicadorbef1');
    checkAndSetSwitchValues('indicadorbef2');
    checkAndSetSwitchValues('indicadorbef3');
    checkAndSetSwitchValues('indicadorbef4');
    checkAndSetSwitchValues('indicadorbef5');
    checkAndSetSwitchValues('indicadorbef6');


    // Configuración del observador para ambos divs
    var observer1 = createObserver('indicadorbef1');
    var observer2 = createObserver('indicadorbef2');
    var observer2 = createObserver('indicadorbef3');
    var observer2 = createObserver('indicadorbef4');
    var observer2 = createObserver('indicadorbef5');
    var observer2 = createObserver('indicadorbef6');
   

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

                 // $('#siguiente').css('display','');
                   // alertagood();
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
    var observaciongestor = $('#observaciongestor').val();
    console.log(observaciongestor)
     $.ajax({
                 url: '../../../moverindicadorgestor',
                 method: 'GET', // Cambiar a GET si estás usando GET
                 data: {id_bienestar:id_bienestar, 
                   id_indicador:id_indicador, 
                  folio: '<?= $folio ?>',
                  idintegrante: '<?= $integrante ?>',
                  usuario: '<?= Session::get('cedula')?>',
                  observaciongestor:observaciongestor


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
                 // location.reload();
                    //modalInstance.hide();
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
  console.log(observaciongestor)
   $.ajax({
               url: '../../../moverindicadorgestorhogar',
               method: 'GET', // Cambiar a GET si estás usando GET
               data: {id_bienestar:id_bienestar, 
                 id_indicador:id_indicador, 
                folio: '<?= $folio ?>',
                idintegrante: '<?= $integrante ?>',
                usuario: '<?= Session::get('cedula')?>',
                observaciongestor:observaciongestor


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
              //  location.reload();
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
  function agregaroportunidad(idoportunidad,aplica_hogar_integrante, estado_oportunidad) {
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
      


function initializeCheckboxes() {
    const checkboxes = document.querySelectorAll('#container-disciplinapositiva .form-check-input');
    const noImplementaNingunaCheckbox = document.querySelector('#disciplinapositiva304'); // ID del checkbox "No implementa ninguna"

    checkboxes.forEach((checkbox) => {
        // Inicializar todos los checkboxes con valor "NO"
        checkbox.setAttribute('respuesta', 'NO');
        checkbox.checked = false;

        // Cambiar valor al seleccionar/deseleccionar
        checkbox.addEventListener('change', function () {
            if (checkbox.id === 'disciplinapositiva304' && checkbox.checked) {
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



function moverporpregunta31(folio, id_bienestar, id_indicador) {
  
  let  p1=$('#disciplinapositiva298').attr('respuesta');
  let  p2=$('#disciplinapositiva299').attr('respuesta');
  let  p3=$('#disciplinapositiva300').attr('respuesta');
  let  p4=$('#disciplinapositiva301').attr('respuesta');
  let  p5=$('#disciplinapositiva302').attr('respuesta');
  let  p6=$('#disciplinapositiva303').attr('respuesta');
  let  p7=$('#disciplinapositiva304').attr('respuesta');


$.ajax({
      url: '../../../moverporpregunta31',
      method: 'GET', // Cambiar a GET si estás usando GET
      data: {  folio: '<?= $folio ?>',
       id_bienestar:id_bienestar, 
       id_indicador:id_indicador, 
       usuario: '<?= Session::get('cedula')?>',
       p1:p1,
       p2:p2,
       p3:p3,
       p4:p4,
       p5:p5,
       p6:p6,
       p7:p7,


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


function moverporpregunta32(folio, id_bienestar, id_indicador) {
  
  let  p1=$('#redesdeapoyo').val();

$.ajax({
      url: '../../../moverporpregunta32',
      method: 'GET', // Cambiar a GET si estás usando GET
      data: {  folio: '<?= $folio ?>',
       id_bienestar:id_bienestar, 
       id_indicador:id_indicador, 
       usuario: '<?= Session::get('cedula')?>',
       p1:p1
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

function moverporpregunta34(folio, id_bienestar, id_indicador) {
  
  let  p1=$('#tiempolibre305').attr('respuesta');
  let  p2=$('#tiempolibre306').attr('respuesta');
  let  p3=$('#tiempolibre307').attr('respuesta');
  let  p4=$('#tiempolibre308').attr('respuesta');
  let  p5=$('#tiempolibre309').attr('respuesta');

$.ajax({
      url: '../../../moverporpregunta34',
      method: 'GET', // Cambiar a GET si estás usando GET
      data: {  folio: '<?= $folio ?>',
       id_bienestar:id_bienestar, 
       id_indicador:id_indicador, 
       usuario: '<?= Session::get('cedula')?>',
       p1:p1,
       p2:p2,
       p3:p3,
       p4:p4,
       p5:p5
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

</script>



@endsection