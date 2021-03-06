<?php

namespace App\Entities;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Autenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * Class User.
 *
 * @package namespace App\Entities;
 */
class User extends Autenticatable
{
    use SoftDeletes;
    use Notifiable;    

    public $timestamps = true;
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    protected $fillable = [
        'cpf', 'name', 'phone','birth','gerder','notes','email','password','status', 'permission'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];	

}
