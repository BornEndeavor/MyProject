define(["jquery", "easy-admin"], function ($, ea) {


    var init = {
        table_elem: '#currentTable',
        table_render_id: 'currentTableRenderId',
        index_url: 'system.log/index',
        export_url: 'system.log/export',
    };

    return {
        index: function () {
            var util = layui.util;
            ea.table.render({
                init: init,
                url : '/admin/system.log/index?filter=' + JSON.stringify(queryParams),
                lineStyle: 'height: auto;',
                toolbar: ['refresh', 'export',
                ],
                cols: [[
                    {field: 'id', width: 80, title: 'ID', search: false},
                    {field: 'month', width: 80, title: '日志月份', hide: true, search: 'time', timeType: 'month', searchValue: util.toDateString(new Date(), 'yyyy-MM')},
                    {
                        field: 'admin.username', width: 100, title: '后台用户', search: false, templet: function (res) {
                            let admin = res.admin
                            return admin ? admin.username : '-'
                        }
                    },
                    {field: 'method', width: 100, title: '请求方法'},
                    {field: 'title', width: 180, title: '请求标题'},
                    {field: 'ip', width: 150, title: 'IP地址'},
                    {field: 'url', minWidth: 150, title: '路由地址', align: "left"},
                    {
                        field: 'content', minWidth: 200, title: '请求数据', align: "left", templet: function (res) {
                            let html = '<div class="layui-colla-item">' +
                                '<div class="layui-colla-title">点击预览</div>' +
                                '<div class="layui-colla-content">' + prettyFormat(res.content) + '</div>' +
                                '</div>'
                            return '<div class="layui-collapse" lay-accordion>' + html + '</div>'
                        }
                    },
                    {
                        field: 'response', minWidth: 200, title: '回调数据', align: "left", templet: function (res) {
                            let html = '<div class="layui-colla-item">' +
                                '<div class="layui-colla-title">点击预览</div>' +
                                '<div class="layui-colla-content">' + prettyFormat(res.response) + '</div>' +
                                '</div>'
                            return '<div class="layui-collapse" lay-accordion>' + html + '</div>'
                        }
                    },
                    {field: 'create_time', minWidth: 100, title: '创建时间', search: 'range'},
                ]],
                done: function () {
                    layui.element.render('collapse')
                }
            });
            ea.listen();
        },
    };
});
