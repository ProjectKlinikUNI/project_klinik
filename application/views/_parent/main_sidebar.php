  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-info elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url() ?>" class="brand-link bg-info">
      <img src="<?php echo base_url('assets/theme/img/logoIDI.png') ?>" alt="IDI" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Praktek Dr. Dicky</span>
    </a>

    <?php
    $this->view('_parent/sidebar.php');
    ?>
  </aside>