<?php

   

    $koneksi->query("delete from tb_tamu where id_tamu='$_GET[id]'");





?>
  <script>
      setTimeout(function() {
          sweetAlert({
              title: 'OKE!',
              text: 'Data Berhasil Dihapus!',
              type: 'error'
          }, function() {
              window.location = '?page=keperluan';
          });
      }, 300);
  </script>


<?php

?>
