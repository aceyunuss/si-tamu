<div class="row">
  <div class="col-md-12">
    <!-- Advanced Tables -->
    <div class="box box-success box-solid">
      <div class="box-header with-border">
        Data Perusahaan
      </div>
      <div class="panel-body">
        <div class="table-responsive">
          <table class="table table-striped table-bordered table-hover" id="example1">

            <a href="?page=perusahaan&aksi=tambah" class="btn btn-success" style="margin-bottom:  12px;"> <i class="fa fa-plus"></i> Tambah</a>

            <thead>
              <tr>
                <th>No</th>
                <th>Perusahaan</th>

                <th>Aksi</th>
              </tr>
            </thead>

            <tbody>

              <?php
              $no = 1;
              $sql = $koneksi->query("select * from tb_perusahaan order by id_perusahaan desc");
              while ($data = $sql->fetch_assoc()) {



              ?>

                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $data['nama_perusahaan'] ?></td>

                  <td>


                    <a href="?page=perusahaan&aksi=ubah&id=<?php echo $data['id_perusahaan']; ?>" class="btn btn-info btn-xs"> <i class="fa fa-edit"></i> Ubah</a>
                    <a onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data ini...???')" href="?page=perusahaan&aksi=hapus&id=<?php echo $data['id_perusahaan']; ?>"" class=" btn btn-danger btn-xs"> <i class="fa fa-trash"></i> Hapus</a>

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