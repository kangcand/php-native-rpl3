<?php
echo "<br>";
for ($i = 0; $i < 5; $i++) {
    for ($a = 5; $a > $i; $a--) {
        echo "&nbsp;";
    }
    for ($b = 0; $b <= $i; $b++) {
        echo " * ";
    }
    echo "<br>";

}
