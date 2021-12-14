<!DOCTYPE html>
<html>
@extends('layout.ceria')

@section('isikonten')
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2>TABEL</h2>
	<h3>DATA PENDAPATAN</h3>

	<a href="/pendapatan/tambah"> + Tambah Data Pendapatan</a>

	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>ID</th>
			<th>IDPegawai</th>
			<th>Bulan</th>
			<th>Tahun</th>
			<th>Gaji</th>
            <th>Tunjangan</th>
            <th>Opsi</th>
		</tr>
		@foreach($pendapatan as $p)
		<tr>
			<td>{{ $p->pendapatan_id }}</td>
			<td>{{ $p->pendapatan_idpegawai }}</td>
			<td>{{ $p->pendapatan_bulan }}</td>
			<td>{{ $p->pendapatan_tahun }}</td>
            <td>{{ $p->pendapatan_gaji }}</td>
            <td>{{ $p->pendapatan_tunjangan }}</td>
			<td>
				<a href="/pendapatan/edit/{{ $p->pendapatan_id }}">Edit</a>
				|
				<a href="/pendapatan/hapus/{{ $p->pendapatan_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>


</body>
</html>
@endsection
