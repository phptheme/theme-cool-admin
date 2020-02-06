<?php

namespace PhpTheme\Themes\CoolAdmin;

use PhpTheme\Core\HtmlHelper;

class MainMenu extends \PhpTheme\Bootstrap4\Menu
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

    public function createItem($item = [])
    {
        if (is_array($item) && !empty($item['items']))
        {
            $item = HtmlHelper::mergeOptions($item, [
                'attributes' => [
                    'class' => [
                        'has-sub'
                    ]
                ],
                'linkAttributes' => [
                    'class' => 'js-arrow', // mobile menu
                    'onclick' => 'return false;'
                ]
            ]);
        }

        return parent::createItem($item);
    }

}