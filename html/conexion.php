<?php 
//Conexión a SQL Server
$Conexion_SQL = odbc_connect('AIMCO','sa','Sql@dmin1', SQL_CUR_USE_ODBC);
		if ($Conexion_SQL == FALSE){
		    echo ('Error en la conexion' . odbc_error());
		}
 ?>