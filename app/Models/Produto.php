<?php

/**
 * Created by Reliese Model.
 */

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Produto
 * 
 * @property int $id
 * @property string $nome
 * @property float $preco
 * @property string $modelo
 *
 * @package App\Models
 */
class Produto extends Model
{
	protected $table = 'produtos';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'preco' => 'float'
	];

	protected $fillable = [
		'nome',
		'preco',
		'modelo',
		'marca'
	];
}
