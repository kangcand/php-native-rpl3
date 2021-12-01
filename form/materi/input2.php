<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <fieldset>
      <legend>Pendaftaran Peserta Didik Baru</legend>
      <form action="proses2.php" method="post">
        <table>
          <tr>
            <th style="text-align: left">Nama Lengkap</th>
            <td>:</td>
            <td>
              <input type="text" name="nama" size="50" />
            </td>
          </tr>
          <tr>
            <th style="text-align: left">Email</th>
            <td>:</td>
            <td>
              <input type="email" name="email" size="50" />
            </td>
          </tr>
          <tr>
            <th style="text-align: left">Jenis Kelamin</th>
            <td>:</td>
            <td>
              <input type="radio" name="jk" value="Laki-laki" /> L
              <input type="radio" name="jk" value="Perempuan" /> P
            </td>
          </tr>
          <tr>
            <th style="text-align: left">Agama</th>
            <td>:</td>
            <td>
              <select name="agama" id="">
                <option value="Islam">Agama Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Budha">Budha</option>
                <option value="Konghucu">Konghucu</option>
              </select>
            </td>
          </tr>
          <tr>
            <th style="text-align: left">Tinggi Badan & Berat Badan</th>
            <td>:</td>
            <td>
              <input
                type="number"
                name="tb"
                min="100"
                max="200"
                placeholder="Tinggi Badan"
              />
              <input
                type="number"
                name="bb"
                min="1"
                max="100"
                placeholder="Berat Badan"
              />
            </td>
          </tr>
          <tr>
            <th style="text-align: left">Kelengkapan Persyaratan</th>
            <th>:</th>
            <td>
              <input type="checkbox" name="sSehat"  id="" />Surat Sehat
              <input type="checkbox" name="kk" id="" />Kartu Keluarga
              <input type="checkbox" name="skl" id="" />Surat Keterangan Lulus
            </td>
          </tr>
          <tr>
            <th style="text-align: left">Nomor Telepon / HP</th>
            <th>:</th>
            <td><input type="number" name="nomor" /></td>
          </tr>
          <tr>
            <th>
              <button type="submit" name="simpan">Daftar</button>
              <button type="reset">Bersihkan Formulir</button>
            </th>
          </tr>
        </table>
      </form>
    </fieldset>
  </body>
</html>
