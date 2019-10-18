<?php

namespace PhpTheme\CoolAdminTheme;

class Breadcrumbs extends \PhpTheme\Core\Widget
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

        if ($this->actionsMenu)
        {
            $actionsMenu = $this->theme->actionsMenu($this->actionsMenu);
        }
        else
        {
            $actionsMenu = '';
        }

        return $this->render('breadcrumbs', [
            'items' => $this->items,
            'actionsMenu' => $actionsMenu,
            'title' => $this->title
        ]);
    }

}