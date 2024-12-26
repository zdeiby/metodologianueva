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
    <a id="legalqt"  class="nav-link" >BIENESTAR LEGAL</a>
  </li>
  <li class="nav-item" role="presentation"  style="cursor:pointer">
    <a id="enfamiliaqt"  class="nav-link " >BIENESTAR EN FAMILIA</a>
  </li>
  <li class="nav-item" role="presentation"  style="cursor:pointer">
    <a id="intelectualqt"  class="nav-link active">BIENESTAR INTELECTUAL</a>
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

          <span class="badge bg-primary" id="" style="font-size:15px; background:#a80a85 !important">Educación</span>
          
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
     <div class="row g-0" id="indicadorbi1" style="display:{{(($indicador_bi_1 == '0')?'':'none')}}">
      <div class="col-md-4 d-flex align-items-center border-end border-bottom">
        <div class="p-2">
        Los niños y niñas entre 0 y 5 años están vinculados a programas de atención integral en cuidado a la primera infancia, con acceso a salud, nutrición y educación inicial (IPM)
        <br><br><div class="text-center">
            <div class="btn btn-success text-center" onclick="abrirmodal('<?= $indicadores_tabla[23]->id_bienestar ?>','<?= $indicadores_tabla[23]->id_subcategoria ?>','<?= $indicadores_tabla[23]->id_indicador ?>')">Mover Indicador</div>
          </div>
      </div>
      </div>
      <div class="col-md-8">
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Reconocer lo que ofrecen los  programas de  atención integral para la  primera infancia y su importancia en el desarrollo de los niños y niñas  
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox" name="indicador_bi1_1" id="indicador_bi1_1" <?= ($indicador_bi1_1 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicador_bi1_1) ?>">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Conocer los    servicios de atención y cuidado de la primera infancia en el territorio 
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox" name="indicador_bi1_2" id="indicador_bi1_2" <?= ($indicador_bi1_2 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicador_bi1_2) ?>">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-start p-2 border-bottom">
          Acceder a los programas para la  atención integral  a la primera infancia
          </div>
          <div class="col-2 border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox" name="indicador_bi1_3" id="indicador_bi1_3" <?= ($indicador_bi1_3 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicador_bi1_3) ?>">
            </div>
          </div>
        </div>
      </div>
    </div>

     <!-- Fila de contenido -->
     <div class="row g-0" id="indicadorbi2" style="display:{{(($indicador_bi_2 == '0')?'':'none')}}">
      <div class="col-md-4 d-flex align-items-center border-end border-bottom">
        <div class="p-2">
        Los niños,niñas y adolescentes en edad escolar (de 6 a 17 años) estan vinculados  al sistema educativo formal (IPM)
        <br><br><div class="text-center">
            <div class="btn btn-success text-center" onclick="abrirmodal('<?= $indicadores_tabla[24]->id_bienestar ?>','<?= $indicadores_tabla[24]->id_subcategoria ?>','<?= $indicadores_tabla[24]->id_indicador ?>')">Mover Indicador</div>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Motivación para acceder al sistema educativo formal 
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox" name="indicador_bi2_1" id="indicador_bi2_1" <?= ($indicador_bi2_1 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicador_bi2_1) ?>">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Acceder a la oferta relacionada para personas con necesidades educativas especiales
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox" name="indicador_bi2_2" id="indicador_bi2_2" <?= ($indicador_bi2_2 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicador_bi2_2) ?>">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-start p-2 border-bottom">
          Asistencia a las instiuciones de educación formal sin miedo a situaciones de bullying
          </div>
          <div class="col-2 border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox" name="indicador_bi2_3" id="indicador_bi2_3" <?= ($indicador_bi2_3 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicador_bi2_3) ?>">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-start p-2 border-bottom">
          Acceder al sistema educativo formal sin barreras de acceso 
          </div>
          <div class="col-2 border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox" name="indicador_bi2_4" id="indicador_bi2_4" <?= ($indicador_bi2_4 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicador_bi2_4) ?>">
            </div>
          </div>
        </div>
      </div>
    </div>

     <!-- Fila de contenido -->
     <div class="row g-0" id="indicadorbi3" style="display:{{(($indicador_bi_3 == '0')?'':'none')}}">
      <div class="col-md-4 d-flex align-items-center border-end border-bottom">
        <div class="p-2">
        Los integrantes del hogar mayores de 18 años que no hayan completado su educación básica acceden a programas  educación formal para adultos.
        <br><br><div class="text-center">
            <div class="btn btn-success text-center" onclick="abrirmodal('<?= $indicadores_tabla[25]->id_bienestar ?>','<?= $indicadores_tabla[25]->id_subcategoria ?>','<?= $indicadores_tabla[25]->id_indicador ?>')">Mover Indicador</div>
          </div>
      </div>
      </div>
      <div class="col-md-8">
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Conocer la oferta institucional para acceder a programas de educación formal para adultos
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox" name="indicador_bi3_1" id="indicador_bi3_1" <?= ($indicador_bi3_1 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicador_bi3_1) ?>">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Acceder  a instituciones que ofrezcan educación en modalidad CLEI en el territorio con horarios accequibles
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox" name="indicador_bi3_2" id="indicador_bi3_2" <?= ($indicador_bi3_2 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicador_bi3_2) ?>">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-start p-2 border-bottom">
          Tener tiempo u apoyo para acceder a programas de  educación formal para adultos.
          </div>
          <div class="col-2 border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox" name="indicador_bi3_3" id="indicador_bi3_3" <?= ($indicador_bi3_3 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicador_bi3_3) ?>">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-start p-2 border-bottom">
          Contar con los recursos para acceder a programas de educación formal para adultos.
          </div>
          <div class="col-2 border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox" name="indicador_bi3_4" id="indicador_bi3_4" <?= ($indicador_bi3_4 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicador_bi3_4) ?>">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>




<!-- LOGRO -->
<span class="badge bg-success" id="" style="font-size:15px; ">Alfabetización digital</span>

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
  
    <div class="row g-0" id="indicadorbi4" style="display:{{(($indicador_bi_4 == '0')?'':'none')}}">
      <div class="col-md-4 d-flex align-items-center border-end border-bottom">
        <div class="p-2">
        Los integrantes del hogar mayores de 10 años acceden a formación en alfabetización digital a traves de los recursos tecnológicos disponibles
        <br><br><div class="text-center">
            <div class="btn btn-success text-center" onclick="abrirmodal('<?= $indicadores_tabla[26]->id_bienestar ?>','<?= $indicadores_tabla[26]->id_subcategoria ?>','<?= $indicadores_tabla[26]->id_indicador ?>')">Mover Indicador</div>
          </div>
      </div>
      </div>
      <div class="col-md-8">
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Motivación para aprender a usar las herramientas de las TIC
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox" name="indicador_bi4_1" id="indicador_bi4_1" <?= ($indicador_bi4_1 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicador_bi4_1) ?>">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Conocer espacios y/o instituciones que permítan el acceso a programas de  alfabetizacipon digital
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox" name="indicador_bi4_2" id="indicador_bi4_2" <?= ($indicador_bi4_2 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicador_bi4_2) ?>">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-start p-2 border-bottom">
          Aprender sobre el uso de   herramientas de las TIC
          </div>
          <div class="col-2 border-start border-end d-flex align-items-center justify-content-center">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox" name="indicador_bi4_3" id="indicador_bi4_3" <?= ($indicador_bi4_3 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicador_bi4_3) ?>">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-start p-2 border-bottom">
          Acceder a  recursos tecnologicos  (smart phone, tablet ó PC) y/o conexión a la Internet ) que faciliten la alfabetización digital
          </div>
          <div class="col-2 border-start border-end d-flex align-items-center justify-content-center">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox" name="indicador_bi4_4" id="indicador_bi4_4" <?= ($indicador_bi4_4 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicador_bi4_4) ?>">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<!-- LOGRO -->
<span class="badge bg-primary" id="" style="font-size:15px; background:#ff8403 !important">Educación Postsecundaria</span>


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
  

    <div class="row g-0" id="indicadorbi5" style="display:{{(($indicador_bi_5 == '0')?'':'none')}}">
      <div class="col-md-4 d-flex align-items-center border-end border-bottom">
        <div class="p-2">
        Los integrantes del hogar mayores de 14 años  que lo desean acceden a  educación superior (tecnica profesional, tecnologias, universitario y postgrado)
        <br><br><div class="text-center">
            <div class="btn btn-success text-center" onclick="abrirmodal('<?= $indicadores_tabla[27]->id_bienestar ?>','<?= $indicadores_tabla[27]->id_subcategoria ?>','<?= $indicadores_tabla[27]->id_indicador ?>')">Mover Indicador</div>
          </div>
      </div>
      </div>
      <div class="col-md-8">
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Motivación para acceder a educación superior 
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox" name="indicador_bi5_1" id="indicador_bi5_1" <?= ($indicador_bi5_1 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicador_bi5_1) ?>">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Conocer IES que tengan convenios, becas, entre otros,  que faciliten el acceso a la educación superior 
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox" name="indicador_bi5_2" id="indicador_bi5_2" <?= ($indicador_bi5_2 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicador_bi5_2) ?>">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-start p-2 border-bottom">
          Acceder a la oferta relacionada con educación superior  en modalidad virtual 
          </div>
          <div class="col-2 border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox" name="indicador_bi5_3" id="indicador_bi5_3" <?= ($indicador_bi5_3 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicador_bi5_3) ?>">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-start p-2 border-bottom">
          Disponer de tiempo y apoyo para dedicar a la educación superior 
          </div>
          <div class="col-2 border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox" name="indicador_bi5_4" id="indicador_bi5_4" <?= ($indicador_bi5_4 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicador_bi5_4) ?>">
            </div>
          </div>
        </div><div class="row g-0">
          <div class="col-10 border-start p-2 border-bottom">
          Acceder a procesos de orientación vocacional y de conocimiento de programas para el acceso a la educación superior
          </div>
          <div class="col-2 border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox" name="indicador_bi5_5" id="indicador_bi5_5" <?= ($indicador_bi5_5 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicador_bi5_5) ?>">
            </div>
          </div>
        </div><div class="row g-0">
          <div class="col-10 border-start p-2 border-bottom">
          Contar con las herramientas tecnologicas para favorecer los procesos de aprendizaje en la oferta de educación superior 
          </div>
          <div class="col-2 border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox" name="indicador_bi5_6" id="indicador_bi5_6" <?= ($indicador_bi5_6 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicador_bi5_6) ?>">
            </div>
          </div>
        </div>
      </div>
      </div>
      <div class="row g-0" id="indicadorbi6" style="display:{{(($indicador_bi_6 == '0')?'':'none')}}">
      <div class="col-md-4 d-flex align-items-center border-end border-bottom">
        <div class="p-2">
        Los integrantes del hogar de 14 años en adelante que lo desean acceden a  educación para el trabajo y desarrollo humano 
        <br><br><div class="text-center">
            <div class="btn btn-success text-center" onclick="abrirmodal('<?= $indicadores_tabla[28]->id_bienestar ?>','<?= $indicadores_tabla[28]->id_subcategoria ?>','<?= $indicadores_tabla[28]->id_indicador ?>')">Mover Indicador</div>
          </div>
      </div>
      </div>
      <div class="col-md-8">
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
            Motivación para acceder a educación para el trabajo y desarrollo humano 
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox" name="indicador_bi6_1" id="indicador_bi6_1" <?= ($indicador_bi6_1 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicador_bi6_1) ?>">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Conocer instituciones  que tengan convenios, becas, entre otros,  que faciliten el acceso a educación para el trabajo y desarrollo humano 
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox" name="indicador_bi6_2" id="indicador_bi6_2" <?= ($indicador_bi6_2 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicador_bi6_2) ?>">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-start p-2 border-bottom">
          Acceder a la oferta relacionada con  educación para el trabajo y desarrollo humano 
          </div>
          <div class="col-2 border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox" name="indicador_bi6_3" id="indicador_bi6_3" <?= ($indicador_bi6_3 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicador_bi6_3) ?>">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-start p-2 border-bottom">
          Disponer de tiempo y apoyo para dedicar a la educación para el trabajo y desarrollo humano 
          </div>
          <div class="col-2 border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox" name="indicador_bi6_4" id="indicador_bi6_4" <?= ($indicador_bi6_4 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicador_bi6_4) ?>">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-start p-2 border-bottom">
          Acceder a procesos de orientación vocacional y de conocimiento de programas para el acceso a la educación para el trabajo y desarrollo humano 
          </div>
          <div class="col-2 border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox" name="indicador_bi6_5" id="indicador_bi6_5" <?= ($indicador_bi6_5 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicador_bi6_5) ?>">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-start p-2 border-bottom">
          Contar con las herramientas tecnologicas para favorecer los procesos de aprendizaje en la oferta de educación para el trabajo y desarrollo humano 
          </div>
          <div class="col-2 border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox" name="indicador_bi6_6" id="indicador_bi6_6" <?= ($indicador_bi6_6 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicador_bi6_6) ?>">
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
            <div class="btn btn-outline-primary" id="siguiente" style="display:<?= ($vista != '1')?'':'none' ?>">Siguiente</div>
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
    <script src="{{ asset('assets/jquery/jquery.js') }}"></script>

    <script>
    

    
    $('#siguiente').click(function(){
        var url = "../../../financieroqt/<?= $variable ?>/<?= $integrantecodificado ?>/<?= $vista ?>"; window.location.href = url;
      });

      function volversaludemocional() {
          var url = "../../../enfamiliaqt/<?= $variable ?>/<?= $integrantecodificado ?>/<?= $vista ?>"; window.location.href = url;
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
    'indicador_bi1_1': { isNone: false },
    'indicador_bi1_2': { isNone: false },
    'indicador_bi1_3': { isNone: false },
    'indicador_bi2_1': { isNone: false },
    'indicador_bi2_2': { isNone: false },
    'indicador_bi2_3': { isNone: false },
    'indicador_bi2_4': { isNone: false },
    'indicador_bi3_1': { isNone: false },
    'indicador_bi3_2': { isNone: false },
    'indicador_bi3_3': { isNone: false },
    'indicador_bi3_4': { isNone: false },
    'indicador_bi4_1': { isNone: false },
    'indicador_bi4_2': { isNone: false },
    'indicador_bi4_3': { isNone: false },
    'indicador_bi4_4': { isNone: false },
    'indicador_bi5_1': { isNone: false },
    'indicador_bi5_2': { isNone: false },
    'indicador_bi5_3': { isNone: false },
    'indicador_bi5_4': { isNone: false },
    'indicador_bi5_5': { isNone: false },
    'indicador_bi5_6': { isNone: false },
    'indicador_bi6_1': { isNone: false },
    'indicador_bi6_2': { isNone: false },
    'indicador_bi6_3': { isNone: false },
    'indicador_bi6_4': { isNone: false },
    'indicador_bi6_5': { isNone: false },
    'indicador_bi6_6': { isNone: false },
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
    checkAndSetSwitchValues('indicadorbi1');
    checkAndSetSwitchValues('indicadorbi2');
    checkAndSetSwitchValues('indicadorbi3');
    checkAndSetSwitchValues('indicadorbi4');
    checkAndSetSwitchValues('indicadorbi5');
    checkAndSetSwitchValues('indicadorbi6');


    // Configuración del observador para ambos divs
    var observer1 = createObserver('indicadorbi1');
    var observer2 = createObserver('indicadorbi2');
    var observer2 = createObserver('indicadorbi3');
    var observer2 = createObserver('indicadorbi4');
    var observer2 = createObserver('indicadorbi5');
    var observer2 = createObserver('indicadorbi6');
   

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



function moverporpregunta41(folio, idintegrante, id_bienestar, id_indicador) {
  
  let  p1=$('#numerocomidas').val();
  let  p2=$('#accesibilidadalimentos2').val();
  let  p3=$('#accesibilidad').val();
  let p4 = $('#regimendesalud').val();
  let p5 = $('#educacion').val();
  let p6 = $('#cuidadomenores').val();


$.ajax({
      url: '../../../moverporpregunta41',
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
       p6:p6

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
       location.reload();
         //modalInstance.hide();
      },
      error: function(xhr, status, error) {
          alertabad();
          console.error(error);
      }
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


@endsection