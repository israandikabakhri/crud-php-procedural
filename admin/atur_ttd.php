<?php include('template/top.php') ?>
    


            <?php
                $id = $_GET['id'];
                $dt = mysqli_query($mysqli, "SELECT * FROM tb_rekomendasi WHERE id = $id");
                $d  = mysqli_fetch_array($dt);
            ?>


<form action="controller.php?page=rekomendasi&action=atur_ttd" id="form_proposal" enctype="multipart/form-data" method="post">

    <section class="mbr-section mbr-section-hero mbr-section-full mbr-after-navbar" id="header1-1">
        <div class="mbr-table-cell">



            <div class="container">


                            
                <div class="row">

                    <div class="mbr-section col-md-12 col-lg-offset-4 col-lg-8 col-xl-offset-0 col-xl-12" id="ringkasan" style="padding-bottom: 0px !important;">
                        <h4 class="mbr-section-title display-3">Atur TTD</h4>

                        <hr>

                        <input type="hidden" name="id" value="<?php echo $d['id']; ?>">

                        <div class="mbr-section-text">
                            <div class='row'>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        Yang Bertandatangan

                                        <select name="id_ttd" class="form-control">
                                           <option value="">- Pilih -</option> 
                                            
                                           <?php       
                                            $dt = mysqli_query($mysqli, "SELECT * FROM tb_ttd") or die(mysqli_error($mysqli));
                                            while($d = mysqli_fetch_array($dt)){
                                           ?>    
                                           <option value="<?php echo $d['id']; ?>" <?php if($d['id']==$_GET['ttd']){echo 'selected'; }?>><?php echo $d['nama']; ?></option> 
                                           <?php } ?>
                                        </select>
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