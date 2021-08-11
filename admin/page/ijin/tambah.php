<?php

$p = $koneksi->query("select * from tb_perusahaan");
$j = $koneksi->query("select * from tb_jenis_pekerjaan");
while ($data = $p->fetch_assoc()) {
	$plist[] = $data;
}
while ($data = $j->fetch_assoc()) {
	$jlist[] = $data;
}
?>


<div class="panel panel-primary">
	<div class="panel-heading">
		Tambah Surat Ijin Kerja
	</div>
	<div class="panel-body">
		<div class="row">
			<div class="col-md-12">

				<form method="POST" enctype="multipart/form-data">

					<!-- <div class="form-group">
						<label>Nama Perusahaan</label>
						<input type="text" class="form-control" name="nama_perusahaan" />

					</div> -->
					<div class="form-group">
						<label> Nama Perusahaan</label>
						<select name="perusahaan" class="form-control">
							<option value="">-- Pilih --</option>
							<?php foreach ($plist as $k => $v) { ?>
								<option value="<?= $v['id_perusahaan'] ?>"><?= $v['nama_perusahaan'] ?></option>
							<?php } ?>
						</select>
					</div>

					<div class="form-group">
						<label>Penanggung Jawab </label>
						<input type="text" class="form-control" name="penanggungjawab" />

					</div>

					<!-- <div class="form-group">
						<label>Jenis Pekerjaan </label>
						<input type="text" class="form-control" name="jenis_pekerjaan" />

					</div> -->

					<div class="form-group">
						<label> Jenis Pekerjaan</label>
						<select name="jenis_pekerjaan" class="form-control">
							<option value="">-- Pilih --</option>
							<?php foreach ($jlist as $k => $v) { ?>
								<option value="<?= $v['id_jenis_pekerjaan'] ?>"><?= $v['nama_jenis_pekerjaan'] ?></option>
							<?php } ?>
						</select>
					</div>

					<div class="form-group">
						<label>Jumlah Tenaga Kerja </label>
						<input type="number" class="form-control" name="jml_tenaga" />

					</div>

					<div class="form-group">

						<label>Waktu Pelaksanaan </label>
						<input type="date" class="form-control" name="waktu_pelaksanaan" />

					</div>

					<div class="form-group">
						<label>Potensi Bahaya</label><br>
						<label>
							<input type="checkbox" class="minimal" name='potensi[]' value="Gas Beracun"> Gas Beracun
						</label>

						<label>
							<input type="checkbox" class="minimal" name='potensi[]' value="Ledakan"> Ledakan
						</label>
						<label>
							<input type="checkbox" class="minimal" name='potensi[]' value="Mudah Terbakar"> Mudah Terbakar
						</label>
						<label>
							<input type="checkbox" class="minimal" name='potensi[]' value="Ketinggian"> Ketinggian
						</label>

					</div>


					<div class="form-group">
						<label>Alat Pelindung Diri</label><br>
						<label>
							<input type="checkbox" class="minimal" name='apd[]' value="Face Shield"> Face Shield
						</label>

						<label>
							<input type="checkbox" class="minimal" name='apd[]' value="Safety Helmet"> Safety Helmet
						</label>
						<label>
							<input type="checkbox" class="minimal" name='apd[]' value="Respirator"> Respirator
						</label>
						<label>
							<input type="checkbox" class="minimal" name='apd[]' value="Safety Body Harness"> Safety Body Harness
						</label>

					</div>

					<div class="form-group">
						<label>Daftar Alat Kerja</label><br>
						<label>
							<input type="checkbox" class="minimal" name='alat_kerja[]' value="Tangga"> Tangga
						</label>

						<label>
							<input type="checkbox" class="minimal" name='alat_kerja[]' value="Air Compressor"> Air Compressor
						</label>
						<label>
							<input type="checkbox" class="minimal" name='alat_kerja[]' value="Welding Set"> Welding Set
						</label>
						<label>
							<input type="checkbox" class="minimal" name='alat_kerja[]' value="Stager"> Stager
						</label>

					</div>


					<div>

						<input type="submit" name="simpan" value="Simpan" class="btn btn-success">
					</div>
			</div>

			</form>




			<?php


			$id_perusahaan = $_POST['perusahaan'];
			$penanggungjawab = $_POST['penanggungjawab'];
			$id_jenis_pekerjaan = $_POST['jenis_pekerjaan'];
			$jml_tenaga = $_POST['jml_tenaga'];


			$waktu_pelaksanaan = $_POST['waktu_pelaksanaan'];

			$potensi = implode($_POST["potensi"], ', ');
			$apd = implode($_POST["apd"], ', ');
			$alat_kerja = implode($_POST["alat_kerja"], ', ');

			$simpan = $_POST['simpan'];


			if ($simpan) {


				$getp = $koneksi->query("SELECT * from tb_perusahaan where id_perusahaan = $id_perusahaan ");
				while ($pdata = $getp->fetch_assoc()) {
					$pid = $pdata['id_perusahaan'];
					$pname = $pdata['nama_perusahaan'];
				}

				$getj = $koneksi->query("SELECT * from tb_jenis_pekerjaan where id_jenis_pekerjaan = $id_jenis_pekerjaan ");
				while ($jdata = $getj->fetch_assoc()) {
					$jid = $jdata['id_jenis_pekerjaan'];
					$jname = $jdata['nama_jenis_pekerjaan'];
				}

				$sql = $koneksi->query("insert into tb_ijin (id_perusahaan, nama_perusahaan, penanggungjawab, id_jenis_pekerjaan, jenis_pekerjaan,  jml_tenaga, waktu_pelaksanaan, potensi_bahaya, apd, daftar_alat)values($pid, '$pname', '$penanggungjawab', $jid, '$jname', '$jml_tenaga', '$waktu_pelaksanaan', '$potensi', '$apd', '$alat_kerja')");


				if ($sql) {
					echo "

          <script>
              setTimeout(function() {
                  swal({
                      title: 'Selamat!',
                      text: 'Data Berhasil Disimpan!',
                      type: 'success'
                  }, function() {
                      window.location = '?page=ijin';
                  });
              }, 300);
          </script>

      ";
				}
			}

			?>