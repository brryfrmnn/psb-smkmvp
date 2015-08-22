<form action="../proses.php" method="post" data-parsley-validate>
				<h5>DATA PRIBADI</h5>
						<div class="row">
							<div class="col m4 s12">
							  <div class="input-field">
								<i class="mdi-action-assignment prefix"></i>
								<input id="noform" type="text" value="<?php echo $data->no_formulir;  ?>" name="nisn" maxlength="14" readonly>
								<label for="noform">No Formulir :</label>
							  </div>
							</div>

						</div>
						<div class="row">
							<div class="col m4 s12">
							  <div class="input-field">
								<i class="mdi-communication-vpn-key prefix"></i>
								<input id="nisn" type="text" value="<?php echo $data->nisn;  ?>" name="nisn" maxlength="14" readonly>
								<label for="nisn">NISN :</label>
							  </div>
							</div>

							<div class="col m4 s12">
							  <div class="input-field">
								<i class="mdi-action-account-circle prefix"></i>
								<input id="nisn" type="text" value="<?php echo $data->username; ?>" name="username" maxlength="12" readonly>
								<label for="nisn">Username :</label>
							  </div>
							</div>
							
						</div>
			  
						  <div class="row">
							<div class="col m4 s12">
							  <div class="input-field">
								<i class="mdi-action-face-unlock prefix"></i>
								<input id="namadepan" type="text" name="namadepan" value="<?php echo $data->nama_depan; ?>" maxlength="12"  readonly>
								<label for="namadepan">Nama Depan :</label>
							  </div>
							</div>
							<div class="col m4 s12">
							  <div class="input-field">
								<i class="prefix"></i>
								<input id="namabelakang" type="text" name="namabelakang" maxlength="20" value="<?php echo $data->nama_belakang; ?>" readonly>
								<label for="namabelakang">Nama Belakang :</label>
							  </div>
							</div>
						  </div>

						  <div class="row">
							<div class="col m4 s12">
							  <div class="input-field">
								<i class="mdi-maps-place prefix"></i>
								<input id="tempatlahir" type="text" name="tempatlahir" maxlength="20" value="<?php echo $data->tempatlahir; ?>" readonly>
								<label for="tempatlahir">Tempat Lahir :</label>
							  </div>
							</div>
							<div class="col m4 s12">
							  <div class="input-field">
								<i class="fa fa-calendar prefix"></i>
								<input id="tgllahir" type="text" value="<?php echo $data->tanggallahir; ?>" name="tgllahir" data-inputmask="'mask': 'y/m/d'" readonly placeholder="Tahun/Bln/Tgl">
								<label for="tgllahir">Tanggal Lahir :</label>
							  </div>
							</div>
						  </div>

							<div class="row">
								<div class="col m4 s12">
								  
										<label for="jk">Jenis Kelamin :</label>
										<p>
											<input name="jk" type="radio" id="l" value="l" 
												<?php 
													if ($data->jk=='l') {
														 
														echo "checked" ;
													}
													else{
														echo "";
													}

												 ?>
											/>
											<label for="l">Laki-laki</label>

											<input name="jk" type="radio" id="p" value="p" 
												<?php 
													if ($data->jk=='p') {
														 
														echo "checked" ;
													}
													else{
														echo "";
													}

												 ?>
											/>
											<label for="p">Perempuan</label>
										</p>
								  
								</div>
								<div class="col m4 s12">
										<label for="goldar">Golongan Darah :</label>
										<p>
											<input name="goldar" type="radio" id="a" value="a" <?php 
													if ($data->goldar=='a') {
														 
														echo "checked" ;
													}
													else{
														echo "";
													}

												 ?> />
											<label for="b">A</label>

											<input name="goldar" type="radio" id="b" value="b" <?php 
													if ($data->goldar=='b') {
														 
														echo "checked" ;
													}
													else{
														echo "";
													}

												 ?>/>
											<label for="b">B</label>

											<input name="goldar" type="radio" id="ab" value="ab" 
											<?php 
													if ($data->goldar=='ab') {
														 
														echo "checked" ;
													}
													else{
														echo "";
													}

												 ?>/>
											<label for="ab">AB</label>

											<input name="goldar" type="radio" id="o" value="o" 
											<?php 
													if ($data->goldar=='o') {
														 
														echo "checked" ;
													}
													else{
														echo "";
													}

												 ?>/>
											<label for="o">O</label>
										</p>
								</div>
							
							</div>
						 
						  <div class="row">
							<div class="col m4 s12">
							  <div class="input-field">
								<i class="fa fa-envelope prefix"></i>
								<input id="email" type="email" name="email" maxlength="50" value="<?php echo $data->email; ?>" readonly>
								<label for="email">Email :</label>
							  </div>
							</div>
							<div class="col m2 s12">
							  <div class="input-field">
								<i class="fa fa-phone prefix"></i>
								<input id="telprumah" value="<?php echo $data->telprumah; ?>" type="tel" name="telprumah" data-inputmask="'mask': '(999) 999-9999'">
								<label for="telprumah">Telepon Rumah :</label>
							  </div>
							</div>
							<div class="col m2 s12">
							  <div class="input-field">
								<i class="mdi-hardware-phone-android prefix"></i>
								<input id="hp" type="tel" value="<?php echo $data->telepon; ?>" name="hp" data-inputmask="'mask': '(9999) 999-99999'" readonly>
								<label for="hp">HP :</label>
							  </div>
							</div>
						  </div>
						 
						  

						 
						  <div class="row">
							<div class="col m2 s12">
							  <label>Provinsi</label>
							  <select class="browser-default" name="provinsi" readonly>
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
								<input value="<?php echo $data->kota ?>" id="kota" type="text" name="kota" readonly maxlength="20">
								<label for="kota">Kota :</label>
							  </div>
							</div>
							<div class="col m2 s12">
							  <div class="input-field">
								<input id="kecamatan" value="<?php echo $data->kecamatan; ?>" type="text" name="kecamatan" readonly maxlength="20" >
								<label for="kecamatan">Kecamatan :</label>
							  </div>
							</div>
							<div class="col m2 s12">
							  <div class="input-field">
								<input id="kodepos" type="text" value="<?php echo $data->kodepos; ?>" name="kodepos" readonly maxlength="6">
								<label for="kodepos">Kode Pos :</label>
							  </div>
							</div>
						  </div>

						 <div class="row">
							<div class="col s12 m8">
								  <div class="input-field">
									<textarea id="alamat" class="materialize-textarea" name="alamat" readonly maxlength="140" length="140"><?php echo $data->alamat; ?></textarea>
									<label for="alamat">Alamat :</label>
								  </div>
							</div>
						 </div>
						 
						  <hr>
						 
						 <label for="">Status</label>
						 <?php 
						 	if ($data->status=='1') {
						 		$checked="checked";
						 	}
						 	else
						 	{
						 		$checked="";
						 	}
						  ?>
						  <p>
							<input name="status" type="radio" id="ikutortu" value="1" <?php echo $checked; ?> />
							<label for="ikutortu">Ikut Orang Tua</label>
						 
						 <?php 
						 	if ($data->status=='2') {
						 		$checked="checked";
						 	}
						 	else
						 	{
						 		$checked="";
						 	}
						  ?>
							<input name="status" type="radio" id="kost" value="2"  <?php echo $checked; ?> />
							<label for="kost">Kost</label>
						 <?php 
						 	if ($data->status=='3') {
						 		$checked="checked";
						 	}
						 	else
						 	{
						 		$checked="";
						 	}
						  ?>
							<input name="status" type="radio" id="rumahsendiri" value="3"  <?php echo $checked; ?>/>
							<label for="rumahsendiri">Rumah Sendiri</label>
							<?php 
						 	if ($data->status=='4') {
						 		$checked="checked";
						 	}
						 	else
						 	{
						 		$checked="";
						 	}
						  ?>
							<input name="status" type="radio" id="saudara" value="4"  <?php echo $checked; ?>/>
							<label for="saudara">Ikut Saudara</label>
						  </p>
						 
						<br><HR> <h5>LATAR BELAKANG SEKOLAH</h5><br>
						  <div class="row">
							<div class="col m8 s12">
							  <div class="input-field">
									<i class="mdi-social-school prefix"></i>
									<input id="asalsekolah" type="text" value="<?php echo $data->asalsekolah; ?>" name="asalsekolah" maxlength="50" readonly>
									<label for="asalsekolah">Asal Sekolah :</label>
							  </div>
							</div>		    			    
						 </div>
						 <div class="row">
							<div class="col m3 s12">
							  <label>Provinsi</label>
							  <select class="browser-default" name="provinsisekolah" readonly>
								<option value="0" selected disabled>Provinsi</option>
								<?php 
									for ($i=1; $i < $ais ; $i++) { 
										echo $provsekolah[$i];
									}
								 ?>
							  </select>
							</div>	
							<div class="col m5 s12">
							  <div class="input-field">
									<i class="prefix"></i>
									<input id="kotakab" type="text" name="kotakabsekolah" value="<?php echo $data->kotakabsekolah; ?>" maxlength="50" readonly>
									<label for="kotakab">Kota/Kabupaten :</label>
							  </div>
							</div>		    			    
						 </div>
						 <div class="row">
							<div class="col m2 s6">
							  <div class="input-field">
									<i class="mdi-social-school prefix"></i>
									<input id="tahunkelulusan" type="text" name="tahunkelulusan" value="<?php echo $data->tahunkelulusan; ?>" data-inputmask ="'mask':'y/y'"  readonly>
									<label for="tahunkelulusan">Tahun Kelulusan :</label>
							  </div>
							</div>
							<div class="col m2 s6">
							  <div class="input-field">
									<i class="mdi-social-school prefix"></i>
									<input id="noskhun" type="text" name="noskhun" value="<?php echo $data->no_skhun; ?>"  readonly>
									<label for="noskhun">No SKHUN :</label>
							  </div>
							</div>
							<div class="col m2 s6">
							  <div class="input-field">
									<i class="mdi-social-school prefix"></i>
									<input id="nilaiun" type="text" name="nilaiun" value="<?php echo $data->nilai_un; ?>"  readonly>
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
									<input id="namaayah" type="text" name="namaayah" value="<?php echo $data->namaayah; ?>" maxlength="30"  readonly>
									<label for="namaayah">Nama Ayah :</label>
							  </div>
							</div>		    			    
						 </div>
						 <div class="row">
							<div class="col m3 s12">
							  <div class="input-field">
									<i class="mdi-social-school prefix"></i>
									<input id="pendidikan" type="text" value="<?php echo $data->pendidikanayah; ?>" name="pendidikanayah" maxlength="50" readonly>
									<label for="asalsekolah">Pendidikan :</label>
							  </div>
							</div>	
							<div class="col m3 s12">
							  <div class="input-field">
									<i class="fa fa-briefcase prefix"></i>
									<input id="pekerjaan" type="text" name="pekerjaanayah" value="<?php echo $data->pekerjaanayah; ?>" maxlength="20" readonly>
									<label for="pekerjaan">Pekerjaan :</label>
							  </div>
							</div>
							<div class="col m2 s12">
							  <div class="input-field">
									<i class="prefix"></i>
									<input id="instansi" type="text" name="instansi" value="<?php echo $data->instansi; ?>" maxlength="30" length="30" readonly>
									<label for="instansi">Instansi :</label>
							  </div>
							</div>	    			    
						 </div>
						 <div class="row">
							<div class="col m8 s12">
								<label for="">Penghasilan</label>
								  <p>
								  <?php 
								 	if ($data->penghasilanayah=='1jt') {
								 		$checked="checked";
								 	}
								 	else
								 	{
								 		$checked="";
								 	}
								  ?>
									<input name="penghasilanayah" type="radio" id="1jt" value="1jt" <?php echo $checked; ?> />
									<label for="1jt">s.d. Rp. 1.000.000</label>
								 <?php 
								 	if ($data->penghasilanayah=='1-2jt') {
								 		$checked="checked";
								 	}
								 	else
								 	{
								 		$checked="";
								 	}
								  ?>
									<input name="penghasilanayah" type="radio" id="1-2jt" value="1-2jt" <?php echo $checked; ?> />
									<label for="1-2jt">Rp. 1.000.000 s.d. Rp. 2.000.000</label>
								 <?php 
								 	if ($data->penghasilanayah=='2-5jt') {
								 		$checked="checked";
								 	}
								 	else
								 	{
								 		$checked="";
								 	}
								  ?>
									<input name="penghasilanayah" type="radio" id="2-5jt" value="2-5jt" <?php echo $checked; ?> />
									<label for="2-5jt">Rp. 2.000.000 s.d. 	Rp. 5.000.000</label>
									<?php 
								 	if ($data->penghasilanayah=='5jt') {
								 		$checked="checked";
								 	}
								 	else
								 	{
								 		$checked="";
								 	}
								  ?>
									<input name="penghasilanayah" type="radio" id="5jt" value="5jt" <?php echo $checked; ?>/>
									<label for="5jt">diatas Rp. 5.000.000</label>
								  </p>
							</div>		    			    
						 </div>
						 <div class="row">
							<div class="col s12 m8">
								  <div class="input-field">
									<textarea id="alamatayah" class="materialize-textarea" name="alamatayah" readonly maxlength="140" length="140"><?php echo $data->alamatayah; ?></textarea>
									<label for="alamatayah">Alamat :</label>
								  </div>
							</div>
						 </div>
						 <div class="row">
							<div class="col m2 s12">
							  <label>Provinsi</label>
							  <select class="browser-default" name="provinsiayah" readonly>
								<option value="0" selected disabled>Provinsi</option>
								<?php 
									for ($i=1; $i < $aia ; $i++) { 
										echo $provayah[$i];
									}
								 ?>
							
							  </select>
							 </div>
							<div class="col m2 s12">
							  <div class="input-field">
								<input id="kota" type="text" value="<?php echo $data->kotaayah; ?>" name="kotaayah" readonly maxlength="20">
								<label for="kota">Kota :</label>
							  </div>
							</div>
							<div class="col m2 s12">
							  <div class="input-field">
								<input id="kecamatanayah" type="text" name="kecamatanayah" value="<?php echo $data->kecamatanayah; ?>" readonly maxlength="20">
								<label for="kecamatanayah">Kecamatan :</label>
							  </div>
							</div>
							<div class="col m2 s12">
							  <div class="input-field">
								<input id="kodeposayah" type="text" value="<?php echo $data->kodeposayah; ?>" name="kodeposayah" readonly maxlength="6">
								<label for="kodeposayah">Kode Pos :</label>
							  </div>
							</div>
						  </div>

						  <div class="row">
							<div class="col m2 s12">
							  <div class="input-field">
								<i class="mdi-action-polymer prefix"></i>
								<input id="rtayah" type="text" name="rtayah" value="<?php echo $data->rtayah; ?>" data-inputmask="'mask':'99'" readonly>
								<label for="rtayah">RT :</label>
							  </div>
							</div>
							<div class="col m2 s12">
							  <div class="input-field">
								<i class="prefix"></i>
								<input id="rwayah" type="text" value="<?php echo $data->rwayah; ?>" name="rwayah" data-inputmask="'mask':'99'" readonly>
								<label for="rwayah">RW :</label>
							  </div>
							</div>
							<div class="col m2 s12">
							  <div class="input-field">
								<i class="fa fa-phone prefix"></i>
								<input id="telprumahayah" type="tel" value="<?php echo $data->telprumahayah; ?>" name="telprumahayah" data-inputmask="'mask': '(999) 999-9999'">
								<label for="telprumahayah">Telepon Rumah :</label>
							  </div>
							</div>
							<div class="col m2 s12">
							  <div class="input-field">
								<i class="mdi-hardware-phone-android prefix"></i>
								<input id="hpayah" type="tel" name="hpayah" value="<?php echo $data->hpayah; ?>" data-inputmask="'mask': '(9999) 999-99999'" readonly>
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
									<input id="namaibu" type="text" value="<?php echo $data->namaibu; ?>" name="namaibu" maxlength="30"  readonly>
									<label for="namaibu">Nama Ibu :</label>
							  </div>
							</div>		    			    
						 </div>
						 <div class="row">
							<div class="col m3 s12">
							  <div class="input-field">
									<i class="mdi-social-school prefix"></i>
									<input id="pendidikanibu" value="<?php echo $data->pendidikanibu; ?>" type="text" name="pendidikanibu" maxlength="50" readonly>
									<label for="pendidikanibu">Pendidikan :</label>
							  </div>
							</div>	
							<div class="col m3 s12">
							  <div class="input-field">
									<i class="fa fa-briefcase prefix"></i>
									<input id="pekerjaanibu" type="text" value="<?php echo $data->pekerjaanibu; ?>" name="pekerjaanibu" maxlength="20" readonly>
									<label for="pekerjaanibu">Pekerjaan :</label>
							  </div>
							</div>
													
						 </div>
						 <div class="row">
							<div class="col m8 s12">
								<label for="">Penghasilan</label>
								  <p>
								  <?php 
								 	if ($data->penghasilanayah=='1jt') {
								 		$checked="checked";
								 	}
								 	else
								 	{
								 		$checked="";
								 	}
								  ?>
									<input name="penghasilanibu" type="radio" id="1jt" <?php echo $checked; ?> />
									<label for="1jt">s.d. Rp. 1.000.000</label>
								 <?php 
								 	if ($data->penghasilanayah=='1-2jt') {
								 		$checked="checked";
								 	}
								 	else
								 	{
								 		$checked="";
								 	}
								  ?>
									<input name="penghasilanibu" type="radio" id="1-2jt" <?php echo $checked; ?>/>
									<label for="1-2jt">Rp. 1.000.000 s.d. Rp. 2.000.000</label>
								 <?php 
								 	if ($data->penghasilanayah=='2-5jt') {
								 		$checked="checked";
								 	}
								 	else
								 	{
								 		$checked="";
								 	}
								  ?>
									<input name="penghasilanibu" type="radio" id="2-5jt" <?php echo $checked; ?> />
									<label for="2-5jt">Rp. 2.000.000 s.d. 	Rp. 5.000.000</label>
									<?php 
								 	if ($data->penghasilanayah=='5jt') {
								 		$checked="checked";
								 	}
								 	else
								 	{
								 		$checked="";
								 	}
								  ?>
									<input name="penghasilanibu" type="radio" id="5jt" <?php echo $checked; ?>/>
									<label for="5jt">diatas Rp. 5.000.000</label>
								  </p>
							</div>		    			    
						 </div>
						 <div class="row">
							<div class="col s12 m8">
								  <div class="input-field">
									<textarea id="alamatibu" class="materialize-textarea" name="alamatibu" readonly maxlength="140" length="140"><?php echo $data->alamatibu; ?></textarea>
									<label for="alamatibu">Alamat :</label>
								  </div>
							</div>
						 </div>
						 <div class="row">
							<div class="col m2 s12">
							  <label>Provinsi</label>
							  <select class="browser-default" name="provinsiibu" readonly>
								<option value="0" selected disabled>Provinsi</option>
								<?php 
									for ($i=1; $i < $aii ; $i++) { 
										echo $provibu[$i];
									}
								 ?>
							  </select>
							 </div>
							<div class="col m2 s12">
							  <div class="input-field">
								<input id="kotaibu" type="text" value="<?php echo $data->kotaibu; ?>" name="kotaibu" readonly maxlength="20" >
								<label for="kotaibu">Kota :</label>
							  </div>
							</div>
							<div class="col m2 s12">
							  <div class="input-field">
								<input id="kecamatanibu" type="text" value="<?php echo $data->kecamatanibu; ?>" name="kecamatanibu" readonly maxlength="20">
								<label for="kecamatanibu">Kecamatan :</label>
							  </div>
							</div>
							<div class="col m2 s12">
							  <div class="input-field">
								<input id="kodeposibu" value="<?php echo $data->kodeposibu; ?>" type="text" name="kodeposibu" readonly maxlength="6" >
								<label for="kodeposibu">Kode Pos :</label>
							  </div>
							</div>
						  </div>

						  <div class="row">
							<div class="col m2 s12">
							  <div class="input-field">
								<i class="mdi-action-polymer prefix"></i>
								<input id="rtibu" value="<?php echo $data->rtibu; ?>" type="text" name="rtibu" data-inputmask="'mask':'99'" readonly>
								<label for="rtibu">RT :</label>
							  </div>
							</div>
							<div class="col m2 s12">
							  <div class="input-field">
								<i class="prefix"></i>
								<input id="rwibu" value="<?php echo $data->rwibu; ?>" type="text" name="rwibu" data-inputmask="'mask':'99'" readonly>
								<label for="rwibu">RW :</label>
							  </div>
							</div>
							<div class="col m2 s12">
							  <div class="input-field">
								<i class="fa fa-phone prefix"></i>
								<input id="telprumahibu" value="<?php echo $data->telprumahibu; ?>" type="tel" name="telprumahibu" data-inputmask="'mask': '(999) 999-9999'">
								<label for="telprumahibu">Telepon Rumah :</label>
							  </div>
							</div>
							<div class="col m2 s12">
							  <div class="input-field">
								<i class="mdi-hardware-phone-android prefix"></i>
								<input id="hpibu" value="<?php echo $data->hpibu; ?>" type="tel" name="hpibu" data-inputmask="'mask': '(9999) 999-99999'" readonly>
								<label for="hpibu">HP :</label>
							  </div>
							</div>
						  </div>

							<div class="row">
								<div class="col s12 m8">
									<button onclick="history.go(-1)"  class="btn right">KEMBALI</button>
								</div>
							</div>

							<br><br><br><br><br>			 
						</form>
