<?php

/**
 * @author Rob van Bentem
 * @created 07-02-2014 4:14 PM
 *
 * @description  
 */

class Shop extends Eloquent {

    protected $table = 'shops';

    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products()
    {
        return $this->hasMany('Product');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function receipts()
    {
        return $this->hasMany('Receipt');
    }
} 