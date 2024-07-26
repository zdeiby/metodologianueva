
<link rel="shortcut icon" href="../favicon.ico">
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
  .condicion-item {
    margin-bottom: 20px;
}
.integrantes-container {
    margin-left: 20px;
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

    <div><span class="badge bg-success mt-2" id="folio">Folio: {{ decrypt($variable) }}</span>
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

          <form id="formconformacionfamiliar" class="row g-3 was-validated">     
            
          <div class="col-md-3" style="display:none">
            <input type="text" placeholder="folio" class="form-control form-control-sm  " id="folioinput" name="folio" value="{{ decrypt($variable) }}" >
          </div>
          <!-- <div class="col-md-3" style="display:none">
            <input type="text"  class="form-control form-control-sm  " id="idintegrante1" name="idintegrante" value="" >
          </div> -->

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
          <div class="col-md-12 laboresdecuidadodiv">
            <label for="validationServer04" class="form-label ">¿Quiénes en tu hogar realizan labores domésticas no remuneradas? (cuidado indirecto).</label>
            <div class="form-check form-switch" id='laboresdecuidado-container'>
                {!!$integrantes!!}
                <label class="form-check-label tiempolibre13988001" for="laboresdecuidado0">En mi hogar no realizan labores domésticas </label>
                <input class="form-check-input" type="checkbox" name="laboresdecuidado[]" id="laboresdecuidado0" value="0" respuesta="SI" required>
               </div>
          </div>
        </br>
 
<div class="col-md-12" id="condicionespecialdiv">
    <label for="validationServer04" class="form-label">¿En tu hogar se realizan labores de cuidado directo no remuneradas?</label>
    <div class="form-check form-switch" id="condicionespecial-container">
        {!! $condicionespecial !!}
    </div>
</div>



          <div class="col-md-12" id="familiacuidadoradiv">
            <label for="validationServer04" class="form-label">Las labores de cuidado afectan a los integrantes del hogar en:</label>
            <div class="form-check form-switch" id='familiacuidadora-container'>
                {!!$familiacuidadora!!}
               </div>
          </div>
          <div class="col-md" id="familiacuidadoracualdiv">
            <label for="validationServer04" class="form-label">¿Cúal?</label>
            <input type="text" class="form-control form-control-sm" name="familiacuidadoracual" oninput="convertirAMayusculas(this)" id="familiacuidadoracual" value="">
          </div>
          <div class="col-md-12" id="familiacuidadora2div">
            <label for="validationServer04" class="form-label">¿Los integrantes del hogar que realizan actividades de cuidado directo, han accedido a programas que favorecen la apropiación de estrategias para facilitar y mejorar su labor?</label>
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
            <input type="text" placeholder="folio" class="form-control form-control-sm  " id="folioinput2" name="folio" value="{{ decrypt($variable) }}" required="">
          </div>
          <!-- <div class="col-md-3" style="display:none">
            <input type="text"  class="form-control form-control-sm  " id="idintegrante2" name="idintegrante" value="" required="">
          </div> -->
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
                    <div class="col-md-12"  id="campesinadiv">
            <label for="validationServer04" class="form-label">¿La vivienda o tierra donde está ubicado tu hogar tiene vocación campesina?</label>
            <select class="form-control form-control-sm" id="campesina" name="campesina" aria-describedby="validationServer04Feedback" required="">
            {{!!$sino!!}}
            </select>
                    </div>

          <div class="shadow p-3 mb-5 bg-white rounded">
          <label for="" class="form-label">¿Cuál es la dirección de tu vivienda?</label>
          <div class="row">       
            <div class="form-group col-sm">
                <label for="dirCampo1">Via principal:</label>
                <select class="form-control form-control-sm" id="dirCampo1" name="dirCampo1" oninput="llenarotrocampo()" required="">
                    <option value=""> SELECCIONE </option><option value="1"> AUTOPISTA </option><option value="2"> AVENIDA </option><option value="3"> AVENIDA CALLE </option><option value="4"> AVENIDA CARRERA </option><option value="5"> BULEVAR </option><option value="6"> CALLE </option><option value="7"> CARRERA </option><option value="8"> CIRCULAR </option><option value="10"> CIRCUNVALAR </option><option value="11"> CTAS CORRIDAS </option><option value="12"> DIAGONAL </option><option value="9"> KILOMETRO </option><option value="20"> OTRA </option><option value="13"> PASAJE </option><option value="14"> PASEO </option><option value="15"> PEATONAL </option><option value="16"> TRANSVERSAL </option><option value="17"> TRONCAL </option><option value="18"> VARIANTE </option><option value="19"> VIA </option>                </select>
            </div>
            <div class="form-group col-sm">
                <label for="dirCampo2">Número<br></label>
                <input type="text" class="form-control form-control-sm" id="dirCampo2" name="dirCampo2" style="text-transform: uppercase;" required="" onkeypress="return soloNumeros(event)" oninput="llenarotrocampo();" value="">
            </div>
            <div class="form-group col-sm">
                <label for="dirCampo3">Prefijo<br></label>
                <input type="text" class="form-control form-control-sm" id="dirCampo3" name="dirCampo3" style="text-transform: uppercase;" onkeypress="return soloLetras(event)" oninput="llenarotrocampo();" value="">
            </div>
            <div class="form-group col-sm">
                <label for="dirCampo4">Nombre vía<br></label>
                <select class="form-control form-control-sm" id="dirCampo4" name="dirCampo4" oninput="llenarotrocampo()">
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
                <input type="text" class="form-control form-control-sm" id="dirCampo5" name="dirCampo5" style="text-transform: uppercase;" onkeypress="return soloNumeros(event)" oninput="llenarotrocampo();" value="">
            </div>
            <div class="form-group col-sm">
                <label for="dirCampo6">Prefijo<br></label>
                <input type="text" class="form-control form-control-sm" id="dirCampo6" name="dirCampo6" style="text-transform: uppercase;" onkeypress="return soloLetras(event)" oninput="llenarotrocampo();" value="">
            </div>
            <div class="form-group col-sm">
                <label for="dirCampo7">cuadrante<br></label>
                <select class="form-control form-control-sm" id="dirCampo7" name="dirCampo7" oninput="llenarotrocampo()">
                    <option value=""> SELECCIONE </option><option value="5"> BIS </option><option value="3"> ESTE </option><option value="2"> NORTE </option><option value="4"> OESTE </option><option value="1"> SUR </option>                </select>
            </div>
            <div class="form-group col-sm-1">
                <label for=""><br></label>
                <h4>-</h4>
            </div> 
            <div class="form-group col-sm">
                <label for="dirCampo8">Placa<br></label>
                <input type="text" class="form-control form-control-sm" id="dirCampo8" name="dirCampo8" style="text-transform: uppercase;" onkeypress="return soloNumeros(event)" oninput="llenarotrocampo();" value="">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-sm">
                <label for="dirCampo9">Complemento:</label>
                <input type="text" class="form-control form-control-sm" id="dirCampo9" name="dirCampo9" style="text-transform: uppercase;" oninput="llenarotrocampo();" value="">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="form-group col-sm">
                <label for="direccion">Direccion:</label>
                <input type="text" class="form-control form-control-sm form-control-plaintext" id="direccion" name="direccion" style="text-transform: uppercase;" value="" readonly="">
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
            <input type="text" placeholder="folio" class="form-control form-control-sm  " id="folioinput3" name="folio" value="{{ decrypt($variable) }}" required="">
          </div>
          <!-- <div class="col-md-3" style="display:none">
            <input type="text"  class="form-control form-control-sm  " id="idintegrante3" name="idintegrante" value="" required="">
          </div> -->

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
            <input type="text" placeholder="folio" class="form-control form-control-sm  " id="folioinput4" name="folio" value="{{ decrypt($variable) }}" required="">
          </div>
          <!-- <div class="col-md-3" style="display:none">
            <input type="text"  class="form-control form-control-sm  " id="idintegrante4" name="idintegrante" value="" required="">
          </div> -->
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
                <div class="btn btn-outline-primary" id="siguiente4" style="display:none">Siguiente</div>
              </div>
          </div>
        </form> 
        </div>

        <div class="tab-pane fade " id="entornofamiliar" role="tabpanel" aria-labelledby="entornofamiliar">
  <form class="row g-3 was-validated" id="formentornofamiliar">
  <div class="col-md-3" style="display:none">
            <input type="text" placeholder="folio" class="form-control form-control-sm  " id="folioinput5" name="folio" value="{{ decrypt($variable) }}" required="">
          </div>
          <!-- <div class="col-md-3" style="display:none">
            <input type="text"  class="form-control form-control-sm  " id="idintegrante4" name="idintegrante" value="" required="">
          </div> -->
        
          <div class="col-md-12">
            <label for="validationServer04" class="form-label ">En tu hogar, ¿se presenta actualmente alguna de las siguientes problemáticas?</label>
            <div class="form-check form-switch" id="container-factoresderiesgovef">
              {!!$factoresderiesgovef!!}
                    </div>
          </div>

          <div class="col-md-12">
            <label for="validationServer04" class="form-label">¿Qué tipo de violencia se presenta actualmente?</label>
            <div class="form-check" id="container-vefviolenciaenelentorno">
            {!!$vefviolenciaenelentorno!!}
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
            {!!$rutasvef3!!}
                    </div>
          </div>
          <div class="col-md-12">
            <label for="validationServer04" class="form-label">¿En tu hogar toman decisiones conjuntas en relación a los siguientes temas?.</label>
            <div class="form-check form-switch" id="container-planeacionfinanciera4">
            {!!$planeacionfinanciera4!!}
                    </div>
          </div>
          <div class="col-md-12">
            <label for="validationServer04" class="form-label">¿Cuáles de las siguientres estrategias de disciplina positiva  se implementan en el hogar para  fomentar el respeto mutuo y la resolución pacífica de conflictos?</label>
            <div class="form-check" id="container-disciplinapositiva">
            {!!$disciplinapositiva!!}
                    </div>
          </div>
          <div class="col-md-12">
            <label for="validationServer04" class="form-label">¿Cuándo en tu hogar se presenta una dificultad cuentas con una red de apoyo (familia, vecinos, otro)?</label>
            <select class="form-control form-control-sm" id="redesdeapoyo" name="redesdeapoyo" aria-describedby="validationServer04Feedback" required="">
                  {{!!$sino!!}}
                </select>
          </div>
          <div class="col-md-12">
            <label for="validationServer04" class="form-label">¿Cuáles de las siguientes actividades realizan para el disfrute del tiempo libre en familia?.</label>
            <div class="form-check" id="container-tiempolibre">
            {!!$tiempolibre!!}
                    </div>
          </div>

         
          <hr>
    
          <div class="row pt-4">
            <div class="text-start col">
              <div class="btn btn-outline-primary" id="atras4">volver</div>
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
    
    /* function agregarImagen(id){
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
    } */
    $('.familiamultiespecie2').css('display','none');

    $('#familiamultiespecie1').change(function(){
      if($('#familiamultiespecie1').val() == '2' || $('#familiamultiespecie1').val() == ''){
        $('.familiamultiespecie2').css('display','none');
        $('#familiamultiespecie2').attr('required',false)
        $('#familiamultiespecie2').val('0');
      }else{
        $('.familiamultiespecie2').css('display','');
        $('#familiamultiespecie2').attr('required',true)
        $('#familiamultiespecie2').val('');

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
 //console.log(edad)
    return edad;
}
    
   $(document).ready(function(){
      $('#volveratras').css('display','none');

    let folio=$('#folioinput').val();
        $.ajax({
        url:'../leerpreguntashogar',
        data:{folio:folio},
        method: "GET",
        dataType:'JSON',
        success:function(data){
    
    //     let condicionespecial = JSON.parse(data.integrantes.condicionespecial); // ["49", "54"]
          
    // Iterar sobre todos los checkboxes en el contenedor y marcar/desmarcar según los valores seleccionados
                    let condicionespecial = JSON.parse((data.hogarconformacionfamiliar)?data.hogarconformacionfamiliar.condicionespecial:'{}'); // ["49", "54"]
                   // let familiacuidadora = JSON.parse((data.hogarconformacionfamiliar)?data.hogarconformacionfamiliar.familiacuidadora:'{}'); // ["49", "54"]
                   let familiacuidadora = JSON.parse(data.hogarconformacionfamiliar?.familiacuidadora || '[]');
                    let laboresdecuidado = JSON.parse((data.hogarconformacionfamiliar)?data.hogarconformacionfamiliar.laboresdecuidado:'{}'); // ["49", "54"]


                    let serviciospublicos = JSON.parse((data.hogarcondicioneshabitabilidad)?data.hogarcondicioneshabitabilidad.serviciospublicos:'{}'); // ["49", "54"]
                    let telecomunicaciones = JSON.parse((data.hogarcondicioneshabitabilidad)?data.hogarcondicioneshabitabilidad.telecomunicaciones:'{}'); // ["49", "54"]
                    let documentodepropiedad = JSON.parse((data.hogarcondicioneshabitabilidad)?data.hogarcondicioneshabitabilidad.documentodepropiedad:'{}'); // ["49", "54"]

                    let factoresderiesgovef = JSON.parse((data.hogarentornofamiliar)?data.hogarentornofamiliar.factoresderiesgovef:'{}'); // ["49", "54"]
                    let vefviolenciaenelentorno = JSON.parse((data.hogarentornofamiliar)?data.hogarentornofamiliar.vefviolenciaenelentorno:'{}'); // ["49", "54"]
                    let rutasvef3 = JSON.parse((data.hogarentornofamiliar)?data.hogarentornofamiliar.rutasvef3:'{}'); // ["49", "54"]
                    let planeacionfinanciera4 = JSON.parse((data.hogarentornofamiliar)?data.hogarentornofamiliar.planeacionfinanciera4:'{}'); // ["49", "54"]
                    let disciplinapositiva = JSON.parse((data.hogarentornofamiliar)?data.hogarentornofamiliar.disciplinapositiva:'{}'); // ["49", "54"]
                    let tiempolibre = JSON.parse((data.hogarentornofamiliar)?data.hogarentornofamiliar.tiempolibre:'{}'); // ["49", "54"]

                    if (Array.isArray(laboresdecuidado) && laboresdecuidado.length > 0) {
                        $('#laboresdecuidado-container input[type="checkbox"]').each(function() {
                            if (laboresdecuidado.includes(this.value)) {
                                $(this).prop('checked', true);
                            } else {
                                $(this).prop('checked', false);
                            }
                        });
                    }



                // Iterar sobre todos los checkboxes en el contenedor y marcar/desmarcar según los valores seleccionados
                if(Array.isArray(condicionespecial) && condicionespecial.length > 0) {
                    condicionespecial.forEach(function(item) {
                        var conditionId = item.id;
                        var valor = item.valor;
                        var integrantes = item.idintegrante || [];

                        if (valor === "SI") {
                            $('#condicionespecial' + conditionId).prop('checked', true);
                            $('#integrantes-condicionespecial' + conditionId + '-container').show(); // Mostrar el contenedor de integrantes específico

                            // Marcar los integrantes correspondientes
                            integrantes.forEach(function(integranteId) {
                                $('#integrantes-condicionespecial' + conditionId + '-container input[value="' + integranteId + '"]').prop('checked', true);
                            });
                        } else {
                            $('#condicionespecial' + conditionId).prop('checked', false);
                            $('#integrantes-condicionespecial' + conditionId + '-container').hide(); // Ocultar el contenedor de integrantes específico
                        }
                    });}

console.log(familiacuidadora,'familia cidadora')


if(Array.isArray(familiacuidadora) && familiacuidadora.length > 0) {
                $('#familiacuidadora-container input[type="checkbox"]').each(function() {
                  let found = familiacuidadora.find(item => item.id === this.value );
                //  console.log(found.valor, 'aca valor')
                          if (found.valor == 'SI') { 
                            $(this).prop('checked', true);
                            $(this).attr('respuesta', 'SI');  // Establecer 'respuesta' a 'NO APLICA' solo si el valor es 'si'
                          } else {
                            $(this).attr('respuesta', 'SI');  // Establecer 'respuesta' con el valor correspondiente
                          }
                });
              }
               

                if(Array.isArray(serviciospublicos) && serviciospublicos.length > 0) {
                $('#serviciospublicos-container input[type="checkbox"]').each(function() {
                  let found = serviciospublicos.find(item => item.id === this.value );
                //  console.log(found.valor, 'aca valor')
                          if (found.valor == 'SI') { 
                            $(this).prop('checked', true);
                            $(this).attr('respuesta', 'SI');  // Establecer 'respuesta' a 'NO APLICA' solo si el valor es 'si'
                          } else {
                            $(this).attr('respuesta', 'SI');  // Establecer 'respuesta' con el valor correspondiente
                          }
                });
              }
              if(Array.isArray(telecomunicaciones) && telecomunicaciones.length > 0){
                $('#telecomunicaciones-container input[type="checkbox"]').each(function() {
                  let found = telecomunicaciones.find(item => item.id === this.value );
                //  console.log(found.valor, 'aca valor')
                          if (found.valor == 'SI') { 
                            $(this).prop('checked', true);
                            $(this).attr('respuesta', 'SI');  // Establecer 'respuesta' a 'NO APLICA' solo si el valor es 'si'
                          } else {
                            $(this).attr('respuesta', 'SI');  // Establecer 'respuesta' con el valor correspondiente
                          }
                });
              }
              if(Array.isArray(documentodepropiedad) && documentodepropiedad.length > 0){
                $('#documentodepropiedad-container input[type="checkbox"]').each(function() {
                  let found = documentodepropiedad.find(item => item.id === this.value );
                 // console.log(found.valor, 'aca valor')
                          if (found.valor == 'SI') { 
                            $(this).prop('checked', true);
                            $(this).attr('respuesta', 'SI');  // Establecer 'respuesta' a 'NO APLICA' solo si el valor es 'si'
                          } else {
                            $(this).attr('respuesta', 'SI');  // Establecer 'respuesta' con el valor correspondiente
                          }
                });
              }










              if(Array.isArray(factoresderiesgovef) && factoresderiesgovef.length > 0){
                $('#container-factoresderiesgovef input[type="checkbox"]').each(function() {
                  let found = factoresderiesgovef.find(item => item.id === this.value );
                //  console.log(found.valor, 'aca valor')
                          if (found.valor == 'SI') { 
                            $(this).prop('checked', true);
                            $(this).attr('respuesta', 'SI');  // Establecer 'respuesta' a 'NO APLICA' solo si el valor es 'si'
                          } else {
                            $(this).attr('respuesta', 'SI');  // Establecer 'respuesta' con el valor correspondiente
                          }
                });
              }  if(Array.isArray(vefviolenciaenelentorno) && vefviolenciaenelentorno.length > 0){
                $('#container-vefviolenciaenelentorno input[type="checkbox"]').each(function() {
                  let found = vefviolenciaenelentorno.find(item => item.id === this.value );
                 // console.log(found.valor, 'aca valor')
                          if (found.valor == 'SI') { 
                            $(this).prop('checked', true);
                            $(this).attr('respuesta', 'SI');  // Establecer 'respuesta' a 'NO APLICA' solo si el valor es 'si'
                          } else {
                            $(this).attr('respuesta', 'SI');  // Establecer 'respuesta' con el valor correspondiente
                          }
                });
              }
              if(Array.isArray(rutasvef3) && rutasvef3.length > 0){
                $('#container-rutasvef3 input[type="checkbox"]').each(function() {
                  let found = rutasvef3.find(item => item.id === this.value );
                //  console.log(found.valor, 'aca valor')
                          if (found.valor == 'SI') { 
                            $(this).prop('checked', true);
                            $(this).attr('respuesta', 'SI');  // Establecer 'respuesta' a 'NO APLICA' solo si el valor es 'si'
                          } else {
                            $(this).attr('respuesta', 'SI');  // Establecer 'respuesta' con el valor correspondiente
                          }
                });
              }
              if(Array.isArray(planeacionfinanciera4) && planeacionfinanciera4.length > 0){
                $('#container-planeacionfinanciera4 input[type="checkbox"]').each(function() {
                  let found = planeacionfinanciera4.find(item => item.id === this.value );
               //   console.log(found.valor, 'aca valor')
                          if (found.valor == 'SI') { 
                            $(this).prop('checked', true);
                            $(this).attr('respuesta', 'SI');  // Establecer 'respuesta' a 'NO APLICA' solo si el valor es 'si'
                          } else {
                            $(this).attr('respuesta', 'SI');  // Establecer 'respuesta' con el valor correspondiente
                          }
                });
              }
              if(Array.isArray(disciplinapositiva) && disciplinapositiva.length > 0){
                $('#container-disciplinapositiva input[type="checkbox"]').each(function() {
                  let found = disciplinapositiva.find(item => item.id === this.value );
               //   console.log(found.valor, 'aca valor')
                          if (found.valor == 'SI') { 
                            $(this).prop('checked', true);
                            $(this).attr('respuesta', 'SI');  // Establecer 'respuesta' a 'NO APLICA' solo si el valor es 'si'
                          } else {
                            $(this).attr('respuesta', 'SI');  // Establecer 'respuesta' con el valor correspondiente
                          }
                });
              }
              if(Array.isArray(tiempolibre) && tiempolibre.length > 0){
                $('#container-tiempolibre input[type="checkbox"]').each(function() {
                  let found = tiempolibre.find(item => item.id === this.value );
               //   console.log(found.valor, 'aca valor')
                          if (found.valor == 'SI') { 
                            $(this).prop('checked', true);
                            $(this).attr('respuesta', 'SI');  // Establecer 'respuesta' a 'NO APLICA' solo si el valor es 'si'
                          } else {
                            $(this).attr('respuesta', 'SI');  // Establecer 'respuesta' con el valor correspondiente
                          }
                });
              }





           if(data.hogarconformacionfamiliar ==null){
           }else{
             $('#siguiente').css('display','');
             $('#volver2').css('display','');
            }
            if(data.hogardatoseconomicos ==null){
            }else{
              $('#siguiente2').css('display','');
            }
            if(data.hogarcondicioneshabitabilidad ==null){
            }else{
              $('#siguiente3').css('display','');
            }
            if(data.hogarcondicionesalimentarias ==null){
            }else{
              $('#siguiente4').css('display','');
            }
            if(data.hogarentornofamiliar ==null){
            }else{
              $('#volver').css('display','');
            }
          $('#tipologia').val((data.hogarconformacionfamiliar)?data.hogarconformacionfamiliar.tipologia:'');
          $('#familiamultiespecie1').val((data.hogarconformacionfamiliar)?data.hogarconformacionfamiliar.familiamultiespecie1:'');
          $('#familiamultiespecie2').val((data.hogarconformacionfamiliar)?data.hogarconformacionfamiliar.familiamultiespecie2:'');
          $('#familiacuidadoracual').val((data.hogarconformacionfamiliar)?data.hogarconformacionfamiliar.familiacuidadoracual:'');   
          $('#familiacuidadora2').val((data.hogarconformacionfamiliar)?data.hogarconformacionfamiliar.familiacuidadora2:'');
          
            //   DATOS GEOGRAFICOS Y ECONOMICOS

          $('#estrato').val((data.hogardatoseconomicos)?data.hogardatoseconomicos.estrato:'');      
          $('#comuna').val((data.hogardatoseconomicos)?data.hogardatoseconomicos.comuna:'');
          //$('#barrio').val((data.hogardatoseconomicos)?data.hogardatoseconomicos.barrio:'');
          $('#ubicacion').val((data.hogardatoseconomicos)?data.hogardatoseconomicos.ubicacion:''); 
          $('#campesina').val((data.hogardatoseconomicos)?data.hogardatoseconomicos.campesina:'');
          $('#dirCampo1').val((data.hogardatoseconomicos)?data.hogardatoseconomicos.dirCampo1:'');
          $('#dirCampo2').val((data.hogardatoseconomicos)?data.hogardatoseconomicos.dirCampo2:'');
          $('#dirCampo3').val((data.hogardatoseconomicos)?data.hogardatoseconomicos.dirCampo3:'');
          $('#dirCampo4').val((data.hogardatoseconomicos)?data.hogardatoseconomicos.dirCampo4:'');
          $('#dirCampo5').val((data.hogardatoseconomicos)?data.hogardatoseconomicos.dirCampo5:'');
          $('#dirCampo6').val((data.hogardatoseconomicos)?data.hogardatoseconomicos.dirCampo6:'');
          $('#dirCampo7').val((data.hogardatoseconomicos)?data.hogardatoseconomicos.dirCampo7:'');
          $('#dirCampo8').val((data.hogardatoseconomicos)?data.hogardatoseconomicos.dirCampo8:'');
          $('#dirCampo9').val((data.hogardatoseconomicos)?data.hogardatoseconomicos.dirCampo9:'');
          $('#direccion').val((data.hogardatoseconomicos)?data.hogardatoseconomicos.direccion:'');


          if($('#ubicacion').val() == '209'){
              $('#campesinadiv').css('display','');
            }else{
              $('#campesinadiv').css('display','none');
            }

        //   CONDICIONES DE HABILITABILIDAD 

            $('#tipovivienda').val((data.hogarcondicioneshabitabilidad)?data.hogarcondicioneshabitabilidad.tipovivienda:'');
            $('#materialesdeparedes').val((data.hogarcondicioneshabitabilidad)?data.hogarcondicioneshabitabilidad.materialesdeparedes:'');
            $('#materialestecho').val((data.hogarcondicioneshabitabilidad)?data.hogarcondicioneshabitabilidad.materialestecho:'');
            $('#materialsuelo').val((data.hogarcondicioneshabitabilidad)?data.hogarcondicioneshabitabilidad.materialsuelo:'');
            $('#banococina').val((data.hogarcondicioneshabitabilidad)?data.hogarcondicioneshabitabilidad.banococina:'');
            $('#hacimiento').val((data.hogarcondicioneshabitabilidad)?data.hogarcondicioneshabitabilidad.hacimiento:'');
            $('#tipodetenenciau').val((data.hogarcondicioneshabitabilidad)?data.hogarcondicioneshabitabilidad.tipodetenenciau:'');

            //ACCESO Y DISPONIBILIDAD DE ALIMENTOS

            
           $('#numerocomidas').val((data.hogarcondicionesalimentarias)?data.hogarcondicionesalimentarias.numerocomidas:'');
           $('#accesibilidadalimentos1').val((data.hogarcondicionesalimentarias)?data.hogarcondicionesalimentarias.accesibilidadalimentos1:'');
           $('#accesibilidadalimentos2').val((data.hogarcondicionesalimentarias)?data.hogarcondicionesalimentarias.accesibilidadalimentos2:'');
           $('#accesibilidadalimentos3').val((data.hogarcondicionesalimentarias)?data.hogarcondicionesalimentarias.accesibilidadalimentos3:'');
           $('#accesibilidad').val((data.hogarcondicionesalimentarias)?data.hogarcondicionesalimentarias.accesibilidad:'');

          // BIENESTAR condicioneshabitabilidad

           $('#rutasvef1').val((data.hogarentornofamiliar)?data.hogarentornofamiliar.rutasvef1:'');
           $('#rutasvef2').val((data.hogarentornofamiliar)?data.hogarentornofamiliar.rutasvef2:'');
           $('#redesdeapoyo').val((data.hogarentornofamiliar)?data.hogarentornofamiliar.redesdeapoyo:'');
          
              // BIENESTAR CONFORMACION FAMILAIR LOGICA

             


            let barrio=(data.hogardatoseconomicos)?data.hogardatoseconomicos.barrio:'';
          
              let comunaselect = parseInt($('#comuna').val());
          //  console.log(comunaselect);
            $.ajax({
                          url:'../verbarrios',
                          data:{comuna:comunaselect},
                          method: "GET",
                          dataType:'JSON',
                          success:function(data){
                            $('#barrio').html(data.options);
                            $('#barrio').val(barrio);
                          },
                          error: function(xhr, status, error) {
                                   // console.log(xhr.responseText);
                                }
                        })


                        if ($('input[name="laboresdecuidado[]"]:visible:checked').length > 0) {
                                $('input[name="laboresdecuidado[]"]').removeAttr('required');
                              }else{
                                $('input[name="laboresdecuidado[]"]:hidden').removeAttr('required');
                              }
                          
                    

                              
                    if ($('input[name="condicionespecial[]"]:visible:checked').length > 0) {
                          $('input[name="condicionespecial[]"]').removeAttr('required');
                      } else {
                          $('input[name="condicionespecial[]"]:hidden').removeAttr('required');
                      }


                      if ($('#condicionespecial196').is(':checked')) {
                     
                                // Desmarcar todos los otros checkboxes y ocultar sus contenedores de integrantes
                                $('#condicionespecial-container input[type="checkbox"]').not('#condicionespecial196').prop('checked', false);
                                $('.integrantes-container').hide();
                                $('.integrantes-container input[type="checkbox"]').prop('checked', false);
                               
                            }

                          
                            
                   

                      if ($('input[name="familiacuidadora[]"]:visible:checked').length > 0) {
                            $('input[name="familiacuidadora[]"]').removeAttr('required');
                        } else {
                            $('input[name="familiacuidadora[]"]').attr('required', 'required');
                        }

                        if ($('familiacuidadoracual').is(':checked')) {
                        $('#familiacuidadoracualdiv').css('display', '');
                        $('#familiacuidadoracual').attr('required', 'required');

                      } else {
                        $('#familiacuidadoracualdiv').css('display', 'none');
                       
                        $('#familiacuidadoracual').removeAttr('required');

                      }

                      if ($('#laboresdecuidado0').is(':checked')) {
                          $('#condicionespecial191').css('display','none');
                          $('.condicionespecial191').css('display','none');
                          $('#condicionespecial192').css('display','none');
                          $('.condicionespecial192').css('display','none');
                          $('#condicionespecial193').css('display','none');
                          $('.condicionespecial193').css('display','none');
                          $('#condicionespecial194').css('display','none');
                          $('.condicionespecial194').css('display','none');
                          $('#condicionespecial195').css('display','none');
                          $('.condicionespecial195').css('display','none');
                          $('#condicionespecial196').css('display','none');
                          $('.condicionespecial196').css('display','none');
                          $('#condicionespecialdiv').css('display', 'none');
                        $('input[name="condicionespecial[]"]').prop('checked', false);
                        $('input[name="condicionespecial[]"]').removeAttr('required');

                        $('#condicionespecial-container .integrantes-container').each(function() {
                            $(this).find('input[type="checkbox"]').prop('checked', false);
                            $(this).css('display', 'none'); // Oculta el contenedor de integrantes
                        });

                        $('#familiacuidadora197').css('display','none');
                          $('.familiacuidadora197').css('display','none');
                          $('#familiacuidadora198').css('display','none');
                          $('.familiacuidadora198').css('display','none');
                          $('#familiacuidadora199').css('display','none');
                          $('.familiacuidadora199').css('display','none');
                          $('#familiacuidadora200').css('display','none');
                          $('.familiacuidadora200').css('display','none');
                          $('#familiacuidadoradiv').css('display', 'none');
                        //  $('input[name="familiacuidadora[]"]').prop('checked', false);
                        $('input[name="familiacuidadora[]"]').removeAttr('required');
                        $('#familiacuidadora2div').css('display','none');
                        $('#familiacuidadora2').val('0');

                      } else {
                          $('#condicionespecial191').css('display','');
                          $('.condicionespecial191').css('display','');
                          $('#condicionespecial192').css('display','');
                          $('.condicionespecial192').css('display','');
                          $('#condicionespecial193').css('display','');
                          $('.condicionespecial193').css('display','');
                          $('#condicionespecial194').css('display','');
                          $('.condicionespecial194').css('display','');
                          $('#condicionespecial195').css('display','');
                          $('.condicionespecial195').css('display','');
                          $('#condicionespecial196').css('display','');
                          $('.condicionespecial196').css('display','');
                          $('#condicionespecialdiv').css('display', '');
                       //   $('input[name="condicionespecial[]"]').attr('required', 'required');

                          $('#familiacuidadora197').css('display','');
                          $('.familiacuidadora197').css('display','');
                          $('#familiacuidadora198').css('display','');
                          $('.familiacuidadora198').css('display','');
                          $('#familiacuidadora199').css('display','');
                          $('.familiacuidadora199').css('display','');
                          $('#familiacuidadora200').css('display','');
                          $('.familiacuidadora200').css('display','');
                          $('#familiacuidadoradiv').css('display', '');
                        //  $('input[name="familiacuidadora[]"]').attr('required', 'required');
                          $('#familiacuidadora2div').css('display','');
                          //$('#familiacuidadora2').val('');
                        }

                        // if ($('#familiacuidadora200').is(':checked')) {
                        //     $('#familiacuidadoracualdiv').css('display', '');

                        //   } else {
                        //     $('#familiacuidadoracualdiv').css('display', 'none');

                        //   }

                        if($('#familiamultiespecie1').val() == '2' || $('#familiamultiespecie1').val() == ''){
                              $('.familiamultiespecie2').css('display','none');
                              $('#familiamultiespecie2').attr('required',false)
                            }else{
                              $('.familiamultiespecie2').css('display','');
                              $('#familiamultiespecie2').attr('required',true)

                            }
                      
                            if($('#familiacuidadora2').val() == '0'){
                              $('#familiacuidadora2div').css('display','none');
                              $('#familiacuidadora2').removeAttr('required');
                            }

                            if ($('#familiacuidadora197').is(':checked')) {
                        $('input[name="familiacuidadora[]"]').not('#familiacuidadora197').closest('div').hide();
                      } else {
                        $('input[name="familiacuidadora[]"]').closest('div').show();
                      }
         },
        error: function(xhr, status, error) {
                  //console.log(xhr.responseText);
              }
      })
      })    

      $('#siguiente').click(function(){
        //console.log('click');
        $('#datosgeograficosmenu').tab('show');  
        
      }); 
      $('#siguiente2').click(function(){
        //console.log('click');
        $('#condicioneshabitabilidadmenu').tab('show');  
        
      });
      $('#siguiente3').click(function(){
      //  console.log('click');
        $('#accesoalimentosmenu').tab('show');  
        
      });
      $('#siguiente4').click(function(){
      //  console.log('click');
        $('#entornofamiliarmenu').tab('show');  
        
      });
    
      $('#atras').click(function(){
      //  console.log('click');
        $('#conformacionfamiliarmenu').tab('show');  
      }); 
      $('#atras2').click(function(){
       // console.log('click');
        $('#datosgeograficosmenu').tab('show');  
      });
      $('#atras3').click(function(){
      //  console.log('click');
        $('#condicioneshabitabilidadmenu').tab('show');  
      }); 
      $('#atras4').click(function(){
      //  console.log('click');
        $('#accesoalimentosmenu').tab('show');  
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
           var url = "../../public/rombointegrantes/:folio";
           url = url.replace(':folio', folio);
           window.location.href = url;
       }

       

       $(document).ready(function() {
     





          $('#formconformacionfamiliar').on('submit', function (event) {
        event.preventDefault(); // Detiene el envío del formulario

        var formData = $(this).serializeArray();
        var data = {
            'condicionespecial': [],
            'familiacuidadora': [
                  { id: '197', valor: 'NO' },
                  { id: '198', valor: 'NO' },
                  { id: '199', valor: 'NO' },
                  { id: '200', valor: 'NO' },
              ],
            'laboresdecuidado': []
        };

        $(formData).each(function (index, obj) {
            var name = obj.name.replace('[]', '');
            var selector = '[name="' + obj.name + '"][value="' + obj.value + '"]';
            var element = $(selector);
            var respuesta = element.is(':hidden') ? 'NO APLICA' : (element.attr('respuesta') || 'NO APLICA');

            if (name === 'condicionespecial') {
                var existingIndex = data[name].findIndex(item => item.id === obj.value);
                if (existingIndex !== -1) {
                    data[name][existingIndex].valor = respuesta;

                    var integrantes = [];
                    $('#integrantes-condicionespecial' + obj.value + '-container input[type="checkbox"]:checked').each(function () {
                        var integranteId = $(this).val();
                        if (!integrantes.includes(integranteId)) {
                            integrantes.push(integranteId);
                        }
                    });
                    data[name][existingIndex].idintegrante = integrantes;
                } else {
                    var newIntegrantes = $('#integrantes-condicionespecial' + obj.value + '-container input[type="checkbox"]:checked').map(function () {
                        return $(this).val();
                    }).get();

                    data[name].push({
                        id: obj.value,
                        valor: respuesta,
                        idintegrante: newIntegrantes
                    });
                }
            } else if (name === 'familiacuidadora') {
                var existingIndex = data[name].findIndex(item => item.id === obj.value);
                if (existingIndex !== -1) {
                    data[name][existingIndex].valor = respuesta;
                } else {
                    data[name].push({ id: obj.value, valor: respuesta });
                }
            } else if (name === 'laboresdecuidado') {
                if (!data[name].includes(obj.value)) {
                    data[name].push(obj.value);
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

         if (data['condicionespecial'].length === 0) {
         data['condicionespecial'].push('0');
         }

        //  data['condicionespecial'].forEach(item => {
        //      var selector = '[name="condicionespecial[]"][value="' + item.id + '"]';
        //      if ($(selector).length === 0 || $(selector).is(':hidden')) {
        //          item.valor = 'NO APLICA';
        //      }
        //  });

        data['familiacuidadora'].forEach(item => {
            var selector = '[name="familiacuidadora[]"][value="' + item.id + '"]';
            if ($(selector).length === 0 || $(selector).is(':hidden')) {
                item.valor = 'NO APLICA';
            }
        });

      

        console.log(data)

        $.ajax({
            url: '../conformacionfamiliar',
            method: $(this).attr('method'),
            data: { data: data },
            success: function (response) {
                $('#siguiente').css('display', '');
                $('#datosgeograficos').removeAttr('disabled');
            },
            error: function (xhr, status, error) {
            }
        });
    });

    $('#condicionespecial196').change(function() {  
          
        if ($(this).is(':checked')) {
            // Desmarcar todos los otros checkboxes y ocultar sus contenedores de integrantes
            $('#condicionespecial-container input[type="checkbox"]').not(this).prop('checked', false).trigger('change');
            $('.integrantes-container').hide();
            $('.integrantes-container input[type="checkbox"]').prop('checked', false);
            $('#familiacuidadora2div').css('display','none');
            $('#familiacuidadora2').val('0');
            $('#familiacuidadora2').removeAttr('required');
        }
    });

    $('#condicionespecial-container input[type="checkbox"]').not('#condicionespecial196').change(function() {
        if ($(this).is(':checked')) {
            // Desmarcar el checkbox de "Ninguna"
            $('#condicionespecial196').prop('checked', false);  
            $('#familiacuidadora2div').css('display','');
            $('#familiacuidadora2').val('');
            $('#familiacuidadora2').attr('required','required');
        }
      
    });

  


    $('#laboresdecuidado0').change(function() {
        if ($(this).is(':checked')) {
            // Desmarcar todos los otros checkboxes y ocultar sus contenedores de integrantes
            $('#laboresdecuidado-container input[type="checkbox"]').not(this).prop('checked', false).trigger('change');
        }
    });

    $('#laboresdecuidado-container input[type="checkbox"]').not('#laboresdecuidado0').change(function() {
        if ($(this).is(':checked')) {
            // Desmarcar el checkbox de "Ninguna"
            $('#laboresdecuidado0').prop('checked', false);
            $('#condicionespecial191').css('display','');
          $('.condicionespecial191').css('display','');
          $('#condicionespecial192').css('display','');
          $('.condicionespecial192').css('display','');
          $('#condicionespecial193').css('display','');
          $('.condicionespecial193').css('display','');
          $('#condicionespecial194').css('display','');
          $('.condicionespecial194').css('display','');
          $('#condicionespecial195').css('display','');
          $('.condicionespecial195').css('display','');
          $('#condicionespecial196').css('display','');
          $('.condicionespecial196').css('display','');
          $('#condicionespecialdiv').css('display', '');
          $('input[name="condicionespecial[]"]').attr('required', 'required');

          $('#familiacuidadora197').css('display','');
          $('.familiacuidadora197').css('display','');
          $('#familiacuidadora198').css('display','');
          $('.familiacuidadora198').css('display','');
          $('#familiacuidadora199').css('display','');
          $('.familiacuidadora199').css('display','');
          $('#familiacuidadora200').css('display','');
          $('.familiacuidadora200').css('display','');
          $('#familiacuidadoradiv').css('display', '');
          $('input[name="familiacuidadora[]"]').attr('required', 'required');
          $('#familiacuidadora2div').css('display','');
          $('#familiacuidadora2').val('');
        }
    });


  
  




     $('input[name="laboresdecuidado[]"]').change(function () {
         if ($('input[name="laboresdecuidado[]"]:visible:checked').length > 0) {
             $('input[name="laboresdecuidado[]"]').removeAttr('required');
         } else {
             $('input[name="laboresdecuidado[]"]').attr('required', 'required');
         }
     });

    $('input[name="condicionespecial[]"]').change(function () {
        if ($('input[name="condicionespecial[]"]:visible:checked').length > 0) {
            $('input[name="condicionespecial[]"]').removeAttr('required');
        } else {
            $('input[name="condicionespecial[]"]').attr('required', 'required');
        }
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

      //  console.log(data);

         $.ajax({
             url: '../datoseconomicos',
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
              'serviciospublicos': [
                  { id: '242', valor: 'NO' },
                  { id: '243', valor: 'NO' },
                  { id: '244', valor: 'NO' },
                  { id: '245', valor: 'NO' },
                  { id: '246', valor: 'NO' },
                  { id: '247', valor: 'NO' },
              ],
              'telecomunicaciones': [
                  { id: '248', valor: 'NO' },
                  { id: '249', valor: 'NO' },
                  { id: '250', valor: 'NO' },
                  { id: '251', valor: 'NO' },
                  { id: '252', valor: 'NO' },
                  { id: '253', valor: 'NO' },
                  { id: '254', valor: 'NO' },
                  { id: '255', valor: 'NO' },   
              ],
              'documentodepropiedad': [
                  { id: '262', valor: 'NO' },
                  { id: '263', valor: 'NO' },
                  { id: '264', valor: 'NO' },
              ]
            }
  

        $(formData).each(function(index, obj) {
    var name = obj.name.replace('[]', '');
    var selector = '[name="' + obj.name + '"][value="' + obj.value + '"]';
   // var respuesta = $(selector).attr('respuesta') || 'NO APLICA'; // Asegura obtener correctamente 'respuesta' o 'NO APLICA'
   var element = $(selector);
   var respuesta = element.is(':hidden') ? 'NO APLICA' : (element.attr('respuesta') || 'NO APLICA'); // Verifica si el elemento está oculto
   // console.log(respuesta, 'respuesta');

    if (name === 'serviciospublicos'  || name === 'telecomunicaciones' || name === 'documentodepropiedad') {
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
  data['serviciospublicos'].forEach(item => {
      var selector = '[name="serviciospublicos[]"][value="' + item.id + '"]';
      if ($(selector).length === 0 || $(selector).is(':hidden')) {
          item.valor = 'NO APLICA';
      }
  });

  data['telecomunicaciones'].forEach(item => {
      var selector = '[name="telecomunicaciones[]"][value="' + item.id + '"]';
      if ($(selector).length === 0 || $(selector).is(':hidden')) {
          item.valor = 'NO APLICA';
      }
  });

  data['documentodepropiedad'].forEach(item => {
      var selector = '[name="documentodepropiedad[]"][value="' + item.id + '"]';
      if ($(selector).length === 0 || $(selector).is(':hidden')) {
          item.valor = 'NO APLICA';
      }
  });

  //console.log(data)

        // Enviar los datos usando AJAX
        $.ajax({
            url: '../condicioneshabitabilidad',
            method: $(this).attr('method'),
            data: {data: data},
            success: function(response) {
              $('#siguiente3').css('display','');
              $('#datosgeograficos').removeAttr('disabled');
            },
            error: function(xhr, status, error) {
             //   console.error(error);
            }
        });
    });


    $('#formaccesoalimentos').on('submit', function(event) {
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

            })
 //console.log(data)
         $.ajax({
             url: '../accesoalimentos',
             method: $(this).attr('method'),
             data: {data: data},
             success: function(response) {
               $('#siguiente4').css('display','');
               $('#datosgeograficos').removeAttr('disabled');
             },
             error: function(xhr, status, error) {
                 console.error(error);
             }
         });
        
    });

 $('#formentornofamiliar').on('submit', function(event) {
        event.preventDefault(); // Detiene el envío del formulario

       
        var formData = $(this).serializeArray();
        var data = {
              'factoresderiesgovef': [
                  { id: '265', valor: 'NO' },
                  { id: '266', valor: 'NO' },
                  { id: '267', valor: 'NO' },
                  { id: '268', valor: 'NO' },
                  { id: '269', valor: 'NO' },
                  { id: '270', valor: 'NO' },
                  { id: '271', valor: 'NO' },
                  { id: '272', valor: 'NO' },
                  { id: '273', valor: 'NO' },
                  { id: '274', valor: 'NO' },
                  { id: '275', valor: 'NO' },
                  { id: '276', valor: 'NO' },
                  { id: '277', valor: 'NO' },
                  { id: '278', valor: 'NO' },

              ],
              'vefviolenciaenelentorno': [
                  { id: '279', valor: 'NO' },
                  { id: '280', valor: 'NO' },
                  { id: '281', valor: 'NO' },
                  { id: '282', valor: 'NO' },
                  { id: '283', valor: 'NO' },
                  { id: '284', valor: 'NO' },
                  { id: '285', valor: 'NO' },
              ],
              'rutasvef3': [
                  { id: '286', valor: 'NO' },
                  { id: '287', valor: 'NO' },
                  { id: '288', valor: 'NO' },
                  { id: '289', valor: 'NO' },
                  { id: '290', valor: 'NO' },
                  { id: '291', valor: 'NO' },
                  { id: '292', valor: 'NO' },
                  { id: '293', valor: 'NO' },
                  { id: '294', valor: 'NO' },
              ],
              'planeacionfinanciera4': [
                  { id: '295', valor: 'NO' },
                  { id: '296', valor: 'NO' },
                  { id: '297', valor: 'NO' },
              ],
              'disciplinapositiva': [
                  { id: '298', valor: 'NO' },
                  { id: '299', valor: 'NO' },
                  { id: '300', valor: 'NO' },
                  { id: '301', valor: 'NO' },
                  { id: '302', valor: 'NO' },
                  { id: '303', valor: 'NO' },
                  { id: '304', valor: 'NO' },
              ],
              'tiempolibre': [
                  { id: '305', valor: 'NO' },
                  { id: '306', valor: 'NO' },
                  { id: '307', valor: 'NO' },
                  { id: '308', valor: 'NO' },
                  { id: '309', valor: 'NO' },
              ]
            }
            

        $(formData).each(function(index, obj) {
            var name = obj.name.replace('[]', '');
            var selector = '[name="' + obj.name + '"][value="' + obj.value + '"]';
          // var respuesta = $(selector).attr('respuesta') || 'NO APLICA'; // Asegura obtener correctamente 'respuesta' o 'NO APLICA'
          var element = $(selector);
          var respuesta = element.is(':hidden') ? 'NO APLICA' : (element.attr('respuesta') || 'NO APLICA'); // Verifica si el elemento está oculto
           // console.log(respuesta, 'respuesta');

            if (name === 'factoresderiesgovef'  || name === 'vefviolenciaenelentorno' 
            || name === 'rutasvef3' || name === 'planeacionfinanciera4' 
            || name === 'disciplinapositiva' || name === 'tiempolibre') {
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
          data['factoresderiesgovef'].forEach(item => {
              var selector = '[name="factoresderiesgovef[]"][value="' + item.id + '"]';
              if ($(selector).length === 0 || $(selector).is(':hidden')) {
                  item.valor = 'NO APLICA';
              }
          });

          data['vefviolenciaenelentorno'].forEach(item => {
              var selector = '[name="vefviolenciaenelentorno[]"][value="' + item.id + '"]';
              if ($(selector).length === 0 || $(selector).is(':hidden')) {
                  item.valor = 'NO APLICA';
              }
          });

          data['rutasvef3'].forEach(item => {
              var selector = '[name="rutasvef3[]"][value="' + item.id + '"]';
              if ($(selector).length === 0 || $(selector).is(':hidden')) {
                  item.valor = 'NO APLICA';
              }
          });

          data['planeacionfinanciera4'].forEach(item => {
              var selector = '[name="planeacionfinanciera4[]"][value="' + item.id + '"]';
              if ($(selector).length === 0 || $(selector).is(':hidden')) {
                  item.valor = 'NO APLICA';
              }
          });

          data['disciplinapositiva'].forEach(item => {
              var selector = '[name="disciplinapositiva[]"][value="' + item.id + '"]';
              if ($(selector).length === 0 || $(selector).is(':hidden')) {
                  item.valor = 'NO APLICA';
              }
          });

          data['tiempolibre'].forEach(item => {
              var selector = '[name="tiempolibre[]"][value="' + item.id + '"]';
              if ($(selector).length === 0 || $(selector).is(':hidden')) {
                  item.valor = 'NO APLICA';
              }
          });

         

                // Enviar los datos usando AJAX
               $.ajax({
                    url: '../entornofamiliar',
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
                    //  console.log('okl')
                    },
                    error: function(xhr, status, error) {
                              console.log(xhr.responseText);
                          }
                  })
    }

    function enviarDatos2(data) {
       // console.log('Datos del formulario:', data);
        $.ajax({
                    url:'./guardarintegrante',
                    data:{data},
                    method: "GET",
                    dataType:'JSON',
                    success:function(data){
                      $('#volver2').css('display','');
                   //   console.log('okl')
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

     $('#comuna').change(function(){
       let comunaselect = $('#comuna').val();
     //  console.log(comunaselect);
       $.ajax({
                     url:'../verbarrios',
                     data:{comuna:comunaselect},
                     method: "GET",
                     dataType:'JSON',
                     success:function(data){
                 
                       $('#barrio').html(data.options);

                    //   console.log('okl', data.barriosselect);
                     },
                     error: function(xhr, status, error) {
                               console.log(xhr.responseText);
                           }
                   })
     })

$('#ubicacion').change(function(){
  if($('#ubicacion').val() == '209'){
    $('#campesina').val('');
    $('#campesinadiv').css('display','');
    $('#campesina').attr('required','required');
  }else{
    $('#campesina').val('0');
    $('#campesinadiv').css('display','none');
    $('#campesina').attr('required','required');
  }
});



 



   

    // Manejar el cambio de los otros checkboxes
  
    // Mostrar/ocultar el contenedor de integrantes según la selección de condiciones especiales
    $('#condicionespecial-container input[type="checkbox"]').change(function() {
        var conditionId = $(this).val();
        if ($(this).is(':checked')) {
            $('#integrantes-condicionespecial' + conditionId + '-container').show(); // Mostrar el contenedor de integrantes específico
        } else {
            $('#integrantes-condicionespecial' + conditionId + '-container').hide(); // Ocultar el contenedor de integrantes específico
            $('#integrantes-condicionespecial' + conditionId + '-container input[type="checkbox"]').prop('checked', false); // Deseleccionar los integrantes
        }
    });

    // Validar los checkboxes de "laboresdecuidado"
     $('input[name="laboresdecuidado[]"]').change(function() {
         if ($('input[name="laboresdecuidado[]"]:visible:checked').length > 0) {
             $('input[name="laboresdecuidado[]"]').removeAttr('required');
         } else {
             $('input[name="laboresdecuidado[]"]').attr('required', 'required');
         }
     });

    // Validar los checkboxes de "condicionespecial"
    $('input[name="condicionespecial[]"]').change(function() {
        if ($('input[name="condicionespecial[]"]:visible:checked').length > 0) {
            $('input[name="condicionespecial[]"]').removeAttr('required');
        } else {
            $('input[name="condicionespecial[]"]').attr('required', 'required');
        }
    });

    $('input[name="familiacuidadora[]"]').change(function() {
    if ($(this).attr('id') === 'familiacuidadora197' && $(this).is(':checked')) {
        $('input[name="familiacuidadora[]"]').not('#familiacuidadora197').each(function() {
            $(this).prop('checked', false); // Desmarcar
            $(this).closest('div').hide();  // Ocultar
            $('#familiacuidadoracualdiv').css('display','none');
            $('#familiacuidadoracual').val('0');
            $('#familiacuidadoracual').removeAttr('required');

        });
    } else if ($(this).attr('id') === 'familiacuidadora197' && !$(this).is(':checked')) {
        $('input[name="familiacuidadora[]"]').closest('div').show(); // Mostrar todos

    }
  
});
    
      $('input[name="familiacuidadora[]"]').change(function() {
          if ($('input[name="familiacuidadora[]"]:visible:checked').length > 0) {
              $('input[name="familiacuidadora[]"]').removeAttr('required');
          } else {
              $('input[name="familiacuidadora[]"]').attr('required', 'required');
          }
      });

      $('#familiacuidadora200').change(function() {
        if ($(this).is(':checked')) {
          $('#familiacuidadoracualdiv').css('display', '');
          $('#familiacuidadoracual').val('');
          $('#familiacuidadoracual').attr('required', 'required');

        } else {
          $('#familiacuidadoracualdiv').css('display', 'none');
          $('#familiacuidadoracual').val('0');
          $('#familiacuidadoracual').removeAttr('required');

        }
      });


      $('#laboresdecuidado0').change(function() {
        if ($(this).is(':checked')) {
          $('#condicionespecial191').css('display','none');
          $('.condicionespecial191').css('display','none');
          $('#condicionespecial192').css('display','none');
          $('.condicionespecial192').css('display','none');
          $('#condicionespecial193').css('display','none');
          $('.condicionespecial193').css('display','none');
          $('#condicionespecial194').css('display','none');
          $('.condicionespecial194').css('display','none');
          $('#condicionespecial195').css('display','none');
          $('.condicionespecial195').css('display','none');
          $('#condicionespecial196').css('display','none');
          $('.condicionespecial196').css('display','none');
          $('#condicionespecialdiv').css('display', 'none');
          $('input[name="condicionespecial[]"]').prop('checked', false);
          $('input[name="condicionespecial[]"]').removeAttr('required');
          

        $('#condicionespecial-container .integrantes-container').each(function() {
            $(this).find('input[type="checkbox"]').prop('checked', false);
            $(this).css('display', 'none'); // Oculta el contenedor de integrantes
        });

        $('#familiacuidadora197').css('display','none');
          $('.familiacuidadora197').css('display','none');
          $('#familiacuidadora198').css('display','none');
          $('.familiacuidadora198').css('display','none');
          $('#familiacuidadora199').css('display','none');
          $('.familiacuidadora199').css('display','none');
          $('#familiacuidadora200').css('display','none');
          $('.familiacuidadora200').css('display','none');
          $('#familiacuidadoradiv').css('display', 'none');
          $('input[name="familiacuidadora[]"]').prop('checked', false);
        $('input[name="familiacuidadora[]"]').removeAttr('required');
        $('#familiacuidadora2div').css('display','none');
        $('#familiacuidadora2').val('0');
        $('#familiacuidadoracual').val('0');

      } else {
          $('#condicionespecial191').css('display','');
          $('.condicionespecial191').css('display','');
          $('#condicionespecial192').css('display','');
          $('.condicionespecial192').css('display','');
          $('#condicionespecial193').css('display','');
          $('.condicionespecial193').css('display','');
          $('#condicionespecial194').css('display','');
          $('.condicionespecial194').css('display','');
          $('#condicionespecial195').css('display','');
          $('.condicionespecial195').css('display','');
          $('#condicionespecial196').css('display','');
          $('.condicionespecial196').css('display','');
          $('#condicionespecialdiv').css('display', '');
          $('input[name="condicionespecial[]"]').attr('required', 'required');

          $('#familiacuidadora197').css('display','');
          $('.familiacuidadora197').css('display','');
          $('#familiacuidadora198').css('display','');
          $('.familiacuidadora198').css('display','');
          $('#familiacuidadora199').css('display','');
          $('.familiacuidadora199').css('display','');
          $('#familiacuidadora200').css('display','');
          $('.familiacuidadora200').css('display','');
          $('#familiacuidadoradiv').css('display', '');
          $('input[name="familiacuidadora[]"]').attr('required', 'required');
          $('#familiacuidadora2div').css('display','');
          $('#familiacuidadora2').val('');
        }
      });


      //ocultar todo si no hay nadie seleccionado

      // let anyChecked = $('#laboresdecuidado-container input[type="checkbox"]:checked').length > 0;
      // if (anyChecked) {
      //       $('#condicionespecial-container').show();
      //   } else {
      //       $('#condicionespecial-container').hide();
      //   }
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