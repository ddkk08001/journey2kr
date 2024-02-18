<!-- this file should be named store_navbar -->
<?php
session_start();
?>
<nav class="navbar justify-content-center navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="store_index.php">Journey to Korea</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="../main.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../map.html">Map</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../subpages/speicalevent.html">SpeicalEvent</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="./store_index.php" aria-current="page">Store<span
              class="visually-hidden">(current)</span></a>
        </li>
      </ul>
      <?php
      if ($_SESSION['logged_in']) {
        ?>

        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              <?php echo $_SESSION['logged_in_user']; ?>
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownId">
              <a class="dropdown-item" href="./store_view_cart.php">My Cart</a>
              <a class="dropdown-item" aria-current="page" href="store_logout.php">Logout</a>
            </div>
          </li>
          


          <?php
          // This section of code will only show the control if the user has 'admin' as their role.  
          // you can change the admin role in phpmyadmin to whatever you want.
          // users are in the users table.
        
          if ($_SESSION['logged_in_role'] == 'admin') {
            ?>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="store_control_panel.php">control panel</a>
            </li>
          <?php } ?>



        </ul>
        <?php
      } else {
        ?>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="store_login.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="store_register.php">Register</a>
          </li>
        </ul>
      <?php } ?>

    </div>
  </div>
</nav>