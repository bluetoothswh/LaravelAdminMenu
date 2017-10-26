<?php
namespace LaraMall\Admin\Menu;

class Menu
{   
    protected $first;
    protected $second;
	/*
    |-------------------------------------------------------------------------------
    |
    | 构造函数
    |
    |-------------------------------------------------------------------------------
    */
    public function __construct()
    {
        $this->first    = config('menu.first');
        $this->second   = config('menu.second');

    }


    /*
    |-------------------------------------------------------------------------------
    |
    | 获取属性值
    |
    |-------------------------------------------------------------------------------
    */
    public function get($key)
    {
        return ($this->$key) ? $this->$key : 'false';
    }



    /*
    |-------------------------------------------------------------------------------
    |
    | 生成后台所需要的菜单
    |
    |-------------------------------------------------------------------------------
    */
    public function links()
    {
        $str    = '';
        foreach($this->first as $firstItem){
            $str .= $this->toList() 
                 . $this->toLink($firstItem)
                 . $this->subMenu($firstItem);
        }
        return $str.'</li>';
    }

    /*
    |-------------------------------------------------------------------------------
    |
    | 生成ul >li html 元素
    |
    |-------------------------------------------------------------------------------
    */
    public function toList()
    {
        return '<li class="m-menu__item  m-menu__item--submenu" '
               .'aria-haspopup="true" '
               .' data-menu-submenu-toggle="hover">';
    }

    /*
    |-------------------------------------------------------------------------------
    |
    | 生成 ul > li > a html 元素
    |
    |-------------------------------------------------------------------------------
    */
    public function toLink($item)
    {
        return '<a  href="#" class="m-menu__link m-menu__toggle">'
              .$item['icon']
              .'<span class="m-menu__link-text">'
              .$item['name']
              .'</span>'
              .'<i class="m-menu__ver-arrow la la-angle-right"></i>'
              .'</a>';
    }

    /*
    |-------------------------------------------------------------------------------
    |
    | 生成 二级菜单
    |
    |-------------------------------------------------------------------------------
    */
    public function subMenu($item)
    {
        $str     = '<div class="m-menu__submenu">'
                 .'<span class="m-menu__arrow"></span>'
                 .'<ul class="m-menu__subnav">';
        //获取二级菜单列表
        $subList  = $this->second[$item['page']];
        foreach($subList as $secondItem)
        {
            $str .= $this->subList($secondItem);
        }

        return $str.'</ul></div>';
    }


    /*
    |-------------------------------------------------------------------------------
    |
    | 生成 二级菜单  list
    |
    |-------------------------------------------------------------------------------
    */
    public function subList($item)
    {
        return '<li class="m-menu__item " aria-haspopup="true" >'
              .'<a  href="'
              .$item['url']
              .'" class="m-menu__link ">'
              .'<i class="m-menu__link-bullet m-menu__link-bullet--dot">'
              .'<span></span>'
              .'</i>'
              .'<span class="m-menu__link-text">'
              .$item['name']
              .'</span>'
              .'</a>'
              .'</li>';
    }
}