<?php
$a = true;
$b = false;

// var c akan bernilai false
$c = $a && $b;
printf("%b && %b = %b", $a, $b, $c);
echo "<hr>";

// var c akan bernilai true
$c = $a || $b;
printf("%b && %b = %b", $a, $b, $c);
echo "<hr>";

// var c akan bernilai false
$c = !$a;
printf("!%b = %b", $a, $c);
echo "<hr>";
