 //Variables generales de la gráfica
        var barChartData = {
          labels : ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"],
          datasets : [
            {
              fillColor : "#4CAF50", //Color principal de las barras
              strokeColor : "rgba(220,220,220,0.8)",
              highlightFill: "#757575",
              highlightStroke: "rgba(220,220,220,1)",
              data : [10000,20000.50,20000,20000,60000,50000,40000,30000,20000,10000,0,0]

            }
          ]
        }

//Función que carga la grafica inicial
            
        $(function(){
          var ctx = document.getElementById("canvas").getContext("2d");
          window.myBar = new Chart(ctx).Bar(barChartData, {
            responsive : true
          });
        });

//Funciones para obtener información de Facturas, Ordenes, Ofertas y Back Order                
        $(function(){
                //Funcion del botón Facturas de Clientes
                $('#Boton_Superior_Uno').on('click', function() {
                    $('#Titulo_Grafica').text("Facturas de Clientes");
                      window.myBar.destroy();
                      barChartData.datasets[0].data = [80000,90000,80000,70000,60000,50000,40000,30000,20000,10000,0,0];
                      barChartData.datasets[0].fillColor = '#4CAF50';
                    var ctx = document.getElementById("canvas").getContext("2d");
                        window.myBar = new Chart(ctx).Bar(barChartData, {
                          responsive : true,
                     });
                  });
                

                //Funcion del botón Ordenes de Venta
                $('#Boton_Superior_Dos').on('click', function(){
                    $('#Titulo_Grafica').text("Ordenes de Venta");
                    window.myBar.destroy();
                    barChartData.datasets[0].data = [0,0,10000,20000,30000,40000,50000,60000,70000,80000,90000,100000];
                    barChartData.datasets[0].fillColor = '#3F51B5';
                    var ctx = document.getElementById("canvas").getContext("2d");
                    window.myBar = new Chart(ctx).Bar(barChartData, {
                      responsive : true
                 });
                  })

                //Funcion del botón Ofertas de Venta
                $('#Boton_Superior_Tres').on('click', function(){
                    $('#Titulo_Grafica').text("Ofertas de Venta");
                    window.myBar.destroy();
                    barChartData.datasets[0].data = [0,0,10000,20000,30000,40000,50000,60000,70000,80000,90000,100000];
                    barChartData.datasets[0].fillColor = '#00BCD4';
                    var ctx = document.getElementById("canvas").getContext("2d");
                    window.myBar = new Chart(ctx).Bar(barChartData, {
                      responsive : true
                 });
                  })

                //Funcion del botón Back Order
                $('#Boton_Superior_Cuatro').on('click', function(){
                    $('#Titulo_Grafica').text("Back Order");
                    window.myBar.destroy();
                    barChartData.datasets[0].data = [0,0,10000,20000,30000,40000,50000,60000,70000,80000,90000,100000];
                    barChartData.datasets[0].fillColor = '#9C27B0';
                    var ctx = document.getElementById("canvas").getContext("2d");
                    window.myBar = new Chart(ctx).Bar(barChartData, {
                      responsive : true
                 });
                  })
        });