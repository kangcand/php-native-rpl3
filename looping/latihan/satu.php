<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$bil = 10;
for ($a = 1; $a <= $bil; $a++) { // baris
    for ($c = $a; $c <= $bil; $c++) { //kolom
        echo $c . " ";
    }
    echo "<br>";
}

?>
</body>
</html>
