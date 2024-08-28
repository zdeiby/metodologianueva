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
            <span class="badge bg-primary" id="">ENCUESTA INTEGRANTES</span>
            </button>
            <div class="progress">
                <div class="progress-bar bg-success" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
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
      <li class="nav-item" role="presentation" style="cursor:pointer">
        <a id="identificacion" class="nav-link ">BIENESTAR FISICO Y EMOCIONAL
        </a>
      </li>
  <li class="nav-item" role="presentation" style="cursor:pointer">
    <a id="identatario"  class="nav-link active" >BIENESTAR INTELECTUAL</a>
  </li>
  <li class="nav-item" role="presentation" style="cursor:pointer">
    <a id="financiero"  class="nav-link " >BIENESTAR FINANCIERO</a>
  </li>
  <li class="nav-item" role="presentation" style="cursor:pointer">
    <a id="legal"  class="nav-link " >BIENESTAR LEGAL</a>
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


          <form id="formintelectual" class="row g-3 was-validated">     
            
          <div class="col-md-3" style="display:none">
            <input type="text" placeholder="folio" class="form-control form-control-sm  " id="folioinput" name="folio" value="" >
          </div>
          <div class="col-md-3" style="display:none">
            <input type="text"  class="form-control form-control-sm  " id="idintegrante1" name="idintegrante" value="" >
          </div>
          <div class="col-md-3" style="display:none">
            <input type="text" placeholder="usuario" class="form-control form-control-sm  " id="usuario" name="usuario" value="{{ Session::get('cedula') }}" >
          </div>

          <div class="col-md-6" id="alfabetizaciondiv" style="display:none">
                  <label for="validationServer04" class="form-label">¿Sabes leer y escribir?</label>
                  <select class="form-control form-control-sm" id="alfabetizacion" name="alfabetizacion" aria-describedby="validationServer04Feedback" >
                    {{!!$sino!!}}
                </select>
                </div>

               
        
          <div class="col-md-6" style="display:none" id="educaciondiv">
            <label for="validationServer04" class="form-label">¿Estás estudiando actualmente?</label>
            <select class="form-control form-control-sm" id="educacion" name="educacion" aria-describedby="validationServer04Feedback" >
            {{!!$sino!!}}            
          </select>
          </div> 
          <div class="col-md-12" id="cuidadomenoresdiv" style="display:none">
                  <label for="validationServer04" class="form-label">¿El integrante  entre 0 y 5 años de edad que no están estudiando, están al cuidado de un adulto responsable?</label>
                  <select class="form-control form-control-sm" id="cuidadomenores" name="cuidadomenores" aria-describedby="validationServer04Feedback" >
                    {{!!$sino!!}}
                </select>
                </div>
          <div class="col-md-6" id="niveleducativo1div" style="display:none">
            <label for="validationServer04" class="form-label">¿Cuál es tu nivel educativo alcanzado?</label>
            <select class="form-control form-control-sm" id="niveleducativo1" name="niveleducativo1" aria-describedby="validationServer04Feedback" >
            {{!!$niveleducativo1!!}}     
                </select>
          </div>
          <div class="col-md-6" id="niveleducativo2div" style="display:none">
            <label for="validationServer04" class="form-label">¿Cuál fue el último grado que alcanzaste?</label>
            <select class="form-control form-control-sm" id="niveleducativo2" name="niveleducativo2" aria-describedby="validationServer04Feedback" >
            {{!!$niveleducativo2!!}}         
             </select>
          </div>
          <div class="col-md-6" id="niveleducativo5div" style="display:none">
            <label for="validationServer04" class="form-label">¿Cuál es el titulo obtenido?</label>
            <input type="text"  class="form-control form-control-sm  " id="niveleducativo5" style="text-transform: uppercase;" onkeypress="return soloLetras(event)" name="niveleducativo5" value="" >
          </div>
          <div class="col-md-12" id="niveleducativo3div" style="display:none">
            <label for="validationServer04" class="form-label">¿Accedes a programas de alfabetización y/o educación para adultos?</label>
            <select class="form-control form-control-sm" id="niveleducativo3" name="niveleducativo3" aria-describedby="validationServer04Feedback" >
            {{!!$sino!!}}    
          </select>
          </div>
          <div class="col-md-12" id="niveleducativo4div" style="display:none">
            <label for="validationServer04" class="form-label">¿Deseas continuar con tu formación post secundaria?</label>
            <select class="form-control form-control-sm" id="niveleducativo4" name="niveleducativo4" aria-describedby="validationServer04Feedback" >
            {{!!$sino!!}}    
          </select>
          </div>
          <div class="col-md-12" id="deseaaccedereducaciondiv" style="display:none">
            <label for="validationServer04" class="form-label">¿Deseas acceder a educación para el trabajo y el desarrollo humano?</label>
            <select class="form-control form-control-sm" id="deseaaccedereducacion" name="deseaaccedereducacion" aria-describedby="validationServer04Feedback" >
            {{!!$sino!!}}
                      </select>
          </div>
          <div class="col-md-12" id="alfabetizaciondigitaldiv" style="display:none">
            <label for="validationServer04" class="form-label">¿Conoces el manejo de las TIC?</label>
            <select class="form-control form-control-sm" id="alfabetizaciondigital" name="alfabetizaciondigital" aria-describedby="validationServer04Feedback" >
            {{!!$sino!!}}
          </select>
          </div>
          <hr>
          <div class="row">  
            <div class="text-start col">
            <div class="btn btn-outline-success" id="volver">Volver</div>
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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
          Selecciona un avatar     
        </div>
      <div class="modal-body">
      <img src="{{asset('avatares/1.png')}}" id="1" class="rounded-circle imagenDinamicaselect" onclick="agregarImagen('1')" alt="Avatar" style="width: 150px; height: 150px;">
      <img src="{{asset('avatares/2.png')}}" id="2" class="rounded-circle imagenDinamicaselect" onclick="agregarImagen('2')" alt="Avatar" style="width: 150px; height: 150px;">
      <img src="{{asset('avatares/3.png')}}" id="3" class="rounded-circle imagenDinamicaselect" onclick="agregarImagen('3')" alt="Avatar" style="width: 150px; height: 150px;">
      <img src="{{asset('avatares/4.png')}}" id="4" class="rounded-circle imagenDinamicaselect" onclick="agregarImagen('4')" alt="Avatar" style="width: 150px; height: 150px;">
      <img src="{{asset('avatares/5.png')}}" id="5" class="rounded-circle imagenDinamicaselect" onclick="agregarImagen('5')" alt="Avatar" style="width: 150px; height: 150px;">
      <img src="{{asset('avatares/6.png')}}" id="6" class="rounded-circle imagenDinamicaselect" onclick="agregarImagen('6')" alt="Avatar" style="width: 150px; height: 150px;">
      <img src="{{asset('avatares/7.png')}}" id="7" class="rounded-circle imagenDinamicaselect" onclick="agregarImagen('7')" alt="Avatar" style="width: 150px; height: 150px;">
      <img src="{{asset('avatares/8.png')}}" id="8" class="rounded-circle imagenDinamicaselect" onclick="agregarImagen('8')" alt="Avatar" style="width: 150px; height: 150px;">
      <img src="{{asset('avatares/9.png')}}" id="9" class="rounded-circle imagenDinamicaselect" onclick="agregarImagen('9')" alt="Avatar" style="width: 150px; height: 150px;">
      <img src="{{asset('avatares/10.png')}}" id="10" class="rounded-circle imagenDinamicaselect" onclick="agregarImagen('10')" alt="Avatar" style="width: 150px; height: 150px;">
      <img src="{{asset('avatares/11.png')}}" id="11" class="rounded-circle imagenDinamicaselect" onclick="agregarImagen('11')" alt="Avatar" style="width: 150px; height: 150px;">
      <img src="{{asset('avatares/12.png')}}" id="12" class="rounded-circle imagenDinamicaselect" onclick="agregarImagen('12')" alt="Avatar" style="width: 150px; height: 150px;">
      <img src="{{asset('avatares/13.png')}}" id="13" class="rounded-circle imagenDinamicaselect" onclick="agregarImagen('13')" alt="Avatar" style="width: 150px; height: 150px;">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" onclick="cargarImagen()">Guardar</button>
      </div>
    </div>
  </div>
</div>

 
    </div>

    <script src="{{ asset('assets/jquery/jquery.js') }}"></script>

    <script>
    paginacargando();
    function agregarImagen(id){
      $(`#${id}`).addClass('imagenselect');
      for (let index = 0; index < 14; index++) {
        if(id == index){
            localStorage.setItem('numimage',id)
        }else{
          $(`#${index}`).removeClass('imagenselect');
        }
      }
    }

    function cargarImagen(){
      imagen=localStorage.getItem('numimage');
      folio=localStorage.getItem('folio');
      idintegrante=localStorage.getItem('idintegrante');
      $.ajax({
        url:'./guardaravatar',
        data:{folio:folio, idintegrante:idintegrante, avatar:imagen},
        method: "GET",
        dataType:'JSON',
        success:function(data){
          $('#imagenDinamica').attr('src',`../public/avatares/${imagen}.png`);
          localStorage.setItem('imagen',`../public/avatares/${imagen}.png`)
          $('#exampleModal').modal('hide');
        },
        error: function(xhr, status, error) {
                  console.log(xhr.responseText);
              }
      })
    }
    
  $('.noaplica0').css('display','none');

  

  $('#educacion').change(function() {
   if($('#educacion').val() != ''){
    $('#niveleducativo1div').css('display','');
    $('#niveleducativo1').attr('required','required');
    $('#niveleducativo1').val('');
   }
   if($('#educacion').val() == '2' && parseInt($('#edadintegrante').val()) <= 5){
    $('#cuidadomenoresdiv').css('display','');
    $('#cuidadomenores').attr('required','required');
    $('#cuidadomenores').val('');  
    $('#niveleducativo1div').css('display','');
    $('#niveleducativo1').attr('required','required');
    $('#niveleducativo1').val('');
    $('#niveleducativo1div').css('display','');
    $('#niveleducativo1').attr('required','required');
    $('#niveleducativo1').val('');
   }
   if($('#educacion').val() == '1' && parseInt($('#edadintegrante').val()) <= 5){
    $('#cuidadomenoresdiv').css('display','none');
    $('#cuidadomenores').removeAttr('required');
    $('#cuidadomenores').val('0');  
    $('#niveleducativo1div').css('display','');
    $('#niveleducativo1').attr('required','required');
    $('#niveleducativo1').val('');
    $('#niveleducativo1div').css('display','');
    $('#niveleducativo1').attr('required','required');
    $('#niveleducativo1').val('');
   }
 
  });

  $('#niveleducativo1').change(function() {
   if(($('#niveleducativo1').val() == '107' || $('#niveleducativo1').val() == '108' || $('#niveleducativo1').val() == '109') && parseInt($('#edadintegrante').val()) >= 15){
    $('#niveleducativo3div').css('display','');
    $('#niveleducativo').attr('required','required');
    $('#niveleducativo3').val('');
   }
   if($('#niveleducativo1').val() == '110' ){
          $('#niveleducativo2div').css('display', '');
          $('#niveleducativo2').attr('required', 'required');
          $('#niveleducativo2').val('');   
          $('#niveleducativo5div').css('display', 'none');
          $('#niveleducativo5').removeAttr('required');
          $('#niveleducativo5').val('0'); 
          $('#niveleducativo2 option[value="123"]').show();
          $('#niveleducativo2 option[value="124"]').show();
          $('#niveleducativo2 option[value="125"]').show();
          $('#niveleducativo2 option[value="126"]').show();
          $('#niveleducativo2 option[value="127"]').show();
          $('#niveleducativo2 option[value="128"]').hide();
          $('#niveleducativo2 option[value="129"]').hide();
          $('#niveleducativo2 option[value="130"]').hide();
          $('#niveleducativo2 option[value="131"]').hide();
          $('#niveleducativo2 option[value="132"]').hide();
          $('#niveleducativo2 option[value="133"]').hide();
   } if($('#niveleducativo1').val() == '111' ){
          $('#niveleducativo2div').css('display', '');
          $('#niveleducativo2').attr('required', 'required');
          $('#niveleducativo2').val('');
          $('#niveleducativo2 option[value="123"]').hide();
          $('#niveleducativo2 option[value="124"]').hide();
          $('#niveleducativo2 option[value="125"]').hide();
          $('#niveleducativo2 option[value="126"]').hide();
          $('#niveleducativo2 option[value="127"]').hide();
          $('#niveleducativo2 option[value="128"]').show(); 
          $('#niveleducativo2 option[value="129"]').show();
          $('#niveleducativo2 option[value="130"]').show();
          $('#niveleducativo2 option[value="131"]').show();
          $('#niveleducativo2 option[value="132"]').hide();
          $('#niveleducativo2 option[value="133"]').hide();
   }
   if($('#niveleducativo1').val() == '112' ){
          $('#niveleducativo2div').css('display', '');
          $('#niveleducativo2').attr('required', 'required');
          $('#niveleducativo2').val('');
          $('#niveleducativo2 option[value="123"]').hide();
          $('#niveleducativo2 option[value="124"]').hide();
          $('#niveleducativo2 option[value="125"]').hide();
          $('#niveleducativo2 option[value="126"]').hide();
          $('#niveleducativo2 option[value="127"]').hide();
          $('#niveleducativo2 option[value="128"]').hide(); 
          $('#niveleducativo2 option[value="129"]').hide();
          $('#niveleducativo2 option[value="130"]').hide();
          $('#niveleducativo2 option[value="131"]').hide();
          $('#niveleducativo2 option[value="132"]').show();
          $('#niveleducativo2 option[value="133"]').show();
   }  



   if (($('#niveleducativo1').val() == "113" || $('#niveleducativo1').val() == "114" || $('#niveleducativo1').val() == "115" || $('#niveleducativo1').val() == "117" ||  $('#niveleducativo1').val() == "119" ||  $('#niveleducativo1').val() == "121" || $('#niveleducativo1').val() == "348") && parseInt($('#edadintegrante').val()) >= '15') {   //9.5
          $('#niveleducativo4div').css('display', '');
           $('#niveleducativo4').attr('required', 'required');
           $('#niveleducativo4').val('');
           $('#niveleducativo2div').css('display','none');
           $('#niveleducativo2').removeAttr('required');
           $('#niveleducativo2').val('133');
           $('#niveleducativo3div').css('display','none');
           $('#niveleducativo3').removeAttr('required');
           $('#niveleducativo3').val('0');
           $('#niveleducativo5div').css('display','none');
           $('#niveleducativo5').removeAttr('required');
           $('#niveleducativo5').val('0');
         }
         if (($('#niveleducativo1').val() == "113" || $('#niveleducativo1').val() == "114" || $('#niveleducativo1').val() == "115" || $('#niveleducativo1').val() == "117" ||  $('#niveleducativo1').val() == "119" ||  $('#niveleducativo1').val() == "121"|| $('#niveleducativo1').val() == "348") && parseInt($('#edadintegrante').val()) <= '14') {   //9.5
           $('#niveleducativo4div').css('display', 'none');
           $('#niveleducativo4').removeAttr('required');
           $('#niveleducativo4').val('0');
           $('#niveleducativo2div').css('display','none');
           $('#niveleducativo2').removeAttr('required');
           $('#niveleducativo2').val('133');
           $('#niveleducativo3div').css('display','none');
           $('#niveleducativo3').removeAttr('required');
           $('#niveleducativo3').val('0');
           $('#niveleducativo5div').css('display','none');
           $('#niveleducativo5').removeAttr('required');
           $('#niveleducativo5').val('0');
         }


         if (  $('#niveleducativo1').val() == "118" ||  $('#niveleducativo1').val() == "120" ||  $('#niveleducativo1').val() == "122" ||  $('#niveleducativo1').val() == "113" ||  $('#niveleducativo1').val() == "114" ||  $('#niveleducativo1').val() == "370") {     // 9.3.2
           $('#niveleducativo4div').css('display', 'none');
           $('#niveleducativo4').removeAttr('required');
           $('#niveleducativo4').val('0');
           $('#niveleducativo2div').css('display','none');
           $('#niveleducativo2').removeAttr('required');
           $('#niveleducativo2').val('133');
           $('#niveleducativo3div').css('display','none');
           $('#niveleducativo3').removeAttr('required');
           $('#niveleducativo3').val('0');
           $('#niveleducativo5div').css('display','');
           $('#niveleducativo5').attr('required', 'required');
           $('#niveleducativo5').val('');
          
         }




         /// 115
         if (( $('#niveleducativo1').val() == "115" ) && parseInt($('#edadintegrante').val()) >= '15') {   //9.5
          $('#niveleducativo4div').css('display', '');
           $('#niveleducativo4').attr('required', 'required');
           $('#niveleducativo4').val('');
           $('#niveleducativo2div').css('display','none');
           $('#niveleducativo2').removeAttr('required');
           $('#niveleducativo2').val('131');
           $('#niveleducativo3div').css('display','none');
           $('#niveleducativo3').removeAttr('required');
           $('#niveleducativo3').val('0');
           $('#niveleducativo5div').css('display','none');
           $('#niveleducativo5').removeAttr('required');
           $('#niveleducativo5').val('0');
         }
         if (( $('#niveleducativo1').val() == "115" ) && parseInt($('#edadintegrante').val()) <= '14') {   //9.5
           $('#niveleducativo4div').css('display', 'none');
           $('#niveleducativo4').removeAttr('required');
           $('#niveleducativo4').val('0');
           $('#niveleducativo2div').css('display','none');
           $('#niveleducativo2').removeAttr('required');
           $('#niveleducativo2').val('131');
           $('#niveleducativo3div').css('display','none');
           $('#niveleducativo3').removeAttr('required');
           $('#niveleducativo3').val('0');
           $('#niveleducativo5div').css('display','none');
           $('#niveleducativo5').removeAttr('required');
           $('#niveleducativo5').val('0');
         }

         // 


         if ( $('#niveleducativo1').val() == "116" ) {     // 9.3.2
           $('#niveleducativo4div').css('display', 'none');
           $('#niveleducativo4').removeAttr('required');
           $('#niveleducativo4').val('0');
           $('#niveleducativo2div').css('display','none');
           $('#niveleducativo2').removeAttr('required');
           $('#niveleducativo2').val('131');
           $('#niveleducativo3div').css('display','none');
           $('#niveleducativo3').removeAttr('required');
           $('#niveleducativo3').val('0');
           $('#niveleducativo5div').css('display','');
           $('#niveleducativo5').attr('required', 'required');
           $('#niveleducativo5').val('');
          
         }



         if (($('#niveleducativo1').val() == "107" || $('#niveleducativo1').val() == "108" || $('#niveleducativo1').val() == "109" ) && parseInt(parseInt($('#edadintegrante').val())) >= '15') {
          $('#niveleducativo2div').css('display', 'none');
          $('#niveleducativo4div').css('display', 'none'); 
          $('#niveleducativo5div').css('display', 'none');
          $('#niveleducativo3div').css('display', '');
          $('#niveleducativo3').val('');
          $('#niveleducativo4').val('0');
          $('#niveleducativo3').attr('required', 'required');
          $('#niveleducativo2').val('0');
          $('#niveleducativo5').val('0');
          $('#niveleducativo2').removeAttr('required');
          $('#niveleducativo5').removeAttr('required');
          $('#niveleducativo4').removeAttr('required');
         } 
        if (($('#niveleducativo1').val() == "107" || $('#niveleducativo1').val() == "108" || $('#niveleducativo1').val() == "109") && parseInt($('#edadintegrante').val()) <= '14') {
          $('#niveleducativo2div').css('display', 'none');
          $('#niveleducativo4div').css('display', 'none'); 
          $('#niveleducativo5div').css('display', 'none');
          $('#niveleducativo3div').css('display', 'none');
          $('#niveleducativo3').val('0');
          $('#niveleducativo4').val('0');
          $('#niveleducativo3').removeAttr('required');
          $('#niveleducativo2').val('0');
          $('#niveleducativo5').val('0');
          $('#niveleducativo2').removeAttr('required');
          $('#niveleducativo5').removeAttr('required');
          $('#niveleducativo4').removeAttr('required');

         
        
         } 






  });


  $('#niveleducativo2').change(function() {
   if($('#niveleducativo2').val() == '133' && parseInt($('#edadintegrante').val()) <= '14'){
          $('#niveleducativo5div').css('display', '');
          $('#niveleducativo5').attr('required', 'required');
          $('#niveleducativo5').val('');
          $('#niveleducativo3div').css('display', 'none');
          $('#niveleducativo3').removeAttr('required');
          $('#niveleducativo3').val('0');
          
    }
    if($('#niveleducativo2').val() == '133' && parseInt($('#edadintegrante').val()) >= '15'){
          $('#niveleducativo5div').css('display', '');
          $('#niveleducativo5').attr('required','required');
          $('#niveleducativo5').val('');
          $('#niveleducativo4div').css('display', '');
          $('#niveleducativo4').attr('required','required');
          $('#niveleducativo4').val('');
          $('#niveleducativo3div').css('display', 'none');
          $('#niveleducativo3').removeAttr('required');
          $('#niveleducativo3').val('0');
    } if($('#niveleducativo2').val() != '133' && parseInt($('#edadintegrante').val()) >= '15'){
      $('#niveleducativo3div').css('display', '');
          $('#niveleducativo3').attr('required', 'required');
          $('#niveleducativo3').val('');
          $('#niveleducativo5div').css('display', 'none');
          $('#niveleducativo5').removeAttr('required');
          $('#niveleducativo5').val('0');
          $('#niveleducativo4div').css('display', 'none');
          $('#niveleducativo4').removeAttr('required');
          $('#niveleducativo4').val('0');
          
          
    }
    if($('#niveleducativo2').val() != '133' && parseInt($('#edadintegrante').val()) <= '14'){
          $('#niveleducativo5div').css('display', 'none');
          $('#niveleducativo5').removeAttr('required');
          $('#niveleducativo5').val('0');
          
    }

  });



  

 



    function calcularEdad(fechaNacimiento) {
    var hoy = new Date();
    var nacimiento = new Date(fechaNacimiento);
    var edad = hoy.getFullYear() - nacimiento.getFullYear();
    var mes = hoy.getMonth() - nacimiento.getMonth();

    // Ajustar si el cumpleaños aún no ha sido este año
    if (mes < 0 || (mes === 0 && hoy.getDate() < nacimiento.getDate())) {
        edad--;
    }
console.log(edad)
    return edad;
}
    
    $(document).ready(function(){





      $('#volveratras').css('display','none');
      $('#idintegrante1').val(localStorage.getItem('idintegrante'));
      $('#idintegrante2').val(localStorage.getItem('idintegrante'));
      $('#idintegrante3').val(localStorage.getItem('idintegrante'));
      $('#idintegrante4').val(localStorage.getItem('idintegrante'));
      $('#folioinput').val(localStorage.getItem('folio'));
      $('#folioinput2').val(localStorage.getItem('folio'));
      $('#folioinput3').val(localStorage.getItem('folio'));
      $('#folioinput4').val(localStorage.getItem('folio'));


        //  var imagenUrl = localStorage.getItem('imagen');
        //  if (imagenUrl) {
        //      $('#imagenDinamica').attr('src', imagenUrl);
        //  } 
        let folio=localStorage.getItem('folio');
        let idintegrante=localStorage.getItem('idintegrante');
        let nombre=localStorage.getItem('nombre');
        $('#folio').html(`Folio: ${folio} `);
        $('#idintegrante').html(`Idintegrante: ${idintegrante} `);
        $('#nombre').html(`Nombre: ${nombre} `);

        $.ajax({
        url:'./leerpreguntas',
        data:{folio:folio, idintegrante:idintegrante},
        method: "GET",
        dataType:'JSON',
        success:function(data){
          let  edad = calcularEdad(data.imagen.fechanacimiento);
          $('#edadintegrante').html(`Edad: ${edad} `);
          $('#edadintegrante').val(edad);
       



        // console.log(data.imagen.avatar , 'avatar')
 if(data.imagen.avatar != null){
   $('#imagenDinamica').attr('src',`../public/avatares/${data.imagen.avatar}.png`) 
  
 }else{
  console.log(data.imagen.avatar , 'avatar')
  $('#imagenDinamica').attr('src',`../public/avatares/${(data.imagen.sexo == '12')?'../avatares/hombre_avatar':'../avatares/mujer_avatar'}.png`)
 }
 

            if(data.integrantesintelectual ==null){
            }else{
              $('#siguiente').css('display','');
            }
          
        //   BIENESTAR INTELECTUAL
           $('#alfabetizacion').val((data.integrantesintelectual)?data.integrantesintelectual.alfabetizacion:'');
           $('#educacion').val((data.integrantesintelectual)?data.integrantesintelectual.educacion:'');
           $('#niveleducativo1').val((data.integrantesintelectual)?data.integrantesintelectual.niveleducativo1:'');
           $('#niveleducativo2').val((data.integrantesintelectual)?data.integrantesintelectual.niveleducativo2:'');
           $('#niveleducativo5').val((data.integrantesintelectual)?data.integrantesintelectual.niveleducativo5:'');
           $('#niveleducativo3').val((data.integrantesintelectual)?data.integrantesintelectual.niveleducativo3:'');
           $('#niveleducativo4').val((data.integrantesintelectual)?data.integrantesintelectual.niveleducativo4:'');
           $('#deseaaccedereducacion').val((data.integrantesintelectual)?data.integrantesintelectual.deseaaccedereducacion:'');
           $('#alfabetizaciondigital').val((data.integrantesintelectual)?data.integrantesintelectual.alfabetizaciondigital:'');
           $('#cuidadomenores').val((data.integrantesintelectual)?data.integrantesintelectual.cuidadomenores:'');

          
           if(parseInt($('#edadintegrante').val()) >= 15){ // sabe leer escribir
            $('#alfabetizaciondiv').css('display','');
            $('#alfabetizacion').attr('required','required');
            $('#deseaaccedereducaciondiv').css('display','');
            $('#deseaaccedereducacion').attr('required','required');
           }

           if(parseInt($('#edadintegrante').val()) <= 5  ){ // CUIDADO MENORES
            $('#cuidadomenoresdiv').css('display','');
            $('#cuidadomenores').attr('required','required');
           }else{
            $('#cuidadomenoresdiv').css('display','none');
            $('#cuidadomenores').removeAttr('required');
            $('#cuidadomenores').val('0');
           }

           if(parseInt($('#edadintegrante').val()) >= 18  ){ //mayor o igual a 18 nivel educativo 
            $('#niveleducativo3div').css('display','');
            $('#niveleducativo3').attr('required','required');
           }else{
            $('#niveleducativo3div').css('display','none');
            $('#niveleducativo3').removeAttr('required');
           // $('#niveleducativo3').val('0');
           }

           if(parseInt($('#edadintegrante').val()) >= 15  ){ //mayor o igual a 15 formacion post secundaria
            $('#niveleducativo4div').css('display','');
            $('#niveleducativo4').attr('required','required');
           }else{
            $('#niveleducativo4div').css('display','none');
            $('#niveleducativo4').removeAttr('required');
            $('#niveleducativo4').val('0');
           }

           if(parseInt($('#edadintegrante').val()) >= 11  ){ //mayor o igual a 11 alfabetizacion digital 
            $('#alfabetizaciondigitaldiv').css('display','');
            $('#alfabetizaciondigital').attr('required','required');
           }else{
            $('#alfabetizaciondigitaldiv').css('display','none');
            $('#alfabetizaciondigital').removeAttr('required');
            $('#alfabetizaciondigital').val('0');
           }
           if(parseInt($('#edadintegrante').val()) >= 14  ){ //mayor o igual a 14 adesarrollo humano
            $('#deseaaccedereducaciondiv').css('display','');
            $('#deseaaccedereducacion').attr('required','required');
           }else{
            $('#deseaaccedereducaciondiv').css('display','none');
            $('#deseaaccedereducacion').removeAttr('required');
            $('#deseaaccedereducacion').val('0');
           }

           $('#educaciondiv').css('display','');
            $('#educacion').attr('required','required');



              // CARGA AUTO 


              if($('#niveleducativo2').val() == '133' && parseInt($('#edadintegrante').val()) <= '14'){
          $('#niveleducativo5div').css('display', '');
          $('#niveleducativo5').attr('required', 'required');
          $('#niveleducativo3div').css('display', 'none');
          $('#niveleducativo3').removeAttr('required');
          $('#niveleducativo3').val('0');
          
    }
    if($('#niveleducativo2').val() == '133' && parseInt($('#edadintegrante').val()) >= '15'){
          $('#niveleducativo5div').css('display', '');
          $('#niveleducativo5').attr('required','required');
          $('#niveleducativo4div').css('display', '');
          $('#niveleducativo4').attr('required','required');
          $('#niveleducativo3div').css('display', 'none');
          $('#niveleducativo3').removeAttr('required');
          $('#niveleducativo3').val('0');
    } if($('#niveleducativo2').val() != '133' && parseInt($('#edadintegrante').val()) >= '15'){
      $('#niveleducativo3div').css('display', '');
          $('#niveleducativo3').attr('required', 'required');
          $('#niveleducativo5div').css('display', 'none');
          $('#niveleducativo5').removeAttr('required');
        //  $('#niveleducativo5').val('0');
          $('#niveleducativo4div').css('display', 'none');
          $('#niveleducativo4').removeAttr('required');
          
    }
    if($('#niveleducativo2').val() != '133' && parseInt($('#edadintegrante').val()) <= '14'){
          $('#niveleducativo5div').css('display', 'none');
          $('#niveleducativo5').removeAttr('required');
    //      $('#niveleducativo5').val('0');
          
    }

  if(($('#niveleducativo1').val() == '107' || $('#niveleducativo1').val() == '108' || $('#niveleducativo1').val() == '109') && parseInt($('#edadintegrante').val()) >= 15){
    $('#niveleducativo3div').css('display','');
    $('#niveleducativo').attr('required','required');
   }
   if($('#niveleducativo1').val() == '110' ){
          $('#niveleducativo2div').css('display', '');
          $('#niveleducativo2').attr('required', 'required');
          $('#niveleducativo5div').css('display', 'none');
          $('#niveleducativo5').removeAttr('required');
          $('#niveleducativo5').val('0'); 
          $('#niveleducativo2 option[value="123"]').show();
          $('#niveleducativo2 option[value="124"]').show();
          $('#niveleducativo2 option[value="125"]').show();
          $('#niveleducativo2 option[value="126"]').show();
          $('#niveleducativo2 option[value="127"]').show();
          $('#niveleducativo2 option[value="128"]').hide();
          $('#niveleducativo2 option[value="129"]').hide();
          $('#niveleducativo2 option[value="130"]').hide();
          $('#niveleducativo2 option[value="131"]').hide();
          $('#niveleducativo2 option[value="132"]').hide();
          $('#niveleducativo2 option[value="133"]').hide();
   } if($('#niveleducativo1').val() == '111' ){
          $('#niveleducativo2div').css('display', '');
          $('#niveleducativo2').attr('required', 'required');
          $('#niveleducativo2 option[value="123"]').hide();
          $('#niveleducativo2 option[value="124"]').hide();
          $('#niveleducativo2 option[value="125"]').hide();
          $('#niveleducativo2 option[value="126"]').hide();
          $('#niveleducativo2 option[value="127"]').hide();
          $('#niveleducativo2 option[value="128"]').show(); 
          $('#niveleducativo2 option[value="129"]').show();
          $('#niveleducativo2 option[value="130"]').show();
          $('#niveleducativo2 option[value="131"]').show();
          $('#niveleducativo2 option[value="132"]').hide();
          $('#niveleducativo2 option[value="133"]').hide();
   }
   if($('#niveleducativo1').val() == '112' ){
          $('#niveleducativo2div').css('display', '');
          $('#niveleducativo2').attr('required', 'required');
          $('#niveleducativo2 option[value="123"]').hide();
          $('#niveleducativo2 option[value="124"]').hide();
          $('#niveleducativo2 option[value="125"]').hide();
          $('#niveleducativo2 option[value="126"]').hide();
          $('#niveleducativo2 option[value="127"]').hide();
          $('#niveleducativo2 option[value="128"]').hide(); 
          $('#niveleducativo2 option[value="129"]').hide();
          $('#niveleducativo2 option[value="130"]').hide();
          $('#niveleducativo2 option[value="131"]').hide();
          $('#niveleducativo2 option[value="132"]').show();
          $('#niveleducativo2 option[value="133"]').show();
   }  



   if (($('#niveleducativo1').val() == "113" || $('#niveleducativo1').val() == "114" || $('#niveleducativo1').val() == "115" || $('#niveleducativo1').val() == "117" ||  $('#niveleducativo1').val() == "119" ||  $('#niveleducativo1').val() == "121" || $('#niveleducativo1').val() == "348") && parseInt($('#edadintegrante').val()) >= '15') {   //9.5
          $('#niveleducativo4div').css('display', '');
           $('#niveleducativo4').attr('required', 'required');
           $('#niveleducativo2div').css('display','none');
           $('#niveleducativo2').removeAttr('required');
           $('#niveleducativo2').val('0');
           $('#niveleducativo3div').css('display','none');
           $('#niveleducativo3').removeAttr('required');
           $('#niveleducativo3').val('0');
           $('#niveleducativo5div').css('display','none');
           $('#niveleducativo5').removeAttr('required');
           $('#niveleducativo5').val('0');
         }
         if (($('#niveleducativo1').val() == "113" || $('#niveleducativo1').val() == "114" || $('#niveleducativo1').val() == "115" || $('#niveleducativo1').val() == "117" ||  $('#niveleducativo1').val() == "119" ||  $('#niveleducativo1').val() == "121"|| $('#niveleducativo1').val() == "348") && parseInt($('#edadintegrante').val()) <= '14') {   //9.5
           $('#niveleducativo4div').css('display', 'none');
           $('#niveleducativo4').removeAttr('required');
           $('#niveleducativo4').val('0');
           $('#niveleducativo2div').css('display','none');
           $('#niveleducativo2').removeAttr('required');
           $('#niveleducativo2').val('0');
           $('#niveleducativo3div').css('display','none');
           $('#niveleducativo3').removeAttr('required');
           $('#niveleducativo3').val('0');
           $('#niveleducativo5div').css('display','none');
           $('#niveleducativo5').removeAttr('required');
           $('#niveleducativo5').val('0');
         }


         if ( $('#niveleducativo1').val() == "116" || $('#niveleducativo1').val() == "118" ||  $('#niveleducativo1').val() == "120" ||  $('#niveleducativo1').val() == "122" ||  $('#niveleducativo1').val() == "113" ||  $('#niveleducativo1').val() == "114" ||  $('#niveleducativo1').val() == "370") {     // 9.3.2
           $('#niveleducativo4div').css('display', 'none');
           $('#niveleducativo4').removeAttr('required');
           $('#niveleducativo4').val('0');
           $('#niveleducativo2div').css('display','none');
           $('#niveleducativo2').removeAttr('required');
           $('#niveleducativo2').val('0');
           $('#niveleducativo3div').css('display','none');
           $('#niveleducativo3').removeAttr('required');
           $('#niveleducativo3').val('0');
           $('#niveleducativo5div').css('display','');
           $('#niveleducativo5').attr('required', 'required');
          
         }



         if (($('#niveleducativo1').val() == "107" || $('#niveleducativo1').val() == "108" || $('#niveleducativo1').val() == "109" ) && parseInt(parseInt($('#edadintegrante').val())) >= '15') {
          $('#niveleducativo2div').css('display', 'none');
          $('#niveleducativo4div').css('display', 'none'); 
          $('#niveleducativo5div').css('display', 'none');
          $('#niveleducativo3div').css('display', '');
          $('#niveleducativo4').val('0');
          $('#niveleducativo3').attr('required', 'required');
          $('#niveleducativo2').val('0');
          $('#niveleducativo5').val('0');
          $('#niveleducativo2').removeAttr('required');
          $('#niveleducativo5').removeAttr('required');
          $('#niveleducativo4').removeAttr('required');
         } 
        if (($('#niveleducativo1').val() == "107" || $('#niveleducativo1').val() == "108" || $('#niveleducativo1').val() == "109") && parseInt($('#edadintegrante').val()) <= '14') {
          $('#niveleducativo2div').css('display', 'none');
          $('#niveleducativo4div').css('display', 'none'); 
          $('#niveleducativo5div').css('display', 'none');
          $('#niveleducativo3div').css('display', 'none');
          $('#niveleducativo3').val('0');
          $('#niveleducativo4').val('0');
          $('#niveleducativo3').removeAttr('required');
          $('#niveleducativo2').val('0');
          $('#niveleducativo5').val('0');
          $('#niveleducativo2').removeAttr('required');
          $('#niveleducativo5').removeAttr('required');
          $('#niveleducativo4').removeAttr('required');

         
        
         } 

   if($('#educacion').val() != ''){
    $('#niveleducativo1div').css('display','');
    $('#niveleducativo1').attr('required','required');
   }
   if($('#educacion').val() == '2' && parseInt($('#edadintegrante').val()) <= 5){
    $('#cuidadomenoresdiv').css('display','');
    $('#cuidadomenores').attr('required','required');
    $('#niveleducativo1div').css('display','');
    $('#niveleducativo1').attr('required','required');
    $('#niveleducativo1div').css('display','');
    $('#niveleducativo1').attr('required','required');

   }
   if($('#educacion').val() == '1' && parseInt($('#edadintegrante').val()) <= 5){
    $('#cuidadomenoresdiv').css('display','none');
    $('#cuidadomenores').removeAttr('required');
    $('#cuidadomenores').val('0');  
    $('#niveleducativo1div').css('display','');
    $('#niveleducativo1').attr('required','required');
    $('#niveleducativo1div').css('display','');
    $('#niveleducativo1').attr('required','required');
   }
 

   if(parseInt($('#edadintegrante').val()) <= '14' ){
          $('#alfabetizacion').val('0');
          
    }

              // FIN CARGA AUTO 





          paginalista();
         },
        error: function(xhr, status, error) {
                  console.log(xhr.responseText);
              }
      })
      })

      $('#siguiente').click(function(){
        var url = "./encuestaintegrantesfinanciero";
        window.location.href = url;  
        
      });
    
      $('#volver').click(function(){
        var url = "./encuestaintegrantesfisicoemocional";
        window.location.href = url;
      }); 

      $('#identificacion').click(function(){var url = "./encuestaintegrantesfisicoemocional"; window.location.href = url;})
      $('#financiero').click(function(){var url = "./encuestaintegrantesfinanciero"; window.location.href = url;})
      $('#legal').click(function(){var url = "./encuestaintegranteslegal"; window.location.href = url;})

      function convertirAMayusculas(element) {
            element.value = element.value.toUpperCase();
        }

      function redirectToIntegrantes() {
           var folio = window.localStorage.getItem('folioencriptado');
           var url = "../public/integrantes/:folio";
           url = url.replace(':folio', folio);
           window.location.href = url;
       }

     

     
    $('#formintelectual').on('submit', function(event) {
        event.preventDefault(); // Detiene el envío del formulario
        var formData = $(this).serializeArray();
        var data = {};

        $(formData).each(function(index, obj) {
            // Verificar si el nombre ya existe en el objeto de datos
            if (data[obj.name]) {
                // Si ya existe, verificar si es un array
                if (Array.isArray(data[obj.name])) {
                    // Si es un array, agregar el nuevo valor al array
                    data[obj.name].push(obj.value);
                } else {
                    // Si no es un array, convertirlo en un array y agregar el nuevo valor
                    data[obj.name] = [data[obj.name], obj.value];
                }
            } else {
                // Si no existe, simplemente agregarlo al objeto de datos
                data[obj.name] = obj.value;
            }
        });

        $.ajax({
            url: './intelectual',
            method: $(this).attr('method'),
            data: {data: data},
            success: function(response) {
              alertagood();
              $('#siguiente').css('display','');
              $('#identatario').removeAttr('disabled');
            },
            error: function(xhr, status, error) {
              alertabad();
                console.error(error);
            }
        });
        
    });

         
 
    </script>
 

@endsection