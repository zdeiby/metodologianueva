@extends('componentes.navlateral')

@section('title', 'Página de inicio')

@section('content')

<style>
 .badge-grupo {
    padding: 5px 10px;
    border-radius: 6px;
    font-size: 12px;
    text-align: center;
    width: 100px;
    margin: auto;
    font-weight: bold;
    color: white;
    display: block;
}

.grupo-1 {
    background-color: #dc3545; /* rojo */
    color: white !important;
}

.grupo-2 {
    background-color: #ffc107; /* amarillo */
    color: white !important;
    color: #333;
}

.grupo-3 {
    background-color: #0dcaf0; /* azul claro */
    color: white !important;
}

.grupo-4 {
    background-color: #198754; /* verde */
    color: white !important;
}

.grupo-na {
    background-color: #6c757d; /* gris */
    color: white !important;
}

</style>



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
<div class="text-center">
<button class="btn btn-primary btn-sm mt-1 mb-1" onclick="exportToExcel()">Exportar a Excel</button>
</div>
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


 <script>
    function habeasdata(folio, folioencriptado){
      paginacargando();
    //  $(`#${folioencriptado}boton`).attr('disabled','disabled');
     // $(`#${folioencriptado}boton`).css('display','none');
      $(`#${folioencriptado}botoncargando`).css('display','');


      console.log(`${folioencriptado}boton`)
      $.ajax({
                url:'./leerprincipalhogar',
                data:{folio:folioencriptado},
                method: "GET",
                dataType:'JSON',
                success:function(data){
                  paginalista();
                  $(`#${folioencriptado}boton`).css('display','');
                  $(`#${folioencriptado}botoncargando`).css('display','none');

                  if(data.principalhogar.habeasdata == '1'){
                    let url = `{{ url('rombo') }}/${folio}`;
                    // Redirigir a la URL construida
                    window.location.href = url;
                  }else
                    
                    Swal.fire({
                    title: "AUTORIZACIÓN PARA EL TRATAMIENTO DE DATOS PERSONALES",
                    text: "El titular de los datos personales consignados en este documento, da su consentimiento de manera libre, espontánea, consciente, expresa, inequívoca, previa e informada, para que la Alcaldía de Medellín realice la recolección, almacenamiento, uso, circulación, indexación, analítica, supresión, procesamiento, compilación, intercambio, actualización y disposición de los datos que ha suministrado y, en general, realice el tratamiento de los datos personales conforme lo dispone la Ley 1581 del 17 de octubre de 2021, el Decreto 1377 del 27 de junio de 2013 y el Decreto 1096 del 28 de diciembre de 2018 (política para el tratamiento de datos personales en el Municipio de Medellín distrito especial). La Alcaldía de Medellín, como responsable del tratamiento de los datos personales aquí consignados, en cumplimiento de las normas mencionadas, informa al titular de los datos personales que le asisten los siguientes derechos: acceder a sus datos personales; conocer, actualizar y rectificar sus datos personales; solicitar prueba de la autorización otorgada; revocar la autorización y/o solicitar la supresión del dato; presentar quejas ante la Superintendencia de Industria y Comercio y; en general, todos los derechos consignados en el artículo 8 de la Ley 1581 de 2012.",
                    icon: "question",
                    showCancelButton: true,
                    confirmButtonColor: "#0dcaf0",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Sí, acepto!",
                    cancelButtonText: "No acepto"
                  }).then((result) => {
                    if (result.isConfirmed) {
                      paginacargando2();
                      $(`#${folioencriptado}boton`).css('display','');
                      $(`#${folioencriptado}botoncargando`).css('display','none');

                      $.ajax({
                          url:'./guardarhabeasdata',
                          data:{folio:folioencriptado},
                          method: "GET",
                          dataType:'JSON',
                          success:function(data){
                            paginalista2();
                            
                            let url = `{{ url('rombo') }}/${folio}`;
                            window.location.href = url;
                        },
                        error: function(xhr, status, error) {
                                console.log(xhr.responseText);
                                alertabad();
                            }
                         })
                    }
                  });
                  
                    },
                      error: function(xhr, status, error) {
                                console.log(xhr.responseText);
                                alertabad();
                            }
                    })

    }


    function actualizar(folioencriptado, folio){
      paginacargando();
      paginalista();
        let url = `{{ url('editarintegrantesgeneral') }}/${folioencriptado}`;
        // Redirigir a la URL construida
        window.location.href = url;    
      }

    
 </script>
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
                'Documento',
                'Representante',
                'Celular',
                'Teléfono',
                'Barrio',
                'Comuna',
                'Dirección',
                'Visita',
                'Fecha Visita',
                'Grupo',
                'Gestionar',
                'Prioridad Visita'
               // 'Actualizar Datos'
            ],

            
            columns: [
                { data: 'folio',
                  width: 80,
                 },
                { data: 'documento',
                  width: 105, 
                 },
                { 
                  data: 'nombre', 
                  width: 120, // Define el ancho máximo de la columna
                  wordWrap: true // Permite que el texto se ajuste a varias líneas
              },
                { data: 'celular',
                  width: 90,
                 },
                { 
                  data: 'telefono', 
                  width: 90, // Define el ancho máximo de la columna
                  wordWrap: true // Permite que el texto se ajuste a varias líneas
              },
                { 
                  data: 'barrio', 
                  width: 110, // Define el ancho máximo de la columna
                  wordWrap: true // Permite que el texto se ajuste a varias líneas
              },
                { data: 'comuna',
                  width: 100,
                 },
                { 
                  data: 'direccion', 
                  width: 100, // Define el ancho máximo de la columna
                  wordWrap: true // Permite que el texto se ajuste a varias líneas
              },
              { 
                  data: 'estacion', 
                  width: 80, // Define el ancho máximo de la columna
                  wordWrap: true // Permite que el texto se ajuste a varias líneas
                  
              },
              {
              data: 'fecha_ultima_visita',
                width: 130,
                renderer: 'html',
                wordWrap: true
              },
              {
              data: 'grupo',
                width: 130,
                renderer: 'html',
                wordWrap: true,
                filter: false
              },
                {
                    data: 'gestion',
                    renderer: 'html', // Habilita contenido HTML en esta columna
                    readOnly: true,
                    width: 110,
                }

                ,
                {
                    data: 'prioridad_visita',
                    renderer: 'html', // Habilita contenido HTML en esta columna
                    readOnly: true,
                    width: 110,
                    className: 'htCenter htMiddle',
                    filter: false
                    
                }

                ,
               /* {
                    data: 'actualizar',
                    renderer: 'html', // Habilita contenido HTML en esta columna
                    readOnly: true,
                    width: 130,
                } */
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


</script>

@endsection
