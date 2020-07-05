<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtikelModel;
use App\Models\UserModel;

class ArtikelController extends Controller
{
	public function index() {
		$artikel = ArtikelModel::all();
		return view('artikel.index', compact('artikel'));
	}

	public function create() {
		$user = UserModel::all();
		return view('artikel.create', compact('user'));
	}

	public function store(Request $request) {
		$request->validate([
			'judul_artikel' => 'required',
			'isi_artikel' => 'required',
			'slug' => 'required',
			'tag' => 'required',
			'user_id' => 'required'
		]);
		$request["slug"] = str_replace(" ", "-", strtolower($request["slug"]));

		$result = ArtikelModel::create($request->all());

		if ($result) {
			return redirect()->action('ArtikelController@index');
		}
	}

	public function show(Request $request) {
		return view();
	}

	public function destroy(Request $request) {
		$request->delete();
		return redirect()->action('ArtikelController@index');		
	}
}
