@extends('layouts.master')
@section('title', 'Tambah Artikel')

@section('content')
    <h1 class="h3 mb-2 text-gray-800">Tambah Data Artikel</h1>
	
	<div class="card shadow mb-4">
    	<form action="/artikel" method="POST">
    		@csrf
	    	<div class="card-header py-3">
	      		<h6 class="m-0 font-weight-bold text-primary">Tambah Artikel</h6>
	    	</div>
	    	<div class="card-body">
				<div class="form-group">
					<label for="judul_artikel">Judul</label>
					<input type="text" name="judul_artikel" id="judul_artikel" class="form-control">
				</div>
				<div class="form-group">
					<label for="isi_artikel">Isi</label>
					<textarea name="isi_artikel" id="isi_artikel" class="form-control"></textarea>
				</div>
				<div class="form-group">
					<label for="slug">Slug</label>
					<input type="text" name="slug" id="slug" class="form-control">
				</div>
				<div class="form-group">
					<label for="tag">Tag</label>
					<input type="text" name="tag" id="tag" class="form-control">
				</div>
				<div class="form-group">
					<label for="user_id">User</label>
					<select name="user_id" id="user_id" class="form-control">
						@foreach($user as $u)
							<option value="{{ $u->id_user }}">{{ $u->id_user }}</option>
						@endforeach
					</select>
				</div>
	    	</div>
	    	<div class="card-footer">
	    		<input type="submit" class="btn btn-primary" value="Tambah">
	    	</div>
    	</form>
    </div>
@endsection