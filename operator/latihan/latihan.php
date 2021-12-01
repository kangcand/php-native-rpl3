<?php

$gaji = 4500000;
$pajak = 0.025 * $gaji;
$bpjs = 200000;
$infak = 50000;
$transport = 10000;
$hari = 24;

echo "Gaji Kotor : Rp." . $gaji;
echo "<hr>";
echo "Potongan Pajak 2,5%: Rp." . $pajak . "<br>";
echo "Potongan BPJS : Rp." . $bpjs . "<br>";
echo "Potongan Infak : Rp." . $infak . "<br>";
echo "<hr>";

$potongan = $pajak + $bpjs + $infak;
echo "Total Potongan : Rp. " . $potongan . "<br>";
echo "<hr>";
echo "Tunjangan Tranport : Rp." . $transport . "<br>";
echo "Total Hari Kerja : " . $hari . " Hari<br>";
$tunjangan = $transport * $hari;
echo "<hr>";

echo "Total Tunjangan : Rp." . $tunjangan . "<br>";
echo "<hr>";
echo "Perhitungan Gaji :<br>";
echo "(Gaji Kotor - Potongan) + Tunjangan<br>";
echo "(" . $gaji . "-" . $potongan . ") + " . $tunjangan . "";
echo "<hr>";
//
$gaji_bersih = ($gaji - $potongan) + $tunjangan;
echo "Gaji Bersih : Rp." . number_format($gaji_bersih, 0, '.', '.') . "<br>";
