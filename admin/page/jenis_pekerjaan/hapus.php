<?php

	

	$koneksi->query("delete from tb_jenis_pekerjaan where id_jenis_pekerjaan='$_GET[id]'");

	



?>


<script>
    setTimeout(function() {
        sweetAlert({
            title: 'OKE!',
            text: 'Data Berhasil Dihapus!',
            type: 'error'
        }, function() {
            window.location = '?page=jenis_pekerjaan';
        });
    }, 300);
</script>
