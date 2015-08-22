<?php 
if (empty($_SESSION['session_id']))
  {
?>


<div id="masuk" class="graybg contact-overlay scrollspy">
	<div class="container">
    	<div class="row">
        	<div class="center">
            <h1 class="marbot15 wow fadeInUp animated" data-wow-delay="300ms">LOGIN </h1>
            <div class="hr-line"><i class="mdi-action-star-rate"></i></div>
            <div class="tag padding-25-per">Masuk Jika Sudah memiliki Akun atau daftar jika belum</div>
        </div>
        <div class="martop60">
        	<div class="col l6 s12 offset-l3">
            	<div class="contact-form marbot30">
                	<form id="password_form" class="clearfix" action="proses.php" method="post">
                          <div class="input-field col s12">
                           <i class="mdi-action-account-circle prefix"></i>
                            <input id="username" type="text" name="username" class="" placeholder="* Username : "
                    			onfocus="this.placeholder = ''" onBlur="this.placeholder = '* Username :'" />
                          </div>
	                      <div class="input-field col s12">
	                          	<i class="mdi-action-lock prefix"></i>
	                            <input type="password" name="password"  class=""
	                    placeholder="* Password : " onFocus="this.placeholder = ''" onBlur="this.placeholder = '* Password :'" />
	                      </div>
                    
                      		<div class="contact col s12 martop30">
                      <!--<input id="contactsubmitBtn1" value="Send a message" name="Confirm" type="submit" class="submitBtn">-->
                            	<button class="waves-effect waves-light btn" type="submit" id="conbutton" name="login">Login</button>
                            </div>
                            
                  </form>
                     
                </div>
            </div>
            
            </div>
        </div>
    </div>
	</div>


<?php       
  }
 ?>