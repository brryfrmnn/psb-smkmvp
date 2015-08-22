<?php 
include_once '../config/koneksi.php';

$ai=0;
			$user_id=$_SESSION['session_id'];
			$user=$mysqli->query("SELECT * FROM mvp_user where user_id='$user_id'");
			$data=$user->fetch_object();
			$provinsi=$mysqli->query("SELECT provinsi_id, provinsi_nama FROM mvp_provinsi order by provinsi_nama asc");
			while ($dataprov=$provinsi->fetch_object()) {
								 
								 $prov[$ai]="<option value='$dataprov->provinsi_id'>$dataprov->provinsi_nama</option>";
								 $ai++;
								  }
 ?>
<form action="../proses.php" method="post" data-parsley-validate>
	<h5>DATA PRIBADI</h5>
			<div class="row">
				<div class="col m4 s12">
				  <div class="input-field">
					<i class="mdi-communication-vpn-key prefix"></i>
					<input id="nisn" type="text" name="nisn" maxlength="14" required>
					<label for="nisn">NISN :</label>
				  </div>
				</div>
				
			</div>
  
			  <div class="row">
				<div class="col m4 s12">
				  <div class="input-field">
					<i class="mdi-action-face-unlock prefix"></i>
					<input id="namadepan" readonly value="<?php echo $data->nama_depan; ?>" type="text" name="namadepan" maxlength="12"  required>
					<label for="namadepan">Nama Depan :</label>
				  </div>
				</div>
				<div class="col m4 s12">
				  <div class="input-field">
					<i class="prefix"></i>
					<input id="namabelakang" readonly value="<?php echo $data->nama_belakang; ?>" type="text" name="namabelakang" maxlength="20"  required>
					<label for="namabelakang">Nama Belakang :</label>
				  </div>
				</div>
			  </div>

			  <div class="row">
				<div class="col m4 s12">
				  <div class="input-field">
					<i class="mdi-maps-place prefix"></i>
					<input id="tempatlahir" type="text"  name="tempatlahir" maxlength="20"  required>
					<label for="tempatlahir">Tempat Lahir :</label>
				  </div>
				</div>
				<div class="col m4 s12">
				  <div class="input-field">
					<i class="fa fa-calendar prefix"></i>
					<input id="tgllahir" type="text" name="tgllahir" data-inputmask="'mask': 'y/m/d'" required placeholder="Tahun/Bln/Tgl">
					<label for="tgllahir">Tanggal Lahir :</label>
				  </div>
				</div>
			  </div>

				<div class="row">
					<div class="col m4 s12">
					  
							<label for="jk">Jenis Kelamin :</label>
							<p>
								<input name="jk" type="radio" id="l" value="l" checked />
								<label for="l">Laki-laki</label>

								<input name="jk" type="radio" id="p" value="p" />
								<label for="p">Perempuan</label>
							</p>
					  
					</div>
					<div class="col m4 s12">
							<label for="goldar">Goongan Darah :</label>
							<p>
								<input name="goldar" type="radio" id="a" value="a" checked />
								<label for="b">A</label>

								<input name="goldar" type="radio" id="b" value="b" />
								<label for="b">B</label>

								<input name="goldar" type="radio" id="ab" value="ab" />
								<label for="ab">AB</label>

								<input name="goldar" type="radio" id="o" value="o" />
								<label for="o">O</label>
							</p>
					</div>
				
				</div>
			 
			  <div class="row">
				<div class="col m4 s12">
				  <div class="input-field">
					<i class="fa fa-envelope prefix"></i>
					<input id="email" value="<?php echo $data->email; ?>" type="email" name="email" maxlength="50" readonly>
					<label for="email">Email :</label>
				  </div>
				</div>
				<div class="col m2 s12">
				  <div class="input-field">
					<i class="fa fa-phone prefix"></i>
					<input id="telprumah" type="tel" name="telprumah" data-inputmask="'mask': '(999) 999-9999'">
					<label for="telprumah">Telepon Rumah :</label>
				  </div>
				</div>
				<div class="col m2 s12">
				  <div class="input-field">
					<i class="mdi-hardware-phone-android prefix"></i>
					<input id="hp" value="<?php echo $data->telepon; ?>" type="tel" name="hp" data-inputmask="'mask': '(9999) 999-99999'" required>
					<label for="hp">HP :</label>
				  </div>
				</div>
			  </div>
			 
			  

			 
			  <div class="row">
				<div class="col m2 s12">
				  <label>Provinsi</label>
				  <select class="browser-default" name="provinsi" required>
					<option value="0" selected disabled>Provinsi</option>
					<?php 
									for ($i=1; $i < $ai ; $i++) { 
										echo $prov[$i];
									}
								 ?>
				  </select>
				 </div>
				<div class="col m2 s12">
				  <div class="input-field">
					<input id="kota" type="text" name="kota" required maxlength="20">
					<label for="kota">Kota :</label>
				  </div>
				</div>
				<div class="col m2 s12">
				  <div class="input-field">
					<input id="kecamatan" type="text" name="kecamatan" required maxlength="20" >
					<label for="kecamatan">Kecamatan :</label>
				  </div>
				</div>
				<div class="col m2 s12">
				  <div class="input-field">
					<input id="kodepos" type="text" name="kodepos" required maxlength="6">
					<label for="kodepos">Kode Pos :</label>
				  </div>
				</div>
			  </div>

			 <div class="row">
				<div class="col s12 m8">
					  <div class="input-field">
						<textarea id="alamat" class="materialize-textarea" name="alamat" required maxlength="140" length="140"></textarea>
						<label for="alamat">Alamat :</label>
					  </div>
				</div>
			 </div>
			 
			  <hr>
			 
			 <label for="">Status</label>
			  <p>
				<input name="status" type="radio" id="ikutortu" value="1" checked />
				<label for="ikutortu">Ikut Orang Tua</label>
			 
				<input name="status" type="radio" id="kost" value="2" />
				<label for="kost">Kost</label>
			 
				<input name="status" type="radio" id="rumahsendiri" value="3" />
				<label for="rumahsendiri">Rumah Sendiri</label>

				<input name="status" type="radio" id="saudara" value="4" />
				<label for="saudara">Ikut Saudara</label>
			  </p>
			 
			<br><HR> <h5>LATAR BELAKANG SEKOLAH</h5><br>
			  <div class="row">
				<div class="col m8 s12">
				  <div class="input-field">
						<i class="mdi-social-school prefix"></i>
						<input id="asalsekolah" type="text" name="asalsekolah" maxlength="50" required>
						<label for="asalsekolah">Asal Sekolah :</label>
				  </div>
				</div>		    			    
			 </div>
			 <div class="row">
				<div class="col m3 s12">
				  <label>Provinsi</label>
				  <select class="browser-default" name="provinsisekolah" required>
					<option value="0" selected disabled>Provinsi</option>
					<?php 
									for ($i=0; $i < $ai ; $i++) { 
										echo $prov[$i];
									}
								 ?>
				  </select>
				</div>	
				<div class="col m5 s12">
				  <div class="input-field">
						<i class="prefix"></i>
						<input id="kotakab" type="text" name="kotakabsekolah" maxlength="50" required>
						<label for="kotakab">Kota/Kabupaten :</label>
				  </div>
				</div>		    			    
			 </div>
			 <div class="row">
				<div class="col m2 s6">
				  <div class="input-field">
						<i class="mdi-social-school prefix"></i>
						<input id="tahunkelulusan" type="text" name="tahunkelulusan" data-inputmask ="'mask':'y/y'"  required>
						<label for="tahunkelulusan">Tahun Kelulusan :</label>
				  </div>
				</div>	
				<div class="col m2 s6">
							  <div class="input-field">
									<i class="mdi-social-school prefix"></i>
									<input id="noskhun" type="text" name="noskhun"   required>
									<label for="noskhun">No SKHUN :</label>
							  </div>
							</div>
							<div class="col m2 s6">
							  <div class="input-field">
									<i class="mdi-social-school prefix"></i>
									<input id="nilaiun" type="text" name="nilaiun"   required>
									<label for="nilaiun">Nilai UN :</label>
							  </div>
							</div>		    			    
			 </div>

			 <HR>
			 <h5>DATA AYAH</h5>

			 <div class="row">
				<div class="col m4 s12">
				  <div class="input-field">
						<i class="fa fa-user prefix"></i>
						<input id="namaayah" type="text" name="namaayah" maxlength="30"  required>
						<label for="namaayah">Nama Ayah :</label>
				  </div>
				</div>		    			    
			 </div>
			 <div class="row">
				<div class="col m3 s12">
				  <div class="input-field">
						<i class="mdi-social-school prefix"></i>
						<input id="pendidikan" type="text" name="pendidikanayah" maxlength="50" required>
						<label for="asalsekolah">Pendidikan :</label>
				  </div>
				</div>	
				<div class="col m3 s12">
				  <div class="input-field">
						<i class="fa fa-briefcase prefix"></i>
						<input id="pekerjaan" type="text" name="pekerjaanayah" maxlength="20" required>
						<label for="pekerjaan">Pekerjaan :</label>
				  </div>
				</div>
				<div class="col m2 s12">
				  <div class="input-field">
						<i class="prefix"></i>
						<input id="instansi" type="text" name="instansi" maxlength="30" length="30" required>
						<label for="instansi">Instansi :</label>
				  </div>
				</div>	    			    
			 </div>
			 <div class="row">
				<div class="col m8 s12">
					<label for="">Penghasilan</label>
					  <p>
						<input name="penghasilanayah" type="radio" id="1jt" value="1jt" checked />
						<label for="1jt">s.d. Rp. 1.000.000</label>
					 
						<input name="penghasilanayah" type="radio" id="1-2jt" value="1-2jt" />
						<label for="1-2jt">Rp. 1.000.000 s.d. Rp. 2.000.000</label>
					 
						<input name="penghasilanayah" type="radio" id="2-5jt" value="2-5jt" />
						<label for="2-5jt">Rp. 2.000.000 s.d. 	Rp. 5.000.000</label>

						<input name="penghasilanayah" type="radio" id="5jt" value="5jt" />
						<label for="5jt">diatas Rp. 5.000.000</label>
					  </p>
				</div>		    			    
			 </div>
			 <div class="row">
				<div class="col s12 m8">
					  <div class="input-field">
						<textarea id="alamatayah" class="materialize-textarea" name="alamatayah" required maxlength="140" length="140"></textarea>
						<label for="alamatayah">Alamat :</label>
					  </div>
				</div>
			 </div>
			 <div class="row">
				<div class="col m2 s12">
				  <label>Provinsi</label>
				  <select class="browser-default" name="provinsiayah" required>
					<option value="0" selected disabled>Provinsi</option>
					<?php 
									for ($i=0; $i < $ai ; $i++) { 
										echo $prov[$i];
									}
								 ?>
				  </select>
				 </div>
				<div class="col m2 s12">
				  <div class="input-field">
					<input id="kotaayah" type="text" name="kotaayah" required maxlength="20">
					<label for="kotaayah">Kota :</label>
				  </div>
				</div>
				<div class="col m2 s12">
				  <div class="input-field">
					<input id="kecamatanayah" type="text" name="kecamatanayah" required maxlength="20">
					<label for="kecamatanayah">Kecamatan :</label>
				  </div>
				</div>
				<div class="col m2 s12">
				  <div class="input-field">
					<input id="kodepos" type="text" name="kodeposayah" required maxlength="6">
					<label for="kodepos">Kode Pos :</label>
				  </div>
				</div>
			  </div>

			  <div class="row">
				<div class="col m2 s12">
				  <div class="input-field">
					<i class="mdi-action-polymer prefix"></i>
					<input id="rt" type="text" name="rtayah" data-inputmask="'mask':'99'" required>
					<label for="rt">RT :</label>
				  </div>
				</div>
				<div class="col m2 s12">
				  <div class="input-field">
					<i class="prefix"></i>
					<input id="rw" type="text" name="rwayah" data-inputmask="'mask':'99'" required>
					<label for="rw">RW :</label>
				  </div>
				</div>
				<div class="col m2 s12">
				  <div class="input-field">
					<i class="fa fa-phone prefix"></i>
					<input id="telprumahayah" type="tel" name="telprumahayah" data-inputmask="'mask': '(999) 999-9999'">
					<label for="telprumahayah">Telepon Rumah :</label>
				  </div>
				</div>
				<div class="col m2 s12">
				  <div class="input-field">
					<i class="mdi-hardware-phone-android prefix"></i>
					<input id="hpayah" type="tel" name="hpayah" data-inputmask="'mask': '(9999) 999-99999'" required>
					<label for="hpayah">HP :</label>
				  </div>
				</div>
			  </div>

			  <hr>
			  <h5>DATA IBU</h5>

			  <div class="row">
				<div class="col m4 s12">
				  <div class="input-field">
						<i class="fa fa-user prefix"></i>
						<input id="namaibu" type="text" name="namaibu" maxlength="30"  required>
						<label for="namaibu">Nama Ibu :</label>
				  </div>
				</div>		    			    
			 </div>
			 <div class="row">
				<div class="col m3 s12">
				  <div class="input-field">
						<i class="mdi-social-school prefix"></i>
						<input id="pendidikan" type="text" name="pendidikanibu" maxlength="50" required>
						<label for="asalsekolah">Pendidikan :</label>
				  </div>
				</div>	
				<div class="col m3 s12">
				  <div class="input-field">
						<i class="fa fa-briefcase prefix"></i>
						<input id="pekerjaan" type="text" name="pekerjaanibu" maxlength="20" required>
						<label for="pekerjaan">Pekerjaan :</label>
				  </div>
				</div>
										
			 </div>
			 <div class="row">
				<div class="col m8 s12">
					<label for="">Penghasilan</label>
					  <p>
						<input name="penghasilanibu" type="radio" value="1jt" id="1jtibu" checked />
						<label for="1jt1jtibu">s.d. Rp. 1.000.000</label>
					 
						<input name="penghasilanibu" type="radio" value="1-2jt" id="1-2jt1jtibu" />
						<label for="1-2jt1jtibu">Rp. 1.000.000 s.d. Rp. 2.000.000</label>
					 
						<input name="penghasilanibu" type="radio" value="2-5jt" id="2-5jt1jtibu" />
						<label for="2-5jt1jtibu">Rp. 2.000.000 s.d. 	Rp. 5.000.000</label>

						<input name="penghasilanibu" type="radio" value="5jt" id="5jt1jtibu" />
						<label for="5jt1jtibu">diatas Rp. 5.000.000</label>
					  </p>
				</div>		    			    
			 </div>
			 <div class="row">
				<div class="col s12 m8">
					  <div class="input-field">
						<textarea id="alamatibu" class="materialize-textarea" name="alamatibu" required maxlength="140" length="140"></textarea>
						<label for="alamatibu">Alamat :</label>
					  </div>
				</div>
			 </div>
			 <div class="row">
				<div class="col m2 s12">
				  <label>Provinsi</label>
				  <select class="browser-default" name="provinsiibu" required>
					<option value="0" selected disabled>Provinsi</option>
					<?php 
									for ($i=0; $i < $ai ; $i++) { 
										echo $prov[$i];
									}
								 ?>
				  </select>
				 </div>
				<div class="col m2 s12">
				  <div class="input-field">
					<input id="kotaibu" type="text" name="kotaibu" required maxlength="20" >
					<label for="kotaibu">Kota :</label>
				  </div>
				</div>
				<div class="col m2 s12">
				  <div class="input-field">
					<input id="kecamatan" type="text" name="kecamatanibu" required maxlength="20">
					<label for="kecamatan">Kecamatan :</label>
				  </div>
				</div>
				<div class="col m2 s12">
				  <div class="input-field">
					<input id="kodepos" type="text" name="kodeposibu" required maxlength="6" >
					<label for="kodepos">Kode Pos :</label>
				  </div>
				</div>
			  </div>

			  <div class="row">
				<div class="col m2 s12">
				  <div class="input-field">
					<i class="mdi-action-polymer prefix"></i>
					<input id="rt" type="text" name="rtibu" data-inputmask="'mask':'99'" required>
					<label for="rt">RT :</label>
				  </div>
				</div>
				<div class="col m2 s12">
				  <div class="input-field">
					<i class="prefix"></i>
					<input id="rw" type="text" name="rwibu" data-inputmask="'mask':'99'" required>
					<label for="rw">RW :</label>
				  </div>
				</div>
				<div class="col m2 s12">
				  <div class="input-field">
					<i class="fa fa-phone prefix"></i>
					<input id="telprumahibu" type="tel" name="telprumahibu" data-inputmask="'mask': '(999) 999-9999'">
					<label for="telprumahibu">Telepon Rumah :</label>
				  </div>
				</div>
				<div class="col m2 s12">
				  <div class="input-field">
					<i class="mdi-hardware-phone-android prefix"></i>
					<input id="hpibu" type="tel" name="hpibu" data-inputmask="'mask': '(9999) 999-99999'" required>
					<label for="hpibu">HP :</label>
				  </div>
				</div>
			  </div>

				<div class="row">
					<div class="col s12 m8">
						<button type="submit" name="simpanformulir" class="btn right">SIMPAN <i class="mdi-content-send right"></i></button>
					</div>
				</div>

				<br><br><br><br><br>			 
			</form>