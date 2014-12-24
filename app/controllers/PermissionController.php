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
        return ['dd'];
    }

}