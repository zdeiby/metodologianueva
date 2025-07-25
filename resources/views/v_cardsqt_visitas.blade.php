@extends('componentes.navlateral')

@section('title', 'CATEGORIAS DE BIENESTAR HERRAMIENTA QT')

@section('content')
<style>


#draw-canvas {
    max-width: 100%;
    height: auto;
    border: 1px solid #000;
}

</style>
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
        <span class="badge bg-success ms-auto" id="folioContainer" value="{{$variable}}" folio="{{ $variable }}">folio: {{ $variable }}</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <span class="badge bg-success ms-auto" style="background:#a80a85 !important; cursor:pointer;font-size:18px" data-bs-toggle="modal" data-bs-target="#exampleModal">Ver QT del hogar</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" id="foliobycript" value="{{$foliobycript}}" style="display:none">
        <input type="text" id="folio" value="{{$folioencriptado}}" style="display:none">
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
                <div class="btn btn-outline-success" id="volver">Volver</div>
                </div>
          
          <div class=" col">
          <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" id="finalizarboton" >Finalizar</button>
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
                                    <div style="flex: 1;">
                                        <table style="width: 100%; border-radius:10px; border-spacing: 0 10px; border-collapse: separate; background-color: #1E293A; color: white;" class="container">
                                            <tr>
                                                <td style="width: 30%; background-color: #1E293A; color: white; padding: 10px; font-size: 12px">BIENESTAR EN FAMILIA</td>
                                                <td style="width: 10%; text-align: center; font-size: 12px">0%</td>
                                                <td style="width: 50%; background-color: #1E293A; color: white;">
                                                    <div class="progress" style="height: 20px; display: flex;">
                                                        
                                                        <!-- Barra verde -->
                                                        <div class="progress-bar" role="progressbar" style="width: {{$porcentaje_verde_bef}}%; background-color: #00FF00;" aria-valuenow="{{$porcentaje_verde_bef}}" aria-valuemin="0" aria-valuemax="100">{{$porcentaje_verde_bef}}%</div>
                                                                                                                <!-- Barra roja -->
                                                        <div class="progress-bar" role="progressbar" style="width: {{$porcentaje_rojo_bef}}%; background-color: #FF0000;" aria-valuenow="{{$porcentaje_rojo_bef}}" aria-valuemin="0" aria-valuemax="100">{{$porcentaje_rojo_bef}}%</div>

                                                    </div>
                                                </td>
                                                <td style="width: 10%; text-align: center; font-size: 12px">100%</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                  <!-- Segunda columna -->
                                  <div style="display: flex; justify-content: space-between; gap: 20px;" class="mb-2">
                                    <div style="flex: 1;">
                                        <table style="width: 100%; border-radius:10px; border-spacing: 0 10px; border-collapse: separate; background-color: #1E293A; color: white;" class="container">
                                            <tr>
                                                <td style="width: 30%; background-color: #1E293A; color: white; padding: 10px; font-size: 12px">BIENESTAR FINANCIERO</td>
                                                <td style="width: 10%; text-align: center; font-size: 12px">0%</td>
                                                <td style="width: 50%; background-color: #1E293A; color: white;">
                                                    <div class="progress" style="height: 20px; display: flex;">
                                                        
                                                        <!-- Barra verde -->
                                                        <div class="progress-bar" role="progressbar" style="width: {{$porcentaje_verde_bf}}%; background-color: #00FF00;" aria-valuenow="{{$porcentaje_verde_bf}}" aria-valuemin="0" aria-valuemax="100">{{$porcentaje_verde_bf}}%</div>
                                                                                                                <!-- Barra roja -->
                                                        <div class="progress-bar" role="progressbar" style="width: {{$porcentaje_rojo_bf}}%; background-color: #FF0000;" aria-valuenow="{{$porcentaje_rojo_bf}}" aria-valuemin="0" aria-valuemax="100">{{$porcentaje_rojo_bf}}%</div>

                                                    </div>
                                                </td>
                                                <td style="width: 10%; text-align: center; font-size: 12px">100%</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div style="display: flex; justify-content: space-between; gap: 20px;" class="mb-2">
                                    <div style="flex: 1;">
                                        <table style="width: 100%; border-radius:10px; border-spacing: 0 10px; border-collapse: separate; background-color: #1E293A; color: white;" class="container">
                                            <tr>
                                                <td style="width: 30%; background-color: #1E293A; color: white; padding: 10px; font-size: 12px">BIENESTAR INTELECTUAL</td>
                                                <td style="width: 10%; text-align: center; font-size: 12px">0%</td>
                                                <td style="width: 50%; background-color: #1E293A; color: white;">
                                                    <div class="progress" style="height: 20px; display: flex;">
                                                        
                                                        <!-- Barra verde -->
                                                        <div class="progress-bar" role="progressbar" style="width: {{$porcentaje_verde_bi}}%; background-color: #00FF00;" aria-valuenow="{{$porcentaje_verde_bi}}" aria-valuemin="0" aria-valuemax="100">{{$porcentaje_verde_bi}}%</div>
                                                                                                                <!-- Barra roja -->
                                                        <div class="progress-bar" role="progressbar" style="width: {{$porcentaje_rojo_bi}}%; background-color: #FF0000;" aria-valuenow="{{$porcentaje_rojo_bi}}" aria-valuemin="0" aria-valuemax="100">{{$porcentaje_rojo_bi}}%</div>

                                                    </div>
                                                </td>
                                                <td style="width: 10%; text-align: center; font-size: 12px">100%</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                  <!-- Segunda columna -->
                                  <div style="display: flex; justify-content: space-between; gap: 20px;" class="mb-2">
                                    <div style="flex: 1;">
                                        <table style="width: 100%; border-radius:10px; border-spacing: 0 10px; border-collapse: separate; background-color: #1E293A; color: white;" class="container">
                                            <tr>
                                                <td style="width: 30%; background-color: #1E293A; color: white; padding: 10px; font-size: 12px">BIENESTAR PARA LA SALUD FISICA Y EMOCIONAL</td>
                                                <td style="width: 10%; text-align: center; font-size: 12px">0%</td>
                                                <td style="width: 50%; background-color: #1E293A; color: white;">
                                                    <div class="progress" style="height: 20px; display: flex;">
                                                        
                                                        <!-- Barra verde -->
                                                        <div class="progress-bar" role="progressbar" style="width: {{$porcentaje_verde_bse}}%; background-color: #00FF00;" aria-valuenow="{{$porcentaje_verde_bse}}" aria-valuemin="0" aria-valuemax="100">{{$porcentaje_verde_bse}}%</div>
                                                                                                                <!-- Barra roja -->
                                                        <div class="progress-bar" role="progressbar" style="width: {{$porcentaje_rojo_bse}}%; background-color: #FF0000;" aria-valuenow="{{$porcentaje_rojo_bse}}" aria-valuemin="0" aria-valuemax="100">{{$porcentaje_rojo_bse}}%</div>

                                                    </div>
                                                </td>
                                                <td style="width: 10%; text-align: center; font-size: 12px">100%</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div style="display: flex; justify-content: space-between; gap: 20px;" class="mb-2">
                                    <div style="flex: 1;">
                                        <table style="width: 100%; border-radius:10px; border-spacing: 0 10px; border-collapse: separate; background-color: #1E293A; color: white;" class="container">
                                            <tr>
                                                <td style="width: 30%; background-color: #1E293A; color: white; padding: 10px; font-size: 12px">BIENESTAR LEGAL</td>
                                                <td style="width: 10%; text-align: center; font-size: 12px">0%</td>
                                                <td style="width: 50%; background-color: #1E293A; color: white;">
                                                    <div class="progress" style="height: 20px; display: flex;">
                                                        
                                                        <!-- Barra verde -->
                                                        <div class="progress-bar" role="progressbar" style="width: {{$porcentaje_verde_bl}}%; background-color: #00FF00;" aria-valuenow="{{$porcentaje_verde_bl}}" aria-valuemin="0" aria-valuemax="100">{{$porcentaje_verde_bl}}%</div>
                                                                                                                <!-- Barra roja -->
                                                        <div class="progress-bar" role="progressbar" style="width: {{$porcentaje_rojo_bl}}%; background-color: #FF0000;" aria-valuenow="{{$porcentaje_rojo_bl}}" aria-valuemin="0" aria-valuemax="100">{{$porcentaje_rojo_bl}}%</div>

                                                    </div>
                                                </td>
                                                <td style="width: 10%; text-align: center; font-size: 12px">100%</td>
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

<!-- Modal -->
<div class="modal fade modal-lg" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <span class="badge bg-primary pt-1" style="font-size:17px">Firma o evidencia de la visita</span>
      <form id="formulario" class="row g-3 was-validated">   
      <div class="col-md-3" style="display:none">
            <input type="text" placeholder="folio" class="form-control form-control-sm  " id="folioinput" name="folio" value="{{ $variable }}" >
          </div>
         
          <div class="col-md-3" style="display:none">
            <input type="text" placeholder="usuario" class="form-control form-control-sm  " id="usuario" name="usuario" value="{{ Session::get('cedula') }}" >
          </div>

          <div class="col-md-3" style="display:none">
            <input type="text" placeholder="tabla" class="form-control form-control-sm  " id="tabla" name="tabla" value="{{$tabla}}" >
            <input type="text" placeholder="linea" class="form-control form-control-sm  " id="linea" name="linea" value="{{$linea}}" >
            <input type="text" placeholder="paso" class="form-control form-control-sm  " id="paso" name="paso" value="{{$paso}}" >
             <input type="text" placeholder="paso" class="form-control form-control-sm  " id="visita" name="visita" value="{{$visita}}" >
          </div>
      <div class="modal-body">
  <div id="firmaacepta" class="text-center" >
  
             
  <div class="row">
      <div class="col-sm">
          <div class="alert alert-info" role="alert" style="background:#bee5eb">
              En el siguiente cuadro realiza la firma y cuando este firmado oprime el botón <strong>Cargar Firma</strong>
          </div>
      </div>
  </div>
  <div class="row" style="display: none">
      <div class="form-group col-sm">
          <label for="nameFirma">firma:</label>
          <input type="text" class="form-control form-control-sm" id="nameFirma" value="">
      </div>
  </div>
  <div class="contenedor" >
      <div class="row">
          <div class="col-sm" >
              <div class="alert alert-secondary" role="alert">
                  <canvas id="draw-canvas"  width="620" height="180"  style="border:1px solid #0dcaf0">
                      No tienes un buen navegador.
                  </canvas>
              </div>
          </div>
      </div>
      <div class="row" >
          <div class="col-sm">
              <input type="button" class="btn btn-primary btn-sm" id="draw-submitBtn" value="Cargar Firma"></input>
              <input type="button" class="btn btn-warning btn-sm" id="draw-clearBtn" value="Limpiar Firma"></input>
              <label>Color</label>
              <input type="color" id="color">
              <label>Tamaño Puntero</label>
              <input type="range" id="puntero" min="1" default="1" max="5" width="10%"><hr>
              <label for="">Si no puedes firmar puedes incluir la firma en foto, o un documento que avale</label><br>
                  <label class="btn btn-primary btn-sm" for="file-input">
                      <i class="fas fa-camera"></i> Seleccionar archivo de tu equipo 💻
                      <input type="file" id="file-input" accept="image/*" style="display: none;">
                  </label>

                  <div id="openCameraModal" class="btn btn-success btn-sm">📸 Tomar Foto desde la cámara</div>
                  
  
          </div>
      </div>
      <br />
      <div class="row" style="display:none">
          <div class="col-sm">
              <textarea id="draw_dataUrl" class="form-control" rows="5"></textarea>
          </div>
      </div>
  
      <div class="row">
          <div class="col-sm">
              <div class="alert alert-info" role="alert" style="background:#bee5eb">
                  Acá aparecerá la firma del usuario cargada.
              </div>
          </div>
      </div>
  
  
  
  
      <div class="contenedor">
          <div class="col-sm" >
              <img id="draw-image" width="80%" src="<?= $url_firma ?>" alt="" />
          </div>
      </div>
  </div>
  </div>
  

      </div>
      <div class="modal-footer">
      <div class="text-end col">
              <button class="btn btn-outline-success" type="submit"  >Guardar</button>
              <div class="btn btn-outline-primary" id="finalizarfirma" <?=$siguiente?> >Finalizar visita</div>
              </div> 

      </div>
    </div>
    </form>
  </div>
</div>


<!-- MODAL PARA TOMAR FOTO 
<div class="modal fade" id="cameraModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tomar Foto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body text-center">
        
        <div style="display: flex; justify-content: center; align-items: center;">
          <video id="video" autoplay style="width: 100%; max-width: 400px; border: 1px solid black;"></video>
        </div>
        <br>
        <div style="display: flex; justify-content: center; align-items: center; margin-top: 10px;">
          <button  id="capturePhoto" class="btn btn-primary">📸 Capturar</button>
        </div>

        
        <canvas id="photoCanvas" style="display:none;"></canvas>
        <img id="photoPreview" style="width:100%; display:none; border: 1px solid #000;" />
      </div>
      <div class="modal-footer">
        <button type="button" id="acceptPhoto" class="btn btn-success" disabled>✅ Aceptar</button>
        <button type="button" id="retakePhoto" class="btn btn-warning" style="display:none;">🔄 Repetir Foto</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">❌ Cancelar</button>
      </div>
    </div>
  </div>
</div>
-->


<!-- MODAL PARA TOMAR FOTO -->
<div class="modal fade" id="cameraModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tomar Foto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar" id="closeModal"></button>
      </div>
      <div class="modal-body text-center">
        <!-- Cámara para capturar la foto -->
        <div style="display: flex; justify-content: center; align-items: center;">
          <video id="video" autoplay style="width: 100%; max-width: 400px; border: 1px solid black;"></video>
        </div>
        <br>
        <div style="display: flex; justify-content: center; align-items: center; margin-top: 10px;">
          <button id="capturePhoto" class="btn btn-primary">📸 Capturar</button>
        </div>

        <!-- Donde se mostrará la foto después de tomarla -->
        <canvas id="photoCanvas" style="display:none;"></canvas>
        <img id="photoPreview" style="width:100%; display:none; border: 1px solid #000;" />
      </div>
      <div class="modal-footer">
      <button type="button" id="acceptPhoto" class="btn btn-success" disabled>✅ Aceptar</button>
        <button type="button" id="retakePhoto" class="btn btn-warning" style="display:none;">🔄 Repetir Foto</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="cancelModal">❌ Cancelar</button>
      </div>
    </div>
  </div>
</div>




    <input style="display:none" type="text" value="{{$folioencriptado}}" id="folioencriptado">

<script src="{{ asset('assets/jquery/jquery.js') }}"></script>
    <script>
      paginacargando();
      $(document).ready(function(){
        const folio = <?= $variable ?>;
        const folioencriptado= $('#folioencriptado').val();
        localStorage.setItem('folioencriptado',folioencriptado);
      $.ajax({
         url: "{{ route('leerintegrantesqtvisitas') }}",
        data:{folio:folio, folioencriptado:folioencriptado, metodologia: '<?= $metodologia ?>'},
        method: "GET",
        dataType:'JSON',
        success:function(data){
          $('#integrantes').html(data.foliosintegrante);
          paginalista();
        },
        error: function(xhr, status, error) {
                  console.log(xhr.responseText);
              }
      })
      })

      function iraqt(idintegranteencriptado, folioencriptado){
        var url = "../../bienestarsaludemocionalqt/:folio/:idintegrante/:visita";
        url = url.replace(':folio', folioencriptado); 
        url = url.replace(':idintegrante', idintegranteencriptado);
        url = url.replace(':visita', $('#visita').val());
        window.location.href = url;
      } 
      function responderencuesta(folio,idintegrante, folioencriptado, nombre){
        localStorage.setItem('folio',folio);
        localStorage.setItem('idintegrante', idintegrante);
        localStorage.setItem('folioencriptado', folioencriptado);
        localStorage.setItem('nombre', nombre);
        window.location.href = '../encuestaintegrantesfisicoemocional';
      } 
      
   


      // function redirectToIntegrantes() {
      //      var folio = $('#foliobycript').val();
      //      var url = "../cobertura/";
      //    //  url = url.replace(':folio', folio);
      //      window.location.href = url;
      //  }

 

      $('#volver').click(function () {
          const folio = $('#folio').val();
          const visita = $('#visita').val();

          let url = "../../rombovisitatipo1refuerzo2/:folio";
          url = url.replace(':folio', folio);

          window.location.href = url;
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
// $(document).ready(function() {
//   $('#saludoencuadre').click(function() {
//     $.ajax({
//       url: '../agregarpasoencuadre',
//       data: { folio: '{{$variable}}', usuario:'{{ Session::get('cedula') }}' },
//       method: "GET",
//       dataType: 'JSON',
//       success: function(data) {
        
//         console.log(data);
//       },
//       error: function(xhr, status, error) {
//         console.log(xhr.responseText);
//       }
//     });
//   });
// });


 $(document).ready(function() {

 $('#finalizarfirma').click(function(){
       $.ajax({
           url: '../finalizarintegrantesqt',
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

<script>
(function() { // Comenzamos una funcion auto-ejecutable

// Obtenenemos un intervalo regular(Tiempo) en la pamtalla
window.requestAnimFrame = (function (callback) {
  return window.requestAnimationFrame ||
        window.webkitRequestAnimationFrame ||
        window.mozRequestAnimationFrame ||
        window.oRequestAnimationFrame ||
        window.msRequestAnimaitonFrame ||
        function (callback) {
           window.setTimeout(callback, 1000/60);
          // Retrasa la ejecucion de la funcion para mejorar la experiencia
        };
})();


let uploadedFile = null;  // Variable para almacenar el archivo subido

// Escuchar el evento cuando se selecciona un archivo
document.getElementById('file-input').addEventListener('change', function(event) {
    let file = event.target.files[0];  // Obtener el archivo subido

    if (file) {
        // Crear una vista previa de la imagen seleccionada
        let reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById('draw-image').src = e.target.result;  // Mostrar la imagen en el elemento img
        };
        reader.readAsDataURL(file);  // Leer el archivo como una URL de datos Base64
        
        uploadedFile = file;  // Guardar el archivo subido en la variable
        isFirmaCargada = true;  // Marcar que la firma ha sido cargada
    }
});


// Traemos el canvas mediante el id del elemento html
var canvas = document.getElementById("draw-canvas");
var ctx = canvas.getContext("2d");


// Mandamos llamar a los Elemetos interactivos de la Interfaz HTML
var drawText = document.getElementById("draw_dataUrl");
var drawImage = document.getElementById("draw-image");
var clearBtn = document.getElementById("draw-clearBtn");
var submitBtn = document.getElementById("draw-submitBtn");
clearBtn.addEventListener("click", function (e) {
  // Definimos que pasa cuando el boton draw-clearBtn es pulsado
  clearCanvas();
  drawImage.setAttribute("src", "");
}, false);
  // Definimos que pasa cuando el boton draw-submitBtn es pulsado
  let isFirmaCargada = false;  // Bandera para verificar si el usuario ha cargado una nueva firma

// Al hacer clic en el botón para adjuntar la firma (supongo que es el botón "submitBtn")
submitBtn.addEventListener("click", function (e) {
    dataUrl = canvas.toDataURL();  // Obtener el contenido del canvas como Base64
    drawText.innerHTML = dataUrl;   
    drawImage.setAttribute("src", dataUrl);  // Mostrar la nueva firma en la imagen
    isFirmaCargada = true;  // Marcar que se ha cargado una nueva firma
});

// Guardar en la base de datos al enviar el formulario
$('#formulario').on('submit', function(event) {
    event.preventDefault(); // Detiene el envío del formulario

    var formData = new FormData();

    // Serializar los datos del formulario y agregarlos a FormData
    $(this).find('input, textarea, select').each(function() {
        if (this.name) { // Asegúrate de que tenga un nombre
            formData.append(this.name, $(this).val());
        }
    });

    // Verificar si el usuario ha decidido cargar una nueva firma
    if (isFirmaCargada) {
      let existingSignature = document.getElementById('draw-image').getAttribute('src');
        formData.append('url_firma', existingSignature);   // Añadir el Base64 (dataUrl) al FormData
    } else {
        // Si no se ha tocado el canvas, obtener la firma existente en el src de la imagen
        let existingSignature = document.getElementById('draw-image').getAttribute('src');
        if (existingSignature && existingSignature !== '') {
            formData.append('url_firma', existingSignature);  // Añadir la firma previa (del src del img)
        }
    }

    formData.append('_token', $('meta[name="csrf-token"]').attr('content'));  // Añadir el token CSRF

    // Enviar los datos con AJAX
    $.ajax({
        url: '../guardarfirma',
        method: 'POST',  // Cambia a POST para enviar datos y archivos
        data: formData,  // Enviar el objeto FormData
        processData: false,  // No procesar los datos, FormData se encarga de eso
        contentType: false,  // No establecer el tipo de contenido automáticamente
        success: function(response) {
            $('#finalizarfirma').css('display', '');  // Mostrar el botón de siguiente (suponiendo que es parte del flujo)
            alertagood();  // Suponiendo que es tu función de éxito
        },
        error: function(xhr, status, error) {
            alertabad();  // Suponiendo que es tu función de error
            console.error(error);
        }
    });
});

  // fin guardar
 

// Activamos MouseEvent para nuestra pagina
var drawing = false;
var mousePos = { x:0, y:0 };
var lastPos = mousePos;
canvas.addEventListener("mousedown", function (e)
{
  /*
    Mas alla de solo llamar a una funcion, usamos function (e){...}
    para mas versatilidad cuando ocurre un evento
  */
  var tint = document.getElementById("color");
  var punta = document.getElementById("puntero");
  console.log(e);
  drawing = true;
  lastPos = getMousePos(canvas, e);
}, false);
canvas.addEventListener("mouseup", function (e)
{
  drawing = false;
}, false);
canvas.addEventListener("mousemove", function (e)
{
  mousePos = getMousePos(canvas, e);
}, false);

// Activamos touchEvent para nuestra pagina
canvas.addEventListener("touchstart", function (e) {
  mousePos = getTouchPos(canvas, e);
  console.log(mousePos);
  e.preventDefault(); // Prevent scrolling when touching the canvas
  var touch = e.touches[0];
  var mouseEvent = new MouseEvent("mousedown", {
    clientX: touch.clientX,
    clientY: touch.clientY
  });
  canvas.dispatchEvent(mouseEvent);
}, false);
canvas.addEventListener("touchend", function (e) {
  e.preventDefault(); // Prevent scrolling when touching the canvas
  var mouseEvent = new MouseEvent("mouseup", {});
  canvas.dispatchEvent(mouseEvent);
}, false);
canvas.addEventListener("touchleave", function (e) {
  // Realiza el mismo proceso que touchend en caso de que el dedo se deslice fuera del canvas
  e.preventDefault(); // Prevent scrolling when touching the canvas
  var mouseEvent = new MouseEvent("mouseup", {});
  canvas.dispatchEvent(mouseEvent);
}, false);
canvas.addEventListener("touchmove", function (e) {
  e.preventDefault(); // Prevent scrolling when touching the canvas
  var touch = e.touches[0];
  var mouseEvent = new MouseEvent("mousemove", {
    clientX: touch.clientX,
    clientY: touch.clientY
  });
  canvas.dispatchEvent(mouseEvent);
}, false);

// Get the position of the mouse relative to the canvas
function getMousePos(canvasDom, mouseEvent) {
  var rect = canvasDom.getBoundingClientRect();
  /*
    Devuelve el tamaño de un elemento y su posición relativa respecto
    a la ventana de visualización (viewport).
  */
  return {
    x: mouseEvent.clientX - rect.left,
    y: mouseEvent.clientY - rect.top
  };
}

// Get the position of a touch relative to the canvas
function getTouchPos(canvasDom, touchEvent) {
  var rect = canvasDom.getBoundingClientRect();
  console.log(touchEvent);
  /*
    Devuelve el tamaño de un elemento y su posición relativa respecto
    a la ventana de visualización (viewport).
  */
  return {
    x: touchEvent.touches[0].clientX - rect.left, // Popiedad de todo evento Touch
    y: touchEvent.touches[0].clientY - rect.top
  };
}

// Draw to the canvas
function renderCanvas() {
  if (drawing) {
    var tint = document.getElementById("color");
    var punta = document.getElementById("puntero");
    ctx.strokeStyle = tint.value;
    ctx.beginPath();
    ctx.moveTo(lastPos.x, lastPos.y);
    ctx.lineTo(mousePos.x, mousePos.y);
    console.log(punta.value);
    ctx.lineWidth = punta.value;
    ctx.stroke();
    ctx.closePath();
    lastPos = mousePos;
  }
}

function clearCanvas() {
  canvas.width = canvas.width;
}

// Allow for animation
(function drawLoop () {
  requestAnimFrame(drawLoop);
  renderCanvas();
})();

})();

  //mostar firma
  function btmostrarfirma() {
      $('#nameFirma').val('');
      $('#draw_dataUrl').val('');
      $('#draw-image').attr("src", "");
     

      $('#panelfirma').css({
          display: 'none'
      });

      if ($('#autorizofirma').val() == 2) {

          $('#panelfirma').css({
              display: 'block'
          });
      }
  }


  function dataURLToBlob(dataUrl) {
    // Dividir el formato de datos y el contenido base64
    var arr = dataUrl.split(','), 
        mime = arr[0].match(/:(.*?);/)[1], // Obtener el tipo MIME de los datos (ejemplo: 'image/png')
        bstr = atob(arr[1]), // Decodificar la parte base64
        n = bstr.length, 
        u8arr = new Uint8Array(n); // Crear un Uint8Array para almacenar los datos binarios

    while (n--) {
        u8arr[n] = bstr.charCodeAt(n); // Convertir cada carácter a un código de 8 bits (byte)
    }

    // Crear y devolver el blob con el tipo MIME y los datos binarios
    return new Blob([u8arr], { type: mime });
}

</script>

<script>
/*
document.addEventListener('DOMContentLoaded', function () {
    let openModalBtn = document.getElementById('openCameraModal');
    let video = document.getElementById('video');
    let captureBtn = document.getElementById('capturePhoto');
    let acceptPhotoBtn = document.getElementById('acceptPhoto');
    let retakePhotoBtn = document.getElementById('retakePhoto');
    let photoCanvas = document.getElementById('photoCanvas');
    let photoCtx = photoCanvas.getContext('2d');
    let photoPreview = document.getElementById('photoPreview');
    let drawImage = document.getElementById('draw-image');
    let photoData = null; // Para almacenar la imagen capturada

    // Abrir el modal y activar la cámara
    openModalBtn.addEventListener('click', function () {
        navigator.mediaDevices.getUserMedia({ video: true })
            .then(stream => {
                video.srcObject = stream;
                let myModal = new bootstrap.Modal(document.getElementById('cameraModal'));
                myModal.show();
                captureBtn.style.display = 'block'; // Mostrar el botón capturar
                acceptPhotoBtn.disabled = true; // Deshabilitar aceptar al inicio
                retakePhotoBtn.style.display = 'none'; // Ocultar "Repetir"
            })
            .catch(err => console.error("Error al acceder a la cámara:", err));
    });

    // Capturar la foto y mostrarla en el modal
    captureBtn.addEventListener('click', function () {
        photoCanvas.width = video.videoWidth;
        photoCanvas.height = video.videoHeight;
        photoCtx.drawImage(video, 0, 0, photoCanvas.width, photoCanvas.height);
        photoData = photoCanvas.toDataURL(); // Convertir a Base64

        // Ocultar el video y mostrar la foto
        video.style.display = 'none';
        photoPreview.src = photoData;
        photoPreview.style.display = 'block';

        // Ocultar botón de "Capturar", mostrar "Repetir" y habilitar "Aceptar"
        captureBtn.style.display = 'none';
        acceptPhotoBtn.disabled = false;
        retakePhotoBtn.style.display = 'inline-block';
    });

    // Permitir repetir la foto
    retakePhotoBtn.addEventListener('click', function () {
        video.style.display = 'block';
        photoPreview.style.display = 'none';
        captureBtn.style.display = 'block'; // Volver a mostrar Capturar
        acceptPhotoBtn.disabled = true; // Deshabilitar Aceptar
        retakePhotoBtn.style.display = 'none'; // Ocultar "Repetir"
    });

    // Aceptar la foto y enviarla al contenedor final
    acceptPhotoBtn.addEventListener('click', function () {
        if (photoData) {
            drawImage.src = photoData; // Enviar la imagen a #draw-image
        }
        let modal = bootstrap.Modal.getInstance(document.getElementById('cameraModal'));
        modal.hide(); // Cerrar el modal
    });
}); */
</script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    let openModalBtn = document.getElementById('openCameraModal');
    let video = document.getElementById('video');
    let captureBtn = document.getElementById('capturePhoto');
    let acceptPhotoBtn = document.getElementById('acceptPhoto');
    let retakePhotoBtn = document.getElementById('retakePhoto');
    let photoCanvas = document.getElementById('photoCanvas');
    let photoCtx = photoCanvas.getContext('2d');
    let photoPreview = document.getElementById('photoPreview');
    let drawImage = document.createElement('img'); // Se crea la imagen final para visualizar
    let photoData = null; // Para almacenar la imagen capturada
    let cameraModal = new bootstrap.Modal(document.getElementById('cameraModal')); // Inicializar el modal correctamente

    // 📌 ABRIR EL MODAL Y ACTIVAR LA CÁMARA
    openModalBtn.addEventListener('click', function () {
        navigator.mediaDevices.getUserMedia({ video: true })
            .then(stream => {
                video.srcObject = stream;
                cameraModal.show(); // ✅ Abre el modal correctamente
                resetModalState(); // 🔄 Reinicia el estado del modal
            })
            .catch(err => console.error("Error al acceder a la cámara:", err));
    });

    // 📸 CAPTURAR LA FOTO Y MOSTRARLA EN EL MODAL
    captureBtn.addEventListener('click', function () {
        photoCanvas.width = video.videoWidth;
        photoCanvas.height = video.videoHeight;
        photoCtx.drawImage(video, 0, 0, photoCanvas.width, photoCanvas.height);
        photoData = photoCanvas.toDataURL(); // Convertir a Base64

        // 🎯 OCULTAR EL VIDEO Y MOSTRAR LA FOTO CAPTURADA
        video.style.display = 'none';
        photoPreview.src = photoData;
        photoPreview.style.display = 'block';

        // 🔄 OCULTAR EL BOTÓN "CAPTURAR" Y MOSTRAR "REPETIR"
        captureBtn.style.display = 'none';
        acceptPhotoBtn.disabled = false;
        retakePhotoBtn.style.display = 'inline-block';
    });

    // 🔄 REPETIR LA FOTO
    retakePhotoBtn.addEventListener('click', function () {
        video.style.display = 'block';
        photoPreview.style.display = 'none';
        captureBtn.style.display = 'block'; // Mostrar Capturar nuevamente
        acceptPhotoBtn.disabled = true; // Deshabilitar Aceptar
        retakePhotoBtn.style.display = 'none'; // Ocultar "Repetir"
    });

   

    

    acceptPhotoBtn.addEventListener('click', function () {
    if (photoData) {
        let drawImage = document.getElementById('draw-image'); // Asegurar que estamos usando el ID correcto
        drawImage.src = photoData; // Enviar la imagen a #draw-image
    }
    let modal = bootstrap.Modal.getInstance(document.getElementById('cameraModal'));
    stopCamera();
    modal.hide(); // Cerrar el modal
    
});

    // ❌ RESETEAR TODO Y DETENER LA CÁMARA AL CERRAR EL MODAL
    document.getElementById('cancelModal').addEventListener('click', function () {
        stopCamera(); // 🚫 Apagar la cámara
        resetModalState(); // 🔄 Reiniciar los botones y la interfaz
    });

    document.getElementById('closeModal').addEventListener('click', function () {
        stopCamera(); // 🚫 Apagar la cámara
        resetModalState();
    });

    // 🔄 FUNCIÓN PARA REINICIAR EL ESTADO DEL MODAL
    function resetModalState() {
        video.style.display = 'block';
        photoPreview.style.display = 'none';
        captureBtn.style.display = 'block';
        acceptPhotoBtn.disabled = true;
        retakePhotoBtn.style.display = 'none';
    }

    // 🚫 FUNCIÓN PARA DETENER LA CÁMARA CUANDO SE CIERRA EL MODAL
    function stopCamera() {
        let stream = video.srcObject;
        if (stream) {
            let tracks = stream.getTracks();
            tracks.forEach(track => track.stop());
            video.srcObject = null;
        }
    }
});
</script>

@endsection