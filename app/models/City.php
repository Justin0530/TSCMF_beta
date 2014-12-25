<?php

class City extends Eloquent
{
    protected $fillable = [];
    protected $table = 'city';


    public static $admin_config = [
        'title'             => '城市',
        'description'       => '城市',
        'router'            => '/city',
        'next_router'       => '/area',
        'router_controller' => 'CityController',
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