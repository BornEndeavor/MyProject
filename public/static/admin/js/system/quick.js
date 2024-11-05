define(["jquery", "easy-admin"], function ($, ea) {

    var init = {
        table_elem: '#currentTable',
        table_render_id: 'currentTableRenderId',
        index_url: 'system.quick/index',
        add_url: 'system.quick/add',
        edit_url: 'system.quick/edit',
        delete_url: 'system.quick/delete',
        export_url: 'system.quick/export',
        modify_url: 'system.quick/modify',
    };

    return Controller = {

        index: function () {
            ea.table.render({
                init: init,
                cols: [[
                    {type: 'checkbox'},                    {field: 'id', title: 'id'},                    {field: 'title', title: '快捷入口名称'},                    {field: 'icon', title: '图标', templet: ea.table.image},                    {field: 'href', title: '快捷链接'},                    {field: 'sort', title: '排序', edit: 'text'},                    {field: 'status', title: '状态(1:禁用,2:启用)'},                    {field: 'remark', title: '备注说明', templet: ea.table.text},                    {field: 'create_time', title: '创建时间'},                    {width: 250, title: '操作', templet: ea.table.tool},
                ]],
            });

            ea.listen();
        },
        add: function () {
            ea.listen();
        },
        edit: function () {
            ea.listen();
        },
    };

});
