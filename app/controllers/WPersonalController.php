<?php
/**
 * Created by PhpStorm.
 * User: Justin Wang
 * Date: 14-12-19
 * Time: 下午5:54
 */
class WPersonalController extends WBaseController
{
    public function getIndex()
    {
        echo 'hello world,Personal';
        echo '<br />';
        //$member = $_SESSION['member']; //Session::get('member');
        var_dump(Session::get('t'));
        var_dump(Session::all());
        exit();
    }
}