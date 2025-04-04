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
    <a id="linkPregunta1" class="nav-link">Caracterización hogar FFES Pregunta1</a>
</li>
                            
                            <li class="nav-item" role="presentation" style="cursor:pointer">
                                <a id="legalqt"  class="nav-link active" >Caracterización hogar FFES Pregunta 2 - 2.1</a>
                            </li>
                            
                            @php
                                // Verificar si la pregunta 2 ya fue respondida
                                $pregunta2Respondida = false;
                                if (isset($respuestas) && is_array($respuestas) && count($respuestas) > 0) {
                                    $pregunta2Respondida = true;
                                }
                            @endphp
                            @if($pregunta2Respondida)
                            <li class="nav-item" role="presentation" style="cursor:pointer">
                                <a id="linkPregunta3" class="nav-link">Caracterización hogar FFES Pregunta 3</a>
                            </li>
                            @endif
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

                                    <span class="badge bg-primary" id="" style="font-size:15px; background:#a80a85 !important">Caracterización del Hogar - Parte 2</span>

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

                                    <!-- Contenido de la pregunta sobre restablecimiento de derechos extramural -->
                                    <div class="col-md-12 mt-4">
                                        <div class="card">
                                            <div class="card-header bg-primary text-white">
                                                <h5 class="mb-0">¿En tu hogar actualmente alguno de los niños que se encuentran en el hogar estan bajo una medida de restablecimiento de derechos extramural?</h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="respuestas-container">
                                                    <!-- Opción A - SI -->
                                                    <div class="respuesta-item mb-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input respuesta-radio" type="radio" name="respuesta" id="respuestaA" value="1" 
                                                                {{ isset($respuestas) && is_array($respuestas) && !empty(array_filter($respuestas, function($r) { return isset($r['id']) && $r['id'] == '1' && isset($r['valor']) && $r['valor'] == 'SI'; })) ? 'checked' : '' }}>
                                                            <label class="form-check-label" for="respuestaA">A. SI</label>
                                                        </div>
                                                        <div class="integrantes-container mt-2 ml-4" id="integrantesRespuestaA" style="display: none;">
                                                            <div class="card">
                                                                <div class="card-header bg-light">
                                                                    Seleccione los integrantes menores de 18 años afectados:
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="row" id="listaIntegrantesA">
                                                                        <!-- Aquí se cargarán dinámicamente los integrantes menores de 18 años -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Opción B - NO, PERO LO REQUIERE -->
                                                    <div class="respuesta-item mb-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input respuesta-radio" type="radio" name="respuesta" id="respuestaB" value="41" 
                                                                {{ isset($respuestas) && is_array($respuestas) && !empty(array_filter($respuestas, function($r) { return isset($r['id']) && $r['id'] == '41' && isset($r['valor']) && $r['valor'] == 'SI'; })) ? 'checked' : '' }}>
                                                            <label class="form-check-label" for="respuestaB">B. NO, PERO LO REQUIERE</label>
                                                        </div>
                                                        <div class="integrantes-container mt-2 ml-4" id="integrantesRespuestaB" style="display: none;">
                                                            <div class="card">
                                                                <div class="card-header bg-light">
                                                                    Seleccione los integrantes menores de 18 años afectados:
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="row" id="listaIntegrantesB">
                                                                        <!-- Aquí se cargarán dinámicamente los integrantes menores de 18 años -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Opción C - NO. NO LO HA REQUERIDO -->
                                                    <div class="respuesta-item mb-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input respuesta-radio" type="radio" name="respuesta" id="respuestaC" value="36" 
                                                                {{ isset($respuestas) && is_array($respuestas) && !empty(array_filter($respuestas, function($r) { return isset($r['id']) && $r['id'] == '36' && isset($r['valor']) && $r['valor'] == 'SI'; })) ? 'checked' : '' }}>
                                                            <label class="form-check-label" for="respuestaC">C. NO. NO LO HA REQUERIDO</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Pregunta 2.1 - Solo visible cuando la respuesta a la pregunta 2 es "A. SI" -->
                                    <div id="pregunta2_1Container" class="col-md-12 mt-4" style="display: none;">
                                        <div class="card">
                                            <div class="card-header bg-primary text-white">
                                                <h5 class="mb-0">2.1 Para los niños, niñas y adolescentes que se les marca pregunta 2: SI ¿En cuales de las siguientes medidas de restablecimiento de derechos?</h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="respuestas-container">
                                                    <!-- Opción A - Medio institucional estramural -->
                                                    <div class="respuesta-item mb-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input respuesta-radio-2-1" type="radio" name="respuesta_2_1" id="respuesta2_1A" value="37" 
                                                                {{ isset($respuestas_2_1) && is_array($respuestas_2_1) && !empty(array_filter($respuestas_2_1, function($r) { return isset($r['id']) && $r['id'] == '37' && isset($r['valor']) && $r['valor'] == 'SI'; })) ? 'checked' : '' }}>
                                                            <label class="form-check-label" for="respuesta2_1A">A. Medio institucional estramural</label>
                                                        </div>
                                                    </div>

                                                    <!-- Opción B - Intervencion de apoyo psicologico especializado -->
                                                    <div class="respuesta-item mb-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input respuesta-radio-2-1" type="radio" name="respuesta_2_1" id="respuesta2_1B" value="38" 
                                                                {{ isset($respuestas_2_1) && is_array($respuestas_2_1) && !empty(array_filter($respuestas_2_1, function($r) { return isset($r['id']) && $r['id'] == '38' && isset($r['valor']) && $r['valor'] == 'SI'; })) ? 'checked' : '' }}>
                                                            <label class="form-check-label" for="respuesta2_1B">B. Intervencion de apoyo psicologico especializado</label>
                                                        </div>
                                                    </div>

                                                    <!-- Opción C - Ubicación en medio familiar con cuidados personales o custodia -->
                                                    <div class="respuesta-item mb-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input respuesta-radio-2-1" type="radio" name="respuesta_2_1" id="respuesta2_1C" value="42" 
                                                                {{ isset($respuestas_2_1) && is_array($respuestas_2_1) && !empty(array_filter($respuestas_2_1, function($r) { return isset($r['id']) && $r['id'] == '42' && isset($r['valor']) && $r['valor'] == 'SI'; })) ? 'checked' : '' }}>
                                                            <label class="form-check-label" for="respuesta2_1C">C. Ubicación en medio familiar con cuidados personales o custodia</label>
                                                        </div>
                                                    </div>

                                                    <!-- Opción D - Sistema de responsabildad penal extramural -->
                                                    <div class="respuesta-item mb-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input respuesta-radio-2-1" type="radio" name="respuesta_2_1" id="respuesta2_1D" value="39" 
                                                                {{ isset($respuestas_2_1) && is_array($respuestas_2_1) && !empty(array_filter($respuestas_2_1, function($r) { return isset($r['id']) && $r['id'] == '39' && isset($r['valor']) && $r['valor'] == 'SI'; })) ? 'checked' : '' }}>
                                                            <label class="form-check-label" for="respuesta2_1D">D. Sistema de responsabildad penal extramural</label>
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
                        <div class="btn btn-outline-success" onclick="redirigirACaracterizacionHogarP1()">Anterior</div>
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
        
        // Verificar si hay respuestas guardadas para la pregunta 2.1 y pre-seleccionar la opción
        @if(isset($respuestas_2_1) && is_array($respuestas_2_1) && count($respuestas_2_1) > 0)
            // Buscar la respuesta que tiene valor "SI"
            @php
                $respuestaSeleccionada = null;
                foreach ($respuestas_2_1 as $resp) {
                    if (isset($resp['valor']) && $resp['valor'] == 'SI' && isset($resp['id']) && $resp['id'] != '40') {
                        $respuestaSeleccionada = $resp['id'];
                        break;
                    }
                }
            @endphp
            @if($respuestaSeleccionada)
                const respuesta2_1Id = "{{ $respuestaSeleccionada }}";
                $('#respuesta2_1' + (respuesta2_1Id == "37" ? 'A' : respuesta2_1Id == "38" ? 'B' : respuesta2_1Id == "42" ? 'C' : 'D')).prop('checked', true);
            @endif
        @endif
        
        // Realizar petición AJAX para obtener los integrantes del hogar
        $.ajax({
            url: '{{ route("obtener_integrantes_menores_p2", ["folio" => ":folio"]) }}'.replace(':folio', folio),
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                    // Generar HTML para cada opción que requiere integrantes (A y B)
                    const opciones = ['A', 'B'];
                    
                    opciones.forEach(opcion => {
                        let htmlIntegrantes = '';
                        
                        // Recorrer los integrantes menores de 18 años
                        response.integrantes.forEach(integrante => {
                            const nombreCompleto = `${integrante.nombre1} ${integrante.nombre2 || ''} ${integrante.apellido1} ${integrante.apellido2 || ''} (${integrante.edad})`.replace(/\s+/g, ' ').trim();
                            
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
                                               id="integrante${opcion}_${integrante.idintegrante}" 
                                               name="integrantes[]" 
                                               value="${integrante.idintegrante}"
                                               role="switch"
                                               ${isChecked}>
                                        <label class="form-check-label" for="integrante${opcion}_${integrante.idintegrante}">
                                            ${nombreCompleto}
                                        </label>
                                    </div>
                                </div>
                            `;
                        });
                        
                        // Insertar HTML en el contenedor correspondiente
                        $(`#listaIntegrantes${opcion}`).html(htmlIntegrantes);
                    });
                    
                    // Mostrar los contenedores de integrantes para las opciones seleccionadas
                    if ($('#respuestaA').prop('checked')) {
                        $('#integrantesRespuestaA').show();
                    }
                    if ($('#respuestaB').prop('checked')) {
                        $('#integrantesRespuestaB').show();
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
        
        // Obtener el idintegrante de la URL actual
        const urlActual = window.location.href;
        const match = urlActual.match(/\/caracterizacion_hogar_p2\/[^\/]+\/([^\/]+)/);
        const idintegrante = match ? match[1] : '0'; // Si no se encuentra, usar '0' como valor predeterminado
        
        // Redirigir a la página de caracterización hogar P1 con el folio y el idintegrante
        window.location.href = "{{ route('caracterizacion_hogar_p1', ['folio' => ':folio', 'idintegrante' => ':idintegrante']) }}"
            .replace(':folio', folio)
            .replace(':idintegrante', idintegrante);
    });
        
        // Inicializar la pregunta 2.1 si ya está seleccionada la opción A (SI)
        if ($('#respuestaA').prop('checked')) {
            $('#pregunta2_1Container').show();
        }
        
        // Manejar cambio en las opciones de respuesta
        $('.respuesta-radio').change(function() {
            const respuesta = $(this).val();
            
            // Ocultar todos los contenedores de integrantes
            $('.integrantes-container').hide();
            
            // Si la respuesta es A (1) o B (41), mostrar el contenedor correspondiente
            if (respuesta == 1) {
                $('#integrantesRespuestaA').show();
                // Desmarcar los integrantes de la opción B
                $('#listaIntegrantesB input[name="integrantes[]"]').prop('checked', false);
                // Mostrar la pregunta 2.1
                $('#pregunta2_1Container').show();
            } else if (respuesta == 41) {
                $('#integrantesRespuestaB').show();
                // Desmarcar los integrantes de la opción A
                $('#listaIntegrantesA input[name="integrantes[]"]').prop('checked', false);
                // Ocultar la pregunta 2.1
                $('#pregunta2_1Container').hide();
            } else {
                // Si es C (36), desmarcar todos los integrantes
                $('input[name="integrantes[]"]').prop('checked', false);
                // Ocultar la pregunta 2.1
                $('#pregunta2_1Container').hide();
            }
        });
        
        // Manejar el envío del formulario
        $('#btnGuardar').click(function(e) {
            e.preventDefault();
            
            // Verificar si se ha seleccionado una respuesta
            const respuestaSeleccionada = $('input[name="respuesta"]:checked').val();
            
            if (!respuestaSeleccionada) {
                Swal.fire({
                    icon: 'warning',
                    title: 'Validación',
                    text: 'Debe seleccionar una respuesta'
                });
                return false;
            }
            
            // Verificar que para las respuestas A (1) o B (41) se haya seleccionado al menos un integrante
            if (respuestaSeleccionada == 1 || respuestaSeleccionada == 41) {
                // Obtener los integrantes seleccionados dependiendo de la opción
                let contenedorSeleccionado = respuestaSeleccionada == 1 ? '#listaIntegrantesA' : '#listaIntegrantesB';
                const integrantesSeleccionados = $(contenedorSeleccionado + ' input[name="integrantes[]"]:checked').length;
                
                if (integrantesSeleccionados === 0) {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Validación',
                        text: 'Debe seleccionar al menos un integrante'
                    });
                    return false;
                }
            }
            
            // Preparar los datos para enviar
            const formData = new FormData($('#formulario')[0]);
            const datos = {
                folio: $('#folioinput').val(),
                idintegrante: $('#idintegranteinput').val(),
                respuesta: respuestaSeleccionada,
                documento_profesional: "{{ session('cedula') ?? '0' }}",
                _token: $('input[name="_token"]').val()
            };
            
            // Si la respuesta es A (1) o B (41), agregar los integrantes seleccionados
            if (respuestaSeleccionada == 1 || respuestaSeleccionada == 41) {
                let contenedorSeleccionado = respuestaSeleccionada == 1 ? '#listaIntegrantesA' : '#listaIntegrantesB';
                const integrantes = [];
                $(contenedorSeleccionado + ' input[name="integrantes[]"]:checked').each(function() {
                    integrantes.push($(this).val());
                });
                datos.integrantes = integrantes;
            }
            
            // Agregar la respuesta a la pregunta 2.1 si se seleccionó la opción A (1)
            if (respuestaSeleccionada == 1) {
                const respuesta2_1 = $('input[name="respuesta_2_1"]:checked').val();
                if (!respuesta2_1) {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Validación',
                        text: 'Debe seleccionar una respuesta para la pregunta 2.1'
                    });
                    return false;
                }
                datos.respuesta_2_1 = respuesta2_1;
            }
            
            // Enviar los datos mediante AJAX
            $.ajax({
                url: '{{ route("guardar_caracterizacion_hogar_p2") }}',
                type: 'POST',
                data: datos,
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
                        text: 'Ocurrió un error al guardar los datos. Por favor, intente nuevamente.'
                    });
                }
            });
        });
        
        // Manejar el botón "Siguiente"
        $('#siguiente').click(function() {
            // Aquí puedes redirigir a la siguiente página o formulario
            // Por ahora, simplemente mostramos un mensaje
            Swal.fire({
                icon: 'info',
                title: 'Información',
                text: 'Funcionalidad "Siguiente" en desarrollo'
            });
        });
        
        // Evento para el enlace de Pregunta 3 (si existe)
        $('#linkPregunta3').click(function() {
            // Obtener el folio actual
            const folio = $('#folioinput').val();
            
            // Obtener el idintegrante de la URL actual
            const urlActual = window.location.href;
            const match = urlActual.match(/\/caracterizacion_hogar_p2\/[^\/]+\/([^\/]+)/);
            const idintegrante = match ? match[1] : '0';
            
            // Redirigir a la página de caracterización hogar P3
            window.location.href = "{{ route('caracterizacion_hogar_p3', ['folio' => ':folio', 'idintegrante' => ':idintegrante']) }}"
                .replace(':folio', folio)
                .replace(':idintegrante', idintegrante);
        });
    });

    // Funciones de navegación entre formularios
    function redirectToIntegrantes() {
        var folio = $('#folioContainer').attr('folio');
        var idintegrante = $('#idintegranteinput').val();
        window.location.href = "{{ route('caracterizacion_integrantes', ['folio' => ':folio', 'idintegrante' => ':idintegrante']) }}"
            .replace(':folio', folio)
            .replace(':idintegrante', idintegrante);
    }
    
    function redirigirACaracterizacionHogarP1() {
        var folio = $('#folioContainer').attr('folio');
        var idintegrante = $('#idintegranteinput').val();
        window.location.href = "{{ route('caracterizacion_hogar_p1', ['folio' => ':folio', 'idintegrante' => ':idintegrante']) }}"
            .replace(':folio', folio)
            .replace(':idintegrante', idintegrante);
    }
</script>
@endsection
