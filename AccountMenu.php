<?php

namespace PhpTheme\CoolAdminTheme;

class AccountMenu extends Menu
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