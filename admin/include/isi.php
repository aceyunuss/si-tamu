<?php

    $page = $_GET['page'];
    $aksi = $_GET['aksi'];

    if ($page == "pengguna") {
      if ($aksi == "") {
        include "page/pengguna/pengguna.php";
      }
      if ($aksi == "tambah") {
        include "page/pengguna/tambah.php";
      }
      if ($aksi == "ubah") {
        include "page/pengguna/ubah.php";
      }
      if ($aksi == "hapus") {
        include "page/pengguna/hapus.php";
      }
    }

    if ($page == "ijin") {
      if ($aksi == "") {
        include "page/ijin/ijin.php";
      }
      if ($aksi == "tambah") {
        include "page/ijin/tambah.php";
      }
      if ($aksi == "ubah") {
        include "page/ijin/ubah.php";
      }
      if ($aksi == "hapus") {
        include "page/ijin/hapus.php";
      }
    }



    if ($page == "perusahaan") {
      if ($aksi == "") {
        include "page/perusahaan/perusahaan.php";
      }
      if ($aksi == "tambah") {
        include "page/perusahaan/tambah.php";
      }
      if ($aksi == "ubah") {
        include "page/perusahaan/ubah.php";
      }
      if ($aksi == "hapus") {
        include "page/perusahaan/hapus.php";
      }
    }


    if ($page == "jenis_pekerjaan") {
      if ($aksi == "") {
        include "page/jenis_pekerjaan/jenis_pekerjaan.php";
      }
      if ($aksi == "tambah") {
        include "page/jenis_pekerjaan/tambah.php";
      }
      if ($aksi == "ubah") {
        include "page/jenis_pekerjaan/ubah.php";
      }
      if ($aksi == "hapus") {
        include "page/jenis_pekerjaan/hapus.php";
      }
    }



   

    if ($page == "laporan") {
      if ($aksi == "") {
        include "page/laporan/laporan.php";
      }
      
      
    }


    if ($page == "tamu_hari_ini") {
      if ($aksi == "") {
        include "page/tamu/tamu_hari_ini.php";
      }
      
      
    }

    if ($page == "tamu_peg") {
      if ($aksi == "") {
        include "page/tamu_peg/tamu_peg.php";
      }

      if ($aksi == "hapus") {
        include "page/tamu_peg/hapus.php";
      }

       if ($aksi == "keluar") {
        include "page/tamu_peg/keluar.php";
      }
      
      
    }

     

    

    

    
    
    

    if ($page == "pegawai") {
      if ($aksi == "") {
        include "page/pegawai/pegawai.php";
      }
      if ($aksi == "tambah") {
        include "page/pegawai/tambah.php";
      }
      if ($aksi == "ubah") {
        include "page/pegawai/ubah.php";
      }
      if ($aksi == "hapus") {
        include "page/pegawai/hapus.php";
      }
    }

    if ($page == "perlu") {
      if ($aksi == "") {
        include "page/perlu/perlu.php";
      }
      if ($aksi == "tambah") {
        include "page/perlu/tambah.php";
      }
      if ($aksi == "ubah") {
        include "page/perlu/ubah.php";
      }
      if ($aksi == "hapus") {
        include "page/perlu/hapus.php";
      }
    }

    if ($page == "keperluan") {
      if ($aksi == "") {
        include "page/keperluan/keperluan.php";
      }
      
      if ($aksi == "ubah") {
        include "page/keperluan/ubah.php";
      }
      if ($aksi == "hapus") {
        include "page/keperluan/hapus.php";
      }

       if ($aksi == "resiko") {
        include "page/keperluan/resiko.php";
      }
    }

    if ($page == "departemen") {
      if ($aksi == "") {
        include "page/departemen/departemen.php";
      }
      if ($aksi == "tambah") {
        include "page/departemen/tambah.php";
      }
      if ($aksi == "ubah") {
        include "page/departemen/ubah.php";
      }
      if ($aksi == "hapus") {
        include "page/departemen/hapus.php";
      }
    }

    

    if ($page == "tamu") {
      if ($aksi == "") {
        include "page/tamu/capture.php";
      }
      if ($aksi == "tambah") {
        include "page/tamu/tambah.php";
      }
      if ($aksi == "ubah") {
        include "page/tamu/ubah.php";
      }
      if ($aksi == "hapus") {
        include "page/tamu/hapus.php";
      }

    }

    if ($page == "d_tamu") {
      if ($aksi == "") {
        include "page/tamu/d_tamu.php";
      }
      if ($aksi == "detail") {
        include "page/tamu/detail.php";
      }
      if ($aksi == "ubah") {
        include "page/tamu/ubah.php";
      }
      if ($aksi == "hapus") {
        include "page/tamu/hapus.php";
      }

      if ($aksi == "keluar") {
        include "page/tamu/keluar.php";
      }

      if ($aksi == "upload") {
        include "upload.php";
      }

    }

    if ($page == profile) {
      if ($aksi == "") {
      include "page/profile/profile.php";
      }
    }

     if ($page == "") {
      include "home.php";
    }


 ?>
