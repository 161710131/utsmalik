@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Edit Data Obat
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('dokter.update',$dokters->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('kodedok') ? ' has-error' : '' }}">
			  			<label class="control-label">kode dokter</label>	
			  			<input type="text" name="kodedok" class="form-control" value="{{ $dokters->kodedok }}"  required>
			  			@if ($errors->has('kodedok'))
                            <span class="help-block">
                                <strong>{{ $errors->first('kodedok') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $dokters->nama }}"  required>
			  			@if ($errors->has('nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('jk') ? 'has-error' : '' }}">
						<label class="control-label">jenis kelamin</label><br>
						<label class="radio-inline">
							<input type="radio" class="flat" name="jk" value="laki-laki" 
							{{ $dokters->jk == 'laki-laki' ? 'checked':''}}>laki-laki</label>
						<label class="radio-inline">
							<input type="radio" class="flat" name="jk" value="perempuan" 
							{{ $dokters->jk == 'perempuan' ? 'checked':''}}>perempuan</label>
						@if ($errors->has('jk'))
							<span class="help-block">
								<strong>{{ $errors->first ('jk') }}</strong>
							</span>
						@endif
					</div>
			  		<div class="form-group {{ $errors->has('spesialis') ? 'has-error' : '' }}">
						<label class="control-label">spesialis</label><br>
						<label class="radio-inline">
							<input type="radio" class="flat" name="spesialis" value="gigi" 
							{{ $dokters->spesialis == 'gigi' ? 'checked':''}}>gigi</label>
						<label class="radio-inline">
							<input type="radio" class="flat" name="spesialis" value="anak" 
							{{ $dokters->spesialis == 'anak' ? 'checked':''}}>anak</label>
						<label class="radio-inline">
							<input type="radio" class="flat" name="spesialis" value="mata" 
							{{ $dokters->spesialis == 'mata' ? 'checked':''}}>mata</label>
						<label class="radio-inline">
							<input type="radio" class="flat" name="spesialis" value="biasa" 
							{{ $dokters->spesialis == 'biasa' ? 'checked':''}}>biasa</label>
						@if ($errors->has('spesialis'))
							<span class="help-block">
								<strong>{{ $errors->first ('spesialis') }}</strong>
							</span>
						@endif
					</div>
			  		<div class="form-group {{ $errors->has('nomorijinpraktek') ? ' has-error' : '' }}">
			  			<label class="control-label">nomor ijin praktek</label>	
			  			<input type="text" name="nomorijinpraktek" class="form-control" value="{{ $dokters->nomorijinpraktek }}"  required>
			  			@if ($errors->has('nomorijinpraktek'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nomorijinpraktek') }}</strong>
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