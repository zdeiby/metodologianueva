    <meta name="csrf-token" content="{{ csrf_token() }}">
     <link href="{{ asset('assets/bootstrap/bootstrap.css') }}" rel="stylesheet" > 
     <link rel="shortcut icon" href="../../favicon.ico">
     <link href="{{ asset('resources/sweetalert/sweetalert2.min.css') }}" rel="stylesheet" > 
    <script src="{{ asset('resources/sweetalert/sweetalert2.all.min.js') }}"></script>
    <link href="{{ asset('assets/bootstrap/bootstrap-select.min.css') }}" rel="stylesheet" > 





    <style>
  #imagenDinamica:hover{ border:2px solid gray; }
  .imagenDinamicaselect:hover{ border:2px solid gray; }
  .imagenselect{ border:2px solid gray; background: transparent; background-color: #e0e0e0; }

  /* Centrar contenido del indicador (solo descripción + botón) */
  .border .col-md-12.d-flex{ justify-content:center; }
  .border .col-md-12 > .p-2{ width:100%; text-align:center; }
</style>

<div class="accordion" id="accordionExample">
  <div class="accordion-item" id="l1e1">
    <div class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        <div>
          <span class="badge bg-primary" style="font-size:15px">ENCUESTA INTEGRANTES</span>
          <span class="badge bg-success ms-auto" id="folioContainer" folio="{{ $folio }}" style="font-size:15px">folio: {{ $folio }}</span>
          <span class="badge bg-warning ms-auto" style="font-size:15px">Idintegrante: {{ $integrante }}</span>
          <span class="badge bg-warning ms-auto" id="representante" representante="{{ $representante }}" style="font-size:15px">Representante: {{ $representante }}</span>
        </div>
      </button>
      <br>
    </div>

    <div>
      <span class="badge bg-success mt-2" id="folio"></span>
      <span class="badge bg-primary" id="idintegrante"></span>
      <span class="badge bg-primary" style="background:#a80a85 !important; color:white" id="nombre"></span>
      <span class="badge bg-primary" style="background:#0dcaf0 !important; color:white" id="sexointegrante"></span>
      <span class="badge bg-primary" style="background:#FF8803 !important; color:white" id="edadintegrante"></span>
    </div>

    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <div class="row">
          <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item" role="presentation" style="cursor:pointer">
              <a id="bienestarsaludemocionalqt" class="nav-link">BIENESTAR SALUD-EMOCIONAL</a>
            </li>
            <li class="nav-item" role="presentation" style="cursor:pointer">
              <a id="legalqt" class="nav-link">BIENESTAR LEGAL</a>
            </li>
            <li class="nav-item" role="presentation" style="cursor:pointer">
              <a id="enfamiliaqt" class="nav-link active">BIENESTAR EN FAMILIA</a>
            </li>
            <li class="nav-item" role="presentation" style="cursor:pointer">
              <a id="intelectualqt" class="nav-link">BIENESTAR INTELECTUAL</a>
            </li>
            <li class="nav-item" role="presentation" style="cursor:pointer">
              <a id="financieroqt" class="nav-link">BIENESTAR FINANCIERO</a>
            </li>
          </ul>

          <style>.invalid-checkbox{border:1px solid red;border-radius:4px;padding:10px;}</style>

          <div id="myTabContent" class="tab-content"><br>
            <div class="tab-pane fade active show" id="home" role="tabpanel" aria-labelledby="identificacion">
              <form id="formulario" class="row g-3 was-validated">

                <!-- ocultos -->
                <div class="col-md-3" style="display:none"><input type="text" class="form-control form-control-sm" id="folioinput" name="folio" value="{{ $folio }}"></div>
                <div class="col-md-3" style="display:none"><input type="text" class="form-control form-control-sm" id="idintegrante1" name="idintegrante" value="{{$integrante}}"></div>
                <div class="col-md-3" style="display:none"><input type="text" class="form-control form-control-sm" id="usuario" name="usuario" value="{{ Session::get('cedula') }}"></div>
                <div class="col-md-3" style="display:none"><input type="text" class="form-control form-control-sm" id="tabla" name="tabla" value="{{$tabla}}"></div>

                @php
                  /* ===== VISIBILIDAD POR INDICADOR ===== */
                  $dpVisible  = ($indicador_bef_1=='0' && $representante=='SI');
                  $df1Visible = ($indicador_bef_2=='0' && $representante=='SI');
                  $df2Visible = ($indicador_bef_3=='0' && $representante=='SI');
                  $tlrVisible = ($indicador_bef_4=='0' && $representante=='SI');
                  $cuiVisible = ($indicador_bef_5=='0' && $representante=='SI');
                  $habVisible = ($indicador_bef_6=='0' && $representante=='SI');
                  $ffesVisible = ($metodologia==2) && ($indicador_bef_7=='0' && $representante=='SI');

                  /* ===== AGRUPADO DE A 2 (col) ===== */
                  // Cada bloque hoy tiene 1 indicador; dejamos lógica lista por si crecen
                  $colFull = 'col-12';
                  $colHalf = 'col-12 col-md-6';

                  /* ===== ¿HAY ALGO EN TODO EL BIENESTAR? ===== */
                  $hayAlgoFamilia = $dpVisible || $df1Visible || $df2Visible || $tlrVisible || $cuiVisible || $habVisible || $ffesVisible;
                @endphp

                @if(!$hayAlgoFamilia)
                  <!-- Solo mensaje cuando no hay ningún indicador -->
                  <span class="badge bg-primary" style="font-size:15px; background:#a80a85 !important">Bienestar en familia</span>
                  <div class="alert alert-success text-center mt-3">
                    🚨 No hay indicadores que mover en esta categoría
                  </div>
                @else

                  {{-- ==================== DISCIPLINA POSITIVA ==================== --}}
                  @if($dpVisible)
                    <span class="badge bg-primary" style="font-size:15px; background:#ff8403 !important">Disciplina positiva</span>
                    <div class="container mt-4">
                      <div class="border">
                        <div class="row g-0">
                          <div class="col-md-12 d-flex align-items-center border-end border-bottom text-center" style="background:#2fa4e7; color:white; font-weight:bold">
                            <div class="p-2">INDICADOR</div>
                          </div>
                        </div>
                        <div class="row g-0">
                          <div class="{{ $colFull }} p-2">
                            <div class="row g-0" id="indicadorbef1">
                              <div class="col-md-12 d-flex align-items-center border-end border-bottom">
                                <div class="p-2">
                                  Los integrantes del hogar implementan estrategias de disciplina positiva, fomentando el respeto mutuo y la resolución pacífica de conflictos en el entorno familiar.
                                  @if($vista != '1')
                                  <div class="text-center mt-3">
                                    <div class="btn btn-success" onclick="abrirmodalhogar('<?= $indicadores_tabla[17]->id_bienestar ?>','<?= $indicadores_tabla[17]->id_subcategoria ?>','<?= $indicadores_tabla[17]->id_indicador ?>')">Mover Indicador</div>
                                  </div>
                                  @endif
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  @endif
                  {{-- ==================== /DISCIPLINA POSITIVA ==================== --}}

                  {{-- ==================== DINÁMICA FAMILIAR (REDES) ==================== --}}
                  @if($df1Visible)
                    <span class="badge bg-success" style="font-size:15px;">Dinámica familiar</span>
                    <div class="container mt-4">
                      <div class="border">
                        <div class="row g-0">
                          <div class="col-md-12 d-flex align-items-center border-end border-bottom text-center" style="background:#2fa4e7; color:white; font-weight:bold">
                            <div class="p-2">INDICADOR</div>
                          </div>
                        </div>
                        <div class="row g-0">
                          <div class="{{ $colFull }} p-2">
                            <div class="row g-0" id="indicadorbef2">
                              <div class="col-md-12 d-flex align-items-center border-end border-bottom">
                                <div class="p-2">
                                  Los integrantes del hogar establecen vínculos y redes de apoyo familiares/comunitarias para resolver necesidades específicas.
                                  @if($vista != '1')
                                  <div class="text-center mt-3">
                                    <div class="btn btn-success" onclick="abrirmodalhogar('<?= $indicadores_tabla[18]->id_bienestar ?>','<?= $indicadores_tabla[18]->id_subcategoria ?>','<?= $indicadores_tabla[18]->id_indicador ?>')">Mover Indicador</div>
                                  </div>
                                  @endif
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  @endif
                  {{-- ==================== /DINÁMICA FAMILIAR (REDES) ==================== --}}

                  {{-- ==================== DINÁMICA FAMILIAR (RUTAS VIF/VBG) ==================== --}}
                  @if($df2Visible)
                    <span class="badge bg-primary" style="font-size:15px;">Dinámica familiar</span>
                    <div class="container mt-4">
                      <div class="border">
                        <div class="row g-0">
                          <div class="col-md-12 d-flex align-items-center border-end border-bottom text-center" style="background:#2fa4e7; color:white; font-weight:bold">
                            <div class="p-2">INDICADOR</div>
                          </div>
                        </div>
                        <div class="row g-0">
                          <div class="{{ $colFull }} p-2">
                            <div class="row g-0" id="indicadorbef3">
                              <div class="col-md-12 d-flex align-items-center border-end border-bottom">
                                <div class="p-2">
                                  Los integrantes del hogar conocen las rutas para la prevención e intervención de la violencia intrafamiliar y las VBG.
                                  @if($vista != '1')
                                  <div class="text-center mt-3">
                                    <div class="btn btn-success" onclick="abrirmodalhogar('<?= $indicadores_tabla[19]->id_bienestar ?>','<?= $indicadores_tabla[19]->id_subcategoria ?>','<?= $indicadores_tabla[19]->id_indicador ?>')">Mover Indicador</div>
                                  </div>
                                  @endif
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  @endif
                  {{-- ==================== /DINÁMICA FAMILIAR (RUTAS VIF/VBG) ==================== --}}

                  {{-- ==================== TIEMPO LIBRE Y RECREACIÓN ==================== --}}
                  @if($tlrVisible)
                    <span class="badge bg-primary" style="font-size:15px; background:#a80a85 !important">Tiempo libre y recreación</span>
                    <div class="container mt-4">
                      <div class="border">
                        <div class="row g-0">
                          <div class="col-md-12 d-flex align-items-center border-end border-bottom text-center" style="background:#2fa4e7; color:white; font-weight:bold">
                            <div class="p-2">INDICADOR</div>
                          </div>
                        </div>
                        <div class="row g-0">
                          <div class="{{ $colFull }} p-2">
                            <div class="row g-0" id="indicadorbef4">
                              <div class="col-md-12 d-flex align-items-center border-end border-bottom">
                                <div class="p-2">
                                  Los integrantes del hogar participan en familia de actividades sociales, culturales, recreativas y/o deportivas.
                                  @if($vista != '1')
                                  <div class="text-center mt-3">
                                    <div class="btn btn-success" onclick="abrirmodalhogar('<?= $indicadores_tabla[20]->id_bienestar ?>','<?= $indicadores_tabla[20]->id_subcategoria ?>','<?= $indicadores_tabla[20]->id_indicador ?>')">Mover Indicador</div>
                                  </div>
                                  @endif
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  @endif
                  {{-- ==================== /TIEMPO LIBRE Y RECREACIÓN ==================== --}}

                  {{-- ==================== CUIDADO ==================== --}}
                  @if($cuiVisible)
                    <span class="badge bg-primary" style="font-size:15px;">Cuidado</span>
                    <div class="container mt-4">
                      <div class="border">
                        <div class="row g-0">
                          <div class="col-md-12 d-flex align-items-center border-end border-bottom text-center" style="background:#2fa4e7; color:white; font-weight:bold">
                            <div class="p-2">INDICADOR</div>
                          </div>
                        </div>
                        <div class="row g-0">
                          <div class="{{ $colFull }} p-2">
                            <div class="row g-0" id="indicadorbef5">
                              <div class="col-md-12 d-flex align-items-center border-end border-bottom">
                                <div class="p-2">
                                  Integrantes cuidadores acceden a programas que fortalecen estrategias de cuidado y su bienestar emocional.
                                  @if($vista != '1')
                                  <div class="text-center mt-3">
                                    <div class="btn btn-success" onclick="abrirmodalhogar('<?= $indicadores_tabla[21]->id_bienestar ?>','<?= $indicadores_tabla[21]->id_subcategoria ?>','<?= $indicadores_tabla[21]->id_indicador ?>')">Mover Indicador</div>
                                  </div>
                                  @endif
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  @endif
                  {{-- ==================== /CUIDADO ==================== --}}

                  {{-- ==================== HABITABILIDAD ==================== --}}
                  @if($habVisible)
                    <span class="badge bg-primary" style="font-size:15px;">Habitabilidad</span>
                    <div class="container mt-4">
                      <div class="border">
                        <div class="row g-0">
                          <div class="col-md-12 d-flex align-items-center border-end border-bottom text-center" style="background:#2fa4e7; color:white; font-weight:bold">
                            <div class="p-2">INDICADOR</div>
                          </div>
                        </div>
                        <div class="row g-0">
                          <div class="{{ $colFull }} p-2">
                            <div class="row g-0" id="indicadorbef6">
                              <div class="col-md-12 d-flex align-items-center border-end border-bottom">
                                <div class="p-2">
                                  El hogar accede a servicios para el mejoramiento de sus condiciones de habitabilidad.
                                  @if($vista != '1')
                                  <div class="text-center mt-3">
                                    <div class="btn btn-success" onclick="abrirmodalhogar('<?= $indicadores_tabla[22]->id_bienestar ?>','<?= $indicadores_tabla[22]->id_subcategoria ?>','<?= $indicadores_tabla[22]->id_indicador ?>')">Mover Indicador</div>
                                  </div>
                                  @endif
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  @endif
                  {{-- ==================== /HABITABILIDAD ==================== --}}

                  {{-- ==================== FFES: PARTICIPACIÓN SOCIAL Y CIUDADANA EN NNA ==================== --}}
                  @if($ffesVisible)
                    <span class="badge bg-primary" style="font-size:15px; background:#ff8403 !important">FFES</span>
                    <hr>
                    <span class="badge bg-primary" style="font-size:15px; background:#ff8403 !important">PARTICIPACIÓN SOCIAL Y CIUDADANA EN NIÑOS, NIÑAS Y ADOLESCENTES</span>
                    <div class="container mt-4">
                      <div class="border">
                        <div class="row g-0">
                          <div class="col-md-12 d-flex align-items-center border-end border-bottom text-center" style="background:#2fa4e7; color:white; font-weight:bold">
                            <div class="p-2">INDICADOR</div>
                          </div>
                        </div>
                        <div class="row g-0">
                          <div class="{{ $colFull }} p-2">
                            <div class="row g-0" id="indicadorbef7">
                              <div class="col-md-12 d-flex align-items-center border-end border-bottom">
                                <div class="p-2">
                                  Los niños, niñas y adolescentes del hogar participan en actividades sociales, culturales, recreativas y/o deportivas.
                                  @if($vista != '1')
                                  <div class="text-center mt-3">
                                    <div class="btn btn-success" onclick="abrirmodalhogar('<?= $indicadores_tabla[39]->id_bienestar ?>','<?= $indicadores_tabla[39]->id_subcategoria ?>','<?= $indicadores_tabla[39]->id_indicador ?>')">Mover Indicador</div>
                                  </div>
                                  @endif
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  @endif
                  {{-- ==================== /FFES ==================== --}}

                @endif <!-- /hayAlgoFamilia -->

                <hr>
                <div class="row">
                  <div class="text-start col">
                    <div class="btn btn-outline-success" onclick="volversaludemocional()">Volver</div>
                  </div>
                  <div class="text-end col">
                    <button class="btn btn-outline-success" type="submit" <?= ($vista != '1')?'disabled':'' ?>>Guardar</button>
                    <div class="btn btn-outline-primary" id="siguiente" <?= $siguiente ?>>Siguiente</div>
                  </div>
                </div>

              </form>
            </div><!-- /tab-pane -->
          </div><!-- /tab-content -->
        </div><!-- /row -->
      </div><!-- /accordion-body -->
    </div><!-- /collapseOne -->
  </div><!-- /accordion-item -->
</div><!-- /accordion -->








    <script src="{{ asset('assets/jquery/jquery.js') }}"></script>
        <script src="{{ asset('assets/jquery/jquery.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/bootstrap.js') }}" ></script>
   <script src="{{ asset('assets/jquery/jquery.js') }}"></script>
   <script type="module" src="{{asset('iconos/ionicons.esm.js') }}" ></script>
   <script nomodule src="{{asset('iconos/ionicons.js')}}"></script>
   <script src="{{asset('resources/js/dataTables.js')}}"></script>
   <script src="{{asset('resources/js/dataTables.boostrap5.js')}}"></script>
   <script src="{{ asset('assets/bootstrap/bootstrap-select.min.js') }}" ></script>
       <!-- Enlace al archivo CSS -->
    <link rel="stylesheet" href="{{ asset('resources/handsontable/handsontable.full.min.css') }}">
    <!-- Enlace al archivo JS -->
    <script src="{{ asset('resources/handsontable/handsontable.full.min.js') }}"></script>
    <!-- Enlace al archivo de idioma español -->
    <script src="{{ asset('resources/handsontable/es-MX.js') }}"></script>
<div id="modal"></div>
<div id="modal2"></div>
    <script>
    



    $('#siguiente').click(function(){
        var url = "../../../intelectualqtvisita/<?= $variable ?>/<?= $integrantecodificado ?>/<?= $vista ?>"; window.location.href = url;
      });

      function volversaludemocional() {
          var url = "../../../legalqtvisita/<?= $variable ?>/<?= $integrantecodificado ?>/<?= $vista ?>"; window.location.href = url;
       }


       $('#bienestarsaludemocionalqt').click(function(){var url = "../../../bienestarsaludemocionalqtvisita/<?= $variable ?>/<?= $integrantecodificado ?>/<?= $vista ?>"; window.location.href = url;})
    $('#legalqt').click(function(){var url = "../../../legalqtvisita/<?= $variable ?>/<?= $integrantecodificado ?>/<?= $vista ?>"; window.location.href = url;})
    $('#enfamiliaqt').click(function(){var url = "../../../enfamiliaqtvisita/<?= $variable ?>/<?= $integrantecodificado ?>/<?= $vista ?>"; window.location.href = url;})
    $('#intelectualqt').click(function(){var url = "../../../intelectualqtvisita/<?= $variable ?>/<?= $integrantecodificado ?>/<?= $vista ?>"; window.location.href = url;})
    $('#financieroqt').click(function(){var url = "../../../financieroqtvisita/<?= $variable ?>/<?= $integrantecodificado ?>/<?= $vista ?>"; window.location.href = url;})


    $(document).ready(function() {
     
     $('#formulario').on('submit', function(event) {
         event.preventDefault(); // Detiene el envío del formulario
         
         var formData = $(this).serializeArray();
         var data = {};
         $(formData).each(function(index, obj) {
             data[obj.name] = obj.value;
         });


         $('#formulario [name]').each(function() {
               var name = $(this).attr('name');

              // Si el elemento es un checkbox
               if ($(this).is(':checkbox')) {
                   // Solo sobrescribe el valor si no es "NO APLICA"
                   if ($(this).val() !== 'NO APLICA') {
                       data[name] = $(this).is(':checked') ? $(this).val() : 'NO';
                   } else {
                       data[name] = 'NO APLICA';
                   }
               }
           });

         console.log(data);

         $.ajax({
             url: '../../../guardarformularioqt',
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
     });
});


 </script>
<script>

     document.addEventListener('DOMContentLoaded', function () {
 // Array de switches con un flag para identificar el switch 'Ninguna'
 var healthSwitches = {
    'indicador_bef1_1': { isNone: false },
    'indicador_bef1_2': { isNone: false },
    'indicador_bef1_3': { isNone: false },
    'indicador_bef1_4': { isNone: false },
    'indicador_bef2_1': { isNone: false },
    'indicador_bef2_2': { isNone: false },
    'indicador_bef2_3': { isNone: false },
    'indicador_bef3_1': { isNone: false },
    'indicador_bef3_2': { isNone: false },
    'indicador_bef3_3': { isNone: false },
    'indicador_bef4_1': { isNone: false },
    'indicador_bef4_2': { isNone: false },
    'indicador_bef4_3': { isNone: false },
    'indicador_bef4_4': { isNone: false },
    'indicador_bef5_1': { isNone: false },
    'indicador_bef5_2': { isNone: false },
    'indicador_bef5_3': { isNone: false },
    'indicador_bef5_4': { isNone: false },
    'indicador_bef6_1': { isNone: false },
    'indicador_bef6_2': { isNone: false },
    'indicador_bef6_3': { isNone: false },
    'indicador_bef6_4': { isNone: false },
    'indicador_bef6_5': { isNone: false },
    'indicador_bef6_6': { isNone: false },

    'indicador_bef7_1': { isNone: false },
    'indicador_bef7_2': { isNone: false },
    'indicador_bef7_3': { isNone: false },


    'ninguna_switch': { isNone: true }  // Este es el switch exclusivo
};


 Object.keys(healthSwitches).forEach(function(switchId) {
     var switchElement = document.getElementById(switchId);
     if (switchElement) {
         // Configurar el valor inicial correctamente
         switchElement.value = switchElement.checked ? 'SI' : 'NO';
         switchElement.addEventListener('change', function() {
             handleCheckboxLogic(this, healthSwitches);
         });
     } else {
         console.log("Switch no encontrado: " + switchId);
     }
 });

 function handleCheckboxLogic(changedElement, allSwitches) {
     var isNone = allSwitches[changedElement.id].isNone;
     // Si se selecciona 'Ninguna', desmarcar todos los demás
     if (isNone && changedElement.checked) {
         Object.keys(allSwitches).forEach(function(id) {
             if (id !== changedElement.id) {
                 var otherElement = document.getElementById(id);
                 otherElement.checked = false;
                 otherElement.value = 'NO';
             }
         });
     } else if (!isNone && changedElement.checked) {
         // Si se selecciona cualquier otro y 'Ninguna' está marcado, desmarcar 'Ninguna'
         var noneSwitch = document.getElementById('ninguna_switch');
         if (noneSwitch && noneSwitch.checked) {
             noneSwitch.checked = false;
             noneSwitch.value = 'NO';
         }
     }

     // Actualizar el valor del switch actual
     changedElement.value = changedElement.checked ? 'SI' : 'NO';
 }
});

</script>


<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Ejecutar la función para ambos divs al cargar la página
    checkAndSetSwitchValues('indicadorbef1');
    checkAndSetSwitchValues('indicadorbef2');
    checkAndSetSwitchValues('indicadorbef3');
    checkAndSetSwitchValues('indicadorbef4');
    checkAndSetSwitchValues('indicadorbef5');
    checkAndSetSwitchValues('indicadorbef6');
    checkAndSetSwitchValues('indicadorbef7');


    // Configuración del observador para ambos divs
    var observer1 = createObserver('indicadorbef1');
    var observer2 = createObserver('indicadorbef2');
    var observer2 = createObserver('indicadorbef3');
    var observer2 = createObserver('indicadorbef4');
    var observer2 = createObserver('indicadorbef5');
    var observer2 = createObserver('indicadorbef6');
    var observer2 = createObserver('indicadorbef7');


});

// Función para crear un observador para un div específico
function createObserver(divId) {
    var targetDiv = document.getElementById(divId);

    var observer = new MutationObserver(function(mutations) {
        mutations.forEach(function(mutation) {
            if (mutation.attributeName === "style") {
                checkAndSetSwitchValues(divId);
            }
        });
    });

    var config = { attributes: true, childList: false, characterData: false };
    observer.observe(targetDiv, config);
}

// Función que verifica si el div está oculto y ajusta los switches
function checkAndSetSwitchValues(divId) {
    var targetDiv = document.getElementById(divId);
    var isHidden = window.getComputedStyle(targetDiv).display === 'none';
    var switches = targetDiv.querySelectorAll('.form-check-input');

    if (isHidden) {
        switches.forEach(function(switchEl) {
            switchEl.value = 'NO APLICA';
            console.log(switchEl.id + ' value set to: NO APLICA (div ' + divId + ' is hidden)');
        });
    } else {
        console.log('El div ' + divId + ' no está oculto, no se cambia el valor de los switches.');
    }
}
</script>

<script>
  function abrirmodal(id_bienestar, id_subcategoria, id_indicador){
    $.ajax({
                url: '../../../consultarindicador',
                method: 'GET', // Cambiar a GET si estás usando GET
                data: {id_bienestar:id_bienestar, 
                  id_subcategoria:id_subcategoria, 
                  id_indicador:id_indicador, 
                 folio: '<?= $folio ?>',
                 idintegrante: '<?= $integrante ?>',
                 tabla: '<?= $tabla?>'
                }, // Envía los datos de manera plana
                dataType: 'json',
                success: function(data) {
                  console.log(data);
                  $('#modal').html(data.modal);
                  var indicadors = 'modal-' + id_indicador; // Asegúrate de que "indicador_id" coincida con el ID generado
                  var modal = new bootstrap.Modal(document.getElementById(indicadors)); 
                  modal.show();
                  $('#oportunidades').html(data.oportunidades);
                  $('.selectpicker').selectpicker();
                  $('.filter-option-inner-inner').css('font-size','13px');
                  $('#example').DataTable().destroy(); // Destruye la instancia existente
                  $('#example').DataTable(); // Vuelve a inicializar
                  $('#modal2').html(data.modal2);
                 // $('#siguiente').css('display','');
                   // alertagood();
                },
                error: function(xhr, status, error) {
                    alertabad();
                    console.error(error);
                }
            });
  }


  function moverindicadorgestor(folio, idintegrante, id_bienestar, id_indicador) {
  
  var modalElement = document.getElementById('modal-'+ id_indicador);
  var modalInstance = bootstrap.Modal.getInstance(modalElement);
  let nombreoportunidad = $('#nombreOportunidad').val();
  let telefono = $('#telefonoContacto').val();
  var observaciongestor = $('#observaciongestor').val();

  if($('#checkseleccionado').val() == 'Oportunidad no incluida en fichero'  && nombreoportunidad == ''){
    Swal.fire({
        icon: 'warning',
        title: 'Advertencia',
        text: 'Debe llenar el nombre de la oportunidad si seleccionó "Oportunidad no incluida en fichero".'
      }); 
      return
}
if($('#checkseleccionado').val() == 'Oportunidad no incluida en fichero'  && telefono == ''){
    Swal.fire({
        icon: 'warning',
        title: 'Advertencia',
        text: 'Debe llenar el campo telefono de la oportunidad si seleccionó "Oportunidad no incluida en fichero".'
      }); 
      return
}

if( observaciongestor == ''){
    Swal.fire({
        icon: 'warning',
        title: 'Advertencia',
        text: 'Debe llenar el campo de observación'
      }); 
      return
}

if($('#checkseleccionado').val() == '' ){
    Swal.fire({
        icon: 'warning',
        title: 'Advertencia',
        text: 'Debes seleccionar alguna opción".'
      }); 
      return
}


  console.log(observaciongestor)
   $.ajax({
               url: '../../../moverindicadorgestor',
               method: 'GET', // Cambiar a GET si estás usando GET
               data: {id_bienestar:id_bienestar, 
                 id_indicador:id_indicador, 
                folio: '<?= $folio ?>',
                idintegrante: '<?= $integrante ?>',
                usuario: '<?= Session::get('cedula')?>',
                metodo:$('#checkseleccionado').val(),
                observaciongestor:observaciongestor,
                nombreoportunidad:nombreoportunidad,
                telefono:telefono


               }, // Envía los datos de manera plana
               dataType: 'json',
               success: function(data) {
                Swal.fire({
                  position: "center",
                  icon: "success",
                  title: "Indicador movido con éxito",
                  showConfirmButton: false,
                  timer: 10000
                  });
                setTimeout(() => {
                  location.reload();
                }, 100);
               // location.reload();
                  //modalInstance.hide();
               },
               error: function(xhr, status, error) {
                   alertabad();
                   console.error(error);
               }
           });

}

function moverindicadorgestorhogar(folio, idintegrante, id_bienestar, id_indicador) {
  
  var modalElement = document.getElementById('modal-'+ id_indicador);
  var modalInstance = bootstrap.Modal.getInstance(modalElement);
  var observaciongestor = $('#observaciongestor').val();
  let nombreoportunidad = $('#nombreOportunidad').val();
  let telefono = $('#telefonoContacto').val();

    if($('#checkseleccionado').val() == 'Oportunidad no incluida en fichero'  && nombreoportunidad == ''){
      Swal.fire({
          icon: 'warning',
          title: 'Advertencia',
          text: 'Debe llenar el nombre de la oportunidad si seleccionó "Oportunidad no incluida en fichero".'
        }); 
        return
      }
      if($('#checkseleccionado').val() == 'Oportunidad no incluida en fichero'  && telefono == ''){
            Swal.fire({
                icon: 'warning',
                title: 'Advertencia',
                text: 'Debe llenar el campo telefono de la oportunidad si seleccionó "Oportunidad no incluida en fichero".'
              }); 
              return
      }

      if( observaciongestor == ''){
            Swal.fire({
                icon: 'warning',
                title: 'Advertencia',
                text: 'Debe llenar el campo de observación'
              }); 
              return
      }

      if($('#checkseleccionado').val() == '' ){
            Swal.fire({
                icon: 'warning',
                title: 'Advertencia',
                text: 'Debes seleccionar alguna opción".'
              }); 
              return
      }

   $.ajax({
               url: '../../../moverindicadorgestorhogar',
               method: 'GET', // Cambiar a GET si estás usando GET
               data: {id_bienestar:id_bienestar, 
                 id_indicador:id_indicador, 
                folio: '<?= $folio ?>',
                idintegrante: '<?= $integrante ?>',
                usuario: '<?= Session::get('cedula')?>',
                metodo:$('#checkseleccionado').val(),
                  observaciongestor:observaciongestor,
                  nombreoportunidad:nombreoportunidad,
                  telefono:telefono


               }, // Envía los datos de manera plana
               dataType: 'json',
               success: function(data) {
                Swal.fire({
                  position: "center",
                  icon: "success",
                  title: "Indicador movido con éxito",
                  showConfirmButton: false,
                  timer: 1000
                  });
                setTimeout(() => {
                  location.reload();
                }, 1000);
                location.reload();
                  //modalInstance.hide();
               },
               error: function(xhr, status, error) {
                   alertabad();
                   console.error(error);
               }
           });

}

  function abrirmodalhogar(id_bienestar, id_subcategoria, id_indicador){
    $.ajax({
                url: '../../../consultarindicadorhogar',
                method: 'GET', // Cambiar a GET si estás usando GET
                data: {id_bienestar:id_bienestar, 
                  id_subcategoria:id_subcategoria, 
                  id_indicador:id_indicador, 
                 folio: '<?= $folio ?>',
                 idintegrante: '<?= $integrante ?>',
                 tabla: '<?= $tabla?>'
                }, // Envía los datos de manera plana
                dataType: 'json',
                success: function(data) {
                  console.log(data);
                  $('#modal').html(data.modal);
                  var indicadors = 'modal-' + id_indicador; // Asegúrate de que "indicador_id" coincida con el ID generado
                  var modal = new bootstrap.Modal(document.getElementById(indicadors)); 
                  modal.show();
                  $('#oportunidades').html(data.oportunidades);
                  $('.selectpicker').selectpicker();
                  $('.filter-option-inner-inner').css('font-size','13px');
                  $('#example').DataTable().destroy(); // Destruye la instancia existente
                  $('#example').DataTable(); // Vuelve a inicializar
                  initializeCheckboxes();
                  initializeCheckboxes2();
                  initializeCheckboxes3();
                  $('#modal2').html(data.modal2);
                 // $('#siguiente').css('display','');
                   // alertagood();
                },
                error: function(xhr, status, error) {
                    alertabad();
                    console.error(error);
                }
            });
  }
</script>

<script>
  function agregaroportunidad(idoportunidad,aplica_hogar_integrante, estado_oportunidad, id_bienestar = 0, id_indicador = 0) {
    // Obtiene el select específico usando el id de oportunidad
    let select = document.getElementById(`speaker_${idoportunidad}`);
    let selectedOption = select.options[select.selectedIndex];
//console.log(aplica_hogar_integrante, 'HOLAAAAAAAAAAAAAAA')
    // Obtén los valores directamente
    let idintegrante = selectedOption.value;
    let folio = selectedOption.getAttribute('data-folio');

    console.log("Value:", idintegrante);
    console.log("Data-Folio:", folio);
    $('#acercar'+idoportunidad).attr('disabled', 'disabled');

    $.ajax({
     url: '../../../agregaroportunidad',
     data: {
         folio: folio,
         idintegrante: idintegrante,
         idoportunidad:idoportunidad,
         id_bienestar: id_bienestar,
         id_indicador: id_indicador,
         usuario: '<?= Session::get('cedula') ?>',
         estado_oportunidad:estado_oportunidad,
         linea:'200',
         tabla:'t1_oportunidad_integrantes',
         aplica_hogar_integrante:aplica_hogar_integrante,

     },
     method: "GET",
     dataType: 'JSON',
     success: function(data) {
      $('#acercar'+idoportunidad).removeAttr('disabled');
        selectedOption.setAttribute('data-id', data.insertedId);
        if (data.success && data.estado_oportunidad == '1') {
        $('#acercar'+idoportunidad).attr('disabled', 'disabled');
          $('#acercar'+idoportunidad).removeClass('btn btn-primary').addClass('btn btn-danger');
          $('#acercar'+idoportunidad).html('Acercada');
          $('#efectiva'+idoportunidad).removeAttr('disabled');
          $('#efectiva'+idoportunidad).removeClass('btn btn-success').addClass('btn btn-success');
          $('#efectiva'+idoportunidad).html('Efectiva');
          $('#noefectiva'+idoportunidad).removeAttr('disabled');
          $('#noefectiva'+idoportunidad).removeClass('btn btn-danger').addClass('btn btn-danger');
          $('#noefectiva'+idoportunidad).html('No efectiva');
          Swal.close();
      }else if (data.success && data.estado_oportunidad == '2') {
            $('#acercar'+idoportunidad).removeAttr('disabled');
            $('#acercar'+idoportunidad).removeClass('btn btn-danger').addClass('btn btn-primary');
            $('#acercar'+idoportunidad).html('Acercar');

            $('#efectiva'+idoportunidad).attr('disabled', 'disabled');
            $('#efectiva'+idoportunidad).html('Efectiva');
            $('#noefectiva'+idoportunidad).attr('disabled', 'disabled');
            $('#noefectiva'+idoportunidad).html('No efectiva');
          Swal.close();

           //para actualizar

           Swal.fire({
              position: "center",
              icon: "success",
              title: "Indicador movido con éxito",
              showConfirmButton: false,
              timer: 1000
              });
            setTimeout(() => {
              location.reload();
            }, 1000);
      }
      else if (data.success && data.estado_oportunidad == '3') {
            $('#acercar'+idoportunidad).removeAttr('disabled');
            $('#acercar'+idoportunidad).removeClass('btn btn-danger').addClass('btn btn-primary');
            $('#acercar'+idoportunidad).html('Acercar');

            $('#noefectiva'+idoportunidad).attr('disabled', 'disabled');
            $('#noefectiva'+idoportunidad).removeClass('btn btn-primary').addClass('btn btn-danger');
            $('#noefectiva'+idoportunidad).html('No efectiva');
            $('#efectiva'+idoportunidad).attr('disabled', 'disabled');
            $('#efectiva'+idoportunidad).html('Efectiva');
          Swal.close();
      }
     },
     error: function(xhr, status, error) {
         console.log(xhr.responseText);
     }
 });
}

function habilitaboton(idoportunidad){
  Swal.fire({
    title: 'Cargando',
    text: 'Por favor espera...',
    allowOutsideClick: false,
    didOpen: () => {
        Swal.showLoading(); // Muestra el spinner de carga
    }
});
  let select = document.getElementById(`speaker_${idoportunidad}`);
    let selectedOption = select.options[select.selectedIndex];

    // Obtén los valores directamente
    let idintegrante = selectedOption.value;
    let id = selectedOption.getAttribute('data-id');
    let folio = selectedOption.getAttribute('data-folio');
  $.ajax({
     url: '../../../veroportunidad',
     data: {
         folio: folio,
         idintegrante: idintegrante,
         idoportunidad: idoportunidad,
         id:id,
         tabla:'t1_oportunidad_integrantes',
     },
     method: "GET",
     dataType: 'JSON',
     success: function(data) {
      if (data.estado == '1') {
          $('#acercar'+idoportunidad).attr('disabled', 'disabled');
          $('#acercar'+idoportunidad).removeClass('btn btn-primary').addClass('btn btn-danger');
          $('#acercar'+idoportunidad).html('Acercada');
          $('#efectiva'+idoportunidad).removeAttr('disabled');
          $('#efectiva'+idoportunidad).removeClass('btn btn-success').addClass('btn btn-success');
          $('#efectiva'+idoportunidad).html('Efectiva');
          $('#noefectiva'+idoportunidad).removeAttr('disabled');
          $('#noefectiva'+idoportunidad).removeClass('btn btn-danger').addClass('btn btn-danger');
          $('#noefectiva'+idoportunidad).html('No efectiva');
          Swal.close();
      }
     else if (data.estado == '2') {
            $('#acercar'+idoportunidad).removeAttr('disabled');
            $('#acercar'+idoportunidad).removeClass('btn btn-danger').addClass('btn btn-primary');
            $('#acercar'+idoportunidad).html('Acercar');

            $('#efectiva'+idoportunidad).attr('disabled', 'disabled');
            $('#efectiva'+idoportunidad).html('Efectiva');
            $('#noefectiva'+idoportunidad).attr('disabled', 'disabled');
            $('#noefectiva'+idoportunidad).html('No efectiva');
        //   $('#acercar'+idoportunidad).attr('disabled', 'disabled');
        //   $('#acercar'+idoportunidad).removeClass('btn btn-primary').addClass('btn btn-danger');
        //   $('#acercar'+idoportunidad).html('Acercada');
          
          Swal.close();
      }
    else  if (data.estado == '3') {
            $('#acercar'+idoportunidad).removeAttr('disabled');
            $('#acercar'+idoportunidad).removeClass('btn btn-danger').addClass('btn btn-primary');
            $('#acercar'+idoportunidad).html('Acercar');

            $('#noefectiva'+idoportunidad).attr('disabled', 'disabled');
            $('#noefectiva'+idoportunidad).removeClass('btn btn-primary').addClass('btn btn-danger');
            $('#noefectiva'+idoportunidad).html('No efectiva');
            $('#efectiva'+idoportunidad).attr('disabled', 'disabled');
            $('#efectiva'+idoportunidad).html('Efectiva');
            Swal.close();
    }    else {
            $('#acercar'+idoportunidad).removeAttr('disabled');
            $('#acercar'+idoportunidad).removeClass('btn btn-danger').addClass('btn btn-primary');
            $('#acercar'+idoportunidad).html('Acercar');
            $('#efectiva'+idoportunidad).attr('disabled', 'disabled');
            $('#efectiva'+idoportunidad).html('Efectiva');
            $('#noefectiva'+idoportunidad).attr('disabled', 'disabled');
            $('#noefectiva'+idoportunidad).html('No efectiva');
           
           Swal.close();
       }

     },
     error: function(xhr, status, error) {
         console.log(xhr.responseText);
     }
 });
}
      


function initializeCheckboxes() {
    const checkboxes = document.querySelectorAll('#container-disciplinapositiva .form-check-input');
    const noImplementaNingunaCheckbox = document.querySelector('#disciplinapositiva304'); // ID del checkbox "No implementa ninguna"

    checkboxes.forEach((checkbox) => {
        // Inicializar todos los checkboxes con valor "NO"
        checkbox.setAttribute('respuesta', 'NO');
        checkbox.checked = false;

        // Cambiar valor al seleccionar/deseleccionar
        checkbox.addEventListener('change', function () {
            if (checkbox.id === 'disciplinapositiva304' && checkbox.checked) {
                // Si selecciona "No implementa ninguna", desmarcar todos los demás
                checkboxes.forEach((otherCheckbox) => {
                    if (otherCheckbox !== checkbox) {
                        otherCheckbox.checked = false;
                        otherCheckbox.setAttribute('respuesta', 'NO');
                    }
                });
            } else if (checkbox.checked) {
                // Si selecciona cualquier otro, desmarcar "No implementa ninguna"
                if (noImplementaNingunaCheckbox.checked) {
                    noImplementaNingunaCheckbox.checked = false;
                    noImplementaNingunaCheckbox.setAttribute('respuesta', 'NO');
                }
                checkbox.setAttribute('respuesta', 'SI');
            } else {
                checkbox.setAttribute('respuesta', 'NO');
            }
        });
    });
}

function initializeCheckboxes2() {
    const checkboxes = document.querySelectorAll('#container-tiempolibre .form-check-input');
    const noImplementaNingunaCheckbox = document.querySelector('#tiempolibre309'); // ID del checkbox "No implementa ninguna"

    checkboxes.forEach((checkbox) => {
        // Inicializar todos los checkboxes con valor "NO"
        checkbox.setAttribute('respuesta', 'NO');
        checkbox.checked = false;

        // Cambiar valor al seleccionar/deseleccionar
        checkbox.addEventListener('change', function () {
            if (checkbox.id === 'tiempolibre309' && checkbox.checked) {
                // Si selecciona "No implementa ninguna", desmarcar todos los demás
                checkboxes.forEach((otherCheckbox) => {
                    if (otherCheckbox !== checkbox) {
                        otherCheckbox.checked = false;
                        otherCheckbox.setAttribute('respuesta', 'NO');
                    }
                });
            } else if (checkbox.checked) {
                // Si selecciona cualquier otro, desmarcar "No implementa ninguna"
                if (noImplementaNingunaCheckbox.checked) {
                    noImplementaNingunaCheckbox.checked = false;
                    noImplementaNingunaCheckbox.setAttribute('respuesta', 'NO');
                }
                checkbox.setAttribute('respuesta', 'SI');
            } else {
                checkbox.setAttribute('respuesta', 'NO');
            }
        });
    });
}


function initializeCheckboxes3() {
    const checkboxes = document.querySelectorAll('#container-actividadesculturales .form-check-input');
    const noImplementaNingunaCheckbox = document.querySelector('#actividadesculturales66'); // ID del checkbox "No implementa ninguna"

    checkboxes.forEach((checkbox) => {
        // Inicializar todos los checkboxes con valor "NO"
        checkbox.setAttribute('respuesta', 'NO');
        checkbox.checked = false;

        // Cambiar valor al seleccionar/deseleccionar
        checkbox.addEventListener('change', function () {
            if (checkbox.id === 'actividadesculturales66' && checkbox.checked) {
                // Si selecciona "No implementa ninguna", desmarcar todos los demás
                checkboxes.forEach((otherCheckbox) => {
                    if (otherCheckbox !== checkbox) {
                        otherCheckbox.checked = false;
                        otherCheckbox.setAttribute('respuesta', 'NO');
                    }
                });
            } else if (checkbox.checked) {
                // Si selecciona cualquier otro, desmarcar "No implementa ninguna"
                if (noImplementaNingunaCheckbox.checked) {
                    noImplementaNingunaCheckbox.checked = false;
                    noImplementaNingunaCheckbox.setAttribute('respuesta', 'NO');
                }
                checkbox.setAttribute('respuesta', 'SI');
            } else {
                checkbox.setAttribute('respuesta', 'NO');
            }
        });
    });
}




function moverporpregunta31(folio, id_bienestar, id_indicador) {
  
  let  p1=$('#disciplinapositiva298').attr('respuesta');
  let  p2=$('#disciplinapositiva299').attr('respuesta');
  let  p3=$('#disciplinapositiva300').attr('respuesta');
  let  p4=$('#disciplinapositiva301').attr('respuesta');
  let  p5=$('#disciplinapositiva302').attr('respuesta');
  let  p6=$('#disciplinapositiva303').attr('respuesta');
  let  p7=$('#disciplinapositiva304').attr('respuesta');


  let atLeastOneChecked = $('.disciplinapositiva-input:checked').length > 0;

if (!atLeastOneChecked) {
    // Si no hay ningún checkbox seleccionado, muestra una alerta
    Swal.fire({
        position: "center",
        icon: "warning",
        title: "Debes seleccionar al menos una opción",
        showConfirmButton: true,
        confirmButtonText: "Aceptar"
    });
    return; // Detiene la ejecución de la función
}


$.ajax({
      url: '../../../moverporpregunta31',
      method: 'GET', // Cambiar a GET si estás usando GET
      data: {  folio: '<?= $folio ?>',
       id_bienestar:id_bienestar, 
       id_indicador:id_indicador, 
       usuario: '<?= Session::get('cedula')?>',
       p1:p1,
       p2:p2,
       p3:p3,
       p4:p4,
       p5:p5,
       p6:p6,
       p7:p7,


      }, // Envía los datos de manera plana
      dataType: 'json',
      success: function(data) {
       Swal.fire({
         position: "center",
         icon: "success",
         title: "Indicador movido con éxito",
         showConfirmButton: false,
         timer: 1000
         });
       setTimeout(() => {
         location.reload();
       }, 1000);
       location.reload();
         //modalInstance.hide();
      },
      error: function(xhr, status, error) {
          alertabad();
          console.error(error);
      }
  });

}


function moverporpregunta32(folio, id_bienestar, id_indicador) {
  
  let  p1=$('#redesdeapoyo').val();

  if (p1 == '') {
    // Si no hay ningún checkbox seleccionado, muestra una alerta
    Swal.fire({
        position: "center",
        icon: "warning",
        title: "Debes seleccionar al menos una opción",
        showConfirmButton: true,
        confirmButtonText: "Aceptar"
    });
    return; // Detiene la ejecución de la función
}

$.ajax({
      url: '../../../moverporpregunta32',
      method: 'GET', // Cambiar a GET si estás usando GET
      data: {  folio: '<?= $folio ?>',
       id_bienestar:id_bienestar, 
       id_indicador:id_indicador, 
       usuario: '<?= Session::get('cedula')?>',
       p1:p1
      }, // Envía los datos de manera plana
      dataType: 'json',
      success: function(data) {
       Swal.fire({
         position: "center",
         icon: "success",
         title: "Indicador movido con éxito",
         showConfirmButton: false,
         timer: 1000
         });
       setTimeout(() => {
         location.reload();
       }, 1000);
       location.reload();
         //modalInstance.hide();
      },
      error: function(xhr, status, error) {
          alertabad();
          console.error(error);
      }
  });

}

function moverporpregunta34(folio, id_bienestar, id_indicador) {
  
  let  p1=$('#tiempolibre305').attr('respuesta');
  let  p2=$('#tiempolibre306').attr('respuesta');
  let  p3=$('#tiempolibre307').attr('respuesta');
  let  p4=$('#tiempolibre308').attr('respuesta');
  let  p5=$('#tiempolibre309').attr('respuesta');

  let atLeastOneChecked = $('.tiempolibre-input:checked').length > 0;

if (!atLeastOneChecked) {
    // Si no hay ningún checkbox seleccionado, muestra una alerta
    Swal.fire({
        position: "center",
        icon: "warning",
        title: "Debes seleccionar al menos una opción",
        showConfirmButton: true,
        confirmButtonText: "Aceptar"
    });
    return; // Detiene la ejecución de la función
}

$.ajax({
      url: '../../../moverporpregunta34',
      method: 'GET', // Cambiar a GET si estás usando GET
      data: {  folio: '<?= $folio ?>',
       id_bienestar:id_bienestar, 
       id_indicador:id_indicador, 
       usuario: '<?= Session::get('cedula')?>',
       p1:p1,
       p2:p2,
       p3:p3,
       p4:p4,
       p5:p5
      }, // Envía los datos de manera plana
      dataType: 'json',
      success: function(data) {
       Swal.fire({
         position: "center",
         icon: "success",
         title: "Indicador movido con éxito",
         showConfirmButton: false,
         timer: 1000
         });
       setTimeout(() => {
         location.reload();
       }, 1000);
     //  location.reload();
         //modalInstance.hide();
      },
      error: function(xhr, status, error) {
          alertabad();
          console.error(error);
      }
  });

}


function moverporpregunta33(folio, id_bienestar, id_indicador) {
  
  let  p1=$('#observaciongestor33').val();


if (p1 == '') {
    // Si no hay ningún checkbox seleccionado, muestra una alerta
    Swal.fire({
        position: "center",
        icon: "warning",
        title: "Debes ingresar información al campo información",
        showConfirmButton: true,
        confirmButtonText: "Aceptar"
    });
    return; // Detiene la ejecución de la función
}

$.ajax({
      url: '../../../moverporpregunta33',
      method: 'GET', // Cambiar a GET si estás usando GET
      data: {  folio: '<?= $folio ?>',
       id_bienestar:id_bienestar, 
       id_indicador:id_indicador, 
       usuario: '<?= Session::get('cedula')?>',
       p1:p1,
      }, // Envía los datos de manera plana
      dataType: 'json',
      success: function(data) {
       Swal.fire({
         position: "center",
         icon: "success",
         title: "Indicador movido con éxito",
         showConfirmButton: false,
         timer: 1000
         });
       setTimeout(() => {
         location.reload();
       }, 1000);
       //location.reload();
         //modalInstance.hide();
      },
      error: function(xhr, status, error) {
          alertabad();
          console.error(error);
      }
  });

}



function moverporpregunta37(folio, id_bienestar, id_indicador) {  //ffes
//console.log(folio, id_bienestar, id_indicador);
  let atLeastOneChecked = $('.psicosocial-input:checked').length > 0;

 if (!atLeastOneChecked) {
     // Si no hay ningún checkbox seleccionado, muestra una alerta
     Swal.fire({
         position: "center",
         icon: "warning",
         title: "Debes seleccionar al menos una opción",
         showConfirmButton: true,
         confirmButtonText: "Aceptar"
     });
     return; // Detiene la ejecución de la función
 }
  
           let  p1=$('#actividadesculturales57').attr('respuesta');
           let  p2=$('#actividadesculturales58').attr('respuesta');
           let  p3=$('#actividadesculturales59').attr('respuesta');
           let  p4=$('#actividadesculturales60').attr('respuesta');
           let  p5=$('#actividadesculturales61').attr('respuesta');
           let  p6=$('#actividadesculturales62').attr('respuesta');
           let  p7=$('#actividadesculturales63').attr('respuesta');
           let  p8=$('#actividadesculturales64').attr('respuesta');
           let  p9=$('#actividadesculturales65').attr('respuesta');
           let  p10=$('#actividadesculturales66').attr('respuesta');
          


            console.log({
                  p1,
                  p2,
                  p3,
                  p4,
                  p5,
                  p6,
                  p7,
                  p8,
                  p9,
                  p10
                
                
              });
    $.ajax({
               url: '../../../moverporpregunta37',
               method: 'GET', // Cambiar a GET si estás usando GET
               data: {  folio: '<?= $folio ?>',
                idintegrante: '<?= $integrante ?>',
                id_bienestar:id_bienestar, 
                id_indicador:id_indicador, 
                usuario: '<?= Session::get('cedula')?>',
                p1:p1,
                p2:p2,
                p3:p3,
                p4:p4,
                p5:p5,
                p6:p6,
                p7:p7,
                p8:p8,
                p9:p9,
                p10:p10,


               // observaciongestor:observaciongestor


               }, // Envía los datos de manera plana
               dataType: 'json',
               success: function(data) {
                Swal.fire({
                  position: "center",
                  icon: "success",
                  title: "Indicador movido con éxito",
                  showConfirmButton: false,
                  timer: 1000
                  });
                setTimeout(() => {
                  location.reload();
                }, 1000);
               // location.reload();
                  //modalInstance.hide();
               },
               error: function(xhr, status, error) {
                   alertabad();
                   console.error(error);
               }
           }); 

} 



function handleCheckboxChange() {
    // Selecciona todos los checkboxes con la clase 'psicosocial-input'
    const checkboxes = document.querySelectorAll('.psicosocial-input');

    // Comprueba si al menos uno está seleccionado
    const atLeastOneChecked = Array.from(checkboxes).some(checkbox => checkbox.checked);

    // Si al menos uno está seleccionado, elimina 'required' de todos
    checkboxes.forEach(checkbox => {
        if (atLeastOneChecked) {
            checkbox.removeAttribute('required');
        } else {
            checkbox.setAttribute('required', true);
        }
    });
}



function handleRadioChange(id) {
      console.log(`Cambiaste la selección al radio con ID: ${id}`);

      // Acción específica según el ID
      if (id === 'opcion1') {
        console.log('Opción 1 seleccionada');
        $('#checkseleccionado').val('Oportunidad no incluida en fichero');
        $('#nombreOportunidaddiv').css('display','');
        $('#telefonoContactodiv').css('display','');
      } else if (id === 'opcion2') {
        $('#checkseleccionado').val('Propios medios del hogar');
        $('#nombreOportunidaddiv').css('display','none');
        $('#telefonoContactodiv').css('display','none');
        $('#nombreOportunidad').val('');
        $('#telefonoContacto').val('');

      }
    }

</script>


<script>
function validateDisciplinaPositiva() {
    // Selecciona todos los checkboxes de disciplina positiva
    const checkboxes = document.querySelectorAll('.disciplinapositiva-input');
    // Verifica si al menos uno está seleccionado
    const atLeastOneChecked = Array.from(checkboxes).some(checkbox => checkbox.checked);

    // Si al menos uno está seleccionado, elimina 'required' de todos
    if (atLeastOneChecked) {
        checkboxes.forEach(checkbox => checkbox.removeAttribute('required'));
    } else {
        // Si ninguno está seleccionado, agrega 'required' a todos
        checkboxes.forEach(checkbox => checkbox.setAttribute('required', true));
    }
}
</script>

<script>
function updateRequiredTiempoLibre() {
    // Selecciona todos los checkboxes de tiempo libre
    const checkboxes = document.querySelectorAll('.tiempolibre-input');
    // Verifica si al menos uno está seleccionado
    const atLeastOneChecked = Array.from(checkboxes).some(checkbox => checkbox.checked);

    // Si al menos uno está seleccionado, elimina 'required' de todos
    if (atLeastOneChecked) {
        checkboxes.forEach(checkbox => checkbox.removeAttribute('required'));
    } else {
        // Si ninguno está seleccionado, agrega 'required' a todos
        checkboxes.forEach(checkbox => checkbox.setAttribute('required', true));
    }
}
</script>

<script>

function seleccionartipodemovimiento(){
      if($('#tipomovimientoindicadores').val() == 1){
        console.log('moverindicadorporgestor')
        $('#moverindicadorporgestor').css('display','');
        $('#moverindicadorporoportunidades').css('display','none');
        $('.moverindicadorporpreguntas').css('display','none');
        $('#moverindicadorporgestorfinal').css('display','none');
        $('#moverporcruce').css('display','none');
      };
      if($('#tipomovimientoindicadores').val() == 2){
        console.log('moverindicadorporoportunidades')
        $('#moverindicadorporoportunidades').css('display','');
        $('#moverindicadorporgestor').css('display','none');
        $('.moverindicadorporpreguntas').css('display','none');
        $('#moverindicadorporgestorfinal').css('display','none');
        $('#moverporcruce').css('display','none');
      };
      if($('#tipomovimientoindicadores').val() == 3){
        console.log('moverindicadorporpreguntas')
        $('.moverindicadorporpreguntas').css('display','');
        $('#moverindicadorporoportunidades').css('display','none');
        $('#moverindicadorporgestor').css('display','none');
        $('#moverindicadorporgestorfinal').css('display','none');
        $('#moverporcruce').css('display','none');
      };
      if($('#tipomovimientoindicadores').val() == 4){
        console.log('moverindicadorporgestorfinal')
        $('#moverindicadorporgestorfinal').css('display','');
        $('.moverindicadorporpreguntas').css('display','none');
        $('#moverindicadorporoportunidades').css('display','none');
        $('#moverindicadorporgestor').css('display','none');
        $('#moverporcruce').css('display','none');
      };

      if($('#tipomovimientoindicadores').val() == 5){
        console.log('cruce institucional')
        $('#moverindicadorporgestorfinal').css('display','none');
        $('.moverindicadorporpreguntas').css('display','none');
        $('#moverindicadorporoportunidades').css('display','none');
        $('#moverindicadorporgestor').css('display','none');
        $('#moverporcruce').css('display','');
      };
    }
     

    // function seleccionartipodemovimiento(){
    //   if($('#tipomovimientoindicadores').val() == 1){
    //     console.log('moverindicadorporgestor')
    //     $('#moverindicadorporgestor').css('display','');
    //     $('#moverindicadorporoportunidades').css('display','none');
    //     $('.moverindicadorporpreguntas').css('display','none');
    //     $('#moverindicadorporgestorfinal').css('display','none');
    //   };
    //   if($('#tipomovimientoindicadores').val() == 2){
    //     console.log('moverindicadorporoportunidades')
    //     $('#moverindicadorporoportunidades').css('display','');
    //     $('#moverindicadorporgestor').css('display','none');
    //     $('.moverindicadorporpreguntas').css('display','none');
    //     $('#moverindicadorporgestorfinal').css('display','none');
    //   };
    //   if($('#tipomovimientoindicadores').val() == 3){
    //     console.log('moverindicadorporpreguntas')
    //     $('.moverindicadorporpreguntas').css('display','');
    //     $('#moverindicadorporoportunidades').css('display','none');
    //     $('#moverindicadorporgestor').css('display','none');
    //     $('#moverindicadorporgestorfinal').css('display','none');
    //   };
    //   if($('#tipomovimientoindicadores').val() == 4){
    //     console.log('moverindicadorporgestorfinal')
    //     $('#moverindicadorporgestorfinal').css('display','');
    //     $('.moverindicadorporpreguntas').css('display','none');
    //     $('#moverindicadorporoportunidades').css('display','none');
    //     $('#moverindicadorporgestor').css('display','none');
    //   };
    // }
     
 
    function abrirSegundoModal(id_oportunidad) {
    var modalId = 'detalle-modal-' + id_oportunidad;
    var modalElement = document.getElementById(modalId);

    if (!modalElement) {
        console.error("❌ Error: No se encontró el modal con ID:", modalId);
        return;
    }

    // Abre el segundo modal sin cerrar el primero
    var segundoModal = new bootstrap.Modal(modalElement, { backdrop: 'static', keyboard: false });
    segundoModal.show();
}  
</script>

