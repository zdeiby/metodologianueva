<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
     <link href="{{ asset('assets/bootstrap/bootstrap.css') }}" rel="stylesheet" > 
     <link rel="shortcut icon" href="../../favicon.ico">
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
    padding: 20px 15px;
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
    width: 100px;
    white-space: nowrap;
    font-size: 18px;
    text-align: left;
    opacity: 1;
    transition: opacity 0.5s ease,width 0.5s ease;
}
.barra-lateral span.oculto{
    opacity: 0;
    width: 0;
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
    list-style: none;
    display: flex;
    margin-bottom: 5px;
}
.barra-lateral .navegacion a{
    width: 100%;
    height: 45px;
    display: flex;
    align-items: center;
    text-decoration: none;
    border-radius: 10px;
    color: var(--color-texto-menu);
}
.barra-lateral .navegacion a:hover{
    background-color: var(--color-menu-hover);
    color: var(--color-menu-hover-texto);
}
.barra-lateral .navegacion ion-icon{
    min-width: 50px;
    font-size: 20px;
}

/*-----------------> Linea*/
.barra-lateral .linea{
    width: 100%;
    height: 1px;
    margin-top: 15px;
    background-color: var(--color-linea);
}

/*----------------> Modo Oscuro*/
.barra-lateral .modo-oscuro{
    width: 100%;
    margin-bottom: 80px;
    border-radius: 10px;
    display: flex;
    justify-content: space-between;
}
.barra-lateral .modo-oscuro .info{
    width: 150px;
    height: 45px;
    overflow: hidden;
    display: flex;
    align-items: center;
    color: var(--color-texto-menu);
}
.barra-lateral .modo-oscuro ion-icon{

    width: 50px;
    font-size: 20px;
}

/*--->switch*/
.barra-lateral .modo-oscuro .switch{
    display: flex;
    align-items: center;
    justify-content: center;
    min-width: 50px;
    height: 45px;
    cursor: pointer;
}
.barra-lateral .modo-oscuro .base{
    position: relative;
    display: flex;
    align-items: center;
    width: 35px;
    height: 20px;
    background-color: var(--color-switch-base);
    border-radius: 50px;
}
.barra-lateral .modo-oscuro .circulo{
    position: absolute;
    width: 18px;
    height: 90%;
    background-color: var(--color-switch-circulo);
    border-radius: 50%;
    left: 2px;
    transition: left 0.5s ease;
}
.barra-lateral .modo-oscuro .circulo.prendido{
    left: 15px;
}

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
  text: "No puedes eliminar al representante del hogar",
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
        <nav class="navegacion">
            <ul>
                <li>
                    <a id="" href="{{ route('index') }}" class="{{ request()->routeIs('index') ? 'inbox' : '' }}">
                        <ion-icon name="home-outline"></ion-icon>
                        <span>Inicio</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('prueba')}}" class="{{ request()->routeIs('prueba') ? 'inbox' : '' }}">
                        <ion-icon name="information-circle-outline"></ion-icon>
                        <span>Cobertura</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('sincronizacion')}}">
                        <ion-icon name="reload-outline"></ion-icon>
                        <span>Sincronización</span>
                    </a>
                </li>
             <!--   <li>
                    <a href="#">
                        <ion-icon name="document-text-outline"></ion-icon>
                        <span>Solicitar Edición</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <ion-icon name="cog-outline"></ion-icon>
                        <span>Configuración</span>
                    </a>
                </li> -->
                <li>
                    <a href="#">
                        <ion-icon name="log-out-outline"></ion-icon>
                        <span><label for="cerrar" onclick="logout()">Cerrar Sesión</label></span>
                    </a>
                </li>
                <!-- <li>
                    <a href="#">
                        <ion-icon name="trash-outline"></ion-icon>
                        <span>Trash</span>
                    </a>
                </li> <br><br><div class="linea"></div>-->
                <!-- <a onclick="window.history.back();">
                        <ion-icon name="arrow-back-circle-outline"></ion-icon>
                        <span><label for="volver" >Volver</label></span>
                    </a> -->
            </ul>
            
        </nav>
        

        <div>
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
                <label for="" class="d-flex" style="display: flex !important;flex-direction: column;flex-wrap: wrap;align-content: center;color:white">Versión 1.0</label>
            <div class="usuario" style="display:none">
                <img src="" alt="">
                <div class="info-usuario">
                    <div class="nombre-email">
                        <span class="nombre">Jhampier</span>
                        <span class="email">jhampier@gmail.com</span>
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
   <script>
    function logout() {
        document.getElementById('logoutForm').submit();
    }
</script>


    <script>
        new DataTable('#example');
        new DataTable('#example2');
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
</body>
</html>