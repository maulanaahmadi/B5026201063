@extends('layout.ceria')

@section('isikonten')

    <div class="d-flex justify-content-between">
        <a class="btn btn-primary mb-3" href="/unggas/add"> + Tambah Unggas Baru</a>
        <form class="col-4 d-flex align-items-center" action="/unggas/cari" method="GET">
            <input style="padding: 8px; margin-right: 5px" type="text" name="cari" placeholder="Cari Unggas .." value="{{ old('cari') }}">
            <input type="submit" class="btn btn-md btn-primary" value="Cari">
        </form>
    </div>

	<br/>

	<table class="table table-bordered">
		<tr>
			<th>Kode Unggas</th>
            <th>Nama Unggas</th>
			<th>Opsi</th>
		</tr>
		@foreach($unggas as $u)
		<tr>
			<td>{{ $u->kodeunggas }}</td>
			<td>{{ $u->namaunggas }}</td>
			<td>
                <a class="btn btn-success btn-sm" href="/unggas/detail/{{ $u->kodeunggas }}">Detail</a>
				|
				<a class="btn btn-warning btn-sm" href="/unggas/edit/{{ $u->kodeunggas }}">Edit</a>
				|
				<a class="btn btn-danger btn-sm" href="/unggas/hapus/{{ $u->kodeunggas }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{$unggas->links()}}


    @endsection
