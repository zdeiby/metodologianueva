@extends('componentes.navlateral')

@section('title', 'Página de inicio')

@section('content')
    <style>/* Mostrar datos para dispositivos de pantalla grande (PC) */
    /* Estilo permanente para la cabecera de Handsontable */
    .ht_clone_top thead th {
    /* background-color: #0dcaf0 !important;
    color: #ffffff !important; */
    text-align: center;
    border: 1px solid #dddddd;
}

/* Filas alternas (pares) con un color de fondo diferente */
.ht_master .htCore tr:nth-child(even) td {
    background-color: #f5f5f5 !important;
}

/* Bordes de las celdas */
.ht_master .htCore td {
    border: 1px solid #dddddd;
}
.handsontable td {
  vertical-align: middle  !important; 
    }


.handsontable button {
        text-align: center  !important; /* Centra horizontalmente el contenido del botón */
        vertical-align: middle  !important;  /* Centra verticalmente el contenido del botón */
        display: block; /* Asegura que el botón se comporte como un bloque */
        margin: auto; /* Centra el botón dentro de la celda */
    }

    .cell-red {
    background-color: red !important;
    color: white !important;
}

.swal-title-small {
    font-size: 20px !important; /* Cambia el tamaño */
    font-weight: normal;        /* Opcional: menos negrita */
    color: #00BFFF !important;  
}

</style>


<style>
    /* Ajusta el área de opciones del filtro para permitir scroll horizontal */
    .htFiltersMenu .htUISelect {
        overflow-x: auto !important; /* Activa el scroll horizontal */
        overflow-y: auto !important; /* Mantiene el scroll vertical */
        white-space: nowrap !important; /* Evita que el texto se divida en varias líneas */
    }
</style>

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
<!-- <form class="d-flex pb-4" role="search">
      <input class="form-control me-2" type="search" placeholder="Buscar folio o representante" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Buscar</button>
    </form> -->


        <div class="accordion" id="accordionExample" >
        <div class="accordion-item" id="l1e1">
            <div class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              <div>
                <span class="badge bg-primary" id=""  style="font-size:15px">Alertas Gestor</span>
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

    <div id="collapseOne" class="accordion-collapse collapse show pb-2" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <div class="row">
      <ul class="nav nav-tabs" role="tablist">
      <li class="nav-item" role="presentation"  style="cursor:pointer">
        <a id="bienestarsaludemocionalqt" class="nav-link ">FICHERO (Integrantes)
        </a>
      </li>
      <li class="nav-item" role="presentation" style="cursor:pointer">
        <a id="legalqt"  class="nav-link " >FICHERO DE OPORTUNIDADES (Hogar)</a>
      </li>
       <li class="nav-item" role="presentation"  style="cursor:pointer">
        <a id="indicadores"  class="nav-link ">GESTIÓN INDICADORES</a>
      </li> 
       <li class="nav-item" role="presentation"  style="cursor:pointer">
        <a id="alertas"  class="nav-link active">ALERTAS GESTOR</a>
      </li> 
  
</ul>



<style>
  .invalid-checkbox {
      border: 1px solid red;
      border-radius: 4px;
      padding: 10px;
    }
</style>


<br>
 <!-- <div class="text-center">
<button class="btn btn-primary btn-sm mt-1 mb-1" onclick="exportToExcel()">Exportar a Excel</button>
</div> -->
<br>
<div class="container" style="display:" id="responsivepc">
<br>
<!-- <div class="container mb-2">
  <div class="d-flex justify-content-end">
    <input 
      type="text" 
      id="buscarFolio" 
      class="form-control form-control-sm w-25" 
      placeholder="🔍 Buscar folio..."
    >
  </div>
</div> -->

    <div class="" id="excelTable" style="width: 100%; height: 200px; overflow: auto;">
   
    </div>
 </div>


  <div class="row">  
            <div class="text-start col">


             <div class="btn btn-outline-success" onclick="redirectToIntegrantes()">Volver</div>



            </div>
            <div class="text-end col">
            <!-- <button class="btn btn-outline-success" type="submit"  >Guardar</button> -->
            <div class="btn btn-outline-primary" id="siguiente"   >Siguiente</div>
            </div> 
          </div>

 <div class="modal fade" id="modalDescripcionAlerta" tabindex="-1" aria-labelledby="tituloModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="tituloModal">Descripción de la alerta</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body" id="contenidoModal" style="max-height: 70vh; overflow-y: auto;"></div>
    </div>
  </div>
</div>

     <script src="{{ asset('assets/jquery/jquery.js') }}"></script>

 <link rel="stylesheet" href="{{ asset('resources/handsontable/handsontable.full.min.css') }}">
    <!-- Enlace al archivo JS -->
    <script src="{{ asset('resources/handsontable/handsontable.full.min.js') }}"></script>
    <!-- Enlace al archivo de idioma español -->
    <script src="{{ asset('resources/handsontable/es-MX.js') }}"></script>
    <script src="{{ asset('resources/handsontable/xlsx.full.min.js') }}"></script>



<!-- Enlace al archivo CSS -->

<script> 
    // document.addEventListener('DOMContentLoaded', function () {
     
        // Datos para Handsontable desde el backend
       
        const data = @json($folios);
        const alertas = @json($alertas);

        // Configuración de Handsontable
        const container = document.getElementById('excelTable');
        const hot = new Handsontable(container, {
            data: data,
                colHeaders: [
                'Folio',
                'Documento',
                'Nombre Completo Integrante',
                 'Celular',
                // 'Teléfono',
                // 'Barrio',
                // 'Comuna',
                // 'Dirección',
                'Grupo',
                'Alerta',
                'Registrar Alerta'
            ],
            columns: [
                { data: 'folio', width: 80 },
                { data: 'documento', width: 120 },
                { data: 'nombre', width: 200, wordWrap: true },
                 { data: 'celular', width: 110 },
                // { data: 'telefono', width: 110 },
                // { data: 'barrio', width: 150 },
                // { data: 'comuna', width: 100 },
                // { data: 'direccion', width: 200, wordWrap: true },
                {
                    data: 'grupo',
                    width: 130,
                     renderer: 'html',
                    wordWrap: true,
                    filter: false,
                     className: "htCenter htMiddle"
                },{
                    data: 'alerta',
                    width: 130,
                    renderer: 'html',
                    wordWrap: true,
                    className: "htCenter htMiddle",
                    filter: false
                },
                 {
                    data: 'registraralerta',
                    renderer: 'html', // Habilita contenido HTML en esta columna
                    readOnly: true,
                    width: 130,
                }
              
                
            ],

            licenseKey: 'non-commercial-and-evaluation', // Cambiar si tienes una licencia comercial
            rowHeaders: true,
            filters: true,
            columnSorting: true,
           // dropdownMenu: true,
            dropdownMenu: [
                'filter_by_value',
                'filter_action_bar'
            ],
           // readOnly: true,
            rowHeaderWidth: 28,
        // stretchH: 'all', // Esto asegurará que todas las columnas se ajusten a la tabla
         height: 260,
            language: 'es-MX' // Archivo de idioma
        });
    // });

    function exportToExcel() {
    // Obtén los datos de Handsontable excluyendo la columna con los botones
    const allData = hot.getData(); // Obtén todos los datos de Handsontable
    const visibleHeaders = hot.getColHeader(); // Obtén los encabezados de columna

    // Filtra las columnas (por ejemplo, excluye la última columna, donde están los botones)
    const filteredData = allData.map(row => row.slice(0, -1)); // Excluye la última columna
    const filteredHeaders = visibleHeaders.slice(0, -1); // Excluye el último encabezado (si es necesario)

    // Prepara los datos con los encabezados visibles
    const exportData = [filteredHeaders, ...filteredData];

    // Crea la hoja de cálculo con los datos filtrados
    const ws = XLSX.utils.aoa_to_sheet(exportData); // Crea una hoja de cálculo
    const wb = XLSX.utils.book_new(); // Crea un libro nuevo
    XLSX.utils.book_append_sheet(wb, ws, 'Hoja1'); // Añade la hoja al libro
    XLSX.writeFile(wb, 'cobertura.xlsx'); // Descarga el archivo Excel
}

  // Escuchar el input de búsqueda
// document.getElementById('buscarFolio').addEventListener('keyup', function() {
//     const valor = this.value.toLowerCase();

//     // Filtrar datos según el valor ingresado en "folio"
//     const filtrados = data.filter(item => 
//         item.folio && item.folio.toString().toLowerCase().includes(valor)
//     );

//     // Refrescar Handsontable con los datos filtrados
//     hot.loadData(filtrados);
// });


document.getElementById('excelTable').addEventListener('click', function(e) {
    if (e.target && e.target.classList.contains('registrar-alerta')) {
        const folio = e.target.getAttribute('data-folio');
        let linea = `{{$linea}}`;
        let paso = `{{$paso}}`;

        // Construir los switches dinámicamente
        let htmlSwitches = `
            <div class="form-check form-switch was-validated" 
                 id="alertas-container" 
                 style="text-align:left; max-height:400px; overflow-y:auto;">`;

        Object.entries(alertas).forEach(([id, texto, descripcion]) => {
    htmlSwitches += `
        <div class="alerta${id} d-flex align-items-center justify-content-between border-bottom py-1">
            
            <!-- Columna izquierda: Checkbox -->
            <div class="flex-shrink-0 me-2">
                <input class="form-check-input alerta-check" 
                       type="checkbox" 
                       id="alerta_${id}" 
                       value="${id}" 
                       required>
            </div>

            <!-- Columna central: Texto -->
            <div class="flex-grow-1" style="font-size:15px; color:#b30000; font-weight:500;">
                <label class="form-check-label" for="alerta_${id}">
                    ${id}. ${texto}
                </label>
            </div>

            <!-- Columna derecha: Botón Ver más -->
            <div class="flex-shrink-0 ms-2">
                <button type="button"
                    class="btn btn-outline-success btn-sm fw-bold"
                    style="padding: 2px 8px; font-size: 13px;"
                    onclick="verDescripcion(${id})">
                    Ver más
                </button>
            </div>
        </div>`;
});


        htmlSwitches += '</div>';

        Swal.fire({
            title: `Registrar Alerta para folio ${folio}`,
            html: htmlSwitches,
            width: '750px',
            showCancelButton: true,
            confirmButtonText: "Activar Alertas",
            didOpen: () => {   // 👈 NUEVO
        const confirmarBtn = Swal.getConfirmButton();
        confirmarBtn.disabled = true; // arranca deshabilitado

        const checks = document.querySelectorAll('.alerta-check');
        checks.forEach(chk => {
            chk.addEventListener('change', () => {
                const algunoMarcado = Array.from(checks).some(c => c.checked);
                confirmarBtn.disabled = !algunoMarcado; // habilita solo si hay 1+
            });
        });
        },
                cancelButtonText: "Cancelar",
                confirmButtonColor: " #00BFFF",
                   allowOutsideClick: false,
                   allowEscapeKey: false,
                customClass: {
            title: 'swal-title-small'   // 👉 clase personalizada
        },
     
        }).then((result) => {
            if (result.isConfirmed) {
                const seleccionados = [];
                Object.keys(alertas).forEach(id => {
                    const check = document.getElementById(`alerta_${id}`);
                    if (check && check.checked) {
                        seleccionados.push(id);
                    }
                });

                if (seleccionados.length === 0) {
                    Swal.fire("⚠️ Debe seleccionar al menos una alerta", "", "warning");
                    return;
                }

                // 🚀 Guardar vía AJAX
                $.ajax({
                    url: "{{ url('guardar-alertas') }}",
                    method: "POST",
                    data: {
                        folio: folio,
                        linea:linea,
                        paso: paso,
                        alertas: seleccionados,
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(res) {
                          if (result.isConfirmed) {
                            let urlGuia = "{{ asset('pdfs/alertasgestor.pdf') }}";
                              Swal.fire({
                                title: "✅ Guardado",
                                html: `Recuerde que una alerta en el Acompañamiento Familiar, genera acercamiento de oportunidad y ante un inminente peligro a la vida e integridad física debe activar ruta de emergencia y registrarla en el aplicativo. 
                                <a href='https://unidadfamiliamedellin.com.co/activacionruta/index.php/user/c_ucasoasignado/fc_vucasoasignado' target='_blank'>
                                Ir al aplicativo de activación
                                </a>, según la 'Guía para la atención y activación de rutas por alertas'.
                                <hr>
                                <button class="btn btn-sm btn-primary" onclick="window.open('${urlGuia}', '_blank')">Ver y descargar Guía</button>`,
                                icon: "success"
                                }).then(() => {
                                    location.reload(); // recarga la página para ver los cambios ;:;:
                                });
                            }
                    },
                    error: function(err) {
                        Swal.fire("❌ Error", "No se pudieron guardar las alertas", "error");
                    }
                });
            }
        });
    }
});

// Función que asegura mínimo un check seleccionado
function validarMinimoUno() {
    const checks = document.querySelectorAll('.alerta-check');
    const algunoMarcado = Array.from(checks).some(chk => chk.checked);

    checks.forEach(chk => {
        chk.required = !algunoMarcado; // si hay uno marcado, ninguno es required
    });
}

// Delegamos evento cuando cambia cualquier check
document.addEventListener('change', function(e) {
    if (e.target.classList.contains('alerta-check')) {
        validarMinimoUno();
    }
});


document.getElementById('excelTable').addEventListener('click', function(e) {
    if (e.target && e.target.classList.contains('ver-alertas')) {
        const alertasTexto = e.target.getAttribute('data-alertas');
        const folio = e.target.getAttribute('data-folio'); // asegúrate de mandar el folio en el botón

        // Convertir el texto separado por "|" en una lista con <li> e ícono 🚨
        const alertasList = alertasTexto
            .split('|')
            .map(a => `
                <li style="margin-bottom:8px; display:flex; align-items:center;">
                    <span style="color:#dc3545; font-size:16px; margin-right:8px;"></span> 
                    <span>${a.trim()}</span>
                </li>
            `)
            .join('');

        Swal.fire({
            title: `🚨 Alertas registradas para el folio <b>${folio}</b>`,
            html: `
                <div style="text-align:left; max-height:300px; overflow-y:auto; padding-right:10px;">
                    <ul style="list-style:none; padding-left:0; font-size:15px; line-height:1.5; margin:0;">
                        ${alertasList}
                    </ul>
                </div>
            `,
            width: '650px',
            confirmButtonText: "Cerrar",
            confirmButtonColor: "#00BFFF",
            customClass: {
                title: 'swal-title-small'
            }
        });
    }
});

const alertasDescripcion = @json($alertasDescripcion);

const subSwal = Swal.mixin({
  toast: false,
  position: 'center',
  showConfirmButton: true,
  confirmButtonText: 'Cerrar',
  width: 700,
  background: '#fff',
  backdrop: false, // ⚡️ evita que cierre o tape el Swal principal
});

// 🧩 3️⃣ Función para mostrar las descripciones sin cerrar el Swal grande
function verDescripcion(id) {
    const descripcion = alertasDescripcion[id] || 'Sin información disponible.';
    const titulo = alertas[id] ? `${id}. ${alertas[id]}` : 'Competencia';

    // Crear modal HTML dentro del mismo Swal
    let modalInterno = document.createElement('div');
    modalInterno.innerHTML = `
        <div class="swal2-popup" style="
            display:block;
            position:absolute;
            top:50%;
            left:50%;
            transform:translate(-50%,-50%);
            background:white;
            border-radius:12px;
            padding:20px;
            width:650px;
            box-shadow:0 0 15px rgba(0,0,0,0.3);
            z-index:99999;
            text-align:left;
            overflow-y:auto;
            max-height:70vh;
        ">
            <h4 style="color:#0d6efd;">${titulo}</h4>
            <div style="font-size:15px; margin-top:10px;" class="container">${descripcion}</div>
            <div class="text-end mt-3">
                <button id="cerrarModalInterno" class="btn btn-primary btn-sm">Cerrar</button>
            </div>
        </div>
    `;

    // Insertar dentro del Swal actual
    const swalContainer = document.querySelector('.swal2-container');
    swalContainer.appendChild(modalInterno);

    // Cerrar el modal interno
    document.getElementById('cerrarModalInterno').addEventListener('click', () => {
        modalInterno.remove();
    });
}



   $('#siguiente').click(function(){
        var url = "../rombovisitatipo1refuerzo3/<?= $foliocodificado ?>"; window.location.href = url;
      }); 
      function redirectToIntegrantes() {
           var folio = `<?=$foliocodificado ?>`;
           var url = "../indicadorest1refuerzo3/:folio";
           url = url.replace(':folio', folio);
           window.location.href = url;
       }

    


       $('#bienestarsaludemocionalqt').click(function(){var url = "../ficherodeoportunidadest1refuerzo3/<?= $foliocodificado ?>"; window.location.href = url;})
    $('#legalqt').click(function(){var url = "../ficherodeoportunidadeshogart1refuerzo3/<?= $foliocodificado ?>"; window.location.href = url;})
    $('#indicadores').click(function(){var url = "../indicadorest1refuerzo3/<?= $foliocodificado ?>"; window.location.href = url;})
    $('#alertas').click(function(){var url = "../alertasgestor4t1/<?= $foliocodificado ?>"; window.location.href = url;})
</script>

@endsection
