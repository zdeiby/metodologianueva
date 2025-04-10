@extends('componentes.navlateral')

@section('title', 'Actualización novedades')

@section('content')
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
  <div class="row justify-content-center">
    
    <div class="col-md-12">
      <div class="card">
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
                <span class="badge bg-primary" id=""  style="font-size:15px">Actualización y/o Novedades del hogar</span> 
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
        <a id="caracterizacionIntegranteffes" class="nav-link" onclick="redirigirACaracterizacionIntegrantes()">caracterizacion integrantes
        </a>
      </li>
      
      <li class="nav-item" role="presentation"  style="cursor:pointer">
        <a id="bienestarsaludemocionalqt" class="nav-link active">Primera Infancia
        </a>
      </li>
       <li class="nav-item" role="presentation" style="cursor:pointer">
        <a id="mecanismosqt"  class="nav-link" onclick="redirigirAMecanismosProteccion()" >Mecanismos de Protección</a>
      </li>
      <!--  <li class="nav-item" role="presentation" style="cursor:pointer">
        <a id="legalqt"  class="nav-link " >caracterizacion hogar</a>
      </li> -->
      <!-- <li class="nav-item" role="presentation"  style="cursor:pointer">
        <a id="financieroqt"  class="nav-link ">TOMA DE EVIDENCIAS Y CIERRE</a>
      </li> -->
  
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
            
          <input type="hidden" name="folio" id="folioinput" value="{{ $folio }}">
          <input type="hidden" name="idintegrante" id="idintegranteinput" value="{{ $idintegrante }}">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">

          <span class="badge bg-primary" id="" style="font-size:15px; background:#a80a85 !important">Servicios de Primera Infancia</span>


          <!-- Cabecera con información del integrante -->
          <div class="mt-2 mb-2">
            <div style="background-color: #f8f9fa; border-radius: 5px; padding: 8px 15px;">
              <div class="d-flex align-items-center">
                <span class="badge rounded-pill" style="font-size: 14px; background-color: #28a745; color: white; padding: 8px 12px; margin-right: 10px;">{{ $folio }}</span>
                <span class="badge rounded-pill" style="font-size: 14px; background-color: #9c27b0; color: white; padding: 8px 12px; margin-right: 10px; text-transform: uppercase;">{{ trim(($datosIntegrante->nombre1 ?? '') . ' ' . ($datosIntegrante->nombre2 ?? '') . ' ' . ($datosIntegrante->apellido1 ?? '') . ' ' . ($datosIntegrante->apellido2 ?? '')) }}</span>
                <span class="badge rounded-pill" style="font-size: 14px; background-color: #fd7e14; color: white; padding: 8px 12px;">{{ isset($datosIntegrante->edad) ? $datosIntegrante->edad . ' años' : 'Edad no disponible' }}</span>
              </div>
            </div>
          </div>

          <div class="alert alert-info" role="alert" style="background-color: #d1ecf1; border-color: #bee5eb; color: #0c5460;">
  <b>Instrucciones:</b> Seleccione el servicio de primera infancia en el que se encuentra recibiendo atención el integrante.
</div>

          <div class="alert alert-warning" role="alert">
            <i class="fas fa-exclamation-triangle"></i> <b>Importante:</b> Este formulario solo aplica para niños menores de 6 años.
          </div>

          <div class="card mt-3">
  <div class="card-header bg-light">
    <h5 class="card-title mb-0">¿En qué servicios de primera infancia se encuentra recibiendo atención?</h5>
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-md-12">
        <select class="form-select" id="servicio_primera_infancia" name="servicio_primera_infancia">
          <option value="">Seleccione una opción</option>
          @foreach($serviciosPrimeraInfancia as $servicio)
            <option value="{{ $servicio->id }}" {{ isset($servicioSeleccionado) && $servicioSeleccionado == $servicio->id ? 'selected' : '' }}>
              {{ $servicio->pregunta }}
            </option>
          @endforeach
        </select>
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
            <div class="btn btn-outline-primary" id="siguiente"   >Siguiente</div>
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
    $(document).ready(function() {       
    
     // Manejar el envío del formulario
$('form').submit(function(e) {
    e.preventDefault();
    
    // Verificar que se haya seleccionado una opción
    var servicioSeleccionado = $('#servicio_primera_infancia').val();
    if(!servicioSeleccionado) {
        Swal.fire({
            title: 'Atención',
            text: 'Por favor seleccione un servicio de primera infancia',
            icon: 'warning',
            confirmButtonText: 'Aceptar'
        });
        return false;
    }
    
    // Recopilar datos del formulario
    var formData = {
        folio: $('#folioinput').val(),
        idintegrante: $('#idintegranteinput').val(),
        servicio_primera_infancia: servicioSeleccionado,
        _token: $('meta[name="csrf-token"]').attr('content')
    };
    
    // Mostrar indicador de carga
    Swal.fire({
        title: 'Guardando...',
        text: 'Por favor espere mientras se guardan los datos',
        allowOutsideClick: false,
        didOpen: () => {
            Swal.showLoading();
        }
    });
    
    // Enviar datos mediante AJAX
    $.ajax({
        url: "{{ route('guardar.primeraInfancia') }}",
        type: "POST",
        data: formData,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(response) {
            Swal.close();
            if(response.success) {
                Swal.fire({
                    title: 'Éxito',
                    text: 'Datos guardados correctamente',
                    icon: 'success',
                    confirmButtonText: 'Aceptar'
                });
            } else {
                Swal.fire({
                    title: 'Error',
                    text: response.message || 'Ocurrió un error al guardar los datos',
                    icon: 'error',
                    confirmButtonText: 'Aceptar'
                });
            }
        },
        error: function(xhr, status, error) {
            Swal.close();
            console.error("Error en la solicitud AJAX:", xhr.responseText);
            Swal.fire({
                title: 'Error',
                text: 'Ocurrió un error al procesar la solicitud. Por favor, intente nuevamente.',
                icon: 'error',
                confirmButtonText: 'Aceptar'
            });
        }
    });
});
        
        // Manejar el botón "Siguiente"
        $('#siguiente').click(function() {
            // Mostrar mensaje informativo
            Swal.fire({
                title: 'Información',
                text: 'La navegación al siguiente paso estará disponible cuando se implementen los formularios correspondientes.',
                icon: 'info',
                confirmButtonText: 'Aceptar'
            });
        });
        
        // Función para el botón "Volver"
        $('#volver').click(function() {
            // Mostrar mensaje informativo
            Swal.fire({
                title: 'Información',
                text: 'La navegación a la vista de integrantes estará disponible cuando se implemente el formulario correspondiente.',
                icon: 'info',
                confirmButtonText: 'Aceptar'
            });
        });
        
        // Función para validar input
        function validateInput(input) {
            // Eliminar caracteres especiales
            input.value = input.value.replace(/[^\w\s.,]/gi, '');
        }
    });



     // Función para redirigir a la vista de caracterización integrantes
     function redirigirACaracterizacionIntegrantes() {
            var folio = $('#folioContainer').attr('folio');
            var idintegrante = $('#idintegranteinput').val();
            window.location.href = "{{ route('caracterizacion_integrantes', ['folio' => ':folio', 'idintegrante' => ':idintegrante']) }}".replace(':folio', folio).replace(':idintegrante', idintegrante);
        }

     // Función para redirigir a la vista de mecanismos de protección
     function redirigirAMecanismosProteccion() {
            var folio = $('#folioContainer').attr('folio');
            var idintegrante = $('#idintegranteinput').val();
            
            // Obtener el texto de la edad y eliminar la palabra 'años' si está presente
            var edadTexto = $('#edadintegrante').text().replace('años', '').trim();
            // Si no hay texto en el elemento con id edadintegrante, intentar obtenerlo del otro elemento
            if (!edadTexto) {
                edadTexto = $('.badge.rounded-pill[style*="background-color: #fd7e14"]').text().replace('años', '').trim();
            }
            
            var edad = parseInt(edadTexto);
            
            // Añadir log para depuración
            console.log("Edad detectada:", edad);
            
            if (edad > 5 && edad < 18) {
                window.location.href = "{{ route('mecanismos_proteccion', ['folio' => ':folio', 'idintegrante' => ':idintegrante']) }}".replace(':folio', folio).replace(':idintegrante', idintegrante);
            } else {
                Swal.fire({
                    title: 'Atención',
                    text: 'El formulario de mecanismos de protección solo aplica para personas mayores de 5 y menores de 18 años.',
                    icon: 'warning',
                    confirmButtonText: 'Aceptar'
                });
            }
        }

        // Función para redirigir a la vista de primera infancia
function redirigirAPrimeraInfancia() {
    var folio = $('#folioContainer').attr('folio');
    var idintegrante = $('#idintegranteinput').val();
    var edad = parseInt($('#edadintegrante').text());
    
    if (edad < 6) {
        window.location.href = "{{ route('primera_infancia', ['folio' => ':folio', 'idintegrante' => ':idintegrante']) }}".replace(':folio', folio).replace(':idintegrante', idintegrante);
    } else {
        Swal.fire({
            title: 'Atención',
            text: 'El formulario de primera infancia solo aplica para niños menores de 6 años.',
            icon: 'warning',
            confirmButtonText: 'Aceptar'
        });
    }
}


    </script>
@endsection