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
    <h2 style="text-align:center;">Laporan Surat Ijin Kerja</h2>
    <br>';


                

    $content .='
    

    <p></p>
    <table width="100%" border="1px" class="tabel" align="center">
    	
    		<tr>
    			<th>No</th>
                <th align="center">Nama <br> Perusahaan</th>
                <th align="center">Penanggung <br> Jawab</th>
                <th align="center">Jenis <br> Pekerjaan</th>
                <th align="center">Jumlah <br> Tenaga Kerja</th>
                 <th align="center">Waktu <br> Pelaksanaan</th>
                <th align="center">Potensi <br> Bahaya</th>
                
                
                <th align="center">Alat <br>Pelindung Diri</th>
                <th align="center">Daftar <br> Alat Kerja</th>
    		
               
    		</tr>';

    		
    			$tgl4 = date("d-m-Y");
    			

    			if (isset($_POST['cetak'])) {
	
				$tgl1 = $_POST['tgl1'];
				$tgl2 = $_POST['tgl2'];

				$no = 1;


				$sql = $koneksi->query("select * from tb_ijin order by id_ijin desc");
				while ($data=$sql->fetch_assoc()) {

					

					$content .='
					<tr>
		    			<td>'.$no++.' </td>
    			
    			<td> '.$data['nama_perusahaan'].' </td>
    			<td width="40"> '.$data['penanggungjawab'].' </td>
    			<td width="75"> '.$data['jenis_pekerjaan'].' </td>
    			<td width="50"> '.$data['jml_tenaga'].' </td>
    			 <td> '.date('d F Y', strtotime( $data['waktu_pelaksanaan'])).' </td>
                <td width="75"> '.$data['potensi_bahaya'].' </td>
    			
    			
    			
    			<td width="75"> '.$data['apd'].' </td>
                <td width="75"> '.$data['daftar_alat'].' </td>
		    			
		    			
		    		</tr>
		    		';
		    		

				}

						
				}else{	
    			

    		
        		$no = 1;
        		$sql = $koneksi->query("select * from tb_ijin order by id_ijin desc");
        		while ($data=$sql->fetch_assoc()) {
        		
    	
    		$content .='

    		<tr>
    			<td>'.$no++.' </td>
    			
    			<td> '.$data['nama_perusahaan'].' </td>
    			<td width="150"> '.$data['penanggungjawab'].' </td>
    			<td width="150"> '.$data['jenis_pekerjaan'].' </td>
    			<td width="100"> '.$data['jml_tenaga'].' </td>
    			 <td> '.date('d F Y', strtotime( $data['waktu_pelaksanaan'])).' </td>
                <td> '.$data['potensi_bahaya'].' </td>
    			
    			
    			
    			<td> '.$data['apd'].' </td>
                <td width="130"> '.$data['daftar_alat'].' </td>
                
    		

    		</tr>

    		';	
    		
    		}
    		}
    		
    		


$content .=' 	
    </table>

    
</page>';

    require_once('../../assets/html2pdf/html2pdf.class.php');
    $html2pdf = new HTML2PDF('L','LEGAL','fr');
    $html2pdf->WriteHTML($content);
    $html2pdf->Output('exemple.pdf');
?>