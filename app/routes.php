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
    Route::get('pieko/api/errand/{id}', 'api\ErrandController@getById');
    Route::get('pieko/api/errand/{date}', 'api\ErrandController@getByDate');
    Route::delete('pieko/api/errand/{id}', 'api\ErrandController@deleteById');
    Route::post('pieko/api/errand/{id}', 'api\ErrandController@postCreate');

    /* Receipt */
    Route::get('pieko/api/receipt/{id}', 'api\ReceiptController@getById');
    Route::get('pieko/api/receipt/{date}', 'api\ReceiptController@getByDate');
    Route::delete('pieko/api/receipt/{id}', 'api\ReceiptController@deleteById');
    Route::post('pieko/api/receipt/{id}', 'api\ReceiptController@postCreate');

    /* Product */
    Route::get('pieko/api/product/{id}', 'api\ProductController@getById');
    Route::get('pieko/api/product/search/{id}/{name}', 'api\ProductController@getByShopIdAndName');
    Route::get('pieko/api/product/search/{name}', 'api\ProductController@getByName');
    Route::get('pieko/api/product/shop/{id}', 'api\ProductController@getByShopId');
});

/**
 * Dirty catch all route for html5 pushstate mishandling
 * @todo find better solution
 */
Route::any('{path?}', function () {
    return View::make('app.index');
});
