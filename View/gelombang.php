<div id="gelombang" class="scrollspy">
<div class="whitebg">
	<div class="container center">
    
    	<h1 class="marbot15 wow fadeInUp animated" data-wow-delay="300ms">Info Pendaftaran</h1>
                <div class="hr-line"><i class="mdi-action-star-rate"></i></div>
	  <div class="tag padding-25-per">Berikut info pendaftaran Gelombang I hingga Gelombang IV</div>
                
    	<div class="col s12 m9 l10 martop60">
        	<div class="row">
            	<hr>
            	<div id="introduction" class="section scrollspy">
                    <ul class="tabs tab-demo z-depth-1">
                    <?php 
                          include_once 'config/koneksi.php';
                          $proses=$mysqli->query("SELECT * FROM mvp_info order by info_judul asc");
                          while($data=$proses->fetch_object()) {
                          
                     ?>
                        <li class="tab col s3"><a href="#<?php echo $data->info_id; ?>"><?php echo $data->info_judul; ?></a></li>
                      <?php } ?>
                    </ul>
              </div>
            </div>
        </div>
    </div>

<div class="tab-sections">
<!-- Section 1 -->
<?php 
include_once 'config/koneksi.php';
$no=1;
$proses=$mysqli->query("SELECT * FROM mvp_info order by info_judul asc");
while($data=$proses->fetch_object()) {

?>
  <div id="<?php echo $data->info_id; ?>" class="col s12 m12 16 menu-type-one">
        
        <div class="tab-content">
          <div class="container">
              <div class="row">
                  <h4 class="center">
                    <?php echo $data->info_keterangan; ?></h4>
                    
                    <div class="col s12 martop60">
             <!-- first row -->
                      
             <!-- item1 -->
                  <?php 
                    $prosesdetail=$mysqli->query("SELECT * FROM mvp_info_detail where info_id='$data->info_id'  order by info_detail_judul asc");
                    while($datadetail=$prosesdetail->fetch_object()) {
                         if ($no==1) 
                         {
                   ?>
                      <div class="clearfix">
                        <div class="col l6 s12 marbot30">
                          
                            <div class="title-left">
                              <?php echo $datadetail->info_detail_judul; ?>
                            </div>

                            <div class="left-content">
                              <?php echo $datadetail->info_detail_keterangan; ?>
                            </div>
                        </div>
                    <?php 
                        $no=2;
                        }
                        elseif ($no==2) {
                     ?>
                        
              <!-- //item 1 end -->          
              <!-- item 2 -->             
                        <div class="col l6 s12 marbot30">
                          
                           <div class="title-right">
                              <?php echo $datadetail->info_detail_judul; ?>
                            </div>

                            <div class="right-content">
                              <?php echo $datadetail->info_detail_keterangan; ?>
                            </div>
                        </div>
             <!-- //item 2 end -->
                        </div>
                        <?php 
                          $no=1;
                        } 

                      }?>
                        

               <!-- third row end -->         
                    </div>   
                </div>
            </div>
        </div>
    </div>   
<?php } ?>



<!-- Section 1 -->



</div>
</div>
</div>