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
                             Data Keperluan 
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="example1">
                                  <!--<a href="?page=tamu" class="btn btn-success" style="margin-bottom:  8px;"><i class="fa fa-plus"></i> Tambah </a>-->

                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>nama</th>
                                            <th>Keperluan</th>
                                             <th>Pegawai Ditemui</th>
                                            <th>Departemen</th>
                                            
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php

                                        if(@$_SESSION['sekretaris'] || $_SESSION['security']){
                                            

                                          $no = 1;

                                          $sql = $koneksi->query("select * from tb_tamu, tb_perlu, tb_pegawai2, tb_departemen where 
                                            tb_tamu.keperluan=tb_perlu.id
                                            and tb_tamu.ketemu=tb_pegawai2.nip
                                            and tb_tamu.id_departemen=tb_departemen.id_departemen
                                             order by id_tamu desc");

                                        }else{
                                           $no = 1;

                                          $sql = $koneksi->query("select * from tb_tamu, tb_perlu, tb_pegawai2, tb_departemen where 
                                            tb_tamu.keperluan=tb_perlu.id
                                            and tb_tamu.ketemu=tb_pegawai2.nip
                                            and tb_tamu.id_departemen=tb_departemen.id_departemen and keperluan=12
                                             order by id_tamu desc");
                                        }
                                        

                                            while ($data= $sql->fetch_assoc()) {

                                             $jk = ($data['jk']==L)?"Laki-laki":"Wanita";   

                                             $jam_keluar = $data['jam_keluar'];



                                        ?>

                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo date('d F Y', strtotime($data['tanggal'])); ?></td>
                                            <td><?php echo $data['nama'];?></td>
                                             <td><?php echo $data['judul']; ?></td>
                                             <td><?php echo $data['nama_peg']; ?></td>
                                             <td><?php echo $data['nama_departemen']; ?></td>
                                             
                                             
                                             
                                             
                                             

                                             <td>
                                                <a href="?page=keperluan&aksi=ubah&id=<?php echo $data['id_tamu']; ?>" class="btn btn-info btn-xs" ><i class="fa fa-edit "></i> Ubah</a>
                                                <a onclick="return confirm('Anda Yakin Akan Mengahapus Data Ini ... ???')" href="?page=keperluan&aksi=hapus&id=<?php echo $data['id_tamu']; ?>" class="btn btn-danger btn-xs" ><i class="fa fa-trash"></i> Hapus</a>

                                            

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


