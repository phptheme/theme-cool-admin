<?php

namespace PhpTheme\CoolAdminTheme;

class OptionsMenu extends Menu
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

    public function render()
    {
        $content = parent::render();

        return strtr($this->template, ['{menu}' => $content]);
    }

}