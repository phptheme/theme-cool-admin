<?php

namespace PhpTheme\Themes\CoolAdmin;

class MobileMainMenu extends \PhpTheme\Bootstrap4\MainMenu
{

    const MENU_ITEM = MobileMainMenuItem::class; 

    public $attributes = [
        'class' => 'navbar-mobile__list list-unstyled',
    ];

}