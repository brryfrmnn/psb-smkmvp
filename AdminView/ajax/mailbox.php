<?php 
if( isset( $_SERVER['HTTP_X_REQUESTED_WITH'] ) && ( $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest' ) )
{
    session_start();
    #$kelas=$_SESSION['id_kelasjurusan'];

    include_once '../../config/koneksi.php';

    $query = $mysqli->query("SELECT kontak_nama, kontak_email, kontak_telp, kontak_pesan, kontak_id From mvp_kontak order by kontak_id desc");
    $jsonResult = '{"data" : [ {';
    $i=1;
    $arr = array();
    while ($data=$query->fetch_object()) {
     $pesan=substr($data->kontak_pesan, 0,140) ;

     
      $link = "<a href='index.php?key=detailpesan.php&kontak_id=$data->kontak_id' title='Lihat Detail' class='btn'><i class='fa fa-eye'></i></a>
      <a href='index.php?key=hapuspesan.php&kontak_id=$data->kontak_id' title='Hapus Pesan' onclick='return hapus()' class='btn pink accent-3'><i class='fa fa-trash'></i></a>";
      
       $temp = array(
      "No" => $i,
      "nama" => $data->kontak_nama,
      "email" => $data->kontak_email,
      "telp" => $data->kontak_telp,
      "pesan" => $pesan,

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