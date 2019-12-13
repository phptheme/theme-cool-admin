<?php

namespace PhpTheme\CoolAdminTheme;

class LoginLayout extends \PhpTheme\Core\ThemeWidget
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