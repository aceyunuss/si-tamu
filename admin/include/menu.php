<?php 

    $sql2 = $koneksi->query("select * from tb_profile ");

    $data1 = $sql2->fetch_assoc();

 ?>


<div class="user-panel">
  <div>
  <img style="margin-left:30px" src="images/<?php echo $data1['foto'] ?>" width="140" height="120" >
      <h5 style="color:white; font-size: 16px; text-align: center; "><?php echo $data1['nama_perusahaan'] ?></h5>
      
  </div>
  <div class="pull-left info">


  </div>
</div>
<!-- search form -->
<!-- /.search form -->
<!-- sidebar menu: : style can be found in sidebar.less -->
<ul class="sidebar-menu" data-widget="tree">
  <li class="header">MAIN NAVIGATION</li>

  <?php 

    $page = $_GET['page'];
    

    if ($page=="pegawai") {
      $masteraktif="active";
      $pegawaiaktif="active";
    }

    if ($page=="perlu") {
      $masteraktif="active";
      $keperluan="active";
    }

    if ($page=="departemen") {
      $masteraktif="active";
      $departemen="active";
    }

    if ($page=="d_tamu") {
      $tamuaktif="active";
      $d_tamuaktif="active";
    }

    if ($page=="tamu_peg") {
      $tamuaktif="active";
      $tamu_pegaktif="active";
    }




 ?>


<?php if(@$_SESSION['sekretaris']){
 ?>
< <li><a href="index.php"><i class="fa fa-dashboard"></i> <span>Home</span></a></li>

 <li><a href="?page=profile"><i class="fa fa-gear"></i> Setting</a></li>




<li class="treeview <?php echo $masteraktif ?>">
          <a href="#">
            <i class="fa fa-table"></i> <span>Data Master</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            
             
             <li class="<?php echo $pegawaiaktif ?>"><a href="?page=pegawai"><i class="fa fa-circle-o"></i>Pegawai</a></li>
              <li class="<?php echo $keperluan ?>"><a href="?page=perlu"><i class="fa fa-circle-o"></i>Keperluan</a></li>
              <li class="<?php echo $departemen ?>"><a href="?page=departemen"><i class="fa fa-circle-o"></i>Departemen</a></li>
          </ul>
        </li>
        <li>


      <?php } ?>    

<?php 
if(@$_SESSION['sekretaris'] || $_SESSION['security'] || $_SESSION['K3 & HSE Dept'] ){
 ?>

             <li class="<?php echo $d_tamuaktif ?>"><a href="?page=d_tamu"><i class="fa fa-viacoin"></i> Data Tamu </a></li>


      <?php } ?>       

          
            
       

 
  

<?php 
if(@$_SESSION['sekretaris']  || $_SESSION['K3 & HSE Dept'] || $_SESSION['security'] ){
 ?> 

<li><a href="?page=keperluan"><i class="fa fa-table"></i> Data Keperluan</a></li>

<?php } ?>

<?php 
if( $_SESSION['K3 & HSE Dept']  ){
 ?> 

<li><a href="?page=ijin"><i class="fa fa-table"></i> Surat Ijin Kerja</a></li>

<?php } ?>

<?php if(@$_SESSION['sekretaris']){
 ?> 

<li><a href="?page=laporan"><i class="fa fa-print"></i> Laporan Kunjungan</a></li>

  
  

  <li><a href="?page=pengguna"><i class="fa fa-user"></i> <span>Data Pengguna </span></a></li>

<?php } ?>

<li><a href="logout.php"><i class="fa fa-sign-out"></i>Logout</a></li>


</ul>
