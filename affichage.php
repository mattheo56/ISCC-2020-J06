<?php

function afficher_titre ($nom){
    echo "<H1> Fiche produit : $nom . <H1/>";
} 

function afficher_description ($couleur, $prix){
    echo "<p> Couleur: $couleur, Prix: $prix </p>";
}

function afficher_produit ($nom, $couleur, $prix, $disponible){
    if ($disponible==true) {
        afficher_titre ($nom);
        afficher_description ($couleur, $prix);
    }
    else {
        echo "<p> Le produit $nom n’est malheureusement plus disponible. </p>";
    }
 }

 ?>