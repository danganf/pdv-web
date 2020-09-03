<?php

Route::group( [ 'namespace' => 'Api' ], function () {
    
    Route::get('/catalog', 'ProductController@filter' )->name('filter');
    Route::get('/cep/{cep}', 'CepController@filter' )->name('filter');
    Route::post('/order', 'OrderController@create' )->name('create')->middleware('check.json');

});