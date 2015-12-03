(function($) {
  
  var currentChart;
  
  function setChartDimensions() {
    var width = $("section").width(),
        height = $("footer").offset().top - $("canvas").offset().top - 20;
    if (currentChart) {
      currentChart.chart.aspectRatio = width / height;
    } else {
      $("canvas").attr("width", width);
      $("canvas").attr("height", height);
    }
  }
  
  function drawChart() {
    var data = {
      labels: ["January", "February", "March", "April", "May", "June", "July"],
      datasets: [
        {
          label: "My First dataset",
          fillColor: "rgba(220,220,220,0.2)",
          strokeColor: "rgba(220,220,220,1)",
          pointColor: "rgba(220,220,220,1)",
          pointStrokeColor: "#fff",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(220,220,220,1)",
          data: [65, 59, 80, 81, 56, 55, 40]
        },
        {
          label: "My Second dataset",
          fillColor: "rgba(151,187,205,0.2)",
          strokeColor: "rgba(151,187,205,1)",
          pointColor: "rgba(151,187,205,1)",
          pointStrokeColor: "#fff",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(151,187,205,1)",
          data: [28, 48, 40, 19, 86, 27, 90]
        }
      ]
    };
    setChartDimensions();
    var ctx = $("canvas")[0].getContext("2d");
    currentChart = new Chart(ctx).Line(data, {animation: false, responsive: false});
  }
  
  window.onload = function() {
    drawChart();
    $(window).resize(function() {
      if (currentChart) {
        setChartDimensions();
        currentChart.stop();
        currentChart.resize(currentChart.render, true);
      }
    });
  };
  
})(jQuery);

