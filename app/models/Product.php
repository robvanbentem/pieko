<?php
/**
 * Created by: Rob van Bentem
 * Date: 3/4/14
 * Time: 7:07 PM
 */

class Product extends Eloquent {

    protected $table = 'products';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function shop()
    {
        return $this->hasOne('Shop');
    }
}