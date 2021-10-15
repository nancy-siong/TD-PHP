<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Liste des voitures</title>
</head>

<body>
    <?php
    foreach ($tab_v as $v) {

        $vImmatriculation = htmlspecialchars($v->getImmatriculation());
        $vvImmatriculation = rawurlencode($v->getImmatriculation());

        echo '<p> Voiture d\'immatriculation ' .
        //'<a href="https://webinfo.iutmontp.univ-montp2.fr/~siongn/PHP/TD-PHP/TD4/controller/routeur.php?action=read&immat=' . 
        '<a href="index.php?action=read&immat=' . $vvImmatriculation . '">' . 
        $vImmatriculation . '</a>' .
        '</p>';
    }
    
    ?>
</body>

</html>