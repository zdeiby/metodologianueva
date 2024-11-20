
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
                  t1_indicador_bf_1d();                 
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicador_bef_3', 'Descarga de tablas desde el servdor', '3');
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
  actualizarTabla('t1_accionmovilizadoraqt', 'Subida base de datos al servidor', '1');
  let tabla= 't1_accionmovilizadoraqt';
$.ajax({
              url:'./sincroprivacionesd',
              method: "GET",
              data: { tabla: tabla},  
              dataType:'JSON',
              success:function(data){ 
                actualizarTabla('t1_accionmovilizadoraqt', 'Subida base de datos al servidor', '2');
                $('#barracarga').html('72%');
                $('#barracarga').css('width','72%');                      
               
                t1_momentoconciented();                   
              },
              error: function(xhr, status, error) {
                actualizarTabla('t1_accionmovilizadoraqt', 'Subida base de datos al servidor', '3');
                    reintentarfuncion(t1_indicador_bl_1d, 't1_indicador_bl_1');
                        console.log(xhr.responseText);
                    }
            })
}

function t1_momentoconciented (){
  actualizarTabla('t1_momentoconciente', 'Subida base de datos al servidor', '1');
  let tabla= 't1_momentoconciente';
$.ajax({
              url:'./sincroprivacionesd',
              method: "GET",
              data: { tabla: tabla},  
              dataType:'JSON',
              success:function(data){ 
                actualizarTabla('t1_momentoconciente', 'Subida base de datos al servidor', '2');
                $('#barracarga').html('73%');
                $('#barracarga').css('width','73%');                      
               
                t1_ordenprioridadesqtd();                   
              },
              error: function(xhr, status, error) {
                actualizarTabla('t1_momentoconciente', 'Subida base de datos al servidor', '3');
                    reintentarfuncion(t1_accionmovilizadoraqtd, 't1_accionmovilizadoraqt');
                        console.log(xhr.responseText);
                    }
            })
}

function t1_ordenprioridadesqtd (){
  actualizarTabla('t1_ordenprioridadesqt', 'Subida base de datos al servidor', '1');
  let tabla= 't1_ordenprioridadesqt';
$.ajax({
              url:'./sincroprivacionesd',
              method: "GET",
              data: { tabla: tabla},  
              dataType:'JSON',
              success:function(data){ 
                actualizarTabla('t1_ordenprioridadesqt', 'Subida base de datos al servidor', '2');
                $('#barracarga').html('74%');
                $('#barracarga').css('width','74%');                      
               
                t1_v1actualizacionnovedadesd();                   
              },
              error: function(xhr, status, error) {
                actualizarTabla('t1_ordenprioridadesqt', 'Subida base de datos al servidor', '3');
                    reintentarfuncion(t1_momentoconciented, 't1_momentoconciente');
                        console.log(xhr.responseText);
                    }
            })
}

function t1_v1actualizacionnovedadesd (){
  actualizarTabla('t1_v1actualizacionnovedades', 'Subida base de datos al servidor', '1');
  let tabla= 't1_v1actualizacionnovedades';
$.ajax({
              url:'./sincroprivacionesd',
              method: "GET",
              data: { tabla: tabla},  
              dataType:'JSON',
              success:function(data){ 
                actualizarTabla('t1_v1actualizacionnovedades', 'Subida base de datos al servidor', '2');
                $('#barracarga').html('75%');
                $('#barracarga').css('width','75%');                      
               
                t1_v1finalizaciond();                   
              },
              error: function(xhr, status, error) {
                actualizarTabla('t1_v1actualizacionnovedades', 'Subida base de datos al servidor', '3');
                    reintentarfuncion(t1_ordenprioridadesqtd, 't1_ordenprioridadesqt');
                        console.log(xhr.responseText);
                    }
            })
}

// function t1_v1finalizaciond (){
//   actualizarTabla('t1_v1finalizacion', 'Subida base de datos al servidor', '1');
//   let tabla= 't1_v1finalizacion';
// $.ajax({
//               url:'./sincroprivacionesd',
//               method: "GET",
//               data: { tabla: tabla},  
//               dataType:'JSON',
//               success:function(data){ 
//                 actualizarTabla('t1_v1finalizacion', 'Subida base de datos al servidor', '2');
//                 $('#barracarga').html('76%');
//                 $('#barracarga').css('width','76%');                      
               
//                 reasignacionarribad();                   
//               },
//               error: function(xhr, status, error) {
//                 actualizarTabla('t1_v1finalizacion', 'Subida base de datos al servidor', '3');
//                     reintentarfuncion(t1_v1actualizacionnovedadesd, 't1_v1actualizacionnovedades');
//                         console.log(xhr.responseText);
//                     }
//             })
// }


function t1_v1finalizaciond (){
  actualizarTabla('t1_v1finalizacion', 'Subida base de datos al servidor', '1');
  let tabla= 't1_v1finalizacion';
$.ajax({
              url:'./sincroprivacionesd',
              method: "GET",
              data: { tabla: tabla},  
              dataType:'JSON',
              success:function(data){ 
                actualizarTabla('t1_v1finalizacion', 'Subida base de datos al servidor', '2');
                $('#barracarga').html('77%');
                $('#barracarga').css('width','77%');                      
               
                t1_informesvisitasd();                   
              },
              error: function(xhr, status, error) {
                actualizarTabla('t1_v1finalizacion', 'Subida base de datos al servidor', '3');
                    reintentarfuncion(t1_v1actualizacionnovedadesd, 't1_v1actualizacionnovedades');
                        console.log(xhr.responseText);
                    }
            })
}

 function t1_informesvisitasd (){
   actualizarTabla('t1_visitascompromisos', 'Subida base de datos al servidor', '1');
   let tabla= 't1_informesvisitas';
 $.ajax({
               url:'./sincroprivacionesd',
               method: "GET",
               data: { tabla: tabla},  
               dataType:'JSON',
               success:function(data){ 
                 actualizarTabla('t1_informesvisitas', 'Subida base de datos al servidor', '2');
                 $('#barracarga').html('78%');
                 $('#barracarga').css('width','78%');                      
               
                 t3_oportunidades();                   
               },
               error: function(xhr, status, error) {
                 actualizarTabla('t1_informesvisitas', 'Subida base de datos al servidor', '3');
                     reintentarfuncion(t1_v1finalizaciond, 't1_v1finalizacion');
                         console.log(xhr.responseText);
                     }
             })
 }

 function t3_oportunidades (){
  actualizarTabla('t3_oportunidades', 'Subida base de datos al servidor', '1');
  let tabla= 't1_oportunidad';
$.ajax({
              url:'./oportunidadesd',
              method: "GET",
              data: { tabla: tabla},  
              dataType:'JSON',
              success:function(data){ 
                actualizarTabla('t3_oportunidadesd', 'Subida base de datos al servidor', '2');
                $('#barracarga').html('78%');
                $('#barracarga').css('width','78%');                                   
                reasignacionarriba();                   
              },
              error: function(xhr, status, error) {
                actualizarTabla('t3_oportunidadesd', 'Subida base de datos al servidor', '3');
                    reintentarfuncion(t1_informesvisitasd, 't1_informesvisitasd');
                        console.log(xhr.responseText);
                    }
            })
}




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
                      reintentarfuncion(t1_informesvisitasd, 't1_informesvisitas');
                          console.log(xhr.responseText);
                      }
              })
}



