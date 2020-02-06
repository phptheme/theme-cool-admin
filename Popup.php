<?php

namespace PhpTheme\Themes\CoolAdmin;

class Popup extends \PhpTheme\Core\Widget
{

    public $id;

    public $title;

    public $content;

    public $footer;

    public $closeButtonLabel = 'Close';

    public $cancelButtonLabel = 'Cancel';

    public function toString() : string
    {
        return $this->render('popup', [
            'id' => $this->id,
            'title' => $this->title,
            'content' => $this->content,
            'footer' => $this->footer,
            'closeButtonLabel' => $this->closeButtonLabel,
            'cancelButtonLabel' => $this->cancelButtonLabel
        ]);
    }

}
