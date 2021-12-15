@extends('layout.ceria')

@section('isikonten')

    <div class="d-flex justify-content-between">
        <a class="btn btn-primary mb-3" href="/nilaikuliah/add"> + Tambah Data Nilai Kuliah</a>

    </div>

	<br/>

	<table class="table table-bordered">
		<tr>
			<th>ID</th>
            <th>NRP</th>
			<th>Nilai Angka</th>
            <th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
            <th>Opsi</th>
		</tr>
		@foreach($nilaikuliah as $n)
		<tr>
			<td>{{ $n->nilaikuliah }}</td>
			<td>{{ $n->nilaikuliah }}</td>
			<td>
                <a class="btn btn-success btn-sm" href="/nilaikuliah/tambah/{{ $n->nilaikuliah }}">Tambah</a>
				|
			</td>
		</tr>
		@endforeach
	</table>
    {{$nilaikuliah->links()}}


    @endsection
