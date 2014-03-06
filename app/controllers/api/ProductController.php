<?php
/**
 * Created by: Rob van Bentem
 * Date: 3/6/14
 * Time: 8:04 PM
 */

namespace api;

class ProductController extends \ApiController
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function getById()
    {
        try {
            return $this->success(\Product::findOrFail(\Route::input('id'))->toArray());
        } catch (\Exception $e) {
            return $this->fail(array('error' => $e->getMessage()));
        }
    }


        /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function getByShopIdAndName()
    {
        try {
            return $this->success(
                \Product::where('shop_id', '=', \Route::input('id'))
                    ->where('name', 'LIKE', '%'.\Route::input('name').'%')
                    ->orderby('name')
                    ->get()
                    ->toArray()
            );
        } catch (\Exception $e) {
            return $this->fail(array(
                'error' => $e->getMessage()
            ));
        }
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function getByName()
    {
        try {
            return $this->success(
                \Product::where('name', 'LIKE', '%'.\Route::input('name').'%')
                    ->orderby('name')
                    ->get()
                    ->toArray()
            );
        } catch (\Exception $e) {
            return $this->fail(array(
                'error' => $e->getMessage()
            ));
        }
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function getByShopId()
    {
        try {
            return $this->success(
                \Shop::findOrFail(\Route::input('shop_id'))
                    ->products()
                    ->orderby('name')
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