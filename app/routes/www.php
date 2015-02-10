<?php
/**
 * Created by PhpStorm.
 * User: byecity
 * Date: 14-12-19
 * Time: 下午5:56
 */

Route::any('common','WCommonController@signUp');//公用包
//Route::any('logout','WIndexController');
Route::group(array('before' => 'wAuth'), function () {
    Route::any('/dispatch', 'WIndexController@dispatch');
    Route::controller('personal','WPersonalController');
    Route::controller('company','WCompanyController');

});
Route::controller('/','WIndexController');