define(["jquery", "easy-admin"], function ($, ea) {

    var init = {
        table_elem: '#currentTable',
        table_render_id: 'currentTableRenderId',
        index_url: 'system.admin/index',
        add_url: 'system.admin/add',
        edit_url: 'system.admin/edit',
        delete_url: 'system.admin/delete',
        export_url: 'system.admin/export',
        modify_url: 'system.admin/modify',
    };

    return Controller = {
        index: function () {
            ea.table.render({
                init: init,
                url : '/admin/system.admin/index?filter=' + JSON.stringify(queryParams),
                cols: [[
                    {type: 'checkbox'},
                    {field: 'id', title: 'id'},
                    {field: 'auth_ids', title: '角色权限ID'},
                    {field: 'head_img', title: '头像'},
                    {field: 'username', title: '用户登录名'},
                    {field: 'password', title: '用户登录密码'},
                    {field: 'phone', title: '联系手机号'},
                    {field: 'remark', title: '备注说明', templet: ea.table.text},
                    {field: 'login_num', title: '登录次数'},
                    {field: 'sort', title: '排序', edit: 'text'},
                    {field: 'status', title: '状态(0:禁用,1:启用,)'},
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
