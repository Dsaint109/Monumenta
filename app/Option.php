<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{

    /**
     * The attributes of Option that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];


    /**
     * The attributes of Option that should be hidden from arrays
     *
     * @var array
     */
    protected $hidden = [];







    /**
     * Returns the product this belongs to
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }


    /**
     * Reurns all the Values of this Option
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function optionValues()
    {
        return $this->hasMany(OptionValue::class);
    }


}
