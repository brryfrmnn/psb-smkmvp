<?php 
include_once 'config/koneksi.php';
$cari=$mysqli->query("SELECT calon_siswa_no_formulir from mvp_calon_siswa ORDER BY calon_siswa_no_formulir DESC LIMIT 1 ");
			if($cari->num_rows==0){
				echo "ada";
			}
			else
			{
				$noform = $cari->fetch_object();
				$noform = $noform->calon_siswa_no_formulir;
				date_default_timezone_set("Asia/Jakarta");
				 $tahunnoform= substr($noform, 0, 2);
				$tahun = date('y');
				if ($tahunnoform==$tahun) 
				{
					$noform = (int)substr($noform, 2,3) + 1;
					$noform=str_pad($noform, 3,"0", STR_PAD_LEFT);
					$result = $tahunnoform. $noform;
				}
				else
				{
					$noform=str_pad(1, 3,"0", STR_PAD_LEFT);
					$result=$tahun.$noform;
				}
				echo $result;

				 
			}


 ?>