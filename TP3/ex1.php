<?php
    function securiserMdp(string $mdps){
      $hash =  mdps.trim();
      return $hash;
    } 
    function authentifier(string $saisie, string $hash){
        if ($saisie == $hash) {
            return true;    
        
    }
        else {
            return false;}}
    $mdps = "password123";
    securiserMdp($mdps);
    


?>