@extends('layouts.master')
@section('title', 'Data Artikel')

@section('content')
    <h1 class="h3 mb-2 text-gray-800">Tabel Data Artikel</h1>

  	<div class="card shadow mb-4">
    	<div class="card-header py-3">
      		<h6 class="m-0 font-weight-bold text-primary">Data Artikel</h6>
    	</div>
    	<div class="card-body">
      		<div class="table-responsive">
        		<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          			<thead>
			            <tr>
							<th>No</th>
							<th>Judul</th>
							<th>Isi</th>
							<th>Slug</th>
							<th>Tag</th>
							<th>Tanggal dibuat</th>
							<th>Tanggal diperbaharui</th>
							<th>Actions</th>
			        	</tr>
			        </thead>
          			<tbody>
          				@foreach($artikel as $key => $data)
            			<tr>
              				<td>{{ $data->key+1 }}</td>
              				<td>{{ $data->judul_artikel }}</td>
              				<td>{{ $data->isi_artikel }}</td>
              				<td>{{ $data->slug }}</td>
              				<td>{{ $data->tag }}</td>
              				<td>{{ $data->created_at }}</td>
              				<td>{{ $data->updated_at }}</td>
              				<td>
              					<a href="/artikel/{{ $data->id_artikel }}" class="btn btn-sm btn-success btn-circle"><i class="fas fa-eye"></i></a>
              					<a href="/artikel/{{ $data->id_artikel }}/edit" class="btn btn-sm btn-danger btn-circle"><i class="fas fa-edit"></i></a>
              					<a href="/artikel/{{ $data->id_artikel }}" class="btn btn-sm btn-danger btn-circle"><i class="fas fa-trash"></i></a>
              				</td>
            			</tr>
            			@endforeach
          			</tbody>
        		</table>
      		</div>
    	</div>
  	</div>
@endsection