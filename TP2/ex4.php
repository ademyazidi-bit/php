<?php
$emails=["ahmed565@gmail.fr","contact@google.com",
"test.user@google.com",
"admin@hotmail.fr",
"info@google.com",
"support@hotmail.fr" ];
$domaine=[];
foreach($emails as  $r){
    $r = explode("@",$r);
    $domaine[]=$r[1];

}
$occ=array_count_values($domaine);
//print_r($occ);//
$total= count($emails);
foreach($occ as $domaine => $r){
      $per = $r/$total*100;
      echo "<br>"."Fournisseur d'accès : ".$domaine." = ".$per."<br>";
      }

?>