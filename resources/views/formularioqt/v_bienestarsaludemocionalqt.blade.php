@extends('componentes.navlateral')

@section('title', 'encuestaintegrantes')

@section('content')
<!-- <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" >  -->
<style>
  #imagenDinamica:hover{
    border:2px solid gray;
  }
  .imagenDinamicaselect:hover{
    border:2px solid gray;
  }

  .imagenselect{
    border:2px solid gray;
    background: transparent;
    background-color: #e0e0e0;
  }
</style>

<div class="container">
    <img width="100%" height="100px" src="{{ asset('imagenes/headers.png') }}" alt="" class=""  >
<!-- <form class="d-flex pb-4" role="search">
      <input class="form-control me-2" type="search" placeholder="Buscar folio o representante" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Buscar</button>
    </form> -->


        <div class="accordion" id="accordionExample" >
        <div class="accordion-item" id="l1e1">
            <div class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              <div>
                <span class="badge bg-primary" id=""  style="font-size:15px">ENCUESTA INTEGRANTES</span>
                <span class="badge bg-success ms-auto" id="folioContainer" folio="{{ $folio }}" style="font-size:15px">folio: {{ $folio }}</span>
                <span class="badge bg-warning ms-auto" id="folioContainer" folio="{{ $folio }}" style="font-size:15px">Idintegrante: {{ $integrante }}</span>
              </div>
            
            </button>
    <br>
        </div>

    <div><span class="badge bg-success mt-2" id="folio"></span>
    <span class="badge bg-primary" style="display:" id="idintegrante"></span>
    <span class="badge bg-primary" style="background:#a80a85 !important; color:white" id="nombre"></span>
    <span class="badge bg-primary" style="background:#0dcaf0 !important; color:white" id="sexointegrante"></span>
    <span class="badge bg-primary" style="background:#FF8803 !important; color:white" id="edadintegrante"></span>

    </div>

    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <div class="row">
      <ul class="nav nav-tabs" role="tablist">
      <li class="nav-item" role="presentation"  style="cursor:pointer">
        <a id="bienestarsaludemocionalqt" class="nav-link active">BIENESTAR SALUD-EMOCIONAL
        </a>
      </li>
  <li class="nav-item" role="presentation" style="cursor:pointer">
    <a id="legalqt"  class="nav-link " >BIENESTAR LEGAL</a>
  </li>
  <li class="nav-item" role="presentation"  style="cursor:pointer">
    <a id="enfamiliaqt"  class="nav-link " >BIENESTAR EN FAMILIA</a>
  </li>
  <li class="nav-item" role="presentation"  style="cursor:pointer">
    <a id="intelectualqt"  class="nav-link ">BIENESTAR INTELECTUAL</a>
  </li>
  <li class="nav-item" role="presentation"  style="cursor:pointer">
    <a id="financieroqt"  class="nav-link ">BIENESTAR FINANCIERO</a>
  </li>
  
</ul>



<style>
  .invalid-checkbox {
      border: 1px solid red;
      border-radius: 4px;
      padding: 10px;
    }
</style>

<div id="myTabContent" class="tab-content"><br>
  <div class="tab-pane fade active show" id="home" role="tabpanel" aria-labelledby="identificacion">
    <!-- <div class="text-center"><label for="">Avatar</label></div>
        <div class="avatar text-center" style="cursor:pointer">
          <img src="{{asset('avatares/blanco.png')}} " id="imagenDinamica" class="rounded-circle" alt="Avatar" style="width: 150px; height: 150px;" data-bs-toggle="modal" data-bs-target="#exampleModal">
        </div> -->

          <form id="formulario" class="row g-3 was-validated">     
            
          <div class="col-md-3" style="display:none">
            <input type="text" placeholder="folio" class="form-control form-control-sm  " id="folioinput" name="folio" value="{{ $folio }}" >
          </div>
          <div class="col-md-3" style="display:none">
            <input type="text"  class="form-control form-control-sm  " id="idintegrante1" name="idintegrante" value="{{$integrante}}" >
          </div>
          <div class="col-md-3" style="display:none">
            <input type="text" placeholder="usuario" class="form-control form-control-sm  " id="usuario" name="usuario" value="{{ Session::get('cedula') }}" >
          </div>

          <div class="col-md-3" style="display:none">
            <input type="text" placeholder="tabla" class="form-control form-control-sm  " id="tabla" name="tabla" value="{{$tabla}}" >
          </div>

          <span class="badge bg-primary" id="" style="font-size:15px; background:#a80a85 !important">Salud y Bienestar </span>
          <div class="container mt-4">
  <div class="border">
    <!-- Fila de títulos -->
    <div class="row g-0">
      <div class="col-md-4 d-flex align-items-center border-end border-bottom border-bottom text-center" style="background:#2fa4e7; color:white; font-weight:bold">
        <div class="p-2 text-center">
        INDICADOR
        </div>
      </div>
      <div class="col-md-8">
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2 text-center" style="background:#2fa4e7; color:white; font-weight:bold">
          QUIERO Y NO TENGO
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom text-center" style="background:#2fa4e7; color:white; font-weight:bold">
           <label for="">SI / NO</label>
          </div>
        </div>
      </div>
    </div>

    <!-- Fila de contenido -->
    <div class="row g-0">
      <div class="col-md-4 d-flex align-items-center border-end border-bottom border-bottom">
        <div class="p-2">
          Los integrantes de la familia están afiliados al Sistema General de Seguridad Social en Salud – SGSS-
        </div>
      </div>
      <div class="col-md-8">
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
            Reconocer la importancia de estar afiliado al Sistema General de Seguridad Social en Salud – SGSS
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" name="indicadorbse1_1" id="indicadorbse1_1" value="NO" >
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
            Afiliación al Sistema General de Seguridad Social en Salud – SGSS-
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" name="indicadorbse1_2" id="indicadorbse1_2" value="NO" >
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-start p-2 border-bottom">
            Conocer la ruta para afiliación al Sistema General de Seguridad Social en Salud – SGSS-
          </div>
          <div class="col-2 border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch ">
              <input class="form-check-input" type="checkbox" name="indicadorbse1_3" id="indicadorbse1_3" value="NO" >
            </div>
          </div>
        </div>
      </div>
    </div>







 <!-- Fila de contenido -->
 <div class="row g-0">
      <div class="col-md-4 d-flex align-items-center border-end border-bottom">
        <div class="p-2">
        Los integrantes del hogar tienen acceso a intervenciones de promoción y prevención en salud dentro del marco del SGSSS, adaptadas a su edad
        </div>
      </div>
      <div class="col-md-8">
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
             Reconocer la importancia del acceso a  programas de promoción y prevención en salud a través de la  eps 
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" name="indicadorbse2_1" id="indicadorbse2_1" value="NO" >
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
            Conocer los servicios,  lugares y rutas  en los que puede recibir la atención en promoción y prevención en salud
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" name="indicadorbse2_2" id="indicadorbse2_2" value="NO" >
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-start p-2 border-bottom">
          Acceder oportunamente a los programas de promocion y prevención  según la necesidad 
          </div>
          <div class="col-2 border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" name="indicadorbse2_3" id="indicadorbse2_3" value="NO" >
            </div>
          </div>
        </div>
      </div>
    </div>




 <!-- Fila de contenido -->
 <div class="row g-0">
      <div class="col-md-4 d-flex align-items-center border-end border-bottom">
        <div class="p-2">
        Los integrantes del hogar implementan estrategias para  reducir el estrés y  para favorecer el bienestar emocional y fisico
        </div>
      </div>
      <div class="col-md-8">
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Conocer  estrategias que puedan ser aplicadas para favorecer el bienestar emocional y fisico
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" name="indicadorbse3_1" id="indicadorbse3_1" value="NO" >
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Implementar estrategias de bienestar como salidas, actividades familiares, otras que contribuyen al bienestar emocional y fisico
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" name="indicadorbse3_2" id="indicadorbse3_2" value="NO" >
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-start p-2 border-bottom">
          Establecer habitos  para el desarrollo de actividades que favorezan el bienestar emocional y fisico
          </div>
          <div class="col-2 border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" name="indicadorbse3_3" id="indicadorbse3_3" value="NO" >
            </div>
          </div>
        </div>
      </div>
    </div>

     <!-- Fila de contenido -->
     <div class="row g-0">
      <div class="col-md-4 d-flex align-items-center border-end border-bottom">
        <div class="p-2">
        Las personas con discapacidad acceden a programas y/o servicios relacionados con su tipo de discapacidad
        </div>
      </div>
      <div class="col-md-8">
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Conocer los servicios, programas y rutas  para personas con  discapacidad 
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" name="indicadorbse4_1" id="indicadorbse4_1" value="NO" >
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Gestionar recursos y apoyo para asistir a programas para personas con discapacidad 
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" name="indicadorbse4_2" id="indicadorbse4_2" value="NO" >
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-start p-2 border-bottom">
          Acceder a oferta cercana dirigida a personas con  discapacidad
          </div>
          <div class="col-2 border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" name="indicadorbse4_3" id="indicadorbse4_3" value="NO" >
            </div>
          </div>
        </div>
      </div>
    </div>

     <!-- Fila de contenido -->
     <div class="row g-0">
      <div class="col-md-4 d-flex align-items-center border-end border-bottom">
        <div class="p-2">
        Los integrantes del hogar que lo requieren acceden  a programas y/o servicios de intervención frente al consumo de sustancias psicoactivas
        </div>
      </div>
      <div class="col-md-8">
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Reconocer la importancia del acceso a  programas y/o servicios de intervención frente al consumo de sustancias psicoactivas
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" name="indicadorbse5_1" id="indicadorbse5_1" value="NO" >
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Conocer programas y/o servicios de intervención frente al consumo de sustancias psicoactivas
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" name="indicadorbse5_2" id="indicadorbse5_2" value="NO" >
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-start p-2 border-bottom">
          Acceder a servicios de intervención por consumo SPA
          </div>
          <div class="col-2 border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" name="indicadorbse5_3" id="indicadorbse5_3" value="NO" >
            </div>
          </div>
        </div>
      </div>
    </div>

     <!-- Fila de contenido -->
     <div class="row g-0">
      <div class="col-md-4 d-flex align-items-center border-end border-bottom">
        <div class="p-2">
        Los integrantes del hogar que lo requieren acceden a servicios de salud mental  y/o atención psicosocial.
        </div>
      </div>
      <div class="col-md-8">
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Reconocer los comportamientos y situaciones que   afectan la   salud mental 
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" name="indicadorbse6_1" id="indicadorbse6_1" value="NO" >
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Conocer las  instituciones que ofrecen programas para la  atención en  salud mental  y/o rutas para atencion psicosocial 
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" name="indicadorbse6_2" id="indicadorbse6_2" value="NO" >
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-start p-2 border-bottom">
          Acceder de forma oportuna   a la oferta  relacionada con salud mental y/o atencion psicosocial 
          </div>
          <div class="col-2 border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" name="indicadorbse6_3" id="indicadorbse6_3" value="NO" >
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<!-- LOGRO -->
<span class="badge bg-primary" id="" style="font-size:15px; background:#ff8403 !important">Nutrición</span>


<div class="container mt-4">
  <div class="border">
    <!-- Fila de títulos -->
    <div class="row g-0">
      <div class="col-md-4 d-flex align-items-center border-end border-bottom border-bottom text-center" style="background:#2fa4e7; color:white; font-weight:bold">
        <div class="p-2 text-center">
        INDICADOR
        </div>
      </div>
      <div class="col-md-8">
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2 text-center" style="background:#2fa4e7; color:white; font-weight:bold">
          QUIERO Y NO TENGO
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom text-center" style="background:#2fa4e7; color:white; font-weight:bold">
           <label for="">SI / NO</label>
          </div>
        </div>
      </div>
    </div>
  

    <div class="row g-0">
      <div class="col-md-4 d-flex align-items-center border-end border-bottom">
        <div class="p-2">
        Todos los integrantes del hogar cuentan el  acceso y consumo oportuno de alimentos 
        </div>
      </div>
      <div class="col-md-8">
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Contar con los recursos economicos para el acceso y consumo oportuno de alimentos
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" name="indicadorbse7_1" id="indicadorbse7_1" value="NO" >
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-10 border-bottom border-start p-2">
          Implementar  estrategias para contar con disponibilidad de alimentos en el hogar (intercambios, huertas..)
          </div>
          <div class="col-2 border-bottom border-start border-end d-flex align-items-center justify-content-center border-bottom">
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" name="indicadorbse7_2" id="indicadorbse7_2" value="NO" >
            </div>
          </div>
        </div>
      </div>
      </div>
     


  </div>
</div>



          <hr>
          <div class="row">  
            <div class="text-start col">
            <div class="btn btn-outline-success" onclick="redirectToIntegrantes()">Volver</div>
            </div>
            <div class="text-end col">
            <button class="btn btn-outline-success" type="submit">Guardar</button>
            <div class="btn btn-outline-primary" id="siguiente" style="display:none">Siguiente</div>
            </div> 
          </div>

        </form> 
      </div>
        </div>
      </div>
      </div>
    </div>
  </div>
</div>


 
    </div>

    <script src="{{ asset('assets/jquery/jquery.js') }}"></script>

    <script>
    



      $('#siguiente').click(function(){
        var url = "../../legalqt/<?= $variable ?>/<?= $integrantecodificado ?>"; window.location.href = url;
      }); 
      function redirectToIntegrantes() {
           var folio = `<?=$variable ?>`;
           var url = "../../cardsqt/:folio";
           url = url.replace(':folio', folio);
           window.location.href = url;
       }
    


      $('#volver').click(function(){
        redirectToIntegrantes()
      });


      $('#bienestarsaludemocionalqt').click(function(){var url = "../../bienestarsaludemocionalqt/<?= $variable ?>/<?= $integrantecodificado ?>"; window.location.href = url;})
    $('#legalqt').click(function(){var url = "../../legalqt/<?= $variable ?>/<?= $integrantecodificado ?>"; window.location.href = url;})
    $('#enfamiliaqt').click(function(){var url = "../../enfamiliaqt/<?= $variable ?>/<?= $integrantecodificado ?>"; window.location.href = url;})
    $('#intelectualqt').click(function(){var url = "../../intelectualqt/<?= $variable ?>/<?= $integrantecodificado ?>"; window.location.href = url;})
    $('#financieroqt').click(function(){var url = "../../financieroqt/<?= $variable ?>/<?= $integrantecodificado ?>"; window.location.href = url;})

      

       $(document).ready(function() {
     
        $('#formulario').on('submit', function(event) {
            event.preventDefault(); // Detiene el envío del formulario
            
            var formData = $(this).serializeArray();
            var data = {};
            $(formData).each(function(index, obj) {
                data[obj.name] = obj.value;
            });

            console.log(data);

            $.ajax({
                url: '../../guardarformularioqt',
                method: 'GET', // Cambiar a GET si estás usando GET
                data: data, // Envía los datos de manera plana
                success: function(response) {
                  $('#siguiente').css('display','');
                    alertagood();
                },
                error: function(xhr, status, error) {
                    alertabad();
                    console.error(error);
                }
            });
        });
});


    </script>
 

@endsection