<?php 
session_start(0);
//Variables globales del sistema.   -----------------------------------------------------------------------------------------------
	//ID del usuario actual.
	$_SESSION['Usuario_Actual'] = 5113; 
	//Fecha desde la que se haran las consultas.
	$_SESSION["Fecha_Inicial"] = "2015-01-01"; 		
	//Fecha hasta la que se haran las consultas.
	$_SESSION["Fecha_Final"] = "2015-12-31"; 		

//Fin de Variables globales del sistema.   -----------------------------------------------------------------------------------------------

//Conexión a SQL Server usando el driver ODBC de Windows.  ------------------------------------------------------------------------------
	$Conexion_SQL = odbc_connect('AIMCO','sa','Sql@dmin1', SQL_CUR_USE_ODBC);
	if ($Conexion_SQL == FALSE){
	echo ('Error en la conexion' . odbc_error());
	}
//Fin Conexión a SQL Server usando el driver ODBC de Windows  ---------------------------------------------------------------------------

//Sección de valores parte superior index   --------------------------------------------------------------------------------------------
	//Consulta de facturas de Clientes
	$Consulta_Monto_Factura ="SELECT sum(T1.[TotalSumSy]) as Total FROM OINV T0  INNER JOIN INV1 T1 ON T0.DocEntry = T1.DocEntry INNER JOIN OSLP T2 ON T0.SlpCode = T2.SlpCode WHERE T2.[U_CODIGO_USA] = ".$_SESSION['Usuario_Actual']." AND  T0.[DocDate] >= '".$_SESSION["Fecha_Inicial"]."' AND  T0.[DocDate] <= '".$_SESSION["Fecha_Final"]."' AND  T1.[TargetType] <> 14";
	$Resultado_Consulta = odbc_exec($Conexion_SQL, $Consulta_Monto_Factura);
	$Monto_Total = odbc_result($Resultado_Consulta, "Total");
	$facturas = "$". number_format($Monto_Total, 2);
	odbc_close($Conexion_SQL);

	//Consulta de ordenes de Venta
	$Consulta_Monto_Ordenes ="SELECT SUM ( T2.[TotalSumSy] ) as Total FROM ORDR T0  INNER JOIN OSLP T1 ON T0.SlpCode = T1.SlpCode INNER JOIN RDR1 T2 ON T0.DocEntry = T2.DocEntry WHERE T0.[DocDate] >= '".$_SESSION["Fecha_Inicial"]."' AND  T0.[DocDate] <= '".$_SESSION["Fecha_Final"]."' AND T0.[CANCELED] = 'N' AND  T1.[U_CODIGO_USA]  = ".$_SESSION['Usuario_Actual']."";
	$Resultado_Consulta2 = odbc_exec($Conexion_SQL, $Consulta_Monto_Ordenes);
	$Monto_Total2 = odbc_result($Resultado_Consulta2, "Total");
	$ordenes =  '$ ' . number_format($Monto_Total2, 2);
	odbc_close($Conexion_SQL); 

	//Consulta de ofertas de venta
	$Consulta_Monto_Ofertas ="SELECT SUM(T1.[TotalSumSy]) AS Total FROM OQUT T0  INNER JOIN QUT1 T1 ON T0.DocEntry = T1.DocEntry INNER JOIN OSLP T2 ON T0.SlpCode = T2.SlpCode WHERE T0.[DocDate] >= '".$_SESSION["Fecha_Inicial"]."' AND  T0.[DocDate] <= '".$_SESSION["Fecha_Final"]."' AND  T2.[U_CODIGO_USA]  = ".$_SESSION['Usuario_Actual']."";
    $Resultado_Consulta3 = odbc_exec($Conexion_SQL, $Consulta_Monto_Ofertas);
    $Monto_Total3 = odbc_result($Resultado_Consulta3, "Total");
    $ofertas =  '$ ' . number_format($Monto_Total3, 2);
    odbc_close($Conexion_SQL); 

    //Consulta de Back Order
    $Consulta_Monto_Back ="SELECT SUM( T1.[OpenQty] *  T1.[Price]  ) as Total FROM ORDR T0  INNER JOIN RDR1 T1 ON T0.DocEntry = T1.DocEntry INNER JOIN OSLP T2 ON T0.SlpCode = T2.SlpCode WHERE T0.[DocDate] >= '".$_SESSION["Fecha_Inicial"]."' AND T0.[DocDate] <= '".$_SESSION["Fecha_Final"]."' AND   T1.[OpenQty] <> 0 AND  T2.[U_CODIGO_USA]  = ".$_SESSION['Usuario_Actual']."";
    $Resultado_Consulta4 = odbc_exec($Conexion_SQL, $Consulta_Monto_Back);
    $Monto_Total4 = odbc_result($Resultado_Consulta4, "Total");
    $back =  '$ ' . number_format($Monto_Total4, 2);
    odbc_close($Conexion_SQL); 

//Fin de Sección de valores parte superior index   --------------------------------------------------------------------------------------------
?>