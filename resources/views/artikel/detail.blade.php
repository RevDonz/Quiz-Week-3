@extends('layouts.master')
@section('title', 'Detail Artikel')

@section('content')
	<div class="card shadow mb-4">
        <div class="card-header py-3">
          	<h6 class="m-0 font-weight-bold text-primary">{{ $artikel->judul_artikel }}</h6>
        </div>
        <div class="card-body">
        	<p>Slug : {{ $artikel->slug }}</p>
        	<p>Diunggah pada : {{ $artikel->created_at }} | Diubah pada : {{ $artikel->updated_at }}</p>
        	<p>{{ $artikel->isi_artikel }}</p>
        </div>
      </div>
@endsection