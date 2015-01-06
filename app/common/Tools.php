<?php
/**
 * Created by PhpStorm.
 * User: justin
 * Date: 15/1/5
 * Time: 23:53
 */

class Tools{

    public static function mSort($menuList)
    {
        $first = $second = $third = array();
        $permissionList = [];
        if(is_array($menuList)&&count($menuList))
        {
            foreach($menuList as $key => $val)
            {
                if($val['menu_grade'] == MENU_GRADE_FIRST) array_push($first,$val);
                if($val['menu_grade'] == MENU_GRADE_SECOND) array_push($second,$val);
                if($val['menu_grade'] == MENU_GRADE_THIRD) array_push($third,$val);
            }

            foreach($second as $key => $val)
            {
                $tmp = array();
                foreach($third as $k => $v)
                {
                    if($v['parent_id']==$val['id']) array_push($tmp,$v);
                }
                $second[$key]['sub_menu'] = $tmp;
                unset($tmp);
            }

            foreach($first as $key => $val)
            {
                $tmp = array();
                array_push($permissionList,$val);
                foreach($second as $k => $v)
                {
                    $v['display_name'] = '--'.$v['display_name'];
                    array_push($permissionList,$v);
                }
                unset($tmp);
            }
            Session::set('menu',$first);
        }

        return $permissionList;
    }
}