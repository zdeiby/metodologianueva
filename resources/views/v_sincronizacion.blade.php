
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

// INICIA SINCRO ABAJO 

  function t1_principalhogard(){
        iniciarContador();
        actualizarTabla('t1_principalhogar', 'Descarga base de datos en blanco', '1');
    $.ajax({
                    url:'./t1_principalhogard',
                    method: "GET",
                    dataType:'JSON',
                    success:function(data){
                      $('#barracarga').html('7%');
                      $('#barracarga').css('width','7%');
                     actualizarTabla('t1_principalhogar', 'Descarga base de datos en blanco', '2');
                     t1_hogarcondicionesalimentariasd()
                      
                    },
                    error: function(xhr, status, error) {
                      actualizarTabla('t1_principalhogard', 'Descarga base de datos en blanco', '3');
                          reintentarfuncion(t1_principalhogard, 't1_principalhogard');
                              console.log(xhr.responseText);
                          }
                  })
  }

  function t1_hogarcondicionesalimentariasd(){
        actualizarTabla('t1_hogarcondicionesalimentarias', 'Descarga base de datos en blanco', '1');
    $.ajax({
                    url:'./t1_hogarcondicionesalimentariasd',
                    method: "GET",
                    dataType:'JSON',
                    success:function(data){
                      $('#barracarga').html('14%');
                      $('#barracarga').css('width','14%');
                      actualizarTabla('t1_hogarcondicionesalimentarias', 'Descarga base de datos en blanco', '2');
                     t1_hogarcondicioneshabitabilidadd()
                      
                    },
                    error: function(xhr, status, error) {
                      actualizarTabla('t1_hogarcondicionesalimentarias', 'Descarga base de datos en blanco', '3');
                          reintentarfuncion(t1_hogarcondicionesalimentariasd, 't1_hogarcondicionesalimentarias');
                              console.log(xhr.responseText);
                          }
                  })
  }

  function t1_hogarcondicioneshabitabilidadd(){
        actualizarTabla('t1_hogarcondicioneshabitabilidad', 'Descarga base de datos en blanco', '1');
    $.ajax({
                    url:'./t1_hogarcondicioneshabitabilidadd',
                    method: "GET",
                    dataType:'JSON',
                    success:function(data){
                      $('#barracarga').html('21%');
                      $('#barracarga').css('width','21%');
                      actualizarTabla('t1_hogarcondicioneshabitabilidad', 'Descarga base de datos en blanco', '2');
                     t1_hogarconformacionfamiliard()
                      
                    },
                    error: function(xhr, status, error) {
                      actualizarTabla('t1_hogarcondicioneshabitabilidad', 'Descarga base de datos en blanco', '3');
                          reintentarfuncion(t1_hogarcondicioneshabitabilidadd, 't1_hogarcondicioneshabitabilidad');
                              console.log(xhr.responseText);
                          }
                  })
  }

  function t1_hogarconformacionfamiliard(){
        actualizarTabla('t1_hogarconformacionfamiliar', 'Descarga base de datos en blanco', '1');
    $.ajax({
                    url:'./t1_hogarconformacionfamiliard',
                    method: "GET",
                    dataType:'JSON',
                    success:function(data){
                      $('#barracarga').html('28%');
                      $('#barracarga').css('width','28%');
                      actualizarTabla('t1_hogarconformacionfamiliar', 'Descarga base de datos en blanco', '2');
                      t1_hogardatosgeograficosd()
                      
                    },
                    error: function(xhr, status, error) {
                      actualizarTabla('t1_hogarconformacionfamiliar', 'Descarga base de datos en blanco', '3');
                          reintentarfuncion(t1_hogarconformacionfamiliard, 't1_hogarconformacionfamiliar');
                              console.log(xhr.responseText);
                          }
                  })
  }



  function t1_hogardatosgeograficosd(){
        actualizarTabla('t1_hogardatosgeograficos', 'Descarga base de datos en blanco', '1');
    $.ajax({
                    url:'./t1_hogardatosgeograficosd',
                    method: "GET",
                    dataType:'JSON',
                    success:function(data){
                      $('#barracarga').html('35%');
                      $('#barracarga').css('width','35%');
                      actualizarTabla('t1_hogardatosgeograficos', 'Descarga base de datos en blanco', '2');
                     t1_hogarentornofamiliard()
                      
                    },
                    error: function(xhr, status, error) {
                     actualizarTabla('t1_hogardatosgeograficos', 'Descarga base de datos en blanco', '3');
                          reintentarfuncion(t1_hogardatosgeograficosd, 't1_hogardatosgeograficos');
                              console.log(xhr.responseText);
                          }
                  })
  }

  function t1_hogarentornofamiliard(){
        actualizarTabla('t1_hogarentornofamiliar', 'Descarga base de datos en blanco', '1');
    $.ajax({
                    url:'./t1_hogarentornofamiliard',
                    method: "GET",
                    dataType:'JSON',
                    success:function(data){
                      $('#barracarga').html('42%');
                      $('#barracarga').css('width','42%');
                      actualizarTabla('t1_hogarentornofamiliar', 'Descarga base de datos en blanco', '2');
                     t1_integrantesfinancierod()
                      
                    },
                    error: function(xhr, status, error) {
                    actualizarTabla('t1_hogarentornofamiliar', 'Descarga base de datos en blanco', '3');
                          reintentarfuncion(t1_hogarentornofamiliard, 't1_hogarentornofamiliar');
                              console.log(xhr.responseText);
                          }
                  })
  }

  function t1_integrantesfinancierod(){
        actualizarTabla('t1_integrantesfinanciero', 'Descarga base de datos en blanco', '1');
    $.ajax({
                    url:'./t1_integrantesfinancierod',
                    method: "GET",
                    dataType:'JSON',
                    success:function(data){
                      $('#barracarga').html('49%');
                      $('#barracarga').css('width','49%');
                      actualizarTabla('t1_integrantesfinanciero', 'Descarga base de datos en blanco', '2');
                     t1_integrantesfisicoyemocionald()
                      
                    },
                    error: function(xhr, status, error) {
                      actualizarTabla('t1_integrantesfinanciero', 'Descarga base de datos en blanco', '3');
                          reintentarfuncion(t1_integrantesfinancierod, 't1_integrantesfinanciero');
                              console.log(xhr.responseText);
                          }
                  })
  }

  function t1_integrantesfisicoyemocionald(){
        actualizarTabla('t1_integrantesfisicoyemocional', 'Descarga base de datos en blanco', '1');
    $.ajax({
                    url:'./t1_integrantesfisicoyemocionald',
                    method: "GET",
                    dataType:'JSON',
                    success:function(data){
                      $('#barracarga').html('56%');
                      $('#barracarga').css('width','56%');
                      actualizarTabla('t1_integrantesfisicoyemocional', 'Descarga base de datos en blanco', '2');
                     t1_integranteshogard()
                      
                    },
                    error: function(xhr, status, error) {
                      actualizarTabla('t1_integrantesfisicoyemocional', 'Descarga base de datos en blanco', '3');
                          reintentarfuncion(t1_integrantesfisicoyemocionald, 't1_integrantesfisicoyemocional');
                              console.log(xhr.responseText);
                          }
                  })
  }

  function t1_integranteshogard(){
        actualizarTabla('t1_integranteshogar', 'Descarga base de datos en blanco', '1');
    $.ajax({
                    url:'./t1_integranteshogard',
                    method: "GET",
                    dataType:'JSON',
                    success:function(data){
                      $('#barracarga').html('63%');
                      $('#barracarga').css('width','63%');
                      actualizarTabla('t1_integranteshogar', 'Descarga base de datos en blanco', '2');
                     t1_integrantesidentitariod()
                      
                    },
                    error: function(xhr, status, error) {
                      actualizarTabla('t1_integranteshogar', 'Descarga base de datos en blanco', '3');
                          reintentarfuncion(t1_integranteshogard, 't1_integranteshogar');
                              console.log(xhr.responseText);
                          }
                  })
  }

  function t1_integrantesidentitariod(){
        actualizarTabla('t1_integrantesidentitario', 'Descarga base de datos en blanco', '1');
    $.ajax({
                    url:'./t1_integrantesidentitariod',
                    method: "GET",
                    dataType:'JSON',
                    success:function(data){
                      $('#barracarga').html('70%');
                      $('#barracarga').css('width','70%');
                      actualizarTabla('t1_integrantesidentitario', 'Descarga base de datos en blanco', '2');
                      t1_integrantesintelectuald()
                      
                    },
                    error: function(xhr, status, error) {
                    actualizarTabla('t1_integrantesidentitario', 'Descarga base de datos en blanco', '3');
                          reintentarfuncion(t1_integrantesidentitariod, 't1_integrantesidentitario');
                              console.log(xhr.responseText);
                          }
                  })
  }

  function t1_integrantesintelectuald(){
        actualizarTabla('t1_integrantesintelectual', 'Descarga base de datos en blanco', '1');
    $.ajax({
                    url:'./t1_integrantesintelectuald',
                    method: "GET",
                    dataType:'JSON',
                    success:function(data){
                      $('#barracarga').html('80%');
                      $('#barracarga').css('width','80%');
                      actualizarTabla('t1_integrantesintelectual', 'Descarga base de datos en blanco', '2');
                     t1_integranteslegald()
                      
                    },
                    error: function(xhr, status, error) {
                      actualizarTabla('t1_integrantesintelectual', 'Descarga base de datos en blanco', '3');
                          reintentarfuncion(t1_integrantesintelectuald, 't1_integrantesintelectual');
                              console.log(xhr.responseText);
                          }
                  })
  }

  function t1_integranteslegald(){
        actualizarTabla('t1_integranteslegal', 'Descarga base de datos en blanco', '1');
    $.ajax({
                    url:'./t1_integranteslegald',
                    method: "GET",
                    dataType:'JSON',
                    success:function(data){
                      $('#barracarga').html('100%');
                      $('#barracarga').css('width','100%');                      
                      actualizarTabla('t1_integranteslegal', 'Descarga base de datos en blanco', '2');
                      t1_privacion1d();      
                    },
                    error: function(xhr, status, error) {
                      actualizarTabla('t1_integranteslegal', 'Descarga base de datos en blanco', '3');
                          reintentarfuncion(t1_integranteslegald, 't1_integranteslegal');
                              console.log(xhr.responseText);
                          }
                  })
  }




  function t1_privacion1d(){
        actualizarTabla('t1_privacion1', 'Descarga base de datos en blanco', '1');
        let tabla= 't1_privacion1';
    $.ajax({
                    url:'./sincroprivacionesd',
                    method: "GET",
                    data: { tabla: tabla},  
                    dataType:'JSON',
                    success:function(data){
                      $('#barracarga').html('100%');
                      $('#barracarga').css('width','100%');                      
                      actualizarTabla('t1_privacion1', 'Descarga base de datos en blanco', '2');
                      t1_casillamatrizd()                   
                    },
                    error: function(xhr, status, error) {
                      actualizarTabla('t1_privacion1', 'Descarga base de datos en blanco', '3');
                          reintentarfuncion(t1_integranteslegald, 't1_privacion1');
                              console.log(xhr.responseText);
                          }
                  })
  }





  
  function t1_casillamatrizd(){
        actualizarTabla('t1_casillamatriz', 'Descarga base de datos en blanco', '1');
        let tabla= 't1_casillamatriz';
    $.ajax({
                    url:'./sincroprivacionesd',
                    method: "GET",
                    data: { tabla: tabla},  
                    dataType:'JSON',
                    success:function(data){
                      $('#barracarga').html('100%');
                      $('#barracarga').css('width','100%');                      
                      actualizarTabla('t1_casillamatriz', 'Descarga base de datos en blanco', '2');
                             t1_indicador_bl_2d()              
                    },
                    error: function(xhr, status, error) {
                      actualizarTabla('t1_casillamatriz', 'Descarga base de datos en blanco', '3');
                          reintentarfuncion(t1_privacion1d, 't1_casillamatriz');
                              console.log(xhr.responseText);
                          }
                  })
  }

  
  function t1_indicador_bl_2d(){
        actualizarTabla('t1_indicador_bl_2', 'Descarga base de datos en blanco', '1');
        let tabla= 't1_indicador_bl_2';
    $.ajax({
                    url:'./sincroprivacionesd',
                    method: "GET",
                    data: { tabla: tabla},  
                    dataType:'JSON',
                    success:function(data){
                      $('#barracarga').html('100%');
                      $('#barracarga').css('width','100%');                      
                      actualizarTabla('t1_indicador_bl_2', 'Descarga base de datos en blanco', '2');
                             t1_indicador_bl_3d()              
                    },
                    error: function(xhr, status, error) {
                      actualizarTabla('t1_casillamatriz', 'Descarga base de datos en blanco', '3');
                          reintentarfuncion(t1_casillamatrizd, 't1_indicador_bl_2');
                              console.log(xhr.responseText);
                          }
                  })
  }
  function t1_indicador_bl_3d(){
        actualizarTabla('t1_indicador_bl_3', 'Descarga base de datos en blanco', '1');
        let tabla= 't1_indicador_bl_3';
    $.ajax({
                    url:'./sincroprivacionesd',
                    method: "GET",
                    data: { tabla: tabla},  
                    dataType:'JSON',
                    success:function(data){
                      $('#barracarga').html('100%');
                      $('#barracarga').css('width','100%');                      
                      actualizarTabla('t1_indicador_bl_3', 'Descarga base de datos en blanco', '2');
                         t1_indicador_bl_5d()                  
                    },
                    error: function(xhr, status, error) {
                      actualizarTabla('t1_indicador_bl_3', 'Descarga base de datos en blanco', '3');
                          reintentarfuncion(t1_indicador_bl_2d, 't1_indicador_bl_3');
                              console.log(xhr.responseText);
                          }
                  })
  }
  function t1_indicador_bl_5d(){
        actualizarTabla('t1_indicador_bl_5', 'Descarga base de datos en blanco', '1');
        let tabla= 't1_indicador_bl_5';
    $.ajax({
                    url:'./sincroprivacionesd',
                    method: "GET",
                    data: { tabla: tabla},  
                    dataType:'JSON',
                    success:function(data){
                      $('#barracarga').html('100%');
                      $('#barracarga').css('width','100%');                      
                      actualizarTabla('t1_indicador_bl_5', 'Descarga base de datos en blanco', '2');
                          t1_indicador_bse_1d();                 
                    },
                    error: function(xhr, status, error) {
                      actualizarTabla('t1_indicador_bl_5', 'Descarga base de datos en blanco', '3');
                          reintentarfuncion(t1_indicador_bl_3d, 't1_indicador_bl_5');
                              console.log(xhr.responseText);
                          }
                  })
  }
  function t1_indicador_bse_1d(){
        actualizarTabla('t1_indicador_bse_1', 'Descarga base de datos en blanco', '1');
        let tabla= 't1_indicador_bse_1';
    $.ajax({
                    url:'./sincroprivacionesd',
                    method: "GET",
                    data: { tabla: tabla},  
                    dataType:'JSON',
                    success:function(data){
                      $('#barracarga').html('100%');
                      $('#barracarga').css('width','100%');                      
                      actualizarTabla('t1_indicador_bse_1', 'Descarga base de datos en blanco', '2');
                            t1_indicador_bse_4d();               
                    },
                    error: function(xhr, status, error) {
                      actualizarTabla('t1_indicador_bse_1', 'Descarga base de datos en blanco', '3');
                          reintentarfuncion(t1_indicador_bl_5d, 't1_indicador_bse_1');
                              console.log(xhr.responseText);
                          }
                  })
  }
  function t1_indicador_bse_4d(){
        actualizarTabla('t1_indicador_bse_4', 'Descarga base de datos en blanco', '1');
        let tabla= 't1_indicador_bse_4';
    $.ajax({
                    url:'./sincroprivacionesd',
                    method: "GET",
                    data: { tabla: tabla},  
                    dataType:'JSON',
                    success:function(data){
                      $('#barracarga').html('100%');
                      $('#barracarga').css('width','100%');                      
                      actualizarTabla('t1_indicador_bse_4', 'Descarga base de datos en blanco', '2');
                          t1_indicador_bse_5d();                 
                    },
                    error: function(xhr, status, error) {
                      actualizarTabla('t1_indicador_bse_4', 'Descarga base de datos en blanco', '3');
                          reintentarfuncion(t1_indicador_bse_1d, 't1_indicador_bse_4');
                              console.log(xhr.responseText);
                          }
                  })
  }
  function t1_indicador_bse_5d(){
        actualizarTabla('t1_indicador_bse_5', 'Descarga base de datos en blanco', '1');
        let tabla= 't1_indicador_bse_5';
    $.ajax({
                    url:'./sincroprivacionesd',
                    method: "GET",
                    data: { tabla: tabla},  
                    dataType:'JSON',
                    success:function(data){
                      $('#barracarga').html('100%');
                      $('#barracarga').css('width','100%');                      
                      actualizarTabla('t1_indicador_bse_5', 'Descarga base de datos en blanco', '2');
                              t1_indicador_bse_6d();             
                    },
                    error: function(xhr, status, error) {
                      actualizarTabla('t1_indicador_bse_5', 'Descarga base de datos en blanco', '3');
                          reintentarfuncion(t1_indicador_bse_4d, 't1_indicador_bse_5');
                              console.log(xhr.responseText);
                          }
                  })
  }
  function t1_indicador_bse_6d(){
        actualizarTabla('t1_indicador_bse_6', 'Descarga base de datos en blanco', '1');
        let tabla= 't1_indicador_bse_6';
    $.ajax({
                    url:'./sincroprivacionesd',
                    method: "GET",
                    data: { tabla: tabla},  
                    dataType:'JSON',
                    success:function(data){
                      $('#barracarga').html('100%');
                      $('#barracarga').css('width','100%');                      
                      actualizarTabla('t1_indicador_bse_6', 'Descarga base de datos en blanco', '2');
                          t1_indicador_bse_7d();                 
                    },
                    error: function(xhr, status, error) {
                      actualizarTabla('t1_indicador_bse_6', 'Descarga base de datos en blanco', '3');
                          reintentarfuncion(t1_indicador_bse_5d, 't1_indicador_bse_6');
                              console.log(xhr.responseText);
                          }
                  })
  }
  function t1_indicador_bse_7d(){
        actualizarTabla('t1_indicador_bse_7', 'Descarga base de datos en blanco', '1');
        let tabla= 't1_indicador_bse_7';
    $.ajax({
                    url:'./sincroprivacionesd',
                    method: "GET",
                    data: { tabla: tabla},  
                    dataType:'JSON',
                    success:function(data){
                      $('#barracarga').html('100%');
                      $('#barracarga').css('width','100%');                      
                      actualizarTabla('t1_indicador_bse_7', 'Descarga base de datos en blanco', '2');
                          t1_privacion10d();                 
                    },
                    error: function(xhr, status, error) {
                      actualizarTabla('t1_indicador_bse_7', 'Descarga base de datos en blanco', '3');
                          reintentarfuncion(t1_indicador_bse_6d, 't1_indicador_bse_7');
                              console.log(xhr.responseText);
                          }
                  })
  }
  function t1_privacion10d(){
        actualizarTabla('t1_privacion10', 'Descarga base de datos en blanco', '1');
        let tabla= 't1_privacion10';
    $.ajax({
                    url:'./sincroprivacionesd',
                    method: "GET",
                    data: { tabla: tabla},  
                    dataType:'JSON',
                    success:function(data){
                      $('#barracarga').html('100%');
                      $('#barracarga').css('width','100%');                      
                      actualizarTabla('t1_privacion10', 'Descarga base de datos en blanco', '2');
                           t1_privacion11d();                
                    },
                    error: function(xhr, status, error) {
                      actualizarTabla('t1_privacion10', 'Descarga base de datos en blanco', '3');
                          reintentarfuncion(t1_indicador_bse_7d, 't1_privacion10');
                              console.log(xhr.responseText);
                          }
                  })
  }
  function t1_privacion11d(){
        actualizarTabla('t1_privacion11', 'Descarga base de datos en blanco', '1');
        let tabla= 't1_privacion11';
    $.ajax({
                    url:'./sincroprivacionesd',
                    method: "GET",
                    data: { tabla: tabla},  
                    dataType:'JSON',
                    success:function(data){
                      $('#barracarga').html('100%');
                      $('#barracarga').css('width','100%');                      
                      actualizarTabla('t1_privacion11', 'Descarga base de datos en blanco', '2');
                             t1_privacion12d();              
                    },
                    error: function(xhr, status, error) {
                      actualizarTabla('t1_privacion11', 'Descarga base de datos en blanco', '3');
                          reintentarfuncion(t1_privacion10d, 't1_privacion11');
                              console.log(xhr.responseText);
                          }
                  })
  }
  function t1_privacion12d(){
        actualizarTabla('t1_privacion12', 'Descarga base de datos en blanco', '1');
        let tabla= 't1_privacion12';
    $.ajax({
                    url:'./sincroprivacionesd',
                    method: "GET",
                    data: { tabla: tabla},  
                    dataType:'JSON',
                    success:function(data){
                      $('#barracarga').html('100%');
                      $('#barracarga').css('width','100%');                      
                      actualizarTabla('t1_privacion12', 'Descarga base de datos en blanco', '2');
                           t1_privacion13d();                
                    },
                    error: function(xhr, status, error) {
                      actualizarTabla('t1_privacion12', 'Descarga base de datos en blanco', '3');
                          reintentarfuncion(t1_privacion11d, 't1_privacion12');
                              console.log(xhr.responseText);
                          }
                  })
  }
  function t1_privacion13d(){
        actualizarTabla('t1_privacion13', 'Descarga base de datos en blanco', '1');
        let tabla= 't1_privacion13';
    $.ajax({
                    url:'./sincroprivacionesd',
                    method: "GET",
                    data: { tabla: tabla},  
                    dataType:'JSON',
                    success:function(data){
                      $('#barracarga').html('100%');
                      $('#barracarga').css('width','100%');                      
                      actualizarTabla('t1_privacion13', 'Descarga base de datos en blanco', '2');
                          t1_privacion14d();                 
                    },
                    error: function(xhr, status, error) {
                      actualizarTabla('t1_privacion13', 'Descarga base de datos en blanco', '3');
                          reintentarfuncion(t1_privacion12d, 't1_privacion13');
                              console.log(xhr.responseText);
                          }
                  })
  }
  function t1_privacion14d(){
        actualizarTabla('t1_privacion14', 'Descarga base de datos en blanco', '1');
        let tabla= 't1_privacion14';
    $.ajax({
                    url:'./sincroprivacionesd',
                    method: "GET",
                    data: { tabla: tabla},  
                    dataType:'JSON',
                    success:function(data){
                      $('#barracarga').html('100%');
                      $('#barracarga').css('width','100%');                      
                      actualizarTabla('t1_privacion14', 'Descarga base de datos en blanco', '2');
                           t1_privacion15d();                
                    },
                    error: function(xhr, status, error) {
                      actualizarTabla('t1_privacion14', 'Descarga base de datos en blanco', '3');
                          reintentarfuncion(t1_privacion13d, 't1_privacion14');
                              console.log(xhr.responseText);
                          }
                  })
  }
  function t1_privacion15d(){
        actualizarTabla('t1_privacion15', 'Descarga base de datos en blanco', '1');
        let tabla= 't1_privacion15';
    $.ajax({
                    url:'./sincroprivacionesd',
                    method: "GET",
                    data: { tabla: tabla},  
                    dataType:'JSON',
                    success:function(data){
                      $('#barracarga').html('100%');
                      $('#barracarga').css('width','100%');                      
                      actualizarTabla('t1_privacion15', 'Descarga base de datos en blanco', '2');
                        t1_privacion16d();                   
                    },
                    error: function(xhr, status, error) {
                      actualizarTabla('t1_privacion15', 'Descarga base de datos en blanco', '3');
                          reintentarfuncion(t1_privacion14d, 't1_privacion15');
                              console.log(xhr.responseText);
                          }
                  })
  }
  function t1_privacion16d(){
        actualizarTabla('t1_privacion16', 'Descarga base de datos en blanco', '1');
        let tabla= 't1_privacion16';
    $.ajax({
                    url:'./sincroprivacionesd',
                    method: "GET",
                    data: { tabla: tabla},  
                    dataType:'JSON',
                    success:function(data){
                      $('#barracarga').html('100%');
                      $('#barracarga').css('width','100%');                      
                      actualizarTabla('t1_privacion16', 'Descarga base de datos en blanco', '2');
                             t1_privacion2d();              
                    },
                    error: function(xhr, status, error) {
                      actualizarTabla('t1_privacion16', 'Descarga base de datos en blanco', '3');
                          reintentarfuncion(t1_privacion15d, 't1_privacion16');
                              console.log(xhr.responseText);
                          }
                  })
  }
  function t1_privacion2d(){
        actualizarTabla('t1_privacion2', 'Descarga base de datos en blanco', '1');
        let tabla= 't1_privacion2';
    $.ajax({
                    url:'./sincroprivacionesd',
                    method: "GET",
                    data: { tabla: tabla},  
                    dataType:'JSON',
                    success:function(data){
                      $('#barracarga').html('100%');
                      $('#barracarga').css('width','100%');                      
                      actualizarTabla('t1_privacion2', 'Descarga base de datos en blanco', '2');
                              t1_privacion3d();             
                    },
                    error: function(xhr, status, error) {
                      actualizarTabla('t1_privacion2', 'Descarga base de datos en blanco', '3');
                          reintentarfuncion(t1_privacion16d, 't1_privacion2');
                              console.log(xhr.responseText);
                          }
                  })
  }
  function t1_privacion3d(){
        actualizarTabla('t1_privacion3', 'Descarga base de datos en blanco', '1');
        let tabla= 't1_privacion3';
    $.ajax({
                    url:'./sincroprivacionesd',
                    method: "GET",
                    data: { tabla: tabla},  
                    dataType:'JSON',
                    success:function(data){
                      $('#barracarga').html('100%');
                      $('#barracarga').css('width','100%');                      
                      actualizarTabla('t1_privacion3', 'Descarga base de datos en blanco', '2');
                             t1_privacion4d();              
                    },
                    error: function(xhr, status, error) {
                      actualizarTabla('t1_privacion3', 'Descarga base de datos en blanco', '3');
                          reintentarfuncion(t1_privacion2d, 't1_privacion3');
                              console.log(xhr.responseText);
                          }
                  })
  }
  function t1_privacion4d(){
        actualizarTabla('t1_privacion4', 'Descarga base de datos en blanco', '1');
        let tabla= 't1_privacion4';
    $.ajax({
                    url:'./sincroprivacionesd',
                    method: "GET",
                    data: { tabla: tabla},  
                    dataType:'JSON',
                    success:function(data){
                      $('#barracarga').html('100%');
                      $('#barracarga').css('width','100%');                      
                      actualizarTabla('t1_privacion4', 'Descarga base de datos en blanco', '2');
                             t1_privacion5d();              
                    },
                    error: function(xhr, status, error) {
                      actualizarTabla('t1_privacion4', 'Descarga base de datos en blanco', '3');
                          reintentarfuncion(t1_privacion3d, 't1_privacion4');
                              console.log(xhr.responseText);
                          }
                  })
  }
  function t1_privacion5d(){
        actualizarTabla('t1_privacion5', 'Descarga base de datos en blanco', '1');
        let tabla= 't1_privacion5';
    $.ajax({
                    url:'./sincroprivacionesd',
                    method: "GET",
                    data: { tabla: tabla},  
                    dataType:'JSON',
                    success:function(data){
                      $('#barracarga').html('100%');
                      $('#barracarga').css('width','100%');                      
                      actualizarTabla('t1_privacion5', 'Descarga base de datos en blanco', '2');
                            t1_privacion6d();               
                    },
                    error: function(xhr, status, error) {
                      actualizarTabla('t1_privacion5', 'Descarga base de datos en blanco', '3');
                          reintentarfuncion(t1_privacion4d, 't1_privacion5');
                              console.log(xhr.responseText);
                          }
                  })
  }
  function t1_privacion6d(){
        actualizarTabla('t1_privacion6', 'Descarga base de datos en blanco', '1');
        let tabla= 't1_privacion6';
    $.ajax({
                    url:'./sincroprivacionesd',
                    method: "GET",
                    data: { tabla: tabla},  
                    dataType:'JSON',
                    success:function(data){
                      $('#barracarga').html('100%');
                      $('#barracarga').css('width','100%');                      
                      actualizarTabla('t1_privacion6', 'Descarga base de datos en blanco', '2');
                            t1_privacion7d();               
                    },
                    error: function(xhr, status, error) {
                      actualizarTabla('t1_privacion6', 'Descarga base de datos en blanco', '3');
                          reintentarfuncion(t1_privacion5d, 't1_privacion6');
                              console.log(xhr.responseText);
                          }
                  })
  }
  function t1_privacion7d(){
        actualizarTabla('t1_privacion7', 'Descarga base de datos en blanco', '1');
        let tabla= 't1_privacion7';
    $.ajax({
                    url:'./sincroprivacionesd',
                    method: "GET",
                    data: { tabla: tabla},  
                    dataType:'JSON',
                    success:function(data){
                      $('#barracarga').html('100%');
                      $('#barracarga').css('width','100%');                      
                      actualizarTabla('t1_privacion7', 'Descarga base de datos en blanco', '2');
                              t1_privacion8d();             
                    },
                    error: function(xhr, status, error) {
                      actualizarTabla('t1_privacion7', 'Descarga base de datos en blanco', '3');
                          reintentarfuncion(t1_privacion6d, 't1_privacion7');
                              console.log(xhr.responseText);
                          }
                  })
  }
  function t1_privacion8d(){
        actualizarTabla('t1_privacion8', 'Descarga base de datos en blanco', '1');
        let tabla= 't1_privacion8';
    $.ajax({
                    url:'./sincroprivacionesd',
                    method: "GET",
                    data: { tabla: tabla},  
                    dataType:'JSON',
                    success:function(data){
                      $('#barracarga').html('100%');
                      $('#barracarga').css('width','100%');                      
                      actualizarTabla('t1_privacion8', 'Descarga base de datos en blanco', '2');
                         t1_privacion9d();                  
                    },
                    error: function(xhr, status, error) {
                      actualizarTabla('t1_privacion8', 'Descarga base de datos en blanco', '3');
                          reintentarfuncion(t1_privacion7d, 't1_privacion8');
                              console.log(xhr.responseText);
                          }
                  })
  }
  function t1_privacion9d(){
        actualizarTabla('t1_privacion9      ', 'Descarga base de datos en blanco', '1');
        let tabla= 't1_privacion9';
    $.ajax({
                    url:'./sincroprivacionesd',
                    method: "GET",
                    data: { tabla: tabla},  
                    dataType:'JSON',
                    success:function(data){
                      $('#barracarga').html('100%');
                      $('#barracarga').css('width','100%');                      
                      actualizarTabla('t1_privacion9', 'Descarga base de datos en blanco', '2');
                           todook();
                      detenerReloj();                    
                    },
                    error: function(xhr, status, error) {
                      actualizarTabla('t1_privacion9', 'Descarga base de datos en blanco', '3');
                          reintentarfuncion(t1_privacion8d, 't1_privacion9');
                              console.log(xhr.responseText);
                          }
                  })
  }

  // FIN SINCRO ABAJO 



  //INICIA SINCRO ARRIBA

  function t1_principalhogar(){
        iniciarContador();
        actualizarTabla('t1_principalhogar', 'Subida base de datos al servidor', '1');
    $.ajax({
                    url:'./t1_principalhogar',
                    method: "GET",
                    dataType:'JSON',
                    success:function(data){
                      $('#barracarga').html('7%');
                      $('#barracarga').css('width','7%');
                     actualizarTabla('t1_principalhogar', 'Subida base de datos al servidor', '2');
                     t1_hogarcondicionesalimentarias()
                      
                    },
                    error: function(xhr, status, error) {
                      actualizarTabla('t1_principalhogar', 'Subida base de datos al servidor', '3');
                          reintentarfuncion(t1_principalhogar, 't1_principalhogard');
                              console.log(xhr.responseText);
                          }
                  })
  }

  function t1_hogarcondicionesalimentarias(){
        actualizarTabla('t1_hogarcondicionesalimentarias', 'Subida base de datos al servidor', '1');
    $.ajax({
                    url:'./t1_hogarcondicionesalimentarias',
                    method: "GET",
                    dataType:'JSON',
                    success:function(data){
                      $('#barracarga').html('14%');
                      $('#barracarga').css('width','14%');
                      actualizarTabla('t1_hogarcondicionesalimentarias', 'Subida base de datos al servidor', '2');
                     t1_hogarcondicioneshabitabilidad()
                      
                    },
                    error: function(xhr, status, error) {
                      actualizarTabla('t1_hogarcondicionesalimentarias', 'Subida base de datos al servidor', '3');
                          reintentarfuncion(t1_hogarcondicionesalimentarias, 't1_hogarcondicionesalimentarias');
                              console.log(xhr.responseText);
                          }
                  })
  }

  function t1_hogarcondicioneshabitabilidad(){
        actualizarTabla('t1_hogarcondicioneshabitabilidad', 'Subida base de datos al servidor', '1');
    $.ajax({
                    url:'./t1_hogarcondicioneshabitabilidad',
                    method: "GET",
                    dataType:'JSON',
                    success:function(data){
                      $('#barracarga').html('21%');
                      $('#barracarga').css('width','21%');
                      actualizarTabla('t1_hogarcondicioneshabitabilidad', 'Subida base de datos al servidor', '2');
                     t1_hogarconformacionfamiliar()
                      
                    },
                    error: function(xhr, status, error) {
                      actualizarTabla('t1_hogarcondicioneshabitabilidad', 'Subida base de datos al servidor', '3');
                          reintentarfuncion(t1_hogarcondicioneshabitabilidad, 't1_hogarcondicioneshabitabilidad');
                              console.log(xhr.responseText);
                          }
                  })
  }

  function t1_hogarconformacionfamiliar(){
        actualizarTabla('t1_hogarconformacionfamiliar', 'Subida base de datos al servidor', '1');
    $.ajax({
                    url:'./t1_hogarconformacionfamiliar',
                    method: "GET",
                    dataType:'JSON',
                    success:function(data){
                      $('#barracarga').html('28%');
                      $('#barracarga').css('width','28%');
                      actualizarTabla('t1_hogarconformacionfamiliar', 'Subida base de datos al servidor', '2');
                      t1_hogardatosgeograficos()
                      
                    },
                    error: function(xhr, status, error) {
                      actualizarTabla('t1_hogarconformacionfamiliar', 'Subida base de datos al servidor', '3');
                          reintentarfuncion(t1_hogarconformacionfamiliar, 't1_hogarconformacionfamiliar');
                              console.log(xhr.responseText);
                          }
                  })
  }



  function t1_hogardatosgeograficos(){
        actualizarTabla('t1_hogardatosgeograficos', 'Subida base de datos al servidor', '1');
    $.ajax({
                    url:'./t1_hogardatosgeograficos',
                    method: "GET",
                    dataType:'JSON',
                    success:function(data){
                      $('#barracarga').html('35%');
                      $('#barracarga').css('width','35%');
                      actualizarTabla('t1_hogardatosgeograficos', 'Subida base de datos al servidor', '2');
                     t1_hogarentornofamiliar()
                      
                    },
                    error: function(xhr, status, error) {
                     actualizarTabla('t1_hogardatosgeograficos', 'Subida base de datos al servidor', '3');
                          reintentarfuncion(t1_hogardatosgeograficos, 't1_hogardatosgeograficos');
                              console.log(xhr.responseText);
                          }
                  })
  }

  function t1_hogarentornofamiliar(){
        actualizarTabla('t1_hogarentornofamiliar', 'Subida base de datos al servidor', '1');
    $.ajax({
                    url:'./t1_hogarentornofamiliar',
                    method: "GET",
                    dataType:'JSON',
                    success:function(data){
                      $('#barracarga').html('42%');
                      $('#barracarga').css('width','42%');
                      actualizarTabla('t1_hogarentornofamiliar', 'Subida base de datos al servidor', '2');
                     t1_integrantesfinanciero()
                      
                    },
                    error: function(xhr, status, error) {
                    actualizarTabla('t1_hogarentornofamiliar', 'Subida base de datos al servidor', '3');
                          reintentarfuncion(t1_hogarentornofamiliar, 't1_hogarentornofamiliar');
                              console.log(xhr.responseText);
                          }
                  })
  }

  function t1_integrantesfinanciero(){
        actualizarTabla('t1_integrantesfinanciero', 'Subida base de datos al servidor', '1');
    $.ajax({
                    url:'./t1_integrantesfinanciero',
                    method: "GET",
                    dataType:'JSON',
                    success:function(data){
                      $('#barracarga').html('49%');
                      $('#barracarga').css('width','49%');
                      actualizarTabla('t1_integrantesfinanciero', 'Subida base de datos al servidor', '2');
                     t1_integrantesfisicoyemocional()
                      
                    },
                    error: function(xhr, status, error) {
                      actualizarTabla('t1_integrantesfinanciero', 'Subida base de datos al servidor', '3');
                          reintentarfuncion(t1_integrantesfinanciero, 't1_integrantesfinanciero');
                              console.log(xhr.responseText);
                          }
                  })
  }

  function t1_integrantesfisicoyemocional(){
        actualizarTabla('t1_integrantesfisicoyemocional', 'Subida base de datos al servidor', '1');
    $.ajax({
                    url:'./t1_integrantesfisicoyemocional',
                    method: "GET",
                    dataType:'JSON',
                    success:function(data){
                      $('#barracarga').html('56%');
                      $('#barracarga').css('width','56%');
                      actualizarTabla('t1_integrantesfisicoyemocional', 'Subida base de datos al servidor', '2');
                     t1_integranteshogar()
                      
                    },
                    error: function(xhr, status, error) {
                      actualizarTabla('t1_integrantesfisicoyemocional', 'Subida base de datos al servidor', '3');
                          reintentarfuncion(t1_integrantesfisicoyemocional, 't1_integrantesfisicoyemocional');
                              console.log(xhr.responseText);
                          }
                  })
  }

  function t1_integranteshogar(){
        actualizarTabla('t1_integranteshogar', 'Subida base de datos al servidor', '1');
    $.ajax({
                    url:'./t1_integranteshogar',
                    method: "GET",
                    dataType:'JSON',
                    success:function(data){
                      $('#barracarga').html('63%');
                      $('#barracarga').css('width','63%');
                      actualizarTabla('t1_integranteshogar', 'Subida base de datos al servidor', '2');
                     t1_integrantesidentitario()
                      
                    },
                    error: function(xhr, status, error) {
                      actualizarTabla('t1_integranteshogar', 'Subida base de datos al servidor', '3');
                          reintentarfuncion(t1_integranteshogar, 't1_integranteshogar');
                              console.log(xhr.responseText);
                          }
                  })
  }

  function t1_integrantesidentitario(){
        actualizarTabla('t1_integrantesidentitario', 'Subida base de datos al servidor', '1');
    $.ajax({
                    url:'./t1_integrantesidentitario',
                    method: "GET",
                    dataType:'JSON',
                    success:function(data){
                      $('#barracarga').html('70%');
                      $('#barracarga').css('width','70%');
                      actualizarTabla('t1_integrantesidentitario', 'Subida base de datos al servidor', '2');
                      t1_integrantesintelectual()
                      
                    },
                    error: function(xhr, status, error) {
                    actualizarTabla('t1_integrantesidentitario', 'Subida base de datos al servidor', '3');
                          reintentarfuncion(t1_integrantesidentitario, 't1_integrantesidentitario');
                              console.log(xhr.responseText);
                          }
                  })
  }

  function t1_integrantesintelectual(){
        actualizarTabla('t1_integrantesintelectual', 'Subida base de datos al servidor', '1');
    $.ajax({
                    url:'./t1_integrantesintelectual',
                    method: "GET",
                    dataType:'JSON',
                    success:function(data){
                      $('#barracarga').html('80%');
                      $('#barracarga').css('width','80%');
                      actualizarTabla('t1_integrantesintelectual', 'Subida base de datos al servidor', '2');
                     t1_integranteslegal()
                      
                    },
                    error: function(xhr, status, error) {
                      actualizarTabla('t1_integrantesintelectual', 'Subida base de datos al servidor', '3');
                          reintentarfuncion(t1_integrantesintelectual, 't1_integrantesintelectual');
                              console.log(xhr.responseText);
                          }
                  })
  }

  function t1_integranteslegal(){
        actualizarTabla('t1_integranteslegal', 'Subida base de datos al servidor', '1');
    $.ajax({
                    url:'./t1_integranteslegal',
                    method: "GET",
                    dataType:'JSON',
                    success:function(data){
                      $('#barracarga').html('100%');
                      $('#barracarga').css('width','100%');                      
                      actualizarTabla('t1_integranteslegal', 'Subida base de datos al servidor', '2');
                      t1_privacion1();                   
                    },
                    error: function(xhr, status, error) {
                      actualizarTabla('t1_integranteslegal', 'Subida base de datos al servidor', '3');
                          reintentarfuncion(t1_integranteslegal, 't1_integranteslegal');
                              console.log(xhr.responseText);
                          }
                  })
  }



  function t1_privacion1(){
        actualizarTabla('t1_privacion1', 'Subida base de datos al servidor', '1');
        let tabla= 't1_privacion1';
    $.ajax({
                    url:'./sincroprivaciones',
                    method: "GET",
                    data: { tabla: tabla},  
                    dataType:'JSON',
                    success:function(data){
                      $('#barracarga').html('100%');
                      $('#barracarga').css('width','100%');                      
                      actualizarTabla('t1_privacion1', 'Subida base de datos al servidor', '2');
                      t1_casillamatriz()                   
                    },
                    error: function(xhr, status, error) {
                      actualizarTabla('t1_privacion1', 'Subida base de datos al servidor', '3');
                          reintentarfuncion(t1_integranteslegal, 't1_privacion1');
                              console.log(xhr.responseText);
                          }
                  })
  }


  function t1_casillamatriz(){
        actualizarTabla('t1_casillamatriz', 'Subida base de datos al servidor', '1');
        let tabla= 't1_casillamatriz';
    $.ajax({
                    url:'./sincroprivaciones',
                    method: "GET",
                    data: { tabla: tabla},  
                    dataType:'JSON',
                    success:function(data){
                      $('#barracarga').html('100%');
                      $('#barracarga').css('width','100%');                      
                      actualizarTabla('t1_casillamatriz', 'Subida base de datos al servidor', '2');
                             t1_indicador_bl_2()              
                    },
                    error: function(xhr, status, error) {
                      actualizarTabla('t1_casillamatriz', 'Subida base de datos al servidor', '3');
                          reintentarfuncion(t1_privacion1, 't1_casillamatriz');
                              console.log(xhr.responseText);
                          }
                  })
  }

  
  function t1_indicador_bl_2(){
        actualizarTabla('t1_indicador_bl_2', 'Subida base de datos al servidor', '1');
        let tabla= 't1_indicador_bl_2';
    $.ajax({
                    url:'./sincroprivaciones',
                    method: "GET",
                    data: { tabla: tabla},  
                    dataType:'JSON',
                    success:function(data){
                      $('#barracarga').html('100%');
                      $('#barracarga').css('width','100%');                      
                      actualizarTabla('t1_indicador_bl_2', 'Subida base de datos al servidor', '2');
                             t1_indicador_bl_3()              
                    },
                    error: function(xhr, status, error) {
                      actualizarTabla('t1_casillamatriz', 'Subida base de datos al servidor', '3');
                          reintentarfuncion(t1_casillamatriz, 't1_indicador_bl_2');
                              console.log(xhr.responseText);
                          }
                  })
  }
  function t1_indicador_bl_3(){
        actualizarTabla('t1_indicador_bl_3', 'Subida base de datos al servidor', '1');
        let tabla= 't1_indicador_bl_3';
    $.ajax({
                    url:'./sincroprivaciones',
                    method: "GET",
                    data: { tabla: tabla},  
                    dataType:'JSON',
                    success:function(data){
                      $('#barracarga').html('100%');
                      $('#barracarga').css('width','100%');                      
                      actualizarTabla('t1_indicador_bl_3', 'Subida base de datos al servidor', '2');
                         t1_indicador_bl_5()                  
                    },
                    error: function(xhr, status, error) {
                      actualizarTabla('t1_indicador_bl_3', 'Subida base de datos al servidor', '3');
                          reintentarfuncion(t1_indicador_bl_2, 't1_indicador_bl_3');
                              console.log(xhr.responseText);
                          }
                  })
  }
  function t1_indicador_bl_5(){
        actualizarTabla('t1_indicador_bl_5', 'Subida base de datos al servidor', '1');
        let tabla= 't1_indicador_bl_5';
    $.ajax({
                    url:'./sincroprivaciones',
                    method: "GET",
                    data: { tabla: tabla},  
                    dataType:'JSON',
                    success:function(data){
                      $('#barracarga').html('100%');
                      $('#barracarga').css('width','100%');                      
                      actualizarTabla('t1_indicador_bl_5', 'Subida base de datos al servidor', '2');
                          t1_indicador_bse_1();                 
                    },
                    error: function(xhr, status, error) {
                      actualizarTabla('t1_indicador_bl_5', 'Subida base de datos al servidor', '3');
                          reintentarfuncion(t1_indicador_bl_3, 't1_indicador_bl_5');
                              console.log(xhr.responseText);
                          }
                  })
  }
  function t1_indicador_bse_1(){
        actualizarTabla('t1_indicador_bse_1', 'Subida base de datos al servidor', '1');
        let tabla= 't1_indicador_bse_1';
    $.ajax({
                    url:'./sincroprivaciones',
                    method: "GET",
                    data: { tabla: tabla},  
                    dataType:'JSON',
                    success:function(data){
                      $('#barracarga').html('100%');
                      $('#barracarga').css('width','100%');                      
                      actualizarTabla('t1_indicador_bse_1', 'Subida base de datos al servidor', '2');
                            t1_indicador_bse_4();               
                    },
                    error: function(xhr, status, error) {
                      actualizarTabla('t1_indicador_bse_1', 'Subida base de datos al servidor', '3');
                          reintentarfuncion(t1_indicador_bl_5, 't1_indicador_bse_1');
                              console.log(xhr.responseText);
                          }
                  })
  }
  function t1_indicador_bse_4(){
        actualizarTabla('t1_indicador_bse_4', 'Subida base de datos al servidor', '1');
        let tabla= 't1_indicador_bse_4';
    $.ajax({
                    url:'./sincroprivaciones',
                    method: "GET",
                    data: { tabla: tabla},  
                    dataType:'JSON',
                    success:function(data){
                      $('#barracarga').html('100%');
                      $('#barracarga').css('width','100%');                      
                      actualizarTabla('t1_indicador_bse_4', 'Subida base de datos al servidor', '2');
                          t1_indicador_bse_5();                 
                    },
                    error: function(xhr, status, error) {
                      actualizarTabla('t1_indicador_bse_4', 'Subida base de datos al servidor', '3');
                          reintentarfuncion(t1_indicador_bse_1, 't1_indicador_bse_4');
                              console.log(xhr.responseText);
                          }
                  })
  }
  function t1_indicador_bse_5(){
        actualizarTabla('t1_indicador_bse_5', 'Subida base de datos al servidor', '1');
        let tabla= 't1_indicador_bse_5';
    $.ajax({
                    url:'./sincroprivaciones',
                    method: "GET",
                    data: { tabla: tabla},  
                    dataType:'JSON',
                    success:function(data){
                      $('#barracarga').html('100%');
                      $('#barracarga').css('width','100%');                      
                      actualizarTabla('t1_indicador_bse_5', 'Subida base de datos al servidor', '2');
                              t1_indicador_bse_6();             
                    },
                    error: function(xhr, status, error) {
                      actualizarTabla('t1_indicador_bse_5', 'Subida base de datos al servidor', '3');
                          reintentarfuncion(t1_indicador_bse_4, 't1_indicador_bse_5');
                              console.log(xhr.responseText);
                          }
                  })
  }
  function t1_indicador_bse_6(){
        actualizarTabla('t1_indicador_bse_6', 'Subida base de datos al servidor', '1');
        let tabla= 't1_indicador_bse_6';
    $.ajax({
                    url:'./sincroprivaciones',
                    method: "GET",
                    data: { tabla: tabla},  
                    dataType:'JSON',
                    success:function(data){
                      $('#barracarga').html('100%');
                      $('#barracarga').css('width','100%');                      
                      actualizarTabla('t1_indicador_bse_6', 'Subida base de datos al servidor', '2');
                          t1_indicador_bse_7();                 
                    },
                    error: function(xhr, status, error) {
                      actualizarTabla('t1_indicador_bse_6', 'Subida base de datos al servidor', '3');
                          reintentarfuncion(t1_indicador_bse_5, 't1_indicador_bse_6');
                              console.log(xhr.responseText);
                          }
                  })
  }
  function t1_indicador_bse_7(){
        actualizarTabla('t1_indicador_bse_7', 'Subida base de datos al servidor', '1');
        let tabla= 't1_indicador_bse_7';
    $.ajax({
                    url:'./sincroprivaciones',
                    method: "GET",
                    data: { tabla: tabla},  
                    dataType:'JSON',
                    success:function(data){
                      $('#barracarga').html('100%');
                      $('#barracarga').css('width','100%');                      
                      actualizarTabla('t1_indicador_bse_7', 'Subida base de datos al servidor', '2');
                          t1_privacion10();                 
                    },
                    error: function(xhr, status, error) {
                      actualizarTabla('t1_indicador_bse_7', 'Subida base de datos al servidor', '3');
                          reintentarfuncion(t1_indicador_bse_6, 't1_indicador_bse_7');
                              console.log(xhr.responseText);
                          }
                  })
  }
  function t1_privacion10(){
        actualizarTabla('t1_privacion10', 'Subida base de datos al servidor', '1');
        let tabla= 't1_privacion10';
    $.ajax({
                    url:'./sincroprivaciones',
                    method: "GET",
                    data: { tabla: tabla},  
                    dataType:'JSON',
                    success:function(data){
                      $('#barracarga').html('100%');
                      $('#barracarga').css('width','100%');                      
                      actualizarTabla('t1_privacion10', 'Subida base de datos al servidor', '2');
                           t1_privacion11();                
                    },
                    error: function(xhr, status, error) {
                      actualizarTabla('t1_privacion10', 'Subida base de datos al servidor', '3');
                          reintentarfuncion(t1_indicador_bse_7, 't1_privacion10');
                              console.log(xhr.responseText);
                          }
                  })
  }
  function t1_privacion11(){
        actualizarTabla('t1_privacion11', 'Subida base de datos al servidor', '1');
        let tabla= 't1_privacion11';
    $.ajax({
                    url:'./sincroprivaciones',
                    method: "GET",
                    data: { tabla: tabla},  
                    dataType:'JSON',
                    success:function(data){
                      $('#barracarga').html('100%');
                      $('#barracarga').css('width','100%');                      
                      actualizarTabla('t1_privacion11', 'Subida base de datos al servidor', '2');
                             t1_privacion12();              
                    },
                    error: function(xhr, status, error) {
                      actualizarTabla('t1_privacion11', 'Subida base de datos al servidor', '3');
                          reintentarfuncion(t1_privacion10, 't1_privacion11');
                              console.log(xhr.responseText);
                          }
                  })
  }
  function t1_privacion12(){
        actualizarTabla('t1_privacion12', 'Subida base de datos al servidor', '1');
        let tabla= 't1_privacion12';
    $.ajax({
                    url:'./sincroprivaciones',
                    method: "GET",
                    data: { tabla: tabla},  
                    dataType:'JSON',
                    success:function(data){
                      $('#barracarga').html('100%');
                      $('#barracarga').css('width','100%');                      
                      actualizarTabla('t1_privacion12', 'Subida base de datos al servidor', '2');
                           t1_privacion13();                
                    },
                    error: function(xhr, status, error) {
                      actualizarTabla('t1_privacion12', 'Subida base de datos al servidor', '3');
                          reintentarfuncion(t1_privacion11, 't1_privacion12');
                              console.log(xhr.responseText);
                          }
                  })
  }
  function t1_privacion13(){
        actualizarTabla('t1_privacion13', 'Subida base de datos al servidor', '1');
        let tabla= 't1_privacion13';
    $.ajax({
                    url:'./sincroprivaciones',
                    method: "GET",
                    data: { tabla: tabla},  
                    dataType:'JSON',
                    success:function(data){
                      $('#barracarga').html('100%');
                      $('#barracarga').css('width','100%');                      
                      actualizarTabla('t1_privacion13', 'Subida base de datos al servidor', '2');
                          t1_privacion14();                 
                    },
                    error: function(xhr, status, error) {
                      actualizarTabla('t1_privacion13', 'Subida base de datos al servidor', '3');
                          reintentarfuncion(t1_privacion12, 't1_privacion13');
                              console.log(xhr.responseText);
                          }
                  })
  }
  function t1_privacion14(){
        actualizarTabla('t1_privacion14', 'Subida base de datos al servidor', '1');
        let tabla= 't1_privacion14';
    $.ajax({
                    url:'./sincroprivaciones',
                    method: "GET",
                    data: { tabla: tabla},  
                    dataType:'JSON',
                    success:function(data){
                      $('#barracarga').html('100%');
                      $('#barracarga').css('width','100%');                      
                      actualizarTabla('t1_privacion14', 'Subida base de datos al servidor', '2');
                           t1_privacion15();                
                    },
                    error: function(xhr, status, error) {
                      actualizarTabla('t1_privacion14', 'Subida base de datos al servidor', '3');
                          reintentarfuncion(t1_privacion13, 't1_privacion14');
                              console.log(xhr.responseText);
                          }
                  })
  }
  function t1_privacion15(){
        actualizarTabla('t1_privacion15', 'Subida base de datos al servidor', '1');
        let tabla= 't1_privacion15';
    $.ajax({
                    url:'./sincroprivaciones',
                    method: "GET",
                    data: { tabla: tabla},  
                    dataType:'JSON',
                    success:function(data){
                      $('#barracarga').html('100%');
                      $('#barracarga').css('width','100%');                      
                      actualizarTabla('t1_privacion15', 'Subida base de datos al servidor', '2');
                        t1_privacion16();                   
                    },
                    error: function(xhr, status, error) {
                      actualizarTabla('t1_privacion15', 'Subida base de datos al servidor', '3');
                          reintentarfuncion(t1_privacion14, 't1_privacion15');
                              console.log(xhr.responseText);
                          }
                  })
  }
  function t1_privacion16(){
        actualizarTabla('t1_privacion16', 'Subida base de datos al servidor', '1');
        let tabla= 't1_privacion16';
    $.ajax({
                    url:'./sincroprivaciones',
                    method: "GET",
                    data: { tabla: tabla},  
                    dataType:'JSON',
                    success:function(data){
                      $('#barracarga').html('100%');
                      $('#barracarga').css('width','100%');                      
                      actualizarTabla('t1_privacion16', 'Subida base de datos al servidor', '2');
                             t1_privacion2();              
                    },
                    error: function(xhr, status, error) {
                      actualizarTabla('t1_privacion16', 'Subida base de datos al servidor', '3');
                          reintentarfuncion(t1_privacion15, 't1_privacion16');
                              console.log(xhr.responseText);
                          }
                  })
  }
  function t1_privacion2(){
        actualizarTabla('t1_privacion2', 'Subida base de datos al servidor', '1');
        let tabla= 't1_privacion2';
    $.ajax({
                    url:'./sincroprivaciones',
                    method: "GET",
                    data: { tabla: tabla},  
                    dataType:'JSON',
                    success:function(data){
                      $('#barracarga').html('100%');
                      $('#barracarga').css('width','100%');                      
                      actualizarTabla('t1_privacion2', 'Subida base de datos al servidor', '2');
                              t1_privacion3();             
                    },
                    error: function(xhr, status, error) {
                      actualizarTabla('t1_privacion2', 'Subida base de datos al servidor', '3');
                          reintentarfuncion(t1_privacion16, 't1_privacion2');
                              console.log(xhr.responseText);
                          }
                  })
  }
  function t1_privacion3(){
        actualizarTabla('t1_privacion3', 'Subida base de datos al servidor', '1');
        let tabla= 't1_privacion3';
    $.ajax({
                    url:'./sincroprivaciones',
                    method: "GET",
                    data: { tabla: tabla},  
                    dataType:'JSON',
                    success:function(data){
                      $('#barracarga').html('100%');
                      $('#barracarga').css('width','100%');                      
                      actualizarTabla('t1_privacion3', 'Subida base de datos al servidor', '2');
                             t1_privacion4();              
                    },
                    error: function(xhr, status, error) {
                      actualizarTabla('t1_privacion3', 'Subida base de datos al servidor', '3');
                          reintentarfuncion(t1_privacion2, 't1_privacion3');
                              console.log(xhr.responseText);
                          }
                  })
  }
  function t1_privacion4(){
        actualizarTabla('t1_privacion4', 'Subida base de datos al servidor', '1');
        let tabla= 't1_privacion4';
    $.ajax({
                    url:'./sincroprivaciones',
                    method: "GET",
                    data: { tabla: tabla},  
                    dataType:'JSON',
                    success:function(data){
                      $('#barracarga').html('100%');
                      $('#barracarga').css('width','100%');                      
                      actualizarTabla('t1_privacion4', 'Subida base de datos al servidor', '2');
                             t1_privacion5();              
                    },
                    error: function(xhr, status, error) {
                      actualizarTabla('t1_privacion4', 'Subida base de datos al servidor', '3');
                          reintentarfuncion(t1_privacion3, 't1_privacion4');
                              console.log(xhr.responseText);
                          }
                  })
  }
  function t1_privacion5(){
        actualizarTabla('t1_privacion5', 'Subida base de datos al servidor', '1');
        let tabla= 't1_privacion5';
    $.ajax({
                    url:'./sincroprivaciones',
                    method: "GET",
                    data: { tabla: tabla},  
                    dataType:'JSON',
                    success:function(data){
                      $('#barracarga').html('100%');
                      $('#barracarga').css('width','100%');                      
                      actualizarTabla('t1_privacion5', 'Subida base de datos al servidor', '2');
                            t1_privacion6();               
                    },
                    error: function(xhr, status, error) {
                      actualizarTabla('t1_privacion5', 'Subida base de datos al servidor', '3');
                          reintentarfuncion(t1_privacion4, 't1_privacion5');
                              console.log(xhr.responseText);
                          }
                  })
  }
  function t1_privacion6(){
        actualizarTabla('t1_privacion6', 'Subida base de datos al servidor', '1');
        let tabla= 't1_privacion6';
    $.ajax({
                    url:'./sincroprivaciones',
                    method: "GET",
                    data: { tabla: tabla},  
                    dataType:'JSON',
                    success:function(data){
                      $('#barracarga').html('100%');
                      $('#barracarga').css('width','100%');                      
                      actualizarTabla('t1_privacion6', 'Subida base de datos al servidor', '2');
                            t1_privacion7();               
                    },
                    error: function(xhr, status, error) {
                      actualizarTabla('t1_privacion6', 'Subida base de datos al servidor', '3');
                          reintentarfuncion(t1_privacion5, 't1_privacion6');
                              console.log(xhr.responseText);
                          }
                  })
  }
  function t1_privacion7(){
        actualizarTabla('t1_privacion7', 'Subida base de datos al servidor', '1');
        let tabla= 't1_privacion7';
    $.ajax({
                    url:'./sincroprivaciones',
                    method: "GET",
                    data: { tabla: tabla},  
                    dataType:'JSON',
                    success:function(data){
                      $('#barracarga').html('100%');
                      $('#barracarga').css('width','100%');                      
                      actualizarTabla('t1_privacion7', 'Subida base de datos al servidor', '2');
                              t1_privacion8();             
                    },
                    error: function(xhr, status, error) {
                      actualizarTabla('t1_privacion7', 'Subida base de datos al servidor', '3');
                          reintentarfuncion(t1_privacion6, 't1_privacion7');
                              console.log(xhr.responseText);
                          }
                  })
  }
  function t1_privacion8(){
        actualizarTabla('t1_privacion8', 'Subida base de datos al servidor', '1');
        let tabla= 't1_privacion8';
    $.ajax({
                    url:'./sincroprivaciones',
                    method: "GET",
                    data: { tabla: tabla},  
                    dataType:'JSON',
                    success:function(data){
                      $('#barracarga').html('100%');
                      $('#barracarga').css('width','100%');                      
                      actualizarTabla('t1_privacion8', 'Subida base de datos al servidor', '2');
                         t1_privacion9();                  
                    },
                    error: function(xhr, status, error) {
                      actualizarTabla('t1_privacion8', 'Subida base de datos al servidor', '3');
                          reintentarfuncion(t1_privacion7, 't1_privacion8');
                              console.log(xhr.responseText);
                          }
                  })
  }
  function t1_privacion9 (){
        actualizarTabla('t1_privacion9', 'Subida base de datos al servidor', '1');
        let tabla= 't1_privacion9';
    $.ajax({
                    url:'./sincroprivaciones',
                    method: "GET",
                    data: { tabla: tabla},  
                    dataType:'JSON',
                    success:function(data){ 
                      actualizarTabla('t1_privacion9', 'Subida base de datos al servidor', '2');
                      $('#barracarga').html('100%');
                      $('#barracarga').css('width','100%');                      
                     
                           todook();
                      detenerReloj();                    
                    },
                    error: function(xhr, status, error) {
                      actualizarTabla('t1_privacion9', 'Subida base de datos al servidor', '3');
                          reintentarfuncion(t1_privacion8, 't1_privacion8');
                              console.log(xhr.responseText);
                          }
                  })
  }

//FINALIZA SINCRO ARRIBA


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



   

