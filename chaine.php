<?php

$str1 = "La maîtrise des fondamentaux du code et de la programmation dans les domaines du business, du marketing et de la communication est un avantage sérieux et utile.";

$taille_chaine = strlen ($str1);
echo "<p> La chaine str1 contient $taille_chaine caractères. </p>";

$nombre_de_mots = str_word_count ($str1);
echo "<p> La chaine str1 contient $nombre_de_mots mots. </p>";

$str2 = strtolower ($str1);
echo $str2;

$str3 = strtoupper ($str1);
echo $str3;

$str4 = str_shuffle ($str1);
echo $str4;

$str5 = str_replace ("la", "LA", $str1);
echo $str5;

$str6 = substr ($str1, 0, 127);
echo $str6;

?>