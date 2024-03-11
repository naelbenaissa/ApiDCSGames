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
 * Class Application
 *
 * @property string $IRT
 * @property string $nomAppli
 *
 * @package App\Models
 */
class Application extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'application';
	protected $primaryKey = 'IRT';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'nomAppli'
	];
}
