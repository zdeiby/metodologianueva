
<link rel="shortcut icon" href="../favicon.ico">
   
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/component.css') }}?=<?php echo time() ?>" /> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">


@extends('componentes.navlateral')

@section('title', 'Rombo')

@section('content')
  
<div class="container">
<img width="100%" height="100px" src="{{ asset('imagenes/headers.png') }}" alt="" class="isticky-top"  >

<style>
body {
    font-family: 'Montserrat', sans-serif;
    margin: 0;
    padding: 0;
    background: #ffffff;
}

.card_wrapper {
    position: relative;
    width: 300px; /* Ajustar ancho de la tarjeta */
    height: 500px; /* Ajustar alto de la tarjeta */
    overflow: hidden;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: auto;
    
}



.card {
    position: relative;
    width: 100%;
    height: 60%;
    transition: transform 0.6s;
    transform-style: preserve-3d;
    border:none
}

.card .content {
    position: relative;
    width: 100%;
    height: 100%;
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
                <form method="GET" action="../integrantes/{{$variable}}" ><button type="submit" class="btn btn-primary">Ir a Gestión de integrantes</button></form>
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
                <img src="{{ asset('assets/img/iconos/card1.jpg')}}" alt="" />
              </div>
              <div class="back">
                <div class="middle">
                  <h3>
                    <label>Encuesta hogar</label>
                  </h3>
                </div>
                <form method="GET" action="../encuestahogarconformacionfamiliar/{{$variable}}" ><button type="submit" class="btn btn-primary">Ir a encuesta de hogar</button></form>
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
        </div> -->
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


   <!-- Swiper JS -->
   <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<!-- Inicialización de Swiper -->
<script>
   const swiper = new Swiper('.mySwiper', {
            loop: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            slidesPerView: 2, // Número de tarjetas visibles por defecto
            spaceBetween: 5, // Espacio entre las tarjetas
             breakpoints: {
                 // Cuando la pantalla es <= 1200px
                  1200: {
                      slidesPerView: 3,
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