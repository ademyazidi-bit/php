<?php
$employes = [
["id" => 42, "nom" => "Marc", "poste" => "Développeur", "salaire" => 3200],
["id" =>12, "nom" => "Julie", "poste" => "Designer", "salaire" => 2800],
["id" => 89, "nom" => "Sophie", "poste" => "RH", "salaire" => 3000],
["id" => 34, "nom" => "Antoin", "poste" => "Développeur", "salaire" => 3500],
];
$identifiants = array_column($employes, "id");
 
$resultat = array_filter($employes, function($employe) {
    return $employe["id"] == 42; 
});
if (!empty($resultat)) {
    $employe = array_values($resultat)[0]; 
    echo "L'employé ID " . $employe["id"] . " est " . $employe["nom"] . ", son poste est : " . $employe["poste"] . "<br>";
} else {
    echo "Aucun employé trouvé avec l'ID " . $idRecherche ;
}
$masseSalariale = array_sum(array_column($employes, "salaire"));
echo "Masse salariale totale = " . $masseSalariale ;
$indexDesigner = array_search("Designer", array_column($employes, "poste"));
if ($indexDesigner !== false) {
    echo "Le Designer est : " . $employes[$indexDesigner]["nom"] . "<br>";
} else {
    echo "Aucun Designer trouvé<br>";
}
?>