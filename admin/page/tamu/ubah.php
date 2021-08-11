<?php 
    date_default_timezone_set('Asia/Jakarta');
    $id = $_GET['id'];

    $sql = $koneksi->query("select * from tb_tamu where id_tamu = '$id'");
    $data=$sql->fetch_assoc();
    
    $jam = date("h:i:s");


    
         if($_SESSION['admin']){
              $user_l=$_SESSION['admin'];

         }elseif ($_SESSION['user']) {
              $user_l=$_SESSION['user'];
         }

         $sql_u = $koneksi->query("select* from tb_user where id='$user_l'");
         $data_u = $sql_u->fetch_assoc();

         $user = $data_u['nama'];



 ?>

<div class="row">
    <div class="col-md-6" >
        <!-- Form Elements -->
        <div class="box box-success box-solid">
              <div class="box-header with-border">
                Tambah Data Tamu
            </div>
            <div class="panel-body" >
                <div class="row">
                    <div class="col-md-12">
                        <form role="form" method="POST" enctype="multipart/form-data" >

                           <div class="form-group">
                                <label>Nik :</label>
                                <input type="text" name="nik" value="<?php echo $data['nik'] ?>" class="form-control"  >
                            </div>

                        	 <div class="form-group">
                                <label>Nama :</label>
                                <input type="text" name="nama" value="<?php echo $data['nama'] ?>" class="form-control"  >
                            </div>
                            

                             <div class="form-group">
	                                  <label>Alamat :</label>
	                                  <textarea class="form-control" rows="3" name="alamat"><?php echo $data['alamat'] ?></textarea>
	                            </div>

	                          <div class="form-group">
                                <label>No Telpon :</label>
                                <input type="text" name="telp" value="<?php echo $data['telp'] ?>" class="form-control" >
                            </div> 

                            <div class="form-group">
                                <label>Instansi :</label>
                                <input type="text" name="instansi" value="<?php echo $data['instansi'] ?>" class="form-control" >
                            </div>  

	                         <div class="form-group">

								 

					 		            

                            <div class="form-group">
                                <label>Tanggal :</label>
                                <input type="date" name="tgl" class="form-control" readonly=""  value="<?php echo $data['tanggal'] ?>">
                            </div>

                             <div class="form-group">
                                <label>Jam :</label>
                                <input type="time" name="jam" class="form-control" id="nama" readonly="" value="<?php echo $data['jam']; ?>"  >
                            </div>

                           

					 		
                            
                            <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                            <input type=button value=Kembali onclick=self.history.back() class="btn btn-info" />
	
						</form>

       

        


       
<?php

    if (isset($_POST['simpan'])) {

        $nik = $_POST['nik'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $telp = $_POST['telp'];
        
        $instansi = $_POST['instansi'];
       
        $tgl= $_POST['tgl'];
        $jam= $_POST['jam'];
        


    $koneksi->query("UPDATE  tb_tamu SET nik='$nik',  nama='$nama', alamat='$alamat', telp='$telp',  instansi='$instansi'  where id_tamu='$id'");

      ?>
           <script>
            setTimeout(function() {
                swal({
                    title: "Selamat!",
                    text: "Data Berhasil Diubah!",
                    type: "success"
                }, function() {
                    window.location = "?page=d_tamu";
                });
            }, 300);
        </script>
        <?php



    }

 ?>


