<?php

class WMember extends Eloquent
{
    protected $fillable = [];
    protected $table = 'member';


    public static $admin_config = [
        'title'             => '用户管理',
        'description'       => '用户管理',
        'router'            => '/member',
        'router_controller' => 'MemberController',
        'items'             => [
            'id'           => [
                'title'    => '编号',
                'type'     => 'string',
                'validator'=> '',
                'attr'      => 'onlyShow',
            ],
            'city_name'     => [
                'title'     => '城市',
                'type'      => 'string',
                'validator' => 'required',
                'attribute' => '',
            ],
        ],
    ];



}