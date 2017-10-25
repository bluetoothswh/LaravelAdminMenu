<?php

namespace LaraMall\Admin\Menu;

use Illuminate\Support\ServiceProvider;

class MenuServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {   
        
        //发布配置文件
        $this->publishes([
            __DIR__.'/config/menu.php' => config_path('menu.php'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/config/menu.php', 'menu'
        );
        $this->app->bind('menu','LaraMall\Admin\Menu\Menu');
    }
}
