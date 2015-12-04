<?php 
//Conexión a SQL Server usando el driver ODBC de Windows.
$Conexion_SQL = odbc_connect('AIMCO','sa','Sql@dmin1', SQL_CUR_USE_ODBC);
		if ($Conexion_SQL == FALSE){
		    echo ('Error en la conexion' . odbc_error());
		}
//Variables globales del sistema.
//ID del usuario actual.
$Usuario_Actual = "5113";
global $Usuario_Actual;
//Fecha desde la que se haran las consultas.		
$Fecha_Inicial = "'2015-01-01'";
global $Fecha_Inicial;
//Fecha hasta la que se haran las consultas.		
$Fecha_Final = "'2015-12-31'";
global $Fecha_Final;
//Tipo de gráfica a mostrar.
$Tipo_Grafica = "Facturas de Clientes";
global $Tipo_Grafica;
//Color de la gráfica en base al Tipo_Grafica.
switch ($Tipo_Grafica) {
	case "Facturas de Clientes":
		$Color_Grafica = '"#4CAF50"';
		break;
	case "Ordenes de venta":
		$Color_Grafica = '"#3F51B5"';
		break;
	case "Ofertas de venta":
		$Color_Grafica = '"#00BCD4"';
		break;
	case "Back Order":
		$Color_Grafica = '"#9C27B0"';
		break;
	default:
		$Color_Grafica = '"#4CAF50"';
		break;
}
global $Color_Grafica;
 ?>