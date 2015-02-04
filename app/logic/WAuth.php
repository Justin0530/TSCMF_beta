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
class WAuth {

    /**
     * @todo 前端用户验证
     *
     * @author Justin Wang
     * @since $id
     * @param string $email    用户邮箱
     * @param string $password 用户密码
     * @return mixed
     */
    public static function memberAuth($email,$password)
    {
        if(empty($email)||empty($password)) return FALSE;
        $member = WMember::where('email','like',$email)->first();
        if($member && Hash::check($password,$member->password))
        {
            return $member;
        }
        else
        {
            return FALSE;
        }
    }

}