<!DOCTYPE html>
<html>
<head>
	<title>Laporan peminjaman buku</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Laporan penggantian buku Perpus-ku</h4>
	</center>
 
	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>No</th>
                    <th scope="col">Id penggantian</th>
                    <th scope="col">Kode buku</th>
                    <th scope="col">Id peminjaman</th>
                    <th scope="col">Jenis penggantian</th>
                    <th scope="col">Jumlah uang buku</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($penggantian_buku as $pu)
			<tr>
				<td>{{ $i++ }}</td>
                    <td scope="col">{{$pu->Id_penggantian}}</td>
                    <td scope="col">{{$pu->Kode_buku}}</td>
                    <td scope="col">{{$pu->Id_peminjaman}}</td>
                    <td scope="col">{{$pu->Jenis_penggantian}}</td>
                    <td scope="col">{{$pu->Jumlah_uang_buku}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>