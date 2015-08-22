
  <!--
  Top Navbar
    Options:
      .navbar-dark - dark color scheme
      .navbar-static - static navbar
      .navbar-under - under sidebar
-->
  <nav class="navbar-top">
    <div class="nav-wrapper">

      <!-- Sidebar toggle -->
      <a href="#" class="yay-toggle">
        <div class="burg1"></div>
        <div class="burg2"></div>
        <div class="burg3"></div>
      </a>
      <!-- Sidebar toggle -->

      <!-- Logo -->
      <a href="../index.php" class="brand-logo">
        <img src="../img/logomvpadmin.png" alt="MVP ">
      </a>
      <!-- /Logo -->

      <!-- Menu -->
      <ul>
        
        <li class="user">
          <a class="dropdown-button" href="#!" data-activates="user-dropdown">
            <img src="../assets/admin/images/user.png" alt="user" class="circle"><?php echo $_SESSION['nama_depan']; ?><i class="mdi-navigation-expand-more right"></i>
          </a>

          
        </li>
      </ul>
      <!-- /Menu -->

    </div>
  </nav>
  <!-- /Top Navbar -->