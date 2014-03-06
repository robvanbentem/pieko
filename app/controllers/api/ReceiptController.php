<?php
/**
 * Created by: Rob van Bentem
 * Date: 3/6/14
 * Time: 7:19 PM
 */

namespace api;


class ReceiptController extends \ApiController {

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function postCreate()
    {
        $v = \Validator::make(\Input::all(), \Receipt::$rules);

        if ($v->passes()) {
            return $this->success(array(
                'success' => \Receipt::create(\Input::all())->exists
            ));
        } else {
            return $this->fail(array(
                'errors' => $v->messages()->toArray()
            ));
        }
    }


    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteById()
    {
        return $this->success(array(
            'success' => \Receipt::destroy(\Route::input('id')) ? true : false
        ));
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function getById()
    {
        try {
            return $this->success(\Receipt::findOrFail(\Route::input('id'))->toArray());
        } catch (\Exception $e) {
            return $this->fail(array('error' => $e->getMessage()));
        }
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function getByDate()
    {
        return $this->success(
            \Receipt::where(\DB::raw('DATE(date)'), '=', \Route::input('date'))
                ->get()->toArray()
        );
    }
}