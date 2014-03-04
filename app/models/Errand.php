<?php
/**
 * Created by: Rob van Bentem
 * Date: 3/4/14
 * Time: 7:10 PM
 */

class Errand extends Eloquent {

    protected $table = 'errands';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('User');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        return $this->belongsTo('Product');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function purchases()
    {
        return $this->hasMany('Purchase');
    }
}