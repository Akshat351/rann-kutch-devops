<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1'], function () {
    Route::post('update-trip', 'TripApiController@update_trip');
    Route::group(['middleware' => ['auth:sanctum']], function () {

    });

});
