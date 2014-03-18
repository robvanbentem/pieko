<?php
/**
 * Created by: Rob van Bentem
 * Date: 3/6/14
 * Time: 8:04 PM
 */

namespace api;

class ShopController extends \ApiController
{

    public function getAll()
    {
        try {
            return $this->success(
                \Shop::orderby('default','desc')
                    ->get()
                    ->toArray()
            );
        } catch (\Exception $e) {
            return $this->fail(array(
                'error' => $e->getMessage()
            ));
        }
    }
}