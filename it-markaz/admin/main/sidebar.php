<?php
  define("APPURL", "http://it-markaz");
?>
<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
    <!-- <a class="sidebar-brand brand-logo" href="index.php">Admin Panel</a> -->
    <h3>Admin Panel</h3>
    <a class="sidebar-brand brand-logo-mini" href="index.php"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
  </div>
  <ul class="nav">
    <li class="nav-item profile">
      <div class="profile-desc">
        <div class="profile-pic">
          <div class="count-indicator">
            <img class="img-xs rounded-circle " src="assets/images/faces/face15.jpg" alt="">
            <span class="count bg-success"></span>
          </div>
          <div class="profile-name">
            <h5 class="mb-0 font-weight-normal">Rufat Mirzokabulov</h5>
            <span>Admin</span>
          </div>
        </div>
       
        
      </div>
    </li>
    <li class="nav-item nav-category">
      <span class="nav-link">Navigatsiya</span>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" href="rezident.php">
        <span class="menu-icon">
          <i class="mdi mdi-calendar-text"></i>
        </span>
        <span class="menu-title">Rezidentlar</span>
      </a>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <span class="menu-icon">
          <i class="mdi mdi-laptop"></i>
        </span>
        <span class="menu-title">Kurslar</span>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="./kurs-kiritish.php">Kurs kiritish</a></li>
          <li class="nav-item"> <a class="nav-link" href="./kurs.php">Kurs ko'rish</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <span class="menu-icon">
          <i class="mdi mdi-television-guide"></i>
        </span>
        <span class="menu-title">Yangiliklar</span>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="./yangilik-kiritish.php">Yangilik kiritish</a></li>
          <li class="nav-item"> <a class="nav-link" href="./yangilik-kurish.php">Yangilik ko'rish</a></li>
        </ul>
      </div>
    </li>
  </ul>
</nav>