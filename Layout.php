<?php

namespace PhpTheme\CoolAdminTheme;

class Layout extends \PhpTheme\Core\ThemeWidget
{

    public $title;

    public function toString() : string
    {
        return $this->render('layout', [
            'content' => $this->content,
            'title' => $this->title
        ]);
    }

}