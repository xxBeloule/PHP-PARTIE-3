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
      <p>En allant de 20 à 0 avec un pas de 1, afficher le message C'est presque bon.</p>
      <p class="b">
      <?PHP
      for ($var=20; $var > 0 ; $var--) {
        echo "<p> Nombres de pas : " . $var . "</p>";
        if ($var < 3)
        echo "C'est presque bon";
      }

      ?></p>
    </div>
  </body>
</html>
