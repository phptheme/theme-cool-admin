<?php

namespace PhpTheme\Themes\CoolAdmin;

class Layout extends \PhpTheme\Core\Widget
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