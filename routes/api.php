<?php

Route::group([

    'middleware' => 'api',

], function () {
//    Authentication start
    Route::post('login', 'AuthController@login');
    Route::post('create', 'AuthController@creatUsers');
    Route::post('signup', 'AuthController@signup');
    Route::get('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
    Route::get('users','AuthController@allUsers');
    Route::get('allRoles','AuthController@allRoles');
    Route::post('editRoles','AuthController@editRoles');
//    Authentication end here

    Route::post('sendPasswordResetLink', 'ResetPasswordController@sendEmail');
    Route::post('resetPassword', 'ChangePasswordController@process');
    Route::get('allQR', 'QrCodesController@makeAll');
    Route::resource('assets', 'AssetController');
    Route::get('category', 'AssetController@category');
    Route::get('depreciation', 'AssetController@depreciation');
    Route::get('asset_report', 'AssetController@assetReport');
    Route::post('audit', 'AssetController@audit');
    Route::post('search', 'AssetController@search');
    Route::post('history', 'AssetController@history');
    Route::get('allAudits', 'AssetController@allAudits');

//    Depreciation start
    Route::post('categoryDpn', 'AssetController@categoryRevaluation');
    Route::post('additions', 'AssetController@additions');
    Route::post('revaluations', 'AssetController@revaluations');
//    Depreciation end

});
