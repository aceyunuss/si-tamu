<?php 
  error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
 include "admin/koneksi/koneksi.php"

 ?>
 <?php 

    

    $sql = $koneksi->query("select * from tb_profile ");

    $data = $sql->fetch_assoc();

    
    

  ?>   

<!DOCTYPE html>
<!-- saved from url=(0036)https://s.bootsnipp.com/iframe/dlZAN -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="robots" content="noindex, nofollow">

    <title>Si-Tamu</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="./bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style type="text/css">
    .register{
    background: -webkit-linear-gradient(left, #3c8dbc, #3c8dbc);
    margin-top: 3%;
    padding: 3%;
}
.register-left{
    text-align: center;
    color: #fff;
    margin-top: 4%;
}
.register-left input{
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    width: 60%;
    background: #f8f9fa;
    font-weight: bold;
    color: #383d41;
    margin-top: 30%;
    margin-bottom: 3%;
    cursor: pointer;
}
.register-right{
    background: #f8f9fa;
    border-top-left-radius: 10% 50%;
    border-bottom-left-radius: 10% 50%;
}
.register-left img{
    margin-top: 15%;
    margin-bottom: 5%;
    width: 25%;
    -webkit-animation: mover 2s infinite  alternate;
    animation: mover 1s infinite  alternate;
}
@-webkit-keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
@keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
.register-left p{
    font-weight: lighter;
    padding: 12%;
    margin-top: -9%;
}
.register .register-form{
    padding: 10%;
    margin-top: 10%;
}
.btnRegister{
    float: right;
    margin-top: 10%;
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    background: #0062cc;
    color: #fff;
    font-weight: 600;
    width: 50%;
    cursor: pointer;
}
.register .nav-tabs{
    margin-top: 3%;
    border: none;
    background: #0062cc;
    border-radius: 1.5rem;
    width: 28%;
    float: right;
}
.register .nav-tabs .nav-link{
    padding: 2%;
    height: 34px;
    font-weight: 600;
    color: #fff;
    border-top-right-radius: 1.5rem;
    border-bottom-right-radius: 1.5rem;
}
.register .nav-tabs .nav-link:hover{
    border: none;
}
.register .nav-tabs .nav-link.active{
    width: 100px;
    color: #0062cc;
    border: 2px solid #0062cc;
    border-top-left-radius: 1.5rem;
    border-bottom-left-radius: 1.5rem;
}
.register-heading{
    text-align: center;
    margin-top: 8%;
    margin-bottom: -15%;
    color: #495057;
}    </style>
    <script src="./jquery.min.js.download"></script>
    <script src="./bootstrap.min.js.download"></script>
    <script type="text/javascript">
        window.alert = function(){};
        var defaultCSS = document.getElementById('bootstrap-css');
        function changeCSS(css){
            if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />'); 
            else $('head > link').filter(':first').replaceWith(defaultCSS); 
        }
        $( document ).ready(function() {
          var iframe_height = parseInt($('html').height()); 
          window.parent.postMessage( iframe_height, 'https://bootsnipp.com');
        });
    </script>

    <link rel="stylesheet" type="text/css" href="sw/dist/sweetalert.css">
<script type="text/javascript" src="sw/dist/sweetalert.min.js"></script>

  <link rel="stylesheet" href="bower_components/select2/dist/css/select2.min.css">
</head>
<body>
    <div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">

                         <a href="index.php">
                        <img src="admin/images/<?php echo $data['foto'] ?>"alt="" style=" width: 150px; height: 120px;"></a>
                          <a href="index.php"><h3 style="text-decoration: none; color: white; font-size: 16px; font-weight: bold"><?php echo $data['nama_perusahaan'] ?></h3></a>
                        <h3>Selamat Datang</h3>
                       <?php

        $satu_hari        = mktime(0,0,0,date("n"),date("j"),date("Y"));
       
          function tglIndonesia($str){
             $tr   = trim($str);
             $str    = str_replace(array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'), array('Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum\'at', 'Sabtu', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'), $tr);
             return $str;
         }
            
       ?>

                <br>
               <b style="background-color:  ; color: white; float: right; font-size: 16px; font-weight: bold; padding: 10px; text-align: center; box-shadow: 5px 5px #; text-shadow: 4px 4px 4px #;" >

                <?php
                 
                  echo "<b>".tglIndonesia(date('D, d F Y', $satu_hari))."</b> ";
                  date_default_timezone_set('Asia/Jakarta');
                  echo "<br>";
                  echo "<strong  id='clock'></strong>";


                  

                ?> 

                </b>
              </a>
						
						
						
						
                        
                    </div>
                    <div class="col-md-9 register-right">

                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                           <a href="?page=spk">
                            <li class="nav-item">
                               
                            </li>
                          </a>  
                        </ul>
                        
                        <div class="tab-content" id="myTabContent">
                       
					  <form role="form" method="POST" enctype="multipart/form-data" >
					 					   
						   <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                            
                                   <h3 class="register-heading">Register Tamu</h3>

                             
                                
                                <div class="row register-form">
                                      <form role="form" method="POST" enctype="multipart/form-data" >

                  <div class="col-md-6">   
                        <div class="form-group">
                          
                            <input type="number" name="nik"  class="form-control" placeholder="Nik KTP"   required="">
                        </div>

                        <div class="form-group">
                          
                            <input type="" name="nama"  class="form-control" placeholder="Nama"   required="">
                        </div>
                    
                        <div class="form-group">
                             
                              <input type="text" name="alamat"  class="form-control" placeholder="Alamat"  required="">
                        </div>

                        <div class="form-group">
                      
                            <input type="text" name="instansi"  class="form-control" placeholder="Asal Instansi"  required="">
                        </div> 
                        <div class="form-group">
                          
                            <input type="number" name="telp"  class="form-control" placeholder="No Telpon"  required="">
                        </div> 

           



                  </div>
                  
                   <div class="col-md-6"> 

                       <div class="form-group">
                      <label>Keperluan :</label> <br>

                          <select class="form-control select2" id="unit_kerja" name="perlu"  required="">
                        
                      
                      
                            <?php
                           
                                  $query = $koneksi->query("SELECT * FROM tb_perlu ORDER BY id");
                                        
                            while ($row = $query->fetch_assoc()) {
                            ?>
                                <option value="<?php echo $row['id']; ?>">
                                    <?php echo $row['judul']; ?>
                                </option>
                            <?php
                            }
                            ?>
                    </select> 


                </div>   
                     

                      <div class="form-group">

                          <label>Bertemu Dengan :</label> <br>

                          <select class="form-control select2" id="unit_kerja" name="pegawai"  required="">
                        
                      
                      
                            <?php
                           
                                  $query = $koneksi->query("SELECT * FROM tb_pegawai2 ORDER BY nip");
                                        
                            while ($row = $query->fetch_assoc()) {
                            ?>
                                <option value="<?php echo $row['nip']; ?>">
                                      <?php echo $row['nama_peg']; ?>
                                </option>
                            <?php
                            }
                            ?>
                    </select> 


                </div>



                <div class="form-group">
                      <label>Departemen :</label> <br>

                          <select class="form-control select2" id="unit_kerja" name="departemen"  required="">
                        
                      
                      
                            <?php
                           
                                  $query = $koneksi->query("SELECT * FROM tb_departemen ORDER BY id_departemen");
                                        
                            while ($row = $query->fetch_assoc()) {
                            ?>
                                <option value="<?php echo $row['id_departemen']; ?>">
                                    <?php echo $row['nama_departemen']; ?>
                                </option>
                            <?php
                            }
                            ?>
                    </select> 


                </div>


                <div class="form-group">
                      
                        <input type="submit" name="simpan" value="Registrasi" class="btn btn-warning" >

                    </div>


                    Masuk Sebagai User? <a href="admin" style="text-decoration: none;">Login Admin</a><br>

                           


                    </div> 


                    

            
                       


      </form>
					
					   </div>



  <script type="text/javascript">
    var detik = <?php echo date('s'); ?>;
    var menit = <?php echo date('i'); ?>;
    var jam   = <?php echo date('H'); ?>;
     
    function clock()
    {
        if (detik!=0 && detik%60==0) {
            menit++;
            detik=0;
        }
        second = detik;
         
        if (menit!=0 && menit%60==0) {
            jam++;
            menit=0;
        }
        minute = menit;
         
        if (jam!=0 && jam%24==0) {
            jam=0;
        }
        hour = jam;
         
        if (detik<10){
            second='0'+detik;
        }
        if (menit<10){
            minute='0'+menit;
        }
         
        if (jam<10){
            hour='0'+jam;
        }
        waktu = hour+':'+minute+':'+second;
         
        document.getElementById("clock").innerHTML = waktu;
        detik++;
    }
 
    setInterval(clock,1000);
</script>                     


                 <script src="jquery-1.10.2.min.js"></script>
    <script src="jquery.chained.min.js"></script>
   

           <script>
              $("#pegawai").chained("#unit_kerja");
             
          </script>    


          <script src="bower_components/select2/dist/js/select2.full.min.js"></script>

          <script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, locale: { format: 'MM/DD/YYYY hh:mm A' }})
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })
  })
</script>   

</body></html>



<?php 

date_default_timezone_set('Asia/Jakarta');
$tgl=date('Y-m-d');
$jam=date("H:i:s");
    if (isset($_POST['simpan'])) {
     
    
    $nik = htmlspecialchars(strip_tags($_POST['nik']));
    $nama = htmlspecialchars(strip_tags($_POST['nama']));
    $alamat = htmlspecialchars(strip_tags($_POST['alamat']));
    $telp = htmlspecialchars(strip_tags($_POST['telp']));
    $instansi = htmlspecialchars(strip_tags($_POST['instansi']));

    $perlu = $_POST['perlu'];
    $temu = $_POST['pegawai'];
    $departemen = $_POST['departemen'];


    $sql =$koneksi->query("insert into tb_tamu (nik, nama, alamat, telp,  keperluan, tanggal, jam, ketemu,   instansi,  id_departemen)values('$nik', '$nama', '$alamat', '$telp',  '$perlu', '$tgl', '$jam', '$temu',   '$instansi',  '$departemen')");



    if ($sql) {

     

           echo "

                    <script>
                        setTimeout(function() {
                            swal({
                                title: 'Register Tamu Berhasil!',
                                text: 'Berhasil Disimpan!',
                                type: 'success'
                            }, function() {
                                window.location ='index.php';
                            });
                        }, 300);
                    </script>

            ";



            


        }
    
    


}

 ?>