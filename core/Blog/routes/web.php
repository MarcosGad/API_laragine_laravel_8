<?php

Route::namespace('Core\Blog\Controllers\Web')->prefix('admin')->name('admin.')->group(function () {
    #*** Ex: START: Blog ***#
    // Route::resource('blogs', 'BlogController')->except([
    //    'store', 'update', 'destroy'
    // ]);
    #*** END: Blog ***#
});
