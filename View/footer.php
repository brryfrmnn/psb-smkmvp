<!-- Footer And Map -->
<footer>
<div id="footer">

<!-- Footer Section -->

<div class="footer">
	<div class="container">
    	<div class="row">
        	<div class="col l6 s12 marbot30 wow fadeInLeft animated" data-wow-delay="300ms">
                <div class="footer-title">
                	SMK MVP ARS Internasional
                </div>
            	<p class="martop10 padding-right-20per">
				<?php 
                    include_once 'config/koneksi.php';
                    $proses=$mysqli->query("SELECT * FROM mvp_tentang ORDER BY tentang_id desc LIMIT 1");
                    if ($data=$proses->fetch_object()) {
                        echo substr($tentang=$data->tentang_isi, 0,247)."...";

                    }
                    else
                    {
                        echo $tentang="Tidak ada";
                    }

                 ?>
                <div class="clearfix">
                        <a href="index.php?key=tentang" class="waves-effect waves-light btn">Selengkapnya</a>                    </div>
          </div>
            <div class="col l3 s12 marbot30 wow fadeInUp animated" data-wow-delay="300ms">
            		<div class="footer-title">
                    	Lokasi
                    </div>
                    <div class="footer-sub-title">
                    	Bandung
                    </div>
                    <p>
                    	Jl. Sekolah Internasional No. 1-6 Antapani <br />
                        Bandung, Jawa Barat<br />
                        (022) 7211719
                    </p>
                    
                    
            </div>
            <div class="col l3 s12 marbot30 wow fadeInRight animated" data-wow-delay="300ms">
                <div class="footer-title">
                    	Pendaftaran dibuka
                    </div>
                    <div class="footer-sub-title">
                    	Pagi:
                    </div>
                    <p> Mon - Fri: 11:30 AM - 2:30 PM
                    </p>
                    
                    <div class="footer-sub-title">
                    	Siang:
                    </div>
                    <p>
                        Mon - Thurs: 4:45 PM - 10:30 PM <br />
                        Fri: 4:45 PM - 11 PM <br />
                        Sat: 4:30 PM - 11 PM <br />
                        Sun: 5:00 PM - 10:30 PM <br />
                    </p>
            </div>
            </div>
        </div>
    </div>
   

<div class="footer-strip">

<div class="container">
	<div class="row">
    	<div class="col l4 s12">
        	<img src="img/footer-logo.png" data-wow-delay="1s"  class="footer-logo" alt="SMK MVP ARS internasional">        </div>
        <div class="col l4 s12 valign">
        	 &copy; 2015 SMK MVP ARS Internasional, All rights reserved.        </div>
        <!--<div class="col l3 s12">
            <li> Tel : 123 456 7890 </li>
        </div>-->
        <div class="col l4 s12 valign">
            <li> Develop By <span><a href="materializecss.com">berry firmann</a></span></li>
            <li> Framework By <span><a href="materializecss.com">Materialize CSS</a></span></li>

       </div>
    </div>
</div>

<!-- Home Bottom Section -->
<div class="down-circle">
      <div data-wow-delay="200ms" class="span3 wow fadeInLeftBig"> <div class="anchor"><div class="wow bounce" data-wow-delay="1s" data-wow-iteration="1" data-wow-duration="1s">
        <a href="#home" class="btn-floating waves-effect waves-light btn-large white smoothscroll">
           <i class="mdi-hardware-keyboard-arrow-up"></i>        </a>    </div>
     </div>
</div>
</div>
<!-- Home Bottom Section -->
</div>



<!-- // Footer Section -->
</div>
</footer>
