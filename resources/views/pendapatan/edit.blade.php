<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h3>Edit Pendapatan</h3>

	<a href="/pendapatan"> Kembali</a>

	<br/>
	<br/>

	@foreach($pendapatan as $p)
	<form action="/pendapatan/update" method="post">
		{{ csrf_field() }}
        ID <input value = "{{$p -> pendapatan_id}}" type="number" name="id" required="required"> <br/>
		IDPegawai <input value = "{{$p -> pendapatan_idpegawai}}" type="number" name="idpegawai" required="required"> <br/>
		Bulan <input value = "{{$p -> pendapatan_bulan}}" type="number" name="bulan" required="required"> <br/>
        Tahun <input value = "{{$p -> pendapatan_tahun}}" type="number" name="tahun" required="required"> <br/>
        Gaji <input value = "{{$p -> pendapatan_gaji}}" type="number" name="gaji" required="required"> <br/>
		Tunjangan <input value = "{{$p -> pendapatan_tunjangan}}" type="number" name="tunjangan" required="required"> <br/>
		<input type="submit" value="Simpan Data">

	</form>
	@endforeach


</body>
</html>
