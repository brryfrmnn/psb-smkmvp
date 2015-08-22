<div class="page-title">

      <div class="row">
        <div class="col s12 m9 l10">
        <?php 
          if (empty($_GET['key'])) 
          {
            $link="?=home";
            $title="Dashboard";
          }
          else
          {
            switch ($_GET['key']) {
              case 'datasiswa':
                $link="?=datasiswa";
                $title="Data Siswa";
                break;
              
              default:
                $link="?=home";
                $title="Dashboard";
                break;
            }
          }
         ?>
          <h1><?php echo $title; ?></h1>

          <ul>
            <li>
              <a href="index.php"><i class="fa fa-home"></i> Home</a>  <i class="fa fa-angle-right"></i>
            </li>

            <li><a href='<?php echo $link; ?>'><?php echo $title; ?></a>  <i class='fa fa-angle-right'></i>
            </li>
          </ul>
        </div>
      </div>

    </div>