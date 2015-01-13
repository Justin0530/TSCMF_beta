<?php
/**
 * Created by PhpStorm.
 * User: byecity
 * Date: 14-12-19
 * Time: 下午5:54
 */
class WCommonController extends Controller
{
    /**
     * @todo 用户登陆
     * @author Justin Wong
     * @return mixed
     */
    public function signIn()
    {
        return View::make('WIndex.index');
    }

    /**
     * @todo 用户注册
     * @author Justin Wong
     * @return mixed
     */
    public function signUp()
    {
        return 'sign up';
    }
}