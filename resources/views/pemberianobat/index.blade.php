@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
	<div class="col-md-12">
		<div class="panel panel-primary">
			<div class="panel-heading">Data Obat
				<div class="panel-title pull-right"><a href="{{ route('pemberianobat.create') }}">Tambah</a>
				</div>
			</div>
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table">
					  <thead>
					  	<tr>
						<th>No</th>
						<th>nomor rawat jalan</th>
						<th>tgl diberiobat</th>
						<th>tgl rawat</th>
						<th>jumlahobat</th>
						<th>dosis</th>
						<th colspan="2">Action</th>
					    </tr>
					  </thead>
					  <tbody>
					  	@php $no = 1; @endphp
					  	@foreach($pemberianobats as $data)
					   <tr>
					   	<td>{{ $no++ }}</td>
					   	<td>{{ $data->nomorrawatjalan}}</td>
					   	<td><p>{{ $data->tgldiberiobat }}</p></td>
					   	<td><p>{{ $data->tglrawat }}</p></td>
					   	<td><p>{{ $data->jumlahobat }}</p></td>
					   	<td><p>{{ $data->dosis }}</p></td>
					   	<td>
					   	<a class="btn btn-warning" href="{{ route('pemberianobat.edit',$data->id) }}">Edit</a>
					   	</td>
					   	<td>
					   		<form method="post" action="{{ route('pemberianobat.destroy',$data->id)}}">
					   			<input type="hidden" name="_token" value="{{ csrf_token() }}">
					   			<input type="hidden" name="_method" value="DELETE">
					   			<button type="submit" class="btn btn-danger">Delete</button>
					   		</form>
					   	</td>
					   	<td><a href="{{ route('pemberianobat.show',$data->id) }}" class="btn btn-success">Show</a></td>
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