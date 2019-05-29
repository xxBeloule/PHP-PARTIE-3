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
      <p>En allant de 1 à 100 avec un pas de 15, afficher le message On tient le bon bout.</p>
      <p class="b">
      <?php
      for ($i=0; $i < 100; $i+=15) {
        echo "<p>" . $i . "</p>";
        if ($i >80) {
          echo "<p> on tient le bon bout</p>";
        }
      }
      ?></p>
    </div>
  </body>
</html>
