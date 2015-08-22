<?php 
if( isset( $_SERVER['HTTP_X_REQUESTED_WITH'] ) && ( $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest' ) )
{
    session_start();
    #$kelas=$_SESSION['id_kelasjurusan'];

    include_once '../../config/koneksi.php';

    $query = $mysqli->query("SELECT username, nama_depan, nama_belakang, email, status_konfirmasi, user_id From mvp_user where status='0' order by status_konfirmasi asc");
    $jsonResult = '{"data" : [ {';
    $i=1;
    $arr = array();
    while ($data=$query->fetch_object()) {
      $cari=$mysqli->query("SELECT user_id FROM mvp_konfirmasi where user_id='$data->user_id'");
      if ($cari->num_rows > 0) {
        $konf = "<b class='green-text'>Sudah</b>";
      }
      else
      {
          $konf="<b class='red-text'>Belum</b>";
      }

      $link = "<a href='index.php?key=verifikasipendaftar.php&user_id=$data->user_id' title='Verifikasi Pendaftar' class='btn  teal accent-4'><i class='fa fa-check-square-o'></i></a>
      <a href='index.php?key=detailpendaftar.php&user_id=$data->user_id' title='Lihat Detail' class='btn'><i class='fa fa-eye'></i></a>
      <a href='index.php?key=hapuspendaftar.php&user_id=$data->user_id' title='Hapus Pendaftar' onclick='return hapus()' class='btn pink accent-3'><i class='fa fa-trash'></i></a>";
      $statuskonf = $data->status_konfirmasi;
      if ($statuskonf==1) {
        $statuskonf="<b class='green-text'>Sudah</b>";
      }
      else
      {
        $statuskonf="<b class='red-text'>Belum</b>";
      }

       $temp = array(
      "No" => $i,
      "username" => $data->username,
      "nama_depan" => $data->nama_depan." ".$data->nama_belakang,  
      "email" => $data->email,
      "status" => $statuskonf,
      "konf" => $konf,

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