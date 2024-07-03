<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('assets/bootstrap/bootstrap.css') }}" rel="stylesheet" >
    <title>Línea 1 estación 1</title>
</head>
<body>
    <style>
        span{
            cursor:pointer;
        }
    </style>

<img width="100%" height="100px" src="{{ asset('imagenes/headers.png') }}" alt="" >
<nav class="navbar navbar-expand-md sticky-top navbar-shrink " id="mainNav" style="background-color: #00B0F6; border-bottom: 2px solid #00B0F6; border-top: 2px solid #00B0F6;">
    <div class="container">
        <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1">
            <span class="visually-hidden">Toggle navigation</span>
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item dropdown" id="dropdown1">
                    <a class="nav-link text-light dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">Linea 1. Línea de clasificación</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                        <li><a class="dropdown-item" href="#l1e1" >Estación 1</a></li>
                        <li><a class="dropdown-item" href="#l1e2" >Estación 2</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown" id="dropdown2">
                    <a class="nav-link text-light dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">Línea 2. Plan de vida familiar</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
                        <li><a class="dropdown-item" href="#l2e1" >Estación 1</a></li>
                        <li><a class="dropdown-item" href="#l2e2" >Estación 2</a></li>
                        <li><a class="dropdown-item" href="#l2e3" >Estación 3</a></li>
                        <li><a class="dropdown-item" href="#l2e4" >Estación 4</a></li>
                        <li><a class="dropdown-item" href="#l2e5" >Estación 5</a></li>
                        <li><a class="dropdown-item" href="#l2e6" >Estación 6</a></li>
                        <li><a class="dropdown-item" href="#l2e7" >Estación 7</a></li>
                        <li><a class="dropdown-item" href="#l2e8" >Estación 8</a></li>                        
                    </ul>
                </li>
                <li class="nav-item dropdown" id="dropdown2">
                    <a class="nav-link text-light dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">Visita Intermedia</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
                        <li><a class="dropdown-item" href="#vi">Visita Intermedia</a></li>                      
                    </ul>
                </li>
               
                <li class="nav-item dropdown" id="dropdown4">
                    <a class="nav-link text-light dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">Línea 3. Linea de Promoción</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                        <li><a class="dropdown-item" href="#">Estación de finalización</a></li>
                        <li><a class="dropdown-item" href="#">Finalizaciones realizadas</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown" id="dropdown4">
                    <a class="nav-link text-light dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">Línea 4. Linea de Cierre</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                        <li><a class="dropdown-item" href="#">Visita intermedia</a></li>
                        <li><a class="dropdown-item" href="#">Estación de cierre</a></li>
                        <li><a class="dropdown-item" href="#">Cierres realizados</a></li>

                    </ul>
                </li>
               
            </ul>
            
        </div>
    </div>
</nav>
<br>


<div class="container">
<form class="d-flex pb-4" role="search">
      <input class="form-control me-2" type="search" placeholder="Buscar folio o representante" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Buscar</button>
    </form>


<div class="accordion" id="accordionExample" >
  <div class="accordion-item" id="l1e1">
    <div class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        <span class="badge bg-primary" id="">HOGARES ASIGNADOS</span>
      </button>
</div>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Folio</th>
              <th>Documento</th>
              <th>Nombre del Representante</th>
              <th>Celular</th>     
              <th>Barrio</th>        
              <th>línea Estacion</th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>                                        
            </tr>
          </thead>
          <tbody id="cargarfolios">
           

          </tbody>
        </table>
        </div>
      </div>
    </div>
  </div>
</div>
l3e1
<div class="pt-4 pb-4">
<form action="{{ route('logout') }}" method="POST">
@csrf
        <button  id="cerrar" type="submit" class="btn btn-danger">Cerrar Session</button>
        </form>  
</div>
    </div>
{{$variable}}
    <footer>
        <div class="text-center" style="background:#00B0F6; font-weight:bold;color:white; font-size:17px">Version 1.0</div>
    </footer>
   <script src="{{ asset('assets/bootstrap/bootstrap.js') }}" ></script>

   <script src="{{ asset('assets/jquery/jquery.js') }}"></script>
   <script>
    $(document).ready(function(){
        $(".nav-item.dropdown").mouseover(function(){
            $(this).addClass("show");
            $(this).find(".dropdown-menu").addClass("show");
        });

        $(".nav-item.dropdown").mouseout(function(){
            $(this).removeClass("show");
            $(this).find(".dropdown-menu").removeClass("show");
        });

//PETICION AJAX PARA LEER FOLIOS
// var csrfToken = $('meta[name="csrf-token"]').attr('content');
//         $.ajax({
//             url: 'index.php/cargarfolios', // URL del controlador
//             type: 'POST', // Método de solicitud
//             dataType: 'json', // Tipo de datos esperados en la respuesta
//             headers: {
//                 'X-CSRF-TOKEN':csrfToken // Asegúrate de incluir el token CSRF si es necesario
//             },
//             success: function(data) {
//                 // Manejar la respuesta exitosa
//                 $('#cargarfolios').html(data.html); // Insertar el HTML recibido en un elemento del DOM
//             },
//             error: function(xhr, status, error) {
//                 // Manejar errores
//                 console.error(xhr.responseText);
//             }
//         });

    });


    function iralineaestacion(folio){
        location.reload();
    }
  
    document.addEventListener("DOMContentLoaded", function() {
    const searchBar = document.querySelector('input[type="search"]');
    searchBar.addEventListener('input', function() {
      const searchText = this.value.trim().toLowerCase();
      const rows = document.querySelectorAll('.table tbody tr');

      rows.forEach(row => {
        const cols = row.querySelectorAll('td');
        let found = false;
        cols.forEach(col => {
          if (col.textContent.toLowerCase().includes(searchText)) {
            found = true;
          }
        });
        if (found) {
          row.style.display = '';
        } else {
          row.style.display = 'none';
        }
      });
    });
  });

</script>

</body>
</html>