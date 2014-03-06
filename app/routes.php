<?php

/**
 * Global patterns
 */
Route::pattern('id', '[0-9]+');
Route::pattern('date', '[0-9]{4}-[0-9]{2}-[0-9]{2}');

/**
 * Filters
 */
Route::when('pieko/api/*', 'api');


/**
 * Return our main app index file
 * @todo move to controller
 */
Route::get('/', function () {
    return View::make('app.index');
});


/**
 * All pieko/ui/.. routes are frontend routes
 */
Route::group(array(), function () {

    /* Common */
    Route::get('pieko/ui/common/todo.html', 'ui\CommonController@getTodo');

    /* Shoplist */
    Route::get('pieko/ui/shoplist/index.html', 'ui\ShoplistController@getIndex');

    /* Receipt */
    Route::get('pieko/ui/receipt/index.html', 'ui\ReceiptController@getIndex');
});


/**
 * pieko/api/.. are api controllers for angular
 *
 * api filter adds json content-type header
 */
Route::group(array('after' => 'api_'), function () {

    /* Errand */
    Route::get('pieko/api/errand/{id}', 'api\ErrandController@getById'); // get by errand id
    Route::get('pieko/api/errand/date/{date}/user/{id}', 'api\ErrandController@getByDateAndUserId'); // get by date and user id
    Route::get('pieko/api/errand/date/{date}', 'api\ErrandController@getByDate'); // get by date
    Route::delete('pieko/api/errand/{id}', 'api\ErrandController@deleteById');
    Route::post('pieko/api/errand', 'api\ErrandController@postCreate');

    /* Receipt */
    Route::get('pieko/api/receipt/{id}', 'api\ReceiptController@getById'); // get by receipt id
    Route::get('pieko/api/receipt/date/{date}', 'api\ReceiptController@getByDate'); // get by date
    Route::delete('pieko/api/receipt/{id}', 'api\ReceiptController@deleteById');
    Route::post('pieko/api/receipt', 'api\ReceiptController@postCreate');

    /* Product */
    Route::get('pieko/api/product/{id}', 'api\ProductController@getById'); // get by product id
    Route::get('pieko/api/product/shop/{id}/name/{name}', 'api\ProductController@getByShopIdAndName'); // get by shop id and %name%
    Route::get('pieko/api/product/name/{name}', 'api\ProductController@getByName'); // get by %name%
    Route::get('pieko/api/product/shop/{id}', 'api\ProductController@getByShopId'); // get by shop id
});

/**
 * Dirty catch all route for html5 pushstate mishandling
 * @todo find better solution
 */
Route::any('{path?}', function () {
    return View::make('app.index');
});
