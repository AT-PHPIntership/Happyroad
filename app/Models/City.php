<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'cities';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */

    protected $fillable = array(
        'id',
        'name',
        'created_at',
        'updated_at'
    );

    /**
    * City has many Post
    *
    * @return Illuminate\Database\Eloquent\Relations\HasMany
    */
    public function post()
    {
      return $this->hasMany('App\Models\Post', 'city_id');
    }

    /**
    * City has many User
    *
    * @return Illuminate\Database\Eloquent\Relations\HasMany
    */
    public function user()
    {
      return $this->hasMany('App\Models\User', 'city_id');
    }
}
