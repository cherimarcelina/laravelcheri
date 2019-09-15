@extends('admin.main')
@section('title','Produk')
@section('content')
<h1>Produk</h1>
<hr>

<!-- alert jika berhasil disimpan -->

@if(session('result')== 'success')
<div class="alert alert-success alert-dismissible fade show">
	<strong>Saved!</strong> Berhasil disimpan.
	<button type="button" class="close" data-dismiss="alert">
		&times;
	</button>
</div>
@endif


<!-- Baris TAmbah dan pencarian-->
<div class="row">
	<!-- Tombol Tambah -->
	<div class="col-md-6 mb-3">
		<a href="{{ route('admin.produk.add') }}" class="btn btn-primary">[+] Tambah</a>
	</div>

	<!-- form pencarian -->
	<div class="col-md-6 mb-3">
		<form method="GET" action="{{ route('admin.produk') }}">
			<div class="input-group">
				<input type="text" name="keyword" class="form-control" value="{{ request('keyword') }}">
				<div class="input-group-append">
					<button type="submit" class="btn btn-primary">
						Cari!
					</button>
				</div>
			</div><!-- end input group -->
		</form>
	</div>
</div><!-- End row -->

<!-- Baris daftar data -->
<table class="table table-striped mb-3">
	<tr>
		<th>Gambar</th><th>Produk</th><th>&nbsp;</th>
	</tr>
	@foreach($data as $dt)
	<tr>
	<!-- Kolom Gambar -->
		<td>
			<img src="{{url('storage/gambar-produk/'.$dt->gambar_produk)}}" width="65">
		</td>
	<!-- kolom data -->
	<td>
		<small class="text-muted">{{$dt->kode_produk}}</small> <br>
		{{$dt->nama_produk}},
		Harga Rp.{{number_format($dt->harga,0,',','.')}},
		Jumlah Stok {{$dt->stok}} <br>
		<small class="text-muted">{{$dt->nama_kategori}}</small>
	</td>

	<!-- kolom tombol -->
	<td>
		<!-- tombol edit-->
		<a href="#" 
		class="btn btn-success btn-sm">
			<i class="fa fa-w fa-edit"></i>
		</a>

		<!-- tombol gambar-->
		<a href="#" 
		class="btn btn-info btn-sm">
			<i class="fa fa-w fa-edit"></i>
		</a>

		<!-- TOMBOL HAPUS -->
		<button type="button"
		data-id="{{$dt->id}}"
		class="btn btn-danger btn-sm btn-trash">
			<i class="fa fa-w fa-trash"></i>
		</button>
	</td>
	</tr>
		
	@endforeach
</table>
<!-- pagging/halaman-->
{{
	$data->appends(request()->only('keyword'))
	->links('vendor.pagination.bootstrap-4')
}}
@endsection