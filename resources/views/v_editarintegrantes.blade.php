@extends('componentes.navlateral')

@section('title', 'editarintegrantes')
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
<style>
        .select-wrapper {
            position: relative;
        }
        .select-wrapper select {
            width: 100%;
            height: calc(1.5em + .75rem + 2px);
        }
        .select-wrapper .dropdown-menu {
            display: none;
            position: absolute;
            width: 100%;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            max-height: 200px;
            overflow-y: auto;
            border: 1px solid #ced4da;
            border-radius: .25rem;
        }
        .select-wrapper .dropdown-menu.show {
            display: block;
        }
        .select-wrapper .dropdown-menu .dropdown-item {
            cursor: pointer;
        }
        .select-wrapper .dropdown-menu .dropdown-item:hover {
            background-color: #f1f1f1;
            color:black;
        }
        .select-wrapper .dropdown-menu .search-box {
            width: 100%;
            box-sizing: border-box;
            padding: .375rem .75rem;
            border: none;
            border-bottom: 1px solid #ced4da;
        }

        .blocked {
              pointer-events: none; /* Desactiva la interacción con el campo */
              background-color: #e9ecef; /* O un color para indicar que está bloqueado */
              opacity: 0.7; /* Opcional: un poco de transparencia */
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
            <span class="badge bg-primary" id="">EDITAR INTEGRANTES</span>
            </button>
            <div class="progress">
                <div class="progress-bar bg-success" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>

    <div><span class="badge bg-success mt-2" id="folio">Folio: 505062 </span>
    <span class="badge bg-primary" style="display:none" id="idintegrante"></span>
    <span class="badge bg-primary" style="background:#0dcaf0 !important; color:white" id="nombre">Idintegrante: 50506201 </span><br>
    </div>

    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <div class="row">
      <ul class="nav nav-tabs" role="tablist">
      <li class="nav-item" role="presentation">
    <a id="identificacion" class="nav-link active" data-bs-toggle="tab" href="#home" aria-selected="true" role="tab" tabindex="-1">INTEGRANTES DEL HOGAR
</a>
  </li>
  <li class="nav-item" role="presentation">
    <a id="identatario" disabled="" class="nav-link " data-bs-toggle="tab" href="#profile" aria-selected="false" role="tab" tabindex="-1">COMPONENTE IDENTITARIO</a>
  </li>

  
</ul>



<div id="myTabContent" class="tab-content"><br>
  <div class="tab-pane fade active show" id="home" role="tabpanel" aria-labelledby="identificacion">
    <div class="text-center"><label for="">Avatar</label></div>


  <div class="avatar text-center" style="cursor:pointer">
    <img src="{{asset('avatares/blanco.png')}} " id="imagenDinamica" class="rounded-circle" alt="Avatar" style="width: 150px; height: 150px;" data-bs-toggle="modal" data-bs-target="#exampleModal">
  </div>

          <form id="integranteshogar" class="row g-3 was-validated">     
            
          <div class="col-md-3" style="display:none">
            <input type="text" placeholder="folio" class="form-control form-control-sm  " id="folioinput" name="folio" value="" >
          </div>
          <div class="col-md-3" style="display:none">
            <input type="text" placeholder="idintegrante" class="form-control form-control-sm  " id="idintegrante1" name="idintegrante" value="" >
          </div>
          <div class="col-md-3" style="display:none">
            <input type="text" placeholder="usuario" class="form-control form-control-sm  " id="usuario" name="usuario" value="{{ Session::get('cedula') }}" >
          </div>

            <label for="validationServer04" class="form-label">¿Cuál es tu nombre completo?</label>
          <div class="col-md-3">
          <input type="text" class="form-control form-control-sm" placeholder="Nombre 1" style="text-transform: uppercase;" onkeypress="return soloLetras(event)"  id="nombre1" name="nombre1" value="" required>
          </div>
          <div class="col-md-3">
            <input type="text" class="form-control form-control-sm " placeholder="Nombre 2" style="text-transform: uppercase;" onkeypress="return soloLetras(event)" id="nombre2"  name="nombre2" value="" >
          </div>
          <div class="col-md-3">
            <input type="text" class="form-control form-control-sm " placeholder="Apellido 1" style="text-transform: uppercase;" onkeypress="return soloLetras(event)" id="apellido1" name="apellido1"  value="" required>
          </div>
          <div class="col-md-3">
            <input type="text" class="form-control form-control-sm " placeholder="Apellido 2" style="text-transform: uppercase;" onkeypress="return soloLetras(event)" id="apellido2" name="apellido2"  value="" >
          </div>
          <div class="col-md-12">
                  <label for="validationServer04" class="form-label">¿Tienes un nombre identitario o cómo te gusta que te llamen?</label>
                  <select class="form-control form-control-sm" id="nombreidentatario1" name="nombreidentatario1" aria-describedby="validationServer04Feedback" required="">
                    {{!!$sino!!}}
                  </select>
                </div>
            <div class="col-md-12" id="nombreidentatario2div" >
                <label for="validationServer04" class="form-label">¿Cuál es tu nombre identitario?</label>
                <input type="text" class="form-control form-control-sm "  id="nombreidentatario2" name="nombreidentatario2"  value=""  >

            </div>
            <div class="col-md-6">
            <label for="validationServer04" class="form-label">¿Cuál es tu fecha de nacimiento?</label>
            <input type="date"  min="1900-01-01"  oninput="calcularedad(this.value)" class="form-control form-control-sm "  name="fechanacimiento"  id="fechanacimiento" value="" required>
          </div>
          <div class="col-md-6">
            <label for="validationServer04" class="form-label">¿Escribe de nuevo tu fecha de nacimiento?</label>
            <input type="date"  min="1900-01-01" id="fechanacimiento2" value="" class="form-control form-control-sm "  required>
          </div>
          <div class="form-group col-sm">
                <blockquote class="blockquote text-center">
                    <p class="mb-0"></p><h6>Edad:</h6><p></p>
                    <p class="mb-0"></p><h5 id="edad" name="edad">0</h5><p></p>
                    <input style="display:none" type="text" id="edadinput" name="edad">
                </blockquote>
            </div>
          <!-- <div class="col-md-6">
                <label for="validationServer04" class="form-label">¿Cuál es tu país de nacimiento?</label>
                <select class="form-control form-control-sm" id="nacionalidad" name="nacionalidad" aria-describedby="validationServer04Feedback" required="">
               
              </select>
            </div>  -->

            <div class="col-md-6">
                <label for="nacionalidad" class="form-label">¿Cuál es tu país de nacimiento?</label>
                <div class="select-wrapper">
                    <select class="form-control form-control-sm" id="nacionalidad"  name="nacionalidad" aria-describedby="validationServer04Feedback" required="">
                    {!!$paises!!}
                    </select>
                    <div class="dropdown-menu" id="dropdown-menu">
                        <input type="text" class="form-control search-box" id="searchBox" placeholder="Busca tu país..." autocomplete="off">
                        <div id="dropdown-options">
                            <!-- Las opciones del select se replicarán aquí -->
                        </div>
                    </div>
                </div>
            </div>






            <div class="col-md-6" >
                <label for="validationServer04" class="form-label">¿Qué tipo de documento de identidad tienes?</label>
                <select class="form-control form-control-sm" id="tipodocumento" name="tipodocumento" aria-describedby="validationServer04Feedback" required="">
                {{!!$tipodocumento!!}}
              </select>
            </div>
            <div class="col-md-12" id="documentodiv" >
            <label for="validationServer04" class="form-label">¿cuál es el número de tu documento?</label>
            <input type="text" class="form-control form-control-sm "  name="documento"  id="documento" value="" >
          </div>
          <div class="col-md-6" id="telefonodiv" >
            <label for="validationServer04" class="form-label">Telefono</label>
            <input type="text" class="form-control form-control-sm" name="telefono" id="telefono" value="" maxlength="10" oninput="limitarEntrada(this)">
            </div><div class="col-md-6" id="celulardiv" >
            <label for="validationServer04" class="form-label">Celular</label>
            <input type="text" class="form-control form-control-sm" name="celular" id="celular" value="" maxlength="10" oninput="limitarEntrada(this)">
            </div>
          <div class="col-md-6">
                <label for="validationServer04" class="form-label">¿Eres el/la representante del hogar?</label>
                <select class="form-control form-control-sm" id="representante" name="representante" aria-describedby="validationServer04Feedback" required="">
                {{!!$sino!!}}
              </select>
            </div>
            <div class="col-md-6" id="parentescodiv">
                <label for="validationServer04" class="form-label">¿Parentesco con el representante del hogar?</label>
                <select class="form-control form-control-sm" id="parentesco" name="parentesco" aria-describedby="validationServer04Feedback" required="">
                  {{!!$parentesco!!}}
                </select>
            </div>
            <div class="col-md-6" id="jefedelhogardiv">
                <label for="validationServer04" class="form-label">¿Eres el jefe del hogar?</label>
                <select class="form-control form-control-sm" id="jefedelhogar" name="jefedelhogar" aria-describedby="validationServer04Feedback" required="">
                  {{!!$sino!!}}
                </select>
            </div>
            <div class="col-md-6">
                <label for="validationServer04" class="form-label">¿Cuál es tu sexo de nacimiento?</label>
                <select class="form-control form-control-sm" id="sexo" name="sexo" aria-describedby="validationServer04Feedback" required="">
                  {{!!$sexo!!}}
                </select>
            </div>
            <div class="col-md-6">
                <label for="validationServer04" class="form-label">¿Cuál es tu sexo de nacimiento?</label>
                <select class="form-control form-control-sm" id="sexo2"  aria-describedby="validationServer04Feedback" required="">
                  {{!!$sexo!!}}
                </select>
            </div>
            <div class="col-md-6" id="estadocivildiv">
                <label for="validationServer04" class="form-label">¿Cuál es tu estado civil?</label>
                <select class="form-control form-control-sm" id="estadocivil" name="estadocivil" aria-describedby="validationServer04Feedback" required="">
                  {{!!$estadocivil!!}}
                </select>
            </div>

            <div class="col-md-6" id="privadodelalibertaddiv">
                <label for="validationServer04" class="form-label">¿El integrante se encuentra con medida privativa de la libertad en prisión domiciliaria?</label>
                <select class="form-control form-control-sm" id="privadodelalibertad" name="privadodelalibertad" aria-describedby="validationServer04Feedback" required="">
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
  <form class="row g-3 was-validated" id="formidentatario">
  <div class="col-md-3" style="display:none">
            <input type="text" placeholder="folio" class="form-control form-control-sm  " id="folioinput2" name="folio" value="" required="">
          </div>
          <div class="col-md-3" style="display:none">
            <input type="text" placeholder="idintegrante" class="form-control form-control-sm  " id="idintegrante2" name="idintegrante" value="" required="">
          </div>
          <div class="col-md-3" style="display:none">
            <input type="text" placeholder="usuario" class="form-control form-control-sm  " id="usuario" name="usuario" value="{{ Session::get('cedula') }}" >
          </div>
        <div class="col-md-4" id="hijosdiv">
                  <label for="validationServer04" class="form-label">¿Has tenido hijos?</label>
                  <select class="form-control form-control-sm" id="hijos" name="hijos" aria-describedby="validationServer04Feedback" required="">
                    {{!!$sino!!}}
                </select>
                </div>
        
          <div class="col-md-4" id="gestantediv">
            <label for="validationServer04" class="form-label">¿Eres una mujer gestante?</label>
            <select class="form-control form-control-sm" id="gestante" name="gestante" aria-describedby="validationServer04Feedback" required>
            {{!!$sino!!}}            
          </select>
          </div>
          <div class="col-md-4" id="lactantediv">
            <label for="validationServer04" class="form-label">¿Eres una mujer lactante?</label>
            <select class="form-control form-control-sm" id="lactante" name="lactante" aria-describedby="validationServer04Feedback" required>
            {{!!$sino!!}}     
                </select>
          </div>
          <div class="col-md-4" id="situacionmilitardiv">
            <label for="validationServer04" class="form-label">¿Tienes resuelta su situación militar?</label>
            <select class="form-control form-control-sm" id="situacionmilitar" name="situacionmilitar" aria-describedby="validationServer04Feedback" >
            {{!!$sino!!}}         
             </select>
          </div>
          <div class="col-md-6" id="orientaciondiv">
            <label for="validationServer04" class="form-label">¿Cuál es tu orientación sexual?            </label>
            <select class="form-control form-control-sm" id="orientacion" name="orientacion" aria-describedby="validationServer04Feedback" required="">
            {{!!$orientacion!!}}
          </select>
          </div>
          <div class="col-md" id="cualorientaciondiv" >
            <label for="validationServer04" class="form-label">¿Cúal?</label>
            <input type="text" class="form-control form-control-sm" name="cualorientacion" style="text-transform: uppercase;" onkeypress="return soloLetras(event)" id="cualorientacion" value="">
          </div>
          <div class="col-md-6" id="identidaddiv">
            <label for="validationServer04" class="form-label">¿Cuál es tu identidad de género?</label>
            <select class="form-control form-control-sm" id="identidad" name="identidad" aria-describedby="validationServer04Feedback" required="">
            {{!!$identidad!!}}
          </select>
          </div>
          <div class="col-md" id="cualidentidaddiv" >
            <label for="validationServer04" class="form-label">¿Cúal?</label>
            <input type="text" class="form-control form-control-sm" id="cualidentidad" name="cualidentidad" value="">
          </div>
          <div class="col-md-6">
            <label for="validationServer04" class="form-label">¿Perteneces a algún grupo étnico?</label>
            <select class="form-control form-control-sm" id="etnia" name="etnia" aria-describedby="validationServer04Feedback" required="">
            {{!!$etnia!!}}
          </select>
          </div>
          <div class="col-md-6" id="certificacionetnicadiv">
            <label for="validationServer04" class="form-label">¿Cuentas con certificación de pertenencia étnica?</label>
            <select class="form-control form-control-sm" id="certificacionetnica" name="certificacionetnica" aria-describedby="validationServer04Feedback" required="">
            {{!!$sino!!}}
                      </select>
          </div>
          <div class="col-md-12" id="victima1div">
            <label for="validationServer04" class="form-label">¿Eres víctima del conflicto armado colombiano?</label>
            <select class="form-control form-control-sm" id="victima1" name="victima1" aria-describedby="validationServer04Feedback" required="">
            {{!!$sino!!}}
          </select>
          </div>
          <div class="col-md-6" id="victima2div">
            <label for="validationServer04" class="form-label">¿Estás reconocido como víctima del conflicto armado colombiano y cuentas con RUV?            </label>
            <select class="form-control form-control-sm" id="victima2" name="victima2" aria-describedby="validationServer04Feedback" required="">
            {{!!$sino!!}}
          </select>
          </div>
          <div class="col-md-6" id="victima3div">
            <label for="validationServer04" class="form-label">¿Has recibido algún tipo de reparación o apoyo derivado del reconocimiento como víctima del conflcto armado colombiano?</label>
            <select class="form-control form-control-sm" id="victima3" name="victima3" aria-describedby="validationServer04Feedback" required="">
            {{!!$sino!!}}
          </select>
          </div>
          <div class="col-md-6" id="migrantes1div">
            <label for="validationServer04" class="form-label">¿Requieres  asistencia para su regularización e identificación en el territorio nacional?</label>
            <select class="form-control form-control-sm" id="migrantes1" name="migrantes1" aria-describedby="validationServer04Feedback" required="">
            {{!!$sino!!}}
          </select>
          </div>
          <div class="col-md-6" id="migrantes2div">
            <label for="validationServer04" class="form-label">¿Qué instancias has utilizado el hogar para la regularización e identificación en el territorio nacional?</label>
            <select class="form-control form-control-sm" id="migrantes2" name="migrantes2" aria-describedby="validationServer04Feedback" required="">
            {{!!$migrantes2!!}}
          </select>
          </div>
          <div class="col-md" id="cualongdiv">
            <label for="validationServer04" class="form-label">¿Cúal?</label>
            <input type="text" class="form-control form-control-sm" style="text-transform: uppercase;" onkeypress="return soloLetras(event)" id="cualong" name="cualong" value="">
          </div>
          <hr>
    
          <div class="row pt-4">
            <div class="text-start col">
              <div class="btn btn-outline-primary" id="atras">volver</div>
            </div>
              <div class="text-end col">
                <button class="btn btn-outline-success" type="submit">Guardar</button>
                <div class="btn btn-outline-primary" id="volver2" style="display:none">Siguiente</div>
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


paginacargando();
    
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
    
    $(document).ready(function(){
      $('#volveratras').css('display','none');
    
        //  var imagenUrl = localStorage.getItem('imagen');
        //  if (imagenUrl) {
        //      $('#imagenDinamica').attr('src', imagenUrl);
        //  } 
        let folio=localStorage.getItem('folio');
        let idintegrante=localStorage.getItem('idintegrante');
        let nombre=localStorage.getItem('nombre');
        $('#folio').html(`Folio: ${folio} `);
        $('#idintegrante').html(`Nombre: ${nombre} `);
        $('#nombre').html(`Idintegrante: ${idintegrante} `);

        $.ajax({
        url:'./responderencuesta',
        data:{folio:folio, idintegrante:idintegrante},
        method: "GET",
        dataType:'JSON',
        success:function(data){
          if(data.integrantes ==null){
            //$('#imagenDinamica').attr('src',`../public/avatares/${(data.integrantes.sexo == '12')?'../avatares/hombre_avatar':'../avatares/mujer_avatar'}.png`)
          }else{
            
              if(data.integrantes.avatar != null && data.integrantes.avatar !=''){$('#imagenDinamica').attr('src',`../public/avatares/${data.integrantes.avatar}.png`) }  
                
             

            $('#identatario').removeAttr('disabled');
            $('#siguiente').css('display',''); 
            $('#volver2').css('display','');}
          //  $('#imagenDinamica').attr('src',`../public/avatares/${data.avatar}.png`)
          $('#folioinput').val(localStorage.getItem('folio'));
          $('#folioinput2').val(localStorage.getItem('folio'));
          $('#nombre1').val((data.integrantes)?data.integrantes.nombre1:'');
          $('#nombre2').val((data.integrantes)?data.integrantes.nombre2:'');
          $('#apellido1').val((data.integrantes)?data.integrantes.apellido1:'');
          $('#apellido2').val((data.integrantes)?data.integrantes.apellido2:'');   
          $('#nombreidentatario2').val((data.integrantes)?data.integrantes.nombreidentatario2:'');
          $('#fechanacimiento').val((data.integrantes)?data.integrantes.fechanacimiento:'');      
          $('#nombreidentatario1').val((data.integrantes)?data.integrantes.nombreidentatario1:'');
          $('#documento').val((data.integrantes)?data.integrantes.documento:'');
          $('#nacionalidad').val((data.integrantes)?data.integrantes.nacionalidad:''); 
          $('#tipodocumento').val((data.integrantes)?data.integrantes.tipodocumento:'');
          $('#representante').val((data.integrantes)?data.integrantes.representante:'');
          $('#sexo').val((data.integrantes)?data.integrantes.sexo:'');
          $('#edadinput').val((data.integrantes)?data.integrantes.edad:'');
          $('#parentesco').val((data.integrantes)?data.integrantes.parentesco:'');
          $('#jefedelhogar').val((data.integrantes)?data.integrantes.jefedelhogar:'');
          $('#edad').html((data.integrantes)?data.integrantes.edad:'0');
          $('#estadocivil').val((data.integrantes)?data.integrantes.estadocivil:'');
          $('#privadodelalibertad').val((data.integrantes)?data.integrantes.privadodelalibertad:'');
          $('#hijos').val((data.integrantesidentitario)?data.integrantesidentitario.hijos:'');
          $('#gestante').val((data.integrantesidentitario)?data.integrantesidentitario.gestante:'');
          $('#lactante').val((data.integrantesidentitario)?data.integrantesidentitario.lactante:'');
          $('#situacionmilitar').val((data.integrantesidentitario)?data.integrantesidentitario.situacionmilitar:'');
          $('#certificacionetnica').val((data.integrantesidentitario)?data.integrantesidentitario.certificacionetnica:'');
          $('#victima1').val((data.integrantesidentitario)?data.integrantesidentitario.victima1:'');
          $('#victima2').val((data.integrantesidentitario)?data.integrantesidentitario.victima2:'');
          $('#victima3').val((data.integrantesidentitario)?data.integrantesidentitario.victima3:'');
          $('#migrantes1').val((data.integrantesidentitario)?data.integrantesidentitario.migrantes1:'');
          $('#orientacion').val((data.integrantesidentitario)?data.integrantesidentitario.orientacion:'');
          $('#identidad').val((data.integrantesidentitario)?data.integrantesidentitario.identidad:'');
          $('#etnia').val((data.integrantesidentitario)?data.integrantesidentitario.etnia:'');
          $('#migrantes2').val((data.integrantesidentitario)?data.integrantesidentitario.migrantes2:'');
          $('#cualidentidad').val((data.integrantesidentitario)?data.integrantesidentitario.cualidentidad:''); 
          $('#cualorientacion').val((data.integrantesidentitario)?data.integrantesidentitario.cualorientacion:'');
          $('#cualong').val((data.integrantesidentitario)?data.integrantesidentitario.cualong:'');
          $('#telefono').val((data.integrantes)?data.integrantes.telefono:'');
          $('#celular').val((data.integrantes)?data.integrantes.celular:'');

          if(localStorage.getItem('idintegrante') == ''){
            localStorage.setItem('idintegrante',data.leerintegrantes)
          }
          console.log(localStorage.getItem('idintegrante', 'hollsss'))
          $('#idintegrante1').val(localStorage.getItem('idintegrante'));
          $('#idintegrante2').val(localStorage.getItem('idintegrante'));


          if($('#tipodocumento').val()=='11'){
            $('#documentodiv').css('display','none')
          }
          if($('#nombreidentatario1').val()=='1'){
            $('#nombreidentatario2div').css('display','')
          }else{
            $('#nombreidentatario2div').css('display','none')
          }
          

           if(data.existerepresentante =='1' && ((data.integrantes)?(data.integrantes.representante != '1'):false)){
             $('#representante').val('2');
             $('#representante').addClass('blocked');
            //  $('#jefedelhogar').val('2');
            //  $('#jefedelhogar').addClass('blocked');
           } if(parseInt($('#edad').html()) <= '17'){
             $('#representante').val('2');
             $('#representante').addClass('blocked');
              $('#jefedelhogar').val('2');
              $('#jefedelhogar').addClass('blocked');
           } if(data.existerepresentante =='1' && parseInt($('#edad').html()) >= '18' && ((data.integrantes)?(data.integrantes.representante != '1'):false)){
             $('#representante').val('2');
             $('#representante').addClass('blocked');
            //  $('#jefedelhogar').val('2');
            //  $('#jefedelhogar').addClass('blocked');
           }
           if(data.existerepresentante =='0' && parseInt($('#edad').html()) >= '18'){
             $('#representante').removeClass('blocked');
           //  $('#jefedelhogar').removeClass('blocked');
           }

           if(data.existejefedelhogar =='1' && ((data.integrantes)?(data.integrantes.jefedelhogar != '1'):false)){
             $('#jefedelhogar').val('2');
             $('#jefedelhogar').addClass('blocked');
           } 
            if(data.existejefedelhogar =='1' && parseInt($('#edad').html()) >= '18' && ((data.integrantes)?(data.integrantes.jefedelhogar != '1'):false)){
             $('#jefedelhogar').addClass('blocked');
            }
            if(data.existejefedelhogar =='0' && parseInt($('#edad').html()) >= '18'  && ((data.integrantes)?(data.integrantes.jefedelhogar != '1'):false)){
             $('#jefedelhogar').removeClass('blocked');
            }
            if(data.existejefedelhogar =='1' && parseInt($('#edad').html()) >= '18' && ((data.integrantes)?(data.integrantes.jefedelhogar == '1'):false)){
             $('#jefedelhogar').removeClass('blocked');
            }
           console.log(data.existerepresentante, 'existe integrante')

       

          if($('#sexo').val()=='12' && parseInt($('#edad').html()) >= '12' && parseInt($('#edad').html()) <= '17'){  
              $('#gestantediv').css('display','none');
              $('#lactantediv').css('display','none');
              $('#situacionmilitardiv').css('display','none');
              $('#gestante').removeAttr('required');
              $('#lactante').removeAttr('required');
              $('#situacionmilitar').removeAttr('required');
              $('#orientaciondiv').css('display','');
              $('#orientacion').attr('required','required');
              $('#identidad').attr('required','required');
              $('#cualorientaciondiv').css('display','');
              $('#identidaddiv').css('display','');
              $('#cualidentidaddiv').css('display','');
              $('#hijosdiv').css('display','none');
              $('#hijos').removeAttr('required');
              $('#estadocivil').removeAttr('required');
            }

        if($('#sexo').val()=='12' && parseInt($('#edad').html()) >= '18'){  
          $('#gestantediv').css('display','none');
          $('#lactantediv').css('display','none');
          $('#situacionmilitardiv').css('display','');
          $('#gestante').removeAttr('required');
          $('#lactante').removeAttr('required');
          $('#situacionmilitar').attr('required','required');
          $('#orientaciondiv').css('display','');
          $('#cualorientaciondiv').css('display','');
          $('#identidaddiv').css('display','');
          $('#cualidentidaddiv').css('display','');
          $('#hijosdiv').css('display','none');
          $('#hijos').removeAttr('required');
        }


        if($('#sexo').val()=='13' && parseInt($('#edad').html()) >= '12'){  
          $('#gestantediv').css('display','');
          $('#lactantediv').css('display','');
          $('#situacionmilitardiv').css('display','none');
          $('#situacionmilitar').removeAttr('required');
          $('#hijos').attr('required', 'required');
          $('#gestante').attr('required', 'required');
          $('#lactante').attr('required', 'required');
          $('#orientacion').attr('required', 'required');
          $('#identidad').attr('required', 'required');
          $('#orientaciondiv').css('display','');
          $('#cualorientaciondiv').css('display','');
          $('#identidaddiv').css('display','');
          $('#cualidentidaddiv').css('display','');
          $('#hijosdiv').css('display','');
        } 
        if($('#sexo').val()=='13' && parseInt($('#edad').html())  <= '11'|| $('#sexo').val()=='12' && parseInt($('#edad').html()) <= '11' ){  
          $('#gestantediv').css('display','none');
          $('#lactantediv').css('display','none');
          $('#gestante').removeAttr('required');
          $('#lactante').removeAttr('required');
          $('#orientacion').removeAttr('required');
          $('#identidad').removeAttr('required');
          $('#cualidentidad').removeAttr('required');
          $('#hijos').removeAttr('required');
          $('#situacionmilitardiv').css('display','none');
          $('#gestantediv').css('display','none');
          $('#lactantediv').css('display','none');
          $('#orientaciondiv').css('display','none');
          $('#cualorientaciondiv').css('display','none');
          $('#identidaddiv').css('display','none');
          $('#cualidentidaddiv').css('display','none');
          $('#hijosdiv').css('display','none');
          $('#situacionmilitar').removeAttr('required');
          $('#estadocivil').removeAttr('required');
          $('#privadodelalibertad').removeAttr('required');

        }


          if($('#orientacion').val() == '20'){
            $('#cualorientaciondiv').css('display','');

          }else{
            $('#cualorientaciondiv').css('display','none');

          };
          if($('#identidad').val() == '28'){
            $('#cualidentidaddiv').css('display','');

          }else{
            $('#cualidentidaddiv').css('display','none');

          };
            if($('#etnia').val() == '37'){
              $('#certificacionetnicadiv').css('display','none')
            }else{
              $('#certificacionetnica').css('display','')
            }
            if($('#nacionalidad').val() == '343' ){
              $('#victima1div').css('display','');
              $('#victima1').attr('required', 'required');
              $('#victima2div').css('display','');
              $('#victima2').attr('required', 'required');
              $('#victima3div').css('display','');
              $('#victima3').attr('required', 'required');

              $('#migrantes1div').css('display','none');
              $('#migrantes1').removeAttr('required');

              $('#migrantes2div').css('display','none');
              $('#migrantes2').removeAttr('required');
              $('#cualongdiv').css('display','none');
              $('#cualong').removeAttr('required');
            }else{
              $('#victima1div').css('display','none');
              $('#victima1').removeAttr('required');
              $('#victima2div').css('display','none');
              $('#victima2').removeAttr('required');
              $('#victima3div').css('display','none');
              $('#victima3').removeAttr('required');

              $('#migrantes1div').css('display','');
              $('#migrantes1').attr('required', 'required');    
              $('#migrantes2div').css('display','');
              $('#migrantes2').attr('required', 'required');    
              $('#cualongdiv').css('display','');
              $('#cualong').attr('required', 'required');
           
            }
            if($('#migrantes2').val() == '42'){
              $('#cualongdiv').css('display','');
              $('#cualong').attr('required', 'required');
            }else{
              $('#cualongdiv').css('display','none');
              $('#cualong').removeAttr('required');
            }

            if($('#migrantes1').val() == '1' && $('#nacionalidad').val() != '343'){  
              $('#migrantes2div').css('display','');
              $('#migrantes2').attr('required', 'required');
            
            }else{
              $('#migrantes2div').css('display','none');
              $('#migrantes2').removeAttr('required');
              $('#cualongdiv').css('display','none');
              $('#cualong').removeAttr('required');
            }

            if($('#victima1').val() == '1'  && $('#nacionalidad').val() == '343'){
                $('#victima2div').css('display','');
                $('#victima2').attr('required', 'required');
                $('#victima3div').css('display','');
                $('#victima3').attr('required', 'required');
              }else{
                $('#victima2div').css('display','none');
                $('#victima2').removeAttr('required');
                $('#victima3div').css('display','none');
                $('#victima3').removeAttr('required');
              }
            if($('#victima2').val() == '1'  && $('#nacionalidad').val() == '343'){
                $('#victima3div').css('display','');
                $('#victima3').attr('required', 'required');
              }else{
                $('#victima3div').css('display','none');
                $('#victima3').removeAttr('required');

              }


              if($('#nacionalidad').val() == '343'){
              $('#tipodocumento option[value="7"]').hide();
              $('#tipodocumento option[value="8"]').hide();
              $('#tipodocumento option[value="9"]').hide();
              $('#tipodocumento option[value="10"]').hide();
              $('#tipodocumento option[value="3"]').show();
              $('#tipodocumento option[value="4"]').show();
              $('#tipodocumento option[value="5"]').show();
              $('#tipodocumento option[value="6"]').hide();
              $('#tipodocumento option[value="11"]').show();

            }else{
              $('#tipodocumento option[value="3"]').hide();
              $('#tipodocumento option[value="4"]').hide();
              $('#tipodocumento option[value="5"]').hide();
              $('#tipodocumento option[value="6"]').show();
              $('#tipodocumento option[value="7"]').show();
              $('#tipodocumento option[value="8"]').show();
              $('#tipodocumento option[value="9"]').show();
              $('#tipodocumento option[value="10"]').show();
              $('#tipodocumento option[value="11"]').hide();
              $('#situacionmilitardiv').css('display','none');
              $('#situacionmilitar').removeAttr('required');
              $('#situacionmilitar').val('0');
            }






            if($('#migrantes2').val() == '41'){
                $('#cualongdiv').css('display','');
                $('#cualong').attr('required', 'required');
              }else{
                $('#cualongdiv').css('display','none');
                $('#cualong').removeAttr('required');
              }

              if($('#representante').val()=='1' ){
                  $('#parentescodiv').css('display','none');
                  $('#parentesco').removeAttr('required')
                }else{
                  $('#parentescodiv').css('display','');
                }

                    if(parseInt($('#edad').html())  <= '13'){ 
                      $('#estadocivildiv').css('display','none');
                    };

                    if(parseInt($('#edad').html())  >= '14'){ 
                      $('#estadocivildiv').css('display','');
                    }

                    if(parseInt($('#edad').html())  <= '17'){ 
                      $('#privadodelalibertaddiv').css('display','none');
                    };

                    if(parseInt($('#edad').html())  >= '18'){ 
                      $('#privadodelalibertaddiv').css('display','');
                    }

                    if($('#hijos').val() == '2' && $('#gestante').val() == '2'){
                      $('#lactante').val('2');
                      $('#lactante').addClass('blocked');
                    } else {
                      $('#lactante').removeClass('blocked');
                    }



                    paginalista();
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
      $('#atras').click(function(){
        console.log('click');
        $('#identificacion').tab('show');  
        
      });  
      $('#volver').click(function(){
        redirectToIntegrantes()
      });

      $('#volver2').click(function(){
        redirectToIntegrantes()
      });

      // function soloLetras(element) {
      //       element.value = element.value.toUpperCase();
      //   }

      function redirectToIntegrantes() {
           var folio = window.localStorage.getItem('folioencriptado');
           var url = "../public/integrantes/:folio";
           url = url.replace(':folio', folio);
           window.location.href = url;
       }

       

       $(document).ready(function() {
         $('#integranteshogar').on('submit', function(event) {
             event.preventDefault(); // Detiene el envío del formulario
             
             var formData = $(this).serializeArray();
             var data = {};
             $(formData).each(function(index, obj) {
                 data[obj.name] = obj.value;
             });
             enviarDatos(data);
         });

    function enviarDatos(data) {
        console.log('Datos del formulario:', data);
        $.ajax({
                    url:'./guardarintegrante',
                    data:{data},
                    method: "GET",
                    dataType:'JSON',
                    success:function(data){ 

                      if($('#fechanacimiento').val() == $('#fechanacimiento2').val() && $('#sexo').val() == $('#sexo2').val()){
                        alertagood()
                        $('#siguiente').css('display','');
                        $('#identatario').removeAttr('disabled');
                      }
                      if($('#fechanacimiento').val() != $('#fechanacimiento2').val()){
                            Swal.fire({
                                  icon: "error",
                                  title: "Las fechas de nacimiento no coinciden",
                                  text: "Revisa por favor",
                                  footer: ''
                                });
                          }
                      if($('#sexo').val() != $('#sexo2').val()){
                        Swal.fire({
                              icon: "error",
                              title: "El sexo no coincide",
                              text: "Revisa por favor",
                              footer: ''
                            });
                      }
   
                    },
                    error: function(xhr, status, error) {
                      alertabad();
                              console.log(xhr.responseText);
                          }
                  })
    }

    function enviarDatos2(data) {
        console.log('Datos del formulario:', data);
        $.ajax({
                    url:'./guardaridentitario',
                    data:{data},
                    method: "GET",
                    dataType:'JSON',
                    success:function(data){
                      alertagood()
                      $('#volver2').css('display','');
                      
                    },
                    error: function(xhr, status, error) {
                      alertabad();
                              console.log(xhr.responseText);
                          }
                  })
    }

    $('#formidentatario').on('submit', function(event) {
            event.preventDefault(); // Detiene el envío del formulario

            var formData = $(this).serializeArray();
            var data = {};
            $(formData).each(function(index, obj) {
                data[obj.name] = obj.value;
            });

            enviarDatos2(data);
        });

   
});




$('#nombreidentatario1').change(function(){
  if($('#nombreidentatario1').val()=='1'){
    $('#nombreidentatario2div').css('display','');
    $('#nombreidentatario2').attr('required', 'required');
    $('#nombreidentatario2').val('');

  }else{
    $('#nombreidentatario2div').css('display','none');
    $('#nombreidentatario2').removeAttr('required');
    $('#nombreidentatario2').val('0');


  }
})

$('#parentesco0').css('display','none');
$('#estadocivil0').css('display','none');
$('.noaplica0').css('display','none');


$('#representante').change(function(){
  if($('#representante').val()=='1' || $('#parentesco').val()==''){
    $('#parentescodiv').css('display','none');
    $('#parentesco').removeAttr('required');
    $('#parentesco').val('0');
  } if($('#representante').val()=='2' ){
    $('#parentescodiv').css('display','');
    $('#parentesco').attr('required', 'required');
    $('#parentesco').val('');
  }
})

$('#tipodocumento').change(function(){
  if($('#tipodocumento').val()=='11'){
    $('#documentodiv').css('display','none');
    $('#documento').removeAttr('required');
    $('#documento').val('0');
  }else{
    $('#documentodiv').css('display','');
    $('#documento').attr('required', 'required');
   // $('#documento').val('');

  }
})




$('#sexo').change(function(){
  $('#siguiente').css('display','none');
  $('#volver2').css('display','none');

  $('#identatario').attr('disabled',true);
  if($('#sexo').val()=='12' && parseInt($('#edad').html()) >= '12' && parseInt($('#edad').html()) <= '17'){  
    $('#gestantediv').css('display','none');
    $('#lactantediv').css('display','none');
    $('#situacionmilitardiv').css('display','none');
    $('#gestante').removeAttr('required');
    $('#gestante').val('0');
    $('#lactante').val('0'); 
    $('#situacionmilitar').val('0');
    $('#orientacion').val('');
    $('#identidad').val('');
    $('#cualidentidad').val('');
    $('#hijos').val('0');
    $('#lactante').removeAttr('required');
    $('#situacionmilitar').removeAttr('required');
    $('#orientaciondiv').css('display','');
    $('#orientacion').attr('required','required');
    $('#identidad').attr('required','required');

    $('#cualorientaciondiv').css('display','');
    $('#identidaddiv').css('display','');
    $('#cualidentidaddiv').css('display','');
    $('#hijosdiv').css('display','none');
    $('#hijos').removeAttr('required');
  }

  if($('#sexo').val()=='12' && parseInt($('#edad').html()) >= '18'){  
    $('#gestantediv').css('display','none');
    $('#lactantediv').css('display','none');
    $('#situacionmilitardiv').css('display','');
    $('#gestante').removeAttr('required');
    $('#gestante').val('0');
    $('#lactante').val('0'); 
    $('#situacionmilitar').val('');
    $('#orientacion').val('');
    $('#identidad').val('');
    $('#cualidentidad').val('');
    $('#hijos').val('0');
    $('#lactante').removeAttr('required');
    $('#situacionmilitar').attr('required','required');
    $('#orientaciondiv').css('display','');
    $('#cualorientaciondiv').css('display','');
    $('#identidaddiv').css('display','');
    $('#cualidentidaddiv').css('display','');
    $('#hijosdiv').css('display','none');
    $('#hijos').removeAttr('required');
  }

  


  if($('#sexo').val()=='13' && parseInt($('#edad').html()) >= '12'){  
    $('#gestantediv').css('display','');
    $('#lactantediv').css('display','');
    $('#situacionmilitardiv').css('display','none');
    $('#situacionmilitar').val('');
    $('#gestante').val('');
    $('#lactante').val(''); 
    $('#situacionmilitar').val('0');
    $('#orientacion').val('');
    $('#identidad').val('');
    $('#cualidentidad').val('');
    $('#hijos').val('');
    $('#situacionmilitar').removeAttr('required');
    $('#hijos').attr('required', 'required');
    $('#gestante').attr('required', 'required');
    $('#lactante').attr('required', 'required');
    $('#orientacion').attr('required', 'required');
    $('#identidad').attr('required', 'required');
    $('#orientaciondiv').css('display','');
    $('#cualorientaciondiv').css('display','');
    $('#identidaddiv').css('display','');
    $('#cualidentidaddiv').css('display','');
    $('#hijosdiv').css('display','');
  } 
  if($('#sexo').val()=='13' && parseInt($('#edad').html())  <= '12'|| $('#sexo').val()=='12' && parseInt($('#edad').html()) <= '12' ){  
    console.log('hola, ermtre edad',$('#edad').html() )
    $('#gestante').val('0');
    $('#lactante').val('0'); 
    $('#situacionmilitar').val('0');
    $('#orientacion').val('0');
    $('#identidad').val('0');
    $('#cualidentidad').val('0');
    $('#cualorientacion').val('0');
    $('#hijos').val('0');
    $('#gestantediv').css('display','none');
    $('#lactantediv').css('display','none');
    $('#gestante').removeAttr('required');
    $('#lactante').removeAttr('required');
    $('#orientacion').removeAttr('required');
    $('#identidad').removeAttr('required');
    $('#cualidentidad').removeAttr('required');
    $('#hijos').removeAttr('required');
    $('#situacionmilitardiv').css('display','none');
    $('#gestantediv').css('display','none');
    $('#lactantediv').css('display','none');
    $('#orientaciondiv').css('display','none');
    $('#cualorientaciondiv').css('display','none');
    $('#identidaddiv').css('display','none');
    $('#cualidentidaddiv').css('display','none');
    $('#hijosdiv').css('display','none');
    $('#situacionmilitar').removeAttr('required');
  }


  if($('#nacionalidad').val() !='343' ){
     $('#situacionmilitardiv').css('display','none');
     $('#situacionmilitar').val('0');
     $('#situacionmilitar').removeAttr('required');
    //console.log('venezolano')
  }

  

})


$('#fechanacimiento').blur(function(){
let folio= $('#folioinput').val();
console.log(folio, 'aca va folio')
  $.ajax({
        url:'./consultarrepresentante',
        data:{folio:folio},
        method: "GET",
        dataType:'JSON',
        success:function(data){
          console.log($('#edad').html(), 'edad')
          if(data.existerepresentante =='1' && data.idIntegranteRepresentante != $('#idintegrante1').val() && parseInt($('#edad').html()) >= 18 ){
            $('#representante').val('2');
            $('#representante').addClass('blocked');;
           // $('#parentesco').val('');
           } if(parseInt($('#edad').html()) <= 17 ){
             $('#representante').val('2');
             $('#representante').addClass('blocked');
             $('#jefedelhogar').val('2');
             $('#jefedelhogar').addClass('blocked');
            // $('#parentesco').val('');
           } if(data.existerepresentante =='1' && parseInt($('#edad').html()) >= '18' && data.idIntegranteRepresentante != $('#idintegrante1').val()){
             $('#representante').val('2');
             $('#representante').addClass('blocked');
            // $('#parentesco').val('');
            }
            if(data.existerepresentante =='1' && parseInt($('#edad').html()) >= '18' && data.idIntegranteRepresentante == $('#idintegrante1').val()){
             $('#representante').val('');
             $('#representante').removeClass('blocked');
            // $('#parentesco').val('');
            }
            if(data.existejefedelhogar =='1'){
             $('#jefedelhogar').val('2');
             $('#jefedelhogar').addClass('blocked');
           } 
            if(data.existejefedelhogar =='1' && parseInt($('#edad').html()) >= '18' && data.idIntegranteJefedelHogar != $('#idintegrante1').val()){
             $('#jefedelhogar').val('2');
             $('#jefedelhogar').addClass('blocked');
            }
            if(data.existejefedelhogar =='0' && parseInt($('#edad').html()) >= '18'  && data.idIntegranteJefedelHogar != $('#idintegrante1').val()){
             $('#jefedelhogar').val('');
             $('#jefedelhogar').removeClass('blocked');
            }
            if(data.existejefedelhogar =='1' && parseInt($('#edad').html()) >= '18' && data.idIntegranteJefedelHogar == $('#idintegrante1').val()){
             $('#jefedelhogar').val('');
             $('#jefedelhogar').removeClass('blocked');
            }
            if(data.existerepresentante =='0' && parseInt($('#edad').html()) >= '18'){
             $('#representante').val('');
             $('#representante').removeClass('blocked');
             $('#parentesco').val('');
            }

            if(parseInt($('#edad').html()) <= '17'){
             $('#parentesco').val('');
             $('#parentescodiv').css('display','');
             $('#parentesco').attr('required','reqired');
            }
           //else{
          //   $('#representante').val('');
          //   $('#representante').removeAttr('disabled');
          //   $('#jefedelhogar').val('');
          //   $('#jefedelhogar').removeAttr('disabled');
          //   $('#parentesco').val('');
          // }
          console.log(data.existerepresentante, 'existe representante', data.idIntegranteRepresentante,'=',$('#idintegrante1').val())
        },
        error: function(xhr, status, error) {
                  console.log(xhr.responseText);
              }
      })
    });



$('#fechanacimiento').change(function(){
  $('#siguiente').css('display','none');
  $('#volver2').css('display','none');

  $('#identatario').attr('disabled',true);
  if($('#sexo').val()=='12' && parseInt($('#edad').html()) >= '12' && parseInt($('#edad').html()) <= '17'){  
    $('#gestantediv').css('display','none');
    $('#lactantediv').css('display','none');
    $('#situacionmilitardiv').css('display','none');
    $('#gestante').removeAttr('required');
    $('#gestante').val('0');
    $('#lactante').val('0'); 
    $('#situacionmilitar').val('0');
    $('#orientacion').val('');
    $('#identidad').val('0');
    $('#hijos').val('0');
    $('#lactante').removeAttr('required');
    $('#situacionmilitar').removeAttr('required');
    $('#orientaciondiv').css('display','');
    $('#cualorientacion').val('');
    $('#orientacion').attr('required','required');
    $('#identidad').attr('required','required');
    $('#cualorientaciondiv').css('display','');
    $('#identidaddiv').css('display','');
    $('#cualidentidaddiv').css('display','');
    $('#cualidentidad').val('');
    $('#hijosdiv').css('display','none');
    $('#hijos').removeAttr('required');
  }

  if($('#sexo').val()=='12' && parseInt($('#edad').html()) >= '18'){  
    $('#gestantediv').css('display','none');
    $('#lactantediv').css('display','none');
    $('#situacionmilitardiv').css('display','');
    $('#gestante').removeAttr('required');
    $('#gestante').val('0');
    $('#lactante').val('0'); 
    $('#situacionmilitar').val('');
    $('#orientacion').val('');
    $('#identidad').val('');
    $('#cualidentidad').val('');
    $('#hijos').val('0');
    $('#lactante').removeAttr('required');
    $('#situacionmilitar').attr('required','required');
    $('#orientaciondiv').css('display','');
    $('#cualorientaciondiv').css('display','');
    $('#identidaddiv').css('display','');
    $('#cualidentidaddiv').css('display','');
    $('#hijosdiv').css('display','none');
    $('#hijos').removeAttr('required');
  }


  if($('#sexo').val()=='13' && parseInt($('#edad').html()) >= '12'){  
    $('#gestantediv').css('display','');
    $('#lactantediv').css('display','');
    $('#situacionmilitardiv').css('display','none');
    $('#situacionmilitar').val('0');
    $('#gestante').val('');
    $('#lactante').val(''); 
    $('#orientacion').val('');
    $('#identidad').val('');
    $('#cualidentidad').val('');
    $('#hijos').val('');
    $('#situacionmilitar').removeAttr('required');
    $('#hijos').attr('required', 'required');
    $('#gestante').attr('required', 'required');
    $('#lactante').attr('required', 'required');
    $('#orientacion').attr('required', 'required');
    $('#identidad').attr('required', 'required');
    $('#orientaciondiv').css('display','');
    $('#cualorientaciondiv').css('display','');
    $('#identidaddiv').css('display','');
    $('#cualidentidaddiv').css('display','');
    $('#hijosdiv').css('display','');
  } 
  if($('#sexo').val()=='13' && parseInt($('#edad').html())  <= '11'|| $('#sexo').val()=='12' && parseInt($('#edad').html()) <= '11' ){  
    $('#gestante').val('0');
    $('#lactante').val('0'); 
    $('#situacionmilitar').val('0');
    $('#orientacion').val('0');
    $('#identidad').val('0');
    $('#cualidentidad').val('0');
    $('#hijos').val('0');
    $('#gestantediv').css('display','none');
    $('#lactantediv').css('display','none');
    $('#gestante').removeAttr('required');
    $('#lactante').removeAttr('required');
    $('#orientacion').removeAttr('required');
    $('#identidad').removeAttr('required');
    $('#cualidentidad').removeAttr('required');
    $('#hijos').removeAttr('required');
    $('#situacionmilitardiv').css('display','none');
    $('#gestantediv').css('display','none');
    $('#lactantediv').css('display','none');
    $('#orientaciondiv').css('display','none');
    $('#cualorientaciondiv').css('display','none');
    $('#identidaddiv').css('display','none');
    $('#cualidentidaddiv').css('display','none');
    $('#hijosdiv').css('display','none');
    $('#situacionmilitar').removeAttr('required');
  }

  if(parseInt($('#edad').html())  <= '13'){ 
    $('#estadocivildiv').css('display','none');
    $('#estadocivil').val('0');
    $('#estadocivil').removeAttr('required');
  };

  if(parseInt($('#edad').html())  >= '14'){ 
    $('#estadocivildiv').css('display','');
    $('#estadocivil').val('');
    $('#estadocivil').attr('required','required');


  }

  if(parseInt($('#edad').html())  <= '17'){ 
    $('#privadodelalibertaddiv').css('display','none');
    $('#privadodelalibertad').val('0');
    $('#privadodelalibertad').removeAttr('required');
  };

  if(parseInt($('#edad').html())  >= '18'){ 
    $('#privadodelalibertaddiv').css('display','');
    $('#privadodelalibertad').val('');
    $('#privadodelalibertad').attr('required','required');

  }
  if($('#nacionalidad').val()  != '343'){ 
    $('#situacionmilitardiv').css('display','none');
    $('#situacionmilitar').removeAttr('required');
    $('#situacionmilitar').val('0');

  }

  

})

$('#orientacion').change(function(){

  if($('#orientacion').val() == '20'){
    $('#cualorientaciondiv').css('display','');
    $('#cualorientacion').val('');
    $('#cualorientacion').attr('required', 'required');
  }else{
    $('#cualorientaciondiv').css('display','none');
    $('#cualorientacion').val('0');
    $('#cualorientacion').removeAttr('required');
  }
});



$('#identidad').change(function(){
  if($('#identidad').val() == '28'){
    $('#cualidentidaddiv').css('display','');
    $('#cualidentidad').val('');
    $('#cualidentidad').attr('required', 'required');
  }else{
    $('#cualidentidaddiv').css('display','none');
    $('#cualidentidad').val('0');
    $('#cualidentidad').removeAttr('required');
  }
});

$('#etnia').change(function(){
  if($('#etnia').val() == '37'){
    $('#certificacionetnicadiv').css('display','none');
    $('#certificacionetnica').val('0');
    $('#certificacionetnica').removeAttr('required');

  }else{
    $('#certificacionetnicadiv').css('display','');
    $('#certificacionetnica').val('');
    $('#certificacionetnica').attr('required', 'required');

    
  }
})

$('#migrantes2').change(function(){
  if($('#migrantes2').val() == '41'){
    $('#cualongdiv').css('display','');
    $('#cualong').val('');
    $('#cualong').attr('required', 'required');
  }else{
    $('#cualongdiv').css('display','none');
    $('#cualong').val('0');
    $('#cualong').removeAttr('required');
  }
})

$('#migrantes1').change(function(){
  if($('#migrantes1').val() == '1'){
    $('#migrantes2div').css('display','');
    $('#migrantes2').val('');
    $('#migrantes2').attr('required', 'required');
    $('#cualongdiv').css('display','');
    $('#cualong').val('');
    $('#cualong').attr('required', 'required');
  }if($('#migrantes1').val() == '2' ){
    $('#migrantes2div').css('display','none');
    $('#migrantes2').val('0');
    $('#migrantes2').removeAttr('required');
    $('#cualongdiv').css('display','none');
    $('#cualong').val('0');
    $('#cualong').removeAttr('required');
  }
})


$('#victima1').change(function(){
  // $('#cualong').val('');
  //  $('#migrantes2').val('');
  //  $('#migrantes1').val('');
  if($('#victima1').val() == '1'){
    $('#victima2div').css('display','');
    $('#victima2').val('');
    $('#victima2').attr('required', 'required');
    $('#victima3div').css('display','');
    $('#victima3').val('');
    $('#victima3').attr('required', 'required');
  }else{
    $('#victima2div').css('display','none');
    $('#victima2').val('0');
    $('#victima2').removeAttr('required');
    $('#victima3div').css('display','none');
    $('#victima3').val('0');
    $('#victima3').removeAttr('required');
  }
})

$('#victima2').change(function(){
  if($('#victima2').val() == '1'){
    $('#victima3div').css('display','');
    $('#victima3').val('');
    $('#victima3').attr('required', 'required');

  }else{
    $('#victima3div').css('display','none');
    $('#victima3').val('0');
    $('#victima3').removeAttr('required');
;
  }
})

$('#hijos, #gestante').change(function(){
  if($('#hijos').val() == '2' && $('#gestante').val() == '2'){
    $('#lactante').val('2');
    $('#lactante').addClass('blocked');
  } else {
    $('#lactante').val('');
    $('#lactante').removeClass('blocked');
  }
});


$('#fechanacimiento, #fechanacimiento2').change(function(){
  if($('#fechanacimiento').val() == $('#fechanacimiento2').val()){
    $('#fechanacimiento2').css('border','1px solid green');
  }else{
    $('#fechanacimiento2').css('border','1px solid red');

  }
});

$('#sexo, #sexo2').change(function(){
  if($('#sexo').val() == $('#sexo2').val()){
    $('#sexo2').css('border','1px solid green');
  }else{
    $('#sexo2').css('border','1px solid red');

  }
});




const today = new Date();
        const yyyy = today.getFullYear();
        const mm = String(today.getMonth() + 1).padStart(2, '0'); // Los meses van de 0 a 11
        const dd = String(today.getDate()).padStart(2, '0');
        const todayFormatted = `${yyyy}-${mm}-${dd}`;

        $('#fechanacimiento').attr('max', todayFormatted);

        $('#fechanacimiento').on('input', function() {
            calcularedad(this.value);
        });

function calcularedad(fechaNacimiento) {
        // Obtener la fecha actual
        const today = new Date();
        const yyyy = today.getFullYear();
        const mm = String(today.getMonth() + 1).padStart(2, '0'); // Los meses van de 0 a 11
        const dd = String(today.getDate()).padStart(2, '0');
        const todayFormatted = `${yyyy}-${mm}-${dd}`;

        // Validar si la fecha ingresada es mayor a la fecha actual
        const inputDate = new Date(fechaNacimiento);
        if (inputDate > today) {
            $('#fechanacimiento').val(todayFormatted);
            fechaNacimiento = todayFormatted;
        }

        // Convertir la fecha de nacimiento a objeto Date
        var fechaNac = new Date(fechaNacimiento);
        
        // Calcular la diferencia en milisegundos entre las fechas
        var edadMilisegundos = today - fechaNac;
        
        // Convertir los milisegundos a años
        var edadAnios = Math.floor(edadMilisegundos / 1000 / 60 / 60 / 24 / 365.25);

        // Mostrar la edad en el elemento HTML con id="edad"
        document.getElementById("edad").textContent = edadAnios;
        $('#edadinput').val(edadAnios);
    }


//BUSCAR PAISES


document.addEventListener('DOMContentLoaded', function() {
        const selectElement = document.getElementById('nacionalidad');
        const dropdownMenu = document.getElementById('dropdown-menu');
        const searchBox = document.getElementById('searchBox');
        const dropdownOptions = document.getElementById('dropdown-options');

        function populateDropdownOptions() {
            dropdownOptions.innerHTML = '';
            Array.from(selectElement.options).forEach(option => {
                if (option.value) {
                    const div = document.createElement('div');
                    div.className = 'dropdown-item';
                    div.textContent = option.textContent;
                    div.dataset.value = option.value;
                    dropdownOptions.appendChild(div);
                }
            });
        }

        selectElement.addEventListener('mousedown', function(event) {
            event.preventDefault(); // Previene el comportamiento por defecto del select
            populateDropdownOptions();
            dropdownMenu.classList.add('show');
            searchBox.focus();
        });

        searchBox.addEventListener('input', function() {
            const searchTerm = searchBox.value.toLowerCase();
            Array.from(dropdownOptions.children).forEach(option => {
                if (option.textContent.toLowerCase().includes(searchTerm)) {
                    option.style.display = '';
                } else {
                    option.style.display = 'none';
                }
            });
        });

        dropdownOptions.addEventListener('click', function(event) {
            const option = event.target;
            if (option.classList.contains('dropdown-item')) {
                selectElement.value = option.dataset.value;
                dropdownMenu.classList.remove('show');
                $(selectElement).trigger('change'); // Trigger the change event
            }
        });

        document.addEventListener('click', function(event) {
            if (!event.target.closest('.select-wrapper')) {
                dropdownMenu.classList.remove('show');
            }
        });

        selectElement.addEventListener('blur', function() {
            setTimeout(function() {
                if (!document.activeElement.closest('.select-wrapper')) {
                    dropdownMenu.classList.remove('show');
                }
            }, 200);
        });

        // Listener para el evento change
        $(selectElement).on('change', function() {
            console.log('El país ha cambiado a: ' + $(this).val());
                $('#tipodocumento').val('');
          if($(this).val()=='343'){
              $('#victima1div').css('display','');
              $('#victima1').attr('required', 'required');
              $('#victima1').val('');
              $('#victima2div').css('display','');
              $('#victima2').attr('required', 'required');
              $('#victima2').val('');
              $('#victima3div').css('display','');
              $('#victima3').attr('required', 'required');
              $('#victima3').val('');
              $('#migrantes1div').css('display','none');
              $('#migrantes1').removeAttr('required');
              $('#migrantes1').val('0');
              $('#migrantes2div').css('display','none');
              $('#migrantes2').removeAttr('required');
              $('#migrantes2').val('0');
              $('#cualongdiv').css('display','none');
              $('#cualong').removeAttr('required');
              $('#cualong').val('0');
              $('#tipodocumento option[value="7"]').hide();
              $('#tipodocumento option[value="8"]').hide();
              $('#tipodocumento option[value="9"]').hide();
              $('#tipodocumento option[value="10"]').hide();
              $('#tipodocumento option[value="3"]').show();
              $('#tipodocumento option[value="4"]').show();
              $('#tipodocumento option[value="5"]').show();
              $('#tipodocumento option[value="6"]').hide();
              $('#tipodocumento option[value="11"]').show();
              $('#situacionmilitardiv').css('display','');
              $('#situacionmilitar').attr('required', 'required');
              $('#situacionmilitar').val('');
              

            }else{
              $('#victima1div').css('display','none');
              $('#victima1').removeAttr('required');
              $('#victima1').val('0');
              $('#victima2div').css('display','none');
              $('#victima2').removeAttr('required');
              $('#victima2').val('0');
              $('#victima3div').css('display','none');
              $('#victima3').removeAttr('required');
              $('#victima3').val('0');
              $('#migrantes1div').css('display','');
              $('#migrantes1').attr('required', 'required');
              $('#migrantes2div').css('display','');
              $('#migrantes2').attr('required', 'required');
              $('#migrantes1').val('');
              $('#migrantes2').val('');
            //  $('#cualongdiv').css('display','');
              $('#cualong').removeAttr('required');
              $('#cualong').val('');

              $('#tipodocumento option[value="3"]').hide();
              $('#tipodocumento option[value="4"]').hide();
              $('#tipodocumento option[value="5"]').hide();
              $('#tipodocumento option[value="6"]').show();
              $('#tipodocumento option[value="7"]').show();
              $('#tipodocumento option[value="8"]').show();
              $('#tipodocumento option[value="9"]').show();
              $('#tipodocumento option[value="10"]').show();
              $('#tipodocumento option[value="11"]').show();
              $('#situacionmilitardiv').css('display','none');
              $('#situacionmilitar').removeAttr('required');
              $('#situacionmilitar').val('0');

            }
        });
    });


    function limitarEntrada(input) {
    // Permite solo números
    input.value = input.value.replace(/[^0-9]/g, '');
}

    </script>
 

@endsection