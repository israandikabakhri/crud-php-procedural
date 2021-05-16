<?php include('template/top.php') ?>
    


            <?php
                $id = $_GET['id'];
                $dt = mysqli_query($mysqli, "SELECT * FROM tb_rekomendasi WHERE id = $id");
                $d  = mysqli_fetch_array($dt);
            ?>


<form action="controller.php?page=rekomendasi&action=update" id="form_proposal" enctype="multipart/form-data" method="post">

    <section class="mbr-section mbr-section-hero mbr-section-full mbr-after-navbar" id="header1-1">
        <div class="mbr-table-cell">



            <div class="container">


                            
                <div class="row">

                    <div class="mbr-section col-md-12 col-lg-offset-4 col-lg-8 col-xl-offset-0 col-xl-12" id="ringkasan" style="padding-bottom: 0px !important;">
                        <h4 class="mbr-section-title display-3">Edit Data</h4>

                        <hr>

                        <input type="hidden" name="id" value="<?php echo $d['id']; ?>">

                        <div class="mbr-section-text">
                            <div class='row'>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        NIK
                                        <input type="text" class="form-control" name="nik" placeholder="NIK.." required value="<?php echo $d['nik']; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mbr-section-text">
                            <div class='row'>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        Nama
                                        <input type="text" class="form-control" name="nama" placeholder="Nama.." required value="<?php echo $d['nama']; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="mbr-section-text">
                            <div class='row'>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        Tempat Lahir
                                        <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir.." required value="<?php echo $d['tempat_lahir']; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mbr-section-text">
                            <div class='row'>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        Tanggal Lahir
                                        <input type="date" class="form-control" name="tanggal_lahir" placeholder="Tanggal Lahir.." required value="<?php echo $d['tanggal_lahir']; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mbr-section-text">
                            <div class='row'>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        Jenis Kelamin
                                        <input type="text" class="form-control" name="jk" placeholder="Jenis Kelamin.." required value="<?php echo $d['jk']; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="mbr-section-text">
                            <div class='row'>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        Status
                                        <input type="text" class="form-control" name="status" placeholder="Status.." required value="<?php echo $d['status']; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="mbr-section-text">
                            <div class='row'>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        Agama
                                        <input type="text" class="form-control" name="agama" placeholder="Agama.." required value="<?php echo $d['agama']; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="mbr-section-text">
                            <div class='row'>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        Alamat
                                        <input type="text" class="form-control" name="alamat" placeholder="Alamat.." required value="<?php echo $d['alamat']; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="mbr-section-text">
                            <div class='row'>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        Pendidikan Terakhir
                                        <input type="text" class="form-control" name="pendidikan_terakhir" placeholder="Pendidikan Terakhir.." required value="<?php echo $d['pendidikan_terakhir']; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mbr-section-text">

            

                            <div class="row">
                                <div class="col-lg-12 text-xs-right">
                                    <a class="btn btn-lg btn-info-outline" href="view.php"><span class="fa fa-backward"></span> KEMBALI </a>
                                    <button type="submit" name="simpan" class="btn btn-lg btn-primary">Simpan&nbsp;<span class="fa fa-save"></span></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    





                </div>
            </div>
        </div>
    </section>
</form>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>

<script type="text/javascript">
    $(function () {
      $("#datepicker").datepicker({ 
            autoclose: true, 
            todayHighlight: true
      });
    });
</script>

<script type="text/javascript">
    function onlyNumbers(evt) {
        var e = event || evt;
        var charCode = e.which || e.keyCode;

        if(charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
        return true;

    }
</script>


<?php include('template/bottom.php'); ?>