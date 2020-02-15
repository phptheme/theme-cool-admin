<?php

namespace PhpTheme\Themes\CoolAdmin;

use PhpTheme\Core\HtmlHelper;

class MobileMainMenuItem extends \PhpTheme\Bootstrap4\MenuItem
{

    const MENU = MobileMainMenu2::class;

    protected function createLink(array $options = [])
    {
        if ($this->items)
        {
            $options = HtmlHelper::mergeOptions($options, [
                'attributes' => [
                    'class' => ['js-arrow']
                ]
            ]);
        }

        return parent::createLink($options);
    }

    public function toString() : string
    {
        if ($this->items)
        {
            $this->attributes = HtmlHelper::mergeOptions($this->attributes, [
                'class' => ['has-sub']
            ]);
        }

        return parent::toString();
    }

}