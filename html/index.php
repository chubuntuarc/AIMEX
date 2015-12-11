<?php require 'php/funcionalidad.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>AIMCO Corporation de México</title>
  <link rel="icon" type="image/png" href="/images/favicon.gif" />
  <meta name="description" content="Sitio corporativo de AIMCO de México" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <link rel="stylesheet" href="../libs/assets/animate.css/animate.css" type="text/css" />
  <link rel="stylesheet" href="../libs/assets/font-awesome/css/font-awesome.css" type="text/css" />
  <link rel="stylesheet" href="../libs/jquery/waves/dist/waves.css" type="text/css" />
  <link rel="stylesheet" href="styles/material-design-icons.css" type="text/css" />
  <link rel="stylesheet" href="../libs/jquery/bootstrap/dist/css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="styles/font.css" type="text/css" />
  <link rel="stylesheet" href="styles/app.css" type="text/css" />
  <link rel="stylesheet" type="text/css" href="styles/adicionales.css">
  <link rel="stylesheet" type="text/css" href="styles/tabla.css">
</head>
<body>
<div class="app">

<!--Sección superior de logo y nombre de la empresa - - - - - -  - - - - - - - - - -  - - - -  - - - - - - -->
  <aside id="aside" class="app-aside modal fade folded" role="menu">
    <div class="left">
      <div class="box bg-white">
        <div class="navbar md-whiteframe-z1 no-radius blue">
            <!-- Logo -->
            <a class="navbar-brand">
              <img src="images/logo.png" alt="." style="max-height: 36px">
              <span class="hidden-folded m-l inline">AIMCO</span>
            </a>
            <!-- / Logo -->
        </div>
<!--/Sección superior de logo y nombre de la empresa - - - - - -  - - - - - - - - - -  - - - -  - - - - -  -->

<!--Sección barra lateral del sistema - - - - - - - - - - - - -  - - - - - - - - - -  - - - -  - - - - - - -->
        <div class="box-row">
          <div class="box-cell scrollable hover">
            <div class="box-inner">
              <div class="p hidden-folded blue-50" style="background-image:url(images/bg.png); background-size:cover">
                <div class="rounded w-64 bg-white inline pos-rlt">
                  <img src="images/a0.png" class="img-responsive rounded">
                </div>
                <a class="block m-t-sm" ui-toggle-class="hide, show" target="#nav, #account">
                  <span class="block font-bold">Antonio Diaz Reyes</span>
                  <span class="pull-right auto">
                    <i class="fa inline fa-caret-down"></i>
                    <i class="fa none fa-caret-up"></i>
                  </span>
                  antonio.diaz@aimco-global.com
                </a>
              </div>
              <div id="nav">
                <nav ui-nav>
                  <ul class="nav">
                    <li>
                      <a md-ink-ripple>
                        <span class="pull-right text-muted">
                          <i class="fa fa-caret-down"></i>
                        </span>
                        <i><img src="images/menu.png"></i>
                        <span class="font-normal">Dashboard</span>
                      </a>
                      <ul class="nav nav-sub">
                        <li>
                          <a md-ink-ripple href="index.php">Inicio</a>
                        </li>
                      </ul>
                    </li>
                    <li class="b-b b m-v-sm"></li>
                    <li>
                      <a md-ink-ripple ui-toggle-class="hide, show" target="#nav, #account">
                        <span>Configuración</span>
                      </a>
                    </li>
                  </ul>
                </nav>
              </div>
              <div id="account" class="hide m-v-xs">
                <nav>
                  <ul class="nav">
                    <li>
                      <a md-ink-ripple href="page.profile.html">
                        <i class="icon mdi-action-perm-contact-cal i-20"></i>
                        <span>Mi Perfil</span>
                      </a>
                    </li>
                    <li>
                      <a md-ink-ripple href="page.settings.html">
                        <i class="icon mdi-action-settings i-20"></i>
                        <span>Configuración</span>
                      </a>
                    </li>
                    <li>
                      <a md-ink-ripple href="lockme.html">
                        <i class="icon mdi-action-exit-to-app i-20"></i>
                        <span>Cerrar Sesión</span>
                      </a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
        <nav>
          <ul class="nav b-t b">
            <li>
              <a href="#" target="_blank" md-ink-ripple>
                <i class="icon mdi-action-help i-20"></i>
                <span>Ayuda &amp; Soporte</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </aside>
<!--/Sección barra lateral del sistema - - - - - - - - - - - - -  - - - - - - - - - -  - - - -  - - - - - - -->
  
<!--Header del sistema - - - - - - - - - - - - - - - - - - - - -  - - - - - - - - - -  - - - -  - - - - - - -->
  <div id="content" class="app-content" role="main">
    <div class="box">
          <!-- Content Navbar -->
    <div class="navbar md-whiteframe-z1 no-radius blue">
      <!-- Apertura de la barra de navegacion /Versión movil -->
      <a md-ink-ripple  data-toggle="modal" data-target="#aside" class="navbar-item pull-left visible-xs visible-sm"><i class="mdi-navigation-menu i-24"></i></a>
      <!-- / -->
      <!-- Titulo de la página -->
      <div class="navbar-item pull-left h4">Dashboard</div>
      <!-- /Titulo de la página -->
      <!-- Menu contextual superior derecho -->
      <ul class="nav nav-sm navbar-tool pull-right">
        <li>
          <a md-ink-ripple ui-toggle-class="show" target="#search">
            <i class="mdi-action-search i-24"></i>
          </a>
        </li>
        <li>
          <a md-ink-ripple data-toggle="modal" data-target="#user">
            <i class="mdi-social-person-outline i-24"></i>
          </a>
        </li>
        <li class="dropdown">
          <a md-ink-ripple data-toggle="dropdown">
            <i class="mdi-navigation-more-vert i-24"></i>
          </a>
          <ul class="dropdown-menu dropdown-menu-scale pull-right pull-up text-color">
            <li><a href>Opción1</a></li>
            <li><a href>Opción2</a></li>
            <li><a href>Opción3</a></li>
            <li class="divider"></li>
            <li><a href>Ayuda &amp; Soporte</a></li>
          </ul>
        </li>
      </ul>
      <div class="pull-right" ui-view="navbar@"></div>
      <!-- /Menu contextual superior derecho -->
      <!-- Busqueda del sistema -->
      <div id="search" class="pos-abt w-full h-full blue hide">
        <div class="box">
          <div class="box-col w-56 text-center">
            <!-- hide search form -->
            <a md-ink-ripple class="navbar-item inline"  ui-toggle-class="show" target="#search"><i class="mdi-navigation-arrow-back i-24"></i></a>
          </div>
          <div class="box-col v-m">
            <!-- bind to app.search.content -->
            <input class="form-control input-lg no-bg no-border" placeholder="Search" ng-model="app.search.content">
          </div>
          <div class="box-col w-56 text-center">
            <a md-ink-ripple class="navbar-item inline"><i class="mdi-av-mic i-24"></i></a>
          </div>
        </div>
      </div>
      <!-- /Busqueda del sistema -->
    </div>
      <div class="box-row">
        <div class="box-cell">
          <div class="box-inner padding">
            <div class="row">
<!--/Header del sistema  - - - - - - - - - - - - - - - - - - - -  - - - - - - - - - -  - - - -  - - - - - - -->

<!--   Sección superior de vista de dinero - - - - - - - - - - - - - - - - - - - - - - - - - --> 

    <!--Monto de facturación-->
    <div class="col-lg-3 col-md-6 col-sm-12">
      <div class="card" id="imagenes_superiores">
        <form>
          <a class="md-btn md-raised pull-left p-h-md green" id="Boton_Superior_Uno"><img src="images/monto_facturacion.png"></a>
          <div id="titulos_superiores">
            <label><h4>Facturas de Clientes</h4></label>
          </div>
          <div id="cantidades_superiores">
            <label><h4>
              <?php echo $facturas; ?>
            </h4></label> 
          </div>       
        </form>
      </div>
    </div>
    <!-- /Monto de facturación -->

    <!--Ordenes de venta-->
    <div class="col-lg-3 col-md-6 col-sm-12">
      <div class="card" id="imagenes_superiores">
        <form>
          <a md-ink-ripple class="md-btn md-raised pull-left p-h-md indigo" id="Boton_Superior_Dos"><img src="images/monto_facturacion.png"></a>
          <div id="titulos_superiores">
            <label><h4>Ordenes de Venta</h4></label>
          </div>
          <div id="cantidades_superiores">
            <label><h4><?php echo $ordenes ?>
            </h4></label> 
          </div>       
        </form>
      </div>
    </div>
    <!-- /Ordenes de venta-->

    <!--Ofertas de venta-->
    <div class="col-lg-3 col-md-6 col-sm-12">
      <div class="card" id="imagenes_superiores">
        <form>
          <a md-ink-ripple class="md-btn md-raised pull-left p-h-md cyan" id="Boton_Superior_Tres"><img src="images/monto_facturacion.png"></a>
          <div id="titulos_superiores">
            <label><h4>Ofertas de Venta</h4></label>
          </div>
          <div id="cantidades_superiores">
            <label><h4><?php echo $ofertas; ?>
            </h4></label> 
          </div>       
        </form>
      </div>
    </div>
    <!-- /Ofertas de venta-->

    <!--Back order-->
    <div class="col-lg-3 col-md-6 col-sm-12">
      <div class="card" id="imagenes_superiores">
        <form>
          <a md-ink-ripple class="md-btn md-raised pull-left p-h-md purple" id="Boton_Superior_Cuatro"><img src="images/monto_facturacion.png"></a>
          <div id="titulos_superiores">
            <label><h4>Back Order</h4></label>
          </div>
          <div id="cantidades_superiores">
            <label><h4><?php echo $back; ?>
            </h4></label> 
          </div>       
        </form>
      </div>
    </div>
    <!-- /Back order-->
      
<!--  /Sección superior de vista de dinero - - - - - - - - - - - - - - - - - - - - - - - - - --> 

<!--   Sección de charts  - - - - - - - -  - - - - - - - - - - - - - - - - - - - - - - - - - --> 
     <!-- Gráfica de ventas-->
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card" id="imagenes_superiores">
          <form>
            <div id="tabla_ventas">
              <label><h5 id="Titulo_Grafica">Facturas de Clientes</h5></label> <!--El titulo se modifica en base al script-->
              <canvas id="canvas" height="450" width="1200"></canvas>
              <!--Inputs ocultos para la consulta de los valores de las graficas-->
              <!--El id usado en los input sirve para llevar la cadena al script JS y esconderlos usando styles/adicionales.css-->
              <input type="text" id="campos_facturacion" value=" 
                <?php
                //Consultas para información de la gráfica en index   --------------------------------------------------------------------------------------------
                    //Consulta de Facturas de Clientes
                    $Consulta_Grafica_Facturas ="SELECT sum(T1.[TotalSumSy])AS Total FROM OINV T0  INNER JOIN INV1 T1 ON T0.DocEntry = T1.DocEntry INNER JOIN OSLP T2 ON T0.SlpCode = T2.SlpCode WHERE T0.[DocDate] >= '".$_SESSION["Anual"]."' AND  T2.[U_CODIGO_USA]  = ".$_SESSION['Usuario_Actual']." AND T1.[TargetType] <> 14 GROUP BY month(T0.[DocDate]) ORDER BY month(T0.[DocDate])";
                    $Resultado_Consulta_Grafica = odbc_exec($Conexion_SQL, $Consulta_Grafica_Facturas);
                    while ($fac = odbc_fetch_array($Resultado_Consulta_Grafica)) {
                      foreach ($fac as $meses) {
                        echo $meses.",";  //Se crea usando el foreach una cadena, la cual se divide en scripts/datosGrafica.js para llenar los campos de la gráfica
                      }
                    }
                ?>
              ">
              <input type="text" id="campos_ordenes" value="
                <?php
                    //Consulta de Ordenes de Venta
                    $Consulta_Grafica_Ordenes ="SELECT sum(T1.[TotalSumSy])AS Total FROM ORDR T0  INNER JOIN RDR1 T1 ON T0.DocEntry = T1.DocEntry INNER JOIN OSLP T2 ON T0.SlpCode = T2.SlpCode WHERE T0.[DocDate] >= '".$_SESSION["Anual"]."' AND T0.[CANCELED] = 'N' AND   T2.[U_CODIGO_USA]  = ".$_SESSION['Usuario_Actual']." GROUP BY month(T0.[DocDate]) ORDER BY month(T0.[DocDate])";
                    $Resultado_Consulta_Grafica_Ordenes = odbc_exec($Conexion_SQL, $Consulta_Grafica_Ordenes);
                    while ($ord = odbc_fetch_array($Resultado_Consulta_Grafica_Ordenes)) {
                      foreach ($ord as $meses_ord) {  //Las variables en while y foreach de los input son solo para uso en ellos mismos.
                        echo $meses_ord.",";
                      }
                    }
                ?>
              ">
              <input type="text" id="campos_ofertas" value="
                <?php
                    //Consulta de Ofertas de Venta
                    $Consulta_Grafica_Ofertas ="SELECT sum(T1.[TotalSumSy])AS Total FROM OQUT T0  INNER JOIN QUT1 T1 ON T0.DocEntry = T1.DocEntry INNER JOIN OSLP T2 ON T0.SlpCode = T2.SlpCode WHERE T0.[DocDate] >= '".$_SESSION["Anual"]."' AND T2.[U_CODIGO_USA]  = ".$_SESSION['Usuario_Actual']." GROUP BY month(T0.[DocDate]) ORDER BY month(T0.[DocDate])";
                    $Resultado_Consulta_Grafica_Ofertas = odbc_exec($Conexion_SQL, $Consulta_Grafica_Ofertas);
                    while ($ofe = odbc_fetch_array($Resultado_Consulta_Grafica_Ofertas)) {
                      foreach ($ofe as $meses_ofe) {
                        echo $meses_ofe.",";
                      }
                    }
                ?>
              ">
              <input type="text" id="campos_back_order" value="
                <?php
                    //Consulta de Back Order
                    $Consulta_Grafica_Back_Order ="SELECT SUM( T1.[OpenQty] *  T1.[Price]  ) as Total FROM ORDR T0  INNER JOIN RDR1 T1 ON T0.DocEntry = T1.DocEntry INNER JOIN OSLP T2 ON T0.SlpCode = T2.SlpCode WHERE T0.[DocDate] >= '".$_SESSION["Anual"]."' AND  T2.[U_CODIGO_USA]  = ".$_SESSION['Usuario_Actual']." group by month(T0.[DocDate]) ORDER BY month(T0.[DocDate])";
                    $Resultado_Consulta_Grafica_Back_Order = odbc_exec($Conexion_SQL, $Consulta_Grafica_Back_Order);
                    while ($bac = odbc_fetch_array($Resultado_Consulta_Grafica_Back_Order)) {
                      foreach ($bac as $meses_bac) {
                        echo $meses_bac.",";
                      }
                    }
                ?>
              ">
              <!--/Inputs ocultos para la consulta de los valores de las graficas-->
            </div>
          </form>
        </div>
      </div>  
          <!-- / Gráfica de ventas-->

<!--  /Sección de charts  - - - - - - - -  - - - - - - - - - - - - - - - - - - - - - - - - - --> 

<!--  Sección de Rankings - - - - - - - - - -  - - - - - - - - - - -  - - - - - - - - - - - - -->
      <!-- Top 10 Ventas-->
      <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="panel panel-default">
              <div class="panel-heading"><h4>Top 10 - Producto más vendido por cliente</h4></div>
              <table class="table table-striped " >
                <thead>
                  <tr>
                    <th class="text-left" id="Header_Cliente">Cliente</th> 
                    <th class="text-left">Producto</th>    
                    <th class="text-left">Cantidad</th>    
                    <th class="text-left" id="Header_Precio">Precio</th>
                  </tr>
                </thead>
                <tbody class="table-hover">
                  <?php 
                  //Sección de Ranking de Ventas y Clientes   --------------------------------------------------------------------------------------------
                      //Consulta de Ventas
                      $Consulta_Top_Ventas ="SELECT top 10 T1.[ItemCode] as Producto, T0.[CardName],  sum(T1.[Quantity]) as Cantidad,T1.[Price],  sum(T1.[Quantity])* T1.[Price] as Total FROM OINV T0  INNER JOIN INV1 T1 ON T0.DocEntry = T1.DocEntry INNER JOIN OSLP T2 ON T0.SlpCode = T2.SlpCode WHERE T0.[DocDate] >= '".$_SESSION["Anual"]."' AND  T2.[U_CODIGO_USA] = ".$_SESSION["Usuario_Actual"]." AND  T1.[TargetType] <> 14 GROUP BY T1.[ItemCode],T1.[Price],T0.[CardName] ORDER BY Cantidad desc";
                      $Resultado_Consulta_Top_Ventas = odbc_exec($Conexion_SQL, $Consulta_Top_Ventas);
                      while (odbc_fetch_array($Resultado_Consulta_Top_Ventas)) {
                        echo "<tr>";
                        echo "<td class='text-left' id='Top_Venta_Cliente'>".odbc_result($Resultado_Consulta_Top_Ventas, 2)."</td>";
                        echo "<td class='text-left' id='Producto_Top'>".odbc_result($Resultado_Consulta_Top_Ventas, 1)."</td>";
                        echo "<td class='text-left' >".number_format(odbc_result($Resultado_Consulta_Top_Ventas, 3))."</td>";
                        echo "<td class='text-left' id='Precio_Top_Venta_Cliente'>$".number_format(odbc_result($Resultado_Consulta_Top_Ventas, 4), 2)."</td>";
                        echo "</tr>";
                        }
                   ?>
                </tbody>
              </table>
            </div>
          </div>
        <!-- Top 10 Ventas-->
        <!-- Top 10 Clientes-->
      <div class="col-lg-6 col-md- col-sm-12">
            <div class="panel panel-default">
              <div class="panel-heading"><h4>Top 10 Clientes</h4></div>
              <table class="table table-striped " >
                <thead>
                  <tr>
                    <th class="text-center">#</th>
                    <th>Nombre</th>    
                    <th>Empresa</th>                 
                    <th>Otro</th>    
                  </tr>
                </thead>
                <tbody>
                  <tr>  
                  <td class="text-center">1</td>
                    <td>Nombre 1</td>
                    <td>Empresa 1</td>
                    <td>Otro 1</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- Top 10 Ventas-->
<!--  /Sección de Rankings - - - - - - - - - -  - - - - - - - - - - -  - - - - - - - - - - - - -->

<!--  Sección de chat de la empresa  - - - - - - - -  - - - - - - - - - - - - - - - - - - - - - - - - - --> 
  <div class="modal fade" id="user" data-backdrop="false">
    <div class="right w-xl bg-white md-whiteframe-z2">
        <div class="box">
    <div class="p p-h-md">
      <a data-dismiss="modal" class="pull-right text-muted-lt text-2x m-t-n inline p-sm">&times;</a>
      <strong>Members</strong>
    </div>
    <div class="box-row">
      <div class="box-cell">
        <div class="box-inner">
          <div class="list-group no-radius no-borders">
            <a data-toggle="modal" data-target="#chat" data-dismiss="modal"  class="list-group-item p-h-md">
              <img src="images/a1.jpg" class="pull-left w-40 m-r img-circle">
              <div class="clear">
                <span class="font-bold block">Jonathan Doe</span>
                <span class="clear text-ellipsis text-xs">"Hey, What's up"</span>
              </div>
            </a>
            <a data-toggle="modal" data-target="#chat" data-dismiss="modal"  class="list-group-item p-h-md">
              <img src="images/a2.jpg" class="pull-left w-40 m-r img-circle">
              <div class="clear">
                <span class="font-bold block">James Pill</span>
                <span class="clear text-ellipsis text-xs">"Lorem ipsum dolor sit amet onsectetur adipiscing elit"</span>
              </div>
            </a>
            <div class="p-h-md m-t p-v-xs">Work</div>
            <a data-toggle="modal" data-target="#chat" data-dismiss="modal"  class="list-group-item p-h-md">
                <i class="fa fa-circle text-success text-xs m-r-xs"></i>
                <span>Jonathan Morina</span>
            </a>
            <a data-toggle="modal" data-target="#chat" data-dismiss="modal"  class="list-group-item p-h-md">
                <i class="fa fa-circle text-success text-xs m-r-xs"></i>
                <span>Mason Yarnell</span>
            </a>
            <a data-toggle="modal" data-target="#chat" data-dismiss="modal"  class="list-group-item p-h-md">
                <i class="fa fa-circle text-warning text-xs m-r-xs"></i>
                <span>Mike Mcalidek</span>
            </a>
            <a data-toggle="modal" data-target="#chat" data-dismiss="modal"  class="list-group-item p-h-md">
                <i class="fa fa-circle text-muted-lt text-xs m-r-xs"></i>
                <span>Cris Labiso</span>
            </a>
            <a data-toggle="modal" data-target="#chat" data-dismiss="modal"  class="list-group-item p-h-md">
                <i class="fa fa-circle text-muted-lt text-xs m-r-xs"></i>
                <span>Daniel Sandvid</span>
            </a>
            <a data-toggle="modal" data-target="#chat" data-dismiss="modal"  class="list-group-item p-h-md">
                <i class="fa fa-circle text-muted-lt text-xs m-r-xs"></i>
                <span>Helder Oliveira</span>
            </a>
            <a data-toggle="modal" data-target="#chat" data-dismiss="modal"  class="list-group-item p-h-md">
                <i class="fa fa-circle text-muted-lt text-xs m-r-xs"></i>
                <span>Jeff Broderik</span>
            </a>
            <a data-toggle="modal" data-target="#chat" data-dismiss="modal"  class="list-group-item p-h-md">
                <i class="fa fa-circle text-muted-lt text-xs m-r-xs"></i>
                <span>Daniel Sandvid</span>
            </a>
            <a data-toggle="modal" data-target="#chat" data-dismiss="modal"  class="list-group-item p-h-md">
                <i class="fa fa-circle text-muted-lt text-xs m-r-xs"></i>
                <span>Helder Oliveira</span>
            </a>
            <a data-toggle="modal" data-target="#chat" data-dismiss="modal"  class="list-group-item p-h-md">
                <i class="fa fa-circle text-muted-lt text-xs m-r-xs"></i>
                <span>Jeff Broderik</span>
            </a>
            <div class="p-h-md m-t p-v-xs">Partner</div>            
            <a data-toggle="modal" data-target="#chat" data-dismiss="modal"  class="list-group-item p-h-md">
                <i class="fa fa-circle text-success text-xs m-r-xs"></i>
                <span>Mason Yarnell</span>
            </a>
            <a data-toggle="modal" data-target="#chat" data-dismiss="modal"  class="list-group-item p-h-md">
                <i class="fa fa-circle text-warning text-xs m-r-xs"></i>
                <span>Mike Mcalidek</span>
            </a>
            <a data-toggle="modal" data-target="#chat" data-dismiss="modal"  class="list-group-item p-h-md">
                <i class="fa fa-circle text-muted-lt text-xs m-r-xs"></i>
                <span>Cris Labiso</span>
            </a>
            <a data-toggle="modal" data-target="#chat" data-dismiss="modal"  class="list-group-item p-h-md">
                <i class="fa fa-circle text-muted-lt text-xs m-r-xs"></i>
                <span>Jonathan Morina</span>
            </a>
            <a data-toggle="modal" data-target="#chat" data-dismiss="modal"  class="list-group-item p-h-md">
                <i class="fa fa-circle text-muted-lt text-xs m-r-xs"></i>
                <span>Daniel Sandvid</span>
            </a>
            <a data-toggle="modal" data-target="#chat" data-dismiss="modal"  class="list-group-item p-h-md">
                <i class="fa fa-circle text-muted-lt text-xs m-r-xs"></i>
                <span>Helder Oliveira</span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="p-h-md p-v">
      <p>Invite People</p>
      <a href class="text-muted"><i class="fa fa-fw fa-twitter"></i> Twitter</a>
      <a href class="text-muted m-h"><i class="fa fa-fw fa-facebook"></i> Facebook</a>
    </div>
  </div>
    </div>
  </div>
  <div class="modal fade" id="chat" data-backdrop="false">
    <div class="right w-xxl bg-white md-whiteframe-z2">
        <div class="box">
    <div class="p p-h-md">
      <a data-dismiss="modal" class="pull-right text-muted-lt text-2x m-t-n inline p-sm">&times;</a>
      <strong>Chat</strong>
    </div>
    <div class="box-row bg-light lt">
      <div class="box-cell">
        <div class="box-inner">
          <div class="p-md">
            <div class="m-b">
              <a href class="pull-left w-40 m-r-sm"><img src="images/a2.jpg" alt="..." class="w-full img-circle"></a>
              <div class="clear">
                <div class="p p-v-sm bg-warning inline r">
                  Hi John, What's up...
                </div>
                <div class="text-muted-lt text-xs m-t-xs"><i class="fa fa-ok text-success"></i> 2 minutes ago</div>
              </div>
            </div>
            <div class="m-b">
              <a href class="pull-right w-40 m-l-sm"><img src="images/a3.jpg" class="w-full img-circle" alt="..."></a>
              <div class="clear text-right">
                <div class="p p-v-sm bg-info inline text-left r">
                  Lorem ipsum dolor soe rooke..
                </div>
                <div class="text-muted-lt text-xs m-t-xs">1 minutes ago</div>
              </div>
            </div>
            <div class="m-b">
              <a href class="pull-left w-40 m-r-sm"><img src="images/a2.jpg" alt="..." class="w-full img-circle"></a>
              <div class="clear">
                <div class="p p-v-sm bg-warning inline r">
                  Good!
                </div>
                <div class="text-muted-lt text-xs m-t-xs"><i class="fa fa-ok text-success"></i> 5 seconds ago</div>
              </div>
            </div>
            <div class="m-b">
              <a href class="pull-right w-40 m-l-sm"><img src="images/a3.jpg" class="w-full img-circle" alt="..."></a>
              <div class="clear text-right">
                <div class="p p-v-sm bg-info inline text-left r">
                  Dlor soe isep..
                </div>
                <div class="text-muted-lt text-xs m-t-xs">Just now</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="p-h-md p-v">
      <a class="pull-left w-32 m-r"><img src="images/a3.jpg" class="w-full img-circle" alt="..."></a>
      <form>
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Say something">
          <span class="input-group-btn">
            <button class="btn btn-default" type="button">SEND</button>
          </span>
        </div>
      </form>
    </div>
  </div>
    </div>
  </div>
</div>
<!--  /Sección de chat de la empresa  - - - - - - - -  - - - - - - - - - - - - - - - - - - - - - - - - - --> 

<!--Sección de scripts - - - - - - - -  - - - - - - -  - - - - - - - - -  - - - - - - -->
<!--Librerias de JQuery-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="../libs/jquery/bootstrap/dist/js/bootstrap.js"></script>
<script src="../libs/jquery/waves/dist/waves.js"></script>
<!--Script de la grafica de ventas-->
<script src="scripts/tabla_ventas.js"></script>
<!--Script de control dinamico de gráfica index-->
<script src="scripts/datosGrafica.js"></script>
<!--Script que crea los tooltip de la gráfica-->
<script src="scripts/tooltip.js"></script>
<script src="scripts/ui-load.js"></script>
<script src="scripts/ui-jp.config.js"></script>
<script src="scripts/ui-jp.js"></script>
<script src="scripts/ui-nav.js"></script>
<script src="scripts/ui-toggle.js"></script>
<script src="scripts/ui-form.js"></script>
<script src="scripts/ui-waves.js"></script>
<script src="scripts/ui-client.js"></script>
<!--/Sección de scripts - - - - - - - -  - - - - - - -  - - - - - - - - -  - - - - - - -->
</body>
</html>
