<?php include_once 'navbar.php'; ?>
<div class="container">
	<div class="daftar">
	   <div class="row">
	    <div class="col s8 offset-s2">
	 
	  		    
	  		      
	  		          <div class="card">
	  		            <div class="card-content form-text">
	  		              <h3 class="center orange-text">Konfirmasi</h3><hr>
				  		       <form id="password_form" class="clearfix" action="proses.php" method="post">

				                          <div class="input-field col m5">
				                           
				                            <select name="bank" class="browser-default validate">
				                            	<option disabled value="0" selected>Nama Bank</option>
				                            	<option value="bca">BCA</option>
				                            	<option value="man">Mandiri</option>
				                            	<option value="bri">BRI</option>
				                            	<option value="bni">BNI</option>
				                            </select>
				                            
				                          </div>
				                          <div class="input-field col m7">
				                            <i class="prefix"></i>
				                            <input id="norek" type="text" name="norek"  maxlength="20" class="validate"  />
				                            <label for="norek">Nomor Rekening :</label>
				                          </div>
				                          <div class="input-field col m12">
				                            <i class="mdi-action-account-circle prefix"></i>
				                            <input id="atasnama" type="text" name="atasnama" minlength="4" maxlength="30" class="validate"  />
				                            <label for="atasnama">Pemilik Rekening :</label>
				                          </div>
					                      			                    	  

				                      		<div class="contact col s12 martop30">
				                      
				                            	<button class="waves-effect waves-light btn" type="submit" id="konfirmasi" name="konfirmasi">Konfirmasi</button>
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