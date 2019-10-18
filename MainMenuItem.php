<?php

namespace PhpTheme\CoolAdminTheme;

class MainMenuItem extends MenuItem
{

    const SUBMENU = MainMenu::class;

    public $defaultSubmenu = [
        'defaultOptions' => [
            'class' => 'header3-sub-list list-unstyled'
        ]
    ];

}