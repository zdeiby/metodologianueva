<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
     <link href="{{ asset('assets/bootstrap/bootstrap.css') }}" rel="stylesheet" > 
     <link rel="shortcut icon" href="../../favicon.ico">
     <link href="{{ asset('resources/sweetalert/sweetalert2.min.css') }}" rel="stylesheet" > 
    <script src="{{ asset('resources/sweetalert/sweetalert2.all.min.js') }}"></script>
    <link href="{{ asset('assets/bootstrap/bootstrap-select.min.css') }}" rel="stylesheet" > 

    <!-- <script src="https://cdn.ckeditor.com/ckeditor5/33.0.0/classic/ckeditor.js"></script> -->
   <style>
    /* @import url('https://fonts.googleapis.com/css2?family=Outfit:wght@500&display=swap'); */
:root{
    --color-barra-lateral:white;
    
    --color-texto:white;
    --color-texto-menu:white;

    --color-menu-hover:rgb(238,238,238);
    --color-menu-hover-texto:#0dcaf0;

    --color-boton:rgb(0,0,0);
    --color-boton-texto:rgb(255,255,255);

    --color-linea:rgb(180,180,180);

    --color-switch-base :rgb(201,202,206);
    --color-switch-circulo:rgb(241,241,241);

    --color-scroll:rgb(192,192,192);
    --color-scroll-hover:white;
}

.dark-mode{
    --color-barra-lateral:rgb(44,45,49);

    --color-texto:rgb(255,255,255);
    --color-texto-menu:rgb(110,110,117);

    --color-menu-hover:rgb(0,0,0);
    --color-menu-hover-texto:rgb(238,238,238);

    --color-boton:rgb(255,255,255);
    --color-boton-texto:rgb(0,0,0);

    --color-linea:rgb(90,90,90);

    --color-switch-base :rgb(39,205,64);
    --color-switch-circulo:rgb(255,255,255);

    --color-scroll:rgb(68,69,74);
    --color-scroll-hover:rgb(85,85,85);
}


*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Montserrat', sans-serif;
}
body{
    height: 100vh;
    width: 100%;
  
}

ol, ul {
    padding-left: 0rem;
}

/*-----------------Menu*/
.menu{
    position: fixed;
    width: 50px;
    height: 50px;
    font-size: 30px;
    display: none;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    cursor: pointer;
    background-color: var(--color-boton);
    color: var(--color-boton-texto);
    right: 15px;
    top: 15px;
    z-index: 100;
}


/*----------------Barra Lateral*/
.barra-lateral{
    position: fixed;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    width: 250px;
    height: 100%;
    overflow: hidden;
    padding: 20px 10px;
    background-color: #0dcaf0;
    transition: width 0.5s ease,background-color 0.3s ease,left 0.5s ease;
    z-index: 50;
}

.mini-barra-lateral{
    width: 80px;
    #cloud{
        font-size:15px;
    }
}
.barra-lateral span{
    width: 148px;
    white-space: nowrap;
    font-size: 18px;
    text-align: left;
    opacity: 1;
    transition: opacity 0.5s ease,width 0.5s ease;
}
.barra-lateral span.oculto{
    opacity: 0;
    width: 0;
    display:none;
}

/*------------> Nombre de la página */
.barra-lateral .nombre-pagina{
    width: 100%;
    height: 45px;
    color: var(--color-texto);
    margin-bottom: 40px;
    display: flex;
    align-items: center;
}
.barra-lateral .nombre-pagina ion-icon{
    min-width: 50px;
    font-size: 40px;
    cursor: pointer;
}
.barra-lateral .nombre-pagina span{
    margin-left: 5px;
    font-size: 25px;
}


/*------------> Botón*/
.barra-lateral .boton{
    width: 100%;
    height: 45px;
    margin-bottom: -30px;
    display: flex;
    align-items: center;
    justify-content: center;
    border: none;
    border-radius: 10px;
   
}
.barra-lateral .boton ion-icon{
    min-width: 50px;
    font-size: 25px;
}


/*--------------> Menu Navegación*/
.barra-lateral .navegacion{
    height: 100%;
    overflow-y: auto;
    overflow-x: hidden;
}
.barra-lateral .navegacion::-webkit-scrollbar{
    width: 5px;
}
.barra-lateral .navegacion::-webkit-scrollbar-thumb{
    background-color: var(--color-scroll);
    border-radius: 5px;
}
.barra-lateral .navegacion::-webkit-scrollbar-thumb:hover{
    background-color: var(--color-scroll-hover);
}
 .barra-lateral .navegacion li{  
 

    margin-bottom: 5px;
} 
.barra-lateral .navegacion a{
    width: 87%;
    height: 45px;
    display: flex;
    align-items: center;
    text-decoration: none;
    border-radius: 10px;
    color: var(--color-texto-menu);
   
}
.barra-lateral .navegacion a:hover{
    background-color: var(--color-menu-hover);
    color:#0dcaf0 !important;
} 

/* Ocultar el triángulo cuando el menú esté comprimido */
.barra-lateral.mini-barra-lateral .dropdown-toggle::after {
    display: none !important; /* Oculta el triángulo */
}






/*-----------------> Linea*/
.barra-lateral .linea{
    width: 100%;
    height: 1px;
    margin-top: 15px;
    background-color: var(--color-linea);
}


/*--->switch*/


/*---------------> Usuario*/
.barra-lateral .usuario{
    width: 100%;
    display: flex;
}
.barra-lateral .usuario img{
    width: 50px;
    min-width: 50px;
    border-radius: 10px;
}
.barra-lateral .usuario .info-usuario{
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    color: var(--color-texto);
    overflow: hidden;
}
.barra-lateral .usuario .nombre-email{
    width: 100%;
    display: flex;
    flex-direction: column;
    margin-left: 5px;
}
.barra-lateral .usuario .nombre{
    font-size: 15px;
    font-weight: 600;
}
.barra-lateral .usuario .email{
    font-size: 13px;
}
.barra-lateral .usuario ion-icon{
    font-size: 20px;
}


/*-------------main*/

.inbox{
    background-color: white;
    color: #0dcaf0 !important;
}

main{
    margin-left: 250px;
    padding: 20px;
    transition: margin-left 0.5s ease;
}
main.min-main{
    margin-left: 80px;
}



/*------------------> Responsive*/
@media (max-height: 660px){
    .barra-lateral .nombre-pagina{
        margin-bottom: 5px;
    }
    .barra-lateral .modo-oscuro{
        margin-bottom: 3px;
    }
}
@media (max-width: 600px){
    .barra-lateral{
        position: fixed;
        left: -250px;
    }
    .max-barra-lateral{
        left: 0;
    }
    .menu{
        display: flex;
    }
    .menu ion-icon:nth-child(2){
        display: none;
    }
    main{
        margin-left: 0;
    }
    main.min-main{
        margin-left: 0;
    }
    
} #cloud{
        border-bottom: 1px solid transparent;
        font-size:17px;
        cursor:pointer;
    }
#cloud:hover{   
        border-bottom:1px solid white;
     
    }

    .loader {
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background: url("{{ asset('assets/img/loading.gif') }}") 50% 50% no-repeat rgb(249,249,249);
    opacity: .8;
}
.loader2 {
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background: url("{{ asset('assets/img/loading.gif') }}") 50% 50% no-repeat rgb(249,249,249);
    opacity: .8;
}
   
    
   </style>
<script>
function alertagood(){
    Swal.fire({
    position: "center",
    icon: "success",
    title: "Se ha guardado con éxito",
    showConfirmButton: false,
    timer: 1500
    });
}
function alertabad(){
Swal.fire({
  icon: "error",
  title: "Oops...",
  text: "Algo salió mal",
  footer: ''
});
}


function alertagoodeliminado(){
    Swal.fire({
    position: "center",
    icon: "success",
    title: "Integrante eliminado con éxito",
    showConfirmButton: false,
    timer: 1500
    });
}
function alertabadeliminado(){
Swal.fire({
  icon: "error",
  title: "Oops...",
  text: "No puedes eliminar al representante del hogar ni al integrante principal",
  footer: ''
});
}

function paginacargando(){
   $('#carga').attr('class','loader');
}

function paginalista(){
    document.querySelector('.loader').style.display = 'none'; // Oculta el loader
    document.querySelector('main').style.display = 'block'; // Muestra el contenido del main
}

function paginacargando2(){
   $('#carga2').attr('class','loader2');
}

function paginalista2(){
    document.querySelector('.loader2').style.display = 'none'; // Oculta el loader
    document.querySelector('main').style.display = 'block'; // Muestra el contenido del main
}

function soloLetras(e) {
    // Obtenemos el código de la tecla presionada
    var tecla = (document.all) ? e.keyCode : e.which;

    // Permitimos la tecla de retroceso (Backspace)
    if (tecla == 8) return true;

    // Convertimos la tecla presionada en carácter
    var te = String.fromCharCode(tecla);

    // Convertimos el carácter a mayúsculas
    te = te.toUpperCase();

    // Definimos el patrón que incluye solo letras mayúsculas, espacios, y la ñ Ñ
    var patron = /^[A-ZÑ\s]+$/;

    // Comprobamos si el carácter ingresado cumple con el patrón
    if (patron.test(te)) {
        // Si es válido, se coloca en el campo de texto
        e.target.value += te;
        return false; // Evitamos que se añada el carácter en minúscula por defecto
    } else {
        // Bloquear cualquier otra tecla
        return false;
    }
}


function soloNumeros(e) {
    var key = window.Event ? e.which : e.keyCode;

    // Permitir solo números (teclas 0-9) y la tecla de retroceso (Backspace)
    if ((key >= 48 && key <= 57) || (key == 8)) {
        var input = e.target;

        // Evitar ceros iniciales repetidos
        if (input.value.length === 0 && key == 48) {
            return false; // Evitar que se ingrese un cero como primer carácter
        }

        setTimeout(function() {
            // Si el valor es solo "0", eliminarlo
            if (input.value === "0") {
                input.value = "";
            }

            // Eliminar ceros iniciales
            if (input.value.length > 1 && input.value.startsWith('0')) {
                input.value = input.value.replace(/^0+/, '');
            }
        }, 0);

        return true;
    } else {
        // Bloquear cualquier otra tecla
        return false;
    }
}

// document.addEventListener('DOMContentLoaded', function() {
//         localStorage.getItem('cedula');
//         console.log(localStorage.getItem('cedula'))
//     });


    </script>

</head>
<body onload="console.log('hola')">
<div class="" id="carga"></div>
<div class="" id="carga2"></div>

    <div class="menu">
        <ion-icon name="menu-outline"></ion-icon>
        <ion-icon name="close-outline"></ion-icon>
    </div>

    <div class="barra-lateral">
        <div>
            <div class="nombre-pagina">
                <label style=" " id="cloud" >Unidad Familia Medellín</label>
                
            </div>
            <label class="boton" >
                
            </label>
        </div>
        
<style>
    a.active {
    background-color: var(--color-menu-active);
    color: var(--color-menu-active-texto);
}
</style>
<nav class="bg-primary text-white vh-100 navegacion" style="background:#0dcaf0 !important; font-size:20px; " id="sidebar">
    <ul class="nav flex-column ">
        <li class="nav-item">
            <a href="{{ route('index') }}" class="{{ request()->routeIs('index') ? 'inbox' : '' }} nav-link text-white d-flex align-items-center">
                <ion-icon name="home-outline"></ion-icon>
                <span class="nav-text ms-2">Inicio</span>
            </a>
        </li>
        <li class="nav-item pasarhover">
            <a href="{{route('prueba')}}" class="{{ request()->routeIs('prueba') ? 'inbox' : '' }} nav-link text-white d-flex align-items-center">
                <ion-icon name="information-circle-outline"></ion-icon>
                <span class="nav-text ms-2">Cobertura</span>
            </a>
        </li>
        <li class="nav-item dropdown" style="cursor:pointer">
            <a  class="{{ request()->routeIs('oportunidades') ? 'inbox' : '' }} nav-link dropdown-toggle text-white d-flex align-items-center" data-bs-toggle="collapse" data-bs-target="#submenuOportunidades" aria-expanded="false">
                <ion-icon name="people-outline"></ion-icon>
                <span class="nav-text ms-2">Oportunidades</span>
            </a>
            <ul class="collapse list-unstyled ps-3" id="submenuOportunidades">
                <li>
                    <a href="{{route('oportunidades')}}" class="nav-link text-white d-flex align-items-center">
                    <ion-icon name="people-circle-outline"></ion-icon>
                        <span class="nav-text ms-2">Integrantes</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('oportunidadeshogar')}}" class="nav-link text-white d-flex align-items-center">
                    <ion-icon name="home-outline"></ion-icon>
                    <span class="nav-text ms-2">Hogar</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="{{route('sincronizacion')}}" class="{{ request()->routeIs('sincronizacion') ? 'inbox' : '' }} nav-link text-white d-flex align-items-center">
                <ion-icon name="reload-outline"></ion-icon>
                <span class="nav-text ms-2">Sincronización</span>
            </a>
        </li> 
        <li class="nav-item">
            <a href="#" class="nav-link text-white d-flex align-items-center">
                <ion-icon name="log-out-outline"></ion-icon>
                <span class="nav-text ms-2" onclick="logout()">Cerrar Sesión</span>
            </a>
        </li>
    </ul>
</nav>


        <!-- <div class=" text-light">
            <label for="" style="font-size:12px"><b>GESTOR: {{session('nombre')}}</b></label>
        </div> -->
       
        <div>
        <label for="" class="d-flex" style="font-size:11px;display: flex !important;flex-direction: column;flex-wrap: wrap;align-content: center;color:white"><b>GESTOR: {{session('nombre')}}</b></label>

            <div class="linea"></div>
    
            <div class="modo-oscuro" style="display:none">
                <div class="info">
                    <ion-icon name="moon-outline"></ion-icon>
                    <span>Drak Mode</span>
                </div>
                <div class="switch">
                    <div class="base">
                        <div class="circulo">
                            
                        </div>
                    </div>
                </div>
                
            </div>
            
                <label for="" class="d-flex" style="display: flex !important;flex-direction: column;flex-wrap: wrap;align-content: center;color:white">Versión 1.1.7</label>
            <div class="usuario" style="display:none">
                <img src="" alt="">
                <div class="info-usuario">
                    <div class="nombre-email">
                        <span class="nombre">Deiby Graciano</span>
                        <span class="email">deibygj@hotmail.com</span>
                    </div>
                    <ion-icon name="ellipsis-vertical-outline"></ion-icon>
                </div>
            </div>
        </div>

    </div>
    <form id="logoutForm" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
    <button id="cerrar" type="submit" class="btn btn-danger">Cerrar Sesión</button>
</form>

    <main>
    @yield('content')
  

</main>


    <script src="{{ asset('assets/bootstrap/bootstrap.js') }}" ></script>
   <script src="{{ asset('assets/jquery/jquery.js') }}"></script>
   <script type="module" src="{{asset('iconos/ionicons.esm.js') }}" ></script>
   <script nomodule src="{{asset('iconos/ionicons.js')}}"></script>
   <script src="{{asset('resources/js/dataTables.js')}}"></script>
   <script src="{{asset('resources/js/dataTables.boostrap5.js')}}"></script>
   <script src="{{ asset('assets/bootstrap/bootstrap-select.min.js') }}" ></script>
   <script>
    function logout() {
        document.getElementById('logoutForm').submit();
    }
</script>


    <script>
    

document.addEventListener('DOMContentLoaded', function() {

    new DataTable('#example', {
    language: {
        decimal: ",",
        emptyTable: "No hay datos disponibles en la tabla",
        info: "Mostrando _START_ a _END_ de _TOTAL_ entradas",
        infoEmpty: "Mostrando 0 a 0 de 0 entradas",
        infoFiltered: "(filtrado de _MAX_ entradas totales)",
        lengthMenu: "Mostrar _MENU_ entradas",
        loadingRecords: "Cargando...",
        processing: "Procesando...",
        search: "Buscar:",
        zeroRecords: "No se encontraron registros coincidentes",
        paginate: {
            first: "Primero",
            last: "Último",
            next: "Siguiente",
            previous: "Anterior"
        },
        aria: {
            sortAscending: ": activar para ordenar columna ascendente",
            sortDescending: ": activar para ordenar columna descendente"
        }
    }
});


        // Inicializa el selectpicker
        $('.selectpicker').selectpicker();
        $('.filter-option-inner-inner').css('font-size','13px');
    });


new DataTable('#example2', {
    language: {
        decimal: ",",
        emptyTable: "No hay datos disponibles en la tabla",
        info: "Mostrando _START_ a _END_ de _TOTAL_ entradas",
        infoEmpty: "Mostrando 0 a 0 de 0 entradas",
        infoFiltered: "(filtrado de _MAX_ entradas totales)",
        lengthMenu: "Mostrar _MENU_ entradas",
        loadingRecords: "Cargando...",
        processing: "Procesando...",
        search: "Buscar:",
        zeroRecords: "No se encontraron registros coincidentes",
        paginate: {
            first: "Primero",
            last: "Último",
            next: "Siguiente",
            previous: "Anterior"
        },
        aria: {
            sortAscending: ": activar para ordenar columna ascendente",
            sortDescending: ": activar para ordenar columna descendente"
        }
    }
});

        const cloud = document.getElementById("cloud");
const barraLateral = document.querySelector(".barra-lateral");
const spans = document.querySelectorAll("span");
const palanca = document.querySelector(".switch");
const circulo = document.querySelector(".circulo");
const menu = document.querySelector(".menu");
const main = document.querySelector("main");

menu.addEventListener("click",()=>{
    barraLateral.classList.toggle("max-barra-lateral");
    if(barraLateral.classList.contains("max-barra-lateral")){
        menu.children[0].style.display = "none";
        menu.children[1].style.display = "block";
    }
    else{
        menu.children[0].style.display = "block";
        menu.children[1].style.display = "none";
    }
    if(window.innerWidth<=320){
        barraLateral.classList.add("mini-barra-lateral");
        main.classList.add("min-main");
        spans.forEach((span)=>{
            span.classList.add("oculto");
        })
    }
});

palanca.addEventListener("click",()=>{
    let body = document.body;
    body.classList.toggle("dark-mode");
    body.classList.toggle("");
    circulo.classList.toggle("prendido");
});

cloud.addEventListener("click",()=>{
    barraLateral.classList.toggle("mini-barra-lateral");
    main.classList.toggle("min-main");
    spans.forEach((span)=>{
        span.classList.toggle("oculto");
    });
});


    </script>
    
    <script>
   /*     
 window.onload = function () {
     document.addEventListener("contextmenu", function (e) {
         e.preventDefault();
     }, false);
     document.addEventListener("keydown", function (e) {
         //document.onkeydown = function(e) {
         // "I" key
         if (e.ctrlKey && e.shiftKey && e.keyCode == 73) {
             disabledEvent(e);
         }
         // "S" key + macOS
         if (e.keyCode == 83 && (navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)) {
             disabledEvent(e);
         }
         // "U" key
         if (e.ctrlKey && e.keyCode == 85) {
             disabledEvent(e);
         }
         // "F12" key
         if (event.keyCode == 123) {
             disabledEvent(e);
         }
     }, false);
     function disabledEvent(e) {
         if (e.stopPropagation) {
             e.stopPropagation();
         } else if (window.event) {
             window.event.cancelBubble = true;
         }
         e.preventDefault();
         return false;
     }


 } */

    </script>

<script>


function validateInput(textarea) {
    // Expresión regular para permitir solo letras con tildes, comas, puntos, punto y coma, guiones, diagonales y saltos de línea
    const regex = /^[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ ,.;/\-¿?¡!\n]*$/;

    textarea.value = textarea.value.toUpperCase();
    // Validar el texto ingresado
    if (!regex.test(textarea.value)) {
        // Elimina el último carácter si no coincide con la expresión regular
        textarea.value = textarea.value.slice(0, -1);
    }

    // Eliminar espacios múltiples entre palabras (en la misma línea)
    textarea.value = textarea.value.replace(/ +(?= )/g, '');

    // Permitir solo un salto de línea entre párrafos
    textarea.value = textarea.value.replace(/\n{2,}/g, '\n\n');
}

</script>
</body>
</html>