<?php

namespace LaraMall\Admin\Menu\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Mews\Captcha
 */
class Menu extends Facade {

    /**
     * @return string
     */
    protected static function getFacadeAccessor() 
    { 
    	return 'menu';
    }

}
