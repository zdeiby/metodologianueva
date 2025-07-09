@extends('componentes.navlateral')

@section('title', 'Oportunidades')

@section('content')


</style>

<div class="container">
    <img width="100%" height="100px" src="{{ asset('imagenes/headers.png') }}" alt="" >
</div>
<br>
<div class="text-center" style="font-size:20px; color:#0dcaf0">
    <label for=""><b>Oportunidades para hogares</b></label>
</div>
<hr>
<!-- Vista para PC -->
<div class="table-responsive" >
        <table id="example" class="table table-striped " >
            <thead>
                <tr>
                     <th class="align-middle text-center" >ID</th>
                    <th >Nombre de la Oportunidad</th>
                    <th class="align-middle text-center" >Aliado</th>
                    <th class="align-middle text-center" >Categoria</th>
                    <!-- <th>Descripción</th>
                    <th>Ruta</th> -->
                    <th class="align-middle text-center">Fecha Inicio oportunidad</th>
                    <th class="align-middle text-center">Fecha Límite de Acercamiento</th>
                    <th class="align-middle text-center">Ver Oportunidad</th>
                    <th class="align-middle text-center">Integrantes que aplican</th>
                    <th class="align-middle text-center">Acercar oportunidad</th>
                </tr>
            </thead>
            <tbody style="font-size:15px" class="align-middle text-center">
                {!! $oportunidades !!}
            </tbody>
            <tfoot>
               
            </tfoot>
        </table>
    </div>



<script src="{{ asset('assets/jquery/jquery.js') }}"></script>
<script>
    // document.addEventListener('DOMContentLoaded', function() {
    //     // Inicializa el selectpicker
    //     $('.selectpicker').selectpicker();
    //     $('.filter-option-inner-inner').css('font-size','13px');
    // });
</script>

<script>

function agregaroportunidad(idoportunidad,aplica_hogar_integrante, estado_oportunidad) {
    // Obtiene el select específico usando el id de oportunidad
    let select = document.getElementById(`speaker_${idoportunidad}`);
    let selectedOption = select.options[select.selectedIndex];
console.log(aplica_hogar_integrante, 'HOLAAAAAAAAAAAAAAA')
    // Obtén los valores directamente
    let idintegrante = selectedOption.value;
    let folio = selectedOption.getAttribute('data-folio');

    console.log("Value:", idintegrante);
    console.log("Data-Folio:", folio);
        $('#acercar'+idoportunidad).attr('disabled', 'disabled');

    $.ajax({
     url: './agregaroportunidad',
     data: {
         folio: folio,
         idintegrante: idintegrante,
         idoportunidad:idoportunidad,
         usuario: '<?= Session::get('cedula') ?>',
         linea:'0',
         tabla:'t1_oportunidad_hogares',
         estado_oportunidad:estado_oportunidad,
         aplica_hogar_integrante:aplica_hogar_integrante,

     },
     method: "GET",
     dataType: 'JSON',
     success: function(data) {
              $('#acercar'+idoportunidad).removeAttr('disabled');

        selectedOption.setAttribute('data-id', data.insertedId);
        if (data.success && data.estado_oportunidad == '1') {
        $('#acercar'+idoportunidad).attr('disabled', 'disabled');
          $('#acercar'+idoportunidad).removeClass('btn btn-primary').addClass('btn btn-danger');
          $('#acercar'+idoportunidad).html('Acercada');
          $('#efectiva'+idoportunidad).removeAttr('disabled');
          $('#efectiva'+idoportunidad).removeClass('btn btn-success').addClass('btn btn-success');
          $('#efectiva'+idoportunidad).html('Efectiva');
          $('#noefectiva'+idoportunidad).removeAttr('disabled');
          $('#noefectiva'+idoportunidad).removeClass('btn btn-danger').addClass('btn btn-danger');
          $('#noefectiva'+idoportunidad).html('No efectiva');
          Swal.close();
      }else if (data.success && data.estado_oportunidad == '2') {
            $('#acercar'+idoportunidad).removeAttr('disabled');
            $('#acercar'+idoportunidad).removeClass('btn btn-danger').addClass('btn btn-primary');
            $('#acercar'+idoportunidad).html('Acercar');

            $('#efectiva'+idoportunidad).attr('disabled', 'disabled');
            $('#efectiva'+idoportunidad).html('Efectiva');
            $('#noefectiva'+idoportunidad).attr('disabled', 'disabled');
            $('#noefectiva'+idoportunidad).html('No efectiva');
          Swal.close();
      }
      else if (data.success && data.estado_oportunidad == '3') {
            $('#acercar'+idoportunidad).removeAttr('disabled');
            $('#acercar'+idoportunidad).removeClass('btn btn-danger').addClass('btn btn-primary');
            $('#acercar'+idoportunidad).html('Acercar');

            $('#noefectiva'+idoportunidad).attr('disabled', 'disabled');
            $('#noefectiva'+idoportunidad).removeClass('btn btn-primary').addClass('btn btn-danger');
            $('#noefectiva'+idoportunidad).html('No efectiva');
            $('#efectiva'+idoportunidad).attr('disabled', 'disabled');
            $('#efectiva'+idoportunidad).html('Efectiva');
          Swal.close();
      }
      
      else {
        $('#acercar'+idoportunidad).removeAttr('disabled');
            $('#acercar'+idoportunidad).removeClass('btn btn-danger').addClass('btn btn-primary');
            $('#acercar'+idoportunidad).html('Acercar');
            $('#efectiva'+idoportunidad).attr('disabled', 'disabled');
            $('#efectiva'+idoportunidad).html('Efectiva');
            $('#noefectiva'+idoportunidad).attr('disabled', 'disabled');
            $('#noefectiva'+idoportunidad).html('No efectiva');
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
          $('#efectiva'+idoportunidad).removeAttr('disabled');
          $('#efectiva'+idoportunidad).removeClass('btn btn-success').addClass('btn btn-success');
          $('#efectiva'+idoportunidad).html('Efectiva');
          $('#noefectiva'+idoportunidad).removeAttr('disabled');
          $('#noefectiva'+idoportunidad).removeClass('btn btn-danger').addClass('btn btn-danger');
          $('#noefectiva'+idoportunidad).html('No efectiva');
          Swal.close();
      }
     else if (data.estado == '2') {
            $('#acercar'+idoportunidad).removeAttr('disabled');
            $('#acercar'+idoportunidad).removeClass('btn btn-danger').addClass('btn btn-primary');
            $('#acercar'+idoportunidad).html('Acercar');

            $('#efectiva'+idoportunidad).attr('disabled', 'disabled');
            $('#efectiva'+idoportunidad).html('Efectiva');
            $('#noefectiva'+idoportunidad).attr('disabled', 'disabled');
            $('#noefectiva'+idoportunidad).html('No efectiva');
        //   $('#acercar'+idoportunidad).attr('disabled', 'disabled');
        //   $('#acercar'+idoportunidad).removeClass('btn btn-primary').addClass('btn btn-danger');
        //   $('#acercar'+idoportunidad).html('Acercada');
          
          Swal.close();
      }
    else  if (data.estado == '3') {
            $('#acercar'+idoportunidad).removeAttr('disabled');
            $('#acercar'+idoportunidad).removeClass('btn btn-danger').addClass('btn btn-primary');
            $('#acercar'+idoportunidad).html('Acercar');

            $('#noefectiva'+idoportunidad).attr('disabled', 'disabled');
            $('#noefectiva'+idoportunidad).removeClass('btn btn-primary').addClass('btn btn-danger');
            $('#noefectiva'+idoportunidad).html('No efectiva');
            $('#efectiva'+idoportunidad).attr('disabled', 'disabled');
            $('#efectiva'+idoportunidad).html('Efectiva');
            Swal.close();
    }    else {
            $('#acercar'+idoportunidad).removeAttr('disabled');
            $('#acercar'+idoportunidad).removeClass('btn btn-danger').addClass('btn btn-primary');
            $('#acercar'+idoportunidad).html('Acercar');
            $('#efectiva'+idoportunidad).attr('disabled', 'disabled');
            $('#efectiva'+idoportunidad).html('Efectiva');
            $('#noefectiva'+idoportunidad).attr('disabled', 'disabled');
            $('#noefectiva'+idoportunidad).html('No efectiva');
           
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
