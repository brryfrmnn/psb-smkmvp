<?php 

require '../config/koneksi.php';
			
$user_id=$_SESSION['session_id'];
$proses=$mysqli->query("SELECT file_calon_siswa_skhun_depan, file_calon_siswa_skhun_belakang, file_calon_siswa_akte, file_calon_siswa_foto FROM mvp_user, mvp_file_calon_siswa where mvp_user.user_id = mvp_file_calon_siswa.user_id and mvp_user.user_id=$user_id");
$data=$proses->fetch_object();
require_once 'tampilfileuploadview.php';
 ?>