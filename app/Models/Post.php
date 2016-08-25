<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
      protected $table = 'posts';

      /**
      * The attributes that are mass assignable.
      *
      * @var array
      */

      protected $fillable = array(
        'id',
        'category_id',
        'user_id',
        'city_id',
        'cost',
        'time',
        'rating',
        'address_from_to',
        'title',
        'content'
      );

    /**
     * Post belongs to a category.
     *
     * @return Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'category_id');
    }

    /**
     * Post belongs to a city.
     *
     * @return Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function city()
    {
        return $this->belongsTo('App\Models\City', 'city_id');
    }

    /**
     * Post belongs to a user.
     *
     * @return Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    /**
     * Post has many comments.
     *
     * @return Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments()
    {
        return $this->hasMany('App\Models\Comment', 'post_id');
    }
}
