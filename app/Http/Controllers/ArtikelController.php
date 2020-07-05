<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtikelModel;

class ArtikelController extends Controller
{
	public function index() {
		$artikel = ArtikelModel::all();
		return view('artikel.index', compact('artikel'));
	}

	public function create() {
		return view('artikel.create');
	}
}
