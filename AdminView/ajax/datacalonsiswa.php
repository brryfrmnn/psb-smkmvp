<?php 
if( isset( $_SERVER['HTTP_X_REQUESTED_WITH'] ) && ( $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest' ) )
{
    session_start();
    #$kelas=$_SESSION['id_kelasjurusan'];

    include_once '../../config/koneksi.php';

    $query = $mysqli->query("SELECT mvp_calon_siswa.no_formulir, mvp_user.username, mvp_user.nama_depan, mvp_user.nama_belakang, mvp_user.user_id, mvp_user.email, mvp_user.telepon, mvp_calon_siswa.nilai_un From mvp_user, mvp_calon_siswa where mvp_user.user_id=mvp_calon_siswa.user_id order by no_formulir asc");
    $jsonResult = '{"data" : [ {';
    $i=1;
    $arr = array();
    while ($data=$query->fetch_object()) {
      $link = "<a href='index.php?key=detailcalonsiswa.php&user_id=$data->user_id' title='Lihat Detail' class='btn'><i class='fa fa-eye'></i></a>
      <a href='index.php?key=hapuscalonsiswa.php&user_id=$data->user_id' title='Hapus Calon Siswa'  onclick='return hapus()' class='btn pink accent-3'><i class='fa fa-trash'></i></a>";

       $temp = array(
      "No" => $i,
      "noform" => $data->no_formulir,
      "username" => $data->username,
      "nama_depan" => $data->nama_depan,  
      "nama_belakang" => $data->nama_belakang,
      "email" => $data->email,
      "telepon" => $data->telepon,
      "nilai_un" => $data->nilai_un,
      

      "detail" => $link);

       array_push($arr, $temp);
       $i++;
    }
    $data = json_encode($arr);
 
echo "{\"data\":" . $data . "}";
} else {
    echo '<script>window.location="../../404.html"</script>';
}

?>