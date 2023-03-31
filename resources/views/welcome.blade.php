<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lapor_Pak</title>
    <!-- untuk font-awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <!--untuk link ke css-->
    <link rel="stylesheet" href="{{ asset('landing/styles.css') }}" />
  </head>
  <body>
    <!-- untuk area header -->
    <header>
      <a href="" class="logo">Lapor_Pak</a>
      <input type="checkbox" id="menu-bar" />
      <label for="menu-bar" class="fas fa-bars"></label>

      <nav class="navbar">
        <a href="#beranda">beranda</a>
        <a href="#tentang">tentang</a>
        <a href="#tatacara">tatacara</a>
        <a href="{{ route('register') }}">register</a>
        <a href="{{ route('login') }}">Login</a>
      </nav>
    </header>
    <!-- akhir area header -->

    <!-- untuk area beranda  --> 

    <section class="home" id="beranda" style="background: url({{ asset('landing/images/home-bg.png') }}) ; background-repeat:no-repeat;">
      <div class="content">
        <h3>Lapor Pengaduan <span>Masyarakat</span></h3>
        <p>
          Selamat datang di Lapor_Pak, melayani Masyarakat untuk Melaporankan Pengaduan terkait masalah di lingkungan Masyarakat
        </p>
        <a href="{{ route('login') }}" class="btn">Buat Laporan</a>
      </div>
      <div class="image">
        <img style="widht:150px; height:350px;"  src="{{ asset('landing/images/phone.svg') }}" alt="" />
      </div>
    </section>
    <!-- akhir area bereanda -->

    <!-- untuk area tentang  -->
    <section class="about" id="tentang" style="background: url({{ asset('landing/images/about-bg.png') }}) ; background-repeat:no-repeat;">
      <h1 class="heading">tentang Lapor_Pak</h1>
      <div class="column">
        <div class="image">
          <img  style="widht:150px; height:350px;" src="{{ asset('landing/images/contact-img.svg') }}" alt="" />
        </div>

        <div class="content">
          <h3>aplikasi pelaporan pengaduan masyarakat</h3>
          <p>
            Lapor_Pak merupakan aplikasi untuk melakukan pelaporan pengaduan masyarakat terkait masalah di lingkungan masyarakat.
          </p>
          <p>
            Aplikasi ini melayani masyarakat untuk menbuat pelaporan pengaduan terkait masalah di lingkungan masyarakat, dengan begitu masyarakat tak usah repot mendatangi petugas setempat hanya untuk melakkan laporan dan petugas lebih cepat dalam mendapat info pelaporan dari masyarakat
          </p>
          <div class="buttons">
            <a href="{{ route('login') }}" class="btn">
              <i class="fab fa-pensil"></i> Coba
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- akhir area tentang -->

    <!-- aarea tata cara-->
    <section class="review" id="tatacara">
      <h1 class="heading">tatacara pelaporan</h1>

      <div class="box-container">
        <div class="box">
          <i class="fas fa-quote-right"></i>
          <div class="user">
            <span style="font-size:70px; color:#328f8a;">1</span>
            <h3>register & login</h3>
            <!-- <div class="stars">
              <i class="fas fa-edit"></i>
              <i class="fas fa-edit"></i>
              <i class="fas fa-edit"></i>
              <i class="fas fa-edit"></i>
              <i class="fas fa-edit"></i>
            </div> -->
            <div class="comment">
              lakukan registrasi dengan mengisi beberapa data seperti nik,nama,no telp,email, dan password kemudian login lah dengan email dan password.
            </div>
          </div>
        </div>

        <div class="box">
          <i class="fas fa-quote-right"></i>
          <div class="user">
          <span style="font-size:70px; color:#328f8a;">2</span>
            <h3>buat pelaporan pengaduan</h3>
            <!-- <div class="stars">
              <i class="fas fa-edit"></i>
              <i class="fas fa-edit"></i>
              <i class="fas fa-edit"></i>
              <i class="fas fa-edit"></i>
              <i class="fas fa-edit"></i>
            </div> -->
            <div class="comment">
              setelah login, masyarakat dapat langsung membuat laporan dengan menekan tombol buat laporan dan lanjut mengisi data laporan yang akan dibuat dengan mengisi isi laporan dan dapat melapirkan poto terkait laporan yang akan dibuat.
            </div>
          </div>
        </div>

        <div class="box">
          <i class="fas fa-quote-right"></i>
          <div class="user">
          <span style="font-size:70px; color:#328f8a;">3</span>
            <h3>tunggu tanggapan</h3>
            <!-- <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div> -->
            <div class="comment">
              selanjutnya petugas menerima pelaporan dan masyarakat menunggu tanggapan dari petugas terkait pelaporan yang telah dibuat.
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- akhir area tatacara-->

    <!-- untuk area footer  -->

  
    <div class="footer" style="background: url({{ asset('landing/images/footer-bg.png') }}); background-repeat:no-repeat;">
      <div class="box-container">
        <div class="box">
          <br>
          <h3>tentang kami</h3>
          <p>
            Lapor_Pak
            <br>
            <br>
            aplikasi pelaporan pengaduan masyarakat, melayani masyarakat dalam pelaporan pengaduan.
          </p>
        </div>

        <div class="box">
          <h3>link</h3>
          <a href="#beranda">Beranda</a>
          <a href="#tentang">Tentang</a>
          <a href="#tatacara">Tata-cara</a>
        </div>
        
      </div>

      <h1 class="credit">copyright &copy; 2023 Lapor_Pak</h1>
    </div>

    <!--akhir area footer -->
  </body>
</html>
