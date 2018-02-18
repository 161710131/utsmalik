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
				<form action="{{ route('pasien.store') }}" method="post">
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
					<div class="form-group {{ $errors->has('nama') ? 'has-error' : '' }}">
						<label class="control-label">Nama</label>
						<input type="text" class="form-control" name="nama" required>
						@if ($errors->has('nama'))
							<span class="help-block">
								<strong>{{ $errors->first ('nama') }}</strong>
							</span>
						@endif
					</div>
					<div class="form-group {{ $errors->has('jk') ? 'has-error' : '' }}">
						<label class="control-label">jenis kelamin</label><br>
						<label class="radio-inline">
							<input type="radio" name="jk" id="inlineRadio1" value="laki-laki">laki-laki</label>
						<label class="radio-inline">
							<input type="radio" name="jk" id="inlineRadio2" value="perempuan">perempuan</label>
						@if ($errors->has('jk'))
							<span class="help-block">
								<strong>{{ $errors->first ('jk') }}</strong>
							</span>
						@endif
					</div>
					<div class="form-group {{ $errors->has('goldar') ? 'has-error' : '' }}">
						<label class="control-label">golongan darah</label><br>
						<label class="radio-inline">
							<input type="radio" name="goldar" id="inlineRadio1" value="A">A</label>
						<label class="radio-inline">
							<input type="radio" name="goldar" id="inlineRadio2" value="B">B</label>
						<label class="radio-inline">
							<input type="radio" name="goldar" id="inlineRadio2" value="O">O</label>
						<label class="radio-inline">
							<input type="radio" name="goldar" id="inlineRadio2" value="AB">AB</label>
						@if ($errors->has('goldar'))
							<span class="help-block">
								<strong>{{ $errors->first ('goldar') }}</strong>
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