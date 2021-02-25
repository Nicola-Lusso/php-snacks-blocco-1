<!-- Passare come parametri GET name, mail e age e verificare
1. name sia più lungo di 3 caratteri,
2. mail contenga un punto e una chiocciola
3. age sia un numero. -->

<!-- DICHIARAZIONE VARIABILI -->
<?php

$mail = $_GET['mail'];
$name = $_GET['name'];
$age = $_GET['age'];

 ?>
 <?php  $messaggio = '';
 if ((strpos($mail, '@')) && (strpos($mail,'.')) && (strlen($name) >= 3 ) && (is_numeric($age))) {
   $messaggio = 'Accesso Riuscito!';
 } else {
   $messaggio = "Accesso Negato!";
 }?>​
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <p><?php echo $messaggio ?></p>

  </body>
</html>
