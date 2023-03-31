<div id="sidebar">
        <div class="sidebar__title">
          <div class="sidebar__img">
            <img src="{{asset('dashboard1/assets/logo2.png')}}" style="margin:5px 15px; border-radius:10px;" alt="logo" />
            <h1>Laporan Pak</h1>
          </div>
          <i
            onclick="closeSidebar()"
            class="fa fa-times"
            id="sidebarIcon"
            aria-hidden="true"
          ></i>
        </div>

        <div class="sidebar__menu">
          <div class="sidebar__link active_menu_link">
            <i class="fa fa-home"></i>
            <a href="#">Dashboard</a>
          </div> 
          <h2>kelola</h2>
          <div class="sidebar__link">
            <i class="fa fa-user-secret" aria-hidden="true"></i>
            <a href="{{ route('pengaduan.index') }}">Laporan Pengaduan</a>
          </div>
          
          <div class="sidebar__link">
            <i class="fa fa-pencil" aria-hidden="true"></i>
            <a href="{{ route('tanggapan.index') }}">Tanggapan</a>
          </div>

          @if(auth()->user()->level == "admin")
          <div class="sidebar__link">
            <i class="fa fa-book" aria-hidden="true"></i>
            <a href="{{ route('laporan') }}">Unduh Laporan</a>
          </div>
          <div class="sidebar__link">
            <i class="fa fa-user" aria-hidden="true"></i>
            <a href="{{ route('pengguna.index') }}">Pengguna</a>
          </div>
          @endif
          <h2>keluar</h2>
          <div class="sidebar__logout">
          <center>  
          <i class="fa fa-power-off"></i>
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            
            <x-dropdown-link style="color:red; font-size:20px;" :href="route('logout')"
            onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                              </x-dropdown-link>
                            </form>
                          </center>
          </div>
        </div>
      </div>