<?php
//PAKE mysql biasa, bagi yg ga support (PHP 5.5) bisa pake mysqli
//mysql_connect("localhost","root","");
//mysql_select_db("teschart");
//kita ngambil jumlah penjualan pertahun dan di grup kan tahun nya, karena banyak nilai tahun pada data
//$sql="Select SUM(penjualan) as m,tahun from data GROUP BY tahun";

include_once '../../config/koneksi.php';

$proses=$mysqli->query("SELECT COUNT(LEFT(no_formulir,2)) as n, left(no_formulir,2) as tahun FROM mvp_calon_siswa GROUP BY left(no_formulir,2)");
//jalankan query
//$rs=mysql_query($sql);
//bikin variabel sebagai array untuk menampung data nantinya
$data=array();
//loooooooooop sebagai object, bisa pake fetch_array $row['field']
while ($row = $proses->fetch_object()) {
	$tahun= $row->tahun;
	$tahun = "20".$tahun;
	$data[]=array(
		'y'=>$tahun, //y sebagai kata kunci nya (tahun)		
		'jumlah'=>$row->n, //jumlah penjualan
		);	
}
	//outputkan sebagai json
	echo json_encode($data);
?>