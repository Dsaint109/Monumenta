<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OptionValue extends Model
{


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
     * returns the option this is for
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function option()
    {
        return $this->belongsTo(Option::class);
    }

}
