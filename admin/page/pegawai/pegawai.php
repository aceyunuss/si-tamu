<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="box box-success box-solid">
                        <div class="box-header with-border">
                             Data Pegawai
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="example1">

                                   <a href="?page=pegawai&aksi=tambah" class="btn btn-success" style="margin-bottom:  12px;" > <i class="fa fa-plus"></i> Tambah</a>

                                 

                <thead>
                <tr>
                  <th>No</th>
                  <th>Nip</th>
                  <th>Nama </th>
                
                   <th>No HP</th>
                  
                  <th>Aksi</th>
                </tr>
                </thead>

                <tbody>

                  <?php

                     

                      $no = 1;
                      $sql = $koneksi->query("select * from tb_pegawai2 order by tb_pegawai2.id_pegawai desc");

                        

                      while ($data=$sql->fetch_assoc()) {



                   ?>

                  <tr>
                   <td><?php echo $no++; ?></td>
                   <td><?php echo $data['nip'] ?></td>
                   <td><?php echo $data['nama_peg'] ?></td>
                  
                   <td><?php echo $data['telpon'] ?></td>
                  
                   



                   <td>

                     

                      <a  href="?page=pegawai&aksi=ubah&nip=<?php echo $data['nip'];?>" class="btn btn-info btn-xs"> <i class="fa fa-edit"></i> Ubah</a>
                      <a onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data ini...???')" href="?page=pegawai&aksi=hapus&nip=<?php echo $data['nip'];?>"" class="btn btn-danger btn-xs"> <i class="fa fa-trash"></i> Hapus</a>

                   </td>
                 </tr>

                 <?php } ?>
                </tbody>

              </table>
            </div>


       

                        </div>
                     </div>
                   </div>
     </div>
