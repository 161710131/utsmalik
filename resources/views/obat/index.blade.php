@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
	<div class="col-md-12">
		<div class="panel panel-primary">
			<div class="panel-heading">Data Obat
				<div class="panel-title pull-right"><a href="{{ route('obat.create') }}">Tambah</a>
				</div>
			</div>
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table">
					  <thead>
					  	<tr>
						<th>No</th>
						<th>KODE OBAT</th>
						<th>NAMA OBAT</th>
						<th>KATEGORI</th>
						<th>JUMLAH</th>
						<th>HARGA</th>
						<th colspan="2">Action</th>
					    </tr>
					  </thead>
					  <tbody>
					  	@php $no = 1; @endphp
					  	@foreach($obats as $data)
					   <tr>
					   	<td>{{ $no++ }}</td>
					   	<td>{{ $data->kode_obat }}</td>
					   	<td><p>{{ $data->namaobat }}</p></td>
					   	<td><p>{{ $data->kategori }}</p></td>
					   	<td><p>{{ $data->jumlah }}</p></td>
					   	<td><p>{{ $data->harga }}</p></td>
					   	<td>
					   	<a class="btn btn-warning" href="{{ route('obat.edit',$data->id) }}">Edit</a>
					   	</td>
					   	<td>
					   		<form method="post" action="{{ route('obat.destroy',$data->id)}}">
					   			<input type="hidden" name="_token" value="{{ csrf_token() }}">
					   			<input type="hidden" name="_method" value="DELETE">
					   			<button type="submit" class="btn btn-danger">Delete</button>
					   		</form>
					   	</td>
					   	<td><a href="{{ route('obat.show',$data->id) }}" class="btn btn-success">Show</a></td>
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