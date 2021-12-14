<!DOCTYPE html>
<html>
    @extends('layout.ceria')

    @section('isikonten')

<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h3>Data Pendapatan</h3>

	<a href="/pendapatan"> Kembali</a>

	<br/>
	<br/>

	<form action="/pendapatan/store" method="post">
		{{ csrf_field() }}
		ID <input type="number" name="id" required="required"> <br/>
		IDPegawai <input type="number" name="idpegawai" required="required"> <br/>
		Bulan <input type="number" name="bulan" required="required"> <br/>
        Tahun <input type="number" name="tahun" required="required"> <br/>
        Gaji <input type="number" name="gaji" required="required"> <br/>
		Tunjangan <input type="number" name="tunjangan" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>
@endsection
