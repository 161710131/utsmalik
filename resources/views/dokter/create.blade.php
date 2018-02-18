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
				<form action="{{ route('dokter.store') }}" method="post">
					{{ csrf_field() }}
					<div class="form group {{ $errors->has('kodedok') ? 'has-error' : '' }}">
						<label class="control-label"> kode dokter </label>
						<input type="text" class="form-control" name="kodedok" required>
						@if($errors->first('kodedok'))
						<span class="help-block">
							<strong>{{ $errors->first('kodedok') }}</strong>
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
					<div class="form-group {{ $errors->has('spesialis') ? 'has-error' : '' }}">
						<label class="control-label">spesialis</label><br>
						<label class="radio-inline">
							<input type="radio" name="spesialis" id="inlineRadio1" value="gigi">gigi</label>
						<label class="radio-inline">
							<input type="radio" name="spesialis" id="inlineRadio2" value="anak">anak</label>
						<label class="radio-inline">
							<input type="radio" name="spesialis" id="inlineRadio2" value="mata">mata</label>
						<label class="radio-inline">
							<input type="radio" name="spesialis" id="inlineRadio2" value="biasa">biasa</label>
						@if ($errors->has('spesialis'))
							<span class="help-block">
								<strong>{{ $errors->first ('spesialis') }}</strong>
							</span>
						@endif
					</div>
					<div class="form-group {{ $errors->has('nomorijinpraktek') ? 'has-error' : '' }}">
						<label class="control-label">nomor ijin praktek</label>
						<input type="text" class="form-control" name="nomorijinpraktek" required>
						@if ($errors->has('nomorijinpraktek'))
							<span class="help-block">
								<strong>{{ $errors->first ('nomorijinpraktek') }}</strong>
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