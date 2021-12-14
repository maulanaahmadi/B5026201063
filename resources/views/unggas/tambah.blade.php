@extends('layout.ceria')

@section('isikonten')


	<br/>

	<form action="/unggas/store" method="post">
		{{ csrf_field() }}
        Kode Unggas <input type="number" required="required" name="id"> <br/>
		Nama Unggas <input type="text" required="required" name="nama"> <br/>
		Jumlah <input type="text" required="required" name="jumlah"> <br/>
		<label for="tersedia">Tersedia: </label>
                <div class="d-flex p-1">
                    <input type="radio" id="yes" name="tersedia" value="Y">
                    <label for="yes">Tersedia</label><br>
                    <input type="radio" id="no" name="tersedia" value="N">
                    <label for="no">Tidak Tersedia</label><br>
                </div>
        <div class="d-flex justify-content-center">
            <a class="btn btn-primary m-2" href="/unggas"> Kembali</a>
            <input class="btn btn-success m-2" type="submit" value="Simpan Data">
        </div>
	</form>

    @endsection
