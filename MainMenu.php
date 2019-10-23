<?php

namespace PhpTheme\CoolAdminTheme;

use PhpTheme\Html\HtmlHelper;

class MainMenu extends Menu
{

    const MENU_ITEM = MainMenuItem::class;

    public $tag = 'ul';

    public $attributes = [
        'class' => 'list-unstyled',
    ];

    public $itemOptions = [
        'tag' => 'li',
        'activeAttributes' => [
            'class' => ['active']
        ],
        'linkOptions' => [
            'iconTemplate' => '<i class="{icon}"></i><span class="bot-line"></span> {label}'
        ]
    ];

    public function createItem(array $item = [])
    {
        if (is_array($item) && !empty($item['items']))
        {
            $item = HtmlHelper::mergeOptions($item, [
                'attributes' => [
                    'class' => [
                        'has-sub'
                    ]
                ],
                'linkOptions' => [
                    'attributes' => [
                        'class' => 'js-arrow', // mobile menu
                        'onclick' => 'return false;'
                    ]
                ]
            ]);
        }

        return parent::createItem($item);
    }

}