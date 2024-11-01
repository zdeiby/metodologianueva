@extends('componentes.navlateral')

@section('title', 'Oportunidades')

@section('content')


</style>

<div class="container">
    <img width="100%" height="100px" src="{{ asset('imagenes/headers.png') }}" alt="" class="sticky-top">
</div>

<!-- Vista para PC -->
<div class="container" id="responsivepc">
    <div class="table-responsive">
        <table id="example" class="table table-hover table-success  " style="width:100%">
            <thead>
                <tr>
                    <th>Nombre de la Oportunidad</th>
                    <th>Descripción</th>
                    <th>Alcance</th>
                    <th>Fecha de Inicio</th>
                    <th>Fecha Límite de Acercamiento</th>
                    <th>Ver Oportunidad</th>
                    <th>Integrantes aplican</th>
                    <th>Acercar oportunidad</th>
                </tr>
            </thead>
            <tbody>
                {!! $oportunidades !!}
            </tbody>
            <tfoot>
               
            </tfoot>
        </table>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/js/bootstrap-select.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Inicializa el selectpicker
        $('.selectpicker').selectpicker();
    });
</script>
@endsection
