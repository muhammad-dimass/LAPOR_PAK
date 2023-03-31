@if(auth()->user()->level == "masyarakat")
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Lapor_Pak</title>
    <!--pake fontawesome-->
    <link
    rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <!--link file ce es es-->
    <link rel="stylesheet" href="{{ asset('landing/styles.css') }}" />
    <link rel="stylesheet" href="{{ asset('dashboard1/style2.css') }}" />
        <style>
        body {
          /* background-color: #328f8a;
          background-image: linear-gradient(45deg,#328f8a,#08ac4b); */
          font-family: "Roboto", sans-serif;
          -webkit-font-smoothing: antialiased;
          -moz-osx-font-smoothing: grayscale;
        }
        </style>

  <body id="body">
    <div class="container">
      <nav class="navbar">
        <div class="navbar__left">
            <a class="active_link" href="{{ route('masyarakat.index') }}">Lapor pak</a>
        </div>
      </nav>

      <main>
        <div class="main__container">
    <!-- untuk area form  -->
    <center>
    <div class="contact">
    <form method="POST" action="{{ route('pengaduan.store') }}"  style="border-radius: 20px; padding:50px;" enctype="multipart/form-data">
        @csrf
        <center>
        <h5 class="heading">buat laporan pengaduan</h5>
        </center>
        <div class="inputBox" style="display:none;">
          <input type="text" required  id="nik"  name="nik" value="{{Auth::user()->nik}}"  />
          <label for="NIK">NIK</label>
          <x-input-error :messages="$errors->get('nik')" class="mt-2" />
        </div>

        <div class="inputBox">
          <input type="text" required  id="nama_laporan" name="nama_laporan" value="{{ old('nama_laporan') }}" required autocomplete="nama_laporan" />
          <label for="nama_laporan" >nama Laporan</label>
          <br>
          <x-input-error :messages="$errors->get('nama_laporan')" class="mt-2" />
        </div>

        <div class="inputBox">
        <textarea type="text" required id="isi_laporan" name="isi_laporan" value="{{ old('isi_laporan') }}" cols="30" rows="10"></textarea>
          <label>Isi Laporan</label>
          <x-input-error :messages="$errors->get('isi_laporan')" class="mt-2" />
        </div>
        
        <div class="inputBox">
          <label for="poto" >poto</label>
          <br><br>
          <input type="file" id="poto" name="poto" value="{{ old('poto') }}" />
          <br>
          <x-input-error :messages="$errors->get('poto')" class="mt-2" />
        </div>
        <div class="inputBox" style="display:none;">
          <input type="text" required  id="status"  name="status" value="proses" autocomplete="status" />
          <label for="Status">Status</label>
          <x-input-error :messages="$errors->get('status')" class="mt-2" />
        </div>
        <center>
        <div class="buttons">
        <input type="submit" class="btn" value="Kirim" />
        <a href="{{ route('masyarakat.index') }}" class="btn">kembali</a>
        </div>
      </form>
    </div>
    </center>
    <!-- akhir area form -->
        </div>
      </main>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="{{ asset('dashboard1/script.js') }}"></script>
  </body>
</html>
@endif






@if(auth()->user()->level == "admin")
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- untuk bagian head -->
    @include('dashboard.partials.head')
    <title>Pelaporan Masyarakat</title>
</head>
<body id="body">
    <div class="container">
        <!-- untuk bagian navbar -->
        @include('dashboard.partials.navbar')

        <main>
        <div class="main__container">
          <!-- area tabel -->
          <div>
            <div class="charts__left">
              <div class="charts__left__title">
                <div>
                    <!-- <p>masyarakat</p> -->
                    <div class="form">
                      <center><h1>Buat pelaporan masyarakat</h1></center>
                      <br>
                    <form action="{{ route('pengaduan.store') }}" class="login-form" method="post" enctype="multipart/form-data">
                        @csrf
                        <div style="display:none;">
                        <label for="nik">nik</label>
                        <input type="text" placeholder="" name="nik" value="{{Auth::user()->nik}}"/>
                        </div>

                        <label for="nama_laporan">nama_laporan</label>
                        <input type="text" placeholder="" name="nama_laporan" />

                        <label for="isi laporan">isi laporan</label>
                        <input type="text" placeholder="" name="isi_laporan" />

                        <label for="tanggal laporan">poto</label>
                        <input type="file" placeholder="" name="poto" />
                        
                        <div style="display:none;">
                        <label for="status">status</label>
                        <input type="text" placeholder="" name="status" value="proses"/>
                        </div>

                        <button type="submit">Kirim</button>
                    </form>
                </div>
                </div>
              </div>
            </div>

            <div class="charts__right">
              <div class="charts__right__title">
                <div>
                  <!-- <h1>Sedang usk</h1>
                  <p>apliksi laporan</p> -->
                </div>
              </div>
              <div class="charts__right__cards">
            </div>            
          </div>
        </div>
      </main>

        <!-- untuk bagian sidebar -->
        @include('dashboard.partials.sidebar')
        
    </div>
    <!-- untuk bagian footer -->
    @include('dashboard.partials.footer')
  </body>
</html>
@endif



