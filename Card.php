<?php

namespace PhpTheme\CoolAdminTheme;

class Card extends \PhpTheme\Core\ThemeWidget
{

    public $header;

    public $footer;

    public function toString() : string
    {
        return $this->render('card', [
            'content' => $this->content,
            'header' => $this->header,
            'footer' => $this->footer
        ]);
    }

}