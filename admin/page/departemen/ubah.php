<?php

    $id = $_GET['id'];

    $sql = $koneksi->query("select * from tb_departemen where id_departemen='$id'");
    $tampil = $sql->fetch_assoc();

 ?>
<div class="row">
    <div class="col-md-6" >
        <!-- Form Elements -->
         <div class="box box-success box-solid">
              <div class="box-header with-border">
                Ubah Departemen
            </div>
            <div class="panel-body" >
                <div class="row">
                    <div class="col-md-12">
                        <form role="form" method="POST" enctype="multipart/form-data" >


                            <div class="form-group">
                                  <label>Departemen :</label>
                                  <textarea class="form-control" rows="3" name="judul" id="judul"><?php echo $tampil['nama_departemen']; ?></textarea>
                            </div>

                            

                      <input type="submit" style="margin-left: 10px;" name="simpan" value="Simpan" class="btn btn-success">
			                <input type=button value=Kembali onclick=self.history.back() class="btn btn-info" />

                </form>

<?php

	if (isset($_POST['simpan'])) {

		$judul = $_POST['judul'];
				


		

		$simpan = $koneksi->query("update tb_departemen set nama_departemen= '$judul' where id_departemen='$id'");
		


		if ($simpan) {
			echo "

					<script>
					    setTimeout(function() {
					        swal({
					            title: 'Selamat!',
					            text: 'Data Berhasil Diubah!',
					            type: 'success'
					        }, function() {
					            window.location = '?page=departemen';
					        });
					    }, 300);
					</script>

			";
		

			}

	}

 ?>