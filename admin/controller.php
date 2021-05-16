<?php
    
    include 'config/connect-db.php';
    include 'config/base-url.php';
    include 'config/auth.php';
 
	$page    = $_GET['page'];
	$action  = $_GET['action'];


    /// PANITIA
	if($page == "rekomendasi" && $action == "insert")
	{
		  
		  $nik                 = $_POST['nik'];
		  $nama    			   = $_POST['nama'];
		  $tempat_lahir 	   = $_POST['tempat_lahir'];
		  $tanggal_lahir       = $_POST['tanggal_lahir'];
		  $jk 				   = $_POST['jk'];
		  $status 			   = $_POST['status'];
		  $agama 			   = $_POST['agama'];
		  $alamat 			   = $_POST['alamat'];
		  $pendidikan_terakhir = $_POST['pendidikan_terakhir'];

		  $result = mysqli_query($mysqli, "INSERT INTO tb_rekomendasi (id, nik, nama, tempat_lahir, tanggal_lahir, jk, status, agama, alamat, pendidikan_terakhir) 
			                               VALUES(null, $nik, '$nama', '$tempat_lahir', '$tanggal_lahir', '$jk', '$status', '$agama', '$alamat', '$pendidikan_terakhir')") or die(mysqli_error($mysqli));;
		  
		  if($result){ 
		      echo '<script language="javascript"> window.location.href = "'.$base_url_back.'/view.php" </script>';
		  }else{
		      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		  }

	
	}elseif($page == "rekomendasi" && $action == "update")
	{


		  $id                  = $_POST['id'];
		  $nik                 = $_POST['nik'];
		  $nama    			   = $_POST['nama'];
		  $tempat_lahir 	   = $_POST['tempat_lahir'];
		  $tanggal_lahir       = $_POST['tanggal_lahir'];
		  $jk 				   = $_POST['jk'];
		  $status 			   = $_POST['status'];
		  $agama 			   = $_POST['agama'];
		  $alamat 			   = $_POST['alamat'];
		  $pendidikan_terakhir = $_POST['pendidikan_terakhir'];


				  $result = mysqli_query($mysqli, "UPDATE tb_rekomendasi
				  									SET 
				  									   nik                  = '$nik',
				  									   nama                 = '$nama',
				  									   tempat_lahir         = '$tempat_lahir',
				  									   tanggal_lahir        = '$tanggal_lahir',
				  									   jk                   = '$jk',
				  									   status               = '$status',
				  									   agama                = '$agama',
				  									   alamat               = '$alamat',
				  									   pendidikan_terakhir  = '$pendidikan_terakhir'
				  									   WHERE id = $id
				  									") or die(mysqli_error($mysqli));



		  
		  if(isset($result)){ 

		      		echo '<script language="javascript"> 
		      				window.location.href = "'.$base_url_back.'/view.php" 
		      			 </script>';

		  }else{

			      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
			  	  echo "<br><br><a href='artikel.php'>Kembali</a>";
			  
		  
		  }

	}elseif($page == "rekomendasi" && $action == "delete")
	{

		  $ID = $_GET['id'];


				  $result = mysqli_query($mysqli, "DELETE FROM tb_rekomendasi WHERE id = $ID
				  									") or die(mysqli_error($mysqli));

		  
		  if(isset($result)){ 

		      		echo '<script language="javascript"> 
		      				window.location.href = "'.$base_url_back.'/view.php" 
		      			 </script>';

		  }else{

			      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
			  	  echo "<br><br><a href='artikel.php'>Kembali</a>";
			  
		  
		  }
    
    
	}elseif($page == "rekomendasi" && $action == "atur_ttd")
	{


		  $id                  = $_POST['id'];
		  $id_ttd              = $_POST['id_ttd'];


				  $result = mysqli_query($mysqli, "UPDATE tb_rekomendasi
				  									SET 
				  									   id_ttd = '$id_ttd'
				  									   WHERE id = $id
				  									") or die(mysqli_error($mysqli));



		  
		  if(isset($result)){ 

		      		echo '<script language="javascript"> 
		      				window.location.href = "'.$base_url_back.'/view.php" 
		      			 </script>';

		  }else{

			      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
			  	  echo "<br><br><a href='artikel.php'>Kembali</a>";
			  
		  
		  }

	}	

?>