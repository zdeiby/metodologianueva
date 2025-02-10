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
                <span class="badge bg-primary" id=""  style="font-size:15px">MOMENTO MOVILIZADOR</span>
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
        <a id="bienestarsaludemocionalqt" class="nav-link ">MOMENTO CONSCIENTE
        </a>
      </li>
  <li class="nav-item" role="presentation" style="cursor:pointer">
    <a id="legalqt"  class="nav-link " >ACCIÓN MOVILIZADORA BIENESTAR EN LA FAMILIA</a>
  </li>
  <li class="nav-item" role="presentation"  style="cursor:pointer">
    <a id="financieroqt"  class="nav-link active">ACCIÓN BIENESTAR PRIORIZADO</a>
  </li>

  <li class="nav-item" role="presentation"  style="cursor:pointer">
    <a id="compromisos"  class="nav-link ">COMPROMISOS</a>
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
            <input type="text" placeholder="usuario" class="form-control form-control-sm  " id="usuario" name="usuario" value="{{ Session::get('cedula') }}" >
          </div>

          <div class="col-md-3" style="display:none">
            <input type="text" placeholder="tabla" class="form-control form-control-sm  " id="tabla" name="tabla" value="{{$tabla}}" >
            <input type="text" placeholder="linea" class="form-control form-control-sm  " id="linea" name="linea" value="{{$linea}}" >
            <input type="text" placeholder="paso" class="form-control form-control-sm  " id="paso" name="paso" value="{{$paso}}" >
            <input type="text" placeholder="bienestar" class="form-control form-control-sm  " id="bienestar" name="bienestar" value="{{$bienestar}}" >
          </div>

          <span class="badge bg-primary" id="" style="font-size:15px; background:#a80a85 !important">MOMENTO MOVILIZADOR.</span>




<div class="container mt-4">
  <div class="border">
    <!-- Fila de títulos -->
    <div class="row g-0">
      <div class="col-md-4 d-flex align-items-center border-end border-bottom text-center" style="background: #2fa4e7; color: white; font-weight: bold;">
        <div class="p-2">
          CATEGORIA DEL BIENESTAR
        </div>
      </div>
      <div class="col-md-8">
        <div class="row g-0">
          <div class="col-12 border-bottom p-2 text-center" style="background: #2fa4e7; color: white; font-weight: bold;">
            NOMBRE DE LAS ACCIONES MOVILIZADORAS
          </div>
        </div>
      </div>
    </div>

    <!-- Fila de contenido -->
    <div class="row g-0" id="indicadorbse1">
      <div class="col-md-4 d-flex align-items-center border-end border-bottom">
        <div class="p-2">
         {{$descripcion}}
        </div>
      </div>
      <div class="col-md-8 d-flex align-items-stretch  ">
        <div class="col-12 border-bottom p-2 d-flex align-items-center " style="    text-align: center !important;  display: flex;  flex-direction: column;">
        <div class="col-md-6" >
            <!-- <label for="validationServer04" class="form-label">¿Tienes permiso del ministerio de trabajo?</label> -->
            <select class="form-control form-control-sm" id="accionmovilizadora" name="accionmovilizadora" aria-describedby="validationServer04Feedback" required="">
            {!! $t_accionesmovilizadora !!}
            </select>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@if($compromiso == '')

@else

<span class="badge bg-primary" id="" style="font-size:15px; background:#ff8403 !important">COMPROMISO BIENESTAR PRIORIZADO.</span>
<div class="alert alert-info" role="alert" style="background-color: #d1ecf1; border-color: #bee5eb; color: #0c5460;">
El gestor consigna información cualitativa. A qué se comprometen el hogar en relación a lo trabajado en las acciones movilizadoras y el bienestar trabajado según lo priorizado en la QT.
</div>
<div class="row">
            <div class="form-group col-sm" id="divobs">
                <label for="compromiso"></label>
                <textarea class="form-control form-control-sm" oninput="validateInput(this)"  rows="10" cols="20" class="" readOnly>{{$compromiso}}</textarea>
            </div>
        </div>
@endif



  </div>
  </div>
          <!-- <hr> -->
          <br>

          <div class="row pt-4">  
            <div class="text-start col">


             <div class="btn btn-outline-success" onclick="redirectToIntegrantes()">Volver</div>



            </div>
            <div class="text-end col">
            <button class="btn btn-outline-success" type="submit"  >Guardar</button>
            <div class="btn btn-outline-primary" id="siguiente"  <?=$siguiente?> >Siguiente</div>
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

            $.ajax({
                url: '../verificarpasos',
                method: 'GET', // Cambiar a GET si estás usando GET
                data: { folio: '{{ $folio }}',
                        linea: '{{ $linea }}',
                        
                }, // Envía los datos de manera plana
                success: function(response) {
                  console.log(response.resultado)
                  if(response.resultado == 1){
                  url = "../accionmovilizadoracompromisos/<?= $variable ?>"; window.location.href = url;
                  }else{
                    Swal.fire({
                      icon: "error",
                      title: "Oops...",
                      text: "Debes completar los pasos anteriores",
                      footer: ''
                    });
                  }
                },
                error: function(xhr, status, error) {
                    alertabad();
                    console.error(error);
                }
            });

     //   var url = "../rombovisitatipo1/<?= $variable ?>"; window.location.href = url;
      }); 
      function redirectToIntegrantes() {
           var folio = `<?=$variable ?>`;
           var url = "../bienestarenfamilia/:folio";
           url = url.replace(':folio', folio);
           window.location.href = url;
       }

    


      $('#bienestarsaludemocionalqt').click(function(){var url = "../momentoconciente/<?= $variable ?>"; window.location.href = url;})
    $('#legalqt').click(function(){var url = "../bienestarenfamilia/<?= $variable ?>"; window.location.href = url;})
    $('#financieroqt').click(function(){var url = "../accionmovilizadoraqt/<?= $variable ?>"; window.location.href = url;})
    $('#compromisos').click(function(){var url = "../accionmovilizadoracompromisos/<?= $variable ?>"; window.location.href = url;})


      

       $(document).ready(function() {


        $('#accionmovilizadora').val('<?= $accionmovilizadora ?>')
        
        $('#formulario').on('submit', function(event) {
            event.preventDefault(); // Detiene el envío del formulario
            
            var formData = $(this).serializeArray();
            var data = {};
            $(formData).each(function(index, obj) {
                data[obj.name] = obj.value;
            });


            console.log(data);

            $.ajax({
                url: '../guardaraccionesmovilizadoras',
                method: 'GET', // Cambiar a GET si estás usando GET
                data: data, // Envía los datos de manera plana
                success: function(response) {
                  agregarpaso(data);
                },
                error: function(xhr, status, error) {
                    alertabad();
                    console.error(error);
                }
            });
        });
});


function agregarpaso(data){
    $.ajax({
      url: '../agregarpasohogargeneral',
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
}

    </script>


@endsection