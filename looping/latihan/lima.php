<?php
echo "<br>";
for ($i = 5; $i >= 0; $i--) {
    for ($a = 5; $a > $i; $a--) {
        echo "&nbsp;";
    }
    for ($b = 0; $b <= $i; $b++) {
        echo " * ";
    }
    echo "<br>";

}
