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
				<form action="{{ route('rekamtindakan.store') }}" method="post">
					{{ csrf_field() }}
					<div class="form group {{ $errors->has('diagnosasakit') ? 'has-error' : '' }}">
						<label class="control-label"> diagnosa sakit </label>
						<input type="text" class="form-control" name="diagnosasakit" required>
						@if($errors->first('diagnosasakit'))
						<span class="help-block">
							<strong>{{ $errors->first('diagnosasakit') }}</strong>
						</span>
						@endif
					</div>
					<div class="form-group {{ $errors->has('tanggalrawat') ? 'has-error' : '' }}">
						<label class="control-label">tanggal rawat</label>
						<input type="date" class="form-control" name="tanggalrawat" required>
						@if ($errors->has('tanggalrawat'))
							<span class="help-block">
								<strong>{{ $errors->first ('tanggalrawat') }}</strong>
							</span>
						@endif
					</div>
					<div class="form-group {{ $errors->has('suhutubuh') ? 'has-error' : '' }}">
						<label class="control-label"> suhu tubuh </label>
						<input type="time" class="form-control" name="suhutubuh" required>
						@if ($errors->has('suhutubuh'))
							<span class="help-block">
								<strong>{{ $errors->first ('suhutubuh') }}</strong>
							</span>
						@endif
					</div>
					<div class="form-group {{ $errors->has('tensidarah') ? 'has-error' : '' }}">
						<label class="control-label"> tensi darah </label>
						<input type="text" class="form-control" name="tensidarah" required>
						@if ($errors->has('tensidarah'))
							<span class="help-block">
								<strong>{{ $errors->first ('tensidarah') }}</strong>
							</span>
						@endif
					</div>
					<div class="form-group {{ $errors->has('ketgejala') ? 'has-error' : '' }}">
						<label class="control-label">keterangan gejala</label>
						<input type="textarea" class="form-control" name="ketgejala" required>
						@if ($errors->has('ketgejala'))
							<span class="help-block">
								<strong>{{ $errors->first ('ketgejala') }}</strong>
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