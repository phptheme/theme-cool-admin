<?php

namespace PhpTheme\CoolAdminTheme;

class MobileMainMenuItem extends \PhpTheme\Bootstrap4\MainMenuItem
{

    const SUBMENU = MobileMainMenu::class;

    public $submenuOptions = [
        'attributes' => [
            'class' => 'navbar-mobile-sub__list list-unstyled js-sub-list'
        ]
    ];

}