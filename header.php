<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <title>Homer's Library</title>
  <link rel="stylesheet" href="http://localhost/33Biblioteca_Local/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
</head>
<body>
  <input type="checkbox" id="check">
  <!--header area start-->
  <header>
    <label for="check">
      <i class="fas fa-bars" id="sidebar_btn"></i>
    </label>
    <div class="left_area">
      <h3> Homer's <span>Library</span></h3>
    </div>
  </header>
  <!--header area end-->
  <!--mobile navigation bar start-->
  <div class="mobile_nav">
    <div class="nav_bar">
      <img src="http://localhost/33biblioteca_Local/img/user.png" class="mobile_profile_image" alt="">
      <i class="fa fa-bars nav_btn"></i>
    </div>
    <div class="mobile_nav_items">
      <a href="http://localhost/33biblioteca_Local/"><i class="fas fa-home"></i><span>Home</span></a>
      <a href="http://localhost/33biblioteca_Local/form_user_insert.php"><i class="fas fa-user-plus"></i><span>Register</span></a>
      <a href="http://localhost/33biblioteca_Local/log_user.php"><i class="fas fa-sign-in-alt"></i><span>Login</span></a>
      <a href="http://localhost/33biblioteca_Local/workInProgress.php"><i class="fas fa-folder"></i><span>Documentation</span></a>
      <a href="http://localhost/33biblioteca_Local/templates/workInProgress.php"><i class="fas fa-info-circle"></i><span>About</span></a>
    </div>
  </div>
  <!--mobile navigation bar end-->
  <!--sidebar start-->
  <div class="sidebar">
    <div class="profile_info">
      <img src="http://localhost/33biblioteca_Local/img/user.png" class="profile_image" alt="">
      <?php
      session_start();
      if (isset($_SESSION['username']) && ($_SESSION['username']['member_type'] == 1 || $_SESSION['username']['member_type'] == 0)) {
        session_destroy();
      } else {
          echo "<h4>GEST</h4>";
      }
?>
    </div>
    <a href="http://localhost/33biblioteca_Local/"><i class="fas fa-home"></i><span>Home</span></a>
    <a href="http://localhost/33biblioteca_Local/forms/form_user_insert.php"><i class="fas fa-user-plus"></i><span>Register</span></a>
    <a href="http://localhost/33biblioteca_Local/forms/log_user.php"><i class="fas fa-sign-in-alt"></i><span>Login</span></a>
    <a href="http://localhost/33biblioteca_Local/templates/workInProgress.php"><i class="fas fa-folder"></i><span>Documentation</span></a>
    <a href="http://localhost/33biblioteca_Local/templates/workInProgress.php"><i class="fas fa-info-circle"></i><span>About</span></a>
  </div>
  <!--sidebar end-->
