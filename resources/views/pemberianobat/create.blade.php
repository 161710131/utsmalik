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
				<form action="{{ route('pemberianobat.store') }}" method="post">
					{{ csrf_field() }}
					<div class="form group {{ $errors->has('nomorrawatjalan') ? 'has-error' : '' }}">
						<label class="control-label">nomor rawat jalan</label>
						<input type="text" class="form-control" name="nomorrawatjalan" required>
						@if($errors->first('nomorrawatjalan'))
						<span class="help-block">
							<strong>{{ $errors->first('nomorrawatjalan') }}</strong>
						</span>
						@endif
					</div>
					<div class="form-group {{ $errors->has('tgldiberiobat') ? 'has-error' : '' }}">
						<label class="control-label">tgl diberiobat</label>
						<input type="date" class="form-control" name="tgldiberiobat" required>
						@if ($errors->has('tgldiberiobat'))
							<span class="help-block">
								<strong>{{ $errors->first ('tgldiberiobat') }}</strong>
							</span>
						@endif
					</div>
					<div class="form-group {{ $errors->has('tglrawat') ? 'has-error' : '' }}">
						<label class="control-label">tgl rawat</label>
						<input type="date" class="form-control" name="tglrawat" required>
						@if ($errors->has('tglrawat'))
							<span class="help-block">
								<strong>{{ $errors->first ('tglrawat') }}</strong>
							</span>
						@endif
					</div>
					<div class="form-group {{ $errors->has('jumlahobat') ? 'has-error' : '' }}">
						<label class="control-label">jumlah obat</label>
						<input type="text" class="form-control" name="jumlahobat" required>
						@if ($errors->has('jumlahobat'))
							<span class="help-block">
								<strong>{{ $errors->first ('jumlahobat') }}</strong>
							</span>
						@endif
					</div>
					<div class="form-group {{ $errors->has('dosis') ? 'has-error' : '' }}">
						<label class="control-label">dosis</label>
						<input type="text" class="form-control" name="dosis" required>
						@if ($errors->has('dosis'))
							<span class="help-block">
								<strong>{{ $errors->first ('dosis') }}</strong>
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