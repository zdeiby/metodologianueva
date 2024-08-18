
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
        <a id="conformacionfamiliarmenu" class="nav-link active" style="cursor:pointer">CONFORMACIÓN FAMILIAR
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
    <a id="entornofamiliarmenu"  class="nav-link " style="cursor:pointer"> ENTORNO FAMILIAR</a>
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
          <div class="col-md-3" style="display:none">
            <input type="text" placeholder="usuario" class="form-control form-control-sm  " id="usuario" name="usuario" value="{{ Session::get('cedula') }}" >
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
          <div class="col-md-12 laboresdecuidadodiv">
            <label for="validationServer04" class="form-label ">¿Quiénes en tu hogar realizan labores domésticas no remuneradas? (cuidado indirecto).</label>
            <div class="form-check form-switch" id='laboresdecuidado-container'>
                {!!$integrantes!!}
                <label class="form-check-label tiempolibre13988001" for="laboresdecuidado0">Una persona no integrante del hogar </label>
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
        url:'../leerpreguntashogarfamiliar',
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
               



           if(data.hogarconformacionfamiliar ==null){
           }else{
             $('#siguiente').css('display','');
             $('#volver2').css('display','');
            }
            
          
          $('#tipologia').val((data.hogarconformacionfamiliar)?data.hogarconformacionfamiliar.tipologia:'');
          $('#familiamultiespecie1').val((data.hogarconformacionfamiliar)?data.hogarconformacionfamiliar.familiamultiespecie1:'');
          $('#familiamultiespecie2').val((data.hogarconformacionfamiliar)?data.hogarconformacionfamiliar.familiamultiespecie2:'');
          $('#familiacuidadoracual').val((data.hogarconformacionfamiliar)?data.hogarconformacionfamiliar.familiacuidadoracual:'');   
          $('#familiacuidadora2').val((data.hogarconformacionfamiliar)?data.hogarconformacionfamiliar.familiacuidadora2:'');
      
            

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

                          

paginalista();
         },
        error: function(xhr, status, error) {
                  //console.log(xhr.responseText);
              }
      })
      })    

      $('#siguiente').click(function(){
        window.location.href="../encuestahogardatosgeograficos/<?= $variable ?>" 
      }); 
      // $('#conformacionfamiliarmenu').click(function(){
      //    window.location.href="../encuestahogarconformacionfamiliar/<?= $variable ?>"
      // });

      $('#datosgeograficosmenu').click(function(){
         window.location.href="../encuestahogardatosgeograficos/<?= $variable ?>"
      });
      $('#condicioneshabitabilidadmenu').click(function(){
         window.location.href="../encuestahogarhabitabilidad/<?= $variable ?>"
      });
      $('#accesoalimentosmenu').click(function(){
         window.location.href="../encuestahogaralimentos/<?= $variable ?>"
      });
      $('#entornofamiliarmenu').click(function(){
         window.location.href="../hogarentornofamiliar/<?= $variable ?>"
      })
   
     
    
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
              alertagood()
                $('#siguiente').css('display', '');
                $('#datosgeograficos').removeAttr('disabled');
            },
            error: function (xhr, status, error) {
              alertabad();
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
          //$('input[name="condicionespecial[]"]').attr('required', 'required');

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


        
    });
    
         
 
  

//funcion para la dirección



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