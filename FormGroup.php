<?php

namespace PhpTheme\CoolAdminTheme;

class FormGroup extends \PhpTheme\Core\ThemeWidget
{

    public $label;

    public $error;

    public $hint;

    public function toString() : string
    {
        return $this->render('form-group', [
            'content' => $this->content,
            'label' => $this->label,
            'error' => $this->error,
            'hint' => $this->hint
        ]);
    }

}