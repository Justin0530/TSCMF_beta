@extends('layout.default')

@section('content')
<!--breadcrumbs-->
<div id="content-header">
<div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
</div>
<!--End-breadcrumbs-->
<!-- PAGE CONTENT BEGINS -->
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
                    <h5>{{$config['title']}} - <a href="{{$config['router']}}/create?{{Request::getQueryString()}}">创建</a></h5>
                </div>
                <div class="widget-content nopadding">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                @foreach($config['items'] as $key=>$item)
                                @if(!isset($item['hidden'])||(isset($item['attr'])&&$item['attr']=='onlyShow')||$item['hidden']!==true)
                                <th>{{$item['title']}}</th>
                                @endif
                                @endforeach
                                <th width="120">查看/编辑/删除</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $value)
                        <tr>
                            @foreach($config['items'] as $key => $item)
                                @if(!isset($item['hidden'])||(isset($item['attr'])&&$item['attr']=='onlyShow')||$item['hidden']!==true)
                                    @if($item['type']=='image')
                                    <td>
                                        @if($value[$key])
                                        <img src="{{$value[$key]}}" width="40" alt="image"/>
                                        @endif
                                    </td>
                                    @elseif($item['type']=='select')
                                        <?php  $param = $value[$key];?>
                                        @if(isset($item['select-items'])&&count($item['select-items'])>0)
                                            <?php $selectItems = $item['select-items'];?>
                                        @else
                                            <?php
                                            $item['select-items'] = call_user_func($item['func']);
                                            ?>
                                        @endif
                                        <td>{{array_key_exists($param,$item['select-items'])?$item['select-items'][$param]:''}}</td>
                                    @elseif(isset($item['showFunc'])&&$item['showFunc'])
                                        {{$item['showFunc'].'==='.$value[$key]}}
                                        {{call_user_func($item['showFunc'],$value[$key])}}
                                    @else
                                    <td>{{$value[$key]}}</td>
                                    @endif
                                @endif
                            @endforeach
                            <td>
                                <a class="btn btn-mini btn-success"
                                   href="{{ URL::to($config['router'].'/'. $value->id) }}?{{Request::getQueryString()}}">
                                    查看
                                </a>
                                <a class="btn btn-mini btn-info"
                                   href="{{ URL::to($config['router'].'/' . $value->id . '/edit') }}?{{Request::getQueryString()}}">
                                    编辑
                                </a>
                                {{ Form::open(array('url' => $config['router'].'/' . $value->id.'?'.Request::getQueryString(), 'class' =>
                                'pull-right')) }}
                                {{ Form::hidden('_method', 'DELETE') }}
                                {{ Form::submit('删除', array('class' => 'btn btn-mini btn-warning')) }}
                                {{ Form::close() }}
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <!-- /widget-body -->
                </div>


            </div>

        </div>
        <div class="pagination">
            {{$data->links()}}
        </div>
    </div>
</div>
@stop



