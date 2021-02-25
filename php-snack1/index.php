<!-- Creiamo un array 'matches' contenente altri array che rappresentano delle partite di basket;
Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite -->

<!-- Dichiarazioni Variabili -->

<?php
$matches = [
  [
  'casa' => 'Olimpia Milano',
  'ospite' => 'Cantù',
  'punteggioCasa' => '65',
  'punteggioOspite' => '88',
 ],
 [
  'casa' => 'Dinamo Sassari',
  'ospite' => 'Umana Venezia',
  'punteggioCasa' => '105',
  'punteggioOspite' => '77',
 ],
 [
  'casa' => 'Reggio Emilia',
  'ospite' => 'Trieste',
  'punteggioCasa' => '54',
  'punteggioOspite' => '63',
 ],
 [
  'casa' => 'Vanoli Cremona',
  'ospite' => 'Prosciutto Pesaro',
  'punteggioCasa' => '69',
  'punteggioOspite' => '71',
 ],
 [
  'casa' => 'Varese',
  'ospite' => 'Virtus Bologna',
  'punteggioCasa' => '70',
  'punteggioOspite' => '93',
]
];


 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Basket Matches</title>
  </head>
  <body>
    <?php for($i = 0 ; $i < count($matches); $i++) { ?>
    <h3>MATCH</h3>
    <h4><?php echo $matches[$i]['casa'] . ' vs ' . $matches[$i]['ospite'] .  ' | '  . $matches[$i]['punteggioCasa'] .' - ' . $matches[$i]['punteggioOspite']; ?></h4>

​
     <?php  }   ?>


  </body>
</html>
