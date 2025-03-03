
function t1_principalhogar(){
    iniciarContador();
    actualizarTabla('t1_principalhogar', 'Subida base de datos al servidor', '1');
$.ajax({
                url:'./t1_principalhogar',
                method: "GET",
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('1%');
                  $('#barracarga').css('width','1%');
                 actualizarTabla('t1_principalhogar', 'Subida base de datos al servidor', '2');
                 t1_hogarcondicionesalimentarias()
                  
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_principalhogar', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_principalhogar, 't1_principalhogard');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_hogarcondicionesalimentarias(){
    actualizarTabla('t1_hogarcondicionesalimentarias', 'Subida base de datos al servidor', '1');
$.ajax({
                url:'./t1_hogarcondicionesalimentarias',
                method: "GET",
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('2%');
                  $('#barracarga').css('width','2%');
                  actualizarTabla('t1_hogarcondicionesalimentarias', 'Subida base de datos al servidor', '2');
                 t1_hogarcondicioneshabitabilidad()
                  
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_hogarcondicionesalimentarias', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_hogarcondicionesalimentarias, 't1_hogarcondicionesalimentarias');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_hogarcondicioneshabitabilidad(){
    actualizarTabla('t1_hogarcondicioneshabitabilidad', 'Subida base de datos al servidor', '1');
$.ajax({
                url:'./t1_hogarcondicioneshabitabilidad',
                method: "GET",
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('3%');
                  $('#barracarga').css('width','3%');
                  actualizarTabla('t1_hogarcondicioneshabitabilidad', 'Subida base de datos al servidor', '2');
                 t1_hogarconformacionfamiliar()
                  
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_hogarcondicioneshabitabilidad', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_hogarcondicioneshabitabilidad, 't1_hogarcondicioneshabitabilidad');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_hogarconformacionfamiliar(){
    actualizarTabla('t1_hogarconformacionfamiliar', 'Subida base de datos al servidor', '1');
$.ajax({
                url:'./t1_hogarconformacionfamiliar',
                method: "GET",
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('4%');
                  $('#barracarga').css('width','4%');
                  actualizarTabla('t1_hogarconformacionfamiliar', 'Subida base de datos al servidor', '2');
                  t1_hogardatosgeograficos()
                  
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_hogarconformacionfamiliar', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_hogarconformacionfamiliar, 't1_hogarconformacionfamiliar');
                          console.log(xhr.responseText);
                      }
              })
}



function t1_hogardatosgeograficos(){
    actualizarTabla('t1_hogardatosgeograficos', 'Subida base de datos al servidor', '1');
$.ajax({
                url:'./t1_hogardatosgeograficos',
                method: "GET",
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('5%');
                  $('#barracarga').css('width','5%');
                  actualizarTabla('t1_hogardatosgeograficos', 'Subida base de datos al servidor', '2');
                 t1_hogarentornofamiliar()
                  
                },
                error: function(xhr, status, error) {
                 actualizarTabla('t1_hogardatosgeograficos', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_hogardatosgeograficos, 't1_hogardatosgeograficos');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_hogarentornofamiliar(){
    actualizarTabla('t1_hogarentornofamiliar', 'Subida base de datos al servidor', '1');
$.ajax({
                url:'./t1_hogarentornofamiliar',
                method: "GET",
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('6%');
                  $('#barracarga').css('width','6%');
                  actualizarTabla('t1_hogarentornofamiliar', 'Subida base de datos al servidor', '2');
                 t1_integrantesfinanciero()
                  
                },
                error: function(xhr, status, error) {
                actualizarTabla('t1_hogarentornofamiliar', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_hogarentornofamiliar, 't1_hogarentornofamiliar');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_integrantesfinanciero(){
    actualizarTabla('t1_integrantesfinanciero', 'Subida base de datos al servidor', '1');
$.ajax({
                url:'./t1_integrantesfinanciero',
                method: "GET",
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('7%');
                  $('#barracarga').css('width','7%');
                  actualizarTabla('t1_integrantesfinanciero', 'Subida base de datos al servidor', '2');
                 t1_integrantesfisicoyemocional()
                  
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_integrantesfinanciero', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_integrantesfinanciero, 't1_integrantesfinanciero');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_integrantesfisicoyemocional(){
    actualizarTabla('t1_integrantesfisicoyemocional', 'Subida base de datos al servidor', '1');
$.ajax({
                url:'./t1_integrantesfisicoyemocional',
                method: "GET",
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('8%');
                  $('#barracarga').css('width','8%');
                  actualizarTabla('t1_integrantesfisicoyemocional', 'Subida base de datos al servidor', '2');
                 t1_integranteshogar()
                  
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_integrantesfisicoyemocional', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_integrantesfisicoyemocional, 't1_integrantesfisicoyemocional');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_integranteshogar(){
    actualizarTabla('t1_integranteshogar', 'Subida base de datos al servidor', '1');
$.ajax({
                url:'./t1_integranteshogar',
                method: "GET",
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('9%');
                  $('#barracarga').css('width','9%');
                  actualizarTabla('t1_integranteshogar', 'Subida base de datos al servidor', '2');
                 t1_integrantesidentitario()
                  
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_integranteshogar', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_integranteshogar, 't1_integranteshogar');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_integrantesidentitario(){
    actualizarTabla('t1_integrantesidentitario', 'Subida base de datos al servidor', '1');
$.ajax({
                url:'./t1_integrantesidentitario',
                method: "GET",
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('10%');
                  $('#barracarga').css('width','10%');
                  actualizarTabla('t1_integrantesidentitario', 'Subida base de datos al servidor', '2');
                  t1_integrantesintelectual()
                  
                },
                error: function(xhr, status, error) {
                actualizarTabla('t1_integrantesidentitario', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_integrantesidentitario, 't1_integrantesidentitario');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_integrantesintelectual(){
    actualizarTabla('t1_integrantesintelectual', 'Subida base de datos al servidor', '1');
$.ajax({
                url:'./t1_integrantesintelectual',
                method: "GET",
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('11%');
                  $('#barracarga').css('width','11%');
                  actualizarTabla('t1_integrantesintelectual', 'Subida base de datos al servidor', '2');
                 t1_integranteslegal()
                  
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_integrantesintelectual', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_integrantesintelectual, 't1_integrantesintelectual');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_integranteslegal(){
    actualizarTabla('t1_integranteslegal', 'Subida base de datos al servidor', '1');
$.ajax({
                url:'./t1_integranteslegal',
                method: "GET",
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('12%');
                  $('#barracarga').css('width','12%');                      
                  actualizarTabla('t1_integranteslegal', 'Subida base de datos al servidor', '2');
                  t1_privacion1();                   
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_integranteslegal', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_integranteslegal, 't1_integranteslegal');
                          console.log(xhr.responseText);
                      }
              })
}



function t1_privacion1(){
    actualizarTabla('t1_privacion1', 'Subida base de datos al servidor', '1');
    let tabla= 't1_privacion1';
$.ajax({
                url:'./sincroprivaciones',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('13%');
                  $('#barracarga').css('width','13%');                      
                  actualizarTabla('t1_privacion1', 'Subida base de datos al servidor', '2');
                  t1_casillamatriz()                   
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_privacion1', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_integranteslegal, 't1_privacion1');
                          console.log(xhr.responseText);
                      }
              })
}


function t1_casillamatriz(){
    actualizarTabla('t1_casillamatriz', 'Subida base de datos al servidor', '1');
    let tabla= 't1_casillamatriz';
$.ajax({
                url:'./sincroprivaciones',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('14%');
                  $('#barracarga').css('width','14%');                      
                  actualizarTabla('t1_casillamatriz', 'Subida base de datos al servidor', '2');
                         t1_indicador_bl_2()              
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_casillamatriz', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_privacion1, 't1_casillamatriz');
                          console.log(xhr.responseText);
                      }
              })
}


function t1_indicador_bl_2(){
    actualizarTabla('t1_indicador_bl_2', 'Subida base de datos al servidor', '1');
    let tabla= 't1_indicador_bl_2';
$.ajax({
                url:'./sincroprivaciones',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('15%');
                  $('#barracarga').css('width','15%');                      
                  actualizarTabla('t1_indicador_bl_2', 'Subida base de datos al servidor', '2');
                         t1_indicador_bl_3()              
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_casillamatriz', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_casillamatriz, 't1_indicador_bl_2');
                          console.log(xhr.responseText);
                      }
              })
}
function t1_indicador_bl_3(){
    actualizarTabla('t1_indicador_bl_3', 'Subida base de datos al servidor', '1');
    let tabla= 't1_indicador_bl_3';
$.ajax({
                url:'./sincroprivaciones',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('16%');
                  $('#barracarga').css('width','16%');                      
                  actualizarTabla('t1_indicador_bl_3', 'Subida base de datos al servidor', '2');
                     t1_indicador_bl_5()                  
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicador_bl_3', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_indicador_bl_2, 't1_indicador_bl_3');
                          console.log(xhr.responseText);
                      }
              })
}
function t1_indicador_bl_5(){
    actualizarTabla('t1_indicador_bl_5', 'Subida base de datos al servidor', '1');
    let tabla= 't1_indicador_bl_5';
$.ajax({
                url:'./sincroprivaciones',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('17%');
                  $('#barracarga').css('width','17%');                      
                  actualizarTabla('t1_indicador_bl_5', 'Subida base de datos al servidor', '2');
                  t1_indicador_bl_6();                 
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicador_bl_5', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_indicador_bl_3, 't1_indicador_bl_5');
                          console.log(xhr.responseText);
                      }
              })
}


function t1_indicador_bl_6(){
  actualizarTabla('t1_indicador_bl_6', 'Subida base de datos al servidor', '1');
  let tabla= 't1_indicador_bl_6';
$.ajax({
              url:'./sincroprivaciones',
              method: "GET",
              data: { tabla: tabla},  
              dataType:'JSON',
              success:function(data){
                $('#barracarga').html('18%');
                $('#barracarga').css('width','18%');                      
                actualizarTabla('t1_indicador_bl_6', 'Subida base de datos al servidor', '2');
                    t1_indicador_bse_1();                 
              },
              error: function(xhr, status, error) {
                actualizarTabla('t1_indicador_bl_6', 'Subida base de datos al servidor', '3');
                    reintentarfuncion(t1_indicador_bl_5, 't1_indicador_bl_6');
                        console.log(xhr.responseText);
                    }
            })
}


function t1_indicador_bse_1(){
    actualizarTabla('t1_indicador_bse_1', 'Subida base de datos al servidor', '1');
    let tabla= 't1_indicador_bse_1';
$.ajax({
                url:'./sincroprivaciones',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('19%');
                  $('#barracarga').css('width','19%');                      
                  actualizarTabla('t1_indicador_bse_1', 'Subida base de datos al servidor', '2');
                        t1_indicador_bse_4();               
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicador_bse_1', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_indicador_bl_5, 't1_indicador_bse_1');
                          console.log(xhr.responseText);
                      }
              })
}
function t1_indicador_bse_4(){
    actualizarTabla('t1_indicador_bse_4', 'Subida base de datos al servidor', '1');
    let tabla= 't1_indicador_bse_4';
$.ajax({
                url:'./sincroprivaciones',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('20%');
                  $('#barracarga').css('width','20%');                      
                  actualizarTabla('t1_indicador_bse_4', 'Subida base de datos al servidor', '2');
                      t1_indicador_bse_5();                 
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicador_bse_4', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_indicador_bse_1, 't1_indicador_bse_4');
                          console.log(xhr.responseText);
                      }
              })
}
function t1_indicador_bse_5(){
    actualizarTabla('t1_indicador_bse_5', 'Subida base de datos al servidor', '1');
    let tabla= 't1_indicador_bse_5';
$.ajax({
                url:'./sincroprivaciones',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('21%');
                  $('#barracarga').css('width','21%');                      
                  actualizarTabla('t1_indicador_bse_5', 'Subida base de datos al servidor', '2');
                          t1_indicador_bse_6();             
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicador_bse_5', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_indicador_bse_4, 't1_indicador_bse_5');
                          console.log(xhr.responseText);
                      }
              })
}
function t1_indicador_bse_6(){
    actualizarTabla('t1_indicador_bse_6', 'Subida base de datos al servidor', '1');
    let tabla= 't1_indicador_bse_6';
$.ajax({
                url:'./sincroprivaciones',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('22%');
                  $('#barracarga').css('width','22%');                      
                  actualizarTabla('t1_indicador_bse_6', 'Subida base de datos al servidor', '2');
                      t1_indicador_bse_7();                 
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicador_bse_6', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_indicador_bse_5, 't1_indicador_bse_6');
                          console.log(xhr.responseText);
                      }
              })
}
function t1_indicador_bse_7(){
    actualizarTabla('t1_indicador_bse_7', 'Subida base de datos al servidor', '1');
    let tabla= 't1_indicador_bse_7';
$.ajax({
                url:'./sincroprivaciones',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('23%');
                  $('#barracarga').css('width','23%');                      
                  actualizarTabla('t1_indicador_bse_7', 'Subida base de datos al servidor', '2');
                      t1_privacion10();                 
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicador_bse_7', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_indicador_bse_6, 't1_indicador_bse_7');
                          console.log(xhr.responseText);
                      }
              })
}
function t1_privacion10(){
    actualizarTabla('t1_privacion10', 'Subida base de datos al servidor', '1');
    let tabla= 't1_privacion10';
$.ajax({
                url:'./sincroprivaciones',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('24%');
                  $('#barracarga').css('width','24%');                      
                  actualizarTabla('t1_privacion10', 'Subida base de datos al servidor', '2');
                       t1_privacion11();                
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_privacion10', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_indicador_bse_7, 't1_privacion10');
                          console.log(xhr.responseText);
                      }
              })
}
function t1_privacion11(){
    actualizarTabla('t1_privacion11', 'Subida base de datos al servidor', '1');
    let tabla= 't1_privacion11';
$.ajax({
                url:'./sincroprivaciones',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('25%');
                  $('#barracarga').css('width','25%');                      
                  actualizarTabla('t1_privacion11', 'Subida base de datos al servidor', '2');
                         t1_privacion12();              
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_privacion11', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_privacion10, 't1_privacion11');
                          console.log(xhr.responseText);
                      }
              })
}
function t1_privacion12(){
    actualizarTabla('t1_privacion12', 'Subida base de datos al servidor', '1');
    let tabla= 't1_privacion12';
$.ajax({
                url:'./sincroprivaciones',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('26%');
                  $('#barracarga').css('width','26%');                      
                  actualizarTabla('t1_privacion12', 'Subida base de datos al servidor', '2');
                       t1_privacion13();                
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_privacion12', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_privacion11, 't1_privacion12');
                          console.log(xhr.responseText);
                      }
              })
}
function t1_privacion13(){
    actualizarTabla('t1_privacion13', 'Subida base de datos al servidor', '1');
    let tabla= 't1_privacion13';
$.ajax({
                url:'./sincroprivaciones',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('27%');
                  $('#barracarga').css('width','27%');                      
                  actualizarTabla('t1_privacion13', 'Subida base de datos al servidor', '2');
                      t1_privacion14();                 
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_privacion13', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_privacion12, 't1_privacion13');
                          console.log(xhr.responseText);
                      }
              })
}
function t1_privacion14(){
    actualizarTabla('t1_privacion14', 'Subida base de datos al servidor', '1');
    let tabla= 't1_privacion14';
$.ajax({
                url:'./sincroprivaciones',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('28%');
                  $('#barracarga').css('width','28%');                      
                  actualizarTabla('t1_privacion14', 'Subida base de datos al servidor', '2');
                       t1_privacion15();                
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_privacion14', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_privacion13, 't1_privacion14');
                          console.log(xhr.responseText);
                      }
              })
}
function t1_privacion15(){
    actualizarTabla('t1_privacion15', 'Subida base de datos al servidor', '1');
    let tabla= 't1_privacion15';
$.ajax({
                url:'./sincroprivaciones',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('29%');
                  $('#barracarga').css('width','29%');                      
                  actualizarTabla('t1_privacion15', 'Subida base de datos al servidor', '2');
                    t1_privacion16();                   
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_privacion15', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_privacion14, 't1_privacion15');
                          console.log(xhr.responseText);
                      }
              })
}
function t1_privacion16(){
    actualizarTabla('t1_privacion16', 'Subida base de datos al servidor', '1');
    let tabla= 't1_privacion16';
$.ajax({
                url:'./sincroprivaciones',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('30%');
                  $('#barracarga').css('width','30%');                      
                  actualizarTabla('t1_privacion16', 'Subida base de datos al servidor', '2');
                         t1_privacion2();              
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_privacion16', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_privacion15, 't1_privacion16');
                          console.log(xhr.responseText);
                      }
              })
}
function t1_privacion2(){
    actualizarTabla('t1_privacion2', 'Subida base de datos al servidor', '1');
    let tabla= 't1_privacion2';
$.ajax({
                url:'./sincroprivaciones',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('31%');
                  $('#barracarga').css('width','31%');                      
                  actualizarTabla('t1_privacion2', 'Subida base de datos al servidor', '2');
                          t1_privacion3();             
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_privacion2', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_privacion16, 't1_privacion2');
                          console.log(xhr.responseText);
                      }
              })
}
function t1_privacion3(){
    actualizarTabla('t1_privacion3', 'Subida base de datos al servidor', '1');
    let tabla= 't1_privacion3';
$.ajax({
                url:'./sincroprivaciones',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('32%');
                  $('#barracarga').css('width','32%');                      
                  actualizarTabla('t1_privacion3', 'Subida base de datos al servidor', '2');
                         t1_privacion4();              
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_privacion3', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_privacion2, 't1_privacion3');
                          console.log(xhr.responseText);
                      }
              })
}
function t1_privacion4(){
    actualizarTabla('t1_privacion4', 'Subida base de datos al servidor', '1');
    let tabla= 't1_privacion4';
$.ajax({
                url:'./sincroprivaciones',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('33%');
                  $('#barracarga').css('width','33%');                      
                  actualizarTabla('t1_privacion4', 'Subida base de datos al servidor', '2');
                         t1_privacion5();              
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_privacion4', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_privacion3, 't1_privacion4');
                          console.log(xhr.responseText);
                      }
              })
}
function t1_privacion5(){
    actualizarTabla('t1_privacion5', 'Subida base de datos al servidor', '1');
    let tabla= 't1_privacion5';
$.ajax({
                url:'./sincroprivaciones',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('34%');
                  $('#barracarga').css('width','34%');                      
                  actualizarTabla('t1_privacion5', 'Subida base de datos al servidor', '2');
                        t1_privacion6();               
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_privacion5', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_privacion4, 't1_privacion5');
                          console.log(xhr.responseText);
                      }
              })
}
function t1_privacion6(){
    actualizarTabla('t1_privacion6', 'Subida base de datos al servidor', '1');
    let tabla= 't1_privacion6';
$.ajax({
                url:'./sincroprivaciones',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('35%');
                  $('#barracarga').css('width','35%');                      
                  actualizarTabla('t1_privacion6', 'Subida base de datos al servidor', '2');
                        t1_privacion7();               
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_privacion6', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_privacion5, 't1_privacion6');
                          console.log(xhr.responseText);
                      }
              })
}
function t1_privacion7(){
    actualizarTabla('t1_privacion7', 'Subida base de datos al servidor', '1');
    let tabla= 't1_privacion7';
$.ajax({
                url:'./sincroprivaciones',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('36%');
                  $('#barracarga').css('width','36%');                      
                  actualizarTabla('t1_privacion7', 'Subida base de datos al servidor', '2');
                          t1_privacion8();             
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_privacion7', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_privacion6, 't1_privacion7');
                          console.log(xhr.responseText);
                      }
              })
}
function t1_privacion8(){
    actualizarTabla('t1_privacion8', 'Subida base de datos al servidor', '1');
    let tabla= 't1_privacion8';
$.ajax({
                url:'./sincroprivaciones',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('37%');
                  $('#barracarga').css('width','37%');                      
                  actualizarTabla('t1_privacion8', 'Subida base de datos al servidor', '2');
                     t1_privacion9();                  
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_privacion8', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_privacion7, 't1_privacion8');
                          console.log(xhr.responseText);
                      }
              })
}
function t1_privacion9 (){
    actualizarTabla('t1_privacion9', 'Subida base de datos al servidor', '1');
    let tabla= 't1_privacion9';
$.ajax({
                url:'./sincroprivaciones',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                  actualizarTabla('t1_privacion9', 'Subida base de datos al servidor', '2');
                  $('#barracarga').html('38%');
                  $('#barracarga').css('width','38%');  
                  t1_enfamiliaqt();                    
                                  
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_privacion9', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_privacion8, 't1_privacion8');
                          console.log(xhr.responseText);
                      }
              })
}




function t1_enfamiliaqt (){
    actualizarTabla('t1_enfamiliaqt', 'Subida base de datos al servidor', '1');
    let tabla= 't1_enfamiliaqt';
$.ajax({
                url:'./sincroprivaciones',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                  actualizarTabla('t1_enfamiliaqt', 'Subida base de datos al servidor', '2');
                  $('#barracarga').html('39%');
                  $('#barracarga').css('width','39%');                      
                 
                  t1_financieroqt();               
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_enfamiliaqt', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_privacion9, 't1_privacion9');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_financieroqt (){
    actualizarTabla('t1_financieroqt', 'Subida base de datos al servidor', '1');
    let tabla= 't1_financieroqt';
$.ajax({
                url:'./sincroprivaciones',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                  actualizarTabla('t1_financieroqt', 'Subida base de datos al servidor', '2');
                  $('#barracarga').html('40%');
                  $('#barracarga').css('width','40%');                      
                  t1_indicador_bef_2();      
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_financieroqt', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_enfamiliaqt, 't1_enfamiliaqt');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_indicador_bef_2 (){
    actualizarTabla('t1_indicador_bef_2', 'Subida base de datos al servidor', '1');
    let tabla= 't1_indicador_bef_2';
$.ajax({
                url:'./sincroprivaciones',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                  actualizarTabla('t1_indicador_bef_2', 'Subida base de datos al servidor', '2');
                  $('#barracarga').html('41%');
                  $('#barracarga').css('width','41%');                      
                  t1_indicador_bef_6();                
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicador_bef_2', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_financieroqt, 't1_financieroqt');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_indicador_bef_6 (){
  actualizarTabla('t1_indicador_bef_6', 'Subida base de datos al servidor', '1');
  let tabla= 't1_indicador_bef_6';
$.ajax({
              url:'./sincroprivaciones',
              method: "GET",
              data: { tabla: tabla},  
              dataType:'JSON',
              success:function(data){ 
                actualizarTabla('t1_indicador_bef_6', 'Subida base de datos al servidor', '2');
                $('#barracarga').html('41%');
                $('#barracarga').css('width','41%');                      
                t1_indicador_bef_3();                
              },
              error: function(xhr, status, error) {
                actualizarTabla('t1_indicador_bef_6', 'Subida base de datos al servidor', '3');
                    reintentarfuncion(t1_financieroqt, 't1_financieroqt');
                        console.log(xhr.responseText);
                    }
            })
}

function t1_indicador_bef_3 (){
    actualizarTabla('t1_indicador_bef_3', 'Subida base de datos al servidor', '1');
    let tabla= 't1_indicador_bef_3';
$.ajax({
                url:'./sincroprivaciones',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                  actualizarTabla('t1_indicador_bef_3', 'Subida base de datos al servidor', '2');
                  $('#barracarga').html('42%');
                  $('#barracarga').css('width','42%');                      
                  t1_indicador_bf_1();                 
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicador_bef_3', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_indicador_bef_2, 't1_indicador_bef_2');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_indicador_bf_1 (){
    actualizarTabla('t1_indicador_bf_1', 'Subida base de datos al servidor', '1');
    let tabla= 't1_indicador_bf_1';
$.ajax({
                url:'./sincroprivaciones',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                  actualizarTabla('t1_indicador_bf_1', 'Subida base de datos al servidor', '2');
                  $('#barracarga').html('43%');
                  $('#barracarga').css('width','43%');                      
                  t1_indicador_bf_2();                  
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicador_bf_1', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_indicador_bef_3, 't1_indicador_bef_3');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_indicador_bf_2 (){
    actualizarTabla('t1_indicador_bf_2', 'Subida base de datos al servidor', '1');
    let tabla= 't1_indicador_bf_2';
$.ajax({
                url:'./sincroprivaciones',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                  actualizarTabla('t1_indicador_bf_2', 'Subida base de datos al servidor', '2');
                  $('#barracarga').html('44%');
                  $('#barracarga').css('width','44%');                      
                  t1_indicador_bf_3();                
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicador_bf_2', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_indicador_bf_1, 't1_indicador_bf_1');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_indicador_bf_3 (){
    actualizarTabla('t1_indicador_bf_3', 'Subida base de datos al servidor', '1');
    let tabla= 't1_indicador_bf_3';
$.ajax({
                url:'./sincroprivaciones',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                  actualizarTabla('t1_indicador_bf_3', 'Subida base de datos al servidor', '2');
                  $('#barracarga').html('45%');
                  $('#barracarga').css('width','45%');                      
                  t1_indicador_bi_2();                  
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicador_bf_3', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_indicador_bf_2, 't1_indicador_bf_2');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_indicador_bi_2 (){
    actualizarTabla('t1_indicador_bi_2', 'Subida base de datos al servidor', '1');
    let tabla= 't1_indicador_bi_2';
$.ajax({
                url:'./sincroprivaciones',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                  actualizarTabla('t1_indicador_bi_2', 'Subida base de datos al servidor', '2');
                  $('#barracarga').html('46%');
                  $('#barracarga').css('width','46%');                      
                  t1_indicador_bi_3();                
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicador_bi_2', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_indicador_bf_3, 't1_indicador_bf_3');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_indicador_bi_3 (){
    actualizarTabla('t1_indicador_bi_3', 'Subida base de datos al servidor', '1');
    let tabla= 't1_indicador_bi_3';
$.ajax({
                url:'./sincroprivaciones',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                  actualizarTabla('t1_indicador_bi_3', 'Subida base de datos al servidor', '2');
                  $('#barracarga').html('47%');
                  $('#barracarga').css('width','47%');                      
                  t1_indicador_bi_4();                
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicador_bi_3', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_indicador_bi_2, 't1_indicador_bi_3');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_indicador_bi_4 (){
    actualizarTabla('t1_indicador_bi_4', 'Subida base de datos al servidor', '1');
    let tabla= 't1_indicador_bi_4';
$.ajax({
                url:'./sincroprivaciones',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                  actualizarTabla('t1_indicador_bi_4', 'Subida base de datos al servidor', '2');
                  $('#barracarga').html('48%');
                  $('#barracarga').css('width','48%');                      
                  t1_indicador_bi_5();                  
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicador_bi_4', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_indicador_bi_2, 't1_indicador_bi_2');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_indicador_bi_5 (){
    actualizarTabla('t1_indicador_bi_5', 'Subida base de datos al servidor', '1');
    let tabla= 't1_indicador_bi_5';
$.ajax({
                url:'./sincroprivaciones',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                  actualizarTabla('t1_indicador_bi_5', 'Subida base de datos al servidor', '2');
                  $('#barracarga').html('49%');
                  $('#barracarga').css('width','49%');                      
                  t1_indicador_bi_6();                  
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicador_bi_5', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_indicador_bi_4, 't1_indicador_bi_4');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_indicador_bi_6 (){
    actualizarTabla('t1_indicador_bi_6', 'Subida base de datos al servidor', '1');
    let tabla= 't1_indicador_bi_6';
$.ajax({
                url:'./sincroprivaciones',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                  actualizarTabla('t1_indicador_bi_6', 'Subida base de datos al servidor', '2');
                  $('#barracarga').html('50%');
                  $('#barracarga').css('width','50%');                      
                  t1_indicador_bl_7();                   
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicador_bi_6', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_indicador_bi_5, 't1_indicador_bi_5');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_indicador_bl_7 (){
    actualizarTabla('t1_indicador_bl_7', 'Subida base de datos al servidor', '1');
    let tabla= 't1_indicador_bl_7';
$.ajax({
                url:'./sincroprivaciones',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                  actualizarTabla('t1_indicador_bl_7', 'Subida base de datos al servidor', '2');
                  $('#barracarga').html('51%');
                  $('#barracarga').css('width','51%');                      
                  t1_indicador_bl_8();                
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicador_bl_7', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_indicador_bi_6, 't1_indicador_bi_6');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_indicador_bl_8 (){
    actualizarTabla('t1_indicador_bl_8', 'Subida base de datos al servidor', '1');
    let tabla= 't1_indicador_bl_8';
$.ajax({
                url:'./sincroprivaciones',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                  actualizarTabla('t1_indicador_bl_8', 'Subida base de datos al servidor', '2');
                  $('#barracarga').html('52%');
                  $('#barracarga').css('width','52%');                      
                  t1_indicador_bse_3();               
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicador_bl_8', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_indicador_bl_7, 't1_indicador_bl_7');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_indicador_bse_3 (){
    actualizarTabla('t1_indicador_bse_3', 'Subida base de datos al servidor', '1');
    let tabla= 't1_indicador_bse_3';
$.ajax({
                url:'./sincroprivaciones',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                  actualizarTabla('t1_indicador_bse_3', 'Subida base de datos al servidor', '2');
                  $('#barracarga').html('53%');
                  $('#barracarga').css('width','53%');                      
                  t1_intelectualqt();                  
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicador_bse_3', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_indicador_bl_8, 't1_indicador_bl_8');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_intelectualqt (){
    actualizarTabla('t1_intelectualqt', 'Subida base de datos al servidor', '1');
    let tabla= 't1_intelectualqt';
$.ajax({
                url:'./sincroprivaciones',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                  actualizarTabla('t1_intelectualqt', 'Subida base de datos al servidor', '2');
                  $('#barracarga').html('54%');
                  $('#barracarga').css('width','54%');                      
                  t1_legalqt();                 
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_intelectualqt', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_indicador_bse_3, 't1_indicador_bse_3');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_legalqt (){
    actualizarTabla('t1_legalqt', 'Subida base de datos al servidor', '1');
    let tabla= 't1_legalqt';
$.ajax({
                url:'./sincroprivaciones',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                  actualizarTabla('t1_legalqt', 'Subida base de datos al servidor', '2');
                  $('#barracarga').html('55%');
                  $('#barracarga').css('width','55%');                      
                  t1_pasosvisita();                
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_legalqt', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_intelectualqt, 't1_intelectualqt');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_pasosvisita (){
    actualizarTabla('t1_pasosvisita', 'Subida base de datos al servidor', '1');
    let tabla= 't1_pasosvisita';
$.ajax({
                url:'./sincroprivaciones',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                  actualizarTabla('t1_pasosvisita', 'Subida base de datos al servidor', '2');
                  $('#barracarga').html('56%');
                  $('#barracarga').css('width','56%');                      
                  t1_visitasrealizadas();               
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_pasosvisita', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_legalqt, 't1_legalqt');
                          console.log(xhr.responseText);
                      }
              })
}



function t1_visitasrealizadas (){
    actualizarTabla('t1_visitasrealizadas', 'Subida base de datos al servidor', '1');
    let tabla= 't1_visitasrealizadas';
$.ajax({
                url:'./sincroprivaciones',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                  actualizarTabla('t1_visitasrealizadas', 'Subida base de datos al servidor', '2');
                  $('#barracarga').html('57%');
                  $('#barracarga').css('width','57%');                      
                  t1_indicador_bef_1();               
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_visitasrealizadas', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_pasosvisita, 't1_visitasrealizadas');
                          console.log(xhr.responseText);
                      }
              })
}



function t1_indicador_bef_1 (){
    actualizarTabla('t1_indicador_bef_1', 'Subida base de datos al servidor', '1');
    let tabla= 't1_indicador_bef_1';
$.ajax({
                url:'./sincroprivaciones',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                  actualizarTabla('t1_indicador_bef_1', 'Subida base de datos al servidor', '2');
                  $('#barracarga').html('58%');
                  $('#barracarga').css('width','58%');                      
                  t1_indicador_bef_4();               
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicador_bef_1', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_visitasrealizadas, 't1_indicador_bef_1');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_indicador_bef_4 (){
    actualizarTabla('t1_indicador_bef_4', 'Subida base de datos al servidor', '1');
    let tabla= 't1_indicador_bef_4';
$.ajax({
                url:'./sincroprivaciones',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                  actualizarTabla('t1_indicador_bef_4', 'Subida base de datos al servidor', '2');
                  $('#barracarga').html('59%');
                  $('#barracarga').css('width','59%');                      
                  t1_indicador_bef_5();               
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicador_bef_4', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_indicador_bef_1, 't1_indicador_bef_4');
                          console.log(xhr.responseText);
                      }
              })
}


function t1_indicador_bef_5 (){
    actualizarTabla('t1_indicador_bef_5', 'Subida base de datos al servidor', '1');
    let tabla= 't1_indicador_bef_5';
$.ajax({
                url:'./sincroprivaciones',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                  actualizarTabla('t1_indicador_bef_5', 'Subida base de datos al servidor', '2');
                  $('#barracarga').html('60%');
                  $('#barracarga').css('width','60%');                      
                  t1_indicador_bf_4();               
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicador_bef_5', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_indicador_bef_4, 't1_indicador_bef_5');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_indicador_bf_4 (){
    actualizarTabla('t1_indicador_bf_4', 'Subida base de datos al servidor', '1');
    let tabla= 't1_indicador_bf_4';
$.ajax({
                url:'./sincroprivaciones',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                  actualizarTabla('t1_indicador_bf_4', 'Subida base de datos al servidor', '2');
                  $('#barracarga').html('61%');
                  $('#barracarga').css('width','61%');                      
                  t1_indicador_bf_5();               
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicador_bf_4', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_indicador_bef_5, 't1_indicador_bf_4');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_indicador_bf_5 (){
    actualizarTabla('t1_indicador_bf_5', 'Subida base de datos al servidor', '1');
    let tabla= 't1_indicador_bf_5';
$.ajax({
                url:'./sincroprivaciones',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                  actualizarTabla('t1_indicador_bf_5', 'Subida base de datos al servidor', '2');
                  $('#barracarga').html('62%');
                  $('#barracarga').css('width','62%');                      
                  t1_indicador_bi_1();               
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicador_bf_5', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_indicador_bf_4, 't1_indicador_bf_5');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_indicador_bi_1 (){
    actualizarTabla('t1_indicador_bi_1', 'Subida base de datos al servidor', '1');
    let tabla= 't1_indicador_bi_1';
$.ajax({
                url:'./sincroprivaciones',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                  actualizarTabla('t1_indicador_bi_1', 'Subida base de datos al servidor', '2');
                  $('#barracarga').html('63%');
                  $('#barracarga').css('width','63%');                      
                  t1_indicador_bl_4();               
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicador_bi_1', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_indicador_bf_5, 't1_indicador_bi_1');
                          console.log(xhr.responseText);
                      }
              })
}
function t1_indicador_bl_4 (){
    actualizarTabla('t1_indicador_bl_4', 'Subida base de datos al servidor', '1');
    let tabla= 't1_indicador_bl_4';
$.ajax({
                url:'./sincroprivaciones',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                  actualizarTabla('t1_indicador_bl_4', 'Subida base de datos al servidor', '2');
                  $('#barracarga').html('64%');
                  $('#barracarga').css('width','64%');                      
                  t1_indicador_bl_9();               
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicador_bl_4', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_indicador_bl_1, 't1_indicador_bl_4');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_indicador_bl_9 (){
    actualizarTabla('t1_indicador_bl_9', 'Subida base de datos al servidor', '1');
    let tabla= 't1_indicador_bl_9';
$.ajax({
                url:'./sincroprivaciones',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                  actualizarTabla('t1_indicador_bl_9', 'Subida base de datos al servidor', '2');
                  $('#barracarga').html('65%');
                  $('#barracarga').css('width','65%');                      
                  t1_indicador_bl_10();               
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicador_bl_9', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_indicador_bl_4, 't1_indicador_bl_9');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_indicador_bl_10 (){
    actualizarTabla('t1_indicador_bl_10', 'Subida base de datos al servidor', '1');
    let tabla= 't1_indicador_bl_10';
$.ajax({
                url:'./sincroprivaciones',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                  actualizarTabla('t1_indicador_bl_10', 'Subida base de datos al servidor', '2');
                  $('#barracarga').html('66%');
                  $('#barracarga').css('width','66%');                      
                  t1_indicador_bse_2();               
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicador_bl_10', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_indicador_bl_9, 't1_indicador_bl_10');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_indicador_bse_2 (){
    actualizarTabla('t1_indicador_bse_2', 'Subida base de datos al servidor', '1');
    let tabla= 't1_indicador_bse_2';
$.ajax({
                url:'./sincroprivaciones',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                  actualizarTabla('t1_indicador_bse_2', 'Subida base de datos al servidor', '2');
                  $('#barracarga').html('67%');
                  $('#barracarga').css('width','67%');                      
                  t1_indicadores_hogar();               
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicador_bse_2', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_indicador_bl_10, 't1_indicador_bse_2');
                          console.log(xhr.responseText);
                      }
              })
}


function t1_indicadores_hogar (){
    actualizarTabla('t1_indicadores_hogar', 'Subida base de datos al servidor', '1');
    let tabla= 't1_indicadores_hogar';
$.ajax({
                url:'./sincroprivaciones',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                  actualizarTabla('t1_indicadores_hogar', 'Subida base de datos al servidor', '2');
                  $('#barracarga').html('68%');
                  $('#barracarga').css('width','68%');                      
                  t1_indicadores_integrantes();               
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicadores_hogar', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_indicador_bse_2, 't1_indicadores_hogar');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_indicadores_integrantes (){
    actualizarTabla('t1_indicadores_integrantes', 'Subida base de datos al servidor', '1');
    let tabla= 't1_indicadores_integrantes';
            $.ajax({
                url:'./sincroprivaciones',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                  actualizarTabla('t1_indicadores_integrantes', 'Subida base de datos al servidor', '2');
                  $('#barracarga').html('69%');
                  $('#barracarga').css('width','69%');                      
                  t1_indicador_bl_1();               
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicadores_integrantes', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_indicadores_hogar, 't1_indicadores_integrantes');
                          console.log(xhr.responseText);
                      }
              })
}

function t1_indicador_bl_1 (){
    actualizarTabla('t1_indicador_bl_1', 'Subida base de datos al servidor', '1');
    let tabla= 't1_indicador_bl_1';
            $.ajax({
                url:'./sincroprivaciones',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                  actualizarTabla('t1_indicador_bl_1', 'Subida base de datos al servidor', '2');
                  $('#barracarga').html('70%');
                  $('#barracarga').css('width','70%');                      
                  t1_saludemocionalqt();               
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicador_bl_1', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_indicadores_integrantes, 't1_indicador_bl_1');
                          console.log(xhr.responseText);
                      }
              })
}



function t1_saludemocionalqt (){
    actualizarTabla('t1_saludemocionalqt', 'Subida base de datos al servidor', '1');
    let tabla= 't1_saludemocionalqt';
$.ajax({
                url:'./sincroprivaciones',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                  actualizarTabla('t1_saludemocionalqt', 'Subida base de datos al servidor', '2');
                  $('#barracarga').html('71%');
                  $('#barracarga').css('width','71%');                      
                 
                  t1_accionmovilizadoraqt();                   
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_saludemocionalqt', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_visitasrealizadas, 't1_pasosvisita');
                          console.log(xhr.responseText);
                      }
              })
}


function t1_accionmovilizadoraqt (){
  actualizarTabla('t1_accionmovilizadoraqt', 'Subida base de datos al servidor', '1');
  let tabla= 't1_accionmovilizadoraqt';
$.ajax({
              url:'./sincroprivaciones',
              method: "GET",
              data: { tabla: tabla},  
              dataType:'JSON',
              success:function(data){ 
                actualizarTabla('t1_accionmovilizadoraqt', 'Subida base de datos al servidor', '2');
                $('#barracarga').html('72%');
                $('#barracarga').css('width','72%');                      
               
                t1_momentoconciente();                   
              },
              error: function(xhr, status, error) {
                actualizarTabla('t1_accionmovilizadoraqt', 'Subida base de datos al servidor', '3');
                    reintentarfuncion(t1_saludemocionalqt, 't1_saludemocionalqt');
                        console.log(xhr.responseText);
                    }
            })
}

function t1_momentoconciente (){
  actualizarTabla('t1_momentoconciente', 'Subida base de datos al servidor', '1');
  let tabla= 't1_momentoconciente';
$.ajax({
              url:'./sincroprivaciones',
              method: "GET",
              data: { tabla: tabla},  
              dataType:'JSON',
              success:function(data){ 
                actualizarTabla('t1_momentoconciente', 'Subida base de datos al servidor', '2');
                $('#barracarga').html('73%');
                $('#barracarga').css('width','73%');                      
               
                t1_ordenprioridadesqt();                   
              },
              error: function(xhr, status, error) {
                actualizarTabla('t1_momentoconciente', 'Subida base de datos al servidor', '3');
                    reintentarfuncion(t1_accionmovilizadoraqt, 't1_accionmovilizadoraqt');
                        console.log(xhr.responseText);
                    }
            })
}

function t1_ordenprioridadesqt (){
  actualizarTabla('t1_ordenprioridadesqt', 'Subida base de datos al servidor', '1');
  let tabla= 't1_ordenprioridadesqt';
$.ajax({
              url:'./sincroprivaciones',
              method: "GET",
              data: { tabla: tabla},  
              dataType:'JSON',
              success:function(data){ 
                actualizarTabla('t1_ordenprioridadesqt', 'Subida base de datos al servidor', '2');
                $('#barracarga').html('74%');
                $('#barracarga').css('width','74%');                      
               
                t1_v1actualizacionnovedades();                   
              },
              error: function(xhr, status, error) {
                actualizarTabla('t1_ordenprioridadesqt', 'Subida base de datos al servidor', '3');
                    reintentarfuncion(t1_momentoconciente, 't1_momentoconciente');
                        console.log(xhr.responseText);
                    }
            })
}

function t1_v1actualizacionnovedades (){
  actualizarTabla('t1_v1actualizacionnovedades', 'Subida base de datos al servidor', '1');
  let tabla= 't1_v1actualizacionnovedades';
$.ajax({
              url:'./sincroprivaciones',
              method: "GET",
              data: { tabla: tabla},  
              dataType:'JSON',
              success:function(data){ 
                actualizarTabla('t1_v1actualizacionnovedades', 'Subida base de datos al servidor', '2');
                $('#barracarga').html('75%');
                $('#barracarga').css('width','75%');                      
               
                t1_informesvisitas();                   
              },
              error: function(xhr, status, error) {
                actualizarTabla('t1_v1actualizacionnovedades', 'Subida base de datos al servidor', '3');
                    reintentarfuncion(t1_ordenprioridadesqt, 't1_ordenprioridadesqt');
                        console.log(xhr.responseText);
                    }
            })
}

 function t1_informesvisitas (){
   actualizarTabla('t1_informesvisitas', 'Subida base de datos al servidor', '1');
   let tabla= 't1_informesvisitas';
 $.ajax({
               url:'./sincroprivaciones',
               method: "GET",
               data: { tabla: tabla},  
               dataType:'JSON',
               success:function(data){ 
                 actualizarTabla('t1_informesvisitas', 'Subida base de datos al servidor', '2');
                 $('#barracarga').html('76%');
                 $('#barracarga').css('width','76%');                      
               
                 t1_v1finalizacion();                   
               },
               error: function(xhr, status, error) {
                 actualizarTabla('t1_informesvisitas', 'Subida base de datos al servidor', '3');
                     reintentarfuncion(t1_v1actualizacionnovedades, 't1_v1actualizacionnovedades');
                         console.log(xhr.responseText);
                     }
             })
 }


function t1_v1finalizacion (){
  actualizarTabla('t1_v1finalizacion', 'Subida base de datos al servidor', '1');
  let tabla= 't1_v1finalizacion';
$.ajax({
              url:'./sincroprivaciones',
              method: "GET",
              data: { tabla: tabla},  
              dataType:'JSON',
              success:function(data){ 
                actualizarTabla('t1_v1finalizacion', 'Subida base de datos al servidor', '2');
                $('#barracarga').html('77%');
                $('#barracarga').css('width','77%');                      
               
                t3_oportunidadesd();                   
              },
              error: function(xhr, status, error) {
                actualizarTabla('t1_v1finalizacion', 'Subida base de datos al servidor', '3');
                    reintentarfuncion(t1_v1actualizacionnovedades, 't1_v1actualizacionnovedades');
                        console.log(xhr.responseText);
                    }
            })
}

 function t3_oportunidadesd (){
   actualizarTabla('t1_oportunidad', 'Subida base de datos al servidor', '1');
   let tabla= 't1_oportunidad';
 $.ajax({
               url:'./oportunidadesd',
               method: "GET",
               data: { tabla: tabla},  
               dataType:'JSON',
               success:function(data){ 
                 actualizarTabla('t1_oportunidad', 'Subida base de datos al servidor', '2');
                 $('#barracarga').html('78%');
                 $('#barracarga').css('width','78%');                                   
                 t3_aliadosd();                   
               },
               error: function(xhr, status, error) {
                 actualizarTabla('t1_oportunidad', 'Subida base de datos al servidor', '3');
                     reintentarfuncion(t1_v1finalizacion, 't1_oportunidad');
                         console.log(xhr.responseText);
                     }
             })
 }


 function t3_aliadosd (){
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
                t1_sisbend();                   
              },
              error: function(xhr, status, error) {
                actualizarTabla('t1_lista_aliados', 'Subida base de datos al servidor', '3');
                    reintentarfuncion(t1_v1finalizacion, 't1_lista_aliados');
                        console.log(xhr.responseText);
                    }
            })
}


function t1_sisbend (){
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
               
                t1_oportunidad_hogares();                   
              },
              error: function(xhr, status, error) {
                actualizarTabla('t1_sisben', 'Descarga de tablas desde el servdor', '3');
                    reintentarfuncion(t3_aliadosd, 't1_sisben');
                        console.log(xhr.responseText);
                    }
            })
}


 function t1_oportunidad_hogares (){
  actualizarTabla('t1_oportunidad_hogares', 'Subida base de datos al servidor', '1');
  let tabla= 't1_oportunidad_hogares';
$.ajax({
              url:'./sincroprivaciones',
              method: "GET",
              data: { tabla: tabla},  
              dataType:'JSON',
              success:function(data){ 
                actualizarTabla('t1_oportunidad_hogares', 'Subida base de datos al servidor', '2');
                $('#barracarga').html('78%');
                $('#barracarga').css('width','78%');                                   
                t1_oportunidad_integrantes();                   
              },
              error: function(xhr, status, error) {
                actualizarTabla('t1_oportunidad_hogares', 'Subida base de datos al servidor', '3');
                    reintentarfuncion(t3_oportunidadesd, 't1_oportunidad_hogares');
                        console.log(xhr.responseText);
                    }
            })
}


function t1_oportunidad_integrantes (){
  actualizarTabla('t1_oportunidad_integrantes', 'Subida base de datos al servidor', '1');
  let tabla= 't1_oportunidad_integrantes';
$.ajax({
              url:'./sincroprivaciones',
              method: "GET",
              data: { tabla: tabla},  
              dataType:'JSON',
              success:function(data){ 
                actualizarTabla('t1_oportunidad_integrantes', 'Subida base de datos al servidor', '2');
                $('#barracarga').html('78%');
                $('#barracarga').css('width','78%');                                   
                t3_oportunidad_integranteshogar_historico();                   
              },
              error: function(xhr, status, error) {
                actualizarTabla('t1_oportunidad_integrantes', 'Subida base de datos al servidor', '3');
                    reintentarfuncion(t1_oportunidad_hogares, 't1_oportunidad_integrantes');
                        console.log(xhr.responseText);
                    }
            })
}

function t3_oportunidad_integranteshogar_historico (){
  actualizarTabla('t3_oportunidad_integranteshogar_historico', 'Subida base de datos al servidor', '1');
  let tabla= 't3_oportunidad_integranteshogar_historico';
$.ajax({
              url:'./sincroprivaciones',
              method: "GET",
              data: { tabla: tabla},  
              dataType:'JSON',
              success:function(data){ 
                actualizarTabla('t3_oportunidad_integranteshogar_historico', 'Subida base de datos al servidor', '2');
                $('#barracarga').html('79%');
                $('#barracarga').css('width','79%');                                   
                t3_movimiento_indicadores_hogar_ip_historico();                   
              },
              error: function(xhr, status, error) {
                actualizarTabla('t3_oportunidad_integranteshogar_historico', 'Subida base de datos al servidor', '3');
                    reintentarfuncion(t1_oportunidad_integrantes, 't3_oportunidad_integranteshogar_historico');
                        console.log(xhr.responseText);
                    }
            })
}


//historicos movimientos de indicadores

function t3_movimiento_indicadores_hogar_ip_historico (){
  actualizarTabla('t3_movimiento_indicadores_hogar_ip_historico', 'Subida base de datos al servidor', '1');
  let tabla= 't3_movimiento_indicadores_hogar_ip_historico';
$.ajax({
              url:'./sincroprivaciones',
              method: "GET",
              data: { tabla: tabla},  
              dataType:'JSON',
              success:function(data){ 
                actualizarTabla('t3_movimiento_indicadores_hogar_ip_historico', 'Subida base de datos al servidor', '2');
                $('#barracarga').html('79%');
                $('#barracarga').css('width','79%');                                   
                t3_movimiento_indicadores_hogar_oportunidades_historico();                   
              },
              error: function(xhr, status, error) {
                actualizarTabla('t3_movimiento_indicadores_hogar_ip_historico', 'Subida base de datos al servidor', '3');
                    reintentarfuncion(t3_oportunidad_integranteshogar_historico, 't3_movimiento_indicadores_hogar_ip_historico');
                        console.log(xhr.responseText);
                    }
            })
}


function t3_movimiento_indicadores_hogar_oportunidades_historico (){
  actualizarTabla('t3_movimiento_indicadores_hogar_oportunidades_historico', 'Subida base de datos al servidor', '1');
  let tabla= 't3_movimiento_indicadores_hogar_oportunidades_historico';
$.ajax({
              url:'./sincroprivaciones',
              method: "GET",
              data: { tabla: tabla},  
              dataType:'JSON',
              success:function(data){ 
                actualizarTabla('t3_movimiento_indicadores_hogar_oportunidades_historico', 'Subida base de datos al servidor', '2');
                $('#barracarga').html('80%');
                $('#barracarga').css('width','80%');                                   
                t3_movimiento_indicadores_hogar_vp_historico();                   
              },
              error: function(xhr, status, error) {
                actualizarTabla('t3_movimiento_indicadores_hogar_oportunidades_historico', 'Subida base de datos al servidor', '3');
                    reintentarfuncion(t3_movimiento_indicadores_hogar_ip_historico, 't3_movimiento_indicadores_hogar_oportunidades_historico');
                        console.log(xhr.responseText);
                    }
            })
}

function t3_movimiento_indicadores_hogar_vp_historico (){
  actualizarTabla('t3_movimiento_indicadores_hogar_vp_historico', 'Subida base de datos al servidor', '1');
  let tabla= 't3_movimiento_indicadores_hogar_vp_historico';
$.ajax({
              url:'./sincroprivaciones',
              method: "GET",
              data: { tabla: tabla},  
              dataType:'JSON',
              success:function(data){ 
                actualizarTabla('t3_movimiento_indicadores_hogar_vp_historico', 'Subida base de datos al servidor', '2');
                $('#barracarga').html('81%');
                $('#barracarga').css('width','81%');                                   
                t3_movimiento_indicadores_integrante_ip_historico();                   
              },
              error: function(xhr, status, error) {
                actualizarTabla('t3_movimiento_indicadores_hogar_vp_historico', 'Subida base de datos al servidor', '3');
                    reintentarfuncion(t3_movimiento_indicadores_hogar_oportunidades_historico, 't3_movimiento_indicadores_hogar_vp_historico');
                        console.log(xhr.responseText);
                    }
            })
}

function t3_movimiento_indicadores_integrante_ip_historico (){
  actualizarTabla('t3_movimiento_indicadores_integrante_ip_historico', 'Subida base de datos al servidor', '1');
  let tabla= 't3_movimiento_indicadores_integrante_ip_historico';
$.ajax({
              url:'./sincroprivaciones',
              method: "GET",
              data: { tabla: tabla},  
              dataType:'JSON',
              success:function(data){ 
                actualizarTabla('t3_movimiento_indicadores_integrante_ip_historico', 'Subida base de datos al servidor', '2');
                $('#barracarga').html('82%');
                $('#barracarga').css('width','82%');                                   
                t3_movimiento_indicadores_integrante_oportunidades_historico();                   
              },
              error: function(xhr, status, error) {
                actualizarTabla('t3_movimiento_indicadores_integrante_ip_historico', 'Subida base de datos al servidor', '3');
                    reintentarfuncion(t3_movimiento_indicadores_hogar_vp_historico, 't3_movimiento_indicadores_integrante_ip_historico');
                        console.log(xhr.responseText);
                    }
            })
}

function t3_movimiento_indicadores_integrante_oportunidades_historico (){
  actualizarTabla('t3_movimiento_indicadores_integrante_oportunidades_historico', 'Subida base de datos al servidor', '1');
  let tabla= 't3_movimiento_indicadores_integrante_oportunidades_historico';
$.ajax({
              url:'./sincroprivaciones',
              method: "GET",
              data: { tabla: tabla},  
              dataType:'JSON',
              success:function(data){ 
                actualizarTabla('t3_movimiento_indicadores_integrante_oportunidades_historico', 'Subida base de datos al servidor', '2');
                $('#barracarga').html('82%');
                $('#barracarga').css('width','82%');                                   
                t3_movimiento_indicadores_integrante_pv_historico_bef_1();                   
              },
              error: function(xhr, status, error) {
                actualizarTabla('t3_movimiento_indicadores_integrante_oportunidades_historico', 'Subida base de datos al servidor', '3');
                    reintentarfuncion(t3_movimiento_indicadores_integrante_ip_historico, 't3_movimiento_indicadores_integrante_oportunidades_historico');
                        console.log(xhr.responseText);
                    }
            })
}


function t3_movimiento_indicadores_integrante_pv_historico_bef_1 (){
  actualizarTabla('t3_movimiento_indicadores_integrante_pv_historico_bef_1', 'Subida base de datos al servidor', '1');
  let tabla= 't3_movimiento_indicadores_integrante_pv_historico_bef_1';
$.ajax({
              url:'./sincroprivaciones',
              method: "GET",
              data: { tabla: tabla},  
              dataType:'JSON',
              success:function(data){ 
                actualizarTabla('t3_movimiento_indicadores_integrante_pv_historico_bef_1', 'Subida base de datos al servidor', '2');
                $('#barracarga').html('83%');
                $('#barracarga').css('width','83%');                                   
                t3_movimiento_indicadores_integrante_pv_historico_bef_2();                   
              },
              error: function(xhr, status, error) {
                actualizarTabla('t3_movimiento_indicadores_integrante_pv_historico_bef_1', 'Subida base de datos al servidor', '3');
                    reintentarfuncion(t3_movimiento_indicadores_integrante_oportunidades_historico, 't3_movimiento_indicadores_integrante_pv_historico_bef_1');
                        console.log(xhr.responseText);
                    }
            })
}

function t3_movimiento_indicadores_integrante_pv_historico_bef_2 (){
  actualizarTabla('t3_movimiento_indicadores_integrante_pv_historico_bef_2', 'Subida base de datos al servidor', '1');
  let tabla= 't3_movimiento_indicadores_integrante_pv_historico_bef_2';
$.ajax({
              url:'./sincroprivaciones',
              method: "GET",
              data: { tabla: tabla},  
              dataType:'JSON',
              success:function(data){ 
                actualizarTabla('t3_movimiento_indicadores_integrante_pv_historico_bef_2', 'Subida base de datos al servidor', '2');
                $('#barracarga').html('84%');
                $('#barracarga').css('width','84%');                                   
                t3_movimiento_indicadores_integrante_pv_historico_bef_4();                   
              },
              error: function(xhr, status, error) {
                actualizarTabla('t3_movimiento_indicadores_integrante_pv_historico_bef_2', 'Subida base de datos al servidor', '3');
                    reintentarfuncion(t3_movimiento_indicadores_integrante_pv_historico_bef_1, 't3_movimiento_indicadores_integrante_pv_historico_bef_2');
                        console.log(xhr.responseText);
                    }
            })
}

function t3_movimiento_indicadores_integrante_pv_historico_bef_4 (){
  actualizarTabla('t3_movimiento_indicadores_integrante_pv_historico_bef_4', 'Subida base de datos al servidor', '1');
  let tabla= 't3_movimiento_indicadores_integrante_pv_historico_bef_4';
$.ajax({
              url:'./sincroprivaciones',
              method: "GET",
              data: { tabla: tabla},  
              dataType:'JSON',
              success:function(data){ 
                actualizarTabla('t3_movimiento_indicadores_integrante_pv_historico_bef_4', 'Subida base de datos al servidor', '2');
                $('#barracarga').html('85%');
                $('#barracarga').css('width','85%');                                   
                t3_movimiento_indicadores_integrante_pv_historico_bf_4();                   
              },
              error: function(xhr, status, error) {
                actualizarTabla('t3_movimiento_indicadores_integrante_pv_historico_bef_4', 'Subida base de datos al servidor', '3');
                    reintentarfuncion(t3_movimiento_indicadores_integrante_pv_historico_bef_2, 't3_movimiento_indicadores_integrante_pv_historico_bef_4');
                        console.log(xhr.responseText);
                    }
            })
}

function t3_movimiento_indicadores_integrante_pv_historico_bf_4 (){
  actualizarTabla('t3_movimiento_indicadores_integrante_pv_historico_bf_4', 'Subida base de datos al servidor', '1');
  let tabla= 't3_movimiento_indicadores_integrante_pv_historico_bf_4';
$.ajax({
              url:'./sincroprivaciones',
              method: "GET",
              data: { tabla: tabla},  
              dataType:'JSON',
              success:function(data){ 
                actualizarTabla('t3_movimiento_indicadores_integrante_pv_historico_bf_4', 'Subida base de datos al servidor', '2');
                $('#barracarga').html('86%');
                $('#barracarga').css('width','86%');                                   
                t3_movimiento_indicadores_integrante_pv_historico_bf_5();                   
              },
              error: function(xhr, status, error) {
                actualizarTabla('t3_movimiento_indicadores_integrante_pv_historico_bf_4', 'Subida base de datos al servidor', '3');
                    reintentarfuncion(t3_movimiento_indicadores_integrante_pv_historico_bef_4, 't3_movimiento_indicadores_integrante_pv_historico_bf_4');
                        console.log(xhr.responseText);
                    }
            })
}

function t3_movimiento_indicadores_integrante_pv_historico_bf_5 (){
  actualizarTabla('t3_movimiento_indicadores_integrante_pv_historico_bf_5', 'Subida base de datos al servidor', '1');
  let tabla= 't3_movimiento_indicadores_integrante_pv_historico_bf_5';
$.ajax({
              url:'./sincroprivaciones',
              method: "GET",
              data: { tabla: tabla},  
              dataType:'JSON',
              success:function(data){ 
                actualizarTabla('t3_movimiento_indicadores_integrante_pv_historico_bf_5', 'Subida base de datos al servidor', '2');
                $('#barracarga').html('86%');
                $('#barracarga').css('width','86%');                                   
                t3_movimiento_indicadores_integrante_pv_historico_bi_1();                   
              },
              error: function(xhr, status, error) {
                actualizarTabla('t3_movimiento_indicadores_integrante_pv_historico_bf_5', 'Subida base de datos al servidor', '3');
                    reintentarfuncion(t3_movimiento_indicadores_integrante_pv_historico_bf_4, 't3_movimiento_indicadores_integrante_pv_historico_bf_5');
                        console.log(xhr.responseText);
                    }
            })
}

function t3_movimiento_indicadores_integrante_pv_historico_bi_1 (){
  actualizarTabla('t3_movimiento_indicadores_integrante_pv_historico_bi_1', 'Subida base de datos al servidor', '1');
  let tabla= 't3_movimiento_indicadores_integrante_pv_historico_bi_1';
$.ajax({
              url:'./sincroprivaciones',
              method: "GET",
              data: { tabla: tabla},  
              dataType:'JSON',
              success:function(data){ 
                actualizarTabla('t3_movimiento_indicadores_integrante_pv_historico_bi_1', 'Subida base de datos al servidor', '2');
                $('#barracarga').html('87%');
                $('#barracarga').css('width','87%');                                   
                t3_movimiento_indicadores_integrante_pv_historico_bse_3();                   
              },
              error: function(xhr, status, error) {
                actualizarTabla('t3_movimiento_indicadores_integrante_pv_historico_bi_1', 'Subida base de datos al servidor', '3');
                    reintentarfuncion(t3_movimiento_indicadores_integrante_pv_historico_bf_5, 't3_movimiento_indicadores_integrante_pv_historico_bi_1');
                        console.log(xhr.responseText);
                    }
            })
}

function t3_movimiento_indicadores_integrante_pv_historico_bse_3 (){
  actualizarTabla('t3_movimiento_indicadores_integrante_pv_historico_bse_3', 'Subida base de datos al servidor', '1');
  let tabla= 't3_movimiento_indicadores_integrante_pv_historico_bse_3';
$.ajax({
              url:'./sincroprivaciones',
              method: "GET",
              data: { tabla: tabla},  
              dataType:'JSON',
              success:function(data){ 
                actualizarTabla('t3_movimiento_indicadores_integrante_pv_historico_bse_3', 'Subida base de datos al servidor', '2');
                $('#barracarga').html('88%');
                $('#barracarga').css('width','88%');                                   
                t3_movimiento_indicadores_integrante_pv_historico_bse_7();                   
              },
              error: function(xhr, status, error) {
                actualizarTabla('t3_movimiento_indicadores_integrante_pv_historico_bse_3', 'Subida base de datos al servidor', '3');
                    reintentarfuncion(t3_movimiento_indicadores_integrante_pv_historico_bi_1, 't3_movimiento_indicadores_integrante_pv_historico_bse_3');
                        console.log(xhr.responseText);
                    }
            })
}

function t3_movimiento_indicadores_integrante_pv_historico_bse_7 (){
  actualizarTabla('t3_movimiento_indicadores_integrante_pv_historico_bse_7', 'Subida base de datos al servidor', '1');
  let tabla= 't3_movimiento_indicadores_integrante_pv_historico_bse_7';
$.ajax({
              url:'./sincroprivaciones',
              method: "GET",
              data: { tabla: tabla},  
              dataType:'JSON',
              success:function(data){ 
                actualizarTabla('t3_movimiento_indicadores_integrante_pv_historico_bse_7', 'Subida base de datos al servidor', '2');
                $('#barracarga').html('89%');
                $('#barracarga').css('width','89%');                                   
                t3_movimiento_indicadores_integrante_vp_historico();                   
              },
              error: function(xhr, status, error) {
                actualizarTabla('t3_movimiento_indicadores_integrante_pv_historico_bse_7', 'Subida base de datos al servidor', '3');
                    reintentarfuncion(t3_movimiento_indicadores_integrante_pv_historico_bse_3, 't3_movimiento_indicadores_integrante_pv_historico_bse_7');
                        console.log(xhr.responseText);
                    }
            })
}

function t3_movimiento_indicadores_integrante_vp_historico (){
  actualizarTabla('t3_movimiento_indicadores_integrante_vp_historico', 'Subida base de datos al servidor', '1');
  let tabla= 't3_movimiento_indicadores_integrante_vp_historico';
$.ajax({
              url:'./sincroprivaciones',
              method: "GET",
              data: { tabla: tabla},  
              dataType:'JSON',
              success:function(data){ 
                actualizarTabla('t3_movimiento_indicadores_integrante_vp_historico', 'Subida base de datos al servidor', '2');
                $('#barracarga').html('90%');
                $('#barracarga').css('width','90%');                                   
                t1_accionmovilizadoracompromisos();                   
              },
              error: function(xhr, status, error) {
                actualizarTabla('t3_movimiento_indicadores_integrante_vp_historico', 'Subida base de datos al servidor', '3');
                    reintentarfuncion(t3_movimiento_indicadores_integrante_pv_historico_bse_7, 't3_movimiento_indicadores_integrante_vp_historico');
                        console.log(xhr.responseText);
                    }
            })
}



function t1_accionmovilizadoracompromisos (){
  actualizarTabla('t1_accionmovilizadoracompromisos', 'Subida base de datos al servidor', '1');
  let tabla= 't1_accionmovilizadoracompromisos';
$.ajax({
              url:'./sincroprivaciones',
              method: "GET",
              data: { tabla: tabla},  
              dataType:'JSON',
              success:function(data){ 
                actualizarTabla('t1_accionmovilizadoracompromisos', 'Subida base de datos al servidor', '2');
                $('#barracarga').html('90%');
                $('#barracarga').css('width','90%');                                   
                t3_sincronizacion();                   
              },
              error: function(xhr, status, error) {
                actualizarTabla('t1_accionmovilizadoracompromisos', 'Subida base de datos al servidor', '3');
                    reintentarfuncion(t3_movimiento_indicadores_integrante_pv_historico_bse_7, 't1_accionmovilizadoracompromisos');
                        console.log(xhr.responseText);
                    }
            })
}


function t3_sincronizacion (){
  actualizarTabla('t3_sincronizacion', 'Subida base de datos al servidor', '1');
 // let tabla= 't3_movimiento_indicadores_integrante_vp_historico';
$.ajax({
              url:'./fc_guardarsincro',
              method: "GET",
              dataType:'JSON',
              success:function(data){ 
                actualizarTabla('t3_sincronizacion', 'Subida base de datos al servidor', '2');
                $('#barracarga').html('90%');
                $('#barracarga').css('width','90%');                                   
                reasignacionarriba();                   
              },
              error: function(xhr, status, error) {
                actualizarTabla('t3_movimiento_indicadores_integrante_vp_historico', 'Subida base de datos al servidor', '3');
                    reintentarfuncion(t3_movimiento_indicadores_integrante_pv_historico_bse_7, 't3_movimiento_indicadores_integrante_vp_historico');
                        console.log(xhr.responseText);
                    }
            })
}

//


function reasignacionarriba (){
  actualizarTabla('reasignacionarriba', 'Revisando si hay reasignación', '1');
$.ajax({
              url:'./reasignacionarriba',
              method: "GET",
              dataType:'JSON',
              success:function(data){ 
                actualizarTabla('reasignacionarriba', 'Revisando si hay reasignación', '2');
                $('#barracarga').html('90%');
                $('#barracarga').css('width','90%');                      
               
                reasignacionabajo();                   
              },
              error: function(xhr, status, error) {
                actualizarTabla('reasignacionarriba', 'Revisando si hay reasignación', '3');
                    reintentarfuncion(t3_movimiento_indicadores_integrante_vp_historico, 't3_oportunidades');
                        console.log(xhr.responseText);
                    }
            })
}

function reasignacionabajo (){
  actualizarTabla('reasignacionabajo', 'Revisando si hay reasignación', '1');
$.ajax({
              url:'./reasignacionabajo',
              method: "GET",
              dataType:'JSON',
              success:function(data){ 
                actualizarTabla('reasignacionabajo', 'Revisando si hay reasignación', '2');
                $('#barracarga').html('91%');
                $('#barracarga').css('width','91%');                      
               
                verificarsihayfoliosnuevos();                   
              },
              error: function(xhr, status, error) {
                actualizarTabla('reasignacionabajo', 'Revisando si hay reasignación', '3');
                    reintentarfuncion(t1_visitasrealizadas, 't1_pasosvisita');
                        console.log(xhr.responseText);
                    }
            })
}



function verificarsihayfoliosnuevos(){
   // actualizarTabla('verificando folios nuevos', 'verificando folios nuevos', '1');
    let tabla= 't1_principalhogar';
        $.ajax({
                url:'./verificarsihayfoliosnuevos',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                if(data == 0){
                  actualizarTabla('verificando folios nuevos', 'verificando folios nuevos', '2');
                 // alert('fin');
                  $('#barracarga').html('100%');
                  $('#barracarga').addClass('bg-warning');  
                  t1_principalhogard();
                  detenerReloj();  
                }
                if(data == 1 ){
                  actualizarTabla('verificando folios nuevos', 'verificando folios nuevos', '2');
                  //alert('error');
                   todook();
                   detenerReloj();  
                }                
                },
                error: function(xhr, status, error) {
                  actualizarTabla('verificando folios nuevos', 'verificando folios nuevos', '3');
                      reintentarfuncion(t1_saludemocionalqt, 'verificarsihayfoliosnuevos');
                          console.log(xhr.responseText);
                      }
              })
}




/// SINCRO Abajo



