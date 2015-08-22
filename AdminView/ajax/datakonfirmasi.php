<?php 
if( isset( $_SERVER['HTTP_X_REQUESTED_WITH'] ) && ( $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest' ) )
{
    session_start();
    #$kelas=$_SESSION['id_kelasjurusan'];

    include_once '../../config/koneksi.php';

    $query = $mysqli->query("SELECT mvp_konfirmasi.*,mvp_user.username, mvp_user.nama_depan, mvp_user.nama_belakang From mvp_user, mvp_konfirmasi where mvp_konfirmasi.user_id=mvp_user.user_id order by mvp_konfirmasi.konfirmasi_id desc");
    $jsonResult = '{"data" : [ {';
    $i=1;
    $arr = array();
    while ($data=$query->fetch_object()) {


     
      $link = "<a href='index.php?key=hapuskonfirmasi.php&id=$data->konfirmasi_id' title='Hapus' onclick='return hapus()' class='btn pink accent-3'><i class='fa fa-trash'></i></a>";
      
       $temp = array(
      "No" => $i,
      "nama" => $data->nama_depan." ".$data->nama_belakang,
      "username" => $data->username,
      "bank" => $data->konfirmasi_nama_bank,
      "rek" => $data->konfirmasi_no_rekening,
      "atasnama" => $data->konfirmasi_pemilik_rekening,
      "tglkonfirmasi" => $data->created_at,
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