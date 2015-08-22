<?php 
if (empty($_GET['key'])) 
{
  $home='#home';
  $caramendaftar='#caramendaftar ';
  $gelombang='#gelombang';
  $kontak = '#kontak';
  $masuk = '#masuk';
}
else
{
  $home='index.php#home';
  $caramendaftar='index.php#caramendaftar ';
  $gelombang='index.php#gelombang';
  $kontak = 'index.php#kontak';
  $masuk = 'index.php#masuk';
}

 ?>
<div id="fixed-header">
<div class="header-inner">
<nav class="whitestrip">
    <div class="nav-wrapper">
      <a href="#home" class="brand-logo"><img src="img/mvp.png" width="56" alt=" "></a>
      <ul id="sub-nav" class="nav right">
        <li><a href="<?php echo $home; ?>" class="smoothscroll">Beranda</a></li>
        <li><a href="<?php echo $caramendaftar; ?>" class="smoothscroll">Cara Mendaftar</a></li>
        <li><a href="<?php echo $gelombang; ?>">Info Pendaftaran</a></li>
        <li><a href="<?php echo $kontak; ?>">Kontak Kami</a></li>
        <?php if (isset($_GET['key'])) 
        {
          if ($_GET['key']=='reg') 
          {
          ?>
        <li><a href="#" class="active">Daftar</a></li>
          <?php 
          }
        }  
            if (empty($_SESSION['session_id']))
              {
            ?> 
        <li><a href="<?php echo $masuk; ?>">Masuk</a></li>
          <?php }
          elseif($_SESSION['status']=='0')
          {
            if ($_SESSION['status_konfirmasi']=='1') 
            {
            ?>
          <li><a href="adminview/">Data Siswa</a></li>
         <li><a href="logout.php">Keluar</a></li> 
        <?php 
              }
              else
              {
                ?>
               <li><a href="logout.php">Keluar</a></li>
              <?php
              }
            }
          elseif ($_SESSION['status']=='1') {
         ?>
         <li><a href="adminview/">Admin</a></li>
         <li><a href="logout.php">Keluar</a></li> 
         <?php } ?>
            
      </ul>
    </div>
  </nav>
</div>
</div>