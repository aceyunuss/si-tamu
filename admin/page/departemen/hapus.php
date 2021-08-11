<?php

	

	$koneksi->query("delete from tb_departemen where id_departemen='$_GET[id]'");

	



?>


<script>
    setTimeout(function() {
        sweetAlert({
            title: 'OKE!',
            text: 'Data Berhasil Dihapus!',
            type: 'error'
        }, function() {
            window.location = '?page=departemen';
        });
    }, 300);
</script>
