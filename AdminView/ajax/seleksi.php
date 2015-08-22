<?php 
if( isset( $_SERVER['HTTP_X_REQUESTED_WITH'] ) && ( $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest' ) )
{
    session_start();
    #$kelas=$_SESSION['id_kelasjurusan'];

    include_once '../../config/koneksi.php';
    $quota= $mysqli->query("SELECT * FROM mvp_kuota order by kuota_id  desc limit 1");
    $kuota=$quota->fetch_object();


    $query = $mysqli->query("SELECT mvp_calon_siswa.no_formulir, mvp_user.nama_depan, mvp_user.nama_belakang, mvp_user.user_id, mvp_calon_siswa.nilai_un From mvp_user, mvp_calon_siswa where mvp_user.user_id=mvp_calon_siswa.user_id and mvp_calon_siswa.nilai_un>=$kuota->passing_grade order by mvp_calon_siswa.nilai_un desc limit $kuota->kuota");
    $jsonResult = '{"data" : [ {';
    $i=1;
    $arr = array();
    while ($data=$query->fetch_object()) {
    

       $temp = array(
      "No" => $i,
      "noform" => $data->no_formulir,
      "nama_depan" => $data->nama_depan,  
      "nama_belakang" => $data->nama_belakang,
      "nilai_un" => $data->nilai_un);

       array_push($arr, $temp);
       $i++;
    }
    $data = json_encode($arr);
 
echo "{\"data\":" . $data . "}";
} else {
    echo '<script>window.location="../../404.html"</script>';
}

?>