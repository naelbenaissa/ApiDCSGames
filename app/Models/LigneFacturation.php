<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
/**
 * Class LigneFacturation
 *
 * @property int $LF_ID
 * @property int $produitID
 * @property int $CentreActiviteID
 * @property Carbon $mois
 * @property string $IRT
 * @property float $prix
 * @property string $nature
 * @property float $volume
 *
 * @package App\Models
 */
class LigneFacturation extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'ligne_facturation';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'LF_ID' => 'int',
		'produitID' => 'int',
		'CentreActiviteID' => 'int',
		'mois' => 'datetime',
		'prix' => 'float',
		'volume' => 'float'
	];

	protected $fillable = [
		'LF_ID',
		'produitID',
		'CentreActiviteID',
		'mois',
		'IRT',
		'prix',
		'nature',
		'volume'
	];
}
