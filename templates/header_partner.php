<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="http://localhost/33biblioteca_Local/img/fav/logo_size_invert.jpg" type="image/x-icon">
    <title>Homer's Library</title>
    <link rel="stylesheet" href="css_templates/partner.css">
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
            <h3> <a href="partner.php">Homer's <span>Library</span></a></h3>
        </div>
    </header>
    <!--header area end-->
    <!--mobile navigation bar start-->
    <div class="mobile_nav">
        <div class="nav_bar">
            <img src="https://remotehost.es/student33/dwes/img/user.png" class="mobile_profile_image" alt="">
            <i class="fa fa-bars nav_btn"></i>
        </div>
        <div class="mobile_nav_items">
            <a href="https://remotehost.es/student33/dwes/templates/partner.php"><i
                    class="fas fa-home"></i><span>Home</span></a>
            <a href="https://remotehost.es/student33/dwes/templates/workInProgress.php"><i
                    class="fas fa-book-reader"></i><span>Books</span></a>
            <a href="https://remotehost.es/student33/dwes/templates/workInProgress.php"><i
                    class="fas fa-cart-arrow-down"></i><span>Bookings</span></a>
            <a href="https://remotehost.es/student33/dwes/forms/form_update_profile.php"><i
                    class="fas fa-user-cog"></i></i><span>Profile</span></a>
            <a href="https://remotehost.es/student33/dwes/forms/log_out_user.php"><i
                    class="fas fa-sign-out-alt"></i><span>Logout</span></a>
        </div>
    </div>
    <!--mobile navigation bar end-->
    <!--sidebar start-->
    <div class="sidebar">
        <div class="profile_info">
            <img src="https://remotehost.es/student33/dwes/img/user.png" class="profile_image" alt="">
            <h4><?php echo $_SESSION['username']['first_name']; ?></h4>
        </div>
        <a href="https://remotehost.es/student33/dwes/templates/partner.php"><i
                class="fas fa-home"></i><span>Home</span></a>
        <a href="https://remotehost.es/student33/dwes/templates/workInProgress.php"><i
                class="fas fa-book-reader"></i><span>Books</span></a>
        <a href="https://remotehost.es/student33/dwes/templates/workInProgress.php"><i
                class="fas fa-cart-arrow-down"></i><span>Bookings</span></a>
        <a href="https://remotehost.es/student33/dwes/forms/form_update_profile.php"><i
                class="fas fa-user-cog"></i></i><span>Profile</span></a>
        <a href="https://remotehost.es/student33/dwes/forms/log_out_user.php"><i
                class="fas fa-sign-out-alt"></i><span>Logout</span></a>
    </div>
    <!--sidebar end-->