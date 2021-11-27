    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional)
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="assets/theme/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div> -->

      <!-- SidebarSearch Form
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column text-sm" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <?php
          $main_menu = $this->db->get_where('sys_navbar', array('parent_id' => 0, 'active' => 1));
          // $n = $main_menu->result();
          // var_dump($n);
          // die;
          foreach ($main_menu->result() as $main) {
            //Query untuk mencari data sub menu
            $sub_menu = $this->db->get_where('sys_navbar', array('parent_id' => $main->navbar_id, 'active' => 1));
            //periksa apakah ada sub menu
            if ($sub_menu->num_rows() > 0) {
          ?>

              <li class="nav-item">
                <a href="<?php echo base_url() ?>" class="nav-link">
                  <?php echo $main->navbar_icon; ?>
                  <p><?php echo $main->navbar_name; ?><i class="right fas fa-angle-left"></i></p>
                </a>
                <ul class="nav nav-treeview">
                  <?php
                  foreach ($sub_menu->result() as $sub) {
                  ?>
                    <?php if ($title == $main->navbar_name) : ?>
                      <li class="nav-item bg-info">
                      <?php else : ?>
                      <li class="nav-item bg-dark">
                      <?php endif; ?>
                      <a href="<?php echo base_url($sub->url) ?>" class="nav-link">
                        <i class="nav-icon fas fa-empty-set"></i>
                        <p><?php echo $sub->navbar_name; ?></p>
                      </a>
                      </li>
                    <?php
                  }
                    ?>
                </ul>
              </li>
            <?php
            } else {
            ?>
              <?php if ($title == $main->navbar_name) : ?>
                <li class="nav-item bg-info">
                <?php else : ?>
                <li class="nav-item">
                <?php endif; ?>
                <a href="<?php echo base_url($main->url) ?>" class="nav-link">
                  <?php echo $main->navbar_icon; ?>
                  <p><?php echo $main->navbar_name; ?></p>
                </a>
                </li>
            <?php
            }
          }
            ?>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->