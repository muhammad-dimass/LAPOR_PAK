<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="{{ asset('dashboard1/style2.css') }}" />
    <title>Lapor_Pak</title>
    
    <style>
  table {
  border-collapse: collapse;
  border-spacing: 0;
  margin: 2rem 0;
  width: 100%;
}
th, td {
  padding: 1rem 1.5rem;
  text-align: left;
}
th {
  background-color: #328f8a;
  background-image: linear-gradient(4deg,#328f8a,#08ac4b);
  /* background-color: #008c5f; header background color  */
  color: #fff; /* header text color */
  font-weight: 600;
}
tr {
  padding: 0;
}
td {
  vertical-align: middle;
}
tr:nth-child(even) td {
  background-color: rgba(0, 0, 0, .075); /* striped background color */
}
@media screen and (max-width: 640px) {
  thead, th {
    display: none;
  }
  tr, td {
    display: block;
  }
  tr {
    border: 1px solid rgba(0, 0 , 0 ,.15);
    margin-bottom: 2rem;
  }
  tr:last-child {
    margin-bottom: 0;
  }
  tr:nth-child(even) td {
    background-color: transparent;
  }
  td {
    clear: both;
    text-align: right;
  }
  td:before {
    content: attr(data-label)': ';
    float: left;
    font-weight: bold;
    margin-right: 1rem;
  }
}
</style>

  </head>
  <body id="body">

    @include('sweetalert::alert')
  
    <div class="container">
      <nav class="navbar">
        <div class="nav_icon" onclick="toggleSidebar()">
          <i class="fa fa-bars" aria-hidden="true"></i>
        </div>
        <div class="navbar__left">
          
          <a class="active_link" href="{{ route('masyarakat.index') }}">Lapor pak</a>
        </div>
      </nav>

      <main>
        <div class="main__container">
          <!-- MAIN TITLE STARTS HERE -->

          <div class="main__title">
            <img src="{{ asset('dashboard1/assets/hello.svg') }}" alt="" />
            <div class="main__greeting">
            <h1>Hello {{ Auth::user()->name }}</h1>
            <h4 class="text-green">NIK : {{Auth::user()->nik}} | Telp : {{ Auth::user()->telp }}</h4>
              <p>Selamat Datang Di Aplikasi Pelaporan Pengaduan Masyarakat</p>

            </div>
          </div>

          <!-- MAIN TITLE ENDS HERE -->

          <!-- MAIN CARDS STARTS HERE -->
          <div class="main__cards">
            <button class="card1" > 
                <h3><a href="{{ route('masyarakat.index') }}" style="font-size:18px; margin:5px; text-decoration:none;">Beranda</a></h3>
            </button>

            <button class="card1" > 
                <h3><a href="{{ route('pengaduan.create') }}" style="font-size:18px; margin:5px; text-decoration:none;">Buat Laporan Pengaduan</a></h3>
            </button>

            <button class="card2"> 
                <h3><a href="{{ route('tanggapan.index') }}" style="font-size:18px; margin:5px; text-decoration:none;">Cek tanggapan</a></h3>
            </button>
             <button class="card4"> 
                <h3><a href="#">
            <form method="POST" action="{{ route('logout') }}">
            @csrf
            <x-dropdown-link style="color:red; font-size:18px; margin:5px; text-decoration:none;" :href="route('logout')"
            onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                logout
                              </x-dropdown-link>
                            </form>
          </a></h3>
            </button>

           
            </div>
          </div>
          <div>
            <div class="charts__left">
              <div class="charts__left__title">
                <div>
                  <h1>Data pelaporan masyarakat</h1>
                </div>
              </div>
              <div class="">
              <table>
  <thead>
    <tr>
      <th scope="col">tanggal</th>
      <th scope="col">Laporan</th>
      <th scope="col">Poto</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
  @foreach($pengaduanm as $data)
    <tr>
      <td data-label="tanggal">{{ $data->created_at }}</td>
      <td data-label="laporan">{{ $data->isi_laporan }}</td>
      <td data-label="Poto"><img src="{{ asset('storage/'.$data->poto) }}" height="150px" ></td>
      <td data-label="Status">{{ $data->status }}</td>
    </tr>
    @endforeach
  </tbody>
</table>

  @if($cek == 0)
        <center>
        <div style="padding:20px;">
        <h3> <span style="color:red;">* </span>Anda Belum Membuat Pelaporan pengaduan masyarakat</h3>
        </div>
        </center>
        @endif
                  </div>
            </div>

            
          </div>
        </div>
      </main>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="{{ asset('dashboard1/script.js') }}"></script>
  </body>
</html>