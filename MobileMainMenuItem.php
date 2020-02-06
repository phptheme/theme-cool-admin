<?php

namespace PhpTheme\Themes\CoolAdmin;

class MobileMainMenuItem extends \PhpTheme\Bootstrap4\MainMenuItem
{

    const SUBMENU = MobileMainMenu::class;

    public $submenuOptions = [
        'attributes' => [
            'class' => 'navbar-mobile-sub__list list-unstyled js-sub-list'
        ]
    ];

}