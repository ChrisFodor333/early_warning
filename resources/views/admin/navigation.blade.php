<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-dark">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <!--
    <li class="nav-item d-none d-sm-inline-block">
      <a href="index3.html" class="nav-link">Home</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="#" class="nav-link">Contact</a>
    </li>
  -->
  </ul>

</nav>

<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="<?php echo url('/pro-admin/'); ?>" class="brand-link">
    <img src="/early_warning/assets/content/themes/finance/icon/favicon.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">DBC 2.0</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="/early_warning/assets/content/themes/finance/icon/favicon.png" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="<?php echo url('/pro-admin/profile'); ?>" class="d-block">{{session()->get('userName')}}</a>
      </div>
    </div>

    <!-- SidebarSearch Form -->


    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->



        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
              Charts
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="pages/charts/chartjs.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>ChartJS</p>
              </a>
            </li>

          </ul>
        </li>


        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-table"></i>
            <p>
              Tables
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="pages/tables/simple.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Simple Tables</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/tables/data.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>DataTables</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/tables/jsgrid.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>jsGrid</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-header">USER ACTIONS</li>
        <li class="nav-item">
          <a href="<?php echo url('/pro-admin/profile'); ?>" class="nav-link">
            <i class="nav-icon fas fa-lock"></i>
            <p>
              Profile
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo url('/pro-admin/addadmin'); ?>" class="nav-link">
            <i class="nav-icon far fa-user"></i>
            <p>
              Add Admin
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo url('/pro-admin/users'); ?>" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Admins
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo url('/pro-admin/logout');?>" class="nav-link">
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p>
            Log Out
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
