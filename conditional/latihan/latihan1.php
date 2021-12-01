<?php
// buatlah program kondisi penilangan motor
// menggunakan helm -> kami cek perlengkapan surat stnk & sim nya
// helm & stnk -> surat lengkap boleh kami cek sim nya?
// helm & sim & stnk -> selamat berkendara hati-hati dijalan

// tidak ada ketiganya -> anda kami tilang

// bisa pake operator AND atau OR

$helm = false;
$stnk = true;
$sim = true;

if ($helm == true && $stnk == false) {
    echo "kami cek perlengkapan surat stnk & sim nya";
} else if ($helm == true && $stnk == true && $sim == false) {
    echo "boleh kami cek sim nya?";
} else if ($helm == true && $stnk == true && $sim == true) {
    echo "selamat berkendara hati-hati dijalan";
} else {
    echo " maaf anda kami tilang";
}
