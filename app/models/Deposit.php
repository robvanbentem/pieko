<?php
/**
 * Created by: Rob van Bentem
 * Date: 3/4/14
 * Time: 7:14 PM
 */

class Deposit extends Eloquent {

    protected $table = 'deposits';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('User');
    }
} 