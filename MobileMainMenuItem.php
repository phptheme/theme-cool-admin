<?php

namespace PhpTheme\CoolAdminTheme;

class MobileMainMenuItem extends MainMenuItem
{

    const SUBMENU = MobileMainMenu::class;

    public $defaultSubmenu = [
        'defaultOptions' => [
            'class' => 'navbar-mobile-sub__list list-unstyled js-sub-list'
        ]
    ];

}