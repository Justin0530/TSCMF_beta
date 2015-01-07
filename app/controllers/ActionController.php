<?php
/**
 * Created by PhpStorm.
 * User: Ming
 * Date: 2014/11/14
 * Time: 15:28
 */

class ActionController extends BaseController {

    public function getLogin()
    {
        $password = Hash::make('secret');
        $message = urldecode(Input::get('message',''));

        if (Auth::check()) {
            return Redirect::action('HomeController@getIndex');
        }

        return View::make('Action.login', array(
            'title'     => '登录TSCMF管理平台',
            'message'   => $message,
        ));
    }

    public function getLogout()
    {
        Auth::logout();
        return Redirect::action('ActionController@getLogin');
    }

    public function postLogin()
    {
        if (Auth::attempt(array('username' => Input::get('username'), 'password' => Input::get('password')), Input::get('remember', 'off') == 'on' ? true : false)) {
            return Redirect::intended(URL::action('HomeController@getIndex'));
        } else {
            $message = "用户名或密码错误，请重试";
            return Redirect::to(URL::action('ActionController@getLogin').'?message='.urlencode($message));
        }
    }

} 