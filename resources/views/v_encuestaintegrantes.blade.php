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
      <li class="nav-item" role="presentation">
        <a id="identificacion" class="nav-link active" data-bs-toggle="tab" href="#home" aria-selected="true" role="tab" tabindex="-1">BIENESTAR FISICO Y EMOCIONAL
        </a>
      </li>
  <li class="nav-item" role="presentation">
    <a id="identatario"  class="nav-link " data-bs-toggle="tab" href="#profile" aria-selected="false" role="tab" tabindex="-1">BIENESTAR INTELECTUAL</a>
  </li>
  <li class="nav-item" role="presentation">
    <a id="financiero"  class="nav-link " data-bs-toggle="tab" href="#tabla3" aria-selected="false" role="tab" tabindex="-1">BIENESTAR FINANCIERO</a>
  </li>
  <li class="nav-item" role="presentation">
    <a id="legal"  class="nav-link " data-bs-toggle="tab" href="#tabla4" aria-selected="false" role="tab" tabindex="-1">BIENESTAR LEGAL</a>
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
    <div class="text-center"><label for="">Avatar</label></div>


        <div class="avatar text-center" style="cursor:pointer">
          <img src="{{asset('avatares/blanco.png')}} " id="imagenDinamica" class="rounded-circle" alt="Avatar" style="width: 150px; height: 150px;" data-bs-toggle="modal" data-bs-target="#exampleModal">
        </div>

          <form id="formfisicoyemocional" class="row g-3 was-validated">     
            
          <div class="col-md-3" style="display:none">
            <input type="text" placeholder="folio" class="form-control form-control-sm  " id="folioinput" name="folio" value="" >
          </div>
          <div class="col-md-3" style="display:none">
            <input type="text"  class="form-control form-control-sm  " id="idintegrante1" name="idintegrante" value="" >
          </div>

          <div class="col-md-12">
            <label for="validationServer04" class="form-label">¿Cuentas con afiliación al sistema de salud?</label>
            <select class="form-control form-control-sm" id="regimendesalud" name="regimendesalud" aria-describedby="validationServer04Feedback" required="">
              {{!!$regimendesalud!!}}
          </select>
          </div>
          <div class="col-md-12">
            <label for="validationServer04" class="form-label">¿En el último mes has tenido alguna enfermedad, accidente o problema odontológico que no implicó hospitalización?</label>
            <select class="form-control form-control-sm" id="acceso1" name="acceso1" aria-describedby="validationServer04Feedback" required="">
            {{!!$sino!!}}
                      </select>
          </div>
          <div class="col-md-12 acceso2">
            <label for="validationServer04" class="form-label ">¿Accediste a servicios en tu EPS, IPS o servicio particular según esa necesidad?</label>
            <select class="form-control form-control-sm" id="acceso2" name="acceso2" aria-describedby="validationServer04Feedback" required="">
            {{!!$sino!!}}
          </select>
          </div></br>
          <div class="col-md-12">
            <label for="validationServer04" class="form-label">¿Accedes a servicios de salud según tu edad y necesidad?</label>
            <div class="form-check form-switch" id='acceso3-container'>
                {!!$acceso3!!}
               </div>
          </div>
          <div class="col-md">
            <label for="validationServer04" class="form-label">¿Presentas algún tipo de discapacidad?</label>
            <select class="form-control form-control-sm" id="discapacidad" aria-describedby="validationServer04Feedback" name="discapacidad" required="">
            {{!!$sino!!}}
          </select>
          </div>
          <div class="col-md-6" id="tipodediscapacidaddiv">
            <label for="validationServer04" class="form-label">¿Qué tipo de discapacidad presentas?</label>
            <select class="form-control form-control-sm" id="tipodediscapacidad" aria-describedby="validationServer04Feedback" name="tipodediscapacidad" required="">
            {{!!$tipodediscapacidad!!}}
          </select>
          </div>

          <div class="col-md-6" id="atenciondiscapacidaddiv">
            <label for="validationServer04" class="form-label">¿Accedes o has accedido a los servicios de salud  según tu necesidad?</label>
            <select class="form-control form-control-sm" id="atenciondiscapacidad" name="atenciondiscapacidad" aria-describedby="validationServer04Feedback" required="">
            {{!!$atenciondiscapacidad!!}}
          </select>
          </div>
          <div class="col-md-6" id="certificadodiscapacidaddiv">
                  <label for="validationServer04" class="form-label">¿Cuentas con certificado de discapacidad expedido por Alcaldía de Medellín o el soporte médico correspondiente?</label>
                  <select class="form-control form-control-sm" id="certificadodiscapacidad" name="certificadodiscapacidad" aria-describedby="validationServer04Feedback" required="">
                  {{!!$sino!!}}
                </select>
                </div>
                <div class="col-md-12" id="consumospa1div">
                  <label for="validationServer04" class="form-label">¿Presentas consumo SPA? (incluyendo sustancias legales como el tabaco y el alcohol).</label>
                  <select class="form-control form-control-sm" id="consumospa1" name="consumospa1" aria-describedby="validationServer04Feedback" required="">
                  {{!!$sino!!}}
                </select>
                </div>
                <div class="col-md-12" id="consumospa2div">
                  <label for="validationServer04" class="form-label">¿Has accedido a servicios de intervención frente al consumo SPA y sus consecuencias?</label>
                  <select class="form-control form-control-sm" id="consumospa2" name="consumospa2" aria-describedby="validationServer04Feedback" required="">
                  {{!!$sino!!}}
                </select>
                </div><br>
                <div class="col-md-12" id="consumospa3div">
                  <label for="validationServer04" class="form-label">¿Qué tipo de sustancia consumes?</label>
                    <div class="form-check form-switch" id="container-consumospa3">
                      {!!$consumospa3!!} 
                    </div>
                </div><br>
                <div class="col-md-6" id="consumospa4div">
                  <label for="validationServer04" class="form-label">¿Qué tipo de consumo presentas?</label>
                  <select class="form-control form-control-sm" id="consumospa4" name="consumospa4" aria-describedby="validationServer04Feedback" required="">
                  {{!!$consumospa4!!}}
                  </select>
                </div>
                <div class="col-md-6" id="consumospa5div">
                  <label for="validationServer04" class="form-label">¿Cuál es el principal motivo de tu consumo?</label>
                  <select class="form-control form-control-sm" id="consumospa5" name="consumospa5" aria-describedby="validationServer04Feedback" required="">
                  {{!!$consumospa5!!}} 
                </select>
                </div>
                <div class="col-md-12" id="consumospa6div">
                  <label for="validationServer04" class="form-label">¿Has tenido alguna consecuencia negativa debido al consumo?</label>
                  <div class="form-check form-switch" id="container-consumospa6">
                      {!!$consumospa6!!} 
                    </div>
                </div>
                <div class="col-md-12" id="psicosocial1div">
                  <label for="validationServer04" class="form-label">¿Accedes a servicios de salud mental, asesorias, terapias y/o atención psicosocial?</label>
                  <div class="form-check form-switch" id="container-psicosocial1">
                      {!!$psicosocial1!!} 
                    </div>
                </div>
                <div class="col-md-12" id="psicosocial2div">
                  <label for="validationServer04" class="form-label">¿Qué estrategias implementaa para  reducir el estrés y  para favorecer el bienestar emocional y fisico?</label>
                  <div class="form-check form-switch" id="container-psicosocial2">
                      {!!$psicosocial2!!} 
                    </div>
                </div>
                <div class="col-md" id="cualpsicosocial2div" style="display:none">
                  <label for="validationServer04" class="form-label">¿Cúal?</label>
                  <input type="text" class="form-control form-control-sm" name="cualpsicosocial2" oninput="convertirAMayusculas(this)" id="cualpsicosocial2" value="">
                </div>
                <div class="col-md-12" id="planexequialdiv">
                  <label for="validationServer04" class="form-label">¿Tienes un plan exequial?</label>
                  <select class="form-control form-control-sm" id="planexequial" name="planexequial" aria-describedby="validationServer04Feedback" required="">
                    {{!!$sino!!}}
                </select>
                </div>
          <div class="col-12">
          </div>
          <hr>
          <div class="row">  
            <div class="text-start col">
            <div class="btn btn-outline-success" onclick="redirectToIntegrantes()">Volver</div>
            </div>
            <div class="text-end col">
            <button class="btn btn-outline-success" type="submit">Guardar</button>
            <div class="btn btn-outline-primary" id="siguiente" style="display:none">Siguiente</div>
            </div> 
          </div>

        </form> 


      </div>
    
      
  <div class="tab-pane fade " id="profile" role="tabpanel" aria-labelledby="identatario">
  <form class="row g-3 was-validated" id="formintelectual">
  <div class="col-md-3" style="display:none">
            <input type="text" placeholder="folio" class="form-control form-control-sm  " id="folioinput2" name="folio" value="" required="">
          </div>
          <div class="col-md-3" style="display:none">
            <input type="text"  class="form-control form-control-sm  " id="idintegrante2" name="idintegrante" value="" required="">
          </div>
        <div class="col-md-4" id="alfabetizaciondiv">
                  <label for="validationServer04" class="form-label">¿Sabes leer y escribir?</label>
                  <select class="form-control form-control-sm" id="alfabetizacion" name="alfabetizacion" aria-describedby="validationServer04Feedback" required="">
                    {{!!$sino!!}}
                </select>
                </div>
        
          <div class="col-md-6">
            <label for="validationServer04" class="form-label">¿Estás estudiando actualmente?</label>
            <select class="form-control form-control-sm" id="educacion" name="educacion" aria-describedby="validationServer04Feedback" required="">
            {{!!$sino!!}}            
          </select>
          </div>
          <div class="col-md-6" id="niveleducativo1div">
            <label for="validationServer04" class="form-label">¿Cuál es tu nivel educativo alcanzado?</label>
            <select class="form-control form-control-sm" id="niveleducativo1" name="niveleducativo1" aria-describedby="validationServer04Feedback" required="">
            {{!!$niveleducativo1!!}}     
                </select>
          </div>
          <div class="col-md-6" id="niveleducativo2div" style="display:none">
            <label for="validationServer04" class="form-label">¿Cuál fue el último grado que alcanzaste?</label>
            <select class="form-control form-control-sm" id="niveleducativo2" name="niveleducativo2" aria-describedby="validationServer04Feedback" >
            {{!!$niveleducativo2!!}}         
             </select>
          </div>
          <div class="col-md-6" id="niveleducativo5div" style="display:none">
            <label for="validationServer04" class="form-label">¿Cuál es el titulo obtenido?</label>
            <input type="text"  class="form-control form-control-sm  " id="niveleducativo5" name="niveleducativo5" value="" >
          </div>
          <div class="col-md-12" id="niveleducativo3div">
            <label for="validationServer04" class="form-label">¿Accedes a programas de alfabetización y/o educación para adultos?</label>
            <select class="form-control form-control-sm" id="niveleducativo3" name="niveleducativo3" aria-describedby="validationServer04Feedback" required="">
            {{!!$sino!!}}    
          </select>
          </div>
          <div class="col-md-12" id="niveleducativo4div">
            <label for="validationServer04" class="form-label">¿Deseas continuar con tu formación post secundaria?</label>
            <select class="form-control form-control-sm" id="niveleducativo4" name="niveleducativo4" aria-describedby="validationServer04Feedback" required="">
            {{!!$sino!!}}    
          </select>
          </div>
          <div class="col-md-12" id="deseaaccedereducaciondiv">
            <label for="validationServer04" class="form-label">¿Deseas acceder a educación para el trabajo y el desarrollo humano?</label>
            <select class="form-control form-control-sm" id="deseaaccedereducacion" name="deseaaccedereducacion" aria-describedby="validationServer04Feedback" required="">
            {{!!$sino!!}}
                      </select>
          </div>
          <div class="col-md-12" id="alfabetizaciondigitaldiv">
            <label for="validationServer04" class="form-label">¿Conoces el manejo de las TIC?</label>
            <select class="form-control form-control-sm" id="alfabetizaciondigital" name="alfabetizaciondigital" aria-describedby="validationServer04Feedback" required="">
            {{!!$sino!!}}
          </select>
          </div>
        
          <hr>
    
          <div class="row pt-4">
            <div class="text-start col">
              <div class="btn btn-outline-primary" id="atras">volver</div>
            </div>
              <div class="text-end col">
                <button class="btn btn-outline-success" type="submit">Guardar</button>
                <div class="btn btn-outline-primary" id="siguiente2" style="display:none">Siguiente</div>
              </div>
          </div>
        </form> 
  </div>


  <div class="tab-pane fade " id="tabla3" role="tabpanel" aria-labelledby="financiero">
  <form class="row g-3 was-validated" id="formfinanciero">
  <div class="col-md-3" style="display:none">
            <input type="text" placeholder="folio" class="form-control form-control-sm  " id="folioinput3" name="folio" value="" required="">
          </div>
          <div class="col-md-3" style="display:none">
            <input type="text"  class="form-control form-control-sm  " id="idintegrante3" name="idintegrante" value="" required="">
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
          <div class="col-md-12" id="cualtrabajoinfantildiv">
          <label for="validationServer04" class="form-label">¿Cúal?</label>
            <input type="text"  class="form-control form-control-sm  " id="cualtrabajoinfantil" name="cualtrabajoinfantil" value="" required="">
          </div>
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
          <div class="col-md-6" id="ocupadosdiv">
            <label for="validationServer04" class="form-label">¿De cuál actividad derivan tus ingresos?</label>
            <select class="form-control form-control-sm" id="ocupados" name="ocupados" aria-describedby="validationServer04Feedback" required="">
            {{!!$ocupados!!}}         
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
            <input type="number"  class="form-control form-control-sm  " id="ingresos2" name="ingresos2" value="" required="">
          </div>
          <div class="col-md-12" id="ingresos3div">
            <label for="validationServer04" class="form-label">¿A cuánto ascienden tus ingresos variables al mes? (horas extras, comisiones, premios, ganancia por alguna inversión que haga, trabajos independientes)</label>
            <input type="number"  class="form-control form-control-sm  " id="ingresos3" name="ingresos3" value="" required="">
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
            {{!!$sino!!}}
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
            <input type="number"  class="form-control form-control-sm  " id="endeudamiento3" name="endeudamiento3" value="" required="">
          </div>
          <div class="col-md-12" id="endeudamiento2div">
            <label for="validationServer04" class="form-label">¿Estás interesado en refinanciar todas tus deudas y consolidarlas en un solo crédito?</label>
            <select class="form-control form-control-sm" id="endeudamiento2" name="endeudamiento2" aria-describedby="validationServer04Feedback" required="">
            {{!!$sino!!}}
          </select>
          </div>
        
          <hr>
    
          <div class="row pt-4">
            <div class="text-start col">
              <div class="btn btn-outline-primary" id="atras2">volver</div>
            </div>
              <div class="text-end col">
                <button class="btn btn-outline-success" type="submit">Guardar</button>
                <div class="btn btn-outline-primary" id="siguiente3" style="display:none">Siguiente</div>
              </div>
          </div>
        </form> 
  </div>


  <div class="tab-pane fade " id="tabla4" role="tabpanel" aria-labelledby="legal">
  <form class="row g-3 was-validated" id="formlegal">
  <div class="col-md-3" style="display:none">
            <input type="text" placeholder="folio" class="form-control form-control-sm  " id="folioinput4" name="folio" value="" required="">
          </div>
          <div class="col-md-3" style="display:none">
            <input type="text"  class="form-control form-control-sm  " id="idintegrante4" name="idintegrante" value="" required="">
          </div>
        <div class="col-md-12" id="mecanismosdeproteccionddhhdiv">
                  <label for="validationServer04" class="form-label">¿Conoces las instituciones de administración de justicia y de garantía de derechos?</label>
                  <select class="form-control form-control-sm" id="mecanismosdeproteccionddhh" name="mecanismosdeproteccionddhh" aria-describedby="validationServer04Feedback" required="">
                    {{!!$sino!!}}
                </select>
                </div>
        
          <div class="col-md-12" id="mecanismosdeproteccionddhh3div">
            <label for="validationServer04" class="form-label">¿De cuáles de las siguientes instituciones para la protección y garantía de tus derechos has hecho uso?</label>
            <div class="form-check form-switch" id="container-mecanismosdeproteccionddhh3">
                      {!!$mecanismosdeproteccionddhh3!!} 
                    </div>
          </div>
          <div class="col-md-12" id="mecanismoaccionconstitucionaldiv">
            <label for="validationServer04" class="form-label">¿Has usado alguno de los mecanismo o acción constitucional para la protección de los derechos humanos?</label>
            <select class="form-control form-control-sm" id="mecanismoaccionconstitucional" name="mecanismoaccionconstitucional" aria-describedby="validationServer04Feedback" required="">
            {{!!$sino!!}}     
                </select>
          </div>

          <div style="display:mne" id="menorespreguntaslegaldiv">
            Las preguntas de Bienestar legal no aplican para integrantes menores de edad, para continuar clic en guardar y luego siguiente.
          </div>
         
          <hr>
    
          <div class="row pt-4">
            <div class="text-start col">
              <div class="btn btn-outline-primary" id="atras3">volver</div>
            </div>
              <div class="text-end col">
                <button class="btn btn-outline-success" type="submit">Guardar</button>
                <div class="btn btn-outline-primary" id="volver" style="display:none">Siguiente</div>
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

      console.log(id)
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
  
    $('#acceso1').change(function(){
      if($('#acceso1').val() == '2' || $('#acceso1').val() == ''){
        $('.acceso2').css('display','none');
        $('#acceso2').attr('required',false);
        $('#acceso2').val('');
      }else{
        $('.acceso2').css('display','');
        $('#acceso2').attr('required',true);
        $('#acceso2').val('');
      }
    });

    $('#discapacidad').change(function(){
      if($('#discapacidad').val() == '2' || $('#acceso1').val() == ''){
        $('#tipodediscapacidaddiv').css('display','none');
        $('#tipodediscapacidad').attr('required',false);
        $('#tipodediscapacidad').val('');

        $('#atenciondiscapacidaddiv').css('display','none');
        $('#atenciondiscapacidad').attr('required',false);
        $('#atenciondiscapacidad').val('');

        $('#certificadodiscapacidaddiv').css('display','none');
        $('#certificadodiscapacidad').attr('required',false);
        $('#certificadodiscapacidad').val('');

      }else{
        $('#tipodediscapacidaddiv').css('display','');
        $('#tipodediscapacidad').attr('required',true);
        $('#tipodediscapacidad').val('');

        $('#atenciondiscapacidaddiv').css('display','');
        $('#atenciondiscapacidad').attr('required',true);
        $('#atenciondiscapacidad').val('');

        $('#certificadodiscapacidaddiv').css('display','');
        $('#certificadodiscapacidad').attr('required',true);
        $('#certificadodiscapacidad').val('');
      }
    });


    $('#consumospa1').change(function(){
      if($('#consumospa1').val() == '2' || $('#consumospa1').val() == ''){
        $('#consumospa2div').css('display','none');
        $('#consumospa2').attr('required',false);
        $('#consumospa2').val('');

        $('.consumospa371').css('display','none');
        $('#consumospa371').css('display','none');
        $('.consumospa372').css('display','none');
        $('#consumospa372').css('display','none');
        $('.consumospa373').css('display','none');
        $('#consumospa373').css('display','none');
        $('.consumospa374').css('display','none');
        $('#consumospa374').css('display','none');
        $('#consumospa3div').css('display','none');
        $('#consumospa4div').css('display','none');
        $('#consumospa4').attr('required',false);
        $('#consumospa5div').css('display','none');
        $('#consumospa5').attr('required',false);
        $('#consumospa4').val('');
        $('#consumospa5').val('');

        $('.consumospa681').css('display','none');
        $('#consumospa681').css('display','none');
        $('.consumospa682').css('display','none');
        $('#consumospa682').css('display','none');
        $('.consumospa683').css('display','none');
        $('#consumospa683').css('display','none');
        $('.consumospa684').css('display','none');
        $('#consumospa684').css('display','none');
        $('.consumospa685').css('display','none');
        $('#consumospa685').css('display','none');
        $('.consumospa686').css('display','none');
        $('#consumospa686').css('display','none');
        $('#consumospa6div').css('display','none');

        $('input[name="consumospa3[]"]').prop('checked', false);
        $('input[name="consumospa6[]"]').prop('checked', false);
        $('input[name="consumospa3[]"]').removeAttr('required');
        $('input[name="consumospa6[]"]').removeAttr('required');

       
      }else{
        $('#consumospa2div').css('display','');
        $('#consumospa2').attr('required',true);
        $('#consumospa4').attr('required',true);
        $('#consumospa5').attr('required',true);

        $('#consumospa2').val('');

        $('.consumospa371').css('display','');
        $('#consumospa371').css('display','');
        $('.consumospa372').css('display','');
        $('#consumospa372').css('display','');
        $('.consumospa373').css('display','');
        $('#consumospa373').css('display','');
        $('.consumospa374').css('display','');
        $('#consumospa374').css('display','');
        $('#consumospa3div').css('display','');
        $('#consumospa4div').css('display','');
        $('#consumospa5div').css('display','');

        $('.consumospa681').css('display','');
        $('#consumospa681').css('display','');
        $('.consumospa682').css('display','');
        $('#consumospa682').css('display','');
        $('.consumospa683').css('display','');
        $('#consumospa683').css('display','');
        $('.consumospa684').css('display','');
        $('#consumospa684').css('display','');
        $('.consumospa685').css('display','');
        $('#consumospa685').css('display','');
        $('.consumospa686').css('display','');
        $('#consumospa686').css('display',''); 
        $('#consumospa6div').css('display','');
        $('input[name="consumospa3[]"]').attr('required', 'required');
        $('input[name="consumospa6[]"]').attr('required', 'required');

      }
    });

    $('input[name="consumospa6[]"]').change(function() {
        if ($(this).attr('id') === 'consumospa681' && $(this).is(':checked')) {
          $('input[name="consumospa6[]"]').not('#consumospa681').closest('div').hide();
        } else if ($(this).attr('id') === 'consumospa681' && !$(this).is(':checked')) {
          $('input[name="consumospa6[]"]').closest('div').show();
        }
      });

      $('#psicosocial2106').change(function() {
        if ($(this).is(':checked')) {
          $('#cualpsicosocial2div').css('display', '');
          $('#cualpsicosocial2').val('');
          $('#cualpsicosocial2').attr('required', 'required');

        } else {
          $('#cualpsicosocial2div').css('display', 'none');
          $('#cualpsicosocial2').val('');
          $('#cualpsicosocial2').removeAttr('required');

        }
      });

      $('#niveleducativo1').change(function() { console.log($('#edadintegrante').val())
        if (($(this).val() == "107" || $(this).val() == "108" || $(this).val() == "109") && $('#edadintegrante').val() >= '18') {
          $('#niveleducativo2div').css('display', 'none');
          $('#niveleducativo4div').css('display', 'none'); 
          $('#niveleducativo5div').css('display', 'none');
          $('#niveleducativo3div').css('display', '');
          $('#niveleducativo3').val('');
          $('#niveleducativo4').val('');
          $('#niveleducativo3').attr('required', 'required');
          $('#niveleducativo2').val('');
          $('#niveleducativo5').val('');
          $('#niveleducativo2').removeAttr('required');
          $('#niveleducativo5').removeAttr('required');
          $('#niveleducativo4').removeAttr('required');
         } 
        if (($(this).val() == "107" || $(this).val() == "108" || $(this).val() == "109") && $('#edadintegrante').val() <= '18') {
          $('#niveleducativo2div').css('display', 'none');
          $('#niveleducativo4div').css('display', 'none'); 
          $('#niveleducativo5div').css('display', 'none');
          $('#niveleducativo3div').css('display', 'none');
          $('#niveleducativo3').val('');
          $('#niveleducativo4').val('');
          $('#niveleducativo3').removeAttr('required');
          $('#niveleducativo2').val('');
          $('#niveleducativo5').val('');
          $('#niveleducativo2').removeAttr('required');
          $('#niveleducativo5').removeAttr('required');
          $('#niveleducativo4').removeAttr('required');
          $('#alfabetizacion').removeAttr('required');
          $('#alfabetizacion').val('');
          $('#alfabetizaciondigital').removeAttr('required');
          $('#alfabetizaciondigital').val('');
         } 
        //  else {
        //   $('#niveleducativo2div').css('display', '');
        //   $('#niveleducativo5div').css('display', '');
        //   $('#niveleducativo2').val('');
        //   $('#niveleducativo5').val('');
        //   $('#niveleducativo2').attr('required', 'required');
        //   $('#niveleducativo5').attr('required', 'required');
        // }

        if ($(this).val() == "110") {
          $('#niveleducativo2div').css('display', '');
          $('#niveleducativo2').attr('required', 'required');
          $('#niveleducativo2').val('');
          $('#niveleducativo3div').css('display','none');
            $('#niveleducativo3').val('');
            $('#niveleducativo3').removeAttr('required');
            $('#niveleducativo4div').css('display','none');
            $('#niveleducativo4').val('');
            $('#niveleducativo4').removeAttr('required');
            $('#niveleducativo5div').css('display','none');
          $('#niveleducativo5').val('');
          $('#niveleducativo5').removeAttr('required');
          $('#niveleducativo2 option[value="123"]').show();
          $('#niveleducativo2 option[value="124"]').show();
          $('#niveleducativo2 option[value="125"]').show();
          $('#niveleducativo2 option[value="126"]').show();
          $('#niveleducativo2 option[value="127"]').show();
          $('#niveleducativo2 option[value="128"]').hide();
          $('#niveleducativo2 option[value="129"]').hide();
          $('#niveleducativo2 option[value="130"]').hide();
          $('#niveleducativo2 option[value="131"]').hide();
          $('#niveleducativo2 option[value="132"]').hide();
          $('#niveleducativo2 option[value="133"]').hide();

        }

        if ($(this).val() == "111") {
          $('#niveleducativo2div').css('display', '');
          $('#niveleducativo2').attr('required', 'required');
          $('#niveleducativo2').val('');
          $('#niveleducativo3div').css('display','none');
            $('#niveleducativo3').val('');
            $('#niveleducativo3').removeAttr('required');
            $('#niveleducativo4div').css('display','none');
            $('#niveleducativo4').val('');
            $('#niveleducativo4').removeAttr('required');
            $('#niveleducativo5div').css('display','none');
          $('#niveleducativo5').val('');
          $('#niveleducativo5').removeAttr('required');
          $('#niveleducativo2 option[value="123"]').hide();
          $('#niveleducativo2 option[value="124"]').hide();
          $('#niveleducativo2 option[value="125"]').hide();
          $('#niveleducativo2 option[value="126"]').hide();
          $('#niveleducativo2 option[value="127"]').hide();
          $('#niveleducativo2 option[value="128"]').show(); 
          $('#niveleducativo2 option[value="129"]').show();
          $('#niveleducativo2 option[value="130"]').show();
          $('#niveleducativo2 option[value="131"]').show();
          $('#niveleducativo2 option[value="132"]').hide();
          $('#niveleducativo2 option[value="133"]').hide();
        }
        if ($(this).val() == "112") {
          $('#niveleducativo2div').css('display', '');
          $('#niveleducativo2').attr('required', 'required');
          $('#niveleducativo2').val('');
          $('#niveleducativo3div').css('display','none');
            $('#niveleducativo3').val('');
            $('#niveleducativo3').removeAttr('required');
            $('#niveleducativo4div').css('display','none');
            $('#niveleducativo4').val('');
            $('#niveleducativo4').removeAttr('required');
            $('#niveleducativo5div').css('display','none');
          $('#niveleducativo5').val('');
          $('#niveleducativo5').removeAttr('required');
          $('#niveleducativo2 option[value="123"]').hide();
          $('#niveleducativo2 option[value="124"]').hide();
          $('#niveleducativo2 option[value="125"]').hide();
          $('#niveleducativo2 option[value="126"]').hide();
          $('#niveleducativo2 option[value="127"]').hide();
          $('#niveleducativo2 option[value="128"]').hide(); 
          $('#niveleducativo2 option[value="129"]').hide();
          $('#niveleducativo2 option[value="130"]').hide();
          $('#niveleducativo2 option[value="131"]').hide();
          $('#niveleducativo2 option[value="132"]').show();
          $('#niveleducativo2 option[value="133"]').show();
        }
        if (($(this).val() == "113" || $(this).val() == "114" || $(this).val() == "115" || $(this).val() == "117" ||  $(this).val() == "119" ||  $(this).val() == "121") && $('#edadintegrante').val() >= '15') {   //9.5
          $('#niveleducativo4div').css('display', '');
          $('#niveleducativo4').val('');
          $('#niveleducativo4').attr('required', 'required');
          $('#niveleducativo2div').css('display','none');
          $('#niveleducativo2').val('');
          $('#niveleducativo2').removeAttr('required');
          $('#niveleducativo3div').css('display','none');
          $('#niveleducativo3').val('');
          $('#niveleducativo3').removeAttr('required');
          $('#niveleducativo5div').css('display','none');
          $('#niveleducativo5').val('');
          $('#niveleducativo5').removeAttr('required');
        }
        if (($(this).val() == "113" || $(this).val() == "114" || $(this).val() == "115" || $(this).val() == "117" ||  $(this).val() == "119" ||  $(this).val() == "121") && $('#edadintegrante').val() <= '15') {   //9.5
          $('#niveleducativo4div').css('display', 'none');
          $('#niveleducativo4').val('');
          $('#niveleducativo4').removeAttr('required');
          $('#niveleducativo2div').css('display','none');
          $('#niveleducativo2').val('');
          $('#niveleducativo2').removeAttr('required');
          $('#niveleducativo3div').css('display','none');
          $('#niveleducativo3').val('');
          $('#niveleducativo3').removeAttr('required');
          $('#niveleducativo5div').css('display','none');
          $('#niveleducativo5').val('');
          $('#niveleducativo5').removeAttr('required');
          $('#alfabetizacion').removeAttr('required');
          $('#alfabetizacion').val('');
          $('#alfabetizaciondigital').removeAttr('required');
          $('#alfabetizaciondigital').val('');
        }


        if ( $(this).val() == "116" || $(this).val() == "118" ||  $(this).val() == "120" ||  $(this).val() == "122") {     // 9.3.2
          $('#niveleducativo4div').css('display', 'none');
          $('#niveleducativo4').val('');
          $('#niveleducativo4').removeAttr('required');
          $('#niveleducativo2div').css('display','none');
          $('#niveleducativo2').val('');
          $('#niveleducativo2').removeAttr('required');
          $('#niveleducativo3div').css('display','none');
          $('#niveleducativo3').val('');
          $('#niveleducativo3').removeAttr('required');
          $('#niveleducativo5div').css('display','');
          $('#niveleducativo5').val('');
          $('#niveleducativo5').attr('required', 'required');
          
        }

        
      });

      if($('#edadintegrante').val() >= '18'){
            $('#niveleducativo3').attr('required', 'required');
            $('#niveleducativo3div').css('display', '');
          //  $('#niveleducativo3').val('');
          }
          if($('#edadintegrante').val() <= '18'){
            $('#niveleducativo3').removeAttr('required');
            $('#niveleducativo3div').css('display', 'none');
           // $('#niveleducativo3').val('');
          }

          if($('#edadintegrante').val() >= '15'){
            $('#niveleducativo4').attr('required', 'required');
            $('#niveleducativo4div').css('display', '');
            $('#niveleducativo4').val('');
          } 
          if($('#edadintegrante').val() <= '15'){
            $('#niveleducativo4').removeAttr('required');
            $('#niveleducativo4div').css('display', 'none');
           // $('#niveleducativo3').val('');
          }
          if($('#edadintegrante').val() >= '16'){
            $('#alfabetizaciondigital').attr('required', 'required');
            $('#alfabetizaciondigitaldiv').css('display', '');
            $('#alfabetizaciondigital').val('');
          }
          if($('#edadintegrante').val() <= '16'){
            $('#alfabetizaciondigital').removeAttr('required');
            $('#alfabetizaciondigitaldiv').css('display', 'none');
           // $('#niveleducativo3').val('');
          }
          if($('#edadintegrante').val() >= '16'){
            $('#deseaaccedereducacion').attr('required', 'required');
            $('#deseaaccedereducaciondiv').css('display', '');
          } 
          if($('#edadintegrante').val() <= '16'){
            $('#deseaaccedereducacion').removeAttr('required');
            $('#deseaaccedereducaciondiv').css('display', 'none');
           // $('#niveleducativo3').val('');
          }

          if($('#edadintegrante').val() >= '15'){
            $('#alfabetizacion').attr('required', 'required');
            $('#alfabetizaciondiv').css('display', '');
          } 
          if($('#edadintegrante').val() <= '15'){
            $('#alfabetizacion').removeAttr('required');
            $('#dalfabetizaciondiv').css('display', 'none');
           // $('#niveleducativo3').val('');
          }

          $('#ingresos1').change(function(){
            if($('#ingresos1').val() == '134' && $('#edadintegrante').val() <= '14'){
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
              $('#trabajoinfantildiv').css('display','');
              $('#trabajoinfantil2div').css('display','');
              $('#trabajoinfantil2').attr('required', 'required');
              $('#cualtrabajoinfantildiv').css('display', 'none');
              $('#cualtrabajoinfantil').val('');
              $('#trabajoinfantil2').val('');
              $('input[name="trabajoinfantil[]"]').prop('checked', false);
              $('#cualtrabajoinfantil').removeAttr('required');
              $('input[name="trabajoinfantil[]"]').attr('required', 'required');
              $('#trabajo15a17anhosdiv').css('display', 'none');
              $('#trabajo15a17anhos').val(''); 
              $('#trabajo15a17anhos').removeAttr('required');
              $('#ocupadosdiv').css('display', 'none');
              $('#ocupados').val(''); 
              $('#ocupados').removeAttr('required');
              $('#formalidaddelempleodiv').css('display', 'none');
              $('#formalidaddelempleo').val(''); 
              $('#formalidaddelempleo').removeAttr('required');
              $('#ingresos2div').css('display', '');
              $('#ingresos2').val(''); 
              $('#ingresos2').attr('required','required');         
              $('#ingresos3div').css('display', '');
              $('#ingresos3').val(''); 
              $('#ingresos3').attr('required','required');   
              $('#desempleodelargaduraciondiv').css('display', 'none');
              $('#desempleodelargaduracion').val(''); 
              $('#desempleodelargaduracion').removeAttr('required');
              $('#desempleodiv').css('display', 'none');
              $('#desempleo').val(''); 
              $('#desempleo').removeAttr('required');
              $('#intermediacionlaboraldiv').css('display', 'none');
              $('#intermediacionlaboral').val(''); 
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
              $('#endeudamiento1').val(''); 
              $('#endeudamiento1').removeAttr('required');
              $('#endeudamiento2div').css('display', 'none');
              $('#endeudamiento2').val(''); 
              $('#endeudamiento2').removeAttr('required');
              $('#endeudamiento3div').css('display', 'none');
              $('#endeudamiento3').val(''); 
              $('#endeudamiento3').removeAttr('required');

             }

              if($('#ingresos1').val() == '134' && $('#edadintegrante').val() <= '14'){
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
              $('#trabajoinfantildiv').css('display','');
              $('#trabajoinfantil2div').css('display','');
              $('#trabajoinfantil2').attr('required', 'required');
              $('#cualtrabajoinfantildiv').css('display', 'none');
              $('#cualtrabajoinfantil').val('');
              $('#trabajoinfantil2').val('');
              $('input[name="trabajoinfantil[]"]').prop('checked', false);
              $('#cualtrabajoinfantil').removeAttr('required');
              $('input[name="trabajoinfantil[]"]').attr('required', 'required');
              $('#trabajo15a17anhosdiv').css('display', 'none');
              $('#trabajo15a17anhos').val(''); 
              $('#trabajo15a17anhos').removeAttr('required');
              $('#ocupadosdiv').css('display', 'none');
              $('#ocupados').val(''); 
              $('#ocupados').removeAttr('required');
              $('#formalidaddelempleodiv').css('display', 'none');
              $('#formalidaddelempleo').val(''); 
              $('#formalidaddelempleo').removeAttr('required');
              $('#ingresos2div').css('display', '');
              $('#ingresos2').val(''); 
              $('#ingresos2').attr('required','required');         
              $('#ingresos3div').css('display', '');
              $('#ingresos3').val(''); 
              $('#ingresos3').attr('required','required');   
              $('#desempleodelargaduraciondiv').css('display', 'none');
              $('#desempleodelargaduracion').val(''); 
              $('#desempleodelargaduracion').removeAttr('required');
              $('#desempleodiv').css('display', 'none');
              $('#desempleo').val(''); 
              $('#desempleo').removeAttr('required');
              $('#intermediacionlaboraldiv').css('display', 'none');
              $('#intermediacionlaboral').val(''); 
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
              $('#endeudamiento1').val(''); 
              $('#endeudamiento1').removeAttr('required');
              $('#endeudamiento2div').css('display', 'none');
              $('#endeudamiento2').val(''); 
              $('#endeudamiento2').removeAttr('required');
              $('#endeudamiento3div').css('display', 'none');
              $('#endeudamiento3').val(''); 
              $('#endeudamiento3').removeAttr('required');

             }


             if($('#ingresos1').val() == '135' || $('#ingresos1').val() == ''  && $('#edadintegrante').val() <= '14'){
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
              $('#cualtrabajoinfantildiv').css('display', 'none');
              $('#cualtrabajoinfantil').val('');
              $('#cualtrabajoinfantil').removeAttr('required');
              $('#trabajoinfantil2div').css('display','none');
              $('#trabajoinfantil2').val('');
              $('#trabajoinfantil2').removeAttr('required');
              $('input[name="trabajoinfantil[]"]').removeAttr('required');
              $('input[name="trabajoinfantil[]"]').prop('checked', false);
              $('#trabajo15a17anhosdiv').css('display', 'none');
              $('#trabajo15a17anhos').val(''); 
              $('#trabajo15a17anhos').removeAttr('required');  
              $('#ingresos2div').css('display', 'none');
              $('#ingresos2').val(''); 
              $('#ingresos2').removeAttr('required');         
              $('#ingresos3div').css('display', 'none');
              $('#ingresos3').val(''); 
              $('#ingresos3').removeAttr('required');
              $('#desempleodelargaduraciondiv').css('display', 'none');
              $('#desempleodelargaduracion').val(''); 
              $('#desempleodelargaduracion').removeAttr('required');
              $('#desempleodiv').css('display', 'none');
              $('#desempleo').val(''); 
              $('#desempleo').removeAttr('required');
              $('#intermediacionlaboraldiv').css('display', 'none');
              $('#intermediacionlaboral').val(''); 
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
              $('#endeudamiento1').val(''); 
              $('#endeudamiento1').removeAttr('required');
              $('#endeudamiento2div').css('display', 'none');
              $('#endeudamiento2').val(''); 
              $('#endeudamiento2').removeAttr('required');
              $('#endeudamiento3div').css('display', 'none');
              $('#endeudamiento3').val(''); 
              $('#endeudamiento3').removeAttr('required');
              $('#ocupadosdiv').css('display', 'none');
              $('#ocupados').val(''); 
              $('#ocupados').removeAttr('required');
             }


             if($('#ingresos1').val() == '136' && $('#edadintegrante').val() <= '14'){
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
              $('#cualtrabajoinfantildiv').css('display', 'none');
              $('#cualtrabajoinfantil').val('');
              $('#cualtrabajoinfantil').removeAttr('required');
              $('#trabajoinfantil2div').css('display','none');
              $('#trabajoinfantil2').removeAttr('required');
              $('input[name="trabajoinfantil[]"]').removeAttr('required');
              $('input[name="trabajoinfantil[]"]').prop('checked', false);
              $('#trabajo15a17anhosdiv').css('display', 'none');
              $('#trabajo15a17anhos').val(''); 
              $('#trabajo15a17anhos').removeAttr('required');  
              $('#ingresos2div').css('display', '');
              $('#ingresos2').val(''); 
              $('#ingresos2').attr('required','required');         
              $('#ingresos3div').css('display', 'none');
              $('#ingresos3').val(''); 
              $('#ingresos3').removeAttr('required');
              $('#desempleodelargaduraciondiv').css('display', 'none');
              $('#desempleodelargaduracion').val(''); 
              $('#desempleodelargaduracion').removeAttr('required');
              $('#desempleodiv').css('display', 'none');
              $('#desempleo').val(''); 
              $('#desempleo').removeAttr('required');
              $('#intermediacionlaboraldiv').css('display', 'none');
              $('#intermediacionlaboral').val(''); 
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
              $('#endeudamiento1').val(''); 
              $('#endeudamiento1').removeAttr('required');
              $('#endeudamiento2div').css('display', 'none');
              $('#endeudamiento2').val(''); 
              $('#endeudamiento2').removeAttr('required');
              $('#endeudamiento3div').css('display', 'none');
              $('#endeudamiento3').val(''); 
              $('#endeudamiento3').removeAttr('required');
              $('#ocupadosdiv').css('display', 'none');
              $('#ocupados').val(''); 
              $('#ocupados').removeAttr('required');
             }



             if($('#ingresos1').val() == '134' && ($('#edadintegrante').val() >= '15' && $('#edadintegrante').val() <= '18')){
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
              $('#trabajoinfantil2div').css('display','none');
              $('#trabajoinfantil2').removeAttr('required');
              $('#cualtrabajoinfantildiv').css('display', 'none');
              $('#cualtrabajoinfantil').val(''); 
              $('#cualtrabajoinfantil').removeAttr('required');
              $('#trabajoinfantil2').val('');
              $('input[name="trabajoinfantil[]"]').prop('checked', false);
              $('#trabajo15a17anhosdiv').css('display', '');
              $('#trabajo15a17anhos').val(''); 
              $('#trabajo15a17anhos').attr('required','required');
              $('#ocupadosdiv').css('display', '');
              $('#ocupados').val(''); 
              $('#ocupados').attr('required','required');
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
              $('input[name="bancarizacion[]"]').attr('required', 'required');
              $('input[name="bancarizacion[]"]').prop('checked', false);
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
              $('#desempleodelargaduracion').val(''); 
              $('#desempleodelargaduracion').removeAttr('required');
              $('#desempleodiv').css('display', 'none');
              $('#desempleo').val(''); 
              $('#desempleo').removeAttr('required');
             }

               if(($('#ingresos1').val() == '135' || $('#ingresos1').val() == '' ) && ($('#edadintegrante').val() >= '15' && $('#edadintegrante').val() <= '18')){
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
              $('#cualtrabajoinfantildiv').css('display', 'none');
              $('#cualtrabajoinfantil').val('');
              $('#cualtrabajoinfantil').removeAttr('required');
              $('#trabajoinfantil2div').css('display','none');
              $('#trabajoinfantil2').val('');
              $('#trabajoinfantil2').removeAttr('required');
              $('input[name="trabajoinfantil[]"]').removeAttr('required');
              $('input[name="trabajoinfantil[]"]').prop('checked', false);
              $('#trabajo15a17anhosdiv').css('display', 'none');
              $('#trabajo15a17anhos').val(''); 
              $('#trabajo15a17anhos').removeAttr('required');  
              $('#ingresos2div').css('display', 'none');
              $('#ingresos2').val(''); 
              $('#ingresos2').removeAttr('required');         
              $('#ingresos3div').css('display', 'none');
              $('#ingresos3').val(''); 
              $('#ingresos3').removeAttr('required');
              $('#desempleodelargaduraciondiv').css('display', '');
              $('#desempleodelargaduracion').val(''); 
              $('#desempleodelargaduracion').attr('required','required');
              $('#desempleodiv').css('display', 'none');
              $('#desempleo').val(''); 
              $('#desempleo').removeAttr('required');
              $('#intermediacionlaboraldiv').css('display', 'none');
              $('#intermediacionlaboral').val(''); 
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
              $('#emprendimiento1').val('');
              $('#emprendimiento1').removeAttr('required');
              $('#ocupadosdiv').css('display', 'none');
              $('#ocupados').val(''); 
              $('#ocupados').removeAttr('required');
              $('#formalidaddelempleodiv').css('display', 'none');
              $('#formalidaddelempleo').val(''); 
              $('#formalidaddelempleo').removeAttr('required');
             }

             if(($('#ingresos1').val() == '136' ) && ($('#edadintegrante').val() >= '15' && $('#edadintegrante').val() <= '18')){
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
              $('#cualtrabajoinfantildiv').css('display', 'none');
              $('#cualtrabajoinfantil').val('');
              $('#cualtrabajoinfantil').removeAttr('required');
              $('#trabajoinfantil2div').css('display','none');
              $('#trabajoinfantil2').val('');
              $('#trabajoinfantil2').removeAttr('required');
              $('input[name="trabajoinfantil[]"]').removeAttr('required');
              $('input[name="trabajoinfantil[]"]').prop('checked', false);
              $('#trabajo15a17anhosdiv').css('display', 'none');
              $('#trabajo15a17anhos').val(''); 
              $('#trabajo15a17anhos').removeAttr('required');  
              $('#ingresos3div').css('display', '');
              $('#ingresos3').val(''); 
              $('#ingresos3').attr('required','required');         
              $('#ingresos2div').css('display', 'none');
              $('#ingresos2').val(''); 
              $('#ingresos2').removeAttr('required');
              $('#desempleodelargaduraciondiv').css('display', '');
              $('#desempleodelargaduracion').val(''); 
              $('#desempleodelargaduracion').attr('required','required');
              $('#desempleodiv').css('display', 'none');
              $('#desempleo').val(''); 
              $('#desempleo').removeAttr('required');
              $('#intermediacionlaboraldiv').css('display', 'none');
              $('#intermediacionlaboral').val(''); 
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
              $('#emprendimiento1').val(''); 
              $('#emprendimiento1').removeAttr('required');
              $('#ocupadosdiv').css('display', 'none');
              $('#ocupados').val(''); 
              $('#ocupados').removeAttr('required');
              $('#formalidaddelempleodiv').css('display', 'none');
              $('#formalidaddelempleo').val(''); 
              $('#formalidaddelempleo').removeAttr('required');
             }





//18 a 66



if($('#ingresos1').val() == '134' && ($('#edadintegrante').val() >= '18' && $('#edadintegrante').val() <= '66')){
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
              $('#trabajoinfantil2div').css('display','none');
              $('#trabajoinfantil2').removeAttr('required');
              $('#cualtrabajoinfantildiv').css('display', 'none');
              $('#cualtrabajoinfantil').val(''); 
              $('#cualtrabajoinfantil').removeAttr('required');
              $('#trabajoinfantil2').val('');
              $('input[name="trabajoinfantil[]"]').prop('checked', false);
              $('#trabajo15a17anhosdiv').css('display', 'none');
              $('#trabajo15a17anhos').val(''); 
              $('#trabajo15a17anhos').removeAttr('required');
              $('#ocupadosdiv').css('display', '');
              $('#ocupados').val(''); 
              $('#ocupados').attr('required','required');
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
              $('input[name="bancarizacion[]"]').attr('required', 'required');
              $('input[name="bancarizacion[]"]').prop('checked', false);
              $('#endeudamiento1div').css('display', '');
              $('#endeudamiento1').val(''); 
              $('#endeudamiento1').attr('required','required');
              $('#endeudamiento2div').css('display', '');
              $('#endeudamiento2').val(''); 
              $('#endeudamiento2').attr('required','required');
              $('#endeudamiento3div').css('display', '');
              $('#endeudamiento3').val(''); 
              $('#endeudamiento3').attr('required','required');
              $('#desempleodelargaduraciondiv').css('display', '');
              $('#desempleodelargaduracion').val(''); 
              $('#desempleodelargaduracion').attr('required','required');
              $('#desempleodiv').css('display', 'none');
              $('#desempleo').val(''); 
              $('#desempleo').removeAttr('required');
              $('#emprendimiento1div').css('display', 'none');
              $('#emprendimiento1').val('');
              $('#emprendimiento1').removeAttr('required');
             }

               if(($('#ingresos1').val() == '135' || $('#ingresos1').val() == '' ) && ($('#edadintegrante').val() >= '18' && $('#edadintegrante').val() <= '66')){
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
              $('#cualtrabajoinfantildiv').css('display', 'none');
              $('#cualtrabajoinfantil').val('');
              $('#cualtrabajoinfantil').removeAttr('required');
              $('#trabajoinfantil2div').css('display','none');
              $('#trabajoinfantil2').val('');
              $('#trabajoinfantil2').removeAttr('required');
              $('input[name="trabajoinfantil[]"]').removeAttr('required');
              $('input[name="trabajoinfantil[]"]').prop('checked', false);
              $('#trabajo15a17anhosdiv').css('display', 'none');
              $('#trabajo15a17anhos').val(''); 
              $('#trabajo15a17anhos').removeAttr('required');  
              $('#ingresos2div').css('display', 'none');
              $('#ingresos2').val(''); 
              $('#ingresos2').removeAttr('required');         
              $('#ingresos3div').css('display', 'none');
              $('#ingresos3').val(''); 
              $('#ingresos3').removeAttr('required');
              $('#desempleodelargaduraciondiv').css('display', '');
              $('#desempleodelargaduracion').val(''); 
              $('#desempleodelargaduracion').attr('required','required');
              $('#desempleodiv').css('display', '');
              $('#desempleo').val(''); 
              $('#desempleo').attr('required','required');
              $('#intermediacionlaboraldiv').css('display', 'none');
              $('#intermediacionlaboral').val(''); 
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
              $('#emprendimiento1').val('');
              $('#emprendimiento1').removeAttr('required');
              $('#ocupadosdiv').css('display', 'none');
              $('#ocupados').val(''); 
              $('#ocupados').removeAttr('required');
              $('#formalidaddelempleodiv').css('display', 'none');
              $('#formalidaddelempleo').val(''); 
              $('#formalidaddelempleo').removeAttr('required');
             }

             if(($('#ingresos1').val() == '136' ) && ($('#edadintegrante').val() >= '18' && $('#edadintegrante').val() <= '66')){
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
              $('#cualtrabajoinfantildiv').css('display', 'none');
              $('#cualtrabajoinfantil').val('');
              $('#cualtrabajoinfantil').removeAttr('required');
              $('#trabajoinfantil2div').css('display','none');
              $('#trabajoinfantil2').val('');
              $('#trabajoinfantil2').removeAttr('required');
              $('input[name="trabajoinfantil[]"]').removeAttr('required');
              $('input[name="trabajoinfantil[]"]').prop('checked', false);
              $('#trabajo15a17anhosdiv').css('display', 'none');
              $('#trabajo15a17anhos').val(''); 
              $('#trabajo15a17anhos').removeAttr('required');  
              $('#ingresos2div').css('display', '');
              $('#ingresos2').val(''); 
              $('#ingresos2').attr('required','required');         
              $('#ingresos3div').css('display', '');
              $('#ingresos3').val(''); 
              $('#ingresos3').attr('required','required');
              $('#desempleodelargaduraciondiv').css('display', '');
              $('#desempleodelargaduracion').val(''); 
              $('#desempleodelargaduracion').attr('required','required');
              $('#desempleodiv').css('display', 'none');
              $('#desempleo').val(''); 
              $('#desempleo').removeAttr('required');
              $('#intermediacionlaboraldiv').css('display', 'none');
              $('#intermediacionlaboral').val(''); 
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
              $('#emprendimiento1').val(''); 
              $('#emprendimiento1').removeAttr('required');
              $('#ocupadosdiv').css('display', 'none');
              $('#ocupados').val(''); 
              $('#ocupados').removeAttr('required');
              $('#formalidaddelempleodiv').css('display', 'none');
              $('#formalidaddelempleo').val(''); 
              $('#formalidaddelempleo').removeAttr('required');
             }

// FIN DE 18 a 66 

if(($('#ingresos1').val() == '136' ) && ($('#edadintegrante').val() >= '66' )){
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
              $('#cualtrabajoinfantildiv').css('display', 'none');
              $('#cualtrabajoinfantil').val('');
              $('#cualtrabajoinfantil').removeAttr('required');
              $('#trabajoinfantil2div').css('display','none');
              $('#trabajoinfantil2').val('');
              $('#trabajoinfantil2').removeAttr('required');
              $('input[name="trabajoinfantil[]"]').removeAttr('required');
              $('input[name="trabajoinfantil[]"]').prop('checked', false);
              $('#trabajo15a17anhosdiv').css('display', 'none');
              $('#trabajo15a17anhos').val(''); 
              $('#trabajo15a17anhos').removeAttr('required');  
              $('#ingresos2div').css('display', '');
              $('#ingresos2').val(''); 
              $('#ingresos2').attr('required','required');         
              $('#ingresos3div').css('display', '');
              $('#ingresos3').val(''); 
              $('#ingresos3').attr('required','required');
              $('#desempleodelargaduraciondiv').css('display', '');
              $('#desempleodelargaduracion').val(''); 
              $('#desempleodelargaduracion').attr('required','required');
              $('#desempleodiv').css('display', 'none');
              $('#desempleo').val(''); 
              $('#desempleo').removeAttr('required');
              $('#intermediacionlaboraldiv').css('display', 'none');
              $('#intermediacionlaboral').val(''); 
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
              $('#emprendimiento1').val(''); 
              $('#emprendimiento1').removeAttr('required');
              $('#ocupadosdiv').css('display', 'none');
              $('#ocupados').val(''); 
              $('#ocupados').removeAttr('required');
              $('#formalidaddelempleodiv').css('display', 'none');
              $('#formalidaddelempleo').val(''); 
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
                $('#intermediacionlaboral').val('');
              }
              if($('#desempleo').val() == '154' || $('#desempleo').val() == '155'){
                $('#emprendimiento1div').css('display','');
                $('#emprendimiento1').attr('required','required');
                $('#emprendimiento1').val('');
              }else{
                $('#emprendimiento1div').css('display','none');
                $('#emprendimiento1').removeAttr('required');
                $('#emprendimiento1').val('');
              }


          });

// FIN DE 18 a 66


          $('#endeudamiento1').change(function(){
              if($('#endeudamiento1').val() == '1'){
                $('#endeudamiento3div').css('display','');
                $('#endeudamiento2div').css('display','');
                $('#endeudamiento3').attr('required','required');
                $('#endeudamiento2').attr('required','required');
                $('#endeudamiento2').val(''); 
                $('#endeudamiento3').val(''); 
              }else{
                $('#endeudamiento3div').css('display','none');
                $('#endeudamiento2div').css('display','none');
                $('#endeudamiento2').removeAttr('required');
                $('#endeudamiento3').removeAttr('required');
                $('#endeudamiento2').val(''); 
                $('#endeudamiento3').val(''); 
              }
             })


             if( $('#edadintegrante').val() >= '15' && $('#edadintegrante').val() <= '18'){
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
              $('#trabajoinfantil2div').css('display','none');
              $('#trabajoinfantil2').removeAttr('required');
              $('#cualtrabajoinfantildiv').css('display', 'none');
              $('#cualtrabajoinfantil').val(''); 
              $('#cualtrabajoinfantil').removeAttr('required');
              $('#trabajoinfantil2').val('');
              $('input[name="trabajoinfantil[]"]').prop('checked', false);
              $('#trabajo15a17anhosdiv').css('display', '');
              $('#trabajo15a17anhos').val(''); 
              $('#trabajo15a17anhos').attr('required','required');
              $('#ocupadosdiv').css('display', '');
              $('#ocupados').val(''); 
              $('#ocupados').attr('required','required');
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
              $('input[name="bancarizacion[]"]').attr('required', 'required');
              $('input[name="bancarizacion[]"]').prop('checked', false);
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
              $('#desempleodelargaduracion').val(''); 
              $('#desempleodelargaduracion').removeAttr('required');
              $('#desempleodiv').css('display', 'none');
              $('#desempleo').val(''); 
              $('#desempleo').removeAttr('required');
             }

          if($('#edadintegrante').val() <= '14'){
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
              $('#trabajoinfantildiv').css('display','');
              $('input[name="trabajoinfantil[]"]').attr('required', 'required');
              $('input[name="trabajoinfantil[]"]').removeAttr('required');
              $('#trabajo15a17anhosdiv').css('display', 'none');
              $('#trabajo15a17anhos').val(''); 
              $('#trabajo15a17anhos').removeAttr('required');
              $('#desempleodelargaduraciondiv').css('display', 'none');
              $('#desempleodelargaduracion').val(''); 
              $('#desempleodelargaduracion').removeAttr('required');
              $('#desempleodiv').css('display', 'none');
              $('#desempleo').val(''); 
              $('#desempleo').removeAttr('required');
              $('#intermediacionlaboraldiv').css('display', 'none');
              $('#intermediacionlaboral').val(''); 
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
              $('#endeudamiento1').val(''); 
              $('#endeudamiento1').removeAttr('required');
              $('#endeudamiento2div').css('display', 'none');
              $('#endeudamiento2').val(''); 
              $('#endeudamiento2').removeAttr('required');
              $('#endeudamiento3div').css('display', 'none');
              $('#endeudamiento3').val(''); 
              $('#endeudamiento3').removeAttr('required');
              $('#formalidaddelempleodiv').css('display', 'none');
              $('#formalidaddelempleo').val(''); 
              $('#formalidaddelempleo').removeAttr('required');
              $('#ocupadosdiv').css('display', 'none');
              $('#ocupados').val(''); 
              $('#ocupados').removeAttr('required');
        
            }
            if($('#edadintegrante').val() >= '14'){
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
              $('input[name="trabajoinfantil[]"]').removeAttr('required');
            }

            if(($('#edadintegrante').val() >= '15' && $('#edadintegrante').val() <= '18')){
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
              $('#trabajoinfantil2div').css('display','none');
              $('#trabajoinfantil2').removeAttr('required');
              $('#cualtrabajoinfantildiv').css('display', 'none');
              $('#cualtrabajoinfantil').val(''); 
              $('#cualtrabajoinfantil').removeAttr('required');
              $('#trabajoinfantil2').val('');
              $('input[name="trabajoinfantil[]"]').prop('checked', false);
              $('#trabajo15a17anhosdiv').css('display', '');
              $('#trabajo15a17anhos').val(''); 
              $('#trabajo15a17anhos').attr('required','required');

             }
            


            $('#trabajoinfantil146').change(function() {
                if ($(this).is(':checked')) {
                  $('#cualtrabajoinfantildiv').css('display', '');
                  $('#cualtrabajoinfantil').val('');
                  $('#cualtrabajoinfantil').attr('required', 'required');

                } else {
                  $('#cualtrabajoinfantildiv').css('display', 'none');
                  $('#cualtrabajoinfantil').val('');
                  $('#cualtrabajoinfantil').removeAttr('required');

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
          if(data.imagen.sexo =='13' && data.identitario.gestante=='1' && edad >= '12'){
            $('.acceso347').css('display','');
          }  else{
            $('.acceso347').css('display','none');
            $('#acceso347').css('display','none');

          } if( edad <= '5'){
            $('.acceso348').css('display','');
            $('.acceso349').css('display','');
          }else{
            $('.acceso348').css('display','none');
            $('.acceso349').css('display','none'); 
            $('#acceso348').css('display','none');
            $('#acceso349').css('display','none')
          }
          if( edad >= '12'){
            $('.acceso352').css('display','');
          } else{
            $('.acceso352').css('display','none');
            $('#acceso352').css('display','none');
          }

          if( edad >= '40'){
            $('.acceso353').css('display','');
          }else{
            $('.acceso353').css('display','none');
            $('#acceso353').css('display','none');
          }
          if( edad >= '25'){
            $('.acceso354').css('display','');
          }else{
            $('.acceso354').css('display','none');
            $('#acceso354').css('display','none');
          }
          if( edad >= '12' && edad <= '26'){
            $('.acceso355').css('display','');
          } else{
            $('.acceso355').css('display','none');
            $('#acceso355').css('display','none');
          }
          if (data.imagen.sexo == '13'  && edad >= '25' && data.identitario.identidad != '24'){
            $('.acceso356').css('display','');
          } else{
            $('.acceso356').css('display','none');
            $('#acceso356').css('display','none');
          } if (data.imagen.sexo == '13'  && edad >= '40' && data.identitario.identidad != '24'){
                    $('.acceso357').css('display','');
          }else{
            $('.acceso357').css('display','none');
            $('#acceso357').css('display','none');
          } if (data.imagen.sexo == '13'  && edad >= '18' && data.identitario.identidad != '24'){
                    $('.acceso358').css('display','');
          } else{
            $('.acceso358').css('display','none');
            $('#acceso358').css('display','none');
          } if (data.imagen.sexo == '13'  && edad >= '45' && data.identitario.identidad != '24'){
                    $('.acceso359').css('display','');
          } else{
            $('.acceso359').css('display','none');
            $('#acceso359').css('display','none');
          }if (data.imagen.sexo == '12'  && edad >= '50' && data.identitario.identidad != '25'){
                    $('.acceso360').css('display','');
                    $('.acceso361').css('display','');  
          }else{
            $('.acceso360').css('display','none');
            $('.acceso361').css('display','none');
            $('#acceso360').css('display','none');
            $('#acceso361').css('display','none');
          }
          





        // console.log(data.imagen.avatar , 'avatar')
 if(data.imagen.avatar != null){
   $('#imagenDinamica').attr('src',`../public/avatares/${data.imagen.avatar}.png`) 
  
 }else{
  console.log(data.imagen.avatar , 'avatar')
  $('#imagenDinamica').attr('src',`../public/avatares/${(data.imagen.sexo == '12')?'../avatares/hombre_avatar':'../avatares/mujer_avatar'}.png`)
 }
    //     let acceso3 = JSON.parse(data.integrantes.acceso3); // ["49", "54"]
          
    // Iterar sobre todos los checkboxes en el contenedor y marcar/desmarcar según los valores seleccionados
                    let acceso3 = JSON.parse((data.integrantes)?data.integrantes.acceso3:'{}'); // ["49", "54"]
                    let consumospa3 = JSON.parse((data.integrantes)?data.integrantes.consumospa3:'{}'); // ["49", "54"]
                    let consumospa6 = JSON.parse((data.integrantes)?data.integrantes.consumospa6:'{}'); // ["49", "54"]
                    let psicosocial1 = JSON.parse((data.integrantes)?data.integrantes.psicosocial1:'{}'); // ["49", "54"]
                    let psicosocial2 = JSON.parse((data.integrantes)?data.integrantes.psicosocial2:'{}'); // ["49", "54"]
                    
                    let trabajoinfantil = JSON.parse((data.integrantesfinanciero)?data.integrantesfinanciero.trabajoinfantil:'{}'); // ["49", "54"]
                    let bancarizacion = JSON.parse((data.integrantesfinanciero)?data.integrantesfinanciero.bancarizacion:'{}'); // ["49", "54"]
                    let mecanismosdeproteccionddhh3 = JSON.parse((data.integranteslegal)?data.integranteslegal.mecanismosdeproteccionddhh3:'{}'); // ["49", "54"]

                  console.log(trabajoinfantil)
                  
                  if(Array.isArray(acceso3) && acceso3.length > 0) {
                $('#acceso3-container input[type="checkbox"]').each(function() {
                  let found = acceso3.find(item => item.id === this.value );
                  console.log(found.valor, 'aca valor')
                          if (found.valor == 'SI') { 
                            $(this).prop('checked', true);
                            $(this).attr('respuesta', 'SI');  // Establecer 'respuesta' a 'NO APLICA' solo si el valor es 'si'
                          } else {
                            $(this).attr('respuesta', 'SI');  // Establecer 'respuesta' con el valor correspondiente
                          }
                         

                          //$(this).prop('checked', false);    
                });}

                if(Array.isArray(consumospa3) && consumospa3.length > 0) {
                $('#container-consumospa3 input[type="checkbox"]').each(function() {
                  let found = consumospa3.find(item => item.id === this.value );
                  console.log(found.valor, 'aca valor')
                          if (found.valor == 'SI') { 
                            $(this).prop('checked', true);
                            $(this).attr('respuesta', 'SI');  // Establecer 'respuesta' a 'NO APLICA' solo si el valor es 'si'
                          } else {
                            $(this).attr('respuesta', 'SI');  // Establecer 'respuesta' con el valor correspondiente
                          }
                });}

                if(Array.isArray(consumospa6) && consumospa6.length > 0) {
                $('#container-consumospa6 input[type="checkbox"]').each(function() {
                  let found = consumospa6.find(item => item.id === this.value );
                  console.log(found.valor, 'aca valor')
                          if (found.valor == 'SI') { 
                            $(this).prop('checked', true);
                            $(this).attr('respuesta', 'SI');  // Establecer 'respuesta' a 'NO APLICA' solo si el valor es 'si'
                          } else {
                            $(this).attr('respuesta', 'SI');  // Establecer 'respuesta' con el valor correspondiente
                          }
                });}

                if(Array.isArray(psicosocial1) && psicosocial1.length > 0) {
                $('#container-psicosocial1 input[type="checkbox"]').each(function() {
                  let found = psicosocial1.find(item => item.id === this.value );
                  console.log(found.valor, 'aca valor')
                          if (found.valor == 'SI') { 
                            $(this).prop('checked', true);
                            $(this).attr('respuesta', 'SI');  // Establecer 'respuesta' a 'NO APLICA' solo si el valor es 'si'
                          } else {
                            $(this).attr('respuesta', 'SI');  // Establecer 'respuesta' con el valor correspondiente
                          }
                });}

                if(Array.isArray(psicosocial2) && psicosocial2.length > 0) {
                $('#container-psicosocial2 input[type="checkbox"]').each(function() {
                  let found = psicosocial2.find(item => item.id === this.value );
                  console.log(found.valor, 'aca valor')
                          if (found.valor == 'SI') { 
                            $(this).prop('checked', true);
                            $(this).attr('respuesta', 'SI');  // Establecer 'respuesta' a 'NO APLICA' solo si el valor es 'si'
                          } else {
                            $(this).attr('respuesta', 'SI');  // Establecer 'respuesta' con el valor correspondiente
                          }
                });}

                if(Array.isArray(trabajoinfantil) && trabajoinfantil.length > 0){
                $('#container-trabajoinfantil input[type="checkbox"]').each(function() {
                  let found = trabajoinfantil.find(item => item.id === this.value );
                  console.log(found.valor, 'aca valor')
                          if (found.valor == 'SI') { 
                            $(this).prop('checked', true);
                            $(this).attr('respuesta', 'SI');  // Establecer 'respuesta' a 'NO APLICA' solo si el valor es 'si'
                          } else {
                            $(this).attr('respuesta', 'SI');  // Establecer 'respuesta' con el valor correspondiente
                          }
                });
              }
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
              if(Array.isArray(mecanismosdeproteccionddhh3) && mecanismosdeproteccionddhh3.length > 0){
                $('#container-mecanismosdeproteccionddhh3 input[type="checkbox"]').each(function() {
                  let found = mecanismosdeproteccionddhh3.find(item => item.id === this.value );
                  console.log(found.valor, 'aca valor')
                          if (found.valor == 'SI') { 
                            $(this).prop('checked', true);
                            $(this).attr('respuesta', 'SI');  // Establecer 'respuesta' a 'NO APLICA' solo si el valor es 'si'
                          } else {
                            $(this).attr('respuesta', 'SI');  // Establecer 'respuesta' con el valor correspondiente
                          }
                });
              }

           if(data.integrantes ==null){
           }else{
             $('#siguiente').css('display','');
             $('#volver2').css('display','');
            }
            if(data.integrantesintelectual ==null){
            }else{
              $('#siguiente2').css('display','');
            }
            if(data.integrantesfinanciero ==null){
            }else{
              $('#siguiente3').css('display','');
            }
            if(data.integranteslegal ==null){
            }else{
              $('#volver').css('display','');
            }
           $('#regimendesalud').val((data.integrantes)?data.integrantes.regimendesalud:'');
           $('#acceso1').val((data.integrantes)?data.integrantes.acceso1:'');
           $('#acceso2').val((data.integrantes)?data.integrantes.acceso2:'');
           $('#discapacidad').val((data.integrantes)?data.integrantes.discapacidad:'');   
           $('#tipodediscapacidad').val((data.integrantes)?data.integrantes.tipodediscapacidad:'');
           $('#atenciondiscapacidad').val((data.integrantes)?data.integrantes.atenciondiscapacidad:'');      
           $('#certificadodiscapacidad').val((data.integrantes)?data.integrantes.certificadodiscapacidad:'');
           $('#consumospa1').val((data.integrantes)?data.integrantes.consumospa1:'');
           $('#consumospa2').val((data.integrantes)?data.integrantes.consumospa2:''); 
           $('#consumospa4').val((data.integrantes)?data.integrantes.consumospa4:'');
           $('#consumospa5').val((data.integrantes)?data.integrantes.consumospa5:'');
           $('#consumospa6').val((data.integrantes)?data.integrantes.consumospa6:'');
           $('#psicosocial1').val((data.integrantes)?data.integrantes.psicosocial1:'');
           $('#psicosocial2').val((data.integrantes)?data.integrantes.psicosocial2:'');
           $('#cualpsicosocial2').val((data.integrantes)?data.integrantes.cualpsicosocial2:'');
           $('#planexequial').val((data.integrantes)?data.integrantes.planexequial:'');
        //   BIENESTAR INTELECTUAL
           $('#alfabetizacion').val((data.integrantesintelectual)?data.integrantesintelectual.alfabetizacion:'');
           $('#educacion').val((data.integrantesintelectual)?data.integrantesintelectual.educacion:'');
           $('#niveleducativo1').val((data.integrantesintelectual)?data.integrantesintelectual.niveleducativo1:'');
           $('#niveleducativo2').val((data.integrantesintelectual)?data.integrantesintelectual.niveleducativo2:'');
           $('#niveleducativo5').val((data.integrantesintelectual)?data.integrantesintelectual.niveleducativo5:'');
           $('#niveleducativo3').val((data.integrantesintelectual)?data.integrantesintelectual.niveleducativo3:'');
           $('#niveleducativo4').val((data.integrantesintelectual)?data.integrantesintelectual.niveleducativo4:'');
           $('#deseaaccedereducacion').val((data.integrantesintelectual)?data.integrantesintelectual.deseaaccedereducacion:'');
           $('#alfabetizaciondigital').val((data.integrantesintelectual)?data.integrantesintelectual.alfabetizaciondigital:'');
          
          // BIENESTAR FINANCIERO

           $('#ingresos1').val((data.integrantesfinanciero)?data.integrantesfinanciero.ingresos1:'');
           $('#trabajoinfantil').val((data.integrantesfinanciero)?data.integrantesfinanciero.trabajoinfantil:'');
           $('#trabajo15a17anhos').val((data.integrantesfinanciero)?data.integrantesfinanciero.trabajo15a17anhos:'');
           $('#ocupados').val((data.integrantesfinanciero)?data.integrantesfinanciero.ocupados:'');
           $('#formalidaddelempleo').val((data.integrantesfinanciero)?data.integrantesfinanciero.formalidaddelempleo:'');
           $('#ingresos2').val((data.integrantesfinanciero)?data.integrantesfinanciero.ingresos2:'');
           $('#ingresos3').val((data.integrantesfinanciero)?data.integrantesfinanciero.ingresos3:'');
           $('#desempleodelargaduracion').val((data.integrantesfinanciero)?data.integrantesfinanciero.desempleodelargaduracion:'');
           $('#desempleo').val((data.integrantesfinanciero)?data.integrantesfinanciero.desempleo:'');
           $('#intermediacionlaboral').val((data.integrantesfinanciero)?data.integrantesfinanciero.intermediacionlaboral:'');
           $('#emprendimiento1').val((data.integrantesfinanciero)?data.integrantesfinanciero.emprendimiento1:'');
           $('#bancarizacion').val((data.integrantesfinanciero)?data.integrantesfinanciero.bancarizacion:''); 
           $('#endeudamiento1').val((data.integrantesfinanciero)?data.integrantesfinanciero.endeudamiento1:'');
           $('#endeudamiento3').val((data.integrantesfinanciero)?data.integrantesfinanciero.endeudamiento3:'');
           $('#endeudamiento2').val((data.integrantesfinanciero)?data.integrantesfinanciero.endeudamiento2:'');
           $('#trabajoinfantil2').val((data.integrantesfinanciero)?data.integrantesfinanciero.trabajoinfantil2:'');
           $('#cualtrabajoinfantil').val((data.integrantesfinanciero)?data.integrantesfinanciero.cualtrabajoinfantil:'');

              // BIENESTAR LEGAL

           $('#mecanismosdeproteccionddhh').val((data.integranteslegal)?data.integranteslegal.mecanismosdeproteccionddhh:'');
           $('#mecanismosdeproteccionddhh3').val((data.integranteslegal)?data.integranteslegal.mecanismosdeproteccionddhh3:'');
           $('#mecanismoaccionconstitucional').val((data.integranteslegal)?data.integranteslegal.mecanismoaccionconstitucional:'');

           if($('#acceso1').val() == '2' || $('#acceso1').val() == ''){
              $('.acceso2').css('display','none');
              $('#acceso2').attr('required',false)
            }else{
              $('.acceso2').css('display','');
              $('#acceso2').attr('required',true)
            }

            if($('#discapacidad').val() == '2' || $('#acceso1').val() == ''){
              $('#tipodediscapacidaddiv').css('display','none');
              $('#tipodediscapacidad').attr('required',false);

              $('#atenciondiscapacidaddiv').css('display','none');
              $('#atenciondiscapacidad').attr('required',false);

              $('#certificadodiscapacidaddiv').css('display','none');
              $('#certificadodiscapacidad').attr('required',false);
              $('#certificadodiscapacidad').val('');

            }else{
              $('#tipodediscapacidaddiv').css('display','');
              $('#tipodediscapacidad').attr('required',true);

              $('#atenciondiscapacidaddiv').css('display','');
              $('#atenciondiscapacidad').attr('required',true);

              $('#certificadodiscapacidaddiv').css('display','');
              $('#certificadodiscapacidad').attr('required',true);
            }

            if(edad >= '8'){
              console.log('hola')
              $('#consumospa1div').css('display','');
              $('#consumospa2div').css('display','');
              $('.consumospa371').css('display','');
              $('.consumospa372').css('display','');
              $('.consumospa373').css('display','');
              $('.consumospa374').css('display','');
              $('#consumospa3div').css('display','');
              $('#consumospa4div').css('display','');
              $('#consumospa5div').css('display','');

              $('.consumospa681').css('display','');
              $('#consumospa681').css('display','');
              $('.consumospa682').css('display','');
              $('#consumospa682').css('display','');
              $('.consumospa683').css('display','');
              $('#consumospa683').css('display','');
              $('.consumospa684').css('display','');
              $('#consumospa684').css('display','');
              $('.consumospa685').css('display','');
              $('#consumospa685').css('display','');
              $('.consumospa686').css('display','');
              $('#consumospa686').css('display',''); 
              $('#consumospa6div').css('display','');  
           

            }else{
              console.log('hola else')
              $('#consumospa1div').css('display','none');
              $('#consumospa1').val('');
              $('#consumospa1').attr('required',false);

              $('#consumospa2div').css('display','none');
              $('#consumospa2').val('');
              $('#consumospa2').attr('required',false);

              $('.consumospa371').css('display','none');
              $('#consumospa371').css('display','none');
              $('.consumospa372').css('display','none');
              $('#consumospa372').css('display','none');
              $('.consumospa373').css('display','none');
              $('#consumospa373').css('display','none');
              $('.consumospa374').css('display','none');
              $('#consumospa374').css('display','none');
              $('#consumospa3div').css('display','none');
              $('#consumospa4div').css('display','none');
              $('#consumospa4').attr('required',false);
              $('#consumospa5div').css('display','none');
              $('#consumospa5').attr('required',false);
              $('#consumospa4').val('');
              $('#consumospa5').val('');

              $('.consumospa681').css('display','none');
              $('#consumospa681').css('display','none');
              $('.consumospa682').css('display','none');
              $('#consumospa682').css('display','none');
              $('.consumospa683').css('display','none');
              $('#consumospa683').css('display','none');
              $('.consumospa684').css('display','none');
              $('#consumospa684').css('display','none');
              $('.consumospa685').css('display','none');
              $('#consumospa685').css('display','none');
              $('.consumospa686').css('display','none');
              $('#consumospa686').css('display','none');
              $('#consumospa6div').css('display','none');
        
            }
console.log(edad)
            

            if(edad >= '15'){

              $('.psicosocial292').css('display','');
              $('#psicosocial292').css('display','');
              $('.psicosocial293').css('display','');
              $('#psicosocial293').css('display','');
              $('.psicosocial294').css('display','');
              $('#psicosocial294').css('display','');
              $('.psicosocial295').css('display','');
              $('#psicosocial295').css('display','');
              $('.psicosocial296').css('display','');
              $('#psicosocial296').css('display','');
              $('.psicosocial297').css('display','');
              $('#psicosocial297').css('display','');
              $('.psicosocial298').css('display','');
              $('#psicosocial298').css('display',''); 
              $('.psicosocial299').css('display','');
              $('#psicosocial299').css('display',''); 
              $('.psicosocial2100').css('display','');
              $('#psicosocial2100').css('display','');
              $('.psicosocial2101').css('display','');
              $('#psicosocial2101').css('display','');
              $('.psicosocial2102').css('display','');
              $('#psicosocial2102').css('display','');
              $('.psicosocial2103').css('display','');
              $('#psicosocial2103').css('display','');
              $('.psicosocial2104').css('display','');
              $('#psicosocial2104').css('display','');
              $('.psicosocial2105').css('display','');
              $('#psicosocial2105').css('display','');
              $('.psicosocial2106').css('display','');
              $('#psicosocial2106').css('display','');  
              $('#psicosocial2div').css('display','');
              $('#cualpsicosocial2').css('display','');
              $('#alfabetizaciondiv').css('display','');
              

            }else{
              $('.psicosocial292').css('display','none');
              $('#psicosocial292').css('display','none');
              $('.psicosocial293').css('display','none');
              $('#psicosocial293').css('display','none');
              $('.psicosocial294').css('display','none');
              $('#psicosocial294').css('display','none');
              $('.psicosocial295').css('display','none');
              $('#psicosocial295').css('display','none');
              $('.psicosocial296').css('display','none');
              $('#psicosocial296').css('display','none');
              $('.psicosocial297').css('display','none');
              $('#psicosocial297').css('display','none');
              $('.psicosocial298').css('display','none');
              $('#psicosocial298').css('display','none'); 
              $('.psicosocial299').css('display','none');
              $('#psicosocial299').css('display','none'); 
              $('.psicosocial2100').css('display','none');
              $('#psicosocial2100').css('display','none');
              $('.psicosocial2101').css('display','none');
              $('#psicosocial2101').css('display','none');
              $('.psicosocial2102').css('display','none');
              $('#psicosocial2102').css('display','none');
              $('.psicosocial2103').css('display','none');
              $('#psicosocial2103').css('display','none');
              $('.psicosocial2104').css('display','none');
              $('#psicosocial2104').css('display','none');
              $('.psicosocial2105').css('display','none');
              $('#psicosocial2105').css('display','none');
              $('.psicosocial2106').css('display','none');
              $('#psicosocial2106').css('display','none');  
              $('#psicosocial2div').css('display','none');
              $('#cualpsicosocial2').css('display','none');
              $('#cualpsicosocial2').val('');
              $('#alfabetizaciondiv').css('display','none');
              $('#alfabetizacion').val('');


            }

            if($('#consumospa1').val() == '2' || $('#consumospa1').val() == ''){
        $('#consumospa2div').css('display','none');
        $('#consumospa2').attr('required',false);

        $('.consumospa371').css('display','none');
        $('#consumospa371').css('display','none');
        $('.consumospa372').css('display','none');
        $('#consumospa372').css('display','none');
        $('.consumospa373').css('display','none');
        $('#consumospa373').css('display','none');
        $('.consumospa374').css('display','none');
        $('#consumospa374').css('display','none');
        $('#consumospa3div').css('display','none');
        $('#consumospa4div').css('display','none');
        $('#consumospa4').attr('required',false);
        $('#consumospa5div').css('display','none');
        $('#consumospa5').attr('required',false);

        $('.consumospa681').css('display','none');
        $('#consumospa681').css('display','none');
        $('.consumospa682').css('display','none');
        $('#consumospa682').css('display','none');
        $('.consumospa683').css('display','none');
        $('#consumospa683').css('display','none');
        $('.consumospa684').css('display','none');
        $('#consumospa684').css('display','none');
        $('.consumospa685').css('display','none');
        $('#consumospa685').css('display','none');
        $('.consumospa686').css('display','none');
        $('#consumospa686').css('display','none');
        $('#consumospa6div').css('display','none');

        $('input[name="consumospa3[]"]').prop('checked', false);
        $('input[name="consumospa6[]"]').prop('checked', false);

       
      }else{
        $('#consumospa2div').css('display','');
        $('#consumospa2').attr('required',true);
        $('#consumospa4').attr('required',true);
        $('#consumospa5').attr('required',true);


        $('.consumospa371').css('display','');
        $('#consumospa371').css('display','');
        $('.consumospa372').css('display','');
        $('#consumospa372').css('display','');
        $('.consumospa373').css('display','');
        $('#consumospa373').css('display','');
        $('.consumospa374').css('display','');
        $('#consumospa374').css('display','');
        $('#consumospa3div').css('display','');
        $('#consumospa4div').css('display','');
        $('#consumospa5div').css('display','');

        $('.consumospa681').css('display','');
        $('#consumospa681').css('display','');
        $('.consumospa682').css('display','');
        $('#consumospa682').css('display','');
        $('.consumospa683').css('display','');
        $('#consumospa683').css('display','');
        $('.consumospa684').css('display','');
        $('#consumospa684').css('display','');
        $('.consumospa685').css('display','');
        $('#consumospa685').css('display','');
        $('.consumospa686').css('display','');
        $('#consumospa686').css('display',''); 
        $('#consumospa6div').css('display','');
        
      }

      if ($('#consumospa681').is(':checked')) {
        $('input[name="consumospa6[]"]').not('#consumospa681').closest('div').hide();
      } else {
        $('input[name="consumospa6[]"]').closest('div').show();
      }

      if ($('#psicosocial2106').is(':checked')) {
          $('#cualpsicosocial2div').css('display', '');          
          $('#cualpsicosocial2').attr('required', 'required');

        } else {
          $('#cualpsicosocial2div').css('display', 'none');
          $('#cualpsicosocial2').removeAttr('required');
        }

        if ($('input[name="acceso3[]"]:visible:checked').length > 0) {
          $('input[name="acceso3[]"]').removeAttr('required');
        }else{
          $('input[name="acceso3[]"]:hidden').removeAttr('required');
        }

        if ($('input[name="consumospa3[]"]:visible:checked').length > 0) {
          $('input[name="consumospa3[]"]').removeAttr('required');
        }else{
          $('input[name="consumospa3[]"]:hidden').removeAttr('required');
        }
        if ($('input[name="consumospa6[]"]:visible:checked').length > 0) {
              $('input[name="consumospa6[]"]').removeAttr('required');
            }else{
             $('input[name="consumospa6[]"]:hidden').removeAttr('required');
            }
        if ($('input[name="psicosocial1[]"]:visible:checked').length > 0) {
            $('input[name="psicosocial1[]"]').removeAttr('required');
          }else{
            $('input[name="psicosocial1[]"]:hidden').removeAttr('required');
          }
        if ($('input[name="psicosocial2[]"]:visible:checked').length > 0) {
            $('input[name="psicosocial2[]"]').removeAttr('required');
          }else{
           $('input[name="psicosocial2[]"]:hidden').removeAttr('required');
          }

           if ($('input[name="trabajoinfantil[]"]:visible:checked').length > 0) {
           $('input[name="trabajoinfantil[]"]').removeAttr('required');
         }else{
           $('input[name="trabajoinfantil[]"]:hidden').removeAttr('required');
         }
         if ($('input[name="bancarizacion[]"]:visible:checked').length > 0) {
           $('input[name="bancarizacion[]"]').removeAttr('required');
         }else{
           $('input[name="bancarizacion[]"]:hidden').removeAttr('required');
         }
         if ($('input[name="mecanismosdeproteccionddhh3[]"]:visible:checked').length > 0) {
           $('input[name="mecanismosdeproteccionddhh3[]"]').removeAttr('required');
         }else{
           $('input[name="mecanismosdeproteccionddhh3[]"]:hidden').removeAttr('required');
         }




        

  if (($('#niveleducativo1').val() == "107" || $('#niveleducativo1').val() == "108" || $('#niveleducativo1').val() == "109") && $('#edadintegrante').val() >= '18') {
           $('#niveleducativo2div').css('display', 'none');
           $('#niveleducativo4div').css('display', 'none'); 
           $('#niveleducativo5div').css('display', 'none');
           $('#niveleducativo3div').css('display', '');
           $('#niveleducativo3').attr('required', 'required');
           $('#niveleducativo2').removeAttr('required');
           $('#niveleducativo5').removeAttr('required');
           $('#niveleducativo4').removeAttr('required');
          } 
         if (($('#niveleducativo1').val() == "107" || $('#niveleducativo1').val() == "108" || $('#niveleducativo1').val() == "109") && $('#edadintegrante').val() <= '18') {
           $('#niveleducativo2div').css('display', 'none');
           $('#niveleducativo4div').css('display', 'none'); 
           $('#niveleducativo5div').css('display', 'none');
           $('#niveleducativo3div').css('display', 'none');
           $('#niveleducativo3').removeAttr('required');
           $('#niveleducativo2').removeAttr('required');
           $('#niveleducativo5').removeAttr('required');
           $('#niveleducativo4').removeAttr('required');
           $('#alfabetizacion').removeAttr('required');
           $('#alfabetizaciondigital').removeAttr('required');
          } 
         //  else {
         //   $('#niveleducativo2div').css('display', '');
         //   $('#niveleducativo5div').css('display', '');
         //   $('#niveleducativo2').val('');
         //   $('#niveleducativo5').val('');
         //   $('#niveleducativo2').attr('required', 'required');
         //   $('#niveleducativo5').attr('required', 'required');
         // }

         if ($('#niveleducativo1').val() == "110") {
           $('#niveleducativo2div').css('display', '');
           $('#niveleducativo2').attr('required', 'required');
           $('#niveleducativo3div').css('display','none');
             $('#niveleducativo3').removeAttr('required');
             $('#niveleducativo4div').css('display','none');
             $('#niveleducativo4').removeAttr('required');
             $('#niveleducativo5div').css('display','none');
           $('#niveleducativo5').removeAttr('required');
           $('#niveleducativo2 option[value="123"]').show();
           $('#niveleducativo2 option[value="124"]').show();
           $('#niveleducativo2 option[value="125"]').show();
           $('#niveleducativo2 option[value="126"]').show();
           $('#niveleducativo2 option[value="127"]').show();
           $('#niveleducativo2 option[value="128"]').hide();
           $('#niveleducativo2 option[value="129"]').hide();
           $('#niveleducativo2 option[value="130"]').hide();
           $('#niveleducativo2 option[value="131"]').hide();
           $('#niveleducativo2 option[value="132"]').hide();
           $('#niveleducativo2 option[value="133"]').hide();

         }

         if ($('#niveleducativo1').val() == "111") {
           $('#niveleducativo2div').css('display', '');
           $('#niveleducativo2').attr('required', 'required');
           $('#niveleducativo3div').css('display','none');
             $('#niveleducativo3').removeAttr('required');
             $('#niveleducativo4div').css('display','none');
             $('#niveleducativo4').removeAttr('required');
             $('#niveleducativo5div').css('display','none');
           $('#niveleducativo5').removeAttr('required');
           $('#niveleducativo2 option[value="123"]').hide();
           $('#niveleducativo2 option[value="124"]').hide();
           $('#niveleducativo2 option[value="125"]').hide();
           $('#niveleducativo2 option[value="126"]').hide();
           $('#niveleducativo2 option[value="127"]').hide();
           $('#niveleducativo2 option[value="128"]').show(); 
           $('#niveleducativo2 option[value="129"]').show();
           $('#niveleducativo2 option[value="130"]').show();
           $('#niveleducativo2 option[value="131"]').show();
           $('#niveleducativo2 option[value="132"]').hide();
           $('#niveleducativo2 option[value="133"]').hide();
         }
         if ($('#niveleducativo1').val() == "112") {
           $('#niveleducativo2div').css('display', '');
           $('#niveleducativo2').attr('required', 'required');
           $('#niveleducativo3div').css('display','none');
             $('#niveleducativo3').removeAttr('required');
             $('#niveleducativo4div').css('display','none');
             $('#niveleducativo4').removeAttr('required');
             $('#niveleducativo5div').css('display','none');
           $('#niveleducativo5').removeAttr('required');
           $('#niveleducativo2 option[value="123"]').hide();
           $('#niveleducativo2 option[value="124"]').hide();
           $('#niveleducativo2 option[value="125"]').hide();
           $('#niveleducativo2 option[value="126"]').hide();
           $('#niveleducativo2 option[value="127"]').hide();
           $('#niveleducativo2 option[value="128"]').hide(); 
           $('#niveleducativo2 option[value="129"]').hide();
           $('#niveleducativo2 option[value="130"]').hide();
           $('#niveleducativo2 option[value="131"]').hide();
           $('#niveleducativo2 option[value="132"]').show();
           $('#niveleducativo2 option[value="133"]').show();
         }
         if (($('#niveleducativo1').val() == "113" || $('#niveleducativo1').val() == "114" || $('#niveleducativo1').val() == "115" || $('#niveleducativo1').val() == "117" ||  $('#niveleducativo1').val() == "119" ||  $('#niveleducativo1').val() == "121") && $('#edadintegrante').val() >= '15') {   //9.5
           $('#niveleducativo4div').css('display', '');
           $('#niveleducativo4').attr('required', 'required');
           $('#niveleducativo2div').css('display','none');
           $('#niveleducativo2').removeAttr('required');
           $('#niveleducativo3div').css('display','none');
           $('#niveleducativo3').removeAttr('required');
           $('#niveleducativo5div').css('display','none');
           $('#niveleducativo5').removeAttr('required');
         }
         if (($('#niveleducativo1').val() == "113" || $('#niveleducativo1').val() == "114" || $('#niveleducativo1').val() == "115" || $('#niveleducativo1').val() == "117" ||  $('#niveleducativo1').val() == "119" ||  $('#niveleducativo1').val() == "121") && $('#edadintegrante').val() <= '15') {   //9.5
           $('#niveleducativo4div').css('display', 'none');
           $('#niveleducativo4').removeAttr('required');
           $('#niveleducativo2div').css('display','none');
           $('#niveleducativo2').removeAttr('required');
           $('#niveleducativo3div').css('display','none');
           $('#niveleducativo3').removeAttr('required');
           $('#niveleducativo5div').css('display','none');
           $('#niveleducativo5').removeAttr('required');
           $('#alfabetizacion').removeAttr('required');
           $('#alfabetizaciondigital').removeAttr('required');
         }


         if ( $('#niveleducativo1').val() == "116" || $('#niveleducativo1').val() == "118" ||  $('#niveleducativo1').val() == "120" ||  $('#niveleducativo1').val() == "122") {     // 9.3.2
           $('#niveleducativo4div').css('display', 'none');
           $('#niveleducativo4').removeAttr('required');
           $('#niveleducativo2div').css('display','none');
           $('#niveleducativo2').removeAttr('required');
           $('#niveleducativo3div').css('display','none');
           $('#niveleducativo3').removeAttr('required');
           $('#niveleducativo5div').css('display','');
           $('#niveleducativo5').attr('required', 'required');
          
         }

          if($('#edadintegrante').val() >= '16'){
            $('#alfabetizaciondigital').attr('required', 'required');
            $('#alfabetizaciondigitaldiv').css('display', '');
          }
          if($('#edadintegrante').val() <= '16'){
            $('#alfabetizaciondigital').removeAttr('required');
            $('#alfabetizaciondigitaldiv').css('display', 'none');
           // $('#niveleducativo3').val('');
          }
          if($('#edadintegrante').val() >= '16'){
            $('#deseaaccedereducacion').attr('required', 'required');
            $('#deseaaccedereducaciondiv').css('display', '');
          } 
          if($('#edadintegrante').val() <= '16'){
            $('#deseaaccedereducacion').removeAttr('required');
            $('#deseaaccedereducaciondiv').css('display', 'none');
           // $('#niveleducativo3').val('');
          }

          if($('#edadintegrante').val() >= '15'){
            $('#alfabetizacion').attr('required', 'required');
            $('#alfabetizaciondiv').css('display', '');
          } 
          if($('#edadintegrante').val() <= '15'){
            $('#alfabetizacion').removeAttr('required');
            $('#dalfabetizaciondiv').css('display', 'none');
           // $('#niveleducativo3').val('');
          }

           if($('#ingresos1').val() == '134' && $('#edadintegrante').val() <= '14'){
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
              $('#trabajoinfantildiv').css('display','');
              $('#trabajoinfantil2div').css('display','');
              $('#cualtrabajoinfantildiv').css('display', 'none');
              $('#cualtrabajoinfantil').removeAttr('required');
              $('#trabajo15a17anhosdiv').css('display', 'none');
              $('#trabajo15a17anhos').removeAttr('required');
              $('#ocupadosdiv').css('display', 'none');
              $('#ocupados').removeAttr('required');
              $('#formalidaddelempleodiv').css('display', 'none');
              $('#formalidaddelempleo').removeAttr('required');
              $('#ingresos2div').css('display', '');
              $('#ingresos2').attr('required','required');         
              $('#ingresos3div').css('display', '');
              $('#ingresos3').attr('required','required');   
              $('#desempleodelargaduraciondiv').css('display', 'none');
              $('#desempleodelargaduracion').removeAttr('required');
              $('#desempleodiv').css('display', 'none');
              $('#desempleo').removeAttr('required');
              $('#intermediacionlaboraldiv').css('display', 'none');
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
              $('#endeudamiento1').removeAttr('required');
              $('#endeudamiento2div').css('display', 'none');
              $('#endeudamiento2').removeAttr('required');
              $('#endeudamiento3div').css('display', 'none');
              $('#endeudamiento3').removeAttr('required');
            } 
            
            if($('#ingresos1').val() == '135' || $('#ingresos1').val() == ''  && $('#edadintegrante').val() <= '14'){
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
              $('#cualtrabajoinfantildiv').css('display', 'none');
              $('#cualtrabajoinfantil').removeAttr('required');
              $('#trabajoinfantil2div').css('display','none');
              $('#trabajoinfantil2').removeAttr('required');
              $('#trabajo15a17anhosdiv').css('display', 'none');
              $('#trabajo15a17anhos').val(''); 
              $('#trabajo15a17anhos').removeAttr('required');  
              $('#ingresos2div').css('display', 'none');
              $('#ingresos2').removeAttr('required');         
              $('#ingresos3div').css('display', 'none');
              $('#ingresos3').removeAttr('required');
              $('#desempleodelargaduraciondiv').css('display', 'none');
              $('#desempleodelargaduracion').removeAttr('required');
              $('#desempleodiv').css('display', 'none');
              $('#desempleo').removeAttr('required');
              $('#intermediacionlaboraldiv').css('display', 'none');
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
              $('#endeudamiento1').removeAttr('required');
              $('#endeudamiento2div').css('display', 'none');
              $('#endeudamiento2').removeAttr('required');
              $('#endeudamiento3div').css('display', 'none');
              $('#endeudamiento3').removeAttr('required');
              $('#ocupadosdiv').css('display', 'none');
              $('#ocupados').removeAttr('required');
             }

             if($('#ingresos1').val() == '136' && $('#edadintegrante').val() <= '14'){
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
              $('#cualtrabajoinfantildiv').css('display', 'none');
              $('#cualtrabajoinfantil').removeAttr('required');
              $('#trabajoinfantil2div').css('display','none');
              $('#trabajoinfantil2').removeAttr('required');
              $('input[name="trabajoinfantil[]"]').removeAttr('required');
              $('#trabajo15a17anhosdiv').css('display', 'none');
              $('#trabajo15a17anhos').removeAttr('required');  
              $('#ingresos2div').css('display', '');
              $('#ingresos2').attr('required','required');         
              $('#ingresos3div').css('display', 'none');
              $('#ingresos3').removeAttr('required');
              $('#desempleodelargaduraciondiv').css('display', 'none');
              $('#desempleodelargaduracion').removeAttr('required');
              $('#desempleodiv').css('display', 'none');
              $('#desempleo').removeAttr('required');
              $('#intermediacionlaboraldiv').css('display', 'none');
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
              $('#endeudamiento1').removeAttr('required');
              $('#endeudamiento2div').css('display', 'none');
              $('#endeudamiento2').removeAttr('required');
              $('#endeudamiento3div').css('display', 'none');
              $('#endeudamiento3').removeAttr('required');
              $('#ocupadosdiv').css('display', 'none');
              $('#ocupados').removeAttr('required');
             }

            

             if(($('#ingresos1').val() == '135' || $('#ingresos1').val() == '' ) && ($('#edadintegrante').val() >= '15' && $('#edadintegrante').val() <= '18')){
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
              $('#cualtrabajoinfantildiv').css('display', 'none');
              $('#cualtrabajoinfantil').removeAttr('required');
              $('#trabajoinfantil2div').css('display','none');
              $('#trabajoinfantil2').removeAttr('required');
              $('#trabajo15a17anhosdiv').css('display', 'none');
              $('#trabajo15a17anhos').removeAttr('required');  
              $('#ingresos2div').css('display', 'none');
              $('#ingresos2').removeAttr('required');         
              $('#ingresos3div').css('display', 'none');
              $('#ingresos3').removeAttr('required');
              $('#desempleodelargaduraciondiv').css('display', '');
              $('#desempleodelargaduracion').attr('required','required');
              $('#desempleodiv').css('display', 'none');
              $('#desempleo').removeAttr('required');
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
              $('#endeudamiento2div').css('display', '');
              $('#endeudamiento3div').css('display', '');
              $('#emprendimiento1div').css('display', 'none');
              $('#emprendimiento1').removeAttr('required');
              $('#ocupadosdiv').css('display', 'none');
              $('#ocupados').removeAttr('required');
              $('#formalidaddelempleodiv').css('display', 'none');
              $('#formalidaddelempleo').removeAttr('required');
             }

             if(($('#ingresos1').val() == '136' ) && ($('#edadintegrante').val() >= '15' && $('#edadintegrante').val() <= '18')){
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
              $('#cualtrabajoinfantildiv').css('display', 'none');
              $('#cualtrabajoinfantil').removeAttr('required');
              $('#trabajoinfantil2div').css('display','none');
              $('#trabajoinfantil2').removeAttr('required');
              $('#trabajo15a17anhosdiv').css('display', 'none');
              $('#trabajo15a17anhos').removeAttr('required');  
              $('#ingresos3div').css('display', '');
              $('#ingresos3').attr('required','required');         
              $('#ingresos2div').css('display', 'none');
              $('#ingresos2').removeAttr('required');
              $('#desempleodelargaduraciondiv').css('display', '');
              $('#desempleodelargaduracion').attr('required','required');
              $('#desempleodiv').css('display', 'none');
              $('#desempleo').removeAttr('required');
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
              $('#ocupadosdiv').css('display', 'none');
              $('#ocupados').removeAttr('required');
              $('#formalidaddelempleodiv').css('display', 'none');
              $('#formalidaddelempleo').removeAttr('required');
             }

             if($('#ingresos1').val() == '134' && ($('#edadintegrante').val() >= '15' && $('#edadintegrante').val() <= '18')){
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
              $('#trabajoinfantil2div').css('display','none');
              $('#trabajoinfantil2').removeAttr('required');
              $('#cualtrabajoinfantildiv').css('display', 'none');
              $('#cualtrabajoinfantil').removeAttr('required');
              $('input[name="trabajoinfantil[]"]').prop('checked', false);
              $('#trabajo15a17anhosdiv').css('display', '');
              $('#trabajo15a17anhos').attr('required','required');
              $('#ocupadosdiv').css('display', '');
              $('#ocupados').attr('required','required');
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
              $('#endeudamiento2div').css('display', '');
              $('#endeudamiento3div').css('display', '');
              $('#desempleodelargaduraciondiv').css('display', 'none');
              $('#desempleodelargaduracion').removeAttr('required');
              $('#desempleodiv').css('display', 'none');
              $('#desempleo').removeAttr('required');
              $('#emprendimiento1div').css('display', 'none');
              $('#emprendimiento1').removeAttr('required');     
             }


        



            if ($('#trabajoinfantil146').is(':checked')) {
                  $('#cualtrabajoinfantildiv').css('display', '');
                  $('#cualtrabajoinfantil').attr('required', 'required');

                } else {
                  $('#cualtrabajoinfantildiv').css('display', 'none');
                  $('#cualtrabajoinfantil').removeAttr('required');

                }


// 18 a 66


                if($('#ingresos1').val() == '134' && ($('#edadintegrante').val() >= '18' && $('#edadintegrante').val() <= '66')){
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
              $('#trabajoinfantil2div').css('display','none');
              $('#trabajoinfantil2').removeAttr('required');
              $('#cualtrabajoinfantildiv').css('display', 'none');
              $('#cualtrabajoinfantil').removeAttr('required');
              $('#trabajo15a17anhosdiv').css('display', 'none');
              $('#trabajo15a17anhos').removeAttr('required');
              $('#ocupadosdiv').css('display', '');
              $('#ocupados').attr('required','required');
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
              $('#endeudamiento3div').css('display', '');
              $('#desempleodelargaduraciondiv').css('display', '');
              $('#desempleodelargaduracion').attr('required','required');
              $('#desempleodiv').css('display', 'none');
              $('#desempleo').removeAttr('required');
              $('#emprendimiento1div').css('display', 'none');
              $('#emprendimiento1').removeAttr('required');
             }

               if(($('#ingresos1').val() == '135' || $('#ingresos1').val() == '' ) && ($('#edadintegrante').val() >= '18' && $('#edadintegrante').val() <= '66')){
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
              $('#cualtrabajoinfantildiv').css('display', 'none');
              $('#cualtrabajoinfantil').removeAttr('required');
              $('#trabajoinfantil2div').css('display','none');
              $('#trabajoinfantil2').removeAttr('required');
              $('#trabajo15a17anhosdiv').css('display', 'none');
              $('#trabajo15a17anhos').removeAttr('required');  
              $('#ingresos2div').css('display', 'none');
              $('#ingresos2').removeAttr('required');         
              $('#ingresos3div').css('display', 'none');
              $('#ingresos3').removeAttr('required');
              $('#desempleodelargaduraciondiv').css('display', '');
              $('#desempleodelargaduracion').attr('required','required');
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
              $('#endeudamiento3div').css('display', '');
              $('#emprendimiento1div').css('display', 'none');
              $('#emprendimiento1').removeAttr('required');
              $('#ocupadosdiv').css('display', 'none');
              $('#ocupados').removeAttr('required');
              $('#formalidaddelempleodiv').css('display', 'none');
              $('#formalidaddelempleo').val(''); 
              $('#formalidaddelempleo').removeAttr('required');
             }

             if(($('#ingresos1').val() == '136' ) && ($('#edadintegrante').val() >= '18' && $('#edadintegrante').val() <= '66')){
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
              $('#cualtrabajoinfantildiv').css('display', 'none');
              $('#cualtrabajoinfantil').removeAttr('required');
              $('#trabajoinfantil2div').css('display','none');
              $('#trabajoinfantil2').removeAttr('required');
              $('input[name="trabajoinfantil[]"]').removeAttr('required');
              $('input[name="trabajoinfantil[]"]').prop('checked', false);
              $('#trabajo15a17anhosdiv').css('display', 'none');
              $('#trabajo15a17anhos').val(''); 
              $('#trabajo15a17anhos').removeAttr('required');  
              $('#ingresos2div').css('display', '');
              $('#ingresos2').attr('required','required');         
              $('#ingresos3div').css('display', '');
              $('#ingresos3').attr('required','required');
              $('#desempleodelargaduraciondiv').css('display', '');
              $('#desempleodelargaduracion').attr('required','required');
              $('#desempleodiv').css('display', 'none');
              $('#desempleo').removeAttr('required');
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
              $('#endeudamiento3').attr('required','required');
              $('#emprendimiento1div').css('display', 'none');
              $('#emprendimiento1').removeAttr('required');
              $('#ocupadosdiv').css('display', 'none');
              $('#ocupados').removeAttr('required');
              $('#formalidaddelempleodiv').css('display', 'none');
              $('#formalidaddelempleo').removeAttr('required');
             }


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
                $('#emprendimiento1div').css('display','none');
                $('#emprendimiento1').removeAttr('required');
              }

              if($('#endeudamiento1').val() == '1'){
                 $('#endeudamiento3div').css('display','');
                 $('#endeudamiento2div').css('display','');

               }else{
                 $('#endeudamiento3div').css('display','none');
                 $('#endeudamiento2div').css('display','none');
               }
             

             // FIN 18 a 66
             if($('#edadintegrante').val() >= '66' ){
          $('#ingresos1 option[value="134"]').hide();
          $('#ingresos1 option[value="135"]').hide();     
          console.log('mas de 66')
        }else{
            $('#ingresos1 option[value="134"]').show();
            $('#ingresos1 option[value="135"]').show();
        }


        if(($('#ingresos1').val() == '136' ) && ($('#edadintegrante').val() >= '66' )){
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
              $('#cualtrabajoinfantildiv').css('display', 'none');
              $('#cualtrabajoinfantil').removeAttr('required');
              $('#trabajoinfantil2div').css('display','none');
              $('#trabajoinfantil2').removeAttr('required');
              $('#trabajo15a17anhosdiv').css('display', 'none');
              $('#trabajo15a17anhos').removeAttr('required');  
              $('#ingresos2div').css('display', '');
              $('#ingresos2').attr('required','required');         
              $('#ingresos3div').css('display', '');
              $('#ingresos3').attr('required','required');
              $('#desempleodelargaduraciondiv').css('display', '');
              $('#desempleodelargaduracion').attr('required','required');
              $('#desempleodiv').css('display', 'none');
              $('#desempleo').removeAttr('required');
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
              $('#endeudamiento3div').css('display', '');
              $('#emprendimiento1div').css('display', 'none');
              $('#emprendimiento1').removeAttr('required');
              $('#ocupadosdiv').css('display', 'none');
              $('#ocupados').removeAttr('required');
              $('#formalidaddelempleodiv').css('display', 'none');
              $('#formalidaddelempleo').removeAttr('required');
             }

             if($('#endeudamiento1').val() == '1'){
                 $('#endeudamiento3div').css('display','');
                 $('#endeudamiento2div').css('display','');

               }else{
                 $('#endeudamiento3div').css('display','none');
                 $('#endeudamiento2div').css('display','none');
               }


               if($('#edadintegrante').val() >= '18'){
                $('#mecanismosdeproteccionddhhdiv').css('display','');
                $('#mecanismosdeproteccionddhh').attr('required','required');
                $('.mecanismosdeproteccionddhh3165').css('display','');
                $('#mecanismosdeproteccionddhh3165').css('display','');
                $('.mecanismosdeproteccionddhh3166').css('display','');
                $('#mecanismosdeproteccionddhh3166').css('display','');
                $('.mecanismosdeproteccionddhh3167').css('display','');
                $('#mecanismosdeproteccionddhh3167').css('display','');
                $('.mecanismosdeproteccionddhh3168').css('display','');
                $('#mecanismosdeproteccionddhh3168').css('display','');
                $('.mecanismosdeproteccionddhh3169').css('display','');
                $('#mecanismosdeproteccionddhh3169').css('display','');
                $('.mecanismosdeproteccionddhh3170').css('display','');
                $('#mecanismosdeproteccionddhh3170').css('display','');
                $('.mecanismosdeproteccionddhh3171').css('display','');
                $('#mecanismosdeproteccionddhh3171').css('display','');
                $('.mecanismosdeproteccionddhh3172').css('display','');
                $('#mecanismosdeproteccionddhh3172').css('display','');
                $('.mecanismosdeproteccionddhh3173').css('display','');
                $('#mecanismosdeproteccionddhh3173').css('display','');
                $('.mecanismosdeproteccionddhh3174').css('display','');
                $('#mecanismosdeproteccionddhh3174').css('display','');
                $('.mecanismosdeproteccionddhh3175').css('display','');
                $('#mecanismosdeproteccionddhh3175').css('display','');
                $('.mecanismosdeproteccionddhh3176').css('display','');
                $('#mecanismosdeproteccionddhh3176').css('display','');
                $('.mecanismosdeproteccionddhh3177').css('display','');
                $('#mecanismosdeproteccionddhh3177').css('display','');
                $('.mecanismosdeproteccionddhh3178').css('display','');
                $('#mecanismosdeproteccionddhh3178').css('display','');
                $('input[name="trabajoinfantil[]"]').prop('checked', false);
                $('#mecanismoaccionconstitucionaldiv').css('display','');
                $('#mecanismoaccionconstitucional').attr('required','required');
                
              }

               if($('#edadintegrante').val() >= '0' && $('#edadintegrante').val() <= '17'){
                 $('#mecanismosdeproteccionddhhdiv').css('display','none');
                 $('#mecanismosdeproteccionddhh').val('0');
                 $('#mecanismosdeproteccionddhh').removeAttr('required');
                 $('.mecanismosdeproteccionddhh3165').css('display','none');
                 $('#mecanismosdeproteccionddhh3165').css('display','none');
                 $('.mecanismosdeproteccionddhh3166').css('display','none');
                 $('#mecanismosdeproteccionddhh3166').css('display','none');
                 $('.mecanismosdeproteccionddhh3167').css('display','none');
                 $('#mecanismosdeproteccionddhh3167').css('display','none');
                 $('.mecanismosdeproteccionddhh3168').css('display','none');
                 $('#mecanismosdeproteccionddhh3168').css('display','none');
                 $('.mecanismosdeproteccionddhh3169').css('display','none');
                 $('#mecanismosdeproteccionddhh3169').css('display','none');
                 $('.mecanismosdeproteccionddhh3170').css('display','none');
                 $('#mecanismosdeproteccionddhh3170').css('display','none');
                 $('.mecanismosdeproteccionddhh3171').css('display','none');
                 $('#mecanismosdeproteccionddhh3171').css('display','none');
                 $('.mecanismosdeproteccionddhh3172').css('display','none');
                 $('#mecanismosdeproteccionddhh3172').css('display','none');
                 $('.mecanismosdeproteccionddhh3173').css('display','none');
                 $('#mecanismosdeproteccionddhh3173').css('display','none');
                 $('.mecanismosdeproteccionddhh3174').css('display','none');
                 $('#mecanismosdeproteccionddhh3174').css('display','none');
                 $('.mecanismosdeproteccionddhh3175').css('display','none');
                 $('#mecanismosdeproteccionddhh3175').css('display','none');
                 $('.mecanismosdeproteccionddhh3176').css('display','none');
                 $('#mecanismosdeproteccionddhh3176').css('display','none');
                 $('.mecanismosdeproteccionddhh3177').css('display','none');
                 $('#mecanismosdeproteccionddhh3177').css('display','none');
                 $('.mecanismosdeproteccionddhh3178').css('display','none');
                 $('#mecanismosdeproteccionddhh3178').css('display','none');
                 $('#mecanismosdeproteccionddhh3div').css('display','none');
                 $('input[name="trabajoinfantil[]"]').prop('checked', false);
                 $('#mecanismoaccionconstitucionaldiv').css('display','none');
                 $('#mecanismoaccionconstitucional').val('0');
                 $('#mecanismoaccionconstitucional').removeAttr('required');
                 $('#menorespreguntaslegaldiv').css('display','');
                 
            
              }

         },
        error: function(xhr, status, error) {
                  console.log(xhr.responseText);
              }
      })
      })

      $('#siguiente').click(function(){
        console.log('click');
        $('#identatario').tab('show');  
        
      }); 
      $('#siguiente2').click(function(){
        console.log('click');
        $('#financiero').tab('show');  
        
      });
      $('#siguiente3').click(function(){
        console.log('click');
        $('#legal').tab('show');  
        
      });
    
      $('#atras').click(function(){
        console.log('click');
        $('#identificacion').tab('show');  
      }); 
      $('#atras2').click(function(){
        console.log('click');
        $('#identatario').tab('show');  
      });
      $('#atras3').click(function(){
        console.log('click');
        $('#financiero').tab('show');  
      });   
      


      $('#volver').click(function(){
        redirectToIntegrantes()
      });

      $('#volver2').click(function(){
        redirectToIntegrantes()
      });

      function convertirAMayusculas(element) {
            element.value = element.value.toUpperCase();
        }

      function redirectToIntegrantes() {
           var folio = window.localStorage.getItem('folioencriptado');
           var url = "../public/integrantes/:folio";
           url = url.replace(':folio', folio);
           window.location.href = url;
       }

       $('input[name="acceso3[]"]').change(function() {
        if ($('input[name="acceso3[]"]:visible:checked').length > 0) {
          $('input[name="acceso3[]"]').removeAttr('required');
        }else{
          $('input[name="acceso3[]"]').attr('required', 'required');

        }
      });

      $('input[name="consumospa3[]"]').change(function() {
      if ($('input[name="consumospa3[]"]:visible:checked').length > 0) {
          $('input[name="consumospa3[]"]').removeAttr('required');
        }else{
          $('input[name="consumospa3[]"]').attr('required', 'required');
        }
      });

      $('input[name="consumospa6[]"]').change(function() {
      if ($('input[name="consumospa6[]"]:visible:checked').length > 0) {
          $('input[name="consumospa6[]"]').removeAttr('required');
        }else{
          $('input[name="consumospa6[]"]').attr('required', 'required');
        }
      });
      $('input[name="psicosocial1[]"]').change(function() {
      if ($('input[name="psicosocial1[]"]:visible:checked').length > 0) {
          $('input[name="psicosocial1[]"]').removeAttr('required');
        }else{
          $('input[name="psicosocial1[]"]').attr('required', 'required');
        }
      });
      $('input[name="psicosocial2[]"]').change(function() {
      if ($('input[name="psicosocial2[]"]:visible:checked').length > 0) {
          $('input[name="psicosocial2[]"]').removeAttr('required');
        }else{
          $('input[name="psicosocial2[]"]').attr('required', 'required');
        }
      });

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

      $('input[name="mecanismosdeproteccionddhh3[]"]').change(function() {
      if ($('input[name="mecanismosdeproteccionddhh3[]"]:visible:checked').length > 0) {
          $('input[name="mecanismosdeproteccionddhh3[]"]').removeAttr('required');
        }else{
          $('input[name="mecanismosdeproteccionddhh3[]"]').attr('required', 'required');
        }
      });

       $(document).ready(function() {
        $('#formfisicoyemocional').on('submit', function(event) {
       

          
        event.preventDefault(); // Detiene el envío del formulario
        var formData = $(this).serializeArray();
        var data = {
              'acceso3': [
                  { id: '47', valor: 'NO' },
                  { id: '48', valor: 'NO' },
                  { id: '49', valor: 'NO' },
                  { id: '50', valor: 'NO' },
                  { id: '51', valor: 'NO' },
                  { id: '52', valor: 'NO' },
                  { id: '53', valor: 'NO' },
                  { id: '54', valor: 'NO' },
                  { id: '55', valor: 'NO' },
                  { id: '56', valor: 'NO' },
                  { id: '57', valor: 'NO' },
                  { id: '58', valor: 'NO' },
                  { id: '59', valor: 'NO' },
                  { id: '60', valor: 'NO' },
                  { id: '61', valor: 'NO' },

              ],
              'consumospa3': [
                  { id: '71', valor: 'NO' },
                  { id: '72', valor: 'NO' },
                  { id: '73', valor: 'NO' },
                  { id: '74', valor: 'NO' },
              ],
              'consumospa6': [
                  { id: '81', valor: 'NO' },
                  { id: '82', valor: 'NO' },
                  { id: '83', valor: 'NO' },
                  { id: '84', valor: 'NO' },
                  { id: '85', valor: 'NO' },
                  { id: '86', valor: 'NO' }, 
              ],
              'psicosocial1': [
                  { id: '87', valor: 'NO' },
                  { id: '88', valor: 'NO' },
                  { id: '89', valor: 'NO' },
                  { id: '90', valor: 'NO' },
                  { id: '91', valor: 'NO' },
              ],
              'psicosocial2': [
                  { id: '92', valor: 'NO' },
                  { id: '93', valor: 'NO' },
                  { id: '94', valor: 'NO' },
                  { id: '95', valor: 'NO' },
                  { id: '96', valor: 'NO' },
                  { id: '97', valor: 'NO' },
                  { id: '98', valor: 'NO' },
                  { id: '99', valor: 'NO' },
                  { id: '100', valor: 'NO' },
                  { id: '101', valor: 'NO' },
                  { id: '102', valor: 'NO' },
                  { id: '103', valor: 'NO' },
                  { id: '104', valor: 'NO' },
                  { id: '105', valor: 'NO' },
                  { id: '106', valor: 'NO' }, 
              ],
             
          };

          $(formData).each(function(index, obj) {
    var name = obj.name.replace('[]', '');
    var selector = '[name="' + obj.name + '"][value="' + obj.value + '"]';
   // var respuesta = $(selector).attr('respuesta') || 'NO APLICA'; // Asegura obtener correctamente 'respuesta' o 'NO APLICA'
   var element = $(selector);
   var respuesta = element.is(':hidden') ? 'NO APLICA' : (element.attr('respuesta') || 'NO APLICA'); // Verifica si el elemento está oculto
    console.log(respuesta, 'respuesta');

    if (name === 'acceso3' || name === 'consumospa3' || name === 'consumospa6' 
    || name === 'psicosocial1'|| name === 'psicosocial2' ) {
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

// Asegurar que todos los elementos en `acceso3` tienen un valor de 'respuesta'
data['acceso3'].forEach(item => {
            var selector = '[name="acceso3[]"][value="' + item.id + '"]';
            if ($(selector).length === 0 || $(selector).is(':hidden')) {
                item.valor = 'NO APLICA';
            }
        });

  data['consumospa3'].forEach(item => {
      var selector = '[name="consumospa3[]"][value="' + item.id + '"]';
      if ($(selector).length === 0 || $(selector).is(':hidden')) {
          item.valor = 'NO APLICA';
      }
  });

  data['consumospa6'].forEach(item => {
      var selector = '[name="consumospa6[]"][value="' + item.id + '"]';
      if ($(selector).length === 0 || $(selector).is(':hidden')) {
          item.valor = 'NO APLICA';
      }
  });

  data['psicosocial1'].forEach(item => {
      var selector = '[name="psicosocial1[]"][value="' + item.id + '"]';
      if ($(selector).length === 0 || $(selector).is(':hidden')) {
          item.valor = 'NO APLICA';
      }
  });

  data['psicosocial2'].forEach(item => {
      var selector = '[name="psicosocial2[]"][value="' + item.id + '"]';
      if ($(selector).length === 0 || $(selector).is(':hidden')) {
          item.valor = 'NO APLICA';
      }
  });




        console.log(data);

        // Enviar los datos usando AJAX
        $.ajax({
            url: './fisicoyemocional',
            method: $(this).attr('method'),
            data: {data: data},
            success: function(response) {
              $('#siguiente').css('display','');
              $('#identatario').removeAttr('disabled');
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    });

    $('#formintelectual').on('submit', function(event) {
        event.preventDefault(); // Detiene el envío del formulario
        
        var formData = $(this).serializeArray();
        var data = {};

        $(formData).each(function(index, obj) {
            // Verificar si el nombre ya existe en el objeto de datos
            if (data[obj.name]) {
                // Si ya existe, verificar si es un array
                if (Array.isArray(data[obj.name])) {
                    // Si es un array, agregar el nuevo valor al array
                    data[obj.name].push(obj.value);
                } else {
                    // Si no es un array, convertirlo en un array y agregar el nuevo valor
                    data[obj.name] = [data[obj.name], obj.value];
                }
            } else {
                // Si no existe, simplemente agregarlo al objeto de datos
                data[obj.name] = obj.value;
            }
        });

        $.ajax({
            url: './intelectual',
            method: $(this).attr('method'),
            data: {data: data},
            success: function(response) {
              $('#siguiente2').css('display','');
              $('#identatario').removeAttr('disabled');
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
        
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
    console.log(respuesta, 'respuesta');

    if (name === 'trabajoinfantil'  || name === 'bancarizacion' || name === 'mecanismosdeproteccionddhh3') {
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
              $('#siguiente3').css('display','');
              $('#identatario').removeAttr('disabled');
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    });


    $('#formlegal').on('submit', function(event) {
      event.preventDefault(); // Detiene el envío del formulario
      var formData = $(this).serializeArray();
        var data = {
          'mecanismosdeproteccionddhh3': [
                            { id: '165', valor: 'NO' },
                            { id: '166', valor: 'NO' },
                            { id: '167', valor: 'NO' },
                            { id: '168', valor: 'NO' },
                            { id: '169', valor: 'NO' },
                            { id: '170', valor: 'NO' },
                            { id: '171', valor: 'NO' },
                            { id: '172', valor: 'NO' },
                            { id: '173', valor: 'NO' },
                            { id: '174', valor: 'NO' },
                            { id: '175', valor: 'NO' },
                            { id: '176', valor: 'NO' },
                            { id: '177', valor: 'NO' },
                            { id: '178', valor: 'NO' },
                        ]
            };
  $(formData).each(function(index, obj) {
    var name = obj.name.replace('[]', '');
    var selector = '[name="' + obj.name + '"][value="' + obj.value + '"]';
   // var respuesta = $(selector).attr('respuesta') || 'NO APLICA'; // Asegura obtener correctamente 'respuesta' o 'NO APLICA'
   var element = $(selector);
   var respuesta = element.is(':hidden') ? 'NO APLICA' : (element.attr('respuesta') || 'NO APLICA'); // Verifica si el elemento está oculto
    console.log(respuesta, 'respuesta');

    if ( name === 'mecanismosdeproteccionddhh3') {
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
 data['mecanismosdeproteccionddhh3'].forEach(item => {
      var selector = '[name="mecanismosdeproteccionddhh3[]"][value="' + item.id + '"]';
      if ($(selector).length === 0 || $(selector).is(':hidden')) {
          item.valor = 'NO APLICA';
      }
  });

        $.ajax({
            url: './legal',
            method: $(this).attr('method'),
            data: {data: data},
            success: function(response) {
              $('#volver').css('display','');
              $('#identatario').removeAttr('disabled');
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
        
    });
       

    function enviarDatos(data) {
        console.log('Datos del formulario:', data);
        $.ajax({
                    url:'./guardarintegrante',
                    data:{data},
                    method: "GET",
                    dataType:'JSON',
                    success:function(data){
                      $('#siguiente').css('display','');
                      $('#identatario').removeAttr('disabled');
                      console.log('okl')
                    },
                    error: function(xhr, status, error) {
                              console.log(xhr.responseText);
                          }
                  })
    }

    function enviarDatos2(data) {
        console.log('Datos del formulario:', data);
        $.ajax({
                    url:'./guardarintegrante',
                    data:{data},
                    method: "GET",
                    dataType:'JSON',
                    success:function(data){
                      $('#volver2').css('display','');
                      console.log('okl')
                    },
                    error: function(xhr, status, error) {
                              console.log(xhr.responseText);
                          }
                  })
    }


   
});


    </script>
 

@endsection