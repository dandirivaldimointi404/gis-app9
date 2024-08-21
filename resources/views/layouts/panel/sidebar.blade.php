 <!--**********************************
            Sidebar start
        ***********************************-->
 <div class="nk-sidebar">
     <div class="nk-nav-scroll">
         <ul class="metismenu" id="menu">
             <li class="nav-label">Pendataan Pertumbuhan Penduduk</li>
             <li>
                 <a href="{{ route('dberanda.index') }}" aria-expanded="false">
                     <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                 </a>
             </li>

             <li class="nav-label">Data Wilayah</li>
             <li>
                 <a href="{{ route('dkelurahan.index') }}" aria-expanded="false">
                     <i class="fa fa-university"></i><span class="nav-text">Data Kelurahan</span>
                 </a>
             </li>
             <li>
                 <a href="{{ route('drt.index') }}" aria-expanded="false">
                     <i class="fa fa-building"></i><span class="nav-text">Data RT</span>
                 </a>
             </li>
             <li class="nav-label">Management Data</li>
             <li>
                 <a href="{{ route('dpengguna.index') }}" aria-expanded="false">
                     <i class="fa fa-users"></i><span class="nav-text">Data Pengguna</span>
                 </a>
             </li>
             <li>
                 <a href="{{ route('dpertumbuhan.index') }}" aria-expanded="false">
                     <i class="fa fa-male"></i><span class="nav-text">Pertumbuhan Penduduk</span>
                 </a>
             </li>
         </ul>
     </div>
 </div>
 <!--**********************************
          Sidebar end
      ***********************************-->
