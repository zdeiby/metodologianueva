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
      <li class="nav-item" role="presentation" style="cursor:pointer">
        <a id="caracterizacionIntegranteffes" class="nav-link active">caracterizacion integrantes
        </a>
      </li>
       
      @php
        // Obtener la edad del integrante
        $edad = 0;
        if(isset($datosIntegrante->edad)) {
            $edad = intval($datosIntegrante->edad);
        }
        
        // Verificar si existen estrategias guardadas para este integrante
        $existeEstrategias = false;
        $estrategiasGuardadas = DB::table('t1_caracterizacionIntegrante_estrategia_ffes')
            ->where('folio', $folio)
            ->where('idintegrante', $idintegrante)
            ->first();
        
        if ($estrategiasGuardadas) {
            $existeEstrategias = true;
        }
        
        // Verificar si existen datos de primera infancia guardados
        $existePrimeraInfancia = false;
        $primeraInfanciaGuardada = DB::table('t1_caracterizacionIntegrante_primeraInfancia_ffes')
            ->where('folio', $folio)
            ->where('idintegrante', $idintegrante)
            ->first();
        
        if ($primeraInfanciaGuardada) {
            $existePrimeraInfancia = true;
        }
        
        // Verificar si existen datos de mecanismos de protección guardados
        $existeMecanismosProteccion = false;
        $mecanismosProteccionGuardados = DB::table('t1_caracterizacionIntegrante_conoce_instituciones_ffes')
            ->where('folio', $folio)
            ->where('idintegrante', $idintegrante)
            ->first();
        
        if ($mecanismosProteccionGuardados) {
            $existeMecanismosProteccion = true;
        }
      @endphp
      
      {{-- Mostrar pestaña Primera Infancia SOLO si ya existen respuestas guardadas --}}
      @if(isset($existeEstrategias) && $existeEstrategias)
      <li class="nav-item" role="presentation" style="cursor:pointer">
        <a id="legalqt"  class="nav-link" onclick="redirigirAPrimeraInfancia()" >Primera Infancia</a>
      </li>
      @endif
      
      {{-- Mostrar pestaña Mecanismos de Protección SOLO si ya existen respuestas guardadas --}}
      @if(isset($existeMecanismosProteccion) && $existeMecanismosProteccion)
      <li class="nav-item" role="presentation" style="cursor:pointer">
        <a id="mecanismosqt"  class="nav-link" onclick="redirigirAMecanismosProteccion()" >Mecanismos de Protección</a>
      </li>
      @endif
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

          <span class="badge bg-primary" id="" style="font-size:15px; background:#a80a85 !important">Estrategias para reducir el estrés</span>

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
          <b>Instrucciones:</b> Seleccione las estrategias que implementa el integrante para reducir el estrés y favorecer el bienestar emocional y físico.
          </div>

          <div class="card mt-3">
            <div class="card-header bg-light">
              <h5 class="card-title mb-0">Seleccione las estrategias que implementa para reducir el estrés</h5>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="card border-light mb-3">
                    <div class="card-body">
                      <div class="col-md-12 mb-3">
                        <div class="form-check form-switch">
                          <input class="form-check-input estrategia-checkbox" type="checkbox" name="estrategias[]" id="estrategia_1" value="2" {{ in_array(2, $estrategiasSeleccionadas) ? 'checked' : '' }}>
                          <label class="form-check-label" for="estrategia_1"><strong>A. Yoga</strong></label>
                        </div>
                      </div>
                      <div class="col-md-12 mb-3">
                        <div class="form-check form-switch">
                          <input class="form-check-input estrategia-checkbox" type="checkbox" name="estrategias[]" id="estrategia_2" value="3" {{ in_array(3, $estrategiasSeleccionadas) ? 'checked' : '' }}>
                          <label class="form-check-label" for="estrategia_2"><strong>B. Técnicas de relajación y meditación</strong></label>
                        </div>
                      </div>
                      <div class="col-md-12 mb-3">
                        <div class="form-check form-switch">
                          <input class="form-check-input estrategia-checkbox" type="checkbox" name="estrategias[]" id="estrategia_3" value="4" {{ in_array(4, $estrategiasSeleccionadas) ? 'checked' : '' }}>
                          <label class="form-check-label" for="estrategia_3"><strong>C. Participación en  actividades de grupo</strong></label>
                        </div>
                      </div>
                      <div class="col-md-12 mb-3">
                        <div class="form-check form-switch">
                          <input class="form-check-input estrategia-checkbox" type="checkbox" name="estrategias[]" id="estrategia_4" value="5" {{ in_array(5, $estrategiasSeleccionadas) ? 'checked' : '' }}>
                          <label class="form-check-label" for="estrategia_4"><strong>D. Gestión de apoyo social (familiares y amigos)</strong></label>
                        </div>
                      </div>
                      <div class="col-md-12 mb-3">
                        <div class="form-check form-switch">
                          <input class="form-check-input estrategia-checkbox" type="checkbox" name="estrategias[]" id="estrategia_5" value="6" {{ in_array(6, $estrategiasSeleccionadas) ? 'checked' : '' }}>
                          <label class="form-check-label" for="estrategia_5"><strong>E. Gestión de ayuda profesional</strong></label>
                        </div>
                      </div>
                      <div class="col-md-12 mb-3">
                        <div class="form-check form-switch">
                          <input class="form-check-input estrategia-checkbox" type="checkbox" name="estrategias[]" id="estrategia_6" value="7" {{ in_array(7, $estrategiasSeleccionadas) ? 'checked' : '' }}>
                          <label class="form-check-label" for="estrategia_6"><strong>F. Actividades físicas, el juego.</strong></label>
                        </div>
                      </div>
                      <div class="col-md-12 mb-3">
                        <div class="form-check form-switch">
                          <input class="form-check-input estrategia-checkbox" type="checkbox" name="estrategias[]" id="estrategia_7" value="8" {{ in_array(8, $estrategiasSeleccionadas) ? 'checked' : '' }}>
                          <label class="form-check-label" for="estrategia_7"><strong>G.  Alimentación sana</strong></label>
                        </div>
                      </div>
                      <div class="col-md-12 mb-3">
                        <div class="form-check form-switch">
                          <input class="form-check-input estrategia-checkbox" type="checkbox" name="estrategias[]" id="estrategia_8" value="9" {{ in_array(9, $estrategiasSeleccionadas) ? 'checked' : '' }}>
                          <label class="form-check-label" for="estrategia_8"><strong>H. Planificación de actividades cotidianas</strong></label>
                        </div>
                      </div>
                      <div class="col-md-12 mb-3">
                        <div class="form-check form-switch">
                          <input class="form-check-input estrategia-checkbox" type="checkbox" name="estrategias[]" id="estrategia_9" value="10" {{ in_array(10, $estrategiasSeleccionadas) ? 'checked' : '' }}>
                          <label class="form-check-label" for="estrategia_9"><strong>I. Higiene del sueño</strong></label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card border-light mb-3">
                    <div class="card-body">
                      <div class="col-md-12 mb-3">
                        <div class="form-check form-switch">
                          <input class="form-check-input estrategia-checkbox" type="checkbox" name="estrategias[]" id="estrategia_10" value="11" {{ in_array(11, $estrategiasSeleccionadas) ? 'checked' : '' }}>
                          <label class="form-check-label" for="estrategia_10"><strong>J. Mindfulness</strong></label>
                        </div>
                      </div>
                      <div class="col-md-12 mb-3">
                        <div class="form-check form-switch">
                          <input class="form-check-input estrategia-checkbox" type="checkbox" name="estrategias[]" id="estrategia_11" value="12" {{ in_array(12, $estrategiasSeleccionadas) ? 'checked' : '' }}>
                          <label class="form-check-label" for="estrategia_11"><strong>K. Voluntariado</strong></label>
                        </div>
                      </div>
                      <div class="col-md-12 mb-3">
                        <div class="form-check form-switch">
                          <input class="form-check-input estrategia-checkbox" type="checkbox" name="estrategias[]" id="estrategia_12" value="13" {{ in_array(13, $estrategiasSeleccionadas) ? 'checked' : '' }}>
                          <label class="form-check-label" for="estrategia_12"><strong>L. Tiempo en la naturaleza</strong></label>
                        </div>
                      </div>
                      <div class="col-md-12 mb-3">
                        <div class="form-check form-switch">
                          <input class="form-check-input estrategia-checkbox" type="checkbox" name="estrategias[]" id="estrategia_13" value="14" {{ in_array(14, $estrategiasSeleccionadas) ? 'checked' : '' }}>
                          <label class="form-check-label" for="estrategia_13"><strong>M. Terapia de arte o musicoterapia.</strong></label>
                        </div>
                      </div>
                      <div class="col-md-12 mb-3">
                        <div class="form-check form-switch">
                          <input class="form-check-input estrategia-checkbox" type="checkbox" name="estrategias[]" id="estrategia_14" value="15" {{ in_array(15, $estrategiasSeleccionadas) ? 'checked' : '' }}>
                          <label class="form-check-label" for="estrategia_14"><strong>N. Rutinas de autocuidado</strong></label>
                        </div>
                      </div>                     
                      <div class="col-md-12 mb-3">
                        <div class="form-check form-switch">
                          <input class="form-check-input estrategia-checkbox" type="checkbox" name="estrategias[]" id="estrategia_15" value="16" {{ in_array(16, $estrategiasSeleccionadas) ? 'checked' : '' }}>
                          <label class="form-check-label" for="estrategia_15"><strong>O. Otro (especificar)</strong></label>
                        </div>
                        <div id="otro_especificar_container" class="mt-2" style="{{ in_array(16, $estrategiasSeleccionadas) ? '' : 'display: none;' }}">
                          <input type="text" class="form-control" id="otro_especificar" name="otro_especificar" placeholder="Especifique otra estrategia" value="{{ $otroEspecificar }}" oninput="validateInput(this)">
                        </div>
                      </div>
                      <div class="col-md-12 mb-3">
                        <div class="form-check form-switch">
                          <input class="form-check-input" type="checkbox" name="estrategias[]" id="estrategia_16" value="17" {{ in_array(17, $estrategiasSeleccionadas) ? 'checked' : '' }}>
                          <label class="form-check-label" for="estrategia_16"><strong>P. No implementa ninguna</strong></label>
                        </div>
                      </div>
                      <div class="col-md-12 mb-3">
                        <div class="form-check form-switch">
                          <input class="form-check-input estrategia-checkbox" type="checkbox" name="estrategias[]" id="estrategia_17" value="18" {{ in_array(18, $estrategiasSeleccionadas) ? 'checked' : '' }}>
                          <label class="form-check-label" for="estrategia_17"><strong>Q. Actividades académicas (talleres, cursos)</strong></label>
                        </div>
                      </div>
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

<br>
<br>
<br>
<br>

  </div>
  </div>
          <hr>
          <div class="row">  
            <div class="text-start col">


             <!-- <div class="btn btn-outline-success" onclick="redirectToIntegrantes()">Volver</div> -->



            </div>
            <div class="text-end col">
            <button class="btn btn-outline-success" type="submit"  >Guardar</button>
            @if(isset($existeEstrategias) && $existeEstrategias)
            <div class="btn btn-outline-primary" id="siguiente">Siguiente</div>
            @else
            <div class="btn btn-outline-primary disabled" id="siguiente" data-bs-toggle="tooltip" data-bs-placement="top" title="Debe guardar la información antes de continuar">Siguiente</div>
            @endif
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
        // Manejar la visibilidad del campo "Otro (especificar)"
        $('#estrategia_15').change(function() {
            if($(this).is(':checked')) {
                $('#otro_especificar_container').show();
                // Enfocar el campo de texto para facilitar la entrada
                $('#otro_especificar').focus();
            } else {
                $('#otro_especificar_container').hide();
                $('#otro_especificar').val('');
            }
        });
        
        // Manejar la opción "No implementa ninguna"
        $('#estrategia_16').change(function() {
            if($(this).is(':checked')) {
                // Desmarcar y deshabilitar todas las demás opciones
                $('.estrategia-checkbox').prop('checked', false).prop('disabled', true);
                // Ocultar el campo "Otro (especificar)"
                $('#otro_especificar_container').hide();
                $('#otro_especificar').val('');
            } else {
                // Habilitar todas las opciones
                $('.estrategia-checkbox').prop('disabled', false);
            }
        });
        
        // Si "No implementa ninguna" está marcado al cargar la página, deshabilitar las demás opciones
        if($('#estrategia_16').is(':checked')) {
            $('.estrategia-checkbox').prop('disabled', true);
        }
        
        // Manejar el envío del formulario
        $('form').submit(function(e) {
            e.preventDefault();
            
            // Validar que se haya seleccionado al menos una estrategia o "No implementa ninguna"
            var haySeleccion = false;
            
            // Verificar si "No implementa ninguna" está seleccionado
            if($('#estrategia_16').is(':checked')) {
                haySeleccion = true;
            } else {
                // Verificar si hay algún otro checkbox seleccionado
                $('input[name="estrategias[]"]').each(function() {
                    if($(this).is(':checked')) {
                        haySeleccion = true;
                        return false; // Salir del bucle each
                    }
                });
            }
            
            // Si no hay selección, mostrar mensaje de error
            if(!haySeleccion) {
                Swal.fire({
                    title: 'Atención',
                    text: 'Debe seleccionar al menos una estrategia',
                    icon: 'warning',
                    confirmButtonText: 'Aceptar'
                });
                return false;
            }
            
            // Validar que si se seleccionó "Otro", se haya especificado el texto
            if($('#estrategia_15').is(':checked') && $('#otro_especificar').val().trim() === '') {
                Swal.fire({
                    title: 'Atención',
                    text: 'Por favor especifique la otra estrategia',
                    icon: 'warning',
                    confirmButtonText: 'Aceptar'
                });
                $('#otro_especificar').focus();
                return false;
            }
            
            // Recopilar datos del formulario
            var formData = $(this).serialize();
            
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
                url: "{{ route('guardar.estrategias') }}",
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
                            // Recargar la página después de cerrar el mensaje de éxito
                            if (result.isConfirmed || result.isDismissed) {
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
            // Redireccionar a Primera Infancia
            redirigirAPrimeraInfancia();
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

      // Función para redirigir a la vista de primera infancia
      function redirigirAPrimeraInfancia() {
            var folio = $('#folioContainer').attr('folio');
            var idintegrante = $('#idintegranteinput').val();
            
            @php
                // Convertir la variable PHP a JavaScript
                echo "var estrategiasGuardadas = " . json_encode($existeEstrategias) . ";";
            @endphp
            
            if (estrategiasGuardadas) {
                // Solo redirigir si ya existen estrategias guardadas
                window.location.href = "{{ route('primera_infancia', ['folio' => ':folio', 'idintegrante' => ':idintegrante']) }}".replace(':folio', folio).replace(':idintegrante', idintegrante);
            } else {
                // Mostrar mensaje de advertencia si no hay datos guardados
                Swal.fire({
                    icon: 'warning',
                    title: 'Atención',
                    text: 'Debe completar y guardar las estrategias antes de continuar con la siguiente sección.'
                });
            }
        }
        
        // Función para redirigir a la vista de mecanismos de protección
        function redirigirAMecanismosProteccion() {
            var folio = $('#folioContainer').attr('folio');
            var idintegrante = $('#idintegranteinput').val();
            
            @php
                // Convertir las variables PHP a JavaScript
                echo "var estrategiasGuardadas = " . json_encode($existeEstrategias) . ";";
                echo "var primeraInfanciaGuardada = " . json_encode($existePrimeraInfancia) . ";";
            @endphp
            
            if (!estrategiasGuardadas) {
                // Si no hay estrategias guardadas, mostrar mensaje
                Swal.fire({
                    icon: 'warning',
                    title: 'Atención',
                    text: 'Debe completar y guardar las estrategias antes de continuar.'
                });
            } else if (!primeraInfanciaGuardada) {
                // Si no hay datos de primera infancia guardados, mostrar mensaje
                Swal.fire({
                    icon: 'warning',
                    title: 'Atención',
                    text: 'Debe completar y guardar la sección de Primera Infancia antes de continuar.'
                });
            } else {
                // Si ambas secciones están completas, redirigir
                window.location.href = "{{ route('mecanismos_proteccion', ['folio' => ':folio', 'idintegrante' => ':idintegrante']) }}".replace(':folio', folio).replace(':idintegrante', idintegrante);
            }
        }
   


    </script>
@endsection