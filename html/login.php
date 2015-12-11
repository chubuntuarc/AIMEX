<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>AIMCO Corporation de México</title>
  <link rel="icon" type="image/png" href="/images/favicon-16x16.png" />
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
  

  <div class="center-block w-xxl w-auto-xs p-v-md">
    <div class="navbar">
      <div class="navbar-brand m-t-lg text-center">
        <img src="images/logo.png" style="max-height: 30px">
      </div>
    </div>

    <div class="p-lg panel md-whiteframe-z1 text-color m">
      <div class="m-b text-sm">
        Accede con tu correo electrónico
      </div>
      <form name="form">
        <div class="md-form-group float-label">
          <input type="email" class="md-input" ng-model="user.email" required>
          <label>Usuario</label>
        </div>
        <div class="md-form-group float-label">
          <input type="password" class="md-input" ng-model="user.password" required>
          <label>Contraseña</label>
        </div>      
        <div class="m-b-md">        
          <label class="md-check">
            <input type="checkbox"><i class="indigo"></i> Mantener sesión activa
          </label>
        </div>
        <button md-ink-ripple type="submit" class="md-btn md-raised pink btn-block p-h-md blue">Login</button>
      </form>
    </div>

    <div class="p-v-lg text-center">
      <div class="m-b"><button ui-sref="access.forgot-password" class="md-btn">¿Olvidaste tu Contraseña?</button></div>
      <label>Solicita una nueva con tu administrador.</label>
    </div>
  </div>



</div>

<script src="../libs/jquery/jquery/dist/jquery.js"></script>
<script src="../libs/jquery/bootstrap/dist/js/bootstrap.js"></script>
<script src="../libs/jquery/waves/dist/waves.js"></script>

<script src="scripts/ui-load.js"></script>
<script src="scripts/ui-jp.config.js"></script>
<script src="scripts/ui-jp.js"></script>
<script src="scripts/ui-nav.js"></script>
<script src="scripts/ui-toggle.js"></script>
<script src="scripts/ui-form.js"></script>
<script src="scripts/ui-waves.js"></script>
<script src="scripts/ui-client.js"></script>

</body>
</html>
