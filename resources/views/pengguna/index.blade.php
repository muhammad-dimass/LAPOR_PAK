@extends('dashboard.dashboard')

@section('content')
@include('sweetalert::alert')
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

<main>
        <!-- heading dulu -->
        <div class="main__container">
          <div class="main__title">
          <img src="{{ asset('dashboard1/assets/hello.svg') }}" alt="" />
            <div class="main__greeting">
              <h1>Hello {{ Auth::user()->name }}</h1>
              <p>selamat datang aplikasi pelaporan pengaduan masyarakat</p>
            </div>
          </div>
          <!-- area tabel -->
          <div>
            <div class="charts__left">
              <div class="charts__left__title">
                <div>
                  <h1>Data Pengguna Aplikasi</h1>
                </div>
                <a href="{{route('pengguna.create')}}" class="add" style="margin:10px;">tambah Petugas</a>
              </div>

              <table>
  <thead>
    <tr>
      <th scope="col">nik</th>
      <th scope="col">nama</th>
      <th scope="col">email</th>
      <th scope="col">telpon</th>
      <th scope="col">level</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  @foreach($pengguna as $data)

    <tr>
      <td data-label="tanggal">{{ $data->nik }}</td>
      <td data-label="Nama Laporan">{{ $data->name }}</td>
      <td data-label="Tanggapan">{{ $data->email }}</td>
      <td data-label="nama Petugas">{{ $data->telp}}</td>
      <td data-label="level">{{ $data->level}}</td>
      <td data-label="Aksi">
      <form action="{{ route('pengguna.destroy', $data->id ) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Delete" class="btndelete">
                          </form>  
    </td>
    </tr>
    @endforeach
  </tbody>
</table>

            </div>
          </div>
        </div>
        
@include('sweetalert::alert')


</main>

      


@endsection