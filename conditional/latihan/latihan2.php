<?php
// buatlah grading dari penilaian mahasiswa

// ipk < 2 -> Grade E, maaf anda harus mengulang
// ipk < 2,6 -> Grade D,
//              maaf anda harus memperbaiki mata kuliah
// ipk > 2,6 Grade C, mau memperbaiki boleh tidak juga tidak apa
// ipk > 3 Grade B, Mata kuliah anda baik
// ipk > 3,5 Grade A, mata kuliah anda super

// ipk < 0 dan > 4 ->  Sistem error

$ipk = 1;
if ($ipk < 0 || $ipk > 4) {
    $grade = null;
    $ket = "sis000tem error";
} else if ($ipk >= 3.6) {
    $grade = "A";
    $ket = "mata kuliah anda super";
} else if ($ipk >= 3) {
    $grade = "B";
    $ket = "Mata kuliah anda baik";
} else if ($ipk >= 2.6) {
    $grade = "C";
    $ket = "mau memperbaiki boleh tidak juga tidak apa";
} else if ($ipk > 2) {
    $grade = "D";
    $ket = "mau memperbaiki boleh tidak juga tidak apa";
} else {
    $grade = "E";
    $ket = "maaf anda harus mengulang";
}

echo "Grade : " . $grade . "<br>" . $ket;
