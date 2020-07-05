<?php

namespace App\Http\Controllers;

use App\Artikel;
use App\Models\UserModel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikels = Artikel::all();
		return view('artikel.index', compact('artikels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = UserModel::all();
		return view('artikel.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
			'judul_artikel' => 'required',
			'isi_artikel' => 'required',
			'tag' => 'required',
			'user_id' => 'required'
		]);
		$request["slug"] = str_replace(" ", "-", strtolower($request["judul_artikel"]));

		$result = Artikel::create($request->all());

		if ($result) {
			return redirect()->action('ArtikelController@index');
		}
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function show(Artikel $artikel)
    {
        return view('artikel.detail', compact('artikel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function edit(Artikel $artikel)
    {
        $user = UserModel::all();
        return view('artikel.edit', compact('artikel', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artikel $artikel)
    {
        $request->validate([
            'judul_artikel' => 'required',
            'isi_artikel' => 'required',
            'tag' => 'required',
            'user_id' => 'required'
        ]);
        $request["slug"] = str_replace(" ", "-", strtolower($request["judul_artikel"]));

        $artikel->update($request->all());
        return redirect()->route('artikel.index')->with('success', 'Artikel Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artikel $artikel)
    {
    	$artikel->delete();
    	return redirect()->route('artikel.index')->with('success', 'Data Berhasil Dihapus');
    }
}
