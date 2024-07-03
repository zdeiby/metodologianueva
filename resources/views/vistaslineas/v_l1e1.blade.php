@extends('componentes.navlateral')

@section('title', 'Triage')

@section('content')

<div class="container">
<img width="100%" height="100px" src="{{ asset('imagenes/headers.png') }}" alt="" class="sticky-top"  >
<!-- <form class="d-flex pb-4" role="search">
      <input class="form-control me-2" type="search" placeholder="Buscar folio o representante" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Buscar</button>
    </form> -->


<div class="accordion" id="accordionExample" >
  <div class="accordion-item" id="l1e1">
    <div class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        <span class="badge bg-primary" id="">TRIAGE</span>
      </button>
      <div class="progress">
        <div class="progress-bar bg-success" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
</div>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <div class="row">
      <ul class="nav nav-tabs" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link active" data-bs-toggle="tab" href="#home" aria-selected="false" role="tab" tabindex="-1">DESCRIPCIÓN FAMILIAR
</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link " data-bs-toggle="tab" href="#profile" aria-selected="true" role="tab">DATOS GEOGRAFICOS Y ECONÓMICOS</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link " data-bs-toggle="tab" href="#activities" aria-selected="true" role="tab">HABITABILIDAD</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link " data-bs-toggle="tab" href="#alimentos" aria-selected="true" role="tab">ACCESO Y DISPONIBILIDAD DE ALIMENTOS</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link " data-bs-toggle="tab" href="#violenciafamiliar" aria-selected="true" role="tab">VIOLENCIA EN EL CONTEXTO FAMILIAR</a>
  </li>
  
</ul>

<div id="myTabContent" class="tab-content"><br>
  <div class="tab-pane fade active show" id="home" role="tabpanel">
          <form class="row g-3 was-validated" >
          <div class="col-md-5">
            <label for="validationServer01" class="form-label">¿Cuántas personas conforman la familia?</label>
            <input type="number" class="form-control " id="validationServer01" value="" required>

          </div>
          <div class="col-md-7">
            <label for="validationServer04" class="form-label">¿Cuál de los siguientes tipologías describe mejor la estructura de tu familia?</label>
            <select class="form-select " id="validationServer04" aria-describedby="validationServer04Feedback" required>
              <option selected  value="">Selecciona</option>
              {!! $pregunta2_2 !!}
            </select>
          </div>

          <div class="col-md-12">
            <label for="validationServer04" class="form-label">¿La familia se encuentra en alguna de las siguientes condiciones?: migrante, retornada, victima, refugiada, solo adultos mayores.</label>
            <select class="form-select " id="validationServer04" aria-describedby="validationServer04Feedback" required>
              <option selected  value="">Selecciona</option>
              {!! $pregunta2_3 !!}
            </select>
          </div>
          <div class="col-12">
          </div>
          <div class="text-end">
            <button class="btn btn-outline-primary" id="enviar" type="submit">Guardar</button>
          </div>
        </form>
      </div>
  <div class="tab-pane fade " id="profile" role="tabpanel">
  <form class="row g-3 was-validated" >
        <div class="col-md-5">
        <label for="validationServer04" class="form-label">¿Qué estrato tiene la vivienda?</label>
          <select class="form-select " id="validationServer04" aria-describedby="validationServer04Feedback" required>
            <option selected  value="">Selecciona</option>
            {!! $pregunta3_1 !!}
          </select>
        </div>
        <div class="col-md-7">
          <label for="validationServer04" class="form-label">¿En qué comuna o corregimiento está ubicada su vivienda?</label>
          <select class="form-select " id="validationServer04" aria-describedby="validationServer04Feedback" required>
            <option selected  value="">Selecciona</option>
           <?php echo($comuna) ?>
          </select>
        </div>

        <div class="col-md-12">
          <label for="validationServer04" class="form-label">¿En qué barrio o vereda está ubicada su vivienda?</label>
          <select class="form-select " id="validationServer04" aria-describedby="validationServer04Feedback" required>
            <option selected  value="">Selecciona</option>
            <?php echo($barrios) ?>
          </select>
        </div>
        <div class="col-12">
        <label for="validationServer04" class="form-label">¿En qué tipo de zona está ubicada su vivienda?</label>
          <select class="form-select " id="validationServer04" aria-describedby="validationServer04Feedback" required>
            <option selected  value="">Selecciona</option>
            {!! $pregunta3_3_1 !!}
          </select>
        </div>
        <div class="col-12">
        <label for="validationServer04" class="form-label">¿La vivienda o tierra donde reside el hogar tiene vocación campesina?</label>
          <select class="form-select " id="validationServer04" aria-describedby="validationServer04Feedback" required>
            <option selected  value="">Selecciona</option>
            {!! $pregunta3_3_2 !!}
          </select>
        </div>
        <div class="col-12">
        <label for="validationServer04" class="form-label">¿Cuál es la dirección de la vivienda?</label>
          <select class="form-select " id="validationServer04" aria-describedby="validationServer04Feedback" required>
            <option selected  value="">Selecciona</option>
          
          </select>
        </div>
        <div class="text-end">
          <button class="btn btn-outline-primary" id="enviar" type="submit">Guardar</button>
        </div>
      </form>
  </div>




          <div class="tab-pane fade " id="activities" role="tabpanel">
          <form class="row g-3 was-validated" >
          <div class="col-md-4">
            <label for="validationServer01" class="form-label">¿Cuántas personas conforman la familia?</label>
            <input type="number" class="form-control " id="validationServer01" value="" required>

          </div>
          <div class="col-md-7">
            <label for="validationServer04" class="form-label">¿Cuál de los siguientes tipologías describe mejor la estructura de tu familia?</label>
            <select class="form-select " id="validationServer04" aria-describedby="validationServer04Feedback" required>
              <option selected  value="">Selecciona</option>
              {!! $pregunta2_2 !!}
            </select>
          </div>

          <div class="col-md-11">
            <label for="validationServer04" class="form-label">¿La familia se encuentra en alguna de las siguientes condiciones?: migrante, retornada, victima, refugiada, solo adultos mayores.</label>
            <select class="form-select " id="validationServer04" aria-describedby="validationServer04Feedback" required>
              <option selected  value="">Selecciona</option>
              {!! $pregunta2_3 !!}
            </select>
          </div>
          <div class="col-12">

          </div>
          <div class="text-end">
            <button class="btn btn-outline-primary" id="enviar" type="submit">Guardar</button>
          </div>
        </form>
      </div>




      <div class="tab-pane fade " id="alimentos" role="tabpanel">
          <form class="row g-3 was-validated" >
          <div class="col-md-4">
            <label for="validationServer01" class="form-label">¿Cuántas personas conforman la familia?</label>
            <input type="number" class="form-control " id="validationServer01" value="" required>

          </div>
          <div class="col-md-7">
            <label for="validationServer04" class="form-label">¿Cuál de los siguientes tipologías describe mejor la estructura de tu familia?</label>
            <select class="form-select " id="validationServer04" aria-describedby="validationServer04Feedback" required>
              <option selected  value="">Selecciona</option>
              {!! $pregunta2_2 !!}
            </select>
          </div>

          <div class="col-md-11">
            <label for="validationServer04" class="form-label">¿La familia se encuentra en alguna de las siguientes condiciones?: migrante, retornada, victima, refugiada, solo adultos mayores.</label>
            <select class="form-select " id="validationServer04" aria-describedby="validationServer04Feedback" required>
              <option selected  value="">Selecciona</option>
              {!! $pregunta2_3 !!}
            </select>
          </div>
          <div class="col-12">
        
          </div>
          <div class="text-end">
            <button class="btn btn-outline-primary" id="enviar" type="submit">Guardar</button>
          </div>
        </form>
      </div>




      <div class="tab-pane fade " id="violenciafamiliar" role="tabpanel">
          <form class="row g-3 was-validated" >
          <div class="col-md-4">
            <label for="validationServer01" class="form-label">¿Cuántas personas conforman la familia?</label>
            <input type="number" class="form-control " id="validationServer01" value="" required>

          </div>
          <div class="col-md-7">
            <label for="validationServer04" class="form-label">¿Cuál de los siguientes tipologías describe mejor la estructura de tu familia?</label>
            <select class="form-select " id="validationServer04" aria-describedby="validationServer04Feedback" required>
              <option selected  value="">Selecciona</option>
              {!! $pregunta2_2 !!}
            </select>
          </div>

          <div class="col-md-11">
            <label for="validationServer04" class="form-label">¿La familia se encuentra en alguna de las siguientes condiciones?: migrante, retornada, victima, refugiada, solo adultos mayores.</label>
            <select class="form-select " id="validationServer04" aria-describedby="validationServer04Feedback" required>
              <option selected  value="">Selecciona</option>
              {!! $pregunta2_3 !!}
            </select>
          </div>
          <div class="col-12">
        
          </div>
          <div class="text-end">
            <button class="btn btn-outline-primary" id="enviar" type="submit">Guardar</button>
          </div>
        </form>
      </div>






        </div>
      </div>
      </div>
    </div>
  </div>
</div>

  {{ decrypt($variable) }}
    </div>

@endsection