<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> Mon premier php </title>
    </head>
   
    <body>
        Voici le résultat du script PHP : 
        <?php
          
          $texte = "hello world ! <br><br>";
          $prenom = "Marc";

          $voiture = "voiture <br>";
          $marque = "marque <br>";
          $couleur = "couleur <br>";

          echo $texte;


            echo "Bonjour " . $prenom . "<br>" ;
            echo "Bonjour $prenom<br>";
            echo 'Bonjour $prenom<br>';

            echo $prenom . "<br>";
            echo "$prenom<br>";
        ?>
    </body>
</html> 
