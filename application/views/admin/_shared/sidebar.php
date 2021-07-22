<aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="<?=base_url()?>" class="brand-link">
        <img src="<?=base_url()?>public/guest/images/logo.png" alt="AdminLTE Logo" class="brand-image elevation-3"
          style="opacity: .8">
        <span class="brand-text font-weight-light">Wisata Sorong</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <!-- <div class="image">
            <img src="<?=base_url()?>favicon.ico" class="img-circle elevation-2" alt="User Image">
          </div> -->
          <div class="info">
            <h5 style="color:#fff"><?=$this->session->userdata('nama');?></h5>
            <a href="#" class="d-block"><?=$this->session->userdata('role');?> </a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="<?=base_url('admin/home')?>" ng-class="{'nav-link active': header=='Home', 'nav-link': header!='Home'}">
                <i class="nav-icon fas fa-home"></i>
                <p>
                  Home
                </p>
              </a>
            </li>
            <li ng-class="{'nav-item menu-open': header=='Laporan', 'nav-item': header!='Laporan'}">
              <a href="javascript:void()" ng-class="{'nav-link active': header=='Laporan', 'nav-link': header!='Laporan'}">
                <i class="nav-icon fas fa-file"></i>
                <p>
                 Manajemen Data
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?=base_url('admin/users')?>" ng-class="{'nav-link active': title=='Laporan Tempat Usaha', 'nav-link': title!='Laporan Tempat Usaha'}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>User</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?=base_url('admin/wilayah')?>" ng-class="{'nav-link active': title=='Laporan Rekapitulasi', 'nav-link': title!='Laporan Rekapitulasi'}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Kecamatan</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="<?=base_url('admin/wisata')?>" ng-class="{'nav-link active': header=='Petugas', 'nav-link': header!='Petugas'}">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  Wisata
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?=base_url('admin/umkm')?>" ng-class="{'nav-link active': header=='Jenis Usaha', 'nav-link': header!='Jenis Usaha'}">
                <i class="nav-icon fas fa-registered"></i>
                <p>
                  UMKM
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>