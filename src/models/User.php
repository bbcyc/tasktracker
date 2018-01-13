<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * @param str $email
     *
     * @return User|null
     */
    public function getUserByEmail($email) {
    	$user = $this->where('emailAddress', $email)->first();
    	return $user;
    }
}