<?php

namespace App\OAuth;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'oauth_users';
	
	public $incrementing = false
}
