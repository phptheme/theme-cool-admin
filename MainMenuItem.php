<?php

namespace PhpTheme\Themes\CoolAdmin;

class MainMenuItem extends \PhpTheme\Bootstrap4\MenuItem
{

    const SUBMENU = MainMenu::class;

    public $submenuOptions = [
        'attributes' => [
            'class' => 'header3-sub-list list-unstyled'
        ]
    ];

}