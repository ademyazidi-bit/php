<?php
    function securiserTexte(string $text){
        $text1 = $text.trim();
        return htmlspecialchars($text1);
    }
    function appliquerRemise($prixInitial, $pourcentage = 0) {
    return $prixInitial - ($prixInitial * $pourcentage / 100);
}
?>