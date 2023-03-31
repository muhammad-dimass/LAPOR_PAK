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
                      <center><h1>Tambah Petugas Baru</h1></center>
                      <br>
                    <form action="{{ route('pengguna.store') }}" class="login-form" method="post">
                        @csrf
                        
                        <div style="display:none;">
                        <label for="nik">nik</label>
                        <input type="text" placeholder="" name="nik" value="4054054054054054"/>
                        </div>
                        <x-input-error :messages="$errors->get('nik')" class="mt-2" />

                        <label for="Telpon">Telpon</label>
                        <input type="text"  name="telp" :value="old('telp')" required autofocus autocomplete="telp"  />
                        <x-input-error :messages="$errors->get('telp')" class="mt-2" />
                        
                        <div style="display:none;">
                        <label for="level">level</label>
                        <input type="text" placeholder="" name="level" value="petugas" required autofocus autocomplete="petugas"/>
                        </div>
                        

                        <label for="Nama">Nama</label>
                        <input type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        <label for="Email ">Email</label>
                        <input ype="email" name="email" :value="old('email')" required autocomplete="username"/>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        <label for="Password">Password</label>
                        <input type="password"
                            name="password"
                            required autocomplete="new-password" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />

                            <label for="Konfirmasi Password">Konfirmasi Password</label>
                        <input 
                        type="password" name="password_confirmation" required autocomplete="new-password" />
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

                        <button type="submit">Tambah</button>
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