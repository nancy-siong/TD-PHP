<?php

require_once 'Model.php';
require_once 'Voiture.php';

/* EXO 6
$pdo = Model::getPDO();

$rep = $pdo->query("SELECT * FROM Voiture;");

$tab_obj = $rep->fetchAll(PDO::FETCH_OBJ)

foreach ($tab_obj as $value) {
    echo $value->marque . "<br>";
}

*/


/* EXO 7
$pdo = Model::getPDO();

$rep->setFetchMode(PDO::FETCH_CLASS, 'Voiture');

$tab_voit = $rep->fetchAll();

foreach ($tab_voit as $value) {
    echo $value->afficher();
}


*/

//EXO 8
$tab_voit = Voiture::getAllVoitures();

foreach ($tab_voit as $value) {
    echo $value->afficher();
}

?>
