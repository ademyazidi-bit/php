<?php

$panier = [
["nom" => "Clavier Mécanique", "categorie" => "Informatique", "prix" => 85],
["nom" => "Livre PHP 8", "categorie" => "Librairie", "prix" => 40],
["nom" => "Souris Sans Fil", "categorie" => "Informatique", "prix" => 45],
["nom" => "Sac à dos", "categorie" => "Accessoires", "prix" => 60]
];
$numero = 1;

foreach ($panier as $produit) {
    echo $numero . ". Article : " 
         . $produit["nom"] 
         . " | Prix : " 
         . $produit["prix"] 
         . " €<br>";
    
    $numero++;
}
$prix = array_column($panier,"prix");
$tot = array_sum($prix);
echo "La valeur totale = " . $tot . " €<br>";
$info = array_filter($panier,function($article){
      return $article["categorie"]=="Informatique"});
echo "Le nombre d'articles info = " . count($info);
?>