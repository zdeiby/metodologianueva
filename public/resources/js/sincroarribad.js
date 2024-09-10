
function t1_principalhogard(){
    iniciarContador();
    actualizarTabla('t1_principalhogar', 'Descarga base de datos en blanco', '1');
$.ajax({
                url:'./t1_principalhogard',
                method: "GET",
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('7%');
                  $('#barracarga').css('width','7%');
                 actualizarTabla('t1_principalhogar', 'Descarga base de datos en blanco', '2');
                 t1_hogarcondicionesalimentariasd()
                  
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_principalhogard', 'Descarga base de datos en blanco', '3');
                      reintentarfuncion(t1_principalhogard, 't1_principalhogard');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_hogarcondicionesalimentariasd(){
    actualizarTabla('t1_hogarcondicionesalimentarias', 'Descarga base de datos en blanco', '1');
$.ajax({
                url:'./t1_hogarcondicionesalimentariasd',
                method: "GET",
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('14%');
                  $('#barracarga').css('width','14%');
                  actualizarTabla('t1_hogarcondicionesalimentarias', 'Descarga base de datos en blanco', '2');
                 t1_hogarcondicioneshabitabilidadd()
                  
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_hogarcondicionesalimentarias', 'Descarga base de datos en blanco', '3');
                      reintentarfuncion(t1_hogarcondicionesalimentariasd, 't1_hogarcondicionesalimentarias');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_hogarcondicioneshabitabilidadd(){
    actualizarTabla('t1_hogarcondicioneshabitabilidad', 'Descarga base de datos en blanco', '1');
$.ajax({
                url:'./t1_hogarcondicioneshabitabilidadd',
                method: "GET",
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('21%');
                  $('#barracarga').css('width','21%');
                  actualizarTabla('t1_hogarcondicioneshabitabilidad', 'Descarga base de datos en blanco', '2');
                 t1_hogarconformacionfamiliard()
                  
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_hogarcondicioneshabitabilidad', 'Descarga base de datos en blanco', '3');
                      reintentarfuncion(t1_hogarcondicioneshabitabilidadd, 't1_hogarcondicioneshabitabilidad');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_hogarconformacionfamiliard(){
    actualizarTabla('t1_hogarconformacionfamiliar', 'Descarga base de datos en blanco', '1');
$.ajax({
                url:'./t1_hogarconformacionfamiliard',
                method: "GET",
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('28%');
                  $('#barracarga').css('width','28%');
                  actualizarTabla('t1_hogarconformacionfamiliar', 'Descarga base de datos en blanco', '2');
                  t1_hogardatosgeograficosd()
                  
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_hogarconformacionfamiliar', 'Descarga base de datos en blanco', '3');
                      reintentarfuncion(t1_hogarconformacionfamiliard, 't1_hogarconformacionfamiliar');
                          console.log(xhr.responseText);
                      }
              })
}



function t1_hogardatosgeograficosd(){
    actualizarTabla('t1_hogardatosgeograficos', 'Descarga base de datos en blanco', '1');
$.ajax({
                url:'./t1_hogardatosgeograficosd',
                method: "GET",
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('35%');
                  $('#barracarga').css('width','35%');
                  actualizarTabla('t1_hogardatosgeograficos', 'Descarga base de datos en blanco', '2');
                 t1_hogarentornofamiliard()
                  
                },
                error: function(xhr, status, error) {
                 actualizarTabla('t1_hogardatosgeograficos', 'Descarga base de datos en blanco', '3');
                      reintentarfuncion(t1_hogardatosgeograficosd, 't1_hogardatosgeograficos');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_hogarentornofamiliard(){
    actualizarTabla('t1_hogarentornofamiliar', 'Descarga base de datos en blanco', '1');
$.ajax({
                url:'./t1_hogarentornofamiliard',
                method: "GET",
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('42%');
                  $('#barracarga').css('width','42%');
                  actualizarTabla('t1_hogarentornofamiliar', 'Descarga base de datos en blanco', '2');
                 t1_integrantesfinancierod()
                  
                },
                error: function(xhr, status, error) {
                actualizarTabla('t1_hogarentornofamiliar', 'Descarga base de datos en blanco', '3');
                      reintentarfuncion(t1_hogarentornofamiliard, 't1_hogarentornofamiliar');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_integrantesfinancierod(){
    actualizarTabla('t1_integrantesfinanciero', 'Descarga base de datos en blanco', '1');
$.ajax({
                url:'./t1_integrantesfinancierod',
                method: "GET",
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('49%');
                  $('#barracarga').css('width','49%');
                  actualizarTabla('t1_integrantesfinanciero', 'Descarga base de datos en blanco', '2');
                 t1_integrantesfisicoyemocionald()
                  
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_integrantesfinanciero', 'Descarga base de datos en blanco', '3');
                      reintentarfuncion(t1_integrantesfinancierod, 't1_integrantesfinanciero');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_integrantesfisicoyemocionald(){
    actualizarTabla('t1_integrantesfisicoyemocional', 'Descarga base de datos en blanco', '1');
$.ajax({
                url:'./t1_integrantesfisicoyemocionald',
                method: "GET",
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('56%');
                  $('#barracarga').css('width','56%');
                  actualizarTabla('t1_integrantesfisicoyemocional', 'Descarga base de datos en blanco', '2');
                 t1_integranteshogard()
                  
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_integrantesfisicoyemocional', 'Descarga base de datos en blanco', '3');
                      reintentarfuncion(t1_integrantesfisicoyemocionald, 't1_integrantesfisicoyemocional');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_integranteshogard(){
    actualizarTabla('t1_integranteshogar', 'Descarga base de datos en blanco', '1');
$.ajax({
                url:'./t1_integranteshogard',
                method: "GET",
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('63%');
                  $('#barracarga').css('width','63%');
                  actualizarTabla('t1_integranteshogar', 'Descarga base de datos en blanco', '2');
                 t1_integrantesidentitariod()
                  
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_integranteshogar', 'Descarga base de datos en blanco', '3');
                      reintentarfuncion(t1_integranteshogard, 't1_integranteshogar');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_integrantesidentitariod(){
    actualizarTabla('t1_integrantesidentitario', 'Descarga base de datos en blanco', '1');
$.ajax({
                url:'./t1_integrantesidentitariod',
                method: "GET",
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('70%');
                  $('#barracarga').css('width','70%');
                  actualizarTabla('t1_integrantesidentitario', 'Descarga base de datos en blanco', '2');
                  t1_integrantesintelectuald()
                  
                },
                error: function(xhr, status, error) {
                actualizarTabla('t1_integrantesidentitario', 'Descarga base de datos en blanco', '3');
                      reintentarfuncion(t1_integrantesidentitariod, 't1_integrantesidentitario');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_integrantesintelectuald(){
    actualizarTabla('t1_integrantesintelectual', 'Descarga base de datos en blanco', '1');
$.ajax({
                url:'./t1_integrantesintelectuald',
                method: "GET",
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('80%');
                  $('#barracarga').css('width','80%');
                  actualizarTabla('t1_integrantesintelectual', 'Descarga base de datos en blanco', '2');
                 t1_integranteslegald()
                  
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_integrantesintelectual', 'Descarga base de datos en blanco', '3');
                      reintentarfuncion(t1_integrantesintelectuald, 't1_integrantesintelectual');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_integranteslegald(){
    actualizarTabla('t1_integranteslegal', 'Descarga base de datos en blanco', '1');
$.ajax({
                url:'./t1_integranteslegald',
                method: "GET",
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
                  actualizarTabla('t1_integranteslegal', 'Descarga base de datos en blanco', '2');
                  t1_privacion1d();      
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_integranteslegal', 'Descarga base de datos en blanco', '3');
                      reintentarfuncion(t1_integranteslegald, 't1_integranteslegal');
                          console.log(xhr.responseText);
                      }
              })
}




function t1_privacion1d(){
    actualizarTabla('t1_privacion1', 'Descarga base de datos en blanco', '1');
    let tabla= 't1_privacion1';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
                  actualizarTabla('t1_privacion1', 'Descarga base de datos en blanco', '2');
                  t1_casillamatrizd()                   
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_privacion1', 'Descarga base de datos en blanco', '3');
                      reintentarfuncion(t1_integranteslegald, 't1_privacion1');
                          console.log(xhr.responseText);
                      }
              })
}






function t1_casillamatrizd(){
    actualizarTabla('t1_casillamatriz', 'Descarga base de datos en blanco', '1');
    let tabla= 't1_casillamatriz';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
                  actualizarTabla('t1_casillamatriz', 'Descarga base de datos en blanco', '2');
                         t1_indicador_bl_2d()              
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_casillamatriz', 'Descarga base de datos en blanco', '3');
                      reintentarfuncion(t1_privacion1d, 't1_casillamatriz');
                          console.log(xhr.responseText);
                      }
              })
}


function t1_indicador_bl_2d(){
    actualizarTabla('t1_indicador_bl_2', 'Descarga base de datos en blanco', '1');
    let tabla= 't1_indicador_bl_2';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
                  actualizarTabla('t1_indicador_bl_2', 'Descarga base de datos en blanco', '2');
                         t1_indicador_bl_3d()              
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_casillamatriz', 'Descarga base de datos en blanco', '3');
                      reintentarfuncion(t1_casillamatrizd, 't1_indicador_bl_2');
                          console.log(xhr.responseText);
                      }
              })
}
function t1_indicador_bl_3d(){
    actualizarTabla('t1_indicador_bl_3', 'Descarga base de datos en blanco', '1');
    let tabla= 't1_indicador_bl_3';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
                  actualizarTabla('t1_indicador_bl_3', 'Descarga base de datos en blanco', '2');
                     t1_indicador_bl_5d()                  
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicador_bl_3', 'Descarga base de datos en blanco', '3');
                      reintentarfuncion(t1_indicador_bl_2d, 't1_indicador_bl_3');
                          console.log(xhr.responseText);
                      }
              })
}
function t1_indicador_bl_5d(){
    actualizarTabla('t1_indicador_bl_5', 'Descarga base de datos en blanco', '1');
    let tabla= 't1_indicador_bl_5';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
                  actualizarTabla('t1_indicador_bl_5', 'Descarga base de datos en blanco', '2');
                      t1_indicador_bse_1d();                 
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicador_bl_5', 'Descarga base de datos en blanco', '3');
                      reintentarfuncion(t1_indicador_bl_3d, 't1_indicador_bl_5');
                          console.log(xhr.responseText);
                      }
              })
}
function t1_indicador_bse_1d(){
    actualizarTabla('t1_indicador_bse_1', 'Descarga base de datos en blanco', '1');
    let tabla= 't1_indicador_bse_1';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
                  actualizarTabla('t1_indicador_bse_1', 'Descarga base de datos en blanco', '2');
                        t1_indicador_bse_4d();               
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicador_bse_1', 'Descarga base de datos en blanco', '3');
                      reintentarfuncion(t1_indicador_bl_5d, 't1_indicador_bse_1');
                          console.log(xhr.responseText);
                      }
              })
}
function t1_indicador_bse_4d(){
    actualizarTabla('t1_indicador_bse_4', 'Descarga base de datos en blanco', '1');
    let tabla= 't1_indicador_bse_4';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
                  actualizarTabla('t1_indicador_bse_4', 'Descarga base de datos en blanco', '2');
                      t1_indicador_bse_5d();                 
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicador_bse_4', 'Descarga base de datos en blanco', '3');
                      reintentarfuncion(t1_indicador_bse_1d, 't1_indicador_bse_4');
                          console.log(xhr.responseText);
                      }
              })
}
function t1_indicador_bse_5d(){
    actualizarTabla('t1_indicador_bse_5', 'Descarga base de datos en blanco', '1');
    let tabla= 't1_indicador_bse_5';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
                  actualizarTabla('t1_indicador_bse_5', 'Descarga base de datos en blanco', '2');
                          t1_indicador_bse_6d();             
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicador_bse_5', 'Descarga base de datos en blanco', '3');
                      reintentarfuncion(t1_indicador_bse_4d, 't1_indicador_bse_5');
                          console.log(xhr.responseText);
                      }
              })
}
function t1_indicador_bse_6d(){
    actualizarTabla('t1_indicador_bse_6', 'Descarga base de datos en blanco', '1');
    let tabla= 't1_indicador_bse_6';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
                  actualizarTabla('t1_indicador_bse_6', 'Descarga base de datos en blanco', '2');
                      t1_indicador_bse_7d();                 
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicador_bse_6', 'Descarga base de datos en blanco', '3');
                      reintentarfuncion(t1_indicador_bse_5d, 't1_indicador_bse_6');
                          console.log(xhr.responseText);
                      }
              })
}
function t1_indicador_bse_7d(){
    actualizarTabla('t1_indicador_bse_7', 'Descarga base de datos en blanco', '1');
    let tabla= 't1_indicador_bse_7';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
                  actualizarTabla('t1_indicador_bse_7', 'Descarga base de datos en blanco', '2');
                      t1_privacion10d();                 
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicador_bse_7', 'Descarga base de datos en blanco', '3');
                      reintentarfuncion(t1_indicador_bse_6d, 't1_indicador_bse_7');
                          console.log(xhr.responseText);
                      }
              })
}
function t1_privacion10d(){
    actualizarTabla('t1_privacion10', 'Descarga base de datos en blanco', '1');
    let tabla= 't1_privacion10';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
                  actualizarTabla('t1_privacion10', 'Descarga base de datos en blanco', '2');
                       t1_privacion11d();                
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_privacion10', 'Descarga base de datos en blanco', '3');
                      reintentarfuncion(t1_indicador_bse_7d, 't1_privacion10');
                          console.log(xhr.responseText);
                      }
              })
}
function t1_privacion11d(){
    actualizarTabla('t1_privacion11', 'Descarga base de datos en blanco', '1');
    let tabla= 't1_privacion11';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
                  actualizarTabla('t1_privacion11', 'Descarga base de datos en blanco', '2');
                         t1_privacion12d();              
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_privacion11', 'Descarga base de datos en blanco', '3');
                      reintentarfuncion(t1_privacion10d, 't1_privacion11');
                          console.log(xhr.responseText);
                      }
              })
}
function t1_privacion12d(){
    actualizarTabla('t1_privacion12', 'Descarga base de datos en blanco', '1');
    let tabla= 't1_privacion12';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
                  actualizarTabla('t1_privacion12', 'Descarga base de datos en blanco', '2');
                       t1_privacion13d();                
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_privacion12', 'Descarga base de datos en blanco', '3');
                      reintentarfuncion(t1_privacion11d, 't1_privacion12');
                          console.log(xhr.responseText);
                      }
              })
}
function t1_privacion13d(){
    actualizarTabla('t1_privacion13', 'Descarga base de datos en blanco', '1');
    let tabla= 't1_privacion13';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
                  actualizarTabla('t1_privacion13', 'Descarga base de datos en blanco', '2');
                      t1_privacion14d();                 
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_privacion13', 'Descarga base de datos en blanco', '3');
                      reintentarfuncion(t1_privacion12d, 't1_privacion13');
                          console.log(xhr.responseText);
                      }
              })
}
function t1_privacion14d(){
    actualizarTabla('t1_privacion14', 'Descarga base de datos en blanco', '1');
    let tabla= 't1_privacion14';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
                  actualizarTabla('t1_privacion14', 'Descarga base de datos en blanco', '2');
                       t1_privacion15d();                
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_privacion14', 'Descarga base de datos en blanco', '3');
                      reintentarfuncion(t1_privacion13d, 't1_privacion14');
                          console.log(xhr.responseText);
                      }
              })
}
function t1_privacion15d(){
    actualizarTabla('t1_privacion15', 'Descarga base de datos en blanco', '1');
    let tabla= 't1_privacion15';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
                  actualizarTabla('t1_privacion15', 'Descarga base de datos en blanco', '2');
                    t1_privacion16d();                   
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_privacion15', 'Descarga base de datos en blanco', '3');
                      reintentarfuncion(t1_privacion14d, 't1_privacion15');
                          console.log(xhr.responseText);
                      }
              })
}
function t1_privacion16d(){
    actualizarTabla('t1_privacion16', 'Descarga base de datos en blanco', '1');
    let tabla= 't1_privacion16';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
                  actualizarTabla('t1_privacion16', 'Descarga base de datos en blanco', '2');
                         t1_privacion2d();              
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_privacion16', 'Descarga base de datos en blanco', '3');
                      reintentarfuncion(t1_privacion15d, 't1_privacion16');
                          console.log(xhr.responseText);
                      }
              })
}
function t1_privacion2d(){
    actualizarTabla('t1_privacion2', 'Descarga base de datos en blanco', '1');
    let tabla= 't1_privacion2';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
                  actualizarTabla('t1_privacion2', 'Descarga base de datos en blanco', '2');
                          t1_privacion3d();             
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_privacion2', 'Descarga base de datos en blanco', '3');
                      reintentarfuncion(t1_privacion16d, 't1_privacion2');
                          console.log(xhr.responseText);
                      }
              })
}
function t1_privacion3d(){
    actualizarTabla('t1_privacion3', 'Descarga base de datos en blanco', '1');
    let tabla= 't1_privacion3';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
                  actualizarTabla('t1_privacion3', 'Descarga base de datos en blanco', '2');
                         t1_privacion4d();              
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_privacion3', 'Descarga base de datos en blanco', '3');
                      reintentarfuncion(t1_privacion2d, 't1_privacion3');
                          console.log(xhr.responseText);
                      }
              })
}
function t1_privacion4d(){
    actualizarTabla('t1_privacion4', 'Descarga base de datos en blanco', '1');
    let tabla= 't1_privacion4';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
                  actualizarTabla('t1_privacion4', 'Descarga base de datos en blanco', '2');
                         t1_privacion5d();              
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_privacion4', 'Descarga base de datos en blanco', '3');
                      reintentarfuncion(t1_privacion3d, 't1_privacion4');
                          console.log(xhr.responseText);
                      }
              })
}
function t1_privacion5d(){
    actualizarTabla('t1_privacion5', 'Descarga base de datos en blanco', '1');
    let tabla= 't1_privacion5';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
                  actualizarTabla('t1_privacion5', 'Descarga base de datos en blanco', '2');
                        t1_privacion6d();               
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_privacion5', 'Descarga base de datos en blanco', '3');
                      reintentarfuncion(t1_privacion4d, 't1_privacion5');
                          console.log(xhr.responseText);
                      }
              })
}
function t1_privacion6d(){
    actualizarTabla('t1_privacion6', 'Descarga base de datos en blanco', '1');
    let tabla= 't1_privacion6';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
                  actualizarTabla('t1_privacion6', 'Descarga base de datos en blanco', '2');
                        t1_privacion7d();               
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_privacion6', 'Descarga base de datos en blanco', '3');
                      reintentarfuncion(t1_privacion5d, 't1_privacion6');
                          console.log(xhr.responseText);
                      }
              })
}
function t1_privacion7d(){
    actualizarTabla('t1_privacion7', 'Descarga base de datos en blanco', '1');
    let tabla= 't1_privacion7';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
                  actualizarTabla('t1_privacion7', 'Descarga base de datos en blanco', '2');
                          t1_privacion8d();             
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_privacion7', 'Descarga base de datos en blanco', '3');
                      reintentarfuncion(t1_privacion6d, 't1_privacion7');
                          console.log(xhr.responseText);
                      }
              })
}
function t1_privacion8d(){
    actualizarTabla('t1_privacion8', 'Descarga base de datos en blanco', '1');
    let tabla= 't1_privacion8';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
                  actualizarTabla('t1_privacion8', 'Descarga base de datos en blanco', '2');
                     t1_privacion9d();                  
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_privacion8', 'Descarga base de datos en blanco', '3');
                      reintentarfuncion(t1_privacion7d, 't1_privacion8');
                          console.log(xhr.responseText);
                      }
              })
}
function t1_privacion9d(){
    actualizarTabla('t1_privacion9      ', 'Descarga base de datos en blanco', '1');
    let tabla= 't1_privacion9';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
                  actualizarTabla('t1_privacion9', 'Descarga base de datos en blanco', '2');
                  t1_enfamiliaqtd();                 
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_privacion9', 'Descarga base de datos en blanco', '3');
                      reintentarfuncion(t1_privacion8d, 't1_privacion9');
                          console.log(xhr.responseText);
                      }
              })
}





function t1_enfamiliaqtd (){
    actualizarTabla('t1_enfamiliaqtd', 'Subida base de datos al servidor', '1');
    let tabla= 't1_enfamiliaqt';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                  actualizarTabla('t1_enfamiliaqtd', 'Subida base de datos al servidor', '2');
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
                 
                  t1_financieroqtd();               
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_enfamiliaqtd', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_privacion9d, 't1_privacion9');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_financieroqtd (){
    actualizarTabla('t1_financieroqtd', 'Subida base de datos al servidor', '1');
    let tabla= 't1_financieroqt';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                  actualizarTabla('t1_financieroqtd', 'Subida base de datos al servidor', '2');
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
                  t1_indicador_bef_2d();      
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_financieroqt', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_enfamiliaqtd, 't1_enfamiliaqt');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_indicador_bef_2d (){
    actualizarTabla('t1_indicador_bef_2', 'Subida base de datos al servidor', '1');
    let tabla= 't1_indicador_bef_2';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                  actualizarTabla('t1_indicador_bef_2', 'Subida base de datos al servidor', '2');
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
                  t1_indicador_bef_3d();                
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicador_bef_2', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_financieroqtd, 't1_financieroqt');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_indicador_bef_3d (){
    actualizarTabla('t1_indicador_bef_3', 'Subida base de datos al servidor', '1');
    let tabla= 't1_indicador_bef_3';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                  actualizarTabla('t1_indicador_bef_3', 'Subida base de datos al servidor', '2');
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
                  t1_indicador_bf_1d();                 
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicador_bef_3', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_indicador_bef_2d, 't1_indicador_bef_2');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_indicador_bf_1d (){
    actualizarTabla('t1_indicador_bf_1', 'Subida base de datos al servidor', '1');
    let tabla= 't1_indicador_bf_1';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                  actualizarTabla('t1_indicador_bf_1', 'Subida base de datos al servidor', '2');
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
                  t1_indicador_bf_2d();                  
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicador_bf_1', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_indicador_bef_3d, 't1_indicador_bef_3');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_indicador_bf_2d (){
    actualizarTabla('t1_indicador_bf_2', 'Subida base de datos al servidor', '1');
    let tabla= 't1_indicador_bf_2';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                  actualizarTabla('t1_indicador_bf_2', 'Subida base de datos al servidor', '2');
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
                  t1_indicador_bf_3d();                
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicador_bf_2', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_indicador_bf_1d, 't1_indicador_bf_1');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_indicador_bf_3d (){
    actualizarTabla('t1_indicador_bf_3', 'Subida base de datos al servidor', '1');
    let tabla= 't1_indicador_bf_3';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                  actualizarTabla('t1_indicador_bf_3', 'Subida base de datos al servidor', '2');
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
                  t1_indicador_bi_2d();                  
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicador_bf_3', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_indicador_bf_2d, 't1_indicador_bf_2');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_indicador_bi_2d (){
    actualizarTabla('t1_indicador_bi_2', 'Subida base de datos al servidor', '1');
    let tabla= 't1_indicador_bi_2';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                  actualizarTabla('t1_indicador_bi_2', 'Subida base de datos al servidor', '2');
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
                  t1_indicador_bi_4d();                
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicador_bi_2', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_indicador_bf_3d, 't1_indicador_bf_3');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_indicador_bi_4d (){
    actualizarTabla('t1_indicador_bi_4', 'Subida base de datos al servidor', '1');
    let tabla= 't1_indicador_bi_4';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                  actualizarTabla('t1_indicador_bi_4', 'Subida base de datos al servidor', '2');
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
                  t1_indicador_bi_5d();                  
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicador_bi_4', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_indicador_bi_2d, 't1_indicador_bi_2');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_indicador_bi_5d (){
    actualizarTabla('t1_indicador_bi_5', 'Subida base de datos al servidor', '1');
    let tabla= 't1_indicador_bi_5';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                  actualizarTabla('t1_indicador_bi_5', 'Subida base de datos al servidor', '2');
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
                  t1_indicador_bi_6d();                  
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicador_bi_5', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_indicador_bi_4d, 't1_indicador_bi_4');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_indicador_bi_6d (){
    actualizarTabla('t1_indicador_bi_6', 'Subida base de datos al servidor', '1');
    let tabla= 't1_indicador_bi_6';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                  actualizarTabla('t1_indicador_bi_6', 'Subida base de datos al servidor', '2');
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
                  t1_indicador_bl_7d();                   
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicador_bi_6', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_indicador_bi_5d, 't1_indicador_bi_5');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_indicador_bl_7d (){
    actualizarTabla('t1_indicador_bl_7', 'Subida base de datos al servidor', '1');
    let tabla= 't1_indicador_bl_7';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                  actualizarTabla('t1_indicador_bl_7', 'Subida base de datos al servidor', '2');
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
                  t1_indicador_bl_8d();                
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicador_bl_7', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_indicador_bi_6d, 't1_indicador_bi_6');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_indicador_bl_8d (){
    actualizarTabla('t1_indicador_bl_8', 'Subida base de datos al servidor', '1');
    let tabla= 't1_indicador_bl_8';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                  actualizarTabla('t1_indicador_bl_8', 'Subida base de datos al servidor', '2');
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
                  t1_indicador_bse_3d();               
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicador_bl_8', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_indicador_bl_7d, 't1_indicador_bl_7');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_indicador_bse_3d (){
    actualizarTabla('t1_indicador_bse_3', 'Subida base de datos al servidor', '1');
    let tabla= 't1_indicador_bse_3';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                  actualizarTabla('t1_indicador_bse_3', 'Subida base de datos al servidor', '2');
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
                  t1_intelectualqtd();                  
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicador_bse_3', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_indicador_bl_8d, 't1_indicador_bl_8');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_intelectualqtd (){
    actualizarTabla('t1_intelectualqt', 'Subida base de datos al servidor', '1');
    let tabla= 't1_intelectualqt';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                  actualizarTabla('t1_intelectualqt', 'Subida base de datos al servidor', '2');
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
                  t1_legalqtd();                 
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_intelectualqt', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_indicador_bse_3d, 't1_indicador_bse_3');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_legalqtd (){
    actualizarTabla('t1_legalqt', 'Subida base de datos al servidor', '1');
    let tabla= 't1_legalqt';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                  actualizarTabla('t1_legalqt', 'Subida base de datos al servidor', '2');
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
                  t1_pasosvisitad();                
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_legalqt', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_intelectualqtd, 't1_intelectualqt');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_pasosvisitad (){
    actualizarTabla('t1_pasosvisita', 'Subida base de datos al servidor', '1');
    let tabla= 't1_pasosvisita';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                  actualizarTabla('t1_pasosvisita', 'Subida base de datos al servidor', '2');
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
                  t1_saludemocionalqtd();               
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_pasosvisita', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_legalqtd, 't1_legalqt');
                          console.log(xhr.responseText);
                      }
              })
}


function t1_visitasrealizadasd (){
    actualizarTabla('t1_visitasrealizadas', 'Subida base de datos al servidor', '1');
    let tabla= 't1_visitasrealizadas';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                  actualizarTabla('t1_visitasrealizadas', 'Subida base de datos al servidor', '2');
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
                  t1_saludemocionalqtd();               
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_visitasrealizadas', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_pasosvisitad, 't1_legalqt');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_saludemocionalqtd (){
    actualizarTabla('t1_saludemocionalqt', 'Subida base de datos al servidor', '1');
    let tabla= 't1_saludemocionalqt';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                  actualizarTabla('t1_saludemocionalqt', 'Subida base de datos al servidor', '2');
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
                 
                       todook();
                  detenerReloj();                    
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_saludemocionalqt', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_pasosvisitad, 't1_pasosvisita');
                          console.log(xhr.responseText);
                      }
              })
}



