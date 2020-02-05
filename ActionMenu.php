<?php

namespace PhpTheme\CoolAdminTheme;

class ActionMenu extends \PhpTheme\Bootstrap4\Menu
{

    public $tag = 'div';

    public $attributes = [
        'class' => 'text-right action-menu'
    ];

    public $itemOptions = [
        'tag' => false,
        'iconTemplate' => '<i class="{icon}"></i><span class="bot-line"></span><span class="d-none d-sm-inline"> {label}</span>',
        'linkAttributes' => [
            'class' => 'btn btn-secondary'
        ]        
    ];

}