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
     <a id="financieroqt"  class="nav-link active">A.M BIENESTAR A PRIORIZAR</a> 
    <!-- <a id="financieroqt"  class="nav-link active">A.M {{$descripcion}}</a> -->

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


          <span class="badge bg-primary" id="" style="font-size:15px; background:#a80a85 !important; display:none">ACCIÓN MOVILIZADORA ANTERIOR.</span>

            <div class="container mt-4" style="display:none">
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
                    {{$descripcionant}}
                    </div>
                  </div>
                  <div class="col-md-8 d-flex align-items-stretch  ">
                    <div class="col-12 border-bottom p-2 d-flex align-items-center " style="    text-align: center !important;  display: flex;  flex-direction: column;">
                    <div class="col-md-6" >
                        <!-- <label for="validationServer04" class="form-label">¿Tienes permiso del ministerio de trabajo?</label> -->
                        <select class="form-control form-control-sm" id="accionmovilizadoraant"  aria-describedby="validationServer04Feedback" required="" disabled>
                        {!! $t_accionesmovilizadoraant !!}
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>



          <span class="badge bg-primary" id="" style="font-size:15px; background:#a80a85 !important">ACCIÓN MOVILIZADORA ACTUAL.</span>




                  <div class="container mt-4">
                    <div class="border">
                      <!-- Fila de títulos -->
                      <div class="row g-0">
                        <!-- Categoría -->
                        <div class="col-md-4 d-flex align-items-center border-end border-bottom text-center" 
                            style="background: #2fa4e7; color: white; font-weight: bold;">
                          <div class="p-2">CATEGORÍA DEL BIENESTAR</div>
                        </div>

                        <!-- Acciones -->
                        <div class="col-md-6 d-flex align-items-center border-end border-bottom text-center" 
                            style="background: #2fa4e7; color: white; font-weight: bold;">
                          <div class="p-2">NOMBRE DE LAS ACCIONES MOVILIZADORAS</div>
                        </div>

                        <!-- Radio -->
                        <div class="col-md-2 d-flex align-items-center border-bottom text-center" 
                            style="background: #2fa4e7; color: white; font-weight: bold;">
                          <div class="p-2">SELECCIONAR</div>
                        </div>
                      </div>


                                  

                  @foreach($todosBienestares as $b)
                    <div class="row g-0 align-items-center mb-2">
                      <!-- Columna de bienestar -->
                      <div class="col-md-4 d-flex align-items-center border-end border-bottom">
                        <div class="pt-3 pb-2">{{ $b->descripcion }}</div>
                      </div>

                      <!-- Columna de acciones -->
                      <div class="col-md-6 d-flex align-items-stretch border-bottom">
                        <div class="col-12 p-2 d-flex align-items-center" 
                            style="text-align: center; display: flex; flex-direction: column;">
                          <div class="col-md-10">
                           <select class="form-control form-control-sm select-bienestar" 
                                  name="accionmovilizadora_{{ $b->id }}" 
                                  @if($bienestar_guardado == $b->id) required @else disabled @endif >
                             
                              {!! str_replace('value="'.$accion_guardada.'"', 'value="'.$accion_guardada.'" selected', $b->acciones) !!}
                          </select>
                          </div>
                        </div>
                      </div>

                      <!-- Columna del radio (derecha) -->
                    <div class="col-md-2 d-flex align-items-stretch border-bottom border-start">
                       <div class="col-12 pb-3 pt-2 d-flex align-items-center" 
                            style="text-align: center; display: flex; flex-direction: column;">
                          <div class="col-md-10">
                        <input type="radio" 
                          name="bienestar_seleccionado" 
                          value="{{ $b->id }}" 
                          class="radio-bienestar"
                          @if($bienestar_guardado == $b->id) checked @endif >
                    </div>
                    </div>
                    </div>

                  @endforeach

                  </div>
                  </div>

@if($compromiso == '')

@else
<!-- 
<span class="badge bg-primary" id="" style="font-size:15px; background:#ff8403 !important">COMPROMISO BIENESTAR PRIORIZADO.</span>
<div class="alert alert-info" role="alert" style="background-color: #d1ecf1; border-color: #bee5eb; color: #0c5460;">
El gestor consigna información cualitativa. A qué se comprometen el hogar en relación a lo trabajado en las acciones movilizadoras y el bienestar trabajado según lo priorizado en la QT.
</div>
<div class="row">
            <div class="form-group col-sm" id="divobs">
                <label for="compromiso"></label>
                <textarea class="form-control form-control-sm" oninput="validateInput(this)"  rows="10" cols="20" class="" readOnly>{{$compromiso}}</textarea>
            </div>
        </div> -->
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
                url: '../verificarpasost2refuerzo1',
                method: 'GET', // Cambiar a GET si estás usando GET
                data: { folio: '{{ $folio }}',
                        linea: '{{ $linea }}',
                        
                }, // Envía los datos de manera plana
                success: function(response) {
                  console.log(response.resultado)
                  if(response.resultado == 1){
                  url = "../accionmovilizadoracompromisost2refuerzo1/<?= $variable ?>"; window.location.href = url;
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
           var url = "../bienestarenfamiliat2refuerzo1/:folio";
           url = url.replace(':folio', folio);
           window.location.href = url;
       }

    


      $('#bienestarsaludemocionalqt').click(function(){var url = "../momentoconcientet2refuerzo1/<?= $variable ?>"; window.location.href = url;})
    $('#legalqt').click(function(){var url = "../bienestarenfamiliat2refuerzo1/<?= $variable ?>"; window.location.href = url;})
    $('#financieroqt').click(function(){var url = "../accionmovilizadoraqtt2refuerzo1/<?= $variable ?>"; window.location.href = url;})
    $('#compromisos').click(function(){var url = "../accionmovilizadoracompromisost2refuerzo1/<?= $variable ?>"; window.location.href = url;})


      

       $(document).ready(function() {


        $('#accionmovilizadora').val('<?= $accionmovilizadora ?>')
        $('#accionmovilizadoraant').val('<?= $accionmovilizadoraant ?>')
        
       $('#formulario').on('submit', function (event) {
              event.preventDefault(); // 🔹 Evita que el form se envíe de forma tradicional

              // Construir data desde el formulario
              var formData = $(this).serializeArray();
              var data = {};
              $(formData).each(function (index, obj) {
                  data[obj.name] = obj.value;
              });

              // 🔹 Obtener bienestar seleccionado
              const bienestarSeleccionado = $('input[name="bienestar_seleccionado"]:checked').val();

              if (!bienestarSeleccionado) {
                  Swal.fire({
                      icon: "warning",
                      title: "Selecciona un bienestar",
                      text: "Debes marcar al menos un bienestar antes de guardar.",
                      confirmButtonText: "Entendido"
                  });
                  return; // 🚫 Detener envío si no hay selección
              }

              if (bienestarSeleccionado) {
                  // Buscar la acción movilizadora del select correspondiente
                  const accion = $(`select[name="accionmovilizadora_${bienestarSeleccionado}"]`).val();

                  // Reemplazar valores en data
                  data['bienestar'] = bienestarSeleccionado;
                  data['accionmovilizadora'] = accion;
              }

              console.log(data); // 👉 Aquí ya debe salir como en tu ejemplo limpio

              // 🔹 Enviar por AJAX
              $.ajax({
                  url: '../guardaraccionesmovilizadorast2refuerzo1',
                  method: 'GET', 
                  data: data,
                  success: function (response) {
                      agregarpaso(data);
                  },
                  error: function (xhr, status, error) {
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

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const select = document.getElementById('accionmovilizadora');
        
        // Revisar todas las opciones generadas dinámicamente
        Array.from(select.options).forEach(option => {
            if (option.value === '{{ $accionmovilizadoraant }}') { // Comparar con el valor enviado desde el controlador
                option.style.display = 'none'; // Ocultar la opción si coincide
            }
        });
    });
</script>


<script>
document.addEventListener('DOMContentLoaded', function () {
    const radios = document.querySelectorAll('.radio-bienestar');
    const selects = document.querySelectorAll('.select-bienestar');

    radios.forEach(radio => {
        radio.addEventListener('change', function () {
            // Deshabilitar todos los selects y vaciar su valor
            selects.forEach(sel => {
                sel.disabled = true;
                sel.value = "";
            });

            // Habilitar solo el select del bienestar marcado
            const row = this.closest('.row');
            const select = row.querySelector('.select-bienestar');
            if (select) {
                select.disabled = false;
                select.setAttribute("required", "required");
            }
        });
    });
});
</script>

@endsection