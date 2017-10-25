# LaravelAdminMenu
<p>基于Laravel 后台管理菜单生成组件<p>


# 截图

<p>菜单展开</p>

<img src="https://laravip.com/github/admin-menu1.png">

<p>菜单折叠</p>
<img src="https://laravip.com/github/admin-menu2.png">

# 安装
````
composer require laramall/laravel-admin-menu
````

# 系统要求
````
php >=7.0
laravel >= 5.4
````

# 配置
````
php artisan vendor:publish --provider="LaraMall\Admin\Menu\MenuServiceProvier"

//菜单的配置文件在 config/menu.php
//first  为一级菜单
//second 为二级菜单

````

# 使用
````
//输出带html标签的后台菜单
Menu::links()
````

# 其他说明
<p>安装包不包含后台模板 </p>

