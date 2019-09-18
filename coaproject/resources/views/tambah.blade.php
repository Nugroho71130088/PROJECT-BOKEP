@extends('layouts.app')

	<title>Daftar Kegiatan - COA</title>

@section('content')

<br>
	<h3>Tambah Data</h3>

	<div class="row col-md-12 custyle">
	<a href ="/pegawai" class ="btn btn-success" > Kembali</a>
	</div>

	<br/>
	<br/>
	<div class="container">
			<div class="row col-xs-4 custyle">
					
				<div class="form-group">
				<form action ="/pegawai/store" method="post">

				{{ csrf_field() }} 
				 
					KODE COA <input type="number" class="form-control" name="kode_coa" required="required"> <br/>
					Nama Kegiatan <input type="text" class="form-control" name="nama_coa" required="required"> <br/>
					Keterangan <input type="text" class="form-control" name="keterangan" required="required"> <br/>
					Nominal Anggaran <input type="text" class="form-control" name="nominal_anggaran" required="required"> <br/>
		
					{{-- <input type="submit" value="Simpan Data"> --}}
					<button type="submit" class="btn btn-primary">Simpan Data</button>

				</form>
			</div>
		</div>
	</div>
<br>
@endsection
