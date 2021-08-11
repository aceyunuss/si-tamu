
<div class="row">
    <div class="col-md-6" >
        <!-- Form Elements -->
         <div class="box box-success box-solid">
              <div class="box-header with-border">
                Tambah Pegawai
            </div>
            <div class="panel-body" >
                <div class="row">
                    <div class="col-md-12">
                        <form role="form" method="POST" enctype="multipart/form-data" >


                            <div class="form-group">
                                <label>Nip :</label>
                                <input type="text" class="form-control" name="nip"  />
                            </div>

                             <div class="form-group">
                                <label>Nama : </label>
                                <input type="text" class="form-control" name="nama" />
                             </div>


                             
	                 	


	                        <div class="form-group">
                                <label>No HP (62 Pengganti 0 Contoh 6285609876543) : </label>
                                <input type="text" class="form-control" name="telpon" placeholder="628581284944"  required=""/>
                             </div>	



                      <input type="submit" name="simpan" value="Simpan" class="btn btn-success">
			                <input type=button value=Kembali onclick=self.history.back() class="btn btn-info" />
                </form>

<?php

	if (isset($_POST['simpan'])) {

		$nip = $_POST['nip'];
		$nama = $_POST['nama'];
		
		$telpon = $_POST['telpon'];


            
		

 
		

		$simpan = $koneksi->query("insert into tb_pegawai2(nip, nama_peg,   telpon)values('$nip', '$nama',   '$telpon')");

	
		


		if ($simpan) {
			echo "

					<script>
					    setTimeout(function() {
					        swal({
					            title: 'Selamat!',
					            text: 'Data Berhasil Disimpan!',
					            type: 'success'
					        }, function() {
					            window.location = '?page=pegawai';
					        });
					    }, 300);
					</script>

			";
		

			}

	}

 ?>
