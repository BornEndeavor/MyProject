@include('admin.layout.head')
<div class="layuimini-container">
    <form id="app-form" class="layui-form layuimini-form">
        
        <div class="layui-form-item">
            <label class="layui-form-label">父id</label>
            <div class="layui-input-block">
                <input type="text" name="pid" class="layui-input" lay-verify="required" placeholder="请输入父id" value="{{$row['pid']}}">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">名称</label>
            <div class="layui-input-block">
                <input type="text" name="title" class="layui-input" lay-verify="required" placeholder="请输入名称" value="{{$row['title']}}">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label required">菜单图标</label>
            <div class="layui-input-block layuimini-upload">
                <input name="icon" class="layui-input layui-col-xs6" lay-verify="required"  placeholder="请上传菜单图标" value="{{$row['icon']}}">
                <div class="layuimini-upload-btn">
                    <span><a class="layui-btn" data-upload="icon" data-upload-number="one" data-upload-exts="png|jpg|ico|jpeg" data-upload-icon="image"><i class="fa fa-upload"></i> 上传</a></span>
                    <span><a class="layui-btn layui-btn-normal" id="select_icon" data-upload-select="icon" data-upload-number="one" data-upload-mimetype="image/*"><i class="fa fa-list"></i> 选择</a></span>
                </div>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">链接</label>
            <div class="layui-input-block">
                <input type="text" name="href" class="layui-input" lay-verify="required" placeholder="请输入链接" value="{{$row['href']}}">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">链接参数</label>
            <div class="layui-input-block">
                <input type="text" name="params" class="layui-input"  placeholder="请输入链接参数" value="{{$row['params']}}">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">链接打开方式</label>
            <div class="layui-input-block">
                <input type="text" name="target" class="layui-input" lay-verify="required" placeholder="请输入链接打开方式" value="{{$row['target']}}">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">菜单排序</label>
            <div class="layui-input-block">
                <input type="text" name="sort" class="layui-input"  placeholder="请输入菜单排序" value="{{$row['sort']}}">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">状态(0:禁用,1:启用)</label>
            <div class="layui-input-block">
                <input type="text" name="status" class="layui-input" lay-verify="required" placeholder="请输入状态(0:禁用,1:启用)" value="{{$row['status']}}">
            </div>
        </div>
        <div class="layui-form-item layui-form-text">
            <label class="layui-form-label">remark</label>
            <div class="layui-input-block">
                <textarea name="remark" class="layui-textarea"  placeholder="请输入remark">{{$row['remark']}}</textarea>
            </div>
        </div>
        <div class="hr-line"></div>
        <div class="layui-form-item text-center">
            <button type="submit" class="layui-btn layui-btn-normal layui-btn-sm" lay-submit>确认</button>
            <button type="reset" class="layui-btn layui-btn-primary layui-btn-sm">重置</button>
        </div>

    </form>
</div>
@include('admin.layout.foot')
