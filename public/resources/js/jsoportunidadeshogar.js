   $('#modalOportunidades').on('shown.bs.modal', function () {
        actualizarOportunidadesModal();
        });

      let tablaAcercadas; // global

      $('#modalOportunidades').on('shown.bs.modal', function () {
        actualizarOportunidadesModal();
      });

      function actualizarOportunidadesModal() {
        $.ajax({
          url: recargaropotunidades,
          type: 'GET',
          dataType: 'json',
          data: { folio: $('#folioinput').val() },
          success: function(response) {

            // 🔥 Destruir DataTables antes de recargar
            if ($.fn.DataTable.isDataTable('#tablaAcercadas')) {
              $('#tablaAcercadas').DataTable().destroy();
            }
            if ($.fn.DataTable.isDataTable('#tablaEfectivas')) {
              $('#tablaEfectivas').DataTable().destroy();
            }
            if ($.fn.DataTable.isDataTable('#tablaNoEfectivas')) {
              $('#tablaNoEfectivas').DataTable().destroy();
            }

            // 🔄 Actualiza contenido
            $('#tablaAcercadas tbody').html(response.acercadas);
            $('#tablaEfectivas tbody').html(response.efectivas);
            $('#tablaNoEfectivas tbody').html(response.noefectivas);

            // ✅ Vuelve a inicializar
            tablaAcercadas = $('#tablaAcercadas').DataTable({
              columnDefs: [
                { orderable: false, targets: 0 }
              ]
            });
            $('#tablaEfectivas').DataTable();
            $('#tablaNoEfectivas').DataTable();

            // ✅ Reasigna check all
            $('#checkAllAcercadas').on('click', function () {
              let isChecked = $(this).is(':checked');
              tablaAcercadas.rows().every(function () {
                let node = this.node();
                $(node).find('.check-acercada').prop('checked', isChecked);
              });
            });
          },
          error: function(xhr) {
            console.error('Error al cargar oportunidades', xhr.responseText);
          }
        });
      }


      function cambiarestado(estado) {
   let seleccionados = [];

  // Usa el API de DataTables para recorrer todas las filas
  tablaAcercadas.rows().every(function () {
    let row = this.node();
    let checkbox = $(row).find('.check-acercada');

    if (checkbox.is(':checked')) {
      let idIntegrante = $(row).find('td:eq(1)').text().trim();
       let idOportunidad = $(row).find('td:eq(2)').text().trim();
      let folio = $(row).find('td:eq(3)').text().trim();
      let linea = $('#linea').val();

      seleccionados.push({
        idintegrante: idIntegrante,
        folio: folio,
        idoportunidad: idOportunidad,
        linea:linea
      });
    }
  });

  if (seleccionados.length === 0) {
    Swal.fire({
        title: 'Información',
        text: "Selecciona como minimo a un integrante para mover",
        icon: 'info',
        confirmButtonText: 'Aceptar'
      });

    return;
  }

  console.log("Seleccionados:", seleccionados);
  console.log("Nuevo estado:", estado);


  // Ejemplo: enviar al backend (descomenta si tienes la ruta en Laravel)
  $.ajax({
    url: cambiarestdooportunidadesmasivoh,
    type: 'get',
    data: {
      oportunidades: seleccionados,
      nuevo_estado: estado
    },
    success: function(response) {
      Swal.fire({
        title: 'Información',
        text: response.mensaje,
        icon: 'success',
        confirmButtonText: 'Aceptar'
      });

      location.reload();
    }
  });
  
}


function agregaroportunidad(idoportunidad,aplica_hogar_integrante,estado_oportunidad) {
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
     url: agregaroportunidadh,
     data: {
         folio: folio,
         idintegrante: idintegrante,
         idoportunidad:idoportunidad,
          estado_oportunidad:estado_oportunidad,
         usuario: usuariogestor,
         linea: $('#linea').val(),
         tabla:'t1_oportunidad_hogares',
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
     url:  veroportunidad,  
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


$(document).ready(function() {
    // Realizar la solicitud AJAX
    paginacargando();
    let dataTable = $('#example').DataTable();
    $.ajax({
        url:  oportunidadhogarglobal, // Cambia por la ruta de tu función
        data: {folio:$('#folioinput').val()},
        type: 'GET', // O POST según sea tu caso
        success: function(response) {
            // Actualizar el contenido del tbody
            dataTable.destroy();
            $('#oportunidades').html(response.oportunidades);
            $('#modal').html(response.modal);
            dataTable = $('#example').DataTable();
            paginalista();
            $('.selectpicker').selectpicker();
        $('.filter-option-inner-inner').css('font-size','13px');
        },
        error: function(xhr, status, error) {
            console.error('Error al cargar las oportunidades:', error);
        }
    });
});