<?php

namespace PhpTheme\CoolAdminTheme;

class ActionsMenu extends Menu
{

    public $tag = 'div';

    public $defaultOptions = [
        'class' => 'text-right action-menu'
    ];

    public $defaultItem = [
        'tag' => false,
        'linkIconTemplate' => '<i class="{icon}"></i><span class="bot-line"></span><span class="d-none d-sm-inline"> {label}</span>',
        'defaultLinkOptions' => [
            'class' => 'btn btn-secondary'
        ]
    ];

}