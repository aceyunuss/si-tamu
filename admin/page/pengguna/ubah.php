<?php

    $id=$_GET['id'];
    $sql = $koneksi->query("select * from tb_user where id='$id'");
    $data = $sql->fetch_assoc();

    $level = $data['level'];

?>

<div class="panel panel-primary">
<div class="panel-heading">
		Ubah Data Pengguna
 </div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">

                                    <form method="POST" enctype="multipart/form-data" onsubmit="return validasi(this)" >
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input class="form-control" name="username" value="<?php echo $data['username'];?>" />

                                        </div>

                                       

                                        <div class="form-group">
                                            <label>Nama Lengkap</label>
                                            <input class="form-control" name="nama" id="nama" value="<?php echo $data['nama'];?>" />

                                        </div>

                              <label for="alamat">Level</label>
                              <div class="form-group">
                                <div class="form-line">
                                    <select name="level" class="form-control show-tick">
                                        
                                        <option value="sekretaris" <?php if ($level=='sekretaris') {echo "selected";} ?>>Sekretaris</option>
                                        <option value="security" <?php if ($level=='security') {echo "selected";} ?>>Security</option>
                                        <option value="K3 & HSE Dept" <?php if ($level=='K3 & HSE Dept') {echo "selected";} ?>>K3 & HSE Dept</option>
                                        
                                        
                                    </select>
                                </div>

                                <br>


                                         


                                        <div class="form-group">
                                            <label>Foto</label>
                                            <label><img src='images/<?php echo $data['foto'];?>' width="100" height="75"></label>

                                        </div>

                                        <div class="form-group">
                                            <label>Ganti Foto</label>
                                            <input type="file" name="foto" id="foto" />
                                        </div>


                                        <div>

                                        	<input type="submit" name="simpan" value="Simpan" class="btn btn-success">
                                        </div>
                                 </div>

                                 </form>
 

 <?php

 	$username = $_POST ['username'];
 	
 	$nama = $_POST ['nama'];
  $u_kerja = $_POST ['u_kerja'];
  $level = $_POST ['level'];

    $foto = $_FILES['foto']['name'];
    $lokasi = $_FILES['foto']['tmp_name'];


 	$simpan = $_POST ['simpan'];


 	if ($simpan) {
        if (!empty($lokasi)) {

        $upload = move_uploaded_file($lokasi, "images/".$foto);

 		$sql = $koneksi->query("update  tb_user set username='$username',  nama='$nama', level='$level', foto='$foto' where id='$id'");


 			if ($sql) {
          echo "

              <script>
                  setTimeout(function() {
                      swal({
                          title: 'Selamat!',
                          text: 'Data Berhasil Diubah!',
                          type: 'success'
                      }, function() {
                          window.location = '?page=pengguna';
                      });
                  }, 300);
              </script>

          ";
        }

 	}else{
        $sql = $koneksi->query("update  tb_user set username='$username',  nama='$nama', level='$level' where id='$id'");


        if ($sql) {
          echo "

              <script>
                  setTimeout(function() {
                      swal({
                          title: 'Selamat!',
                          text: 'Data Berhasil Diubah!',
                          type: 'success'
                      }, function() {
                          window.location = '?page=pengguna';
                      });
                  }, 300);
              </script>

          ";
        }
    }

     }

 ?>
