<?php

namespace PhpTheme\CoolAdminTheme;

class MobileMainMenu extends MainMenu
{

    protected $menuItemClass = MobileMainMenuItem::class; 

    public $defaultOptions = [
        'class' => 'navbar-mobile__list list-unstyled',
    ];

}