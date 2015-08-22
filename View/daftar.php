<?php include_once 'navbar.php'; ?>
<div class="container">
	<div class="daftar">
	   <div class="row">
	    <div class="col s12 m12">
	 
	  		    
	  		      
	  		          <div class="card">
	  		            <div class="card-content form-text">
	  		              <h3 class="center orange-text">Daftar</h3><hr>
				  		              <form id="password_form" class="clearfix" action="proses.php" method="post">
				                          <div class="input-field col m5">
				                           <i class="mdi-action-face-unlock prefix"></i>
				                            <input id="namadepan" type="text" maxlength="12" name="namadepan"  class="validate"  />
				                            <label for="namadepan">Nama Depan :</label>
				                          </div>
				                          <div class="input-field col m7">
				                            <i class="prefix"></i>
				                            <input id="namabelakang" type="text" name="namabelakang"  maxlength="20" class="validate"  />
				                            <label for="namabelakang">Nama Belakang :</label>
				                          </div>
				                          <div class="input-field col m12">
				                            <i class="mdi-action-account-circle prefix"></i>
				                            <input id="username" type="text" name="username" minlength="4" maxlength="12" class="validate"  />
				                            <label for="username">Username :</label>
				                          </div>
					                      <div class="input-field col m6">
					                          	<i class="mdi-action-lock prefix"></i>
					                            <input id="password" type="password" name="password" minlength="8" maxlength="15" class="validate"/>
					                            <label for="password">Password :</label>
					                      </div>
					                      <div class="input-field col m6">
					                          	<i class="mdi-av-replay prefix"></i>
					                            <input id="repassword" type="password" name="repassword" minlength="8" maxlength="15" class="validate"/>
					                            <label for="repassword">Ulangi Password :</label>
					                      </div>
					                      <div class="input-field col s12 m8">
				                            <i class="mdi-communication-email prefix"></i>
				                            <input id="email" type="email" name="email" minlength="5" maxlength="30" class="validate"  />
				                            <label for="username">Email :</label>
				                          </div>
				                          <div class="input-field col s12 m4">
				                            <i class="mdi-communication-phone prefix"></i>
				                            <input id="telepon" type="tel" name="telepon" minlength="10" maxlength="14" class="validate"  />
				                            <label for="telepon">Telepon :</label>
				                          </div>
				                          <div class=" col s2  martop30" style="  padding-left: 32px;">
				                          		<img class="" src="captcha.php">
				                          </div>
				                          <div class="input-field col m3 s10">
				                            <i class="mdi-editor-border-color prefix"></i>
				                            <input id="captcha" type="text" name="captcha" minlength="5" maxlength="5" class="validate"  />
				                            <label for="captcha">Masukan Captcha :</label>
				                          </div>
				                          <div class="row">
					                          <div class="input-field col s7">
					                            
					                           </div>
				                          </div>

				                    	  

				                      		<div class="contact col s12 martop30">
				                      
				                            	<button class="waves-effect waves-light btn" type="submit" id="daftar" name="daftaruser">Daftar</button>
				                            </div>
				                            
				                  </form>
	  		              <div class="card-action">
	  		                <a href="index.php"><i class="mdi-navigation-arrow-back"></i> kembali ke halaman utama</a>
	  		              </div>
	  		            </div>

			      </div>
			    </div>
			</div>
	</div>
</div>