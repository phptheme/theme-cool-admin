<?php

namespace PhpTheme\CoolAdminTheme;

class Layout extends \PhpTheme\Core\Widget
{

    public $title;

    public $lang;

    public $head;

    public $beginBody;

    public $endBody;

    public function run()
    {
        return $this->render('layout', [
            'content' => $this->content,
            'title' => $this->title,
            'lang' => $this->lang,
            'head' => $this->head,
            'beginBody' => $this->beginBody,
            'endBody' => $this->endBody
        ]);
    }

}