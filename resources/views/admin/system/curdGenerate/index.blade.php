@include('admin.layout.head')
<style>
    .table_fields .input_tag {
        margin-bottom: 5px;
        display: inline-flex;
    }
</style>
<div class="layuimini-container">
    <div class="layuimini-main" id="app">

        <div class="layui-tab layui-tab-brief" lay-filter="docDemoTabBrief">

            <form id="app-form" class="layui-form layuimini-form">

                <div class="layui-form-item">
                    <label class="layui-form-label">SQL语句</label>
                    <div class="layui-input-block">
                        <input type="text" name="command" class="layui-input" lay-verify="required" placeholder="请输入:例如 select * from system_admin" value="">
                    </div>
                </div>

                <div class="hr-line"></div>
                <div class="layui-form-item text-center">
                    <button type="button" class="layui-btn layui-btn-normal layui-btn-sm" lay-filter="search" lay-submit="system.CurdGenerate/save?type=console" data-refresh="false">执行</button>
                </div>

            </form>

        </div>

        <div class="tableShow layui-hide">
            <blockquote class="layui-elem-quote layui-quote-nm">
            </blockquote>
            <div class="layui-card-body">
            </div>
            <div class="layui-btn-container">
                <form class="layui-form layuimini-form">
                </form>
                <div class="file-list layui-elem-quote"></div>
            </div>
            <table id="currentTable" class="layui-table" lay-filter="currentTable"></table>
        </div>


    </div>
</div>
@include('admin.layout.foot')
