<?php
/**
 * Created by PhpStorm.
 * User: byecity
 * Date: 14-12-19
 * Time: 下午5:56
 */
//Route::controller('/','WIndexController');
Route::any('/SignIn','WCommonController@signIn');//登陆
Route::any('/SignUp','WCommonController@signUp');//注册
Route::controller('/personal','WPersonalController');
Route::controller('/company','WCompanyController');
Route::controller('/','WIndexController');

Route::group(array('before' => 'wAuth'), function () {
    //Route::controller('/personal','WPersonalController');
    //Route::controller('/company','WCompanyController');

});