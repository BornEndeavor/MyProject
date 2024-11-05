@include('admin.layout.head')
<link rel="stylesheet" href="/static/admin/css/welcome.css?v={{$version}}" media="all">
<div class="layui-layout layui-padding-2">
    <div class="layui-layout-admin">
        <div class="layui-row layui-col-space10">
            <div class="layui-col-md8 ">

                <div class="layui-card">
                    <div class="layui-card-header"><i class="fa fa-fire icon"></i>版本信息</div>
                    <div class="layui-card-body layui-text">
                        <table class="layui-table">
                            <colgroup>
                                <col width="150">
                                <col>
                            </colgroup>
                            <tbody>
                            <tr>
                                <td>项目名称</td>
                                <td>
                                    <button type="button" class="layui-btn layui-btn-xs layui-btn-primary">MyAdmin管理后台</button>
                                </td>
                            </tr>
                            <tr>
                                <td>分支版本</td>
                                <td>
                                    <button type="button" class="layui-btn layui-btn-xs layui-btn-primary">{{$versions['branch']??"main"}}</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Laravel版本</td>
                                <td>
                                    <button type="button" class="layui-btn layui-btn-xs layui-btn-primary">{{$versions['laravelVersion']??''}}</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Config配置缓存</td>
                                <td>
                                    <button type="button" class="layui-btn layui-btn-xs layui-btn-primary">{{$versions['configIsCached']?'已开启':'未开启'}}</button>
                                </td>
                            </tr>
                            <tr>
                                <td>PHP版本</td>
                                <td>
                                    <button type="button" class="layui-btn layui-btn-xs layui-btn-primary">{{$versions['phpVersion']??''}}</button>
                                </td>
                            </tr>
                            <tr>
                                <td>MySQL版本</td>
                                <td>
                                    <button type="button" class="layui-btn layui-btn-xs layui-btn-primary">{{$versions['mysqlVersion']??''}}</button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>



            </div>
        </div>
    </div>
</div>
@include('admin.layout.foot')
