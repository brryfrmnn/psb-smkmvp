<?php 
if (isset($_POST['seleksi'])) {
	include_once 'config/koneksi.php';
  date_timestamp_set("Asia/Jakarta");
//proses pemindahan datacalon siswa ke data siswa
  $tahunsekarang=date('y');
	$quota= $mysqli->query("SELECT * FROM mvp_kuota order by kuota_id  desc limit 1");
    $kuota=$quota->fetch_object();
    $query = $mysqli->query("SELECT * From mvp_user, mvp_calon_siswa where mvp_user.user_id=mvp_calon_siswa.user_id and mvp_calon_siswa.nilai_un>=$kuota->passing_grade and LEFT(mvp_calon_siswa.no_formulir, 2)='$tahunsekarang' order by mvp_calon_siswa.nilai_un desc limit $kuota->kuota");
   	 $querytidakditerima=$mysqli->query("SELECT * From mvp_user, mvp_calon_siswa where mvp_user.user_id=mvp_calon_siswa.user_id and mvp_calon_siswa.nilai_un<'$kuota->passing_grade' and LEFT(mvp_calon_siswa.no_formulir, 2)='$tahunsekarang' order by mvp_calon_siswa.nilai_un desc");
       
    while ($data = $query->fetch_object()) 
   	{
   		$ubah=$mysqli->query("UPDATE mvp_calon_siswa set diterima='1' where user_id='$data->user_id'");
      $cari=$mysqli->query("SELECT user_id from mvp_siswa where user_id='$data->user_id'");
      $ketemu=$cari->num_rows;


      if ($ketemu==0) 
        {
              $proses=$mysqli->query("INSERT INTO mvp_siswa values('','$data->user_id','$data->nisn','$data->tempatlahir','$data->tanggallahir','$data->jk','$data->goldar','$data->telprumah','$data->provinsi','$data->kota','$data->kecamatan','$data->kodepos','$data->alamat','$data->status','$data->tahunkelulusan','$data->no_skhun','$data->nilai_un','$data->no_formulir','1',CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,'0')");                        
                  
        }
         
   	}
    //untuk yang tidak diterima
    while ($data = $querytidakditerima->fetch_object()) 
    {
      $cari1=$mysqli->query("SELECT user_id from mvp_siswa where user_id='$data->user_id'");
      $ketemu1=$cari->num_rows;
      if ($ketemu1==0) 
        {
              $proses1=$mysqli->query("INSERT INTO mvp_siswa values('','$data->user_id','$data->nisn','$data->tempatlahir','$data->tanggallahir','$data->jk','$data->goldar','$data->telprumah','$data->provinsi','$data->kota','$data->kecamatan','$data->kodepos','$data->alamat','$data->status','$data->tahunkelulusan','$data->no_skhun','$data->nilai_un','$data->no_formulir','0',CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,'0')");                        
                
        }
         
    }
    //akumulasi data yang sudah diterima dan tidak
      $cariditerima=$mysqli->query("SELECT mvp_user.user_id from mvp_siswa, mvp_user where mvp_siswa.diterima=1 and mvp_user.user_id=mvp_siswa.user_id and LEFT(mvp_siswa.no_formulir, 2)='$tahunsekarang'");
      $caritidakditerima=$mysqli->query("SELECT mvp_user.user_id from mvp_siswa, mvp_user where mvp_siswa.diterima=0 and mvp_user.user_id=mvp_siswa.user_id and LEFT(mvp_siswa.no_formulir, 2)='$tahunsekarang'");
      $diterima=$cariditerima->num_rows;
      $tidakditerima=$caritidakditerima->num_rows;
      $tahun=date('Y');
      //mencari laporan apakah sudah ada atau belum
      $carilaporan=$mysqli->query("SELECT laporan_tahun from mvp_laporan where laporan_tahun='$tahun' and (laporan_ket='diterima' or laporan_ket='tidakditerima')");
      $ketemulaporan=$carilaporan->num_rows;

      if ($ketemulaporan==0) 
        {
              $proseslaporanditerima=$mysqli->query("INSERT INTO mvp_laporan values('','$tahun','diterima','$diterima',CURRENT_TIMESTAMP,CURRENT_TIMESTAMP)");                        
              $proseslaporantidakditerima=$mysqli->query("INSERT INTO mvp_laporan values('','$tahun','tidakditerima','$tidakditerima',CURRENT_TIMESTAMP,CURRENT_TIMESTAMP)");                        
        }
      elseif ($ketemulaporan==2) {
            $proseslaporanditerima=$mysqli->query("UPDATE mvp_laporan set laporan_angka='$diterima' where laporan_ket='diterima'");
            $proseslaporantidakditerima=$mysqli->query("UPDATE mvp_laporan set laporan_angka='$tidakditerima' where laporan_ket='tidakditerima'");
      }



    $_SESSION['flash']['info']="Proses seleksi selesai dilakukan";
   	header("location: adminview/index.php?key=seleksi.php");

   	

}



 ?>