 <!-- /.navbar-top-links -->

 <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li class="sidebar-search">
                                <div class="input-group custom-search-form">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                                <!-- /input-group -->
                            </li>
                            <li>
                                <a href="<?= base_url('admin') ?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                            </li>
                            <li>
                                <a href="<?= base_url('mapel') ?>"><i class="fa fa-address-card"></i> Mata Pelajaran<span class="fa arrow"></span></a>
                                
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="<?= base_url('guru'); ?>"><i class="fa fa-book"></i> Guru</a>
                            </li>

                            <li>
                                <a href="<?= base_url('siswa'); ?>"><i class="fa fa-mortar-board"></i> Siswa</a>
                            </li>

                            <li>
                                <a href="<?= base_url('pengumuman'); ?>"><i class="fa fa-bell"></i> Pengumuman</a>
                            </li>

                            <li>
                                <a href="<?= base_url('berita'); ?>"><i class="fa fa-newspaper-o"></i> Berita</a>
                            </li>

                            <li>
                                <a href="<?= base_url('galeri'); ?>"><i class="fa fa-picture-o"></i> Galeri</a>
                            </li>

                            <li>
                                <a href="<?= base_url('admin/setting'); ?>"><i class="fa fa-cog"></i> Setting</a>
                            </li>

                            <li>
                                <a href="<?= base_url('login/logout')?>"><i class="fa fa-edit fa-fw"></i> Logout</a>
                            </li>
                            <li>
                              
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>

            <!-- Page Content -->
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header"><?= $title2 ?></h1>
                        