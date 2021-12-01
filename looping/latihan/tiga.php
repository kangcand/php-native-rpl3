<?php
for ($a = 2; $a <= 6; $a++) {
    for ($b = $a; $b <= $a + 4; $b++) {
        echo $b . " ";
    }
    echo "<br>";
}

echo "<br>";
$d = 6;
$c = 0;
for ($a = 1; $a <= 5; $a++) {
    for ($b = 2 + $c; $b <= $d; $b++) {
        echo $b . " ";
    }
    $d++;
    $c++;
    echo "<br>";
}
