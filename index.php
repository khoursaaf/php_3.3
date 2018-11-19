<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Exercise</title>
    </head>
    <body>
      <p>
        Créer deux variables. Initialiser la première à 100 et la deuxième avec un nombre compris en 1 et 100.
        Tant que la première variable n'est pas inférieure ou égale à 10 :</p>
        <ol>
          <li>multiplier la première variable avec la deuxième</li>
          <li>afficher le résultat</li>
          <li>décrémenter la première variable</li>
        </ol>
        <?php
        $a = 100;
        $b = rand(1, 100);
        while ($a >= 10) {
          echo $a * $b."<br />";
          $a--;
        }
         ?>
    </body>
</html>
