<div id="caramendaftar" class="whitebg scrollspy">
	<div class="row container">
	<div id="accordion" class="section scrollspy">
        <div class="row">
          
          <!-- Left Section -->
           <div class="col l6 s12">
            <div class="clearfix">

                <div class="col s12 l6 marbot30">
             <img data-wow-delay="0.1s" class="materialboxed span3 wow flipInY z-depth-4" data-caption="Cara mendaftar tahap 1" src="img/1.png" alt="cara mendaftar dismk mvp ars internasional 1">                </div>
                
                
              <div class="col s12 l6 marbot30">
                	 <img data-wow-delay="0.1s" class="materialboxed span3 wow flipInY z-depth-4" data-caption="Cara mendaftar tahap 2" src="img/2.png"  alt="cara mendaftar dismk mvp ars internasional 2 ">                </div>
                
              <div class="col s12 l6 marbot30">
                	 <img data-wow-delay="0.1s" class="materialboxed span3 wow flipInY z-depth-4" data-caption="Cara mendaftar tahap 3"  src="img/3.png"  alt="cara mendaftar dismk mvp ars internasional 3 ">                </div>
                
              <div class="col s12 l6 marbot30">
              		<img data-wow-delay="0.1s" class="materialboxed span3 wow flipInY z-depth-4" data-caption="Cara mendaftar tahap 4"  src="img/4.png"  alt="cara mendaftar dismk mvp ars internasional 4 ">                </div>
               
            </div>
           </div>
          <!-- Left Section -->
          
          <!-- Right Section -->
          <div class="col l6 s12">
          	<div class="center">
                <h1 class="marbot15 wow fadeInUp animated" data-wow-delay="300ms">4 Tahap untuk mendaftar di SMK MVP ARS Internasional</h1>
                <div class="hr-line"><i class="mdi-action-star-rate"></i></div>
              <div class="tag padding-12-per">
                  
              </div>
            </div>
            
            <ul class="collapsible martop30" data-collapsible="accordion">

            <?php include_once 'config/koneksi.php';
              $proses=$mysqli->query("SELECT * FROM mvp_cara_daftar order by no_urut asc");
            while ($data=$proses->fetch_object()) {
           ?>

              <li class="">
                  <div class="collapsible-header"><?php echo $data->cara_daftar_judul; ?><i class="mdi-hardware-keyboard-arrow-down"></i></div>
                  <div class="collapsible-body">
                  	  <p>
                           <?php echo $data->cara_daftar_isi; ?>
                      </p>
                  </div>
              </li>
            <?php } ?>
              
            </ul>
          </div>
          <!-- Right Section -->
         

        </div>
      </div>
      </div>
</div>