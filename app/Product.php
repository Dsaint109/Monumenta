<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{

    use SoftDeletes;



    /**
     * The attributes of Products that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description',
    ];


    /**
     * The attributes of Product that should be hidden from arrays
     *
     * @var array
     */
    protected $hidden = [];





    /**
     * Returns the Shop the Product belongs to
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }


    /**
     * Returns the Category the Product belongs to
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    /**
     * Returns all the Tags related to the product
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }


    /**
     * Returns the Options of this Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function options()
    {
        return $this->hasMany(Option::class);
    }


    /**
     * This is supposed to return the value of Options
     * for this product.
     * But it might never be used.
     * I just kept it here in case we ever need to call
     * all the values of an option without having to call the
     * Option itself
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */
    public function optionValues()
    {
        return $this->hasManyThrough('App\OptionValue', 'App\Option');
    }


    /**
     * Return the deal on the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function deal()
    {
        return $this->hasOne(Deal::class);
    }


    /**
     * Returns the specific reviews pertaining to the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function reviews()
    {
        return $this->morphMany('App\Review', 'reviewable');
    }




}
