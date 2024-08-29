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
		<h5>Laporan peminjaman buku Perpus-ku</h4>
	</center>
 
	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>No</th>
                    <th scope="col">ID Peminjaman</th>
                    <th scope="col">ID Anggota</th>
                    <th scope="col">NIP</th>
                    <th scope="col">Jumlah buku</th>
                    <th scope="col">Tanggal peminjaman</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($peminjaman as $pm)
			<tr>
				<td>{{ $i++ }}</td>
                    
                    <td scope="col">{{$pm->Id_peminjaman}}</td>
                    <td scope="col">{{$pm->NIS_NIP}}</td>
                    <td scope="col">{{$pm->NIP}}</td>
                    <td scope="col">{{$pm->Jumlah_buku}}</td>
                    <td scope="col">{{$pm->Tanggal_peminjaman}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>