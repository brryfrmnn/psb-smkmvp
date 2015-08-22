  <!-- Main Content -->
  <section class="content-wrap">
 

    <!-- Breadcrumb -->
      <?php include_once 'breadcrumb.php'; ?>
    <!-- /Breadcrumb -->
    <!--place content here-->
        <?php 
        	if (empty($_GET['key'])) 
        	{
        		include_once 'dashboard.php';
        	}
        	else
        	{
        		switch ($_GET['key']) {
        			case 'datasiswa':
                $id=$_SESSION['session_id'];
                include '../config/koneksi.php';
                $proses=$mysqli->query("select user_id from mvp_calon_siswa where user_id='$id'");
                $ketemu=$proses->num_rows;
                if ($ketemu) {
                  include_once '../controller/tampildatasiswa.php';
                  break;
                }
                else
                {
                  include_once 'input.php';
                  break;
                }
              case 'file':
                $id=$_SESSION['session_id'];
                include '../config/koneksi.php';
                $proses=$mysqli->query("select user_id from mvp_file_calon_siswa where user_id='$id'");
                $ketemu=$proses->num_rows;
                if ($ketemu) {
                  include_once '../controller/tampilfileupload.php';
                  break;
                }
                else
                {
                  include_once 'uploadfile.php';
                  break;
                }
                case 'uploadfile':
                  include_once 'uploadfile.php';
                  break;              
        			
                case $_GET['key']:
                  if (file_exists($_GET['key'])) {
                    include_once $_GET['key'];
                  }
                  else
                  {
                    include_once 'dashboard.php';
                  }
                  break;
        			default:

        				include_once 'dashboard.php';
        				break;
        		}
        	}
         ?>
    <!-- end place content-->


  </section>
  <!-- /Main Content -->