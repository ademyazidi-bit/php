<?php
function securiserMdp(string $mdps){
    $mdps = trim($mdps);
    return password_hash($mdps, PASSWORD_DEFAULT);
}

function authentifier(string $saisie, string $hash){
    $saisie = trim($saisie);
    return password_verify($saisie, $hash);
}

$hashStocke = securiserMdp("password123"); // simulé comme si c'était dans la base
//$saisie = "password123";
//$hash = securiserMdp($saisie);

//echo "hash genere : ".$hash."<br>";
//
//$res = authentifier($saisie, $hash);

//if($res){
 //   echo "Authentification réussie";
//}else{
 //   echo "Authentification échouée";
//}
if(isset($_POST["pw"])){
    $saisiePw = $_POST["pw"];

    if(authentifier($saisiePw, $hashStocke))
        echo "<h1>Bienvenue dans le site</h1>";
    else
        echo "<h2>Erreur de saisie</h2>";
}
?>