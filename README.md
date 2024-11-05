## 项目使用说明

### 通过`git`下载安装包

git clone https://github.com/BornEndeavor/MyProject.git

### 安装依赖包（确保 PHP 版本 >= 8.2 如需要本地上传则须装 fileinfo 扩展）

在根目录下 composer install ，如果有报错信息可以使用命令 composer install --ignore-platform-reqs

### 拷贝 .example.env 文件重命名为 .env
cp .example.env .env ，修改数据库账号密码参数

### 设置 APP_KEY 
php artisan key:generate

### 启用服务
php artisan serve

### 导入数据库文件myadmin.sql
路径：位于/resources/sql目录下
导入完毕后，注意检查配置文件中数据库名称、地址等确保能正常连接该库

### 项目实现功能点示例如下：

#### 1.登录界面：
（只有admin能登录）

![image1.png](resources%2Fimages%2Fimage1.png)


#### 2.登录后页面：
（可查看Laravel和PHP、Mysql等版本）

![image2.png](resources%2Fimages%2Fimage2.png)

#### 3.管理员管理页:
![image4.png](resources%2Fimages%2Fimage4.png)

#### 4.角色管理页:
![image4.png](resources%2Fimages%2Fimage4.png)

#### 5.日志管理页:
![image5.png](resources%2Fimages%2Fimage5.png)

#### 6.SQL查询页:
![image6.png](resources%2Fimages%2Fimage6.png)

#### 7.SQL执行结果:
![image7.png](resources%2Fimages%2Fimage7.png)

#### 8.语句操作类型不是select进行错误提示:
![image8.png](resources%2Fimages%2Fimage8.png)

#### 9.日志和查询结果导出:
![image9.png](resources%2Fimages%2Fimage9.png)
