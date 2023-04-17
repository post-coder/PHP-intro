<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Introduzione a PHP</title>
</head>
<body>
  <h1>Ciao! Sono una pagina PHP</h1>

  <p>Compila questo form per avere accesso all'area riservata</p>

  <!-- dentro il parametro action="" dobbiamo inserire la pagina a cui inviare
    i nostri dati
  -->
  <h2>Form tramite GET</h2>
  <form action="login.php" method="GET">
    <!-- i nomi dei parametri VANNO INDICATI nel form, tramite l'attributo name -->
    <input type="email" placeholder="Email" name="email" required>
    <input type="password" name="password" placeholder="Password" required>

    <button type="submit">Effettua il login</button>
  </form>

  <hr>

  <h2>Form tramite POST</h2>
  <form action="loginPost.php" method="POST">
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Password">

    <button type="submit">Effettua il login</button>

  </form>


</body>
</html>