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
			  	<form action="{{ route('pasien.update',$pasiens->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('nomorrm') ? ' has-error' : '' }}">
			  			<label class="control-label">nomor rekam medis</label>	
			  			<input type="text" name="nomorrm" class="form-control" value="{{ $pasiens->nomorrm }}"  required>
			  			@if ($errors->has('nomorrm'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nomorrm') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $pasiens->nama }}"  required>
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
							{{ $pasiens->jk == 'laki-laki' ? 'checked':''}}>laki-laki</label>
						<label class="radio-inline">
							<input type="radio" class="flat" name="jk" value="perempuan" 
							{{ $pasiens->jk == 'perempuan' ? 'checked':''}}>perempuan</label>
						@if ($errors->has('jk'))
							<span class="help-block">
								<strong>{{ $errors->first ('jk') }}</strong>
							</span>
						@endif
					</div>
			  		<div class="form-group {{ $errors->has('goldar') ? 'has-error' : '' }}">
						<label class="control-label">golongan darah</label><br>
						<label class="radio-inline">
							<input type="radio" class="flat" name="goldar" value="A" 
							{{ $pasiens->goldar == 'A' ? 'checked':''}}>A</label>
						<label class="radio-inline">
							<input type="radio" class="flat" name="goldar" value="B" 
							{{ $pasiens->goldar == 'B' ? 'checked':''}}>B</label>
						<label class="radio-inline">
							<input type="radio" class="flat" name="goldar" value="O" 
							{{ $pasiens->goldar == 'O' ? 'checked':''}}>O</label>
						<label class="radio-inline">
							<input type="radio" class="flat" name="goldar" value="AB" 
							{{ $pasiens->goldar == 'AB' ? 'checked':''}}>AB</label>
						@if ($errors->has('goldar'))
							<span class="help-block">
								<strong>{{ $errors->first ('goldar') }}</strong>
							</span>
						@endif
					</div>
			  		<div class="form-group {{ $errors->has('tl') ? ' has-error' : '' }}">
			  			<label class="control-label">tanggal lahir</label>	
			  			<input type="text" name="tl" class="form-control" value="{{ $pasiens->tl }}"  required>
			  			@if ($errors->has('tl'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tl') }}</strong>
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