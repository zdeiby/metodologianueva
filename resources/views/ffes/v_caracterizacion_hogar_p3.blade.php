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
                                <a id="linkPregunta1" class="nav-link">Hogar FFES Pregunta 1</a>
                            </li>
                            <li class="nav-item" role="presentation" style="cursor:pointer">
                                <a id="linkPregunta2" class="nav-link">Hogar FFES Pregunta 2 - 2.1</a>
                            </li>
                            <li class="nav-item" role="presentation" style="cursor:pointer">
                                <a id="legalqt" class="nav-link active">Hogar FFES Pregunta 3 - 3.2</a>
                            </li>
                            
                            @php
                                // Verificar si la pregunta 3 tiene respuestas guardadas - lógica mejorada
                                $pregunta3Respondida = false;
                                $mostrarPestaña4 = false;
                                
                                $respuestaBD = DB::table('t1_caracterizacion_hogar_ffes')
                                    ->where('folio', $folio)
                                    ->where('idintegrante', $idintegrante)
                                    ->first();
                                
                                if ($respuestaBD) {
                                    $p3 = false;
                                    
                                    if (isset($respuestaBD->salud_mental_p3) && 
                                        !empty($respuestaBD->salud_mental_p3) && 
                                        $respuestaBD->salud_mental_p3 != '[]' && 
                                        $respuestaBD->salud_mental_p3 != '""') {
                                        
                                        $jsonData = json_decode($respuestaBD->salud_mental_p3, true);
                                        
                                        if (!empty($jsonData)) {
                                            $p3 = true;
                                        }
                                    }
                                    
                                    if ($p3) {
                                        $pregunta3Respondida = true;
                                    }
                                    
                                    // Verificar si la pregunta 4 tiene respuestas para mostrar su pestaña
                                    if (isset($respuestaBD->hace_parte_instancia_participacion_p4) && 
                                        !empty($respuestaBD->hace_parte_instancia_participacion_p4) && 
                                        $respuestaBD->hace_parte_instancia_participacion_p4 != '[]' && 
                                        $respuestaBD->hace_parte_instancia_participacion_p4 != '""') {
                                        
                                        $jsonData = json_decode($respuestaBD->hace_parte_instancia_participacion_p4, true);
                                        
                                        if (!empty($jsonData)) {
                                            $mostrarPestaña4 = true;
                                        }
                                    }
                                }
                            @endphp
                            
                            @if($pregunta3Respondida || $mostrarPestaña4)
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

                                    <!-- Pregunta 3.1 - Primera parte (Diagnósticos A-G) -->
                                    <div class="col-md-12 mt-4" id="pregunta3_1_container" style="display: none;">
                                        <div class="card">
                                            <div class="card-header bg-primary text-white">
                                                <h5 class="mb-0">3.1 ¿Cuál o Cuales de los siguientes diagnosticos en salud mental el niño, niña o adolescente presenta?</h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="diagnosticos-container">
                                                    <!-- Diagnóstico A -->
                                                    <div class="diagnostico-item mb-3">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input diagnostico-switch" type="checkbox" id="diagnosticoA" data-diagnostico="A" data-id="43" role="switch"
                                                                @if(isset($diagnosticos) && is_array($diagnosticos))
                                                                    @foreach($diagnosticos as $diagnostico)
                                                                        @if($diagnostico['id'] == '43' && $diagnostico['valor'] == 'SI')
                                                                            checked
                                                                            @break
                                                                        @endif
                                                                    @endforeach
                                                                @endif
                                                                >
                                                            <label class="form-check-label" for="diagnosticoA">A. Trastornos depresivos</label>
                                                        </div>
                                                        <div class="integrantes-container mt-2 ml-4" id="integrantesDiagnosticoA" style="display: none;">
                                                            <div class="card">
                                                                <div class="card-header bg-light">
                                                                    Seleccione los integrantes menores de 18 años afectados:
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="row" id="listaIntegrantesDiagnosticoA">
                                                                        <!-- Aquí se cargarán dinámicamente los integrantes seleccionados en la pregunta 3 -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Diagnóstico B -->
                                                    <div class="diagnostico-item mb-3">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input diagnostico-switch" type="checkbox" id="diagnosticoB" data-diagnostico="B" data-id="44" role="switch"
                                                                @if(isset($diagnosticos) && is_array($diagnosticos))
                                                                    @foreach($diagnosticos as $diagnostico)
                                                                        @if($diagnostico['id'] == '44' && $diagnostico['valor'] == 'SI')
                                                                            checked
                                                                            @break
                                                                        @endif
                                                                    @endforeach
                                                                @endif
                                                                >
                                                            <label class="form-check-label" for="diagnosticoB">B. Trastornos del neuro desarrollo (discapacidad intelectual, trastornos de la comunicación, trastornos del espectro autista, trastorno por déficit de atención e hiperactividad (TDAH), trastornos específicos del aprendizaje, trastornos motores</label>
                                                        </div>
                                                        <div class="integrantes-container mt-2 ml-4" id="integrantesDiagnosticoB" style="display: none;">
                                                            <div class="card">
                                                                <div class="card-header bg-light">
                                                                    Seleccione los integrantes menores de 18 años afectados:
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="row" id="listaIntegrantesDiagnosticoB">
                                                                        <!-- Aquí se cargarán dinámicamente los integrantes seleccionados en la pregunta 3 -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Diagnóstico C -->
                                                    <div class="diagnostico-item mb-3">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input diagnostico-switch" type="checkbox" id="diagnosticoC" data-diagnostico="C" data-id="45" role="switch"
                                                                @if(isset($diagnosticos) && is_array($diagnosticos))
                                                                    @foreach($diagnosticos as $diagnostico)
                                                                        @if($diagnostico['id'] == '45' && $diagnostico['valor'] == 'SI')
                                                                            checked
                                                                            @break
                                                                        @endif
                                                                    @endforeach
                                                                @endif
                                                                >
                                                            <label class="form-check-label" for="diagnosticoC">C. Trastorno de ansiedad (trastorno de ansiedad por separación, mutismo selectivo, trastorno de pánico en adolescentes, fobia social, fobias especificas)</label>
                                                        </div>
                                                        <div class="integrantes-container mt-2 ml-4" id="integrantesDiagnosticoC" style="display: none;">
                                                            <div class="card">
                                                                <div class="card-header bg-light">
                                                                    Seleccione los integrantes menores de 18 años afectados:
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="row" id="listaIntegrantesDiagnosticoC">
                                                                        <!-- Aquí se cargarán dinámicamente los integrantes seleccionados en la pregunta 3 -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Diagnóstico D -->
                                                    <div class="diagnostico-item mb-3">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input diagnostico-switch" type="checkbox" id="diagnosticoD" data-diagnostico="D" data-id="46" role="switch"
                                                                @if(isset($diagnosticos) && is_array($diagnosticos))
                                                                    @foreach($diagnosticos as $diagnostico)
                                                                        @if($diagnostico['id'] == '46' && $diagnostico['valor'] == 'SI')
                                                                            checked
                                                                            @break
                                                                        @endif
                                                                    @endforeach
                                                                @endif
                                                                >
                                                            <label class="form-check-label" for="diagnosticoD">D. Trastornos de la Conducta Alimentaria y de la Ingesta de Alimentos (anorexia, bulimia, trastorno por atracón en adolescentes)</label>
                                                        </div>
                                                        <div class="integrantes-container mt-2 ml-4" id="integrantesDiagnosticoD" style="display: none;">
                                                            <div class="card">
                                                                <div class="card-header bg-light">
                                                                    Seleccione los integrantes menores de 18 años afectados:
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="row" id="listaIntegrantesDiagnosticoD">
                                                                        <!-- Aquí se cargarán dinámicamente los integrantes seleccionados en la pregunta 3 -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Diagnóstico E -->
                                                    <div class="diagnostico-item mb-3">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input diagnostico-switch" type="checkbox" id="diagnosticoE" data-diagnostico="E" data-id="47" role="switch"
                                                                @if(isset($diagnosticos) && is_array($diagnosticos))
                                                                    @foreach($diagnosticos as $diagnostico)
                                                                        @if($diagnostico['id'] == '47' && $diagnostico['valor'] == 'SI')
                                                                            checked
                                                                            @break
                                                                        @endif
                                                                    @endforeach
                                                                @endif
                                                                >
                                                            <label class="form-check-label" for="diagnosticoE">E. Trastornos Relacionados con Sustancias y Trastornos Adictivos (trastorno por uso de sustancias, trastorno por juego patologico)</label>
                                                        </div>
                                                        <div class="integrantes-container mt-2 ml-4" id="integrantesDiagnosticoE" style="display: none;">
                                                            <div class="card">
                                                                <div class="card-header bg-light">
                                                                    Seleccione los integrantes menores de 18 años afectados:
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="row" id="listaIntegrantesDiagnosticoE">
                                                                        <!-- Aquí se cargarán dinámicamente los integrantes seleccionados en la pregunta 3 -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Diagnóstico F -->
                                                    <div class="diagnostico-item mb-3">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input diagnostico-switch" type="checkbox" id="diagnosticoF" data-diagnostico="F" data-id="48" role="switch"
                                                                @if(isset($diagnosticos) && is_array($diagnosticos))
                                                                    @foreach($diagnosticos as $diagnostico)
                                                                        @if($diagnostico['id'] == '48' && $diagnostico['valor'] == 'SI')
                                                                            checked
                                                                            @break
                                                                        @endif
                                                                    @endforeach
                                                                @endif
                                                                >
                                                            <label class="form-check-label" for="diagnosticoF">F. Trastorno Obsesivo-Compulsivo y Trastornos Relacionados (trastorno obsesivo compulsivo (TOC) infantil y adolescente, trastorno dismórfico corporal en adolescentes)</label>
                                                        </div>
                                                        <div class="integrantes-container mt-2 ml-4" id="integrantesDiagnosticoF" style="display: none;">
                                                            <div class="card">
                                                                <div class="card-header bg-light">
                                                                    Seleccione los integrantes menores de 18 años afectados:
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="row" id="listaIntegrantesDiagnosticoF">
                                                                        <!-- Aquí se cargarán dinámicamente los integrantes seleccionados en la pregunta 3 -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Diagnóstico G -->
                                                    <div class="diagnostico-item mb-3">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input diagnostico-switch" type="checkbox" id="diagnosticoG" data-diagnostico="G" data-id="49" role="switch"
                                                                @if(isset($diagnosticos) && is_array($diagnosticos))
                                                                    @foreach($diagnosticos as $diagnostico)
                                                                        @if($diagnostico['id'] == '49' && $diagnostico['valor'] == 'SI')
                                                                            checked
                                                                            @break
                                                                        @endif
                                                                    @endforeach
                                                                @endif
                                                                >
                                                            <label class="form-check-label" for="diagnosticoG">G. Trastornos Disruptivos, del Control de los Impulsos y de la Conducta (trastorno negativista desafiante -TND, trastorno de conducta, trastorno explosivo intermitente)</label>
                                                        </div>
                                                        <div class="integrantes-container mt-2 ml-4" id="integrantesDiagnosticoG" style="display: none;">
                                                            <div class="card">
                                                                <div class="card-header bg-light">
                                                                    Seleccione los integrantes menores de 18 años afectados:
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="row" id="listaIntegrantesDiagnosticoG">
                                                                        <!-- Aquí se cargarán dinámicamente los integrantes seleccionados en la pregunta 3 -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Diagnóstico H -->
                                                    <div class="diagnostico-item mb-3">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input diagnostico-switch" type="checkbox" id="diagnosticoH" data-diagnostico="H" data-id="50" role="switch"
                                                                @if(isset($diagnosticos) && is_array($diagnosticos))
                                                                    @foreach($diagnosticos as $diagnostico)
                                                                        @if($diagnostico['id'] == '50' && $diagnostico['valor'] == 'SI')
                                                                            checked
                                                                            @break
                                                                        @endif
                                                                    @endforeach
                                                                @endif
                                                                >
                                                            <label class="form-check-label" for="diagnosticoH">H. Espectro de la Esquizofrenia y Otros Trastornos Psicóticos (trastorno esquizofreniforme Infantil o Adolescente, trastorno psicótico breve, trastorno esquizoafectivo de Inicio Temprano)</label>
                                                        </div>
                                                        <div class="integrantes-container mt-2 ml-4" id="integrantesDiagnosticoH" style="display: none;">
                                                            <div class="card">
                                                                <div class="card-header bg-light">
                                                                    Seleccione los integrantes menores de 18 años afectados:
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="row" id="listaIntegrantesDiagnosticoH">
                                                                        <!-- Aquí se cargarán dinámicamente los integrantes seleccionados en la pregunta 3 -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Diagnóstico I -->
                                                    <div class="diagnostico-item mb-3">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input diagnostico-switch" type="checkbox" id="diagnosticoI" data-diagnostico="I" data-id="51" role="switch"
                                                                @if(isset($diagnosticos) && is_array($diagnosticos))
                                                                    @foreach($diagnosticos as $diagnostico)
                                                                        @if($diagnostico['id'] == '51' && $diagnostico['valor'] == 'SI')
                                                                            checked
                                                                            @break
                                                                        @endif
                                                                    @endforeach
                                                                @endif
                                                                >
                                                            <label class="form-check-label" for="diagnosticoI">I. Trastorno bipolar y trastornos relacionados (trastorno bipolar en adolescentes, trastorno ciclotímico de inicio temprano)</label>
                                                        </div>
                                                        <div class="integrantes-container mt-2 ml-4" id="integrantesDiagnosticoI" style="display: none;">
                                                            <div class="card">
                                                                <div class="card-header bg-light">
                                                                    Seleccione los integrantes menores de 18 años afectados:
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="row" id="listaIntegrantesDiagnosticoI">
                                                                        <!-- Aquí se cargarán dinámicamente los integrantes seleccionados en la pregunta 3 -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Diagnóstico J -->
                                                    <div class="diagnostico-item mb-3">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input diagnostico-switch" type="checkbox" id="diagnosticoJ" data-diagnostico="J" data-id="52" role="switch"
                                                                @if(isset($diagnosticos) && is_array($diagnosticos))
                                                                    @foreach($diagnosticos as $diagnostico)
                                                                        @if($diagnostico['id'] == '52' && $diagnostico['valor'] == 'SI')
                                                                            checked
                                                                            @break
                                                                        @endif
                                                                    @endforeach
                                                                @endif
                                                                >
                                                            <label class="form-check-label" for="diagnosticoJ">J. Trastornos del Sueño-Vigilia (trastorno de insomnio infantil y adolescente, trastorno del sueño por pesadillas, terrores nocturnos, sonambulismo infantil, narcolepsia en adolescentes)</label>
                                                        </div>
                                                        <div class="integrantes-container mt-2 ml-4" id="integrantesDiagnosticoJ" style="display: none;">
                                                            <div class="card">
                                                                <div class="card-header bg-light">
                                                                    Seleccione los integrantes menores de 18 años afectados:
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="row" id="listaIntegrantesDiagnosticoJ">
                                                                        <!-- Aquí se cargarán dinámicamente los integrantes seleccionados en la pregunta 3 -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Diagnóstico K -->
                                                    <div class="diagnostico-item mb-3">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input diagnostico-switch" type="checkbox" id="diagnosticoK" data-diagnostico="K" data-id="53" role="switch"
                                                                @if(isset($diagnosticos) && is_array($diagnosticos))
                                                                    @foreach($diagnosticos as $diagnostico)
                                                                        @if($diagnostico['id'] == '53' && $diagnostico['valor'] == 'SI')
                                                                            checked
                                                                            @break
                                                                        @endif
                                                                    @endforeach
                                                                @endif
                                                                >
                                                            <label class="form-check-label" for="diagnosticoK">K. Trastornos de la Personalidad (trastorno de la personalidad límite de inicio adolescente, trastorno antisocial de la personalidad)</label>
                                                        </div>
                                                        <div class="integrantes-container mt-2 ml-4" id="integrantesDiagnosticoK" style="display: none;">
                                                            <div class="card">
                                                                <div class="card-header bg-light">
                                                                    Seleccione los integrantes menores de 18 años afectados:
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="row" id="listaIntegrantesDiagnosticoK">
                                                                        <!-- Aquí se cargarán dinámicamente los integrantes seleccionados en la pregunta 3 -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Diagnóstico L -->
                                                    <div class="diagnostico-item mb-3">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input diagnostico-switch" type="checkbox" id="diagnosticoL" data-diagnostico="L" data-id="54" role="switch"
                                                                @if(isset($diagnosticos) && is_array($diagnosticos))
                                                                    @foreach($diagnosticos as $diagnostico)
                                                                        @if($diagnostico['id'] == '54' && $diagnostico['valor'] == 'SI')
                                                                            checked
                                                                            @break
                                                                        @endif
                                                                    @endforeach
                                                                @endif
                                                                >
                                                            <label class="form-check-label" for="diagnosticoL">L. Trastornos de la Excreción (enuresis, encopresis)</label>
                                                        </div>
                                                        <div class="integrantes-container mt-2 ml-4" id="integrantesDiagnosticoL" style="display: none;">
                                                            <div class="card">
                                                                <div class="card-header bg-light">
                                                                    Seleccione los integrantes menores de 18 años afectados:
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="row" id="listaIntegrantesDiagnosticoL">
                                                                        <!-- Aquí se cargarán dinámicamente los integrantes seleccionados en la pregunta 3 -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Diagnóstico M -->
                                                    <div class="diagnostico-item mb-3">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input diagnostico-switch" type="checkbox" id="diagnosticoM" data-diagnostico="M" data-id="55" role="switch"
                                                                @if(isset($diagnosticos) && is_array($diagnosticos))
                                                                    @foreach($diagnosticos as $diagnostico)
                                                                        @if($diagnostico['id'] == '55' && $diagnostico['valor'] == 'SI')
                                                                            checked
                                                                            @break
                                                                        @endif
                                                                    @endforeach
                                                                @endif
                                                                >
                                                            <label class="form-check-label" for="diagnosticoM">M. Trastornos Relacionados con Trauma y Factores de Estrés (trastorno de apego reactivo, trastorno de relación social desinhibida, trastorno de estrés postraumático-TEPT)</label>
                                                        </div>
                                                        <div class="integrantes-container mt-2 ml-4" id="integrantesDiagnosticoM" style="display: none;">
                                                            <div class="card">
                                                                <div class="card-header bg-light">
                                                                    Seleccione los integrantes menores de 18 años afectados:
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="row" id="listaIntegrantesDiagnosticoM">
                                                                        <!-- Aquí se cargarán dinámicamente los integrantes seleccionados en la pregunta 3 -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Diagnóstico N -->
                                                    <div class="diagnostico-item mb-3">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input diagnostico-switch" type="checkbox" id="diagnosticoN" data-diagnostico="N" data-id="56" role="switch"
                                                                @if(isset($diagnosticos) && is_array($diagnosticos))
                                                                    @foreach($diagnosticos as $diagnostico)
                                                                        @if($diagnostico['id'] == '56' && $diagnostico['valor'] == 'SI')
                                                                            checked
                                                                            @break
                                                                        @endif
                                                                    @endforeach
                                                                @endif
                                                                >
                                                            <label class="form-check-label" for="diagnosticoN">N. Intento de suicido y autolesiones</label>
                                                        </div>
                                                        <div class="integrantes-container mt-2 ml-4" id="integrantesDiagnosticoN" style="display: none;">
                                                            <div class="card">
                                                                <div class="card-header bg-light">
                                                                    Seleccione los integrantes menores de 18 años afectados:
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="row" id="listaIntegrantesDiagnosticoN">
                                                                        <!-- Aquí se cargarán dinámicamente los integrantes seleccionados en la pregunta 3 -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Pregunta 3.2 -->
                                    <div class="col-md-12 mt-4" id="pregunta3_2_container" style="display: none;">
                                        <div class="card">
                                            <div class="card-header bg-primary text-white">
                                                <h5 class="mb-0">3.2 ¿Ha accedido a servicios de atención e intervención en la salud mental?</h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="respuestas-container">
                                                    <!-- Opción A: SI -->
                                                    <div class="respuesta-item mb-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input respuesta3-2-radio" type="radio" name="respuesta3_2" id="respuesta3_2A" value="1" 
                                                                {{ isset($respuestaP3_2) && is_array($respuestaP3_2) && isset($respuestaP3_2[0]['valor']) && $respuestaP3_2[0]['valor'] == 'SI' && $respuestaP3_2[0]['id'] == '1' ? 'checked' : '' }}>
                                                            <label class="form-check-label" for="respuesta3_2A">SI</label>
                                                        </div>
                                                        <div class="integrantes-container mt-2 ml-4" id="integrantesRespuesta3_2A" style="display: none;">
                                                            <p class="mb-2">Seleccione los integrantes menores de 18 años:</p>
                                                            <div class="row" id="listaIntegrantes3_2A">
                                                                <!-- Los integrantes se cargarán dinámicamente mediante JavaScript -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <!-- Opción B: NO -->
                                                    <div class="respuesta-item mb-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input respuesta3-2-radio" type="radio" name="respuesta3_2" id="respuesta3_2B" value="0" 
                                                                {{ isset($respuestaP3_2) && is_array($respuestaP3_2) && isset($respuestaP3_2[1]['valor']) && $respuestaP3_2[1]['valor'] == 'SI' && $respuestaP3_2[1]['id'] == '0' ? 'checked' : '' }}>
                                                            <label class="form-check-label" for="respuesta3_2B">NO</label>
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
                                        ${nombreCompleto} <span class="text-muted">(${integrante.edad})</span>
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

                    // Cargar también los integrantes para la pregunta 3.2
                    cargarIntegrantes3_2();
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

    // Función para cargar integrantes en la pregunta 3.2
    function cargarIntegrantes3_2() {
        // Verificar que la respuesta principal sea SI
        if ($('#respuestaA').prop('checked')) {
            // Clonar los integrantes seleccionados en la pregunta 3
            let htmlIntegrantes3_2 = '';
            
            // Obtener integrantes seleccionados en la pregunta 3
            $('input[name="integrantes[]"]:checked').each(function() {
                const idIntegrante = $(this).val();
                const nombreCompleto = $(this).siblings('label').text().trim().replace(/ \(\d+\)$/, '');
                const edadMatch = $(this).siblings('label').text().match(/\((\d+)\)/);
                const edad = edadMatch ? edadMatch[1] : '';
                
                // Verificar si este integrante estaba seleccionado previamente en 3.2
                let isChecked = '';
                @if(isset($respuestaP3_2) && is_array($respuestaP3_2))
                    // Buscar la respuesta con valor SI y verificar sus integrantes
                    @php
                        $integrantesSeleccionados3_2 = [];
                        foreach ($respuestaP3_2 as $resp) {
                            if (isset($resp['valor']) && $resp['valor'] == 'SI' && isset($resp['idintegrante'])) {
                                $integrantesSeleccionados3_2 = $resp['idintegrante'];
                                break;
                            }
                        }
                    @endphp
                    if (@json($integrantesSeleccionados3_2).includes(idIntegrante.toString())) {
                        isChecked = 'checked';
                    }
                @endif
                
                htmlIntegrantes3_2 += `
                    <div class="col-md-6 mb-2">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" 
                                   id="integrante3_2_${idIntegrante}" 
                                   name="integrantes3_2[]" 
                                   value="${idIntegrante}"
                                   role="switch"
                                   ${isChecked}>
                            <label class="form-check-label" for="integrante3_2_${idIntegrante}">
                                ${nombreCompleto} <span class="text-muted">(${edad})</span>
                            </label>
                        </div>
                    </div>
                `;
            });
            
            // Insertar HTML en el contenedor correspondiente
            $('#listaIntegrantes3_2A').html(htmlIntegrantes3_2);
            
            // Mostrar el contenedor de la pregunta 3.2
            $('#pregunta3_2_container').show();
            
            // Mostrar los integrantes si la respuesta es SI
            if ($('#respuesta3_2A').prop('checked')) {
                $('#integrantesRespuesta3_2A').show();
            }
        } else {
            // Si la respuesta principal es NO, ocultar la pregunta 3.2
            $('#pregunta3_2_container').hide();
        }
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
        
        // Evento para el enlace de Pregunta 4
        $('#linkPregunta4').click(function() {
            // Obtener el folio actual
            const folio = $('#folioinput').val();
            
            // Obtener el idintegrante
            const idintegrante = $('#idintegranteinput').val(); 
            
            // Redirigir a la página de caracterización hogar P4 con el folio y el idintegrante
            window.location.href = "{{ route('caracterizacion_hogar_p4', ['folio' => ':folio', 'idintegrante' => ':idintegrante']) }}"
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
                $('#pregunta3_1_container').show();
                $('#pregunta3_2_container').show();
                
                // Cargar integrantes para los diagnósticos cuando se selecciona SI
                setTimeout(function() {
                    cargarIntegrantesParaDiagnosticos();
                    cargarIntegrantes3_2();
                }, 500);
            } else {
                // Si es B (0), desmarcar todos los integrantes
                $('input[name="integrantes[]"]').prop('checked', false);
                $('#pregunta3_1_container').hide();
                $('#pregunta3_2_container').hide();
                
                // Desmarcar todos los diagnósticos cuando se selecciona NO
                $('.diagnostico-switch').prop('checked', false);
                
                // Desmarcar las opciones de la pregunta 3.2
                $('.respuesta3-2-radio').prop('checked', false);
            }
        });
        
        // Manejar cambio en las opciones de respuesta de la pregunta 3.2
        $('.respuesta3-2-radio').change(function() {
            const respuesta = $(this).val();
            
            // Ocultar todos los contenedores de integrantes de la pregunta 3.2
            $('#integrantesRespuesta3_2A').hide();
            
            // Si la respuesta es A (1), mostrar el contenedor correspondiente
            if (respuesta == 1) {
                $('#integrantesRespuesta3_2A').show();
                // Sincronizar integrantes con los seleccionados en la pregunta 3
                cargarIntegrantes3_2();
            } else {
                // Si es B (0), desmarcar todos los integrantes de la pregunta 3.2
                $('input[name="integrantes3_2[]"]').prop('checked', false);
            }
        });

        // Manejar cambio en los integrantes de la pregunta 3
        $(document).on('change', 'input[name="integrantes[]"]', function() {
            if ($('#respuestaA').is(':checked')) {
                cargarIntegrantesParaDiagnosticos();
                
                // Si la pregunta 3.2 está visible y la respuesta es SI, actualizar los integrantes
                if ($('#pregunta3_2_container').is(':visible') && $('#respuesta3_2A').is(':checked')) {
                    cargarIntegrantes3_2();
                }
            }
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
            
            // Validaciones para pregunta 3 y 3.1
            if (respuestaSeleccionada == 1) { // Si la respuesta a la pregunta 3 es SI
                // Validar que haya al menos un integrante seleccionado en la pregunta 3
                const integrantesSeleccionados = $('input[name="integrantes[]"]:checked').length;
                if (integrantesSeleccionados === 0) {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Validación',
                        text: 'Si la respuesta es SI, debe seleccionar al menos un integrante en la pregunta 3'
                    });
                    return false;
                }
                
                // Validar que haya al menos un diagnóstico seleccionado en la pregunta 3.1
                const diagnosticosSeleccionados = $('.diagnostico-switch:checked').length;
                if (diagnosticosSeleccionados === 0) {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Validación',
                        text: 'Si la respuesta es SI, debe seleccionar al menos un diagnóstico en la pregunta 3.1'
                    });
                    return false;
                }
                
                // Validar que cada diagnóstico seleccionado tenga al menos un integrante seleccionado
                let diagnosticosSinIntegrantes = false;
                let nombreDiagnosticoSinIntegrantes = '';
                
                $('.diagnostico-switch:checked').each(function() {
                    const diagnostico = $(this).data('diagnostico');
                    const integrantesDiagnostico = $(`input[name="integrantesDiagnostico${diagnostico}[]"]:checked`).length;
                    
                    if (integrantesDiagnostico === 0) {
                        diagnosticosSinIntegrantes = true;
                        nombreDiagnosticoSinIntegrantes = $(this).siblings('label').text();
                        return false; // Salir del bucle each
                    }
                });
                
                if (diagnosticosSinIntegrantes) {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Validación',
                        text: `Debe seleccionar al menos un integrante para el diagnóstico: ${nombreDiagnosticoSinIntegrantes}`
                    });
                    return false;
                }
            }
            
            // Validar la pregunta 3.2
            if (respuestaSeleccionada == 1 && $('input[name="respuesta3_2"]:checked').val() === undefined) {
                Swal.fire({
                    icon: 'warning',
                    title: 'Validación',
                    text: 'Debe seleccionar una respuesta en la pregunta 3.2'
                });
                return false;
            }
            
            // Si la respuesta a la pregunta 3.2 es SI, validar que haya al menos un integrante seleccionado
            if (respuestaSeleccionada == 1 && $('input[name="respuesta3_2"]:checked').val() == 1) {
                const integrantes3_2Seleccionados = $('input[name="integrantes3_2[]"]:checked').length;
                if (integrantes3_2Seleccionados === 0) {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Validación',
                        text: 'Si la respuesta es SI en la pregunta 3.2, debe seleccionar al menos un integrante'
                    });
                    return false;
                }
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
                const integrantesSeleccionados = [];
                $('input[name="integrantes[]"]:checked').each(function() {
                    integrantesSeleccionados.push($(this).val());
                });
                
                formData.integrantes = integrantesSeleccionados;
                
                // Obtener los diagnósticos seleccionados (pregunta 3.1)
                const diagnosticos = [];
                
                // Recorrer cada diagnóstico (A-N)
                const letras = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N"];
                const diagnosticosIds = ['43', '44', '45', '46', '47', '48', '49', '50', '51', '52', '53', '54', '55', '56'];
                
                letras.forEach(function(letra, index) {
                    const diagnosticoId = diagnosticosIds[index];
                    const isChecked = $(`#diagnostico${letra}`).is(':checked');
                    let integrantesDiagnostico = [];
                    
                    if (isChecked) {
                        // Si el diagnóstico está seleccionado, obtener los integrantes seleccionados
                        $(`input[name="integrantesDiagnostico${letra}[]"]:checked`).each(function() {
                            integrantesDiagnostico.push($(this).val());
                        });
                        
                        diagnosticos.push({
                            id: diagnosticoId,
                            valor: 'SI',
                            idintegrante: integrantesDiagnostico
                        });
                    } else {
                        // Si no está seleccionado, valor NO sin integrantes
                        diagnosticos.push({
                            id: diagnosticoId,
                            valor: 'NO',
                            idintegrante: []
                        });
                    }
                });
                
                formData.diagnosticos = diagnosticos;
            }
            
            // Obtener la respuesta de la pregunta 3.2
            const respuesta3_2 = $('input[name="respuesta3_2"]:checked').val();
            const respuestas3_2 = [];
            
            if (respuestaSeleccionada === '1') {
                // Solo procesar la pregunta 3.2 si la pregunta 3 tiene respuesta SI
                if (respuesta3_2 === '1') {
                    // Si la respuesta es SI, recopilar integrantes seleccionados
                    const integrantes3_2 = [];
                    $('input[name="integrantes3_2[]"]:checked').each(function() {
                        integrantes3_2.push($(this).val());
                    });
                    
                    respuestas3_2.push({
                        id: '1',
                        valor: 'SI',
                        idintegrante: integrantes3_2
                    });
                    respuestas3_2.push({
                        id: '0',
                        valor: 'NO',
                        idintegrante: []
                    });
                } else if (respuesta3_2 === '0') {
                    // Si la respuesta es NO
                    respuestas3_2.push({
                        id: '1',
                        valor: 'NO',
                        idintegrante: []
                    });
                    respuestas3_2.push({
                        id: '0',
                        valor: 'SI',
                        idintegrante: []
                    });
                } else {
                    // Si no seleccionó nada (no debería pasar debido a la validación)
                    respuestas3_2.push({
                        id: '1',
                        valor: 'NO',
                        idintegrante: []
                    });
                    respuestas3_2.push({
                        id: '0',
                        valor: 'SI',
                        idintegrante: []
                    });
                }
            } else {
                // Si la respuesta a la pregunta 3 es NO
                respuestas3_2.push({
                    id: '1',
                    valor: 'NO',
                    idintegrante: []
                });
                respuestas3_2.push({
                    id: '0',
                    valor: 'SI',
                    idintegrante: []
                });
            }
            
            formData.respuesta3_2 = respuestas3_2;
            
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
                            text: response.message,
                            allowOutsideClick: false
                        }).then((result) => {
                            // Recargar la página para que aparezca la pestaña 4
                            window.location.reload();
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
        // Código antiguo reemplazado por nueva implementación abajo
        /*
        $('#siguiente').click(function() {
            Swal.fire({
                icon: 'info',
                title: 'Información',
                text: 'Funcionalidad "Siguiente" en desarrollo'
            });
        });
        */
        
        // Cargar los integrantes para cada diagnóstico cuando la pregunta 3 tenga algún integrante seleccionado
        function cargarIntegrantesParaDiagnosticos() {
            // Obtener el folio actual
            const folio = $('#folioinput').val();
            
            // Realizar petición AJAX para obtener los integrantes del hogar
            $.ajax({
                url: '{{ route("obtener_integrantes_menores_p3", ["folio" => ":folio"]) }}'.replace(':folio', folio),
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    if (response.success) {
                        // Letras de los diagnósticos
                        const letras = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N"];
                        const diagnosticosIds = ['43', '44', '45', '46', '47', '48', '49', '50', '51', '52', '53', '54', '55', '56'];
                        
                        // Obtener IDs de integrantes seleccionados en la pregunta 3
                        const integrantesSeleccionados = [];
                        $('input[name="integrantes[]"]:checked').each(function() {
                            integrantesSeleccionados.push($(this).val());
                        });
                        
                        // Para cada diagnóstico, generar HTML con los integrantes seleccionados
                        letras.forEach(function(letra, index) {
                            let htmlIntegrantes = '';
                            const diagnosticoId = diagnosticosIds[index];
                            
                            response.integrantes.forEach(function(integrante) {
                                // Solo mostrar los integrantes seleccionados en la pregunta 3
                                if (integrantesSeleccionados.includes(integrante.idintegrante.toString())) {
                                    const nombreCompleto = (integrante.nombre1 || '') + ' ' + 
                                                          (integrante.nombre2 || '') + ' ' + 
                                                          (integrante.apellido1 || '') + ' ' + 
                                                          (integrante.apellido2 || '');
                                    
                                    // Verificar si el integrante estaba seleccionado previamente en este diagnóstico
                                    let isChecked = '';
                                    
                                    @if(isset($diagnosticos) && is_array($diagnosticos))
                                        // Para cada diagnóstico guardado
                                        @foreach($diagnosticos as $diagnostico)
                                            // Si coincide el ID del diagnóstico y el valor es SI
                                            if ('{{ $diagnostico['id'] ?? '' }}' === diagnosticoId && 
                                                '{{ $diagnostico['valor'] ?? '' }}' === 'SI') {
                                                // Verificar si este integrante está en el array de integrantes del diagnóstico
                                                const integrantesGuardados = @json($diagnostico['idintegrante'] ?? []);
                                                if (integrantesGuardados.includes(integrante.idintegrante.toString())) {
                                                    isChecked = 'checked';
                                                }
                                            }
                                        @endforeach
                                    @endif
                                    
                                    htmlIntegrantes += `
                                        <div class="col-md-6 mb-2">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" 
                                                       id="integrante${letra}_${integrante.idintegrante}" 
                                                       name="integrantesDiagnostico${letra}[]" 
                                                       value="${integrante.idintegrante}"
                                                       role="switch"
                                                       ${isChecked}>
                                                <label class="form-check-label" for="integrante${letra}_${integrante.idintegrante}">
                                                    ${nombreCompleto} <span class="text-muted">(${integrante.edad})</span>
                                                </label>
                                            </div>
                                        </div>
                                    `;
                                }
                            });
                            
                            // Insertar HTML en el contenedor correspondiente
                            $(`#listaIntegrantesDiagnostico${letra}`).html(htmlIntegrantes);
                            
                            // Mostrar los contenedores de integrantes para los diagnósticos seleccionados
                            if ($(`#diagnostico${letra}`).is(':checked')) {
                                $(`#integrantesDiagnostico${letra}`).show();
                            }
                        });
                        
                    } else {
                        console.error('Error al cargar integrantes para diagnósticos:', response.message);
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error en la petición AJAX para diagnósticos:', error);
                }
            });
        }
        
        // Manejar cambio en las opciones de respuesta
        $('.respuesta-radio').change(function() {
            const respuesta = $(this).val();
            
            // Ocultar todos los contenedores de integrantes
            $('.integrantes-container').hide();
            
            // Si la respuesta es A (1), mostrar el contenedor correspondiente
            if (respuesta == 1) {
                $('#integrantesRespuestaA').show();
                $('#pregunta3_1_container').show();
            } else {
                // Si es B (0), desmarcar todos los integrantes
                $('input[name="integrantes[]"]').prop('checked', false);
                $('#pregunta3_1_container').hide();
                
                // Desmarcar todos los diagnósticos cuando se selecciona NO
                $('.diagnostico-switch').prop('checked', false);
            }
        });
        
        // Manejar cambio en los integrantes de la pregunta 3
        $(document).on('change', 'input[name="integrantes[]"]', function() {
            if ($('#respuestaA').is(':checked')) {
                cargarIntegrantesParaDiagnosticos();
            }
        });
        
        // Manejar cambio en los checkboxes de diagnóstico
        $('.diagnostico-switch').change(function() {
            const diagnostico = $(this).data('diagnostico');
            const isChecked = $(this).prop('checked');
            
            // Mostrar u ocultar el contenedor de integrantes según el estado del checkbox
            $(`#integrantesDiagnostico${diagnostico}`).toggle(isChecked);
            
            // Si se marca un diagnóstico, mostrar mensaje indicando que se deben seleccionar integrantes
            if (isChecked) {
                // Verificar si no hay integrantes seleccionados
                const integrantesSeleccionados = $(`input[name="integrantesDiagnostico${diagnostico}[]"]:checked`).length;
                if (integrantesSeleccionados === 0) {
                    // Mostrar mensaje de ayuda
                    const mensajeHTML = `<div class="alert alert-info mt-2 mb-0 mensaje-ayuda">
                        <small>Debe seleccionar al menos un integrante para este diagnóstico</small>
                    </div>`;
                    
                    // Eliminar mensaje anterior si existe
                    $(`#integrantesDiagnostico${diagnostico} .mensaje-ayuda`).remove();
                    
                    // Agregar mensaje al final del contenedor
                    $(`#integrantesDiagnostico${diagnostico} .card-body`).append(mensajeHTML);
                }
            }
        });
        
        // Cargar integrantes inicialmente
        $(document).ready(function() {
            // Verificar si ya hay integrantes seleccionados al cargar la página
            if ($('#respuestaA').is(':checked')) {
                $('#pregunta3_1_container').show();
                
                // Esperar a que se carguen los integrantes de la pregunta 3
                var checkIntegrantes = setInterval(function() {
                    if ($('input[name="integrantes[]"]:checked').length > 0) {
                        cargarIntegrantesParaDiagnosticos();
                        clearInterval(checkIntegrantes);
                    }
                }, 500);
            }
        });
        
        // Funcionalidad para el botón "Anterior"
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
        
        // Funcionalidad del botón "Siguiente"
        $('#siguiente').click(function() {
            // Verificamos si la pregunta 3 tiene respuestas guardadas
            @php
                // La variable $pregunta3Respondida ya está definida arriba en el código,
                // así que solo la convertimos a JSON para usarla en JavaScript
                echo "const pregunta3Respondida = " . json_encode($pregunta3Respondida) . ";";
            @endphp
            
            if (pregunta3Respondida) {
                // Si la pregunta 3 está respondida, redirigir a la pregunta 4
                // Obtener el folio actual
                const folio = $('#folioinput').val();
                
                // Obtener el idintegrante
                const idintegrante = $('#idintegranteinput').val();
                
                // Redirigir a la página de caracterización hogar P4
                window.location.href = "{{ route('caracterizacion_hogar_p4', ['folio' => ':folio', 'idintegrante' => ':idintegrante']) }}"
                    .replace(':folio', folio)
                    .replace(':idintegrante', idintegrante);
            } else {
                // Si no está respondida, mostrar mensaje
                Swal.fire({
                    icon: 'warning',
                    title: 'Atención',
                    text: 'Debe completar y guardar la pregunta 3 antes de continuar con la siguiente pregunta.'
                });
            }
        });
    });
</script>
@endsection
