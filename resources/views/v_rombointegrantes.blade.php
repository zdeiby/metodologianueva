
<link rel="shortcut icon" href="../favicon.ico">
   
    <link rel="stylesheet" href="{{ asset('/assets/css/swiper-bundle.min.css') }}">


@extends('componentes.navlateral')

@section('title', 'Rombointegrantes')

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
</style>

<div class="swiper mySwiper container">
    <div class="swiper-wrapper">
      <!-- primera tarjeta -->
    <div class="swiper-slide">
        <div class="card_wrapper">
          <div class="card">
            <div class="content">
              <div class="front">
                <img src="{{ asset('assets/img/iconos/card1.jpg')}}" alt="" />
              </div>
              <div class="back">
                <div class="middle">
                  <h3>
                    <label>Saludo y encuadre</label>
                  </h3>
             </div>  
             <button type="button" class="btn btn-primary" id="saludoencuadrebtn" <?=($existel100p1000 == '1')?'disabled':''?> data-bs-toggle="modal" data-bs-target="#exampleModal">Ver saludo y encuadre</button>
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
                <img src="{{ asset('assets/img/iconos/card2.jpg')}}" alt="" />
              </div>
              <div class="back">
                <div class="middle">
                  <h3>
                    <label>Gestión de integrantes</label>
                  </h3>               
                </div>
                <button type="button" id="gestionintegrantes" <?=($existel100p1000 == '1' && $existel100p10000 == '0'  )?'':'disabled'?> class="btn btn-primary" onclick="window.location.href='../integrantes/{{$variable}}'">Ir a gestión de integrantes</button>
                <div class="smCard">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Segunda tarjeta -->
      <div class="swiper-slide">
        <div class="card_wrapper">
          <div class="card">
            <div class="content">
              <div class="front">
                <img src="{{ asset('assets/img/iconos/card3.jpg')}}" alt="" />
              </div>
              <div class="back">
                <div class="middle">
                  <h3>
                    <label>Encuesta hogar</label>
                  </h3>
             </div>  
             <button type="button" class="btn btn-primary" <?=($existel100p1000 == '1' && $existel100p10000 == '1'  && $existel100p100000 == '0'  )?'':'disabled'?> onclick="window.location.href='../encuestahogarconformacionfamiliar/{{$variable}}'">Ir a encuesta de hogar</button>
             <div class="smCard">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- 4ta tarjeta -->
      <div class="swiper-slide">
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
             <button type="button" class="btn btn-primary" id="resultadoencuesta" <?=($existel100p1000 == '1' && $existel100p10000 == '1'  && $existel100p100000 == '1'   )?'':'disabled'?> data-bs-toggle="modal" data-bs-target="#exampleModal2">Ver resultado encuesta</button>
             <div class="smCard">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <!-- 5ta tarjeta -->
   <!-- 4ta tarjeta -->
   <div class="swiper-slide">
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
             <button type="button" class="btn btn-primary" id="resultadoencuesta" onclick="window.location.href='../cardsqt/{{$foliocodificado}}'" <?=($existel100p1000 == '1' && $existel100p10000 == '1'  && $existel100p100000 == '1' && $existel100p1000000 == '1'  )?'':'disabled'?> >Ir a QT</button>
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
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header text-center">
        <img width="100%" height="100px" src="{{ asset('imagenes/headers.png') }}" alt="" class="isticky-top">
      </div>
      <div class="modal-body">
        <div class="text-center">
          <label style="font-size:20px;color:#0dcaf0">Saludo y encuadre</label>
          <hr>
        </div>
        <label>Es donde se saluda y se da una explicación sobre lo que es el acompañamiento familiar...</label>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="saludoencuadre">Aceptar</button>
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
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="saludoencuadre">Aceptar</button>
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
      data: { folio: '{{decrypt($variable)}}', usuario:'{{ Session::get('cedula') }}' },
      method: "GET",
      dataType: 'JSON',
      success: function(data) {
        $('#saludoencuadrebtn').attr('disabled', 'disabled');
        $('#gestionintegrantes').removeAttr('disabled');
        console.log(data);
      },
      error: function(xhr, status, error) {
        console.log(xhr.responseText);
      }
    });
  });


 



  $('#resultadoencuesta').click(function() {
    $.ajax({
      url: '../agregarpasoresultado',
      data: { folio: '{{decrypt($variable)}}', usuario:'{{ Session::get('cedula') }}' },
      method: "GET",
      dataType: 'JSON',
      success: function(data) {
       
        console.log(data);
      },
      error: function(xhr, status, error) {
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
@endsection