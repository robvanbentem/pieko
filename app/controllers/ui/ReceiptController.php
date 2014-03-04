<?php

/**
 * @author Rob van Bentem
 * @created 21-02-2014 4:45 PM
 *
 * @description  
 */
namespace ui;

use View;

class ReceiptController extends \BaseController {
    public function getIndex()
    {
        return View::make('receipt/index');
    }
} 