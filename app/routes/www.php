<?php
/**
 * Created by PhpStorm.
 * User: byecity
 * Date: 14-12-19
 * Time: 下午5:56
 */
//Route::controller('/','WIndexController');
//Route::any('/SignIn','WCommonController@signIn');//登陆
//Route::any('/com','WCommonController@signUp');//注册



Route::group(array('before' => 'wAuth'), function () {
    Route::any('/personal','WPersonalController@getIndex');
    //Route::controller('/personal','WPersonalController');
    Route::controller('/company','WCompanyController');

});
//Route::controller('/','WIndexController');