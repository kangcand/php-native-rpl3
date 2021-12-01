<?php

$siswa = [
    ['nama' => 'Ubed', 'jk' => 'Laki-laki', 'umur' => 17],
    ['nama' => 'Ucup', 'jk' => 'Laki-laki', 'umur' => 19],
    ['nama' => 'Atun', 'jk' => 'Perempuan', 'umur' => 18],
];

foreach ($siswa as $value) {
    echo "Nama : " . $value['nama'] . "<br>";
    echo "Jenis Kelamin : " . $value['jk'] . "<br>";
    echo "Umur : " . $value['umur'];
    echo "<hr>";
}
