@extends('componentes.navlateral')

@section('title', 'Oportunidades')

@section('content')


</style>

<div class="container">
    <img width="100%" height="100px" src="{{ asset('imagenes/headers.png') }}" alt="" >
</div>
<br>
<div class="text-center" style="font-size:25px; color:#0dcaf0">
    <label for=""><b>Oportunidades para hogares</b></label>
</div>
<hr>
<!-- Vista para PC -->
<div class="container" id="responsivepc">
    <div class="" >
        <table id="example" class="table table-striped " >
            <thead>
                <tr>
                    <th>Nombre de la Oportunidad</th>
                    <th>Descripción</th>
                    <th>Ruta</th>
                    <th>Fecha de Inicio</th>
                    <th>Fecha Límite de Acercamiento</th>
                    <th class="align-middle text-center">Ver Oportunidad</th>
                    <th class="align-middle text-center">Integrantes que aplican</th>
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
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Oportunidad número 123</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modlabel-body container"> <br>
          <div class="container" >
            <br>
            <label><b>Nombre de la Oportunidad:</b> oportunidad</label> <hr>
                    <label><b>Descripción:</b> 	descripción de oportunidad</label> <hr>
                    <label><b>Alcance:</b> alcance de la oportunidad</label> <hr>
                    <label><b>Fecha de Inicio:</b> 2024-10-21 00:00:00</label> <hr>
                    <label><b>Fecha Límite de Acercamiento:</b> 2024-10-21 00:00:00</label>  <br><br>
            </div><br>

                    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Salir</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>


<script src="{{ asset('assets/jquery/jquery.js') }}"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Inicializa el selectpicker
        $('.selectpicker').selectpicker();
        $('.filter-option-inner-inner').css('font-size','13px');
    });
</script>

<script>

function agregaroportunidad(idoportunidad) {
    // Obtiene el select específico usando el id de oportunidad
    let select = document.getElementById(`speaker_${idoportunidad}`);
    let selectedOption = select.options[select.selectedIndex];

    // Obtén los valores directamente
    let idintegrante = selectedOption.value;
    let folio = selectedOption.getAttribute('data-folio');

    console.log("Value:", idintegrante);
    console.log("Data-Folio:", folio);
    $.ajax({
     url: './agregaroportunidad',
     data: {
         folio: folio,
         idintegrante: idintegrante,
         usuario: '<?= session('documento') ?>',
         idoportunidad: idoportunidad,
         tabla:'t1_oportunidad_hogares',
     },
     method: "GET",
     dataType: 'JSON',
     success: function(data) {
        selectedOption.setAttribute('data-id', data.insertedId);
        console.log(data)
      if (data.estado == '1') {
          $('#acercar'+idoportunidad).attr('disabled', 'disabled');
          $('#acercar'+idoportunidad).removeClass('btn btn-primary').addClass('btn btn-danger');
          $('#acercar'+idoportunidad).html('Acercada');
          Swal.close();
      } else {
          $('#acercar'+idoportunidad).removeAttr('disabled');
          $('#acercar'+idoportunidad).removeClass('btn btn-danger').addClass('btn btn-primary');
          $('#acercar'+idoportunidad).html('Acercar');
          Swal.close();
      }
     },
     error: function(xhr, status, error) {
         console.log(xhr.responseText);
     }
 });
}

function habilitaboton(idoportunidad){
  Swal.fire({
    title: 'Cargando',
    text: 'Por favor espera...',
    allowOutsideClick: false,
    didOpen: () => {
        Swal.showLoading(); // Muestra el spinner de carga
    }
});
  let select = document.getElementById(`speaker_${idoportunidad}`);
    let selectedOption = select.options[select.selectedIndex];

    // Obtén los valores directamente
    let idintegrante = selectedOption.value;
    let id = selectedOption.getAttribute('data-id');
    let folio = selectedOption.getAttribute('data-folio');
  $.ajax({
     url: './veroportunidad',
     data: {
         folio: folio,
         idintegrante: idintegrante,
         idoportunidad: idoportunidad,
         id:id,tabla:'t1_oportunidad_hogares'
     },
     method: "GET",
     dataType: 'JSON',
     success: function(data) {
      if (data.estado == '1') {
          $('#acercar'+idoportunidad).attr('disabled', 'disabled');
          $('#acercar'+idoportunidad).removeClass('btn btn-primary').addClass('btn btn-danger');
          $('#acercar'+idoportunidad).html('Acercada');
          Swal.close();
      } else {
          $('#acercar'+idoportunidad).removeAttr('disabled');
          $('#acercar'+idoportunidad).removeClass('btn btn-danger').addClass('btn btn-primary');
          $('#acercar'+idoportunidad).html('Acercar');
          Swal.close();
      }

     },
     error: function(xhr, status, error) {
         console.log(xhr.responseText);
     }
 });
}
      




</script>
@endsection
