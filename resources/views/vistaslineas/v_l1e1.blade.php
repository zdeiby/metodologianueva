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
            <!-- <div class="progress">
                <div class="progress-bar bg-success" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div> -->
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
        <a id="conformacionfamiliarmenu" class="nav-link active" data-bs-toggle="tab" href="#conformacionfamiliar" aria-selected="true" role="tab" tabindex="-1">CONFORMACIÓN FAMILIAR
        </a>
      </li>
  <li class="nav-item" role="presentation">
    <a id="datosgeograficosmenu"  class="nav-link " data-bs-toggle="tab" href="#datosgeograficos" aria-selected="false" role="tab" tabindex="-1">DATOS GEOGRAFICOS Y ECONÓMICOS</a>
  </li>
  <li class="nav-item" role="presentation">
    <a id="condicioneshabitabilidadmenu"  class="nav-link " data-bs-toggle="tab" href="#tabla3" aria-selected="false" role="tab" tabindex="-1">CONDICIONES DE HABITABILIDAD</a>
  </li>
  <li class="nav-item" role="presentation">
    <a id="accesoalimentosmenu"  class="nav-link " data-bs-toggle="tab" href="#accesoalimentos" aria-selected="false" role="tab" tabindex="-1">ACCESO Y DISPONIBILIDAD DE ALIMENTOS</a>
  </li>
  <li class="nav-item" role="presentation">
    <a id="entornofamiliarmenu"  class="nav-link " data-bs-toggle="tab" href="#entornofamiliar" aria-selected="false" role="tab" tabindex="-1"> ENTORNO FAMILIAR</a>
  </li>
  
</ul>



<div id="myTabContent" class="tab-content"><br>
  <div class="tab-pane fade active show" id="conformacionfamiliar" role="tabpanel" aria-labelledby="conformacionfamiliar">
    <!-- <div class="text-center"><label for="">Avatar</label></div>


        <div class="avatar text-center" style="cursor:pointer">
          <img src="{{asset('avatares/blanco.png')}} " id="imagenDinamica" class="rounded-circle" alt="Avatar" style="width: 150px; height: 150px;" data-bs-toggle="modal" data-bs-target="#exampleModal">
        </div> -->

          <form id="formfisicoyemocional" class="row g-3 was-validated">     
            
          <div class="col-md-3" style="display:none">
            <input type="text" placeholder="folio" class="form-control form-control-sm  " id="folioinput" name="folio" value="" >
          </div>
          <div class="col-md-3" style="display:none">
            <input type="text"  class="form-control form-control-sm  " id="idintegrante1" name="idintegrante" value="" >
          </div>

          <div class="col-md-12">
            <label for="validationServer04" class="form-label">¿Cuál de las siguientes tipologías describe mejor la estructura de tu familia?</label>
            <select class="form-control form-control-sm" id="tipologia" name="tipologia" aria-describedby="validationServer04Feedback" required="">
            {{!!$tipologia!!}}
          </select>
          </div>
          <div class="col-md-12">
            <label for="validationServer04" class="form-label">¿En el hogar tienen mascotas?</label>
            <select class="form-control form-control-sm" id="familiamultiespecie1" name="familiamultiespecie1" aria-describedby="validationServer04Feedback" required="">
            {{!!$sino!!}}
                      </select>
          </div>
          <div class="col-md-12 familiamultiespecie2">
            <label for="validationServer04" class="form-label ">¿En el hogar consideran la mascota(s) parte de la familia?</label>
            <select class="form-control form-control-sm" id="familiamultiespecie2" name="familiamultiespecie2" aria-describedby="validationServer04Feedback" required="">
            {{!!$sino!!}}
          </select>
          </div></br>
          <div class="col-md-12">
            <label for="validationServer04" class="form-label">¿Tu hogar se encuentra en alguna de las siguientes condiciones?</label>
            <div class="form-check form-switch" id='condicionespecial-container'>
                {!!$condicionespecial!!}
               </div>
          </div>
          <div class="col-md-12">
            <label for="validationServer04" class="form-label">Las labores de cuidado me afectan o limitan en:</label>
            <div class="form-check form-switch" id='familiacuidadora-container'>
                {!!$familiacuidadora!!}
               </div>
          </div>
          <div class="col-md">
            <label for="validationServer04" class="form-label">¿Cúal?</label>
            <input type="text" class="form-control form-control-sm" name="familiacuidadoracual" oninput="convertirAMayusculas(this)" id="familiacuidadoracual" value="">
          </div>
          <div class="col-md-12">
            <label for="validationServer04" class="form-label">¿Los integrantes del hogar que realizan actividades de cuidado, han accedido a programas que favorecen la apropiación de estrategias para facilitar  y mejorar su labor?</label>
            <select class="form-control form-control-sm" id="familiacuidadora2" aria-describedby="validationServer04Feedback" name="familiacuidadora2" required="">
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
    
      
  <div class="tab-pane fade " id="datosgeograficos" role="tabpanel" aria-labelledby="datosgeograficos">
  <form class="row g-3 was-validated" id="formdatosgeograficos">
  <div class="col-md-3" style="display:none">
            <input type="text" placeholder="folio" class="form-control form-control-sm  " id="folioinput2" name="folio" value="" required="">
          </div>
          <div class="col-md-3" style="display:none">
            <input type="text"  class="form-control form-control-sm  " id="idintegrante2" name="idintegrante" value="" required="">
          </div>
        <div class="col-md-12">
                  <label for="validationServer04" class="form-label">¿Qué estrato tiene la vivienda?</label>
                  <select class="form-control form-control-sm" id="estrato" name="estrato" aria-describedby="validationServer04Feedback" required="">
                    {{!!$estrato!!}}
                </select>
                </div>
        
          <div class="col-md-12">
            <label for="validationServer04" class="form-label">¿En qué comuna o corregimiento está ubicada tu vivienda?</label>
            <select class="form-control form-control-sm" id="comuna" name="comuna" aria-describedby="validationServer04Feedback" required="">
            {{!!$comunas!!}}
                </select>
          </div>
          <div class="col-md-6">
            <label for="validationServer04" class="form-label">¿En qué barrio o vereda está ubicada tu vivienda?</label>
            <select class="form-control form-control-sm" id="barrio" name="barrio" aria-describedby="validationServer04Feedback" required="">
            {{!!$barrios!!}}
             </select>
          </div>
          <div class="col-md-6">
            <label for="validationServer04" class="form-label">¿En qué tipo de zona está ubicada tu vivienda?</label>
            <select class="form-control form-control-sm" id="ubicacion" name="ubicacion" aria-describedby="validationServer04Feedback" required="">
            {{!!$ubicacion!!}}
            </select>
                    </div>
                    <div class="col-md-12">
            <label for="validationServer04" class="form-label">¿La vivienda o tierra donde está ubicado tu hogar tiene vocación campesina?</label>
            <select class="form-control form-control-sm" id="campesina" name="campesina" aria-describedby="validationServer04Feedback" required="">
            {{!!$sino!!}}
            </select>
                    </div>

          <div class="shadow p-3 mb-5 bg-white rounded">
          <div class="row">       
            <div class="form-group col-sm">
                <label for="dirCampo1">Via principal:</label>
                <select class="form-control form-control-sm" id="dirCampo1" onchange="llenarotrocampo()" required="">
                    <option value=""> SELECCIONE </option><option value="1"> AUTOPISTA </option><option value="2"> AVENIDA </option><option value="3"> AVENIDA CALLE </option><option value="4"> AVENIDA CARRERA </option><option value="5"> BULEVAR </option><option value="6"> CALLE </option><option value="7"> CARRERA </option><option value="8"> CIRCULAR </option><option value="10"> CIRCUNVALAR </option><option value="11"> CTAS CORRIDAS </option><option value="12"> DIAGONAL </option><option value="9"> KILOMETRO </option><option value="20"> OTRA </option><option value="13"> PASAJE </option><option value="14"> PASEO </option><option value="15"> PEATONAL </option><option value="16"> TRANSVERSAL </option><option value="17"> TRONCAL </option><option value="18"> VARIANTE </option><option value="19"> VIA </option>                </select>
            </div>
            <div class="form-group col-sm">
                <label for="dirCampo2">Número<br></label>
                <input type="text" class="form-control form-control-sm" id="dirCampo2" style="text-transform: uppercase;" required="" onkeypress="return soloNumeros(event)" onchange="llenarotrocampo();" value="">
            </div>
            <div class="form-group col-sm">
                <label for="dirCampo3">Prefijo<br></label>
                <input type="text" class="form-control form-control-sm" id="dirCampo3" style="text-transform: uppercase;" onkeypress="return soloLetras(event)" onchange="llenarotrocampo();" value="">
            </div>
            <div class="form-group col-sm">
                <label for="dirCampo4">Nombre vía<br></label>
                <select class="form-control form-control-sm" id="dirCampo4" onchange="llenarotrocampo()">
                    <option value=""> SELECCIONE </option><option value="5"> BIS </option><option value="3"> ESTE </option><option value="2"> NORTE </option><option value="4"> OESTE </option><option value="1"> SUR </option>                </select>
            </div>  
            <div class="form-group col-sm-1">
                <label for=""><br></label>
                <h4>#</h4>
            </div>          
        </div>

        <div class="row">
            <div class="form-group col-sm">
                <label for="dirCampo5">Via secundaria:</label>
                <input type="text" class="form-control form-control-sm" id="dirCampo5" style="text-transform: uppercase;" onkeypress="return soloNumeros(event)" onchange="llenarotrocampo();" value="">
            </div>
            <div class="form-group col-sm">
                <label for="dirCampo6">Prefijo<br></label>
                <input type="text" class="form-control form-control-sm" id="dirCampo6" style="text-transform: uppercase;" onkeypress="return soloLetras(event)" onchange="llenarotrocampo();" value="">
            </div>
            <div class="form-group col-sm">
                <label for="dirCampo7">cuadrante<br></label>
                <select class="form-control form-control-sm" id="dirCampo7" onchange="llenarotrocampo()">
                    <option value=""> SELECCIONE </option><option value="5"> BIS </option><option value="3"> ESTE </option><option value="2"> NORTE </option><option value="4"> OESTE </option><option value="1"> SUR </option>                </select>
            </div>
            <div class="form-group col-sm-1">
                <label for=""><br></label>
                <h4>-</h4>
            </div> 
            <div class="form-group col-sm">
                <label for="dirCampo8">Placa<br></label>
                <input type="text" class="form-control form-control-sm" id="dirCampo8" style="text-transform: uppercase;" onkeypress="return soloNumeros(event)" onchange="llenarotrocampo();" value="">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-sm">
                <label for="dirCampo9">Complemento:</label>
                <input type="text" class="form-control form-control-sm" id="dirCampo9" style="text-transform: uppercase;" onchange="llenarotrocampo();" value="">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="form-group col-sm">
                <label for="direccion">Direccion:</label>
                <input type="text" class="form-control form-control-sm form-control-plaintext" id="direccion" style="text-transform: uppercase;" value="" readonly="">
            </div>
        </div>
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


  <div class="tab-pane fade " id="tabla3" role="tabpanel" aria-labelledby="condicioneshabitabilidad">
  <form class="row g-3 was-validated" id="formcondicioneshabitabilidad">
  <div class="col-md-3" style="display:none">
            <input type="text" placeholder="folio" class="form-control form-control-sm  " id="folioinput3" name="folio" value="" required="">
          </div>
          <div class="col-md-3" style="display:none">
            <input type="text"  class="form-control form-control-sm  " id="idintegrante3" name="idintegrante" value="" required="">
          </div>

          <div class="col-md-3">
            <label for="validationServer04" class="form-label">¿Qué tipo de vivienda es?</label>
            <select class="form-control form-control-sm" id="tipovivienda" name="tipovivienda" aria-describedby="validationServer04Feedback" required="">
            {{!!$tipovivienda!!}}
          </select>
          </div>
          <div class="col-md-9">
            <label for="validationServer04" class="form-label">¿Con qué materiales está construída la vivienda principalmente? (paredes)</label>
            <select class="form-control form-control-sm" id="materialesdeparedes" name="materialesdeparedes" aria-describedby="validationServer04Feedback" required="">
            {{!!$materialesdeparedes!!}}
          </select>
          </div>
          <div class="col-md-12">
            <label for="validationServer04" class="form-label">¿Cuál es el material predominante del techo de tu vivienda?</label>
            <select class="form-control form-control-sm" id="materialestecho" name="materialestecho" aria-describedby="validationServer04Feedback" required="">
            {{!!$materialestecho!!}}
                      </select>
          </div>
          <div class="col-md-12">
            <label for="validationServer04" class="form-label">¿Cuál es el material predominante de los pisos de tu vivienda?</label>
            <select class="form-control form-control-sm" id="materialsuelo" name="materialsuelo" aria-describedby="validationServer04Feedback" required="">
            {{!!$materialsuelo!!}}
          </select>
          </div>

          <div class="col-md-12">
            <label for="validationServer04" class="form-label">¿Con qué servicios básicos domiciliarios cuenta tu vivienda?</label>
            <div class="form-check form-switch" id='serviciospublicos-container'>
              {!!$serviciospublicos!!}
               </div>
          </div>
          <div class="col-md-12">
            <label for="validationServer04" class="form-label">¿A qué servicios de telecomunicaciones tienen  acceso los residentes de la vivienda?</label>
            <div class="form-check form-switch" id='telecomunicaciones-container'>
            {!!$telecomunicaciones!!}
               </div>
          </div>
          <div class="col-md-12">
            <label for="validationServer04" class="form-label">¿El baño, la cocina y los dormitorios están en espacios diferenciados?</label>
            <select class="form-control form-control-sm" id="banococina" name="banococina" aria-describedby="validationServer04Feedback" required="">
            {{!!$sino!!}}
          </select>
          </div>
          <div class="col-md">
            <label for="validationServer04" class="form-label">¿Cuántas habitaciones son exclusivamente para dormir?</label>
            <input type="number" class="form-control form-control-sm" name="hacimiento" oninput="convertirAMayusculas(this)" id="hacimiento" value="">
          </div>
          <div class="col-md-12">
            <label for="validationServer04" class="form-label">¿Cuál es la tenencia de tu vivienda?</label>
            <select class="form-control form-control-sm" id="tipodetenenciau" name="tipodetenenciau" aria-describedby="validationServer04Feedback" required="">
            {{!!$tipodetenenciau!!}}
          </select>
        </div>
        <div class="col-md-12">
            <label for="validationServer04" class="form-label">¿Qué documento acredita la tenencia de tu vivienda?</label>
            <div class="form-check form-switch" id='documentodepropiedad-container'>
            {!!$documentodepropiedad!!}
               </div>
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


  <div class="tab-pane fade " id="accesoalimentos" role="tabpanel" aria-labelledby="accesoalimentos">
  <form class="row g-3 was-validated" id="formaccesoalimentos">
  <div class="col-md-3" style="display:none">
            <input type="text" placeholder="folio" class="form-control form-control-sm  " id="folioinput4" name="folio" value="" required="">
          </div>
          <div class="col-md-3" style="display:none">
            <input type="text"  class="form-control form-control-sm  " id="idintegrante4" name="idintegrante" value="" required="">
          </div>
        <div class="col-md-12">
                  <label for="validationServer04" class="form-label">¿En tu hogar, cuántas comidas se consumen al día en promedio?</label>
                  <select class="form-control form-control-sm" id="numerocomidas" name="numerocomidas" aria-describedby="validationServer04Feedback" required="">
                  {{!!$numerodecomidas!!}}
                </select>
                </div>
        
          <div class="col-md-12">
            <label for="validationServer04" class="form-label">En los últimos 30 días, por falta de dinero u otros recursos, ¿alguna vez usted se preocupó porque los alimentos se acabaran en tu hogar?</label>
            <select class="form-control form-control-sm" id="accesibilidadalimentos1" name="accesibilidadalimentos1" aria-describedby="validationServer04Feedback" required="">
                  {{!!$sino!!}}
                </select>
          </div>
          <div class="col-md-12">
            <label for="validationServer04" class="form-label">En los últimos 30 días, por falta de dinero u otros recursos, ¿alguna vez en tu hogar se quedaron sin alimentos?</label>
            <select class="form-control form-control-sm" id="accesibilidadalimentos2" name="accesibilidadalimentos2" aria-describedby="validationServer04Feedback" required="">
                  {{!!$sino!!}}
                </select>
          </div>
          <div class="col-md-12">
            <label for="validationServer04" class="form-label">En los últimos 30 días, por falta de dinero u otros recursos, ¿alguna vez tu hogar tuvo una dieta con poca variedad de alimentos?</label>
            <select class="form-control form-control-sm" id="accesibilidadalimentos3" name="accesibilidadalimentos3" aria-describedby="validationServer04Feedback" required="">
                  {{!!$sino!!}}
                </select>
          </div>
          <div class="col-md-12">
            <label for="validationServer04" class="form-label">En los últimos 30 días, por falta de dinero u otros recursos, ¿alguna vez en tu hogar sintieron hambre y no pudieron comer?</label>
            <select class="form-control form-control-sm" id="accesibilidad" name="accesibilidad" aria-describedby="validationServer04Feedback" required="">
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

        <div class="tab-pane fade " id="entornofamiliar" role="tabpanel" aria-labelledby="entornofamiliar">
  <form class="row g-3 was-validated" id="formentornofamiliar">
  <div class="col-md-3" style="display:none">
            <input type="text" placeholder="folio" class="form-control form-control-sm  " id="folioinput4" name="folio" value="" required="">
          </div>
          <div class="col-md-3" style="display:none">
            <input type="text"  class="form-control form-control-sm  " id="idintegrante4" name="idintegrante" value="" required="">
          </div>
        
          <div class="col-md-12">
            <label for="validationServer04" class="form-label">En tu hogar, ¿se presenta actualmente alguna de las siguientes problemáticas?</label>
            <div class="form-check" id="container-factoresderiesgovef">
                    </div>
          </div>

          <div class="col-md-12">
            <label for="validationServer04" class="form-label">¿Qué tipo de violencia se presenta actualmente?</label>
            <div class="form-check" id="container-vefviolenciaenelentorno">
                    </div>
          </div>
          <div class="col-md-12">
            <label for="validationServer04" class="form-label">¿Los integrantes de tu hogar conocen las rutas para la prevención e intervención de las violencias (VIF, VBG, VSX, maltrato, etc)?</label>
            <select class="form-control form-control-sm" id="rutasvef1" name="rutasvef1" aria-describedby="validationServer04Feedback" required="">
                  {{!!$sino!!}}
                </select>
          </div>
          <div class="col-md-12">
            <label for="validationServer04" class="form-label">¿Algún integrante de tu hogar ha hecho uso de alguna ruta para la atención de la VIF, VBG, VSX u otras violencias?</label>
            <select class="form-control form-control-sm" id="rutasvef2" name="rutasvef2" aria-describedby="validationServer04Feedback" required="">
                  {{!!$sino!!}}
                </select>
          </div>
          <div class="col-md-12">
            <label for="validationServer04" class="form-label">¿Cuáles de los siguientes canales institucionales/ruta has activado?.</label>
            <div class="form-check" id="container-rutasvef3">
                    </div>
          </div>
          <div class="col-md-12">
            <label for="validationServer04" class="form-label">¿En tu hogar toman decisiones conjuntas en relación a los siguientes temas?.</label>
            <div class="form-check" id="container-planeacionfinanciera4">
                    </div>
          </div>
          <div class="col-md-12">
            <label for="validationServer04" class="form-label">¿Cuáles de las siguientres estrategias de disciplina positiva  se implementan en el hogar para  fomentar el respeto mutuo y la resolución pacífica de conflictos?</label>
            <div class="form-check" id="container-disciplinapositiva">
                    </div>
          </div>
          <div class="col-md-12">
            <label for="validationServer04" class="form-label">¿Cuándo en tu hogar se presenta una dificultad cuentas con una red de apoyo (familia, vecinos, otro)?</label>
            <select class="form-control form-control-sm" id="rutasvef2" name="rutasvef2" aria-describedby="validationServer04Feedback" required="">
                  {{!!$sino!!}}
                </select>
          </div>
          <div class="col-md-12">
            <label for="validationServer04" class="form-label">¿Cuáles de las siguientes actividades realizan para el disfrute del tiempo libre en familia?.</label>
            <div class="form-check" id="container-tiempolibre">
                    </div>
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
    $('.familiamultiespecie2').css('display','none');

    $('#familiamultiespecie1').click(function(){
      if($('#familiamultiespecie1').val() == '2' || $('#familiamultiespecie1').val() == ''){
        $('.familiamultiespecie2').css('display','none');
        $('#familiamultiespecie2').attr('required',false)
      }else{
        $('.familiamultiespecie2').css('display','');
        $('#familiamultiespecie2').attr('required',true)

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
            $('.condicionespecial47').css('display','');
          }  else{
            $('.condicionespecial47').css('display','none');
            $('#condicionespecial47').css('display','none');

          } if( edad <= '5'){
            $('.condicionespecial48').css('display','');
            $('.condicionespecial49').css('display','');
          }else{
            $('.condicionespecial48').css('display','none');
            $('.condicionespecial49').css('display','none'); 
            $('#condicionespecial48').css('display','none');
            $('#condicionespecial49').css('display','none')
          }
          if( edad >= '12'){
            $('.condicionespecial52').css('display','');
          } else{
            $('.condicionespecial52').css('display','none');
            $('#condicionespecial52').css('display','none');
          }

          if( edad >= '40'){
            $('.condicionespecial53').css('display','');
          }else{
            $('.condicionespecial53').css('display','none');
            $('#condicionespecial53').css('display','none');
          }
          if( edad >= '25'){
            $('.condicionespecial54').css('display','');
          }else{
            $('.condicionespecial54').css('display','none');
            $('#condicionespecial54').css('display','none');
          }
          if( edad >= '12' && edad <= '26'){
            $('.condicionespecial55').css('display','');
          } else{
            $('.condicionespecial55').css('display','none');
            $('#condicionespecial55').css('display','none');
          }
          if (data.imagen.sexo == '13'  && edad >= '25' && data.identitario.identidad != '24'){
            $('.condicionespecial56').css('display','');
          } else{
            $('.condicionespecial56').css('display','none');
            $('#condicionespecial56').css('display','none');
          } if (data.imagen.sexo == '13'  && edad >= '40' && data.identitario.identidad != '24'){
                    $('.condicionespecial57').css('display','');
          }else{
            $('.condicionespecial57').css('display','none');
            $('#condicionespecial57').css('display','none');
          } if (data.imagen.sexo == '13'  && edad >= '18' && data.identitario.identidad != '24'){
                    $('.condicionespecial58').css('display','');
          } else{
            $('.condicionespecial58').css('display','none');
            $('#condicionespecial58').css('display','none');
          } if (data.imagen.sexo == '13'  && edad >= '45' && data.identitario.identidad != '24'){
                    $('.condicionespecial59').css('display','');
          } else{
            $('.condicionespecial59').css('display','none');
            $('#condicionespecial59').css('display','none');
          }if (data.imagen.sexo == '12'  && edad >= '50' && data.identitario.identidad != '25'){
                    $('.condicionespecial60').css('display','');
                    $('.condicionespecial61').css('display','');  
          }else{
            $('.condicionespecial60').css('display','none');
            $('.condicionespecial61').css('display','none');
            $('#condicionespecial60').css('display','none');
            $('#condicionespecial61').css('display','none');
          }





        // console.log(data.imagen.avatar , 'avatar')
 if(data.imagen.avatar != null){
   $('#imagenDinamica').attr('src',`../public/avatares/${data.imagen.avatar}.png`) 
  
 }else{
  console.log(data.imagen.avatar , 'avatar')
  $('#imagenDinamica').attr('src',`../public/avatares/${(data.imagen.sexo == '12')?'../avatares/hombre_avatar':'../avatares/mujer_avatar'}.png`)
 }
    //     let condicionespecial = JSON.parse(data.integrantes.condicionespecial); // ["49", "54"]
          
    // Iterar sobre todos los checkboxes en el contenedor y marcar/desmarcar según los valores seleccionados
                    let condicionespecial = JSON.parse(data.integrantes.condicionespecial); // ["49", "54"]
                    let consumospa3 = JSON.parse(data.integrantes.consumospa3); // ["49", "54"]
                    let consumospa6 = JSON.parse(data.integrantes.consumospa6); // ["49", "54"]
                    let psicosocial1 = JSON.parse(data.integrantes.psicosocial1); // ["49", "54"]
                    let psicosocial2 = JSON.parse(data.integrantes.psicosocial2); // ["49", "54"]
                    
                    let trabajoinfantil = JSON.parse((data.integrantescondicioneshabitabilidad)?data.integrantescondicioneshabitabilidad.trabajoinfantil:'{}'); // ["49", "54"]
                    let bancarizacion = JSON.parse((data.integrantescondicioneshabitabilidad)?data.integrantescondicioneshabitabilidad.bancarizacion:'{}'); // ["49", "54"]
                    let numerocomidas3 = JSON.parse((data.integrantesaccesoalimentos)?data.integrantesaccesoalimentos.numerocomidas3:'{}'); // ["49", "54"]

                  console.log(trabajoinfantil)
                  

                // Iterar sobre todos los checkboxes en el contenedor y marcar/desmarcar según los valores seleccionados
                $('#condicionespecial-container input[type="checkbox"]').each(function() {
                  let found = condicionespecial.find(item => item.id === this.value );
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
              if(Array.isArray(numerocomidas3) && numerocomidas3.length > 0){
                $('#container-numerocomidas3 input[type="checkbox"]').each(function() {
                  let found = numerocomidas3.find(item => item.id === this.value );
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
            if(data.integrantescondicioneshabitabilidad ==null){
            }else{
              $('#siguiente3').css('display','');
            }
            if(data.integrantesaccesoalimentos ==null){
            }else{
              $('#volver').css('display','');
            }
           $('#tipologia').val((data.integrantes)?data.integrantes.tipologia:'');
           $('#familiamultiespecie1').val((data.integrantes)?data.integrantes.familiamultiespecie1:'');
           $('#familiamultiespecie2').val((data.integrantes)?data.integrantes.familiamultiespecie2:'');
           $('#discapacidad').val((data.integrantes)?data.integrantes.discapacidad:'');   
           $('#estrato').val((data.integrantes)?data.integrantes.estrato:'');
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
           $('#estrato').val((data.integrantesintelectual)?data.integrantesintelectual.estrato:'');
           $('#educacion').val((data.integrantesintelectual)?data.integrantesintelectual.educacion:'');
           $('#comuna').val((data.integrantesintelectual)?data.integrantesintelectual.comuna:'');
           $('#barrio').val((data.integrantesintelectual)?data.integrantesintelectual.barrio:'');
           $('#campesina').val((data.integrantesintelectual)?data.integrantesintelectual.campesina:'');
           $('#tipovivienda').val((data.integrantesintelectual)?data.integrantesintelectual.tipovivienda:'');
           $('#materialesdeparedes').val((data.integrantesintelectual)?data.integrantesintelectual.materialesdeparedes:'');
           $('#materialestecho').val((data.integrantesintelectual)?data.integrantesintelectual.materialestecho:'');
           $('#materialsuelo').val((data.integrantesintelectual)?data.integrantesintelectual.materialsuelo:'');
          
          // BIENESTAR condicioneshabitabilidad

           $('#ingresos1').val((data.integrantescondicioneshabitabilidad)?data.integrantescondicioneshabitabilidad.ingresos1:'');
           $('#trabajoinfantil').val((data.integrantescondicioneshabitabilidad)?data.integrantescondicioneshabitabilidad.trabajoinfantil:'');
           $('#trabajo15a17anhos').val((data.integrantescondicioneshabitabilidad)?data.integrantescondicioneshabitabilidad.trabajo15a17anhos:'');
           $('#ocupados').val((data.integrantescondicioneshabitabilidad)?data.integrantescondicioneshabitabilidad.ocupados:'');
           $('#formalidaddelempleo').val((data.integrantescondicioneshabitabilidad)?data.integrantescondicioneshabitabilidad.formalidaddelempleo:'');
           $('#ingresos2').val((data.integrantescondicioneshabitabilidad)?data.integrantescondicioneshabitabilidad.ingresos2:'');
           $('#ingresos3').val((data.integrantescondicioneshabitabilidad)?data.integrantescondicioneshabitabilidad.ingresos3:'');
           $('#desempleodelargaduracion').val((data.integrantescondicioneshabitabilidad)?data.integrantescondicioneshabitabilidad.desempleodelargaduracion:'');
           $('#desempleo').val((data.integrantescondicioneshabitabilidad)?data.integrantescondicioneshabitabilidad.desempleo:'');
           $('#intermediacionlaboral').val((data.integrantescondicioneshabitabilidad)?data.integrantescondicioneshabitabilidad.intermediacionlaboral:'');
           $('#emprendimiento1').val((data.integrantescondicioneshabitabilidad)?data.integrantescondicioneshabitabilidad.emprendimiento1:'');
           $('#bancarizacion').val((data.integrantescondicioneshabitabilidad)?data.integrantescondicioneshabitabilidad.bancarizacion:''); 
           $('#endeudamiento1').val((data.integrantescondicioneshabitabilidad)?data.integrantescondicioneshabitabilidad.endeudamiento1:'');
           $('#endeudamiento3').val((data.integrantescondicioneshabitabilidad)?data.integrantescondicioneshabitabilidad.endeudamiento3:'');
           $('#endeudamiento2').val((data.integrantescondicioneshabitabilidad)?data.integrantescondicioneshabitabilidad.endeudamiento2:'');

              // BIENESTAR accesoalimentos

           $('#numerocomidas').val((data.integrantesaccesoalimentos)?data.integrantesaccesoalimentos.numerocomidas:'');
           $('#numerocomidas3').val((data.integrantesaccesoalimentos)?data.integrantesaccesoalimentos.numerocomidas3:'');
           $('#accesibilidadalimentos1').val((data.integrantesaccesoalimentos)?data.integrantesaccesoalimentos.accesibilidadalimentos1:'');


          

         },
        error: function(xhr, status, error) {
                  console.log(xhr.responseText);
              }
      })
      })

      $('#siguiente').click(function(){
        console.log('click');
        $('#datosgeograficos').tab('show');  
        
      }); 
      $('#siguiente2').click(function(){
        console.log('click');
        $('#condicioneshabitabilidad').tab('show');  
        
      });
      $('#siguiente3').click(function(){
        console.log('click');
        $('#accesoalimentos').tab('show');  
        
      });
    
      $('#atras').click(function(){
        console.log('click');
        $('#conformacionfamiliar').tab('show');  
      }); 
      $('#atras2').click(function(){
        console.log('click');
        $('#datosgeograficos').tab('show');  
      });
      $('#atras3').click(function(){
        console.log('click');
        $('#condicioneshabitabilidad').tab('show');  
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
              'condicionespecial': [
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

    if (name === 'condicionespecial' || name === 'consumospa3' || name === 'consumospa6' 
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

// Asegurar que todos los elementos en `condicionespecial` tienen un valor de 'respuesta'
data['condicionespecial'].forEach(item => {
            var selector = '[name="condicionespecial[]"][value="' + item.id + '"]';
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
              $('#datosgeograficos').removeAttr('disabled');
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    });

    $('#formdatosgeograficos').on('submit', function(event) {
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
              $('#datosgeograficos').removeAttr('disabled');
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
        
    });

         
 
    $('#formcondicioneshabitabilidad').on('submit', function(event) {
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

    if (name === 'trabajoinfantil'  || name === 'bancarizacion' || name === 'numerocomidas3') {
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
            url: './condicioneshabitabilidad',
            method: $(this).attr('method'),
            data: {data: data},
            success: function(response) {
              $('#siguiente3').css('display','');
              $('#datosgeograficos').removeAttr('disabled');
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    });


    $('#formaccesoalimentos').on('submit', function(event) {
      event.preventDefault(); // Detiene el envío del formulario
      var formData = $(this).serializeArray();
        var data = {
          'numerocomidas3': [
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

    if ( name === 'numerocomidas3') {
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
 data['numerocomidas3'].forEach(item => {
      var selector = '[name="numerocomidas3[]"][value="' + item.id + '"]';
      if ($(selector).length === 0 || $(selector).is(':hidden')) {
          item.valor = 'NO APLICA';
      }
  });

        $.ajax({
            url: './accesoalimentos',
            method: $(this).attr('method'),
            data: {data: data},
            success: function(response) {
              $('#volver').css('display','');
              $('#datosgeograficos').removeAttr('disabled');
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
                      $('#datosgeograficos').removeAttr('disabled');
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



//funcion para la dirección

function llenarotrocampo() 
    {

        var dir1 = document.getElementById("dirCampo1");
        var dir1 = dir1.options[dir1.selectedIndex].text;

        var dir4 = document.getElementById("dirCampo4");
        var dir4 = dir4.options[dir4.selectedIndex].text;
        if (dir4 == 'SELECCIONE'){dir4 = '';}

        var dir7 = document.getElementById("dirCampo7");
        var dir7 = dir7.options[dir7.selectedIndex].text;
        if (dir7 == 'SELECCIONE'){dir7 = '';}

        if ($('#dirCampo1').val() !== '' || $('#dirCampo2').val() !== '' || $('#dirCampo3').val() !== '' || $('#dirCampo4').val() !== '') {
            var numeral = "#";
        } else {
            numeral = "";
        }

        if ($('#dirCampo1').val() == '20') {

            $('#dirCampo2').prop('disabled', true);
            $('#dirCampo3').prop('disabled', true);
            $('#dirCampo4').prop('disabled', true);
            $('#dirCampo5').prop('disabled', true);
            $('#dirCampo6').prop('disabled', true);
            $('#dirCampo7').prop('disabled', true);
            $('#dirCampo8').prop('disabled', true);

            $('#dirCampo2').val('');
            $('#dirCampo3').val('');
            $('#dirCampo4').val('');
            $('#dirCampo5').val('');
            $('#dirCampo6').val('');
            $('#dirCampo7').val('');
            $('#dirCampo8').val('');

            $('#dirCampo2').prop('required', false);
            $('#dirCampo5').prop('required', false);
            $('#dirCampo8').prop('required', false);
            $('#dirCampo9').prop('required', true);

            $('#direccion').val($('#dirCampo9').val());
        } else {

            $('#dirCampo2').prop('disabled', false);
            $('#dirCampo3').prop('disabled', false);
            $('#dirCampo4').prop('disabled', false);
            $('#dirCampo5').prop('disabled', false);
            $('#dirCampo6').prop('disabled', false);
            $('#dirCampo7').prop('disabled', false);
            $('#dirCampo8').prop('disabled', false);

            //$('#dirCampo9').val('');

            $('#dirCampo2').prop('required', true);
            $('#dirCampo5').prop('required', true);
            $('#dirCampo8').prop('required', true);
            $('#dirCampo9').prop('required', false);

            $('#direccion').val(dir1 + " " + $('#dirCampo2').val() + " " + $('#dirCampo3').val() + " " + dir4 + " " + numeral + " " + $('#dirCampo5').val() + " " + $('#dirCampo6').val() + " " + dir7 + " " + $('#dirCampo8').val() + " || " + $('#dirCampo9').val());
        }
    }

    //SOLO LETRAS 

    function soloLetras(e)
{
    //    alert(e);
/*    var key = window.Event ? e.which : e.keyCode

    if ((key >= 65 && key <= 90) || (key == 8) || (key == 32) || (key == 44 || (key == 46))) {
    }
    else
    {
        //okletrasnum('Ingresa solo letras mayusculas!!!');
    }

    return ((key >= 65 && key <= 90) || (key == 8) || (key == 32) || (key == 44) || (key == 46))*/
tecla = (document.all) ? e.keyCode : e.which;
if (tecla==8) return true;

patron =/[A-Za-zÃ±Ã‘\s]/;
te = String.fromCharCode(tecla);
return patron.test(te);
}

function soloNumeros(e)
{
    //    alert(e);
    var key = window.Event ? e.which : e.keyCode
    if ((key >= 48 && key <= 57) || (key == 8)) {
    }
    else
    {
        //okletrasnum('Ingresa solo numeros!!!');
    }
    return ((key >= 48 && key <= 57) || (key == 8))
}



    </script>
 

@endsection