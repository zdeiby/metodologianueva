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
      <li class="nav-item" role="presentation"  style="cursor:pointer">
        <a id="identificacion" class="nav-link active">BIENESTAR FISICO Y EMOCIONAL
        </a>
      </li>
  <li class="nav-item" role="presentation" style="cursor:pointer">
    <a id="identatario"  class="nav-link " >BIENESTAR INTELECTUAL</a>
  </li>
  <li class="nav-item" role="presentation"  style="cursor:pointer">
    <a id="financiero"  class="nav-link " >BIENESTAR FINANCIERO</a>
  </li>
  <li class="nav-item" role="presentation"  style="cursor:pointer">
    <a id="legal"  class="nav-link ">BIENESTAR LEGAL</a>
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
          <div class="col-md-3" style="display:none">
            <input type="text" placeholder="usuario" class="form-control form-control-sm  " id="usuario" name="usuario" value="{{ Session::get('cedula') }}" >
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
          <div class="col-md-12">
            <label for="validationServer04" class="form-label">¿Ha tenido o tiene alguna de las siguientes enfermedades consideradas como de alto costo o catastróficas en el sistema de salud?</label>
            <div class="form-check form-switch" id='enfermedad-container'>
                {!!$enfermedad!!}
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
                <div class="col-md" id="cualconsumospa5div" style="display:none">
                  <label for="validationServer04" class="form-label">¿Cúal?</label>
                  <input type="text" class="form-control form-control-sm" name="cualconsumospa5" oninput="convertirAMayusculas(this)" id="cualconsumospa5" value="">
                </div>
                <div class="col-md-12" id="consumospa6div">
                  <label for="validationServer04" class="form-label">¿Has tenido alguna consecuencia negativa debido al consumo?</label>
                  <div class="form-check form-switch" id="container-consumospa6">
                      {!!$consumospa6!!} 
                    </div>
                </div>
                <div class="col-md-12" id="psicosocial1div">
                  <label for="validationServer04" class="form-label">¿Accedes a servicios de salud mental, asesorias, terapias y/o atención psicosocial?</label>
                    <select class="form-control form-control-sm" id="psicosocial1" name="psicosocial1" aria-describedby="validationServer04Feedback" required="">
                      {{!!$psicosocial1!!}}
                    </select>
                </div>
                <div class="col-md-12" id="psicosocial2div">
                  <label for="validationServer04" class="form-label">¿Qué estrategias implementas para  reducir el estrés y  para favorecer el bienestar emocional y fisico?</label>
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
    
  $('.noaplica0').css('display','none');
    $('#acceso1').change(function(){
      if($('#acceso1').val() == '2' || $('#acceso1').val() == ''){
        $('.acceso2').css('display','none');
        $('#acceso2').attr('required',false);
        $('#acceso2').val('0');
      }else{
        $('.acceso2').css('display','');
        $('#acceso2').attr('required',true);
        $('#acceso2').val('');
      }
    });

    $('input[name="enfermedad[]"]').change(function() {
    if ($(this).attr('id') === 'enfermedad345' && $(this).is(':checked')) {
        $('input[name="enfermedad[]"]').not('#enfermedad345').each(function() {
            $(this).prop('checked', false); // Desmarcar
            $(this).closest('div').hide();  // Ocultar
        });
    } else if ($(this).attr('id') === 'enfermedad345' && !$(this).is(':checked')) {
        $('input[name="enfermedad[]"]').closest('div').show(); // Mostrar todos

    }
});


$('input[name="psicosocial2[]"]').change(function() {
    if ($(this).attr('id') === 'psicosocial2347' && $(this).is(':checked')) {
        $('input[name="psicosocial2[]"]').not('#psicosocial2347').each(function() {
            $(this).prop('checked', false); // Desmarcar
            $(this).closest('div').hide();  // Ocultar
        });
    } else if ($(this).attr('id') === 'psicosocial2347' && !$(this).is(':checked')) {
        $('input[name="psicosocial2[]"]').closest('div').show(); // Mostrar todos

    }
});



    $('#discapacidad').change(function(){
      if($('#discapacidad').val() == '2' || $('#acceso1').val() == ''){
        $('#tipodediscapacidaddiv').css('display','none');
        $('#tipodediscapacidad').attr('required',false);
        $('#tipodediscapacidad').val('0');

        $('#atenciondiscapacidaddiv').css('display','none');
        $('#atenciondiscapacidad').attr('required',false);
        $('#atenciondiscapacidad').val('0');

        $('#certificadodiscapacidaddiv').css('display','none');
        $('#certificadodiscapacidad').attr('required',false);
        $('#certificadodiscapacidad').val('0');

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
        $('#consumospa2').val('0');

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
        $('#consumospa4').val('0');
        $('#consumospa5').val('0');
        $('#cualconsumospa5div').css('display','none');
        $('#cualconsumospa5').attr('required',false);
        $('#cualconsumospa5').val('0');
        
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
        $('#cualconsumospa5').attr('required',true);

        $('#consumospa2').val('');
        $('#consumospa4').val('');
        $('#consumospa5').val('');
        $('#consumospa372').css('display','');
        $('#cualconsumospa5div').val('');
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
          $('#cualpsicosocial2').val('0');
          $('#cualpsicosocial2').removeAttr('required');

        }
      });

  
              $('#consumospa5').change(function() {
                if ($(this).val() == '80') {
                  $('#cualconsumospa5div').css('display', '');
                  $('#cualconsumospa5').val('');
                  $('#cualconsumospa5').attr('required', 'required');

                } else {
                  $('#cualconsumospa5div').css('display', 'none');
                  $('#cualconsumospa5').val('0');
                  $('#cualconsumospa5').removeAttr('required');

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
          return parseInt(edad);
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

          console.log(edad)
          $('#edadintegrante').html(`Edad: ${edad} `);
          $('#edadintegrante').val(edad);
          $('#sexointegrante').html(`Sexo: ${(data.imagen.sexo == '12')?'Hombre':'Mujer'} `);

          if(data.imagen.sexo =='13' && edad >= '12'){
              $('.acceso347').css('display','');
              $('.acceso352').css('display','');
              $('#acceso347').css('display','');
              $('#acceso352').css('display','');  
          }
          if(data.imagen.sexo =='13' && edad >= '25' && edad <= '29' && data.identitario.identidad != '24'){
            $('.acceso355').css('display','');
            $('#acceso355').css('display','');
          }
          if(data.imagen.sexo =='13' && edad >= '30' && edad <= '65' && data.identitario.identidad != '24' ){
            $('.acceso356').css('display','');
            $('#acceso356').css('display','');
          }
          if(data.imagen.sexo =='13' && edad >= '18' && data.identitario.identidad != '24' ){
            $('.acceso357').css('display','');
            $('#acceso357').css('display','');
          }
          if(data.imagen.sexo =='13' && edad >= '50' && data.identitario.identidad != '24' ){
            $('.acceso358').css('display','');
            $('#acceso358').css('display','');
          }

          if(data.imagen.sexo =='12' && edad >= '50' && data.identitario.identidad != '25' ){
            $('.acceso359').css('display','');
            $('#acceso359').css('display','');
            $('.acceso360').css('display','');
            $('#acceso360').css('display','');
          }

          if( edad <= '5'){
             $('.acceso348').css('display','');
             $('#acceso348').css('display','');
             $('.acceso349').css('display','');
             $('#acceso349').css('display','');
          }
          $('.acceso350').css('display','');
          $('#acceso350').css('display','');
          $('.acceso351').css('display','');
          $('#acceso351').css('display','');

          if( edad >= '25'){
             $('.acceso353').css('display','');
             $('#acceso353').css('display','');

           }

           if( edad >= '12' && edad <= '26'){
             $('.acceso354').css('display','');
             $('#acceso354').css('display','');

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
                    let psicosocial2 = JSON.parse((data.integrantes)?data.integrantes.psicosocial2:'{}'); // ["49", "54"]
                    let enfermedad = JSON.parse((data.integrantes)?data.integrantes.enfermedad:'{}'); // ["49", "54"]
                 

                  
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

                if(Array.isArray(enfermedad) && enfermedad.length > 0) {
                $('#enfermedad-container input[type="checkbox"]').each(function() {
                  let found = enfermedad.find(item => item.id === this.value );
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



           

           if(data.integrantes ==null){
           }else{
             $('#siguiente').css('display','');
             $('#volver2').css('display','');
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
           $('#cualconsumospa5').val((data.integrantes)?data.integrantes.cualconsumospa5:'');
          


           if ($('#enfermedad345').is(':checked')) {
                              $('input[name="enfermedad[]"]').not('#enfermedad345').closest('div').hide();
                            } else {
                              $('input[name="enfermedad[]"]').closest('div').show();
                            }

      
                            

            if($('#discapacidad').val() == '2' || $('#acceso1').val() == ''){
              $('#tipodediscapacidaddiv').css('display','none');
              $('#tipodediscapacidad').attr('required',false);

              $('#atenciondiscapacidaddiv').css('display','none');
              $('#atenciondiscapacidad').attr('required',false);

              $('#certificadodiscapacidaddiv').css('display','none');
              $('#certificadodiscapacidad').attr('required',false);
              $('#certificadodiscapacidad').val('');

            }

            if(edad >= '8' && edad <= '14'){
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
              $('.psicosocial2347').css('display','none');
              $('#psicosocial2347').css('display','none');
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
              $('#cualpsicosocial2').val('0'); 
            }
            if(edad >= '0' && edad <= '7'){
              $('#consumospa1div').css('display','none');
              $('#consumospa1').removeAttr('required');
              $('#consumospa1').val('0'); 
              $('#consumospa2div').css('display','none');
              $('#consumospa2').removeAttr('required');
              $('#consumospa2').val('0'); 
              $('.consumospa371').css('display','none');
              $('.consumospa372').css('display','none');
              $('.consumospa373').css('display','none');
              $('.consumospa374').css('display','none');
              $('#consumospa3div').css('display','none');
              $('#consumospa4div').css('display','none');
              $('#consumospa4').removeAttr('required');
              $('#consumospa4').val('0'); 
              $('#consumospa5div').css('display','none');
              $('#consumospa5').removeAttr('required');
              $('#consumospa5').val('0'); 
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
              $('.psicosocial2347').css('display','none');
              $('#psicosocial2347').css('display','none');
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
              $('#cualpsicosocial2').removeAttr('required');
              $('#cualpsicosocial2').val('0');
              $('#cualconsumospa5').css('display','none');
              $('#cualconsumospa5').removeAttr('required');
              $('#cualconsumospa5').val('0');  
            }

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
              $('.psicosocial2347').css('display','');
              $('#psicosocial2347').css('display','');   
              $('#psicosocial2div').css('display','');
              $('#cualpsicosocial2').css('display','');
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
        if ($('input[name="enfermedad[]"]:visible:checked').length > 0) {
          $('input[name="enfermedad[]"]').removeAttr('required');
        }else{
          $('input[name="enfermedad[]"]:hidden').removeAttr('required');
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
    
        if ($('input[name="psicosocial2[]"]:visible:checked').length > 0) {
            $('input[name="psicosocial2[]"]').removeAttr('required');
          }else{
           $('input[name="psicosocial2[]"]:hidden').removeAttr('required');
          }

          if ($('#psicosocial2347').is(':checked')) {
              $('input[name="psicosocial2[]"]').not('#psicosocial2347').closest('div').hide();
            } else {
              $('input[name="psicosocial2[]"]').closest('div').show();
            }

              if ($('#consumospa5').val() == '80') {
                  $('#cualconsumospa5div').css('display', '');
                  $('#cualconsumospa5').attr('required', 'required');

                } else {
                  $('#cualconsumospa5div').css('display', 'none');
                  $('#cualconsumospa5').removeAttr('required');

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
        redirectToIntelectual();
      }); 
    
    
      $('#atras').click(function(){
        console.log('click');
        $('#identificacion').tab('show');  
      }); 
      

      $('#volver').click(function(){
        redirectToIntegrantes()
      });

      $('#identatario').click(function(){var url = "./encuestaintegrantesintelectual"; window.location.href = url;})
      $('#financiero').click(function(){var url = "./encuestaintegrantesfinanciero"; window.location.href = url;})
      $('#legal').click(function(){var url = "./encuestaintegranteslegal"; window.location.href = url;})

      function convertirAMayusculas(element) {
            element.value = element.value.toUpperCase();
        }

      function redirectToIntegrantes() {
           var folio = window.localStorage.getItem('folioencriptado');
           var url = "../public/integrantes/:folio";
           url = url.replace(':folio', folio);
           window.location.href = url;
       }

       function redirectToIntelectual() {
           var url = "./encuestaintegrantesintelectual";
           window.location.href = url;
       }

       $('input[name="acceso3[]"]').change(function() {
        if ($('input[name="acceso3[]"]:visible:checked').length > 0) {
          $('input[name="acceso3[]"]').removeAttr('required');
        }else{
          //$('input[name="acceso3[]"]').attr('required', 'required');

        }
      });

      $('input[name="enfermedad[]"]').change(function() {
        if ($('input[name="enfermedad[]"]:visible:checked').length > 0) {
          $('input[name="enfermedad[]"]').removeAttr('required');
        }else{
          $('input[name="enfermedad[]"]').attr('required', 'required');

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
    
      $('input[name="psicosocial2[]"]').change(function() {
      if ($('input[name="psicosocial2[]"]:visible:checked').length > 0) {
          $('input[name="psicosocial2[]"]').removeAttr('required');
          
        }else{
          $('input[name="psicosocial2[]"]').attr('required', 'required');
        }

        if ($('#psicosocial2106').is(':checked')) {
          $('#cualpsicosocial2div').css('display', '');
          $('#cualpsicosocial2').val('');
          $('#cualpsicosocial2').attr('required', 'required');

        } else {
          $('#cualpsicosocial2div').css('display', 'none');
          $('#cualpsicosocial2').val('0');
          $('#cualpsicosocial2').removeAttr('required');
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
                  { id: '347', valor: 'NO' }, 
              ],
              'enfermedad': [
                  { id: '340', valor: 'NO' },
                  { id: '341', valor: 'NO' },
                  { id: '342', valor: 'NO' },
                  { id: '343', valor: 'NO' },
                  { id: '344', valor: 'NO' },
                  { id: '345', valor: 'NO' },
                 
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
    ||  name === 'psicosocial2' || name === 'enfermedad' ) {
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



  data['psicosocial2'].forEach(item => {
      var selector = '[name="psicosocial2[]"][value="' + item.id + '"]';
      if ($(selector).length === 0 || $(selector).is(':hidden')) {
          item.valor = 'NO APLICA';
      }
  });

  data['enfermedad'].forEach(item => {
      var selector = '[name="enfermedad[]"][value="' + item.id + '"]';
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

   
       



   
});


    </script>
 

@endsection