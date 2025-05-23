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
      @php
        $edad = isset($datosIntegrante->edad) ? intval($datosIntegrante->edad) : 0;
        $aplicaMecanismos = ($edad > 5 && $edad < 18);
      @endphp
      <ul class="nav nav-tabs" role="tablist">
        @php
          $edad = isset($datosIntegrante->edad) ? intval($datosIntegrante->edad) : 0;
        @endphp
        @if($edad > 5 && $edad < 15)
        <li class="nav-item" role="presentation" style="cursor:pointer">
          <a id="caracterizacionIntegranteffes" class="nav-link" onclick="redirigirACaracterizacionIntegrantes()">caracterizacion integrantes</a>
        </li>
        @endif
        <li class="nav-item" role="presentation" style="cursor:pointer">
          <a id="primeraInfanciaqt" class="nav-link"  onclick="redirigirAPrimeraInfancia()">Primera Infancia</a>
        </li>
        <li class="nav-item" role="presentation" style="cursor:pointer">
          <a id="mecanismosqt"  class="nav-link active" >Mecanismos de Protección</a>
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
                
              <input type="hidden" name="folio" id="folioinput" value="{{ $folio }}">
              <input type="hidden" name="idintegrante" id="idintegranteinput" value="{{ $idintegrante }}">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">

              <span class="badge bg-primary" id="" style="font-size:15px; background:#a80a85 !important">Mecanismos de Protección</span>

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
              <b>Instrucciones:</b> Seleccione si conoce o no las instituciones y mecanismos que garantizan sus derechos.
              </div>

              @php
              $edad = isset($datosIntegrante->edad) ? intval($datosIntegrante->edad) : 0;
              $edadValida = $edad > 5 && $edad < 18;
              @endphp

              @if(!$edadValida)
              <div class="alert alert-warning" role="alert">
                <i class="fas fa-exclamation-triangle"></i> <b>Importante:</b> Este integrante tiene {{$edad}} años. Este formulario solo aplica para personas mayores de 5 y menores de 18 años. No es necesario seleccionar opciones, simplemente presione "Guardar" para continuar.
              </div>
              <input type="hidden" id="edad_no_valida" value="1">
              @else
              <div class="alert alert-warning" role="alert">
                <i class="fas fa-exclamation-triangle"></i> <b>Importante:</b> Este formulario solo aplica para personas mayores de 5 y menores de 18 años.
              </div>
              <input type="hidden" id="edad_no_valida" value="0">
              @endif

              <div class="card mt-3">
              <div class="card-header bg-light">
                <h5 class="card-title mb-0">¿Conoces las instituciones y mecanismos para garantízar tus derechos?</h5>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <select class="form-select" id="conoce_institucion_mecanismo" name="conoce_institucion_mecanismo" {{ !$edadValida ? 'disabled' : '' }}>
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
                <div class="btn btn-outline-primary" id="siguiente"   onclick="window.location.href='{{ url('integrantesffes/' . $foliourl) }}'"  >Siguiente</div>
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
</div>


 
    </div>

    <script src="{{ asset('assets/jquery/jquery.js') }}"></script>

    <script>
    // Definir las funciones de redirección fuera del document.ready para que estén disponibles globalmente
    function redirigirAPrimeraInfancia() {
        var folio = $('#folioContainer').attr('folio');
        var idintegrante = $('#idintegranteinput').val();
        
        // Redireccionar directamente a Primera Infancia sin validar la edad
        window.location.href = "{{ route('primera_infancia', ['folio' => ':folio', 'idintegrante' => ':idintegrante']) }}".replace(':folio', '<?= $foliourl ?>').replace(':idintegrante', '<?= $idintegranteurl ?>');
    }
    
    // Función para volver a Primera Infancia sin validación de edad
    function redirectToIntegrantes() {
        var folio = $('#folioContainer').attr('folio');
        var idintegrante = $('#idintegranteinput').val();
        
        // Redireccionar a Primera Infancia sin validar la edad
        window.location.href = "{{ route('primera_infancia', ['folio' => ':folio', 'idintegrante' => ':idintegrante']) }}".replace(':folio', '<?= $foliourl ?>').replace(':idintegrante', '<?= $idintegranteurl ?>');
    }
    
    function redirigirACaracterizacionIntegrantes() {
        var folio = $('#folioContainer').attr('folio');
        var idintegrante = $('#idintegranteinput').val();
        window.location.href = "{{ route('caracterizacion_integrantes', ['folio' => ':folio', 'idintegrante' => ':idintegrante']) }}".replace(':folio', '<?= $foliourl ?>').replace(':idintegrante', '<?= $idintegranteurl ?>');
    }
    
    // Función para mostrar alerta de edad
    function alertEdad(event) {
        event.preventDefault();
        Swal.fire({
            title: 'Atención',
            text: 'El formulario de primera infancia solo aplica para niños menores de 6 años.',
            icon: 'warning',
            confirmButtonText: 'Aceptar'
        });
    }
    
    $(document).ready(function() {
        // Manejar el envío del formulario
        $('form').submit(function(e) {
            e.preventDefault();
            
            // Verificar si la edad es válida
            var edadNoValida = $('#edad_no_valida').val() == 1;
            
            // Recopilar datos del formulario
            var formData = {
                folio: $('#folioinput').val(),
                idintegrante: $('#idintegranteinput').val(),
                _token: $('meta[name="csrf-token"]').attr('content')
            };
            
            // Si la edad no es válida, asignar 0 automáticamente
            if(edadNoValida) {
                formData.conoce_institucion_mecanismo = 0;
            } else {
                // Verificar que se haya seleccionado una opción si la edad es válida
                var servicioSeleccionado = $('#conoce_institucion_mecanismo').val();
                if(!servicioSeleccionado) {
                    Swal.fire({
                        title: 'Atención',
                        text: 'Por favor seleccione una opción sobre el conocimiento de instituciones y mecanismos',
                        icon: 'warning',
                        confirmButtonText: 'Aceptar'
                    });
                    return false;
                }
                formData.conoce_institucion_mecanismo = servicioSeleccionado;
            }
            
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
                url: "{{ route('guardar.mecanismosProteccion') }}",
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
                        }).then((result) => {
                            // Recargar la página después de guardar para mostrar los datos actualizados
                            if (result.isConfirmed) {
                                window.location.reload();
                            }
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
                    Swal.fire({
                        title: 'Error',
                        text: 'Ocurrió un error al guardar los datos: ' + error,
                        icon: 'error',
                        confirmButtonText: 'Aceptar'
                    });
                }
            });
        });
        
        // Resto del código dentro de document.ready
    });
    </script>

@endsection