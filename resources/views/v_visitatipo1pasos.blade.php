
<link rel="shortcut icon" href="../favicon.ico">
   
    <link rel="stylesheet" href="{{ asset('/assets/css/swiper-bundle.min.css') }}">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.14.0/Sortable.min.js"></script>


@extends('componentes.navlateral')

@section('title', 'Visita tipo 1')

@section('content')
  
<div class="container">
<img width="100%" height="100px" src="{{ asset('imagenes/headers.png') }}" alt="" class="isticky-top"  > <hr>

<style>
body {
    font-family: 'Montserrat', sans-serif;
    margin: 0;
    padding: 0;
    background: #ffffff;
}

.card_wrapper {
    position: relative;
    width: 300px;
    height: 400px;
    overflow: hidden;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: auto;
}


.card {
    position: relative;
    width: 100%;
    height: 100%;
    transition: transform 0.6s;
    transform-style: preserve-3d;
    border:none
}

.card .content {
    position: relative;
    width: 100%;
    height: 84%;
    transform-style: preserve-3d;
}

.card .front,
.card .back {
    position: absolute;
    width: 100%;
    height: 100%;
    backface-visibility: hidden;
}

.card .front img {
    width: 100%;
    height: 100%;
    object-fit: contain;
}

.card .back {
    transform: rotateY(180deg);
    padding: 20px;
    box-sizing: border-box;
    text-align: center;
     background: #0dcaf0; 
    /* background-image: url('https://www.medellinjoven.com/_next/static/media/respaldoCard.ae8a1be0.jpg'); */
    /* background-image: url('./12.jpg'); */
    background-position: 50%;
    background-repeat: no-repeat;
    background-size: contain;
}

.card_wrapper:hover .card {
    transform: rotateY(180deg);
}

.middle {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 87%;
    text-align: center;
}

.middle h3 label {
    color: #fff;
    text-decoration: none;
    font-size: 18px;
    font-weight: bold;
 
}


.btn-action {
    display: inline-block;
    padding: 10px 20px;
    background-color: #fff;
    color: #0dcaf0;
    text-decoration: none;
    border-radius: 5px;
    margin-top: 20px;
}

.smCard {
    display: flex;
    justify-content: center;
    margin-top: 20px;
}

.smCard a {
    margin: 0 10px;
}

.smCard a img {
    width: 20px;
    height: 20px;
}

.swiper {
    width: 100%;
    height: 63vh; /* o cualquier tamaño que necesites */
    display: flex;
    align-items: center;
}

.swiper-slide {
    display: flex;
    justify-content: center;
    align-items: center;
}

.swiper-wrapper {
    position: relative;
    width: 40%;
    height: 121%;
    z-index: 1;
    display: flex;
    transition-property: transform;
    transition-timing-function: var(--swiper-wrapper-transition-timing-function, initial);
    box-sizing: content-box;
}
#sortable tr {
            cursor: pointer; /* Cambia el cursor al pasar sobre las filas */
            transition: background-color 0.3s ease; /* Suaviza el cambio de color en hover */
        }
</style>

<!-- <style>
    /* Estilo para las filas con hover y cursor */

        th, td {
            text-align: center;
            padding: 10px;
        }

        th {
            background-color: #d3d3d3;
        }

        /* Estilo para las filas con hover y cursor */
        

        /* Efecto hover - color gris */
        #sortable tr:hover {
            background-color: #dcdcdc; /* Cambia el fondo cuando el mouse pasa sobre la fila */
        }

        /* Estilo para la fila que se está arrastrando */
        .sortable-chosen {
            background-color: #a9a9a9; /* Fondo gris oscuro al arrastrar */
        }

        /* Estilo para la fila fantasma */
        .sortable-ghost {
            background-color: #b0b0b0; /* Fondo más claro mientras arrastras */
            opacity: 0.7; /* Hacemos la fila "fantasma" un poco transparente */
        }

 
</style> -->

<div class="swiper mySwiper container">
    <div class="swiper-wrapper">
      <!-- primera tarjeta -->
    <div class="swiper-slide">
        <div class="card_wrapper">
          <div class="card">
            <div class="content">
              <div class="front">
                <img src="{{ asset('assets/img/iconos/card6.jpg')}}" alt="" />
              </div>
              <div class="back">
                <div class="middle">
                  <h3>
                    <label>Encuadre</label>
                  </h3>
             </div>  
             <button type="button" class="btn btn-primary" id="saludoencuadrebtn" <?=($existel100p10010 == '1')?'':''?> data-bs-toggle="modal" data-bs-target="#exampleModal">Ver encuadre</button>
             <div class="smCard">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- segunda tarjeta -->
      <div class="swiper-slide">
        <div class="card_wrapper">
          <div class="card">
            <div class="content">
              <div class="front">
                <img src="{{ asset('assets/img/iconos/card7.jpg')}}" alt="" />
              </div>
              <div class="back">
                <div class="middle">
                  <h3>
                    <label>Momento Consciente</label>
                  </h3>               
                </div>
                <button type="button" id="gestionintegrantes"  class="btn btn-primary" onclick="window.location.href='../momentoconciente/{{$folioencriptado}}/'">Ir a momento consciente.</button>
                <div class="smCard">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Segunda tarjeta -->
      <div class="swiper-slide" style="display:">
        <div class="card_wrapper">
          <div class="card">
            <div class="content">
              <div class="front">
                <img src="{{ asset('assets/img/iconos/card3.jpg')}}" alt="" />
              </div>
              <div class="back">
                <div class="middle">
                  <h3>
                    <label>Compromisos</label>
                  </h3>
             </div>  
             <button type="button" class="btn btn-primary" onclick="window.location.href='../compromiso1/{{$folioencriptado}}/'">Ir a compromisos</button>
             <div class="smCard">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- 4ta tarjeta -->
      <div class="swiper-slide" style="display:none">
        <div class="card_wrapper">
          <div class="card">
            <div class="content">
              <div class="front">
                <img src="{{ asset('assets/img/iconos/card4.jpg')}}" alt="" />
              </div>
              <div class="back">
                <div class="middle">
                  <h3>
                    <label>Resultado encuesta</label>
                  </h3>
             </div>  
             <button type="button" class="btn btn-primary" id="resultadoencuestabntmodal" <?=($existel100p10010 == '1' && $existel100p10020 == '1'  && $existel100p10030 == '1'   )?'':'disabled'?> data-bs-toggle="modal" data-bs-target="#exampleModal2">Ver resultado encuesta</button>
             <div class="smCard">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <!-- 5ta tarjeta -->
   <!-- 4ta tarjeta -->
   <div class="swiper-slide" style="display:none">
        <div class="card_wrapper">
          <div class="card">
            <div class="content">
              <div class="front">
                <img src="{{ asset('assets/img/iconos/card5.jpg')}}" alt="" />
              </div>
              <div class="back">
                <div class="middle">
                  <h3>
                    <label>Encuesta QT</label>
                  </h3>
             </div>  
             <button type="button" class="btn btn-primary" id="encuestaqt" onclick="window.location.href='../cardsqt/{{$foliocodificado}}'" <?=($existel100p10010 == '1' && $existel100p10020 == '1'  && $existel100p10030 == '1' && $existel100p10040 == '1'  )?'':'disabled'?> >Ir a QT</button>
             <div class="smCard">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Agregar más swiper-slide según sea necesario -->
       <!-- Segunda tarjeta -->
       <!-- <div class="swiper-slide">
        <div class="card_wrapper">
          <div class="card">
            <div class="content">
              <div class="front">
                <img src="https://d3q0kt5yih1b7n.cloudfront.net/activities/lists/48a18cc2-d70b-4b13-8dfb-90e96d4ee51a_7046541832.jpeg" alt="Convocatoria para madres adolescentes en Medellín - Fundación Juanfe" />
              </div>
              <div class="back">
                <div class="middle">
                  <h3>
                    <label>Convocatoria para madres adolescentes en Medellín - Fundación Juanfe</label>
                  </h3>
                </div>
                <button type="button" class="btn btn-primary">Ir a visita</button>
                <div class="smCard">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> -->
      <!-- Agregar más swiper-slide según sea necesario -->
       <!-- Segunda tarjeta -->
       <!-- <div class="swiper-slide">
        <div class="card_wrapper">
          <div class="card">
            <div class="content">
              <div class="front">
                <img src="https://d3q0kt5yih1b7n.cloudfront.net/activities/lists/48a18cc2-d70b-4b13-8dfb-90e96d4ee51a_7046541832.jpeg" alt="Convocatoria para madres adolescentes en Medellín - Fundación Juanfe" />
              </div>
              <div class="back">
                <div class="middle">
                  <h3>
                    <label>Convocatoria para madres adolescentes en Medellín - Fundación Juanfe</a>
                  </h3>
                </div>
                <button type="button" class="btn btn-primary">Ir a visita</button>
                <div class="smCard">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> -->
      <!-- Agregar más swiper-slide según sea necesario -->
       <!-- Segunda tarjeta -->
       <!-- <div class="swiper-slide">
        <div class="card_wrapper">
          <div class="card">
            <div class="content">
              <div class="front">
                <img src="https://d3q0kt5yih1b7n.cloudfront.net/activities/lists/48a18cc2-d70b-4b13-8dfb-90e96d4ee51a_7046541832.jpeg" alt="Convocatoria para madres adolescentes en Medellín - Fundación Juanfe" />
              </div>
              <div class="back">
                <div class="middle">
                  <h3>
                    <label>Convocatoria para madres adolescentes en Medellín - Fundación Juanfe</a>
                  </h3>
                </div>
                <button type="button" class="btn btn-primary">Ir a visita</button>
                <div class="smCard">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> -->
      <!-- Agregar más swiper-slide según sea necesario -->
    </div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  </div>
  </div> 
<hr>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-center">
        <img width="100%" height="100px" src="{{ asset('imagenes/headers.png') }}" alt="" class="isticky-top">
      </div>
      <div class="modal-body">
        <div class="text-center">
          <label style="font-size:20px;color:#0dcaf0">PRIORIZACIÓN QT</label>
          <hr>
        </div>
        <table class="table table-bordered">
    <thead>
        <tr>
            <th>CAT BIENESTAR</th>
            <th>VR QT</th>
            <th>PESO</th>
        </tr>
    </thead>
    <tbody>
        <tr id="row-legal">
            <td>B LEGAL</td>
            <td>{{$porcentaje_rojo_bl}}</td>
            <td>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: {{$porcentaje_rojo_bl}}%; background-color: #FF0000;" aria-valuenow="{{$porcentaje_rojo_bl}}" aria-valuemin="0" aria-valuemax="100">{{$porcentaje_rojo_bl}}%</div>
                </div>
            </td>
        </tr>
        <tr id="row-financiero">
            <td>B FINANCIERO</td>
            <td>{{$porcentaje_rojo_bf}}</td>
            <td>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: {{$porcentaje_rojo_bf}}%; background-color: #FF0000;" aria-valuenow="{{$porcentaje_rojo_bf}}" aria-valuemin="0" aria-valuemax="100">{{$porcentaje_rojo_bf}}%</div>
                </div>
            </td>
        </tr>
        <tr id="row-salud">
            <td>B SALUD EMOCIONAL</td>
            <td>{{$porcentaje_rojo_bse}}</td>
            <td>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: {{$porcentaje_rojo_bse}}%; background-color: #FF0000;" aria-valuenow="{{$porcentaje_rojo_bse}}" aria-valuemin="0" aria-valuemax="100">{{$porcentaje_rojo_bse}}%</div>
                </div>
            </td>
        </tr>
        <tr id="row-intelectual">
            <td>B INTELECTUAL</td>
            <td>{{$porcentaje_rojo_bi}}</td>
            <td>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: {{$porcentaje_rojo_bi}}%; background-color: #FF0000;" aria-valuenow="{{$porcentaje_rojo_bi}}" aria-valuemin="0" aria-valuemax="100">{{$porcentaje_rojo_bi}}%</div>
                </div>
            </td>
        </tr>
        <tr id="row-familia"> <!-- ID especial para esta fila -->
            <td><strong>B EN FAMILIA</strong></td>
            <td><strong>{{$porcentaje_rojo_bef}}</strong></td>
            <td>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: {{$porcentaje_rojo_bef}}%; background-color: #FF0000;" aria-valuenow="{{$porcentaje_rojo_bef}}" aria-valuemin="0" aria-valuemax="100">{{$porcentaje_rojo_bef}}%</div>
                </div>
            </td>
        </tr>
    </tbody>
</table>


        <hr>
        


        <div class="container mt-5">
        <label class="text-center">Organice las prioridades segun las especificaciones del hogar</label>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Categoría</th>
                    <th>Prioridad</th>
                </tr>
            </thead>
            <tbody id="sortable">
                <tr id="2">
                    <td>B LEGAL</td>
                    <td>PRIMERA</td>
                </tr>
                <tr id="5">
                    <td>B FINANCIERO</td>
                    <td>SEGUNDA</td>
                </tr>
                <tr id="1">
                    <td>B SALUD EMOCIONAL</td>
                    <td>TERCERA</td>
                </tr>
                <tr id="4">
                    <td>B INTELECTUAL</td>
                    <td>CUARTA</td>
                </tr>
            </tbody>
        </table>
    </div>
        

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="saveOrder()">Aceptar</button>
      </div>
    </div>
  </div>
</div>
<style>
        .table-vulnerability td {
            text-align: center;
            vertical-align: middle;
            color: white;
            font-weight: bold;
        }
        .table-vulnerability .alta-vulnerabilidad {
            background-color: #FF0000; /* Rojo */
        }
        .table-vulnerability .vulnerabilidad-ingresos {
            background-color: #FFD700; /* Amarillo */
            color: black;
        }
        .table-vulnerability .vulnerabilidad-ipm {
            background-color: #FFFF99; /* Amarillo claro */
            color: black;
        }
        .table-vulnerability .baja-vulnerabilidad {
            background-color: #99CC66; /* Verde */
            color: black;
        }
    </style>
<!-- Modal -->
<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header text-center">
        <img width="100%" height="100px" src="{{ asset('imagenes/headers.png') }}" alt="" class="sticky-top">
      </div>
      <div class="modal-body p-3">
        <div class="text-center">
          <label style="font-size:20px;color:#0dcaf0">Resultado de acompañamiento</label>
          <hr>
        </div>
        <div class="container-fluid">
          <table class="table table-bordered table-vulnerability">
              <tr>
                        @foreach ($casillamatriz as $data)
              @if ($data->casillamatriz == 1  || $data->casillamatriz == 2 || $data->casillamatriz == 4 || $data->casillamatriz == 5)
                  <td class="alta-vulnerabilidad">
                      Alta vulnerabilidad (Pobreza extrema en IPM y ingresos):<br>
                      Esta categoría incluiría las casillas que representan la pobreza extrema en ambos indicadores (IPM y ingresos). Estas situaciones indican condiciones extremadamente precarias donde las personas enfrentan simultáneamente una falta significativa de ingresos y múltiples privaciones.
                  </td>
              @endif
              @if ($data->casillamatriz == 3  || $data->casillamatriz == 6 )
                  <td class="vulnerabilidad-ingresos">
                      Vulnerabilidad moderada en ingresos:<br>
                      Este grupo incluiría las casillas que presentan pobreza en términos de ingresos, pero no en términos de IPM.<br>
                      Aquí, las personas pueden tener ingresos bajos pero acceso a servicios básicos y oportunidades que los sitúan fuera del umbral de la pobreza multidimensional.
                  </td> 
              @endif
              @if ($data->casillamatriz == 7  || $data->casillamatriz == 8 )
                  <td class="vulnerabilidad-ipm">
                      Vulnerabilidad moderada en IPM:<br>
                      Este grupo incluiría las casillas que representan pobreza en términos de IPM, pero no en términos de ingresos.<br>
                      Esto puede indicar que las personas tienen ingresos suficientes, pero enfrentan privaciones significativas a nivel multidimensional.
                  </td>
              @endif
              @if ($data->casillamatriz == 9)
                  <td class="baja-vulnerabilidad">
                      Baja vulnerabilidad o no vulnerable:<br>
                      Esta categoría incluiría las casillas que representan la no pobreza en ambos indicadores.<br>
                      Aquí, las personas tienen suficientes ingresos y acceso a servicios básicos y oportunidades, lo que las sitúa fuera del umbral de la pobreza tanto en términos de ingresos como de privaciones multidimensionales.
                  </td> 
              @endif
          @endforeach

              </tr>
          </table>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="resultadoencuesta">Aceptar</button>
      </div>
    </div>
  </div>
</div>



   <!-- Swiper JS -->
   <script src="{{ asset('/assets/js/swiper-bundle.min.js') }}"></script>
   <script src="{{ asset('assets/jquery/jquery.js') }}"></script>
<!-- Inicialización de Swiper -->

<script>
$(document).ready(function() {
  $('#saludoencuadre').click(function() {
    $.ajax({
      url: '../agregarpasoencuadre',
      data: { folio: '{{$folioDesencriptado}}', usuario:'{{ Session::get('cedula') }}' },
      method: "GET",
      dataType: 'JSON',
      success: function(data) {
      //  $('#saludoencuadrebtn').attr('disabled', 'disabled');
        $('#gestionintegrantes').removeAttr('disabled');
        console.log(data);
      },
      error: function(xhr, status, error) {
        console.log(xhr.responseText);
      }
    });
  });


 



  $('#resultadoencuesta').click(function() {
    paginacargando();
    $.ajax({
      url: '../agregarpasoresultado',
      data: { folio: '{{$folioDesencriptado}}', usuario:'{{ Session::get('cedula') }}' },
      method: "GET",
      dataType: 'JSON',
      success: function(data) {
       $('#encuestaqt').prop('disabled',false);
       paginalista();
        console.log(data);
      },
      error: function(xhr, status, error) {
        paginalista();
        alertabad();
        console.log(xhr.responseText);
      }
    });
  });
});


</script>

<script>
   const swiper = new Swiper('.mySwiper', {
            loop: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            slidesPerView: 4, // Número de tarjetas visibles por defecto
            spaceBetween: 5, // Espacio entre las tarjetas
             breakpoints: {
                 // Cuando la pantalla es <= 1200px
                  1200: {
                      slidesPerView: 4,
                      spaceBetween: 0,
                  },
                   // Cuando la pantalla es <= 992px
                //  992: {
                //      slidesPerView: 3,
                //      spaceBetween: 10,
                //  },
                //  // Cuando la pantalla es <= 768px
                //  768: {
                //      slidesPerView: 2,
                //      spaceBetween: 10,
                //  },
                 // Cuando la pantalla es <= 576px
                 400: {
                     slidesPerView: 1,
                     spaceBetween: 10,
                 }
             }
        });
</script>


<!-- <script>
        // Función para actualizar las prioridades
        function actualizarPrioridades() {
            const filas = document.querySelectorAll('#sortable tr');
            const prioridades = ['PRIMERO', 'SEGUNDO', 'TERCERO', 'CUARTO']; // Puedes agregar más si hay más filas

            filas.forEach((fila, index) => {
                // Actualizar el texto de la segunda celda (prioridad) según el nuevo orden
                fila.cells[1].innerText = prioridades[index];
            });
        }

        // Habilitar el drag-and-drop y actualizar las prioridades
        var el = document.getElementById('sortable');
        var sortable = Sortable.create(el, {
            animation: 150, // Suaviza la animación del movimiento
            ghostClass: 'sortable-ghost', // Estilo para la fila fantasma
            chosenClass: 'sortable-chosen', // Estilo para la fila seleccionada
            onEnd: function () {
                // Llamar a la función para actualizar las prioridades después de mover una fila
                actualizarPrioridades();
            }
        });

        // Inicializar las prioridades al cargar la página
        actualizarPrioridades();
    </script> -->

    <script>
document.addEventListener('DOMContentLoaded', function () {
    // Función para actualizar las prioridades
    function actualizarPrioridades() {
        const filas = document.querySelectorAll('#sortable tr');
        const prioridades = ['PRIMERO', 'SEGUNDO', 'TERCERO', 'CUARTO']; // Asegúrate de tener suficientes prioridades

        filas.forEach((fila, index) => {
            fila.cells[1].innerText = prioridades[index];
        });
    }

    // Obtener el elemento y configurar Sortable
    var el = document.getElementById('sortable');
    var sortable = new Sortable(el, {
        animation: 150, // Animación de arrastre
        ghostClass: 'sortable-ghost', // Clase para el elemento fantasma durante el arrastre
        chosenClass: 'sortable-chosen', // Clase para el elemento seleccionado
        onEnd: function () {
            actualizarPrioridades(); // Actualizar prioridades cuando el usuario termina de arrastrar
        }
    });

    // Inicializar las prioridades al cargar la página
    actualizarPrioridades();
});

window.saveOrder = function() {
  paginacargando();
                const order = Array.from(document.querySelectorAll('#sortable tr')).map((tr, index) => ({
                    folio:'<?= $variable ?>',
                    categoria: tr.id,
                    prioridad: index + 1,
                    usuario: "{{ Session::get('cedula')}}"
                }));
                console.log('Orden guardado:', order);
              

                      $.ajax({
                        url: '../guardarprioridad',
                        data: { order: order },
                        method: "GET",
                        dataType: 'JSON',
                        success: function(data) {
                          $('#saludoencuadrebtn').attr('disabled', 'disabled');
                          $('#gestionintegrantes').removeAttr('disabled');
                          console.log(data);
                          paginalista();
                        },
                        error: function(xhr, status, error) {
                          console.log(xhr.responseText);
                        }
                      });

            };
</script>


<script>
document.addEventListener('DOMContentLoaded', function() {
    function ordenarFilas() {
        const tbody = document.querySelector('table tbody');
        let filas = Array.from(tbody.querySelectorAll('tr:not(#row-familia)')); // Ignora la fila de "B EN FAMILIA"

        // Ordenar filas basado en el porcentaje de cada barra de progreso
        filas.sort((a, b) => {
            const valA = parseInt(a.querySelector('.progress-bar').getAttribute('aria-valuenow'));
            const valB = parseInt(b.querySelector('.progress-bar').getAttribute('aria-valuenow'));
            return valB - valA; // Ordena de mayor a menor
        });

        // Reinserta las filas ordenadas
        filas.forEach(fila => tbody.appendChild(fila));
        // Asegura agregar la fila "B EN FAMILIA" al final
        tbody.appendChild(document.getElementById('row-familia'));
    }

    ordenarFilas(); // Llamar a la función al cargar la página
});
</script>



<script>
document.addEventListener('DOMContentLoaded', function() {
    // Función para sincronizar el orden de la segunda tabla con la primera
    function sincronizarOrden() {
        const ordenPrimeraTabla = Array.from(document.querySelectorAll('.table-bordered tbody tr')).map(row => row.cells[0].textContent.trim());
        const tbodySegundaTabla = document.querySelector('#sortable');
        let filasSegundaTabla = Array.from(tbodySegundaTabla.querySelectorAll('tr'));

        // Ordenar las filas de la segunda tabla basándose en el orden de la primera tabla
        filasSegundaTabla.sort((a, b) => {
            const indexA = ordenPrimeraTabla.indexOf(a.cells[0].textContent.trim());
            const indexB = ordenPrimeraTabla.indexOf(b.cells[0].textContent.trim());
            return indexA - indexB;
        });

        // Reinserta las filas ordenadas en la segunda tabla
        filasSegundaTabla.forEach(fila => tbodySegundaTabla.appendChild(fila));
    }

    // Llamar a la función para sincronizar el orden después de que ambas tablas estén completamente cargadas
    sincronizarOrden();
});
</script>





@endsection