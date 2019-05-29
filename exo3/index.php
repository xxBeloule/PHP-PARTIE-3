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
      <p>Créer deux variables. Initialiser la première à 100 et la deuxième avec un nombre compris en 1 et 100.
        Tant que la première variable n'est pas inférieure ou égale à 10 :</p>
        <p>multiplier la première variable avec la deuxième</p>
        <p>afficher le résultat</p>
        <p>décrémenter la première variable</p>
        <p class="b">
          <?php
          $nmbre1 = 100;
          $nmbre2 = rand(1,100);
          echo "Le nombre 2 est : " . $nmbre2;
          while ($nmbre1 >= 10) {
          $result = $nmbre1 * $nmbre2;
            echo "<p>" . $result . "</p>";
            $nmbre1--;
          }
          ?></p>
  </div>
</body>
</html>
