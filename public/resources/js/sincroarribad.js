
function t1_principalhogard(){
    iniciarContador();
    actualizarTabla('t1_principalhogar', 'Descarga de tablas desde el servdor', '1');
$.ajax({
                url:'./t1_principalhogard',
                method: "GET",
                dataType:'JSON',
                success:function(data){ 
                  actualizarTabla('t1_principalhogar', 'Descarga de tablas desde el servdor', '2');
                  $('#barracarga').html('1%');
                  $('#barracarga').css('width','1%');
                
                 t1_hogarcondicionesalimentariasd()
                  
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_principalhogard', 'Descarga de tablas desde el servdor', '3');
                      reintentarfuncion(t1_principalhogard, 't1_principalhogard');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_hogarcondicionesalimentariasd(){
    actualizarTabla('t1_hogarcondicionesalimentarias', 'Descarga de tablas desde el servdor', '1');
$.ajax({
                url:'./t1_hogarcondicionesalimentariasd',
                method: "GET",
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('2%');
                  $('#barracarga').css('width','2%');
                  actualizarTabla('t1_hogarcondicionesalimentarias', 'Descarga de tablas desde el servdor', '2');
                 t1_hogarcondicioneshabitabilidadd()
                  
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_hogarcondicionesalimentarias', 'Descarga de tablas desde el servdor', '3');
                      reintentarfuncion(t1_hogarcondicionesalimentariasd, 't1_hogarcondicionesalimentarias');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_hogarcondicioneshabitabilidadd(){
    actualizarTabla('t1_hogarcondicioneshabitabilidad', 'Descarga de tablas desde el servdor', '1');
$.ajax({
                url:'./t1_hogarcondicioneshabitabilidadd',
                method: "GET",
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('3%');
                  $('#barracarga').css('width','3%');
                  actualizarTabla('t1_hogarcondicioneshabitabilidad', 'Descarga de tablas desde el servdor', '2');
                 t1_hogarconformacionfamiliard()
                  
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_hogarcondicioneshabitabilidad', 'Descarga de tablas desde el servdor', '3');
                      reintentarfuncion(t1_hogarcondicioneshabitabilidadd, 't1_hogarcondicioneshabitabilidad');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_hogarconformacionfamiliard(){
    actualizarTabla('t1_hogarconformacionfamiliar', 'Descarga de tablas desde el servdor', '1');
$.ajax({
                url:'./t1_hogarconformacionfamiliard',
                method: "GET",
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('4%');
                  $('#barracarga').css('width','4%');
                  actualizarTabla('t1_hogarconformacionfamiliar', 'Descarga de tablas desde el servdor', '2');
                  t1_hogardatosgeograficosd()
                  
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_hogarconformacionfamiliar', 'Descarga de tablas desde el servdor', '3');
                      reintentarfuncion(t1_hogarconformacionfamiliard, 't1_hogarconformacionfamiliar');
                          console.log(xhr.responseText);
                      }
              })
}



function t1_hogardatosgeograficosd(){
    actualizarTabla('t1_hogardatosgeograficos', 'Descarga de tablas desde el servdor', '1');
$.ajax({
                url:'./t1_hogardatosgeograficosd',
                method: "GET",
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('5%');
                  $('#barracarga').css('width','5%');
                  actualizarTabla('t1_hogardatosgeograficos', 'Descarga de tablas desde el servdor', '2');
                 t1_hogarentornofamiliard()
                  
                },
                error: function(xhr, status, error) {
                 actualizarTabla('t1_hogardatosgeograficos', 'Descarga de tablas desde el servdor', '3');
                      reintentarfuncion(t1_hogardatosgeograficosd, 't1_hogardatosgeograficos');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_hogarentornofamiliard(){
    actualizarTabla('t1_hogarentornofamiliar', 'Descarga de tablas desde el servdor', '1');
$.ajax({
                url:'./t1_hogarentornofamiliard',
                method: "GET",
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('6%');
                  $('#barracarga').css('width','6%');
                  actualizarTabla('t1_hogarentornofamiliar', 'Descarga de tablas desde el servdor', '2');
                 t1_integrantesfinancierod()
                  
                },
                error: function(xhr, status, error) {
                actualizarTabla('t1_hogarentornofamiliar', 'Descarga de tablas desde el servdor', '3');
                      reintentarfuncion(t1_hogarentornofamiliard, 't1_hogarentornofamiliar');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_integrantesfinancierod(){
    actualizarTabla('t1_integrantesfinanciero', 'Descarga de tablas desde el servdor', '1');
$.ajax({
                url:'./t1_integrantesfinancierod',
                method: "GET",
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('7%');
                  $('#barracarga').css('width','7%');
                  actualizarTabla('t1_integrantesfinanciero', 'Descarga de tablas desde el servdor', '2');
                 t1_integrantesfisicoyemocionald()
                  
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_integrantesfinanciero', 'Descarga de tablas desde el servdor', '3');
                      reintentarfuncion(t1_integrantesfinancierod, 't1_integrantesfinanciero');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_integrantesfisicoyemocionald(){
    actualizarTabla('t1_integrantesfisicoyemocional', 'Descarga de tablas desde el servdor', '1');
$.ajax({
                url:'./t1_integrantesfisicoyemocionald',
                method: "GET",
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('8%');
                  $('#barracarga').css('width','8%');
                  actualizarTabla('t1_integrantesfisicoyemocional', 'Descarga de tablas desde el servdor', '2');
                 t1_integranteshogard()
                  
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_integrantesfisicoyemocional', 'Descarga de tablas desde el servdor', '3');
                      reintentarfuncion(t1_integrantesfisicoyemocionald, 't1_integrantesfisicoyemocional');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_integranteshogard(){
    actualizarTabla('t1_integranteshogar', 'Descarga de tablas desde el servdor', '1');
$.ajax({
                url:'./t1_integranteshogard',
                method: "GET",
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('9%');
                  $('#barracarga').css('width','9%');
                  actualizarTabla('t1_integranteshogar', 'Descarga de tablas desde el servdor', '2');
                 t1_integrantesidentitariod()
                  
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_integranteshogar', 'Descarga de tablas desde el servdor', '3');
                      reintentarfuncion(t1_integranteshogard, 't1_integranteshogar');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_integrantesidentitariod(){
    actualizarTabla('t1_integrantesidentitario', 'Descarga de tablas desde el servdor', '1');
$.ajax({
                url:'./t1_integrantesidentitariod',
                method: "GET",
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('10%');
                  $('#barracarga').css('width','10%');
                  actualizarTabla('t1_integrantesidentitario', 'Descarga de tablas desde el servdor', '2');
                  t1_integrantesintelectuald()
                  
                },
                error: function(xhr, status, error) {
                actualizarTabla('t1_integrantesidentitario', 'Descarga de tablas desde el servdor', '3');
                      reintentarfuncion(t1_integrantesidentitariod, 't1_integrantesidentitario');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_integrantesintelectuald(){
    actualizarTabla('t1_integrantesintelectual', 'Descarga de tablas desde el servdor', '1');
$.ajax({
                url:'./t1_integrantesintelectuald',
                method: "GET",
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('11%');
                  $('#barracarga').css('width','11%');
                  actualizarTabla('t1_integrantesintelectual', 'Descarga de tablas desde el servdor', '2');
                 t1_integranteslegald()
                  
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_integrantesintelectual', 'Descarga de tablas desde el servdor', '3');
                      reintentarfuncion(t1_integrantesintelectuald, 't1_integrantesintelectual');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_integranteslegald(){
    actualizarTabla('t1_integranteslegal', 'Descarga de tablas desde el servdor', '1');
$.ajax({
                url:'./t1_integranteslegald',
                method: "GET",
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('12%');
                  $('#barracarga').css('width','12%');                      
                  actualizarTabla('t1_integranteslegal', 'Descarga de tablas desde el servdor', '2');
                  t1_privacion1d();      
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_integranteslegal', 'Descarga de tablas desde el servdor', '3');
                      reintentarfuncion(t1_integranteslegald, 't1_integranteslegal');
                          console.log(xhr.responseText);
                      }
              })
}




function t1_privacion1d(){
    actualizarTabla('t1_privacion1', 'Descarga de tablas desde el servdor', '1');
    let tabla= 't1_privacion1';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('13%');
                  $('#barracarga').css('width','13%');                      
                  actualizarTabla('t1_privacion1', 'Descarga de tablas desde el servdor', '2');
                  t1_casillamatrizd()                   
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_privacion1', 'Descarga de tablas desde el servdor', '3');
                      reintentarfuncion(t1_integranteslegald, 't1_privacion1');
                          console.log(xhr.responseText);
                      }
              })
}






function t1_casillamatrizd(){
    actualizarTabla('t1_casillamatriz', 'Descarga de tablas desde el servdor', '1');
    let tabla= 't1_casillamatriz';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('14%');
                  $('#barracarga').css('width','14%');                      
                  actualizarTabla('t1_casillamatriz', 'Descarga de tablas desde el servdor', '2');
                         t1_indicador_bl_2d()              
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_casillamatriz', 'Descarga de tablas desde el servdor', '3');
                      reintentarfuncion(t1_privacion1d, 't1_casillamatriz');
                          console.log(xhr.responseText);
                      }
              })
}


function t1_indicador_bl_2d(){
    actualizarTabla('t1_indicador_bl_2', 'Descarga de tablas desde el servdor', '1');
    let tabla= 't1_indicador_bl_2';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('15%');
                  $('#barracarga').css('width','15%');                      
                  actualizarTabla('t1_indicador_bl_2', 'Descarga de tablas desde el servdor', '2');
                         t1_indicador_bl_3d()              
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_casillamatriz', 'Descarga de tablas desde el servdor', '3');
                      reintentarfuncion(t1_casillamatrizd, 't1_indicador_bl_2');
                          console.log(xhr.responseText);
                      }
              })
}
function t1_indicador_bl_3d(){
    actualizarTabla('t1_indicador_bl_3', 'Descarga de tablas desde el servdor', '1');
    let tabla= 't1_indicador_bl_3';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('16%');
                  $('#barracarga').css('width','16%');                      
                  actualizarTabla('t1_indicador_bl_3', 'Descarga de tablas desde el servdor', '2');
                  t1_indicador_bl_5d()                  
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicador_bl_3', 'Descarga de tablas desde el servdor', '3');
                      reintentarfuncion(t1_indicador_bl_2d, 't1_indicador_bl_3');
                          console.log(xhr.responseText);
                      }
              })
}
function t1_indicador_bl_5d(){
    actualizarTabla('t1_indicador_bl_5', 'Descarga de tablas desde el servdor', '1');
    let tabla= 't1_indicador_bl_5';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('17%');
                  $('#barracarga').css('width','17%');                      
                  actualizarTabla('t1_indicador_bl_5', 'Descarga de tablas desde el servdor', '2');
                  t1_indicador_bl_6d();                 
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicador_bl_5', 'Descarga de tablas desde el servdor', '3');
                      reintentarfuncion(t1_indicador_bl_3d, 't1_indicador_bl_3');
                          console.log(xhr.responseText);
                      }
              })
}


function t1_indicador_bl_6d(){
    actualizarTabla('t1_indicador_bl_6', 'Descarga de tablas desde el servdor', '1');
    let tabla= 't1_indicador_bl_6';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('18%');
                  $('#barracarga').css('width','18%');                      
                  actualizarTabla('t1_indicador_bl_6', 'Descarga de tablas desde el servdor', '2');
                      t1_indicador_bse_1d();                 
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicador_bl_6', 'Descarga de tablas desde el servdor', '3');
                      reintentarfuncion(t1_indicador_bl_5d, 't1_indicador_bl_6');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_indicador_bse_1d(){
    actualizarTabla('t1_indicador_bse_1', 'Descarga de tablas desde el servdor', '1');
    let tabla= 't1_indicador_bse_1';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('19%');
                  $('#barracarga').css('width','19%');                      
                  actualizarTabla('t1_indicador_bse_1', 'Descarga de tablas desde el servdor', '2');
                        t1_indicador_bse_4d();               
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicador_bse_1', 'Descarga de tablas desde el servdor', '3');
                      reintentarfuncion(t1_indicador_bl_6d, 't1_indicador_bse_1');
                          console.log(xhr.responseText);
                      }
              })
}
function t1_indicador_bse_4d(){
    actualizarTabla('t1_indicador_bse_4', 'Descarga de tablas desde el servdor', '1');
    let tabla= 't1_indicador_bse_4';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('20%');
                  $('#barracarga').css('width','20%');                      
                  actualizarTabla('t1_indicador_bse_4', 'Descarga de tablas desde el servdor', '2');
                      t1_indicador_bse_5d();                 
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicador_bse_4', 'Descarga de tablas desde el servdor', '3');
                      reintentarfuncion(t1_indicador_bse_1d, 't1_indicador_bse_4');
                          console.log(xhr.responseText);
                      }
              })
}
function t1_indicador_bse_5d(){
    actualizarTabla('t1_indicador_bse_5', 'Descarga de tablas desde el servdor', '1');
    let tabla= 't1_indicador_bse_5';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('21%');
                  $('#barracarga').css('width','21%');                      
                  actualizarTabla('t1_indicador_bse_5', 'Descarga de tablas desde el servdor', '2');
                          t1_indicador_bse_6d();             
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicador_bse_5', 'Descarga de tablas desde el servdor', '3');
                      reintentarfuncion(t1_indicador_bse_4d, 't1_indicador_bse_5');
                          console.log(xhr.responseText);
                      }
              })
}
function t1_indicador_bse_6d(){
    actualizarTabla('t1_indicador_bse_6', 'Descarga de tablas desde el servdor', '1');
    let tabla= 't1_indicador_bse_6';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('22%');
                  $('#barracarga').css('width','22%');                      
                  actualizarTabla('t1_indicador_bse_6', 'Descarga de tablas desde el servdor', '2');
                      t1_indicador_bse_7d();                 
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicador_bse_6', 'Descarga de tablas desde el servdor', '3');
                      reintentarfuncion(t1_indicador_bse_5d, 't1_indicador_bse_6');
                          console.log(xhr.responseText);
                      }
              })
}
function t1_indicador_bse_7d(){
    actualizarTabla('t1_indicador_bse_7', 'Descarga de tablas desde el servdor', '1');
    let tabla= 't1_indicador_bse_7';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('23%');
                  $('#barracarga').css('width','23%');                      
                  actualizarTabla('t1_indicador_bse_7', 'Descarga de tablas desde el servdor', '2');
                      t1_privacion10d();                 
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicador_bse_7', 'Descarga de tablas desde el servdor', '3');
                      reintentarfuncion(t1_indicador_bse_6d, 't1_indicador_bse_7');
                          console.log(xhr.responseText);
                      }
              })
}
function t1_privacion10d(){
    actualizarTabla('t1_privacion10', 'Descarga de tablas desde el servdor', '1');
    let tabla= 't1_privacion10';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('24%');
                  $('#barracarga').css('width','24%');                      
                  actualizarTabla('t1_privacion10', 'Descarga de tablas desde el servdor', '2');
                       t1_privacion11d();                
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_privacion10', 'Descarga de tablas desde el servdor', '3');
                      reintentarfuncion(t1_indicador_bse_7d, 't1_privacion10');
                          console.log(xhr.responseText);
                      }
              })
}
function t1_privacion11d(){
    actualizarTabla('t1_privacion11', 'Descarga de tablas desde el servdor', '1');
    let tabla= 't1_privacion11';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('25%');
                  $('#barracarga').css('width','25%');                      
                  actualizarTabla('t1_privacion11', 'Descarga de tablas desde el servdor', '2');
                         t1_privacion12d();              
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_privacion11', 'Descarga de tablas desde el servdor', '3');
                      reintentarfuncion(t1_privacion10d, 't1_privacion11');
                          console.log(xhr.responseText);
                      }
              })
}
function t1_privacion12d(){
    actualizarTabla('t1_privacion12', 'Descarga de tablas desde el servdor', '1');
    let tabla= 't1_privacion12';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('26%');
                  $('#barracarga').css('width','26%');                      
                  actualizarTabla('t1_privacion12', 'Descarga de tablas desde el servdor', '2');
                       t1_privacion13d();                
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_privacion12', 'Descarga de tablas desde el servdor', '3');
                      reintentarfuncion(t1_privacion11d, 't1_privacion12');
                          console.log(xhr.responseText);
                      }
              })
}
function t1_privacion13d(){
    actualizarTabla('t1_privacion13', 'Descarga de tablas desde el servdor', '1');
    let tabla= 't1_privacion13';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('27%');
                  $('#barracarga').css('width','27%');                      
                  actualizarTabla('t1_privacion13', 'Descarga de tablas desde el servdor', '2');
                      t1_privacion14d();                 
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_privacion13', 'Descarga de tablas desde el servdor', '3');
                      reintentarfuncion(t1_privacion12d, 't1_privacion13');
                          console.log(xhr.responseText);
                      }
              })
}
function t1_privacion14d(){
    actualizarTabla('t1_privacion14', 'Descarga de tablas desde el servdor', '1');
    let tabla= 't1_privacion14';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('28%');
                  $('#barracarga').css('width','28%');                      
                  actualizarTabla('t1_privacion14', 'Descarga de tablas desde el servdor', '2');
                       t1_privacion15d();                
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_privacion14', 'Descarga de tablas desde el servdor', '3');
                      reintentarfuncion(t1_privacion13d, 't1_privacion14');
                          console.log(xhr.responseText);
                      }
              })
}
function t1_privacion15d(){
    actualizarTabla('t1_privacion15', 'Descarga de tablas desde el servdor', '1');
    let tabla= 't1_privacion15';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('29%');
                  $('#barracarga').css('width','29%');                      
                  actualizarTabla('t1_privacion15', 'Descarga de tablas desde el servdor', '2');
                    t1_privacion16d();                   
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_privacion15', 'Descarga de tablas desde el servdor', '3');
                      reintentarfuncion(t1_privacion14d, 't1_privacion15');
                          console.log(xhr.responseText);
                      }
              })
}
function t1_privacion16d(){
    actualizarTabla('t1_privacion16', 'Descarga de tablas desde el servdor', '1');
    let tabla= 't1_privacion16';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('30%');
                  $('#barracarga').css('width','30%');                      
                  actualizarTabla('t1_privacion16', 'Descarga de tablas desde el servdor', '2');
                         t1_privacion2d();              
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_privacion16', 'Descarga de tablas desde el servdor', '3');
                      reintentarfuncion(t1_privacion15d, 't1_privacion16');
                          console.log(xhr.responseText);
                      }
              })
}
function t1_privacion2d(){
    actualizarTabla('t1_privacion2', 'Descarga de tablas desde el servdor', '1');
    let tabla= 't1_privacion2';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('31%');
                  $('#barracarga').css('width','31%');                      
                  actualizarTabla('t1_privacion2', 'Descarga de tablas desde el servdor', '2');
                          t1_privacion3d();             
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_privacion2', 'Descarga de tablas desde el servdor', '3');
                      reintentarfuncion(t1_privacion16d, 't1_privacion2');
                          console.log(xhr.responseText);
                      }
              })
}
function t1_privacion3d(){
    actualizarTabla('t1_privacion3', 'Descarga de tablas desde el servdor', '1');
    let tabla= 't1_privacion3';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('32%');
                  $('#barracarga').css('width','32%');                      
                  actualizarTabla('t1_privacion3', 'Descarga de tablas desde el servdor', '2');
                         t1_privacion4d();              
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_privacion3', 'Descarga de tablas desde el servdor', '3');
                      reintentarfuncion(t1_privacion2d, 't1_privacion3');
                          console.log(xhr.responseText);
                      }
              })
}
function t1_privacion4d(){
    actualizarTabla('t1_privacion4', 'Descarga de tablas desde el servdor', '1');
    let tabla= 't1_privacion4';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('33%');
                  $('#barracarga').css('width','33%');                      
                  actualizarTabla('t1_privacion4', 'Descarga de tablas desde el servdor', '2');
                         t1_privacion5d();              
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_privacion4', 'Descarga de tablas desde el servdor', '3');
                      reintentarfuncion(t1_privacion3d, 't1_privacion4');
                          console.log(xhr.responseText);
                      }
              })
}
function t1_privacion5d(){
    actualizarTabla('t1_privacion5', 'Descarga de tablas desde el servdor', '1');
    let tabla= 't1_privacion5';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('34%');
                  $('#barracarga').css('width','34%');                      
                  actualizarTabla('t1_privacion5', 'Descarga de tablas desde el servdor', '2');
                        t1_privacion6d();               
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_privacion5', 'Descarga de tablas desde el servdor', '3');
                      reintentarfuncion(t1_privacion4d, 't1_privacion5');
                          console.log(xhr.responseText);
                      }
              })
}
function t1_privacion6d(){
    actualizarTabla('t1_privacion6', 'Descarga de tablas desde el servdor', '1');
    let tabla= 't1_privacion6';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('35%');
                  $('#barracarga').css('width','35%');                      
                  actualizarTabla('t1_privacion6', 'Descarga de tablas desde el servdor', '2');
                        t1_privacion7d();               
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_privacion6', 'Descarga de tablas desde el servdor', '3');
                      reintentarfuncion(t1_privacion5d, 't1_privacion6');
                          console.log(xhr.responseText);
                      }
              })
}
function t1_privacion7d(){
    actualizarTabla('t1_privacion7', 'Descarga de tablas desde el servdor', '1');
    let tabla= 't1_privacion7';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('36%');
                  $('#barracarga').css('width','36%');                      
                  actualizarTabla('t1_privacion7', 'Descarga de tablas desde el servdor', '2');
                          t1_privacion8d();             
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_privacion7', 'Descarga de tablas desde el servdor', '3');
                      reintentarfuncion(t1_privacion6d, 't1_privacion7');
                          console.log(xhr.responseText);
                      }
              })
}
function t1_privacion8d(){
    actualizarTabla('t1_privacion8', 'Descarga de tablas desde el servdor', '1');
    let tabla= 't1_privacion8';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('37%');
                  $('#barracarga').css('width','37%');                      
                  actualizarTabla('t1_privacion8', 'Descarga de tablas desde el servdor', '2');
                     t1_privacion9d();                  
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_privacion8', 'Descarga de tablas desde el servdor', '3');
                      reintentarfuncion(t1_privacion7d, 't1_privacion8');
                          console.log(xhr.responseText);
                      }
              })
}
function t1_privacion9d(){
    actualizarTabla('t1_privacion9      ', 'Descarga de tablas desde el servdor', '1');
    let tabla= 't1_privacion9';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){
                  actualizarTabla('t1_privacion9', 'Descarga de tablas desde el servdor', '2');
                  $('#barracarga').html('38%');
                  $('#barracarga').css('width','38%');                      
                  
                  t1_enfamiliaqtd();                 
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_privacion9', 'Descarga de tablas desde el servdor', '3');
                      reintentarfuncion(t1_privacion8d, 't1_privacion9');
                          console.log(xhr.responseText);
                      }
              })
}





function t1_enfamiliaqtd (){
    actualizarTabla('t1_enfamiliaqtd', 'Descarga de tablas desde el servdor', '1');
    let tabla= 't1_enfamiliaqt';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                  actualizarTabla('t1_enfamiliaqtd', 'Descarga de tablas desde el servdor', '2');
                  $('#barracarga').html('39%');
                  $('#barracarga').css('width','39%');                      
                 
                  t1_financieroqtd();               
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_enfamiliaqtd', 'Descarga de tablas desde el servdor', '3');
                      reintentarfuncion(t1_privacion9d, 't1_privacion9');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_financieroqtd (){
    actualizarTabla('t1_financieroqtd', 'Descarga de tablas desde el servdor', '1');
    let tabla= 't1_financieroqt';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                  actualizarTabla('t1_financieroqtd', 'Descarga de tablas desde el servdor', '2');
                  $('#barracarga').html('40%');
                  $('#barracarga').css('width','40%');                      
                  t1_indicador_bef_2d();      
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_financieroqt', 'Descarga de tablas desde el servdor', '3');
                      reintentarfuncion(t1_enfamiliaqtd, 't1_enfamiliaqt');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_indicador_bef_2d (){
    actualizarTabla('t1_indicador_bef_2', 'Descarga de tablas desde el servdor', '1');
    let tabla= 't1_indicador_bef_2';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                  actualizarTabla('t1_indicador_bef_2', 'Descarga de tablas desde el servdor', '2');
                  $('#barracarga').html('41%');
                  $('#barracarga').css('width','41%');                      
                  t1_indicador_bef_3d();                
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicador_bef_2', 'Descarga de tablas desde el servdor', '3');
                      reintentarfuncion(t1_financieroqtd, 't1_financieroqt');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_indicador_bef_3d (){
    actualizarTabla('t1_indicador_bef_3', 'Descarga de tablas desde el servdor', '1');
    let tabla= 't1_indicador_bef_3';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                  actualizarTabla('t1_indicador_bef_3', 'Descarga de tablas desde el servdor', '2');
                  $('#barracarga').html('42%');
                  $('#barracarga').css('width','42%');                      
                  t1_indicador_bef_6d();                 
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicador_bef_3', 'Descarga de tablas desde el servdor', '3');
                      reintentarfuncion(t1_indicador_bef_2d, 't1_indicador_bef_2');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_indicador_bef_6d (){
  actualizarTabla('t1_indicador_bef_6', 'Descarga de tablas desde el servdor', '1');
  let tabla= 't1_indicador_bef_6';
$.ajax({
              url:'./sincroprivacionesd',
              method: "GET",
              data: { tabla: tabla},  
              dataType:'JSON',
              success:function(data){ 
                actualizarTabla('t1_indicador_bef_6', 'Descarga de tablas desde el servdor', '2');
                $('#barracarga').html('42%');
                $('#barracarga').css('width','42%');                      
                t1_indicador_bf_1d();                 
              },
              error: function(xhr, status, error) {
                actualizarTabla('t1_indicador_bef_6', 'Descarga de tablas desde el servdor', '3');
                    reintentarfuncion(t1_indicador_bef_2d, 't1_indicador_bef_2');
                        console.log(xhr.responseText);
                    }
            })
}

function t1_indicador_bf_1d (){
    actualizarTabla('t1_indicador_bf_1', 'Descarga de tablas desde el servdor', '1');
    let tabla= 't1_indicador_bf_1';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                  actualizarTabla('t1_indicador_bf_1', 'Descarga de tablas desde el servdor', '2');
                  $('#barracarga').html('43%');
                  $('#barracarga').css('width','43%');                      
                  t1_indicador_bf_2d();                  
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicador_bf_1', 'Descarga de tablas desde el servdor', '3');
                      reintentarfuncion(t1_indicador_bef_3d, 't1_indicador_bef_3');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_indicador_bf_2d (){
    actualizarTabla('t1_indicador_bf_2', 'Descarga de tablas desde el servdor', '1');
    let tabla= 't1_indicador_bf_2';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                  actualizarTabla('t1_indicador_bf_2', 'Descarga de tablas desde el servdor', '2');
                  $('#barracarga').html('44%');
                  $('#barracarga').css('width','44%');                      
                  t1_indicador_bf_3d();                
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicador_bf_2', 'Descarga de tablas desde el servdor', '3');
                      reintentarfuncion(t1_indicador_bf_1d, 't1_indicador_bf_1');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_indicador_bf_3d (){
    actualizarTabla('t1_indicador_bf_3', 'Descarga de tablas desde el servdor', '1');
    let tabla= 't1_indicador_bf_3';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                  actualizarTabla('t1_indicador_bf_3', 'Descarga de tablas desde el servdor', '2');
                  $('#barracarga').html('45%');
                  $('#barracarga').css('width','45%');                      
                  t1_indicador_bi_2d();                  
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicador_bf_3', 'Descarga de tablas desde el servdor', '3');
                      reintentarfuncion(t1_indicador_bf_2d, 't1_indicador_bf_2');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_indicador_bi_2d (){
    actualizarTabla('t1_indicador_bi_2', 'Descarga de tablas desde el servdor', '1');
    let tabla= 't1_indicador_bi_2';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                  actualizarTabla('t1_indicador_bi_2', 'Descarga de tablas desde el servdor', '2');
                  $('#barracarga').html('46%');
                  $('#barracarga').css('width','46%');                      
                  t1_indicador_bi_3d();                
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicador_bi_2', 'Descarga de tablas desde el servdor', '3');
                      reintentarfuncion(t1_indicador_bf_3d, 't1_indicador_bf_3');
                          console.log(xhr.responseText);
                      }
              })
}


function t1_indicador_bi_3d (){
    actualizarTabla('t1_indicador_bi_3', 'Descarga de tablas desde el servdor', '1');
    let tabla= 't1_indicador_bi_3';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                  actualizarTabla('t1_indicador_bi_3', 'Descarga de tablas desde el servdor', '2');
                  $('#barracarga').html('47%');
                  $('#barracarga').css('width','47%');                      
                  t1_indicador_bi_4d();                
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicador_bi_3', 'Descarga de tablas desde el servdor', '3');
                      reintentarfuncion(t1_indicador_bi_2d, 't1_indicador_bi_3');
                          console.log(xhr.responseText);
                      }
              })
}



function t1_indicador_bi_4d (){
    actualizarTabla('t1_indicador_bi_4', 'Descarga de tablas desde el servdor', '1');
    let tabla= 't1_indicador_bi_4';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                  actualizarTabla('t1_indicador_bi_4', 'Descarga de tablas desde el servdor', '2');
                  $('#barracarga').html('48%');
                  $('#barracarga').css('width','48%');                      
                  t1_indicador_bi_5d();                  
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicador_bi_4', 'Descarga de tablas desde el servdor', '3');
                      reintentarfuncion(t1_indicador_bi_2d, 't1_indicador_bi_2');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_indicador_bi_5d (){
    actualizarTabla('t1_indicador_bi_5', 'Descarga de tablas desde el servdor', '1');
    let tabla= 't1_indicador_bi_5';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                  actualizarTabla('t1_indicador_bi_5', 'Descarga de tablas desde el servdor', '2');
                  $('#barracarga').html('49%');
                  $('#barracarga').css('width','49%');                      
                  t1_indicador_bi_6d();                  
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicador_bi_5', 'Descarga de tablas desde el servdor', '3');
                      reintentarfuncion(t1_indicador_bi_4d, 't1_indicador_bi_4');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_indicador_bi_6d (){
    actualizarTabla('t1_indicador_bi_6', 'Descarga de tablas desde el servdor', '1');
    let tabla= 't1_indicador_bi_6';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                  actualizarTabla('t1_indicador_bi_6', 'Descarga de tablas desde el servdor', '2');
                  $('#barracarga').html('50%');
                  $('#barracarga').css('width','50%');                      
                  t1_indicador_bl_7d();                   
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicador_bi_6', 'Descarga de tablas desde el servdor', '3');
                      reintentarfuncion(t1_indicador_bi_5d, 't1_indicador_bi_5');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_indicador_bl_7d (){
    actualizarTabla('t1_indicador_bl_7', 'Descarga de tablas desde el servdor', '1');
    let tabla= 't1_indicador_bl_7';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                  actualizarTabla('t1_indicador_bl_7', 'Descarga de tablas desde el servdor', '2');
                  $('#barracarga').html('51%');
                  $('#barracarga').css('width','51%');                      
                  t1_indicador_bl_8d();                
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicador_bl_7', 'Descarga de tablas desde el servdor', '3');
                      reintentarfuncion(t1_indicador_bi_6d, 't1_indicador_bi_6');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_indicador_bl_8d (){
    actualizarTabla('t1_indicador_bl_8', 'Descarga de tablas desde el servdor', '1');
    let tabla= 't1_indicador_bl_8';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                  actualizarTabla('t1_indicador_bl_8', 'Descarga de tablas desde el servdor', '2');
                  $('#barracarga').html('52%');
                  $('#barracarga').css('width','52%');                      
                  t1_indicador_bse_3d();               
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicador_bl_8', 'Descarga de tablas desde el servdor', '3');
                      reintentarfuncion(t1_indicador_bl_7d, 't1_indicador_bl_7');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_indicador_bse_3d (){
    actualizarTabla('t1_indicador_bse_3', 'Descarga de tablas desde el servdor', '1');
    let tabla= 't1_indicador_bse_3';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                  actualizarTabla('t1_indicador_bse_3', 'Descarga de tablas desde el servdor', '2');
                  $('#barracarga').html('53%');
                  $('#barracarga').css('width','53%');                      
                  t1_intelectualqtd();                  
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicador_bse_3', 'Descarga de tablas desde el servdor', '3');
                      reintentarfuncion(t1_indicador_bl_8d, 't1_indicador_bl_8');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_intelectualqtd (){
    actualizarTabla('t1_intelectualqt', 'Descarga de tablas desde el servdor', '1');
    let tabla= 't1_intelectualqt';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                  actualizarTabla('t1_intelectualqt', 'Descarga de tablas desde el servdor', '2');
                  $('#barracarga').html('54%');
                  $('#barracarga').css('width','54%');                      
                  t1_legalqtd();                 
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_intelectualqt', 'Descarga de tablas desde el servdor', '3');
                      reintentarfuncion(t1_indicador_bse_3d, 't1_indicador_bse_3');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_legalqtd (){
    actualizarTabla('t1_legalqt', 'Descarga de tablas desde el servdor', '1');
    let tabla= 't1_legalqt';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                  actualizarTabla('t1_legalqt', 'Descarga de tablas desde el servdor', '2');
                  $('#barracarga').html('55%');
                  $('#barracarga').css('width','55%');                      
                  t1_pasosvisitad();                
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_legalqt', 'Descarga de tablas desde el servdor', '3');
                      reintentarfuncion(t1_intelectualqtd, 't1_intelectualqt');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_pasosvisitad (){
    actualizarTabla('t1_pasosvisita', 'Descarga de tablas desde el servdor', '1');
    let tabla= 't1_pasosvisita';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                  actualizarTabla('t1_pasosvisita', 'Descarga de tablas desde el servdor', '2');
                  $('#barracarga').html('56%');
                  $('#barracarga').css('width','56%');                      
                  t1_visitasrealizadasd();               
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_pasosvisita', 'Descarga de tablas desde el servdor', '3');
                      reintentarfuncion(t1_legalqtd, 't1_pasosvisitad');
                          console.log(xhr.responseText);
                      }
              })
}


function t1_visitasrealizadasd (){
    actualizarTabla('t1_visitasrealizadas', 'Descarga de tablas desde el servdor', '1');
    let tabla= 't1_visitasrealizadas';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                  actualizarTabla('t1_visitasrealizadas', 'Descarga de tablas desde el servdor', '2');
                  $('#barracarga').html('57%');
                  $('#barracarga').css('width','57%');                      
                  t1_indicador_bef_1d();               
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_visitasrealizadas', 'Descarga de tablas desde el servdor', '3');
                      reintentarfuncion(t1_pasosvisitad, 't1_legalqt');
                          console.log(xhr.responseText);
                      }
              })
}




function t1_indicador_bef_1d (){
    actualizarTabla('t1_indicador_bef_1', 'Descarga de tablas desde el servdor', '1');
    let tabla= 't1_indicador_bef_1';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                  actualizarTabla('t1_indicador_bef_1', 'Descarga de tablas desde el servdor', '2');
                  $('#barracarga').html('58%');
                  $('#barracarga').css('width','58%');                      
                  t1_indicador_bef_4d();               
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicador_bef_1', 'Descarga de tablas desde el servdor', '3');
                      reintentarfuncion(t1_visitasrealizadasd, 't1_indicador_bef_1');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_indicador_bef_4d (){
    actualizarTabla('t1_indicador_bef_4', 'Descarga de tablas desde el servdor', '1');
    let tabla= 't1_indicador_bef_4';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                  actualizarTabla('t1_indicador_bef_4', 'Descarga de tablas desde el servdor', '2');
                  $('#barracarga').html('59%');
                  $('#barracarga').css('width','59%');                      
                  t1_indicador_bef_5d();               
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicador_bef_4', 'Descarga de tablas desde el servdor', '3');
                      reintentarfuncion(t1_indicador_bef_1d, 't1_indicador_bef_4');
                          console.log(xhr.responseText);
                      }
              })
}


function t1_indicador_bef_5d (){
    actualizarTabla('t1_indicador_bef_5', 'Descarga de tablas desde el servdor', '1');
    let tabla= 't1_indicador_bef_5';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                  actualizarTabla('t1_indicador_bef_5', 'Descarga de tablas desde el servdor', '2');
                  $('#barracarga').html('60%');
                  $('#barracarga').css('width','60%');                      
                  t1_indicador_bf_4d();               
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicador_bef_5', 'Descarga de tablas desde el servdor', '3');
                      reintentarfuncion(t1_indicador_bef_4d, 't1_indicador_bef_5');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_indicador_bf_4d (){
    actualizarTabla('t1_indicador_bf_4', 'Descarga de tablas desde el servdor', '1');
    let tabla= 't1_indicador_bf_4';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                  actualizarTabla('t1_indicador_bf_4', 'Descarga de tablas desde el servdor', '2');
                  $('#barracarga').html('61%');
                  $('#barracarga').css('width','61%');                      
                  t1_indicador_bf_5d();               
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicador_bf_4', 'Descarga de tablas desde el servdor', '3');
                      reintentarfuncion(t1_indicador_bef_5d, 't1_indicador_bf_4');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_indicador_bf_5d (){
    actualizarTabla('t1_indicador_bf_5', 'Descarga de tablas desde el servdor', '1');
    let tabla= 't1_indicador_bf_5';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                  actualizarTabla('t1_indicador_bf_5', 'Descarga de tablas desde el servdor', '2');
                  $('#barracarga').html('62%');
                  $('#barracarga').css('width','62%');                      
                  t1_indicador_bi_1d();               
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicador_bf_5', 'Descarga de tablas desde el servdor', '3');
                      reintentarfuncion(t1_indicador_bf_4d, 't1_indicador_bf_5');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_indicador_bi_1d (){
    actualizarTabla('t1_indicador_bi_1', 'Descarga de tablas desde el servdor', '1');
    let tabla= 't1_indicador_bi_1';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                  actualizarTabla('t1_indicador_bi_1', 'Descarga de tablas desde el servdor', '2');
                  $('#barracarga').html('63%');
                  $('#barracarga').css('width','63%');                      
                  t1_indicador_bl_4d();               
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicador_bi_1', 'Descarga de tablas desde el servdor', '3');
                      reintentarfuncion(t1_indicador_bf_5d, 't1_indicador_bi_1');
                          console.log(xhr.responseText);
                      }
              })
}
function t1_indicador_bl_4d (){
    actualizarTabla('t1_indicador_bl_4', 'Descarga de tablas desde el servdor', '1');
    let tabla= 't1_indicador_bl_4';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                  actualizarTabla('t1_indicador_bl_4', 'Descarga de tablas desde el servdor', '2');
                  $('#barracarga').html('64%');
                  $('#barracarga').css('width','64%');                      
                  t1_indicador_bl_9d();               
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicador_bl_4', 'Descarga de tablas desde el servdor', '3');
                      reintentarfuncion(t1_indicador_bl_1d, 't1_indicador_bl_4');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_indicador_bl_9d (){
    actualizarTabla('t1_indicador_bl_9', 'Descarga de tablas desde el servdor', '1');
    let tabla= 't1_indicador_bl_9';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                  actualizarTabla('t1_indicador_bl_9', 'Descarga de tablas desde el servdor', '2');
                  $('#barracarga').html('65%');
                  $('#barracarga').css('width','65%');                      
                  t1_indicador_bl_10d();               
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicador_bl_9', 'Descarga de tablas desde el servdor', '3');
                      reintentarfuncion(t1_indicador_bl_4d, 't1_indicador_bl_9');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_indicador_bl_10d (){
    actualizarTabla('t1_indicador_bl_10', 'Descarga de tablas desde el servdor', '1');
    let tabla= 't1_indicador_bl_10';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                  actualizarTabla('t1_indicador_bl_10', 'Descarga de tablas desde el servdor', '2');
                  $('#barracarga').html('66%');
                  $('#barracarga').css('width','66%');                      
                  t1_indicador_bse_2d();               
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicador_bl_10', 'Descarga de tablas desde el servdor', '3');
                      reintentarfuncion(t1_indicador_bl_9d, 't1_indicador_bl_10');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_indicador_bse_2d (){
    actualizarTabla('t1_indicador_bse_2', 'Descarga de tablas desde el servdor', '1');
    let tabla= 't1_indicador_bse_2';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                  actualizarTabla('t1_indicador_bse_2', 'Descarga de tablas desde el servdor', '2');
                  $('#barracarga').html('67%');
                  $('#barracarga').css('width','67%');                      
                  t1_indicadores_hogard();               
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicador_bse_2', 'Descarga de tablas desde el servdor', '3');
                      reintentarfuncion(t1_indicador_bl_10d, 't1_indicador_bse_2');
                          console.log(xhr.responseText);
                      }
              })
}


function t1_indicadores_hogard (){
    actualizarTabla('t1_indicadores_hogar', 'Descarga de tablas desde el servdor', '1');
    let tabla= 't1_indicadores_hogar';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                  actualizarTabla('t1_indicadores_hogar', 'Descarga de tablas desde el servdor', '2');
                  $('#barracarga').html('68%');
                  $('#barracarga').css('width','68%');                      
                  t1_indicadores_integrantesd();               
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicadores_hogar', 'Descarga de tablas desde el servdor', '3');
                      reintentarfuncion(t1_indicador_bse_2d, 't1_indicadores_hogar');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_indicadores_integrantesd (){
    actualizarTabla('t1_indicadores_integrantes', 'Descarga de tablas desde el servdor', '1');
    let tabla= 't1_indicadores_integrantes';
            $.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                  actualizarTabla('t1_indicadores_integrantes', 'Descarga de tablas desde el servdor', '2');
                  $('#barracarga').html('69%');
                  $('#barracarga').css('width','69%');                      
                  t1_indicador_bl_1d();               
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicadores_integrantes', 'Descarga de tablas desde el servdor', '3');
                      reintentarfuncion(t1_indicadores_hogard, 't1_indicadores_integrantes');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_indicador_bl_1d (){
    actualizarTabla('t1_indicador_bl_1', 'Descarga de tablas desde el servdor', '1');
    let tabla= 't1_indicador_bl_1';
            $.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                  actualizarTabla('t1_indicador_bl_1', 'Descarga de tablas desde el servdor', '2');
                  $('#barracarga').html('70%');
                  $('#barracarga').css('width','70%');                      
                  t1_accionmovilizadoraqtd();               
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicador_bl_1', 'Descarga de tablas desde el servdor', '3');
                      reintentarfuncion(t1_indicadores_integrantesd, 't1_indicador_bl_1');
                          console.log(xhr.responseText);
                      }
              })
}


function t1_accionmovilizadoraqtd (){
  actualizarTabla('t1_accionmovilizadoraqt', 'Descarga de tablas desde el servdor', '1');
  let tabla= 't1_accionmovilizadoraqt';
$.ajax({
              url:'./sincroprivacionesd',
              method: "GET",
              data: { tabla: tabla},  
              dataType:'JSON',
              success:function(data){ 
                actualizarTabla('t1_accionmovilizadoraqt', 'Descarga de tablas desde el servdor', '2');
                $('#barracarga').html('72%');
                $('#barracarga').css('width','72%');                      
               
                t1_momentoconciented();                   
              },
              error: function(xhr, status, error) {
                actualizarTabla('t1_accionmovilizadoraqt', 'Descarga de tablas desde el servdor', '3');
                    reintentarfuncion(t1_indicador_bl_1d, 't1_indicador_bl_1');
                        console.log(xhr.responseText);
                    }
            })
}

function t1_momentoconciented (){
  actualizarTabla('t1_momentoconciente', 'Descarga de tablas desde el servdor', '1');
  let tabla= 't1_momentoconciente';
$.ajax({
              url:'./sincroprivacionesd',
              method: "GET",
              data: { tabla: tabla},  
              dataType:'JSON',
              success:function(data){ 
                actualizarTabla('t1_momentoconciente', 'Descarga de tablas desde el servdor', '2');
                $('#barracarga').html('73%');
                $('#barracarga').css('width','73%');                      
               
                t1_ordenprioridadesqtd();                   
              },
              error: function(xhr, status, error) {
                actualizarTabla('t1_momentoconciente', 'Descarga de tablas desde el servdor', '3');
                    reintentarfuncion(t1_accionmovilizadoraqtd, 't1_accionmovilizadoraqt');
                        console.log(xhr.responseText);
                    }
            })
}

function t1_ordenprioridadesqtd (){
  actualizarTabla('t1_ordenprioridadesqt', 'Descarga de tablas desde el servdor', '1');
  let tabla= 't1_ordenprioridadesqt';
$.ajax({
              url:'./sincroprivacionesd',
              method: "GET",
              data: { tabla: tabla},  
              dataType:'JSON',
              success:function(data){ 
                actualizarTabla('t1_ordenprioridadesqt', 'Descarga de tablas desde el servdor', '2');
                $('#barracarga').html('74%');
                $('#barracarga').css('width','74%');                      
               
                t1_v1actualizacionnovedadesd();                   
              },
              error: function(xhr, status, error) {
                actualizarTabla('t1_ordenprioridadesqt', 'Descarga de tablas desde el servdor', '3');
                    reintentarfuncion(t1_momentoconciented, 't1_momentoconciente');
                        console.log(xhr.responseText);
                    }
            })
}

function t1_v1actualizacionnovedadesd (){
  actualizarTabla('t1_v1actualizacionnovedades', 'Descarga de tablas desde el servdor', '1');
  let tabla= 't1_v1actualizacionnovedades';
$.ajax({
              url:'./sincroprivacionesd',
              method: "GET",
              data: { tabla: tabla},  
              dataType:'JSON',
              success:function(data){ 
                actualizarTabla('t1_v1actualizacionnovedades', 'Descarga de tablas desde el servdor', '2');
                $('#barracarga').html('75%');
                $('#barracarga').css('width','75%');                      
               
                t1_v1finalizaciond();                   
              },
              error: function(xhr, status, error) {
                actualizarTabla('t1_v1actualizacionnovedades', 'Descarga de tablas desde el servdor', '3');
                    reintentarfuncion(t1_ordenprioridadesqtd, 't1_ordenprioridadesqt');
                        console.log(xhr.responseText);
                    }
            })
}

// function t1_v1finalizaciond (){
//   actualizarTabla('t1_v1finalizacion', 'Descarga de tablas desde el servdor', '1');
//   let tabla= 't1_v1finalizacion';
// $.ajax({
//               url:'./sincroprivacionesd',
//               method: "GET",
//               data: { tabla: tabla},  
//               dataType:'JSON',
//               success:function(data){ 
//                 actualizarTabla('t1_v1finalizacion', 'Descarga de tablas desde el servdor', '2');
//                 $('#barracarga').html('76%');
//                 $('#barracarga').css('width','76%');                      
               
//                 reasignacionarribad();                   
//               },
//               error: function(xhr, status, error) {
//                 actualizarTabla('t1_v1finalizacion', 'Descarga de tablas desde el servdor', '3');
//                     reintentarfuncion(t1_v1actualizacionnovedadesd, 't1_v1actualizacionnovedades');
//                         console.log(xhr.responseText);
//                     }
//             })
// }


function t1_v1finalizaciond (){
  actualizarTabla('t1_v1finalizacion', 'Descarga de tablas desde el servdor', '1');
  let tabla= 't1_v1finalizacion';
$.ajax({
              url:'./sincroprivacionesd',
              method: "GET",
              data: { tabla: tabla},  
              dataType:'JSON',
              success:function(data){ 
                actualizarTabla('t1_v1finalizacion', 'Descarga de tablas desde el servdor', '2');
                $('#barracarga').html('77%');
                $('#barracarga').css('width','77%');                      
               
                t1_informesvisitasd();                   
              },
              error: function(xhr, status, error) {
                actualizarTabla('t1_v1finalizacion', 'Descarga de tablas desde el servdor', '3');
                    reintentarfuncion(t1_v1actualizacionnovedadesd, 't1_v1actualizacionnovedades');
                        console.log(xhr.responseText);
                    }
            })
}

 function t1_informesvisitasd (){
   actualizarTabla('t1_visitascompromisos', 'Descarga de tablas desde el servdor', '1');
   let tabla= 't1_informesvisitas';
 $.ajax({
               url:'./sincroprivacionesd',
               method: "GET",
               data: { tabla: tabla},  
               dataType:'JSON',
               success:function(data){ 
                 actualizarTabla('t1_informesvisitas', 'Descarga de tablas desde el servdor', '2');
                 $('#barracarga').html('78%');
                 $('#barracarga').css('width','78%');                      
               
                 t3_oportunidades();                   
               },
               error: function(xhr, status, error) {
                 actualizarTabla('t1_informesvisitas', 'Descarga de tablas desde el servdor', '3');
                     reintentarfuncion(t1_v1finalizaciond, 't1_v1finalizacion');
                         console.log(xhr.responseText);
                     }
             })
 }

 function t3_oportunidades (){
  actualizarTabla('t1_oportunidad', 'Descarga de tablas desde el servdor', '1');
  let tabla= 't1_oportunidad';
$.ajax({
              url:'./oportunidadesd',
              method: "GET",
              data: { tabla: tabla},  
              dataType:'JSON',
              success:function(data){ 
                actualizarTabla('t1_oportunidad', 'Descarga de tablas desde el servdor', '2');
                $('#barracarga').html('78%');
                $('#barracarga').css('width','78%');                                   
                t3_aliados();                   
              },
              error: function(xhr, status, error) {
                actualizarTabla('t1_oportunidad', 'Descarga de tablas desde el servdor', '3');
                    reintentarfuncion(t1_informesvisitasd, 't1_oportunidad');
                        console.log(xhr.responseText);
                    }
            })
}


function t3_aliados (){
  actualizarTabla('t1_lista_aliados', 'Subida base de datos al servidor', '1');
  let tabla= 't1_lista_aliados';
$.ajax({
              url:'./aliadosd',
              method: "GET",
              data: { tabla: tabla},  
              dataType:'JSON',
              success:function(data){ 
                actualizarTabla('t1_lista_aliados', 'Subida base de datos al servidor', '2');
                $('#barracarga').html('78%');
                $('#barracarga').css('width','78%');                                   
                t1_sisben();                   
              },
              error: function(xhr, status, error) {
                actualizarTabla('t1_lista_aliados', 'Subida base de datos al servidor', '3');
                    reintentarfuncion(t1_v1finalizacion, 't1_lista_aliados');
                        console.log(xhr.responseText);
                    }
            })
}

function t1_sisben (){
  actualizarTabla('t1_sisben', 'Descarga de tablas desde el servdor', '1');
  let tabla= 't1_sisben';
$.ajax({
              url:'./sincroprivacionesd',
              method: "GET",
              data: { tabla: tabla},  
              dataType:'JSON',
              success:function(data){ 
                actualizarTabla('t1_sisben', 'Descarga de tablas desde el servdor', '2');
                $('#barracarga').html('77%');
                $('#barracarga').css('width','77%');                      
               
                t1_oportunidad_hogaresd();                   
              },
              error: function(xhr, status, error) {
                actualizarTabla('t1_sisben', 'Descarga de tablas desde el servdor', '3');
                    reintentarfuncion(t3_aliados, 't1_sisben');
                        console.log(xhr.responseText);
                    }
            })
}


function t1_oportunidad_hogaresd (){
  actualizarTabla('t1_oportunidad_hogares', 'Descarga de tablas desde el servdor', '1');
  let tabla= 't1_oportunidad_hogares';
$.ajax({
              url:'./sincroprivacionesd',
              method: "GET",
              data: { tabla: tabla},  
              dataType:'JSON',
              success:function(data){ 
                actualizarTabla('t1_oportunidad_hogares', 'Descarga de tablas desde el servdor', '2');
                $('#barracarga').html('78%');
                $('#barracarga').css('width','78%');                                   
                t1_oportunidad_integrantesd();                   
              },
              error: function(xhr, status, error) {
                actualizarTabla('t1_oportunidad_hogares', 'Descarga de tablas desde el servdor', '3');
                    reintentarfuncion(t3_oportunidades, 't1_oportunidad_hogares');
                        console.log(xhr.responseText);
                    }
            })
}


function t1_oportunidad_integrantesd (){
  actualizarTabla('t1_oportunidad_integrantes', 'Descarga de tablas desde el servdor', '1');
  let tabla= 't1_oportunidad_integrantes';
$.ajax({
              url:'./sincroprivacionesd',
              method: "GET",
              data: { tabla: tabla},  
              dataType:'JSON',
              success:function(data){ 
                actualizarTabla('t1_oportunidad_integrantes', 'Descarga de tablas desde el servdor', '2');
                $('#barracarga').html('78%');
                $('#barracarga').css('width','78%');                                   
                t3_oportunidad_integranteshogar_historicod();                   
              },
              error: function(xhr, status, error) {
                actualizarTabla('t1_oportunidad_integrantes', 'Descarga de tablas desde el servdor', '3');
                    reintentarfuncion(t1_oportunidad_hogaresd, 't1_oportunidad_integrantes');
                        console.log(xhr.responseText);
                    }
            })
}

function t3_oportunidad_integranteshogar_historicod (){
  actualizarTabla('t3_oportunidad_integranteshogar_historico', 'Descarga de tablas desde el servdor', '1');
  let tabla= 't3_oportunidad_integranteshogar_historico';
$.ajax({
              url:'./sincroprivacionesd',
              method: "GET",
              data: { tabla: tabla},  
              dataType:'JSON',
              success:function(data){ 
                actualizarTabla('t3_oportunidad_integranteshogar_historico', 'Descarga de tablas desde el servdor', '2');
                $('#barracarga').html('78%');
                $('#barracarga').css('width','78%');                                   
                t_cruceinstitucional_hogarintegrantesd();                   
              },
              error: function(xhr, status, error) {
                actualizarTabla('t3_oportunidad_integranteshogar_historico', 'Descarga de tablas desde el servdor', '3');
                    reintentarfuncion(t1_oportunidad_integrantesd, 't3_oportunidad_integranteshogar_historico');
                        console.log(xhr.responseText);
                    }
            })
}


function t_cruceinstitucional_hogarintegrantesd (){
  actualizarTabla('t_cruceinstitucional_hogarintegrantes', 'Descarga de tablas desde el servdor', '1');
  let tabla= 't_cruceinstitucional_hogarintegrantes';
$.ajax({
              url:'./sincroprivacionesd',
              method: "GET",
              data: { tabla: tabla},  
              dataType:'JSON',
              success:function(data){ 
                actualizarTabla('t_cruceinstitucional_hogarintegrantes', 'Descarga de tablas desde el servdor', '2');
                $('#barracarga').html('78%');
                $('#barracarga').css('width','78%');                                   
                t3_movimiento_indicadores_hogar_ip_historicod();                   
              },
              error: function(xhr, status, error) {
                actualizarTabla('t_cruceinstitucional_hogarintegrantes', 'Descarga de tablas desde el servdor', '3');
                    reintentarfuncion(t1_oportunidad_integrantesd, 't_cruceinstitucional_hogarintegrantes');
                        console.log(xhr.responseText);
                    }
            })
}









//historicos movimientos de indicadores

function t3_movimiento_indicadores_hogar_ip_historicod (){
  actualizarTabla('t3_movimiento_indicadores_hogar_ip_historico', 'Descarga de tablas desde el servdor', '1');
  let tabla= 't3_movimiento_indicadores_hogar_ip_historico';
$.ajax({
              url:'./sincroprivacionesd',
              method: "GET",
              data: { tabla: tabla},  
              dataType:'JSON',
              success:function(data){ 
                actualizarTabla('t3_movimiento_indicadores_hogar_ip_historico', 'Descarga de tablas desde el servdor', '2');
                $('#barracarga').html('79%');
                $('#barracarga').css('width','79%');                                   
                t3_movimiento_in_integrante_cruceinstitucional_historicod();                   
              },
              error: function(xhr, status, error) {
                actualizarTabla('t3_movimiento_indicadores_hogar_ip_historico', 'Descarga de tablas desde el servdor', '3');
                    reintentarfuncion(t3_oportunidad_integranteshogar_historicod, 't3_movimiento_indicadores_hogar_ip_historico');
                        console.log(xhr.responseText);
                    }
            })
}


function t3_movimiento_in_integrante_cruceinstitucional_historicod (){
  actualizarTabla('t3_movimiento_in_integrante_cruceinstitucional_historico', 'Descarga de tablas desde el servdor', '1');
  let tabla= 't3_movimiento_in_integrante_cruceinstitucional_historico';
$.ajax({
              url:'./sincroprivacionesd',
              method: "GET",
              data: { tabla: tabla},  
              dataType:'JSON',
              success:function(data){ 
                actualizarTabla('t3_movimiento_in_integrante_cruceinstitucional_historico', 'Descarga de tablas desde el servdor', '2');
                $('#barracarga').html('79%');
                $('#barracarga').css('width','79%');                                   
                t3_movimiento_indicadores_hogar_ip_historicod();                   
              },
              error: function(xhr, status, error) {
                actualizarTabla('t3_movimiento_in_integrante_cruceinstitucional_historico', 'Descarga de tablas desde el servdor', '3');
                    reintentarfuncion(t3_oportunidad_integranteshogar_historicod, 't3_movimiento_in_integrante_cruceinstitucional_historico');
                        console.log(xhr.responseText);
                    }
            })
}

function t3_movimiento_indicadores_hogar_ip_historicod (){
  actualizarTabla('t3_movimiento_indicadores_hogar_ip_historico', 'Descarga de tablas desde el servdor', '1');
  let tabla= 't3_movimiento_indicadores_hogar_ip_historico';
$.ajax({
              url:'./sincroprivacionesd',
              method: "GET",
              data: { tabla: tabla},  
              dataType:'JSON',
              success:function(data){ 
                actualizarTabla('t3_movimiento_indicadores_hogar_ip_historico', 'Descarga de tablas desde el servdor', '2');
                $('#barracarga').html('79%');
                $('#barracarga').css('width','79%');                                   
                t3_movimiento_indicadores_hogar_oportunidades_historicod();                   
              },
              error: function(xhr, status, error) {
                actualizarTabla('t3_movimiento_indicadores_hogar_ip_historico', 'Descarga de tablas desde el servdor', '3');
                    reintentarfuncion(t3_oportunidad_integranteshogar_historicod, 't3_movimiento_indicadores_hogar_ip_historico');
                        console.log(xhr.responseText);
                    }
            })
}

function t3_movimiento_indicadores_hogar_oportunidades_historicod (){
  actualizarTabla('t3_movimiento_indicadores_hogar_oportunidades_historico', 'Descarga de tablas desde el servdor', '1');
  let tabla= 't3_movimiento_indicadores_hogar_oportunidades_historico';
$.ajax({
              url:'./sincroprivacionesd',
              method: "GET",
              data: { tabla: tabla},  
              dataType:'JSON',
              success:function(data){ 
                actualizarTabla('t3_movimiento_indicadores_hogar_oportunidades_historico', 'Descarga de tablas desde el servdor', '2');
                $('#barracarga').html('80%');
                $('#barracarga').css('width','80%');                                   
                t3_movimiento_indicadores_hogar_vp_historicod();                   
              },
              error: function(xhr, status, error) {
                actualizarTabla('t3_movimiento_indicadores_hogar_oportunidades_historico', 'Descarga de tablas desde el servdor', '3');
                    reintentarfuncion(t3_movimiento_indicadores_hogar_ip_historicod, 't3_movimiento_indicadores_hogar_oportunidades_historico');
                        console.log(xhr.responseText);
                    }
            })
}

function t3_movimiento_indicadores_hogar_vp_historicod (){
  actualizarTabla('t3_movimiento_indicadores_hogar_vp_historico', 'Descarga de tablas desde el servdor', '1');
  let tabla= 't3_movimiento_indicadores_hogar_vp_historico';
$.ajax({
              url:'./sincroprivacionesd',
              method: "GET",
              data: { tabla: tabla},  
              dataType:'JSON',
              success:function(data){ 
                actualizarTabla('t3_movimiento_indicadores_hogar_vp_historico', 'Descarga de tablas desde el servdor', '2');
                $('#barracarga').html('81%');
                $('#barracarga').css('width','81%');                                   
                t3_movimiento_indicadores_integrante_ip_historicod();                   
              },
              error: function(xhr, status, error) {
                actualizarTabla('t3_movimiento_indicadores_hogar_vp_historico', 'Descarga de tablas desde el servdor', '3');
                    reintentarfuncion(t3_movimiento_indicadores_hogar_oportunidades_historicod, 't3_movimiento_indicadores_hogar_vp_historico');
                        console.log(xhr.responseText);
                    }
            })
}

function t3_movimiento_indicadores_integrante_ip_historicod (){
  actualizarTabla('t3_movimiento_indicadores_integrante_ip_historico', 'Descarga de tablas desde el servdor', '1');
  let tabla= 't3_movimiento_indicadores_integrante_ip_historico';
$.ajax({
              url:'./sincroprivacionesd',
              method: "GET",
              data: { tabla: tabla},  
              dataType:'JSON',
              success:function(data){ 
                actualizarTabla('t3_movimiento_indicadores_integrante_ip_historico', 'Descarga de tablas desde el servdor', '2');
                $('#barracarga').html('82%');
                $('#barracarga').css('width','82%');                                   
                t3_movimiento_indicadores_integrante_oportunidades_historicod();                   
              },
              error: function(xhr, status, error) {
                actualizarTabla('t3_movimiento_indicadores_integrante_ip_historico', 'Descarga de tablas desde el servdor', '3');
                    reintentarfuncion(t3_movimiento_indicadores_hogar_vp_historicod, 't3_movimiento_indicadores_integrante_ip_historico');
                        console.log(xhr.responseText);
                    }
            })
}

function t3_movimiento_indicadores_integrante_oportunidades_historicod (){
  actualizarTabla('t3_movimiento_indicadores_integrante_oportunidades_historico', 'Descarga de tablas desde el servdor', '1');
  let tabla= 't3_movimiento_indicadores_integrante_oportunidades_historico';
$.ajax({
              url:'./sincroprivacionesd',
              method: "GET",
              data: { tabla: tabla},  
              dataType:'JSON',
              success:function(data){ 
                actualizarTabla('t3_movimiento_indicadores_integrante_oportunidades_historico', 'Descarga de tablas desde el servdor', '2');
                $('#barracarga').html('82%');
                $('#barracarga').css('width','82%');                                   
                t3_movimiento_indicadores_integrante_pv_historico_bef_1d();                   
              },
              error: function(xhr, status, error) {
                actualizarTabla('t3_movimiento_indicadores_integrante_oportunidades_historico', 'Descarga de tablas desde el servdor', '3');
                    reintentarfuncion(t3_movimiento_indicadores_integrante_ip_historicod, 't3_movimiento_indicadores_integrante_oportunidades_historico');
                        console.log(xhr.responseText);
                    }
            })
}


function t3_movimiento_indicadores_integrante_pv_historico_bef_1d (){
  actualizarTabla('t3_movimiento_indicadores_integrante_pv_historico_bef_1', 'Descarga de tablas desde el servdor', '1');
  let tabla= 't3_movimiento_indicadores_integrante_pv_historico_bef_1';
$.ajax({
              url:'./sincroprivacionesd',
              method: "GET",
              data: { tabla: tabla},  
              dataType:'JSON',
              success:function(data){ 
                actualizarTabla('t3_movimiento_indicadores_integrante_pv_historico_bef_1', 'Descarga de tablas desde el servdor', '2');
                $('#barracarga').html('83%');
                $('#barracarga').css('width','83%');                                   
                t3_movimiento_indicadores_integrante_pv_historico_bef_2d();                   
              },
              error: function(xhr, status, error) {
                actualizarTabla('t3_movimiento_indicadores_integrante_pv_historico_bef_1', 'Descarga de tablas desde el servdor', '3');
                    reintentarfuncion(t3_movimiento_indicadores_integrante_oportunidades_historicod, 't3_movimiento_indicadores_integrante_pv_historico_bef_1');
                        console.log(xhr.responseText);
                    }
            })
}

function t3_movimiento_indicadores_integrante_pv_historico_bef_2d (){
  actualizarTabla('t3_movimiento_indicadores_integrante_pv_historico_bef_2', 'Descarga de tablas desde el servdor', '1');
  let tabla= 't3_movimiento_indicadores_integrante_pv_historico_bef_2';
$.ajax({
              url:'./sincroprivacionesd',
              method: "GET",
              data: { tabla: tabla},  
              dataType:'JSON',
              success:function(data){ 
                actualizarTabla('t3_movimiento_indicadores_integrante_pv_historico_bef_2', 'Descarga de tablas desde el servdor', '2');
                $('#barracarga').html('84%');
                $('#barracarga').css('width','84%');                                   
                t3_movimiento_indicadores_integrante_pv_historico_bef_4d();                   
              },
              error: function(xhr, status, error) {
                actualizarTabla('t3_movimiento_indicadores_integrante_pv_historico_bef_2', 'Descarga de tablas desde el servdor', '3');
                    reintentarfuncion(t3_movimiento_indicadores_integrante_pv_historico_bef_1d, 't3_movimiento_indicadores_integrante_pv_historico_bef_2');
                        console.log(xhr.responseText);
                    }
            })
}

function t3_movimiento_indicadores_integrante_pv_historico_bef_4d (){
  actualizarTabla('t3_movimiento_indicadores_integrante_pv_historico_bef_4', 'Descarga de tablas desde el servdor', '1');
  let tabla= 't3_movimiento_indicadores_integrante_pv_historico_bef_4';
$.ajax({
              url:'./sincroprivacionesd',
              method: "GET",
              data: { tabla: tabla},  
              dataType:'JSON',
              success:function(data){ 
                actualizarTabla('t3_movimiento_indicadores_integrante_pv_historico_bef_4', 'Descarga de tablas desde el servdor', '2');
                $('#barracarga').html('85%');
                $('#barracarga').css('width','85%');                                   
                t3_movimiento_indicadores_integrante_pv_historico_bf_4d();                   
              },
              error: function(xhr, status, error) {
                actualizarTabla('t3_movimiento_indicadores_integrante_pv_historico_bef_4', 'Descarga de tablas desde el servdor', '3');
                    reintentarfuncion(t3_movimiento_indicadores_integrante_pv_historico_bef_2d, 't3_movimiento_indicadores_integrante_pv_historico_bef_4');
                        console.log(xhr.responseText);
                    }
            })
}

function t3_movimiento_indicadores_integrante_pv_historico_bf_4d (){
  actualizarTabla('t3_movimiento_indicadores_integrante_pv_historico_bf_4', 'Descarga de tablas desde el servdor', '1');
  let tabla= 't3_movimiento_indicadores_integrante_pv_historico_bf_4';
$.ajax({
              url:'./sincroprivacionesd',
              method: "GET",
              data: { tabla: tabla},  
              dataType:'JSON',
              success:function(data){ 
                actualizarTabla('t3_movimiento_indicadores_integrante_pv_historico_bf_4', 'Descarga de tablas desde el servdor', '2');
                $('#barracarga').html('86%');
                $('#barracarga').css('width','86%');                                   
                t3_movimiento_indicadores_integrante_pv_historico_bf_5d();                   
              },
              error: function(xhr, status, error) {
                actualizarTabla('t3_movimiento_indicadores_integrante_pv_historico_bf_4', 'Descarga de tablas desde el servdor', '3');
                    reintentarfuncion(t3_movimiento_indicadores_integrante_pv_historico_bef_4d, 't3_movimiento_indicadores_integrante_pv_historico_bf_4');
                        console.log(xhr.responseText);
                    }
            })
}

function t3_movimiento_indicadores_integrante_pv_historico_bf_5d (){
  actualizarTabla('t3_movimiento_indicadores_integrante_pv_historico_bf_5', 'Descarga de tablas desde el servdor', '1');
  let tabla= 't3_movimiento_indicadores_integrante_pv_historico_bf_5';
$.ajax({
              url:'./sincroprivacionesd',
              method: "GET",
              data: { tabla: tabla},  
              dataType:'JSON',
              success:function(data){ 
                actualizarTabla('t3_movimiento_indicadores_integrante_pv_historico_bf_5', 'Descarga de tablas desde el servdor', '2');
                $('#barracarga').html('86%');
                $('#barracarga').css('width','86%');                                   
                t3_movimiento_indicadores_integrante_pv_historico_bi_1d();                   
              },
              error: function(xhr, status, error) {
                actualizarTabla('t3_movimiento_indicadores_integrante_pv_historico_bf_5', 'Descarga de tablas desde el servdor', '3');
                    reintentarfuncion(t3_movimiento_indicadores_integrante_pv_historico_bf_4d, 't3_movimiento_indicadores_integrante_pv_historico_bf_5');
                        console.log(xhr.responseText);
                    }
            })
}

function t3_movimiento_indicadores_integrante_pv_historico_bi_1d (){
  actualizarTabla('t3_movimiento_indicadores_integrante_pv_historico_bi_1', 'Descarga de tablas desde el servdor', '1');
  let tabla= 't3_movimiento_indicadores_integrante_pv_historico_bi_1';
$.ajax({
              url:'./sincroprivacionesd',
              method: "GET",
              data: { tabla: tabla},  
              dataType:'JSON',
              success:function(data){ 
                actualizarTabla('t3_movimiento_indicadores_integrante_pv_historico_bi_1', 'Descarga de tablas desde el servdor', '2');
                $('#barracarga').html('87%');
                $('#barracarga').css('width','87%');                                   
                t3_movimiento_indicadores_integrante_pv_historico_bse_3d();                   
              },
              error: function(xhr, status, error) {
                actualizarTabla('t3_movimiento_indicadores_integrante_pv_historico_bi_1', 'Descarga de tablas desde el servdor', '3');
                    reintentarfuncion(t3_movimiento_indicadores_integrante_pv_historico_bf_5d, 't3_movimiento_indicadores_integrante_pv_historico_bi_1');
                        console.log(xhr.responseText);
                    }
            })
}

function t3_movimiento_indicadores_integrante_pv_historico_bse_3d (){
  actualizarTabla('t3_movimiento_indicadores_integrante_pv_historico_bse_3', 'Descarga de tablas desde el servdor', '1');
  let tabla= 't3_movimiento_indicadores_integrante_pv_historico_bse_3';
$.ajax({
              url:'./sincroprivacionesd',
              method: "GET",
              data: { tabla: tabla},  
              dataType:'JSON',
              success:function(data){ 
                actualizarTabla('t3_movimiento_indicadores_integrante_pv_historico_bse_3', 'Descarga de tablas desde el servdor', '2');
                $('#barracarga').html('88%');
                $('#barracarga').css('width','88%');                                   
                t3_movimiento_indicadores_integrante_pv_historico_bse_7d();                   
              },
              error: function(xhr, status, error) {
                actualizarTabla('t3_movimiento_indicadores_integrante_pv_historico_bse_3', 'Descarga de tablas desde el servdor', '3');
                    reintentarfuncion(t3_movimiento_indicadores_integrante_pv_historico_bi_1d, 't3_movimiento_indicadores_integrante_pv_historico_bse_3');
                        console.log(xhr.responseText);
                    }
            })
}

function t3_movimiento_indicadores_integrante_pv_historico_bse_7d (){
  actualizarTabla('t3_movimiento_indicadores_integrante_pv_historico_bse_7', 'Descarga de tablas desde el servdor', '1');
  let tabla= 't3_movimiento_indicadores_integrante_pv_historico_bse_7';
$.ajax({
              url:'./sincroprivacionesd',
              method: "GET",
              data: { tabla: tabla},  
              dataType:'JSON',
              success:function(data){ 
                actualizarTabla('t3_movimiento_indicadores_integrante_pv_historico_bse_7', 'Descarga de tablas desde el servdor', '2');
                $('#barracarga').html('89%');
                $('#barracarga').css('width','89%');                                   
                t3_movimiento_indicadores_integrante_vp_historicod();                   
              },
              error: function(xhr, status, error) {
                actualizarTabla('t3_movimiento_indicadores_integrante_pv_historico_bse_7', 'Descarga de tablas desde el servdor', '3');
                    reintentarfuncion(t3_movimiento_indicadores_integrante_pv_historico_bse_3d, 't3_movimiento_indicadores_integrante_pv_historico_bse_7');
                        console.log(xhr.responseText);
                    }
            })
}

function t3_movimiento_indicadores_integrante_vp_historicod (){
  actualizarTabla('t3_movimiento_indicadores_integrante_vp_historico', 'Descarga de tablas desde el servdor', '1');
  let tabla= 't3_movimiento_indicadores_integrante_vp_historico';
$.ajax({
              url:'./sincroprivacionesd',
              method: "GET",
              data: { tabla: tabla},  
              dataType:'JSON',
              success:function(data){ 
                actualizarTabla('t3_movimiento_indicadores_integrante_vp_historico', 'Descarga de tablas desde el servdor', '2');
                $('#barracarga').html('90%');
                $('#barracarga').css('width','90%');                                   
                t3_movimiento_indicadores_integrante_pv_historico_bse_8_ffesd();                   
              },
              error: function(xhr, status, error) {
                actualizarTabla('t3_movimiento_indicadores_integrante_vp_historico', 'Descarga de tablas desde el servdor', '3');
                    reintentarfuncion(t3_movimiento_indicadores_integrante_pv_historico_bse_7d, 't3_movimiento_indicadores_integrante_vp_historico');
                        console.log(xhr.responseText);
                    }
            })
}








function t3_movimiento_indicadores_integrante_pv_historico_bse_8_ffesd (){
  actualizarTabla('t3_movimiento_indicadores_integrante_pv_historico_bse_8_ffes', 'Descarga de tablas desde el servdor', '1');
  let tabla= 't3_movimiento_indicadores_integrante_pv_historico_bse_8_ffes';
$.ajax({
              url:'./sincroprivacionesd',
              method: "GET",
              data: { tabla: tabla},  
              dataType:'JSON',
              success:function(data){ 
                actualizarTabla('t3_movimiento_indicadores_integrante_pv_historico_bse_8_ffes', 'Descarga de tablas desde el servdor', '2');
                $('#barracarga').html('90%');
                $('#barracarga').css('width','90%');                                   
                t3_movimiento_indicadores_integrante_pv_historico_bse_9_ffesd();                   
              },
              error: function(xhr, status, error) {
                actualizarTabla('t3_movimiento_indicadores_integrante_pv_historico_bse_8_ffes', 'Descarga de tablas desde el servdor', '3');
                    reintentarfuncion(t3_movimiento_indicadores_integrante_vp_historicod, 't3_movimiento_indicadores_integrante_pv_historico_bse_8_ffes');
                        console.log(xhr.responseText);
                    }
            })
}

function t3_movimiento_indicadores_integrante_pv_historico_bse_9_ffesd (){
  actualizarTabla('t3_movimiento_indicadores_integrante_pv_historico_bse_9_ffes', 'Descarga de tablas desde el servdor', '1');
  let tabla= 't3_movimiento_indicadores_integrante_pv_historico_bse_9_ffes';
$.ajax({
              url:'./sincroprivacionesd',
              method: "GET",
              data: { tabla: tabla},  
              dataType:'JSON',
              success:function(data){ 
                actualizarTabla('t3_movimiento_indicadores_integrante_pv_historico_bse_9_ffes', 'Descarga de tablas desde el servdor', '2');
                $('#barracarga').html('90%');
                $('#barracarga').css('width','90%');                                   
                t3_movimiento_indicadores_integrante_pv_historico_bse_10_ffesd();                   
              },
              error: function(xhr, status, error) {
                actualizarTabla('t3_movimiento_indicadores_integrante_pv_historico_bse_9_ffes', 'Descarga de tablas desde el servdor', '3');
                    reintentarfuncion(t3_movimiento_indicadores_integrante_pv_historico_bse_8_ffesd, 't3_movimiento_indicadores_integrante_pv_historico_bse_9_ffes');
                        console.log(xhr.responseText);
                    }
            })
}

function t3_movimiento_indicadores_integrante_pv_historico_bse_10_ffesd (){
  actualizarTabla('t3_movimiento_indicadores_integrante_pv_historico_bse_10_ffes', 'Descarga de tablas desde el servdor', '1');
  let tabla= 't3_movimiento_indicadores_integrante_pv_historico_bse_10_ffes';
$.ajax({
              url:'./sincroprivacionesd',
              method: "GET",
              data: { tabla: tabla},  
              dataType:'JSON',
              success:function(data){ 
                actualizarTabla('t3_movimiento_indicadores_integrante_pv_historico_bse_10_ffes', 'Descarga de tablas desde el servdor', '2');
                $('#barracarga').html('90%');
                $('#barracarga').css('width','90%');                                   
                t3_movimiento_indicadores_integrante_pv_historico_bl_11_ffesd();                   
              },
              error: function(xhr, status, error) {
                actualizarTabla('t3_movimiento_indicadores_integrante_pv_historico_bse_10_ffes', 'Descarga de tablas desde el servdor', '3');
                    reintentarfuncion(t3_movimiento_indicadores_integrante_pv_historico_bse_9_ffesd, 't3_movimiento_indicadores_integrante_pv_historico_bse_10_ffes');
                        console.log(xhr.responseText);
                    }
            })
}

function t3_movimiento_indicadores_integrante_pv_historico_bl_11_ffesd (){
  actualizarTabla('t3_movimiento_indicadores_integrante_pv_historico_bl_11_ffes', 'Descarga de tablas desde el servdor', '1');
  let tabla= 't3_movimiento_indicadores_integrante_pv_historico_bl_11_ffes';
$.ajax({
              url:'./sincroprivacionesd',
              method: "GET",
              data: { tabla: tabla},  
              dataType:'JSON',
              success:function(data){ 
                actualizarTabla('t3_movimiento_indicadores_integrante_pv_historico_bl_11_ffes', 'Descarga de tablas desde el servdor', '2');
                $('#barracarga').html('90%');
                $('#barracarga').css('width','90%');                                   
                t3_movimiento_indicadores_integrante_pv_historico_bef_7_ffesd();                   
              },
              error: function(xhr, status, error) {
                actualizarTabla('t3_movimiento_indicadores_integrante_pv_historico_bl_11_ffes', 'Descarga de tablas desde el servdor', '3');
                    reintentarfuncion(t3_movimiento_indicadores_integrante_pv_historico_bse_10_ffesd, 't3_movimiento_indicadores_integrante_pv_historico_bl_11_ffes');
                        console.log(xhr.responseText);
                    }
            })
}

function t3_movimiento_indicadores_integrante_pv_historico_bef_7_ffesd (){
  actualizarTabla('t3_movimiento_indicadores_integrante_pv_historico_bef_7_ffes', 'Descarga de tablas desde el servdor', '1');
  let tabla= 't3_movimiento_indicadores_integrante_pv_historico_bef_7_ffes';
$.ajax({
              url:'./sincroprivacionesd',
              method: "GET",
              data: { tabla: tabla},  
              dataType:'JSON',
              success:function(data){ 
                actualizarTabla('t3_movimiento_indicadores_integrante_pv_historico_bef_7_ffes', 'Descarga de tablas desde el servdor', '2');
                $('#barracarga').html('90%');
                $('#barracarga').css('width','90%');                                   
                t3_movimiento_indicadores_integrante_pv_historico_bl_12_ffesd();                   
              },
              error: function(xhr, status, error) {
                actualizarTabla('t3_movimiento_indicadores_integrante_pv_historico_bef_7_ffes', 'Descarga de tablas desde el servdor', '3');
                    reintentarfuncion(t3_movimiento_indicadores_integrante_pv_historico_bl_11_ffesd, 't3_movimiento_indicadores_integrante_pv_historico_bef_7_ffes');
                        console.log(xhr.responseText);
                    }
            })
}

function t3_movimiento_indicadores_integrante_pv_historico_bl_12_ffesd (){
  actualizarTabla('t3_movimiento_indicadores_integrante_pv_historico_bl_12_ffes', 'Descarga de tablas desde el servdor', '1');
  let tabla= 't3_movimiento_indicadores_integrante_pv_historico_bl_12_ffes';
$.ajax({
              url:'./sincroprivacionesd',
              method: "GET",
              data: { tabla: tabla},  
              dataType:'JSON',
              success:function(data){ 
                actualizarTabla('t3_movimiento_indicadores_integrante_pv_historico_bl_12_ffes', 'Descarga de tablas desde el servdor', '2');
                $('#barracarga').html('90%');
                $('#barracarga').css('width','90%');                                   
                t1_accionmovilizadoracompromisosd();                   
              },
              error: function(xhr, status, error) {
                actualizarTabla('t3_movimiento_indicadores_integrante_pv_historico_bl_12_ffes', 'Descarga de tablas desde el servdor', '3');
                    reintentarfuncion(t3_movimiento_indicadores_integrante_pv_historico_bef_7_ffesd, 't3_movimiento_indicadores_integrante_pv_historico_bl_12_ffes');
                        console.log(xhr.responseText);
                    }
            })
}
























function t1_accionmovilizadoracompromisosd (){
  actualizarTabla('t1_accionmovilizadoracompromisos', 'Descarga de tablas desde el servdor', '1');
  let tabla= 't1_accionmovilizadoracompromisos';
$.ajax({
              url:'./sincroprivacionesd',
              method: "GET",
              data: { tabla: tabla},  
              dataType:'JSON',
              success:function(data){ 
                actualizarTabla('t1_accionmovilizadoracompromisos', 'Descarga de tablas desde el servdor', '2');
                $('#barracarga').html('90%');
                $('#barracarga').css('width','90%');                                   
                t1_indicadores_integrantes_ffesd();                   
              },
              error: function(xhr, status, error) {
                actualizarTabla('t1_accionmovilizadoracompromisos', 'Descarga de tablas desde el servdor', '3');
                    reintentarfuncion(t3_movimiento_indicadores_integrante_pv_historico_bse_7d, 't1_accionmovilizadoracompromisos');
                        console.log(xhr.responseText);
                    }
            })
}

//FFES 



function t1_indicadores_integrantes_ffesd (){
  actualizarTabla('t1_indicadores_integrantes_ffes', 'Descarga de tablas desde el servdor', '1');
  let tabla= 't1_indicadores_integrantes_ffes';
$.ajax({
              url:'./sincroprivacionesd',
              method: "GET",
              data: { tabla: tabla},  
              dataType:'JSON',
              success:function(data){ 
                actualizarTabla('t1_indicadores_integrantes_ffes', 'Descarga de tablas desde el servdor', '2');
                $('#barracarga').html('90%');
                $('#barracarga').css('width','90%');                                   
                t1_indicadores_hogar_ffesd();                   
              },
              error: function(xhr, status, error) {
                actualizarTabla('t1_indicadores_integrantes_ffes', 'Descarga de tablas desde el servdor', '3');
                    reintentarfuncion(t1_accionmovilizadoracompromisosd, 't1_indicadores_integrantes_ffes');
                        console.log(xhr.responseText);
                    }
            })
}


function t1_indicadores_hogar_ffesd (){
  actualizarTabla('t1_indicadores_hogar_ffes', 'Descarga de tablas desde el servdor', '1');
  let tabla= 't1_indicadores_hogar_ffes';
$.ajax({
              url:'./sincroprivacionesd',
              method: "GET",
              data: { tabla: tabla},  
              dataType:'JSON',
              success:function(data){ 
                actualizarTabla('t1_indicadores_hogar_ffes', 'Descarga de tablas desde el servdor', '2');
                $('#barracarga').html('90%');
                $('#barracarga').css('width','90%');                                   
                t1_caracterizacion_hogar_ffesd();                   
              },
              error: function(xhr, status, error) {
                actualizarTabla('t1_indicadores_hogar_ffes', 'Descarga de tablas desde el servdor', '3');
                    reintentarfuncion(t1_indicadores_integrantes_ffesd, 't1_indicadores_hogar_ffes');
                        console.log(xhr.responseText);
                    }
            })
}



function t1_caracterizacion_hogar_ffesd (){
  actualizarTabla('t1_caracterizacion_hogar_ffes', 'Descarga de tablas desde el servdor', '1');
  let tabla= 't1_caracterizacion_hogar_ffes';
$.ajax({
              url:'./sincroprivacionesd',
              method: "GET",
              data: { tabla: tabla},  
              dataType:'JSON',
              success:function(data){ 
                actualizarTabla('t1_caracterizacion_hogar_ffes', 'Descarga de tablas desde el servdor', '2');
                $('#barracarga').html('90%');
                $('#barracarga').css('width','90%');                                   
                t1_indicador_bef_7_ffesd();                   
              },
              error: function(xhr, status, error) {
                actualizarTabla('t1_caracterizacion_hogar_ffes', 'Descarga de tablas desde el servdor', '3');
                    reintentarfuncion(t1_indicadores_hogar_ffesd, 't1_indicadores_hogar_ffes');
                        console.log(xhr.responseText);
                    }
            })
}




function t1_indicador_bef_7_ffesd (){
  actualizarTabla('t1_indicador_bef_7_ffes', 'Descarga de tablas desde el servdor', '1');
  let tabla= 't1_indicador_bef_7_ffes';
$.ajax({
              url:'./sincroprivacionesd',
              method: "GET",
              data: { tabla: tabla},  
              dataType:'JSON',
              success:function(data){ 
                actualizarTabla('t1_indicador_bef_7_ffes', 'Descarga de tablas desde el servdor', '2');
                $('#barracarga').html('90%');
                $('#barracarga').css('width','90%');                                   
                t1_indicador_bl_11_ffesd();                   
              },
              error: function(xhr, status, error) {
                actualizarTabla('t1_indicador_bef_7_ffes', 'Descarga de tablas desde el servdor', '3');
                    reintentarfuncion(t1_indicadores_hogar_ffesd, 't1_indicador_bef_7_ffes');
                        console.log(xhr.responseText);
                    }
            })
}


function t1_indicador_bl_11_ffesd (){
  actualizarTabla('t1_indicador_bl_11_ffes', 'Descarga de tablas desde el servdor', '1');
  let tabla= 't1_indicador_bl_11_ffes';
$.ajax({
              url:'./sincroprivacionesd',
              method: "GET",
              data: { tabla: tabla},  
              dataType:'JSON',
              success:function(data){ 
                actualizarTabla('t1_indicador_bl_11_ffes', 'Descarga de tablas desde el servdor', '2');
                $('#barracarga').html('90%');
                $('#barracarga').css('width','90%');                                   
                t1_indicador_bl_12_ffesd();                   
              },
              error: function(xhr, status, error) {
                actualizarTabla('t1_indicador_bl_11_ffes', 'Descarga de tablas desde el servdor', '3');
                    reintentarfuncion(t1_indicadores_hogar_ffesd, 't1_indicador_bl_11_ffes');
                        console.log(xhr.responseText);
                    }
            })
}


function t1_indicador_bl_12_ffesd (){
  actualizarTabla('t1_indicador_bl_12_ffes', 'Descarga de tablas desde el servdor', '1');
  let tabla= 't1_indicador_bl_12_ffes';
$.ajax({
              url:'./sincroprivacionesd',
              method: "GET",
              data: { tabla: tabla},  
              dataType:'JSON',
              success:function(data){ 
                actualizarTabla('t1_indicador_bl_12_ffes', 'Descarga de tablas desde el servdor', '2');
                $('#barracarga').html('90%');
                $('#barracarga').css('width','90%');                                   
                t1_indicador_bse_8_ffesd();                   
              },
              error: function(xhr, status, error) {
                actualizarTabla('t1_indicador_bl_12_ffes', 'Descarga de tablas desde el servdor', '3');
                    reintentarfuncion(t1_indicador_bl_11_ffesd, 't1_indicador_bl_12_ffes');
                        console.log(xhr.responseText);
                    }
            })
}

function t1_indicador_bse_8_ffesd (){
  actualizarTabla('t1_indicador_bse_8_ffes', 'Descarga de tablas desde el servdor', '1');
  let tabla= 't1_indicador_bse_8_ffes';
$.ajax({
              url:'./sincroprivacionesd',
              method: "GET",
              data: { tabla: tabla},  
              dataType:'JSON',
              success:function(data){ 
                actualizarTabla('t1_indicador_bse_8_ffes', 'Descarga de tablas desde el servdor', '2');
                $('#barracarga').html('90%');
                $('#barracarga').css('width','90%');                                   
                t1_indicador_bse_9_ffesd();                   
              },
              error: function(xhr, status, error) {
                actualizarTabla('t1_indicador_bse_8_ffes', 'Descarga de tablas desde el servdor', '3');
                    reintentarfuncion(t1_indicador_bl_12_ffesd, 't1_indicador_bse_8_ffes');
                        console.log(xhr.responseText);
                    }
            })
}

function t1_indicador_bse_9_ffesd (){
  actualizarTabla('t1_indicador_bse_9_ffes', 'Descarga de tablas desde el servdor', '1');
  let tabla= 't1_indicador_bse_9_ffes';
$.ajax({
              url:'./sincroprivacionesd',
              method: "GET",
              data: { tabla: tabla},  
              dataType:'JSON',
              success:function(data){ 
                actualizarTabla('t1_indicador_bse_9_ffes', 'Descarga de tablas desde el servdor', '2');
                $('#barracarga').html('90%');
                $('#barracarga').css('width','90%');                                   
                t1_indicador_bse_10_ffesd();                   
              },
              error: function(xhr, status, error) {
                actualizarTabla('t1_indicador_bse_9_ffes', 'Descarga de tablas desde el servdor', '3');
                    reintentarfuncion(t1_indicador_bse_8_ffesd, 't1_indicador_bse_9_ffes');
                        console.log(xhr.responseText);
                    }
            })
}

function t1_indicador_bse_10_ffesd (){
  actualizarTabla('t1_indicador_bse_10_ffes', 'Descarga de tablas desde el servdor', '1');
  let tabla= 't1_indicador_bse_10_ffes';
$.ajax({
              url:'./sincroprivacionesd',
              method: "GET",
              data: { tabla: tabla},  
              dataType:'JSON',
              success:function(data){ 
                actualizarTabla('t1_indicador_bse_10_ffes', 'Descarga de tablas desde el servdor', '2');
                $('#barracarga').html('90%');
                $('#barracarga').css('width','90%');                                   
                t1_caracterizacionIntegrante_conoce_instituciones_ffesd();                   
              },
              error: function(xhr, status, error) {
                actualizarTabla('t1_indicador_bse_10_ffes', 'Descarga de tablas desde el servdor', '3');
                    reintentarfuncion(t1_indicador_bse_9_ffesd, 't1_indicador_bse_10_ffes');
                        console.log(xhr.responseText);
                    }
            })
}

function t1_caracterizacionIntegrante_conoce_instituciones_ffesd (){
  actualizarTabla('t1_caracterizacionIntegrante_conoce_instituciones_ffes', 'Descarga de tablas desde el servdor', '1');
  let tabla= 't1_caracterizacionIntegrante_conoce_instituciones_ffes';
$.ajax({
              url:'./sincroprivacionesd',
              method: "GET",
              data: { tabla: tabla},  
              dataType:'JSON',
              success:function(data){ 
                actualizarTabla('t1_caracterizacionIntegrante_conoce_instituciones_ffes', 'Descarga de tablas desde el servdor', '2');
                $('#barracarga').html('90%');
                $('#barracarga').css('width','90%');                                   
                t1_caracterizacionIntegrante_primeraInfancia_ffesd();                   
              },
              error: function(xhr, status, error) {
                actualizarTabla('t1_caracterizacionIntegrante_conoce_instituciones_ffes', 'Descarga de tablas desde el servdor', '3');
                    reintentarfuncion(t1_indicador_bse_10_ffesd, 't1_caracterizacionIntegrante_conoce_instituciones_ffes');
                        console.log(xhr.responseText);
                    }
            })
}


function t1_caracterizacionIntegrante_primeraInfancia_ffesd (){
  actualizarTabla('t1_caracterizacionIntegrante_primeraInfancia_ffes', 'Descarga de tablas desde el servdor', '1');
  let tabla= 't1_caracterizacionIntegrante_primeraInfancia_ffes';
$.ajax({
              url:'./sincroprivacionesd',
              method: "GET",
              data: { tabla: tabla},  
              dataType:'JSON',
              success:function(data){ 
                actualizarTabla('t1_caracterizacionIntegrante_primeraInfancia_ffes', 'Descarga de tablas desde el servdor', '2');
                $('#barracarga').html('90%');
                $('#barracarga').css('width','90%');                                   
                t1_caracterizacionIntegrante_estrategia_ffesd();                   
              },
              error: function(xhr, status, error) {
                actualizarTabla('t1_caracterizacionIntegrante_primeraInfancia_ffes', 'Descarga de tablas desde el servdor', '3');
                    reintentarfuncion(t1_caracterizacionIntegrante_conoce_instituciones_ffesd, 't1_caracterizacionIntegrante_primeraInfancia_ffes');
                        console.log(xhr.responseText);
                    }
            })
}

function t1_caracterizacionIntegrante_estrategia_ffesd (){
  actualizarTabla('t1_caracterizacionIntegrante_estrategia_ffes', 'Descarga de tablas desde el servdor', '1');
  let tabla= 't1_caracterizacionIntegrante_estrategia_ffes';
$.ajax({
              url:'./sincroprivacionesd',
              method: "GET",
              data: { tabla: tabla},  
              dataType:'JSON',
              success:function(data){ 
                actualizarTabla('t1_caracterizacionIntegrante_estrategia_ffes', 'Descarga de tablas desde el servdor', '2');
                $('#barracarga').html('90%');
                $('#barracarga').css('width','90%');                                   
                t1_saludemocionalqtd();                   
              },
              error: function(xhr, status, error) {
                actualizarTabla('t1_caracterizacionIntegrante_estrategia_ffes', 'Descarga de tablas desde el servdor', '3');
                    reintentarfuncion(t1_caracterizacionIntegrante_primeraInfancia_ffesd, 't1_caracterizacionIntegrante_estrategia_ffes');
                        console.log(xhr.responseText);
                    }
            })
}

// FIN FFES









function t1_saludemocionalqtd (){
    actualizarTabla('t1_saludemocionalqt', 'Descarga de tablas desde el servdor', '1');
    let tabla= 't1_saludemocionalqt';
$.ajax({
                url:'./sincroprivacionesd',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                  actualizarTabla('t1_saludemocionalqt', 'Descarga de tablas desde el servdor', '2');
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
                 
                       todook();
                  detenerReloj();                    
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_saludemocionalqt', 'Descarga de tablas desde el servdor', '3');
                      reintentarfuncion(t3_oportunidad_integranteshogar_historicod, 't1_informesvisitas');
                          console.log(xhr.responseText);
                      }
              })
}



