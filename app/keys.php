<?php
/**
 * Created by PhpStorm.
 * User: Ming
 * Date: 2014/10/31
 * Time: 16:19
 */

const APP_PUBLIC_PATH = '/app';
const APP_SYSTEM_URL = '/app';

const WWW_PUBLIC_PATH = '/www';
const WWW_PUBLIC_URL  = '/www';

const CENTER_PUBLIC_PATH = '/center';
const CENTER_PUBLIC_URL = '/center';

const GRADE_TYPE_ALL     = '1';//全部权限
const GRADE_TYPE_PART    = '2';//部分权限

const MENU_STATUS_ENABLE  = '1'; //菜单项启用
const MENU_STATUS_DISABLE = '0'; //菜单项禁用


const MENU_GRADE_FIRST      = '1';//菜单级别 一级
const MENU_GRADE_SECOND     = '2';//菜单级别 二级
const MENU_GRADE_THIRD      = '3';//菜单级别 三级

const FORM_TYPE_ATTRIBUTE_LIST = '1';  //只在列表项里显示

const API_STATUS_CODE_100000 = 100000; //验证通过
const API_STATUS_CODE_100001 = 100001; //验证未通过

//用户类型
const MEMBER_TYPE_PERSONAL = 1; //前台用户类型 个人
const MEMBER_TYPE_COMPANY = 2;  //前台用户类型 企业

//用户状态
const MEMBER_STATUS_ZERO = 0; //未激活
const MEMBER_STATUS_ONE = 1;  //正常
const MEMBER_STATUS_TWO = 2;  //禁言
const MEMBER_STATUS_THREE = 3; //禁止访问
const MEMBER_STATUS_FOUR = 4;  //删除