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
				<form action="{{ route('registrasi.store') }}" method="post">
					{{ csrf_field() }}
					<div class="form group {{ $errors->has('nomorrm') ? 'has-error' : '' }}">
						<label class="control-label"> nomor rekam medis </label>
						<input type="text" class="form-control" name="nomorrm" required>
						@if($errors->first('nomorrm'))
						<span class="help-block">
							<strong>{{ $errors->first('nomorrm') }}</strong>
						</span>
						@endif
					</div>
					<div class="form-group {{ $errors->has('tanggalregis') ? 'has-error' : '' }}">
						<label class="control-label">tanggal regis</label>
						<input type="date" class="form-control" name="tanggalregis" required>
						@if ($errors->has('tanggalregis'))
							<span class="help-block">
								<strong>{{ $errors->first ('tanggalregis') }}</strong>
							</span>
						@endif
					</div>
					<div class="form-group {{ $errors->has('jamregis') ? 'has-error' : '' }}">
						<label class="control-label">tanggal regis</label>
						<input type="time" class="form-control" name="jamregis" required>
						@if ($errors->has('jamregis'))
							<span class="help-block">
								<strong>{{ $errors->first ('jamregis') }}</strong>
							</span>
						@endif
					</div>
					<div class="form-group {{ $errors->has('kodedok') ? 'has-error' : '' }}">
						<label class="control-label">kode dokter</label>
						<input type="text" class="form-control" name="kodedok" required>
						@if ($errors->has('kodedok'))
							<span class="help-block">
								<strong>{{ $errors->first ('kodedok') }}</strong>
							</span>
						@endif
					</div>
					<div class="form-group {{ $errors->has('nomorindukpetugas') ? 'has-error' : '' }}">
						<label class="control-label">nomor induk petugas</label>
						<input type="text" class="form-control" name="nomorindukpetugas" required>
						@if ($errors->has('nomorindukpetugas'))
							<span class="help-block">
								<strong>{{ $errors->first ('nomorindukpetugas') }}</strong>
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