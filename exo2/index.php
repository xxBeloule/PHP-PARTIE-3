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
    <p>Créer deux variables. Initialiser la première à 0 et la deuxième avec un nombre compris en 1 et 100.
      Tant que la première variable n'est pas supérieure à 20 :</p>
      <p>
        multiplier la première variable avec la deuxième<br>
        afficher le résultat<br>
        incrementer la première variable<br>
      </p>
      <p class="b">
      <?php
      $nmbre1 = 0;
      $nmbre2 = 50;
      while ($nmbre1 <= 20) {
        echo "<p>" . $nmbre1 * $nmbre2 . "</p>";
        $nmbre1++;
      }
      ?>
    </p>
    </div>
  </body>
  </html>
