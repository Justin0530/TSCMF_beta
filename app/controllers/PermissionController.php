<?php
/**
 * Created by PhpStorm.
 * User: Ming
 * Date: 2014/10/31
 * Time: 16:34
 */

class PermissionController extends CrudController {

    protected $Model = 'Permission';



    public function login()
    {
        return 'hello';
    }

    public function getPermission()
    {
        $param = Input::get('param','');
        if(!$param) return Response::json([]);
        $subPermissionList = Permission::where('grade_id','=',$param)->lists('display_name','id');
        return Response::json($subPermissionList);
    }

}