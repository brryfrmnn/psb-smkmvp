<?php 
if (isset($_GET['key'])) {
  if ($_GET['key']=="detailinfo.php") {
    if (isset($_GET['id'])) {
      $id=$_GET['id'];
      ?>
          <div class="row">
              <div class="col s12">
                  <a href="index.php?key=tambahinfodetail.php&id=<?php echo $id; ?>" class="btn">Tambah Detail Info Gelombang</a>
              </div>
          </div>
            <table>
              <thead>
                <tr>
                  <td width="20px">No</td>
                  <td width="100px">Tanggal</td>
                  <td width="250px">Keterangan</td>
                  <td width="100px">Diubah</td>
                  <td width="150px">Aksi </td>
                </tr>
              </thead>
              <tbody>
                <?php 
                  include_once '../config/koneksi.php'; 
                  
                  $no=1;
                  $proses=$mysqli->query("SELECT * FROM mvp_info_detail where info_id='$id' order by info_detail_id asc");
                  while ($data=$proses->fetch_object()) {
                 ?>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $data->info_detail_judul; ?></td>
                    <td><?php echo $data->info_detail_keterangan; ?></td>
                    <td><?php
                      include_once 'selisihtime.php';
                      date_default_timezone_set("asia/jakarta");
                      $tglsekarang=date("Y/m/d h:i:s");
                      $waktu=timeago($data->updated_at);
                     echo $waktu;


                     ?></td>
                     <td><a href='index.php?key=editinfodetail.php&id=<?php echo $data->info_detail_id; ?>&info=<?php echo $id; ?>' title='Ubah' class='btn  teal accent-4'><i class='fa fa-edit'></i></a>
            <a href='index.php?key=hapusinfodetail.php&id=<?php echo $data->info_detail_id; ?>&info=<?php echo $id; ?>' title='Hapus'  onclick='return hapus()' class='btn pink accent-3'><i class='fa fa-trash'></i></a></td>
                  </tr>
                 <?php 
                $no++; } ?>
              </tbody>
            </table>

      <?php
    }
  }
}

 ?>