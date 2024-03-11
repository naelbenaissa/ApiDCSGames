<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
/**
 * Class Produit
 *
 * @property int $produitID
 * @property string $NOM_PRODUIT
 * @property int $familleID
 *
 * @package App\Models
 */
class Produit extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'produit';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'produitID' => 'int',
		'familleID' => 'int'
	];

	protected $fillable = [
		'produitID',
		'NOM_PRODUIT',
		'familleID'
	];
}
