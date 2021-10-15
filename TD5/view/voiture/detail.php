<!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <title>Details des voitures</title>
    </head>
    <body>
        <?php
        echo 'Marque : ' . $v->getMarque() . '.</p>';
        echo 'Couleur : ' . $v->getCouleur() . '.</p>';
        echo 'Immatriculation : ' . $v->getImmatriculation() . '.</p>';
        //echo "<p> Voiture $v->getImmatriculation() </p>";

        ?>
    </body>
</html>
