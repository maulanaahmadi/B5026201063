@extends('layout.ceria')

@section('isikonten')


	<br/>

	<form action="/nilaikuliah/store" method="post">
		{{ csrf_field() }}
        ID <input type="hidden" name="id" value="{{ $n->idnilaikuliah }}"> <br/>
     NRP <input type="number" required="required" name="nrp" value="{{ $n->nrpnilaikuliah }}"> <br/>
     Nilai Angka <input type="number" required="required" name="nilai" value="{{ $n->nilainilaikuliah }}"> <br/>
     SKS <input type="number" required="required" name="sks" value="{{ $n->sksnilaikuliah }}"> <br/>

        <div class="d-flex justify-content-center">
            <a class="btn btn-primary m-2" href="/nilaikuliah"> Kembali</a>
            <input class="btn btn-success m-2" type="submit" value="Simpan Data">
        </div>
	</form>

    @endsection
