<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Liste des voitures</title>
</head>

<body>
    <?php
    foreach ($tab_v as $v)
        echo '<p> Voiture d\'immatriculation ' .
            //'<a href="https://webinfo.iutmontp.univ-montp2.fr/~siongn/PHP/TD-PHP/TD4/controller/routeur.php?action=read&immat=' . 
            '<a href="https://webinfo.iutmontp.univ-montp2.fr/~siongn/PHP/TD-PHP/TD4/index.php?action=read&immat=' . 
            $v->getImmatriculation() . '">' . 
            $v->getImmatriculation() . '</a>' .
            '</p>';
    ?>
</body>

</html>