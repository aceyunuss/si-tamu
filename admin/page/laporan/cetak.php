<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
include "../../koneksi/koneksi.php";

$content ='

<style type="text/css">
	
	.tabel{border-collapse: collapse;}
	.tabel th{padding: 8px 5px;  background-color:  #cccccc;  }
	.tabel td{padding: 8px 5px;     }
</style>


';

    function tglIndonesia2($str){
             $tr   = trim($str);
             $str    = str_replace(array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'), array('Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum\'at', 'Sabtu', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'), $tr);
             return $str;
         }

    if (isset($_POST['cetak'])) {
    
                $tgl1 = $_POST['tgl1'];
                $tgl2 = $_POST['tgl2'];

            }


    $content .= '
<page>
    <h2 style="text-align:center;">Laporan Kunjungan <br> Tanggal '.tglIndonesia2(date('d F Y', strtotime($tgl1))).' s/d '.tglIndonesia2(date('d F Y', strtotime($tgl2))).'</h2>
    <br>';


                

    $content .='
    

    <p></p>
    <table width="100%" border="1px" class="tabel" align="center">
    	
    		<tr>
    			<th>No</th>
                <th>Tanggal</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Instansi</th>
                <th>Jam Masuk</th>
                <th>Jam Keluar</th>
                <th>Keperluan</th>
                 <th>Pegawai Ditemui</th>
                <th>Departemen</th>
               
    		
               
    		</tr>';

    		
    			$tgl4 = date("d-m-Y");
    			

    			if (isset($_POST['cetak'])) {
	
				$tgl1 = $_POST['tgl1'];
				$tgl2 = $_POST['tgl2'];

				}

				$no = 1;


				$sql = $koneksi->query("select * from tb_tamu, tb_perlu, tb_pegawai2, tb_departemen where 
                                            tb_tamu.keperluan=tb_perlu.id
                                            and tb_tamu.ketemu=tb_pegawai2.nip
                                            and tb_tamu.id_departemen=tb_departemen.id_departemen
                                               and tanggal between '$tgl1' and '$tgl2' order by id_tamu desc ");
				while ($data=$sql->fetch_assoc()) {

					 $jk = ($data['jk']==L)?"Laki-laki":"Wanita";  

					$content .='
					<tr>
		    			<td>'.$no++.' </td>
		    			<td> '.date('d F Y', strtotime( $data['tanggal'])).' </td>
		    			<td width="150"> '.$data['nama'].' </td>
		    			<td width="150"> '.$data['alamat'].' </td>
		    			<td width="100"> '.$data['instansi'].' </td>
		    			<td> '.$data['jam'].' </td>
		    			<td> '.$data['jam_keluar'].' </td>
		    			<td width="130"> '.$data['judul'].' </td>
                        <td> '.$data['nama_peg'].' </td>
	
		    			<td> '.$data['nama_departemen'].' </td>
                        
                        
		    			
		    			
		    		</tr>
		    		';
		    		

				

						
				
    		}
    		
    		


$content .=' 	
    </table>

    
</page>';

    require_once('../../assets/html2pdf/html2pdf.class.php');
    $html2pdf = new HTML2PDF('L','LEGAL','fr');
    $html2pdf->WriteHTML($content);
    $html2pdf->Output('laporan.pdf');
?>