
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
        <a id="bienestarsaludemocionalqt" class="nav-link ">FICHERO DE OPORTUNIDADES (Integrantes)
        </a>
      </li>
      <li class="nav-item" role="presentation" style="cursor:pointer">
        <a id="legalqt"  class="nav-link active" >FICHERO DE OPORTUNIDADES (Hogar)</a>
      </li>
      <!-- <li class="nav-item" role="presentation"  style="cursor:pointer">
        <a id="financieroqt"  class="nav-link ">TOMA DE EVIDENCIAS Y CIERRE</a>
      </li> -->
  
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


          <br>
<div class="text-center">
  <button type="button" class="btn btn-success" data-bs-toggle="modal" onclick="actualizarOportunidadesModal()"  data-bs-target="#modalOportunidades">
  Ver Oportunidades Acercadas
  </button>
</div>
<br>
          <!-- <span class="badge bg-primary" id="" style="font-size:15px; background:#a80a85 !important">MOMENTO CONSCIENTE.</span> -->

            <!-- Vista para PC -->
            <!-- <div class="container table-responsive" id="responsivepc" style="font-size:15px" width="100%"> -->
                <div class="table-responsive" >
                    <table id="example" class="table table-striped " >
                        <thead>
                            <tr>
                                <th class="align-middle text-center">ID</th>
                                  <th >Nombre de la Oportunidad</th>
                                  <th class="align-middle text-center">Aliado</th>
                                  <th class="align-middle text-center">Categoria</th>
                                  <!-- <th>Descripción</th>
                                  <th>Ruta</th> -->
                                  <th class="align-middle text-center">Fecha Inicio oportunidad</th>
                                  <th class="align-middle text-center">Fecha Límite Acercamiento</th>
                                  <th class="align-middle text-center">Ver Oportunidad</th>
                                  <th class="align-middle text-center">Integrantes que aplican</th>
                                  <th class="align-middle text-center">Acercar oportunidad</th>
                            </tr>
                        </thead>
                        <tbody style="font-size:15px" id="oportunidades" class="align-middle text-center">
                            
                        </tbody>
                        <tfoot>
                          
                        </tfoot>
                    </table>
                </div>
            <!-- </div> -->






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

    <div id="modal">

</div>

<div class="modal fade" id="modalOportunidades" tabindex="-1" aria-labelledby="modalOportunidadesLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalOportunidadesLabel">Integrantes con Oportunidades</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs mb-3" id="oportunidadTabs" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="acercadas-tab" data-bs-toggle="tab" data-bs-target="#acercadas" type="button" role="tab">Acercadas</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="efectivas-tab" data-bs-toggle="tab" data-bs-target="#efectivas" type="button" role="tab">Efectivas</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="noefectivas-tab" data-bs-toggle="tab" data-bs-target="#noefectivas" type="button" role="tab">No Efectivas</button>
          </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">

          <!-- Acercadas -->
          <div class="tab-pane fade show active" id="acercadas" role="tabpanel">
            <table id="tablaAcercadas" class="table table-bordered table-striped" style="width:100%">
              <thead>
                <tr>
                 <th class="text-center">
                    <input type="checkbox" id="checkAllAcercadas"> Seleccionar Todos
                  </th>
                  <th>ID Integrante</th>
                   <td >ID oportunidad</td>
                  <th>Folio</th>
                  <th>Nombre Completo</th>
                  <th>Oportunidad</th>
                  <th>Estado</th>
                  <th>Aplica a</th>
                </tr>
              </thead>
              <tbody>
              
              </tbody>
            </table>
          </div>
<div class="mt-3 text-end">
  <button class="btn btn-success" onclick="cambiarestado(2)">Marcar como Efectivas</button>
  <button class="btn btn-danger" onclick="cambiarestado(3)">Marcar como No Efectivas</button>
</div>

          <!-- Efectivas -->
          <div class="tab-pane fade" id="efectivas" role="tabpanel">
            <table id="tablaEfectivas" class="table table-bordered table-striped" style="width:100%">
              <thead>
                <tr>
                  <th>ID Integrante</th>
                   <td >ID oportunidad</td>
                  <th>Folio</th>
                  <th>Nombre Completo</th>
                  <th>Oportunidad</th>
                  <th>Estado</th>
                  <th>Aplica a</th>
                </tr>
              </thead>
              <tbody>
                
              </tbody>
            </table>
          </div>

          <!-- No efectivas -->
          <div class="tab-pane fade" id="noefectivas" role="tabpanel">
            <table id="tablaNoEfectivas" class="table table-bordered table-striped" style="width:100%">
              <thead>
                <tr>
                  <th>ID Integrante</th>
                   <td >ID oportunidad</td>
                  <th>Folio</th>
                  <th>Nombre Completo</th>
                  <th>Oportunidad</th>
                  <th>Estado</th>
                  <th>Aplica a</th>
                </tr>
              </thead>
              <tbody>
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<script src="{{ asset('assets/jquery/jquery.js') }}"></script>
<script src="{{ asset('resources/js/jsoportunidadeshogar.js') }}"></script>
<script>

  const recargaropotunidades = "{{ route('recargaroportunidadesh') }}";
  const cambiarestdooportunidadesmasivoh = '{{ route("cambiarestadooportunidadmasivoh") }}';
  const agregaroportunidadh =  "{{ route('agregaroportunidad') }}";
  const oportunidadhogarglobal= "{{ route('oportunidadeshogarglobal') }}";
 const usuariogestor= "{{Session::get('cedula') }}";
 const veroportunidad = "{{ route('veroportunidad') }}"; 



   $('#siguiente').click(function(){
        var url = "../rombovisitatipo1refuerzo1/<?= $variable ?>"; window.location.href = url;
      }); 
      function redirectToIntegrantes() {
           var folio = `<?=$variable ?>`;
           var url = "../ficherodeoportunidadest1refuerzo1/:folio";
           url = url.replace(':folio', folio);
           window.location.href = url;
       }

       $('#bienestarsaludemocionalqt').click(function(){var url = "../ficherodeoportunidadest1refuerzo1/<?= $variable ?>"; window.location.href = url;})
    $('#legalqt').click(function(){var url = "../ficherodeoportunidadeshogart1refuerzo1/<?= $variable ?>"; window.location.href = url;})
    // $('#financieroqt').click(function(){var url = "../finalizacion/<?= $variable ?>"; window.location.href = url;})
</script>
@endsection