<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url('dashboard'); ?>" class="brand-link" style="
    border-bottom: 3px solid #fff;
    margin-top: 67px;">
      <img src="<?php echo base_url();?>assest/dist/img/logo_dashboard.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="/* opacity: .8; */max-height: 71px;margin-left: 76px;margin-top: -67px;">
     </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          
          
        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-user"></i>
              <p>
                 User Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a><br>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('create-user');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('user-list'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User List</p>
                </a>
              </li>
            </ul>
          </li>
           </ul>
         </li>
          
          
           
          </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
