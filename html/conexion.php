<?php 
//Conexión a SQL Server
$conn = odbc_connect('AIMCO','sa','Sql@dmin1', SQL_CUR_USE_ODBC);
		if ($conn == FALSE){
		    echo ('Error en la conexion' . odbc_error());
		}
 ?>