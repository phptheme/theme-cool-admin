<?php

namespace PhpTheme\Themes\CoolAdmin;

use PhpTheme\Core\HtmlHelper;

class GridCellBoolean extends \PhpTheme\Themes\Bootstrap4\GridCellBoolean
{

    public function toString() : string
    {
        if ($this->content)
        {
            $this->attributes = HtmlHelper::mergeAttributes($this->attributes, ['class' => ['process']]);
        }
        else
        {
            $this->attributes = HtmlHelper::mergeAttributes($this->attributes, ['class' => ['denied']]);
        }

        return parent::toString();
    }

}