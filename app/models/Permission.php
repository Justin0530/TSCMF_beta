<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 2014/12/16
 * Time: 16:00
 */

use Zizaco\Entrust\EntrustPermission;

class Permission extends EntrustPermission {

    public static $admin_config = [
        'title'             => '权限管理',
        'description'       => '维护系统权限列表',
        'router'            => 'permission',
        'router_controller' => 'PermissionController',
        'items'             => [
            'id' => [
                'title'     => '序号',
                'type'      => 'int',
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
            'action_url'  => [
                'title'     => '请求地址',
                'type'      => 'string',
                'validator' => 'required'
            ],
            'action_param'  => [
                'title'     => '请求参数',
                'type'      => 'string',
                'validator' => 'required'
            ],
            'parent_id'      => [
                'title' => '父级权限',
                'type'  => 'select',
                'select-items' => '',
            ],
            'grade_id'      => [
                'title' => '权限级别',
                'type'  => 'select',
                'select-items' => [
                    '1'  => '一级',
                    '2'  => '二级',
                    '3'  => '三级',
                ]
            ],
            'remark'    => [
                'title'     => '角色备注',
                'type'      => 'text',
                'validator' => 'required'
            ],

        ],
    ];
}