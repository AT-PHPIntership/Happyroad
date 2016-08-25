<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = array(
        'name',
        'email',
        'password',
        'birthday',
        'gender',
        'address',
        'phone_number',
        'avatar',
        'city_id'
    );

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public $timestamps = false;

    /**
     * User belongs to many roles.
     *
     * @return Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function roles()
    {
        return $this->belongsToMany('App\Models\Role', 'user_roles', 'user_id', 'role_id');
    }


   /**
    * User has many Post
    *
    * @return Illuminate\Database\Eloquent\Relations\HasMany
    */
    public function post()
    {
      return $this-> hasMany('App\Models\Post', 'user_id');
    }

    /**
     * User has many Comment
     *
     * @return Illuminate\Database\Eloquent\Relations\HasMany
     */
     public function comment()
     {
       return $this-> hasMany('App\Models\Comment', 'user_id');
     }
}
