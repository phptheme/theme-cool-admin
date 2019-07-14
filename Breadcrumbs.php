<?php

namespace PhpTheme\CoolAdminTheme;

class Breadcrumbs extends \PhpTheme\Bootstrap4\Menu
{

    public $items = [];

    public $actionsMenu;

    public $title = 'You are here:';

    public function run()
    {
        if (!$this->items && !$this->actionsMenu)
        {
            return;
        }

        return $this->render('breadcrumbs', [
            'items' => $this->items,
            'actionsMenu' => $this->theme->actionsMenu($this->actionsMenu),
            'title' => $this->title
        ]);
    }

}