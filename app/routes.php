<?php

/**
 * Return our main app index file
 * @todo move to contoller
 */
Route::get('/', function () {
    return View::make('app.index');
});

/**
 * All pieko/.. routes are api routes for Angular
 */

/* Common */
Route::get('pieko/common/todo.html', 'CommonController@getTodo');


/* Shoplist */
Route::get('pieko/shoplist/index.html', 'ShoplistController@getIndex');


/* Payment */
Route::get('pieko/payment/index.html', 'PaymentController@getIndex');


/**
 * Dirty catch all route for html5 pushstate mishandling
 * @todo find better solution
 */
Route::any('{path?}', function () {
    return View::make('app.index');
});
