<?php

/**
 * Created by Reliese Model.
 */

namespace app\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Produto extends Model
{
	
	use HasFactory;
	
	public $timestamps = false;



	protected $fillable = [
		'nome',
		'preco',
		'modelo',
		'marca',
		'id',
		'preco'
	];
}
