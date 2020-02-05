<?php

namespace PhpTheme\CoolAdminTheme;

class LoginLayout extends \PhpTheme\Core\Widget
{

    public $title;

    public function toString() : string
    {
        return $this->render('login-layout', [
            'content' => $this->content,
            'title' => $this->title
        ]);
    }

}