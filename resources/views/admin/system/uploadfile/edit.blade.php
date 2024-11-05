@include('admin.layout.head')
<div class="layuimini-container">
    <form id="app-form" class="layui-form layuimini-form">
        
        <div class="layui-form-item">
            <label class="layui-form-label">文件原名</label>
            <div class="layui-input-block">
                <input type="text" name="original_name" class="layui-input"  placeholder="请输入文件原名" value="{{$row['original_name']}}">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">物理路径</label>
            <div class="layui-input-block">
                <input type="text" name="url" class="layui-input" lay-verify="required" placeholder="请输入物理路径" value="{{$row['url']}}">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">宽度</label>
            <div class="layui-input-block">
                <input type="text" name="image_width" class="layui-input" lay-verify="required" placeholder="请输入宽度" value="{{$row['image_width']}}">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">高度</label>
            <div class="layui-input-block">
                <input type="text" name="image_height" class="layui-input" lay-verify="required" placeholder="请输入高度" value="{{$row['image_height']}}">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">图片类型</label>
            <div class="layui-input-block">
                <input type="text" name="image_type" class="layui-input" lay-verify="required" placeholder="请输入图片类型" value="{{$row['image_type']}}">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">图片帧数</label>
            <div class="layui-input-block">
                <input type="text" name="image_frames" class="layui-input" lay-verify="required" placeholder="请输入图片帧数" value="{{$row['image_frames']}}">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">mime类型</label>
            <div class="layui-input-block">
                <input type="text" name="mime_type" class="layui-input" lay-verify="required" placeholder="请输入mime类型" value="{{$row['mime_type']}}">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">文件大小</label>
            <div class="layui-input-block">
                <input type="text" name="file_size" class="layui-input" lay-verify="required" placeholder="请输入文件大小" value="{{$row['file_size']}}">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">文件 sha1编码</label>
            <div class="layui-input-block">
                <input type="text" name="sha1" class="layui-input" lay-verify="required" placeholder="请输入文件 sha1编码" value="{{$row['sha1']}}">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">更新时间</label>
            <div class="layui-input-block">
                <input type="text" name="update_time" class="layui-input"  placeholder="请输入更新时间" value="{{$row['update_time']}}">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">上传时间</label>
            <div class="layui-input-block">
                <input type="text" name="upload_time" class="layui-input"  placeholder="请输入上传时间" value="{{$row['upload_time']}}">
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
