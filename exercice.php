<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice</title>
</head>
<body>
    <?php
    //Exercice1
    echo "<h1>Exercice 1</h1>";
    $a = rand(1,30);
    if($a % 2 == 0){
        echo "le nombre ".$a." est pas premier";
    }
    else{
        echo "le nombre ".$a." est premier";
    }
    //Exercice2
    echo "<h1>Exercice 2</h1>";
    $number = rand(1,20);
    $binaire = decbin($number);
    echo "<p>le nombre binaire de ".$number." est : $binaire</p>";
    ?>
</body>
</html>