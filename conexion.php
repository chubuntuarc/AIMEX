<?php 
//Conexión a SQL Server
$conn = odbc_connect('AIMCO','sa','Sql@dmin1'); 
if (!$conn){
	exit("<strong>Ocurrio un error al conectarse a la base de datos.</strong>");
}
 ?>