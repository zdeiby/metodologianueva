@extends('componentes.navlateral')

@section('title', 'Caracterización Hogar P4')

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
                                <a id="linkPregunta3" class="nav-link">Caracterización hogar FFES Pregunta 3</a>
                            </li>
                            <li class="nav-item" role="presentation" style="cursor:pointer">
                                <a id="legalqt" class="nav-link active">Caracterización hogar FFES Pregunta 4</a>
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

                                    <span class="badge bg-primary" id="" style="font-size:15px; background:#a80a85 !important">Caracterización del Hogar - Parte 4</span>

                                    <!-- Cabecera con información del integrante -->
                                    <div class="mt-2 mb-2">
                                        <div style="background-color: #f8f9fa; border-radius: 5px; padding: 8px 15px;">
                                            <div class="d-flex align-items-center">
                                                <span class="badge rounded-pill" style="font-size: 14px; background-color: #28a745; color: white; padding: 8px 12px; margin-right: 10px;">{{ $folio }}</span>
                                                <span class="badge rounded-pill" style="font-size: 14px; background-color: #9c27b0; color: white; padding: 8px 12px; margin-right: 10px; text-transform: uppercase;">{{ trim(($datosIntegrante->nombre1 ?? '') . ' ' . ($datosIntegrante->nombre2 ?? '') . ' ' . ($datosIntegrante->apellido1 ?? '') . ' ' . ($datosIntegrante->apellido2 ?? '')) }}</span>
                                                <span class="badge rounded-pill" style="font-size: 14px; background-color: #fd7e14; color: white; padding: 8px 12px;">{{ isset($datosIntegrante->edad) ? $datosIntegrante->edad : 'Edad no disponible' }}</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Aquí irá el contenido de las instancias de participación -->
                                    <div class="col-md-12 mt-4">
                                        <div class="card">
                                            <div class="card-header bg-primary text-white">
                                                <h5 class="mb-0">¿En tu hogar, el niño, niña o adolescente hace parte de algunas de las siguientes instancias de participación?</h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="instancias-container">
                                                    <!-- Instancia A -->
                                                    <div class="instancia-item mb-3">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input situacion-switch" type="checkbox" id="situacionA" data-situacion="A">
                                                            <label class="form-check-label" for="situacionA">A. Grupos juveniles, organizaciones infantiles con enfoque en derechos humanos, medio ambiente, religión y paz.</label>
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

                                                    <!-- Instancia B -->
                                                    <div class="instancia-item mb-3">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input situacion-switch" type="checkbox" id="situacionB" data-situacion="B">
                                                            <label class="form-check-label" for="situacionB">B. Grupos culturales</label>
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

                                                    <!-- Instancia C -->
                                                    <div class="instancia-item mb-3">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input situacion-switch" type="checkbox" id="situacionC" data-situacion="C">
                                                            <label class="form-check-label" for="situacionC">C. Grupos deportivos</label>
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

                                                    <!-- Instancia D -->
                                                    <div class="instancia-item mb-3">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input situacion-switch" type="checkbox" id="situacionD" data-situacion="D">
                                                            <label class="form-check-label" for="situacionD">D. Juntas de Accion Comunal o alguno de sus comités</label>
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

                                                    <!-- Instancia E -->
                                                    <div class="instancia-item mb-3">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input situacion-switch" type="checkbox" id="situacionE" data-situacion="E">
                                                            <label class="form-check-label" for="situacionE">E. Consejo Municipal de Juventud y/o plataforma municipal de juventud</label>
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

                                                    <!-- Instancia F -->
                                                    <div class="instancia-item mb-3">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input situacion-switch" type="checkbox" id="situacionF" data-situacion="F">
                                                            <label class="form-check-label" for="situacionF">F. Consejos y mesas de participación de Niños, Niñas y adolescentes (Unidad de Niñez)</label>
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

                                                    <!-- Instancia G -->
                                                    <div class="instancia-item mb-3">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input situacion-switch" type="checkbox" id="situacionG" data-situacion="G">
                                                            <label class="form-check-label" for="situacionG">G. Semilleros de participación ciudadana, presupuesto participativo (veeduria, participación ciudadana)</label>
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

                                                    <!-- Instancia H -->
                                                    <div class="instancia-item mb-3">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input situacion-switch" type="checkbox" id="situacionH" data-situacion="H">
                                                            <label class="form-check-label" for="situacionH">H. Personerías y gobiernos escolares.</label>
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

                                                    <!-- Instancia I -->
                                                    <div class="instancia-item mb-3">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input situacion-switch" type="checkbox" id="situacionI" data-situacion="I">
                                                            <label class="form-check-label" for="situacionI">I. Voluntariados</label>
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

                                                    <!-- Ninguna de las anteriores -->
                                                    <div class="instancia-item mb-3 mt-4">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" id="situacionJ" data-situacion="J">
                                                            <label class="form-check-label" for="situacionJ">J. Ninguna de las anteriores</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Botones de acción -->
                                    <br><br><br><br>
                                </form>
                            </div>
                        </div>
                        <hr>
                        <div class="row">  
                            <div class="text-start col">
                                <div class="btn btn-outline-success" onclick="redirectToIntegrantes()">Volver</div>
                            </div>
                            <div class="text-end col">
                                <button class="btn btn-outline-success" id="btnGuardar" type="button">Guardar</button>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    console.log("DOM cargado completamente");
    
    // Referencias a los elementos DOM que necesitamos
    const checkboxesSituacion = document.querySelectorAll('.situacion-switch');
    const checkboxNinguna = document.getElementById('situacionJ');
    const contenedoresIntegrantes = document.querySelectorAll('.integrantes-container');
    const folioInput = document.getElementById('folioinput');
    const btnGuardar = document.getElementById('btnGuardar');
    
    // Ocultar todos los contenedores de integrantes al inicio
    contenedoresIntegrantes.forEach(function(contenedor) {
        contenedor.style.display = 'none';
    });
    
    // Cargar los integrantes al cargar la página
    cargarIntegrantesMenores();
    
    // Función para obtener integrantes menores de 18 años
    function cargarIntegrantesMenores() {
        const folio = folioInput.value;
        console.log("Cargando integrantes para folio:", folio);
        
        // Crear y configurar objeto de petición AJAX
        const xhr = new XMLHttpRequest();
        xhr.open('GET', '{{ route("obtener_integrantes_menores_p4", ["folio" => ":folio"]) }}'.replace(':folio', folio), true);
        
        xhr.onload = function() {
            if (xhr.status >= 200 && xhr.status < 300) {
                try {
                    const response = JSON.parse(xhr.responseText);
                    console.log("Respuesta recibida:", response);
                    
                    if (response.success) {
                        const integrantes = response.integrantes;
                        const letras = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I'];
                        
                        letras.forEach(function(letra) {
                            let htmlIntegrantes = '';
                            
                            integrantes.forEach(function(integrante) {
                                // Construir nombre completo
                                let nombreCompleto = integrante.nombre1 || '';
                                if (integrante.nombre2) nombreCompleto += ' ' + integrante.nombre2;
                                if (integrante.apellido1) nombreCompleto += ' ' + integrante.apellido1;
                                if (integrante.apellido2) nombreCompleto += ' ' + integrante.apellido2;
                                nombreCompleto += ' (' + integrante.edad + ')';
                                
                                // Verificar si este integrante estaba seleccionado previamente
                                let isChecked = '';
                                @if(isset($respuestas) && is_array($respuestas))
                                    @foreach($respuestas as $respuesta)
                                        @if(isset($respuesta['id']) && isset($respuesta['idintegrante']))
                                            @php
                                                $mapeoInverso = [
                                                    '57' => 'A',
                                                    '58' => 'B',
                                                    '59' => 'C',
                                                    '60' => 'D',
                                                    '61' => 'E',
                                                    '62' => 'F',
                                                    '63' => 'G',
                                                    '64' => 'H',
                                                    '65' => 'I',
                                                    '35' => 'J'
                                                ];
                                                $letraSituacion = isset($mapeoInverso[$respuesta['id']]) ? $mapeoInverso[$respuesta['id']] : '';
                                            @endphp
                                            
                                            if ("{{ $letraSituacion }}" === letra && @json($respuesta['idintegrante']).includes(String(integrante.idintegrante))) {
                                                isChecked = 'checked';
                                            }
                                        @endif
                                    @endforeach
                                @endif
                                
                                // Construir el HTML para cada integrante
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
                            
                            // Insertar el HTML en el contenedor correspondiente
                            document.getElementById(`listaIntegrantes${letra}`).innerHTML = htmlIntegrantes;
                        });
                        
                        // Marcar las situaciones que estaban seleccionadas previamente
                        @if(isset($respuestas) && is_array($respuestas))
                            @foreach($respuestas as $respuesta)
                                @if(isset($respuesta['id']) && isset($respuesta['valor']) && $respuesta['valor'] == 'SI')
                                    @php
                                        $mapeoInverso = [
                                            '57' => 'A',
                                            '58' => 'B',
                                            '59' => 'C',
                                            '60' => 'D',
                                            '61' => 'E',
                                            '62' => 'F',
                                            '63' => 'G',
                                            '64' => 'H',
                                            '65' => 'I',
                                            '35' => 'J'
                                        ];
                                        $letraSituacion = isset($mapeoInverso[$respuesta['id']]) ? $mapeoInverso[$respuesta['id']] : '';
                                    @endphp
                                    
                                    if ("{{ $letraSituacion }}" === 'J') {
                                        console.log("Marcando 'Ninguna de las anteriores'");
                                        checkboxNinguna.checked = true;
                                    } else {
                                        console.log("Marcando situación {{ $letraSituacion }}");
                                        const checkboxSituacion = document.querySelector(`.situacion-switch[data-situacion="{{ $letraSituacion }}"]`);
                                        if (checkboxSituacion) {
                                            checkboxSituacion.checked = true;
                                            
                                            // Mostrar contenedor de integrantes
                                            const contenedor = document.getElementById(`integrantesSituacion{{ $letraSituacion }}`);
                                            if (contenedor) {
                                                contenedor.style.display = 'block';
                                            }
                                        }
                                    }
                                @endif
                            @endforeach
                        @endif
                        
                        // Configurar eventos después de cargar los integrantes
                        configurarEventos();
                    } else {
                        console.error("Error al cargar integrantes:", response.message);
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'No se pudieron cargar los integrantes: ' + response.message
                        });
                    }
                } catch (e) {
                    console.error("Error al procesar la respuesta:", e);
                }
            } else {
                console.error("Error en la petición AJAX:", xhr.statusText);
            }
        };
        
        xhr.onerror = function() {
            console.error("Error de red en la petición AJAX");
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Ocurrió un error de red al cargar los integrantes'
            });
        };
        
        xhr.send();
    }
    
    // Configurar los eventos para los checkboxes
    function configurarEventos() {
        // Eventos para los checkboxes de situaciones A-I
        checkboxesSituacion.forEach(function(checkbox) {
            checkbox.addEventListener('change', function() {
                const situacion = this.dataset.situacion;
                const isChecked = this.checked;
                
                console.log(`Situación ${situacion} cambiada a ${isChecked}`);
                
                // Mostrar u ocultar contenedor de integrantes
                const contenedor = document.getElementById(`integrantesSituacion${situacion}`);
                contenedor.style.display = isChecked ? 'block' : 'none';
                
                // Si se marca una situación, desmarcar "Ninguna de las anteriores"
                if (isChecked) {
                    checkboxNinguna.checked = false;
                }
            });
        });
        
        // Evento para "Ninguna de las anteriores"
        checkboxNinguna.addEventListener('change', function() {
            const isChecked = this.checked;
            console.log(`"Ninguna de las anteriores" cambiada a ${isChecked}`);
            
            if (isChecked) {
                // Desmarcar todas las situaciones A-I
                checkboxesSituacion.forEach(function(checkbox) {
                    checkbox.checked = false;
                    
                    // Ocultar todos los contenedores de integrantes
                    const situacion = checkbox.dataset.situacion;
                    const contenedor = document.getElementById(`integrantesSituacion${situacion}`);
                    contenedor.style.display = 'none';
                });
            }
        });
    }
    
    // Configurar evento para el botón Guardar
    btnGuardar.addEventListener('click', function(e) {
        e.preventDefault();
        
        // Verificar si al menos una situación está seleccionada
        let algunaSituacionSeleccionada = false;
        checkboxesSituacion.forEach(function(checkbox) {
            if (checkbox.checked) algunaSituacionSeleccionada = true;
        });
        
        if (!algunaSituacionSeleccionada && !checkboxNinguna.checked) {
            Swal.fire({
                icon: 'warning',
                title: 'Validación',
                text: 'Debe seleccionar al menos una situación o "Ninguna de las anteriores"'
            });
            return;
        }
        
        // Verificar que para cada situación seleccionada se haya seleccionado al menos un integrante
        let validacionCorrecta = true;
        
        checkboxesSituacion.forEach(function(checkbox) {
            if (checkbox.checked) {
                const situacion = checkbox.dataset.situacion;
                const integrantesSeleccionados = document.querySelectorAll(`input[name="integrantes[${situacion}][]"]:checked`).length;
                
                if (integrantesSeleccionados === 0) {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Validación',
                        text: `Debe seleccionar al menos un integrante para la situación ${situacion}`
                    });
                    validacionCorrecta = false;
                    return;
                }
            }
        });
        
        if (!validacionCorrecta) return;
        
        // Preparar los datos para enviar
        const datos = {
            folio: folioInput.value,
            idintegrante: document.getElementById('idintegranteinput').value,
            documento_profesional: "{{ session('cedula') ?? '0' }}",
            _token: document.querySelector('input[name="_token"]').value,
            integrantes: {},
            situacionJ: checkboxNinguna.checked
        };
        
        // Obtener situaciones seleccionadas e integrantes
        checkboxesSituacion.forEach(function(checkbox) {
            if (checkbox.checked) {
                const situacion = checkbox.dataset.situacion;
                datos.integrantes[situacion] = [];
                
                // Obtener integrantes seleccionados para esta situación
                document.querySelectorAll(`input[name="integrantes[${situacion}][]"]:checked`).forEach(function(input) {
                    datos.integrantes[situacion].push(input.value);
                });
            }
        });
        
        console.log("Datos a enviar:", datos);
        
        // Enviar datos mediante AJAX
        const xhr = new XMLHttpRequest();
        xhr.open('POST', "{{ route('guardar_caracterizacion_hogar_p4') }}", true);
        xhr.setRequestHeader('Content-Type', 'application/json;charset=UTF-8');
        xhr.setRequestHeader('X-CSRF-TOKEN', document.querySelector('meta[name="csrf-token"]').getAttribute('content'));
        
        xhr.onload = function() {
            if (xhr.status >= 200 && xhr.status < 300) {
                try {
                    const response = JSON.parse(xhr.responseText);
                    
                    if (response.success) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Éxito',
                            text: 'Datos guardados correctamente',
                            confirmButtonText: 'Aceptar'
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: response.message || 'Ocurrió un error al guardar los datos'
                        });
                    }
                } catch (e) {
                    console.error("Error al procesar la respuesta:", e);
                }
            } else {
                console.error("Error en la petición AJAX:", xhr.statusText);
            }
        };
        
        xhr.onerror = function() {
            console.error("Error de red en la petición AJAX");
        };
        
        xhr.send(JSON.stringify(datos));
    });
    
    // Configurar los eventos de navegación
    document.getElementById('linkPregunta1').addEventListener('click', function() {
        const folio = folioInput.value;
        const idintegrante = document.getElementById('idintegranteinput').value;
        window.location.href = "{{ route('caracterizacion_hogar_p1', ['folio' => ':folio', 'idintegrante' => ':idintegrante']) }}"
            .replace(':folio', folio)
            .replace(':idintegrante', idintegrante);
    });
    
    document.getElementById('linkPregunta2').addEventListener('click', function() {
        const folio = folioInput.value;
        const idintegrante = document.getElementById('idintegranteinput').value;
        window.location.href = "{{ route('caracterizacion_hogar_p2', ['folio' => ':folio', 'idintegrante' => ':idintegrante']) }}"
            .replace(':folio', folio)
            .replace(':idintegrante', idintegrante);
    });
    
    document.getElementById('linkPregunta3').addEventListener('click', function() {
        const folio = folioInput.value;
        const idintegrante = document.getElementById('idintegranteinput').value;
        window.location.href = "{{ route('caracterizacion_hogar_p3', ['folio' => ':folio', 'idintegrante' => ':idintegrante']) }}"
            .replace(':folio', folio)
            .replace(':idintegrante', idintegrante);
    });
    
    // Configurar evento inicial
    configurarEventos();
});

// Función para redirigir a la vista de integrantes
function redirectToIntegrantes() {
    const folio = document.getElementById('folioContainer').getAttribute('folio');
    window.location.href = "{{ route('integrantes', ['folio' => ':folio']) }}".replace(':folio', folio);
}
</script>
@endsection
