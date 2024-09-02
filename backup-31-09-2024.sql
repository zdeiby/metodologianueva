t1_casillamatriz
t1_indicador_bl_2
t1_indicador_bl_3
t1_indicador_bl_5
t1_indicador_bse_1
t1_indicador_bse_4
t1_indicador_bse_5
t1_indicador_bse_6
t1_indicador_bse_7
t1_privacion10
t1_privacion11
t1_privacion12
t1_privacion13
t1_privacion14
t1_privacion15
t1_privacion16
t1_privacion2
t1_privacion3
t1_privacion4
t1_privacion5
t1_privacion6
t1_privacion7
t1_privacion8
t1_privacion9         


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
                          t1_indicador_bse_1();                 
                    },
                    error: function(xhr, status, error) {
                      actualizarTabla('t1_indicador_bl_5', 'Subida base de datos al servidor', '3');
                          reintentarfuncion(t1_indicador_bl_3, 't1_indicador_bl_5');
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
        actualizarTabla('t1_privacion9      ', 'Subida base de datos al servidor', '1');
        let tabla= 't1_privacion9';
    $.ajax({
                    url:'./sincroprivaciones',
                    method: "GET",
                    data: { tabla: tabla},  
                    dataType:'JSON',
                    success:function(data){
                      $('#barracarga').html('100%');
                      $('#barracarga').css('width','100%');                      
                      actualizarTabla('t1_privacion9', 'Subida base de datos al servidor', '2');
                           todook();
                      detenerReloj();                    
                    },
                    error: function(xhr, status, error) {
                      actualizarTabla('t1_privacion9', 'Subida base de datos al servidor', '3');
                          reintentarfuncion(t1_privacion8, 't1_privacion9');
                              console.log(xhr.responseText);
                          }
                  })
  }