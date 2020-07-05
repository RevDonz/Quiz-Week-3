@extends('layouts.master')
@section('title', 'Data Artikel')

@section('content')
    <h1 class="h3 mb-2 text-gray-800">Tabel Data Artikel</h1>
	
	@if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong><p>{{ $message }}</p></strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif

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
          				@foreach($artikels as $key => $artikel)
            			<tr>
              				<td>{{ $key+1 }}</td>
              				<td>{{ $artikel->judul_artikel }}</td>
              				<td>{{ $artikel->isi_artikel }}</td>
              				<td>{{ $artikel->slug }}</td>
              				<td>{{ $artikel->tag }}</td>
              				<td>{{ $artikel->created_at }}</td>
              				<td>{{ $artikel->updated_at }}</td>
              				<td>
              					<form action="{{ route('artikel.destroy', $artikel->id) }}" method="post">
	              					<a href="{{ route('artikel.show', $artikel->id) }}" class="btn btn-sm btn-primary btn-circle"><i class="fas fa-eye"></i></a>
	              					<a href="{{ route('artikel.edit', $artikel->id) }}" class="btn btn-sm btn-success btn-circle"><i class="fas fa-edit"></i></a>
	              						@csrf
	              						@method('DELETE')
	              						<button type="submit" class="btn btn-danger btn-circle btn-sm">
	              							<i class="fas fa-trash"></i>
	              						</button>
	              				</form>
              				</td>
            			</tr>
            			@endforeach
          			</tbody>
        		</table>
      		</div>
    	</div>
  	</div>
@endsection