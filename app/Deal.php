<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Deal extends Model
{

    use SoftDeletes;




    /**
     * The attributes of Deal that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];


    /**
     * The attributes of Deal that should be hidden from arrays
     *
     * @var array
     */
    protected $hidden = [];



    public function product()
    {
        return $this->belongsTo(Product::class);
    }

}
