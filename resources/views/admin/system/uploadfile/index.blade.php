@include('admin.layout.head')
<div class="layuimini-container">
    <div class="layuimini-main">
        <table id="currentTable" class="layui-table layui-hide"
               data-auth-add="{{auths('system.uploadfile/add')}}"
               data-auth-edit="{{auths('system.uploadfile/edit')}}"
               data-auth-delete="{{auths('system.uploadfile/delete')}}"
               lay-filter="currentTable">
        </table>
    </div>
</div>

<script>
    let notes = JSON.parse('{!! json_encode($notes,256) !!}');
</script>

@include('admin.layout.foot')
