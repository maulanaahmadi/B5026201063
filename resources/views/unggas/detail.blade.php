@extends('layout.ceria')

@section('title', 'DETAIL UNGGAS')

@section('isikonten')

 <br/>

 @foreach($unggas as $u)


             <h4>Kode Unggas    :   {{ $u->kodeunggas }}</h4>
             <h4>Nama Unggas    :   {{ $u->namaunggas }}</h4>
             <h4>Jumlah Unggas  :   {{ $u->jumlahunggas }}</h4>
             <h4>Status Ketersediaan    :
                 @if ($u->tersedia === "Y")
                     Tersedia
                 @else
                     Tidak Tersedia
                 @endif
             </h4>


     <div class="d-flex justify-content-center">
         <a class="btn btn-primary m-2" href="/unggas"> Kembali</a>
     </div>

 @endforeach

 @endsection
