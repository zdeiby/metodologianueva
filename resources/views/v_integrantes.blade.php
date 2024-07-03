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
  <div class="tab-pane fade active show" id="home" role="tabpanel">
  <table class="table table-hover">
      <thead class="table-light">
        <tr>

          <th scope="col">Nombres y apellidos</th>
          <th scope="col">Documento</th>
          <th scope="col">Acciones</th>
          <th scope="col">Avatar</th>
        </tr>
      </thead>
      <tbody id="integrantes">
        
      </tbody>
    </table>
      </div>
        </div>
      </div>
      
      <div class="text-center">
      <button type="button" class="btn btn-primary ">Agregar integrante</button>
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

      function editarintegrantes(folio,idintegrante){
        localStorage.setItem('folio',folio);
        localStorage.setItem('idintegrante', idintegrante);
        localStorage.setItem('folioencriptado', folioencriptado);
        window.location.href = '../editarintegrantes';


      }
    </script>

@endsection