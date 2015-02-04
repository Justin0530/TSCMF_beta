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

    /**
     * @todo 处理登陆请求
     *
     * @author Justin Wang
     * @since $id
     * @return mixed
     */
    public function getLogintt()
    {
        $member = WAuth::memberAuth(Input::get('username'),Input::get('password'));
        $data = [];
        var_dump($member);
        if($member)
        {
            $data['status'] = API_STATUS_CODE_100000;
            //Session::set('t','dd');echo 'here';
            var_dump(get_class_vars($member));
            var_dump($member->toArray());
            Session::set('member',$member->toArray());
            //$_SESSION['member'] = $member;
            //var_dump(Session::get('member'));
            if($member->type == MEMBER_TYPE_PERSONAL) $data['redirect'] = URL::action('WPersonalController@getIndex');
            if($member->type == MEMBER_TYPE_COMPANY) $data['redirect'] = URL::action('WCompanyController@getIndex');
        }
        else
        {
            $data['status'] = API_STATUS_CODE_100001;
            $data['msg'] = '用户名或密码错误';
        }
        echo json_encode($data);
        exit();
    }
}