<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Stringhe in PHP</title>
</head>
<body>
  <h1>Stringhe in PHP</h1>

  <?php 
  
  $stringa = "Ciao a tutti.";

  echo $stringa;
  
  ?>

  <br>
  Questa stringa appena inserita è lunga <?php echo strlen($stringa) ?> caratteri <br>
  Questa stringa ha <?php echo str_word_count($stringa)  ?> parole. <br>
  La lettera "a" compare per la prima volta nella stringa al carattere numero <?php echo strpos($stringa, 'a') + 1 ?> <br>
  
</body>
</html>