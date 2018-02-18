@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
	<div class="col-md-12">
		<div class="panel panel-primary">
			<div class="panel-heading">Data pasien
				<div class="panel-title pull-right"><a href="{{ route('rekamtindakan.create') }}">Tambah</a>
				</div>
			</div>
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table">
					  <thead>
					  	<tr>
						<th>No</th>
						<th>Diagnosa sakit</th>
						<th>Tanggal rawat </th>
						<th>Suhu tubuh </th>
						<th>Tensi darah</th>
						<th>Keterangan gejala</th>
						<th colspan="2">Action</th>
					    </tr>
					  </thead>
					  <tbody>
					  	@php $no = 1; @endphp
					  	@foreach($rekamtindakans as $data)
					   <tr>
					   	<td>{{ $no++ }}</td>
					   	<td>{{ $data->diagnosasakit }}</td>
					   	<td><p>{{ $data->tanggalrawat }}</p></td>
					   	<td><p>{{ $data->suhutubuh }}</p></td>
					   	<td><p>{{ $data->tensidarah }}</p></td>
					   	<td><p>{{ $data->ketgejala }}</p></td>
					   	<td>
					   	<a class="btn btn-warning" href="{{ route('rekamtindakan.edit',$data->id) }}">Edit</a>
					   	</td>
					   	<td>
					   		<form method="post" action="{{ route('rekamtindakan.destroy',$data->id)}}">
					   			<input type="hidden" name="_token" value="{{ csrf_token() }}">
					   			<input type="hidden" name="_method" value="DELETE">
					   			<button type="submit" class="btn btn-danger">Delete</button>
					   		</form>
					   	</td>
					   	<td><a href="{{ route('rekamtindakan.show',$data->id) }}" class="btn btn-success">Show</a></td>
					   </tr>
					   @endforeach
					  </tbody>
						
					</table>
				</div>
			</div>
		</div>
	</div>
	</div>
</div>
@endsection