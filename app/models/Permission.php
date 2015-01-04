<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 2014/12/16
 * Time: 16:00
 */

use Zizaco\Entrust\EntrustPermission;

class Permission extends EntrustPermission {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'permissions';

    /**
     * @todo 获取模块配置项
     *
     * @author Justin.W
     * @since $id
     * @return array  配置项
     */
    public static function getConfig()
    {
        return $admin_config = [
            'title'             => '权限管理',
            'description'       => '维护系统权限列表',
            'router'            => '/permission',
            'router_controller' => 'PermissionController',
            'items'             => [
                'id' => [
                    'title'     => '序号',
                    'type'      => 'int',
                    'hidden'    => true,
                    'attr'      => 'onlyShow',
                ],
                'name' => [
                    'title'     => '权限标识',
                    'type'      => 'string',
                    'validator' => 'required'
                ],
                'display_name'  => [
                    'title'     => '权限名称',
                    'type'      => 'string',
                    'validator' => 'required'
                ],
                'action_url'    => [
                    'title'     => '请求地址',
                    'type'      => 'string',
                    //'validator' => 'required'
                ],
                'action_param'  => [
                    'title'     => '请求参数',
                    'type'      => 'string',
                    //'validator' => 'required'
                ],
                /*'grade_id'         => [
                    'title'        => '权限级别',
                    'type'         => 'select',
                    'ajaxFunc'     => 'getPermission',
                    'ajaxURL'      => URL::action("PermissionController@getPermission"),
                    'controlled'   => 'parent_id',
                    'select-items' => [
                        '1'  => '一级',
                        '2'  => '二级',
                        '3'  => '三级',
                    ]
                ],*/
                'parent_id'        => [
                    'title'        => '父级权限',
                    'type'         => 'select',
                    'func'         => 'Permission::getSubPermission',
                    'showFunc'     => 'Permission::getParentName',
                ],
                'grade_id'         => [
                    'title'        => '级别',
                    'type'         => 'int',
                    'hidden'       => true,
                    'isFunc'       => 'Permission::getCurrentGrade',//执行指定方法
                    'isFuncParam'  => 'grade_id',//isFunc所执行的方法所需的参数
                    'attr'         => 'onlyShow',
                ],
                'remark'           => [
                    'title'        => '权限备注',
                    'type'         => 'text',
                    //'validator'    => 'required'
                ],

            ],
        ];
    }

    public static function getSubPermission($grade_id='')
    {

        return self::lists('display_name','id');
    }

    public function getInitConfig()
    {
        return self::getConfig();
    }

    /**
     * @todo 获取当前权限级别
     *
     * @author Justin.W
     * @param string $partentID
     * @return mixed|string
     */
    public static function getCurrentGrade($partentID='')
    {
        if(!$partentID) return '1';
        $permissionObj = self::find($partentID);
        if($partentID)
        {
            return $permissionObj->grade_id + 1;
        }
        else
        {
            return '0';
        }
    }

    /**
     * @todo 获取父级权限名称
     *
     * @author Justin.W
     * @since $id
     * @param string $parentID
     * @return string
     */
    public static function getParentName($parentID='')
    {
        if(!$parentID) return '';
        $permissionObj = Self::find($parentID);
        if($permissionObj)
        {
            echo $parentID.'==='.$permissionObj->display_name.'<br />';exit();
            return $permissionObj->display_name;
        }
        else
        {
            return '';
        }
    }
}