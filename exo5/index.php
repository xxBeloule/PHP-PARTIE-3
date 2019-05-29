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
    <p>En allant de 1 à 15 avec un pas de 1, afficher le message "On y arrive presque"</p>
    <p class="b">
    <?php
        $pas = 1;
        // while ($pas < 15) {
        //   $pas++;
        //   echo "<p> Nombres de pas : " . $pas . "</p>";
        //   if ($pas > 13) {
        //     echo "On y arrive presque";
        //   }
        // }
        for ($pas=1; $pas < 16 ; $pas++) {
          echo "<p> Nombres de pas : " . $pas . "</p>";
          if ($pas >= 14) {
              echo "On y arrive presque";
          }
        }
    ?></p>
  </div>
</body>
</html>
