 var barChartData = {
                  labels : ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"],
                  datasets : [
                    {
                      fillColor : "#4CAF50", //Color principal de las barras
                      strokeColor : "rgba(220,220,220,0.8)",
                      highlightFill: "#757575",
                      highlightStroke: "rgba(220,220,220,1)",
                      data : [80000,90000,80000,70000,60000,50000,40000,30000,20000,10000,0,0]
                    }
                  ]

                }
                window.onload = function(){
                  var ctx = document.getElementById("canvas").getContext("2d");
                  window.myBar = new Chart(ctx).Bar(barChartData, {
                    responsive : true
                  });
                }

                $(function(){
                    $('#Boton_Superior_Uno').on('click', function(){
                      $('#Titulo_Grafica').text("Facturas de Clientes");
                    })


                });