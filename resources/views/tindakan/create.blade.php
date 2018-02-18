@extends('layouts.app')
@section('content')

<div class="row">
	<div class="container">
	<div class="col-md-12">
		<div class="panel panel-primary">
			<div class="panel-heading">Data tindakan
				<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
				</div>
			</div>
			<div class="panel-body">
				<form action="{{ route('tindakan.store') }}" method="post">
					{{ csrf_field() }}
					<div class="form group {{ $errors->has('kode_tindakan') ? 'has-error' : '' }}">
						<label class="control-label">kode tindakan</label>
						<input type="text" class="form-control" name="kode_tindakan" required>
						@if($errors->first('kode_tindakan'))
						<span class="help-block">
							<strong>{{ $errors->first('kode_tindakan') }}</strong>
						</span>
						@endif
					</div>
					<div class="form-group {{ $errors->has('nama') ? 'has-error' : '' }}">
						<label class="control-label">Nama tindakan</label>
						<input type="text" class="form-control" name="nama" required>
						@if ($errors->has('nama'))
							<span class="help-block">
								<strong>{{ $errors->first ('nama') }}</strong>
							</span>
						@endif
					</div>
					<div class="form-group {{ $errors->has('jenistindakan') ? 'has-error' : '' }}">
						<label class="control-label">jenis tindakan</label>
						<input type="text" class="form-control" name="jenistindakan" required>
						@if ($errors->has('jenistindakan'))
							<span class="help-block">
								<strong>{{ $errors->first ('jenistindakan') }}</strong>
							</span>
						@endif
					</div>
					<div class="form-group {{ $errors->has('waktutindakan') ? 'has-error' : '' }}">
						<label class="control-label">waktu tindakan</label>
						<input type="text" class="form-control" name="waktutindakan" required>
						@if ($errors->has('waktutindakan'))
							<span class="help-block">
								<strong>{{ $errors->first ('waktutindakan') }}</strong>
							</span>
						@endif
					</div>
					<div class="form-group {{ $errors->has('tariftindakan') ? 'has-error' : '' }}">
						<label class="control-label">tarif tindakan</label>
						<input type="text" class="form-control" name="tariftindakan" required>
						@if ($errors->has('tariftindakan'))
							<span class="help-block">
								<strong>{{ $errors->first ('tariftindakan') }}</strong>
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