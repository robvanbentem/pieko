<?php

/**
 * Return our main app index file
 * @todo move to contoller
 */
Route::get('/', function () {
    return View::make('app.index');
});


/**
 * Global patterns
 */
Route::pattern('id', '[0-9]+');
Route::pattern('date', '[0-9]{4}-[0-9]{2}-[0-9]{2}');


/**
 * All pieko/ui/.. routes are frontend routes
 */

/* Common */
Route::get('pieko/ui/common/todo.html', 'ui\CommonController@getTodo');


/* Shoplist */
Route::get('pieko/ui/shoplist/index.html', 'ui\ShoplistController@getIndex');


/* Receipt */
Route::get('pieko/ui/receipt/index.html', 'ui\ReceiptController@getIndex');


/**
 * pieko/api/.. are api controllers for angular
 */

/* Errand */
Route::get('pieko/api/errand/get/{id}', 'api\ErrandController@getById');
Route::get('pieko/api/errand/get/{date}', 'api\ErrandController@getByDate');

Route::delete('pieko/api/errand/delete/{id}', 'api\ErrandController@deleteById');

/**
 * Dirty catch all route for html5 pushstate mishandling
 * @todo find better solution
 */
Route::any('{path?}', function () {
    return View::make('app.index');
});
