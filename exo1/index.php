<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>PHP partie 3 exo 1</title>
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
    <p>Créer une variable et l'initialiser à 0.<br>
      Tant que cette variable n'atteint pas 10, il faut :<br>
      l'afficher<br>
      l'incrementer
    </p>
    <p class="b">
      <?php
      $nombre = 0;
      while ($nombre <= 9) {
        $nombre++;
        echo "<p>" . $nombre . "</p>";
      }

      ?>
    </p>
  </div>
</body>
</html>
