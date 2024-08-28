@extends('componentes.navlateral')

@section('title', 'Agregar Integrantes')

@section('content')

<div class="container">
<img width="100%" height="100px" src="{{ asset('imagenes/headers.png') }}" alt=""   >
<!-- <form class="d-flex pb-4" role="search">
      <input class="form-control me-2" type="search" placeholder="Buscar folio o representante" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Buscar</button>
    </form> -->


<div class="accordion" id="accordionExample" >
  <div class="accordion-item" id="l1e1">
    <div class="accordion-header" id="headingOne">
      <button class="accordion-button d-flex justify-content-between align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        <span class="badge bg-primary" id="">Integrantes</span>  <span class="badge bg-success ms-auto" id="folioContainer" folio="{{ decrypt($variable) }}"    >folio: {{ decrypt($variable) }}</span>
      </button>
      <!-- <div class="progress">
        <div class="progress-bar bg-success" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
      </div> -->
</div>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <div class="row">
      <ul class="nav nav-tabs" role="tablist">
</ul>

<div id="myTabContent" class="tab-content"><br>
  <div class="tab-pane fade active show" id="home" role="tabpanel" style="overflow-x: auto; ">
  <table class="table table-hover">
      <thead class="table-light">
        <tr>

          <th scope="col">Nombres y apellidos</th>
          <th scope="col">Documento</th>
          <th scope="col">Edad</th>
          <th scope="col">Jefe</th>
          <th scope="col">Representante</th>
          <th scope="col">Encuesta</th>
          <th scope="col">Editar</th>
          <th scope="col">Avatar</th>
          <th scope="col">Eliminar</th>

        </tr>
      </thead>
      <tbody id="integrantes">
        
      </tbody>
    </table>
      </div>
        </div>
      </div>
          <div class="row">
            <div class="text-start col-5">
                <div class="btn btn-outline-success" onclick="redirectToIntegrantes()">Volver</div>
                </div>
          <div class=" col">
          <button type="button" class="btn btn-outline-primary" onclick="agregarintegrantes()">Agregar integrante</button>
          </div>
          <div class=" col">
          <button type="button" class="btn btn-outline-primary" id="finalizarboton" style="display:none">Finalizar</button>
          </div>
          </div>
      
      </div>
    </div>
  </div>
</div>

    </div>



    <input style="display:none" type="text" value="{{$variable}}" id="folioencriptado">

<script src="{{ asset('assets/jquery/jquery.js') }}"></script>
    <script>
      $(document).ready(function(){
        const folio = $('#folioContainer').attr('folio');
        const folioencriptado= $('#folioencriptado').val();
        localStorage.setItem('folioencriptado',folioencriptado);
      $.ajax({
        url:'../index.php/leerintegrantes',
        data:{folio:folio, folioencriptado:folioencriptado},
        method: "GET",
        dataType:'JSON',
        success:function(data){
          $('#integrantes').html(data.foliosintegrante);
          
        },
        error: function(xhr, status, error) {
                  console.log(xhr.responseText);
              }
      })
      })

      function editarintegrantes(folio,idintegrante, folioencriptado){
        localStorage.setItem('folio',folio);
        localStorage.setItem('idintegrante', idintegrante);
        localStorage.setItem('folioencriptado', folioencriptado);
        window.location.href = '../editarintegrantes';
      } 
      function responderencuesta(folio,idintegrante, folioencriptado, nombre){
        localStorage.setItem('folio',folio);
        localStorage.setItem('idintegrante', idintegrante);
        localStorage.setItem('folioencriptado', folioencriptado);
        localStorage.setItem('nombre', nombre);
        window.location.href = '../encuestaintegrantesfisicoemocional';
      } 
      
      function eliminarintegrantes(folio, idintegrante){
            Swal.fire({
          title: "¿Estás seguro, que deseas eliminar este integrante?",
          text: "No podrás recuperar la información",
          icon: "warning",
          showCancelButton: true,
          confirmButtonColor: "#d33",
          cancelButtonColor: "#0dcaf0",
          cancelButtonText: "Cancelar",
          confirmButtonText: "Sí, Deseo eliminarlo!"
        }).then((result) => {
          if (result.isConfirmed) {
            paginacargando();
            $.ajax({
                url:'../index.php/eliminarintegrantes',
                data:{folio:folio, idintegrante:idintegrante},
                method: "GET",
                dataType:'JSON',
                success:function(data){
                        const folio1 = $('#folioContainer').attr('folio');
                      const folioencriptado1= $('#folioencriptado').val();
                      paginalista();
                      if(data.message == 1){
                        alertagoodeliminado()
                      }else{
                          alertabadeliminado();
                      }
                    $.ajax({
                      url:'../index.php/leerintegrantes',
                      data:{folio:folio1, folioencriptado:folioencriptado1},
                      method: "GET",
                      dataType:'JSON',
                      success:function(data){
                        $('#integrantes').html(data.foliosintegrante);
                        
                      },
                      error: function(xhr, status, error) {
                                console.log(xhr.responseText);
                                alertabad();
                            }
                    })
                },
                error: function(xhr, status, error) {
                          console.log(xhr.responseText);
                          alertabad();
                      }
              })

          }
        });
      }

      function agregarintegrantes(){
        const folioencriptado= $('#folioencriptado').val();
        const folio = $('#folioContainer').attr('folio');
        localStorage.setItem('folio',folio);
        localStorage.setItem('idintegrante','');
        localStorage.setItem('folioencriptado', folioencriptado);
        window.location.href = '../editarintegrantes';
      }

      function redirectToIntegrantes() {
           var folio = window.localStorage.getItem('folioencriptado');
           var url = "../rombointegrantes/:folio";
           url = url.replace(':folio', folio);
           window.location.href = url;
       }

      $('#volver').click(function(){
        redirectToIntegrantes()
      });
    

    </script>

    
<script>
const observer = new MutationObserver((mutations) => {
    mutations.forEach((mutation) => {
        if (mutation.addedNodes.length) {
            const habilitadoButtons = document.querySelectorAll('.habilitado');
            
            // Verificar si todos los botones están deshabilitados
            const allDisabled = Array.from(habilitadoButtons).every(button => button.disabled);
            
            if (allDisabled && <?= ($jefes[0]->edad_mayor_igual_18 == 1 && $jefes[0]->es_jefe_hogar == 1 && $jefes[0]->es_representante == 1) ? 'true' : 'false' ?>) {
                $('#finalizarboton').css('display','')
            } 
            else {
              $('#finalizarboton').css('display','none')
            }
        }
    });
});

observer.observe(document.body, {
    childList: true,
    subtree: true
});


</script>

<script>
$(document).ready(function() {
  $('#saludoencuadre').click(function() {
    $.ajax({
      url: '../agregarpasoencuadre',
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


$(document).ready(function() {

$('#finalizarboton').click(function(){
      $.ajax({
          url: '../finalizarintegrantes',
          data: { folio: '{{decrypt($variable)}}', usuario:'{{ Session::get('cedula') }}' },
          method: "GET",
          dataType: 'JSON',
          success: function(data) {
            redirectToIntegrantes()
            console.log(data);
          },
          error: function(xhr, status, error) {
            console.log(xhr.responseText);
          }
        }); 
      });
    });
</script>

@endsection