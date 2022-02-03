<?php
  $page_title = 'Bienvendio a FMIT';
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
</body>
</html>
<?php include_once('layouts/footer.php'); ?>

