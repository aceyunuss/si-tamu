<?php

	

	$koneksi->query("delete from tb_perusahaan where id_perusahaan='$_GET[id]'");

	



?>


<script>
    setTimeout(function() {
        sweetAlert({
            title: 'OKE!',
            text: 'Data Berhasil Dihapus!',
            type: 'error'
        }, function() {
            window.location = '?page=perusahaan';
        });
    }, 300);
</script>
