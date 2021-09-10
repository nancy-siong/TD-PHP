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

          $marque = "marque <br>";
          $couleur = "bleu <br>";
          $immatriculation = "112AA33 <br>";

          $voiture['marque'] = "Renault";
          $voiture['couleur'] = "Rose";
          $voiture['immatriculation'] = "112AA33";

          $voit1 = array (
          'marque' => 'Renault',
          'couleur'    => 'Vert',
          'immatriculation' => '111AA33'  );

          $voit2 = array (
          'marque' => 'Citroen',
          'couleur'    => 'Bleu',
          'immatriculation' => '222AA33'  );

          $voit3 = array (
          'marque' => 'Toyota',
          'couleur'    => 'Violet',
          'immatriculation' => '333AA33'  );


          $listeVoit = array ($voit1, $voit2, $voit3);





          echo $texte;

            echo "Bonjour " . $prenom . "<br>" ;
            echo "Bonjour $prenom<br>";
            echo 'Bonjour $prenom<br>';

            echo $prenom . "<br>";
            echo "$prenom<br>";


            echo "<p> 1) SANS TABLEAU : Voiture $immatriculation de couleur $couleur (couleur bleu) </p>";

            echo "<p> 2) AVEC TABLEAU : Voiture " . $voiture['immatriculation'] . " de " . $voiture['couleur'] . " (couleur bleu) </p>";

            echo "<p> 3) AVEC LISTE : Voiture " . $voiture['immatriculation'] . " de " . $voiture['couleur'] . " (couleur bleu) </p>";

            echo "<ul>";
            foreach ($listeVoit as $cle => $valeur) {
                echo "<li> $cle : $valeur <br>";
            }


            echo "</ul>";



            var_dump($voiture);
            var_dump($listeVoit);
        ?>
    </body>
</html> 
