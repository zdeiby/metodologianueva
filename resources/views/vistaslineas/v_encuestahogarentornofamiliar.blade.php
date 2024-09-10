
<link rel="shortcut icon" href="../favicon.ico">
<meta name="csrf-token" content="{{ csrf_token() }}">
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
            <span class="badge bg-primary" id="">ENCUESTA HOGAR</span>
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
        <a id="conformacionfamiliarmenu" class="nav-link " style="cursor:pointer">CONFORMACIÓN FAMILIAR
        </a>
      </li>
  <li class="nav-item" role="presentation">
    <a id="datosgeograficosmenu"  class="nav-link " style="cursor:pointer">DATOS GEOGRAFICOS Y ECONÓMICOS</a>
  </li>
  <li class="nav-item" role="presentation">
    <a id="condicioneshabitabilidadmenu"  class="nav-link " style="cursor:pointer">CONDICIONES DE HABITABILIDAD</a>
  </li>
  <li class="nav-item" role="presentation">
    <a id="accesoalimentosmenu"  class="nav-link " style="cursor:pointer">ACCESO Y DISPONIBILIDAD DE ALIMENTOS</a>
  </li>
  <li class="nav-item" role="presentation">
    <a id="entornofamiliarmenu"  class="nav-link active" style="cursor:pointer"> ENTORNO FAMILIAR</a>
  </li>
  
</ul>



<div id="myTabContent" class="tab-content"><br>
  <div class="tab-pane fade active show" id="entornofamiliar" role="tabpanel" aria-labelledby="entornofamiliar">
    <!-- <div class="text-center"><label for="">Avatar</label></div>


        <div class="avatar text-center" style="cursor:pointer">
          <img src="{{asset('avatares/blanco.png')}} " id="imagenDinamica" class="rounded-circle" alt="Avatar" style="width: 150px; height: 150px;" data-bs-toggle="modal" data-bs-target="#exampleModal">
        </div> -->

        <form class="row g-3 was-validated" id="formentornofamiliar">
  <div class="col-md-3" style="display:none">
            <input type="text" placeholder="folio" class="form-control form-control-sm  " id="folioinput" name="folio" value="{{ decrypt($variable) }}" required="">
          </div>
          <div class="col-md-3" style="display:none">
            <input type="text" placeholder="usuario" class="form-control form-control-sm  " id="usuario" name="usuario" value="{{ Session::get('cedula') }}" >
          </div>
        
          <div class="col-md-12">
            <label for="validationServer04" class="form-label ">En tu hogar, ¿se presenta actualmente alguna de las siguientes problemáticas?</label>
            <div class="form-check form-switch" id="factoresderiesgovef-container">
              {!!$factoresderiesgovef!!}
                    </div>
          </div>

        
          <div class="col-md-12" id="rutasvef1div">
            <label for="validationServer04" class="form-label">¿Los integrantes de tu hogar conocen las rutas para la prevención e intervención de las violencias (VIF, VBG, VSX, maltrato, etc)?</label>
            <select class="form-control form-control-sm" id="rutasvef1" name="rutasvef1" aria-describedby="validationServer04Feedback" required="">
                  {{!!$sino!!}}
                </select>
          </div>
          <div class="col-md-12" id="rutasvef2div">
            <label for="validationServer04" class="form-label">¿Algún integrante de tu hogar ha hecho uso de alguna ruta para la atención de la VIF, VBG, VSX u otras violencias?</label>
            <select class="form-control form-control-sm" id="rutasvef2" name="rutasvef2" aria-describedby="validationServer04Feedback" required="">
                  {{!!$sino!!}}
                </select>
          </div>
          <div class="col-md-12" id="rutasvef3div">
            <label for="validationServer04" class="form-label">¿Cuáles de los siguientes canales institucionales/ruta has activado?.</label>
            <div class="form-check form-switch" id="container-rutasvef3">
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
            <div class="form-check form-switch" id="container-disciplinapositiva">
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
            <div class="form-check form-switch" id="container-tiempolibre">
            {!!$tiempolibre!!}
                    </div>
          </div>
          <div class="col-md" id="cualtiempolibrediv" style="display:none">
            <label for="validationServer04" class="form-label">¿Cúal?</label>
            <input type="text" class="form-control form-control-sm" name="cualtiempolibre" oninput="convertirAMayusculas(this)" id="cualtiempolibre" value="" >
          </div>

         
          <hr>
    
          <div class="row pt-4">
            <div class="text-start col">
              <div class="btn btn-outline-primary" id="atras4">volver</div>
            </div>
              <div class="text-end col">
                <button class="btn btn-outline-success" type="submit">Guardar</button>
                <div class="btn btn-outline-primary" id="volver" style="display:none">Finalizar</div>
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
        url:'../leerpreguntashogarentornofamiliar',
        data:{folio:folio},
        method: "GET",
        dataType:'JSON',
        success:function(data){
    

                    let factoresderiesgovef = JSON.parse((data.hogarentornofamiliar)?data.hogarentornofamiliar.factoresderiesgovef:'{}'); // ["49", "54"]
                    let rutasvef3 = JSON.parse((data.hogarentornofamiliar)?data.hogarentornofamiliar.rutasvef3:'{}'); // ["49", "54"]
                    let planeacionfinanciera4 = JSON.parse((data.hogarentornofamiliar)?data.hogarentornofamiliar.planeacionfinanciera4:'{}'); // ["49", "54"]
                    let disciplinapositiva = JSON.parse((data.hogarentornofamiliar)?data.hogarentornofamiliar.disciplinapositiva:'{}'); // ["49", "54"]
                    let tiempolibre = JSON.parse((data.hogarentornofamiliar)?data.hogarentornofamiliar.tiempolibre:'{}'); // ["49", "54"]



              // if(Array.isArray(factoresderiesgovef) && factoresderiesgovef.length > 0){
              //   $('#container-factoresderiesgovef input[type="checkbox"]').each(function() {
              //     let found = factoresderiesgovef.find(item => item.id === this.value );
              //   //  console.log(found.valor, 'aca valor')
              //             if (found.valor == 'SI') { 
              //               $(this).prop('checked', true);
              //               $(this).attr('respuesta', 'SI');  // Establecer 'respuesta' a 'NO APLICA' solo si el valor es 'si'
              //             } else {
              //               $(this).attr('respuesta', 'SI');  // Establecer 'respuesta' con el valor correspondiente
              //             }
              //   });}

              if(Array.isArray(factoresderiesgovef) && factoresderiesgovef.length > 0) {
                    factoresderiesgovef.forEach(function(item) {
                        var conditionId = item.id;
                        var valor = item.valor;
                        var integrantes = item.idintegrante || [];

                        if (valor === "SI") {
                            $('#factoresderiesgovef' + conditionId).prop('checked', true);
                            $('#integrantes-factoresderiesgovef' + conditionId + '-container').show(); // Mostrar el contenedor de integrantes específico

                            // Marcar los integrantes correspondientes
                            integrantes.forEach(function(integranteId) {
                                $('#integrantes-factoresderiesgovef' + conditionId + '-container input[value="' + integranteId + '"]').prop('checked', true);
                            });
                        } else {
                            $('#factoresderiesgovef' + conditionId).prop('checked', false);
                            $('#integrantes-factoresderiesgovef' + conditionId + '-container').hide(); // Ocultar el contenedor de integrantes específico
                        }
                    });}

              
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

            if(data.hogarentornofamiliar ==null){
            }else{
              $('#volver').css('display','');
            }

           $('#rutasvef1').val((data.hogarentornofamiliar)?data.hogarentornofamiliar.rutasvef1:'');
           $('#rutasvef2').val((data.hogarentornofamiliar)?data.hogarentornofamiliar.rutasvef2:'');
           $('#redesdeapoyo').val((data.hogarentornofamiliar)?data.hogarentornofamiliar.redesdeapoyo:'');
           $('#cualtiempolibre').val((data.hogarentornofamiliar)?data.hogarentornofamiliar.cualtiempolibre:'');

             
           if ($('input[name="factoresderiesgovef[]"]:visible:checked').length > 0) {
                          $('input[name="factoresderiesgovef[]"]').removeAttr('required');
                      } else {
                          $('input[name="factoresderiesgovef[]"]:hidden').removeAttr('required');
                      }


                       if ($('#factoresderiesgovef278').is(':checked')) {
             $('.integrantes-container').hide(); // Ocultar todos los contenedores de integrantes
             $('.integrantes-container input[type="checkbox"]').prop('checked', false); // Deseleccionar todos los checkboxes de los integrantes
         } else {
             if ($('#factoresderiesgovef278').is(':checked')) {
                 $('#integrantes-factoresderiesgovef278-container').show(); // Mostrar el contenedor de integrantes específico
             } else {
                 $('#integrantes-factoresderiesgovef278-container').hide(); // Ocultar el contenedor de integrantes específico
                 $('#integrantes-factoresderiesgovef278-container input[type="checkbox"]').prop('checked', false); // Deseleccionar los integrantes
             }
         }

       
          if ($('input[name="rutasvef3[]"]:visible:checked').length > 0) {
             $('input[name="rutasvef3[]"]').removeAttr('required');
         } else {
             $('input[name="rutasvef3[]"]').attr('required', 'required');
         }
        if ($('input[name="planeacionfinanciera4[]"]:visible:checked').length > 0) {
             $('input[name="planeacionfinanciera4[]"]').removeAttr('required');
         } else {
             $('input[name="planeacionfinanciera4[]"]').attr('required', 'required');
         }
          if ($('input[name="disciplinapositiva[]"]:visible:checked').length > 0) {
             $('input[name="disciplinapositiva[]"]').removeAttr('required');
         } else {
             $('input[name="disciplinapositiva[]"]').attr('required', 'required');
         }
        if ($('input[name="tiempolibre[]"]:visible:checked').length > 0) {
             $('input[name="tiempolibre[]"]').removeAttr('required');
         } else {
             $('input[name="tiempolibre[]"]').attr('required', 'required');
         }


         if($('#rutasvef1').val()=='1'){
          $('#rutasvef2div').css('display','');
          $('#rutasvef3286').css('display','');
          $('.rutasvef3287').css('display','');
          $('#rutasvef3288').css('display','');
          $('.rutasvef3289').css('display','');
          $('#rutasvef3290').css('display','');
          $('.rutasvef3291').css('display','');
          $('#rutasvef3292').css('display','');
          $('.rutasvef3293').css('display','');
          $('#rutasvef3294').css('display','');
          $('#rutasvef3div').css('display','');
        }if($('#rutasvef1').val()=='2' || $('#rutasvef1').val()==''){
          $('#rutasvef2div').css('display','none');
          $('#rutasvef2').removeAttr('required');
          $('#rutasvef3286').css('display','none');
          $('.rutasvef3287').css('display','none');
          $('#rutasvef3288').css('display','none');
          $('.rutasvef3289').css('display','none');
          $('#rutasvef3290').css('display','none');
          $('.rutasvef3291').css('display','none');
          $('#rutasvef3292').css('display','none');
          $('.rutasvef3293').css('display','none');
          $('#rutasvef3294').css('display','none');
          $('#rutasvef3div').css('display','none');
          $('input[name="rutasvef3[]"]').removeAttr('required');
        }
        
        if($('#rutasvef2').val()=='1'){
          $('#rutasvef3286').css('display','');
          $('.rutasvef3287').css('display','');
          $('#rutasvef3288').css('display','');
          $('.rutasvef3289').css('display','');
          $('#rutasvef3290').css('display','');
          $('.rutasvef3291').css('display','');
          $('#rutasvef3292').css('display','');
          $('.rutasvef3293').css('display','');
          $('#rutasvef3294').css('display','');
          $('#rutasvef3div').css('display','');
        }if($('#rutasvef2').val()=='2' || $('#rutasvef1').val()==''){
          $('#rutasvef3286').css('display','none');
          $('.rutasvef3287').css('display','none');
          $('#rutasvef3288').css('display','none');
          $('.rutasvef3289').css('display','none');
          $('#rutasvef3290').css('display','none');
          $('.rutasvef3291').css('display','none');
          $('#rutasvef3292').css('display','none');
          $('.rutasvef3293').css('display','none');
          $('#rutasvef3294').css('display','none');
          $('#rutasvef3div').css('display','none');
          $('input[name="rutasvef3[]"]').removeAttr('required');
        }

        if ($('#planeacionfinanciera4368').is(':checked')) {
           $('input[name="planeacionfinanciera4[]"]').not('#planeacionfinanciera4368').closest('div').hide();
         } else {
           $('input[name="planeacionfinanciera4[]"]').closest('div').show();
         }

         if ($('#disciplinapositiva304').is(':checked')) {
           $('input[name="disciplinapositiva[]"]').not('#disciplinapositiva304').closest('div').hide();
         } else {
           $('input[name="disciplinapositiva[]"]').closest('div').show();
         }
        
         if ($('#tiempolibre309').is(':checked')) {
           $('input[name="tiempolibre[]"]').not('#tiempolibre309').closest('div').hide();
              $('#cualtiempolibre').val('0');
            $('#cualtiempolibrediv').hide();
         } else {
           $('input[name="tiempolibre[]"]').closest('div').show();
         }

         if($('#tiempolibre308').is(':checked')){
            $('#cualtiempolibrediv').show();
            }else{
              $('#cualtiempolibre').val('0');
                      $('#cualtiempolibrediv').hide();
                      $('#cualtiempolibre').removeAttr('required')
            }
            paginalista();
         },
        error: function(xhr, status, error) {
                  //console.log(xhr.responseText);
              }
      })
      })    

      $('#atras4').click(function(){
        window.location.href="../encuestahogaralimentos/<?= $variable ?>" 
      }); 
 
      $('#volver').click(function(){
        paginacargando2();
        $.ajax({
            url: '../verficarestadosdehogar',
            data: { folio: '{{decrypt($variable)}}' },
            method: "GET",
            dataType: 'JSON',
            success: function(data) {
              if(data.resultado == '1'){
                  $.ajax({
                    url: '../agregarpasohogar',
                    data: { folio: '{{decrypt($variable)}}', usuario:'{{ Session::get('cedula') }}' },
                    method: "GET",
                    dataType: 'JSON',
                    success: function(data) {
                     window.location.href="../rombointegrantes/<?= $variable ?>" 
                      console.log(data);
                      paginalista2();
                    },
                    error: function(xhr, status, error) {
                      console.log(xhr.responseText);
                    }
                  });
              }else{
                paginalista2();
                Swal.fire({
                                  icon: "error",
                                  title: "Verifica que los modulos esten completos y guardados antes de continuar",
                                  text: "Revisa por favor",
                                  footer: ''
                                });
              }
           
            },
            error: function(xhr, status, error) {
              console.log(xhr.responseText);
            }
          });
      }); 

       $('#conformacionfamiliarmenu').click(function(){
          window.location.href="../encuestahogarconformacionfamiliar/<?= $variable ?>"
       });

       $('#datosgeograficosmenu').click(function(){
          window.location.href="../encuestahogardatosgeograficos/<?= $variable ?>"
       });
       $('#condicioneshabitabilidadmenu').click(function(){
          window.location.href="../encuestahogarhabitabilidad/<?= $variable ?>"
       });
      $('#accesoalimentosmenu').click(function(){
         window.location.href="../encuestahogaralimentos/<?= $variable ?>"
      });
     // $('#entornofamiliarmenu').click(function(){
     //    window.location.href="../hogarentornofamiliar/<?= $variable ?>"
     // })


      // $('#volver').click(function(){
      //   redirectToIntegrantes()
      // });


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
     





 $('#formentornofamiliar').on('submit', function(event) {
        event.preventDefault(); // Detiene el envío del formulario
console.log('hola')
       
        var formData = $(this).serializeArray();
        var data = {
              'factoresderiesgovef': [
                  // { id: '265', valor: 'NO' },
                  // { id: '266', valor: 'NO' },
                  // { id: '267', valor: 'NO' },
                  // { id: '268', valor: 'NO' },
                  // { id: '269', valor: 'NO' },
                  // { id: '270', valor: 'NO' },
                  // { id: '271', valor: 'NO' },
                  // { id: '272', valor: 'NO' },
                  // { id: '273', valor: 'NO' },
                  // { id: '274', valor: 'NO' },
                  // { id: '275', valor: 'NO' },
                  // { id: '276', valor: 'NO' },
                  // { id: '277', valor: 'NO' },
                  // { id: '278', valor: 'NO' },

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
                  { id: '368', valor: 'NO' },
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
            


        $(formData).each(function (index, obj) {
            var name = obj.name.replace('[]', '');
            var selector = '[name="' + obj.name + '"][value="' + obj.value + '"]';
            var element = $(selector);
            var respuesta = element.is(':hidden') ? 'NO APLICA' : (element.attr('respuesta') || 'NO APLICA');

            if (name === 'factoresderiesgovef') {
                var existingIndex = data[name].findIndex(item => item.id === obj.value);
                if (existingIndex !== -1) {
                    data[name][existingIndex].valor = respuesta;

                    var integrantes = [];
                    $('#integrantes-factoresderiesgovef' + obj.value + '-container input[type="checkbox"]:checked').each(function () {
                        var integranteId = $(this).val();
                        if (!integrantes.includes(integranteId)) {
                            integrantes.push(integranteId);
                        }
                    });
                    data[name][existingIndex].idintegrante = integrantes;
                } else {
                    var newIntegrantes = $('#integrantes-factoresderiesgovef' + obj.value + '-container input[type="checkbox"]:checked').map(function () {
                        return $(this).val();
                    }).get();

                    data[name].push({
                        id: obj.value,
                        valor: respuesta,
                        idintegrante: newIntegrantes
                    });
                }
            } else if ( name ==='rutasvef3'
              || name === 'planeacionfinanciera4' || name === 'disciplinapositiva' || name === 'tiempolibre'
            ) {
                var existingIndex = data[name].findIndex(item => item.id === obj.value);
                if (existingIndex !== -1) {
                    data[name][existingIndex].valor = respuesta;
                } else {
                    data[name].push({ id: obj.value, valor: respuesta });
                }
            }
             else {
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


         if (data['factoresderiesgovef'].length === 0) {
         data['factoresderiesgovef'].push('0');
         }

        

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

          $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

                // Enviar los datos usando AJAX
               $.ajax({
                    url: '../entornofamiliar',
                    method: 'POST',
                    data: {data: data},
                    success: function(response) {
                      alertagood();
                      $('#volver').css('display','');
                      $('#datosgeograficos').removeAttr('disabled');
                    },
                    error: function(xhr, status, error) {
                      alertabad();
                        console.error(error);
                    }
                });
            });

     
});

$('#factoresderiesgovef278').change(function() {  
          
          if ($(this).is(':checked')) {
              // Desmarcar todos los otros checkboxes y ocultar sus contenedores de integrantes
              $('#factoresderiesgovef-container input[type="checkbox"]').not(this).prop('checked', false).trigger('change');
              $('.integrantes-container').hide();
              $('.integrantes-container input[type="checkbox"]').prop('checked', false);
          }
      });

   $('#factoresderiesgovef-container input[type="checkbox"]').not('#factoresderiesgovef278').change(function() {
           if ($(this).is(':checked')) {
               // Desmarcar el checkbox de "Ninguna"
               $('#factoresderiesgovef278').prop('checked', false);  
           }
      
     });


 
    // Mostrar/Ocultar el contenedor de integrantes basado en el checkbox
    $('#factoresderiesgovef-container input[type="checkbox"]').change(function() {
        var conditionId = $(this).val();

        // Si es el checkbox "Ninguna de las anteriores", no mostrar ningún contenedor de integrantes
        if ($('#factoresderiesgovef278').is(':checked')) {
            $('.integrantes-container').hide(); // Ocultar todos los contenedores de integrantes
            $('.integrantes-container input[type="checkbox"]').prop('checked', false); // Deseleccionar todos los checkboxes de los integrantes
        } else {
            if ($(this).is(':checked')) {
                $('#integrantes-factoresderiesgovef' + conditionId + '-container').show(); // Mostrar el contenedor de integrantes específico
            } else {
                $('#integrantes-factoresderiesgovef' + conditionId + '-container').hide(); // Ocultar el contenedor de integrantes específico
                $('#integrantes-factoresderiesgovef' + conditionId + '-container input[type="checkbox"]').prop('checked', false); // Deseleccionar los integrantes
            }
        }
    });

 // Validar los checkboxes de "condicionespecial"
  $('input[name="factoresderiesgovef[]"]').change(function() {
         if ($('input[name="factoresderiesgovef[]"]:visible:checked').length > 0) {
             $('input[name="factoresderiesgovef[]"]').removeAttr('required');
         } else {
             $('input[name="factoresderiesgovef[]"]').attr('required', 'required');
         }
     });

   

     $('input[name="rutasvef3[]"]').change(function() {
         if ($('input[name="rutasvef3[]"]:visible:checked').length > 0) {
             $('input[name="rutasvef3[]"]').removeAttr('required');
         } else {
             $('input[name="rutasvef3[]"]').attr('required', 'required');
         }
     });
     $('input[name="planeacionfinanciera4[]"]').change(function() {
         if ($('input[name="planeacionfinanciera4[]"]:visible:checked').length > 0) {
             $('input[name="planeacionfinanciera4[]"]').removeAttr('required');
         } else {
             $('input[name="planeacionfinanciera4[]"]').attr('required', 'required');
         }
     });
     $('input[name="disciplinapositiva[]"]').change(function() {
         if ($('input[name="disciplinapositiva[]"]:visible:checked').length > 0) {
             $('input[name="disciplinapositiva[]"]').removeAttr('required');
         } else {
             $('input[name="disciplinapositiva[]"]').attr('required', 'required');
         }
     });

     $('input[name="tiempolibre[]"]').change(function() {
         if ($('input[name="tiempolibre[]"]:visible:checked').length > 0) {
             $('input[name="tiempolibre[]"]').removeAttr('required');
         } else {
             $('input[name="tiempolibre[]"]').attr('required', 'required');
         }
     });


     $('#rutasvef1').change(function(){
     
        if($('#rutasvef1').val()=='1'){
          $('#rutasvef2div').css('display','');
          $('#rutasvef2').attr('required','required');
          $('#rutasvef2').val('');
          $('#rutasvef3286').css('display','');
          $('.rutasvef3287').css('display','');
          $('#rutasvef3288').css('display','');
          $('.rutasvef3289').css('display','');
          $('#rutasvef3290').css('display','');
          $('.rutasvef3291').css('display','');
          $('#rutasvef3292').css('display','');
          $('.rutasvef3293').css('display','');
          $('#rutasvef3294').css('display','');
          $('#rutasvef3div').css('display','');
          $('input[name="rutasvef3[]"]').prop('checked', false);
          $('input[name="rutasvef3[]"]').attr('required', 'required');
        }if($('#rutasvef1').val()=='2' || $('#rutasvef1').val()==''){
          $('#rutasvef2div').css('display','none');
          $('#rutasvef2').removeAttr('required');
          $('#rutasvef2').val('0');
          $('#rutasvef3286').css('display','none');
          $('.rutasvef3287').css('display','none');
          $('#rutasvef3288').css('display','none');
          $('.rutasvef3289').css('display','none');
          $('#rutasvef3290').css('display','none');
          $('.rutasvef3291').css('display','none');
          $('#rutasvef3292').css('display','none');
          $('.rutasvef3293').css('display','none');
          $('#rutasvef3294').css('display','none');
          $('#rutasvef3div').css('display','none');
          $('input[name="rutasvef3[]"]').removeAttr('required');
        }
     });

     $('#rutasvef2').change(function(){
     
     if($('#rutasvef2').val()=='1'){
       $('#rutasvef3286').css('display','');
       $('.rutasvef3287').css('display','');
       $('#rutasvef3288').css('display','');
       $('.rutasvef3289').css('display','');
       $('#rutasvef3290').css('display','');
       $('.rutasvef3291').css('display','');
       $('#rutasvef3292').css('display','');
       $('.rutasvef3293').css('display','');
       $('#rutasvef3294').css('display','');
       $('#rutasvef3div').css('display','');
       $('input[name="rutasvef3[]"]').prop('checked', false);
       $('input[name="rutasvef3[]"]').attr('required', 'required');
     }if($('#rutasvef2').val()=='2' || $('#rutasvef1').val()==''){
       $('#rutasvef3286').css('display','none');
       $('.rutasvef3287').css('display','none');
       $('#rutasvef3288').css('display','none');
       $('.rutasvef3289').css('display','none');
       $('#rutasvef3290').css('display','none');
       $('.rutasvef3291').css('display','none');
       $('#rutasvef3292').css('display','none');
       $('.rutasvef3293').css('display','none');
       $('#rutasvef3294').css('display','none');
       $('#rutasvef3div').css('display','none');
       $('input[name="rutasvef3[]"]').removeAttr('required');
     }
  });

   

        $('input[name="planeacionfinanciera4[]"]').change(function() {
    if ($(this).attr('id') === 'planeacionfinanciera4368' && $(this).is(':checked')) {
        $('input[name="planeacionfinanciera4[]"]').not('#planeacionfinanciera4368').each(function() {
            $(this).prop('checked', false); // Desmarcar
            $(this).closest('div').hide();  // Ocultar

        });
    } else if ($(this).attr('id') === 'planeacionfinanciera4368' && !$(this).is(':checked')) {
        $('input[name="planeacionfinanciera4[]"]').closest('div').show(); // Mostrar todos

    }
    });

    $('input[name="disciplinapositiva[]"]').change(function() {
    if ($(this).attr('id') === 'disciplinapositiva304' && $(this).is(':checked')) {
        $('input[name="disciplinapositiva[]"]').not('#disciplinapositiva304').each(function() {
            $(this).prop('checked', false); // Desmarcar
            $(this).closest('div').hide();  // Ocultar

        });
    } else if ($(this).attr('id') === 'disciplinapositiva304' && !$(this).is(':checked')) {
        $('input[name="disciplinapositiva[]"]').closest('div').show(); // Mostrar todos

    }
    });

    $('input[name="tiempolibre[]"]').change(function() {
    if ($(this).attr('id') === 'tiempolibre309' && $(this).is(':checked')) {
        $('input[name="tiempolibre[]"]').not('#tiempolibre309').each(function() {
            $(this).prop('checked', false); // Desmarcar
            $(this).closest('div').hide();  // Ocultar
            $('#cualtiempolibre').val('0');
            $('#cualtiempolibrediv').hide();
            $('#cualtiempolibre').removeAttr('required','required')
        });
    } else if ($(this).attr('id') === 'tiempolibre309' && !$(this).is(':checked')) {
        $('input[name="tiempolibre[]"]').closest('div').show(); // Mostrar todos
        
    }
    });

    $('#tiempolibre308').change(function() {
  if($('#tiempolibre308').is(':checked')){
    $('#cualtiempolibre').val('');
            $('#cualtiempolibrediv').show();
            $('#cualtiempolibre').attr('required')
  }else{
    $('#cualtiempolibre').val('0');
             $('#cualtiempolibrediv').hide();
             $('#cualtiempolibre').removeAttr('required','required')
  }

  });
     
     
$('.noaplica0').css('display','none');

    function soloLetras(e)
{
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

document.addEventListener('DOMContentLoaded', function() {
    // IDs de los contenedores de las secciones A, B y D
    var seccionesABD = [
        { id: 'factoresderiesgovef265', container: 'integrantes-factoresderiesgovef265-container' }, 
        { id: 'factoresderiesgovef266', container: 'integrantes-factoresderiesgovef266-container' }, 
        { id: 'factoresderiesgovef268', container: 'integrantes-factoresderiesgovef268-container' }
    ];

    seccionesABD.forEach(function(seccion) {
        // Selecciona el contenedor de cada sección
        var seccionContainer = document.getElementById(seccion.container);
        var tieneMenores = false;

        if (seccionContainer) {
            // Busca todos los inputs con el atributo "edad" dentro de la sección
            var checkboxes = seccionContainer.querySelectorAll('input[type="checkbox"][edad]');
        
            checkboxes.forEach(function(checkbox) {
                // Obtiene el valor de la edad
                var edad = parseInt(checkbox.getAttribute('edad'), 10);

                // Si encuentra algún menor de 17 años, marca la variable
                if (edad <= 17) {
                    tieneMenores = true;
                } else {
                    var parentDiv = checkbox.closest('div'); // Encuentra el div contenedor más cercano
                    if (parentDiv) {
                        parentDiv.style.display = 'none'; // Oculta el div del integrante mayor
                    }
                }
            });

            // Si no hay menores de 17 años en la sección, oculta todo el checkbox principal
            if (!tieneMenores) {
                var seccionCheckbox = document.getElementById(seccion.id);
                if (seccionCheckbox) {
                    seccionCheckbox.closest('div').style.display = 'none';
                }
            }
        }
    });
});

//ocultar campos segun la edad checks


// document.addEventListener('DOMContentLoaded', function() {
//     // IDs de los contenedores de las secciones A, B y D
//     var seccionesABD = ['integrantes-factoresderiesgovef265-container', 'integrantes-factoresderiesgovef266-container', 'integrantes-factoresderiesgovef268-container'];

//     seccionesABD.forEach(function(seccionID) {
//         // Selecciona el contenedor de cada sección
//         var seccionContainer = document.getElementById(seccionID);

//         if (seccionContainer) {
//             // Busca todos los inputs con el atributo "edad" dentro de la sección
//             var checkboxes = seccionContainer.querySelectorAll('input[type="checkbox"][edad]');
        
//             checkboxes.forEach(function(checkbox) {
//                 // Obtiene el valor de la edad
//                 var edad = parseInt(checkbox.getAttribute('edad'), 10);

//                 // Si la edad es menor o igual a 17, oculta el contenedor del checkbox
//                 if (edad >= 17) {
//                     var parentDiv = checkbox.closest('div'); // Encuentra el div contenedor más cercano
//                     if (parentDiv) {
//                         parentDiv.style.display = 'none'; // Oculta el div del integrante menor
//                     }
//                 }
//             });
//         }
//     });
// });


// document.addEventListener('DOMContentLoaded', function() {
//     // Selecciona todos los checkbox que tienen el atributo "edad"
//     var checkboxes = document.querySelectorAll('input[type="checkbox"][edad]');

//     checkboxes.forEach(function(checkbox) {
//         // Obtiene el valor de la edad
//         var edad = parseInt(checkbox.getAttribute('edad'), 10);

//         // Si la edad es menor o igual a 17, ocultar el contenedor padre más cercano
//         if (edad <= 17) {
//             var parentDiv = checkbox.closest('.integrantes-container > div');
//             if (parentDiv) {
//                 parentDiv.style.display = 'none';
//             }
//         }
//     });
// });




    </script>
 

@endsection