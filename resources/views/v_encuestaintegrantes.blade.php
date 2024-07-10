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
    <span class="badge bg-primary" style="background:#0dcaf0 !important; color:white" id="nombre"></span><br>
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
            <label for="validationServer04" class="form-label">¿Cuenta con afiliación al sistema de salud?</label>
            <select class="form-control form-control-sm" id="regimendesalud" name="regimendesalud" aria-describedby="validationServer04Feedback" required="">
              {{!!$regimendesalud!!}}
          </select>
          </div>
          <div class="col-md-12">
            <label for="validationServer04" class="form-label">¿En el último mes ha tenido alguna enfermedad, accidente o problema odontológico que no implicó hospitalización?</label>
            <select class="form-control form-control-sm" id="acceso1" name="acceso1" aria-describedby="validationServer04Feedback" required="">
            {{!!$sino!!}}
                      </select>
          </div>
          <div class="col-md-12 acceso2">
            <label for="validationServer04" class="form-label ">¿Accedió al servicios en su EPS, IPS o servicio particular según esa necesidad?</label>
            <select class="form-control form-control-sm" id="acceso2" name="acceso2" aria-describedby="validationServer04Feedback" required="">
            {{!!$sino!!}}
          </select>
          </div></br>
          <div class="col-md-12">
            <label for="validationServer04" class="form-label">¿Accede a servicios de salud según su edad y necesidad?</label>
            <div class="form-check form-switch" id='acceso3-container'>
                {!!$acceso3!!}
               </div>
          </div>
          <div class="col-md-6">
            <label for="validationServer04" class="form-label">¿Presenta algún tipo de discapacidad?</label>
            <select class="form-control form-control-sm" id="discapacidad" aria-describedby="validationServer04Feedback" name="discapacidad" required="">
            {{!!$sino!!}}
          </select>
          </div>
          <div class="col-md-6">
            <label for="validationServer04" class="form-label">¿Qué tipo de discapacidad presenta?</label>
            <select class="form-control form-control-sm" id="tipodediscapacidad" aria-describedby="validationServer04Feedback" name="tipodediscapacidad" required="">
            {{!!$tipodediscapacidad!!}}
          </select>
          </div>

          <div class="col-md-6">
            <label for="validationServer04" class="form-label">¿Accede o ha accedido a los servicios de salud  según su necesidad?
            </label>
            <select class="form-control form-control-sm" id="atenciondiscapacidad" name="atenciondiscapacidad" aria-describedby="validationServer04Feedback" required="">
            {{!!$atenciondiscapacidad!!}}
          </select>
          </div>
          <div class="col-md-6">
                  <label for="validationServer04" class="form-label">¿Cuenta con certificado de discapacidad?</label>
                  <select class="form-control form-control-sm" id="certificadodiscapacidad" name="certificadodiscapacidad" aria-describedby="validationServer04Feedback" required="">
                  {{!!$sino!!}}
                </select>
                </div>
                <div class="col-md-12">
                  <label for="validationServer04" class="form-label">¿Presenta consumo SPA? (incluyendo sustancias legales como el tabajo y el alcohol).</label>
                  <select class="form-control form-control-sm" id="consumospa1" name="consumospa1" aria-describedby="validationServer04Feedback" required="">
                  {{!!$sino!!}}
                </select>
                </div>
                <div class="col-md-12">
                  <label for="validationServer04" class="form-label">¿Ha accedido a servicios de intervención frente al consumo SPA y sus consecuencias?</label>
                  <select class="form-control form-control-sm" id="consumospa2" name="consumospa2" aria-describedby="validationServer04Feedback" required="">
                  {{!!$sino!!}}
                </select>
                </div><br>
                <div class="col-md-12">
                  <label for="validationServer04" class="form-label">¿Qué tipo de sustancia consume?</label>
                    <div class="form-check" id="container-consumospa3">
                      {!!$consumospa3!!} 
                    </div>
                </div><br>
                <div class="col-md-6">
                  <label for="validationServer04" class="form-label">¿Qué tipo de consumo presenta?</label>
                  <select class="form-control form-control-sm" id="consumospa4" name="consumospa4" aria-describedby="validationServer04Feedback" required="">
                  {{!!$consumospa4!!}}
                  </select>
                </div>
                <div class="col-md-6">
                  <label for="validationServer04" class="form-label">¿Cuál es el principal motivo de su consumo?</label>
                  <select class="form-control form-control-sm" id="consumospa5" name="consumospa5" aria-describedby="validationServer04Feedback" required="">
                  {{!!$consumospa5!!}} 
                </select>
                </div>
                <div class="col-md-12">
                  <label for="validationServer04" class="form-label">¿Ha tenido alguna consecuencia negativa debido al consumo?</label>
                  <div class="form-check" id="container-consumospa6">
                      {!!$consumospa6!!} 
                    </div>
                </div>
                <div class="col-md-12">
                  <label for="validationServer04" class="form-label">¿El integrante del hogar  accede a servicios de salud mental, asesorias, terapias y/o atención psicosocial?</label>
                  <div class="form-check" id="container-psicosocial1">
                      {!!$psicosocial1!!} 
                    </div>
                </div>
                <div class="col-md-12">
                  <label for="validationServer04" class="form-label">¿Qué estrategias implementa para  reducir el estrés y  para favorecer el bienestar emocional y fisico?</label>
                  <div class="form-check" id="container-psicosocial2">
                      {!!$psicosocial2!!} 
                    </div>
                </div>
                <div class="col-md-12">
                  <label for="validationServer04" class="form-label">¿El integrante del hogar tiene plan exequial?</label>
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
        <div class="col-md-4">
                  <label for="validationServer04" class="form-label">¿Sabe leer y escribir?</label>
                  <select class="form-control form-control-sm" id="alfabetizacion" name="alfabetizacion" aria-describedby="validationServer04Feedback" required="">
                    {{!!$sino!!}}
                </select>
                </div>
        
          <div class="col-md-4">
            <label for="validationServer04" class="form-label">¿Está estudiando actualmente?</label>
            <select class="form-control form-control-sm" id="educacion" name="educacion" aria-describedby="validationServer04Feedback" required="">
            {{!!$sino!!}}            
          </select>
          </div>
          <div class="col-md-4">
            <label for="validationServer04" class="form-label">¿Cuál es su nivel educativo alcanzado?</label>
            <select class="form-control form-control-sm" id="niveleducativo1" name="niveleducativo1" aria-describedby="validationServer04Feedback" required="">
            {{!!$niveleducativo1!!}}     
                </select>
          </div>
          <div class="col-md-6">
            <label for="validationServer04" class="form-label">¿Cuál fue el último grado alcanzado?</label>
            <select class="form-control form-control-sm" id="niveleducativo2" name="niveleducativo2" aria-describedby="validationServer04Feedback" required="">
            {{!!$niveleducativo2!!}}         
             </select>
          </div>
          <div class="col-md-6">
            <label for="validationServer04" class="form-label">¿Cuál es el titulo obtenido?</label>
            <input type="text"  class="form-control form-control-sm  " id="niveleducativo5" name="niveleducativo5" value="" >
          </div>
          <div class="col-md-12">
            <label for="validationServer04" class="form-label">¿El integrantes del hogar que no ha completado su educación básica accede a programas de alfabetización y/o educación para adultos?</label>
            <select class="form-control form-control-sm" id="niveleducativo3" name="niveleducativo3" aria-describedby="validationServer04Feedback" required="">
            {{!!$sino!!}}    
          </select>
          </div>
          <div class="col-md-12">
            <label for="validationServer04" class="form-label">¿El integrante del hogar desea continuar con su formación post secundaria?</label>
            <select class="form-control form-control-sm" id="niveleducativo4" name="niveleducativo4" aria-describedby="validationServer04Feedback" required="">
            {{!!$sino!!}}    
          </select>
          </div>
          <div class="col-md-12">
            <label for="validationServer04" class="form-label">¿El integrantes del hogar mayor de 16 años desea acceder a educación para el trabajo y el desarrollo humano?</label>
            <select class="form-control form-control-sm" id="deseaaccedereducacion" name="deseaaccedereducacion" aria-describedby="validationServer04Feedback" required="">
            {{!!$sino!!}}
                      </select>
          </div>
          <div class="col-md-12">
            <label for="validationServer04" class="form-label">¿Conoce el manejo de las TIC?</label>
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
                  <label for="validationServer04" class="form-label">¿Realiza actividades que le generen ingresos económicos?</label>
                  <select class="form-control form-control-sm" id="ingresos1" name="ingresos1" aria-describedby="validationServer04Feedback" required="">
                    {{!!$ingresos1!!}}
                </select>
                </div>
        
          <div class="col-md-12">
            <label for="validationServer04" class="form-label">¿Cuáles de las siguientes actividades realiza para obtener ingresos?</label>
            <div class="form-check" id="container-trabajoinfantil">
                      {!!$trabajoinfantil!!} 
                    </div>
          </div>
          <div class="col-md-6">
            <label for="validationServer04" class="form-label">¿Tiene permiso del ministerio de trabajo?</label>
            <select class="form-control form-control-sm" id="trabajo15a17anhos" name="trabajo15a17anhos" aria-describedby="validationServer04Feedback" required="">
            {{!!$sino!!}}     
                </select>
          </div>
          <div class="col-md-6">
            <label for="validationServer04" class="form-label">¿De cuál actividad derivan sus ingresos?</label>
            <select class="form-control form-control-sm" id="ocupados" name="ocupados" aria-describedby="validationServer04Feedback" required="">
            {{!!$ocupados!!}}         
             </select>
          </div>
          <div class="col-md-6">
            <label for="validationServer04" class="form-label">¿Cotiza a fondo de pensiones?</label>
            <select class="form-control form-control-sm" id="formalidaddelempleo" name="formalidaddelempleo" aria-describedby="validationServer04Feedback" required="">
            {{!!$sino!!}}     
          </select>
          </div>
          <div class="col-md-12">
            <label for="validationServer04" class="form-label">¿A cuánto ascienden sus ingresos fijos al mes?   (ingresos por alguna renta o pensión de jubilación, subsidios, etc)</label>
            <input type="number"  class="form-control form-control-sm  " id="ingresos2" name="ingresos2" value="" required="">
          </div>
          <div class="col-md-12">
            <label for="validationServer04" class="form-label">¿A cuánto ascienden sus ingresos fijos al mes? (horas extras, comisiones, premios, ganancia por alguna inversión que haga, trabajos independientes)</label>
            <input type="number"  class="form-control form-control-sm  " id="ingresos3" name="ingresos3" value="" required="">
          </div>
          <div class="col-md-6">
            <label for="validationServer04" class="form-label">¿Cuántos meses lleva desempleado?</label>
            <input type="number"  class="form-control form-control-sm  " id="desempleodelargaduracion" name="desempleodelargaduracion" value="" required="">
          </div>
          <div class="col-md-6">
            <label for="validationServer04" class="form-label">¿Qué expectativa tiene para generar ingresos?</label>
            <select class="form-control form-control-sm" id="desempleo" name="desempleo" aria-describedby="validationServer04Feedback" required="">
            {{!!$desempleo!!}}
          </select>
          </div>
          <div class="col-md-12">
            <label for="validationServer04" class="form-label">¿Ha accedido a servicios de intermediación laboral?</label>
            <select class="form-control form-control-sm" id="intermediacionlaboral" name="intermediacionlaboral" aria-describedby="validationServer04Feedback" required="">
            {{!!$sino!!}}
          </select>
          </div>
          <div class="col-md-12">
            <label for="validationServer04" class="form-label">¿Ha recibido educación o asistido a programas de formación y/o apoyo al emprendimiento e innovación?</label>
            <select class="form-control form-control-sm" id="emprendimiento1" name="emprendimiento1" aria-describedby="validationServer04Feedback" required="">
            {{!!$sino!!}}
          </select>
          </div>
          <div class="col-md-12">
            <label for="validationServer04" class="form-label">¿Cuáles mecanismos o productos financieros conoce y ha usado o usa en la actualidad?</label>
            <div class="form-check" id="container-bancarizacion">
                      {!!$bancarizacion!!} 
                    </div>
          </div>
          <div class="col-md-12">
            <label for="validationServer04" class="form-label">¿Actualmente tiene deudas?</label>
            <select class="form-control form-control-sm" id="endeudamiento1" name="endeudamiento1" aria-describedby="validationServer04Feedback" required="">
            {{!!$sino!!}}
          </select>
          </div>
          <div class="col-md-12" >
          <label for="validationServer04" class="form-label">A cuánto equivalen las deudas que tienen actualmente?</label>
            <input type="number"  class="form-control form-control-sm  " id="endeudamiento3" name="endeudamiento3" value="" required="">
          </div>
          <div class="col-md-12">
            <label for="validationServer04" class="form-label">¿Está interesado en refinanciar todas sus deudas y consolidarlas en un solo crédito?</label>
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
        <div class="col-md-12">
                  <label for="validationServer04" class="form-label">¿Conoce las instituciones de administración de justicia y de garantía de derechos existentes en el territorio?</label>
                  <select class="form-control form-control-sm" id="mecanismosdeproteccionddhh" name="mecanismosdeproteccionddhh" aria-describedby="validationServer04Feedback" required="">
                    {{!!$sino!!}}
                </select>
                </div>
        
          <div class="col-md-12">
            <label for="validationServer04" class="form-label">¿De cuáles de las siguientes instituciones para la protección y garantía de sus derechos ha hecho uso?</label>
            <div class="form-check" id="container-mecanismosdeproteccionddhh3">
                      {!!$mecanismosdeproteccionddhh3!!} 
                    </div>
          </div>
          <div class="col-md-12">
            <label for="validationServer04" class="form-label">¿Ha usado alguno de los mecanismo o acción constitucional para la protección de los derechos humanos?</label>
            <select class="form-control form-control-sm" id="mecanismoaccionconstitucional" name="mecanismoaccionconstitucional" aria-describedby="validationServer04Feedback" required="">
            {{!!$sino!!}}     
                </select>
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
      <img src="{{asset('avatares/1.png')}}" id="3" class="rounded-circle imagenDinamicaselect" onclick="agregarImagen('3')" alt="Avatar" style="width: 150px; height: 150px;">
      <img src="{{asset('avatares/1.png')}}" id="4" class="rounded-circle imagenDinamicaselect" onclick="agregarImagen('4')" alt="Avatar" style="width: 150px; height: 150px;">
      <img src="{{asset('avatares/1.png')}}" id="5" class="rounded-circle imagenDinamicaselect" onclick="agregarImagen('5')" alt="Avatar" style="width: 150px; height: 150px;">
      <img src="{{asset('avatares/1.png')}}" id="6" class="rounded-circle imagenDinamicaselect" onclick="agregarImagen('6')" alt="Avatar" style="width: 150px; height: 150px;">
      <img src="{{asset('avatares/1.png')}}" id="7" class="rounded-circle imagenDinamicaselect" onclick="agregarImagen('7')" alt="Avatar" style="width: 150px; height: 150px;">
      <img src="{{asset('avatares/1.png')}}" id="8" class="rounded-circle imagenDinamicaselect" onclick="agregarImagen('8')" alt="Avatar" style="width: 150px; height: 150px;">
      <img src="{{asset('avatares/1.png')}}" id="9" class="rounded-circle imagenDinamicaselect" onclick="agregarImagen('9')" alt="Avatar" style="width: 150px; height: 150px;">
      <img src="{{asset('avatares/1.png')}}" id="10" class="rounded-circle imagenDinamicaselect" onclick="agregarImagen('10')" alt="Avatar" style="width: 150px; height: 150px;">
      <img src="{{asset('avatares/1.png')}}" id="11" class="rounded-circle imagenDinamicaselect" onclick="agregarImagen('11')" alt="Avatar" style="width: 150px; height: 150px;">
      <img src="{{asset('avatares/1.png')}}" id="12" class="rounded-circle imagenDinamicaselect" onclick="agregarImagen('12')" alt="Avatar" style="width: 150px; height: 150px;">
      <img src="{{asset('avatares/1.png')}}" id="13" class="rounded-circle imagenDinamicaselect" onclick="agregarImagen('13')" alt="Avatar" style="width: 150px; height: 150px;">

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
    $('.acceso2').css('display','none');
    $('#acceso1').click(function(){
      if($('#acceso1').val() == '2'){
        $('.acceso2').css('display','none');
        $('#acceso2').attr('required',false)
      }else{
        $('.acceso2').css('display','');
        $('#acceso2').attr('required',true)

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
                    let acceso3 = JSON.parse(data.integrantes.acceso3); // ["49", "54"]
                    let consumospa3 = JSON.parse(data.integrantes.consumospa3); // ["49", "54"]
                    let consumospa6 = JSON.parse(data.integrantes.consumospa6); // ["49", "54"]
                    let psicosocial1 = JSON.parse(data.integrantes.psicosocial1); // ["49", "54"]
                    let psicosocial2 = JSON.parse(data.integrantes.psicosocial2); // ["49", "54"]
                    
                    let trabajoinfantil = JSON.parse((data.integrantesfinanciero)?data.integrantesfinanciero.trabajoinfantil:'{}'); // ["49", "54"]
                    let bancarizacion = JSON.parse((data.integrantesfinanciero)?data.integrantesfinanciero.bancarizacion:'{}'); // ["49", "54"]
                    let mecanismosdeproteccionddhh3 = JSON.parse((data.integranteslegal)?data.integranteslegal.mecanismosdeproteccionddhh3:'{}'); // ["49", "54"]

                  console.log(trabajoinfantil)
                  

                // Iterar sobre todos los checkboxes en el contenedor y marcar/desmarcar según los valores seleccionados
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
                });

                $('#container-consumospa3 input[type="checkbox"]').each(function() {
                  let found = consumospa3.find(item => item.id === this.value );
                  console.log(found.valor, 'aca valor')
                          if (found.valor == 'SI') { 
                            $(this).prop('checked', true);
                            $(this).attr('respuesta', 'SI');  // Establecer 'respuesta' a 'NO APLICA' solo si el valor es 'si'
                          } else {
                            $(this).attr('respuesta', 'SI');  // Establecer 'respuesta' con el valor correspondiente
                          }
                });
                $('#container-consumospa6 input[type="checkbox"]').each(function() {
                  let found = consumospa6.find(item => item.id === this.value );
                  console.log(found.valor, 'aca valor')
                          if (found.valor == 'SI') { 
                            $(this).prop('checked', true);
                            $(this).attr('respuesta', 'SI');  // Establecer 'respuesta' a 'NO APLICA' solo si el valor es 'si'
                          } else {
                            $(this).attr('respuesta', 'SI');  // Establecer 'respuesta' con el valor correspondiente
                          }
                });
                $('#container-psicosocial1 input[type="checkbox"]').each(function() {
                  let found = psicosocial1.find(item => item.id === this.value );
                  console.log(found.valor, 'aca valor')
                          if (found.valor == 'SI') { 
                            $(this).prop('checked', true);
                            $(this).attr('respuesta', 'SI');  // Establecer 'respuesta' a 'NO APLICA' solo si el valor es 'si'
                          } else {
                            $(this).attr('respuesta', 'SI');  // Establecer 'respuesta' con el valor correspondiente
                          }
                });

                $('#container-psicosocial2 input[type="checkbox"]').each(function() {
                  let found = psicosocial2.find(item => item.id === this.value );
                  console.log(found.valor, 'aca valor')
                          if (found.valor == 'SI') { 
                            $(this).prop('checked', true);
                            $(this).attr('respuesta', 'SI');  // Establecer 'respuesta' a 'NO APLICA' solo si el valor es 'si'
                          } else {
                            $(this).attr('respuesta', 'SI');  // Establecer 'respuesta' con el valor correspondiente
                          }
                });

                if(Array.isArray(trabajoinfantil) && trabajoinfantil.length > 0) {
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

              // BIENESTAR LEGAL

           $('#mecanismosdeproteccionddhh').val((data.integranteslegal)?data.integranteslegal.mecanismosdeproteccionddhh:'');
           $('#mecanismosdeproteccionddhh3').val((data.integranteslegal)?data.integranteslegal.mecanismosdeproteccionddhh3:'');
           $('#mecanismoaccionconstitucional').val((data.integranteslegal)?data.integranteslegal.mecanismoaccionconstitucional:'');


          

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