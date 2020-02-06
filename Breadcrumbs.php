<?php

namespace PhpTheme\Themes\CoolAdmin;

class Breadcrumbs extends \PhpTheme\Core\Widget
{

    public $theme;

    public $items = [];

    public $actionMenu;

    public $actionMenuOptions = [];

    public $title = 'You are here:';

    public function toString() : string
    {
        if (!$this->items && !$this->actionMenu)
        {
            return '';
        }

        if ($this->actionMenu)
        {
            $options = $this->actionMenuOptions;

            $options['items'] = $this->actionMenu;

            $actionMenu = $this->theme->actionMenu($options);
        }
        else
        {
            $actionMenu = '';
        }

        return $this->render('breadcrumbs', [
            'items' => $this->items,
            'actionMenu' => $actionMenu,
            'title' => $this->title
        ]);
    }

}