<?php

namespace PhpTheme\CoolAdminTheme;

class LoginLayout extends \PhpTheme\Core\Widget
{

    public $title;

    public $lang;

    public function run()
    {
        return $this->render('login-layout', [
            'content' => $this->content,
            'title' => $this->title,
            'lang' => $this->lang
        ]);
    }

}