<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->

      <link rel="shortcut icon" href="assets/gambar/logo_lutra.png" type="image/x-icon">

      <style type="text/css">
        * {
  margin: 0;
  padding: 0;
}

.main {
  width: 768px;
  margin: 0 auto;
  box-sizing: border-box;
  padding: 20px 10px;
}

.main .header {
  text-align: center;
  border-bottom: 5px solid black;
  padding-bottom: 2px;
}

.main .header img {
  width: 10%;
  margin-bottom: 10px;
}

.main .header .teks-header h2,
.main .header .teks-header h3 {
  text-transform: uppercase;
  letter-spacing: 1px;
}

.main .header .teks-header h2 {
  font-size: 1.65rem;
}
.main .header .teks-header h3 {
  font-size: 1.3rem;
}
.main .header .teks-header h6 {
  margin-bottom: 5px;
}
.main .header .teks-header h6,
.main .header .teks-header p {
  text-transform: unset;
  letter-spacing: 1px;
  font-size: 0.9rem;
}

.rekomendasi {
  margin: 20px 0;
  text-align: center;
}
.rekomendasi h3 {
  text-transform: uppercase;
}
.form table,
.form table input {
  width: 100%;
}
.form table input {
  padding: 5px;
  box-sizing: border-box;
}
.form table tbody td {
  padding: 10px 0;
}

.form table tr td:first-child {
  width: 45%;
}

.form table tr td .tempat {
  width: 40%;
}

.form table tr td .tgl,
.form table tr td .bln,
.form table tr td .thn {
  width: 15%;
  float: right;
}

.ttd {
  width: 30%;
  text-align: center;
  float: right;
  padding: 20px 0;
  margin-bottom: 30px;
}

.ttd p.mengetahui {
  margin: 15px 0;
}

.ttd .underline {
  margin: 100px auto;
  border-bottom: 1px solid black;
  width: 90%;
}

/* DAFTAR NAMA */
.main-daftar {
  width: 1150px;
  margin: 0 auto;
  text-align: center;
  display: flex;
  flex-wrap: wrap;
}
.main-daftar .header-daftar {
  text-transform: uppercase;
  font-size: 0.56rem;
  margin-top: 50px;
  margin-bottom: 30px;
}
.main-daftar .header-daftar,
.main-daftar table {
  width: 100%;
}

.main-daftar table td,
.main-daftar table th {
  padding: 10px;
}

.main-daftar table thead th {
  background-color: yellow;
}
      </style>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>Form Rekomendasi</title>
    </head>

    <?php

      include 'config/connect-db.php';
      include 'config/auth.php';
      include 'plugin/datetime_format/datetimeFormat.php';
      
      $id = $_GET['id'];
      $dt = mysqli_query($mysqli, "SELECT 
                                      a.*, b.nama as nama_ttd, b.nip, b.pangkat, b.jabatan 
                                   FROM tb_rekomendasi a
                                   LEFT JOIN tb_ttd b ON a.id_ttd = b.id 
                                   WHERE a.id = $id");
      $d  = mysqli_fetch_array($dt);
    ?>

    <body onload="window.print()">

      <div class="main">
        <div class="header">
          <img src="assets/gambar/logo_lutra.png" class="img">
          <div class="teks-header">
            <h2>pemerintah kabupaten luwu utara</h2>
            <h3>dinas transmigrasi & tenaga kerja</h3>
            <h3>kantor gabungan dias lantai 2 blok b.2</h3>
            <h6>jl. Simpurusiang Telp.(0473) 22100 Ps. 127 Fax.(0473) 21536</h6>
            <p><a href="">www.luwuutarakab.go.id</a>, Masamba, Kode Pos 92961</p>
          </div>
        </div>

        <div class="rekomendasi">
          <h3><u>rekomendasi</u></h3>
          <p>Nomor : 560/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/Disnakertrans/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/2021</p>
        </div>

        <div class="form">
          <form>
            <table>
              <tbody>
                <tr>
                  <td><b>NIK</b></td>
                  <td><input type="text" name="nik" value="<?php echo $d['nik']; ?>"></td>
                </tr>
                <tr>
                  <td><b>Nama</b></td>
                  <td><input type="text" name="nama" value="<?php echo $d['nama']; ?>"></td>
                </tr>
                <tr>
                  <td><b>Tempat, Tanggal Lahir</b></td>
                  <td>
                    <input type="text" name="tempat" class="tempat" value="<?php echo $d['tempat_lahir']; ?>">
                    <input type="text" name="thn" class="thn" value="<?php echo datetimeFormat::getTahun($d['tanggal_lahir']); ?>">
                    <input type="text" name="bln" class="bln" value="<?php echo datetimeFormat::getBulan($d['tanggal_lahir']); ?>">
                    <input type="text" name="tgl" class="tgl" value="<?php echo datetimeFormat::getTanggal($d['tanggal_lahir']); ?>">
                  </td>
                </tr>
                <tr>
                  <td><b>Jenis Kelamin</b></td>
                  <td><input type="text" name="jk" value="<?php echo $d['jk']; ?>"></td>
                </tr>
                <tr>
                  <td><b>Status</b></td>
                  <td><input type="text" name="status" value="<?php echo $d['status']; ?>"></td>
                </tr>
                <tr>
                  <td><b>Agama</b></td>
                  <td><input type="text" name="agama" value="<?php echo $d['agama']; ?>"></td>
                </tr>
                <tr>
                  <td><b>Alamat</b></td>
                  <td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
                </tr>
                <tr>
                  <td><b>Pendidikan Terakhir</b></td>
                  <td><input type="text" name="pk" value="<?php echo $d['pendidikan_terakhir']; ?>"></td>
                </tr>
              </tbody>
            </table>
          </form>
        </div>

        <div class="ttd">
          <p>Masamba,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2021</p>
          <p class="mengetahui">Mengetahui</p>
          <div class="underline" style="margin-bottom: 0px;"><?php echo $d['nama_ttd'] ?></div>
          NIP. <?php echo $d['nip'] ?>
        </div>
      </div>

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/script.js"></script>
    </body>
  </html>