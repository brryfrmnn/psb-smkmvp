<div class="row">
  <div class="col s12 m12">
    <ul class="tabs">
      <li class="tab col s3"><a href="#profil">Profil</a></li>
      <li class="tab col s3"><a href="#kuota">Kuota dan Passing Grade</a></li>
      <li class="tab col s3"><a href="#caramendaftar">Cara Mendaftar</a></li>
      <li class="tab col s3"><a href="#info">Info Gelombang</a></li>
      <li class="tab col s3"><a href="#buatadmin">Buat Admin Baru</a></li>

      
    </ul>
  </div>
  <?php 
  		include_once '../config/koneksi.php';
  		$id=$_SESSION['session_id'];
  		$proses=$mysqli->query("SELECT * from mvp_user where user_id = '$id'");
  		$data=$proses->fetch_object();


   ?>
  <div id="profil" class="col s12">
	 
	  		<form action="../proses.php" method="POST">
	  			
					<div class="row">
						<div class="col m4 s12">
						  <div class="input-field">
							<i class="mdi-action-face-unlock prefix"></i>
							<input id="namadepan" type="text" name="namadepan" value="<?php echo $data->nama_depan; ?>" maxlength="50">
							<label for="namadepan">Nama Depan :</label>
						  </div>
						</div>
						<div class="col m4 s12">
						  <div class="input-field">
							<i class="prefix"></i>
							<input id="namabelakang" type="text" name="namabelakang" maxlength="20" value="<?php echo $data->nama_belakang; ?>">
							<label for="namabelakang">Nama Belakang :</label>
						  </div>
						</div>
					</div>
					<div class="row">
						<div class="col m6 s12">
						  <div class="input-field">
							<i class="fa fa-envelope prefix"></i>
							<input id="email" type="email" name="email" value="<?php echo $data->email; ?>" maxlength="50">
							<label for="email">Email :</label>
						  </div>
						</div>
						<div class="col m2 s12">
						  <div class="input-field">
							<i class="mdi-hardware-phone-android prefix"></i>
							<input id="telp" type="tel" value="<?php echo $data->telepon; ?>" name="telp" data-inputmask="'mask': '(9999) 999-99999'" maxlength="16">
							<label for="tel">Telepon :</label>
						  </div>
						</div>
					</div>

					<div class="row">
						<div class="col m4 s12">
						  <div class="input-field">
							<i class="fa fa-unlock-alt prefix"></i>
							<input id="passlama" type="password" name="passlama" value="" maxlength="22">
							<label for="passlama">Password Lama :</label>
						  </div>
						</div>
					</div>
					<div class="row">
						<div class="col m4 s12">
						  <div class="input-field"><i class="fa fa-lock prefix"></i>
							<input id="passbaru" type="password" name="passbaru" value="" maxlength="22">
							<label for="passbaru">Password Baru:</label>
						  </div>
						</div>
						<div class="col m4 s12">
						  <div class="input-field">
							<i class="mdi-av-replay prefix"></i>
							<input id="repass" type="password" name="repass"  maxlength="22">
							<label for="repass">Ulangi Password :</label>
						  </div>
						</div>
					</div>
					
					<div class="row">
						<div class="col s12 m8">
							<button type="submit" name="editadmin" class="btn right">SIMPAN <i class="mdi-content-send right"></i></button>
						</div>
					</div>
				
	  		</form>
  </div>
  <div  id="kuota" class="col s12">
  <?php 
  		include_once '../config/koneksi.php';
  		$id=$_SESSION['session_id'];
  		$proses=$mysqli->query("SELECT * from mvp_kuota where kuota_id = 1");
  		$data=$proses->fetch_object();


   ?>

  		<form action="../proses.php" method="POST">
	  			
					<div class="row">
						<div class="col m4 s12">
						  <div class="input-field">
							<i class="fa fa-users prefix"></i>
							<input id="kuota" type="text" name="kuota" value="<?php echo $data->kuota; ?>" maxlength="12">
							<label for="kuota">Kuota :</label>
						  </div>
						</div>
					</div>
					<div class="row">
						<div class="col m4 s12">
						  <div class="input-field">
							<i class="fa fa-bar-chart prefix"></i>
							<input id="passgrade" type="text" name="passgrade" maxlength="20" value="<?php echo $data->passing_grade; ?>">
							<label for="passgrade">Passing Grade :</label>
						  </div>
						</div>
					</div>
					
					
					<div class="row">
						<div class="col s12 m4">
							<button type="submit" name="editkuota" class="btn right">SIMPAN <i class="mdi-content-send right"></i></button>
						</div>
					</div>
				
	  		</form>
  </div>
 <!-- cara mendaftar -->
  <div id="caramendaftar" class="col s12">
    <div class="row">
        <div class="col s12">
            <a href="index.php?key=tambahcaradaftar.php" class="btn">Tambah Cara Daftar</a>
        </div>
    </div>
  		<table>
  			<thead>
  				<tr>
  					<td width="20px">No</td>
  					<td width="200px">Judul</td>
  					<td width="400px">Isi</td>
  					<td width="40px">No Urut</td>
  					<td width="100px">Diubah</td>
  					<td width="250px">Aksi </td>
  				</tr>
  			</thead>
  			<tbody>
  				<?php 
  					include_once '../config/koneksi.php'; 
  					$no=1;
  					$proses=$mysqli->query("SELECT * FROM mvp_cara_daftar order by no_urut asc");
  					while ($data=$proses->fetch_object()) {
  				 ?>
  				 	<tr>
  				 		<td><?php echo $no; ?></td>
  				 		<td><?php echo $data->cara_daftar_judul; ?></td>
  				 		<td><?php echo $data->cara_daftar_isi; ?></td>
  				 		<td><?php echo $data->no_urut; ?></td>
  				 		<td><?php
  				 			include_once 'selisihtime.php';
                date_default_timezone_set("asia/jakarta");
                $tglsekarang=date("Y/m/d h:i:s");
  				 			$waktu=timeago($data->cara_daftar_diubah);
  				 		 echo $waktu;


  				 		 ?></td>
  				 		 <td><a href='index.php?key=editcaradaftar.php&id=<?php echo $data->cara_daftar_id; ?>' title='Ubah' class='btn  teal accent-4'><i class='fa fa-edit'></i></a>
      <a href='index.php?key=hapuscaradaftar.php&id=<?php echo $data->cara_daftar_id; ?>' title='Hapus'  onclick='return hapus()' class='btn pink accent-3'><i class='fa fa-trash'></i></a></td>
  				 	</tr>
  				 <?php 
  				$no++; } ?>
  			</tbody>
  		</table>


  </div>
 <!-- /cara mendaftar -->
<!-- Info Pendaftaran -->
  <div id="info" class="col s12">
      	<div class="row">
            <div class="col s12">
                <a href="index.php?key=tambahinfo.php" class="btn">Tambah Info Gelombang</a>
            </div>
        </div>
          <table>
            <thead>
              <tr>
                <td width="20px">No</td>
                <td width="100px">Tanggal</td>
                <td width="250px">Keterangan</td>
                <td width="150px">Detail</td>
                <td width="100px">Diubah</td>
                <td width="150px">Aksi </td>
              </tr>
            </thead>
            <tbody>
              <?php 
                include_once '../config/koneksi.php'; 
                $no=1;
                $proses=$mysqli->query("SELECT * FROM mvp_info order by info_judul asc");
                while ($data=$proses->fetch_object()) {
               ?>
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $data->info_judul; ?></td>
                  <td><?php echo $data->info_keterangan; ?></td>
                  <td><a href="index.php?key=detailinfo.php&id=<?php echo $data->info_id; ?>">Detail Info Gelombang</a></td>
                  <td><?php
                    include_once 'selisihtime.php';
                    date_default_timezone_set("asia/jakarta");
                    $tglsekarang=date("Y/m/d h:i:s");
                    $waktu=timeago($data->updated_at);
                   echo $waktu;


                   ?></td>
                   <td><a href='index.php?key=editinfo.php&id=<?php echo $data->info_id; ?>' title='Ubah' class='btn  teal accent-4'><i class='fa fa-edit'></i></a>
          <a href='index.php?key=hapusinfo.php&id=<?php echo $data->info_id; ?>' title='Hapus'  onclick='return hapus()' class='btn pink accent-3'><i class='fa fa-trash'></i></a></td>
                </tr>
               <?php 
              $no++; } ?>
            </tbody>
          </table>


      </div>


  </div>
 <!-- /Info Pendaftaran -->
<!-- Membuat Admin -->
  <div id="buatadmin" class="col s12">
  		<form id="password_form" class="clearfix" action="../proses.php" method="post">
  		<div class="row">
          <div class="input-field col s6 m4">
	           <i class="mdi-action-face-unlock prefix"></i>
	            <input id="namadepan1" type="text" maxlength="12" name="namadepan"  class="validate"  />
	            <label for="namadepan1">Nama Depan :</label>
          </div>
          <div class="input-field col s6 m4">
            <i class="prefix"></i>
            <input id="namabelakang1" type="text" name="namabelakang"  maxlength="20" class="validate"  />
            <label for="namabelakang1">Nama Belakang :</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12 m8">
            <i class="mdi-action-account-circle prefix"></i>
            <input id="username1" type="text" name="username" minlength="4" maxlength="12" class="validate"  />
            <label for="username1">Username :</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6 m4">
              	<i class="mdi-action-lock prefix"></i>
                <input id="password1" type="password" name="password" minlength="8" maxlength="20" class="validate"/>
                <label for="password1">Password :</label>
          </div>
          <div class="input-field col s6 m4">
              	<i class="mdi-av-replay prefix"></i>
                <input id="repassword1" type="password" name="repassword" minlength="8" maxlength="20" class="validate"/>
                <label for="repassword1">Ulangi Password :</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s8 m6">
            <i class="mdi-communication-email prefix"></i>
            <input id="email1" type="email" name="email" minlength="5" maxlength="50" class="validate"  />
            <label for="email1">Email :</label>
          </div>
          <div class="input-field col s4 m2">
            <i class="mdi-communication-phone prefix"></i>
            <input id="telepon" type="tel" name="telepon" minlength="10"  data-inputmask="'mask': '(9999) 999-99999'" maxlength="16" maxlength="16" class="validate"  />
            <label for="telepon">Telepon :</label>
          </div>
        </div>
        <div class="row">
          <div class=" col s2 m2  martop30" style="margin-top: 25px;  padding-left: 32px;">
          		<img class="" src="../captcha.php">
          </div>
          <div class="input-field col m4 s4">
            <i class="mdi-editor-border-color prefix"></i>
            <input id="captcha" type="text" name="captcha" minlength="5" maxlength="5" class="validate"  />
            <label for="captcha">Masukan Captcha :</label>
          </div>
        <div class="row">
          <div class="row">
              <div class="input-field col s7">
                
               </div>
          </div>

    	  

      		<div class="contact col s12 m8 ">
      
            	<button class="waves-effect waves-light btn right" type="submit" id="daftar" name="daftaradmin"><i class="fa fa-sign-in prefix"></i> Daftar</button>
            </div>       
  </form>
  </div>

</div>