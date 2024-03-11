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
 * Class Grandclient
 *
 * @property int $GrandClientID
 * @property string $NomGrandClient
 *
 * @package App\Models
 */
class Grandclient extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'grandclients';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'GrandClientID' => 'int'
	];

	protected $fillable = [
		'GrandClientID',
		'NomGrandClient'
	];
}
