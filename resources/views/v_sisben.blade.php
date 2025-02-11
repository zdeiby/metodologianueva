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

        // Configuración de Handsontable
        const container = document.getElementById('excelTable');
        const hot = new Handsontable(container, {
            data: data,
            colHeaders: [
                'Folio',
                'Idintegrante',
                'Tipo de Documento',
                'Documento',
                'Nombre Completo Integrante',
                'Estado',
                'Sisben',
                'Ruta',
            ],

            


          //   columns: [
          //     { 
          //         data: 'folio',
          //         width: 80
          //     },
          //     { 
          //         data: 'cedula', // Tipo de documento (banc.pregunta)
          //         width: 120
          //     },
          //     { 
          //         data: 'documento', // Número de documento (inte.documento)
          //         width: 105
          //     },
          //     { 
          //         data: 'nombre', // Nombre completo del integrante
          //         width: 180,
          //         wordWrap: true
          //     },
          //     { 
          //         data: 'estadointegrante', // Estado del integrante
          //         width: 100
          //     },
          //     { 
          //         data: 'sisben', // Valor fijo "si"
          //         width: 80
          //     },
          //     { 
          //         data: 'ruta', // Valor fijo "diríjase a"
          //         width: 120,
          //         wordWrap: true
          //     }
              
          // ],

          

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

  
</script>

@endsection
