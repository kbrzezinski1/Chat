<nav class="navbar navbar-expand-sm bg-light fixed-top">
  <a class="navbar-brand">Czat lamusów</a>
  <div class="collapse navbar-collapse justify-content-end">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Czat</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="autor.php">O autorze</a>
      </li>
      <?php
      session_start();
      if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
      ?>

        <li class="nav-item">
          <a class="nav-link" href="includes/logout.php">Logout</a>
        </li>
      <?php
      } else {
      ?>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="registration.php">Rejestracja</a>
        </li>
      <?php } ?>
    </ul>
  </div>
</nav>