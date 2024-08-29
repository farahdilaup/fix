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
		<h5>Laporan penerimaan buku Perpus-ku</h4>
	</center>
 
	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>No</th>
                    <th scope="col">ID penerimaan</th>
                    <th scope="col">NIP</th>
                    <th scope="col">ID Asal</th>
                    <th scope="col">Tanggal penerimaan</th>
                    <th scope="col">Jumlah buku diterima</th>
                    <th scope="col">Keterangan</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($penerimaan as $pn)
			<tr>
				<td>{{ $i++ }}</td>
                    <td scope="col">{{$pn->Id_penerimaan}}</td>
                    <td scope="col">{{$pn->NIP}}</td>
                    <td scope="col">{{$pn->Id_asal}}</td>
                    <td scope="col">{{$pn->Tanggal_penerimaan}}</td>
                    <td scope="col">{{$pn->Jumlah_buku_diterima}}</td>
                    <td scope="col">{{$pn->Keterangan}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>