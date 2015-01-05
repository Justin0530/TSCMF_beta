<?php
/**
 * Created by PhpStorm.
 * User: justin
 * Date: 15/1/5
 * Time: 23:53
 */

namespace \Until\Tools;


class Tools{

    public static function mSort($menuList)
    {
        $first = $second = $third = array();
        if(is_array($menuList)&&count($menuList))
        {
            foreach($menuList as $key => $val)
            {
                if($val['menu_grade'] == MENU_GRADE_FIRST) array_push($first,$val);
                if($val['menu_grade'] == MENU_GRADE_SECOND) array_push($second,$val);
                if($val['menu_grade'] == MENU_GRADE_THIRD) array_push($third,$val);
            }
            Session::set('first',$first);
            Session::set('second',$second);
            Session::set('third',$third);

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
                foreach($second as $k => $v)
                {
                    if($v['parent_id']==$val['id']) array_push($tmp,$v);
                }
                $first[$key]['sub_menu'] = $tmp;
                unset($tmp);
            }
            Session::set('menu',$first);
        }

        return $first;
    }
}