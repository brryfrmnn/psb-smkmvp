<?php include_once 'navbar.php'; ?>
<div class="container">
	<div class="daftar">
	   <div class="row">
	    <div class="col s8 offset-s2">  		      
	  		          <div class="card">
	  		            <div class="card-content form-text">
	  		              <h3 class="center orange-text">Berhasil</h3><hr>
				  		       <p>Terima kasih atas konfirmasi pembayaran anda. Konfirmasi pembayaran segera kami proses paling lambat 2x24Jam. Apabila terjadi masalah silahkan hubungi kami di <a href="index.php#kontak">sini</a><br>
				  		       Berikut rincian pembayaran yang telah anda lakukan : <br>
				  		       Username : <?php echo $data->username; ?>
				  		       <br>
				  		       Nama : <?php echo $data->nama_depan." ".$data->nama_belakang; ?>
				  		       <br>
				  		       Bank : <?php echo $bank; ?>
				  		       <br>
				  		       No Rekening : <?php echo $data->konfirmasi_no_rekening; ?>
				  		       <br>
				  		       Atas nama : <?php echo $data->konfirmasi_pemilik_rekening; ?>
				  		       <br>
				  		       Tanggal Konfirmasi : <?php echo $data->created_at; ?>
				  		       </p>

	  		              <div class="card-action">
	  		                <a href="index.php"><i class="mdi-navigation-arrow-back"></i> kembali ke halaman utama</a>
	  		                <button onclick="document.location='cetakbuktikonfirmasi.php'" class="waves-effect waves-light btn"><i class="mdi-action-print"></i> Cetak</button>
	  		              </div>
	  		            </div>

			      </div>
			    </div>
			</div>
	</div>
</div>