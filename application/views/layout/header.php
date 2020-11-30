 <!-- Sidebar Toggle (Topbar) -->
 <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
   <i class="fa fa-bars"></i>
 </button>

 <!-- Topbar Search -->

 <!-- Topbar Navbar -->
 <ul class="navbar-nav ml-auto">

   <!-- Nav Item - Search Dropdown (Visible Only XS) -->
   <li class="nav-item dropdown no-arrow d-sm-none">
     <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
       <i class="fas fa-search fa-fw"></i>
     </a>
     <!-- Dropdown - Messages -->
     <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
       <form class="form-inline mr-auto w-100 navbar-search">
         <div class="input-group">
           <input type="text" class="form-control bg-light border-0 small" placeholder="Cari" aria-label="Search" aria-describedby="basic-addon2">
           <div class="input-group-append">
             <button class="btn btn-success" type="button">
               <i class="fas fa-search fa-sm"></i>
             </button>
           </div>
         </div>
       </form>
     </div>
   </li>

   <span class="mr-0 d-none d-lg-inline text-gray-500 small mt-4">Selamat Datang</span>
   <div class="topbar-divider d-none d-sm-block"></div>

   <!-- Nav Item - User Information -->
   <li class="nav-item dropdown no-arrow">
     <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
       <span class="mr-2 ml-auto d-none d-lg-inline text-gray-600 small"><?php echo $this->session->userdata('pemilik'); ?></span>
       <img class="img-profile rounded-circle" src="assets/img/profile/profile.jpg">
     </a>
     <!-- Dropdown - User Information -->
     <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
       <a class="dropdown-item" href="<?php echo base_url(); ?>/profile">
         <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
         Profile
       </a>
       <a class="dropdown-item" href="#">
         <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
         Settings
       </a>
       <a class="dropdown-item" href="#">
         <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
         Activity Log
       </a>
       <div class="dropdown-divider"></div>

       <a class="dropdown-item" href="" data-toggle="modal" data-target="#logoutModal">
         <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
         Keluar
       </a>
     </div>
   </li>

 </ul>