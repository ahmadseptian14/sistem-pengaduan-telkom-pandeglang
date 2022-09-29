<ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

    <img src="{{asset('/assets/img/logo-telkom.png')}}" alt="">
    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{route('dashboard.index')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    
    <li class="nav-item active">
        <a class="nav-link" href="{{route('pengaduan.index')}}">
            <i class="fas fa-fw fa-list"></i>
            <span>Lihat Data Pengaduan</span></a>
    </li>

    @if (Auth::user()->roles == 'ADMIN')
    <li class="nav-item active">
        <a class="nav-link" href="{{route('cetak.form')}}">
            <i class="fas fa-fw fa-list"></i>
            <span>Export Laporan Pengaduan</span></a>
    </li>

    <li class="nav-item active">
        <a class="nav-link" href="{{route('customer.index')}}">
            <i class="fas fa-fw fa-user"></i>
            <span>Kelola Data Pelanggan</span></a>
    </li>
    @endif
   

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>