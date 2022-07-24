<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
   <!-- Brand Logo -->
   <!-- <a href="<?= base_url(); ?>" class="brand-link"> -->
   <!-- <img src="<?= base_url(); ?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
   <!-- <div class="brand-img-logo"> -->
   <!-- <img src="<?= base_url($this->general_settings['logo']); ?>" alt="AdminLTE Logo" class="evation-3" > -->
   <!-- <img src="<?= base_url($this->general_settings['logo']); ?>" alt="AdminLTE Logo" class="brand-image elevation-3" style="opacity: .8">
      </div>
      <span class="brand-text font-weight-light">TEst</span>
      </a> -->
   <div class="brand-link logo-switch">
      <a href="<?= base_url(); ?>/app/dashboard" class="">
      <span class="brand-image-xl logo-xs"><img src="http://plotbazzar.com/logo2.jpg" alt="AdminLTE Docs Logo Small" class="" width='100%'> </span>
      <span class="brand-image-xs logo-xl img-block"><img src="http://plotbazzar.com/logo2.jpg" alt="Plotbazzar Logo" width="90%" ></span>
      </a>
   </div>
   <!-- Sidebar -->
   <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
         <!-- nav-legacy {Externallly added} -->
         <ul class="nav nav-pills nav-sidebar flex-column nav-legacy" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item menu-open1">
               <a href="#" class="nav-link active1">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                     Dashboard
                     <i class="right fas fa-angle-left"></i>
                  </p>
               </a>
               <ul class="nav nav-treeview">
                  <li class="nav-item">
                     <a href="<?= base_url('app/dashboard'); ?>" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Dashboard</p>
                     </a>
                  </li>
               </ul>
            </li>
            <?php if($this->session->userdata('is_admin_login')){?>
            <li class="nav-header" >LOCATIONS</li>
            <li class="nav-item">
               <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-map-marker" aria-hidden="true"></i>
                  <p>
                     Manage District & Taluka
                     <i class="fas fa-angle-left right"></i>
                  </p>
               </a>
               <ul class="nav nav-treeview">
                  <li class="nav-item">
                     <a href="<?= base_url('app/locations/district'); ?>" class="nav-link">
                        <i class="nav-icon fa fa-city" aria-hidden="true"></i>
                        <p>District List</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="<?= base_url('app/locations/taluka'); ?>" class="nav-link">
                        <i class="nav-icon fa fa-map" aria-hidden="true"></i>
                        <p>Taluka List</p>
                     </a>
                  </li>
               </ul>
            </li>
            <li class="nav-header" >AGENT</li>
            <li class="nav-item">
               <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-user" aria-hidden="true"></i>
                  <p>
                     Manage Agent
                     <i class="fas fa-angle-left right"></i>
                  </p>
               </a>
               <ul class="nav nav-treeview">
                  <li class="nav-item">
                     <a href="<?= base_url('app/agents'); ?>" class="nav-link">
                        <i class="nav-icon fa fa-users" aria-hidden="true"></i>
                        <p>All Agents List</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="<?= base_url('app/agents/add'); ?>" class="nav-link">
                        <i class="nav-icon fa fa-user-plus" aria-hidden="true"></i>
                        <p>Add New Agent</p>
                     </a>
                  </li>
               </ul>
            </li>
            <li class="nav-header" >PROPERTY</li>
            <li class="nav-item">
               <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-user" aria-hidden="true"></i>
                  <p>
                     Manage Property
                     <i class="fas fa-angle-left right"></i>
                  </p>
               </a>
               <ul class="nav nav-treeview">
                  <li class="nav-item">
                     <a href="<?= base_url('app/property'); ?>" class="nav-link">
                        <i class="nav-icon fa fa-building" aria-hidden="true"></i>
                        <p>All Property List</p>
                     </a>
                  </li>
               </ul>
            </li>
             <li class="nav-header" >TESTIMONIALS</li>
            <li class="nav-item">
               <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-quote-left" aria-hidden="true"></i>
                  <p>
                     Manage Testimonial
                     <i class="fas fa-angle-left right"></i>
                  </p>
               </a>
               <ul class="nav nav-treeview">
                  <li class="nav-item">
                     <a href="<?= base_url('app/testimonials'); ?>" class="nav-link">
                        <i class="nav-icon fa fa-quote-left" aria-hidden="true"></i>
                        <p>All Testimonial List</p>
                     </a>
                  </li>
               </ul>
            </li>
            <?php } ?>

            <?php if($this->session->userdata('is_tl_login')){?>
            <li class="nav-header" >TEAM MEMBERS</li>
            <li class="nav-item">
               <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-user" aria-hidden="true"></i>
                  <p>
                     Manage Members
                     <i class="fas fa-angle-left right"></i>
                  </p>
               </a>
               <ul class="nav nav-treeview">
                  <li class="nav-item">
                     <a href="<?= base_url('app/tl_member'); ?>" class="nav-link">
                        <i class="nav-icon fa fa-users" aria-hidden="true"></i>
                        <p>All Member List</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="<?= base_url('app/tl_member/add'); ?>" class="nav-link">
                        <i class="nav-icon fa fa-user-plus" aria-hidden="true"></i>
                        <p>Add New Member</p>
                     </a>
                  </li>
               </ul>
            </li>
            <?php } ?>
            <!--  <li class="nav-header" >RECRUITMENT TEAM</li>
               <li class="nav-item">
                  <a href="#" class="nav-link">
                     <i class="nav-icon fa fa-user" aria-hidden="true"></i>
                     <p>
                        Manage Staff Team
                        <i class="fas fa-angle-left right"></i>
                     </p>
                  </a>
                  <ul class="nav nav-treeview">
                     <li class="nav-item">
                        <a href="<?= base_url('app/admin'); ?>" class="nav-link">
                           <i class="nav-icon fa fa-users" aria-hidden="true"></i>
                           <p>Staff Users List</p>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a href="<?= base_url('app/admin/add'); ?>" class="nav-link">
                           <i class="nav-icon fa fa-user-plus" aria-hidden="true"></i>
                           <p>Add Staff Users</p>
                        </a>
                     </li>
                  </ul>
               </li> -->
            <!-- 
               <li class="nav-header" id="admin_roles">ROLES & PERMISSIONS<span class="badge badge-danger float-right" >New</span></li>
               <li class="nav-item">
                  <a href="#" class="nav-link">
                     <i class="fa fa-gavel nav-icon" aria-hidden="true"></i>
                     <p>
                        Roles & Permissions
                        <i class="fas fa-angle-left right"></i>
                     </p>
                  </a>
                  <ul class="nav nav-treeview">
                     <li class="nav-item">
                        <a href="<?= base_url('app/admin_roles/module'); ?>" class="nav-link">
                           <i class="far fa-list-alt nav-icon"></i>
                           <p>Module Setting</p>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a href="<?= base_url('app/admin_roles'); ?>" class="nav-link">
                           <i class="fab fa-critical-role nav-icon"></i>
                           <p>Roles & Permissions</p>
                        </a>
                     </li>
                  </ul>
               </li> -->
            <?php if($this->rbac->check_module_permission('general_settings')): ?>
            <!-- <li class="nav-header">GENERAL<span class="badge badge-danger float-right">New</span></li>
               <li class="nav-item">
                 <a href="<?= base_url('app/general_settings'); ?>" class="nav-link">
                   <i class="nav-icon fa fa-cogs "></i>
                   <p>
                     General Settings
                   </p>
                 </a>
               </li> -->
            <?php endif; ?>
            <?php if($this->rbac->check_module_permission('export')): ?>
            <!--  <li class="nav-item">
               <a href="#" class="nav-link">
                 <i class="nav-icon fas fa-server"></i>
                 <p>
                   Backup & Export
                   <i class="fas fa-angle-left right"></i>
                 </p>
               </a>
               <ul class="nav nav-treeview">
                 <li class="nav-item">
                   <a href="<?= base_url('app/export'); ?>" class="nav-link">
                     <i class="fa fa-database nav-icon"></i>
                     <p>Database Backup</p>
                   </a>
                 </li>
               </ul>
               </li> -->
            <?php endif; ?>
         </ul>
      </nav>
      <!-- /.sidebar-menu -->
   </div>
   <!-- /.sidebar -->
</aside>