define(["jquery", "easy-admin"], function ($, ea) {

    var init = {
        table_elem: '#currentTable',
        table_render_id: 'currentTableRenderId',
        index_url: 'system.uploadfile/index',
        add_url: 'system.uploadfile/add',
        edit_url: 'system.uploadfile/edit',
        delete_url: 'system.uploadfile/delete',
        export_url: 'system.uploadfile/export',
        modify_url: 'system.uploadfile/modify',
    };

    return Controller = {

        index: function () {
            ea.table.render({
                init: init,
                cols: [[
                    {type: 'checkbox'},                    {field: 'id', title: 'ID'},                    {field: 'original_name', title: '文件原名'},                    {field: 'url', title: '物理路径'},                    {field: 'image_width', title: '宽度'},                    {field: 'image_height', title: '高度'},                    {field: 'image_type', title: '图片类型'},                    {field: 'image_frames', title: '图片帧数'},                    {field: 'mime_type', title: 'mime类型'},                    {field: 'file_size', title: '文件大小'},                    {field: 'sha1', title: '文件 sha1编码'},                    {field: 'create_time', title: '创建日期'},                    {field: 'update_time', title: '更新时间'},                    {field: 'upload_time', title: '上传时间'},                    {width: 250, title: '操作', templet: ea.table.tool},
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
