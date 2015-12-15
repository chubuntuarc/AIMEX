$(document).ready(function() {
    $("#resultado").html('');
});

function buscar() {
     $.ajax({
     type: "POST",
      url: "funcion.php"
 });
};