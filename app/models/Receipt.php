<?php

/**
 * Created by: Rob van Bentem
 * Date: 3/4/14
 * Time: 7:12 PM
 */
class Receipt extends Eloquent
{

    protected $table = 'receipts';

    /**
     * @var array
     */
    static $rules = array(
        'amount' => 'required|numeric',
        'date' => 'required|date',
        'user_id' => 'required|exists:users',
        'shop_id' => 'required|exists:shops'
    );

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
    public function shop()
    {
        return $this->belongsTo('Shop');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function purchases()
    {
        return $this->hasMany('Purchase');
    }
}