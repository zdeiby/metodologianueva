@extends('componentes.navlateral')

@section('title', 'CATEGORIAS DE BIENESTAR HERRAMIENTA QT')

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
      <div class="accordion-button d-flex justify-content-between align-items-center" >
        <div>
        <span class="badge bg-primary" id="">CATEGORIAS DE BIENESTAR HERRAMIENTA QT</span> 
        <span class="badge bg-success ms-auto" id="folioContainer" folio="{{ $variable }}">folio: {{ $variable }}</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <span class="badge bg-success ms-auto" style="background:#a80a85 !important; cursor:pointer" data-bs-toggle="modal" data-bs-target="#exampleModal">Ver QT del hogar</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </div>
      </div>
      <!-- <div class="progress">
        <div class="progress-bar bg-success" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
      </div> -->
</div>
    <div id="collapseOne" >
      <div class="accordion-body">
      <div class="row">
      <ul class="nav nav-tabs" >
</ul>

<div id="myTabContent" class="tab-content"><br>
  <div class="tab-pane fade active show" id="home" role="tabpanel" style="overflow-x: auto; ">
  <table class="table table-hover" >
      <thead class="table-light">
        <tr>
          <th scope="col">Categoría</th> 
          <th scope="col">Nombres y apellidos</th>
          <th scope="col">herramienta</th>
          <th scope="col">Avatar</th>

        </tr>
      </thead>
      <tbody id="integrantes"  >
        
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
          <button type="button" class="btn btn-outline-primary" id="finalizarboton" style="display:none">Finalizar</button>
          </div>
          </div>
      
      </div>
    </div>
  </div>
</div>

    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header text-center">
        <img width="100%" height="100px" src="{{ asset('imagenes/headers.png') }}" alt="" class="isticky-top">
      </div>
      <div class="modal-body">
        <div class="text-center">
          <label style="font-size:20px;color:#0dcaf0">Categorías priorizadas por el hogar con mayor vulnerabilidad</label>
          <hr>
        </div>
              <div style="display: flex; justify-content: space-between; gap: 20px;" class="mb-2">
                                  <!-- Primera columna -->
                                  <div style="flex: 1;">
                                      <table style="width: 100%;border-radius:10px; border-spacing: 0 10px; border-collapse: separate;background-color: #1E293A; color: white;"  class="container">
                                          <tr >
                                              <td style="width: 30%;  background-color: #1E293A; color: white; padding: 10px;font-size:12px">BIENESTAR EN FAMILIA</td>
                                              <td style="width: 10%;   text-align: center;font-size:12px">0%</td>
                                              <td style="width: 50%;background-color: #1E293A; color: white;" >
                                                <div class="progress" style="height: 20px;">
                                                  <div class="progress-bar" role="progressbar" style="width: 10%; background-color: #FEC108;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">10%</div>
                                                </div> 
                                              </td>
                                              <td style="width: 10%;   text-align: center;font-size:12px">100%</td>
                                          </tr>
                                      </table>
                                  </div>
                                  </div>
                                  <!-- Segunda columna -->
                                  <div style="display: flex; justify-content: space-between; gap: 20px;" class="mb-2">
 
                                      <div style="flex: 1;">
                                      <table style="width: 100%; border-radius:10px; border-spacing: 0 10px; border-collapse: separate;background-color: #1E293A; color: white;"  class="container">
                                          <tr >
                                              <td style="width: 30%;  background-color: #1E293A; color: white; padding: 10px;font-size:12px">BIENESTAR FINANCIERO</td>
                                              <td style="width: 10%;   text-align: center;font-size:12px">0%</td>
                                              <td style="width: 50%;background-color: #1E293A; color: white;" >
                                              <div class="progress" style="height: 20px;">
                                                <div class="progress-bar" role="progressbar" style="width: 60%; background-color: #FEC108;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">60%</div>
                                              </div>
                                              </td>
                                              <td style="width: 10%;   text-align: center;font-size:12px">100%</td>
                                          </tr>
                                      </table>
                                  </div>
                              </div>
                          <div style="display: flex; justify-content: space-between; gap: 20px;" class="mb-2">
                              <!-- Primera columna -->
                              <div style="flex: 1;">
                                  <table style="width: 100%; border-radius:10px; border-spacing: 0 10px; border-collapse: separate;background-color: #1E293A; color: white;"  class="container">
                                      <tr >
                                          <td style="width: 30%;  background-color: #1E293A; color: white; padding: 10px;font-size:12px">BIENESTAR INTELECTUAL</td>
                                          <td style="width: 10%;   text-align: center;font-size:12px">0%</td>
                                          <td style="width: 50%;background-color: #1E293A; color: white;" >
                                          <div class="progress" style="height: 20px;">
                                                <div class="progress-bar" role="progressbar" style="width: 10%; background-color: #FEC108;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">10%</div>
                                              </div>
                                          </td>
                                          <td style="width: 10%;   text-align: center;font-size:12px">100%</td>
                                      </tr>
                                  </table>
                              </div>
                              </div>
                                  <!-- Segunda columna -->
                                <div style="display: flex; justify-content: space-between; gap: 20px;" class="mb-2">
                                  <div style="flex: 1;">
                                      <table style="width: 100%; border-radius:10px; border-spacing: 0 10px; border-collapse: separate;background-color: #1E293A; color: white;"  class="container">
                                          <tr >
                                              <td style="width: 30%;  background-color: #1E293A; color: white; padding: 10px;font-size:12px">BIENESTAR PARA LA SALUD FISICA Y EMOCIONAL</td>
                                              <td style="width: 10%;   text-align: center;font-size:12px">0%</td>
                                              <td style="width: 50%;background-color: #1E293A; color: white;" >
                                              <div class="progress" style="height: 20px;">
                                                <div class="progress-bar" role="progressbar" style="width: 50%; background-color: #FEC108;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">50%</div>
                                              </div>
                                              </td>
                                              <td style="width: 10%;   text-align: center;font-size:12px">100%</td>
                                          </tr>
                                      </table>
                                  </div>
                              </div>
                              <div style="display: flex; justify-content: space-between; gap: 20px;" class="mb-2">
                                  <!-- Primera columna -->
                                  <div style="flex: 1;">
                                      <table style="width: 100%; border-radius:10px; border-spacing: 0 10px; border-collapse: separate;background-color: #1E293A; color: white;" class="container">
                                          <tr >
                                              <td style="width: 30%;  background-color: #1E293A; color: white; padding: 10px;font-size:12px">BIENESTAR LEGAL</td>
                                              <td style="width: 10%;   text-align: center;font-size:12px">0%</td>
                                              <td style="width: 50%;background-color: #1E293A; color: white;" >
                                              <div class="progress" style="height: 20px;">
                                                <div class="progress-bar" role="progressbar" style="width: 100%; background-color: #FEC108;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                                              </div>
                                              </td>
                                              <td style="width: 15%;   text-align: center;font-size:12px"> 100%</td>
                                          </tr>
                                      </table>
                                  </div>
                            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" id="saludoencuadre">Aceptar</button>
      </div>
    </div>
  </div>
</div>

    <input style="display:none" type="text" value="{{$folioencriptado}}" id="folioencriptado">

<script src="{{ asset('assets/jquery/jquery.js') }}"></script>
    <script>
      $(document).ready(function(){
        const folio = $('#folioContainer').attr('folio');
        const folioencriptado= $('#folioencriptado').val();
        localStorage.setItem('folioencriptado',folioencriptado);
      $.ajax({
        url:'../index.php/leerintegrantesqt',
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

      function iraqt(idintegranteencriptado, folioencriptado){
        var url = "../bienestarsaludemocionalqt/:folio/:idintegrante";
        url = url.replace(':folio', folioencriptado); 
        url = url.replace(':idintegrante', idintegranteencriptado);
        window.location.href = url;
      } 
      function responderencuesta(folio,idintegrante, folioencriptado, nombre){
        localStorage.setItem('folio',folio);
        localStorage.setItem('idintegrante', idintegrante);
        localStorage.setItem('folioencriptado', folioencriptado);
        localStorage.setItem('nombre', nombre);
        window.location.href = '../encuestaintegrantesfisicoemocional';
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
      data: { folio: '{{$variable}}', usuario:'{{ Session::get('cedula') }}' },
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
          data: { folio: '{{$variable}}', usuario:'{{ Session::get('cedula') }}' },
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