<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<style>
		.custab{
			border: 1px solid #ccc;
			padding: 5px;
			margin: 5% 0;
			box-shadow: 3px 3px 2px #ccc;
			transition: 0.5s;
			}
		.custab:hover{
			box-shadow: 3px 3px 0px transparent;
			transition: 0.5s;
			}
		
		</style>

@extends('layouts.app')

	<title>Daftar Kegiatan - COA</title>


@section('content')
<br>

<section class="content-header">
		<h1>
		  LPAIP COA
		  <small>Chart Of Account</small>
		</h1>
	  </section>

	<div class="container">
			<div class="row col-md-12 custyle">
			<table class="table table-striped custab">
			<thead>
			<a href="/pegawai/tambah" class="btn btn-primary btn-xs pull-right"><b>+</b> Tambah Kegiatan</a>
				<tr>
						<th>ID</th>
						<th>Nama</th>
						<th>keterangan</th>
						<th>Ditambahkan</th>
						<th>Opsi</th>
				</tr>
			</thead>
			@foreach($pegawai as $p)
					<tr>
						<td>{{ $p->kode_coa }}</td>
						<td>{{ $p->nama_coa }}</td>
						<td>{{ $p->keterangan }}</td>
						<td>{{ $p->created_at }}</td>
						<td class="text-center"><a class='btn btn-info btn-xs' href="/pegawai/edit/{{ $p->kode_coa }}"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href="/pegawai/hapus/{{ $p->kode_coa }}" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
					</tr>
			@endforeach					
			</table>
			</div>
		</div>
 @endsection
	
	
