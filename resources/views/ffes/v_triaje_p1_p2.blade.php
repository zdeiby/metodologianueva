@extends('componentes.navlateral')

@section('title', 'Triaje - Preguntas 1 y 2')

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
  
  .invalid-checkbox {
      border: 1px solid red;
      border-radius: 4px;
      padding: 10px;
  }
</style>

<div class="container">
    <img width="100%" height="100px" src="{{ asset('imagenes/headers.png') }}" alt="" class=""  >

    <div class="accordion" id="accordionExample" >
        <div class="accordion-item" id="l1e1">
            <div class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <div>
                        <span class="badge bg-primary" id=""  style="font-size:15px">Triaje - Preguntas Iniciales</span> 
                        <span class="badge bg-success ms-auto" id="folioContainer" folio="{{ $folio }}" style="font-size:15px">folio: {{ $folio }}</span>
                    </div>
                </button>
                <br>
            </div>

            <div>
                <span class="badge bg-success mt-2" id="folio">{{ $folio }}</span>
                <span class="badge bg-primary" style="background:#a80a85 !important; color:white" id="nombre">
                    {{ $datosIntegrante->nombre1 }} {{ $datosIntegrante->nombre2 }} {{ $datosIntegrante->apellido1 }} {{ $datosIntegrante->apellido2 }}
                </span>
                <span class="badge bg-primary" style="background:#0dcaf0 !important; color:white" id="sexointegrante">
                    @if(isset($datosIntegrante->sexo) && $datosIntegrante->sexo == 13)
                        Mujer
                    @else
                        Hombre
                    @endif
                </span>
                <span class="badge bg-primary" style="background:#FF8803 !important; color:white" id="edadintegrante">
                    @if(isset($datosIntegrante->edad))
                        {{ $datosIntegrante->edad }} años
                    @endif
                </span>
            </div>

            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <div class="row">
                        <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item" role="presentation" style="cursor:pointer">
                                <a id="triaje" class="nav-link active">Triaje</a>
                            </li>
                            <li class="nav-item" role="presentation" style="cursor:pointer">
                                <a id="caracterizacionIntegrantes" class="nav-link">Caracterización integrantes</a>
                            </li>
                            <li class="nav-item" role="presentation" style="cursor:pointer">
                                <a id="caracterizacionHogar" class="nav-link">Caracterización hogar</a>
                            </li>
                            
                        </ul>

                        <div id="myTabContent" class="tab-content"><br>
                            <div class="tab-pane fade active show" id="home" role="tabpanel" aria-labelledby="identificacion">
                                <form id="formTriajeP1P2" class="row g-3 was-validated">     
                                    <input type="hidden" name="folio" id="folioinput" value="{{ $folio }}">
                                    <input type="hidden" name="idintegrante" id="idintegrante" value="{{ $idintegrante }}">
                                    <input type="hidden" name="usuario" id="usuario" value="{{ session('documento') }}">
                                    
                                    <span class="badge bg-primary" id="" style="font-size:15px; background:#a80a85 !important">Triaje - Preguntas Iniciales</span>

                                    <div class="alert alert-info" role="alert" style="background-color: #d1ecf1; border-color: #bee5eb; color: #0c5460;">
                                        <b>Instrucciones:</b> Complete las siguientes preguntas seleccionando las opciones correspondientes para el integrante.
                                    </div>

                                    <div class="card mb-4">
                                        <div class="card-header bg-light">
                                            <h5 class="mb-0">Tipología familiar</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col-md-8">
                                                    <p class="mb-0"><strong>3.1 ¿Cuál de las siguientes tipologías describe mejor la estructura de tu familia?</strong></p>
                                                    <p class="text-muted small">Seleccione si corresponde a un hogar de acogida</p>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" id="hogar_acogida" name="hogar_acogida" value="1" 
                                                            {{ isset($respuestas->hogar_acogida) && $respuestas->hogar_acogida == 1 ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="hogar_acogida">
                                                            <strong>N. Hogar de Acogida</strong>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card mb-4">
                                        <div class="card-header bg-light">
                                            <h5 class="mb-0">Labores de cuidado</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col-md-8">
                                                    <p class="mb-0"><strong>3.3.1 ¿En tu hogar se realizan labores de cuidado directo no remuneradas?</strong></p>
                                                    <p class="text-muted small">Seleccione si el integrante realiza labores de cuidado de niños, niñas y adolescentes</p>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" id="cuidadora_nna" name="cuidadora_nna" value="1"
                                                            {{ isset($respuestas->cuidadora_nna) && $respuestas->cuidadora_nna == 1 ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="cuidadora_nna">
                                                            <strong>C. Cuidadora de niños, niñas y adolescentes</strong>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </form>
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
    $(document).ready(function() {
        // Manejar el evento de guardar
        $('#btnGuardar').click(function() {
            // Mostrar indicador de carga
            Swal.fire({
                title: 'Guardando...',
                text: 'Por favor espere',
                allowOutsideClick: false,
                didOpen: () => {
                    Swal.showLoading();
                }
            });
            
            // Obtener datos del formulario
            var formData = $('#formTriajeP1P2').serialize();
            
            // Enviar datos al servidor
            $.ajax({
                url: "{{ route('guardar_triaje_p1_p2') }}",
                type: "POST",
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    Swal.fire({
                        icon: 'success',
                        title: '¡Éxito!',
                        text: 'Datos guardados correctamente',
                        confirmButtonText: 'Aceptar'
                    });
                },
                error: function(xhr, status, error) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Ocurrió un error al guardar los datos. Por favor, inténtelo de nuevo.',
                        confirmButtonText: 'Aceptar'
                    });
                    console.error(error);
                }
            });
        });
        
        // Redirección para las pestañas
        $('#caracterizacionIntegrantes').click(function() {
            // Redireccionar a la vista de caracterización de integrantes
            // Aquí debes poner la URL correcta
            window.location.href = "{{ route('caracterizacionffes') }}";
        });
        
        $('#caracterizacionHogar').click(function() {
            // Redireccionar a la vista de caracterización de hogar
            window.location.href = "{{ route('caracterizacionffeshogar') }}";
        });
    });
    
    function redirectToIntegrantes() {
        // Redireccionar a la vista de integrantes
        // Aquí debes poner la URL correcta
        window.location.href = "{{ route('index') }}";
    }
</script>
@endsection