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
                <a href="?key=home" class="waves-effect waves-blue"><i class="fa fa-dashboard"></i>Dashboard</a>
          </li>

          <li>
                <a href="?key=datasiswa" class="waves-effect waves-blue"><i class="fa fa-edit"></i> Data Siswa</a>
          </li>

          <li>
                <a href="?key=file" class="waves-effect waves-blue"><i class="fa fa-users"></i> Unggah Dokumen</a>
          </li>

                    
          

        <li>
            <a href="../logout.php" class="waves-effect waves-blue"><i class="fa fa-sign-out"></i> Keluar</a>
        </li>
        </ul>

      </div>
    </div>
  </aside>
  <!-- /Yay Sidebar -->