<?php

namespace PhpTheme\CoolAdminTheme;

class AccountMenu extends Menu
{

    public $tag = 'div';

    public $defaultOptions = [
        'class' => 'account-dropdown__body'
    ];

    public $defaultItem = [
        'tag' => 'div',
        'defaultOptions' => [
            'class' => 'account-dropdown__item'
        ]
    ];

    public $renderEmpty = false;

}