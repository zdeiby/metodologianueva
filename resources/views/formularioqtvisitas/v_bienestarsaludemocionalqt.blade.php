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

  /* Centrar contenido del indicador */
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
              <a id="bienestarsaludemocionalqt" class="nav-link active">BIENESTAR SALUD-EMOCIONAL</a>
            </li>
            <li class="nav-item" role="presentation" style="cursor:pointer">
              <a id="legalqt" class="nav-link">BIENESTAR LEGAL</a>
            </li>
            <li class="nav-item" role="presentation" style="cursor:pointer">
              <a id="enfamiliaqt" class="nav-link">BIENESTAR EN FAMILIA</a>
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

                <span class="badge bg-primary" style="font-size:15px; background:#a80a85 !important">Salud y Bienestar</span>

                {{-- ===== SALUD Y BIENESTAR (1–6) condicional + autowidth ===== --}}
                @php
                  $sbCount = 0;
                  if($indicador_bse_1=='0') $sbCount++;
                  if($indicador_bse_2=='0') $sbCount++;
                  if($indicador_bse_3=='0') $sbCount++;
                  if($indicador_bse_4=='0') $sbCount++;
                  if($indicador_bse_5=='0') $sbCount++;
                  if($indicador_bse_6=='0') $sbCount++;
                  $sbVisible = $sbCount > 0;
                  $sbCol = ($sbCount==1) ? 'col-12' : 'col-12 col-md-6';
                @endphp

                @if($sbVisible)
                  <div class="container mt-4">
                    <div class="border">
                      <!-- título -->
                      <div class="row g-0">
                        <div class="col-md-12 d-flex align-items-center border-end border-bottom text-center" style="background:#2fa4e7;color:white;font-weight:bold">
                          <div class="p-2">INDICADOR</div>
                        </div>
                      </div>

                      <!-- grid auto-wrap (2 por fila; si hay 1 => ancho completo) -->
                      <div class="row g-0">
                        @if($indicador_bse_1=='0')
                          <div class="{{ $sbCol }} p-2">
                            <div class="row g-0" id="indicadorbse1">
                              <div class="col-md-12 d-flex align-items-center border-end border-bottom">
                                <div class="p-2">
                                  Los integrantes de la familia están afiliados al Sistema General de Seguridad Social en Salud – SGSS-
                                  @if($vista != '1')
                                  <div class="text-center mt-3">
                                    <div class="btn btn-success" onclick="abrirmodal('<?= $indicadores_tabla[0]->id_bienestar ?>','<?= $indicadores_tabla[0]->id_subcategoria ?>','<?= $indicadores_tabla[0]->id_indicador ?>')">Mover Indicador</div>
                                  </div>
                                  @endif
                                </div>
                              </div>
                            </div>
                          </div>
                        @endif

                        @if($indicador_bse_2=='0')
                          <div class="{{ $sbCol }} p-2">
                            <div class="row g-0" id="indicadorbse2">
                              <div class="col-md-12 d-flex align-items-center border-end border-bottom">
                                <div class="p-2">
                                  Los integrantes del hogar tienen acceso a intervenciones de promoción y prevención en salud dentro del marco del SGSSS, adaptadas a su edad
                                  @if($vista != '1')
                                  <div class="text-center mt-3">
                                    <div class="btn btn-success" onclick="abrirmodal('<?= $indicadores_tabla[1]->id_bienestar ?>','<?= $indicadores_tabla[1]->id_subcategoria ?>','<?= $indicadores_tabla[1]->id_indicador ?>')">Mover Indicador</div>
                                  </div>
                                  @endif
                                </div>
                              </div>
                            </div>
                          </div>
                        @endif

                        @if($indicador_bse_3=='0')
                          <div class="{{ $sbCol }} p-2">
                            <div class="row g-0" id="indicadorbse3">
                              <div class="col-md-12 d-flex align-items-center border-end border-bottom">
                                <div class="p-2">
                                  Los integrantes del hogar implementan estrategias para  reducir el estrés y  para favorecer el bienestar emocional y fisico
                                  @if($vista != '1')
                                  <div class="text-center mt-3">
                                    <div class="btn btn-success" onclick="abrirmodal('<?= $indicadores_tabla[2]->id_bienestar ?>','<?= $indicadores_tabla[2]->id_subcategoria ?>','<?= $indicadores_tabla[2]->id_indicador ?>')">Mover Indicador</div>
                                  </div>
                                  @endif
                                </div>
                              </div>
                            </div>
                          </div>
                        @endif

                        @if($indicador_bse_4=='0')
                          <div class="{{ $sbCol }} p-2">
                            <div class="row g-0" id="indicadorbse4">
                              <div class="col-md-12 d-flex align-items-center border-end border-bottom">
                                <div class="p-2">
                                  Las personas con discapacidad acceden a programas y/o servicios relacionados con su tipo de discapacidad
                                  @if($vista != '1')
                                  <div class="text-center mt-3">
                                    <div class="btn btn-success" onclick="abrirmodal('<?= $indicadores_tabla[3]->id_bienestar ?>','<?= $indicadores_tabla[3]->id_subcategoria ?>','<?= $indicadores_tabla[3]->id_indicador ?>')">Mover Indicador</div>
                                  </div>
                                  @endif
                                </div>
                              </div>
                            </div>
                          </div>
                        @endif

                        @if($indicador_bse_5=='0')
                          <div class="{{ $sbCol }} p-2">
                            <div class="row g-0" id="indicadorbse5">
                              <div class="col-md-12 d-flex align-items-center border-end border-bottom">
                                <div class="p-2">
                                  Los integrantes del hogar que lo requieren acceden  a programas y/o servicios de intervención frente al consumo de sustancias psicoactivas
                                  @if($vista != '1')
                                  <div class="text-center mt-3">
                                    <div class="btn btn-success" onclick="abrirmodal('<?= $indicadores_tabla[4]->id_bienestar ?>','<?= $indicadores_tabla[4]->id_subcategoria ?>','<?= $indicadores_tabla[4]->id_indicador ?>')">Mover Indicador</div>
                                  </div>
                                  @endif
                                </div>
                              </div>
                            </div>
                          </div>
                        @endif

                        @if($indicador_bse_6=='0')
                          <div class="{{ $sbCol }} p-2">
                            <div class="row g-0" id="indicadorbse6">
                              <div class="col-md-12 d-flex align-items-center border-end border-bottom">
                                <div class="p-2">
                                  Los integrantes del hogar que lo requieren acceden a servicios de salud mental  y/o atención psicosocial.
                                  @if($vista != '1')
                                  <div class="text-center mt-3">
                                    <div class="btn btn-success" onclick="abrirmodal('<?= $indicadores_tabla[5]->id_bienestar ?>','<?= $indicadores_tabla[5]->id_subcategoria ?>','<?= $indicadores_tabla[5]->id_indicador ?>')">Mover Indicador</div>
                                  </div>
                                  @endif
                                </div>
                              </div>
                            </div>
                          </div>
                        @endif
                      </div><!-- /row -->
                    </div><!-- /border -->
                  </div><!-- /container -->
                @else
                  <div class="alert alert-success text-center mt-3">
                    No tienes indicadores en rojo en este bienestar. Pasa al siguiente bienestar.
                  </div>
                @endif
                {{-- ===== FIN SALUD Y BIENESTAR ===== --}}

                {{-- ===== NUTRICIÓN (7) => solo si aplica ===== --}}
                @if((($indicador_bse_7 == '0') && $representante == 'SI'))
                  <span class="badge bg-primary" style="font-size:15px; background:#ff8403 !important">Nutrición</span>
                  <div class="border">
                    <div class="row g-0">
                      <div class="col-md-12 d-flex align-items-center border-end border-bottom text-center" style="background:#2fa4e7; color:white; font-weight:bold">
                        <div class="p-2">INDICADOR</div>
                      </div>
                    </div>
                    <div class="row g-0" id="indicadorbse7">
                      <div class="col-md-12 d-flex align-items-center border-end border-bottom">
                        <div class="p-2">
                          Todos los integrantes del hogar cuentan el  acceso y consumo oportuno de alimentos 
                          @if($vista != '1')
                          <div class="text-center"><br>
                            <div class="btn btn-success" onclick="abrirmodalhogar('<?= $indicadores_tabla[6]->id_bienestar ?>','<?= $indicadores_tabla[6]->id_subcategoria ?>','<?= $indicadores_tabla[6]->id_indicador ?>')">Mover Indicador</div>
                          </div>
                          @endif
                        </div>
                      </div>
                    </div>
                  </div>
                @endif
                {{-- ===== FIN NUTRICIÓN ===== --}}

                @if ($metodologia == 2)
                  {{-- ===== FFES SALUD Y BIENESTAR (8) => ocultar por completo si no hay ===== --}}
                  @if($indicador_bse_8=='0')
                    <hr>
                    <span class="badge bg-primary" style="font-size:15px; background:#a80a85 !important">FFES</span>
                    <hr>
                    <span class="badge bg-primary" style="font-size:15px; background:#ff8403 !important">SALUD Y BIENESTAR</span>
                    <div class="border">
                      <div class="row g-0">
                        <div class="col-md-12 d-flex align-items-center border-end border-bottom text-center" style="background:#2fa4e7;color:white;font-weight:bold">
                          <div class="p-2">INDICADOR</div>
                        </div>
                      </div>
                      <div class="row g-0" id="indicadorbse8">
                        <div class="col-md-12 d-flex align-items-center border-end border-bottom">
                          <div class="p-2">
                            Los Niños, Niñas y adolescentes del hogar implementan estrategias para reducir el estrés y favorecer el bienestar emocional y físico
                            @if($vista != '1')
                            <div class="text-center"><br>
                              <div class="btn btn-success" onclick="abrirmodal('<?= $indicadores_tabla[34]->id_bienestar ?>','<?= $indicadores_tabla[34]->id_subcategoria ?>','<?= $indicadores_tabla[34]->id_indicador ?>')">Mover Indicador</div>
                            </div>
                            @endif
                          </div>
                        </div>
                      </div>
                    </div>
                  @endif

                  {{-- ===== FACTORES DE RIESGO PSICOSOCIAL (9) ===== --}}
                  @if((($indicador_bse_9 == '0') && $representante == 'SI'))
                    <hr>
                    <span class="badge bg-primary" style="font-size:15px; background:#ff8403 !important">FACTORES DE RIESGO PSICOSOCIAL</span>
                    <div class="border">
                      <div class="row g-0">
                        <div class="col-md-12 d-flex align-items-center border-end border-bottom text-center" style="background:#2fa4e7; color:white; font-weight:bold">
                          <div class="p-2">INDICADOR</div>
                        </div>
                      </div>
                      <div class="row g-0" id="indicadorbse9">
                        <div class="col-md-12 d-flex align-items-center border-end border-bottom">
                          <div class="p-2">
                            Los niños, niñas y adolescentes del hogar expuestos a factores de amenaza, riesgo o vulneración de derechos reconocen y acceden a los servicios de protección y atención.
                            @if($vista != '1')
                            <div class="text-center"><br>
                              <div class="btn btn-success" onclick="abrirmodalhogar('<?= $indicadores_tabla[35]->id_bienestar ?>','<?= $indicadores_tabla[35]->id_subcategoria ?>','<?= $indicadores_tabla[35]->id_indicador ?>')">Mover Indicador</div>
                            </div>
                            @endif
                          </div>
                        </div>
                      </div>
                    </div>
                  @endif

                  {{-- ===== SALUD MENTAL (10) ===== --}}
                  @if((($indicador_bse_10 == '0') && $representante == 'SI'))
                    <hr>
                    <span class="badge bg-primary" style="font-size:15px; background:#ff8403 !important">SALUD MENTAL</span>
                    <div class="border">
                      <div class="row g-0">
                        <div class="col-md-12 d-flex align-items-center border-end border-bottom text-center" style="background:#2fa4e7; color:white; font-weight:bold">
                          <div class="p-2">INDICADOR</div>
                        </div>
                      </div>
                      <div class="row g-0" id="indicadorbse10">
                        <div class="col-md-12 d-flex align-items-center border-end border-bottom">
                          <div class="p-2">
                            Los niños, niñas y adolescentes del hogar con necesidades en la salud mental reciben tratamiento oportuno y adecuado en servicios de salud mental.
                            @if($vista != '1')
                            <div class="text-center"><br>
                              <div class="btn btn-success" onclick="abrirmodalhogar('<?= $indicadores_tabla[36]->id_bienestar ?>','<?= $indicadores_tabla[36]->id_subcategoria ?>','<?= $indicadores_tabla[36]->id_indicador ?>')">Mover Indicador</div>
                            </div>
                            @endif
                          </div>
                        </div>
                      </div>
                    </div>
                  @endif
                @endif
                {{-- ===== FIN BLOQUES CONDICIONALES ===== --}}

                <hr>
                <div class="row">
                  <div class="text-start col">
                    <?php
                      $boton = '';
                      if ($vista == '1') {
                          $boton = '<div class="btn btn-outline-success" onclick="redirectToIntegrantes()" style="display:none" >Volver</div>';
                      } elseif (in_array($vista, ['200','300','400','500','600'])) {
                          $boton = '<div class="btn btn-outline-success" onclick="redirectEspecial()" style="display:none" >Volver</div>';
                      } else {
                          $boton = '<div class="btn btn-outline-success" onclick="redirectToIntegrantes2()" style="display:none" >Volver</div>';
                      }
                      echo $boton;
                    ?>
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



<div id="modal"></div>
<div id="modal2"></div>
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
    <script>
    



      $('#siguiente').click(function(){
        var url = "../../../legalqtvisita/<?= $variable ?>/<?= $integrantecodificado ?>/<?= $vista ?>"; window.location.href = url;
      }); 
      function redirectToIntegrantes() {
           var folio = `<?=$variable ?>`;
           var url = "../../../cardsqt/:folio";
           url = url.replace(':folio', folio);
           window.location.href = url;
       }

       function redirectToIntegrantes2() {
           var folio = `<?=encrypt($folio) ?>`;
           var url = "../../../rombo/:folio";
           url = url.replace(':folio', folio);
           window.location.href = url;
       }

       function redirectEspecial() {
        var vista = `<?= $vista ?>`;
        var url = `http://localhost/metodologia/public/cardsqtvisitas/DbDVN3RYel/${vista}`;
        window.location.href = url;
    }
    
    
       $('#volver2').click(function(){
        redirectToIntegrantes2()
      });

      $('#volver').click(function(){
        redirectToIntegrantes()
      });


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
        'indicadorbse1_1': { isNone: false },
        'indicadorbse1_2': { isNone: false },
        'indicadorbse1_3': { isNone: false },
        'indicadorbse2_1': { isNone: false },
        'indicadorbse2_2': { isNone: false },
        'indicadorbse2_3': { isNone: false },
        'indicadorbse3_1': { isNone: false },
        'indicadorbse3_2': { isNone: false },
        'indicadorbse3_3': { isNone: false },
        'indicadorbse4_1': { isNone: false },
        'indicadorbse4_2': { isNone: false },
        'indicadorbse4_3': { isNone: false },
        'indicadorbse5_1': { isNone: false },
        'indicadorbse5_2': { isNone: false },
        'indicadorbse5_3': { isNone: false },
        'indicadorbse6_1': { isNone: false },
        'indicadorbse6_2': { isNone: false },
        'indicadorbse6_3': { isNone: false },
        'indicadorbse7_1': { isNone: false },
        'indicadorbse7_2': { isNone: false },

        'indicadorbse8_1': { isNone: false },
        'indicadorbse8_2': { isNone: false },
        'indicadorbse8_3': { isNone: false },
        'indicadorbse8_4': { isNone: false },

        'indicadorbse9_1': { isNone: false },
        'indicadorbse9_2': { isNone: false },
        'indicadorbse9_3': { isNone: false },

        'indicadorbse10_1': { isNone: false },
        'indicadorbse10_2': { isNone: false },
        'indicadorbse10_3': { isNone: false },


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
    checkAndSetSwitchValues('indicadorbse1');
    checkAndSetSwitchValues('indicadorbse2');
    checkAndSetSwitchValues('indicadorbse3');
    checkAndSetSwitchValues('indicadorbse4');
    checkAndSetSwitchValues('indicadorbse5');
    checkAndSetSwitchValues('indicadorbse6');
    checkAndSetSwitchValues('indicadorbse7');
    checkAndSetSwitchValues('indicadorbse8');
    checkAndSetSwitchValues('indicadorbse9');
    checkAndSetSwitchValues('indicadorbse10');


    // Configuración del observador para ambos divs
    var observer1 = createObserver('indicadorbse1');
    var observer2 = createObserver('indicadorbse2');
    var observer2 = createObserver('indicadorbse3');
    var observer2 = createObserver('indicadorbse4');
    var observer2 = createObserver('indicadorbse5');
    var observer2 = createObserver('indicadorbse6');
    var observer2 = createObserver('indicadorbse7');
    var observer2 = createObserver('indicadorbse8');
    var observer2 = createObserver('indicadorbse9');
    var observer2 = createObserver('indicadorbse10');


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
                  initializeCheckboxes();
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
                  initializeCheckboxes4();
                 // $('#siguiente').css('display','');
                   // alertagood();
                   $('#modal2').html(data.modal2);



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


function initializeCheckboxes() {
    const checkboxes = document.querySelectorAll('#container-psicosocial2 .form-check-input');
    const noImplementaNingunaCheckbox = document.querySelector('#psicosocial2347'); // ID del checkbox "No implementa ninguna"

    checkboxes.forEach((checkbox) => {
        // Inicializar todos los checkboxes con valor "NO"
        checkbox.setAttribute('respuesta', 'NO');
        checkbox.checked = false;

        // Cambiar valor al seleccionar/deseleccionar
        checkbox.addEventListener('change', function () {
            if (checkbox.id === 'psicosocial2347' && checkbox.checked) {
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
    const checkboxes = document.querySelectorAll('#container-psicosocial3 .form-check-input');
    const noImplementaNingunaCheckbox = document.querySelector('#psicosocial317'); // ID del checkbox "No implementa ninguna"

    checkboxes.forEach((checkbox) => {
        // Inicializar todos los checkboxes con valor "NO"
        checkbox.setAttribute('respuesta', 'NO');
        checkbox.checked = false;

        // Cambiar valor al seleccionar/deseleccionar
        checkbox.addEventListener('change', function () {
            if (checkbox.id === 'psicosocial317' && checkbox.checked) {
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

function initializeCheckboxes4() {
    const checkboxes = document.querySelectorAll('#container-factoresamenaza .form-check-input');
    const noImplementaNingunaCheckbox = document.querySelector('#factoresamenaza35'); // ID del checkbox "No implementa ninguna"

    checkboxes.forEach((checkbox) => {
        // Inicializar todos los checkboxes con valor "NO"
        checkbox.setAttribute('respuesta', 'NO');
        checkbox.checked = false;

        // Cambiar valor al seleccionar/deseleccionar
        checkbox.addEventListener('change', function () {
            if (checkbox.id === 'factoresamenaza35' && checkbox.checked) {
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


function moverporpregunta13(folio, id_bienestar, id_indicador) {

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
  
           let  p1=$('#psicosocial292').attr('respuesta');
           let  p2=$('#psicosocial293').attr('respuesta');
           let  p3=$('#psicosocial294').attr('respuesta');
           let  p4=$('#psicosocial295').attr('respuesta');
           let  p5=$('#psicosocial296').attr('respuesta');
           let  p6=$('#psicosocial297').attr('respuesta');
           let  p7=$('#psicosocial298').attr('respuesta');
           let  p8=$('#psicosocial299').attr('respuesta');
           let  p9=$('#psicosocial2100').attr('respuesta');
           let  p10=$('#psicosocial2101').attr('respuesta');
           let  p11=$('#psicosocial2102').attr('respuesta');
           let  p12=$('#psicosocial2103').attr('respuesta');
           let  p13=$('#psicosocial2104').attr('respuesta');
           let  p14=$('#psicosocial2105').attr('respuesta');
           let  p15=$('#psicosocial2106').attr('respuesta');
           let  p16=$('#psicosocial2347').attr('respuesta');

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
                  p10,
                  p11,
                  p12,
                  p13,
                  p14,
                  p15,
                  p16
              });
   $.ajax({
               url: '../../../moverporpregunta13',
               method: 'GET', // Cambiar a GET si estás usando GET
               data: {  folio: '<?= $folio ?>',
                idintegrante: '<?= $integrante ?>',
                id_bienestar:id_bienestar, 
                id_indicador:id_indicador, 
                usuario: '<?= Session::get('cedula')?>',
                edad:'<?= $edad ?>',
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
                p11:p11,
                p12:p12,
                p13:p13,
                p14:p14,
                p15:p15,
                p16:p16,
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


function moverporpregunta17(folio, id_bienestar, id_indicador) {
 
  let  p1=$('#numerocomidas').val();
  let  p2=$('#accesibilidadalimentos2').val();
  let  p3=$('#accesibilidad').val();

  if (p1 == '' || p2 == ''  || p3 == ''  ) {
    // Si no hay ningún checkbox seleccionado, muestra una alerta
    Swal.fire({
        position: "center",
        icon: "warning",
        title: "Debes Seleccionar todas las opciones",
        showConfirmButton: true,
        confirmButtonText: "Aceptar"
    });
    return; // Detiene la ejecución de la función
}


$.ajax({
      url: '../../../moverporpregunta17',
      method: 'GET', // Cambiar a GET si estás usando GET
      data: {  folio: '<?= $folio ?>',
      
       id_bienestar:id_bienestar, 
       id_indicador:id_indicador, 
       usuario: '<?= Session::get('cedula')?>',
       p1:p1,
       p2:p2,
       p3:p3,

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


function moverporpregunta18(folio, id_bienestar, id_indicador) {  //ffes
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
  
           let  p1=$('#psicosocial32').attr('respuesta');
           let  p2=$('#psicosocial33').attr('respuesta');
           let  p3=$('#psicosocial34').attr('respuesta');
           let  p4=$('#psicosocial35').attr('respuesta');
           let  p5=$('#psicosocial36').attr('respuesta');
           let  p6=$('#psicosocial37').attr('respuesta');
           let  p7=$('#psicosocial38').attr('respuesta');
           let  p8=$('#psicosocial39').attr('respuesta');
           let  p9=$('#psicosocial310').attr('respuesta');
           let  p10=$('#psicosocial311').attr('respuesta');
           let  p11=$('#psicosocial312').attr('respuesta');
           let  p12=$('#psicosocial313').attr('respuesta');
           let  p13=$('#psicosocial314').attr('respuesta');
           let  p14=$('#psicosocial315').attr('respuesta');
           let  p15=$('#psicosocial316').attr('respuesta');
           let  p16=$('#psicosocial317').attr('respuesta');
           let  p17=$('#psicosocial318').attr('respuesta');


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
                  p10,
                  p11,
                  p12,
                  p13,
                  p14,
                  p15,
                  p16,
                  p17
              });
    $.ajax({
               url: '../../../moverporpregunta18',
               method: 'GET', // Cambiar a GET si estás usando GET
               data: {  folio: '<?= $folio ?>',
                idintegrante: '<?= $integrante ?>',
                id_bienestar:id_bienestar, 
                id_indicador:id_indicador, 
                usuario: '<?= Session::get('cedula')?>',
                edad:'<?= $edad ?>',
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
                p11:p11,
                p12:p12,
                p13:p13,
                p14:p14,
                p15:p15,
                p16:p16,
                p17:p17,
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


function moverporpregunta19(folio, id_bienestar, id_indicador) {  //ffes
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
  
           let  p1=$('#factoresamenaza25').attr('respuesta');
           let  p2=$('#factoresamenaza26').attr('respuesta');
           let  p3=$('#factoresamenaza27').attr('respuesta');
           let  p4=$('#factoresamenaza28').attr('respuesta');
           let  p5=$('#factoresamenaza29').attr('respuesta');
           let  p6=$('#factoresamenaza30').attr('respuesta');
           let  p7=$('#factoresamenaza31').attr('respuesta');
           let  p8=$('#factoresamenaza32').attr('respuesta');
           let  p9=$('#factoresamenaza33').attr('respuesta');
           let  p10=$('#factoresamenaza34').attr('respuesta');
           let  p11=$('#factoresamenaza35').attr('respuesta');
          


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
                  p10,
                  p11,
                
              });
    $.ajax({
               url: '../../../moverporpregunta19',
               method: 'GET', // Cambiar a GET si estás usando GET
               data: {  folio: '<?= $folio ?>',
                idintegrante: '<?= $integrante ?>',
                id_bienestar:id_bienestar, 
                id_indicador:id_indicador, 
                usuario: '<?= Session::get('cedula')?>',
                edad:'<?= $edad ?>',
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
                p11:p11,

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




function moverporpregunta110(folio, id_bienestar, id_indicador) {
 
  let  p1=$('#saludmentalninospresenta').val();
  let  p2=$('#saludmentalninosaccedio').val();
  //let  p3=$('#accesibilidad').val();

  if (p1 == '' || p2 == '' ) {
    // Si no hay ningún checkbox seleccionado, muestra una alerta
    Swal.fire({
        position: "center",
        icon: "warning",
        title: "Debes Seleccionar todas las opciones",
        showConfirmButton: true,
        confirmButtonText: "Aceptar"
    });
    return; // Detiene la ejecución de la función
}


$.ajax({
      url: '../../../moverporpregunta110',
      method: 'GET', // Cambiar a GET si estás usando GET
      data: {  folio: '<?= $folio ?>',
      
       id_bienestar:id_bienestar, 
       id_indicador:id_indicador, 
       usuario: '<?= Session::get('cedula')?>',
       p1:p1,
       p2:p2,

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




     

</script>


<script>
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
