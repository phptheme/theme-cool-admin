<?php

namespace PhpTheme\CoolAdminTheme;

class MainMenuItem extends MenuItem
{

    protected $submenuClass = MainMenu::class;

    public $defaultSubmenu = [
        'options' => [
            'class' => 'header3-sub-list list-unstyled'
        ]
    ];

}