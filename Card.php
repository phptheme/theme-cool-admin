<?php

namespace PhpTheme\CoolAdminTheme;

class Card extends \PhpTheme\Core\Widget
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