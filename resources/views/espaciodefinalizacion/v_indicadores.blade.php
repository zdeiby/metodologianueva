
@extends('componentes.navlateral')

@section('title', 'encuestaintegrantes')

@section('content')
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
                <span class="badge bg-primary" id=""  style="font-size:15px">Fichero de oportunidades</span>
                <span class="badge bg-success ms-auto" id="folioContainer" folio="{{ $folio }}" style="font-size:15px">folio: {{ $folio }}</span>
               
              </div>
            
            </button>
    <br>
        </div>

    <div><span class="badge bg-success mt-2" id="folio"></span>
    <span class="badge bg-primary" style="background:#a80a85 !important; color:white" id="nombre"></span>
    <span class="badge bg-primary" style="background:#0dcaf0 !important; color:white" id="sexointegrante"></span>
    <span class="badge bg-primary" style="background:#FF8803 !important; color:white" id="edadintegrante"></span>

    </div>

    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <div class="row">
      <ul class="nav nav-tabs" role="tablist">
      <li class="nav-item" role="presentation"  style="cursor:pointer">
        <a id="bienestarsaludemocionalqt" class="nav-link ">FICHERO (Integrantes)
        </a>
      </li>
      <li class="nav-item" role="presentation" style="cursor:pointer">
        <a id="legalqt"  class="nav-link" >FICHERO DE OPORTUNIDADES (Hogar)</a>
      </li>
       <li class="nav-item" role="presentation"  style="cursor:pointer">
        <a id="indicadores"  class="nav-link active">GESTIÓN INDICADORES</a>
      </li> 
      <li class="nav-item" role="presentation"  style="cursor:pointer">
        <a id="alertas"  class="nav-link">ALERTAS GESTOR</a>
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

          <form id="formulario">     
            
          <div class="col-md-3" style="display:none">
            <input type="text" placeholder="folio" class="form-control form-control-sm  " id="folioinput" name="folio" value="{{ $folio }}" >
          </div>
         
          <div class="col-md-3" style="display:none">
            <input type="text" placeholder="usuario" class="form-control form-control-sm  " id="usuario" name="usuario" value="{{ Session::get('cedula') }}" >
          </div>

          <div class="col-md-3" style="display:none">
            <input type="text" placeholder="tabla" class="form-control form-control-sm  " id="tabla" name="tabla" value="{{$tabla}}" >
            <input type="text" placeholder="linea" class="form-control form-control-sm  " id="linea" name="linea" value="{{$linea}}" >
            <input type="text" placeholder="paso" class="form-control form-control-sm  " id="paso" name="paso" value="{{$paso}}" >
          </div>

          <div class="was-validated">
            <div class="pb-2">
              <label for="">Seleccione integrante a quien le desea mover indicadores</label>
            </div>

            <select class="form-control form-control-sm  "  name="integrantes" id="integrantes" required>
              {!! $integrantes_options !!} 
            </select>
          </div>
          

<br>

          <div id="iframeWrap" style="display:none; margin-top:10px;">
            <iframe id="indicadoresFrame" src="" width="100%" height="650" frameborder="0"></iframe>
          </div>


    </div>
  </div>
          <hr>
          <div class="row">  
            <div class="text-start col">


             <div class="btn btn-outline-success" onclick="redirectToIntegrantes()">Volver</div>



            </div>
            <div class="text-end col">
            <!-- <button class="btn btn-outline-success" type="submit"  >Guardar</button> -->
            <div class="btn btn-outline-primary" id="siguiente"   >Siguiente</div>
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

  

</div>





<script src="{{ asset('assets/jquery/jquery.js') }}"></script>
<script>




   
   $('#siguiente').click(function(){
        var url = "../alertasgestor1t1/<?= $variable ?>"; window.location.href = url;
      }); 
      function redirectToIntegrantes() {
           var folio = `<?=$variable ?>`;
           var url = "../ficherodeoportunidadeshogar/:folio";
           url = url.replace(':folio', folio);
           window.location.href = url;
       }

       $('#bienestarsaludemocionalqt').click(function(){var url = "../ficherodeoportunidades/<?= $variable ?>"; window.location.href = url;})
    $('#legalqt').click(function(){var url = "../ficherodeoportunidadeshogar/<?= $variable ?>"; window.location.href = url;})
     $('#indicadores').click(function(){var url = "../indicadores/<?= $variable ?>"; window.location.href = url;})
       $('#alertas').click(function(){var url = "../alertasgestor1t1/<?= $variable ?>"; window.location.href = url;})
    

</script>

<script>
  (function () {
    const sel   = document.getElementById('integrantes');
    const wrap  = document.getElementById('iframeWrap');
    const frame = document.getElementById('indicadoresFrame');

    // folio (primer parámetro) ya codificado que mandas a la vista
    const folio = '<?= $variable ?>'; // o @json($foliomenu) si ese usas

    function updateIframe() {
      const integrante = sel.value; // ya codificado (ejRAWp4QPe, etc.)
      if (!integrante) {
        frame.src = '';
        wrap.style.display = 'none';
        return;
      }
      const base = @json(url('bienestarsaludemocionalqtvisita'));
      frame.src = `${base}/${folio}/${integrante}/500`;
      wrap.style.display = 'block';
    }

    sel.addEventListener('change', updateIframe);

    // si llega preseleccionado, lo pintamos al cargar
    if (sel.value) updateIframe();
  })();
</script>
@endsection