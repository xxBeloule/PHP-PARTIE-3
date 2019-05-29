<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title></title>
  <style media="screen">
  .div {
    background-color: grey;
    font-weight: 400;
    border: 3px solid black;
    margin: 20px;
    padding: 20px;
    text-align: center;
    border-radius: 200px;
    font-weight: bolder;
  }
  .b {
    color: white;
  }
  </style>
</head>
<body>
  <div class="div">
    <p>En allant de 200 à 0 avec un pas de 12, afficher le message Enfin !!!!.</p>
    <p class="b">
    <?php
    for ($i=200; $i > 0 ; $i-=12) {
        echo "<p> Nombres de pas : " . $i . "</p>";
        if ($i < 20) {
        echo "Enfin !!!";
        }
    }
    ?></p>
  </div>
</body>
</html>
