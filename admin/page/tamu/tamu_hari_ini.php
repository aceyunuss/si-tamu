<?php 

    function tglIndonesia2($str2){
               $tr2   = trim($str2);
               $str2    = str_replace(array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'), array('Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum\'at', 'Sabtu', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'), $tr2);
               return $str2;
           }

 ?>

<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="box box-success box-solid">
            <div class="box-header with-border">
                 Data Tamu Hari Ini
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="example1">
                      
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Nik</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                 <th>Instansi</th>
                                <th>No Telp</th>
                                
                                
                                <th>Jam Masuk</th>
                                <th>Jam Keluar</th>
            
                               
                            </tr>
                        </thead>
                        <tbody>

                            <?php


                                

                                $no = 1;

                                $sql = $koneksi->query("select * from tb_tamu, tb_perlu where tb_tamu.keperluan=tb_perlu.id order by id_tamu desc");
                            

                                while ($data= $sql->fetch_assoc()) {

                                 $jk = ($data['jk']==L)?"Laki-laki":"Wanita";   

                                 $jam_keluar = $data['jam_keluar'];



                            ?>

                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo date('d F Y', strtotime($data['tanggal'])); ?></td>
                                <td><?php echo $data['nik'];?></td>
                                <td><?php echo $data['nama'];?></td>
                                 <td><?php echo $data['alamat']; ?></td>
                                 <td><?php echo $data['instansi']; ?></td>
                                 <td><?php echo $data['telp']; ?></td>
                                 
                                 <td><?php echo $data['jam']; ?></td>

                                <?php if ($jam_keluar=='00:00:00') {
                                   
                                ?>

                                 <td><a href="?page=d_tamu&aksi=keluar&id=<?php echo $data['id_tamu']; ?>" class="btn btn-danger btn-xs" > Check Out</a></td>

                                 <?php } else{ ?>
                                     <td><?php echo $data['jam_keluar']; ?></td>
                                 <?php } ?>

                                 

                                 
                                 
                                 

                                
                            </tr>


                            <?php  } ?>
                        </tbody>

                        </table>
                      </div>

                     

            </div>
         </div>
       </div>
     </div>


