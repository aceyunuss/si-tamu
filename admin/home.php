<!-- Content Wrapper. Contains page content -->

  <marquee>Selamat Datang di Visitor Management </marquee>			
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <?php 

    if(@$_SESSION['sekretaris'] || $_SESSION['security']){

    	$sql_t = $koneksi->query("select * from tb_tamu");
    	$data = $sql_t->num_rows;

     }else{
      $sql_t = $koneksi->query("select * from tb_tamu where id_unit_kerja='$unit_kerja'");
      $data = $sql_t->num_rows;
     } 



      if(@$_SESSION['sekretaris'] || $_SESSION['security']){

    	$tgl= date("Y-m-d");
    	$sql_tm = $koneksi->query("select * from tb_tamu where tanggal='$tgl'");
    	$data_h = $sql_tm->num_rows;

    }else{

      $tgl= date("Y-m-d");
      $sql_tm = $koneksi->query("select * from tb_tamu where tanggal='$tgl' and id_unit_kerja='$unit_kerja'");
      $data_h = $sql_tm->num_rows;

    }

     if(@$_SESSION['sekretaris']){

    	$sql_p = $koneksi->query("select * from tb_pegawai2");
    	$data_p = $sql_p->num_rows;

    }else{
        $sql_p = $koneksi->query("select * from tb_pegawai2 where id_u_kerja='$unit_kerja'");
      $data_p = $sql_p->num_rows;
    }

    	$sql_u = $koneksi->query("select * from tb_perlu where id=12");
    	$data_u = $sql_u->num_rows;


     ?>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
        

      <div class="row">
 <?php if(@$_SESSION['sekretaris'] || $_SESSION['security']){ ?>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $data; ?></h3>

              <p>Total Tamu</p>
            </div>
            <div class="icon">
              <i class="ion-social-vimeo"></i>
            </div>
            <a href="?page=d_tamu" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>




        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo $data_h; ?></h3>

              <p>Tamu Hari Ini</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="?page=tamu_hari_ini" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

      <?php } ?>

       <?php if(@$_SESSION['sekretaris'] ){ ?>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo $data_p; ?></h3>

              <p>Pegawai</p>
            </div>
            <div class="icon">
              <i class="ion-ios-people"></i>
            </div>
            <a href="?page=pegawai" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

      <?php } ?>
        <!-- ./col -->

        <?php   if(@$_SESSION['sekretaris'] || $_SESSION['K3 & HSE Dept']){ ?>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo $data_u; ?></h3>

              <p>Keperluan Kerja Beresiko</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="?page=keperluan&aksi=resiko" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>

    <?php } ?>

      




      </section>


