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
            <li class="nav-item" role="presentation" style="cursor:pointer">
                <a id="identificacion" class="nav-link ">BIENESTAR FISICO Y EMOCIONAL
                </a>
            </li>
                <li class="nav-item" role="presentation" style="cursor:pointer">
                    <a id="identatario"  class="nav-link" >BIENESTAR INTELECTUAL</a>
                </li>
                <li class="nav-item" role="presentation" style="cursor:pointer">
                    <a id="financiero"  class="nav-link " >BIENESTAR FINANCIERO</a>
                </li>
                <li class="nav-item" role="presentation" style="cursor:pointer">
                    <a id="legal"  class="nav-link active" >BIENESTAR LEGAL</a>
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


          <form id="formlegal" class="row g-3 was-validated">     
            
          <div class="col-md-3" style="display:none">
            <input type="text" placeholder="folio" class="form-control form-control-sm  " id="folioinput4" name="folio" value="" required="">
          </div>
          <div class="col-md-3" style="display:none">
            <input type="text"  class="form-control form-control-sm  " id="idintegrante4" name="idintegrante" value="" required="">
          </div>
          <div class="col-md-3" style="display:none">
            <input type="text" placeholder="usuario" class="form-control form-control-sm  " id="usuario" name="usuario" value="{{ Session::get('cedula') }}" >
          </div>
        <div class="col-md-12" id="mecanismosdeproteccionddhhdiv">
                  <label for="validationServer04" class="form-label">¿Conoces las instituciones de administración de justicia y de garantía de derechos?</label>
                  <select class="form-control form-control-sm" id="mecanismosdeproteccionddhh" name="mecanismosdeproteccionddhh" aria-describedby="validationServer04Feedback" required="">
                    {{!!$sino!!}}
                </select>
                </div>
        <div class="col-md-12" id="mecanismosdeproteccionddhh2div">
            <label for="validationServer04" class="form-label">¿Requieres acceder a los servicios de las instituciones de administración de justicia y de garantía de derechos?</label>
            <select class="form-control form-control-sm" id="mecanismosdeproteccionddhh2" name="mecanismosdeproteccionddhh2" aria-describedby="validationServer04Feedback" required="">
            {{!!$sino!!}}     
                </select>
          </div>
          <div class="col-md-12" id="mecanismosdeproteccionddhh3div">
            <label for="validationServer04" class="form-label">¿De cuáles de las siguientes instituciones para la protección y garantía de tus derechos has hecho uso?</label>
            <div class="form-check form-switch" id="container-mecanismosdeproteccionddhh3">
                      {!!$mecanismosdeproteccionddhh3!!} 
                    </div>
          </div>
          

          <div style="display:none" id="menorespreguntaslegaldiv">
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
         

        // console.log(data.imagen.avatar , 'avatar')
 
    //     let acceso3 = JSON.parse(data.integrantes.acceso3); // ["49", "54"]
          
    // Iterar sobre todos los checkboxes en el contenedor y marcar/desmarcar según los valores seleccionados
             
            let mecanismosdeproteccionddhh3 = JSON.parse((data.integranteslegal)?data.integranteslegal.mecanismosdeproteccionddhh3:'{}'); // ["49", "54"]

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

          
            if(data.integranteslegal ==null){
            }else{
              $('#volver').css('display','');
            }
          
           $('#mecanismosdeproteccionddhh').val((data.integranteslegal)?data.integranteslegal.mecanismosdeproteccionddhh:'');
           $('#mecanismosdeproteccionddhh3').val((data.integranteslegal)?data.integranteslegal.mecanismosdeproteccionddhh3:'');
           $('#mecanismosdeproteccionddhh2').val((data.integranteslegal)?data.integranteslegal.mecanismosdeproteccionddhh2:'');

           
        

         
        

        //  if ($('input[name="mecanismosdeproteccionddhh3[]"]:visible').length > 0) {
        //    $('input[name="mecanismosdeproteccionddhh3[]"]').removeAttr('required');
        //  }else{
        //    //$('input[name="mecanismosdeproteccionddhh3[]"]:hidden').removeAttr('required');
        //  }


               if(parseInt($('#edadintegrante').val()) >= '18'){
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
                $('#mecanismosdeproteccionddhh3360').css('display','');
                $('#mecanismosdeproteccionddhh2div').css('display','');
                $('#mecanismosdeproteccionddhh2').attr('required','required');
                
              }

               if(parseInt($('#edadintegrante').val()) >= '0' && parseInt($('#edadintegrante').val()) <= '17'){
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
                 $('#mecanismosdeproteccionddhh3360').css('display','none');
                 $('#mecanismosdeproteccionddhh3div').css('display','none');
                 $('input[name="trabajoinfantil[]"]').prop('checked', false);
                 $('#mecanismosdeproteccionddhh2div').css('display','none');
                 $('#mecanismosdeproteccionddhh2').val('0');
                 $('#mecanismosdeproteccionddhh2').removeAttr('required');
                 $('#menorespreguntaslegaldiv').css('display','');
                 
            
              }

              if ($('#mecanismosdeproteccionddhh3369').is(':checked')) {
              $('input[name="mecanismosdeproteccionddhh3[]"]').not('#mecanismosdeproteccionddhh3369').closest('div').hide();
            } else {
              $('input[name="mecanismosdeproteccionddhh3[]"]').closest('div').show();
            }

            if ($('input[name="mecanismosdeproteccionddhh3[]"]:visible:checked').length > 0) {
           $('input[name="mecanismosdeproteccionddhh3[]"]').removeAttr('required');
         }else{
            $('input[name="mecanismosdeproteccionddhh3[]"]:hidden').removeAttr('required');
         }
              
paginalista();
         },
        error: function(xhr, status, error) {
                  console.log(xhr.responseText);
              }
      })
      })

    

      $('#volver').click(function(){
        redirectToIntegrantes()
      });
      $('.noaplica0').hide();
      function convertirAMayusculas(element) {
            element.value = element.value.toUpperCase();
        }

        function redirectToIntegrantes() {
           var folio = window.localStorage.getItem('folioencriptado');
           var url = "../public/integrantes/:folio";
           url = url.replace(':folio', folio);
           window.location.href = url;
       }


       $('#identificacion').click(function(){var url = "./encuestaintegrantesfisicoemocional"; window.location.href = url;})
      $('#financiero').click(function(){var url = "./encuestaintegrantesfinanciero"; window.location.href = url;})
      $('#identatario').click(function(){var url = "./encuestaintegrantesintelectual"; window.location.href = url;})

      $('#atras3').click(function(){
        var url = "./encuestaintegrantesfinanciero";
        window.location.href = url;
      }); 

     
      $('input[name="mecanismosdeproteccionddhh3[]"]').change(function() {
      if ($('input[name="mecanismosdeproteccionddhh3[]"]:visible:checked').length > 0) {
          $('input[name="mecanismosdeproteccionddhh3[]"]').removeAttr('required');
        }else{
          $('input[name="mecanismosdeproteccionddhh3[]"]').attr('required', 'required');
        }
      });


      $('input[name="mecanismosdeproteccionddhh3[]"]').change(function() {  console.log('hola1');
          if ($(this).attr('id') === 'mecanismosdeproteccionddhh3369' && $(this).is(':checked')) {
              $('input[name="mecanismosdeproteccionddhh3[]"]').not('#mecanismosdeproteccionddhh3369').each(function() {
                  $(this).prop('checked', false); // Desmarcar
                  $(this).closest('div').hide();  // Ocultar
                
              });
          } else if ($(this).attr('id') === 'mecanismosdeproteccionddhh3369' && !$(this).is(':checked')) {
              $('input[name="mecanismosdeproteccionddhh3[]"]').closest('div').show(); // Mostrar todos

            // console.log('hola2');
          }
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
                            { id: '360', valor: 'NO' },
                            { id: '369', valor: 'NO' },
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
              alertagood();
              $('#volver').css('display','');
              $('#identatario').removeAttr('disabled');
            },
            error: function(xhr, status, error) {
                console.error(error);
                alertabad();
            }
        });
        
    });
       

  

    </script>
 

@endsection