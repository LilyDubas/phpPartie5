<?php
$HdF = ['Aisne' => 02, 'Nord' => 59, 'Oise' => 60, 'Pas-de-Calais' => 62, 'Somme' => 80];
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>PHP</title>
</head>
<body>
  <div class="jumbotron m-auto text-center">
    <h1>Hauts-de-France</h1>
  <p><?php
   foreach ($HdF as $key => $val) {
       echo $val . '<br>';
    }
    ?></p>
  </div>
</body>
</html>
