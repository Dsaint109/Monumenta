<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    //

    /**
     * The attributes of Option Value that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];


    /**
     * The attributes of Option Value that should be hidden from arrays
     *
     * @var array
     */
    protected $hidden = [];




    /**
     * Complex shit :p
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function imaginable()
    {
        return $this->morphTo();
    }



}
