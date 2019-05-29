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
    <p>Créer une variable et l'initialiser à 1.
      Tant que cette variable n'atteint pas 10, il faut :</p>
    <p>l'afficher</p>
    <p>l'incrementer de la moitié de sa valeur</p>
    <p class="b">
    <?php
    $var = 1;
    while ($var < 10) {
      echo "<p>" . $var . "</p>";
      $var += $var/ 2;
    }
    ?></p>
  </div>
</body>
</html>
