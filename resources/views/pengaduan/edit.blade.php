@extends('dashboard.dashboard')

@section('content')
<main>
        <!-- heading dulu -->
        <div class="main__container">
          <div class="main__title">
            <div class="main__greeting">
              <h1>Hello {{ Auth::user()->name }}</h1>
              <p>selamat datang di aplikasi pelaporan pengaduan masyarakat</p>
            </div>
          </div>
          <!-- area tabel -->
          <div>
            <div class="charts__left">
              <div class="charts__left__title">
                <div>
                    <!-- <p>masyarakat</p> -->
                    <div class="form">
                      <center><h1>edit pelaporan masyarakat</h1></center>
                      <br>
                    <form action="{{ route('pengaduan.update', $pengaduan->id) }}" class="login-form" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <label for="tanggal laporan">nik</label>
                        <input type="text" placeholder="" name="nik" value="{{old('nik') ?? $pengaduan->nik}}"/>

                        <label for="isi laporan">isi laporan</label>
                        <input type="text" placeholder="" name="isi_laporan" value="{{old('isi_laporan') ?? $pengaduan->isi_laporan}}"/>

                        <label for="tanggal laporan">poto</label>
                        <input type="file" placeholder="" name="poto" value="{{old('poto')}}"/>

                        <label for="status">status</label>
                        <input type="text" placeholder="" name="status" value="{{old('status') ?? $pengaduan->status}}"/>

                        <button type="submit">update</button>
                    </form>
                </div>
                  
                </div>
                <!-- <a href="{{route('pengaduan.create')}}" class="add" style="margin:10px;">tambah laporan</a> -->
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
@endsection