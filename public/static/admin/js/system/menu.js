define(["jquery", "easy-admin"], function ($, ea) {

    var init = {
        table_elem: '#currentTable',
        table_render_id: 'currentTableRenderId',
        index_url: 'system.menu/index',
        add_url: 'system.menu/add',
        edit_url: 'system.menu/edit',
        delete_url: 'system.menu/delete',
        export_url: 'system.menu/export',
        modify_url: 'system.menu/modify',
    };

    return Controller = {

        index: function () {
            ea.table.render({
                init: init,
                url : '/admin/system.menu/index?filter=' + JSON.stringify(queryParams),
                cols: [[
                    {type: 'checkbox'},
                    {field: 'id', title: 'id'},
                    {field: 'pid', title: '父id'},
                    {field: 'title', title: '名称'},
                    {field: 'icon', title: '菜单图标', templet: ea.table.image},
                    {field: 'href', title: '链接'},
                    {field: 'params', title: '链接参数'},
                    {field: 'target', title: '链接打开方式'},
                    {field: 'sort', title: '菜单排序', edit: 'text'},
                    {field: 'status', title: '状态(0:禁用,1:启用)'},
                    {field: 'remark', title: 'remark', templet: ea.table.text},
                    {field: 'create_time', title: '创建时间'},
                    {width: 250, title: '操作', templet: ea.table.tool},

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
