@extends('dashboard.dashboard')

@section('content')





<main>
        <!-- heading dulu -->
        <div class="main__container">
          
          <!-- area tabel -->
          <div>
            <div class="charts__left">
              <div class="charts__left__title">
                <div>
                    <!-- <p>masyarakat</p> -->
                    <div class="form">
                      <center><h1>Baut Tanggapan</h1></center>
                      <br>
                    <form action="{{ route('tanggapan.store') }}" class="login-form" method="post" enctype="multipart/form-data">
                        @csrf
                        <div >
                        <label for="nik">nik</label>
                        <input type="text" value="{{old('nik') ?? $pengaduan->nik}}" readonly />
                        </div>

                        <label for="nama laporan">nama laporan</label>
                        <input type="text" value="{{$pengaduan->nama_laporan}}" readonly/>

                        <label for="isi laporan">isi laporan</label>
                        <input type="text"  value="{{ $pengaduan->isi_laporan}}" readonly/>

                        <img src="{{ asset('storage/'.$pengaduan->poto) }}" height="200px" >

                        <div style="display:none;">
                        <label for="id_pengaduan">id pengaduan</label>
                        <input type="text" name="id_pengaduan" value="{{ $pengaduan->id}}" readonly />
                        </div>

                        <div >
                        <label for="id_pengaduan">Tanggapan</label>
                        <input type="text" name="tanggapan"/>
                        </div>

                        <div style="display:none;">
                        <label for="id_petugas">id petugas</label>
                        <input type="text" name="id_petugas" value="{{ Auth::user()->id }}" readonly />
                        </div>
                        
                        <button type="submit">Kirim</button>

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