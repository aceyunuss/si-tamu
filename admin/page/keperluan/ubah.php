<?php 
    date_default_timezone_set('Asia/Jakarta');
    $id = $_GET['id'];

    $sql = $koneksi->query("select * from tb_tamu, tb_pegawai2 where tb_tamu.ketemu=tb_pegawai2.nip and id_tamu = '$id'");
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
                                <label>Nama :</label>
                                <input type="text" name="nama" value="<?php echo $data['nama'] ?>" class="form-control"  >
                            </div>
                            

                            
	                        

					 		<div class="form-group">
                                <label>Bertemu :</label>
                                <input type="text" name="temu" class="form-control" id="nama" data-toggle="modal" data-target="#modal-default" value="<?php echo $data['nama_peg'] ?>"   readonly=""> <br>

                                <input type="hidden" name="nip" class="form-control" id="nip" data-toggle="modal" data-target="#modal-default" value="<?php echo $data['nip'] ?>"   readonly="">
                            </div>

                            

                            <div class="form-group">

                            <label> Keperluan :</label>
                            <select class="form-control" name="perlu">
                  
                                        <?php


                                            $query = $koneksi->query("SELECT * FROM tb_perlu ORDER by id");

                                            while ($tampil=$query->fetch_assoc()) {
                                        $pilih=($tampil['id']==$data['keperluan']?"selected":"");
                                              echo "<option value='$tampil[id]' $pilih> $tampil[judul]</option>";
                                            }

                                        ?>

                            </select>
                     </div>


<div class="form-group">
                     <label> Keperluan :</label>
                            <select class="form-control" name="departemen">
                  
                                        <?php


                                            $query = $koneksi->query("SELECT * FROM tb_departemen ORDER by id_departemen");

                                            while ($tampil=$query->fetch_assoc()) {
                                        $pilih=($tampil['id_departemen']==$data['id_departemen']?"selected":"");
                                              echo "<option value='$tampil[id_departemen]' $pilih> $tampil[nama_departemen]</option>";
                                            }

                                        ?>

                            </select>
                     </div>

					 		
                            
                            <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                            <input type=button value=Kembali onclick=self.history.back() class="btn btn-info" />

                            
	
						</form>

       

        <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                 <center><h4 class="modal-title" id="myModalLabel">Pilih Pegawai</h4></center>
              </div>
              <div class="modal-body">
                <table class="table table-striped table-bordered table-hover" id="example1">
                                    <thead>
                                        <tr>
                                           
                                            <th>NIP</th>
                                            <th>NAMA</th>
                                            
                                          
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php

                                            

                                            $sql = $koneksi->query("select * from tb_pegawai2 ");

                                            while ($r= $sql->fetch_assoc()) {





                                       echo"
											<tr style='cursor:pointer' class='pilih' data-nama='$r[nama_peg]' data-nip='$r[nip]'>
												
												<td>$r[nip]</td>
												<td>$r[nama_peg]</td>
											</tr> 
					 
											";
										}
										?>

                                    </table>     

              </div>
              
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->


        <script type="text/javascript">
            $(function() {
                $('#example1').dataTable();
            });
        </script>
        


         <script type="text/javascript">

//            jika dipilih, nim akan masuk ke input dan modal di tutup
            $(document).on('click', '.pilih', function (e) {
                
                
                document.getElementById("nama").value = $(this).attr('data-nama');

                document.getElementById("nip").value = $(this).attr('data-nip');
                $('#modal-default').modal('hide');
            });
            

//            tabel lookup mahasiswa
            $(function () {
                $("#lookup").dataTable();
            });
        </script> 


       
<?php

    if (isset($_POST['simpan'])) {


        $nama = $_POST['nama'];
        
        $nip = $_POST['nip'];
        $perlu = $_POST['perlu'];
        
        $departemen= $_POST['departemen'];
        


    $koneksi->query("UPDATE  tb_tamu SET  nama='$nama',  keperluan='$perlu',  id_departemen='$departemen', ketemu='$nip'  where id_tamu='$id'");

      ?>
           <script>
            setTimeout(function() {
                swal({
                    title: "Selamat!",
                    text: "Data Berhasil Diubah!",
                    type: "success"
                }, function() {
                    window.location = "?page=keperluan";
                });
            }, 300);
        </script>
        <?php



    }

 ?>


