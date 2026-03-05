<?php

$pays_population = [
    'France' => 67595000,
    'Suede' => 9998000,
    'Suisse' => 8417000,
    'Kosovo' => 1820631,
    'Malte' => 434403,
    'Mexique' => 122273500,
    'Allemagne' => 82800000
];

echo "Pays ayant une population supérieure ou égale à 20 000 000 : <br>";

foreach ($pays_population as $pays => $population) {
    if ($population >= 20000000) {
        echo $pays . " : " . $population . " habitants <br>";
    }
}

?>
<?php

$total = count($pays_population);

echo "<br>Le tableau recense " . $total . " pays au total.";

?>
<?php

$pays_population = [
    'France' => 67595000,
    'Suede' => 9998000,
    'Suisse' => 8417000,
    'Kosovo' => 1820631,
    'Malte' => 434403,
    'Mexique' => 122273500,
    'Allemagne' => 82800000
];

$pays_filtres = array_filter($pays_population, function($population) {
    return $population >= 20000000;
});

echo "Pays ayant une population ≥ 20 000 000 : <br><br>";

foreach ($pays_filtres as $pays => $population) {
    echo $pays . " : " . $population . " habitants <br>";
}

?>