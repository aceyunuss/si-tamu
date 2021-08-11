<?php


$id = $_GET['id'];

$sql = $koneksi->query("select * from tb_ijin where id_ijin='$id'");

$data = $sql->fetch_assoc();

$checked = explode(', ', $data['potensi_bahaya']);
$checked2 = explode(', ', $data['apd']);
$checked3 = explode(', ', $data['daftar_alat']);


$p = $koneksi->query("select * from tb_perusahaan");
$j = $koneksi->query("select * from tb_jenis_pekerjaan");
while ($pdata = $p->fetch_assoc()) {
	$plist[] = $pdata;
}
while ($jdata = $j->fetch_assoc()) {
	$jlist[] = $jdata;
}

?>

<div class="panel panel-primary">
	<div class="panel-heading">
		Ubah Surat Ijin Kerja
	</div>
	<div class="panel-body">
		<div class="row">
			<div class="col-md-12">

				<form method="POST" enctype="multipart/form-data">

					<!-- <div class="form-group">
						<label>Nama Perusahaan</label>
						<input type="text" class="form-control" name="nama_perusahaan" value="<?php echo $data['nama_perusahaan'] ?>" />

					</div> -->
					<div class="form-group">
						<label> Nama Perusahaan</label>
						<select name="perusahaan" class="form-control">
							<option value="">-- Pilih --</option>
							<?php foreach ($plist as $k => $v) { ?>
								<option <?= $v['id_perusahaan'] == $data['id_perusahaan'] ? "selected" : "" ?> value="<?= $v['id_perusahaan'] ?>"><?= $v['nama_perusahaan'] ?></option>
							<?php } ?>
						</select>
					</div>

					<div class="form-group">
						<label>Penanggung Jawab </label>
						<input type="text" class="form-control" name="penanggungjawab" value="<?php echo $data['penanggungjawab'] ?>" />

					</div>

					<!-- <div class="form-group">
						<label>Jenis Pekerjaan </label>
						<input type="text" class="form-control" name="jenis_pekerjaan" value="<?php echo $data['jenis_pekerjaan'] ?>" />

					</div> -->


					<div class="form-group">
						<label>Jenis Pekerjaan</label>
						<select name="jenis_pekerjaan" class="form-control">
							<option value="">-- Pilih --</option>
							<?php foreach ($jlist as $k => $v) { ?>
								<option <?= $v['id_jenis_pekerjaan'] == $data['id_jenis_pekerjaan'] ? "selected" : "" ?> value="<?= $v['id_jenis_pekerjaan'] ?>"><?= $v['nama_jenis_pekerjaan'] ?></option>
							<?php } ?>
						</select>
					</div>

					<div class="form-group">
						<label>Jumlah Tenaga Kerja </label>
						<input type="number" class="form-control" name="jml_tenaga" value="<?php echo $data['jml_tenaga'] ?>" />

					</div>

					<div class="form-group">

						<label>Waktu Pelaksanaan </label>
						<input type="date" class="form-control" name="waktu_pelaksanaan" value="<?php echo $data['waktu_pelaksanaan'] ?>" />

					</div>

					<div class="form-group">
						<label>Potensi Bahaya</label><br>
						<label>
							<input type="checkbox" class="minimal" name='potensi[]' value="Gas Beracun" <?php in_array('Gas Beracun', $checked) ? print "checked" : ""; ?>> Gas Beracun
						</label>

						<label>
							<input type="checkbox" class="minimal" name='potensi[]' value="Ledakan" <?php in_array('Ledakan', $checked) ? print "checked" : ""; ?>> Ledakan
						</label>
						<label>
							<input type="checkbox" class="minimal" name='potensi[]' value="Mudah Terbakar" <?php in_array('Mudah Terbakar', $checked) ? print "checked" : ""; ?>> Mudah Terbakar
						</label>
						<label>
							<input type="checkbox" class="minimal" name='potensi[]' value="Ketinggian" <?php in_array('Ketinggian', $checked) ? print "checked" : ""; ?>> Ketinggian
						</label>

					</div>


					<div class="form-group">
						<label>Alat Pelindung Diri</label><br>
						<label>
							<input type="checkbox" class="minimal" name='apd[]' value="Face Shield" <?php in_array('Face Shield', $checked2) ? print "checked" : ""; ?>> Face Shield
						</label>

						<label>
							<input type="checkbox" class="minimal" name='apd[]' value="Safety Helmet" <?php in_array('Safety Helmet', $checked2) ? print "checked" : ""; ?>> Safety Helmet
						</label>
						<label>
							<input type="checkbox" class="minimal" name='apd[]' value="Respirator" <?php in_array('Respirator', $checked2) ? print "checked" : ""; ?>> Respirator
						</label>
						<label>
							<input type="checkbox" class="minimal" name='apd[]' value="Safety Body Harness" <?php in_array('Safety Body Harness', $checked2) ? print "checked" : ""; ?>> Safety Body Harness
						</label>

					</div>

					<div class="form-group">
						<label>Daftar Alat Kerja</label><br>
						<label>
							<input type="checkbox" class="minimal" name='alat_kerja[]' value="Tangga" <?php in_array('Tangga', $checked3) ? print "checked" : ""; ?>> Tangga
						</label>

						<label>
							<input type="checkbox" class="minimal" name='alat_kerja[]' value="Air Compressor" <?php in_array('Air Compressor', $checked3) ? print "checked" : ""; ?>> Air Compressor
						</label>
						<label>
							<input type="checkbox" class="minimal" name='alat_kerja[]' value="Welding Set" <?php in_array('Welding Set', $checked3) ? print "checked" : ""; ?>> Welding Set
						</label>
						<label>
							<input type="checkbox" class="minimal" name='alat_kerja[]' value="Stager" <?php in_array('Stager', $checked3) ? print "checked" : ""; ?>> Stager
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


				$getp = $koneksi->query("select * from tb_perusahaan where id_perusahaan=$id_perusahaan");
				$pp = $getp->fetch_assoc();
				$idp = $pp['id_perusahaan'];
				$nmp = $pp['nama_perusahaan'];

				$getj = $koneksi->query("select * from tb_jenis_pekerjaan where id_jenis_pekerjaan=$id_jenis_pekerjaan");
				$jp = $getj->fetch_assoc();
				$idj = $jp['id_jenis_pekerjaan'];
				$nmj = $jp['nama_jenis_pekerjaan'];

				$sql = $koneksi->query("update  tb_ijin set id_perusahaan=$idp, nama_perusahaan='$nmp', penanggungjawab='$penanggungjawab', id_jenis_pekerjaan=$idj, jenis_pekerjaan='$nmj',  jml_tenaga='$jml_tenaga', waktu_pelaksanaan='$waktu_pelaksanaan', potensi_bahaya='$potensi', apd='$apd', daftar_alat='$alat_kerja' where id_ijin='$id'");


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