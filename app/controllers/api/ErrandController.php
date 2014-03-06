<?php
/**
 * Created by: Rob van Bentem
 * Date: 3/4/14
 * Time: 8:57 PM
 */

namespace api;

class ErrandController extends \ApiController
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function postCreate()
    {
        $v = \Validator::make(\Input::all(), \Errand::$rules);

        if ($v->passes()) {
            return $this->success(array(
                'success' => \Errand::create(\Input::all())->exists
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
            'success' => \Errand::destroy(\Route::input('id')) ? true : false
        ));
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function getById()
    {
        try {
            return $this->success(\Errand::findOrFail(\Route::input('id'))->toArray());
        } catch (\Exception $e) {
            return $this->fail(array('error' => $e->getMessage()));
        }
    }

    /**
     * This returns errands that fall between a certain given date
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getByDate()
    {
        return $this->success(
            \Errand::where('date_from', '<=', \Route::input('date'))
                ->where('date_to', '>=', \Route::input('date'))
                ->get()->toArray()
        );
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function getByDateAndUserId()
    {
        return $this->success(
            \Errand::where('date_from', '<=', \Route::input('date'))
                ->where('date_to', '>=', \Route::input('date'))
                ->where('user_id', '=', \Route::input('id'))
                ->get()->toArray()
        );
    }
}