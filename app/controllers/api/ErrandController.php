<?php
/**
 * Created by: Rob van Bentem
 * Date: 3/4/14
 * Time: 8:57 PM
 */

namespace api;

class ErrandController extends \ApiController {

    public function postCreate()
    {

    }

    /**
     * @return string
     */
    public function deleteById()
    {
        return $this->toJson(array(
            'success' => \Errand::destroy(\Route::input('id')) ? true : false
        ));
    }

    /**
     * @return string
     */
    public function getById()
    {
        return \Errand::find(\Route::input('id'))->toJson();
    }

    /**
     * @return string
     */
    public function getByDate()
    {
        return \Errand::where('date', '=', \Route::input('date'))
            ->get()
            ->toJson();
    }

} 