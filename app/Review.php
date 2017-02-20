<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{

    /**
     * The attributes of Review that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];


    /**
     * The attributes of Review that should be hidden from arrays
     *
     * @var array
     */
    protected $hidden = [];





    /**
     * Complex Shit :P
     *
     * @return mixed
     */
    public function reviewable()
    {
        return $this->$this->morphTo();
    }


}
