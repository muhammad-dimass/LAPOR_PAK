
<!DOCTYPE html>
<html lang="en">
  <!--Created by Tivotal-->
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register | Lapor_Pak</title>

    <!--font awesome-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <!--css file-->
    <link rel="stylesheet" href="{{ asset('landing/styles.css') }}" />


<style>
body {
  background-color: #328f8a;
  background-image: linear-gradient(45deg,#328f8a,#08ac4b);
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
</style>
  </head>
  <body>
    <!-- untuk area form register  -->
    <center>
    <section class="contact" >
      <form method="POST" action="{{ route('register') }}" style="border-radius: 20px; padding:50px;">
        @csrf
        <center>
        <h1 class="heading">Registrasi</h1>
        </center>
        <div class="inputBox">
          <input type="text" required  id="nik"  name="nik" value="{{ old('nik') }}"  required autofocus autocomplete="nik" />
          <label for="NIK">NIK</label>
          <x-input-error :messages="$errors->get('nik')" class="mt-2" />
        </div>
        <div class="inputBox">
          <input type="text" required id="telp" name="telp" value="{{ old('telp') }}" required autofocus autocomplete="telp"/>
          <label>Telpon</label>
          <x-input-error :messages="$errors->get('telp')" class="mt-2" />
        </div>
        <div style="display:none;">
            <x-input-label for="level" :value="__('Level')" />
            <x-text-input id="level" class="block mt-1 w-full form-control hide" type="text" name="level" value="masyarakat" required autofocus autocomplete="level" />
            <x-input-error :messages="$errors->get('level')" class="mt-2" />
        </div>
        <div class="inputBox">
          <input type="text" required id="name" name="name" value="{{ old('name') }}"  required autofocus autocomplete="name"/>
          <label>nama</label>
          <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div class="inputBox">
          <input type="email" required  id="email" name="email" value="{{ old('email') }}" required autocomplete="username" />
          <label for="email" >email</label>
          <x-input-error :messages="$errors->get('email')" class="mt-2" />

        </div>
          
        <div class="inputBox">
          <input type="password" required id="password"  name="password"
                            required autocomplete="new-password" />
          <label for="password">password</label>
          <x-input-error :messages="$errors->get('password')" class="mt-2" />

        </div>
        <div class="inputBox">
          <input type="password" required id="password_confirmation" name="password_confirmation" required autocomplete="new-password"/>
          <label for="password_confirmation" >konfirmasi Password</label>
          <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- <div class="inputBox">
          <textarea required name="" id="" cols="30" rows="10"></textarea>
          <label>email</label>
        </div> -->
        <center>
        <div class="buttons">
        <input type="submit" class="btn" value="Register" />
        <a href="{{ route('login') }}" class="btn"> Sudah Punya Akun</a>
        </div>
        <br>
        <p>copyright 2023 Lapor_Pak </p>
        </center>
      </form>
    </section>
    </center>
    <!-- akhir area form register -->
  </body>
</html>



