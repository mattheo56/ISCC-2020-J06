<?php

function compter ($maximum) {
    $compteur = 1;
    while ($compteur <= $maximum) {
        echo "$compteur";
        $compteur = $compteur +1;
    }
    echo "<br>";
}

function compter_for ($maximum) {
    for ($compteur = 1; $compteur <= $maximum; $compteur = $compteur +1)
    echo "<br>";
}

compter (10);
compter_for (10);

?>