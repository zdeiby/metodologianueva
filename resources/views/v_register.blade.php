<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('assets/bootstrap/bootstrap.css') }}" rel="stylesheet" >
 
<style>
.red{
    box-shadow: 0 0 0 0.25rem rgba(255 15 15 / 35%);
}
.green:focus{
    box-shadow: 0 0 0 0.25rem rgba(46 255 15 / 70%);
}
.green{
    box-shadow: 0 0 0 0.25rem rgba(46 255 15 / 70%);
}
body {
    background: url("{{asset('imagenes/paisaje.jpg')}}") no-repeat center center fixed;
    background-size: cover;
    -moz-background-size: cover;
    -webkit-background-size: cover;
    -o-background-size: cover;
}

.color {
    background: white;
    font-size: 16px;
    padding-top: 14px;
    padding-bottom: 14px;
    color: #468847;
}

.log {
    background: white;
    border-radius: 12px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.img-fill {
    object-fit: cover;
    height: 100%;
    border-radius: 12px;
}
.upload-button {
        position: relative;
    }

    .upload-button::before {
    
        position: absolute;
        top: 10px;
        left: 50%;
        transform: translateX(-50%);
        width: 30px;
        height: 30px;
        border: 2px solid #000;
        font-size: 24px;
        font-weight: bold;
        text-align: center;
        cursor: pointer;
    }

    .upload-button input[type="file"] {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
        cursor: pointer;
    }

</style>
    <title>Login</title>
</head>
<body>
@if (!empty($datos) && isset($datos[0]->nombre1))
<div class="container log pb-3 pt-3">
    <div class="row">
        <div class="col-md-6 upload-button position-relative">
            <img  class="img-fluid img-fill" src="{{asset('imagenes/paisaje.jpg')}}" alt="">
      <!--  <input type="file" id="fileInput2"> -->
    </div>
        <div class="col-md-6 text-center">
            <div class="container well form-group pt-4 pb-4" style="background: white; border-radius: 2%; border: 1px solid #e3e3e3;">
                <div class="text-center pb-3" style="border-radius: 2%;">
                    <div class="panel-heading">
                    </div>

                    
                    <div class="panel-body">
                        <img width="25%" src="{{ asset('imagenes/logoalcaldia.jpg') }}" alt="">
                    </div>
                </div>
         <form method="POST" action="{{ route('authregister') }}">
            @csrf

           <label for="" style="font-weight:bold; color: #00B0F6">Crear una cuenta</label>
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <label class="pb-2 pt-2" for=""><b></b></label>
                            <input id="nombres" value="{{ $datos[0]->nombre1 }} {{ $datos[0]->nombre2 }}" required name="nombres" type="text" class="form-control " placeholder="Nombres Gestor" readOnly/>                    
                        </div>
                        <div class="col">
                            <label class="pb-2 pt-2" for=""><b></b></label>
                            <input id="apellidos" value="{{ $datos[0]->apellido1 }} {{ $datos[0]->apellido2 }}" required name="apellidos" type="text" class="form-control" placeholder="Apellidos Gestor" readOnly/>                    
                        </div>
                        </div>
                    </div>

                <div class="row ">
                    <div class="col">
                    <label class="pb-2 pt-2" for=""><b></b></label>
                    <input id="nomdinamizador" value="{{ $datos[0]->nom_dinamizador }}"  required name="nomdinamizador" type="text" class="form-control" placeholder="Nombre Dinamizador" readOnly/>                    
                    </div>
                    <div class="col">
                    <label class=" pb-2 pt-2" for=""><b></b></label>
                    <input id="docdinamizador"value="{{ $datos[0]->doc_dinamizador }}"  required name="docdinamizador" type="text" class="form-control" placeholder="Cedula Dinamizador" readOnly/>                    
                    </div>
                </div>


                <div class="row mt-1 mb-1">
                    <div class="col">
                    <label class=" pb-2 pt-2" for="" style=""><b></b></label>
                    <!-- <input id="cif" required value="{{ old('cif') }}" name="cif" type="text" class="form-control" placeholder="CIF" /> -->
                   
                    <select style="/*color: #565e65;*/" class="form-control" required value="{{ old('cif') }}" name="cif" id="cif" disabled>
                    <option value="" >Seleccione un CIF</option>
                    @foreach ($cif as $cifselect)
                    <option value="{{$cifselect->id}}"> {{$cifselect->nombrecif}}</option>
                    @endforeach
                        
                    
                    </select>

         
                    </div>
                    <div class="col">
                    <label class=" pb-2 pt-2" for=""><b></b></label>
                    <input id="documento" required value="{{$datos[0]->documento}}" name="documento" type="text" class="form-control" readOnly/>                    
                    </div>
                </div>
                    <div class="row">
                    <div class="col">
                    <label class="pb-2 pt-2" for=""><b></b></label>
                    <input id="pass1" required  name="pass1" type="password" class="form-control" placeholder="Contraseña" />                    
                    </div>
                    <div class="col">
                    <label class="pb-2 pt-2" for=""><b></b></label>
                    <input id="pass2"  required  name="pass2" type="password" class="form-control" placeholder="Digite nuevamente la contraseña" />                    
                    </div>
                </div>
                </div>
                
            
                <div class="text-center">
                    <br />
                    <button type="submit" name="enviar" readOnly id="enviar" class="btn w-100 btn-success" style="color: white;">Registrarse</button>
                   <!-- <label class="pt-2" for="">¿Ha olvidado la contraseña?</label> -->
        </form>  @if(session('mensaje'))
            <div style=" margin-left:15%;position: fixed;">
                        <div id="mensaje" class="alert alert-danger mt-2"  style="">
                            {{ session('mensaje') }}
                        </div>
                    </div>
                    @endif
                       <br>
                       <br>
                       <br>
                       <br>      
                  

                </div>

            </div>
        </div>
    </div>
</div>

@else
<div class="container log pb-3 pt-3">
    <div class="row">
        <div class="col-md-6 upload-button position-relative">
            <img  class="img-fluid img-fill" src="{{asset('imagenes/paisaje.jpg')}}" alt="">
      <!--  <input type="file" id="fileInput2"> -->
    </div>
        <div class="col-md-6 text-center">
            <div class="container well form-group pt-4 pb-4" style="background: white; border-radius: 2%; border: 1px solid #e3e3e3;">
                <div class="text-center pb-3" style="border-radius: 2%;">
                    <div class="panel-heading">
                    </div>

                    
                    <div class="panel-body">
                        <img width="25%" src="{{ asset('imagenes/logoalcaldia.jpg') }}" alt="">
                    </div>
                </div>
        

           <label for="" style="font-weight:bold; color: #00B0F6">INSERTA EL QUERY PARA CONTINUAR CON EL REGISTRO</label>
                <div class="form-group">
                   

             
                </div>
                
            
                <div class="text-center">
                    <br />
                   <!-- <label class="pt-2" for="">¿Ha olvidado la contraseña?</label> -->
        </form>  @if(session('mensaje'))
            <div style=" margin-left:15%;position: fixed;">
                        <div id="mensaje" class="alert alert-danger mt-2"  style="">
                            {{ session('mensaje') }}
                        </div>
                    </div>
                    @endif
                       <br>
                       <br>
                       <br>
                       <br>      
                  

                </div>

            </div>
        </div>
    </div>
</div>
@endif


<script src="{{ asset('assets/jquery/jquery.js') }}"></script>
<script>
// Espera a que el documento se cargue completamente
    $(document).ready(function() {
        // Selecciona el elemento del mensaje
        var mensaje = $('#mensaje');
        
        // Si el elemento del mensaje existe
        if (mensaje.length) {
            // Oculta el mensaje después de 2 segundos (2000 milisegundos)
            setTimeout(function() {
                    mensaje.hide();
            }, 2000);
        }
    });


$('#pass1, #pass2').on('input',function(){
   let pass1= $('#pass1').val();
   let pass2= $('#pass2').val();


   if(pass1 == pass2){
        $('#pass2').addClass('green');
        $('#pass1').addClass('green');
        $('#enviar').prop('readOnly', false);
    }
});


$('#nombres').on('input',function(){$('#nombres').addClass('is-valid');if($('#nombres').val()==''){$('#nombres').removeClass('is-valid');}});if($('#nombres').val() !==''){$('#nombres').addClass('is-valid');}
$('#apellidos').on('input',function(){$('#apellidos').addClass('is-valid');if($('#apellidos').val()==''){$('#apellidos').removeClass('is-valid');}});if($('#apellidos').val() !==''){$('#apellidos').addClass('is-valid');}
$('#nomdinamizador').on('input',function(){$('#nomdinamizador').addClass('is-valid');if($('#nomdinamizador').val()==''){$('#nomdinamizador').removeClass('is-valid');}});if($('#nomdinamizador').val() !==''){$('#nomdinamizador').addClass('is-valid');}
$('#docdinamizador').on('input',function(){$('#docdinamizador').addClass('is-valid');if($('#docdinamizador').val()==''){$('#docdinamizador').removeClass('is-valid');}});if($('#docdinamizador').val() !==''){$('#docdinamizador').addClass('is-valid');}
$('#cif').on('input',function(){$('#cif').addClass('is-valid');if($('#cif').val()==''){$('#cif').removeClass('is-valid');}});if($('#cif').val() !==''){$('#cif').addClass('is-valid');}
$('#documento').on('input',function(){$('#documento').addClass('is-valid');if($('#documento').val()==''){$('#documento').removeClass('is-valid');}});if($('#documento').val() !==''){$('#documento').addClass('is-valid');}


$('#cif').val('{{ isset($datos[0]->cif) ? $datos[0]->cif : '' }}');


</script>


<!-- <script>$('#fileInput2').on('change', function() {  //para cargar imagenes del banner superior
     // e.preventDefault();

          var formData = new FormData();
          formData.append('formData', $('#fileInput2')[0].files[0]);
          formData.append('slug','login.jpg');

          console.log(formData); // Mueve esta línea aquí

          $.ajax({
              url: "add-img",
              method: "POST",
              data: formData,
              processData: false,
              contentType: false,
              success: function(response) {
                  console.log(response);
                 window.location.reload();
              },
              error: function(xhr, status, error) {
                  console.log(xhr.responseText);
              }
          });
    });

$('#enviar').click(function(){
  let documento= $('#documento').val();
  let contrasena=$('#contrasena').val();
    console.log(documento, contrasena);

    $.ajax({
        url:'sendinfo',
        method: "POST",
        data:{
            documento:documento,
            contrasena:contrasena
        },
        success:function(response){
           if(response =="success"){
            window.location.href="../../../ufm/index.php";
                
           }

        },
        error: function(xhr, status, error) {
                  console.log(xhr.responseText);
              }
    })
})

    </script> -->


</body>
</html>