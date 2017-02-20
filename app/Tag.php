<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{


    /**
     * The attributes of Products that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];


    /**
     * The attributes of Shop that should be hidden from arrays
     *
     * @var array
     */
    protected $hidden = [];





    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

}
