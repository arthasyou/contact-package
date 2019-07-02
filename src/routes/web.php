<?php



Route::group(['namespace'=>'Ysx\Contact\Http\Controllers'], function(){
    Route::get('contact', 'ContactController@index')->name('contact');

    Route::post('contact', 'ContactController@send');
});

