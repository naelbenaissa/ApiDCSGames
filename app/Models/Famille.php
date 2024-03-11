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
 * Class Famille
 *
 * @property int $familleID
 * @property string $FAMILLE_NAME
 *
 * @package App\Models
 */
class Famille extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'famille';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'familleID' => 'int'
	];

	protected $fillable = [
		'familleID',
		'FAMILLE_NAME'
	];
}
