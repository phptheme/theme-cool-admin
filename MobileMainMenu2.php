<?php

namespace PhpTheme\Themes\CoolAdmin;

class MobileMainMenu2 extends \PhpTheme\Bootstrap4\Menu
{

    const MENU_ITEM = MobileMainMenuItem2::class; 

    public $defaultAttributes = ['class' => 'navbar-mobile-sub__list list-unstyled js-sub-list'];

    public $tag = 'ul';

}