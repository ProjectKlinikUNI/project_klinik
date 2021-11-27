<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  $this->view('_parent/head.php');
  ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="assets/theme/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>

    <?php
    $this->view('_parent/navbar.php');
    ?>

    <?php
    $this->view('_parent/main_sidebar.php');
    ?>

    <?php
    //$this->view('_parent/content_wrapper.php');
    echo $content_wrapper;
    ?>

    <?php
    $this->view('_parent/footer.php');
    ?>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->


  <!-- JS -->
  <script src="assets/js/js.js"></script>
  <!-- jQuery -->
  <script src="<?= base_url('assets/plugins/jquery/jquery.min.js') ?>"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="<?= base_url('assets/plugins/jquery-ui/jquery-ui.min.js') ?>"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="<?= base_url() ?>assets/plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="<?= base_url() ?>assets/plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="<?= base_url() ?>assets/plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="<?= base_url() ?>assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="<?= base_url() ?>assets/plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="<?= base_url() ?>assets/plugins/moment/moment.min.js"></script>
  <script src="<?= base_url() ?>assets/plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="<?= base_url() ?>assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="assets/plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="<?= base_url() ?>assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url() ?>assets/theme/js/adminlte.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="assets/theme/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="<?= base_url() ?>assets/theme/js/pages/dashboard.js"></script>

  <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
  <script src="<?= base_url() ?>assets/js/bootstrap.bundle.js"></script>


  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

  <!-- sweet alert -->
  <script src="assets/plugins/sweetalert2/sweetalert2.all.js"></script>
  <!-- memanggail sweet alert -->


  <!-- DaataTables -->
  <script src="assets/DataTables/DataTables-1.11.3/js/jquery.dataTables.min.js"> </script>
  <script src="assets/DataTables/DataTables-1.11.3/js/dataTables.bootstrap4.min.js">
  </script>
  <!-- Memanggil Data Tables -->
  <script>
    $(document).ready(function() {
      $('#table').DataTable();
      $('#idDokter').select2({
        placeholder: "Masukkan nama dokter"
      })
      $('#idPasien').select2({
        placeholder: "Masukkan Id Pasien"
      })
      const message = $('.message').data('message');
      console.log();
    });
  </script>
</body>

</html>