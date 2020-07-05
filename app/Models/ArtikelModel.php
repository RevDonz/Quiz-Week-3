<?php 

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
/**
 * 
 */
class ArtikelModel extends Model {
	protected $table = "artikel";

	protected $fillable = [
		'judul_artikel', 'isi_artikel', 'slug', 'tag'
	];

}