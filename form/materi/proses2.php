<?php
// penampungan data
if (isset($_POST['simpan'])) {
    // textfield
    $nama = $_POST['nama'];
    $email = $_POST['email'];

    // radio
    $jk = $_POST['jk'];

    //select
    $agama = $_POST['agama'];

    // number
    $tb = $_POST['tb'];
    $bb = $_POST['bb'];
    $nomor = $_POST['nomor'];

    // checkbox
    if (isset($_POST['sSehat'])) {
        $sSehat = "ada";
    } else {
        $sSehat = "tidak ada";
    }
    if (isset($_POST['kk'])) {
        $kk = "ada";
    } else {
        $kk = "tidak ada";
    }
    if (isset($_POST['skl'])) {
        $skl = "ada";
    } else {
        $skl = "tidak ada";
    }
    echo "Nama <b>" . $nama . "</b>";
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center><h1>Pendaftaran Peserta Didik Baru</h1></center>
    Nama Lengkap: <b><?php echo $nama; ?></b><br>
    Email: <b><?php echo $email; ?></b><br>
    Jenis Kelamin: <b><?php echo $jk; ?></b><br>
    Agama: <b><?php echo $agama; ?></b><br>
    Tinggi Badan: <b><?php echo $tb; ?></b>cm<br>
    Berat Badan: <b><?php echo $bb; ?></b>kg <br>
    Kelengkapan Persyaratan:
    <li>Surat Sehat : <b><?php echo $sSehat; ?></b></li><br>
    <li>Kartu Keluarga : <b><?php echo $kk; ?></b></li><br>
    <li>Surat Keterangan Lulu : <b><?php echo $skl; ?></b></li><br>
    Nomor Telepon : <b><?php echo $nomor; ?></b>
</body>
</html>
<?php }?>