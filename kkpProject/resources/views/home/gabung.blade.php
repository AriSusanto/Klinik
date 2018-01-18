<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	Multi database data
	<ul>  </ul>
	@foreach($kamar_pas as $kamar)
	<li>nama Pasien: {{ $kamar->nama_pas }} dan {{ $kamar->kamar }} </li>
	@endforeach

</body>
</html>