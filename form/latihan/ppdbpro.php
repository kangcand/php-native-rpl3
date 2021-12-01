<?php
if (isset($_POST['save'])) {
    $nama = $_POST['nama'];
    $mtk = $_POST['mtk'];
    $kejuruan = $_POST['kejuruan'];
    $ing = $_POST['ing'];
    $indo = $_POST['indo'];

    $rata = ($mtk + $indo + $ing + $kejuruan) / 4;
    $jumlah = $mtk + $indo + $ing + $kejuruan;
    if ($rata > 85) {
        $ket = "Diterima";
    } else {
        $ket = "Tidak Diterima";
    }

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
    Nama : <b><?php echo $nama; ?></b> <br>
    Bahasa Indonesia: <b><?php echo $indo; ?></b> <br>
    Bahasa Inggris: <b><?php echo $ing; ?></b> <br>
    Matematika : <b><?php echo $mtk; ?></b> <br>
    Kejuruan : <b><?php echo $kejuruan; ?></b><hr>
    Jumlah : <b><?php echo $jumlah; ?></b><br>
    Rata-rata : <b><?php echo $rata; ?></b><br>
    Dinyatakan <b><?php echo $ket; ?></b>
</body>
</html>
<?php }?>
