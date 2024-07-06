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
              <th>Línea Estación</th>        
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
                <td>Primera Fase</td>
                <td>
                  <form method="GET" action="{{ route('rombo', ['folio' => encrypt($value->folio) ]) }}" >
                    <button type="submit" class="btn btn-primary"  id="l1e1">Realizar Gestión</button></form></td>
            </tr>
      @endforeach    
        </tbody>
        <tfoot>
            <tr>
            <th>Folio</th>
              <th>Documento</th>
              <th>Nombre del Representante</th>
              <th>Celular</th>     
              <th>Barrio</th>        
              <th>línea Estacion</th>
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
        <strong>Linea: </strong>Primera Fase<br>
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

@endsection
