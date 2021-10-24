<?php

Route::group(['prefix' => 'api', 'middleware' => []], function () {
    # V1
    Route::namespace('Core\Blog\Controllers\API\V1')->prefix('v1')->name('api.v1.')->group(function () {
        #*** Ex: START: Blog ***#
        // Route::apiResource('blogs', 'BlogController');
        #*** END: Blog ***#

        Route::apiResource('posts', 'PostController');
    });
});
