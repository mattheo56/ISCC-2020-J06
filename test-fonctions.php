<?php

include ("affichage.php");
include ("gestion-produit.php");

    $nom="t-shirt femme";
    $couleur="rouge";
    $prix="15.50";
    $disponible="true";
    $quantite="10";

afficher_produit ($nom, $couleur, $prix, $disponible);
$quantite = achat($quantite, 5);
$disponible = update_dispo ($quantite);
afficher_produit ($nom, $couleur, $prix, $disponible);
$quantite = achat($quantite, 5);
$disponible = update_dispo ($quantite);
afficher_produit ($nom, $couleur, $prix, $disponible);
$quantite = achat($quantite, 5);
$disponible = update_dispo ($quantite);
afficher_produit ($nom, $couleur, $prix, $disponible);

?>