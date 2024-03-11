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
 * Class Centresactivite
 *
 * @property int $CentreActiviteID
 * @property int $NumeroCentreActivite
 *
 * @package App\Models
 */
class Centresactivite extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'centresactivite';
	protected $primaryKey = 'CentreActiviteID';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'CentreActiviteID' => 'int',
		'NumeroCentreActivite' => 'int'
	];

	protected $fillable = [
		'NumeroCentreActivite'
	];
}
