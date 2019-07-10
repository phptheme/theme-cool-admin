<?php

namespace PhpTheme\CoolAdminTheme;

class OptionsMenu extends Menu
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

    public function run()
    {
        $content = parent::run();

        return $this->render('options-menu', [
            'content' => $content
        ]);
    }

}