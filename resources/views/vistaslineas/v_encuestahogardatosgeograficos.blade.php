
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
        <a id="conformacionfamiliarmenu" class="nav-link "  style="cursor:pointer">CONFORMACIÓN FAMILIAR
        </a>
      </li>
  <li class="nav-item" role="presentation">
    <a id="datosgeograficosmenu"  class="nav-link active" style="cursor:pointer">DATOS GEOGRAFICOS Y ECONÓMICOS</a>
  </li>
  <li class="nav-item" role="presentation">
    <a id="condicioneshabitabilidadmenu"  class="nav-link "  style="cursor:pointer">CONDICIONES DE HABITABILIDAD</a>
  </li>
  <li class="nav-item" role="presentation">
    <a id="accesoalimentosmenu"  class="nav-link "  style="cursor:pointer">ACCESO Y DISPONIBILIDAD DE ALIMENTOS</a>
  </li>
  <li class="nav-item" role="presentation">
    <a id="entornofamiliarmenu"  class="nav-link "  style="cursor:pointer"> ENTORNO FAMILIAR</a>
  </li>
  
</ul>



<div id="myTabContent" class="tab-content"><br>

      
  <div class="tab-pane fade  active show" id="datosgeograficos" role="tabpanel" aria-labelledby="datosgeograficos">
  <form class="row g-3 was-validated" id="formdatosgeograficos">
  <div class="col-md-3" style="display:none">
            <input type="text" placeholder="folio" class="form-control form-control-sm  " id="folioinput" name="folio" value="{{ decrypt($variable) }}" required="">
          </div>
          <div class="col-md-3" style="display:none">
            <input type="text" placeholder="usuario" class="form-control form-control-sm  " id="usuario" name="usuario" value="{{ Session::get('cedula') }}" >
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
        url:'../leerpreguntashogareconomicos',
        data:{folio:folio},
        method: "GET",
        dataType:'JSON',
        success:function(data){
    



           
            if(data.hogardatoseconomicos ==null){
            }else{
              $('#siguiente2').css('display','');
            }
            
          
     
          
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
                            paginalista();
                          },
                          error: function(xhr, status, error) {
                            paginalista();
                                   // console.log(xhr.responseText);
                                }
                        })


                  
      


         },
        error: function(xhr, status, error) {
                  //console.log(xhr.responseText);
              }
      })
      })    

    
      $('#atras').click(function(){
        window.location.href="../encuestahogarconformacionfamiliar/<?= $variable ?>" 
      }); 
 
      $('#siguiente2').click(function(){
        window.location.href="../encuestahogarhabitabilidad/<?= $variable ?>" 
      }); 
       $('#conformacionfamiliarmenu').click(function(){
          window.location.href="../encuestahogarconformacionfamiliar/<?= $variable ?>"
       });

      // $('#datosgeograficosmenu').click(function(){
      //    window.location.href="../encuestahogardatosgeograficos/<?= $variable ?>"
      // });
      $('#condicioneshabitabilidadmenu').click(function(){
         window.location.href="../encuestahogarhabitabilidad/<?= $variable ?>"
      });
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
              alertagood()
               $('#siguiente2').css('display','');
               $('#datosgeograficos').removeAttr('disabled');
             },
             error: function(xhr, status, error) {
              alertabad();
                 console.error(error);
             }
         });  
        
    });
    
     
   
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



 










    </script>
 

@endsection