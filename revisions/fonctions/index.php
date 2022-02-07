<?php

function dateSemaine(array $tableau, int $debutSemaine){
    $t2 = [];
    foreach ($tableau as $valeur) {
        $t2[] = $valeur . " " . $debutSemaine;
        $debutSemaine++;
    }
    return $t2;
}


$jours = [ "lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi", "dimanche" ];

$jours2 = dateSemaine($jours, 7);
$jours3 = dateSemaine($jours, 42);

/* EXO Faire une fonction affiche() qui prend un array en argument et qui affiche son contenu dans une balise TABLE */

function afficheSemaine($tableauJour) {
    $msg = "<table border=1>";
    foreach($tableauJour as $jour) {
        $msg .= "<tr><td>$jour</td></tr>";
    }
    $msg .= "</table>";
    $msg .= "<br />";

    return $msg;
}

echo afficheSemaine($jours2);
echo afficheSemaine($jours3);
