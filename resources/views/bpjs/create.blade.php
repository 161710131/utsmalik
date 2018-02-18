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
				<form action="{{ route('Bpjs.store') }}" method="post">
					{{ csrf_field() }}
					<div class="form group {{ $errors->has('nomorkartu') ? 'has-error' : '' }}">
						<label class="control-label"> nomor kartu </label>
						<input type="text" class="form-control" name="nomorkartu" required>
						@if($errors->first('nomorkartu'))
						<span class="help-block">
							<strong>{{ $errors->first('nomorkartu') }}</strong>
						</span>
						@endif
					</div>
					<div class="form-group {{ $errors->has('nama') ? 'has-error' : '' }}">
						<label class="control-label">Nama</label>
						<input type="text" class="form-control" name="nama" required>
						@if ($errors->has('nama'))
							<span class="help-block">
								<strong>{{ $errors->first ('nama') }}</strong>
							</span>
						@endif
					</div>
					<div class="form-group {{ $errors->has('alamat') ? 'has-error' : '' }}">
						<label class="control-label">alamat</label>
						<input type="textarea" class="form-control" name="alamat" required>
						@if ($errors->has('alamat'))
							<span class="help-block">
								<strong>{{ $errors->first ('alamat') }}</strong>
							</span>
						@endif
					</div>
					<div class="form-group {{ $errors->has('tl') ? 'has-error' : '' }}">
						<label class="control-label">tanggal lahir</label>
						<input type="date" class="form-control" name="tl" required>
						@if ($errors->has('tl'))
							<span class="help-block">
								<strong>{{ $errors->first ('tl') }}</strong>
							</span>
						@endif
					</div>
					<div class="form group {{ $errors->has('nik') ? 'has-error' : '' }}">
						<label class="control-label"> nik </label>
						<input type="text" class="form-control" name="nik" required>
						@if($errors->first('nik'))
						<span class="help-block">
							<strong>{{ $errors->first('nik') }}</strong>
						</span>
						@endif
					</div>
					<br>
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