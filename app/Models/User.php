<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
/**
 * Class User
 * 
 * @property int $id
 * @property string $name
 * @property string $email
 * @property Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $two_factor_secret
 * @property string|null $two_factor_recovery_codes
 * @property Carbon|null $two_factor_confirmed_at
 * @property string|null $remember_token
 * @property int|null $current_team_id
 * @property string|null $profile_photo_path
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class User extends Model implements Authenticatable

{
	protected $table = 'users';

	protected $casts = [
		'current_team_id' => 'int'
	];

	protected $dates = [
		'email_verified_at',
		'two_factor_confirmed_at'
	];

	protected $hidden = [
		'password',
		'two_factor_secret',
		'remember_token'
	];

	protected $fillable = [
		'name',
		'email',
		'email_verified_at',
		'password',
		'two_factor_secret',
		'two_factor_recovery_codes',
		'two_factor_confirmed_at',
		'remember_token',
		'current_team_id',
		'profile_photo_path'
	];
	

    // ...

    public function getAuthIdentifierName()
    {
        // Return the name of the primary key for the user model
    }

    public function getAuthIdentifier()
    {
        // Return the value of the primary key for the user model
    }

    public function getAuthPassword()
    {
        // Return the hashed password for the user model
    }

    public function getRememberToken()
    {
        // Return the "remember me" token for the user model
    }

    public function setRememberToken($value)
    {
        // Set the "remember me" token for the user model
    }

    public function getRememberTokenName()
    {
        // Return the name of the "remember me" token for the user model
    }

}
