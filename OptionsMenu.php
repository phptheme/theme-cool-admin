<?php

namespace PhpTheme\Themes\CoolAdmin;

class OptionsMenu extends \PhpTheme\Bootstrap4\Menu
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

    public $template = '<div class="header-button-item js-item-menu"><i class="zmdi zmdi-settings"></i><div class="setting-dropdown js-dropdown">{menu}</div></div>';

    public function toString() : string
    {
        $content = parent::toString();

        return strtr($this->template, ['{menu}' => $content]);
    }

}