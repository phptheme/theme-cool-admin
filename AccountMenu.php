<?php

namespace PhpTheme\Themes\CoolAdmin;

class AccountMenu extends \PhpTheme\Bootstrap4\Menu
{

    public $tag = 'div';

    public $attributes = [
        'class' => 'account-dropdown__body'
    ];

    public $itemOptions = [
        'tag' => 'div',
        'attributes' => [
            'class' => 'account-dropdown__item'
        ]
    ];

    public $renderEmpty = false;

}