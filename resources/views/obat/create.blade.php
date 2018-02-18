@extends('layouts.app')
@section('content')

<div class="row">
	<div class="container">
	<div class="col-md-12">
		<div class="panel panel-primary">
			<div class="panel-heading">Data Obat
				<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
				</div>
			</div>
			<div class="panel-body">
				<form action="{{ route('obat.store') }}" method="post">
					{{ csrf_field() }}
					<div class="form group {{ $errors->has('kode_obat') ? 'has-error' : '' }}">
						<label class="control-label">kode obat</label>
						<input type="text" class="form-control" name="kode_obat" required>
						@if($errors->first('kode_obat'))
						<span class="help-block">
							<strong>{{ $errors->first('kode_obat') }}</strong>
						</span>
						@endif
					</div>
					<div class="form-group {{ $errors->has('namaobat') ? 'has-error' : '' }}">
						<label class="control-label">Nama obat</label>
						<input type="text" class="form-control" name="namaobat" required>
						@if ($errors->has('namaobat'))
							<span class="help-block">
								<strong>{{ $errors->first ('namaobat') }}</strong>
							</span>
						@endif
					</div>
					<div class="form-group {{ $errors->has('kategori') ? 'has-error' : '' }}">
						<label class="control-label">kategori</label>
						<input type="text" class="form-control" name="kategori" required>
						@if ($errors->has('kategori'))
							<span class="help-block">
								<strong>{{ $errors->first ('kategori') }}</strong>
							</span>
						@endif
					</div>
					<div class="form-group {{ $errors->has('jumlah') ? 'has-error' : '' }}">
						<label class="control-label">jumlah</label>
						<input type="text" class="form-control" name="jumlah" required>
						@if ($errors->has('jumlah'))
							<span class="help-block">
								<strong>{{ $errors->first ('jumlah') }}</strong>
							</span>
						@endif
					</div>
					<div class="form-group {{ $errors->has('harga') ? 'has-error' : '' }}">
						<label class="control-label">harga</label>
						<input type="text" class="form-control" name="harga" required>
						@if ($errors->has('harga'))
							<span class="help-block">
								<strong>{{ $errors->first ('harga') }}</strong>
							</span>
						@endif
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Tambah</button>
					</div>
				</form>
				</div>
			</div>
		</div>
	</div>
	</div>

@endsection