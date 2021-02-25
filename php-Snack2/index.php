<!-- Passare come parametri GET name, mail e age e verificare
1. name sia più lungo di 3 caratteri,
2. mail contenga un punto e una chiocciola
3. age sia un numero. -->

<!-- DICHIARAZIONE VARIABILI -->
<?php

$name = $_GET['name'];
$age = $_GET['age'];
$mail = $_GET['mail'];

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <?php  $messaggio = '';
  if ((strpos($mail, '@')) && (strpos($mail,'.')) && (strlen($name >= 3)) && (is_int($age))) {
    $messaggio = 'Accesso Riuscito!';
  } else {
    $messaggio = "Accesso Negato!";
  }
  ?>
  ​
  <p><?php echo $messaggio ?></p>

  </body>
</html>
