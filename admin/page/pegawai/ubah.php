<?php

    $nip = $_GET['nip'];

    $sql = $koneksi->query("select * from tb_pegawai2 where nip='$nip'");
    $tampil = $sql->fetch_assoc();

 ?>

<div class="row">
    <div class="col-md-12" >
        <!-- Form Elements -->
        <div class="panel panel-primary" >
            <div class="panel-heading">
                Ubah Pegawai
            </div>
            <div class="panel-body" >
                <div class="row">
                    <div class="col-md-6">
                        <form role="form" method="POST" enctype="multipart/form-data" >


                            <div class="form-group">
                                <label>Nip :</label>
                                <input type="text" class="form-control" name="nip" value="<?php echo $tampil['nip'] ?>"  />
                            </div>

                             <div class="form-group">
                                <label>Nama : </label>
                                <input type="text" class="form-control" name="nama" value="<?php echo $tampil['nama_peg'] ?>" />
                             </div>

                             


                        <div class="form-group">
                                <label>No HP (62 Pengganti 0 Contoh 6285609876543) : </label>
                                <input type="text" class="form-control" name="telpon" placeholder="628581284944" value="<?php echo $tampil['telpon'] ?>"  required=""/>
                             </div> 



                      <input type="submit" name="simpan" value="Simpan" class="btn btn-success">
			                <input type=button value=Kembali onclick=self.history.back() class="btn btn-info" />
                </form>

<?php

	if (isset($_POST['simpan'])) {


		$nama = $_POST['nama'];
        $nip2 = $_POST['nip'];
		
		
        $telpon = $_POST['telpon'];


   
	

    $koneksi->query("UPDATE  tb_pegawai2 SET nip='$nip2',  nama_peg='$nama',  telpon='$telpon' where nip='$nip'");



    

      ?>
             <script>
            setTimeout(function() {
                swal({
                    title: "Selamat!",
                    text: "Data Berhasil Diubah!",
                    type: "success"
                }, function() {
                    window.location = "?page=pegawai";
                });
            }, 300);
        </script>
        <?php
}

  


	

 ?>
