<?php

include_once '../../config/koneksi.php';

$proses=$mysqli->query("SELECT laporan_tahun, laporan_angka FROM mvp_laporan where laporan_ket='diterima' GROUP BY laporan_tahun");
			
$data=array();
//loooooooooop sebagai object, bisa pake fetch_array $row['field']
while ($row = $proses->fetch_object()) {
	$tahun= $row->laporan_tahun;
	$tahun = $tahun;
	$data[]=array(
		'y'=>$tahun, //y sebagai kata kunci nya (tahun)		
		'jumlah'=>$row->laporan_angka, //jumlah penjualan
		);	
}
	//outputkan sebagai json
	echo json_encode($data);
?>