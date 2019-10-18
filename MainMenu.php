<?php

namespace PhpTheme\CoolAdminTheme;

use PhpTheme\Html\HtmlHelper;

class MainMenu extends Menu
{

    const MENU_ITEM = MainMenuItem::class;

    public $tag = 'ul';

    public $defaultOptions = [
        'class' => 'list-unstyled',
    ];

    public $defaultItem = [
        'tag' => 'li',
        'activeOptions' => [
            'class' => ['active']
        ],
        'defaultLink' => [
            'iconTemplate' => '<i class="{icon}"></i><span class="bot-line"></span> {label}'
        ]
    ];

    public function createItem(array $item = [])
    {
        if (is_array($item) && !empty($item['items']))
        {
            $item = HtmlHelper::mergeAttributes($item, [
                'options' => [
                    'class' => [
                        'has-sub'
                    ]
                ],
                'linkOptions' => [
                    'class' => 'js-arrow', // mobile menu
                    'onclick' => 'return false;'
                ]
            ]);
        }

        return parent::createItem($item);
    }

}