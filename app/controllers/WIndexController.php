<?php
/**
 * Created by PhpStorm.
 * User: Justin Wong
 * Date: 14-12-19
 * Time: 下午5:54
 */
class WIndexController extends Controller
{
    /**
     * @todo 前端初始化页面
     *
     * @author Justin Wong
     * @since $id
     * @return mixed
     */
    public function getIndex()
    {
        return View::make('WIndex.index');
    }

    /**
     * @todo 初始化用户登陆界面
     *
     * @author Justin Wong
     * @since $id
     * @return mixed
     */
    public function getLogin()
    {
        return View::make('WIndex.login');
    }
}