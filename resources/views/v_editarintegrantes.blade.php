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
    <img src="{{asset('avatares/1.png')}} " id="imagenDinamica" class="rounded-circle" alt="Avatar" style="width: 150px; height: 150px;" data-bs-toggle="modal" data-bs-target="#exampleModal">
  </div>

          <form id="integranteshogar" class="row g-3 was-validated">     
            
          <div class="col-md-3" style="display:none">
            <input type="text" placeholder="folio" class="form-control form-control-sm  " id="folioinput" name="folio" value="" >
          </div>
          <div class="col-md-3" style="display:none">
            <input type="text" placeholder="idintegrante" class="form-control form-control-sm  " id="idintegrante1" name="idintegrante" value="" >
          </div>

            <label for="validationServer04" class="form-label">¿Cuál es su nombre completo?</label>
          <div class="col-md-3">
            <input type="text" class="form-control form-control-sm " placeholder="Nombre 1" id="nombre1"  name="nombre1" value="" required>
          </div>
          <div class="col-md-3">
            <input type="text" class="form-control form-control-sm " placeholder="Nombre 2" id="nombre2"  name="nombre2" value="" >
          </div>
          <div class="col-md-3">
            <input type="text" class="form-control form-control-sm " placeholder="Apellido 1" id="apellido1" name="apellido1"  value="" required>
          </div>
          <div class="col-md-3">
            <input type="text" class="form-control form-control-sm " placeholder="Apellido 2" id="apellido2" name="apellido2"  value="" >
          </div>
          <div class="col-md-12">
                  <label for="validationServer04" class="form-label">¿Tiene un nombre identitario o cómo te gusta que te llamen?</label>
                  <select class="form-control form-control-sm" id="nombreidentatario1" name="nombreidentatario1" aria-describedby="validationServer04Feedback" required="">
                    {{!!$sino!!}}
                  </select>
                </div>
            <div class="col-md-6">
                <label for="validationServer04" class="form-label">¿Cuál es su nombre identitario?</label>
                <input type="text" class="form-control form-control-sm "  id="nombreidentatario2" name="nombreidentatario2"  value="" >

            </div>
            <div class="col-md-6">
            <label for="validationServer04" class="form-label">¿Cuál es tu fecha de nacimiento?</label>
            <input type="date" class="form-control form-control-sm "  name="fechanacimiento"  id="fechanacimiento" value="" required>
          </div>
          <div class="col-md-6">
                <label for="validationServer04" class="form-label">¿Cuál es su país de nacimiento?</label>
                <select class="form-control form-control-sm" id="nacionalidad" name="nacionalidad" aria-describedby="validationServer04Feedback" required="">
                {{!!$paises!!}}
              </select>
            </div>
            <div class="col-md-6">
                <label for="validationServer04" class="form-label">¿Qué tipo de documento de identidad tiene?</label>
                <select class="form-control form-control-sm" id="tipodocumento" name="tipodocumento" aria-describedby="validationServer04Feedback" required="">
                {{!!$tipodocumento!!}}
              </select>
            </div>
            <div class="col-md-4">
            <label for="validationServer04" class="form-label">¿cuál es el número de su documento?</label>
            <input type="number" class="form-control form-control-sm "  name="documento"  id="documento" value="" required>
          </div>
          <div class="col-md-4">
                <label for="validationServer04" class="form-label">¿Es el/la representante del hogar?</label>
                <select class="form-control form-control-sm" id="representante" name="representante" aria-describedby="validationServer04Feedback" required="">
                {{!!$sino!!}}
              </select>
            </div>
            <div class="col-md-4">
                <label for="validationServer04" class="form-label">¿Cuál es su sexo?</label>
                <select class="form-control form-control-sm" id="sexo" name="sexo" aria-describedby="validationServer04Feedback" required="">
                  {{!!$sexo!!}}
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
        <div class="col-md-4">
                  <label for="validationServer04" class="form-label">¿Ha tenido hijos?</label>
                  <select class="form-control form-control-sm" id="hijos" name="hijos" aria-describedby="validationServer04Feedback" required="">
                    {{!!$sino!!}}
                </select>
                </div>
        
          <div class="col-md-4">
            <label for="validationServer04" class="form-label">¿Es una mujer gestante?</label>
            <select class="form-control form-control-sm" id="gestante" name="gestante" aria-describedby="validationServer04Feedback" required="">
            {{!!$sino!!}}            
          </select>
          </div>
          <div class="col-md-4">
            <label for="validationServer04" class="form-label">¿Es una mujer lactante?</label>
            <select class="form-control form-control-sm" id="lactante" name="lactante" aria-describedby="validationServer04Feedback" required="">
            {{!!$sino!!}}     
                </select>
          </div>
          <div class="col-md-4">
            <label for="validationServer04" class="form-label">¿Tiene resuelta su situación militar?</label>
            <select class="form-control form-control-sm" id="situacionmilitar" name="situacionmilitar" aria-describedby="validationServer04Feedback" required="">
            {{!!$sino!!}}         
             </select>
          </div>
          <div class="col-md-4">
            <label for="validationServer04" class="form-label">¿Cuál es su orientación sexual?            </label>
            <select class="form-control form-control-sm" id="orientacion" name="orientacion" aria-describedby="validationServer04Feedback" required="">
            {{!!$orientacion!!}}
          </select>
          </div>
          <div class="col-md">
            <label for="validationServer04" class="form-label">¿Cúal?</label>
            <input type="text" class="form-control form-control-sm" name="cualorientacion" id="cualorientacion" value="">
          </div>
          <div class="col-md-6">
            <label for="validationServer04" class="form-label">¿Cuál es su identidad de género?</label>
            <select class="form-control form-control-sm" id="identidad" name="identidad" aria-describedby="validationServer04Feedback" required="">
            {{!!$identidad!!}}
          </select>
          </div>
          <div class="col-md">
            <label for="validationServer04" class="form-label">¿Cúal?</label>
            <input type="text" class="form-control form-control-sm" id="cualidentidad" name="cualidentidad" value="">
          </div>
          <div class="col-md-6">
            <label for="validationServer04" class="form-label">¿Pertenece a algún grupo étnico?</label>
            <select class="form-control form-control-sm" id="etnia" name="etnia" aria-describedby="validationServer04Feedback" required="">
            {{!!$etnia!!}}
          </select>
          </div>
          <div class="col-md-6">
            <label for="validationServer04" class="form-label">¿Cuenta con certificación de pertenencia étnica?</label>
            <select class="form-control form-control-sm" id="certificacionetnica" name="certificacionetnica" aria-describedby="validationServer04Feedback" required="">
            {{!!$sino!!}}
                      </select>
          </div>
          <div class="col-md-12">
            <label for="validationServer04" class="form-label">¿Es víctima del conflicto armado colombiano?</label>
            <select class="form-control form-control-sm" id="victima1" name="victima1" aria-describedby="validationServer04Feedback" required="">
            {{!!$sino!!}}
          </select>
          </div>
          <div class="col-md-6">
            <label for="validationServer04" class="form-label">¿Está reconocido como víctima del conflicto armado colombiano y cuenta con RUV?            </label>
            <select class="form-control form-control-sm" id="victima2" name="victima2" aria-describedby="validationServer04Feedback" required="">
            {{!!$sino!!}}
          </select>
          </div>
          <div class="col-md-6">
            <label for="validationServer04" class="form-label">¿Ha recibido algún tipo de reparación o apoyo derivado del reconocimiento como víctima del conflcto armado colombiano?</label>
            <select class="form-control form-control-sm" id="victima3" name="victima3" aria-describedby="validationServer04Feedback" required="">
            {{!!$sino!!}}
          </select>
          </div>
          <div class="col-md-6">
            <label for="validationServer04" class="form-label">¿Requiere  asistencia para su regularización e identificación en el territorio nacional?</label>
            <select class="form-control form-control-sm" id="migrantes1" name="migrantes1" aria-describedby="validationServer04Feedback" required="">
            {{!!$sino!!}}
          </select>
          </div>
          <div class="col-md-6">
            <label for="validationServer04" class="form-label">¿Qué instancias ha utilizado el hogar para la regularización e identificación en el territorio nacional?</label>
            <select class="form-control form-control-sm" id="migrantes2" name="migrantes2" aria-describedby="validationServer04Feedback" required="">
            {{!!$migrantes2!!}}
          </select>
          </div>
          <div class="col-md">
            <label for="validationServer04" class="form-label">¿Cúal?</label>
            <input type="text" class="form-control form-control-sm" id="cualong" name="cualong" value="">
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
    
    $(document).ready(function(){
      $('#volveratras').css('display','none');
    
         var imagenUrl = localStorage.getItem('imagen');
         if (imagenUrl) {
             $('#imagenDinamica').attr('src', imagenUrl);
         } 
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
             // Correcto
          }else{
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
          $('#hijos').val((data.integrantes)?data.integrantes.hijos:'');
          $('#gestante').val((data.integrantes)?data.integrantes.gestante:'');
          $('#lactante').val((data.integrantes)?data.integrantes.lactante:'');
          $('#situacionmilitar').val((data.integrantes)?data.integrantes.situacionmilitar:'');
          $('#certificacionetnica').val((data.integrantes)?data.integrantes.certificacionetnica:'');
          $('#victima1').val((data.integrantes)?data.integrantes.victima1:'');
          $('#victima2').val((data.integrantes)?data.integrantes.victima2:'');
          $('#victima3').val((data.integrantes)?data.integrantes.victima3:'');
          $('#migrantes1').val((data.integrantes)?data.integrantes.migrantes1:'');
          $('#orientacion').val((data.integrantes)?data.integrantes.orientacion:'');
          $('#identidad').val((data.integrantes)?data.integrantes.identidad:'');
          $('#etnia').val((data.integrantes)?data.integrantes.etnia:'');
          $('#migrantes2').val((data.integrantes)?data.integrantes.migrantes2:'');
          $('#cualidentidad').val((data.integrantes)?data.integrantes.cualidentidad:''); 
          $('#cualorientacion').val((data.integrantes)?data.integrantes.cualorientacion:'');
          $('#cualong').val((data.integrantes)?data.integrantes.cualong:'');

          if(localStorage.getItem('idintegrante') == ''){
            localStorage.setItem('idintegrante',folio+data.leerintegrantes)
          }
          console.log(localStorage.getItem('idintegrante', 'hollsss'))
          $('#idintegrante1').val(localStorage.getItem('idintegrante'));
          $('#idintegrante2').val(localStorage.getItem('idintegrante'));


          

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


    </script>
 

@endsection