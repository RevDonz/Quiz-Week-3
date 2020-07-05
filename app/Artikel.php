<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $table = "artikel";

	protected $fillable = [
		'judul_artikel', 'isi_artikel', 'slug', 'tag', 'user_id'
	];
}
