@extends('componentes.navlateral')

@section('title', 'Oportunidades')

@section('content')


</style>

<div class="container">
    <img width="100%" height="100px" src="{{ asset('imagenes/headers.png') }}" alt="" >
</div>
<br>
<div class="text-center" style="font-size:20px; color:#0dcaf0">
    <label for=""><b>Oportunidades para integrantes</b></label>
</div>
<hr>
<button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#modalOportunidades">
  Ver Oportunidades Acercadas
</button>
<!-- Vista para PC -->
<!-- <div class="container table-responsive" id="responsivepc" style="font-size:15px"> -->
    <div class="table-responsive" >
        <table id="example" class="table table-striped " >
            <thead>
                <tr>
                    <th class="align-middle text-center">ID</th>
                    <th >Nombre de la Oportunidad</th>
                    <th class="align-middle text-center">Aliado</th>
                    <th class="align-middle text-center">Categoria</th>
                    <!-- <th>Descripción</th>
                    <th>Ruta</th> -->
                    <th class="align-middle text-center">Fecha Inicio oportunidad</th>
                    <th class="align-middle text-center">Fecha Límite Acercamiento</th>
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
<!-- </div> -->


<div class="modal fade" id="modalOportunidades" tabindex="-1" aria-labelledby="modalOportunidadesLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalOportunidadesLabel">Integrantes con Oportunidades</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs mb-3" id="oportunidadTabs" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="acercadas-tab" data-bs-toggle="tab" data-bs-target="#acercadas" type="button" role="tab">Acercadas</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="efectivas-tab" data-bs-toggle="tab" data-bs-target="#efectivas" type="button" role="tab">Efectivas</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="noefectivas-tab" data-bs-toggle="tab" data-bs-target="#noefectivas" type="button" role="tab">No Efectivas</button>
          </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">

          <!-- Acercadas -->
          <div class="tab-pane fade show active" id="acercadas" role="tabpanel">
            <table id="tablaAcercadas" class="table table-bordered table-striped" style="width:100%">
              <thead>
                <tr>
                  <th> <input type="checkbox" class="text-center">Seleccionar Integrantes </th>
                  <th>ID Integrante</th>
                  <th>Folio</th>
                  <th>Nombre Completo</th>
                  <th>Oportunidad</th>
                  <th>Estado</th>
                  <th>Aplica a</th>
                </tr>
              </thead>
              <tbody>
                @foreach($oportunidades_acercadas_integrantes->where('estado_oportunidad', '1') as $op)
                  <tr>
                     <td class="text-center"><input type="checkbox" class="check-acercada"></td>
                    <td>{{ $op->idintegrante }}</td>
                    <td>{{ $op->folio }}</td>
                    <td>{{ trim($op->nombre1 . ' ' . ($op->nombre2 ?? '') . ' ' . $op->apellido1 . ' ' . ($op->apellido2 ?? '')) }}</td>
                    <td>{{ $op->nombre_oportunidad }}</td>
                    <td>{{ $op->estado_oportunidad_nombre }}</td>
                    <td>{{ $op->aplica_hogar_integrante_nombre }}</td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>

                  <div class="mt-3 text-end">
  <button class="btn btn-success" onclick="cambiarestado(2)">Marcar como Efectivas</button>
  <button class="btn btn-danger" onclick="cambiarestado(3)">Marcar como No Efectivas</button>
</div>

          <!-- Efectivas -->
          <div class="tab-pane fade" id="efectivas" role="tabpanel">
            <table id="tablaEfectivas" class="table table-bordered table-striped" style="width:100%">
              <thead>
                <tr>
                  <th>ID Integrante</th>
                  <th>Folio</th>
                  <th>Nombre Completo</th>
                  <th>Oportunidad</th>
                  <th>Estado</th>
                  <th>Aplica a</th>
                </tr>
              </thead>
              <tbody>
                @foreach($oportunidades_acercadas_integrantes->where('estado_oportunidad', '2') as $op)
                  <tr>
                    <td>{{ $op->idintegrante }}</td>
                    <td>{{ $op->folio }}</td>
                    <td>{{ trim($op->nombre1 . ' ' . ($op->nombre2 ?? '') . ' ' . $op->apellido1 . ' ' . ($op->apellido2 ?? '')) }}</td>
                    <td>{{ $op->nombre_oportunidad }}</td>
                    <td>{{ $op->estado_oportunidad_nombre }}</td>
                    <td>{{ $op->aplica_hogar_integrante_nombre }}</td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>

          <!-- No efectivas -->
          <div class="tab-pane fade" id="noefectivas" role="tabpanel">
            <table id="tablaNoEfectivas" class="table table-bordered table-striped" style="width:100%">
              <thead>
                <tr>
                  <th>ID Integrante</th>
                  <th>Folio</th>
                  <th>Nombre Completo</th>
                  <th>Oportunidad</th>
                  <th>Estado</th>
                  <th>Aplica a</th>
                </tr>
              </thead>
              <tbody>
                @foreach($oportunidades_acercadas_integrantes->where('estado_oportunidad', '3') as $op)
                  <tr>
                    <td>{{ $op->idintegrante }}</td>
                    <td>{{ $op->folio }}</td>
                    <td>{{ trim($op->nombre1 . ' ' . ($op->nombre2 ?? '') . ' ' . $op->apellido1 . ' ' . ($op->apellido2 ?? '')) }}</td>
                    <td>{{ $op->nombre_oportunidad }}</td>
                    <td>{{ $op->estado_oportunidad_nombre }}</td>
                    <td>{{ $op->aplica_hogar_integrante_nombre }}</td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<script src="{{ asset('assets/jquery/jquery.js') }}"></script>
<script>


  $(document).ready(function () {
    $('#tablaAcercadas').DataTable({
      language: { url: '//cdn.datatables.net/plug-ins/1.13.6/i18n/es-ES.json' }
    });
    $('#tablaEfectivas').DataTable({
      language: { url: '//cdn.datatables.net/plug-ins/1.13.6/i18n/es-ES.json' }
    });
    $('#tablaNoEfectivas').DataTable({
      language: { url: '//cdn.datatables.net/plug-ins/1.13.6/i18n/es-ES.json' }
    });

      // Checkbox maestro
    $('#checkAllAcercadas').on('click', function () {
      let isChecked = $(this).is(':checked');
      $('.check-acercada').prop('checked', isChecked);
    });

    // Si se desmarca alguno manualmente, desmarca el "seleccionar todos"
    $(document).on('click', '.check-acercada', function () {
      if (!$(this).is(':checked')) {
        $('#checkAllAcercadas').prop('checked', false);
      } else {
        // Si todos están seleccionados, marca el principal
        let allChecked = $('.check-acercada').length === $('.check-acercada:checked').length;
        $('#checkAllAcercadas').prop('checked', allChecked);
      }
    });
  });

function cambiarestado(estado) {
  let seleccionados = [];

  $('#tablaAcercadas tbody .check-acercada:checked').each(function () {
    let fila = $(this).closest('tr');
    let idIntegrante = fila.find('td:eq(1)').text().trim(); // Columna 1 = ID Integrante
    let folio = fila.find('td:eq(2)').text().trim();        // Columna 2 = Folio

    seleccionados.push({
      idintegrante: idIntegrante,
      folio: folio
    });
  });

  if (seleccionados.length === 0) {
    alert("Por favor selecciona al menos un integrante.");
    return;
  }

  console.log("Seleccionados:", seleccionados);
  console.log("Nuevo estado:", estado);

  // Ejemplo: enviar al backend (descomenta si tienes la ruta en Laravel)
  /*
  $.ajax({
    url: '/cambiarestado',
    type: 'POST',
    data: {
      _token: '{{ csrf_token() }}',
      oportunidades: seleccionados,
      nuevo_estado: estado
    },
    success: function(response) {
      alert(response.mensaje);
      location.reload();
    }
  });
  */
}




    // document.addEventListener('DOMContentLoaded', function() {
    //     // Inicializa el selectpicker
    //     $('.selectpicker').selectpicker();
    //     $('.filter-option-inner-inner').css('font-size','13px');
    // });


//     $(document).ready(function () {
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
         estado_oportunidad:estado_oportunidad,
         usuario: '<?= Session::get('cedula') ?>',
         linea:'0',
         tabla:'t1_oportunidad_integrantes',
         aplica_hogar_integrante:aplica_hogar_integrante,

     },
     method: "GET",
     dataType: 'JSON',
     success: function(data) {
              $('#acercar'+idoportunidad).removeAttr('disabled');
        console.log(data)
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
         tabla:'t1_oportunidad_integrantes',
     },
     method: "GET",
     dataType: 'JSON',
     success: function(data) {
        console.log(data);
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
