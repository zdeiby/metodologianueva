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
                                <a id="legalqt" class="nav-link active">Hogar FFES Pregunta 1</a>
                            </li>
                            
                            @php
                                // Verificamos si la pregunta 1 tiene respuestas válidas para mostrar la pestaña 2
                                $mostrarPestaña2 = false;
                                if (isset($respuestas) && !empty($respuestas)) {
                                    $mostrarPestaña2 = true;
                                }
                                
                                // Verificar si las otras preguntas tienen respuestas para mostrarlas en esta vista
                                $mostrarPestaña3 = false;
                                $mostrarPestaña4 = false;
                                
                                $respuestaBD = DB::table('t1_caracterizacion_hogar_ffes')
                                    ->where('folio', $folio)
                                    ->where('idintegrante', $idintegrante)
                                    ->first();
                                
                                if ($respuestaBD) {
                                    // Verificar pregunta 2
                                    $p2 = isset($respuestaBD->nino_medidas_restablecimiento_p2) && 
                                          !empty($respuestaBD->nino_medidas_restablecimiento_p2) && 
                                          $respuestaBD->nino_medidas_restablecimiento_p2 != '[]' && 
                                          $respuestaBD->nino_medidas_restablecimiento_p2 != '""';
                                    
                                    if ($p2) {
                                        $mostrarPestaña2 = true;
                                    }
                                    
                                    // Verificar pregunta 3
                                    $p3 = isset($respuestaBD->salud_mental_p3) && 
                                          !empty($respuestaBD->salud_mental_p3) && 
                                          $respuestaBD->salud_mental_p3 != '[]' && 
                                          $respuestaBD->salud_mental_p3 != '""';
                                    
                                    if ($p3) {
                                        $mostrarPestaña3 = true;
                                    }
                                    
                                    // Verificar pregunta 4
                                    $p4 = isset($respuestaBD->hace_parte_instancia_participacion_p4) && 
                                          !empty($respuestaBD->hace_parte_instancia_participacion_p4) && 
                                          $respuestaBD->hace_parte_instancia_participacion_p4 != '[]' && 
                                          $respuestaBD->hace_parte_instancia_participacion_p4 != '""';
                                    
                                    if ($p4) {
                                        $mostrarPestaña4 = true;
                                    }
                                }
                            @endphp
                            
                            @if($mostrarPestaña2)
                            <li class="nav-item" role="presentation" style="cursor:pointer">
                                <a id="linkPregunta2" class="nav-link">Hogar FFES Pregunta 2 - 2.1</a>
                            </li>
                            @endif
                            
                            @if($mostrarPestaña3)
                            <li class="nav-item" role="presentation" style="cursor:pointer">
                                <a id="linkPregunta3" class="nav-link">Hogar FFES Pregunta 3 - 3.2</a>
                            </li>
                            @endif
                            
                            @if($mostrarPestaña4)
                            <li class="nav-item" role="presentation" style="cursor:pointer">
                                <a id="linkPregunta4" class="nav-link">Hogar FFES Pregunta 4</a>
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

                                    <span class="badge bg-primary" id="" style="font-size:15px; background:#a80a85 !important">Caracterización del Hogar - Parte 1</span>

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

                                    <!-- Aquí irá el contenido de las situaciones -->
                                    <div class="col-md-12 mt-4">
                                        <div class="card">
                                            <div class="card-header bg-primary text-white">
                                                <h5 class="mb-0">En tu hogar ¿se presenta actualmente algunas de las siguientes situaciones en los niños, niñas y adolescentes?</h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="situaciones-container">
                                                    <!-- Situación A -->
                                                    <div class="situacion-item mb-3">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input situacion-switch" type="checkbox" id="situacionA" data-situacion="A">
                                                            <label class="form-check-label" for="situacionA">A. Abandono y falta de padres</label>
                                                        </div>
                                                        <div class="integrantes-container mt-2 ml-4" id="integrantesSituacionA" style="display: none;">
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

                                                    <!-- Situación B -->
                                                    <div class="situacion-item mb-3">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input situacion-switch" type="checkbox" id="situacionB" data-situacion="B">
                                                            <label class="form-check-label" for="situacionB">B. Acoso escolar o bullying</label>
                                                        </div>
                                                        <div class="integrantes-container mt-2 ml-4" id="integrantesSituacionB" style="display: none;">
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

                                                    <!-- Situación C -->
                                                    <div class="situacion-item mb-3">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input situacion-switch" type="checkbox" id="situacionC" data-situacion="C">
                                                            <label class="form-check-label" for="situacionC">C. Reclutamiento forzado y utilización en conflicto armado</label>
                                                        </div>
                                                        <div class="integrantes-container mt-2 ml-4" id="integrantesSituacionC" style="display: none;">
                                                            <div class="card">
                                                                <div class="card-header bg-light">
                                                                    Seleccione los integrantes menores de 18 años afectados:
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="row" id="listaIntegrantesC">
                                                                        <!-- Aquí se cargarán dinámicamente los integrantes menores de 18 años -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Situación D -->
                                                    <div class="situacion-item mb-3">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input situacion-switch" type="checkbox" id="situacionD" data-situacion="D">
                                                            <label class="form-check-label" for="situacionD">D. Ciber acoso</label>
                                                        </div>
                                                        <div class="integrantes-container mt-2 ml-4" id="integrantesSituacionD" style="display: none;">
                                                            <div class="card">
                                                                <div class="card-header bg-light">
                                                                    Seleccione los integrantes menores de 18 años afectados:
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="row" id="listaIntegrantesD">
                                                                        <!-- Aquí se cargarán dinámicamente los integrantes menores de 18 años -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Situación E -->
                                                    <div class="situacion-item mb-3">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input situacion-switch" type="checkbox" id="situacionE" data-situacion="E">
                                                            <label class="form-check-label" for="situacionE">E. Amenazas o presión grupal</label>
                                                        </div>
                                                        <div class="integrantes-container mt-2 ml-4" id="integrantesSituacionE" style="display: none;">
                                                            <div class="card">
                                                                <div class="card-header bg-light">
                                                                    Seleccione los integrantes menores de 18 años afectados:
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="row" id="listaIntegrantesE">
                                                                        <!-- Aquí se cargarán dinámicamente los integrantes menores de 18 años -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Situación F -->
                                                    <div class="situacion-item mb-3">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input situacion-switch" type="checkbox" id="situacionF" data-situacion="F">
                                                            <label class="form-check-label" for="situacionF">F. Tráfico y comercialización de sustancias</label>
                                                        </div>
                                                        <div class="integrantes-container mt-2 ml-4" id="integrantesSituacionF" style="display: none;">
                                                            <div class="card">
                                                                <div class="card-header bg-light">
                                                                    Seleccione los integrantes menores de 18 años afectados:
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="row" id="listaIntegrantesF">
                                                                        <!-- Aquí se cargarán dinámicamente los integrantes menores de 18 años -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Situación G -->
                                                    <div class="situacion-item mb-3">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input situacion-switch" type="checkbox" id="situacionG" data-situacion="G">
                                                            <label class="form-check-label" for="situacionG">G. Matrimonio infantil</label>
                                                        </div>
                                                        <div class="integrantes-container mt-2 ml-4" id="integrantesSituacionG" style="display: none;">
                                                            <div class="card">
                                                                <div class="card-header bg-light">
                                                                    Seleccione los integrantes menores de 18 años afectados:
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="row" id="listaIntegrantesG">
                                                                        <!-- Aquí se cargarán dinámicamente los integrantes menores de 18 años -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Situación H -->
                                                    <div class="situacion-item mb-3">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input situacion-switch" type="checkbox" id="situacionH" data-situacion="H">
                                                            <label class="form-check-label" for="situacionH">H. Conducta suicida o riesgo de suicidio infantil</label>
                                                        </div>
                                                        <div class="integrantes-container mt-2 ml-4" id="integrantesSituacionH" style="display: none;">
                                                            <div class="card">
                                                                <div class="card-header bg-light">
                                                                    Seleccione los integrantes menores de 18 años afectados:
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="row" id="listaIntegrantesH">
                                                                        <!-- Aquí se cargarán dinámicamente los integrantes menores de 18 años -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Situación I -->
                                                    <div class="situacion-item mb-3">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input situacion-switch" type="checkbox" id="situacionI" data-situacion="I">
                                                            <label class="form-check-label" for="situacionI">I. Otras conductas delictivas como hurto por fuera del hogar, extorción, intento de homicidio</label>
                                                        </div>
                                                        <div class="integrantes-container mt-2 ml-4" id="integrantesSituacionI" style="display: none;">
                                                            <div class="card">
                                                                <div class="card-header bg-light">
                                                                    Seleccione los integrantes menores de 18 años afectados:
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="row" id="listaIntegrantesI">
                                                                        <!-- Aquí se cargarán dinámicamente los integrantes menores de 18 años -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Situación J -->
                                                    <div class="situacion-item mb-3">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input situacion-switch" type="checkbox" id="situacionJ" data-situacion="J">
                                                            <label class="form-check-label" for="situacionJ">J. Barrera culturales y lingüisticas (población indigena)</label>
                                                        </div>
                                                        <div class="integrantes-container mt-2 ml-4" id="integrantesSituacionJ" style="display: none;">
                                                            <div class="card">
                                                                <div class="card-header bg-light">
                                                                    Seleccione los integrantes menores de 18 años afectados:
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="row" id="listaIntegrantesJ">
                                                                        <!-- Aquí se cargarán dinámicamente los integrantes menores de 18 años -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Situación K -->
                                                    <div class="situacion-item mb-3">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" id="situacionK" data-situacion="K">
                                                            <label class="form-check-label" for="situacionK">K. Ninguna de las anteriores</label>
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
                        <div class="btn btn-outline-success" onclick="redirectToIntegrantes()">Volver</div>
                    </div>
                    <div class="text-end col">
                        <button class="btn btn-outline-success" id="btnGuardar" type="button">Guardar</button>
                        <div class="btn btn-outline-primary" id="siguiente" onclick="redirigirACaracterizacionHogarP2()">Siguiente</div>
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
            url: '{{ route("obtener_integrantes_menores", ["folio" => ":folio"]) }}'.replace(':folio', folio),
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                    // Generar HTML para cada situación
                    const letras = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J'];
                    
                    letras.forEach(letra => {
                        let htmlIntegrantes = '';
                        
                        // Recorrer los integrantes menores de 18 años
                        response.integrantes.forEach(integrante => {
                            const nombreCompleto = `${integrante.nombre1} ${integrante.nombre2 || ''} ${integrante.apellido1} ${integrante.apellido2 || ''} (${integrante.edad})`.replace(/\s+/g, ' ').trim();
                            
                            // Verificar si este integrante estaba seleccionado previamente
                            let isChecked = '';
                            const letraActual = letra; // Guardar la letra actual en una variable JavaScript
                            @if(isset($respuestas) && $respuestas)
                                @foreach($respuestas as $respuesta)
                                    @if(isset($respuesta['id']) && isset($respuesta['idintegrante']))
                                        // Mapeo de IDs a letras
                                        @php
                                            $mapeoInverso = [
                                                '25' => 'A',
                                                '26' => 'B',
                                                '27' => 'C',
                                                '28' => 'D',
                                                '29' => 'E',
                                                '30' => 'F',
                                                '31' => 'G',
                                                '32' => 'H',
                                                '33' => 'I',
                                                '34' => 'J',
                                                '35' => 'K'
                                            ];
                                            $letraSituacion = isset($mapeoInverso[$respuesta['id']]) ? $mapeoInverso[$respuesta['id']] : '';
                                        @endphp
                                        
                                        if (@json($letraSituacion) === letraActual && @json($respuesta['idintegrante']).includes(integrante.idintegrante.toString())) {
                                            isChecked = 'checked';
                                        }
                                    @endif
                                @endforeach
                            @endif
                            
                            htmlIntegrantes += `
                                <div class="col-md-6 mb-2">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" 
                                               id="integrante${letra}_${integrante.idintegrante}" 
                                               name="integrantes[${letra}][]" 
                                               value="${integrante.idintegrante}"
                                               ${isChecked}>
                                        <label class="form-check-label" for="integrante${letra}_${integrante.idintegrante}">
                                            ${nombreCompleto}
                                        </label>
                                    </div>
                                </div>
                            `;
                        });
                        
                        // Insertar HTML en el contenedor correspondiente
                        $(`#listaIntegrantes${letra}`).html(htmlIntegrantes);
                    });
                    
                    // Mostrar los contenedores de integrantes para las situaciones seleccionadas
                    $('.situacion-switch:checked').each(function() {
                        const situacion = $(this).data('situacion');
                        $(`#integrantesSituacion${situacion}`).show();
                    });
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
        
        // Marcar situaciones previamente seleccionadas
        @if(isset($respuestas) && $respuestas)
            @foreach($respuestas as $respuesta)
                @if(isset($respuesta['id']) && isset($respuesta['valor']) && $respuesta['valor'] == 'SI')
                    // Mapeo de IDs a letras
                    @php
                        $mapeoInverso = [
                            '25' => 'A',
                            '26' => 'B',
                            '27' => 'C',
                            '28' => 'D',
                            '29' => 'E',
                            '30' => 'F',
                            '31' => 'G',
                            '32' => 'H',
                            '33' => 'I',
                            '34' => 'J',
                            '35' => 'K'
                        ];
                        $letraSituacion = isset($mapeoInverso[$respuesta['id']]) ? $mapeoInverso[$respuesta['id']] : '';
                    @endphp
                    
                    @if($letraSituacion)
                        $('#situacion{{ $letraSituacion }}').prop('checked', true);
                        $('#integrantesSituacion{{ $letraSituacion }}').show();
                    @endif
                @endif
            @endforeach
        @endif
        
        // Manejar el cambio en "Ninguna de las anteriores"
        $('#situacionK').change(function() {
            const isChecked = $(this).prop('checked');
            
            if (isChecked) {
                // Desmarcar todas las demás situaciones
                $('.situacion-switch').prop('checked', false);
                // Ocultar todos los contenedores de integrantes
                $('.integrantes-container').hide();
                // Desmarcar todos los integrantes
                $('input[name^="integrantes"]').prop('checked', false);
            }
        });
        
        // Manejar cambio en las situaciones A-J
        $('.situacion-switch').change(function() {
            const situacion = $(this).data('situacion');
            const isChecked = $(this).prop('checked');
            
            // Mostrar u ocultar el contenedor de integrantes según el estado del switch
            $(`#integrantesSituacion${situacion}`).toggle(isChecked);
            
            // Si se marca cualquier situación A-J, desmarcar "Ninguna de las anteriores"
            if (isChecked) {
                $('#situacionK').prop('checked', false);
            }
            
            // Si no hay ninguna situación seleccionada, permitir seleccionar "Ninguna de las anteriores"
            if ($('.situacion-switch:checked').length === 0) {
                $('#situacionK').prop('disabled', false);
            } else {
                $('#situacionK').prop('disabled', $('.situacion-switch:checked').length > 0);
            }
        });
        
        // Manejar el envío del formulario
        $('#btnGuardar').click(function(e) {
            e.preventDefault();
            
            // Verificar si al menos una situación está seleccionada
            const algunaSituacionSeleccionada = $('.situacion-switch:checked').length > 0 || $('#situacionK').prop('checked');
            
            if (!algunaSituacionSeleccionada) {
                Swal.fire({
                    icon: 'warning',
                    title: 'Validación',
                    text: 'Debe seleccionar al menos una situación o "Ninguna de las anteriores"'
                });
                return false;
            }
            
            // Verificar que para cada situación seleccionada (excepto K) se haya seleccionado al menos un integrante
            let validacionCorrecta = true;
            
            $('.situacion-switch:checked').each(function() {
                const situacion = $(this).data('situacion');
                const integrantesSeleccionados = $(`input[name="integrantes[${situacion}][]"]:checked`).length;
                
                if (integrantesSeleccionados === 0) {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Validación',
                        text: `Debe seleccionar al menos un integrante para la situación ${situacion}`
                    });
                    validacionCorrecta = false;
                    return false; // Salir del bucle each
                }
            });
            
            if (!validacionCorrecta) {
                return false;
            }
            
            // Preparar los datos para enviar
            const formData = new FormData($('#formulario')[0]);
            const datos = {
                folio: $('#folioinput').val(),
                idintegrante: $('#idintegranteinput').val(),
                documento_profesional: "{{ session('cedula') ?? '0' }}",
                _token: $('input[name="_token"]').val()
            };
            
            // Obtener situaciones seleccionadas
            const situaciones = [];
            $('.situacion-switch:checked').each(function() {
                situaciones.push($(this).data('situacion'));
            });
            
            // Si "Ninguna de las anteriores" está seleccionada
            if ($('#situacionK').prop('checked')) {
                situaciones.push('K');
            }
            
            // Obtener integrantes seleccionados para cada situación
            const integrantes = {};
            situaciones.forEach(situacion => {
                if (situacion !== 'K') {
                    const integrantesSituacion = [];
                    $(`input[name="integrantes[${situacion}][]"]:checked`).each(function() {
                        integrantesSituacion.push($(this).val());
                    });
                    integrantes[situacion] = integrantesSituacion;
                }
            });
            
            // Añadir a los datos
            datos.integrantes = integrantes;
            if ($('#situacionK').prop('checked')) {
                datos.situacionK = true;
            }
            
            // Enviar mediante AJAX
            $.ajax({
                url: "{{ route('guardar_caracterizacion_hogar_p1') }}",
                type: 'POST',
                data: datos,
                dataType: 'json',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    if (response.success) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Éxito',
                            text: 'Datos guardados correctamente',
                            confirmButtonText: 'Aceptar',
                            allowOutsideClick: false
                        }).then((result) => {
                            // Recargar la página para que aparezca la pestaña 2
                            window.location.reload();
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: response.message || 'Ocurrió un error al guardar los datos'
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
        
        // Evento para el enlace de Pregunta 2
        $('#linkPregunta2').click(function() {
            // Obtener el folio actual
            const folio = $('#folioinput').val();
            
            // Obtener el idintegrante de la URL actual
            const urlActual = window.location.href;
            const match = urlActual.match(/\/caracterizacion_hogar_p1\/[^\/]+\/([^\/]+)/);
            const idintegrante = match ? match[1] : '0'; // Si no se encuentra, usar '0' como valor predeterminado
            
            // Redirigir a la página de caracterización hogar P2 con el folio y el idintegrante
            window.location.href = "{{ route('caracterizacion_hogar_p2', ['folio' => ':folio', 'idintegrante' => ':idintegrante']) }}"
                .replace(':folio', folio)
                .replace(':idintegrante', idintegrante);
        });
        
        // Evento para el enlace de Pregunta 3 (si existe)
        $('#linkPregunta3').click(function() {
            // Obtener el folio actual
            const folio = $('#folioinput').val();
            
            // Obtener el idintegrante de la URL actual
            const urlActual = window.location.href;
            const match = urlActual.match(/\/caracterizacion_hogar_p1\/[^\/]+\/([^\/]+)/);
            const idintegrante = match ? match[1] : '0';
            
            // Redirigir a la página de caracterización hogar P3
            window.location.href = "{{ route('caracterizacion_hogar_p3', ['folio' => ':folio', 'idintegrante' => ':idintegrante']) }}"
                .replace(':folio', folio)
                .replace(':idintegrante', idintegrante);
        });
        
        // Evento para el enlace de Pregunta 4
        $('#linkPregunta4').click(function() {
            // Obtener el folio actual
            const folio = $('#folioinput').val();
            
            // Obtener el idintegrante de la URL actual
            const urlActual = window.location.href;
            const match = urlActual.match(/\/caracterizacion_hogar_p1\/[^\/]+\/([^\/]+)/);
            const idintegrante = match ? match[1] : '0';
            
            // Redirigir a la página de caracterización hogar P4
            window.location.href = "{{ route('caracterizacion_hogar_p4', ['folio' => ':folio', 'idintegrante' => ':idintegrante']) }}"
                .replace(':folio', folio)
                .replace(':idintegrante', idintegrante);
        });
    });

    // Funciones de navegación entre formularios
    function redirigirACaracterizacionIntegrantes() {
        var folio = $('#folioContainer').attr('folio');
        var idintegrante = $('#idintegranteinput').val();
        window.location.href = "{{ route('caracterizacion_integrantes', ['folio' => ':folio', 'idintegrante' => ':idintegrante']) }}".replace(':folio', folio).replace(':idintegrante', idintegrante);
    }

    function redirigirAPrimeraInfancia() {
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
            window.location.href = "{{ route('mecanismos_proteccion', ['folio' => ':folio', 'idintegrante' => ':idintegrante']) }}"
                .replace(':folio', folio)
                .replace(':idintegrante', idintegrante);
        } else {
            Swal.fire({
                title: 'Atención',
                text: 'El formulario de mecanismos de protección solo aplica para personas mayores de 5 y menores de 18 años.',
                icon: 'warning',
                confirmButtonText: 'Aceptar'
            });
        }
    }

    // Función para redirigir a la vista de integrantes
    function redirectToIntegrantes() {
        var folio = $('#folioContainer').attr('folio');
        window.location.href = "{{ route('integrantes', ['folio' => ':folio']) }}".replace(':folio', folio);
    }
    
    function redirigirACaracterizacionHogarP2() {
        @php
            // La variable $mostrarPestaña2 ya está definida arriba en el código,
            // así que solo la convertimos a JSON para usarla en JavaScript
            echo "const pregunta1Respondida = " . json_encode($mostrarPestaña2) . ";";
        @endphp
        
        if (pregunta1Respondida) {
            // Si la pregunta 1 está respondida, redirigir a la pregunta 2
            var folio = $('#folioContainer').attr('folio');
            var idintegrante = $('#idintegranteinput').val();
            window.location.href = "{{ route('caracterizacion_hogar_p2', ['folio' => ':folio', 'idintegrante' => ':idintegrante']) }}".replace(':folio', folio).replace(':idintegrante', idintegrante);
        } else {
            // Si no está respondida, mostrar mensaje
            Swal.fire({
                icon: 'warning',
                title: 'Atención',
                text: 'Debe completar y guardar la pregunta 1 antes de continuar con la siguiente pregunta.'
            });
        }
    }
</script>
@endsection
