<?php

/**
 * @author Rob van Bentem
 * @created 06-02-2014 4:36 PM
 *
 * @description  
 */

namespace ui;

use View;

class ShoplistController extends \BaseController {

    public function getIndex()
    {
        return View::make('shoplist.index');
    }
} 