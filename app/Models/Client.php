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
 * Class Client
 *
 * @property int $ClientID
 * @property string $NomClient
 * @property int|null $GrandClientID
 * @property int|null $CentreActiviteID
 *
 * @package App\Models
 */
class Client extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'clients';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ClientID' => 'int',
		'GrandClientID' => 'int',
		'CentreActiviteID' => 'int'
	];

	protected $fillable = [
		'ClientID',
		'NomClient',
		'GrandClientID',
		'CentreActiviteID'
	];
}
