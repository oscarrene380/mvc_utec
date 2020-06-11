<!DOCTYPE html>  
<html lang="en">   
<head>    
  <meta charset="utf-8">    
  <meta http-equiv="X-UA-Compatible" content="IE=edge">    
  <meta name="viewport" content="width=device-width, initial-scale=1">    
  <title>MVC | UTEC</title>
  <!-- Icono -->
  <link rel="shortcut icon" type="image/x-icon" href="img/icon.svg" />
  <!-- JQuery -->
  <script src="js/jquery-1.11.0.min.js"></script> 
  <!-- Bootstrap --> 
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <script src="js/bootstrap.min.js"></script>
  <!-- JQUERY UI --> 
  <link href="css/smoothness/jquery-ui-1.10.4.custom.css" rel="stylesheet"> 
  <link href="css/smoothness/jquery-ui-1.10.4.custom.min.css" rel="stylesheet"> 
  <script src="js/jquery-ui-1.10.4.custom.min.js"></script>
</head>      
<body style="background: #5d0a28; color: #ffff;">      
  <div class="page-header">       
    <center><h1>Diplomado Reporte <small>Universidad Tecnológica de El Salvador</small></h1></center>
    <center><h2>Técnicas de Producción Industrial de Software II</h2></center>
  </div>      
  <p class="navbar-text navbar-right">
    <?php // echo(isset($usuario)&&$usuario!=false)?'Bienvenido:'.$usuario['nombre']:' ' ?> 
    <?php // echo(isset($usuario)&&$usuario!=false)?"<a href='acceso/salir' class='navbar-link'></a>":''; ?>
  </p>
  <!-- DIALOGO -->    
  <div id="dialogo" style="display:none;"><div class="notify"></div></div>      
  <!-- ALERTA -->    
  <div class="col-md-4 col-md-offset-4" style="position:fixed;" id="msj"></div> 
  <div class="container-fluid col-md-12">
    <div class="row col-md-12">
      <div class="col-md-3"></div>
      <div class="col-md-6 text-center">
        <img src="img/utec.png" width="300" height="300">
      </div>
    </div>
  </div>