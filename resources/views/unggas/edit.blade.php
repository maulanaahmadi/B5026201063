@extends('layout.ceria')

@section('title', 'EDIT UNGGAS')

@section('isikonten')

 <br/>

 @foreach($unggas as $u)
 <form action="/unggas/update" method="post">
     {{ csrf_field() }}
     Kode Unggas <input type="hidden" name="id" value="{{ $u->kodeunggas }}"> <br/>
     Nama Unggas <input type="text" required="required" name="nama" value="{{ $u->namaunggas }}"> <br/>
     Jumlah <input type="text" required="required" name="jumlah" value="{{ $u->jumlahunggas }}"> <br/>
     <label for="tersedia">Tersedia: </label>
             <div class="d-flex p-1">
                 <input type="radio" id="yes" name="tersedia" value="Y" @if ($u->tersedia === "Y" ) checked="checked" @endif>
                 <label for="yes">Tersedia</label><br>
                 <input type="radio" id="no" name="tersedia" value="N"  @if ($u->tersedia === "N" ) checked="checked" @endif>
                 <label for="no">Tidak Tersedia</label><br>
             </div>
     <div class="d-flex justify-content-center">
         <a class="btn btn-primary m-2" href="/unggas"> Kembali</a>
         <input class="btn btn-success m-2" type="submit" value="Simpan Data">
     </div>
 </form>
 @endforeach

 @endsection
