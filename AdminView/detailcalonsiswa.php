<?php
//include '../config/koneksi.php';

			//$proses=$mysqli->query("SELECT * FROM mvp_user, mvp_calon_siswa WHERE mvp_calon_siswa.user_id = mvp_user.user_id and mvp_calon_siswa.user_id= $this->user_id");
			require '../config/koneksi.php';
			
			$user_id=$_GET['user_id'];
			$proses=$mysqli->query("SELECT * FROM mvp_user, mvp_calon_siswa, mvp_asal_sekolah, mvp_orangtua where mvp_calon_siswa.user_id = mvp_user.user_id and mvp_user.user_id='$user_id' and mvp_orangtua.user_id=mvp_user.user_id and mvp_asal_sekolah.user_id=mvp_user.user_id");

			$data=$proses->fetch_object();
			$ai=1;
			$ais=1;
			$aia=1;
			$aii=1;
			$selected="";
			$provinsi=$mysqli->query("SELECT provinsi_id, provinsi_nama FROM mvp_provinsi order by provinsi_nama asc");
			while ($dataprov=$provinsi->fetch_object()) {
	 			if ($data->provinsi==$dataprov->provinsi_id) {
	 				$selected='selected';
	 			}else
	 			{
	 				$selected='';
	 			}
				 $prov[$ai]= "<option $selected value='$dataprov->provinsi_id'>$dataprov->provinsi_nama</option>";
				 $ai++;
			  }

			  $provinsisekolah=$mysqli->query("SELECT provinsi_id, provinsi_nama FROM mvp_provinsi order by provinsi_nama asc");
			while ($dataprovsekolah=$provinsisekolah->fetch_object()) {
	 			if ($data->provinsisekolah==$dataprovsekolah->provinsi_id) {
	 				$selected='selected';
	 			}else
	 			{
	 				$selected='';
	 			}
				 $provsekolah[$ais]= "<option $selected value='$dataprovsekolah->provinsi_id'>$dataprovsekolah->provinsi_nama</option>";
				 $ais++;
			  }

			  $provinsiayah=$mysqli->query("SELECT provinsi_id, provinsi_nama FROM mvp_provinsi order by provinsi_nama asc");
			while ($dataprovayah=$provinsiayah->fetch_object()) {
	 			if ($data->provinsiayah==$dataprovayah->provinsi_id) {
	 				$selected='selected';
	 			}else
	 			{
	 				$selected='';
	 			}
				 $provayah[$aia]= "<option $selected value='$dataprovayah->provinsi_id'>$dataprovayah->provinsi_nama</option>";
				 $aia++;
			  }
			  $provinsiibu=$mysqli->query("SELECT provinsi_id, provinsi_nama FROM mvp_provinsi order by provinsi_nama asc");
			  while ($dataprovibu=$provinsiibu->fetch_object()) {
	 			if ($data->provinsiibu==$dataprovibu->provinsi_id) {
	 				$selected='selected';
	 			}else
	 			{
	 				$selected='';
	 			}
				 $provibu[$aii]= "<option $selected value='$dataprovibu->provinsi_id'>$dataprovibu->provinsi_nama</option>";
				 $aii++;
			  }
			

			include '../adminview/calonsiswaview.php';
