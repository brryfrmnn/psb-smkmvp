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
			$telrumahayah = addslashes($_POST['telprumahayah']);
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
			$telrumahibu = addslashes($_POST['telprumahibu']);
			$hpibu = addslashes($_POST['hpibu']);
			$noskhun=$_POST['noskhun'];
			$nilaiun=$_POST['nilaiun'];
			
			$username=$_POST['username'];
			$namadepan=$_POST['namadepan'];
			$namabelakang=$_POST['namabelakang'];
			$email=$_POST['email'];
			$telepon=$_POST['hp'];

			include_once 'config/koneksi.php';

			$query=$mysqli->prepare("UPDATE mvp_user set  nama_depan=?, nama_belakang=?, email=?, telepon=? where user_id='$user_id'");		
			$proses=$mysqli->prepare("UPDATE mvp_calon_siswa set nisn=?, tempatlahir=?, tanggallahir=?, jk=?, goldar=?, telprumah=?, provinsi=?, kota=? , kecamatan=?, kodepos=?, alamat=?, status=?, tahunkelulusan=?,no_skhun=?,nilai_un=? where user_id='$user_id'");
			$proses2=$mysqli->prepare("UPDATE mvp_asal_sekolah set asalsekolah=?, provinsisekolah=?, kotakabsekolah=? where user_id='$user_id'");
			$proses3=$mysqli->prepare("UPDATE mvp_orangtua set namaayah=?, pendidikanayah=?, pekerjaanayah=?, instansi=?, penghasilanayah=?, alamatayah=?, provinsiayah=?, kotaayah=?, kecamatanayah=?, kodeposayah=?, rtayah=?, rwayah=?, telprumahayah=?, hpayah=?, namaibu=?, pendidikanibu=?, pekerjaanibu=?, penghasilanibu=?, alamatibu=?, provinsiibu=?, kotaibu=?, kecamatanibu=?, kodeposibu=?, rtibu=?, rwibu=?, telprumahibu=?, hpibu=? where user_id='$user_id'");
			
			if ($proses && $query && $proses2 && $proses3) {
					$query->bind_param("ssss",  $namadepan, $namabelakang, $email, $telepon);
					$proses->bind_param("ssssssissssissd", $nisn,$tempatlahir,$tanggallahir,$jk,$goldar,$telprumah,$provinsi,$kota,$kecamatan,$kodepos,$alamat,$status,$tahunkelulusan,$noskhun,$nilaiun);
					$proses2->bind_param("sis",$asalsekolah,$provinsisekolah,$kotakabsekolah);
					$proses3->bind_param("ssssssisssiisssssssisssiiss",$namaayah,$pendidikanayah,$pekerjaanayah,$instansi,$penghasilanayah,$alamatayah,$provinsiayah,$kotaayah,$kecamatanayah,$kodeposayah,$rtayah,$rwayah,$telrumahayah,$hpayah,$namaibu,$pendidikanibu,$pekerjaanibu,$penghasilanibu,$alamatibu,$provinsiibu,$kotaibu,$kecamatanibu,$kodeposibu,$rtibu,$rwibu,$telrumahibu,$hpibu);
					$query->execute();					 
					$proses->execute();
					$proses2->execute();
					$proses3->execute();
					echo "<script>alert('Berhasil'); document.location='adminview/index.php?key=datasiswa'</script>";
				}
			else
				{
					echo $mysqli->error;

				}

			$proses=$mysqli->close();

 ?>