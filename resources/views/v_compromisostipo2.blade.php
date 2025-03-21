<!-- @extends('componentes.navlateral')

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



        <div class="accordion" id="accordionExample" >
        <div class="accordion-item" id="l1e1">
            <div class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              <div>
                <span class="badge bg-primary" id=""  style="font-size:15px">MOMENTO CONSCIENTE</span>
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
        <a id="bienestarsaludemocionalqt" class="nav-link ">COMPROMISO BIENESTAR EN LA FAMILIA
        </a>
      </li>
   <li class="nav-item" role="presentation" style="cursor:pointer">
    <a id="legalqt"  class="nav-link active" >COMPROMISO BIENESTAR PRIORIZADO</a>
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
            <input type="text" placeholder="numerocompromiso" class="form-control form-control-sm  " id="numerocompromiso" name="numerocompromiso" value="{{$numerocompromiso}}" >
          </div>

          <span class="badge bg-primary" id="" style="font-size:15px; background:#a80a85 !important">COMPROMISOS.</span>




<div class="container mt-4">
  

</div>
<div class="alert alert-info" role="alert" style="background-color: #d1ecf1; border-color: #bee5eb; color: #0c5460;">
El gestor consigna información cualitativa. A qué se comprometen el hogar en relación a lo trabajado en las acciones movilizadoras y el bienestar trabajado según lo priorizado en la QT.
</div>
<div class="row">
            <div class="form-group col-sm" id="divobs">
                <label for="compromiso"></label>
                <textarea class="form-control form-control-sm" name="compromiso" oninput="validateInput(this)" id="compromiso" rows="10" cols="20" class="">{{$compromiso}}</textarea>
            </div>
        </div>




<br>
<br>
<br>
<br>




  </div>
  </div>
          <hr>
          <div class="row">  
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
        var url = "../rombovisitatipo1/<?= $variable ?>"; window.location.href = url;
      }); 
      function redirectToIntegrantes() {
           var folio = `<?=$variable ?>`;
           var url = "../compromiso1/:folio";
           url = url.replace(':folio', folio);
           window.location.href = url;
       }

    


      $('#bienestarsaludemocionalqt').click(function(){var url = "../compromiso1/<?= $variable ?>"; window.location.href = url;})
    $('#legalqt').click(function(){var url = "../compromiso2/<?= $variable ?>"; window.location.href = url;})
    // $('#financieroqt').click(function(){var url = "../accionmovilizadoraqt/<?= $variable ?>"; window.location.href = url;})
      

      

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
                    url: '../guardarcompromisos',
                    method: 'GET', // Cambiar a POST si es necesario
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





});


    </script>


@endsection -->