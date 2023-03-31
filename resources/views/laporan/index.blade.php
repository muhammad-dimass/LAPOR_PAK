<!DOCTYPE html>
<html>
<head>
    <title>{{ $title }}</title>
    <style>
        table {
  border-collapse: collapse;
  width: 100%;
  background-color: #fff;
}

th, td {
  text-align: left;
  padding: 8px;
  border: 1px solid #ddd;
}

th {
  background-color: #f2f2f2;
  color: #000;
}
    </style>
</head>
<body>
<center>
<h1>{{ $title }}</h1>
</center>
    <table>
		<tr>
			<th>tanggal</th>
			<th>nik</th>
			<th>laporan</th>
			<th>status</th>
		</tr>
        @foreach($pengaduan as $data)
		<tr>
			<td>{{ $data->created_at }}</td>
			<td>{{ $data->nik }}</td>
			<td>{{ $data->isi_laporan }}</td>
			<td>{{ $data->status }}</td>
        </tr>
        @endforeach
</table>
            <br><br>

            <center>
<h1>{{ $title2 }}</h1>
</center>

        <table>
        <tr>
            <th>tgl tanggapan</th>
			<th>nama laporan</th>
			<th>tanggapan</th>
			<th>nama petugas</th>
		</tr>
        @foreach($tanggapan as $data)
		<tr>
			<td>{{ $data->created_at }}</td>
			<td>{{ $data->pengaduan->nama_laporan }}</td>
			<td>{{ $data->tanggapan}}</td>
			<td>{{ $data->user->name}}</td>
        </tr>
        @endforeach
</table>


</body>
</html>
