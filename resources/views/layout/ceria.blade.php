<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link href="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">


		<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    	<script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
		<script src="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>
</head>
<body>
    <br>
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-2">
        <ul class="nav nav-pills nav-stacked">
          <li class="primary"><a href="/pegawai">Pegawai</a></li>
          <li class="primary"><a href="/absen">Absen</a></li>
          <li class="primary"><a href="/pendapatan">Pendapatan</a></li>
          <li class="primary"><a href="/unggas">Praktikum</a></li>
          <li class="primary"><a href="/nilaikuliah">EAS E5</a></li>
        </ul>
    </div>
    <div class="col-sm-10">
    <header>
        <img src="{{asset('fotoaldi.jpg')}}" class="img-responsive" style="width:10%;" alt="foto">
        <h1 style="font-size:20px">Maulana Ahmadi</h1>
        <p>5026201063</p>
    </header>
    <hr>


@section('isikonten')
@show

<hr>
<footer>
    Hak Cipta Oleh Maulana Ahmadi - 5026201063
</footer>
</div>
        </div>
</body>
</html>
