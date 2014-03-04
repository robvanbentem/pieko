<?php
/**
 * Created by: Rob van Bentem
 * Date: 3/4/14
 * Time: 7:07 PM
 */

class Product extends Eloquent {

    protected $table = 'products';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function shop()
    {
        return $this->belongsTo('Shop');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function errands()
    {
        return $this->hasMany('Errand');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function purchases()
    {
        return $this->hasMany('Purchase');
    }
}