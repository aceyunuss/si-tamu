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
                 Data Surat Ijin Kerja 
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="example1">


                    	<a href="?page=ijin&aksi=tambah" class="btn btn-success" style="margin-bottom: 8px;"><i class="fa fa-plus"></i> Tambah </a>

                    	<a href="page/ijin/laporan.php" target="blank" style="margin-bottom:  8px; margin-left: 5px;" class="btn btn-default"><i class="fa fa-print"></i> Cetak PDF</a>
                      
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Perusahaan</th>
                                <th>Penanggung Jawab</th>
                                <th>Jenis Pekerjaan</th>
                                <th>Jumlah Tenaga Kerja</th>
                                 <th>Waktu Pelaksanaan</th>
                                <th>Potensi Bahaya</th>
                                
                                
                                <th>Alat Pelindung Diri</th>
                                <th>Daftar Alat Kerja</th>
            
                                <th>Aksi</th>

                            
                            </tr>
                        </thead>
                        <tbody>

                            <?php


                                

                                $no = 1;

                                $sql = $koneksi->query("select * from tb_ijin order by id_ijin desc");
                            

                                while ($data= $sql->fetch_assoc()) {

                               



                            ?>

                            <tr>
                                <td><?php echo $no++; ?></td>
                                
                                <td><?php echo $data['nama_perusahaan'];?></td>
                                <td><?php echo $data['penanggungjawab'];?></td>
                                 <td><?php echo $data['jenis_pekerjaan']; ?></td>
                                 <td><?php echo $data['jml_tenaga']; ?></td>
                                 <td><?php echo date('d F Y', strtotime($data['waktu_pelaksanaan'])); ?></td>
                                 
                                 <td><?php echo $data['potensi_bahaya']; ?></td>
                                 <td><?php echo $data['apd']; ?></td>
                                 <td><?php echo $data['daftar_alat']; ?></td>

                                 
                                 

                                 <td>
                                    <a href="?page=ijin&aksi=ubah&id=<?php echo $data['id_ijin']; ?>" class="btn btn-info btn-xs" ><i class="fa fa-edit "></i> Ubah</a>
                                    <a onclick="return confirm('Anda Yakin Akan Mengahapus Data Ini ... ???')" href="?page=ijin&aksi=hapus&id=<?php echo $data['id_ijin']; ?>" class="btn btn-danger btn-xs" ><i class="fa fa-trash"></i> Hapus</a>

                                   

                                   

                                   

                                </td>

                           
                            </tr>


                            <?php  } ?>
                        </tbody>

                        </table>
                      </div>

                     

            </div>
         </div>
       </div>
     </div>


