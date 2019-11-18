<?php

namespace PhpTheme\CoolAdminTheme;

class NotificationsItem extends \PhpTheme\Bootstrap4\MenuItem
{

    public $icon;

    public $date;

    public $url;

    public function toString() : string
    {
        return $this->render('notifications-item', [
            'icon' => $this->icon,
            'date' => $this->date,
            'url' => $this->url,
            'label' => $this->label
        ]);
    }

}