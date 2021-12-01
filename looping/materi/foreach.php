<?php
$siswa = [
    "Novy", "Robby", "Rohesa", "Putri",
];

echo "menggunakan foreach<br>";
foreach ($siswa as $data => $key) {
    echo $data . $key . "<br>";
}
echo "<hr>";
// echo count($siswa);
echo "menggunakan for<br>";
for ($i = 0; $i < count($siswa); $i++) {
    echo "$siswa[$i]<br>";
}
