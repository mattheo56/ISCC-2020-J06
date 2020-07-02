<?php

function compter_dizaine ($maximum) {
    $compteur = 1;
    while ($compteur <= $maximum) {
        echo "$compteur";
        $compteur = $compteur +1;
    }
    echo "<br>";
}
?>