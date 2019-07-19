<?php

namespace PhpTheme\CoolAdminTheme;

use PhpTheme\Helpers\Html;

class MainMenu extends Menu
{

    protected $menuItemClass = MainMenuItem::class;

    public $tag = 'ul';

    public $defaultOptions = [
        'class' => 'list-unstyled',
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
                        'class' => 'js-arrow', // mobile menu
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