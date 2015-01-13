<?php

class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

    function __construct()
    {
        if (Auth::check())
        {
            /*$permissionKey = 'PermissionList_'.Session::getId();
            Cache::forget($permissionKey);
            if(!Cache::has($permissionKey))
            {
                $permissionList = Permission::where('grade_id','<','3')->get()->toArray();
                $permissionList = $this->menuSort($permissionList);
                Cache::add($permissionKey,$permissionList,Config::get('cache.cache_time'));
            }

            View::share('menu',Cache::get($permissionKey));
            $currentURL = Route::currentRouteAction();
            if($currentURL)
            {
                $currentMenuInfo = Permission::where('action_url','=',$currentURL)->first();
                if(!is_object($currentMenuInfo))
                {
                    $currentMenuInfo = new stdClass();
                    $currentMenuInfo->id = $currentMenuInfo->parent_id = 0;
                }
                View::share('currentURL',$currentMenuInfo);
            }

            return Redirect::action('HomeController@getIndex');*/
        }
        else
        {
            return Redirect::action('WIndexController@getIndex');
        }
    }

    public function common()
    {
        $menuList = array();
        try{
            $userId = Auth::user()->id;
        }
        catch (Exception $e)
        {
            return Redirect::to('login');
        }
        //grade()->get()->toArray();
        $gradeId = Auth::user()->grade_id;

        if(!$gradeId) return $menuList;

        $grade = Grade::find($gradeId);

        if(!$grade) return $menuList;
        $gradeType = $grade->range;
        if($grade)
        {
            $gradeType = $grade['range'];
        }
        if($gradeType == GRADE_TYPE_ALL)
        {
            //全部权限
            $menuList = Menu::where('status','=',MENU_STATUS_ENABLE)->get()->toArray();
        }
        else
        {
            //部分权限
            $menuIDList = GradeMenu::where('grade_id','=',$gradeId)->get()->toArray();
            foreach($menuIDList as $key => $val)
            {
                $tmpMenu = Menu::find($val['menu_id']);
                if(isset($tmpMenu) && $tmpMenu->status == MENU_STATUS_ENABLE)
                {
                    array_push($menuList,$tmpMenu->toArray());
                }

            }
        }

        return $this->menuSort($menuList);
    }

    protected function menuSort($menuList)
    {

        $permissionList = $first = $second = $third = array();
        if(is_array($menuList)&&count($menuList))
        {
            foreach($menuList as $key => $val)
            {
                if($val['grade_id'] == MENU_GRADE_FIRST) array_push($first,$val);
                if($val['grade_id'] == MENU_GRADE_SECOND) array_push($second,$val);
                if($val['grade_id'] == MENU_GRADE_THIRD) array_push($third,$val);
            }
//            Session::set('first',$first);
//            Session::set('second',$second);
//            Session::set('third',$third);


            foreach($first as $key => $val)
            {
                $tmp = [];
                foreach($second as $k => $v)
                {
                    if($v['parent_id']==$val['id'])
                    {
                        array_push($tmp,$v);
                    }
                }
                $val['sub_menu'] = $tmp;
                array_push($permissionList,$val);
                unset($tmp);
            }
        }
        return $permissionList;

    }

    public function missingMethod($parameters = array())
    {
        print_r($parameters);
        echo 'asdf';
        exit;
    }

}
