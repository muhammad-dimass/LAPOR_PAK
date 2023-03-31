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
                  <h1>Data pelaporan masyarakat</h1>
                </div>
        @if(auth()->user()->level == "admin")
                <a href="{{route('pengaduan.create')}}" class="add" style="margin:10px;">tambah laporan</a>
        @endif
              </div>




              <table>
  <thead>
    <tr>
      <th scope="col">tanggal</th>
      <th scope="col">NIK</th>
      <th scope="col">Laporan</th>
      <th scope="col">Poto</th>
      <th scope="col">Status</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  @foreach($pengaduan as $data)
    <tr>
      <td data-label="tanggal">{{ $data->created_at }}</td>
      <td data-label="NIK">{{ $data->nik }}</td>
      <td data-label="laporan">{{ $data->isi_laporan }}</td>
      <td data-label="Poto"><img src="{{ asset('storage/'.$data->poto) }}" height="150px" ></td>
      <td data-label="Status">{{ $data->status }}</td>
      <td data-label="Aksi">
      <a href="{{ route('tanggapan.edit', $data->id) }}" class="btntanggapi" >tanggapi </a>
        @if(auth()->user()->level == "admin")
                          <form action="{{ route('pengaduan.destroy', $data->id ) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Delete" class="btndelete" style="padding:10px 28px;">
                          </form>
        @endif
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

            </div>

            
          </div>
        </div>

        


        
      </main>
@endsection