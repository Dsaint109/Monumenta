<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    /**
     * The attributes of Category that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];


    /**
     * The attributes of Category that should be hidden from arrays
     *
     * @var array
     */
    protected $hidden = [];






    /**
     * Returns the products in the Category
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }



}
