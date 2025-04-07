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
  
  /* Estilos para los switches */
  .form-switch {
    padding-left: 2.5em;
  }
  
  .form-switch .form-check-input {
    width: 2em;
    margin-left: -2.5em;
    height: 1em;
  }
  
  .form-switch .form-check-input:checked {
    background-color: #28a745;
    border-color: #28a745;
  }
</style>

<div class="container">

    <img width="100%" height="100px" src="{{ asset('imagenes/headers.png') }}" alt="" class=""  >

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
                                <a id="linkPregunta1" class="nav-link">Caracterización hogar FFES Pregunta 1</a>
                            </li>
                            <li class="nav-item" role="presentation" style="cursor:pointer">
                                <a id="linkPregunta2" class="nav-link">Caracterización hogar FFES Pregunta 2 - 2.1</a>
                            </li>
                            <li class="nav-item" role="presentation" style="cursor:pointer">
                                <a id="legalqt" class="nav-link active">Caracterización hogar FFES Pregunta 3</a>
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
                                <form id="formulario" class="row g-3 was-validated">     
                                    <input type="hidden" name="folio" id="folioinput" value="{{ $folio }}">
                                    <input type="hidden" name="idintegrante" id="idintegranteinput" value="{{ $idintegrante }}">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                    <span class="badge bg-primary" id="" style="font-size:15px; background:#a80a85 !important">Caracterización del Hogar - Parte 3</span>

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

                                    <!-- Pregunta 3 -->
                                    <div class="col-md-12 mt-4">
                                        <div class="card">
                                            <div class="card-header bg-primary text-white">
                                                <h5 class="mb-0">3. ¿En tu hogar, alguno de los niños, niñas o adolescentes presenta algún diagnostico en la salud mental?</h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="respuestas-container">
                                                    <!-- Opción A: SI -->
                                                    <div class="respuesta-item mb-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input respuesta-radio" type="radio" name="respuesta" id="respuestaA" value="1" 
                                                                {{ isset($respuestas) && is_array($respuestas) && isset($respuestas[0]['valor']) && $respuestas[0]['valor'] == 'SI' && $respuestas[0]['id'] == '1' ? 'checked' : '' }}>
                                                            <label class="form-check-label" for="respuestaA">SI</label>
                                                        </div>
                                                        <div class="integrantes-container mt-2 ml-4" id="integrantesRespuestaA" style="display: none;">
                                                            <p class="mb-2">Seleccione los integrantes menores de 18 años:</p>
                                                            <div class="row" id="listaIntegrantesA">
                                                                <!-- Los integrantes se cargarán dinámicamente mediante JavaScript -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <!-- Opción B: NO -->
                                                    <div class="respuesta-item mb-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input respuesta-radio" type="radio" name="respuesta" id="respuestaB" value="0" 
                                                                {{ isset($respuestas) && is_array($respuestas) && isset($respuestas[1]['valor']) && $respuestas[1]['valor'] == 'SI' && $respuestas[1]['id'] == '0' ? 'checked' : '' }}>
                                                            <label class="form-check-label" for="respuestaB">NO</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <br><br><br><br>
                    </div>
                </div>
                <hr>
                <div class="row">  
                    <div class="text-start col">
                        <div class="btn btn-outline-success" id="btnAnterior">Anterior</div>
                    </div>
                    <div class="text-end col">
                        <button class="btn btn-outline-success" id="btnGuardar" type="button">Guardar</button>
                        <div class="btn btn-outline-primary" id="siguiente">Siguiente</div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('assets/jquery/jquery.js') }}"></script>

<script>
    // Función para obtener integrantes menores de 18 años
    function cargarIntegrantesMenores() {
        // Obtener el folio del formulario
        const folio = $('#folioinput').val();
        
        // Realizar petición AJAX para obtener los integrantes del hogar
        $.ajax({
            url: '{{ route("obtener_integrantes_menores_p3", ["folio" => ":folio"]) }}'.replace(':folio', folio),
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                    // Generar HTML para los integrantes de la opción A
                    let htmlIntegrantes = '';
                    
                    $.each(response.integrantes, function(index, integrante) {
                        const nombreCompleto = (integrante.nombre1 || '') + ' ' + 
                                              (integrante.nombre2 || '') + ' ' + 
                                              (integrante.apellido1 || '') + ' ' + 
                                              (integrante.apellido2 || '');
                        
                        // Verificar si este integrante estaba seleccionado previamente
                        let isChecked = '';
                        @if(isset($respuestas) && is_array($respuestas))
                            // Buscar la respuesta con valor SI y verificar sus integrantes
                            @php
                                $integrantesSeleccionados = [];
                                foreach ($respuestas as $resp) {
                                    if (isset($resp['valor']) && $resp['valor'] == 'SI' && isset($resp['idintegrante'])) {
                                        $integrantesSeleccionados = $resp['idintegrante'];
                                        break;
                                    }
                                }
                            @endphp
                            if (@json($integrantesSeleccionados).includes(integrante.idintegrante.toString())) {
                                isChecked = 'checked';
                            }
                        @endif
                        
                        htmlIntegrantes += `
                            <div class="col-md-6 mb-2">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" 
                                           id="integranteA_${integrante.idintegrante}" 
                                           name="integrantes[]" 
                                           value="${integrante.idintegrante}"
                                           role="switch"
                                           ${isChecked}>
                                    <label class="form-check-label" for="integranteA_${integrante.idintegrante}">
                                        ${nombreCompleto}
                                    </label>
                                </div>
                            </div>
                        `;
                    });
                    
                    // Insertar HTML en el contenedor correspondiente
                    $('#listaIntegrantesA').html(htmlIntegrantes);
                    
                    // Mostrar los contenedores de integrantes para las opciones seleccionadas
                    if ($('#respuestaA').prop('checked')) {
                        $('#integrantesRespuestaA').show();
                    }
                } else {
                    console.error('Error al cargar integrantes:', response.message);
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'No se pudieron cargar los integrantes: ' + response.message
                    });
                }
            },
            error: function(xhr, status, error) {
                console.error('Error en la petición AJAX:', error);
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Ocurrió un error al cargar los integrantes. Por favor, intente nuevamente.'
                });
            }
        });
    }

    $(document).ready(function() {
        // Cargar integrantes al cargar la página
        cargarIntegrantesMenores();

        // Evento para el enlace de Pregunta 1
        $('#linkPregunta1').click(function() {
            // Obtener el folio actual
            const folio = $('#folioinput').val();
            
            // Obtener el idintegrante 
            const idintegrante = $('#idintegranteinput').val();
            
            // Redirigir a la página de caracterización hogar P1 con el folio y el idintegrante
            window.location.href = "{{ route('caracterizacion_hogar_p1', ['folio' => ':folio', 'idintegrante' => ':idintegrante']) }}"
                .replace(':folio', folio)
                .replace(':idintegrante', idintegrante);
        });
        
        // Evento para el enlace de Pregunta 2
        $('#linkPregunta2').click(function() {
            // Obtener el folio actual
            const folio = $('#folioinput').val();
            
            // Obtener el idintegrante
            const idintegrante = $('#idintegranteinput').val(); 
            
            // Redirigir a la página de caracterización hogar P2 con el folio y el idintegrante
            window.location.href = "{{ route('caracterizacion_hogar_p2', ['folio' => ':folio', 'idintegrante' => ':idintegrante']) }}"
                .replace(':folio', folio)
                .replace(':idintegrante', idintegrante);
        });
        
        // Manejar cambio en las opciones de respuesta
        $('.respuesta-radio').change(function() {
            const respuesta = $(this).val();
            
            // Ocultar todos los contenedores de integrantes
            $('.integrantes-container').hide();
            
            // Si la respuesta es A (1), mostrar el contenedor correspondiente
            if (respuesta == 1) {
                $('#integrantesRespuestaA').show();
            } else {
                // Si es B (0), desmarcar todos los integrantes
                $('input[name="integrantes[]"]').prop('checked', false);
            }
        });
        
        // Manejar el evento del botón Anterior
        $('#btnAnterior').click(function() {
            // Obtener el folio actual
            const folio = $('#folioinput').val();
            
            // Obtener el idintegrante
            const idintegrante = $('#idintegranteinput').val();
            
            // Redirigir a la página de caracterización hogar P2
            window.location.href = "{{ route('caracterizacion_hogar_p2', ['folio' => ':folio', 'idintegrante' => ':idintegrante']) }}"
                .replace(':folio', folio)
                .replace(':idintegrante', idintegrante);
        });
        
        // Manejar el envío del formulario
        $('#btnGuardar').click(function(e) {
            e.preventDefault();
            
            // Verificar si se ha seleccionado una respuesta
            const respuestaSeleccionada = $('input[name="respuesta"]:checked').val();
            
            if (respuestaSeleccionada === undefined) {
                Swal.fire({
                    icon: 'warning',
                    title: 'Validación',
                    text: 'Debe seleccionar una respuesta'
                });
                return false;
            }
            
            // Recopilar datos del formulario
            const formData = {
                folio: $('#folioinput').val(),
                idintegrante: $('#idintegranteinput').val(),
                respuesta: respuestaSeleccionada,
                _token: $('input[name="_token"]').val()
            };
            
            // Si la respuesta es SI (1), validar y agregar integrantes
            if (respuestaSeleccionada === '1') {
                const integrantesSeleccionados = $('input[name="integrantes[]"]:checked').length;
                
                if (integrantesSeleccionados === 0) {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Validación',
                        text: 'Si la respuesta es SI, debe seleccionar al menos un integrante'
                    });
                    return false;
                }
                
                formData.integrantes = [];
                $('input[name="integrantes[]"]:checked').each(function() {
                    formData.integrantes.push($(this).val());
                });
            }
            
            // Enviar datos mediante AJAX
            $.ajax({
                url: '{{ route("guardar_caracterizacion_hogar_p3") }}',
                type: 'POST',
                data: formData,
                dataType: 'json',
                success: function(response) {
                    if (response.success) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Éxito',
                            text: response.message
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: response.message
                        });
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error en la petición AJAX:', error);
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Ocurrió un error al guardar la información. Por favor, intente nuevamente.'
                    });
                }
            });
        });
        
        // Funcionalidad del botón "Siguiente" (en desarrollo)
        $('#siguiente').click(function() {
            Swal.fire({
                icon: 'info',
                title: 'Información',
                text: 'Funcionalidad "Siguiente" en desarrollo'
            });
        });
    });
</script>
@endsection
