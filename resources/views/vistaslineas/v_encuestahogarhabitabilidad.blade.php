
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
    <a id="condicioneshabitabilidadmenu"  class="nav-link active" style="cursor:pointer">CONDICIONES DE HABITABILIDAD</a>
  </li>
  <li class="nav-item" role="presentation">
    <a id="accesoalimentosmenu"  class="nav-link " style="cursor:pointer">ACCESO Y DISPONIBILIDAD DE ALIMENTOS</a>
  </li>
  <li class="nav-item" role="presentation">
    <a id="entornofamiliarmenu"  class="nav-link " style="cursor:pointer"> ENTORNO FAMILIAR</a>
  </li>
  
</ul>



<div id="myTabContent" class="tab-content"><br>
  
  
        <div class="tab-pane fade active show" id="tabla3" role="tabpanel" aria-labelledby="condicioneshabitabilidad">
                <form class="row g-3 was-validated" id="formcondicioneshabitabilidad">
                <div class="col-md-3" style="display:none">
                          <input type="text" placeholder="folio" class="form-control form-control-sm  " id="folioinput" name="folio" value="{{ decrypt($variable) }}" required="">
                        </div>
                        <div class="col-md-3" style="display:none">
                          <input type="text" placeholder="usuario" class="form-control form-control-sm  " id="usuario" name="usuario" value="{{ Session::get('cedula') }}" >
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
                          <input type="number" class="form-control form-control-sm" name="hacimiento" style="text-transform: uppercase;" onkeypress="return soloNumeros(event)" id="hacimiento" value="" required>
                        </div>
                        <div class="col-md-12">
                          <label for="validationServer04" class="form-label">¿Cuál es la tenencia de tu vivienda?</label>
                          <select class="form-control form-control-sm" id="tipodetenenciau" name="tipodetenenciau" aria-describedby="validationServer04Feedback" required="">
                          {{!!$tipodetenenciau!!}}
                        </select>
                      </div>
                      <div class="col-md-12" id="documentodepropiedaddiv">
                          <label for="validationServer04" class="form-label">¿Qué documento acredita la tenencia de tu vivienda?</label>
                          <select class="form-control form-control-sm" id="documentodepropiedad" name="documentodepropiedad" aria-describedby="validationServer04Feedback" required="">
                          {{!!$documentodepropiedad!!}}
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
        url:'../leerpreguntashogarhabitabilidad',
        data:{folio:folio},
        method: "GET",
        dataType:'JSON',
        success:function(data){
    
                    let serviciospublicos = JSON.parse((data.hogarcondicioneshabitabilidad)?data.hogarcondicioneshabitabilidad.serviciospublicos:'{}'); // ["49", "54"]
                    let telecomunicaciones = JSON.parse((data.hogarcondicioneshabitabilidad)?data.hogarcondicioneshabitabilidad.telecomunicaciones:'{}'); // ["49", "54"]

                   

               

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




            if(data.hogarcondicioneshabitabilidad ==null){
            }else{
              $('#siguiente3').css('display','');
            }
           

        //   CONDICIONES DE HABILITABILIDAD 

            $('#tipovivienda').val((data.hogarcondicioneshabitabilidad)?data.hogarcondicioneshabitabilidad.tipovivienda:'');
            $('#materialesdeparedes').val((data.hogarcondicioneshabitabilidad)?data.hogarcondicioneshabitabilidad.materialesdeparedes:'');
            $('#materialestecho').val((data.hogarcondicioneshabitabilidad)?data.hogarcondicioneshabitabilidad.materialestecho:'');
            $('#materialsuelo').val((data.hogarcondicioneshabitabilidad)?data.hogarcondicioneshabitabilidad.materialsuelo:'');
            $('#banococina').val((data.hogarcondicioneshabitabilidad)?data.hogarcondicioneshabitabilidad.banococina:'');
            $('#hacimiento').val((data.hogarcondicioneshabitabilidad)?data.hogarcondicioneshabitabilidad.hacimiento:'');
            $('#tipodetenenciau').val((data.hogarcondicioneshabitabilidad)?data.hogarcondicioneshabitabilidad.tipodetenenciau:'');
            $('#documentodepropiedad').val((data.hogarcondicioneshabitabilidad)?data.hogarcondicioneshabitabilidad.documentodepropiedad:'');

            
            //ACCESO Y DISPONIBILIDAD DE ALIMENTOS

        
                            if ($('#serviciospublicos247').is(':checked')) {
                              $('input[name="serviciospublicos[]"]').not('#serviciospublicos247').closest('div').hide();
                              $('input[name="serviciospublicos[]"]').removeAttr('required');
                            } else {
                              $('input[name="serviciospublicos[]"]').closest('div').show();
                            }

                            if ($('#telecomunicaciones255').is(':checked')) {
                              $('input[name="telecomunicaciones[]"]').not('#telecomunicaciones255').closest('div').hide();
                              $('input[name="telecomunicaciones[]"]').removeAttr('required');
                            } else {
                              $('input[name="telecomunicaciones[]"]').closest('div').show();
                            }

                            if ($('input[name="serviciospublicos[]"]:checked').length > 0) {
                            $('input[name="serviciospublicos[]"]').removeAttr('required');
                            } else {
                               // $('input[name="serviciospublicos[]"]').attr('required', 'required');
                            }

                            if ($('input[name="telecomunicaciones[]"]:checked').length > 0) {
                            $('input[name="telecomunicaciones[]"]').removeAttr('required');
                            } else {
                              //  $('input[name="telecomunicaciones[]"]').attr('required', 'required');
                            }


                            if($('#tipodetenenciau').val() == '256' || $('#tipodetenenciau').val() == '257'){
                                $('#documentodepropiedaddiv').css('display','');
                                $('#documentodepropiedad').attr('required','required');
                                }else{
                                  $('#documentodepropiedaddiv').css('display','none');
                                  $('#documentodepropiedad').val('0');
                                  $('#documentodepropiedad').removeAttr('required');
                                }

                            if($('#tipovivienda').val() == '212' ){
                                $('#hacimiento').val('1');
                                $('#hacimiento').addClass('blocked');
                              }else{
                                $('#hacimiento').removeClass('blocked');
                              }


                           
   

      
paginalista();

         },
        error: function(xhr, status, error) {
                  //console.log(xhr.responseText);
              }
      })
      }) 
      
      $('#atras2').click(function(){
        window.location.href="../encuestahogardatosgeograficos/<?= $variable ?>" 
      }); 
 
      $('#siguiente3').click(function(){
        window.location.href="../encuestahogaralimentos/<?= $variable ?>" 
      }); 
       $('#conformacionfamiliarmenu').click(function(){
          window.location.href="../encuestahogarconformacionfamiliar/<?= $variable ?>"
       });

       $('#datosgeograficosmenu').click(function(){
          window.location.href="../encuestahogardatosgeograficos/<?= $variable ?>"
       });
      // $('#condicioneshabitabilidadmenu').click(function(){
      //    window.location.href="../encuestahogarhabitabilidad/<?= $variable ?>"
      // });
      $('#accesoalimentosmenu').click(function(){
         window.location.href="../encuestahogaralimentos/<?= $variable ?>"
      });
      $('#entornofamiliarmenu').click(function(){
         window.location.href="../hogarentornofamiliar/<?= $variable ?>"
      })

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
     


$('.noaplica0').css('display','none');
 
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
              
            }
  

        $(formData).each(function(index, obj) {
    var name = obj.name.replace('[]', '');
    var selector = '[name="' + obj.name + '"][value="' + obj.value + '"]';
   // var respuesta = $(selector).attr('respuesta') || 'NO APLICA'; // Asegura obtener correctamente 'respuesta' o 'NO APLICA'
   var element = $(selector);
   var respuesta = element.is(':hidden') ? 'NO APLICA' : (element.attr('respuesta') || 'NO APLICA'); // Verifica si el elemento está oculto
   // console.log(respuesta, 'respuesta');

    if (name === 'serviciospublicos'  || name === 'telecomunicaciones' ) {
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

;

  //console.log(data)

        // Enviar los datos usando AJAX
        $.ajax({
            url: '../condicioneshabitabilidad',
            method: $(this).attr('method'),
            data: {data: data},
            success: function(response) {
              alertagood();
              $('#siguiente3').css('display','');
              $('#datosgeograficos').removeAttr('disabled');
            },
            error: function(xhr, status, error) {
              alertabad();
             //   console.error(error);
            }
        });
    });



    



   
});



      $('input[name="serviciospublicos[]"]').change(function() {
        if ($(this).attr('id') === 'serviciospublicos247' && $(this).is(':checked')) {
            $('input[name="serviciospublicos[]"]').not('#serviciospublicos247').each(function() {
                $(this).prop('checked', false); // Desmarcar
                $(this).closest('div').hide();  // Ocultar
            });
        } else if ($(this).attr('id') === 'serviciospublicos247' && !$(this).is(':checked')) {
            $('input[name="serviciospublicos[]"]').closest('div').show(); // Mostrar todos
        }
      });

      $('input[name="serviciospublicos[]"]').change(function() {
          if ($('input[name="serviciospublicos[]"]:visible:checked').length > 0) {
              $('input[name="serviciospublicos[]"]').removeAttr('required');
          } else {
              $('input[name="serviciospublicos[]"]').attr('required', 'required');
          }
      });

      $('input[name="telecomunicaciones[]"]').change(function() {
        if ($(this).attr('id') === 'telecomunicaciones255' && $(this).is(':checked')) {
            $('input[name="telecomunicaciones[]"]').not('#telecomunicaciones255').each(function() {
                $(this).prop('checked', false); // Desmarcar
                $(this).closest('div').hide();  // Ocultar
            });
        } else if ($(this).attr('id') === 'telecomunicaciones255' && !$(this).is(':checked')) {
            $('input[name="telecomunicaciones[]"]').closest('div').show(); // Mostrar todos
        }
      });

      $('input[name="telecomunicaciones[]"]').change(function() {
          if ($('input[name="telecomunicaciones[]"]:visible:checked').length > 0) {
              $('input[name="telecomunicaciones[]"]').removeAttr('required');
          } else {
              $('input[name="telecomunicaciones[]"]').attr('required', 'required');
          }
      });

     

      $('#tipodetenenciau').change(function(){
        if($('#tipodetenenciau').val() == '256' || $('#tipodetenenciau').val() == '257'){
        $('#documentodepropiedaddiv').css('display','');
        $('#documentodepropiedad').val('');
        $('#documentodepropiedad').attr('required','required');
        }else{
          $('#documentodepropiedaddiv').css('display','none');
          $('#documentodepropiedad').val('0');
          $('#documentodepropiedad').removeAttr('required');
        }
      });


      $('#tipovivienda').change(function(){
        if($('#tipovivienda').val() == '212' ){
          $('#hacimiento').val('1');
          $('#hacimiento').addClass('blocked');
        }else{
          $('#hacimiento').val('');
          $('#hacimiento').removeClass('blocked');
        }
      });


      


      


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