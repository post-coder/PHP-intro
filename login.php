<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Pagina di login</h1>

  <?php 

  $accessGranted = false;
  
  if($_GET['email'] == 'gabrielspanu96@gmail.com') {
    $accessGranted = true;
  }

  ?>

  <?php 
  if($accessGranted) {
    echo "Benvenuto";
  } else {
    echo "accesso non consentito";
  }
  ?>
  
</body>
</html>