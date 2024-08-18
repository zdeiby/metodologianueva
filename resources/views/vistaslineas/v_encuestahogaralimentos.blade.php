
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
    <a id="accesoalimentosmenu"  class="nav-link active" style="cursor:pointer">ACCESO Y DISPONIBILIDAD DE ALIMENTOS</a>
  </li>
  <li class="nav-item" role="presentation">
    <a id="entornofamiliarmenu"  class="nav-link " style="cursor:pointer"> ENTORNO FAMILIAR</a>
  </li>
  
</ul>



<div id="myTabContent" class="tab-content"><br>


  <div class="tab-pane fade active show" id="accesoalimentos" role="tabpanel" aria-labelledby="accesoalimentos">
  <form class="row g-3 was-validated" id="formaccesoalimentos">
  <div class="col-md-3" style="display:none">
            <input type="text" placeholder="folio" class="form-control form-control-sm  " id="folioinput" name="folio" value="{{ decrypt($variable) }}" required="">
          </div>
          <div class="col-md-3" style="display:none">
            <input type="text" placeholder="usuario" class="form-control form-control-sm  " id="usuario" name="usuario" value="{{ Session::get('cedula') }}" >
          </div>
        <div class="col-md-12">
                  <label for="validationServer04" class="form-label">¿En tu hogar, cuántas comidas se consumen al día en promedio?</label>
                  <select class="form-control form-control-sm" id="numerocomidas" name="numerocomidas" aria-describedby="validationServer04Feedback" required="">
                  {{!!$numerodecomidas!!}}
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
        url:'../leerpreguntashogaralimentos',
        data:{folio:folio},
        method: "GET",
        dataType:'JSON',
        success:function(data){
    
            if(data.hogarcondicionesalimentarias ==null){
            }else{
              $('#siguiente4').css('display','');
            }
         
            //ACCESO Y DISPONIBILIDAD DE ALIMENTOS

            
           $('#numerocomidas').val((data.hogarcondicionesalimentarias)?data.hogarcondicionesalimentarias.numerocomidas:'');
           $('#accesibilidadalimentos2').val((data.hogarcondicionesalimentarias)?data.hogarcondicionesalimentarias.accesibilidadalimentos2:'');
           $('#accesibilidadalimentos3').val((data.hogarcondicionesalimentarias)?data.hogarcondicionesalimentarias.accesibilidadalimentos3:'');
           $('#accesibilidad').val((data.hogarcondicionesalimentarias)?data.hogarcondicionesalimentarias.accesibilidad:'');

          // BIENESTAR condicioneshabitabilidad
paginalista();
         },
        error: function(xhr, status, error) {
                  //console.log(xhr.responseText);
              }
      })
      })    

      $('#atras3').click(function(){
        window.location.href="../encuestahogarhabitabilidad/<?= $variable ?>" 
      }); 
 
      $('#siguiente4').click(function(){
        window.location.href="../hogarentornofamiliar/<?= $variable ?>" 
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
     // $('#accesoalimentosmenu').click(function(){
     //    window.location.href="../encuestahogaralimentos/<?= $variable ?>"
     // });
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
              alertagood()
               $('#siguiente4').css('display','');
               $('#datosgeograficos').removeAttr('disabled');
             },
             error: function(xhr, status, error) {
              alertabad();
                 console.error(error);
             }
         });
        
    });


   
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