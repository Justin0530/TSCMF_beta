<div id="sidebar"><a href="/" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
<?php
  $icon = array(
          'icon icon-home',
          'icon icon-signal',
          'icon icon-fire',
          'icon icon-th',
          'icon icon-inbox',
          'icon icon-fullscreen',
          'icon icon-th-list',
          'icon icon-pencil',
          'icon icon-user-md',
          'icon icon-tint',
          'icon icon-file',
          'icon icon-info-sign',
  );

?>
  <ul>
      @foreach($menu as $key => $val)
          @if(isset($val['sub_menu'])&&count($val['sub_menu']))
          <li class="submenu @if($currentURL->parent_id==$val['id']) active open @endif">
              <a href="@if($val['action_url']){{URL::action($val['action_url'])}}@else{{"javascrit:void(0);"}}@endif">
                  <i class="{{$icon[$key]}}"></i>
                  <span>{{$val['display_name']}}</span>
                  <span class="label label-important">{{count($val['sub_menu'])}}</span>
              </a>
              @if(is_array($val['sub_menu'])&&count($val['sub_menu']))
                  <ul>
                      @foreach($val['sub_menu'] as $k => $v)
                        <li class="@if($v['id']==$currentURL->id) active @endif"><a href="{{URL::action($v['action_url'])}}">{{$v['display_name']}}</a></li>
                      @endforeach
                  </ul>
              @endif
          </li>
          @else
            <li class="@if($val['id']==$currentURL->id) active @endif"><a href="{{URL::action($val['action_url'])}}"><i class="{{$icon[$key]}}"></i><span>{{$val['display_name']}}</span></a></li>
          @endif
      @endforeach
  </ul>
</div>