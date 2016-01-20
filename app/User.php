<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;
    
    //Properties
    //****************************************************************************************

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];
    
    //Relationships
    //****************************************************************************************
    
    /**
     * A user has many articles
     *
     */
    public function articles()
    {
        //NOTES: Where $user = App\User
        //$user->articles; //Returns Eloquent Collection
        //$user->articles(); //Returns HasMany object
        //$user->articles()->get(); //Returns Eloquent Collection
        //$user->articles()->get()->toArray(); //Returns an array of article data arrays.
        //$user->articles->toArray(); //Returns an array of article data arrays.
        return $this->hasMany('App\Article');
    }
}
