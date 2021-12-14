<!DOCTYPE html>
<html>

@extends('layout.ceria')

@section('title', 'DETAIL ABSEN')

@section('isikonten')

	<h3>Detail Absen</h3>

    <a href="/absen"> Kembali</a>

	@foreach($absen as $p)
	 <h1> ID            :   {{ $p->ID }} </h1>
     <h1> ID Pegawai    :  {{ $p->IDPegawai }} </h1>
     <h1> Tanggal       :  {{ $p->Tanggal }} </h1>
     <h1> Status        :  {{ $p->Status }} </h1>
    </html>
	@endforeach
    @endsection
