<?php
/**
 * Created by: Rob van Bentem
 * Date: 3/4/14
 * Time: 7:14 PM
 */

class Withdrawal extends Eloquent {

    protected $table = 'withdrawals';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('User');
    }
} 