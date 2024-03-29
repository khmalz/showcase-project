 <!-- ======= Sidebar ======= -->
 <aside class="sidebar" id="sidebar">

     <ul class="sidebar-nav" id="sidebar-nav">

         <li class="nav-item">
             <a class="nav-link {{ request()->routeIs('dashboard') ? null : 'collapsed' }}"
                 href="{{ route('dashboard') }}">
                 <i class="bi bi-grid"></i>
                 <span>Dashboard</span>
             </a>
         </li>

         <li class="nav-heading">Project</li>

         <li class="nav-item">
             <a class="nav-link {{ request()->routeIs('admin.project.*') ? null : 'collapsed' }}"
                 href="{{ route('admin.project.list') }}">
                 <i class='bx bx-folder'></i>
                 <span>List</span>
             </a>
         </li>

         <li class="nav-item">
             <a class="nav-link {{ request()->routeIs('admin.tag.*') ? null : 'collapsed' }}"
                 href="{{ route('admin.tag.index') }}">
                 <i class='bx bx-layer'></i>
                 <span>Tag</span>
             </a>
         </li>

         <li class="nav-heading">Account</li>

         <li class="nav-item">
             <a class="nav-link {{ request()->routeIs('admin.user.admin.*') ? null : 'collapsed' }}"
                 href="{{ route('admin.account.index') }}">
                 <i class="bi bi-person-gear"></i>
                 <span>Admin</span>
             </a>
         </li>

         <li class="nav-item">
             <a class="nav-link {{ request()->routeIs('admin.user.*') ? null : 'collapsed' }}"
                 href="{{ route('admin.user.index') }}">
                 <i class="bi bi-person"></i>
                 <span>User</span>
             </a>
         </li>

         {{-- <li class="nav-heading">Notification</li>

         <li class="nav-item">
             <a class="nav-link {{ request()->routeIs('admin.inbox.*') ? null : 'collapsed' }}" href="#">
                 <i class="bi bi-info-circle"></i>
                 <span>Inbox</span>
             </a>
         </li>

         <li class="nav-item">
             <a class="nav-link {{ request()->routeIs('admin.activity') ? null : 'collapsed' }}" href="#">
                 <i class='bx bx-history'></i>
                 <span>Activity</span>
             </a>
         </li> --}}

         <li class="nav-heading">Extras</li>

         <li class="nav-item">
             <a class="nav-link {{ request()->routeIs('admin.register-toggle') ? null : 'collapsed' }}"
                 href="{{ route('admin.register-toggle') }}">
                 <i class="bi bi-arrow-right-square"></i>
                 <span>Register Toggle</span>
             </a>
         </li>
     </ul>

 </aside>
 <!-- End Sidebar-->
