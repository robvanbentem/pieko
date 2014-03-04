<?php
/**
 * Created by: Rob van Bentem
 * Date: 3/4/14
 * Time: 7:10 PM
 */

class Product extends Eloquent {

    protected $table = 'products';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('User');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function product()
    {
        return $this->hasOne('Product');
    }
}