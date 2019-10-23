<?php

namespace PhpTheme\CoolAdminTheme;

class MobileMainMenu extends MainMenu
{

    const MENU_ITEM = MobileMainMenuItem::class; 

    public $attributes = [
        'class' => 'navbar-mobile__list list-unstyled',
    ];

}