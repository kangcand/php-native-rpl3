<?php
$z = 3;
for ($x = 3; $x <= 21; $x += 2) {
    for ($y = $x; $y <= $z; $y++) {
        echo $y . " ";
    }
    echo "<br>";
    $z += 2;
    $z = $z + 1;
}

$d = 3;
$c = 0;
for ($a = 1; $a <= 10; $a++) {
    for ($b = 3 + $c; $b <= $d; $b++) {
        echo $b . " ";
    }
    $c += 2;
    $d += 3;
    echo "<br>";
}

$k = 3;
$h = 3;

for ($i = 1; $i <= 10; $i++) {
    echo "<br>";
    for ($j = $k; $j <= $h; $j++) {
        echo $j . " ";
    }
    $k += 2;
    $h += 3;
}
