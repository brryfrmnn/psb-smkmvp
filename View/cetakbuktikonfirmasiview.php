<body  onload="window.print()">
	<table border="1" cellpadding="15" cellspacing="1">
		<tr>
			<td>
				
				<h3 align="center">Bukti Konfirmasi Pembayaran <br></h3>
					<table>
						<tr>
							<td>Tanggal Cetak</td>
							<td>:</td>
							<td><?php echo date("d M Y"); ?></td>
						</tr>
					</table>
					<br>
					<table >
						<tr>
							<td>Username</td>
							<td>:</td>
							<td><?php echo $data->username; ?></td>
						</tr>
						<tr>
							<td>Nama</td>
							<td>:</td>
							<td><?php echo $data->nama_depan." ".$data->nama_belakang; ?></td>
						</tr>
						<tr>
							<td>Bank</td>
							<td>:</td>
							<td><?php echo $bank; ?></td>
						</tr>
						<tr>
							<td>Nomor Rekening</td>
							<td>:</td>
							<td><?php echo $data->konfirmasi_no_rekening; ?></td>
						</tr>
						<tr>
							<td>Atas Nama</td>
							<td>:</td>
							<td><?php echo $data->konfirmasi_pemilik_rekening; ?></td>
						</tr>
						<tr>
							<td>Tanggal Konfirmasi</td>
							<td>:</td>
							<td><?php echo $data->created_at; ?></td>
						</tr>
						<tr>
							<td>Biaya</td>
							<td>:</td>
							<td>Rp. 150.000</td>
						</tr>
					</table>
			</td>
		</tr>
	</table>
</body>