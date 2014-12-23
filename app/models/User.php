<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Zizaco\Entrust\HasRole;

class User extends Eloquent implements UserInterface, RemindableInterface
{

	use UserTrait, RemindableTrait,HasRole;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');


	public static $admin_config = [
		'title'             => '用户管理',
		'description'       => '',
		'router'            => '/user',
		'router_controller' => 'UserController',
		'template_index'    => 'crud.index',
		'items'             => [
			'id' => [
				'title'     => '序号',
				'type'      => 'hidden',
				'attr'      => 'onlyShow',
			],
			'username' => [
				'title'     => '用户名',
				'type'      => 'text',
				'validator' => 'required'
			],
			'email'    => [
				'title'     => 'Email',
				'type'      => 'text',
				'validator' => 'required|email'
			],
            'mobile'    => [
                'title'     => '联系电话',
                'type'      => 'text',
                'validator' => 'required|Integer'
            ],
			'password' => [
				'title'  => '密码',
				'type'   => 'password',
				'hidden' => true,
			],
			'avatar'   => [
				'title' => '头像',
				'type'  => 'image',
			],
			'type'      => [
				'title' => '用户类型',
				'type'  => 'select',
				'select-items' => [
					'1'  => '管理员',
					'2'  => '网站用户'
				]
			],
			'status'      => [
				'title' => '用户状态',
				'type'  => 'select',
				'select-items' => [
					'1'  => '正常',
					'2'  => '禁言',
					'3'  => '禁止访问',
					'4'  => '已删除',
				]
			],
		],
	];

}
