<?php

namespace PhpTheme\CoolAdminTheme;

use PhpTheme\Core\Html;

class MainMenu extends Menu
{

    const MENU_ITEM = MainMenuItem::class;

    public $tag = 'ul';

    public $defaultOptions = [
        'class' => 'navbar-mobile__list list-unstyled',
    ];

    public $defaultItem = [
        'tag' => 'li',
        'activeOptions' => [
            'class' => ['active']
        ],
        'iconTemplate' => '<i class="{icon}"></i><span class="bot-line"></span> {label}'
    ];

    protected function prepareItems($items)
    {
        foreach($items as $key => $value)
        {
            if(!empty($value['items']))
            {
                $items[$key] = Html::mergeOptions($items[$key], [
                    'options' => [
                        'class' => [
                            'has-sub'
                        ]
                    ],
                    'linkOptions' => [
                        'onclick' => 'return false;'
                    ]
                ]);
            }
        }

        return $items;
    }

    public function run()
    {
        $this->items = $this->prepareItems($this->items);

        $content = parent::run();

        return $this->render('main-menu', [
            'content' => $content
        ]);
    }

}