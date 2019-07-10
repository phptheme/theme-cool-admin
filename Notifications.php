<?php

namespace PhpTheme\CoolAdminTheme;

use PhpTheme\Core\Html;

class Notifications extends Menu
{

    const MENU_ITEM = NotificationsItem::class;

    public $title = ''; // 3 Notifications

    public $footer = ''; // <a href="#">All notifications</a>

    public $tag = null;

    public $itemTag = 'div';

    public $defaultItemOptions = [
        'class' => 'notifi__item'
    ];

    public $defaultOptions = [
        'class' => 'header-button-item js-item-menu'
    ];

    public function run()
    {
        $content = parent::run();

        $options = Html::mergeOptions($this->defaultOptions, $this->options);

        if (count($this->items) > 0)
        {
            $options = Html::mergeOptions($options, ['class' => ['has-noti']]);
        }

        return $this->render('notifications', [
            'content' => $content,
            'footer' => $this->footer,
            'title' => $this->title,
            'options' => $options
        ]);
    }

}