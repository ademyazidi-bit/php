<?php
$mois = [ "janvier" => 32 ,"fevrier" => 28, "december" => 31];
?>
<table border="1">
    <tr>
        <th>n Mois</th>
        <th>Mois</th>
        <th>nbr de jour</th>
</tr>
<?php
$nb = 1;
foreach( $mois as $nom=>$nj){
    echo"<tr><td>$nb++</td>
    <td>$nom</td><td>$nj</td></tr>";
}
?>
</table>
