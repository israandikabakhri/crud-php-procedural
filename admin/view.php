<?php 

   include('template/top.php');
   include 'plugin/datetime_format/datetimeFormat.php';

?>


<?php

      $qry    = "SELECT * FROM
                 (
                  SELECT a.*, b.nama as nama_ttd FROM tb_rekomendasi a
                  LEFT JOIN tb_ttd b ON a.id_ttd = b.id
                 ) A";
      
      $orderby = ""; 

      $view   = "view.php";            

      $column = [
                  'value'  => ['nama', 'nik'],
                  'label'  => ['NAMA', 'NIK'],
                  'type'   => ['text', 'text']
                ];

?>


<style type="text/css">
  .vc{
    font-size: 17px;
  }
  .btn-xs{
    padding: 5px;
    margin: 2px; 
  }
</style>


    <section class="mbr-section mbr-section-hero mbr-section-full mbr-after-navbar" id="header1-1">
        <div class="mbr-table-cell">
            <div class="container-fluid">
                <div class="row">
                    <div class="mbr-section-full col-md-12 col-lg-11">
                        <h3 class="mbr-section-title display-2" style="padding-top: 90px;">TAMPIL DATA</h3>
                        
                        <div class="row">

                          <div class="col-xs-12">
                            <a href="tambah.php" class="btn btn-lg btn-warning">
                              <span class="fa fa-plus"></span>&nbsp;TAMBAH DATA
                            </a>
                            <a href="cetak_all.php" class="btn btn-lg btn-warning" target="_blank">
                              <span class="fa fa-print"></span>&nbsp;CETAK SEMUA
                            </a>
                          </div>

                        </div>
                        
                        <div class="mbr-section-nopadding">
                            
                            <span style="margin: 10px;"><?php include('plugin/paginasi/form-pencarian.php'); ?></span>
                            <table class="gigo-responsive" style="margin-right: 10px;">
                              <thead>
                                <tr>
                                  <th scope="col">No</th>
                                  <th scope="col">Identitas</th>
                                  <th scope="col">TTL</th>
                                  <th scope="col">Jenkel</th>
                                  <th scope="col">Pendidikan Terakhir</th>
                                  <th scope="col">TTD OLeh</th>
                                  <th scope="col">Aksi</th>
                                </tr>
                              </thead>

                              <tbody>
                              <?php
                                $no=1;

                                include('plugin/paginasi/main-paginasi.php');

                                while($data = mysqli_fetch_array($dt)){
                              ?>
                                <tr>
                                  <td data-label="No" scope="row" ><?php echo $no; ?></td>
                                  <td data-label="Identitas"><?php echo $data['nik']; ?><br>
                                                                 <?php echo $data['nama']; ?></td>
                                  <td data-label="TTL"><?php echo $data['tempat_lahir']; ?>, <?php echo datetimeFormat::TanggalIndo($data['tanggal_lahir']); ?></td>
                                  <td data-label="Jenkel"><?php echo $data['jk']; ?></td>
                                  <td data-label="Pendidikan Terakhir"><?php echo $data['pendidikan_terakhir']; ?></td>
                                  <td data-label="TTD Oleh"><?php echo $data['nama_ttd']; ?></td>
                                  
                                  <td data-label="Aksi">
                                    <a href="atur_ttd.php?id=<?php echo $data['id']; ?>&ttd=<?php echo $data['id_ttd']; ?>" class="btn btn-info btn-xs">Atur TTD</a>
                                    <a href="cetak.php?id=<?php echo $data['id']; ?>" class="btn btn-primary btn-xs" target="_blank">Cetak</a>
                                    <a href="edit.php?id=<?php echo $data['id']; ?>" class="btn btn-success btn-xs">Edit</a>
                                    <a href="controller.php?page=rekomendasi&action=delete&id=<?php echo $data['id']; ?>" class="btn btn-danger btn-xs confirmation">Hapus</a>
                                  </td>
                                </tr>
                              <?php $no++; } ?>
                              
                              </tbody>

                            </table>
                            <?php include('plugin/paginasi/btn-paginasi.php'); ?>
                            <br>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

<script type="text/javascript">
    $('.confirmation').on('click', function(e) {
       return confirm('Anda Yakin Menghapus Data Ini?');
    });
</script>


<?php $tinggi = '610px'; include('template/bottom.php') ?>