<ul class="navbar-nav ml-auto">
    
    
    <h3 style="margin-right: 600px; margin-top: 20px">Layanan Pengaduan Telkom Pandeglang</h3>
    <!-- Nav Item - User Information -->
    <li class="nav-item dropdown no-arrow ">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-bell fa-fw"></i>
          @php
               $pengaduan = App\Models\Pengaduan::where('status', 'Belum di Proses')->count()
          @endphp
          <!-- Counter - Alerts -->
          @if ($pengaduan)
          <span class="badge badge-danger badge-counter">{{$pengaduan}}</span>
          @endif
        </a>
        <!-- Dropdown - Alerts -->
        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
          <h6 class="dropdown-header">
            Pemberitahuan
          </h6>
          <a class="dropdown-item d-flex align-items-center" href="#">
            <div class="mr-3">
              <div class="icon-circle bg-primary">
                <i class="fas fa-file-alt text-white"></i>
              </div>
            </div>
            @php
                $pengaduans = App\Models\Pengaduan::where('status', 'Belum di Proses')->get()
            @endphp
            <div>
              @forelse ($pengaduans as $pengaduan)
              <div class="small text-gray-500">{{$pengaduan->created_at}}</div>
              <span class="font-weight-bold">{{$pengaduan->nama}} baru saja mengirim pengaduan</span>
              @empty
              <span class="font-weight-bold">Tidak ada pemberitahuan</span>
              @endforelse
            
            </div>
          </a>
        </div>
      </li>
        
    <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{Auth::user()->name}}</span>
        </a>
        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
            aria-labelledby="userDropdown">
            <a class="dropdown-item" href="{{route('home')}}">
                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                Halaman Utama
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{route('logout')}}" data-toggle="modal" data-target="#logoutModal" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
        </div>
    </li>

</ul>