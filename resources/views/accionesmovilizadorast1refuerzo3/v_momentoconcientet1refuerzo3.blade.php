@extends('componentes.navlateral')

@section('title', 'encuestaintegrantes')

@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" >  -->
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
              <div>
                <span class="badge bg-primary" id=""  style="font-size:15px">MOMENTO MOVILIZADOR</span>
                <span class="badge bg-success ms-auto" id="folioContainer" folio="{{ $folio }}" style="font-size:15px">folio: {{ $folio }}</span>
               
              </div>
            
            </button>
    <br>
        </div>

    <div><span class="badge bg-success mt-2" id="folio"></span>
    <span class="badge bg-primary" style="background:#a80a85 !important; color:white" id="nombre"></span>
    <span class="badge bg-primary" style="background:#0dcaf0 !important; color:white" id="sexointegrante"></span>
    <span class="badge bg-primary" style="background:#FF8803 !important; color:white" id="edadintegrante"></span>

    </div>

    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <div class="row">
      <ul class="nav nav-tabs" role="tablist">
      <li class="nav-item" role="presentation"  style="cursor:pointer">
        <a id="bienestarsaludemocionalqt" class="nav-link active">MOMENTO CONSCIENTE
        </a>
      </li>
  <li class="nav-item" role="presentation" style="cursor:pointer">
    <a id="legalqt"  class="nav-link " >ACCIÓN MOVILIZADORA BIENESTAR EN LA FAMILIA</a>
  </li>
  <li class="nav-item" role="presentation"  style="cursor:pointer">
    <a id="financieroqt"  class="nav-link ">ACCIÓN BIENESTAR PRIORIZADO</a>
  </li>

  <li class="nav-item" role="presentation"  style="cursor:pointer">
    <a id="compromisos"  class="nav-link ">COMPROMISOS</a>
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
    <!-- <div class="text-center"><label for="">Avatar</label></div>
        <div class="avatar text-center" style="cursor:pointer">
          <img src="{{asset('avatares/blanco.png')}} " id="imagenDinamica" class="rounded-circle" alt="Avatar" style="width: 150px; height: 150px;" data-bs-toggle="modal" data-bs-target="#exampleModal">
        </div> -->

          <form id="formulario" class="row g-3 was-validated">     
            
          <div class="col-md-3" style="display:none">
            <input type="text" placeholder="folio" class="form-control form-control-sm  " id="folioinput" name="folio" value="{{ $folio }}" >
          </div>
         
          <div class="col-md-3" style="display:none">
            <input type="text" placeholder="usuario" class="form-control form-control-sm  " id="usuario" name="usuario" value="{{ Session::get('cedula') }}" >
          </div>

          <div class="col-md-3" style="display:none">
            <input type="text" placeholder="tabla" class="form-control form-control-sm  " id="tabla" name="tabla" value="{{$tabla}}" >
            <input type="text" placeholder="linea" class="form-control form-control-sm  " id="linea" name="linea" value="{{$linea}}" >
            <input type="text" placeholder="paso" class="form-control form-control-sm  " id="paso" name="paso" value="{{$paso}}" >
          </div>

          <span class="badge bg-primary" id="" style="font-size:15px; background:#a80a85 !important; display:none">MOMENTO CONSCIENTE VISITA TIPO 1.</span>
            <div class="container mt-4"  style="display:none">
              <div class="border">
                <!-- Fila de títulos -->
                <div class="row g-0">
                  <div class="col-md-4 d-flex align-items-center border-end border-bottom text-center" style="background: #2fa4e7; color: white; font-weight: bold;">
                    <div class="p-2">
                      
                    </div>
                  </div>
                  <div class="col-md-8">
                    <div class="row g-0">
                      <div class="col-12 border-bottom p-2 text-center" style="background: #2fa4e7; color: white; font-weight: bold;">
                        NOMBRE DE LA HERRAMIENTA
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Fila de contenido -->
                <div class="row g-0" id="indicadorbse1">
                  <div class="col-md-4 d-flex align-items-center border-end border-bottom">
                    <div class="p-2">
                        MOMENTOS CONSCIENTES
                    </div>
                  </div>
                  <div class="col-md-8 d-flex align-items-stretch  ">
                    <div class="col-12 border-bottom p-2 d-flex align-items-center" style="    text-align: center !important;  display: flex;  flex-direction: column;">
                    <div class="col-md-6" >
                              {!! $momento_conciente !!}
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


              <span class="badge bg-success" id="" style="font-size:15px; display:none ">MOMENTO CONSCIENTE CUARTA VISITA TIPO 1.</span>
            <div class="container mt-4" style="display:none">
              <div class="border">
                <!-- Fila de títulos -->
                <div class="row g-0">
                  <div class="col-md-4 d-flex align-items-center border-end border-bottom text-center" style="background: #2fa4e7; color: white; font-weight: bold;">
                    <div class="p-2">
                      
                    </div>
                  </div>
                  <div class="col-md-8">
                    <div class="row g-0">
                      <div class="col-12 border-bottom p-2 text-center" style="background: #2fa4e7; color: white; font-weight: bold;">
                        NOMBRE DE LA HERRAMIENTA
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Fila de contenido -->
                <div class="row g-0" id="indicadorbse1">
                  <div class="col-md-4 d-flex align-items-center border-end border-bottom">
                    <div class="p-2">
                        MOMENTOS CONSCIENTES
                    </div>
                  </div>
                  <div class="col-md-8 d-flex align-items-stretch  ">
                    <div class="col-12 border-bottom p-2 d-flex align-items-center" style="    text-align: center !important;  display: flex;  flex-direction: column;">
                    <div class="col-md-6" >
                              {!! $momento_concientet1r1 !!}
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <span class="badge bg-primary" id="" style="font-size:15px; background:#ff8403 !important">MOMENTO CONSCIENTE VISITA ACTUAL.</span>
            <div class="container mt-4">
              <div class="border">
                <!-- Fila de títulos -->
                <div class="row g-0">
                  <div class="col-md-4 d-flex align-items-center border-end border-bottom text-center" style="background: #2fa4e7; color: white; font-weight: bold;">
                    <div class="p-2">
                      
                    </div>
                  </div>
                  <div class="col-md-8">
                    <div class="row g-0">
                      <div class="col-12 border-bottom p-2 text-center" style="background: #2fa4e7; color: white; font-weight: bold;">
                        NOMBRE DE LA HERRAMIENTA
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Fila de contenido -->
                <div class="row g-0" id="indicadorbse1">
                  <div class="col-md-4 d-flex align-items-center border-end border-bottom">
                    <div class="p-2">
                        MOMENTOS CONSCIENTES
                    </div>
                  </div>
                  <div class="col-md-8 d-flex align-items-stretch  ">
                    <div class="col-12 border-bottom p-2 d-flex align-items-center" style="    text-align: center !important;  display: flex;  flex-direction: column;">
                    <div class="col-md-6" >
                              {!! $momento_concientet1r2 !!}
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>







<br>
<br>
<br>
<br>




  </div>
  </div>
          <hr>
          <div class="row">  
            <div class="text-start col">


             <div class="btn btn-outline-success" onclick="redirectToIntegrantes()">Volver</div>



            </div>
            <div class="text-end col">
            <button class="btn btn-outline-success" type="submit"  >Guardar</button>
            <div class="btn btn-outline-primary" id="siguiente" <?=$siguiente?> >Siguiente</div>
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
    



      $('#siguiente').click(function(){
        var url = "../bienestarenfamiliat1refuerzo3/<?= $variable ?>"; window.location.href = url;
      }); 
      function redirectToIntegrantes() {
           var folio = `<?=$variable ?>`;
           var url = "../rombovisitatipo1refuerzo3/:folio";
           url = url.replace(':folio', folio);
           window.location.href = url;
       }


    
    
      $('#volver').click(function(){
        redirectToIntegrantes()
      });


      $('#bienestarsaludemocionalqt').click(function(){var url = "../momentoconcientet1refuerzo3/<?= $variable ?>"; window.location.href = url;})
    $('#legalqt').click(function(){var url = "../bienestarenfamiliat1refuerzo3/<?= $variable ?>"; window.location.href = url;})
    $('#financieroqt').click(function(){var url = "../accionmovilizadoraqtt1refuerzo3/<?= $variable ?>"; window.location.href = url;})
    $('#compromisos').click(function(){var url = "../accionmovilizadoracompromisost1refuerzo3/<?= $variable ?>"; window.location.href = url;})

      

       $(document).ready(function() {

        $('#momentoconciente').val('<?= $momentoconciente ?>')


        $('#formulario').on('submit', function(event) {
    event.preventDefault(); // Detiene el envío del formulario

    // Serializa el formulario incluyendo checkboxes múltiples correctamente
    var formData = $(this).serializeArray();
    var data = []; // Array para almacenar los objetos de cada momento

    // Información general que será la misma para cada objeto
    var folio = '{{ $folio }}';
    var usuario = '<?= Session::get('cedula') ?>';
    var tabla = "{{$tabla}}";
    var linea = "{{$linea}}";
    var paso = "{{$paso}}";

    // Ajuste para manejar arrays correctamente
    $(formData).each(function(index, obj) {
        if (obj.name.startsWith('momentos')) {
            // Crear un objeto para cada momento seleccionado
            var momentoObj = {
                folio: folio,
                usuario: usuario,
                tabla: tabla,
                linea: linea,
                paso: paso,
                momentoconciente: obj.value
            };
            
            // Agregar el objeto al array de data
            data.push(momentoObj);
        }
    });

    console.log(data); // Verifica en la consola la estructura de los datos

    $.ajax({
    url: '../guardarmomentoconciente',
    method: 'POST', // Cambiar a POST si lo necesitas
    contentType: 'application/json',
    data: JSON.stringify(data), // Asegúrate de que 'data' es un array de objetos JSON
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Agrega el token aquí
    },
    success: function(response) {
        $('#siguiente').css('display', '');
        agregarpaso(data);
    },
    error: function(xhr, status, error) {
        alertabad();
        console.error(error);
    }
});

});

});
function agregarpaso(datas){

  var data = {
        folio: '{{ $folio }}', // Reemplaza 'valor_defecto_folio' con un valor por defecto si es necesario
        linea: "{{$linea}}", // Reemplaza 'valor_defecto_linea' con un valor por defecto si es necesario
        paso:"{{$paso}}",    // Reemplaza 'valor_defecto_paso' con un valor por defecto si es necesario
        usuario: '<?= Session::get('cedula') ?>', // Reemplaza 'valor_defecto_usuario' con un valor por defecto si es necesario

    };
           
    $.ajax({
      url: '../agregarpasohogargeneral',
      method: 'GET', // Cambiar a GET si estás usando GET
      data: data, // Envía los datos de manera plana
      success: function(response) {
        $('#siguiente').css('display','');
          alertagood();
      },
      error: function(xhr, status, error) {
          alertabad();
          console.error(error);
      }
    });
}

    </script>


    <!-- <script>
    document.addEventListener('DOMContentLoaded', function () {
        const checkboxes = document.querySelectorAll('input[type="checkbox"]');
        const form = document.getElementById('myForm');

        checkboxes.forEach((checkbox) => {
            checkbox.addEventListener('change', validateCheckboxes);
        });

        function validateCheckboxes() {
            // Contar los checkboxes seleccionados
            const selectedCount = Array.from(checkboxes).filter(cb => cb.checked).length;

            // Validar selección mínima y máxima
            if (selectedCount >= 1 && selectedCount <= 2) {
                // Remover el atributo 'required' si al menos uno está seleccionado
                checkboxes.forEach(cb => cb.removeAttribute('required'));
            } else {
                // Si no hay seleccionados, aplicar 'required' a todos los checkboxes
                checkboxes.forEach(cb => cb.setAttribute('required', 'required'));
            }

            // Deshabilitar otros checkboxes si ya hay 2 seleccionados
            if (selectedCount === 2) {
                checkboxes.forEach(cb => {
                    if (!cb.checked) cb.disabled = true;
                });
            } else {
                checkboxes.forEach(cb => cb.disabled = false);
            }
        }
    });
</script> -->

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Selecciona solo los checkboxes del segundo formulario (momentos[])
        const checkboxes = document.querySelectorAll('input[name="momentos[]"]');
        const form = document.getElementById('myForm');

        checkboxes.forEach((checkbox) => {
            checkbox.addEventListener('change', validateCheckboxes);
        });

        function validateCheckboxes() {
            // Contar los checkboxes seleccionados
            const selectedCount = Array.from(checkboxes).filter(cb => cb.checked).length;

            // Validar selección mínima y máxima
            if (selectedCount >= 1 && selectedCount <= 2) {
                // Remover el atributo 'required' si al menos uno está seleccionado
                checkboxes.forEach(cb => cb.removeAttribute('required'));
            } else {
                // Si no hay seleccionados, aplicar 'required' a todos los checkboxes
                checkboxes.forEach(cb => cb.setAttribute('required', 'required'));
            }

            // Deshabilitar otros checkboxes si ya hay 2 seleccionados
            if (selectedCount === 2) {
                checkboxes.forEach(cb => {
                    if (!cb.checked) cb.disabled = true;
                });
            } else {
                checkboxes.forEach(cb => cb.disabled = false);
            }
        }
    });
</script>


<script>
document.addEventListener('DOMContentLoaded', function() {
    const checkboxes = document.querySelectorAll('input[name="momentos[]"]');
    const minSelection = 1;
    const maxSelection = 2;

    // Función para actualizar el estado de los checkboxes
    function updateCheckboxes() {
        const selectedCount = document.querySelectorAll('input[name="momentos[]"]:checked').length;

        if (selectedCount >= maxSelection) {
            // Deshabilitar los no seleccionados cuando se alcanza el límite
            checkboxes.forEach((cb) => {
                if (!cb.checked) {
                    cb.disabled = true;
                    cb.required = false;
                }
            });
        } else if (selectedCount >= minSelection) {
            // Habilitar todos y hacer que solo los seleccionados sean requeridos si hay al menos 1 seleccionado
            checkboxes.forEach((cb) => {
                cb.disabled = false;
                cb.required = cb.checked; // Solo los seleccionados son requeridos
            });
        } else {
            // Si no hay ningún seleccionado, hacer todos requeridos
            checkboxes.forEach((cb) => {
                cb.disabled = false;
                cb.required = true;
            });
        }
    }

    // Agregar el evento de cambio a cada checkbox
    checkboxes.forEach((checkbox) => {
        checkbox.addEventListener('change', updateCheckboxes);
    });

    // Inicializar el estado de los checkboxes al cargar la página
    updateCheckboxes();
});


</script>

@endsection