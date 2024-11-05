@include('admin.layout.head')
<div class="layuimini-container">
    <form id="app-form" class="layui-form layuimini-form">
        
        <div class="layui-form-item">
            <label class="layui-form-label">角色权限ID</label>
            <div class="layui-input-block">
                <input type="text" name="auth_ids" class="layui-input"  placeholder="请输入角色权限ID" value="{{$row['auth_ids']}}">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">头像</label>
            <div class="layui-input-block">
                <input type="text" name="head_img" class="layui-input"  placeholder="请输入头像" value="{{$row['head_img']}}">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">用户登录名</label>
            <div class="layui-input-block">
                <input type="text" name="username" class="layui-input" lay-verify="required" placeholder="请输入用户登录名" value="{{$row['username']}}">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">用户登录密码</label>
            <div class="layui-input-block">
                <input type="text" name="password" class="layui-input" lay-verify="required" placeholder="请输入用户登录密码" value="{{$row['password']}}">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">联系手机号</label>
            <div class="layui-input-block">
                <input type="text" name="phone" class="layui-input"  placeholder="请输入联系手机号" value="{{$row['phone']}}">
            </div>
        </div>
        <div class="layui-form-item layui-form-text">
            <label class="layui-form-label">备注说明</label>
            <div class="layui-input-block">
                <textarea name="remark" class="layui-textarea"  placeholder="请输入备注说明">{{$row['remark']}}</textarea>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">登录次数</label>
            <div class="layui-input-block">
                <input type="text" name="login_num" class="layui-input"  placeholder="请输入登录次数" value="{{$row['login_num']}}">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">排序</label>
            <div class="layui-input-block">
                <input type="text" name="sort" class="layui-input"  placeholder="请输入排序" value="{{$row['sort']}}">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">状态(0:禁用,1:启用,)</label>
            <div class="layui-input-block">
                <input type="text" name="status" class="layui-input" lay-verify="required" placeholder="请输入状态(0:禁用,1:启用,)" value="{{$row['status']}}">
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
