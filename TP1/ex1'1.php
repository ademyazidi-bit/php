<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php   
        $notes = [12, 18, 5, 14, 20, 9, 11];
        foreach($notes as $note) {
            $somme = $note+=$somme;
        }
        echo "$somme";
        $nbr = count($notes);
        $moyenne = $somme / $nbr;
        echo "<br>s";
        echo "$moyenne";

    ?>
</body>
</html>