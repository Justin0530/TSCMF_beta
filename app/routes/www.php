<?php
/**
 * Created by PhpStorm.
 * User: byecity
 * Date: 14-12-19
 * Time: 下午5:56
 */
Route::controller('/','WIndexController');
Route::any('/SignIn','CommonController@signIn');
Route::any('/SignIn','CommonController@signUp');
Route::group(array('before' => 'auth'), function () {
//    Route::get('/','HomeController@getIndex');
//    Route::any('/permission/getPermission','PermissionController@getPermission');
//    Route::controller('/home', 'HomeController');
//    CrudController::initRouter([
//        User::$admin_config,
//        Role::$admin_config,
//        Province::$admin_config,
//        City::$admin_config,
//        Area::$admin_config,
//        Permission::getConfig(),
//    ]);


});