<?php

namespace PhpTheme\CoolAdminTheme;

class MobileMainMenuItem extends MainMenuItem
{

    protected $submenuClass = MobileMainMenu::class;

    public $defaultSubmenu = [
        'options' => [
            'class' => 'navbar-mobile-sub__list list-unstyled js-sub-list'
        ]
    ];

}