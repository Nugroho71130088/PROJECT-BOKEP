<!DOCTYPE html>
<html>
<head>
	<title>Daftar Kegiatan - COA</title>
</head>
<body>

	
	<h3>Daftar Kegiatan</h3>

	<a href="/pegawai/tambah"> + Tambah Kegiatan Baru</a>
	
	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>kode</th>
			<th>Nama</th>
			<th>keterangan</th>
			<th>Ditambahkan</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
			<td>{{ $p->kode_coa }}</td>
			<td>{{ $p->nama_coa }}</td>
			<td>{{ $p->keterangan }}</td>
			<td>{{ $p->created_at }}</td>

			<td>
				<a href="/pegawai/edit/{{ $p->kode_coa }}">Edit</a>
				|
				<a href="/pegawai/hapus/{{ $p->kode_coa }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>


</body>
</html>