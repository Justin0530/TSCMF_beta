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
                    'validator' => 'required'
                ],
                'action_param'  => [
                    'title'     => '请求参数',
                    'type'      => 'string',
                    'validator' => 'required'
                ],
                'grade_id'         => [
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
                ],
                'parent_id'        => [
                    'title'        => '父级权限',
                    'type'         => 'select',
                    'param'        => 'grade_id',
                    'func'         => 'Permission::getSubPermission',

                ],
                'remark'           => [
                    'title'        => '权限备注',
                    'type'         => 'text',
                    'validator'    => 'required'
                ],

            ],
        ];
    }

    public static function getSubPermission($grade_id='1')
    {
        return self::where('grade_id','=',$grade_id)->lists('id','display_name');
    }

    public function getInitConfig()
    {
        return self::getConfig();
    }
}