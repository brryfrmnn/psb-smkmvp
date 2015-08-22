  <!--
  Yay Sidebar
  Options [you can use all of theme classnames]:
    .yay-hide-to-small         - no hide menu, just set it small with big icons
    .yay-static                - stop using fixed sidebar (will scroll with content)
    .yay-gestures              - to show and hide menu using gesture swipes
    .yay-light                 - light color scheme
    .yay-hide-on-content-click - hide menu on content click

  Effects [you can use one of these classnames]:
    .yay-overlay  - overlay content
    .yay-push     - push content to right
    .yay-shrink   - shrink content width
-->
  <aside class="yaybar yay-shrink yay-hide-to-small yay-gestures">

    <div class="top">
      <div>
        <!-- Sidebar toggle -->
        <a href="#" class="yay-toggle">
          <div class="burg1"></div>
          <div class="burg2"></div>
          <div class="burg3"></div>
        </a>
        <!-- Sidebar toggle -->

        <!-- Logo -->
        <a href="#!" class="brand-logo">
          <img src="../img/logomvpadmin.png" alt="mvp">
        </a>
        <!-- /Logo -->
      </div>
    </div>


    <div class="nano">
      <div class="nano-content">

        <ul>
          <li class="label">Menu</li>
          <li>
                <a href="index.php" class="waves-effect waves-blue"><i class="fa fa-dashboard"></i>Dashboard</a>
          </li>

          <li>
                <a href="index.php?key=pendaftar.php" class="waves-effect waves-blue"><i class="fa fa-edit"></i> Pendaftar</a>
          </li>

          <li>
                <a class="yay-sub-toggle waves-effect waves-blue"><i class="fa fa-users"></i> Data Calon Siswa<span class="yay-collapse-icon mdi-navigation-expand-more"></span></a>
               <UL>
                 <li> <a href="index.php?key=datacalonsiswa.php" class="waves-effect waves-blue"> Data Calon Siswa</a></li>
                 <li> <a href="index.php?key=dokumencalonsiswa.php" class="waves-effect waves-blue"> Dokumen Calon Siswa</a></li>
               </UL>
          </li>
          <li>
            <a href="index.php?key=datakonfirmasi.php" class="waves-effect waves-blue"><i class="fa fa-check-square-o"></i> Data Konfirmasi</a>
          </li>

          <li>
            <a href="index.php?key=seleksi.php" class="waves-effect waves-blue"><i class="fa fa-check-square-o"></i> Seleksi</a>
          </li>

          

          
          <li class="label">Extra</li>
          <li>
            <a class="waves-effect waves-blue" href="index.php?key=mailbox.php"><i class="fa fa-envelope"></i> Mailbox</a>
          </li>

          

        <li>
            <a class="yay-sub-toggle waves-effect waves-blue"><i class="fa fa-bar-chart"></i> Laporan<span class="yay-collapse-icon mdi-navigation-expand-more"></span></a>
            <ul>
              <li><a class="waves-effect waves-blue" href="index.php?key=laporanditerima.php">Calon siswa diterima</a>
              </li>
              <li><a class="waves-effect waves-blue" href="index.php?key=laporantidakditerima.php">Calon siswa tidak diterima</a>
              </li>
              <li><a class="waves-effect waves-blue" href="index.php?key=pembelianformulir.php">Pembelian Formulir</a>
              </li>
              
              
            </ul>
        </li>
        <li>
            <a href="index.php?key=pengaturan.php" class="waves-effect waves-blue"><i class="fa fa-cogs"></i> Pengaturan</a>
        </li>
        <li>
            <a href="../logout.php" class="waves-effect waves-blue"><i class="fa fa-sign-out"></i> Keluar</a>
        </li>
        </ul>

      </div>
    </div>
  </aside>
  <!-- /Yay Sidebar -->