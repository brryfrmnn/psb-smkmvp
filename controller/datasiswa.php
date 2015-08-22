<?php 	
			$user_id=$_SESSION['session_id'];

			$nisn=addslashes($_POST['nisn']);
			$tempatlahir=addslashes($_POST['tempatlahir']);
			$tanggallahir=addslashes($_POST['tgllahir']);
			$jk=addslashes($_POST['jk']);
			$goldar=addslashes($_POST['goldar']);
			$telprumah=addslashes($_POST['telprumah']);
		
			$provinsi = addslashes($_POST['provinsi']);
			$kota = addslashes($_POST['kota']);
			$kecamatan = addslashes($_POST['kecamatan']);
			$kodepos = addslashes($_POST['kodepos']);
			$alamat = addslashes($_POST['alamat']);
			$status = addslashes($_POST['status']);
			//sekolah
			$asalsekolah = addslashes($_POST['asalsekolah']);
			$provinsisekolah = addslashes($_POST['provinsisekolah']);
			$kotakabsekolah = addslashes($_POST['kotakabsekolah']);
			$tahunkelulusan = addslashes($_POST['tahunkelulusan']);
			//ayah
			$namaayah = addslashes($_POST['namaayah']);
			$pendidikanayah = addslashes($_POST['pendidikanayah']);
			$pekerjaanayah = addslashes($_POST['pekerjaanayah']);
			$instansi = addslashes($_POST['instansi']);
			$penghasilanayah = addslashes($_POST['penghasilanayah']);
			$alamatayah = addslashes($_POST['alamatayah']);
			$provinsiayah = addslashes($_POST['provinsiayah']);
			$kotaayah = addslashes($_POST['kotaayah']);
			$kecamatanayah = addslashes($_POST['kecamatanayah']);
			$kodeposayah = addslashes($_POST['kodeposayah']);
			$rtayah = addslashes($_POST['rtayah']);
			$rwayah = addslashes($_POST['rwayah']);
			$telprumahayah = addslashes($_POST['telprumahayah']);
			$hpayah = addslashes($_POST['hpayah']);
			//ibu
			$namaibu = addslashes($_POST['namaibu']);
			$pendidikanibu = addslashes($_POST['pendidikanibu']);
			$pekerjaanibu = addslashes($_POST['pekerjaanibu']);
			$penghasilanibu = addslashes($_POST['penghasilanibu']);
			$alamatibu = addslashes($_POST['alamatibu']);
			$provinsiibu = addslashes($_POST['provinsiibu']);
			$kotaibu = addslashes($_POST['kotaibu']);
			$kecamatanibu = addslashes($_POST['kecamatanibu']);
			$kodeposibu = addslashes($_POST['kodeposibu']);
			$rtibu = addslashes($_POST['rtibu']);
			$rwibu = addslashes($_POST['rwibu']);
			$telprumahibu = addslashes($_POST['telprumahibu']);
			$hpibu = addslashes($_POST['hpibu']);
			date_default_timezone_set("Asia/Jakarta");
			$created_at = date("Y-m-d h:i:s");
			$noskhun=$_POST['noskhun'];
			$nilaiun=$_POST['nilaiun'];

			include_once 'config/koneksi.php';
			$cari=$mysqli->query("SELECT no_formulir from mvp_calon_siswa ORDER BY no_formulir DESC LIMIT 1 ");
			if($cari->num_rows==0){
				date_default_timezone_set("Asia/Jakarta");
				$tahun = date('y');
				 $noform=str_pad(1, 3,"0", STR_PAD_LEFT);
					$hasilnoform=$tahun.$noform;
				
			}
			else
			{
				$noform = $cari->fetch_object();
				$noform = $noform->no_formulir;
				date_default_timezone_set("Asia/Jakarta");
				 $tahunnoform= substr($noform, 0, 2);
				$tahun = date('y');

				if ($tahunnoform==$tahun) 
				{
					$noform = (int)substr($noform, 2,3) + 1;
					$noform=str_pad($noform, 3,"0", STR_PAD_LEFT);
					 $hasilnoform = $tahunnoform. $noform;
					

				}
				else
				{
					$noform=str_pad(1, 3,"0", STR_PAD_LEFT);
					$hasilnoform=$tahun.$noform;
				}
				 
			}


			

			//$bind="issssssissssisissssssssisssiisssssssisssiissss";
			//$var="$user_id,$nisn,$tempatlahir,$tanggallahir,$jk,$goldar,$telprumah,$provinsi,$kota,$kecamatan,$kodepos,$alamat,$status,$asalsekolah,$provinsisekolah,$kotakabsekolah,$tahunkelulusan,$namaayah,$pendidikanayah,$pekerjaanayah,$instansi,$penghasilanayah,$alamatayah,$provinsiayah,$kotaayah,$kecamatanayah,$kodeposayah,$rtayah,$rwayah,$telprumahayah,$hpayah,$namaibu,$pendidikanibu,$pekerjaanibu,$penghasilanibu,$alamatibu,$provinsiibu,$kotaibu,$kecamatanibu,$kodeposibu,$rtibu,$rwibu,$telprumahibu,$hpibu,$created_at,$created_at";
			
			if($proses = $mysqli->prepare("INSERT INTO mvp_calon_siswa values ('',?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,'$hasilnoform','0',CURRENT_TIMESTAMP,CURRENT_TIMESTAMP)"))
			{
			//insert data calon siswa
				$proses->bind_param("issssssissssissd", $user_id,$nisn,$tempatlahir,$tanggallahir,$jk,$goldar,$telprumah,$provinsi,$kota,$kecamatan,$kodepos,$alamat,$status,$tahunkelulusan,$noskhun,$nilaiun);
				$proses->execute();
				

					if ($proses2=$mysqli->prepare("INSERT INTO mvp_asal_sekolah values('',?,?,?,?,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP)")) 
					{
						//data sekolah
						$proses2->bind_param("isis", $user_id,$asalsekolah, $provinsisekolah, $kotakabsekolah );
						$proses2->execute();
						if ($proses3=$mysqli->prepare("INSERT INTO mvp_orangtua values('',?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP)")) 
						{
							//data orangtua
							$proses3->bind_param("issssssisssiisssssssisssiiss",$user_id, $namaayah,$pendidikanayah,$pekerjaanayah,$instansi,$penghasilanayah,$alamatayah,$provinsiayah,$kotaayah,$kecamatanayah,$kodeposayah,$rtayah,$rwayah,$telprumahayah,$hpayah,$namaibu,$pendidikanibu,$pekerjaanibu,$penghasilanibu,$alamatibu,$provinsiibu,$kotaibu,$kecamatanibu,$kodeposibu,$rtibu,$rwibu,$telprumahibu,$hpibu );
							$proses3->execute();
							echo "<script>alert('Berhasil'); document.location='adminview/index.php'</script>";

						}
						else
						{
							echo $mysqli->error;
						}		

					}
					else
					{
						echo $mysqli->error;
					}		
				
			}
			else
				{
					echo $mysqli->error;

				}

			
			


				
			


 ?>