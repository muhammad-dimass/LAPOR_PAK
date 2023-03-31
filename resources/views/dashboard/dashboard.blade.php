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
        @yield('content')

        <!-- untuk bagian sidebar -->
        @include('dashboard.partials.sidebar')
        
    </div>
    <!-- untuk bagian footer -->
    @include('dashboard.partials.footer')
  </body>
</html>
