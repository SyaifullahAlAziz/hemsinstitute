 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
     <a href="index3.html" class="brand-link">
         <span class="brand-text font-weight-light" style="margin-left:20px;">Hem's Institute</span>
     </a>

     <!-- Sidebar -->
     <div class="sidebar">
         <!-- Sidebar user panel (optional) -->
         <div class="user-panel mt-3 pb-3 mb-3 d-flex">
             <div class="image">
                 <img src="{{ asset('backend/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                     alt="User Image">
             </div>
             <div class="info">
                 <a href="#" class="d-block">Admin</a>
             </div>
         </div>

         <!-- Sidebar Menu -->
         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                 data-accordion="false">
                 <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                 <li class="nav-item menu-open">
                     <a href="{{ route('admin_dashboard') }}" class="nav-link active">
                         <i class="nav-icon fas fa-tachometer-alt"></i>
                         <p>
                             Home
                         </p>
                     </a>
                 </li>

                 <li class="nav-item">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fas fa-copy"></i>
                         <p>
                             Profile Company
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="{{ route('slider_company') }}" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Slider</p>
                             </a>
                         </li>

                         <li class="nav-item">
                             <a href="{{ route('admin-profile') }}" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Visi, Misi</p>
                             </a>
                         </li>

                         <li class="nav-item">
                             <a href="{{ route('admin-pengurus') }}" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Profile Pengurus</p>
                             </a>
                         </li>

                         <li class="nav-item">
                             <a href="{{ route('admin-armada') }}" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Paket</p>
                             </a>
                         </li>


                         {{-- <li class="nav-item">
                             <a href="{{ route('admin-persyaratan-program') }}" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Persyaratan Program</p>
                             </a>
                         </li> --}}

                         <li class="nav-item">
                             <a href="{{ route('admin-galeri') }}" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Galeri Foto</p>
                             </a>
                         </li>

                         {{-- <li class="nav-item">
                             <a href="{{ route('admin-galeri-video') }}" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Galeri Video</p>
                             </a>
                         </li> --}}
                         
                         <li class="nav-item">
                            <a href="{{ route('admin-berita') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Berita</p>
                            </a>
                        </li>

                         <li class="nav-item">
                             <a href="{{ route('admin-kontak') }}" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Kontak</p>
                             </a>
                         </li>

                         {{-- <li class="nav-item">
                             <a href="{{ route('admin-karir') }}" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Testimoni</p>
                             </a>
                         </li> --}}

                     </ul>
                 </li>


                 {{-- <li class="nav-item">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fas fa-edit"></i>
                         <p>
                             Master
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="{{ route('user_company') }}" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Data User</p>
                             </a>
                         </li>

                         <li class="nav-item">
                             <a href="{{ route('calon-siswa') }}" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Data Calon Siswa</p>
                             </a>
                         </li>

                     </ul>
                 </li> --}}

                 <li class="nav-item">
                     <a href="{{ route('aksi_logout_admin') }}" class="nav-link">
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
