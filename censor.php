<?php 

// di solito tutte le variabili si creano in alto nella pagina, per averle tutte insieme

// salvo il parametro get "paragraph" in una variabile
$originalParagraph = $_GET['paragraph'];
// salvo anche la badword da censurare
$badword = $_GET['badword'];

$originalParagraphLength = strlen($originalParagraph);

$numberOfReplacements = 0;
$censoredParagraph = str_replace($badword, '***', $originalParagraph, $numberOfReplacements);


?>

<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Parola censurata</title>
</head>
<body>
  <h1>Paragrafo con parola censurata</h1>

  <h2>Paragrafo originale:</h2>
  <p>
    <?php 
    echo $originalParagraph;
    ?>
  </p>

  <h3>Lunghezza del paragrafo:</h3>
  <span><?php echo $originalParagraphLength ?> caratteri</span>


  <h3>Parola da censurare:</h3>
  <span><?php echo $badword ?></span>

  <hr>

  <h2>Paragrafo censurato:</h2>

  <p>
    <?php
    echo $censoredParagraph;
    ?>
  </p>

  <h3>Lunghezza del nuovo paragrafo:</h3>
  <span><?php echo strlen($censoredParagraph) ?> caratteri</span>

  <h3>Numero di parole censurate:</h3>
  <span><?php echo $numberOfReplacements ?></span>
  
</body>
</html>