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
    <a id="legalqt"  class="nav-link active" >BIENESTAR LEGAL</a>
  </li>
  <li class="nav-item" role="presentation"  style="cursor:pointer">
    <a id="enfamiliaqt"  class="nav-link " >BIENESTAR EN FAMILIA</a>
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

          <span class="badge bg-primary" id="" style="font-size:15px; background:#a80a85 !important">Identificación</span>
          
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
    <div class="row g-0" id="indicadorbl1" style="display:{{(($indicador_bl_1 == '0')?'':'none')}}">
      <div class="col-md-4 d-flex align-items-center border-end border-bottom border-bottom">
        <div class="p-2">
        Los integrantes del hogar con nacionalidad colombiana  tienen los documentos de identificación según su edad 
        </div>
      </div>
      <div class="col-md-8">
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Reconocer la  importancia de contar con el documento de identidad según la edad de cada integrante 
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" name="indicadorbl1_1" id="indicadorbl1_1" <?= ($indicadorbl1_1 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicadorbl1_1) ?>">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Conocer  las rutas en relación a la gestión de documentos por primera vez o duplicados 
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" name="indicadorbl1_2" id="indicadorbl1_2" <?= ($indicadorbl1_2 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicadorbl1_2) ?>">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-start p-2 border-bottom">
          Acceder a las citas de forma oportuna para tramitar el documento de identidad requerido
          </div>
          <div class="col-2 border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch ">
              <input class="form-check-input" type="checkbox" name="indicadorbl1_3" id="indicadorbl1_3" <?= ($indicadorbl1_3 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicadorbl1_3) ?>">
            </div>
          </div>
        </div>
      </div>
    </div>







 <!-- Fila de contenido -->
 <div class="row g-0" id="indicadorbl2" style="display:{{(($indicador_bl_2 == '0')?'':'none')}}">
      <div class="col-md-4 d-flex align-items-center border-end border-bottom">
        <div class="p-2">
        Los hombres de 18 a 49 años tienen resuelta su situación militar
        </div>
      </div>
      <div class="col-md-8">
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Conocer lo que dice la ley en Colombia respecto  la situación militar de las personas entre   los 18 y 49  años de edad
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" name="indicadorbl2_1" id="indicadorbl2_1" <?= ($indicadorbl2_1 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicadorbl2_1) ?>">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Tramitar  la libreta   con el objetivo de tener resuelta la situacion militar 
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" name="indicadorbl2_2" id="indicadorbl2_2" <?= ($indicadorbl2_2 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicadorbl2_2) ?>">
            </div>
          </div>
        </div>
      
      </div>
    </div>




 <!-- Fila de contenido -->
 <div class="row g-0" id="indicadorbl3" style="display:{{(($indicador_bl_3 == '0')?'':'none')}}">
      <div class="col-md-4 d-flex align-items-center border-end border-bottom">
        <div class="p-2">
        La población con enfoque diferencial etnico (afro e indígena) cuenta con  el certificado de pertenencia etnica, para su reconocimiento como comunidad y acceso  programas específicos para su desarrollo.
        </div>
      </div>
      <div class="col-md-8">
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Conocer la importancia y tramitar el registro en el Listado Censal para el reconocimiento como población con enfoque diferencial étnico.
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" name="indicadorbl3_1" id="indicadorbl3_1" <?= ($indicadorbl3_1 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicadorbl3_1) ?>">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Conocer y acceder según mi necesidad a los beneficios otorgados a través de programas de inclusión en diferentes ámbitos derivados del registro como población con enfoque diferencial.
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" name="indicadorbl3_2" id="indicadorbl3_2" <?= ($indicadorbl3_2 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicadorbl3_2) ?>">
            </div>
          </div>
        </div>
        
      </div>
    </div>

     <!-- Fila de contenido -->
     <div class="row g-0" id="indicadorbl4" style="display:{{(($indicador_bl_4 == '0')?'':'none')}}">
      <div class="col-md-4 d-flex align-items-center border-end border-bottom">
        <div class="p-2">
        Las personas refugiadas, migrantes y  reciben asistencia para su regularización e identificación en el territorio nacional, facilitando su integración local y social.
        </div>
      </div>
      <div class="col-md-8">
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Acceso al documento que reconoce el status legal en el territorio colombiano como persona refugiada, migrante y/o retornada.
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" name="indicadorbl4_1" id="indicadorbl4_1" <?= ($indicadorbl4_1 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicadorbl4_1) ?>">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Conocer y acceder a las redes de apoyo e instituciones que ayudan a la regularización de las personas refugiadas, migrantes y/o retornadas.
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" name="indicadorbl4_2" id="indicadorbl4_2" <?= ($indicadorbl4_2 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicadorbl4_2) ?>">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-start p-2 border-bottom">
          Acceder de forma segura a las instituciones o autoridades que regulan la situación de las personas las personas refugiadas, migrantes y/o retornadas.
          </div>
          <div class="col-2 border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" name="indicadorbl4_3" id="indicadorbl4_3" <?= ($indicadorbl4_3 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicadorbl4_3) ?>">
            </div>
          </div>
        </div>
      </div>
    </div>

     <!-- Fila de contenido -->
     <div class="row g-0" id="indicadorbl5" style="display:{{(($indicador_bl_5 == '0')?'':'none')}}">
      <div class="col-md-4 d-flex align-items-center border-end border-bottom">
        <div class="p-2">
        Las personas con discapacidad poseen el certificado emitido por la entidad de salud competente, facilitando su reconocimiento y acceso a servicios y programas de apoyo
        </div>
      </div>
      <div class="col-md-8">
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Reconocer la  importancia de contar con el certificado para personas con discapacidad
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" name="indicadorbl5_1" id="indicadorbl5_1" <?= ($indicadorbl5_1 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicadorbl5_1) ?>">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Conocer  como se realiza el tramite para obtener el  certificado para personas con discapacidad
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" name="indicadorbl5_2" id="indicadorbl5_2" <?= ($indicadorbl5_2 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicadorbl5_2) ?>">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-start p-2 border-bottom">
          Obtener el certificado para personas con discapacidad 
          </div>
          <div class="col-2 border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" name="indicadorbl5_3" id="indicadorbl5_3" <?= ($indicadorbl5_3 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicadorbl5_3) ?>">
            </div>
          </div>
        </div>
      </div>
    </div>

     <!-- Fila de contenido -->
     <div class="row g-0" id="indicadorbl6" style="display:{{(($indicador_bl_6 == '0')?'':'none')}}">
      <div class="col-md-4 d-flex align-items-center border-end border-bottom">
        <div class="p-2">
        La población victima del conflicto armado cuenta con RUV
        </div>
      </div>
      <div class="col-md-8">
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Reconocer la  importancia y beneficios de   contar el RUV
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" name="indicadorbl6_1" id="indicadorbl6_1" <?= ($indicadorbl6_1 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicadorbl6_1) ?>">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Conocer  como se realiza el tramite para obtener el  RUV
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" name="indicadorbl6_2" id="indicadorbl6_2" <?= ($indicadorbl6_2 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicadorbl6_2) ?>">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-start p-2 border-bottom">
          Obtener el RUV para acceder a los beneficios o programas para población victima 
          </div>
          <div class="col-2 border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox"name="indicadorbl6_3" id="indicadorbl6_3" <?= ($indicadorbl6_3 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicadorbl6_3) ?>">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- LOGRO -->
<span class="badge bg-primary" id="" style="font-size:15px; background:#ff8403 !important">Acceso a la justicia</span>


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
  

    <div class="row g-0" id="indicadorbl7" style="display:{{(($indicador_bl_7 == '0')?'':'none')}}">
      <div class="col-md-4 d-flex align-items-center border-end border-bottom">
        <div class="p-2">
        Los integrantes del hogar de 18 años o más reciben orientación para el reconocimiento de las instituciones de administración de justicia y de garantía de derechos existentes en el territorio.
        </div>
      </div>
      <div class="col-md-8">
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Conocer las instituciones de administración de justicia presentes en el territorio y las rutas para acceder a ellas.
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" name="indicadorbl7_1" id="indicadorbl7_1" <?= ($indicadorbl7_1 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicadorbl7_1) ?>">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Identificar cuáles situaciones requieren  los servicios de una institución administradora de justicia y garantia de derechos.
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" name="indicadorbl7_2" id="indicadorbl7_2" <?= ($indicadorbl7_2 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicadorbl7_2) ?>">
            </div>
          </div>
        </div>

      </div>
      </div>
      <div class="row g-0" id="indicadorbl8" style="display:{{(($indicador_bl_8 == '0')?'':'none')}}">
      <div class="col-md-4 d-flex align-items-center border-end border-bottom">
        <div class="p-2">
        El integrante victima del  conflicto armado,  recibe acompañamiento para  el goce efectivo de sus derechos
        </div>
      </div>
      <div class="col-md-8">
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Reconocer las situaciones que se deben  denunciar y son motivo  de acompañamiento para población victima de conflicto armado
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" name="indicadorbl8_1" id="indicadorbl8_1" <?= ($indicadorbl8_1 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicadorbl8_1) ?>">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Conocer las rutas de atención para población victima de conflicto armado
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" name="indicadorbl8_2" id="indicadorbl8_2" <?= ($indicadorbl8_2 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicadorbl8_2) ?>">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-start p-2 border-bottom">
          Acceder de forma segura y oportuna a los mecanismos de denuncia para población victima de conflicto armado 
          </div>
          <div class="col-2 border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" name="indicadorbl8_3" id="indicadorbl8_3" <?= ($indicadorbl8_3 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicadorbl8_3) ?>">
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="row g-0" id="indicadorbl9" style="display:{{((($indicador_bl_9 == '0') && $representante == 'SI')?'':'none')}}">
      <div class="col-md-4 d-flex align-items-center border-end border-bottom">
        <div class="p-2">
        El hogar en situación de victimización (violencia intrafamiliar, violencia de género, abuso sexual ) recibe acompañamiento para el goce efectivo de derechos
        </div>
      </div>
      <div class="col-md-8">
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Reconocer las situaciones que se deben  denunciar y son motivo  de acompañamiento en hogares en situación de victimización (violencia intrafamiliar, violencia de género, abuso sexual )
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" name="indicadorbl9_1" id="indicadorbl9_1" <?= ($indicadorbl9_1 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicadorbl9_1) ?>">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Conocer las rutas de atención para hogares en situación de victimización (violencia intrafamiliar, violencia de género, abuso sexual )
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" name="indicadorbl9_2" id="indicadorbl9_2" <?= ($indicadorbl9_2 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicadorbl9_2) ?>">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-start p-2 border-bottom">
          Acceder de forma segura y oportuna a los mecanismos de denuncia para los hogares en situación de victimización (violencia intrafamiliar, violencia de género, abuso sexual )
          </div>
          <div class="col-2 border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" name="indicadorbl9_3" id="indicadorbl9_3" <?= ($indicadorbl9_3 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicadorbl9_3) ?>">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row g-0" id="indicadorbl10" style="display:{{(($indicador_bl_10 == '0')?'':'none')}}">
      <div class="col-md-4 d-flex align-items-center border-end border-bottom">
        <div class="p-2">
        Los  integrante del hogar  que lo requieren acceden a servicios de justicia según su necesidad 
        </div>
      </div>
      <div class="col-md-8">
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Conocer los servicios de justicia a los que se pueden acceder según la  necesidad
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" name="indicadorbl10_1" id="indicadorbl10_1" <?= ($indicadorbl10_1 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicadorbl10_1) ?>">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Acceder a los servicios de justicia según la  necesidad
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" name="indicadorbl10_2" id="indicadorbl10_2" <?= ($indicadorbl10_2 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicadorbl10_2) ?>">
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
    

    $('#siguiente').click(function(){
        var url = "../../enfamiliaqt/<?= $variable ?>/<?= $integrantecodificado ?>"; window.location.href = url;
      });

      function volversaludemocional() {
          var url = "../../bienestarsaludemocionalqt/<?= $variable ?>/<?= $integrantecodificado ?>"; window.location.href = url;
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
<script>

     document.addEventListener('DOMContentLoaded', function () {
 // Array de switches con un flag para identificar el switch 'Ninguna'
 var healthSwitches = {
    'indicadorbl1_1': { isNone: false },
    'indicadorbl1_2': { isNone: false },
    'indicadorbl1_3': { isNone: false },
    'indicadorbl2_1': { isNone: false },
    'indicadorbl2_2': { isNone: false },
    'indicadorbl3_1': { isNone: false },
    'indicadorbl3_2': { isNone: false },
    'indicadorbl4_1': { isNone: false },
    'indicadorbl4_2': { isNone: false },
    'indicadorbl4_3': { isNone: false },
    'indicadorbl5_1': { isNone: false },
    'indicadorbl5_2': { isNone: false },
    'indicadorbl5_3': { isNone: false },
    'indicadorbl6_1': { isNone: false },
    'indicadorbl6_2': { isNone: false },
    'indicadorbl6_3': { isNone: false },
    'indicadorbl7_1': { isNone: false },
    'indicadorbl7_2': { isNone: false },
    'indicadorbl8_1': { isNone: false },
    'indicadorbl8_2': { isNone: false },
    'indicadorbl8_3': { isNone: false },
    'indicadorbl9_1': { isNone: false },
    'indicadorbl9_2': { isNone: false },
    'indicadorbl9_3': { isNone: false },
    'indicadorbl10_1': { isNone: false },
    'indicadorbl10_2': { isNone: false },
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
 checkAndSetSwitchValues();

 // Observador para cambios en la visibilidad del div
 var observer = new MutationObserver(function(mutations) {
     mutations.forEach(function(mutation) {
         if (mutation.attributeName === "style") {
             checkAndSetSwitchValues();
         }
     });
 });

 var config = { attributes: true, childList: false, characterData: false };
 observer.observe(document.getElementById('indicadorbl1'), config);
});

function checkAndSetSwitchValues() {
 var planificacionDiv = document.getElementById('indicadorbse1');
 var isHidden = window.getComputedStyle(planificacionDiv).display === 'none';
 var switches = planificacionDiv.querySelectorAll('.form-check-input');

 if (isHidden) {
     switches.forEach(function(switchEl) {
         switchEl.value = 'NO APLICA';
         console.log(switchEl.id + ' value set to: NO APLICA (div is hidden)');
     });
 } else {
     console.log('El div no está oculto, no se cambia el valor de los switches.');
 }
}



    </script>
 

@endsection
