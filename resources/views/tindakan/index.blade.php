@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
	<div class="col-md-12">
		<div class="panel panel-primary">
			<div class="panel-heading">Data tindakan
				<div class="panel-title pull-right"><a href="{{ route('tindakan.create') }}">Tambah</a>
				</div>
			</div>
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table">
					  <thead>
					  	<tr>
						<th>No</th>
						<th>KODE TINDAKAN</th>
						<th>NAMA </th>
						<th>JENIS TINDAKAN</th>
						<th>WAKTU TINDAKAN</th>
						<th>TARIF TINDAKAN</th>
						<th colspan="2">Action</th>
					    </tr>
					  </thead>
					  <tbody>
					  	@php $no = 1; @endphp
					  	@foreach($tindakans as $data)
					   <tr>
					   	<td>{{ $no++ }}</td>
					   	<td>{{ $data->kode_tindakan }}</td>
					   	<td><p>{{ $data->nama }}</p></td>
					   	<td><p>{{ $data->jenistindakan }}</p></td>
					   	<td><p>{{ $data->waktutindakan }}</p></td>
					   	<td><p>{{ $data->tariftindakan }}</p></td>
					   	<td>
					   	<a class="btn btn-warning" href="{{ route('tindakan.edit',$data->id) }}">Edit</a>
					   	</td>
					   	<td>
					   		<form method="post" action="{{ route('tindakan.destroy',$data->id)}}">
					   			<input type="hidden" name="_token" value="{{ csrf_token() }}">
					   			<input type="hidden" name="_method" value="DELETE">
					   			<button type="submit" class="btn btn-danger">Delete</button>
					   		</form>
					   	</td>
					   	<td><a href="{{ route('tindakan.show',$data->id) }}" class="btn btn-success">Show</a></td>
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