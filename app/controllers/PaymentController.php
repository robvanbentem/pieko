<?php

/**
 * @author Rob van Bentem
 * @created 21-02-2014 4:45 PM
 *
 * @description  
 */

class PaymentController extends BaseController {
    public function getIndex()
    {
        return View::make('payment/index');
    }
} 