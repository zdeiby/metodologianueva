@extends('componentes.navlateral')

@section('title', 'Página de inicio')

@section('content')
    <style>/* Mostrar datos para dispositivos de pantalla grande (PC) */
@media only screen and (min-width: 768px) {
  #responsivepc {
        display:;
    }
    #responsivemovil{
        display:none  ;
    }
}
.sticky-top {
    position: -webkit-sticky;
    position: sticky;
    top: 0;
    z-index: 0;
}

@media only screen and (max-width: 767px) {
    #responsivemovil {
        display: ;
    }
    #responsivepc {
        display:none;
    }
  }
    
</style>
<div class="container"><img width="100%" height="100px" src="{{ asset('imagenes/headers.png') }}" alt="" class="sticky-top"  ></div>

<div class="container" style="display:" id="responsivepc">
<div class="table-responsive">
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
            <th>Folio</th>
              <th>Documento</th>
              <th>Nombre del Representante</th>
              <th>Celular</th>     
              <th>Visita</th>        
              <th>Gestión del hogar</th>
            </tr>
        </thead>
        <tbody >
 @foreach ($folios as $value)
            <tr>
                <td>{{$value->folio}}</td>
                <td>{{$value->documento}}</td>
                <td>{{$value->nombre1}} {{$value->nombre2}} {{$value->apellido1}} {{$value->apellido2}}</td>
                <td>{{$value->celular}}</td>
                <td>Triage</td>
                <td>
                <button style="display:none" class="btn btn-primary" type="button" disabled  id="{{$value->folio.'botoncargando'}}">
                    <span class="spinner-border spinner-border-sm" aria-hidden="true"></span>
                     <span role="status">Cargando...</span>
                </button>
                <button type="submit" class="btn btn-primary" onclick="habeasdata('{{ encrypt($value->folio) }}','{{$value->folio}}' )" id="{{$value->folio.'boton'}}">Realizar Gestión</button></td>
              
            </tr>
      @endforeach    
        </tbody>
        <tfoot>
            <tr>
            <th>Folio</th>
              <th>Documento</th>
              <th>Nombre del Representante</th>
              <th>Celular</th>     
              <th>Visita</th>        
              <th>Gestión del hogar</th>
            </tr>
        </tfoot>
    </table>
    </div>
 </div>


 <div class="container" id="responsivemovil" style="display:">
<div class="table-responsive">
    <table id="example2" class="table table-striped" style="width:100%">
        <thead>
            <tr>
            <th>Datos</th>
             
            </tr>
        </thead>
        <tbody >
 @foreach ($folios as $value)
            <tr>
           <td> <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        <div class="row">
          <div class="col-6"><span class="badge bg-primary" id="">Folio: {{$value->folio}}</span></div>
          <!-- <div class="col"><span class="badge bg-info" id="">{{$value->nombre1}} {{$value->nombre2}} {{$value->apellido1}} {{$value->apellido2}}</span></div> -->
          <div class="col-6"><span class="badge bg-success" id="">Linea: 1</span></div>
        </div>
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>Información de contacto </strong> <br>
        <strong>Folio: </strong>{{$value->folio}}<br>
        <strong>Documento: </strong>{{$value->documento}}<br>
        <strong>Nombre: </strong>{{$value->nombre1}} {{$value->nombre2}} {{$value->apellido1}} {{$value->apellido2}}<br>
        <strong>Celular: </strong>{{$value->celular}}<br>
        <strong>Linea: </strong>Triage<br>
        <hr>
<div class="text-center">
      <form method="GET" action="rombo/{{encrypt($value->folio)}}"><input type="hidden" name="folio" value="{{encrypt($value->folio)}}"><button type="submit" class="btn btn-primary"  id="l1e1">Realizar visita</button></form>
 </div>           
      </div>
    </div>
  </div>
  </div>          </td>  
</tr>
      @endforeach   
      


        </tbody>
        <tfoot>
            <tr>
            <th>Datos</th>

            </tr>
        </tfoot>
    </table>
    </div>
 </div>



 <script>
    function habeasdata(folio, folioencriptado){
      paginacargando();
    //  $(`#${folioencriptado}boton`).attr('disabled','disabled');
      $(`#${folioencriptado}boton`).css('display','none');
      $(`#${folioencriptado}botoncargando`).css('display','');


      console.log(`${folioencriptado}boton`)
      $.ajax({
                url:'./leerprincipalhogar',
                data:{folio:folioencriptado},
                method: "GET",
                dataType:'JSON',
                success:function(data){
                  paginalista();
                  $(`#${folioencriptado}boton`).css('display','');
                  $(`#${folioencriptado}botoncargando`).css('display','none');

                  if(data.principalhogar.habeasdata == '1'){
                    let url = `{{ url('rombo') }}/${folio}`;
                    // Redirigir a la URL construida
                    window.location.href = url;
                  }else
                    
                    Swal.fire({
                    title: "AUTORIZACIÓN PARA EL TRATAMIENTO DE DATOS PERSONALES",
                    text: "El titular de los datos personales consignados en este documento, da su consentimiento de manera libre, espontánea, consciente, expresa, inequívoca, previa e informada, para que la Alcaldía de Medellín realice la recolección, almacenamiento, uso, circulación, indexación, analítica, supresión, procesamiento, compilación, intercambio, actualización y disposición de los datos que ha suministrado y, en general, realice el tratamiento de los datos personales conforme lo dispone la Ley 1581 del 17 de octubre de 2021, el Decreto 1377 del 27 de junio de 2013 y el Decreto 1096 del 28 de diciembre de 2018 (política para el tratamiento de datos personales en el Municipio de Medellín distrito especial). La Alcaldía de Medellín, como responsable del tratamiento de los datos personales aquí consignados, en cumplimiento de las normas mencionadas, informa al titular de los datos personales que le asisten los siguientes derechos: acceder a sus datos personales; conocer, actualizar y rectificar sus datos personales; solicitar prueba de la autorización otorgada; revocar la autorización y/o solicitar la supresión del dato; presentar quejas ante la Superintendencia de Industria y Comercio y; en general, todos los derechos consignados en el artículo 8 de la Ley 1581 de 2012.",
                    icon: "question",
                    showCancelButton: true,
                    confirmButtonColor: "#0dcaf0",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Sí, acepto!",
                    cancelButtonText: "No acepto"
                  }).then((result) => {
                    if (result.isConfirmed) {
                      paginacargando2();
                      $(`#${folioencriptado}boton`).css('display','');
                      $(`#${folioencriptado}botoncargando`).css('display','none');

                      $.ajax({
                          url:'./guardarhabeasdata',
                          data:{folio:folioencriptado},
                          method: "GET",
                          dataType:'JSON',
                          success:function(data){
                            paginalista2();
                            
                            let url = `{{ url('rombo') }}/${folio}`;
                            window.location.href = url;
                        },
                        error: function(xhr, status, error) {
                                console.log(xhr.responseText);
                                alertabad();
                            }
                         })
                    }
                  });
                  
                    },
                      error: function(xhr, status, error) {
                                console.log(xhr.responseText);
                                alertabad();
                            }
                    })

    }
 </script>
@endsection
