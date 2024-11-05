@include('admin.layout.head')
<link rel="stylesheet" href="/static/plugs/lay-module/layuimini/layuimini.css?v={{$version}}" media="all">
<link rel="stylesheet" href="/static/plugs/lay-module/layuimini/themes/default.css?v={{$version}}" media="all">
<style id="layuimini-bg-color"></style>
<div class="layui-layout-body layuimini-all">
    <div class="layui-layout layui-layout-admin">

        <div class="layui-header header">
            <div class="layui-logo layuimini-logo"></div>

            <div class="layuimini-header-content">
                <a>
                    <div class="layuimini-tool"><i title="Expan" class="fa fa-outdent" data-side-fold="1"></i></div>
                </a>


                <ul class="layui-nav layui-layout-left layuimini-header-menu layuimini-menu-header-pc layuimini-pc-show">
                </ul>

                <ul class="layui-nav layui-layout-left layuimini-header-menu layuimini-mobile-show">
                    <li class="layui-nav-item">
                        <a href="javascript:;"><i class="fa fa-list-ul"></i> Select Module</a>
                        <dl class="layui-nav-child layuimini-menu-header-mobile">
                        </dl>
                    </li>
                </ul>

                <ul class="layui-nav layui-layout-right">
                    <!--                    <li class="layui-nav-item" lay-unselect>-->
                    <!--                        <div class="layui-form ws-header-theme" lay-filter="header-theme">-->
                    <!--                            <input type="checkbox" name="theme-mode" id="ID-header-theme-mode" lay-filter="header-theme-mode" lay-skin="switch">-->
                    <!--                            <div lay-checkbox>-->
                    <!--                                <i class="layui-icon layui-icon-moon"></i> |-->
                    <!--                                <i class="layui-icon layui-icon-light"></i>-->
                    <!--                            </div>-->
                    <!--                        </div>-->
                    <!--                    </li>-->
                    <li class="layui-nav-item" lay-unselect>
                        <a href="javascript:;" data-refresh="Refresh"><i class="fa fa-refresh"></i></a>
                    </li>
                    <li class="layui-nav-item" lay-unselect>
                        <a href="javascript:;" data-clear="Clear" class="layuimini-clear"><i class="fa fa-trash-o"></i></a>
                    </li>
                    <li class="layui-nav-item layuimini-setting">
                        <a href="javascript:;">
                            <img src="{{session('admin.head_img')}}" class="layui-nav-img" width="50" height="50">
                            <cite class="adminName">{{session('admin.username')}}</cite>
                            <span class="layui-nav-more"></span>
                        </a>
                        <dl class="layui-nav-child">
                            <dd>
                                <a href="javascript:;" layuimini-content-href="{{__url('index/editAdmin')}}" data-title="基本资料" data-icon="fa fa-gears">Basic Info<span class="layui-badge-dot"></span></a>
                            </dd>
                            <dd>
                                <a href="javascript:;" layuimini-content-href="{{__url('index/editPassword')}}" data-title="修改密码" data-icon="fa fa-gears">Modify Password</a>
                            </dd>
                            <dd>
                                <hr>
                            </dd>
                            <dd>
                                <a href="javascript:;" class="login-out">Logout</a>
                            </dd>
                        </dl>
                    </li>
                    <li class="layui-nav-item layuimini-select-bgcolor" lay-unselect>
                        <a href="javascript:;" data-bgcolor="配色方案"><i class="fa fa-ellipsis-v"></i></a>
                    </li>
                </ul>
            </div>
        </div>

        <!--无限极左侧菜单-->
        <div class="layui-side layui-bg-black layuimini-menu-left">
        </div>

        <!--初始化加载层-->
        <div class="layuimini-loader">
            <div class="layuimini-loader-inner"></div>
        </div>

        <!--手机端遮罩层-->
        <div class="layuimini-make"></div>

        <!-- 移动导航 -->
        <div class="layuimini-site-mobile"><i class="layui-icon"></i></div>

        <div class="layui-body">
            <div class="layuimini-tab layui-tab-rollTool layui-tab" lay-filter="layuiminiTab" lay-allowclose="true">
                <ul class="layui-tab-title">
                    <li class="layui-this" id="layuiminiHomeTabId" lay-id=""></li>
                </ul>
                <div class="layui-tab-control">
                    <li class="layuimini-tab-roll-left layui-icon layui-icon-left"></li>
                    <li class="layuimini-tab-roll-right layui-icon layui-icon-right"></li>
                    <li class="layui-tab-tool layui-icon layui-icon-down">
                        <ul class="layui-nav close-box">
                            <li class="layui-nav-item">
                                <a href="javascript:;"><span class="layui-nav-more"></span></a>
                                <dl class="layui-nav-child">
                                    <dd><a href="javascript:;" layuimini-tab-close="current">关 闭 当 前</a></dd>
                                    <dd><a href="javascript:;" layuimini-tab-close="other">关 闭 其 他</a></dd>
                                    <dd><a href="javascript:;" layuimini-tab-close="all">关 闭 全 部</a></dd>
                                </dl>
                            </li>
                        </ul>
                    </li>
                </div>
                <div class="layui-tab-content">
                    <div id="layuiminiHomeTabIframe" class="layui-tab-item layui-show"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('admin.layout.foot')
