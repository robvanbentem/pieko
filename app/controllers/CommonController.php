<?php

/**
 * @author Rob van Bentem
 * @created 07-02-2014 9:36 AM
 *
 * @description  
 */

class CommonController extends BaseController {

    public function getTodo()
    {
        return View::make('common/todo');
    }

} 