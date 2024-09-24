
function t1_principalhogar(){
    iniciarContador();
    actualizarTabla('t1_principalhogar', 'Subida base de datos al servidor', '1');
$.ajax({
                url:'./t1_principalhogar',
                method: "GET",
                dataType:'JSON',
                success:function(data){
                  $('#barracarga').html('7%');
                  $('#barracarga').css('width','7%');
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
                  $('#barracarga').html('14%');
                  $('#barracarga').css('width','14%');
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
                  $('#barracarga').html('21%');
                  $('#barracarga').css('width','21%');
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
                  $('#barracarga').html('28%');
                  $('#barracarga').css('width','28%');
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
                  $('#barracarga').html('35%');
                  $('#barracarga').css('width','35%');
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
                  $('#barracarga').html('42%');
                  $('#barracarga').css('width','42%');
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
                  $('#barracarga').html('49%');
                  $('#barracarga').css('width','49%');
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
                  $('#barracarga').html('56%');
                  $('#barracarga').css('width','56%');
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
                  $('#barracarga').html('63%');
                  $('#barracarga').css('width','63%');
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
                  $('#barracarga').html('70%');
                  $('#barracarga').css('width','70%');
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
                  $('#barracarga').html('80%');
                  $('#barracarga').css('width','80%');
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
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
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
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
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
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
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
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
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
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
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
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
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
  actualizarTabla('t1_indicador_bl_6', 'Descarga de tablas desde el servdor', '1');
  let tabla= 't1_indicador_bl_6';
$.ajax({
              url:'./sincroprivaciones',
              method: "GET",
              data: { tabla: tabla},  
              dataType:'JSON',
              success:function(data){
                $('#barracarga').html('100%');
                $('#barracarga').css('width','100%');                      
                actualizarTabla('t1_indicador_bl_6', 'Descarga de tablas desde el servdor', '2');
                    t1_indicador_bse_1d();                 
              },
              error: function(xhr, status, error) {
                actualizarTabla('t1_indicador_bl_6', 'Descarga de tablas desde el servdor', '3');
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
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
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
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
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
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
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
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
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
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
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
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
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
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
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
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
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
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
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
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
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
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
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
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
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
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
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
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
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
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
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
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
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
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
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
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
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
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
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
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');  
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
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
                 
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
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
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
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
                  t1_indicador_bef_3();                
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_indicador_bef_2', 'Subida base de datos al servidor', '3');
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
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
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
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
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
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
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
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
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
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
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
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
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
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
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
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
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
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
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
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
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
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
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
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
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
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
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
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
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
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
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
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
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
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
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
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
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
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
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
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
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
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
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
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
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
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
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
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
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
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
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
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
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
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
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
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
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
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
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
                  $('#barracarga').html('100%');
                  $('#barracarga').css('width','100%');                      
                 
                  verificarsihayfoliosnuevos();                   
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_saludemocionalqt', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_visitasrealizadas, 't1_pasosvisita');
                          console.log(xhr.responseText);
                      }
              })
}

function verificarsihayfoliosnuevos(){
    //actualizarTabla('t1_saludemocionalqt', 'Subida base de datos al servidor', '1');
    let tabla= 't1_principalhogar';
$.ajax({
                url:'./verificarsihayfoliosnuevos',
                method: "GET",
                data: { tabla: tabla},  
                dataType:'JSON',
                success:function(data){ 
                if(data == 1){
                  t1_principalhogard();
                }
                if(data == 0 ){
                  todook();
                  detenerReloj();  
                }                
                },
                error: function(xhr, status, error) {
                  actualizarTabla('t1_saludemocionalqt', 'Subida base de datos al servidor', '3');
                      reintentarfuncion(t1_saludemocionalqt, 'verificarsihayfoliosnuevos');
                          console.log(xhr.responseText);
                      }
              })
}


