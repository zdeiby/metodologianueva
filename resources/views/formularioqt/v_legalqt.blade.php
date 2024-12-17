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
           <label for="">SI</label>
          </div>
        </div>
      </div>
    </div>

    <!-- Fila de contenido -->
    <div class="row g-0" id="indicadorbl1" style="display:{{(($indicador_bl_1 == '0')?'':'none')}}">
      <div class="col-md-4 d-flex align-items-center border-end border-bottom border-bottom">
        <div class="p-2">
        Los integrantes del hogar con nacionalidad colombiana  tienen los documentos de identificación según su edad 
        <br><br><div class="text-center">
            <div class="btn btn-success text-center" onclick="abrirmodal('<?= $indicadores_tabla[7]->id_bienestar ?>','<?= $indicadores_tabla[7]->id_subcategoria ?>','<?= $indicadores_tabla[7]->id_indicador ?>')">Mover Indicador</div>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Reconocer la  importancia de contar con el documento de identidad según la edad de cada integrante 
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox" name="indicadorbl1_1" id="indicadorbl1_1" <?= ($indicadorbl1_1 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicadorbl1_1) ?>">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Conocer  las rutas en relación a la gestión de documentos por primera vez o duplicados 
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox" name="indicadorbl1_2" id="indicadorbl1_2" <?= ($indicadorbl1_2 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicadorbl1_2) ?>">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-start p-2 border-bottom">
          Acceder a las citas de forma oportuna para tramitar el documento de identidad requerido
          </div>
          <div class="col-2 border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch ">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox" name="indicadorbl1_3" id="indicadorbl1_3" <?= ($indicadorbl1_3 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicadorbl1_3) ?>">
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
        <br><br><div class="text-center">
            <div class="btn btn-success text-center" onclick="abrirmodal('<?= $indicadores_tabla[8]->id_bienestar ?>','<?= $indicadores_tabla[8]->id_subcategoria ?>','<?= $indicadores_tabla[8]->id_indicador ?>')">Mover Indicador</div>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Conocer lo que dice la ley en Colombia respecto  la situación militar de las personas entre   los 18 y 49  años de edad
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox" name="indicadorbl2_1" id="indicadorbl2_1" <?= ($indicadorbl2_1 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicadorbl2_1) ?>">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Tramitar  la libreta   con el objetivo de tener resuelta la situacion militar 
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox" name="indicadorbl2_2" id="indicadorbl2_2" <?= ($indicadorbl2_2 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicadorbl2_2) ?>">
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
        <br><br><div class="text-center">
            <div class="btn btn-success text-center" onclick="abrirmodal('<?= $indicadores_tabla[9]->id_bienestar ?>','<?= $indicadores_tabla[9]->id_subcategoria ?>','<?= $indicadores_tabla[9]->id_indicador ?>')">Mover Indicador</div>
          </div>  
      </div>
      </div>
      <div class="col-md-8">
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Conocer la importancia y tramitar el registro en el Listado Censal para el reconocimiento como población con enfoque diferencial étnico.
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox" name="indicadorbl3_1" id="indicadorbl3_1" <?= ($indicadorbl3_1 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicadorbl3_1) ?>">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Conocer y acceder según mi necesidad a los beneficios otorgados a través de programas de inclusión en diferentes ámbitos derivados del registro como población con enfoque diferencial.
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox" name="indicadorbl3_2" id="indicadorbl3_2" <?= ($indicadorbl3_2 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicadorbl3_2) ?>">
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
        <br><br><div class="text-center">
            <div class="btn btn-success text-center" onclick="abrirmodal('<?= $indicadores_tabla[10]->id_bienestar ?>','<?= $indicadores_tabla[10]->id_subcategoria ?>','<?= $indicadores_tabla[10]->id_indicador ?>')">Mover Indicador</div>
          </div>
      </div>
      </div>
      <div class="col-md-8">
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Acceso al documento que reconoce el status legal en el territorio colombiano como persona refugiada, migrante y/o retornada.
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox" name="indicadorbl4_1" id="indicadorbl4_1" <?= ($indicadorbl4_1 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicadorbl4_1) ?>">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Conocer y acceder a las redes de apoyo e instituciones que ayudan a la regularización de las personas refugiadas, migrantes y/o retornadas.
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox" name="indicadorbl4_2" id="indicadorbl4_2" <?= ($indicadorbl4_2 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicadorbl4_2) ?>">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-start p-2 border-bottom">
          Acceder de forma segura a las instituciones o autoridades que regulan la situación de las personas las personas refugiadas, migrantes y/o retornadas.
          </div>
          <div class="col-2 border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox" name="indicadorbl4_3" id="indicadorbl4_3" <?= ($indicadorbl4_3 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicadorbl4_3) ?>">
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
        <br><br><div class="text-center">
            <div class="btn btn-success text-center" onclick="abrirmodal('<?= $indicadores_tabla[11]->id_bienestar ?>','<?= $indicadores_tabla[11]->id_subcategoria ?>','<?= $indicadores_tabla[11]->id_indicador ?>')">Mover Indicador</div>
          </div>
      </div>
      </div>
      <div class="col-md-8">
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Reconocer la  importancia de contar con el certificado para personas con discapacidad
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox" name="indicadorbl5_1" id="indicadorbl5_1" <?= ($indicadorbl5_1 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicadorbl5_1) ?>">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Conocer  como se realiza el tramite para obtener el  certificado para personas con discapacidad
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox" name="indicadorbl5_2" id="indicadorbl5_2" <?= ($indicadorbl5_2 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicadorbl5_2) ?>">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-start p-2 border-bottom">
          Obtener el certificado para personas con discapacidad 
          </div>
          <div class="col-2 border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox" name="indicadorbl5_3" id="indicadorbl5_3" <?= ($indicadorbl5_3 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicadorbl5_3) ?>">
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
        <br><br><div class="text-center">
            <div class="btn btn-success text-center" onclick="abrirmodal('<?= $indicadores_tabla[12]->id_bienestar ?>','<?= $indicadores_tabla[12]->id_subcategoria ?>','<?= $indicadores_tabla[12]->id_indicador ?>')">Mover Indicador</div>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Reconocer la  importancia y beneficios de   contar el RUV
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox" name="indicadorbl6_1" id="indicadorbl6_1" <?= ($indicadorbl6_1 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicadorbl6_1) ?>">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Conocer  como se realiza el tramite para obtener el  RUV
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox" name="indicadorbl6_2" id="indicadorbl6_2" <?= ($indicadorbl6_2 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicadorbl6_2) ?>">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-start p-2 border-bottom">
          Obtener el RUV para acceder a los beneficios o programas para población victima 
          </div>
          <div class="col-2 border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox"name="indicadorbl6_3" id="indicadorbl6_3" <?= ($indicadorbl6_3 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicadorbl6_3) ?>">
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
           <label for="">SI</label>
          </div>
        </div>
      </div>
    </div>
  

    <div class="row g-0" id="indicadorbl7" style="display:{{(($indicador_bl_7 == '0')?'':'none')}}">
      <div class="col-md-4 d-flex align-items-center border-end border-bottom">
        <div class="p-2">
        Los integrantes del hogar de 18 años o más reciben orientación para el reconocimiento de las instituciones de administración de justicia y de garantía de derechos existentes en el territorio.
        <br><br><div class="text-center">
            <div class="btn btn-success text-center" onclick="abrirmodal('<?= $indicadores_tabla[13]->id_bienestar ?>','<?= $indicadores_tabla[13]->id_subcategoria ?>','<?= $indicadores_tabla[13]->id_indicador ?>')">Mover Indicador</div>
          </div>
      </div>
      </div>
      <div class="col-md-8">
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Conocer las instituciones de administración de justicia presentes en el territorio y las rutas para acceder a ellas.
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox" name="indicadorbl7_1" id="indicadorbl7_1" <?= ($indicadorbl7_1 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicadorbl7_1) ?>">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Identificar cuáles situaciones requieren  los servicios de una institución administradora de justicia y garantia de derechos.
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox" name="indicadorbl7_2" id="indicadorbl7_2" <?= ($indicadorbl7_2 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicadorbl7_2) ?>">
            </div>
          </div>
        </div>

      </div>
      </div>
      <div class="row g-0" id="indicadorbl8" style="display:{{(($indicador_bl_8 == '0')?'':'none')}}">
      <div class="col-md-4 d-flex align-items-center border-end border-bottom">
        <div class="p-2">
        El integrante victima del  conflicto armado,  recibe acompañamiento para  el goce efectivo de sus derechos
        <br><br><div class="text-center">
            <div class="btn btn-success text-center" onclick="abrirmodal('<?= $indicadores_tabla[14]->id_bienestar ?>','<?= $indicadores_tabla[14]->id_subcategoria ?>','<?= $indicadores_tabla[14]->id_indicador ?>')">Mover Indicador</div>
          </div>
      </div>
      </div>
      <div class="col-md-8">
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Reconocer las situaciones que se deben  denunciar y son motivo  de acompañamiento para población victima de conflicto armado
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox" name="indicadorbl8_1" id="indicadorbl8_1" <?= ($indicadorbl8_1 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicadorbl8_1) ?>">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Conocer las rutas de atención para población victima de conflicto armado
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox" name="indicadorbl8_2" id="indicadorbl8_2" <?= ($indicadorbl8_2 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicadorbl8_2) ?>">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-start p-2 border-bottom">
          Acceder de forma segura y oportuna a los mecanismos de denuncia para población victima de conflicto armado 
          </div>
          <div class="col-2 border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox" name="indicadorbl8_3" id="indicadorbl8_3" <?= ($indicadorbl8_3 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicadorbl8_3) ?>">
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="row g-0" id="indicadorbl9" style="display:{{((($indicador_bl_9 == '0') && $representante == 'SI')?'':'none')}}">
      <div class="col-md-4 d-flex align-items-center border-end border-bottom">
        <div class="p-2">
        El hogar en situación de victimización (violencia intrafamiliar, violencia de género, abuso sexual ) recibe acompañamiento para el goce efectivo de derechos
        <br><br><div class="text-center">
            <div class="btn btn-success text-center" onclick="abrirmodalhogar('<?= $indicadores_tabla[15]->id_bienestar ?>','<?= $indicadores_tabla[15]->id_subcategoria ?>','<?= $indicadores_tabla[15]->id_indicador ?>')">Mover Indicador</div>
          </div>
      </div>
      </div>
      <div class="col-md-8">
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Reconocer las situaciones que se deben  denunciar y son motivo  de acompañamiento en hogares en situación de victimización (violencia intrafamiliar, violencia de género, abuso sexual )
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox" name="indicadorbl9_1" id="indicadorbl9_1" <?= ($indicadorbl9_1 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicadorbl9_1) ?>">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Conocer las rutas de atención para hogares en situación de victimización (violencia intrafamiliar, violencia de género, abuso sexual )
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox" name="indicadorbl9_2" id="indicadorbl9_2" <?= ($indicadorbl9_2 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicadorbl9_2) ?>">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-start p-2 border-bottom">
          Acceder de forma segura y oportuna a los mecanismos de denuncia para los hogares en situación de victimización (violencia intrafamiliar, violencia de género, abuso sexual )
          </div>
          <div class="col-2 border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox" name="indicadorbl9_3" id="indicadorbl9_3" <?= ($indicadorbl9_3 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicadorbl9_3) ?>">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row g-0" id="indicadorbl10" style="display:{{(($indicador_bl_10 == '0')?'':'none')}}">
      <div class="col-md-4 d-flex align-items-center border-end border-bottom">
        <div class="p-2">
        Los  integrante del hogar  que lo requieren acceden a servicios de justicia según su necesidad 
        <br><br><div class="text-center">
            <div class="btn btn-success text-center" onclick="abrirmodal('<?= $indicadores_tabla[16]->id_bienestar ?>','<?= $indicadores_tabla[16]->id_subcategoria ?>','<?= $indicadores_tabla[16]->id_indicador ?>')">Mover Indicador</div>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Conocer los servicios de justicia a los que se pueden acceder según la  necesidad
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox" name="indicadorbl10_1" id="indicadorbl10_1" <?= ($indicadorbl10_1 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicadorbl10_1) ?>">
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Acceder a los servicios de justicia según la  necesidad
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" <?= ($vista != '1')?'disabled':'' ?> type="checkbox" name="indicadorbl10_2" id="indicadorbl10_2" <?= ($indicadorbl10_2 == 'SI') ? 'checked' : ''; ?>  value="<?= ($indicadorbl10_2) ?>">
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
    <div id="modal"></div>
    <script src="{{ asset('assets/jquery/jquery.js') }}"></script>

    <script>
    

    

    $('#siguiente').click(function(){
        var url = "../../../enfamiliaqt/<?= $variable ?>/<?= $integrantecodificado ?>/<?= $vista ?>"; window.location.href = url;
      });

      function volversaludemocional() {
          var url = "../../../bienestarsaludemocionalqt/<?= $variable ?>/<?= $integrantecodificado ?>/<?= $vista ?>"; window.location.href = url;
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
    // Ejecutar la función para ambos divs al cargar la página
    checkAndSetSwitchValues('indicadorbl1');
    checkAndSetSwitchValues('indicadorbl2');
    checkAndSetSwitchValues('indicadorbl3');
    checkAndSetSwitchValues('indicadorbl4');
    checkAndSetSwitchValues('indicadorbl5');
    checkAndSetSwitchValues('indicadorbl6');
    checkAndSetSwitchValues('indicadorbl7');
    checkAndSetSwitchValues('indicadorbl8');
    checkAndSetSwitchValues('indicadorbl9');
    checkAndSetSwitchValues('indicadorbl10');

    // Configuración del observador para ambos divs
    var observer1 = createObserver('indicadorbl1');
    var observer2 = createObserver('indicadorbl2');
    var observer2 = createObserver('indicadorbl3');
    var observer2 = createObserver('indicadorbl4');
    var observer2 = createObserver('indicadorbl5');
    var observer2 = createObserver('indicadorbl6');
    var observer2 = createObserver('indicadorbl7');
    var observer2 = createObserver('indicadorbl8');
    var observer2 = createObserver('indicadorbl9');
    var observer2 = createObserver('indicadorbl10');

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
                  location.reload();
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
      

</script>


@endsection
