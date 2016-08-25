<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */

    protected $fillable = array(
        'id',
        'name',
        'description',
        'created_at',
        'updated_at'
    );

    /**
    * Category has many Post
    *
    * @return Illuminate\Database\Eloquent\Relations\HasMany
    */
    public function post()
    {
      return $this->hasMany('App\Models\Post', 'category_id');
    }
}
