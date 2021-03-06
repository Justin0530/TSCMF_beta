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
        if(Session::has('member'))
        {
            $member = (object)Session::get('member');
            if($member->type == MEMBER_TYPE_PERSONAL)
            {
                return Redirect::action('WPersonalController@getIndex');
            }
            elseif($member->type == MEMBER_TYPE_COMPANY)
            {
                return Redirect::action('WCompanyController@getIndex');
            }
            else
            {
                return Redirect::action('WIndexController@getIndex');
            }
        }
        else
        {
            return View::make('WIndex.login');
        }
    }

    /**
     * @todo 处理登陆请求
     *
     * @author Justin Wang
     * @since $id
     * @return mixed
     */
    public function postLogin()
    {
        $member = WAuth::memberAuth(Input::get('username'),Input::get('password'));
        $data = [];
        if($member)
        {
            $data['status'] = API_STATUS_CODE_100000;
            Session::set('member',$member->toArray());
            if($member->type == MEMBER_TYPE_PERSONAL) $data['redirect'] = URL::action('WPersonalController@getIndex');
            if($member->type == MEMBER_TYPE_COMPANY) $data['redirect'] = URL::action('WCompanyController@getIndex');
        }
        else
        {
            $data['status'] = API_STATUS_CODE_100001;
            $data['msg'] = '用户名或密码错误';
        }

        return Response::json($data);
    }

    /**
     * @todo 用户注册信息处理
     *
     * @author Justin.W
     * @since $id
     * @return mixed
     *
     */
    public function postRegister()
    {
        $registerInfo = Input::all();
        $result = WMemberLogic::register($registerInfo);
        return Response::json($result);
    }


    /**
     * @todo 前端用户退出登录
     *
     * @author Justin.W
     * @since $id
     * @return mixed
     *
     */
    public function getLogout()
    {
        Session::flush();
        return Redirect::action('WIndexController@getIndex');
    }

    /**
     * @todo 根据用户类型分发请求
     *
     * @author Justin.W
     * @since $id
     * @return mixed
     *
     */
    public function dispatch()
    {
        if(Session::has('member'))
        {
            $member = (Object)Session::get('member');
            if(isset($member->type)&&$member->type==MEMBER_TYPE_PERSONAL)
            {
                return Redirect::action('WPersonalController@getIndex');
            }
            else if(isset($member->type)&&$member->type==MEMBER_TYPE_COMPANY)
            {
                return Redirect::action('WCompanyController@getIndex');
            }
            else
            {
                Session::forget('member');
                return Redirect::action('WIndexController@getLogin');
            }
        }
        else
        {
            return Redirect::action('WIndexController@getLogin');
        }
    }
}