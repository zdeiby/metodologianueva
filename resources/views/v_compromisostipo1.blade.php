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
<script src="https://cdn.ckeditor.com/ckeditor5/33.0.0/classic/ckeditor.js"></script>

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
        <a id="bienestarsaludemocionalqt" class="nav-link active">COMPROMISO 1
        </a>
      </li>
  <!-- <li class="nav-item" role="presentation" style="cursor:pointer">
    <a id="legalqt"  class="nav-link " >ACCIÓN MOVILIZADORA BIENESTAR EN LA FAMILIA</a>
  </li>
  <li class="nav-item" role="presentation"  style="cursor:pointer">
    <a id="financieroqt"  class="nav-link ">ACCION MOVILIZADOR QT</a>
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

          <form id="formulario" class="row g-3 was-validated">     
            
          <div class="col-md-3" style="display:none">
            <input type="text" placeholder="folio" class="form-control form-control-sm  " id="folioinput" name="folio" value="{{ $folio }}" >
          </div>
         
          <div class="col-md-3" style="display:none">
            <input type="text" placeholder="usuario" class="form-control form-control-sm  " id="usuario" name="usuario" value="{{ Session::get('cedula') }}" >
          </div>

          <div class="col-md-3" style="display:none">
            <input type="text" placeholder="tabla" class="form-control form-control-sm  " id="tabla" name="tabla" value="{{$tabla}}" >
          </div>

          <span class="badge bg-primary" id="" style="font-size:15px; background:#a80a85 !important">MOMENTO CONSCIENTE.</span>




<div class="container mt-4">
  

</div>

<div class="row">
            <div class="form-group col-sm" id="divobs">
                <label for="compromiso1"></label>
                <textarea class="form-control form-control-sm" name="compromiso1" id="compromiso1" rows="50" cols="20" class="">{{$compromiso1}}</textarea>
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
    
    let observacionInstance, situacionInstance;

ClassicEditor
    .create(document.querySelector('#compromiso1'), {
        toolbar: {
            items: [
                'heading',
                '|',
                'bold',
                'italic',
                'link',
                'bulletedList',
                'numberedList',
                '|',
                'undo',
                'redo'
            ]
        },
        language: 'es' // Opcional: configurar el idioma
    })
    .then(observaciongeneraleditor => {
        console.log('Editor cargado correctamente', observaciongeneraleditor);
        // Asignar la instancia del editor a la variable global
        //editorInstance = editor;
        observacionInstance = observaciongeneraleditor;
    })
    .catch(error => {
        console.error(error);
    });


      $('#siguiente').click(function(){
        var url = "../rombovisitatipo1/<?= $variable ?>"; window.location.href = url;
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
      

      

       $(document).ready(function() {

     
        $('#formulario').on('submit', function(event) {
                event.preventDefault(); // Detiene el envío del formulario

                var formData = $(this).serializeArray();

                var data = {};
                $(formData).each(function(index, obj) {
                data[obj.name] = obj.value;
                });
                // Agregar el contenido del editor CKEditor al objeto data
                if (observacionInstance) {
                    data['compromiso1'] = observacionInstance.getData();
                }

                console.log(data);

                $.ajax({
                    url: '../guardarcompromisos',
                    method: 'GET', // Cambiar a POST si es necesario
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