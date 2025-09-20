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




<div class="container"><img width="100%" height="100px" src="{{ asset('imagenes/headers.png') }}" alt="" class="sticky-top"  ></div>
 <!-- <div class="text-center">
<button class="btn btn-primary btn-sm mt-1 mb-1" onclick="exportToExcel()">Exportar a Excel</button>
</div> -->
<br>
<div class="container" style="display:" id="responsivepc">

<div class="container mb-2">
  <div class="d-flex justify-content-end">
    <input 
      type="text" 
      id="buscarFolio" 
      class="form-control form-control-sm w-25" 
      placeholder="🔍 Buscar folio..."
    >
  </div>
</div>

    <div class="" id="excelTable" style="width: 100%; height: 450px; overflow: auto;">
   
    </div>
 </div>

 
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
                'Teléfono',
                'Barrio',
                'Comuna',
                'Dirección',
                'Grupo',
                'Alerta',
                'Registrar Alerta'
            ],
            columns: [
                { data: 'folio', width: 80 },
                { data: 'documento', width: 120 },
                { data: 'nombre', width: 200, wordWrap: true },
                { data: 'celular', width: 110 },
                { data: 'telefono', width: 110 },
                { data: 'barrio', width: 150 },
                { data: 'comuna', width: 100 },
                { data: 'direccion', width: 200, wordWrap: true },
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
         height: 410,
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
document.getElementById('buscarFolio').addEventListener('keyup', function() {
    const valor = this.value.toLowerCase();

    // Filtrar datos según el valor ingresado en "folio"
    const filtrados = data.filter(item => 
        item.folio && item.folio.toString().toLowerCase().includes(valor)
    );

    // Refrescar Handsontable con los datos filtrados
    hot.loadData(filtrados);
});


document.getElementById('excelTable').addEventListener('click', function(e) {
    if (e.target && e.target.classList.contains('registrar-alerta')) {
        const folio = e.target.getAttribute('data-folio');

        // Construir los switches dinámicamente
        let htmlSwitches = `
            <div class="form-check form-switch was-validated" 
                 id="alertas-container" 
                 style="text-align:left; max-height:400px; overflow-y:auto;">`;

        Object.entries(alertas).forEach(([id, texto]) => {
            htmlSwitches += `
                <div class="alerta${id}" style="margin-bottom:6px;">
                    <input class="form-check-input alerta-check" 
                        type="checkbox" 
                        id="alerta_${id}" 
                        value="${id}" 
                        required>
                    <label class="form-check-label" for="alerta_${id}">
                        ${id}. ${texto}
                    </label>
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
                        alertas: seleccionados,
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(res) {
                        Swal.fire("✅ Guardado", res.message, "success");
                        location.reload(); // recarga la página para ver cambios
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






</script>

@endsection
