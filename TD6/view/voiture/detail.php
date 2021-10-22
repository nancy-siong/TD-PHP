<!DOCTYPE html>
<html>
    <body>
            <?php
            $vImmatriculation = htmlspecialchars($v->getImmatriculation());
            $vImmatriculation_url = rawurlencode($v->getImmatriculation());

            echo '<p>Marque : ' . $v->getMarque() . '.</p>';
            echo '<p>Couleur : ' . $v->getCouleur() . '.</p>';
            echo '<p>Immatriculation : ' . $vImmatriculation . '.</p>';

            //<a href="tel:+123456789">Phone</a>
            echo '<p>' .
            '<a href="index.php?action=delete&immat=' . 
            $vImmatriculation_url . '">Supprimer la voiture</a>' .
            '</p>';;
            ?>

    </body>
</html>
