@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
	<div class="col-md-12">
		<div class="panel panel-primary">
			<div class="panel-heading">Data pasien
				<div class="panel-title pull-right"><a href="{{ route('pasien.create') }}">Tambah</a>
				</div>
			</div>
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table">
					  <thead>
					  	<tr>
						<th>No</th>
						<th>Nomor Rekam Medis</th>
						<th>NAMA </th>
						<th>JENIS KELAMIN</th>
						<th>GOLONGAN DARAH</th>
						<th>TANGGAL LAHIR</th>
						<th colspan="2">Action</th>
					    </tr>
					  </thead>
					  <tbody>
					  	@php $no = 1; @endphp
					  	@foreach($pasiens as $data)
					   <tr>
					   	<td>{{ $no++ }}</td>
					   	<td>{{ $data->nomorrm }}</td>
					   	<td><p>{{ $data->nama }}</p></td>
					   	<td><p>{{ $data->jk }}</p></td>
					   	<td><p>{{ $data->goldar }}</p></td>
					   	<td><p>{{ $data->tl }}</p></td>
					   	<td>
					   	<a class="btn btn-warning" href="{{ route('pasien.edit',$data->id) }}">Edit</a>
					   	</td>
					   	<td>
					   		<form method="post" action="{{ route('pasien.destroy',$data->id)}}">
					   			<input type="hidden" name="_token" value="{{ csrf_token() }}">
					   			<input type="hidden" name="_method" value="DELETE">
					   			<button type="submit" class="btn btn-danger">Delete</button>
					   		</form>
					   	</td>
					   	<td><a href="{{ route('pasien.show',$data->id) }}" class="btn btn-success">Show</a></td>
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