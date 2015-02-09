<?php
/**
 * Created by PhpStorm.
 * User: justin
 * Date: 15/1/23
 * Time: 20:53
 */

/**
 * Class WAuth
 * @todo 用户验证
 */
class WMemberLogic {

    public static function register($registerInfo=[])
    {
        $data = [];
        $username = $registerInfo['username'];
        $isExist = WMember::where('email','=',$username)->first();
        if($isExist)
        {
            $data['result'] = 'exist';
        }
        else
        {
            if($registerInfo['password']==$registerInfo['passwords'])
            {
                $registerInfo['email'] = $registerInfo['username'];
                $registerInfo['password'] = Hash::make($registerInfo['password']);
                $registerInfo['status'] = MEMBER_STATUS_ONE; //跳过了邮箱验证
                $member = WMember::create($registerInfo);
                $data['type'] = $member->type;
                if($member &&$registerInfo['status'] = MEMBER_STATUS_ONE)
                {
                    WAuth::memberAuth($member->email,$member->password);
                    $data['result'] = 'success';
                }
                else if($member)
                {
                    $data['result'] = 'confirm';
                }
            }
            else
            {
                $data['result'] = 'exist';
            }
        }
        return $data;
    }

}