
<link rel="shortcut icon" href="../favicon.ico">
   
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/component.css') }}?=<?php echo time() ?>" /> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">


@extends('componentes.navlateral')

@section('title', 'Sincronización')

@section('content')

<style>
        .table-custom thead {
            background-color: #0dcaf0;
            color: white;
            position: sticky;
            top: 0;
            z-index: 100;
        }
        .table-custom tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .table-custom tbody tr:hover {
            background-color: #e9ecef;
        }
        .table-custom th, .table-custom td {
            text-align: center;
            vertical-align: middle;
        }
    </style>
  
<div class="container">
<img width="100%" height="100px" src="{{ asset('imagenes/headers.png') }}" alt="" class="isticky-top"  >
  <hr>
  <div class="row align-items-center">
    @if ($existspph)
       <div class="col-auto">
        <button type="button" class="btn btn-primary" id="sincroarriba">Iniciar sincronización subida</button> 
      </div> 
    @else
      <div class="col-auto">
        <button type="button" class="btn btn-warning" id="sincroabajo">Iniciar sincronización blanco</button> 
      </div>
    @endif
      <div class="col">
        <div class="progress" >
          <div class="progress-bar progress-bar-striped " id="barracarga"  role="progressbar" style="width: 0%; " aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">0%</div>
        </div>
      </div>
    </div>

  <hr>




  <div class="container ">
    <div class="table-responsive" style="max-height: 300px; overflow-y: auto; height:300px">
        <table class="table table-bordered table-hover table-striped">
            <thead class="table-primary">
                <tr>
                    <th>Nombre Tabla</th>
                    <th>Subida o bajada</th>
                    <th>Estado</th>
                </tr>
            </thead>

            <tbody id="tabla-datos"> <!-- Este id se usará para agregar filas -->
                <!-- Las filas se agregarán aquí -->
            </tbody>
        </table>
    </div>
</div>

</div>
<hr>
<div class="container text-center">
  <label for="">Tiempo sincronización</label>
<h1 style="color:#0dcaf0;font-family: 'DS-Digital', sans-serif;"> <span id="horas">00</span>:<span id="minutos">00</span>:<span id="segundos">00</span></h1>
</div>
<script src="{{ asset('assets/jquery/jquery.js') }}"></script>
<script src="{{ asset('resources/js/sincroarriba.js') }}"></script>
<script src="{{ asset('resources/js/sincroarribad.js') }}"></script>

<script>
  $(document).ready(function(){
    $('#sincroabajo').click(function(){
      t1_principalhogard();
      console.log('Hola sincro abajo')
  
    })
    $('#sincroarriba').click(function(){
      console.log('Hola sincro arriba')
      t1_principalhogar();
    })
    
  })

</script>

<script>

function actualizarTabla(nombreTabla, accion, estado) {
    let filaId = 'fila_' + nombreTabla;  // Crear un ID único para la fila
    let estadoIcono = '';

    // Determinar el icono basado en el estado
    if (estado === '1') { // caargando
        estadoIcono = '<div class="spinner-border" role="status"><span class="visually-hidden">Loading...</span></div>';
    } else if (estado === '2') { // exitoso
        estadoIcono = '<ion-icon name="cloud-done-outline" style="font-size:50px; color:green"></ion-icon>';
    } else if (estado === '3') { // error
        estadoIcono = '<ion-icon name="close-circle-outline" style="font-size:50px; color:red"></ion-icon>';
    }

    // Crear la fila o actualizarla si ya existe
    let nuevaFila = '<tr id="' + filaId + '">' +
                        '<td>' + nombreTabla + '</td>' +
                        '<td>' + accion + '</td>' +
                        '<td>' + estadoIcono + '</td>' +
                    '</tr>';

    // Comprobar si la fila ya existe
    if ($('#' + filaId).length === 0) {
        // Si la fila no existe, agregarla
        $('#tabla-datos').append(nuevaFila);
    } else {
        // Si la fila ya existe, actualizarla
        $('#' + filaId + ' td:last').html(estadoIcono);
    }

       // Hacer scroll al final del contenedor
       let container = $('.table-responsive');
    container.scrollTop(container[0].scrollHeight);
}


function reintentarfuncion(funcion, tabla){
            Swal.fire({
          title: `Error en la tabla ${tabla}`,
          text: "Puedes elegír si volver a intentarlo o cancelar (Recuerda que cancelar sin terminar el proceso puede provocar perdida de datos)",
          icon: "error",
          showCancelButton: true,
          confirmButtonColor: "#0dcaf0",
          cancelButtonColor: "#d33",
          cancelButtonText: "Cancelar",
          confirmButtonText: "Reintentar",
          allowOutsideClick: false,  // Evitar cerrar al hacer clic fuera
          allowEscapeKey: false      // Evitar cerrar al presionar "Escape"
        }).then((result) => {
          if (result.isConfirmed) {
            funcion();
          }else{
            window.location.href = '<?= route('index') ?>'; 
          }
        });
      }

      function todook(){
            Swal.fire({
          title: `Sincronización efectiva`,
          text: "",
          icon: "success",
          showCancelButton: false,
          confirmButtonColor: "#0dcaf0",
          confirmButtonText: "Continuar",
          allowOutsideClick: false,  // Evitar cerrar al hacer clic fuera
          allowEscapeKey: false      // Evitar cerrar al presionar "Escape"
        }).then((result) => {
          if (result.isConfirmed) {
            window.location.href = '<?= route('index') ?>'; 
          }
        });
      }

</script>

<script>
    let intervalo;
        // Función para iniciar el contador
        function iniciarContador() {
            let horas = 0, minutos = 0, segundos = 0;
            const horasElemento = document.getElementById('horas');
            const minutosElemento = document.getElementById('minutos');
            const segundosElemento = document.getElementById('segundos');

            // Actualiza el contador cada segundo
             intervalo = setInterval(function() {
                segundos++;
                if (segundos === 60) {
                    segundos = 0;
                    minutos++;
                }
                if (minutos === 60) {
                    minutos = 0;
                    horas++;
                }
                // Formatea los valores de horas, minutos y segundos
                horasElemento.textContent = String(horas).padStart(2, '0');
                minutosElemento.textContent = String(minutos).padStart(2, '0');
                segundosElemento.textContent = String(segundos).padStart(2, '0');
            }, 1000);

            // Evento para detener el contador al hacer clic en el botón
           

        }

        function detenerReloj(){
                clearInterval(intervalo); // Detiene el intervalo
           }

        // Iniciar el contador cuando se carga la página
    
    </script>
@endsection



   

