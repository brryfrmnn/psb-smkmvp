<!DOCTYPE html>
<!--[if lt IE 7]>  <html class="lt-ie7"> <![endif]-->
<!--[if IE 7]>     <html class="lt-ie8"> <![endif]-->
<!--[if IE 8]>     <html class="lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html>
<!--<![endif]-->


<?php include_once 'head.php'; ?>

<body>

  <section id="sign-in">

    <!-- Background Bubbles -->
    <canvas id="bubble-canvas"></canvas>
    <!-- /Background Bubbles -->

    <!-- Sign In Form -->
    <form action="../proses.php" method="post" data-parsley-validate>
      <div class="row links">
        <div class="col s6 logo">
          
        </div>
        <div class="col s6 offset-s6 right-align"><strong>Sign In</strong> / <a href="page-sign-up.html">Sign Up</a>
        </div>
      </div>

      <div class="card-panel">


        <div class="row">
          <div class="col"></div>
        </div>

        <!-- Username -->
        <div class="input-field">
          <i class="fa fa-user prefix"></i>
          <input id="username-input"  maxlength="12" name="username" type="text" required >
          <label for="username-input">Username</label>
        </div>
        <!-- /Username -->

        <!-- Password -->
        <div class="input-field">
          <i class="fa fa-unlock-alt prefix"></i>
          <input id="password-input" maxlength="30" name="password" type="password" required>
          <label for="password-input">Password</label>
        </div>
        <!-- /Password -->

        <div class="switch">
          <label>
            <input type="checkbox"/>
            <span class="lever"></span>
            Remember
          </label>
        </div>

        <button class="waves-effect waves-light btn-large z-depth-0 z-depth-1-hover" name="login">Login</button>
      </div>

      <div class="links right-align">
        <a href="page-forgot-password.html">Lupa Password?</a>
      </div>

    </form>
    <!-- /Sign In Form -->

  </section>



<?php include_once 'js.php'; ?>

</body>



</html>