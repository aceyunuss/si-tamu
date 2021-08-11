<?php

   

    $koneksi->query("delete from tb_ijin where id_ijin='$_GET[id]'");





?>
  <script>
      setTimeout(function() {
          sweetAlert({
              title: 'OKE!',
              text: 'Data Berhasil Dihapus!',
              type: 'error'
          }, function() {
              window.location = '?page=ijin';
          });
      }, 300);
  </script>


<?php

?>
