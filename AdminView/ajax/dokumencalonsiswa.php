<?php 
if( isset( $_SERVER['HTTP_X_REQUESTED_WITH'] ) && ( $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest' ) )
{
    include_once '../../config/koneksi.php';
    $query = $mysqli->query('SELECT mvp_user.nama_depan, mvp_user.nama_belakang, mvp_file_calon_siswa.* FROM mvp_user, mvp_file_calon_siswa where mvp_file_calon_siswa.user_id=mvp_user.user_id  order by file_calon_siswa_id desc');
    $jsonResult = '{"data" : [ {';
    $i=1;
    $arr = array();
    while ($data=$query->fetch_object()) {
      $link = "<a href='index.php?key=hapusdokumen.php&id=$data->file_calon_siswa_id' title='Hapus' onclick='return hapus()' class='btn pink accent-3'><i class='fa fa-trash'></i></a>";
      $skhundepan = "<img src='../img/datacalonsiswa/$data->file_calon_siswa_skhun_depan' width='140px' height='200px'>";
      $skhunbelakang = "<img src='../img/datacalonsiswa/$data->file_calon_siswa_skhun_belakang' width='140px' height='200px'>";
      $akte = "<img src='../img/datacalonsiswa/$data->file_calon_siswa_akte' width='140px' height='200px'>";
      $foto = "<img src='../img/datacalonsiswa/$data->file_calon_siswa_foto' width='140px' height='200px'>";


       $temp = array(
      "No" => $i,
        "nama" => $data->nama_depan." ".$data->nama_belakang,
        "skhundepan" => $skhundepan, 
        "skhunbelakang" => $skhunbelakang, 
        "akte" => $akte,
        "foto" => $foto,
        "aksi" => $link);

       array_push($arr, $temp);
       $i++;
    }
    $data = json_encode($arr);
 
echo "{\"data\":" . $data . "}";
} else {
    echo '<script>window.location="404.html"</script>';
}

?>