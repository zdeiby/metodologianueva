@extends('componentes.navlateral')

@section('title', 'Triaje - Preguntas 1 y 2')

@section('content')
<div class="container">
    <img width="100%" height="100px" src="{{ asset('imagenes/headers.png') }}" alt="" class="isticky-top"> <hr>
    
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Triaje - Preguntas Iniciales</h5>
        </div>
        <div class="card-body">
            <div class="row mb-4">
                <div class="col-md-12">
                    <h6>Datos del integrante:</h6>
                    <p>
                        <strong>Nombre:</strong> {{ $datosIntegrante->nombre1 }} {{ $datosIntegrante->nombre2 }} {{ $datosIntegrante->apellido1 }} {{ $datosIntegrante->apellido2 }}
                    </p>
                </div>
            </div>
            
            <form id="formTriajeP1P2">
                <input type="hidden" name="folio" id="folio" value="{{ $folio }}">
                <input type="hidden" name="idintegrante" id="idintegrante" value="{{ $idintegrante }}">
                <input type="hidden" name="usuario" id="usuario" value="{{ session('documento') }}">
                
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <th width="5%">#</th>
                                <th width="30%">ENTRADA A LA PREGUNTA</th>
                                <th width="15%">PREGUNTA</th>
                                <th width="15%">NOMBRE</th>
                                <th width="15%">QUE REGISTRA</th>
                                <th width="20%">RESPUESTA</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>3.1</td>
                                <td>¿Cuál de las siguientes tipologías describe mejor la estructura de tu familia?</td>
                                <td>TIPOLOGIA</td>
                                <td>Única respuesta</td>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="hogar_acogida" id="hogar_acogida" value="1" 
                                            {{ isset($respuestas->hogar_acogida) && $respuestas->hogar_acogida == 1 ? 'checked' : '' }}>
                                        <label class="form-check-label" for="hogar_acogida">
                                            N. Hogar de Acogida
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3.3.1</td>
                                <td>¿En tu hogar se realizan labores de cuidado directo no remuneradas?</td>
                                <td>LABORES DE CUIDADO 2</td>
                                <td>Lista de selección múltiple, la respuesta despliega los integrantes del hogar que realizan estas labores.</td>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="cuidadora_nna" id="cuidadora_nna" value="1"
                                            {{ isset($respuestas->cuidadora_nna) && $respuestas->cuidadora_nna == 1 ? 'checked' : '' }}>
                                        <label class="form-check-label" for="cuidadora_nna">
                                            C. Cuidadora de niños, niñas y adolescentes.
                                        </label>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <div class="row mt-4">
                    <div class="col-md-12 text-end">
                        <button type="button" class="btn btn-primary" id="btnGuardar">
                            <i class="bi bi-save"></i> Guardar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

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
    });
</script>
@endsection