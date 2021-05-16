
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
          width: 60%;
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
    <title>Daftar Nama</title>
  </head>


    <?php

      include 'config/connect-db.php';
      include 'config/auth.php';
      include 'plugin/datetime_format/datetimeFormat.php';
      
      $id = $_GET['id'];
      $dt = mysqli_query($mysqli, "SELECT 
                                      a.*, b.nama as nama_ttd, b.nip, b.pangkat, b.jabatan 
                                   FROM tb_rekomendasi a
                                   LEFT JOIN tb_ttd b ON a.id_ttd = b.id");
      
    ?>

  <body onload="window.print()">

    <div class="main-daftar">
      <div class="header-daftar">
        <h1>daftar nama pencari kerja yang memenuhi syarat</h1>
        <h1><u>untuk pembuatan kartu pencari kerja / ak.1</u></h1>
      </div>
      <table border="1" cellspacing="0">
        <thead>
          <tr>
            <th>NO.</th>
            <th>NAMA LENGKAP</th>
            <th>JENIS KELAMIN</th>
            <th>TEMPAT LAHIR</th>
            <th>TANGGAL LAHIR</th>
            <th>AGAMA</th>
            <th>NOMOR INDUK KTP</th>
            <th>ALAMAT</th>
            <th>PENDIDIKAN TERAKHIR</th>
            <th>STATUS</th>
            <th>KETERANGAN</th>
          </tr>
          <tr>
            <th>1</th>
            <th>2</th>
            <th>3</th>
            <th>4</th>
            <th>5</th>
            <th>6</th>
            <th>7</th>
            <th>8</th>
            <th>9</th>
            <th>10</th>
            <th>11</th>
          </tr>
        </thead>
        <tbody>
          <?php 
                $no = 1; 
                while($d  = mysqli_fetch_array($dt)){ 
          ?>
          <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $d['nama']; ?></td>
            <td><?php echo $d['jk']; ?></td>
            <td><?php echo $d['tempat_lahir']; ?></td>
            <td><?php echo $d['tanggal_lahir']; ?></td>
            <td><?php echo $d['agama']; ?></td>
            <td><?php echo $d['nik']; ?></td>
            <td><?php echo $d['alamat']; ?></td>
            <td><?php echo $d['pendidikan_terakhir']; ?></td>
            <td><?php echo $d['status']; ?></td>
            <td></td>
          </tr>
        <?php $no++; } ?>

        </tbody>
      </table>
    </div>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/script.js"></script>
  </body>
</html>