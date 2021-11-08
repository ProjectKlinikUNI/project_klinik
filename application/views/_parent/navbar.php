  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark bg-info fixed-top">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <!--
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo base_url('/dashboard') ?>" class="nav-link">Home</a>
      </li>
      -->
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-item nav-link dropdown-toggle mr-md-2" href="#" id="bd-versions" data-toggle="dropdown" aria-expanded="false">
          Dokter
        </a>
        <div class="dropdown-menu dropdown-menu-md-right" aria-labelledby="bd-versions">
          <a class="dropdown-item active" href="#">Profil</a>
          <a class="dropdown-item" href="<?= base_url('auth/logout'); ?>">Logout </a>

        </div>
      </li>

    </ul>
  </nav>
  <!-- /.navbar -->