<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $panier = array("Pommme","Banane","Cerise");
    array_push($panier,"Orange");
    print_r($panier);
    array_unshift($panier,"Fraise");
    print_r($panier);
    $last = array_pop($panier);
    print_r($panier);
    rsort($panier);
    print_r($panier); 

        ?>
</body>
</html>