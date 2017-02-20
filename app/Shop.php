<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;


class Shop extends Model
{

    use SoftDeletes;




    /**
     * The attributes of Shop that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'slug', 'address', 'url'
    ];


    /**
     * The attributes of Shop that should be hidden from arrays
     *
     * @var array
     */
    protected $hidden = [];


    /**
     * Returns the user that owns the shop.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }


    /**
     * Returns the products from this Shop.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }


    /**
     * Returns all the deals pertaining to this Shop
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */
    public function deals()
    {
        return $this->hasManyThrough('App\Deal', 'App\Product');
    }


    /**
     * Returns the reviews specific to the Shop.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function reviews()
    {
        return $this->morphMany('App\Review', 'reviewable');
    }










}