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
    <a id="financieroqt"  class="nav-link ">ACCIÓN BIENESTAR PRIORIZADO</a>
  </li>

  <li class="nav-item" role="presentation"  style="cursor:pointer">
    <a id="compromisos"  class="nav-link active">COMPROMISOS</a>
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
            <input type="text" placeholder="lineaanterior" class="form-control form-control-sm  " id="lineaanterior" name="lineaanterior" value="{{$lineaanterior}}" >
            <input type="text" placeholder="pasoanterior" class="form-control form-control-sm  " id="pasoanterior" name="pasoanterior" value="{{$pasoanterior}}" >

          </div>


          <span class="badge bg-primary" id="" style="font-size:15px; background:#a80a85 !important">COMPROMISOS ANTERIORES.</span>

              <table class="table table-bordered">
                  <thead>
                      <tr>
                          <th>#</th>
                          <th>Compromiso</th>
                          <th>Estado</th>
                          <th>Visita</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach($compromisosAnteriorTabla as $row)
                          <tr>
                              <td>{{ $row['numero'] }}</td>
                              <td>
                                  <textarea class="form-control" readonly style="background:#f8f9fa">{{ $row['compromiso'] }}</textarea>
                              </td>
                              <td>
                                  @if($row['editable'])
                                      <select name="estado_compromiso_anterior[{{ $row['numero'] }}]" class="form-select" required>
                                        <option value="">Seleccione</option>
                                          @foreach($estadosMap as $id => $desc)
                                              <option value="{{ $id }}" {{ $row['estado'] == $id ? 'selected' : '' }}>
                                                  {{ $desc }}
                                              </option>
                                          @endforeach
                                      </select>
                                  @else
                                      <span class="badge" style="background:#e8f1ff; font-weight:bold; color:#1656c1; font-size:16px">
                                          {{ $estadosMap[$row['estado']] ?? 'Sin avances' }}
                                      </span>
                                  @endif
                              </td>
                              <td>
                                  {{ $row['visita'] }}
                              </td>
                          </tr>
                      @endforeach
                  </tbody>
              </table>


                  
              </div>

            </div>
          <hr>
  <span class="badge bg-primary" id="" style="font-size:15px; background:#ff8403 !important">COMPROMISOS ACTUALES.</span>




<!-- <span class="badge bg-primary" id="" style="font-size:15px; background:#ff8403 !important">COMPROMISO BIENESTAR PRIORIZADO.</span> -->
<div class="alert alert-info" role="alert" style="background-color: #d1ecf1; border-color: #bee5eb; color: #0c5460;">
El gestor consigna información cualitativa. A que se compromete el hogar en relación a las acciones de autogestión orientadas a mejorar las condiciones de vida, enfocándose en superar indicadores, aprovechar oportunidades acercadas y abordar necesidades específicas de los integrantes del hogar- QT
</div>
<div class="row">
  <!-- <div class="form-group col-sm" id="divobs">
      <label for="compromiso"></label>
      <textarea class="form-control form-control-sm" oninput="validateInput(this)"  rows="10" cols="20" class="" readOnly>{{$compromiso}}</textarea>
  </div> -->

  <div class="accordion-item">
  <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="true">
          <b style="text-decoration: underline;">Compromiso 1</b>
      </button>
  </h2>
  <div id="flush-collapseOne" class="accordion-collapse collapse show">
      <div class="container pt-4 pb-4">
          <textarea class="form-control form-control-sm" id="compromiso1" name="compromiso1" rows="5" oninput="validarCompromisos()" required>{{ $compromisosArray[1] }}</textarea>
      </div>
  </div>
</div>

<!-- Compromiso 2 (Deshabilitado al inicio) -->
<div class="accordion-item">
  <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false">
          <b style="text-decoration: underline;">Compromiso 2</b>
      </button>
  </h2>
  <div id="flush-collapseTwo" class="accordion-collapse collapse">
      <div class="container pt-4 pb-4">
          <textarea class="form-control form-control-sm" id="compromiso2" name="compromiso2" rows="5" oninput="validarCompromisos()" disabled>{{ $compromisosArray[2] }}</textarea>
      </div>
  </div>
</div>

<!-- Compromiso 3 (Deshabilitado al inicio) -->
<div class="accordion-item">
  <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false">
          <b style="text-decoration: underline;">Compromiso 3</b>
      </button>
  </h2>
  <div id="flush-collapseThree" class="accordion-collapse collapse">
      <div class="container pt-4 pb-4">
          <textarea class="form-control form-control-sm" id="compromiso3" name="compromiso3" rows="5" oninput="validarCompromisos()" disabled>{{ $compromisosArray[3] }}</textarea>
      </div>
  </div>
</div>

<!-- Compromiso 4 (Deshabilitado al inicio) -->
<div class="accordion-item">
  <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false">
          <b style="text-decoration: underline;">Compromiso 4</b>
      </button>
  </h2>
  <div id="flush-collapseFour" class="accordion-collapse collapse">
      <div class="container pt-4 pb-4">
          <textarea class="form-control form-control-sm" id="compromiso4" name="compromiso4" rows="5" disabled>{{ $compromisosArray[4] }}</textarea>
      </div>
  </div>
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
    
    $(document).ready(function() {
      $('#estado_compromiso1').val("{{ $estado_compromisosArray2[1] ?? '' }}");
        $('#estado_compromiso2').val("{{ $estado_compromisosArray2[2] ?? '' }}");
        $('#estado_compromiso3').val("{{ $estado_compromisosArray2[3] ?? '' }}");
        $('#estado_compromiso4').val("{{ $estado_compromisosArray2[4] ?? '' }}");
    });


      $('#siguiente').click(function(){

            // $.ajax({
            //     url: '../verificarpasos',
            //     method: 'GET', // Cambiar a GET si estás usando GET
            //     data: { folio: '{{ $folio }}',
            //             linea: '{{ $linea }}',
                        
            //     }, // Envía los datos de manera plana
            //     success: function(response) {
            //       console.log(response.resultado)
            //       if(response.resultado == 1){
                  var url = "../rombovisitatipo1refuerzo2/<?= $variable ?>"; window.location.href = url;
    //               }else{
    //                 Swal.fire({
    //                   icon: "error",
    //                   title: "Oops...",
    //                   text: "Debes completar los pasos anteriores",
    //                   footer: ''
    //                 });
    //               }
    //             },
    //             error: function(xhr, status, error) {
    //                 alertabad();
    //                 console.error(error);
    //             }
    //         });

    //  //   var url = "../rombovisitatipo1/<?= $variable ?>"; window.location.href = url;
       }); 
      function redirectToIntegrantes() {
           var folio = `<?=$variable ?>`;
           var url = "../accionmovilizadoraqtt1refuerzo2/:folio";
           url = url.replace(':folio', folio);
           window.location.href = url;
       }

    


      $('#bienestarsaludemocionalqt').click(function(){var url = "../momentoconcientet1refuerzo2/<?= $variable ?>"; window.location.href = url;})
    $('#legalqt').click(function(){var url = "../bienestarenfamiliat1refuerzo2/<?= $variable ?>"; window.location.href = url;})
    $('#financieroqt').click(function(){var url = "../accionmovilizadoraqtt1refuerzo2/<?= $variable ?>"; window.location.href = url;})
    $('#compromisos').click(function(){var url = "../accionmovilizadoracompromisost1refuerzo2/<?= $variable ?>"; window.location.href = url;})
  

      

    $(document).ready(function() {
    $('#formulario').on('submit', function(event) {
        event.preventDefault(); // Evita que el formulario se envíe automáticamente

        // Obtener valores de los inputs ocultos
        let folio = $('#folioinput').val();
        let linea = $('#linea').val();
        let paso = $('#paso').val();
        let usuario = $('#usuario').val();
        let tabla = $('#tabla').val();
        let compromisos = [];

        // Recorrer los textareas de compromisos
        $('textarea[id^="compromiso"]').not('[id$="ant"]').each(function(index) {
            var valor = $(this).val().trim();

            if (valor !== "") { // Solo agregar si tiene contenido
                compromisos.push({
                    compromiso: valor,
                    numero_compromiso: index + 1 // Número del compromiso
                });
            }
        });

        // Convertimos el array a formato URL
        var params = $.param({
            folio: folio,
            linea: linea,
            paso: paso,
            tabla:tabla,
            usuario: usuario,
            compromisos: JSON.stringify(compromisos) // Enviamos el array como JSON en la URL
        });

        console.log("Datos enviados:", params); // Ver datos antes de enviar

        $.ajax({
            url: '../guardaraccionesmovilizadorascompromisos?' + params, // Envío en un solo GET
            method: 'GET',
            success: function(response) {
              enviarCompromisosAnteriores();
              $('#siguiente').css('display','');
             // alertagood();
                console.log("Compromisos guardados correctamente:", response);
            },
            error: function(xhr, status, error) {
                console.error("Error al guardar compromisos:", error);
            }
        });
    });
});




// function agregarpaso(data){
//     $.ajax({
//       url: '../agregarpasohogargeneral',
//       method: 'GET', // Cambiar a GET si estás usando GET
//       data: data, // Envía los datos de manera plana
//       success: function(response) {
//         $('#siguiente').css('display','');
//           alertagood();
//       },
//       error: function(xhr, status, error) {
//           alertabad();
//           console.error(error);
//       }
//     });
// }

    </script>


<!-- <script>
        function validarCompromisos() {
            let compromiso1 = document.getElementById("compromiso1");
            let compromiso2 = document.getElementById("compromiso2");
            let compromiso3 = document.getElementById("compromiso3");
            let compromiso4 = document.getElementById("compromiso4");

            compromiso2.disabled = compromiso1.value.trim() === "";
            compromiso3.disabled = compromiso2.value.trim() === "";
            compromiso4.disabled = compromiso3.value.trim() === "";
        }
    </script> -->

    <script>
    function validarCompromisos() {
        let compromiso1 = document.getElementById("compromiso1");
        let compromiso2 = document.getElementById("compromiso2");
        let compromiso3 = document.getElementById("compromiso3");
        let compromiso4 = document.getElementById("compromiso4");

        // Obtener los div de los acordeones
        let collapseOne = document.getElementById("flush-collapseOne");
        let collapseTwo = document.getElementById("flush-collapseTwo");
        let collapseThree = document.getElementById("flush-collapseThree");
        let collapseFour = document.getElementById("flush-collapseFour");

        // Habilitar los campos según la información disponible
        compromiso2.disabled = compromiso1.value.trim() === "";
        compromiso3.disabled = compromiso2.value.trim() === "";
        compromiso4.disabled = compromiso3.value.trim() === "";

        // Desplegar los acordeones si tienen información
        if (compromiso1.value.trim() !== "") {
            collapseOne.classList.add("show");
        }
        if (compromiso2.value.trim() !== "") {
            collapseTwo.classList.add("show");
        }
        if (compromiso3.value.trim() !== "") {
            collapseThree.classList.add("show");
        }
        if (compromiso4.value.trim() !== "") {
            collapseFour.classList.add("show");
        }
    }

    window.onload = function() {
      let compromiso1 = document.getElementById("compromiso1");
      if (compromiso1.value.trim() !== "") {
        $('#siguiente').css('display','');
        }
        validarCompromisos();

      //   let compromiso12 = document.getElementById("compromiso1ant");
      // if (compromiso12.value.trim() !== "") {
      //   $('#siguiente').css('display','');
      //   }
      //   validarCompromisos2();
    };

    function validarCompromisos2() {
    let compromiso1 = document.getElementById("compromiso1ant");
    let compromiso2 = document.getElementById("compromiso2ant");
    let compromiso3 = document.getElementById("compromiso3ant");
    let compromiso4 = document.getElementById("compromiso4ant");

    let collapseOne = document.getElementById("flush-collapseOneant");
    let collapseTwo = document.getElementById("flush-collapseTwoant");
    let collapseThree = document.getElementById("flush-collapseThreeant");
    let collapseFour = document.getElementById("flush-collapseFourant");

    // Selects
    let select1 = document.getElementById("estado_compromiso1");
    let select2 = document.getElementById("estado_compromiso2");
    let select3 = document.getElementById("estado_compromiso3");
    let select4 = document.getElementById("estado_compromiso4");

    // Mostrar acordeones si tienen contenido
    if (compromiso1.value.trim() !== "") {
        collapseOne.classList.add("show");
        select1.setAttribute("required", true);
    } else {
        select1.removeAttribute("required");
    }

    if (compromiso2.value.trim() !== "") {
        collapseTwo.classList.add("show");
        select2.setAttribute("required", true);
    } else {
        select2.removeAttribute("required");
    }

    if (compromiso3.value.trim() !== "") {
        collapseThree.classList.add("show");
        select3.setAttribute("required", true);
    } else {
        select3.removeAttribute("required");
    }

    if (compromiso4.value.trim() !== "") {
        collapseFour.classList.add("show");
        select4.setAttribute("required", true);
    } else {
        select4.removeAttribute("required");
    }
}


</script>

<script>

function enviarCompromisosAnteriores() {
    let compromisosAnteriores = [];

    // Recorre las filas de la tabla de compromisos anteriores
    // Busca la tabla solo dentro del formulario para evitar problemas si tienes varias
    $('#formulario tbody tr').each(function() {
        let numero = $(this).find('td:eq(0)').text().trim();
        let compromiso = $(this).find('textarea').val() || $(this).find('textarea').text();
        let editable = $(this).find('select').length > 0;
        let estado = editable 
            ? $(this).find('select').val() 
            : $(this).find('span').attr('data-estado') || $(this).find('span').text();

        if (compromiso && compromiso.trim() !== '') {
            compromisosAnteriores.push({
                numero_compromiso: numero,
                compromiso: compromiso.trim(),
                estado_compromiso: estado
            });
        }
    });

    if (compromisosAnteriores.length === 0) {
        console.log("No hay compromisos anteriores para enviar.");
        return;
    }

    let params = $.param({
        compromisos_anteriores: JSON.stringify(compromisosAnteriores),
        folio: $('#folioinput').val(),
        linea: $('#lineaanterior').val(),
        paso: $('#pasoanterior').val(),
        tabla: $('#tabla').val(),
        usuario: $('#usuario').val()
    });

    $.ajax({
        url: '../guardaraccionesmovilizadorascompromisost1refuerzo2?' + params,
        method: 'GET',
        success: function(response) {
            alertagood();
            console.log("Compromisos anteriores guardados correctamente:", response);
        },
        error: function(xhr, status, error) {
            console.error("Error al guardar compromisos anteriores:", error);
        }
    });
}



</script>
@endsection