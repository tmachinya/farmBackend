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
    Route::resource('assets', 'AssetController');
    Route::resource('supplier', 'SupplierController');
    Route::resource('equipment', 'EquipmentController');
    Route::resource('crop', 'CropController');
    Route::resource('process', 'ProcessController');
    Route::resource('input', 'InputController');
    Route::resource('field', 'FieldController');
    Route::resource('activity', 'ActivityController');

});
