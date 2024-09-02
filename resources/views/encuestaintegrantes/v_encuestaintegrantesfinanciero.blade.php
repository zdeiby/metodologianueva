@extends('componentes.navlateral')

@section('title', 'encuestaintegrantes')

@section('content')

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
            <span class="badge bg-primary" id="">ENCUESTA INTEGRANTES</span>
            </button>
            <div class="progress">
                <div class="progress-bar bg-success" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
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
      <li class="nav-item" role="presentation" style="cursor:pointer">
        <a id="identificacion" class="nav-link ">BIENESTAR FISICO Y EMOCIONAL
        </a>
            </li>
        <li class="nav-item" role="presentation" style="cursor:pointer">
          <a id="intelectual"  class="nav-link" >BIENESTAR INTELECTUAL</a>
        </li>
        <li class="nav-item" role="presentation" style="cursor:pointer">
          <a id="financiero"  class="nav-link active" >BIENESTAR FINANCIERO</a>
        </li>
        <li class="nav-item" role="presentation" style="cursor:pointer">
          <a id="legal"  class="nav-link " >BIENESTAR LEGAL</a>
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
   

          <form id="formfinanciero" class="row g-3 was-validated">     
            
          <div class="col-md-3" style="display:none">
            <input type="text" placeholder="folio" class="form-control form-control-sm  " id="folioinput3" name="folio" value="" required="">
          </div>
          <div class="col-md-3" style="display:none">
            <input type="text"  class="form-control form-control-sm  " id="idintegrante3" name="idintegrante" value="" required="">
          </div>
          <div class="col-md-3" style="display:none">
            <input type="text" placeholder="usuario" class="form-control form-control-sm  " id="usuario" name="usuario" value="{{ Session::get('cedula') }}" >
          </div>
        <div class="col-md-12">
                  <label for="validationServer04" class="form-label">¿Realizas actividades que te generen ingresos económicos?</label>
                  <select class="form-control form-control-sm" id="ingresos1" name="ingresos1" aria-describedby="validationServer04Feedback" required="">
                    {{!!$ingresos1!!}}
                </select>
                </div>
        
          <div class="col-md-12" id="trabajoinfantildiv">
            <label for="validationServer04" class="form-label">¿Cuáles de las siguientes actividades realizas para obtener ingresos?</label>
            <div class="form-check form-switch" id="container-trabajoinfantil">
                      {!!$trabajoinfantil!!} 
                    </div>
          </div>
          <!-- <div class="col-md-12" id="cualtrabajoinfantildiv">
          <label for="validationServer04" class="form-label">¿Cúal?</label>
            <input type="text"  class="form-control form-control-sm  " id="cualtrabajoinfantil" name="cualtrabajoinfantil" value="" required="">
          </div> -->
          <div class="col-md-12" id="trabajoinfantil2div">
          <label for="validationServer04" class="form-label">¿Cuántas horas a la semana en promedio dedica a esta labor?</label>
            <input type="text"  class="form-control form-control-sm  " id="trabajoinfantil2" name="trabajoinfantil2" value="" required="">
          </div>
          <div class="col-md-6" id="trabajo15a17anhosdiv">
            <label for="validationServer04" class="form-label">¿Tienes permiso del ministerio de trabajo?</label>
            <select class="form-control form-control-sm" id="trabajo15a17anhos" name="trabajo15a17anhos" aria-describedby="validationServer04Feedback" required="">
            {{!!$sino!!}}     
                </select>
          </div>
          <div class="col-md-6" id="generaciondeingresosdiv">
            <label for="validationServer04" class="form-label">¿De cuál actividad derivan tus ingresos?</label>
            <select class="form-control form-control-sm" id="generaciondeingresos" name="generaciondeingresos" aria-describedby="validationServer04Feedback" required="">
            {{!!$generaciondeingresos!!}}         
             </select>
          </div>
          <div class="col-md-6" id="formalidaddelempleodiv">
            <label for="validationServer04" class="form-label">¿Cotizas al fondo de pensiones?</label>
            <select class="form-control form-control-sm" id="formalidaddelempleo" name="formalidaddelempleo" aria-describedby="validationServer04Feedback" required="">
            {{!!$sino!!}}     
          </select>
          </div>
          <div class="col-md-12" id="ingresos2div">
            <label for="validationServer04" class="form-label">¿A cuánto ascienden tus ingresos fijos al mes? (ingresos por alguna renta o pensión de jubilación, subsidios, etc)</label>
            <input type="text"  class="form-control form-control-sm  "  id="ingresos2" name="ingresos2" value="" required="">
          </div>
          <div class="col-md-12" id="ingresos3div">
            <label for="validationServer04" class="form-label">¿A cuánto ascienden tus ingresos variables al mes? (horas extras, comisiones, premios, ganancia por alguna inversión que haga, trabajos independientes)</label>
            <input type="text"  class="form-control form-control-sm  " id="ingresos3" name="ingresos3" value="" required="">
          </div>
          <div class="col-md-6" id="desempleodelargaduraciondiv">
            <label for="validationServer04" class="form-label">¿Cuántos meses llevas desempleado?</label>
            <input type="number"  class="form-control form-control-sm  " id="desempleodelargaduracion" name="desempleodelargaduracion" value="" required="">
          </div>
          <div class="col-md-6" id="desempleodiv">
            <label for="validationServer04" class="form-label">¿Qué expectativa tienes para generar ingresos?</label>
            <select class="form-control form-control-sm" id="desempleo" name="desempleo" aria-describedby="validationServer04Feedback" required="">
            {{!!$desempleo!!}}
          </select>
          </div>
          <div class="col-md-12" id="intermediacionlaboraldiv">
            <label for="validationServer04" class="form-label">¿Has accedido a servicios de intermediación laboral?</label>
            <select class="form-control form-control-sm" id="intermediacionlaboral" name="intermediacionlaboral" aria-describedby="validationServer04Feedback" required="">
            {{!!$sino!!}}
          </select>
          </div>
          <div class="col-md-12" id="emprendimiento1div">
            <label for="validationServer04" class="form-label">¿Has recibido educación o has asistido a programas de formación y/o apoyo al emprendimiento e innovación?</label>
            <select class="form-control form-control-sm" id="emprendimiento1" name="emprendimiento1" aria-describedby="validationServer04Feedback" required="">
            {{!!$emprendimiento1!!}}
          </select>
          </div>
          <div class="col-md-12" id="bancarizaciondiv">
            <label for="validationServer04" class="form-label">¿Cuáles mecanismos o productos financieros conoces, has usado o usas en la actualidad?</label>
            <div class="form-check form-switch" id="container-bancarizacion">
                      {!!$bancarizacion!!} 
                    </div>
          </div>
          <div class="col-md-12" id="endeudamiento1div">
            <label for="validationServer04" class="form-label">¿Actualmente tienes deudas?</label>
            <select class="form-control form-control-sm" id="endeudamiento1" name="endeudamiento1" aria-describedby="validationServer04Feedback" required="">
            {{!!$sino!!}}
          </select>
          </div>
          <div class="col-md-12" id="endeudamiento3div">
          <label for="validationServer04" class="form-label">¿A cuánto equivalen las deudas que tienes actualmente?</label>
            <input type="text"  class="form-control form-control-sm  "  id="endeudamiento3" name="endeudamiento3" value="" required="">
          </div>
          <div class="col-md-12" id="endeudamiento2div">
            <label for="validationServer04" class="form-label">¿Estás interesado en refinanciar todas tus deudas y consolidarlas en un solo crédito?</label>
            <select class="form-control form-control-sm" id="endeudamiento2" name="endeudamiento2" aria-describedby="validationServer04Feedback" required="">
            {{!!$sino!!}}
          </select>
          </div>

          <div class="col-md-12" id="endeudamiento4div" style="display:none">
            <label for="validationServer04" class="form-label">¿Está interesado en acceder a educación financiera?</label>
            <select class="form-control form-control-sm" id="endeudamiento4" name="endeudamiento4" aria-describedby="validationServer04Feedback" required="">
            {{!!$sino!!}}
          </select>
          </div>
        
          <hr>
    
          <div class="row pt-4">
            <div class="text-start col">
              <div class="btn btn-outline-primary" id="volver">volver</div>
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

    </div>

    <script src="{{ asset('assets/jquery/jquery.js') }}"></script>

    <script>
    paginacargando();

  $('.noaplica0').css('display','none');
  
    $('#ingresos1').change(function(){
             //menor de 14 y opcion sí

              if($('#ingresos1').val() == '134' && parseInt($('#edadintegrante').val()) <= '17'){
              $('.trabajoinfantil137').css('display','');
              $('#trabajoinfantil137').css('display','');
              $('.trabajoinfantil138').css('display','');
              $('#trabajoinfantil138').css('display','');
              $('.trabajoinfantil139').css('display','');
              $('#trabajoinfantil139').css('display','');
              $('.trabajoinfantil140').css('display','');
              $('#trabajoinfantil140').css('display','');
              $('.trabajoinfantil141').css('display','');
              $('#trabajoinfantil141').css('display','');
              $('.trabajoinfantil142').css('display','');
              $('#trabajoinfantil142').css('display','');
              $('.trabajoinfantil143').css('display','');
              $('#trabajoinfantil143').css('display','');
              $('.trabajoinfantil144').css('display','');
              $('#trabajoinfantil144').css('display','');
              $('.trabajoinfantil145').css('display','');
              $('#trabajoinfantil145').css('display','');
              $('.trabajoinfantil146').css('display','');
              $('#trabajoinfantil146').css('display','');
              $('.trabajoinfantil349').css('display','');
              $('#trabajoinfantil349').css('display','');



              $('#trabajoinfantildiv').css('display','');
              $('#trabajoinfantil2div').css('display','');
              $('#trabajoinfantil2').attr('required', 'required');
             // $('#cualtrabajoinfantildiv').css('display', 'none');
             // $('#cualtrabajoinfantil').val('0');
              $('#trabajoinfantil2').val('');
              $('input[name="trabajoinfantil[]"]').prop('checked', false);
             // $('#cualtrabajoinfantil').removeAttr('required');
              $('input[name="trabajoinfantil[]"]').attr('required', 'required');
              $('#trabajo15a17anhosdiv').css('display', 'none');
              $('#trabajo15a17anhos').val('0'); 
              $('#trabajo15a17anhos').removeAttr('required');
              $('#generaciondeingresosdiv').css('display', 'none');
              $('#generaciondeingresos').val('0'); 
              $('#generaciondeingresos').removeAttr('required');
              $('#formalidaddelempleodiv').css('display', 'none');
              $('#formalidaddelempleo').val('0'); 
              $('#formalidaddelempleo').removeAttr('required');
              $('#ingresos2div').css('display', '');
              $('#ingresos2').val(''); 
              $('#ingresos2').attr('required','required');         
              $('#ingresos3div').css('display', '');
              $('#ingresos3').val(''); 
              $('#ingresos3').attr('required','required');   
              $('#desempleodelargaduraciondiv').css('display', 'none');
              $('#desempleodelargaduracion').val('0'); 
              $('#desempleodelargaduracion').removeAttr('required');
              $('#desempleodiv').css('display', 'none');
              $('#desempleo').val('0'); 
              $('#desempleo').removeAttr('required');
              $('#intermediacionlaboraldiv').css('display', 'none');
              $('#intermediacionlaboral').val('0'); 
              $('#intermediacionlaboral').removeAttr('required');
              $('.bancarizacion157').css('display','none');
              $('#bancarizacion157').css('display','none');
              $('.bancarizacion158').css('display','none');
              $('#bancarizacion158').css('display','none');
              $('.bancarizacion159').css('display','none');
              $('#bancarizacion159').css('display','none');
              $('.bancarizacion160').css('display','none');
              $('#bancarizacion160').css('display','none');
              $('.bancarizacion161').css('display','none');
              $('#bancarizacion161').css('display','none');
              $('.bancarizacion162').css('display','none');
              $('#bancarizacion162').css('display','none');
              $('.bancarizacion163').css('display','none');
              $('#bancarizacion163').css('display','none');
              $('.bancarizacion164').css('display','none');
              $('#bancarizacion164').css('display','none');
              $('#bancarizaciondiv').css('display','none');
              $('input[name="bancarizacion[]"]').removeAttr('required');
              $('#endeudamiento1div').css('display', 'none');
              $('#endeudamiento1').val('0'); 
              $('#endeudamiento1').removeAttr('required');
              $('#endeudamiento2div').css('display', 'none');
              $('#endeudamiento2').val('0'); 
              $('#endeudamiento2').removeAttr('required');
              $('#endeudamiento3div').css('display', 'none');
              $('#endeudamiento3').val('0'); 
              $('#endeudamiento3').removeAttr('required');
              $('#emprendimiento1div').css('display', '');
              $('#emprendimiento1').val('');
              $('#emprendimiento1').attr('required','required');
              $('#endeudamiento4div').css('display', 'none');
              $('#endeudamiento4').val('0'); 
              $('#endeudamiento4').removeAttr('required');
             }

             // menor de 14 y opcion no 

             if($('#ingresos1').val() == '135' || $('#ingresos1').val() == ''  && parseInt($('#edadintegrante').val()) <= '14'){
              $('.trabajoinfantil137').css('display','none');
              $('#trabajoinfantil137').css('display','none');
              $('.trabajoinfantil138').css('display','none');
              $('#trabajoinfantil138').css('display','none');
              $('.trabajoinfantil139').css('display','none');
              $('#trabajoinfantil139').css('display','none');
              $('.trabajoinfantil140').css('display','none');
              $('#trabajoinfantil140').css('display','none');
              $('.trabajoinfantil141').css('display','none');
              $('#trabajoinfantil141').css('display','none');
              $('.trabajoinfantil142').css('display','none');
              $('#trabajoinfantil142').css('display','none');
              $('.trabajoinfantil143').css('display','none');
              $('#trabajoinfantil143').css('display','none');
              $('.trabajoinfantil144').css('display','none');
              $('#trabajoinfantil144').css('display','none');
              $('.trabajoinfantil145').css('display','none');
              $('#trabajoinfantil145').css('display','none');
              $('.trabajoinfantil146').css('display','none');
              $('#trabajoinfantil146').css('display','none');
              $('.trabajoinfantil349').css('display','none');
              $('#trabajoinfantil349').css('display','none');



              $('#trabajoinfantildiv').css('display','none');
            //  $('#cualtrabajoinfantildiv').css('display', 'none');
            //  $('#cualtrabajoinfantil').val('0');
            //  $('#cualtrabajoinfantil').removeAttr('required');
              $('#trabajoinfantil2div').css('display','none');
              $('#trabajoinfantil2').val('0');
              $('#trabajoinfantil2').removeAttr('required');
              $('input[name="trabajoinfantil[]"]').removeAttr('required');
              $('input[name="trabajoinfantil[]"]').prop('checked', false);
              $('#trabajo15a17anhosdiv').css('display', 'none');
              $('#trabajo15a17anhos').val('0'); 
              $('#trabajo15a17anhos').removeAttr('required');  
              $('#ingresos2div').css('display', 'none');
              $('#ingresos2').val('0'); 
              $('#ingresos2').removeAttr('required');         
              $('#ingresos3div').css('display', 'none');
              $('#ingresos3').val('0'); 
              $('#ingresos3').removeAttr('required');
              $('#desempleodelargaduraciondiv').css('display', 'none');
              $('#desempleodelargaduracion').val('0'); 
              $('#desempleodelargaduracion').removeAttr('required');
              $('#desempleodiv').css('display', 'none');
              $('#desempleo').val('0'); 
              $('#desempleo').removeAttr('required');
              $('#intermediacionlaboraldiv').css('display', 'none');
              $('#intermediacionlaboral').val('0'); 
              $('#intermediacionlaboral').removeAttr('required');
              $('.bancarizacion157').css('display','none');
              $('#bancarizacion157').css('display','none');
              $('.bancarizacion158').css('display','none');
              $('#bancarizacion158').css('display','none');
              $('.bancarizacion159').css('display','none');
              $('#bancarizacion159').css('display','none');
              $('.bancarizacion160').css('display','none');
              $('#bancarizacion160').css('display','none');
              $('.bancarizacion161').css('display','none');
              $('#bancarizacion161').css('display','none');
              $('.bancarizacion162').css('display','none');
              $('#bancarizacion162').css('display','none');
              $('.bancarizacion163').css('display','none');
              $('#bancarizacion163').css('display','none');
              $('.bancarizacion164').css('display','none');
              $('#bancarizacion164').css('display','none');
              $('#bancarizaciondiv').css('display','none');
              $('input[name="bancarizacion[]"]').removeAttr('required');
              $('#endeudamiento1div').css('display', 'none');
              $('#endeudamiento1').val('0'); 
              $('#endeudamiento1').removeAttr('required');
              $('#endeudamiento2div').css('display', 'none');
              $('#endeudamiento2').val('0'); 
              $('#endeudamiento2').removeAttr('required');
              $('#endeudamiento3div').css('display', 'none');
              $('#endeudamiento3').val('0'); 
              $('#endeudamiento3').removeAttr('required');
              $('#generaciondeingresosdiv').css('display', 'none');
              $('#generaciondeingresos').val('0'); 
              $('#generaciondeingresos').removeAttr('required');
              $('#emprendimiento1div').css('display', 'none');
              $('#emprendimiento1').val('0');
              $('#emprendimiento1').removeAttr('required');
              $('#formalidaddelempleodiv').css('display', 'none');
              $('#formalidaddelempleo').val('0'); 
              $('#formalidaddelempleo').removeAttr('required');
             }

             // menor a 14 años es pensionado 

             if($('#ingresos1').val() == '136' && parseInt($('#edadintegrante').val()) <= '14'){
              $('.trabajoinfantil137').css('display','none');
              $('#trabajoinfantil137').css('display','none');
              $('.trabajoinfantil138').css('display','none');
              $('#trabajoinfantil138').css('display','none');
              $('.trabajoinfantil139').css('display','none');
              $('#trabajoinfantil139').css('display','none');
              $('.trabajoinfantil140').css('display','none');
              $('#trabajoinfantil140').css('display','none');
              $('.trabajoinfantil141').css('display','none');
              $('#trabajoinfantil141').css('display','none');
              $('.trabajoinfantil142').css('display','none');
              $('#trabajoinfantil142').css('display','none');
              $('.trabajoinfantil143').css('display','none');
              $('#trabajoinfantil143').css('display','none');
              $('.trabajoinfantil144').css('display','none');
              $('#trabajoinfantil144').css('display','none');
              $('.trabajoinfantil145').css('display','none');
              $('#trabajoinfantil145').css('display','none');
              $('.trabajoinfantil146').css('display','none');
              $('#trabajoinfantil146').css('display','none');
              $('.trabajoinfantil349').css('display','none');
              $('#trabajoinfantil349').css('display','none');


              $('#trabajoinfantildiv').css('display','none');
             // $('#cualtrabajoinfantildiv').css('display', 'none');
             // $('#cualtrabajoinfantil').val('0');
             // $('#cualtrabajoinfantil').removeAttr('required');
              $('#trabajoinfantil2div').css('display','none');
              $('#trabajoinfantil2').removeAttr('required');
              $('input[name="trabajoinfantil[]"]').removeAttr('required');
              $('input[name="trabajoinfantil[]"]').prop('checked', false);
              $('#trabajo15a17anhosdiv').css('display', 'none');
              $('#trabajo15a17anhos').val('0'); 
              $('#trabajo15a17anhos').removeAttr('required');  
              $('#ingresos2div').css('display', '');
              $('#ingresos2').val(''); 
              $('#ingresos2').attr('required','required');         
              $('#ingresos3div').css('display', '');
              $('#ingresos3').val(''); 
              $('#ingresos3').attr('required','required');
              $('#desempleodelargaduraciondiv').css('display', 'none');
              $('#desempleodelargaduracion').val('0'); 
              $('#desempleodelargaduracion').removeAttr('required');
              $('#desempleodiv').css('display', 'none');
              $('#desempleo').val('0'); 
              $('#desempleo').removeAttr('required');
              $('#intermediacionlaboraldiv').css('display', 'none');
              $('#intermediacionlaboral').val('0'); 
              $('#intermediacionlaboral').removeAttr('required');
              $('.bancarizacion157').css('display','none');
              $('#bancarizacion157').css('display','none');
              $('.bancarizacion158').css('display','none');
              $('#bancarizacion158').css('display','none');
              $('.bancarizacion159').css('display','none');
              $('#bancarizacion159').css('display','none');
              $('.bancarizacion160').css('display','none');
              $('#bancarizacion160').css('display','none');
              $('.bancarizacion161').css('display','none');
              $('#bancarizacion161').css('display','none');
              $('.bancarizacion162').css('display','none');
              $('#bancarizacion162').css('display','none');
              $('.bancarizacion163').css('display','none');
              $('#bancarizacion163').css('display','none');
              $('.bancarizacion164').css('display','none');
              $('#bancarizacion164').css('display','none');
              $('#bancarizaciondiv').css('display','none');
              $('input[name="bancarizacion[]"]').removeAttr('required');
              $('#endeudamiento1div').css('display', 'none');
              $('#endeudamiento1').val('0'); 
              $('#endeudamiento1').removeAttr('required');
              $('#endeudamiento2div').css('display', 'none');
              $('#endeudamiento2').val('0'); 
              $('#endeudamiento2').removeAttr('required');
              $('#endeudamiento3div').css('display', 'none');
              $('#endeudamiento3').val('0'); 
              $('#endeudamiento3').removeAttr('required');
              $('#generaciondeingresosdiv').css('display', 'none');
              $('#generaciondeingresos').val('0'); 
              $('#generaciondeingresos').removeAttr('required');
              $('#emprendimiento1div').css('display', '');
              $('#emprendimiento1').val('');
              $('#emprendimiento1').attr('required','required');
              $('#formalidaddelempleodiv').css('display', 'none');
              $('#formalidaddelempleo').val('0'); 
              $('#formalidaddelempleo').removeAttr('required');
             }

//entre 15 y 17 y opcion sí

             if($('#ingresos1').val() == '134' && (parseInt($('#edadintegrante').val()) >= '15' && parseInt($('#edadintegrante').val()) <= '17')){
              $('.trabajoinfantil137').css('display','none');
              $('#trabajoinfantil137').css('display','none');
              $('.trabajoinfantil138').css('display','none');
              $('#trabajoinfantil138').css('display','none');
              $('.trabajoinfantil139').css('display','none');
              $('#trabajoinfantil139').css('display','none');
              $('.trabajoinfantil140').css('display','none');
              $('#trabajoinfantil140').css('display','none');
              $('.trabajoinfantil141').css('display','none');
              $('#trabajoinfantil141').css('display','none');
              $('.trabajoinfantil142').css('display','none');
              $('#trabajoinfantil142').css('display','none');
              $('.trabajoinfantil143').css('display','none');
              $('#trabajoinfantil143').css('display','none');
              $('.trabajoinfantil144').css('display','none');
              $('#trabajoinfantil144').css('display','none');
              $('.trabajoinfantil145').css('display','none');
              $('#trabajoinfantil145').css('display','none');
              $('.trabajoinfantil146').css('display','none');
              $('#trabajoinfantil146').css('display','none');
              $('.trabajoinfantil349').css('display','none');
              $('#trabajoinfantil349').css('display','none');


              $('#trabajoinfantildiv').css('display','none');
              $('#trabajoinfantil2div').css('display','none');
              $('#trabajoinfantil2').removeAttr('required');
             // $('#cualtrabajoinfantildiv').css('display', 'none');
             // $('#cualtrabajoinfantil').val('0'); 
             // $('#cualtrabajoinfantil').removeAttr('required');
              $('#trabajoinfantil2').val('0');
              $('input[name="trabajoinfantil[]"]').prop('checked', false);
              
              $('#trabajo15a17anhosdiv').css('display', '');
              $('#trabajo15a17anhos').val(''); 
              $('#trabajo15a17anhos').attr('required','required');
              $('#generaciondeingresosdiv').css('display', '');
              $('#generaciondeingresos').val(''); 
              $('#generaciondeingresos').attr('required','required');
              $('#formalidaddelempleodiv').css('display', '');
              $('#formalidaddelempleo').val(''); 
              $('#formalidaddelempleo').attr('required','required');
              $('#ingresos2div').css('display', '');
              $('#ingresos2').val(''); 
              $('#ingresos2').attr('required','required');         
              $('#ingresos3div').css('display', '');
              $('#ingresos3').val(''); 
              $('#ingresos3').attr('required','required');
              $('.bancarizacion157').css('display','');
              $('#bancarizacion157').css('display','');
              $('.bancarizacion158').css('display','');
              $('#bancarizacion158').css('display','');
              $('.bancarizacion159').css('display','');
              $('#bancarizacion159').css('display','');
              $('.bancarizacion160').css('display','');
              $('#bancarizacion160').css('display','');
              $('.bancarizacion161').css('display','');
              $('#bancarizacion161').css('display','');
              $('.bancarizacion162').css('display','');
              $('#bancarizacion162').css('display','');
              $('.bancarizacion163').css('display','');
              $('#bancarizacion163').css('display','');
              $('.bancarizacion164').css('display','');
              $('#bancarizacion164').css('display','');
              $('#bancarizaciondiv').css('display','');
              $('input[name="bancarizacion[]"]').prop('checked', false);
              $('input[name="bancarizacion[]"]').attr('required', 'required');
              $('#endeudamiento1div').css('display', '');
              $('#endeudamiento1').val(''); 
              $('#endeudamiento1').attr('required','required');
              $('#endeudamiento2div').css('display', '');
              $('#endeudamiento2').val(''); 
              $('#endeudamiento2').attr('required','required');
              $('#endeudamiento3div').css('display', '');
              $('#endeudamiento3').val(''); 
              $('#endeudamiento3').attr('required','required');
              $('#desempleodelargaduraciondiv').css('display', 'none');
              $('#desempleodelargaduracion').val('0'); 
              $('#desempleodelargaduracion').removeAttr('required');
              $('#desempleodiv').css('display', 'none');
              $('#desempleo').val('0'); 
              $('#desempleo').removeAttr('required');
              $('#intermediacionlaboraldiv').css('display', 'none');
              $('#intermediacionlaboral').val('0'); 
              $('#intermediacionlaboral').removeAttr('required');
              $('#emprendimiento1div').css('display', '');
              $('#emprendimiento1').val('');
              $('#emprendimiento1').attr('required','required');

             }
             //entre 15 y 17 y opcion no

               if(($('#ingresos1').val() == '135' || $('#ingresos1').val() == '' ) && (parseInt($('#edadintegrante').val()) >= '15' && parseInt($('#edadintegrante').val()) <= '17')){
              $('.trabajoinfantil137').css('display','none');
              $('#trabajoinfantil137').css('display','none');
              $('.trabajoinfantil138').css('display','none');
              $('#trabajoinfantil138').css('display','none');
              $('.trabajoinfantil139').css('display','none');
              $('#trabajoinfantil139').css('display','none');
              $('.trabajoinfantil140').css('display','none');
              $('#trabajoinfantil140').css('display','none');
              $('.trabajoinfantil141').css('display','none');
              $('#trabajoinfantil141').css('display','none');
              $('.trabajoinfantil142').css('display','none');
              $('#trabajoinfantil142').css('display','none');
              $('.trabajoinfantil143').css('display','none');
              $('#trabajoinfantil143').css('display','none');
              $('.trabajoinfantil144').css('display','none');
              $('#trabajoinfantil144').css('display','none');
              $('.trabajoinfantil145').css('display','none');
              $('#trabajoinfantil145').css('display','none');
              $('.trabajoinfantil146').css('display','none');
              $('#trabajoinfantil146').css('display','none');
              $('#trabajoinfantildiv').css('display','none');
              $('.trabajoinfantil349').css('display','none');
              $('#trabajoinfantil349').css('display','none');
              
             // $('#cualtrabajoinfantildiv').css('display', 'none');
             // $('#cualtrabajoinfantil').val('0');
             // $('#cualtrabajoinfantil').removeAttr('required');
              $('#trabajoinfantil2div').css('display','none');
              $('#trabajoinfantil2').val('0');
              $('#trabajoinfantil2').removeAttr('required');
              $('input[name="trabajoinfantil[]"]').removeAttr('required');
              $('input[name="trabajoinfantil[]"]').prop('checked', false);
              $('#trabajo15a17anhosdiv').css('display', 'none');
              $('#trabajo15a17anhos').val('0'); 
              $('#trabajo15a17anhos').removeAttr('required');  
              $('#ingresos2div').css('display', 'none');
              $('#ingresos2').val('0'); 
              $('#ingresos2').removeAttr('required');         
              $('#ingresos3div').css('display', 'none');
              $('#ingresos3').val('0'); 
              $('#ingresos3').removeAttr('required');
              $('#desempleodelargaduraciondiv').css('display', 'none');
              $('#desempleodelargaduracion').val('0'); 
              $('#desempleodelargaduracion').removeAttr('required');
              $('#desempleodiv').css('display', 'none');
              $('#desempleo').val('0'); 
              $('#desempleo').removeAttr('required');
              $('#intermediacionlaboraldiv').css('display', 'none');
              $('#intermediacionlaboral').val('0'); 
              $('#intermediacionlaboral').removeAttr('required');
              $('.bancarizacion157').css('display','none');
              $('#bancarizacion157').css('display','none');
              $('.bancarizacion158').css('display','none');
              $('#bancarizacion158').css('display','none');
              $('.bancarizacion159').css('display','none');
              $('#bancarizacion159').css('display','none');
              $('.bancarizacion160').css('display','none');
              $('#bancarizacion160').css('display','none');
              $('.bancarizacion161').css('display','none');
              $('#bancarizacion161').css('display','none');
              $('.bancarizacion162').css('display','none');
              $('#bancarizacion162').css('display','none');
              $('.bancarizacion163').css('display','none');
              $('#bancarizacion163').css('display','none');
              $('.bancarizacion164').css('display','none');
              $('#bancarizacion164').css('display','none');
              $('#bancarizaciondiv').css('display','none');
              $('input[name="bancarizacion[]"]').prop('checked', false);
              $('#endeudamiento1div').css('display', 'none');
              $('#endeudamiento1').val('0'); 
              $('#endeudamiento1').removeAttr('required');
              $('#endeudamiento2div').css('display', 'none');
              $('#endeudamiento2').val('0'); 
              $('#endeudamiento2').removeAttr('required');
              $('#endeudamiento3div').css('display', 'none');
              $('#endeudamiento3').val('0');
              $('#endeudamiento3').removeAttr('required');
              $('#endeudamiento4div').css('display', 'none');
              $('#endeudamiento4').val('0');
              $('#endeudamiento4').removeAttr('required');
              $('#emprendimiento1div').css('display', 'none');
              $('#emprendimiento1').val('0');
              $('#emprendimiento1').removeAttr('required');
              $('#generaciondeingresosdiv').css('display', 'none');
              $('#generaciondeingresos').val('0'); 
              $('#generaciondeingresos').removeAttr('required');
              $('#formalidaddelempleodiv').css('display', 'none');
              $('#formalidaddelempleo').val('0'); 
              $('#formalidaddelempleo').removeAttr('required');
             }
// entre 15 y 17 pensionado
             if(($('#ingresos1').val() == '136' ) && (parseInt($('#edadintegrante').val()) >= '15' && parseInt($('#edadintegrante').val()) <= '17')){
              $('.trabajoinfantil137').css('display','none');
              $('#trabajoinfantil137').css('display','none');
              $('.trabajoinfantil138').css('display','none');
              $('#trabajoinfantil138').css('display','none');
              $('.trabajoinfantil139').css('display','none');
              $('#trabajoinfantil139').css('display','none');
              $('.trabajoinfantil140').css('display','none');
              $('#trabajoinfantil140').css('display','none');
              $('.trabajoinfantil141').css('display','none');
              $('#trabajoinfantil141').css('display','none');
              $('.trabajoinfantil142').css('display','none');
              $('#trabajoinfantil142').css('display','none');
              $('.trabajoinfantil143').css('display','none');
              $('#trabajoinfantil143').css('display','none');
              $('.trabajoinfantil144').css('display','none');
              $('#trabajoinfantil144').css('display','none');
              $('.trabajoinfantil145').css('display','none');
              $('#trabajoinfantil145').css('display','none');
              $('.trabajoinfantil146').css('display','none');
              $('#trabajoinfantil146').css('display','none');
              $('.trabajoinfantil349').css('display','none');
              $('#trabajoinfantil349').css('display','none');



              $('#trabajoinfantildiv').css('display','none');
             // $('#cualtrabajoinfantildiv').css('display', 'none');
             // $('#cualtrabajoinfantil').val('0');
             // $('#cualtrabajoinfantil').removeAttr('required');
              $('#trabajoinfantil2div').css('display','none');
              $('#trabajoinfantil2').val('0');
              $('#trabajoinfantil2').removeAttr('required');
              $('input[name="trabajoinfantil[]"]').removeAttr('required');
              $('input[name="trabajoinfantil[]"]').prop('checked', false);
              $('#trabajo15a17anhosdiv').css('display', 'none');
              $('#trabajo15a17anhos').val('0'); 
              $('#trabajo15a17anhos').removeAttr('required');  
              $('#ingresos3div').css('display', '');
              $('#ingresos3').val(''); 
              $('#ingresos3').attr('required','required');         
              $('#ingresos2div').css('display', '');
              $('#ingresos2').val(''); 
              $('#ingresos2').attr('required','required');
              $('#desempleodelargaduraciondiv').css('display', 'none');
              $('#desempleodelargaduracion').val('0'); 
              $('#desempleodelargaduracion').removeAttr('required');
              $('#desempleodiv').css('display', 'none');
              $('#desempleo').val('0'); 
              $('#desempleo').removeAttr('required');
              $('#intermediacionlaboraldiv').css('display', 'none');
              $('#intermediacionlaboral').val('0'); 
              $('#intermediacionlaboral').removeAttr('required');
              $('.bancarizacion157').css('display','');
              $('#bancarizacion157').css('display','');
              $('.bancarizacion158').css('display','');
              $('#bancarizacion158').css('display','');
              $('.bancarizacion159').css('display','');
              $('#bancarizacion159').css('display','');
              $('.bancarizacion160').css('display','');
              $('#bancarizacion160').css('display','');
              $('.bancarizacion161').css('display','');
              $('#bancarizacion161').css('display','');
              $('.bancarizacion162').css('display','');
              $('#bancarizacion162').css('display','');
              $('.bancarizacion163').css('display','');
              $('#bancarizacion163').css('display','');
              $('.bancarizacion164').css('display','');
              $('#bancarizacion164').css('display','');
              $('#bancarizaciondiv').css('display','');


              $('input[name="bancarizacion[]"]').prop('checked', false);
              $('input[name="bancarizacion[]"]').attr('required', 'required');

              $('#endeudamiento1div').css('display', '');
              $('#endeudamiento1').val(''); 
              $('#endeudamiento1').attr('required','required');
              $('#endeudamiento2div').css('display', '');
              $('#endeudamiento2').val(''); 
              $('#endeudamiento2').attr('required','required');
              $('#endeudamiento3div').css('display', '');
              $('#endeudamiento3').val('');
              $('#emprendimiento2').val('');  
              $('#endeudamiento3').attr('required','required');
              $('#emprendimiento1div').css('display', '');
              $('#emprendimiento1').val(''); 
              $('#emprendimiento1').attr('required','required');
              $('#generaciondeingresosdiv').css('display', 'none');
              $('#generaciondeingresos').val('0'); 
              $('#generaciondeingresos').removeAttr('required');
              $('#formalidaddelempleodiv').css('display', 'none');
              $('#formalidaddelempleo').val('0'); 
              $('#formalidaddelempleo').removeAttr('required');
             }





//18 a 66 y opcion sí

if($('#ingresos1').val() == '134' && (parseInt($('#edadintegrante').val()) >= '18' && parseInt($('#edadintegrante').val()) <= '66')){
              $('.trabajoinfantil137').css('display','none');
              $('#trabajoinfantil137').css('display','none');
              $('.trabajoinfantil138').css('display','none');
              $('#trabajoinfantil138').css('display','none');
              $('.trabajoinfantil139').css('display','none');
              $('#trabajoinfantil139').css('display','none');
              $('.trabajoinfantil140').css('display','none');
              $('#trabajoinfantil140').css('display','none');
              $('.trabajoinfantil141').css('display','none');
              $('#trabajoinfantil141').css('display','none');
              $('.trabajoinfantil142').css('display','none');
              $('#trabajoinfantil142').css('display','none');
              $('.trabajoinfantil143').css('display','none');
              $('#trabajoinfantil143').css('display','none');
              $('.trabajoinfantil144').css('display','none');
              $('#trabajoinfantil144').css('display','none');
              $('.trabajoinfantil145').css('display','none');
              $('#trabajoinfantil145').css('display','none');
              $('.trabajoinfantil146').css('display','none');
              $('#trabajoinfantil146').css('display','none');
              $('.trabajoinfantil349').css('display','none');
              $('#trabajoinfantil349').css('display','none');


              $('#trabajoinfantildiv').css('display','none');
              $('#trabajoinfantil2div').css('display','none');
              $('#trabajoinfantil2').removeAttr('required');
            //  $('#cualtrabajoinfantildiv').css('display', 'none');
            //  $('#cualtrabajoinfantil').val('0'); 
            //  $('#cualtrabajoinfantil').removeAttr('required');
              $('#trabajoinfantil2').val('0');
              $('input[name="trabajoinfantil[]"]').prop('checked', false);
              $('#trabajo15a17anhosdiv').css('display', 'none');
              $('#trabajo15a17anhos').val('0'); 
              $('#trabajo15a17anhos').removeAttr('required');
              $('#generaciondeingresosdiv').css('display', '');
              $('#generaciondeingresos').val(''); 
              $('#generaciondeingresos').attr('required','required');
              $('#formalidaddelempleodiv').css('display', '');
              $('#formalidaddelempleo').val(''); 
              $('#formalidaddelempleo').attr('required','required');
              $('#ingresos3div').css('display', '');
              $('#ingresos3').val(''); 
              $('#ingresos3').attr('required','required');         
              $('#ingresos2div').css('display', '');
              $('#ingresos2').val(''); 
              $('#ingresos2').attr('required','required');
              $('.bancarizacion157').css('display','');
              $('#bancarizacion157').css('display','');
              $('.bancarizacion158').css('display','');
              $('#bancarizacion158').css('display','');
              $('.bancarizacion159').css('display','');
              $('#bancarizacion159').css('display','');
              $('.bancarizacion160').css('display','');
              $('#bancarizacion160').css('display','');
              $('.bancarizacion161').css('display','');
              $('#bancarizacion161').css('display','');
              $('.bancarizacion162').css('display','');
              $('#bancarizacion162').css('display','');
              $('.bancarizacion163').css('display','');
              $('#bancarizacion163').css('display','');
              $('.bancarizacion164').css('display','');
              $('#bancarizacion164').css('display','');
              $('#bancarizaciondiv').css('display','');
              $('input[name="bancarizacion[]"]').prop('checked', false);
              $('input[name="bancarizacion[]"]').attr('required', 'required');

              $('#endeudamiento1div').css('display', '');
              $('#endeudamiento1').val(''); 
              $('#endeudamiento1').attr('required','required');
              $('#endeudamiento2div').css('display', '');
              $('#endeudamiento2').val(''); 
              $('#endeudamiento2').attr('required','required');
              $('#endeudamiento3div').css('display', '');
              $('#endeudamiento3').val(''); 
              $('#endeudamiento3').attr('required','required');
              $('#desempleodelargaduraciondiv').css('display', 'none');
              $('#desempleodelargaduracion').val('0'); 
              $('#desempleodelargaduracion').removeAttr('required');
              $('#desempleodiv').css('display', 'none');
              $('#desempleo').val('0'); 
              $('#desempleo').removeAttr('required');
              $('#emprendimiento1div').css('display', '');
              $('#emprendimiento1').val('');
              $('#emprendimiento1').attr('required','required');
              $('#intermediacionlaboraldiv').css('display', 'none');
              $('#intermediacionlaboral').val('0'); 
              $('#intermediacionlaboral').removeAttr('required');
             }

             // de 18 a 66 y opcion no

               if(($('#ingresos1').val() == '135' ) && (parseInt($('#edadintegrante').val()) >= '18' && parseInt($('#edadintegrante').val()) <= '66')){
              $('.trabajoinfantil137').css('display','none');
              $('#trabajoinfantil137').css('display','none');
              $('.trabajoinfantil138').css('display','none');
              $('#trabajoinfantil138').css('display','none');
              $('.trabajoinfantil139').css('display','none');
              $('#trabajoinfantil139').css('display','none');
              $('.trabajoinfantil140').css('display','none');
              $('#trabajoinfantil140').css('display','none');
              $('.trabajoinfantil141').css('display','none');
              $('#trabajoinfantil141').css('display','none');
              $('.trabajoinfantil142').css('display','none');
              $('#trabajoinfantil142').css('display','none');
              $('.trabajoinfantil143').css('display','none');
              $('#trabajoinfantil143').css('display','none');
              $('.trabajoinfantil144').css('display','none');
              $('#trabajoinfantil144').css('display','none');
              $('.trabajoinfantil145').css('display','none');
              $('#trabajoinfantil145').css('display','none');
              $('.trabajoinfantil146').css('display','none');
              $('#trabajoinfantil146').css('display','none');
              $('.trabajoinfantil349').css('display','none');
              $('#trabajoinfantil349').css('display','none');



              $('#trabajoinfantildiv').css('display','none');
             // $('#cualtrabajoinfantildiv').css('display', 'none');
             // $('#cualtrabajoinfantil').val('0');
             // $('#cualtrabajoinfantil').removeAttr('required');
              $('#trabajoinfantil2div').css('display','none');
              $('#trabajoinfantil2').val('0');
              $('#trabajoinfantil2').removeAttr('required');
              $('input[name="trabajoinfantil[]"]').removeAttr('required');
              $('input[name="trabajoinfantil[]"]').prop('checked', false);
              $('#trabajo15a17anhosdiv').css('display', 'none');
              $('#trabajo15a17anhos').val('0'); 
              $('#trabajo15a17anhos').removeAttr('required');  
              $('#ingresos2div').css('display', '');
              $('#ingresos2').val(''); 
              $('#ingresos2').attr('required','required');         
              $('#ingresos3div').css('display', 'none');
              $('#ingresos3').val('0'); 
              $('#ingresos3').removeAttr('required');
              $('#desempleodelargaduraciondiv').css('display', '');
              $('#desempleodelargaduracion').val(''); 
              $('#desempleodelargaduracion').attr('required','required');
              $('#desempleodiv').css('display', '');
              $('#desempleo').val(''); 
              $('#desempleo').attr('required','required');
              $('#intermediacionlaboraldiv').css('display', 'none');
              $('#intermediacionlaboral').val('0'); 
              $('#intermediacionlaboral').removeAttr('required');
              $('.bancarizacion157').css('display','');
              $('#bancarizacion157').css('display','');
              $('.bancarizacion158').css('display','');
              $('#bancarizacion158').css('display','');
              $('.bancarizacion159').css('display','');
              $('#bancarizacion159').css('display','');
              $('.bancarizacion160').css('display','');
              $('#bancarizacion160').css('display','');
              $('.bancarizacion161').css('display','');
              $('#bancarizacion161').css('display','');
              $('.bancarizacion162').css('display','');
              $('#bancarizacion162').css('display','');
              $('.bancarizacion163').css('display','');
              $('#bancarizacion163').css('display','');
              $('.bancarizacion164').css('display','');
              $('#bancarizacion164').css('display','');
              $('#bancarizaciondiv').css('display','');

              $('input[name="bancarizacion[]"]').prop('checked', false);
              $('input[name="bancarizacion[]"]').attr('required', 'required');

              $('#endeudamiento1div').css('display', '');
              $('#endeudamiento1').val(''); 
              $('#endeudamiento1').attr('required','required');
              $('#endeudamiento2div').css('display', '');
              $('#endeudamiento2').val(''); 
              $('#endeudamiento2').attr('required','required');
              $('#endeudamiento3div').css('display', '');
              $('#endeudamiento3').val('');
              $('#endeudamiento3').attr('required','required');
              $('#emprendimiento1div').css('display', 'none');
              $('#emprendimiento1').val('0');
              $('#emprendimiento1').removeAttr('required');
              $('#generaciondeingresosdiv').css('display', 'none');
              $('#generaciondeingresos').val('0'); 
              $('#generaciondeingresos').removeAttr('required');
              $('#formalidaddelempleodiv').css('display', 'none');
              $('#formalidaddelempleo').val('0'); 
              $('#formalidaddelempleo').removeAttr('required');
             }

      // edad entre 18 y 65 y es pensionado

             if(($('#ingresos1').val() == '136' ) && (parseInt($('#edadintegrante').val()) >= '18' && parseInt($('#edadintegrante').val()) <= '65')){
              $('.trabajoinfantil137').css('display','none');
              $('#trabajoinfantil137').css('display','none');
              $('.trabajoinfantil138').css('display','none');
              $('#trabajoinfantil138').css('display','none');
              $('.trabajoinfantil139').css('display','none');
              $('#trabajoinfantil139').css('display','none');
              $('.trabajoinfantil140').css('display','none');
              $('#trabajoinfantil140').css('display','none');
              $('.trabajoinfantil141').css('display','none');
              $('#trabajoinfantil141').css('display','none');
              $('.trabajoinfantil142').css('display','none');
              $('#trabajoinfantil142').css('display','none');
              $('.trabajoinfantil143').css('display','none');
              $('#trabajoinfantil143').css('display','none');
              $('.trabajoinfantil144').css('display','none');
              $('#trabajoinfantil144').css('display','none');
              $('.trabajoinfantil145').css('display','none');
              $('#trabajoinfantil145').css('display','none');
              $('.trabajoinfantil146').css('display','none');
              $('#trabajoinfantil146').css('display','none');
              $('.trabajoinfantil349').css('display','none');
              $('#trabajoinfantil349').css('display','none');


              $('#trabajoinfantildiv').css('display','none');
             // $('#cualtrabajoinfantildiv').css('display', 'none');
             // $('#cualtrabajoinfantil').val('0');
             // $('#cualtrabajoinfantil').removeAttr('required');
              $('#trabajoinfantil2div').css('display','none');
              $('#trabajoinfantil2').val('0');
              $('#trabajoinfantil2').removeAttr('required');
              $('input[name="trabajoinfantil[]"]').removeAttr('required');
              $('input[name="trabajoinfantil[]"]').prop('checked', false);
              $('#trabajo15a17anhosdiv').css('display', 'none');
              $('#trabajo15a17anhos').val('0'); 
              $('#trabajo15a17anhos').removeAttr('required');  
              $('#ingresos2div').css('display', '');
              $('#ingresos2').val(''); 
              $('#ingresos2').attr('required','required');         
              $('#ingresos3div').css('display', '');
              $('#ingresos3').val(''); 
              $('#ingresos3').attr('required','required');
              $('#desempleodelargaduraciondiv').css('display', 'none');
              $('#desempleodelargaduracion').val('0'); 
              $('#desempleodelargaduracion').removeAttr('required');
              $('#desempleodiv').css('display', 'none');
              $('#desempleo').val('0'); 
              $('#desempleo').removeAttr('required');
              $('#intermediacionlaboraldiv').css('display', 'none');
              $('#intermediacionlaboral').val('0'); 
              $('#intermediacionlaboral').removeAttr('required');
              $('.bancarizacion157').css('display','');
              $('#bancarizacion157').css('display','');
              $('.bancarizacion158').css('display','');
              $('#bancarizacion158').css('display','');
              $('.bancarizacion159').css('display','');
              $('#bancarizacion159').css('display','');
              $('.bancarizacion160').css('display','');
              $('#bancarizacion160').css('display','');
              $('.bancarizacion161').css('display','');
              $('#bancarizacion161').css('display','');
              $('.bancarizacion162').css('display','');
              $('#bancarizacion162').css('display','');
              $('.bancarizacion163').css('display','');
              $('#bancarizacion163').css('display','');
              $('.bancarizacion164').css('display','');
              $('#bancarizacion164').css('display','');
              $('#bancarizaciondiv').css('display','');


              $('input[name="bancarizacion[]"]').prop('checked', false);
              $('input[name="bancarizacion[]"]').attr('required', 'required');

              $('#endeudamiento1div').css('display', '');
              $('#endeudamiento1').val(''); 
              $('#endeudamiento1').attr('required','required');
              $('#endeudamiento2div').css('display', '');
              $('#endeudamiento2').val(''); 
              $('#endeudamiento2').attr('required','required');
              $('#endeudamiento3div').css('display', '');
              $('#endeudamiento3').val('');
              $('#emprendimiento2').val('');  
              $('#endeudamiento3').attr('required','required');
              $('#emprendimiento1div').css('display', 'none');
              $('#emprendimiento1').val('0'); 
              $('#emprendimiento1').removeAttr('required');
              $('#generaciondeingresosdiv').css('display', 'none');
              $('#generaciondeingresos').val('0'); 
              $('#generaciondeingresos').removeAttr('required');
              $('#formalidaddelempleodiv').css('display', 'none');
              $('#formalidaddelempleo').val('0'); 
              $('#formalidaddelempleo').removeAttr('required');
             }

// FIN DE 18 a 66 
// de mayor o igual a 66 y es pensionado
if(($('#ingresos1').val() == '136' ) && (parseInt($('#edadintegrante').val()) >= '66' )){
  $('.trabajoinfantil137').css('display','none');
              $('#trabajoinfantil137').css('display','none');
              $('.trabajoinfantil138').css('display','none');
              $('#trabajoinfantil138').css('display','none');
              $('.trabajoinfantil139').css('display','none');
              $('#trabajoinfantil139').css('display','none');
              $('.trabajoinfantil140').css('display','none');
              $('#trabajoinfantil140').css('display','none');
              $('.trabajoinfantil141').css('display','none');
              $('#trabajoinfantil141').css('display','none');
              $('.trabajoinfantil142').css('display','none');
              $('#trabajoinfantil142').css('display','none');
              $('.trabajoinfantil143').css('display','none');
              $('#trabajoinfantil143').css('display','none');
              $('.trabajoinfantil144').css('display','none');
              $('#trabajoinfantil144').css('display','none');
              $('.trabajoinfantil145').css('display','none');
              $('#trabajoinfantil145').css('display','none');
              $('.trabajoinfantil146').css('display','none');
              $('#trabajoinfantil146').css('display','none');
              $('.trabajoinfantil349').css('display','none');
              $('#trabajoinfantil349').css('display','none');


              $('#trabajoinfantildiv').css('display','none');
             // $('#cualtrabajoinfantildiv').css('display', 'none');
             // $('#cualtrabajoinfantil').val('0');
             // $('#cualtrabajoinfantil').removeAttr('required');
              $('#trabajoinfantil2div').css('display','none');
              $('#trabajoinfantil2').val('0');
              $('#trabajoinfantil2').removeAttr('required');
              $('input[name="trabajoinfantil[]"]').removeAttr('required');
              $('input[name="trabajoinfantil[]"]').prop('checked', false);
              $('#trabajo15a17anhosdiv').css('display', 'none');
              $('#trabajo15a17anhos').val('0'); 
              $('#trabajo15a17anhos').removeAttr('required');  
              $('#ingresos2div').css('display', '');
              $('#ingresos2').val(''); 
              $('#ingresos2').attr('required','required');         
              $('#ingresos3div').css('display', '');
              $('#ingresos3').val(''); 
              $('#ingresos3').attr('required','required');
              $('#desempleodelargaduraciondiv').css('display', 'none');
              $('#desempleodelargaduracion').val('0'); 
              $('#desempleodelargaduracion').removeAttr('required');
              $('#desempleodiv').css('display', 'none');
              $('#desempleo').val('0'); 
              $('#desempleo').removeAttr('required');
              $('#intermediacionlaboraldiv').css('display', 'none');
              $('#intermediacionlaboral').val('0'); 
              $('#intermediacionlaboral').removeAttr('required');
              $('.bancarizacion157').css('display','none');
              $('#bancarizacion157').css('display','none');
              $('.bancarizacion158').css('display','none');
              $('#bancarizacion158').css('display','none');
              $('.bancarizacion159').css('display','none');
              $('#bancarizacion159').css('display','none');
              $('.bancarizacion160').css('display','none');
              $('#bancarizacion160').css('display','none');
              $('.bancarizacion161').css('display','none');
              $('#bancarizacion161').css('display','none');
              $('.bancarizacion162').css('display','none');
              $('#bancarizacion162').css('display','none');
              $('.bancarizacion163').css('display','none');
              $('#bancarizacion163').css('display','none');
              $('.bancarizacion164').css('display','none');
              $('#bancarizacion164').css('display','none');
              $('#bancarizaciondiv').css('display','none');
              $('input[name="bancarizacion[]"]').removeAttr('required');

              $('input[name="bancarizacion[]"]').prop('checked', false);
              $('#endeudamiento1div').css('display', 'none');
              $('#endeudamiento1').val('0'); 
              $('#endeudamiento1').removeAttr('required');
              $('#endeudamiento2div').css('display', 'none');
              $('#endeudamiento2').val('0'); 
              $('#endeudamiento2').removeAttr('required');
              $('#endeudamiento3div').css('display', 'none');
              $('#endeudamiento3').val('0');
              $('#emprendimiento2').val('0');  
              $('#endeudamiento3').removeAttr('required');
              $('#emprendimiento1div').css('display', '');
              $('#emprendimiento1').val(''); 
              $('#emprendimiento1').attr('required','required');
              $('#generaciondeingresosdiv').css('display', 'none');
              $('#generaciondeingresos').val('0'); 
              $('#generaciondeingresos').removeAttr('required');
              $('#formalidaddelempleodiv').css('display', 'none');
              $('#formalidaddelempleo').val('0'); 
              $('#formalidaddelempleo').removeAttr('required');
             }

             // de mayor a 66 opcion sí

             if(($('#ingresos1').val() == '134' ) && (parseInt($('#edadintegrante').val()) >= '66' )){
              $('.trabajoinfantil137').css('display','none');
              $('#trabajoinfantil137').css('display','none');
              $('.trabajoinfantil138').css('display','none');
              $('#trabajoinfantil138').css('display','none');
              $('.trabajoinfantil139').css('display','none');
              $('#trabajoinfantil139').css('display','none');
              $('.trabajoinfantil140').css('display','none');
              $('#trabajoinfantil140').css('display','none');
              $('.trabajoinfantil141').css('display','none');
              $('#trabajoinfantil141').css('display','none');
              $('.trabajoinfantil142').css('display','none');
              $('#trabajoinfantil142').css('display','none');
              $('.trabajoinfantil143').css('display','none');
              $('#trabajoinfantil143').css('display','none');
              $('.trabajoinfantil144').css('display','none');
              $('#trabajoinfantil144').css('display','none');
              $('.trabajoinfantil145').css('display','none');
              $('#trabajoinfantil145').css('display','none');
              $('.trabajoinfantil146').css('display','none');
              $('#trabajoinfantil146').css('display','none');
              $('.trabajoinfantil349').css('display','none');
              $('#trabajoinfantil349').css('display','none');


              $('#trabajoinfantildiv').css('display','none');
             // $('#cualtrabajoinfantildiv').css('display', 'none');
             // $('#cualtrabajoinfantil').val('0');
             // $('#cualtrabajoinfantil').removeAttr('required');
              $('#trabajoinfantil2div').css('display','none');
              $('#trabajoinfantil2').val('0');
              $('#trabajoinfantil2').removeAttr('required');
              $('input[name="trabajoinfantil[]"]').removeAttr('required');
              $('input[name="trabajoinfantil[]"]').prop('checked', false);
              $('#trabajo15a17anhosdiv').css('display', 'none');
              $('#trabajo15a17anhos').val('0'); 
              $('#trabajo15a17anhos').removeAttr('required');  
              $('#ingresos2div').css('display', '');
              $('#ingresos2').val(''); 
              $('#ingresos2').attr('required','required');         
              $('#ingresos3div').css('display', '');
              $('#ingresos3').val(''); 
              $('#ingresos3').attr('required','required');
              $('#desempleodelargaduraciondiv').css('display', 'none');
              $('#desempleodelargaduracion').val('0'); 
              $('#desempleodelargaduracion').removeAttr('required');
              $('#desempleodiv').css('display', 'none');
              $('#desempleo').val('0'); 
              $('#desempleo').removeAttr('required');
              $('#intermediacionlaboraldiv').css('display', 'none');
              $('#intermediacionlaboral').val('0'); 
              $('#intermediacionlaboral').removeAttr('required');
              $('.bancarizacion157').css('display','none');
              $('#bancarizacion157').css('display','none');
              $('.bancarizacion158').css('display','none');
              $('#bancarizacion158').css('display','none');
              $('.bancarizacion159').css('display','none');
              $('#bancarizacion159').css('display','none');
              $('.bancarizacion160').css('display','none');
              $('#bancarizacion160').css('display','none');
              $('.bancarizacion161').css('display','none');
              $('#bancarizacion161').css('display','none');
              $('.bancarizacion162').css('display','none');
              $('#bancarizacion162').css('display','none');
              $('.bancarizacion163').css('display','none');
              $('#bancarizacion163').css('display','none');
              $('.bancarizacion164').css('display','none');
              $('#bancarizacion164').css('display','none');
              $('#bancarizaciondiv').css('display','none');
              $('input[name="bancarizacion[]"]').removeAttr('required');

              $('input[name="bancarizacion[]"]').prop('checked', false);
              $('#endeudamiento1div').css('display', 'none');
              $('#endeudamiento1').val('0'); 
              $('#endeudamiento1').removeAttr('required');
              $('#endeudamiento2div').css('display', 'none');
              $('#endeudamiento2').val('0'); 
              $('#endeudamiento2').removeAttr('required');
              $('#endeudamiento3div').css('display', 'none');
              $('#endeudamiento3').val('0');
              $('#emprendimiento2').val('0');  
              $('#endeudamiento3').removeAttr('required');
              $('#emprendimiento1div').css('display', '');
              $('#emprendimiento1').val(''); 
              $('#emprendimiento1').attr('required','required');
              $('#generaciondeingresosdiv').css('display', '');
              $('#generaciondeingresos').val(''); 
              $('#generaciondeingresos').attr('required','required');
              $('#formalidaddelempleodiv').css('display', 'none');
              $('#formalidaddelempleo').val('0'); 
              $('#formalidaddelempleo').removeAttr('required');
             }


              // de mayor a 66 opcion NO

              if(($('#ingresos1').val() == '135' ) && (parseInt($('#edadintegrante').val()) >= '66' )){
              $('.trabajoinfantil137').css('display','none');
              $('#trabajoinfantil137').css('display','none');
              $('.trabajoinfantil138').css('display','none');
              $('#trabajoinfantil138').css('display','none');
              $('.trabajoinfantil139').css('display','none');
              $('#trabajoinfantil139').css('display','none');
              $('.trabajoinfantil140').css('display','none');
              $('#trabajoinfantil140').css('display','none');
              $('.trabajoinfantil141').css('display','none');
              $('#trabajoinfantil141').css('display','none');
              $('.trabajoinfantil142').css('display','none');
              $('#trabajoinfantil142').css('display','none');
              $('.trabajoinfantil143').css('display','none');
              $('#trabajoinfantil143').css('display','none');
              $('.trabajoinfantil144').css('display','none');
              $('#trabajoinfantil144').css('display','none');
              $('.trabajoinfantil145').css('display','none');
              $('#trabajoinfantil145').css('display','none');
              $('.trabajoinfantil146').css('display','none');
              $('#trabajoinfantil146').css('display','none');
              $('.trabajoinfantil349').css('display','none');
              $('#trabajoinfantil349').css('display','none');


              $('#trabajoinfantildiv').css('display','none');
            //  $('#cualtrabajoinfantildiv').css('display', 'none');
            //  $('#cualtrabajoinfantil').val('0');
            //  $('#cualtrabajoinfantil').removeAttr('required');
              $('#trabajoinfantil2div').css('display','none');
              $('#trabajoinfantil2').val('0');
              $('#trabajoinfantil2').removeAttr('required');
              $('input[name="trabajoinfantil[]"]').removeAttr('required');
              $('input[name="trabajoinfantil[]"]').prop('checked', false);
              $('#trabajo15a17anhosdiv').css('display', 'none');
              $('#trabajo15a17anhos').val('0'); 
              $('#trabajo15a17anhos').removeAttr('required');  
              $('#ingresos2div').css('display', '');
              $('#ingresos2').val(''); 
              $('#ingresos2').attr('required','required');         
              $('#ingresos3div').css('display', 'none');
              $('#ingresos3').val('0'); 
              $('#ingresos3').removeAttr('required');
              $('#desempleodelargaduraciondiv').css('display', 'none');
              $('#desempleodelargaduracion').val('0'); 
              $('#desempleodelargaduracion').removeAttr('required');
              $('#desempleodiv').css('display', 'none');
              $('#desempleo').val('0'); 
              $('#desempleo').removeAttr('required');
              $('#intermediacionlaboraldiv').css('display', 'none');
              $('#intermediacionlaboral').val('0'); 
              $('#intermediacionlaboral').removeAttr('required');
              $('.bancarizacion157').css('display','none');
              $('#bancarizacion157').css('display','none');
              $('.bancarizacion158').css('display','none');
              $('#bancarizacion158').css('display','none');
              $('.bancarizacion159').css('display','none');
              $('#bancarizacion159').css('display','none');
              $('.bancarizacion160').css('display','none');
              $('#bancarizacion160').css('display','none');
              $('.bancarizacion161').css('display','none');
              $('#bancarizacion161').css('display','none');
              $('.bancarizacion162').css('display','none');
              $('#bancarizacion162').css('display','none');
              $('.bancarizacion163').css('display','none');
              $('#bancarizacion163').css('display','none');
              $('.bancarizacion164').css('display','none');
              $('#bancarizacion164').css('display','none');
              $('#bancarizaciondiv').css('display','none');
              $('input[name="bancarizacion[]"]').removeAttr('required');

              $('input[name="bancarizacion[]"]').prop('checked', false);
              $('#endeudamiento1div').css('display', 'none');
              $('#endeudamiento1').val('0'); 
              $('#endeudamiento1').removeAttr('required');
              $('#endeudamiento2div').css('display', 'none');
              $('#endeudamiento2').val('0'); 
              $('#endeudamiento2').removeAttr('required');
              $('#endeudamiento3div').css('display', 'none');
              $('#endeudamiento3').val('0');
              $('#emprendimiento2').val('0');  
              $('#endeudamiento3').removeAttr('required');
              $('#emprendimiento1div').css('display', '');
              $('#emprendimiento1').val(''); 
              $('#emprendimiento1').attr('required','required');
              $('#generaciondeingresosdiv').css('display', 'none');
              $('#generaciondeingresos').val('0'); 
              $('#generaciondeingresos').removeAttr('required');
              $('#formalidaddelempleodiv').css('display', 'none');
              $('#formalidaddelempleo').val('0'); 
              $('#formalidaddelempleo').removeAttr('required');
             }



             })


             $('#desempleo').change(function(){
              if($('#desempleo').val() == '152' || $('#desempleo').val() == '153'){
                $('#intermediacionlaboraldiv').css('display','');
                $('#intermediacionlaboral').attr('required','required');
                $('#intermediacionlaboral').val('');
              }else{
                $('#intermediacionlaboraldiv').css('display','none');
                $('#intermediacionlaboral').removeAttr('required');
                $('#intermediacionlaboral').val('0');
              }
              if($('#desempleo').val() == '154' || $('#desempleo').val() == '155'){
                $('#emprendimiento1div').css('display','');
                $('#emprendimiento1').attr('required','required');
                $('#emprendimiento1').val('');
              }else{
                $('#emprendimiento1div').css('display','none');
                $('#emprendimiento1').removeAttr('required');
                $('#emprendimiento1').val('0');
              }


          });

// FIN DE 18 a 66


          $('#endeudamiento1').change(function(){
              if($('#endeudamiento1').val() == '1'){
                $('#endeudamiento3div').css('display','');
                $('#endeudamiento2div').css('display','');
                $('#endeudamiento4div').css('display','');
                $('#endeudamiento3').attr('required','required');
                $('#endeudamiento2').attr('required','required');
                $('#endeudamiento4').attr('required','required');
                $('#endeudamiento2').val(''); 
                $('#endeudamiento3').val('');
                $('#endeudamiento4').val('');  
              }else{
                $('#endeudamiento3div').css('display','none');
                $('#endeudamiento2div').css('display','none');
                $('#endeudamiento4div').css('display','none');
                $('#endeudamiento2').removeAttr('required');
                $('#endeudamiento3').removeAttr('required');
                $('#endeudamiento4').removeAttr('required');
                $('#endeudamiento2').val('0'); 
                $('#endeudamiento3').val('0');
                $('#endeudamiento4').val('0');  
              }
             });

             $('#endeudamiento2').change(function(){
              if($('#endeudamiento2').val() == '1' || $('#endeudamiento2').val() == '2'){
                $('#endeudamiento4div').css('display','');
                $('#endeudamiento4').attr('required','required');
                $('#endeudamiento4').val(''); 
              }else{
                $('#endeudamiento4div').css('display','none');
                $('#endeudamiento4').removeAttr('required');
                $('#endeudamiento4').val('0'); 
              }
             });

             

            // $('#trabajoinfantil146').change(function() {
            //     if ($(this).is(':checked')) {
            //       $('#cualtrabajoinfantildiv').css('display', '');
            //       $('#cualtrabajoinfantil').val('');
            //       $('#cualtrabajoinfantil').attr('required', 'required');

            //     } else {
            //       $('#cualtrabajoinfantildiv').css('display', 'none');
            //       $('#cualtrabajoinfantil').val('0');
            //       $('#cualtrabajoinfantil').removeAttr('required');

            //     }
            //   });

              $('#trabajoinfantil139, #trabajoinfantil140, #trabajoinfantil141, #trabajoinfantil142, #trabajoinfantil143, #trabajoinfantil144, #trabajoinfantil145').change(function() {
                if ($('#trabajoinfantil139').is(':checked') || 
                    $('#trabajoinfantil140').is(':checked') || 
                    $('#trabajoinfantil141').is(':checked') || 
                    $('#trabajoinfantil142').is(':checked') || 
                    $('#trabajoinfantil143').is(':checked') || 
                    $('#trabajoinfantil144').is(':checked') || 
                    $('#trabajoinfantil145').is(':checked')) {
                      $('#trabajoinfantil2div').css('display', 'none');
                      $('#trabajoinfantil2').val('0');
                      $('#trabajoinfantil2').removeAttr('required');
                      $('#ingresos2div').css('display', 'none');
                      $('#ingresos2').val('0');
                      $('#ingresos2').removeAttr('required');
                      $('#ingresos3div').css('display', 'none');
                      $('#ingresos3').val('0');
                      $('#ingresos3').removeAttr('required');
                      $('#emprendimiento1div').css('display', 'none');
                      $('#emprendimiento1').val('0');
                      $('#emprendimiento1').removeAttr('required');
                } else {
                    $('#trabajoinfantil2div').css('display', '');
                      $('#trabajoinfantil2').val('');
                      $('#trabajoinfantil2').attr('required','required');
                      $('#ingresos2div').css('display', '');
                      $('#ingresos2').val('');
                      $('#ingresos2').attr('required','required');
                      $('#ingresos3div').css('display', '');
                      $('#ingresos3').val('');
                      $('#ingresos3').attr('required','required');
                      $('#emprendimiento1div').css('display', '');
                      $('#emprendimiento1').val('');
                      $('#emprendimiento1').attr('required','required');
                }
            });





    function calcularEdad(fechaNacimiento) {
    var hoy = new Date();
    var nacimiento = new Date(fechaNacimiento);
    var edad = hoy.getFullYear() - nacimiento.getFullYear();
    var mes = hoy.getMonth() - nacimiento.getMonth();

    // Ajustar si el cumpleaños aún no ha sido este año
    if (mes < 0 || (mes === 0 && hoy.getDate() < nacimiento.getDate())) {
        edad--;
    }
console.log(edad)
    return edad;
}
    
    $(document).ready(function(){

      $('#volveratras').css('display','none');
      $('#idintegrante1').val(localStorage.getItem('idintegrante'));
      $('#idintegrante2').val(localStorage.getItem('idintegrante'));
      $('#idintegrante3').val(localStorage.getItem('idintegrante'));
      $('#idintegrante4').val(localStorage.getItem('idintegrante'));
      $('#folioinput').val(localStorage.getItem('folio'));
      $('#folioinput2').val(localStorage.getItem('folio'));
      $('#folioinput3').val(localStorage.getItem('folio'));
      $('#folioinput4').val(localStorage.getItem('folio'));


        //  var imagenUrl = localStorage.getItem('imagen');
        //  if (imagenUrl) {
        //      $('#imagenDinamica').attr('src', imagenUrl);
        //  } 
        let folio=localStorage.getItem('folio');
        let idintegrante=localStorage.getItem('idintegrante');
        let nombre=localStorage.getItem('nombre');
        $('#folio').html(`Folio: ${folio} `);
        $('#idintegrante').html(`Idintegrante: ${idintegrante} `);
        $('#nombre').html(`Nombre: ${nombre} `);

        $.ajax({
        url:'./leerpreguntas',
        data:{folio:folio, idintegrante:idintegrante},
        method: "GET",
        dataType:'JSON',
        success:function(data){
          let  edad = calcularEdad(data.imagen.fechanacimiento);
          $('#edadintegrante').html(`Edad: ${edad} `);
          $('#edadintegrante').val(edad);
          $('#sexointegrante').html(`Sexo: ${(data.imagen.sexo == '12')?'Hombre':'Mujer'} `);
          



        // console.log(data.imagen.avatar , 'avatar')

    //     let acceso3 = JSON.parse(data.integrantes.acceso3); // ["49", "54"]
          
    // Iterar sobre todos los checkboxes en el contenedor y marcar/desmarcar según los valores seleccionados
            
                    let trabajoinfantil = JSON.parse((data.integrantesfinanciero)?data.integrantesfinanciero.trabajoinfantil:'{}'); // ["49", "54"]
                    let bancarizacion = JSON.parse((data.integrantesfinanciero)?data.integrantesfinanciero.bancarizacion:'{}'); // ["49", "54"]

                  console.log(trabajoinfantil , 'trabajo infantil')
          

                if(Array.isArray(trabajoinfantil) && trabajoinfantil.length > 0){
                $('#container-trabajoinfantil input[type="checkbox"]').each(function() {
                  let found = trabajoinfantil.find(item => item.id === this.value );
                  console.log(found.valor, 'aca valor , por que no entro???')
                          if (found.valor == 'SI') { 
                            $(this).prop('checked', true);
                            $(this).attr('respuesta', 'SI');  // Establecer 'respuesta' a 'NO APLICA' solo si el valor es 'si'
                          } else {
                            $(this).attr('respuesta', 'SI');  // Establecer 'respuesta' con el valor correspondiente
                          }
                });}


              if(Array.isArray(bancarizacion) && bancarizacion.length > 0){
                $('#container-bancarizacion input[type="checkbox"]').each(function() {
                  let found = bancarizacion.find(item => item.id === this.value );
                  console.log(found.valor, 'aca valor')
                          if (found.valor == 'SI') { 
                            $(this).prop('checked', true);
                            $(this).attr('respuesta', 'SI');  // Establecer 'respuesta' a 'NO APLICA' solo si el valor es 'si'
                          } else {
                            $(this).attr('respuesta', 'SI');  // Establecer 'respuesta' con el valor correspondiente
                          }
                });
              }
        

           
            if(data.integrantesfinanciero ==null){
            }else{
              $('#siguiente').css('display','');
            }
           
           
          // BIENESTAR FINANCIERO

           $('#ingresos1').val((data.integrantesfinanciero)?data.integrantesfinanciero.ingresos1:'');
           $('#trabajoinfantil').val((data.integrantesfinanciero)?data.integrantesfinanciero.trabajoinfantil:'');
           $('#trabajo15a17anhos').val((data.integrantesfinanciero)?data.integrantesfinanciero.trabajo15a17anhos:'');
           $('#generaciondeingresos').val((data.integrantesfinanciero)?data.integrantesfinanciero.generaciondeingresos:'');
           $('#formalidaddelempleo').val((data.integrantesfinanciero)?data.integrantesfinanciero.formalidaddelempleo:'');
           $('#ingresos2').val(data.integrantesfinanciero ? formatearConPuntos(data.integrantesfinanciero.ingresos2) : '');
           $('#ingresos3').val(data.integrantesfinanciero ? formatearConPuntos(data.integrantesfinanciero.ingresos3) : '');
           $('#desempleodelargaduracion').val((data.integrantesfinanciero)?data.integrantesfinanciero.desempleodelargaduracion:'');
           $('#desempleo').val((data.integrantesfinanciero)?data.integrantesfinanciero.desempleo:'');
           $('#intermediacionlaboral').val((data.integrantesfinanciero)?data.integrantesfinanciero.intermediacionlaboral:'');
           $('#emprendimiento1').val((data.integrantesfinanciero)?data.integrantesfinanciero.emprendimiento1:'');
           $('#bancarizacion').val((data.integrantesfinanciero)?data.integrantesfinanciero.bancarizacion:''); 
           $('#endeudamiento1').val((data.integrantesfinanciero)?data.integrantesfinanciero.endeudamiento1:'');
           $('#endeudamiento3').val(data.integrantesfinanciero ? formatearConPuntos(data.integrantesfinanciero.endeudamiento3) : '');
           $('#endeudamiento2').val((data.integrantesfinanciero)?data.integrantesfinanciero.endeudamiento2:'');
           $('#trabajoinfantil2').val((data.integrantesfinanciero)?data.integrantesfinanciero.trabajoinfantil2:'');
          // $('#cualtrabajoinfantil').val((data.integrantesfinanciero)?data.integrantesfinanciero.cualtrabajoinfantil:'');
           $('#endeudamiento4').val((data.integrantesfinanciero)?data.integrantesfinanciero.endeudamiento4:'');

              // BIENESTAR LEGAL


           if ($('input[name="trabajoinfantil[]"]:visible:checked').length > 0) {
           $('input[name="trabajoinfantil[]"]').removeAttr('required');
         }else{
           $('input[name="trabajoinfantil[]"]:hidden').removeAttr('required');
         }

         if ($('input[name="trabajoinfantil[]"]:visible').length > 0) {
           $('input[name="trabajoinfantil[]"]').removeAttr('required');
         }else{
           $('input[name="trabajoinfantil[]"]:hidden').removeAttr('required');
         }

       


        
       


      
           

                // INGRESOS 1 con todas las validaciones por edades 



                
              if($('#ingresos1').val() == '134' && parseInt($('#edadintegrante').val()) <= '17'){
              $('.trabajoinfantil137').css('display','');
              $('#trabajoinfantil137').css('display','');
              $('.trabajoinfantil138').css('display','');
              $('#trabajoinfantil138').css('display','');
              $('.trabajoinfantil139').css('display','');
              $('#trabajoinfantil139').css('display','');
              $('.trabajoinfantil140').css('display','');
              $('#trabajoinfantil140').css('display','');
              $('.trabajoinfantil141').css('display','');
              $('#trabajoinfantil141').css('display','');
              $('.trabajoinfantil142').css('display','');
              $('#trabajoinfantil142').css('display','');
              $('.trabajoinfantil143').css('display','');
              $('#trabajoinfantil143').css('display','');
              $('.trabajoinfantil144').css('display','');
              $('#trabajoinfantil144').css('display','');
              $('.trabajoinfantil145').css('display','');
              $('#trabajoinfantil145').css('display','');
              $('.trabajoinfantil146').css('display','');
              $('#trabajoinfantil146').css('display','');
              $('.trabajoinfantil349').css('display','');
              $('#trabajoinfantil349').css('display','');



              $('#trabajoinfantildiv').css('display','');
              $('#trabajoinfantil2div').css('display','');
              $('#trabajoinfantil2').attr('required', 'required');
          //    $('#cualtrabajoinfantildiv').css('display', 'none');
             // $('#cualtrabajoinfantil').val('0');
            //  $('#cualtrabajoinfantil').removeAttr('required');
              $('#trabajo15a17anhosdiv').css('display', 'none');
              $('#trabajo15a17anhos').val('0'); 
              $('#trabajo15a17anhos').removeAttr('required');
              $('#generaciondeingresosdiv').css('display', 'none');
              $('#generaciondeingresos').val('0'); 
              $('#generaciondeingresos').removeAttr('required');
              $('#formalidaddelempleodiv').css('display', 'none');
              $('#formalidaddelempleo').val('0'); 
              $('#formalidaddelempleo').removeAttr('required');
              $('#ingresos2div').css('display', '');
              $('#ingresos2').attr('required','required');         
              $('#ingresos3div').css('display', '');
              $('#ingresos3').attr('required','required');   
              $('#desempleodelargaduraciondiv').css('display', 'none');
              $('#desempleodelargaduracion').val('0'); 
              $('#desempleodelargaduracion').removeAttr('required');
              $('#desempleodiv').css('display', 'none');
              $('#desempleo').val('0'); 
              $('#desempleo').removeAttr('required');
              $('#intermediacionlaboraldiv').css('display', 'none');
              $('#intermediacionlaboral').val('0'); 
              $('#intermediacionlaboral').removeAttr('required');
              $('.bancarizacion157').css('display','none');
              $('#bancarizacion157').css('display','none');
              $('.bancarizacion158').css('display','none');
              $('#bancarizacion158').css('display','none');
              $('.bancarizacion159').css('display','none');
              $('#bancarizacion159').css('display','none');
              $('.bancarizacion160').css('display','none');
              $('#bancarizacion160').css('display','none');
              $('.bancarizacion161').css('display','none');
              $('#bancarizacion161').css('display','none');
              $('.bancarizacion162').css('display','none');
              $('#bancarizacion162').css('display','none');
              $('.bancarizacion163').css('display','none');
              $('#bancarizacion163').css('display','none');
              $('.bancarizacion164').css('display','none');
              $('#bancarizacion164').css('display','none');
              $('#bancarizaciondiv').css('display','none');
              $('input[name="bancarizacion[]"]').removeAttr('required');
              $('#endeudamiento1div').css('display', 'none');
              $('#endeudamiento1').val('0'); 
              $('#endeudamiento1').removeAttr('required');
              $('#endeudamiento2div').css('display', 'none');
              $('#endeudamiento2').val('0'); 
              $('#endeudamiento2').removeAttr('required');
              $('#endeudamiento3div').css('display', 'none');
              $('#endeudamiento3').val('0'); 
              $('#endeudamiento3').removeAttr('required');
              $('#emprendimiento1div').css('display', '');
              $('#emprendimiento1').attr('required','required');
              $('#endeudamiento4div').css('display', 'none');
              $('#endeudamiento4').val('0'); 
              $('#endeudamiento4').removeAttr('required');
             }

             // menor de 14 y opcion no 

             if($('#ingresos1').val() == '135'  && parseInt($('#edadintegrante').val()) <= '14'){
              $('.trabajoinfantil137').css('display','none');
              $('#trabajoinfantil137').css('display','none');
              $('.trabajoinfantil138').css('display','none');
              $('#trabajoinfantil138').css('display','none');
              $('.trabajoinfantil139').css('display','none');
              $('#trabajoinfantil139').css('display','none');
              $('.trabajoinfantil140').css('display','none');
              $('#trabajoinfantil140').css('display','none');
              $('.trabajoinfantil141').css('display','none');
              $('#trabajoinfantil141').css('display','none');
              $('.trabajoinfantil142').css('display','none');
              $('#trabajoinfantil142').css('display','none');
              $('.trabajoinfantil143').css('display','none');
              $('#trabajoinfantil143').css('display','none');
              $('.trabajoinfantil144').css('display','none');
              $('#trabajoinfantil144').css('display','none');
              $('.trabajoinfantil145').css('display','none');
              $('#trabajoinfantil145').css('display','none');
              $('.trabajoinfantil146').css('display','none');
              $('#trabajoinfantil146').css('display','none');
              $('.trabajoinfantil349').css('display','none');
              $('#trabajoinfantil349').css('display','none');



              $('#trabajoinfantildiv').css('display','none');
             // $('#cualtrabajoinfantildiv').css('display', 'none');
             // $('#cualtrabajoinfantil').val('0');
             // $('#cualtrabajoinfantil').removeAttr('required');
              $('#trabajoinfantil2div').css('display','none');
              $('#trabajoinfantil2').val('0');
              $('#trabajoinfantil2').removeAttr('required');
              $('input[name="trabajoinfantil[]"]').removeAttr('required');
              $('#trabajo15a17anhosdiv').css('display', 'none');
              $('#trabajo15a17anhos').val('0'); 
              $('#trabajo15a17anhos').removeAttr('required');  
              $('#ingresos2div').css('display', 'none');
              $('#ingresos2').val('0'); 
              $('#ingresos2').removeAttr('required');         
              $('#ingresos3div').css('display', 'none');
              $('#ingresos3').val('0'); 
              $('#ingresos3').removeAttr('required');
              $('#desempleodelargaduraciondiv').css('display', 'none');
              $('#desempleodelargaduracion').val('0'); 
              $('#desempleodelargaduracion').removeAttr('required');
              $('#desempleodiv').css('display', 'none');
              $('#desempleo').val('0'); 
              $('#desempleo').removeAttr('required');
              $('#intermediacionlaboraldiv').css('display', 'none');
              $('#intermediacionlaboral').val('0'); 
              $('#intermediacionlaboral').removeAttr('required');
              $('.bancarizacion157').css('display','none');
              $('#bancarizacion157').css('display','none');
              $('.bancarizacion158').css('display','none');
              $('#bancarizacion158').css('display','none');
              $('.bancarizacion159').css('display','none');
              $('#bancarizacion159').css('display','none');
              $('.bancarizacion160').css('display','none');
              $('#bancarizacion160').css('display','none');
              $('.bancarizacion161').css('display','none');
              $('#bancarizacion161').css('display','none');
              $('.bancarizacion162').css('display','none');
              $('#bancarizacion162').css('display','none');
              $('.bancarizacion163').css('display','none');
              $('#bancarizacion163').css('display','none');
              $('.bancarizacion164').css('display','none');
              $('#bancarizacion164').css('display','none');
              $('#bancarizaciondiv').css('display','none');
              $('input[name="bancarizacion[]"]').removeAttr('required');
              $('#endeudamiento1div').css('display', 'none');
              $('#endeudamiento1').val('0'); 
              $('#endeudamiento1').removeAttr('required');
              $('#endeudamiento2div').css('display', 'none');
              $('#endeudamiento2').val('0'); 
              $('#endeudamiento2').removeAttr('required');
              $('#endeudamiento3div').css('display', 'none');
              $('#endeudamiento3').val('0'); 
              $('#endeudamiento3').removeAttr('required');
              $('#generaciondeingresosdiv').css('display', 'none');
              $('#generaciondeingresos').val('0'); 
              $('#generaciondeingresos').removeAttr('required');
              $('#emprendimiento1div').css('display', 'none');
              $('#emprendimiento1').val('0');
              $('#emprendimiento1').removeAttr('required');
              $('#formalidaddelempleodiv').css('display', 'none');
              $('#formalidaddelempleo').val('0'); 
              $('#formalidaddelempleo').removeAttr('required');
             }

             // menor a 14 años es pensionado 

             if($('#ingresos1').val() == '136' && parseInt($('#edadintegrante').val()) <= '14'){
              $('.trabajoinfantil137').css('display','none');
              $('#trabajoinfantil137').css('display','none');
              $('.trabajoinfantil138').css('display','none');
              $('#trabajoinfantil138').css('display','none');
              $('.trabajoinfantil139').css('display','none');
              $('#trabajoinfantil139').css('display','none');
              $('.trabajoinfantil140').css('display','none');
              $('#trabajoinfantil140').css('display','none');
              $('.trabajoinfantil141').css('display','none');
              $('#trabajoinfantil141').css('display','none');
              $('.trabajoinfantil142').css('display','none');
              $('#trabajoinfantil142').css('display','none');
              $('.trabajoinfantil143').css('display','none');
              $('#trabajoinfantil143').css('display','none');
              $('.trabajoinfantil144').css('display','none');
              $('#trabajoinfantil144').css('display','none');
              $('.trabajoinfantil145').css('display','none');
              $('#trabajoinfantil145').css('display','none');
              $('.trabajoinfantil146').css('display','none');
              $('#trabajoinfantil146').css('display','none');
              $('.trabajoinfantil349').css('display','none');
              $('#trabajoinfantil349').css('display','none');


              $('#trabajoinfantildiv').css('display','none');
            //  $('#cualtrabajoinfantildiv').css('display', 'none');
            //  $('#cualtrabajoinfantil').val('0');
            //  $('#cualtrabajoinfantil').removeAttr('required');
              $('#trabajoinfantil2div').css('display','none');
              $('#trabajoinfantil2').removeAttr('required');
              $('input[name="trabajoinfantil[]"]').removeAttr('required');
            
              $('#trabajo15a17anhosdiv').css('display', 'none');
              $('#trabajo15a17anhos').val('0'); 
              $('#trabajo15a17anhos').removeAttr('required');  
              $('#ingresos2div').css('display', '');
              $('#ingresos2').attr('required','required');         
              $('#ingresos3div').css('display', '');
              $('#ingresos3').attr('required','required');
              $('#desempleodelargaduraciondiv').css('display', 'none');
              $('#desempleodelargaduracion').val('0'); 
              $('#desempleodelargaduracion').removeAttr('required');
              $('#desempleodiv').css('display', 'none');
              $('#desempleo').val('0'); 
              $('#desempleo').removeAttr('required');
              $('#intermediacionlaboraldiv').css('display', 'none');
              $('#intermediacionlaboral').val('0'); 
              $('#intermediacionlaboral').removeAttr('required');
              $('.bancarizacion157').css('display','none');
              $('#bancarizacion157').css('display','none');
              $('.bancarizacion158').css('display','none');
              $('#bancarizacion158').css('display','none');
              $('.bancarizacion159').css('display','none');
              $('#bancarizacion159').css('display','none');
              $('.bancarizacion160').css('display','none');
              $('#bancarizacion160').css('display','none');
              $('.bancarizacion161').css('display','none');
              $('#bancarizacion161').css('display','none');
              $('.bancarizacion162').css('display','none');
              $('#bancarizacion162').css('display','none');
              $('.bancarizacion163').css('display','none');
              $('#bancarizacion163').css('display','none');
              $('.bancarizacion164').css('display','none');
              $('#bancarizacion164').css('display','none');
              $('#bancarizaciondiv').css('display','none');
              $('input[name="bancarizacion[]"]').removeAttr('required');
              $('#endeudamiento1div').css('display', 'none');
              $('#endeudamiento1').val('0'); 
              $('#endeudamiento1').removeAttr('required');
              $('#endeudamiento2div').css('display', 'none');
              $('#endeudamiento2').val('0'); 
              $('#endeudamiento2').removeAttr('required');
              $('#endeudamiento3div').css('display', 'none');
              $('#endeudamiento3').val('0'); 
              $('#endeudamiento3').removeAttr('required');
              $('#generaciondeingresosdiv').css('display', 'none');
              $('#generaciondeingresos').val('0'); 
              $('#generaciondeingresos').removeAttr('required');
              $('#emprendimiento1div').css('display', '');
              $('#emprendimiento1').attr('required','required');
              $('#formalidaddelempleodiv').css('display', 'none');
              $('#formalidaddelempleo').val('0'); 
              $('#formalidaddelempleo').removeAttr('required');
             }

//entre 15 y 17 y opcion sí

             if($('#ingresos1').val() == '134' && (parseInt($('#edadintegrante').val()) >= '15' && parseInt($('#edadintegrante').val()) <= '17')){
              $('.trabajoinfantil137').css('display','none');
              $('#trabajoinfantil137').css('display','none');
              $('.trabajoinfantil138').css('display','none');
              $('#trabajoinfantil138').css('display','none');
              $('.trabajoinfantil139').css('display','none');
              $('#trabajoinfantil139').css('display','none');
              $('.trabajoinfantil140').css('display','none');
              $('#trabajoinfantil140').css('display','none');
              $('.trabajoinfantil141').css('display','none');
              $('#trabajoinfantil141').css('display','none');
              $('.trabajoinfantil142').css('display','none');
              $('#trabajoinfantil142').css('display','none');
              $('.trabajoinfantil143').css('display','none');
              $('#trabajoinfantil143').css('display','none');
              $('.trabajoinfantil144').css('display','none');
              $('#trabajoinfantil144').css('display','none');
              $('.trabajoinfantil145').css('display','none');
              $('#trabajoinfantil145').css('display','none');
              $('.trabajoinfantil146').css('display','none');
              $('#trabajoinfantil146').css('display','none');
              $('.trabajoinfantil349').css('display','none');
              $('#trabajoinfantil349').css('display','none');


              $('#trabajoinfantildiv').css('display','none');
              $('#trabajoinfantil2div').css('display','none');
              $('#trabajoinfantil2').removeAttr('required');
             // $('#cualtrabajoinfantildiv').css('display', 'none');
             // $('#cualtrabajoinfantil').val('0'); 
             // $('#cualtrabajoinfantil').removeAttr('required');
              $('#trabajoinfantil2').val('0');
             
              $('#trabajo15a17anhosdiv').css('display', '');
              $('#trabajo15a17anhos').attr('required','required');
              $('#generaciondeingresosdiv').css('display', '');
              $('#generaciondeingresos').attr('required','required');
              $('#formalidaddelempleodiv').css('display', '');
              $('#formalidaddelempleo').attr('required','required');
              $('#ingresos2div').css('display', '');
              $('#ingresos2').attr('required','required');         
              $('#ingresos3div').css('display', '');
              $('#ingresos3').attr('required','required');
              $('.bancarizacion157').css('display','');
              $('#bancarizacion157').css('display','');
              $('.bancarizacion158').css('display','');
              $('#bancarizacion158').css('display','');
              $('.bancarizacion159').css('display','');
              $('#bancarizacion159').css('display','');
              $('.bancarizacion160').css('display','');
              $('#bancarizacion160').css('display','');
              $('.bancarizacion161').css('display','');
              $('#bancarizacion161').css('display','');
              $('.bancarizacion162').css('display','');
              $('#bancarizacion162').css('display','');
              $('.bancarizacion163').css('display','');
              $('#bancarizacion163').css('display','');
              $('.bancarizacion164').css('display','');
              $('#bancarizacion164').css('display','');
              $('#bancarizaciondiv').css('display','');
              $('#endeudamiento1div').css('display', '');
              $('#endeudamiento1').attr('required','required');
              $('#endeudamiento2div').css('display', '');
              $('#endeudamiento2').attr('required','required');
              $('#endeudamiento3div').css('display', '');
              $('#endeudamiento3').attr('required','required');
              $('#desempleodelargaduraciondiv').css('display', 'none');
              $('#desempleodelargaduracion').val('0'); 
              $('#desempleodelargaduracion').removeAttr('required');
              $('#desempleodiv').css('display', 'none');
              $('#desempleo').val('0'); 
              $('#desempleo').removeAttr('required');
              $('#intermediacionlaboraldiv').css('display', 'none');
              $('#intermediacionlaboral').val('0'); 
              $('#intermediacionlaboral').removeAttr('required');
              $('#emprendimiento1div').css('display', '');
              $('#emprendimiento1').attr('required','required');

             }
             //entre 15 y 17 y opcion no

               if(($('#ingresos1').val() == '135' ) && (parseInt($('#edadintegrante').val()) >= '15' && parseInt($('#edadintegrante').val()) <= '17')){
              $('.trabajoinfantil137').css('display','none');
              $('#trabajoinfantil137').css('display','none');
              $('.trabajoinfantil138').css('display','none');
              $('#trabajoinfantil138').css('display','none');
              $('.trabajoinfantil139').css('display','none');
              $('#trabajoinfantil139').css('display','none');
              $('.trabajoinfantil140').css('display','none');
              $('#trabajoinfantil140').css('display','none');
              $('.trabajoinfantil141').css('display','none');
              $('#trabajoinfantil141').css('display','none');
              $('.trabajoinfantil142').css('display','none');
              $('#trabajoinfantil142').css('display','none');
              $('.trabajoinfantil143').css('display','none');
              $('#trabajoinfantil143').css('display','none');
              $('.trabajoinfantil144').css('display','none');
              $('#trabajoinfantil144').css('display','none');
              $('.trabajoinfantil145').css('display','none');
              $('#trabajoinfantil145').css('display','none');
              $('.trabajoinfantil146').css('display','none');
              $('#trabajoinfantil146').css('display','none');
              $('#trabajoinfantildiv').css('display','none');
              $('.trabajoinfantil349').css('display','none');
              $('#trabajoinfantil349').css('display','none');
              
            //  $('#cualtrabajoinfantildiv').css('display', 'none');
            //  $('#cualtrabajoinfantil').val('0');
            //  $('#cualtrabajoinfantil').removeAttr('required');
              $('#trabajoinfantil2div').css('display','none');
              $('#trabajoinfantil2').val('0');
              $('#trabajoinfantil2').removeAttr('required');
              $('input[name="trabajoinfantil[]"]').removeAttr('required');
              
              $('#trabajo15a17anhosdiv').css('display', 'none');
              $('#trabajo15a17anhos').val('0'); 
              $('#trabajo15a17anhos').removeAttr('required');  
              $('#ingresos2div').css('display', 'none');
              $('#ingresos2').val('0'); 
              $('#ingresos2').removeAttr('required');         
              $('#ingresos3div').css('display', 'none');
              $('#ingresos3').val('0'); 
              $('#ingresos3').removeAttr('required');
              $('#desempleodelargaduraciondiv').css('display', 'none');
              $('#desempleodelargaduracion').val('0'); 
              $('#desempleodelargaduracion').removeAttr('required');
              $('#desempleodiv').css('display', 'none');
              $('#desempleo').val('0'); 
              $('#desempleo').removeAttr('required');
              $('#intermediacionlaboraldiv').css('display', 'none');
              $('#intermediacionlaboral').val('0'); 
              $('#intermediacionlaboral').removeAttr('required');
              $('.bancarizacion157').css('display','none');
              $('#bancarizacion157').css('display','none');
              $('.bancarizacion158').css('display','none');
              $('#bancarizacion158').css('display','none');
              $('.bancarizacion159').css('display','none');
              $('#bancarizacion159').css('display','none');
              $('.bancarizacion160').css('display','none');
              $('#bancarizacion160').css('display','none');
              $('.bancarizacion161').css('display','none');
              $('#bancarizacion161').css('display','none');
              $('.bancarizacion162').css('display','none');
              $('#bancarizacion162').css('display','none');
              $('.bancarizacion163').css('display','none');
              $('#bancarizacion163').css('display','none');
              $('.bancarizacion164').css('display','none');
              $('#bancarizacion164').css('display','none');
              $('#bancarizaciondiv').css('display','none');
              $('#endeudamiento1div').css('display', 'none');
              $('#endeudamiento1').val('0'); 
              $('#endeudamiento1').removeAttr('required');
              $('#endeudamiento2div').css('display', 'none');
              $('#endeudamiento2').val('0'); 
              $('#endeudamiento2').removeAttr('required');
              $('#endeudamiento3div').css('display', 'none');
              $('#endeudamiento3').val('0');
              $('#endeudamiento3').removeAttr('required');
              $('#endeudamiento4div').css('display', 'none');
              $('#endeudamiento4').val('0');
              $('#endeudamiento4').removeAttr('required');
              $('#emprendimiento1div').css('display', 'none');
              $('#emprendimiento1').val('0');
              $('#emprendimiento1').removeAttr('required');
              $('#generaciondeingresosdiv').css('display', 'none');
              $('#generaciondeingresos').val('0'); 
              $('#generaciondeingresos').removeAttr('required');
              $('#formalidaddelempleodiv').css('display', 'none');
              $('#formalidaddelempleo').val('0'); 
              $('#formalidaddelempleo').removeAttr('required');
             }
// entre 15 y 17 pensionado
             if(($('#ingresos1').val() == '136' ) && (parseInt($('#edadintegrante').val()) >= '15' && parseInt($('#edadintegrante').val()) <= '17')){
              $('.trabajoinfantil137').css('display','none');
              $('#trabajoinfantil137').css('display','none');
              $('.trabajoinfantil138').css('display','none');
              $('#trabajoinfantil138').css('display','none');
              $('.trabajoinfantil139').css('display','none');
              $('#trabajoinfantil139').css('display','none');
              $('.trabajoinfantil140').css('display','none');
              $('#trabajoinfantil140').css('display','none');
              $('.trabajoinfantil141').css('display','none');
              $('#trabajoinfantil141').css('display','none');
              $('.trabajoinfantil142').css('display','none');
              $('#trabajoinfantil142').css('display','none');
              $('.trabajoinfantil143').css('display','none');
              $('#trabajoinfantil143').css('display','none');
              $('.trabajoinfantil144').css('display','none');
              $('#trabajoinfantil144').css('display','none');
              $('.trabajoinfantil145').css('display','none');
              $('#trabajoinfantil145').css('display','none');
              $('.trabajoinfantil146').css('display','none');
              $('#trabajoinfantil146').css('display','none');
              $('.trabajoinfantil349').css('display','none');
              $('#trabajoinfantil349').css('display','none');



              $('#trabajoinfantildiv').css('display','none');
            //  $('#cualtrabajoinfantildiv').css('display', 'none');
            //  $('#cualtrabajoinfantil').val('0');
            //  $('#cualtrabajoinfantil').removeAttr('required');
              $('#trabajoinfantil2div').css('display','none');
              $('#trabajoinfantil2').val('0');
              $('#trabajoinfantil2').removeAttr('required');
              $('input[name="trabajoinfantil[]"]').removeAttr('required');
              
              $('#trabajo15a17anhosdiv').css('display', 'none');
              $('#trabajo15a17anhos').val('0'); 
              $('#trabajo15a17anhos').removeAttr('required');  
              $('#ingresos3div').css('display', '');
              $('#ingresos3').attr('required','required');         
              $('#ingresos2div').css('display', '');
              $('#ingresos2').attr('required','required');
              $('#desempleodelargaduraciondiv').css('display', 'none');
              $('#desempleodelargaduracion').val('0'); 
              $('#desempleodelargaduracion').removeAttr('required');
              $('#desempleodiv').css('display', 'none');
              $('#desempleo').val('0'); 
              $('#desempleo').removeAttr('required');
              $('#intermediacionlaboraldiv').css('display', 'none');
              $('#intermediacionlaboral').val('0'); 
              $('#intermediacionlaboral').removeAttr('required');
              $('.bancarizacion157').css('display','');
              $('#bancarizacion157').css('display','');
              $('.bancarizacion158').css('display','');
              $('#bancarizacion158').css('display','');
              $('.bancarizacion159').css('display','');
              $('#bancarizacion159').css('display','');
              $('.bancarizacion160').css('display','');
              $('#bancarizacion160').css('display','');
              $('.bancarizacion161').css('display','');
              $('#bancarizacion161').css('display','');
              $('.bancarizacion162').css('display','');
              $('#bancarizacion162').css('display','');
              $('.bancarizacion163').css('display','');
              $('#bancarizacion163').css('display','');
              $('.bancarizacion164').css('display','');
              $('#bancarizacion164').css('display','');
              $('#bancarizaciondiv').css('display','');


              $('#endeudamiento1div').css('display', '');
              $('#endeudamiento1').attr('required','required');
              $('#endeudamiento2div').css('display', '');
              $('#endeudamiento2').attr('required','required');
              $('#endeudamiento3div').css('display', '');
              $('#endeudamiento3').attr('required','required');
              $('#emprendimiento1div').css('display', '');
              $('#emprendimiento1').attr('required','required');
              $('#generaciondeingresosdiv').css('display', 'none');
              $('#generaciondeingresos').val('0'); 
              $('#generaciondeingresos').removeAttr('required');
              $('#formalidaddelempleodiv').css('display', 'none');
              $('#formalidaddelempleo').val('0'); 
              $('#formalidaddelempleo').removeAttr('required');
             }





//18 a 66 y opcion sí

if($('#ingresos1').val() == '134' && (parseInt($('#edadintegrante').val()) >= '18' && parseInt($('#edadintegrante').val()) <= '66')){
              $('.trabajoinfantil137').css('display','none');
              $('#trabajoinfantil137').css('display','none');
              $('.trabajoinfantil138').css('display','none');
              $('#trabajoinfantil138').css('display','none');
              $('.trabajoinfantil139').css('display','none');
              $('#trabajoinfantil139').css('display','none');
              $('.trabajoinfantil140').css('display','none');
              $('#trabajoinfantil140').css('display','none');
              $('.trabajoinfantil141').css('display','none');
              $('#trabajoinfantil141').css('display','none');
              $('.trabajoinfantil142').css('display','none');
              $('#trabajoinfantil142').css('display','none');
              $('.trabajoinfantil143').css('display','none');
              $('#trabajoinfantil143').css('display','none');
              $('.trabajoinfantil144').css('display','none');
              $('#trabajoinfantil144').css('display','none');
              $('.trabajoinfantil145').css('display','none');
              $('#trabajoinfantil145').css('display','none');
              $('.trabajoinfantil146').css('display','none');
              $('#trabajoinfantil146').css('display','none');
              $('.trabajoinfantil349').css('display','none');
              $('#trabajoinfantil349').css('display','none');


              $('#trabajoinfantildiv').css('display','none');
              $('#trabajoinfantil2div').css('display','none');
              $('#trabajoinfantil2').removeAttr('required');
            //  $('#cualtrabajoinfantildiv').css('display', 'none');
            //  $('#cualtrabajoinfantil').val('0'); 
            //  $('#cualtrabajoinfantil').removeAttr('required');
              $('#trabajoinfantil2').val('0');
             
              $('#trabajo15a17anhosdiv').css('display', 'none');
              $('#trabajo15a17anhos').val('0'); 
              $('#trabajo15a17anhos').removeAttr('required');
              $('#generaciondeingresosdiv').css('display', '');
              $('#generaciondeingresos').attr('required','required');
              $('#formalidaddelempleodiv').css('display', '');
              $('#formalidaddelempleo').attr('required','required');
              $('#ingresos3div').css('display', '');
              $('#ingresos3').attr('required','required');         
              $('#ingresos2div').css('display', '');
              $('#ingresos2').attr('required','required');
              $('.bancarizacion157').css('display','');
              $('#bancarizacion157').css('display','');
              $('.bancarizacion158').css('display','');
              $('#bancarizacion158').css('display','');
              $('.bancarizacion159').css('display','');
              $('#bancarizacion159').css('display','');
              $('.bancarizacion160').css('display','');
              $('#bancarizacion160').css('display','');
              $('.bancarizacion161').css('display','');
              $('#bancarizacion161').css('display','');
              $('.bancarizacion162').css('display','');
              $('#bancarizacion162').css('display','');
              $('.bancarizacion163').css('display','');
              $('#bancarizacion163').css('display','');
              $('.bancarizacion164').css('display','');
              $('#bancarizacion164').css('display','');
              $('#bancarizaciondiv').css('display','');
              $('#endeudamiento1div').css('display', '');
              $('#endeudamiento1').attr('required','required');
              $('#endeudamiento2div').css('display', '');
              $('#endeudamiento2').attr('required','required');
              $('#endeudamiento3div').css('display', '');
              $('#endeudamiento3').attr('required','required');
              $('#desempleodelargaduraciondiv').css('display', 'none');
              $('#desempleodelargaduracion').val('0'); 
              $('#desempleodelargaduracion').removeAttr('required');
              $('#desempleodiv').css('display', 'none');
              $('#desempleo').val('0'); 
              $('#desempleo').removeAttr('required');
              $('#emprendimiento1div').css('display', '');
              $('#emprendimiento1').attr('required','required');
              $('#intermediacionlaboraldiv').css('display', 'none');
              $('#intermediacionlaboral').val('0'); 
              $('#intermediacionlaboral').removeAttr('required');
             }

             // de 18 a 66 y opcion no

               if(($('#ingresos1').val() == '135' || $('#ingresos1').val() == '' ) && (parseInt($('#edadintegrante').val()) >= '18' && parseInt($('#edadintegrante').val()) <= '66')){
              $('.trabajoinfantil137').css('display','none');
              $('#trabajoinfantil137').css('display','none');
              $('.trabajoinfantil138').css('display','none');
              $('#trabajoinfantil138').css('display','none');
              $('.trabajoinfantil139').css('display','none');
              $('#trabajoinfantil139').css('display','none');
              $('.trabajoinfantil140').css('display','none');
              $('#trabajoinfantil140').css('display','none');
              $('.trabajoinfantil141').css('display','none');
              $('#trabajoinfantil141').css('display','none');
              $('.trabajoinfantil142').css('display','none');
              $('#trabajoinfantil142').css('display','none');
              $('.trabajoinfantil143').css('display','none');
              $('#trabajoinfantil143').css('display','none');
              $('.trabajoinfantil144').css('display','none');
              $('#trabajoinfantil144').css('display','none');
              $('.trabajoinfantil145').css('display','none');
              $('#trabajoinfantil145').css('display','none');
              $('.trabajoinfantil146').css('display','none');
              $('#trabajoinfantil146').css('display','none');
              $('.trabajoinfantil349').css('display','none');
              $('#trabajoinfantil349').css('display','none');

              $('#trabajoinfantildiv').css('display','none');
             // $('#cualtrabajoinfantildiv').css('display', 'none');
             // $('#cualtrabajoinfantil').val('0');
             // $('#cualtrabajoinfantil').removeAttr('required');
              $('#trabajoinfantil2div').css('display','none');
              $('#trabajoinfantil2').val('0');
              $('#trabajoinfantil2').removeAttr('required');
              $('input[name="trabajoinfantil[]"]').removeAttr('required');
              
              $('#trabajo15a17anhosdiv').css('display', 'none');
              $('#trabajo15a17anhos').val('0'); 
              $('#trabajo15a17anhos').removeAttr('required');  
              $('#ingresos2div').css('display', '');
              $('#ingresos2').attr('required','required');         
              $('#ingresos3div').css('display', 'none');
              $('#ingresos3').val('0'); 
              $('#ingresos3').removeAttr('required');
              $('#desempleodelargaduraciondiv').css('display', '');
            //  $('#desempleodelargaduracion').val(''); 
            //  $('#desempleodelargaduracion').attr('required','required');
              $('#desempleodiv').css('display', '');
              $('#desempleo').attr('required','required');
              $('#intermediacionlaboraldiv').css('display', 'none');
             
              $('#intermediacionlaboral').removeAttr('required');
              $('.bancarizacion157').css('display','');
              $('#bancarizacion157').css('display','');
              $('.bancarizacion158').css('display','');
              $('#bancarizacion158').css('display','');
              $('.bancarizacion159').css('display','');
              $('#bancarizacion159').css('display','');
              $('.bancarizacion160').css('display','');
              $('#bancarizacion160').css('display','');
              $('.bancarizacion161').css('display','');
              $('#bancarizacion161').css('display','');
              $('.bancarizacion162').css('display','');
              $('#bancarizacion162').css('display','');
              $('.bancarizacion163').css('display','');
              $('#bancarizacion163').css('display','');
              $('.bancarizacion164').css('display','');
              $('#bancarizacion164').css('display','');
              $('#bancarizaciondiv').css('display','');

              $('#endeudamiento1div').css('display', '');
              $('#endeudamiento1').attr('required','required');
              $('#endeudamiento2div').css('display', '');
              $('#endeudamiento2').attr('required','required');
              $('#endeudamiento3div').css('display', '');
              $('#endeudamiento3').attr('required','required');
              $('#emprendimiento1div').css('display', 'none');
              $('#emprendimiento1').removeAttr('required');
              $('#generaciondeingresosdiv').css('display', 'none');
              $('#generaciondeingresos').removeAttr('required');
              $('#formalidaddelempleodiv').css('display', 'none');
              $('#formalidaddelempleo').val('0'); 
              $('#formalidaddelempleo').removeAttr('required');
             }

      // edad entre 18 y 65 y es pensionado

             if(($('#ingresos1').val() == '136' ) && (parseInt($('#edadintegrante').val()) >= '18' && parseInt($('#edadintegrante').val()) <= '65')){
              $('.trabajoinfantil137').css('display','none');
              $('#trabajoinfantil137').css('display','none');
              $('.trabajoinfantil138').css('display','none');
              $('#trabajoinfantil138').css('display','none');
              $('.trabajoinfantil139').css('display','none');
              $('#trabajoinfantil139').css('display','none');
              $('.trabajoinfantil140').css('display','none');
              $('#trabajoinfantil140').css('display','none');
              $('.trabajoinfantil141').css('display','none');
              $('#trabajoinfantil141').css('display','none');
              $('.trabajoinfantil142').css('display','none');
              $('#trabajoinfantil142').css('display','none');
              $('.trabajoinfantil143').css('display','none');
              $('#trabajoinfantil143').css('display','none');
              $('.trabajoinfantil144').css('display','none');
              $('#trabajoinfantil144').css('display','none');
              $('.trabajoinfantil145').css('display','none');
              $('#trabajoinfantil145').css('display','none');
              $('.trabajoinfantil146').css('display','none');
              $('#trabajoinfantil146').css('display','none');
              $('.trabajoinfantil349').css('display','none');
              $('#trabajoinfantil349').css('display','none');


              $('#trabajoinfantildiv').css('display','none');
             // $('#cualtrabajoinfantildiv').css('display', 'none');
             // $('#cualtrabajoinfantil').val('0');
             // $('#cualtrabajoinfantil').removeAttr('required');
              $('#trabajoinfantil2div').css('display','none');
              $('#trabajoinfantil2').val('0');
              $('#trabajoinfantil2').removeAttr('required');
              $('input[name="trabajoinfantil[]"]').removeAttr('required');
              
              $('#trabajo15a17anhosdiv').css('display', 'none');
              $('#trabajo15a17anhos').val('0'); 
              $('#trabajo15a17anhos').removeAttr('required');  
              $('#ingresos2div').css('display', '');
              $('#ingresos2').attr('required','required');         
              $('#ingresos3div').css('display', '');
              $('#ingresos3').attr('required','required');
              $('#desempleodelargaduraciondiv').css('display', 'none');
              $('#desempleodelargaduracion').val('0'); 
              $('#desempleodelargaduracion').removeAttr('required');
              $('#desempleodiv').css('display', 'none');
              $('#desempleo').val('0'); 
              $('#desempleo').removeAttr('required');
              $('#intermediacionlaboraldiv').css('display', 'none');
              $('#intermediacionlaboral').val('0'); 
              $('#intermediacionlaboral').removeAttr('required');
              $('.bancarizacion157').css('display','');
              $('#bancarizacion157').css('display','');
              $('.bancarizacion158').css('display','');
              $('#bancarizacion158').css('display','');
              $('.bancarizacion159').css('display','');
              $('#bancarizacion159').css('display','');
              $('.bancarizacion160').css('display','');
              $('#bancarizacion160').css('display','');
              $('.bancarizacion161').css('display','');
              $('#bancarizacion161').css('display','');
              $('.bancarizacion162').css('display','');
              $('#bancarizacion162').css('display','');
              $('.bancarizacion163').css('display','');
              $('#bancarizacion163').css('display','');
              $('.bancarizacion164').css('display','');
              $('#bancarizacion164').css('display','');
              $('#bancarizaciondiv').css('display','');


              $('#endeudamiento1div').css('display', '');
              $('#endeudamiento1').attr('required','required');
              $('#endeudamiento2div').css('display', '');
              $('#endeudamiento2').attr('required','required');
              $('#endeudamiento3div').css('display', '');
              $('#endeudamiento3').attr('required','required');
              $('#emprendimiento1div').css('display', 'none');
              $('#emprendimiento1').val('0'); 
              $('#emprendimiento1').removeAttr('required');
              $('#generaciondeingresosdiv').css('display', 'none');
              $('#generaciondeingresos').val('0'); 
              $('#generaciondeingresos').removeAttr('required');
              $('#formalidaddelempleodiv').css('display', 'none');
              $('#formalidaddelempleo').val('0'); 
              $('#formalidaddelempleo').removeAttr('required');
             }

// FIN DE 18 a 66 
// de mayor o igual a 66 y es pensionado
if(($('#ingresos1').val() == '136' ) && (parseInt($('#edadintegrante').val()) >= '66' )){
  $('.trabajoinfantil137').css('display','none');
              $('#trabajoinfantil137').css('display','none');
              $('.trabajoinfantil138').css('display','none');
              $('#trabajoinfantil138').css('display','none');
              $('.trabajoinfantil139').css('display','none');
              $('#trabajoinfantil139').css('display','none');
              $('.trabajoinfantil140').css('display','none');
              $('#trabajoinfantil140').css('display','none');
              $('.trabajoinfantil141').css('display','none');
              $('#trabajoinfantil141').css('display','none');
              $('.trabajoinfantil142').css('display','none');
              $('#trabajoinfantil142').css('display','none');
              $('.trabajoinfantil143').css('display','none');
              $('#trabajoinfantil143').css('display','none');
              $('.trabajoinfantil144').css('display','none');
              $('#trabajoinfantil144').css('display','none');
              $('.trabajoinfantil145').css('display','none');
              $('#trabajoinfantil145').css('display','none');
              $('.trabajoinfantil146').css('display','none');
              $('#trabajoinfantil146').css('display','none');
              $('.trabajoinfantil349').css('display','none');
              $('#trabajoinfantil349').css('display','none');


              $('#trabajoinfantildiv').css('display','none');
             // $('#cualtrabajoinfantildiv').css('display', 'none');
             // $('#cualtrabajoinfantil').val('0');
             // $('#cualtrabajoinfantil').removeAttr('required');
              $('#trabajoinfantil2div').css('display','none');
              $('#trabajoinfantil2').val('0');
              $('#trabajoinfantil2').removeAttr('required');
              $('input[name="trabajoinfantil[]"]').removeAttr('required');
              
              $('#trabajo15a17anhosdiv').css('display', 'none');
              $('#trabajo15a17anhos').val('0'); 
              $('#trabajo15a17anhos').removeAttr('required');  
              $('#ingresos2div').css('display', '');
              $('#ingresos2').attr('required','required');         
              $('#ingresos3div').css('display', '');
              $('#ingresos3').attr('required','required');
              $('#desempleodelargaduraciondiv').css('display', 'none');
              $('#desempleodelargaduracion').val('0'); 
              $('#desempleodelargaduracion').removeAttr('required');
              $('#desempleodiv').css('display', 'none');
              $('#desempleo').val('0'); 
              $('#desempleo').removeAttr('required');
              $('#intermediacionlaboraldiv').css('display', 'none');
              $('#intermediacionlaboral').val('0'); 
              $('#intermediacionlaboral').removeAttr('required');
              $('.bancarizacion157').css('display','none');
              $('#bancarizacion157').css('display','none');
              $('.bancarizacion158').css('display','none');
              $('#bancarizacion158').css('display','none');
              $('.bancarizacion159').css('display','none');
              $('#bancarizacion159').css('display','none');
              $('.bancarizacion160').css('display','none');
              $('#bancarizacion160').css('display','none');
              $('.bancarizacion161').css('display','none');
              $('#bancarizacion161').css('display','none');
              $('.bancarizacion162').css('display','none');
              $('#bancarizacion162').css('display','none');
              $('.bancarizacion163').css('display','none');
              $('#bancarizacion163').css('display','none');
              $('.bancarizacion164').css('display','none');
              $('#bancarizacion164').css('display','none');
              $('#bancarizaciondiv').css('display','none');
              $('input[name="bancarizacion[]"]').removeAttr('required');

              $('#endeudamiento1div').css('display', 'none');
              $('#endeudamiento1').val('0'); 
              $('#endeudamiento1').removeAttr('required');
              $('#endeudamiento2div').css('display', 'none');
              $('#endeudamiento2').val('0'); 
              $('#endeudamiento2').removeAttr('required');
              $('#endeudamiento3div').css('display', 'none');
              $('#endeudamiento3').val('0');
              $('#emprendimiento2').val('0');  
              $('#endeudamiento3').removeAttr('required');
              $('#emprendimiento1div').css('display', '');
              $('#emprendimiento1').attr('required','required');
              $('#generaciondeingresosdiv').css('display', 'none');
              $('#generaciondeingresos').val('0'); 
              $('#generaciondeingresos').removeAttr('required');
              $('#formalidaddelempleodiv').css('display', 'none');
              $('#formalidaddelempleo').val('0'); 
              $('#formalidaddelempleo').removeAttr('required');
             }

             // de mayor a 66 opcion sí

             if(($('#ingresos1').val() == '134' ) && (parseInt($('#edadintegrante').val()) >= '66' )){
              $('.trabajoinfantil137').css('display','none');
              $('#trabajoinfantil137').css('display','none');
              $('.trabajoinfantil138').css('display','none');
              $('#trabajoinfantil138').css('display','none');
              $('.trabajoinfantil139').css('display','none');
              $('#trabajoinfantil139').css('display','none');
              $('.trabajoinfantil140').css('display','none');
              $('#trabajoinfantil140').css('display','none');
              $('.trabajoinfantil141').css('display','none');
              $('#trabajoinfantil141').css('display','none');
              $('.trabajoinfantil142').css('display','none');
              $('#trabajoinfantil142').css('display','none');
              $('.trabajoinfantil143').css('display','none');
              $('#trabajoinfantil143').css('display','none');
              $('.trabajoinfantil144').css('display','none');
              $('#trabajoinfantil144').css('display','none');
              $('.trabajoinfantil145').css('display','none');
              $('#trabajoinfantil145').css('display','none');
              $('.trabajoinfantil146').css('display','none');
              $('#trabajoinfantil146').css('display','none');
              $('.trabajoinfantil349').css('display','none');
              $('#trabajoinfantil349').css('display','none');


              $('#trabajoinfantildiv').css('display','none');
             // $('#cualtrabajoinfantildiv').css('display', 'none');
             // $('#cualtrabajoinfantil').val('0');
             // $('#cualtrabajoinfantil').removeAttr('required');
              $('#trabajoinfantil2div').css('display','none');
              $('#trabajoinfantil2').val('0');
              $('#trabajoinfantil2').removeAttr('required');
              $('input[name="trabajoinfantil[]"]').removeAttr('required');
              
              $('#trabajo15a17anhosdiv').css('display', 'none');
              $('#trabajo15a17anhos').val('0'); 
              $('#trabajo15a17anhos').removeAttr('required');  
              $('#ingresos2div').css('display', '');
              $('#ingresos2').attr('required','required');         
              $('#ingresos3div').css('display', '');
              $('#ingresos3').attr('required','required');
              $('#desempleodelargaduraciondiv').css('display', 'none');
              $('#desempleodelargaduracion').val('0'); 
              $('#desempleodelargaduracion').removeAttr('required');
              $('#desempleodiv').css('display', 'none');
              $('#desempleo').val('0'); 
              $('#desempleo').removeAttr('required');
              $('#intermediacionlaboraldiv').css('display', 'none');
              $('#intermediacionlaboral').val('0'); 
              $('#intermediacionlaboral').removeAttr('required');
              $('.bancarizacion157').css('display','none');
              $('#bancarizacion157').css('display','none');
              $('.bancarizacion158').css('display','none');
              $('#bancarizacion158').css('display','none');
              $('.bancarizacion159').css('display','none');
              $('#bancarizacion159').css('display','none');
              $('.bancarizacion160').css('display','none');
              $('#bancarizacion160').css('display','none');
              $('.bancarizacion161').css('display','none');
              $('#bancarizacion161').css('display','none');
              $('.bancarizacion162').css('display','none');
              $('#bancarizacion162').css('display','none');
              $('.bancarizacion163').css('display','none');
              $('#bancarizacion163').css('display','none');
              $('.bancarizacion164').css('display','none');
              $('#bancarizacion164').css('display','none');
              $('#bancarizaciondiv').css('display','none');
              $('input[name="bancarizacion[]"]').removeAttr('required');

              $('#endeudamiento1div').css('display', 'none');
              $('#endeudamiento1').val('0'); 
              $('#endeudamiento1').removeAttr('required');
              $('#endeudamiento2div').css('display', 'none');
              $('#endeudamiento2').val('0'); 
              $('#endeudamiento2').removeAttr('required');
              $('#endeudamiento3div').css('display', 'none');
              $('#endeudamiento3').val('0');
              $('#emprendimiento2').val('0');  
              $('#endeudamiento3').removeAttr('required');
              $('#emprendimiento1div').css('display', '');
              $('#emprendimiento1').attr('required','required');
              $('#generaciondeingresosdiv').css('display', '');
              $('#generaciondeingresos').attr('required','required');
              $('#formalidaddelempleodiv').css('display', 'none');
              $('#formalidaddelempleo').val('0'); 
              $('#formalidaddelempleo').removeAttr('required');
             }


              // de mayor a 66 opcion NO

              if(($('#ingresos1').val() == '135' ) && (parseInt($('#edadintegrante').val()) >= '66' )){
              $('.trabajoinfantil137').css('display','none');
              $('#trabajoinfantil137').css('display','none');
              $('.trabajoinfantil138').css('display','none');
              $('#trabajoinfantil138').css('display','none');
              $('.trabajoinfantil139').css('display','none');
              $('#trabajoinfantil139').css('display','none');
              $('.trabajoinfantil140').css('display','none');
              $('#trabajoinfantil140').css('display','none');
              $('.trabajoinfantil141').css('display','none');
              $('#trabajoinfantil141').css('display','none');
              $('.trabajoinfantil142').css('display','none');
              $('#trabajoinfantil142').css('display','none');
              $('.trabajoinfantil143').css('display','none');
              $('#trabajoinfantil143').css('display','none');
              $('.trabajoinfantil144').css('display','none');
              $('#trabajoinfantil144').css('display','none');
              $('.trabajoinfantil145').css('display','none');
              $('#trabajoinfantil145').css('display','none');
              $('.trabajoinfantil146').css('display','none');
              $('#trabajoinfantil146').css('display','none');
              $('.trabajoinfantil349').css('display','none');
              $('#trabajoinfantil349').css('display','none');


              $('#trabajoinfantildiv').css('display','none');
            //  $('#cualtrabajoinfantildiv').css('display', 'none');
            //  $('#cualtrabajoinfantil').val('0');
            //  $('#cualtrabajoinfantil').removeAttr('required');
              $('#trabajoinfantil2div').css('display','none');
              $('#trabajoinfantil2').val('0');
              $('#trabajoinfantil2').removeAttr('required');
              $('input[name="trabajoinfantil[]"]').removeAttr('required');
              
              $('#trabajo15a17anhosdiv').css('display', 'none');
              $('#trabajo15a17anhos').val('0'); 
              $('#trabajo15a17anhos').removeAttr('required');  
              $('#ingresos2div').css('display', '');
              $('#ingresos2').attr('required','required');         
              $('#ingresos3div').css('display', 'none');
              $('#ingresos3').val('0'); 
              $('#ingresos3').removeAttr('required');
              $('#desempleodelargaduraciondiv').css('display', 'none');
              $('#desempleodelargaduracion').val('0'); 
              $('#desempleodelargaduracion').removeAttr('required');
              $('#desempleodiv').css('display', 'none');
              $('#desempleo').val('0'); 
              $('#desempleo').removeAttr('required');
              $('#intermediacionlaboraldiv').css('display', 'none');
              $('#intermediacionlaboral').val('0'); 
              $('#intermediacionlaboral').removeAttr('required');
              $('.bancarizacion157').css('display','none');
              $('#bancarizacion157').css('display','none');
              $('.bancarizacion158').css('display','none');
              $('#bancarizacion158').css('display','none');
              $('.bancarizacion159').css('display','none');
              $('#bancarizacion159').css('display','none');
              $('.bancarizacion160').css('display','none');
              $('#bancarizacion160').css('display','none');
              $('.bancarizacion161').css('display','none');
              $('#bancarizacion161').css('display','none');
              $('.bancarizacion162').css('display','none');
              $('#bancarizacion162').css('display','none');
              $('.bancarizacion163').css('display','none');
              $('#bancarizacion163').css('display','none');
              $('.bancarizacion164').css('display','none');
              $('#bancarizacion164').css('display','none');
              $('#bancarizaciondiv').css('display','none');
              $('input[name="bancarizacion[]"]').removeAttr('required');

              $('#endeudamiento1div').css('display', 'none');
              $('#endeudamiento1').val('0'); 
              $('#endeudamiento1').removeAttr('required');
              $('#endeudamiento2div').css('display', 'none');
              $('#endeudamiento2').val('0'); 
              $('#endeudamiento2').removeAttr('required');
              $('#endeudamiento3div').css('display', 'none');
              $('#endeudamiento3').val('0');
              $('#emprendimiento2').val('0');  
              $('#endeudamiento3').removeAttr('required');
              $('#emprendimiento1div').css('display', '');
              $('#emprendimiento1').attr('required','required');
              $('#generaciondeingresosdiv').css('display', 'none');
              $('#generaciondeingresos').val('0'); 
              $('#generaciondeingresos').removeAttr('required');
              $('#formalidaddelempleodiv').css('display', 'none');
              $('#formalidaddelempleo').val('0'); 
              $('#formalidaddelempleo').removeAttr('required');
             }


             if ($('#trabajoinfantil139').is(':checked') || 
                    $('#trabajoinfantil140').is(':checked') || 
                    $('#trabajoinfantil141').is(':checked') || 
                    $('#trabajoinfantil142').is(':checked') || 
                    $('#trabajoinfantil143').is(':checked') || 
                    $('#trabajoinfantil144').is(':checked') || 
                    $('#trabajoinfantil145').is(':checked')) {
                      $('#trabajoinfantil2div').css('display', 'none');
                      $('#trabajoinfantil2').val('0');
                      $('#trabajoinfantil2').removeAttr('required');
                      $('#ingresos2div').css('display', 'none');
                      $('#ingresos2').val('0');
                      $('#ingresos2').removeAttr('required');
                      $('#ingresos3div').css('display', 'none');
                      $('#ingresos3').val('0');
                      $('#ingresos3').removeAttr('required');
                      $('#emprendimiento1div').css('display', 'none');
                      $('#emprendimiento1').val('0');
                      $('#emprendimiento1').removeAttr('required');
                } 
                
            // if ($('#trabajoinfantil146').is(':checked')) {
            //       $('#cualtrabajoinfantildiv').css('display', '');
            //       $('#cualtrabajoinfantil').attr('required', 'required');

            //     } else {
            //       $('#cualtrabajoinfantildiv').css('display', 'none');
            //       $('#cualtrabajoinfantil').removeAttr('required');

            //     }



             if($('#desempleo').val() == '152' || $('#desempleo').val() == '153'){
                $('#intermediacionlaboraldiv').css('display','');
                $('#intermediacionlaboral').attr('required','required');
              }else{
                $('#intermediacionlaboraldiv').css('display','none');
                $('#intermediacionlaboral').removeAttr('required');
              }
              if($('#desempleo').val() == '154' || $('#desempleo').val() == '155'){
                $('#emprendimiento1div').css('display','');
                $('#emprendimiento1').attr('required','required');
              }else{
                // $('#emprendimiento1div').css('display','none');
                // $('#emprendimiento1').removeAttr('required');
              }

              if($('#endeudamiento1').val() == '1'){
                 $('#endeudamiento3div').css('display','');
                 $('#endeudamiento2div').css('display','');

               }else{
                 $('#endeudamiento3div').css('display','none');
                 $('#endeudamiento2div').css('display','none');
               }
             


             if($('#endeudamiento1').val() == '1'){
                 $('#endeudamiento3div').css('display','');
                 $('#endeudamiento2div').css('display','');
                 $('#endeudamiento4div').css('display','');
                 $('#endeudamiento4').attr('required','required');
                 $('#endeudamiento3').attr('required','required');
                 $('#endeudamiento2').attr('required','required');

               }else{
                 $('#endeudamiento3div').css('display','none');
                 $('#endeudamiento2div').css('display','none');
                 $('#endeudamiento4div').css('display','none');
                 $('#endeudamiento4').attr('required','required');
                 $('#endeudamiento3').attr('required','required');
                 $('#endeudamiento2').attr('required','required');

               }



               if($('#endeudamiento2').val() == '1' || $('#endeudamiento2').val() == '2'){
                $('#endeudamiento4div').css('display','');
                $('#endeudamiento4').attr('required','required');
              }else{
                $('#endeudamiento4div').css('display','none');
                $('#endeudamiento4').removeAttr('required');
              }

              if ($('#bancarizacion164').is(':checked')) {
              $('input[name="bancarizacion[]"]').not('#bancarizacion164').closest('div').hide();
            } else {
              $('input[name="bancarizacion[]"]').closest('div').show();
            }


              if ($('input[name="bancarizacion[]"]:visible:checked').length > 0) {
           $('input[name="bancarizacion[]"]').removeAttr('required');
         }else{
            $('input[name="bancarizacion[]"]:hidden').removeAttr('required');
         }


         paginalista();
         },
        error: function(xhr, status, error) {
                  console.log(xhr.responseText);
              }
      })
      })
 
      

      $('#siguiente').click(function(){
        var url = "./encuestaintegranteslegal";
        window.location.href = url;  
        
      });
    
      $('#volver').click(function(){
        var url = "./encuestaintegrantesintelectual";
        window.location.href = url;
      }); 

      $('#identificacion').click(function(){var url = "./encuestaintegrantesfisicoemocional"; window.location.href = url;})
      $('#intelectual').click(function(){var url = "./encuestaintegrantesintelectual"; window.location.href = url;})
      $('#legal').click(function(){var url = "./encuestaintegranteslegal"; window.location.href = url;})



      function convertirAMayusculas(element) {
            element.value = element.value.toUpperCase();
        }

 
     
      $('input[name="trabajoinfantil[]"]').change(function() {
      if ($('input[name="trabajoinfantil[]"]:visible:checked').length > 0) {
          $('input[name="trabajoinfantil[]"]').removeAttr('required');
        }else{
          $('input[name="trabajoinfantil[]"]').attr('required', 'required');
        }
      });

      $('input[name="bancarizacion[]"]').change(function() {
      if ($('input[name="bancarizacion[]"]:visible:checked').length > 0) {
          $('input[name="bancarizacion[]"]').removeAttr('required');
        }else{
          $('input[name="bancarizacion[]"]').attr('required', 'required');
        }
      });

      $('input[name="bancarizacion[]"]').change(function() {  console.log('hola1');
          if ($(this).attr('id') === 'bancarizacion164' && $(this).is(':checked')) {
              $('input[name="bancarizacion[]"]').not('#bancarizacion164').each(function() {
                  $(this).prop('checked', false); // Desmarcar
                  $(this).closest('div').hide();  // Ocultar
                
              });
          } else if ($(this).attr('id') === 'bancarizacion164' && !$(this).is(':checked')) {
              $('input[name="bancarizacion[]"]').closest('div').show(); // Mostrar todos

            // console.log('hola2');
          }
      });

 
    $('#formfinanciero').on('submit', function(event) {
        event.preventDefault(); // Detiene el envío del formulario

       
        var formData = $(this).serializeArray();
        var data = {
              'trabajoinfantil': [
                  { id: '137', valor: 'NO' },
                  { id: '138', valor: 'NO' },
                  { id: '139', valor: 'NO' },
                  { id: '140', valor: 'NO' },
                  { id: '141', valor: 'NO' },
                  { id: '142', valor: 'NO' },
                  { id: '143', valor: 'NO' },
                  { id: '144', valor: 'NO' },
                  { id: '145', valor: 'NO' },
                  { id: '146', valor: 'NO' },
                  { id: '349', valor: 'NO' },
              ],
              'bancarizacion': [
                  { id: '157', valor: 'NO' },
                  { id: '158', valor: 'NO' },
                  { id: '159', valor: 'NO' },
                  { id: '160', valor: 'NO' },
                  { id: '161', valor: 'NO' },
                  { id: '162', valor: 'NO' },
                  { id: '163', valor: 'NO' },
                  { id: '164', valor: 'NO' },   
              ]
            }
  

        $(formData).each(function(index, obj) {
    var name = obj.name.replace('[]', '');
    var selector = '[name="' + obj.name + '"][value="' + obj.value + '"]';
   // var respuesta = $(selector).attr('respuesta') || 'NO APLICA'; // Asegura obtener correctamente 'respuesta' o 'NO APLICA'
   var element = $(selector);
   var respuesta = element.is(':hidden') ? 'NO APLICA' : (element.attr('respuesta') || 'NO APLICA'); // Verifica si el elemento está oculto
    //console.log(respuesta, 'respuesta');
    // Si el campo es de formato miles, quitar los puntos antes de almacenar el valor
    // Asumiendo que `obj` tiene propiedades `name` y `value`
      if (obj.name === 'ingresos2' || obj.name === 'ingresos3' || obj.name === 'endeudamiento3') {
          obj.value = obj.value.replace(/\./g, '');
      }

      console.log(obj.name)


    if (name === 'trabajoinfantil'  || name === 'bancarizacion' ) {
        // Buscar el objeto con el mismo id
        var existingIndex = data[name].findIndex(item => item.id === obj.value);
        if (existingIndex !== -1) {
            // Reemplazar el valor del objeto existente
            data[name][existingIndex].valor = respuesta;
        } else {
            // Agregar un nuevo objeto si no existe
            data[name].push({ id: obj.value, valor: respuesta });
        }
    } else {
        if (data[name]) {
            if (Array.isArray(data[name])) {
                data[name].push(obj.value);
            } else {
                data[name] = [data[name], obj.value];
            }
        } else {
            data[name] = obj.value;
        }
    }
});
  data['trabajoinfantil'].forEach(item => {
      var selector = '[name="trabajoinfantil[]"][value="' + item.id + '"]';
      if ($(selector).length === 0 || $(selector).is(':hidden')) {
          item.valor = 'NO APLICA';
      }
  });

  data['bancarizacion'].forEach(item => {
      var selector = '[name="bancarizacion[]"][value="' + item.id + '"]';
      if ($(selector).length === 0 || $(selector).is(':hidden')) {
          item.valor = 'NO APLICA';
      }
  });

        // Enviar los datos usando AJAX
        $.ajax({
            url: './financiero',
            method: $(this).attr('method'),
            data: {data: data},
            success: function(response) {
              alertagood();
              $('#siguiente').css('display','');
              $('#identatario').removeAttr('disabled');
            },
            error: function(xhr, status, error) {
              alertabad();
                console.error(error);
            }
        });
    });


    function agregarFormatoMiles(idCampo) {
    const campo = document.getElementById(idCampo);
    if (!campo) return; // Si el campo no existe, no hacer nada

    campo.addEventListener('input', function (e) {
        let value = e.target.value;
        // Eliminar todos los caracteres no numéricos
        value = value.replace(/\D/g, '');
        // Formatear con puntos de miles
        value = value.replace(/\B(?=(\d{3})+(?!\d))/g, '.');
        e.target.value = value;
    });
}

function formatearConPuntos(numero) {
    if (!numero) return ''; // Retorna cadena vacía si el número no es válido

    // Convertir a string y usar expresión regular para agregar puntos
    return numero.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
}

// Uso de la función
agregarFormatoMiles('ingresos2');
agregarFormatoMiles('ingresos3');
agregarFormatoMiles('endeudamiento3');


    </script>
 

@endsection