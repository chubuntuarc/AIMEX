 //Funciones generales de la gráfica principal.
 //El script principal se encuentra en scripts/tabla_ventas.js
 //Descargado de Charts.js
 //Documentación adicional en: http://www.chartjs.org/docs/#bar-chart
 //Variables generales de la gráfica
        //Campos para la gráfica de Facturación
        var Campos_Facturacion = document.getElementById("campos_facturacion").value;  //Cadena capturada de los input ocultos en el DOM
        var Valores_Facturacion = document.getElementById("campos_facturacion").innerHTML=Campos_Facturacion;
        var Mes_Facturacion = Valores_Facturacion.split(",");  //Se divide la cadena en partes para poder pasarlos a Float

        //Campos para la gráfica de Ordenes de Ventas
        var Campos_Ordenes = document.getElementById("campos_ordenes").value;   //Cadena capturada de los input ocultos en el DOM
        var Valores_Ordenes = document.getElementById("campos_facturacion").innerHTML=Campos_Ordenes;
        var Mes_Ordenes = Valores_Ordenes.split(",");   //Se divide la cadena en partes para poder pasarlos a Float

        //Campos para la gráfica de Ofertas de Ventas
        var Campos_Ofertas = document.getElementById("campos_ofertas").value;   //Cadena capturada de los input ocultos en el DOM
        var Valores_Ofertas = document.getElementById("campos_ofertas").innerHTML=Campos_Ofertas;
        var Mes_Ofertas = Valores_Ofertas.split(",");   //Se divide la cadena en partes para poder pasarlos a Float

        var barChartData = {
          labels : ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"],
          datasets : [
            {
              fillColor : "#4CAF50", //Color principal de las barras
              strokeColor : "rgba(220,220,220,0.8)",
              highlightFill: "#757575",
              highlightStroke: "rgba(220,220,220,1)",
              data : [parseFloat(Mes_Facturacion[0]),parseFloat(Mes_Facturacion[1]),parseFloat(Mes_Facturacion[2]),parseFloat(Mes_Facturacion[3]),parseFloat(Mes_Facturacion[4]),parseFloat(Mes_Facturacion[5]),parseFloat(Mes_Facturacion[6]),parseFloat(Mes_Facturacion[7]),parseFloat(Mes_Facturacion[8]),parseFloat(Mes_Facturacion[9]),parseFloat(Mes_Facturacion[10]),parseFloat(Mes_Facturacion[11])]
                //Los valores dentro de "data", son los que se obtienen con el split() de la variable Valores_Facturacion
                //Deben convertirse a Float para respetar el punto decimal, no pueden ir campos tipo String dentro
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
                      barChartData.datasets[0].data = [parseFloat(Mes_Facturacion[0]),parseFloat(Mes_Facturacion[1]),parseFloat(Mes_Facturacion[2]),parseFloat(Mes_Facturacion[3]),parseFloat(Mes_Facturacion[4]),parseFloat(Mes_Facturacion[5]),parseFloat(Mes_Facturacion[6]),parseFloat(Mes_Facturacion[7]),parseFloat(Mes_Facturacion[8]),parseFloat(Mes_Facturacion[9]),parseFloat(Mes_Facturacion[10]),parseFloat(Mes_Facturacion[11])];
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
                    barChartData.datasets[0].data = [parseFloat(Mes_Ordenes[0]),parseFloat(Mes_Ordenes[1]),parseFloat(Mes_Ordenes[2]),parseFloat(Mes_Ordenes[3]),parseFloat(Mes_Ordenes[4]),parseFloat(Mes_Ordenes[5]),parseFloat(Mes_Ordenes[6]),parseFloat(Mes_Ordenes[7]),parseFloat(Mes_Ordenes[8]),parseFloat(Mes_Ordenes[9]),parseFloat(Mes_Ordenes[10]),parseFloat(Mes_Ordenes[11])];
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
                    barChartData.datasets[0].data = [parseFloat(Mes_Ofertas[0]),parseFloat(Mes_Ofertas[1]),parseFloat(Mes_Ofertas[2]),parseFloat(Mes_Ofertas[3]),parseFloat(Mes_Ofertas[4]),parseFloat(Mes_Ofertas[5]),parseFloat(Mes_Ofertas[6]),parseFloat(Mes_Ofertas[7]),parseFloat(Mes_Ofertas[8]),parseFloat(Mes_Ofertas[9]),parseFloat(Mes_Ofertas[10]),parseFloat(Mes_Ofertas[11])];
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