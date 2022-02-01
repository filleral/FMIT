<?php
  $page_title = 'Home Page';
  require_once('includes/load.php');
  if (!$session->isUserLoggedIn(true)) { redirect('index_login.php', false);}
?>
<?php include_once('layouts/header.php'); ?>
<?php echo display_msg($msg); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<center>
<div class="">
<div class="container">
</div>
 <div class="col-md-12">
    <div class="col-md-12">
      <div>
         <h1>Bienvenido</h1>
         <p>Este sitio ha sido creado con el fin de dar organización y conceptualización al espacio que se usa en la mesa de servicio y darle un mejor manejo y seguridad a cada uno de sus
           artículos
         </p><br>
         <div>
         <h2>
         Nunca olvides esto: <br> 
        -	Llevar las llaves a la bodega <br>
        -	Ir con alguien que supervise que todo corresponda a su sitio <br>
        -	Reportarlo en este medio y actualizar los activos <br>
        -	Y no te olvides de sonreír</h2>
         </h1>
         </div>
    </div>
 </div>
</div>
</center>
</body>
</html>
<?php include_once('layouts/footer.php'); ?>

